<?php

namespace App\Services;

use GuzzleHttp\Client;

class MailchimpService
{
    protected $client;
    protected $apiKey;
    protected $listId;

    public function __construct()
    {
        $this->apiKey = env('MAILCHIMP_APIKEY');
        $this->listId = env('MAILCHIMP_LIST_ID');
        $this->client = new Client(['base_uri' => 'https://<dc>.api.mailchimp.com/3.0/']);
    }

    public function addSubscriber($email, $nom, $prenom)
    {
        $response = $this->client->post("lists/{$this->listId}/members", [
            'auth' => ['anystring', $this->apiKey],
            'json' => [
                'email_address' => $email,
                'status' => 'subscribed',
                'merge_fields' => [
                    'FNAME' => $prenom,
                    'LNAME' => $nom,
                ],
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}