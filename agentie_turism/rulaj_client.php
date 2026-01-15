<?php include "conexiune.php";

if(isset($_POST['id'])){
$id=$_POST['id'];
$r=$conn->query("SELECT rulaj_client($id) total");
$x=$r->fetch_assoc();
echo "Rulaj total: ".$x['total']." lei";
}
?>

<h2>Rulaj client</h2>

<form method="post">
ID client: <input name="id">
<button>Calculeaza</button>
</form>
<div align="left">
    <a href="index.php">⬅ Inapoi la pagina principala</a>
</div>

