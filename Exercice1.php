<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap.css">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ISETR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Exercice1
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Exercice2.php">Exercice2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Exercice3.php">Exercice3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Exercie4.php">Exercice4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Exercice5.php">Exercice5</a>
        </li>
        
      </ul>
      
    
    </div>
  </div>
</nav>
<div class="container mt-3">
  <?php
  $Notes=array("rami"=>7.50,"Mohamed"=>19.00,"Amira"=>15.5,"Asma"=>10.0,"Ahmed"=>9.50,"yessine"=>15.5,"Islem"=>12.00);
  foreach($Notes as $indice=>$valeur){
    if($valeur>=10){
      echo $indice." ".$valeur."</br>";
    }
  }
  echo"la taille du tableau :". count($Notes)."</br>";
  arsort($Notes);
  foreach($Notes as $indice=>$valeur){
    echo  "l'étudiant qui a une bonne note est:  ".$indice." ".$valeur."</br></br></br>";
    break;
  }
  ?>
  <table class="table">
  <tr class="table-info">
    <th>Nom</th>
    <th>Notes</th>
</tr>
<?php
  $Notes=array("rami"=>7.50,"Mohamed"=>19.00,"Amira"=>15.5,"Asma"=>10.0,"Ahmed"=>9.50,"yessine"=>15.5,"Islem"=>12.00);
  foreach($Notes as $indice=>$valeur){
    echo "<tr>";
    echo "<td>". $indice ."</td>";
    echo "<td>". $valeur ."</td>";
    echo "</tr>";
  }
?>
</table>
<?php
$Notes=array("rami"=>7.50,"Mohamed"=>19.00,"Amira"=>15.5,"Asma"=>10.0,"Ahmed"=>9.50,"yessine"=>15.5,"Islem"=>12.00);
arsort($Notes);
foreach($Notes as $indice=>$valeur){
  echo $indice." ".$valeur."</br>";
}
krsort($Notes);
$moy=0;
foreach($Notes as $indice=>$valeur){
  $moy=$moy+$valeur;
}

$moy=$moy/count($Notes);
echo "La moyenne des notes en PHP est :" .$moy;
?>
  </div>
</body>
</html>