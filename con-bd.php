<?php
include_once 'conn.php';

$montant = 0;
$ppc = $_POST['prix'] * $_POST['quantite'] ;
$montant = 0;
if($_POST['taille'] == 350){
    $montant = $ppc * 60;
}
elseif($_POST['taille'] == 180){
    $montant = $ppc * 80;
}
elseif($_POST['taille'] == 150){
    $montant = $ppc * 60;
}
elseif($_POST['taille'] == 400){
    $montant = $ppc * 40;
}
else{
    echo "format non pris en charge choisisez un grammage valide (350G ou 180G)!!!";
}

$RAP = $montant - $_POST['PV']; 

        $requete = "INSERT INTO         
        commande(code_com,nom_client, prix_unitaire, date_de_livraison, date_de_commande, lieu_de_livraison, quantite, taille_produit, montant_total,num_ref,add_client,RAP,PV,telephone,Mp,ct) VALUES('".$_POST['code_com']."','".$_POST['nom_client']."', '".$_POST['prix']."', '".$_POST['livraison']."', '".$_POST['date_de_commande']."', '".$_POST['lieu_de_livraison']."', '".$_POST['quantite']."', '".$_POST['taille']."','".$montant."', '".$_POST['num_ref']."', '".$_POST['adresse_client']."', '".$RAP."', '".$_POST['PV']."', '".$_POST['telephone']."', '".$_POST['mp']."', '".$_POST['ct']."')";
        $resultat = $conn->query($requete);
        if ($resultat) {
            header("Location: add.php");
        }else{
            echo "échec!!!!!";
            if (!$resultat) {
                die("Invalid query: " . $conn->error);
                 }
        }
?>