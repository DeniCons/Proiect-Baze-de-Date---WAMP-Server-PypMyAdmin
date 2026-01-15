USE agentie_turism;
CREATE TABLE curs_valutar (
    data DATE PRIMARY KEY,
    rata DECIMAL(4,2) CHECK (rata BETWEEN 1 AND 4)
);

CREATE TABLE furnizori (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nume VARCHAR(50),
    CUI CHAR(6) UNIQUE,
    tip ENUM('hotel','transport','excursie'),
    tara VARCHAR(50)
);

CREATE TABLE clienti (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nume VARCHAR(50),
    prenume VARCHAR(50),
    pasaport CHAR(9) UNIQUE,
    tara VARCHAR(50)
);

CREATE TABLE rezervari (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_client INT,
    id_furnizor INT,
    data DATE,
    suma_valuta DECIMAL(10,2),
    suma_lei DECIMAL(10,2),
    status ENUM('confirmat','anulat'),

    FOREIGN KEY (id_client) REFERENCES clienti(id),
    FOREIGN KEY (id_furnizor) REFERENCES furnizori(id)
);

CREATE TABLE bilant_zilnic (
    data DATE PRIMARY KEY,
    total_intrari DECIMAL(12,2),
    total_iesiri DECIMAL(12,2),
    sold DECIMAL(12,2)
);
