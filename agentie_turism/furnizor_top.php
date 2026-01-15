<?php include "conexiune.php";

$r=$conn->query("
SELECT f.nume, COUNT(r.id) nr, SUM(r.suma_lei) profit
FROM furnizori f
JOIN rezervari r ON f.id=r.id_furnizor
WHERE r.status='confirmat'
GROUP BY f.id
ORDER BY nr DESC
LIMIT 1");

$x=$r->fetch_assoc();

echo "<h2>Furnizor top</h2>";
echo "Nume: ".$x['nume']."<br>";
echo "Rezervari: ".$x['nr']."<br>";
echo "Profit: ".$x['profit']." lei";
?>
<div align="left">
    <a href="index.php">⬅ Inapoi la pagina principala</a>
</div>
