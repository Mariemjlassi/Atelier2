<!DOCTYPE html>
<html>
<head>
    <title>Manipulation de chaînes</title>
</head>
<body>
    <form method="post" action="">
        <label for="chaine">Entrez une chaîne de caractères :</label>
        <input type="text" name="chaine" id="chaine">
        <label for="position">Position de départ :</label>
        <input type="number" name="position" id="position" min="0">
        <label for="longueur">Longueur de l'extrait :</label>
        <input type="number" name="longueur" id="longueur" min="1">
        <input type="submit" value="Valider">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chaine = $_POST["chaine"];
        $position = $_POST["position"];
        $longueur = $_POST["longueur"];
  
        $longueurChaine = strlen($chaine);
        echo "Longueur de la chaîne : $longueurChaine<br>";

        if ($position >= 0 && $position < $longueurChaine && $longueur > 0) {
            $sousChaine = substr($chaine, $position, $longueur);
            echo "Sous-chaîne extraite : $sousChaine<br>";
        } else {
            echo "Position de départ ou longueur incorrecte.<br>";
        }

        
        $chaineInverse = strrev($chaine);
        echo "Chaîne inversée : $chaineInverse<br>";
    }
    ?>
</body>
</html>
