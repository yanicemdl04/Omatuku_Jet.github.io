select * from ojc.contacts;


CREATE TABLE reservation (
	id INT PRIMARY KEY auto_increment,
	numero INT,
    numero INT,
    pax INT,
    email varchar(40),
    noms TEXT,
    numero INT
);


-- Créer la base de données
CREATE DATABASE omatopojet_db;

-- Utiliser la base de données
USE omatopojet_db;

-- Créer la table reservations
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lieu_depart VARCHAR(255) NOT NULL,
    lieu_arrivee VARCHAR(255) NOT NULL,
    date_heure DATETIME NOT NULL,
    date_retour DATETIME NULL, -- Nullable car pas toujours présent
    pax INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    nom_prenom VARCHAR(255) NOT NULL,
    numero_telephone VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
