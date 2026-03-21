-- SQL Migration Script

CREATE TABLE veiculos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    modelo VARCHAR(255) NOT NULL,
    fabricante VARCHAR(255) NOT NULL,
    ano INT NOT NULL,
    os_id INT,
    FOREIGN KEY (os_id) REFERENCES os(id)
);