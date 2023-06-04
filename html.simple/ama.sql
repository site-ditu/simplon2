CREATE DATABASE INFO;
USE INFO;
CREATE TABLE consult (
    id_part smallint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nom_part VARCHAR(80),
    Prenom_part VARCHAR(180),
    Email_part VARCHAR(150),
    Num_part INT
)