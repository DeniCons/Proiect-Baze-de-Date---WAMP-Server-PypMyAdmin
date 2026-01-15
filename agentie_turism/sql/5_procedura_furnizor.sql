USE agentie_turism;

DELIMITER $$

CREATE PROCEDURE raport_furnizor(IN fid INT)
BEGIN --marcheaza inceputul unui bloc de instructiuni
   SELECT 
     SUM(CASE WHEN status='confirmat' THEN suma_lei ELSE 0 END) AS total_incasari,
     SUM(CASE WHEN status='anulat' THEN suma_lei ELSE 0 END) AS total_rambursari
   FROM rezervari
   WHERE id_furnizor = fid;
END$$

DELIMITER ;
