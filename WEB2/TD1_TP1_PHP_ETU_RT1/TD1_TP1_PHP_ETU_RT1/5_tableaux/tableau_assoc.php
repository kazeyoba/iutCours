<!DOCTYPE html>
<html lang="fr" >
<head>
<meta charset="utf-8">
<link href="style_tableau.css" rel="stylesheet" type="text/css" />
<title>ETU EXO Tableaux</title>
</head>
<body>
<p>Rappels TABLEAUX ASSOCIATIFS (TD) </p>
<?php


$fiche1 = array(); // tableau vide
$fiche1['prenom'] = 'Philippe';
$fiche1['nom'] = 'Durand';

$fiche1['mail']= 'phil.durand@univ-rennes1.fr';
echo '<p>Mail de '.$fiche1['prenom'].' : '.$fiche1['mail'].'</p>';


$fiche2 = array(
'prenom' => 'Philippe',
'nom' => 'Durand','mail' => 'phil.durand@univ-rennes1.fr');
echo '<p>Mail de '.$fiche2['prenom'].' : '.$fiche2['mail'].'</p>';


$tableau1=array('nom' => 'Durand', 'prenom' => 'Philippe');
var_dump($tableau1);
echo '<br />';



$personnes=array ( array('nom' => 'Durand', 'prenom' => 'Tom' , 'age' => 13),
array('nom' => 'Durand', 'prenom' => 'Lola' , 'age' => 16 ),
array('nom' => 'Durand' , 'prenom' => 'Margot' , 'age' => 19 )
);
var_dump($personnes);
echo '<br />';
echo '<br />';

echo "5.2 1) <br/>";
foreach($personnes as $value){
    echo $value["prenom"].' : '.$value["age"].'<br/>';
}

echo "5.2 2) <br/>";





?>


<table>
    <thead>
        <tr>
            <th>
                Nom
            </th>
            <th>
                Prénom
            </th>
            <th>
                Age
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($personnes as $perso){
            echo '<tr>';

            foreach($perso as $_ => $val){
                echo "<td>$val</td>";
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

</body>
</html> 