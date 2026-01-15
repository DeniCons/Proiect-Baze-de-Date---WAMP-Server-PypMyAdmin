<?php 
include "conexiune.php";

// Verifica daca a fost trimis ID-ul furnizorului din formular
if(isset($_POST['id'])){

    // Preia ID-ul furnizorului din formular
    $id = $_POST['id'];

    // Apeleaza procedura stocata raport_furnizor cu ID-ul furnizorului
    $r = $conn->query("CALL raport_furnizor($id)");

    // Preia rezultatul returnat de procedura sub forma de array asociativ
    $x = $r->fetch_assoc();

    // Afiseaza totalul incasarilor in lei
    echo "Incasari: " . $x['total_incasari'] . " lei<br>";

    // Afiseaza totalul rambursarilor in lei
    echo "Rambursari: " . $x['total_rambursari'] . " lei<br>";
}
?>

<h2>Raport furnizor</h2>
<form method="post">
    ID furnizor: <input name="id">
    <button>Afiseaza</button>
</form>
<div align="left">
    <a href="index.php">⬅ Inapoi la pagina principala</a>
</div>
