-- create db
CREATE database router_view;
use router_view;

-- CREATE table
CREATE TABLE users (
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255)
   
);

-- them du lieu
INSERT INTO users (Name)
VALUES('Duy'),('Lien'),('Phong'),('Son'),('Mai');
