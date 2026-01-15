<?php include "conexiune.php";

$r=$conn->query("
SELECT f.nume
FROM furnizori f
WHERE NOT EXISTS (
SELECT 1 FROM rezervari r
WHERE r.id_furnizor=f.id AND r.status='anulat'
)");

echo "<h2>Furnizori doar cu incasari</h2>";

while($x=$r->fetch_assoc())
 echo $x['nume']."<br>";
?>
<div align="left">
    <a href="index.php">⬅ Inapoi la pagina principala</a>
</div>