<?php
include "conexiune.php"; 

$data = $_POST['data'] ?? '2026-01-01';
// preia data din formular; daca nu exista foloseste o valoare implicita

$rata = $_POST['rata'] ?? '3.10';
// preia rata din formular; daca nu exista folosește o valoare implicita

if (isset($_POST['modifica'])) {
// verifica daca a fost apasat butonul Salveaza curs

    $sql = "INSERT INTO curs_valutar (data, rata)
            VALUES ('$data', $rata)
            ON DUPLICATE KEY UPDATE rata = $rata";
    // inserează cursul daca data nu exista
    // sau actualizeaza rata daca data exista deja

    try {
        $conn->query($sql);
        // executa interogarea SQL

        echo "<p style='color:green;'>Curs adăugat/modificat!</p>";
        // afiseaza mesaj de succes

    } catch (mysqli_sql_exception $e) {
        // prinde eroarea generata de trigger

        echo "<p style='color:red;'>Nu se poate modifica cursul pentru aceasta dată deoarece există rezervari confirmate.</p>";
        // afiaează mesaj de eroare
    }
}
?>

<h2>Modificare curs valutar</h2>

<form method="post">
    Data: <input type="date" name="data" value="<?php echo $data; ?>">
    <br><br>
    Rata: <input type="number" step="0.01" name="rata" value="<?php echo $rata; ?>">
      <br><br>
     <button name="modifica">Salvează curs</button>


</form>
<br>
<div align="left">
    <a href="index.php">⬅ Inapoi la pagina principala</a>
</div>
