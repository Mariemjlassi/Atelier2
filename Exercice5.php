<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chaine = $_POST["chaine"];
    $initiales = ucwords($chaine);

    echo " entrée : $chaine<br>";
    echo "Affichage : $initiales<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Initiales en majuscules</title>
</head>
<body>
    <form method="post" action="">
        <label for="chaine">Entrez une chaîne de caractères :</label>
        <input type="text" name="chaine" id="chaine">
        <input type="submit" value="Valider">
    </form>
</body>
</html>

