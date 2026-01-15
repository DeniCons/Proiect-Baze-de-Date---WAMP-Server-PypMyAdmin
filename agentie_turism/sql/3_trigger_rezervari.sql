
USE agentie_turism;
DROP TRIGGER IF EXISTS trg_calculeaza_lei;

DELIMITER $$

CREATE TRIGGER trg_calculeaza_lei
BEFORE INSERT ON rezervari
FOR EACH ROW
BEGIN
   DECLARE curs DECIMAL(4,2);

   SELECT rata INTO curs
   FROM curs_valutar
   WHERE data = NEW.data
   LIMIT 1;

   IF curs IS NULL THEN
      SIGNAL SQLSTATE '45000'
      SET MESSAGE_TEXT = 'Nu exista curs valutar pentru data selectata!';
   END IF;

   SET NEW.suma_lei = NEW.suma_valuta * curs;
END$$

DELIMITER ;

