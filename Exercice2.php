<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $tabpays1 = array("Tunis", "France", "Italy", "Palastine");
   $tabpays2 = array("Tunis" => "Tunis", "Paris" => "France", "Rome" => "Italy", "Jérusalem" => "Palestine");
   ?>
   <h2>Tableau pays1</h2>
   <h4>Tri selon un ordre croissant des Valeurs</h4>
   <table border="1">
       <tr>
           <th>Indice</th>
           <th>Valeur</th>
       </tr>
       <?php
       sort($tabpays1);
       foreach ($tabpays1 as $indice => $valeur) {
           echo "<tr>";
           echo "<td>" . $indice . "</td>";
           echo "<td>" . $valeur . "</td>";
           echo "</tr>";
       }
       ?>
   </table>
   <h4>Tri selon un ordre Décroissant des valeurs</h4>
   <table border="1">
       <tr>
           <th>Indice</th>
           <th>Valeur</th>
       </tr>
       <?php
       rsort($tabpays1); // Pour un tri décroissant des valeurs
       foreach ($tabpays1 as $indice => $valeur) {
           echo "<tr>";
           echo "<td>" . $indice . "</td>";
           echo "<td>" . $valeur . "</td>";
           echo "</tr>";
       }
       ?>
   </table>
   <h4>Tri selon un ordre croissant des indices</h4>
   <table border="1">
       <tr>
           <th>Indice</th>
           <th>Valeur</th>
       </tr>
       <?php
       ksort($tabpays2);
       foreach ($tabpays2 as $indice => $valeur) {
           echo "<tr>";
           echo "<td>" . $indice . "</td>";
           echo "<td>" . $valeur . "</td>";
           echo "</tr>";
       }
       ?>
   </table>
   <h4>Tri selon un ordre décroissant des indices</h4>
   <table border="1">
       <tr>
           <th>Indice</th>
           <th>Valeur</th>
       </tr>
       <?php
       krsort($tabpays2);
       foreach ($tabpays2 as $indice => $valeur) {
           echo "<tr>";
           echo "<td>" . $indice . "</td>";
           echo "<td>" . $valeur . "</td>";
           echo "</tr>";
       }
       ?>
   </table>
</body>
</html>
