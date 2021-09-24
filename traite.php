<?php

// Affectation des valeurs du formulaire dans les variables sessions
$fichier = !empty($_FILES['fichier']) ? $_FILES['fichier']: '';


$result=move_uploaded_file($fichier['tmp_name'],'FICHIERS/'.$fichier['name']);

if(!empty($result)){
	header('location:index.php');
	exit;
}else{
	header('location:index.php');
	exit;
}