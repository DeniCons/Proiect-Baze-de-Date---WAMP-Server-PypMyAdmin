<?php include "conexiune.php"; ?>

<h2 align="center">Date existente</h2>

<!-- CLIENTI -->
<h3>Clienti</h3>
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Tara</th>
</tr>
<?php
$r = $conn->query("SELECT * FROM clienti");
while ($x = $r->fetch_assoc()) {
    echo "<tr>
        <td>{$x['id']}</td>
        <td>{$x['nume']}</td>
        <td>{$x['prenume']}</td>
        <td>{$x['tara']}</td>
    </tr>";
}
?>
</table>

<br>

<!-- FURNIZORI -->
<h3>Furnizori</h3>
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Nume</th>
    <th>Tip</th>
    <th>Tara</th>
</tr>
<?php
$r = $conn->query("SELECT * FROM furnizori");
while ($x = $r->fetch_assoc()) {
    echo "<tr>
        <td>{$x['id']}</td>
        <td>{$x['nume']}</td>
        <td>{$x['tip']}</td>
        <td>{$x['tara']}</td>
    </tr>";
}
?>
</table>

<br>

<!-- REZERVARI -->
<h3>Rezervari</h3>
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>ID Client</th>
    <th>ID Furnizor</th>
    <th>Data</th>
    <th>Suma valută</th>
    <th>Suma lei</th>
    <th>Status</th>
</tr>
<?php
$r = $conn->query("SELECT * FROM rezervari");
while ($x = $r->fetch_assoc()) {
    echo "<tr>
        <td>{$x['id']}</td>
        <td>{$x['id_client']}</td>
        <td>{$x['id_furnizor']}</td>
        <td>{$x['data']}</td>
        <td>{$x['suma_valuta']}</td>
        <td>{$x['suma_lei']}</td>
        <td>{$x['status']}</td>
    </tr>";
}
?>
</table>

<br><br>

<div align="center">
    <a href="index.php">⬅ Înapoi la pagina principală</a>
</div>
