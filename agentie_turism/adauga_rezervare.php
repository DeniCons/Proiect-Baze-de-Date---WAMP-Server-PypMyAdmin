<?php include "conexiune.php";

if(isset($_POST['adauga'])){
$idc=$_POST['id_client'];
$idf=$_POST['id_furnizor'];
$data=$_POST['data'];
$suma=$_POST['suma'];
$status=$_POST['status'];

$conn->query("INSERT INTO rezervari(id_client,id_furnizor,data,suma_valuta,status)
VALUES($idc,$idf,'$data',$suma,'$status')");

echo "<p>Rezervare adaugata. Suma lei calculata automat.</p>";
}
?>

<h2>Adauga rezervare</h2>

<form method="post">
ID client:<br>
<input name="id_client"><br><br>

ID furnizor:<br>
<input name="id_furnizor"><br><br>

Data:<br>
<input type="date" name="data"><br><br>

Suma valuta:<br>
<input name="suma"><br><br>

Status:<br>
<select name="status">
    <option value="confirmat">confirmat</option>
    <option value="anulat">anulat</option>
</select><br><br>

<button name="adauga">Adauga</button>
</form>

<br>

<div align="left">
    <a href="index.php">⬅ Inapoi la pagina principala</a>
</div>
