<?php
// Fonction qui permet de creer une image, a partir d'une base64, dans le dossier tmp, ameliorer ce code en verifiant si le dossier tmp existe et le creer si ce n'est pas le cas, 

//Valeur de retour, la fonction retourne le path de l'image creer, ce qui permet par la suite de manipuler l'image creer

function imagefromb64($image_data){
$random_path1 = rand(0,10000);
$random_path2 = rand(0,10000);
$path = "tmp/".$random_path1.$random_path2.".png";
$tableau = explode(',', $image_data);
echo $path."\n";
echo $tableau[1]."\n";
$data = base64_decode($tableau[1]);
file_put_contents($path, $data);
return($path);
}
?>