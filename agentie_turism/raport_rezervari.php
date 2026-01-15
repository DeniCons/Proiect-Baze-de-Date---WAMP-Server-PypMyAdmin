<?php include "conexiune.php";

$r=$conn->query("
SELECT c.tara, r.data,c.nume, f.nume furnizor, r.suma_lei, r.status
FROM rezervari r
JOIN clienti c ON r.id_client=c.id
JOIN furnizori f ON r.id_furnizor=f.id
ORDER BY c.tara, r.data");
?>

<h2>Raport rezervari</h2>

<table border=1>
<tr><th>Tara</th><th>Data</th><th>Client</th><th>Furnizor</th><th>Suma</th><th>Status</th></tr>

<?php
while($x=$r->fetch_assoc()){
 echo "<tr>
 <td>$x[tara]</td>
 <td>$x[data]</td>
 <td>$x[nume]</td>
 
 <td>$x[furnizor]</td>
 <td>$x[suma_lei]</td>
 <td>$x[status]</td>
 </tr>";
}
?>
</table>
<div align="left">
    <a href="index.php">⬅ Inapoi la pagina principala</a>
</div>
