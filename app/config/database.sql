CREATE DATABASE authentification;
USE authentification;
CREATE Table Users(
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(20),
email VARCHAR(30),
password VARCHAR(20),
role_id INT,
company_id int,
Foreign Key (company_id) REFERENCES Company(id),
Foreign Key (role_id) REFERENCES Roles(id)
);
CREATE TABLE Roles(
    id int AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(20)
);
CREATE Table Company(
    id INT PRIMARY key AUTO_INCREMENT,
    nom VARCHAR(30)
);

