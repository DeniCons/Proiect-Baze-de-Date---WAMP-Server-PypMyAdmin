USE agentie_turism;

INSERT INTO curs_valutar VALUES
('2026-01-01', 3.50),
('2026-01-02', 3.55),
('2026-01-03', 3.60);


INSERT INTO furnizori (nume, CUI, tip, tara) VALUES
('Hotel Sunrise', 'H12345', 'hotel', 'Italia'),
('Sky Transport', 'T54321', 'transport', 'Germania'),
('Fun Tours', 'E99999', 'excursie', 'Spania');

INSERT INTO clienti (nume, prenume, pasaport, tara) VALUES
('Popescu', 'Ion', 'RO1234567', 'Romania'),
('Firescu', 'Matei', 'UK7654321', 'Anglia'),
('Tudor', 'Maria', 'ES1122334', 'Spania');

INSERT INTO rezervari (id_client, id_furnizor, data, suma_valuta, status) VALUES
(1,1,'2026-01-01',200,'confirmat'),
(2,2,'2026-01-01',150,'confirmat'),
(3,3,'2026-01-02',300,'anulat'),
(1,2,'2026-01-02',100,'confirmat'),
(2,1,'2026-01-03',250,'confirmat');
