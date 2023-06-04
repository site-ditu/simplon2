<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=info','root','');
}catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}   
    //affecter les valeur entrer dans le formulaire
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $num=$_POST['numero'];
    $email=$_POST['email'];

    $query="INSERT INTO consult (Nom_part,Prenom_part,Email_part,Num_part) values (?,?,?,?)";
    $prepare2=$connection->prepare($query);
    $prepare2->execute(array($nom,$prenom,$email,$num));
    header("location: pageliste.php");
