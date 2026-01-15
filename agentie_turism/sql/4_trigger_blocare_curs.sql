USE agentie_turism;

DELIMITER $$

CREATE TRIGGER trg_blocare_update_curs
BEFORE UPDATE ON curs_valutar
FOR EACH ROW
BEGIN
   IF EXISTS (
      SELECT 1 
      FROM rezervari  
      WHERE data = OLD.data AND status = 'confirmat' ----data cursului înainte de modificare
   ) THEN
      SIGNAL SQLSTATE '45000' -- arunca o eroare personalizata
      SET MESSAGE_TEXT = 'Nu poti modifica cursul pentru zile cu rezervari confirmate!';
   END IF;
END$$

DELIMITER ;
