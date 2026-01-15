--calculează și returnează suma
 --totală (rulajul) a tuturor rezervărilor confirmate pentru un anumit client, pe baza ID-ului acestuia.
USE agentie_turism;

DELIMITER $$


-- functia rulaj client  primeste ca parametru un id de client (cid)
CREATE FUNCTION rulaj_client(cid INT)
RETURNS DECIMAL(12,2)     -- Tipul de date returnat de functie
DETERMINISTIC  -- Indica faptul ca pentru acelasi input, functia returneaza mereu acelasi rezultat
BEGIN

   -- Declara o variabila locala in care se va salva suma totala
   DECLARE total DECIMAL(12,2);

   -- Selecteaza suma tuturor rezervarilor confirmate pentru clientul cu id-ul primit ca parametru
   SELECT SUM(suma_lei)
   INTO total
   FROM rezervari
   WHERE id_client = cid
     AND status = 'confirmat';

   RETURN total;

END$$

DELIMITER ;
