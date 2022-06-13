<?php
include('connexionbdd.php');
/**
 * 
 */

function insertbdd($nom_client, $prenom_client, $adresse_client, $ville_client, $code_postal_client, $num_client, $email_client,  $pwd_client, $date_naissance, $bdd)
{
    $querystr = "INSERT INTO client (ID, nom_client, prenom_client, adresse_client, ville_client, code_postal_client, num_client, email_client,  pwd_client, date_naissance) VALUES (NULL,:nom,:prenom,:adresse,:ville,:cp,:num,:email,:pwd,:date_naissance)";
    $query = $bdd->prepare($querystr);
    $query->bindValue(':nom', $nom_client, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom_client, PDO::PARAM_STR);
    $query->bindValue(':adresse', $adresse_client, PDO::PARAM_STR);
    $query->bindValue(':ville', $ville_client, PDO::PARAM_STR);
    $query->bindValue(':cp', $code_postal_client, PDO::PARAM_INT);
    $query->bindValue(':num', $num_client, PDO::PARAM_STR);
    $query->bindValue(':email', $email_client, PDO::PARAM_STR);
    $query->bindValue(':pwd', $pwd_client, PDO::PARAM_STR);
    $query->bindValue(':date_naissance', $date_naissance, PDO::PARAM_STR);
    $query->execute();

    header('Location:/public/index.php');
}
function affichageclient($bdd)
{
    $verifselect = 'SELECT * FROM client';
    $verifselectQuery = $bdd->query($verifselect);
    $bddArray = $verifselectQuery->fetchAll();
    return $bddArray;
}
function affichageingredient($bdd)
{
    $verifselectingredient = 'SELECT * FROM ingredient';
    $verifselectQueryingredient = $bdd->query($verifselectingredient);
    $bddArray = $verifselectQueryingredient->fetchAll();
    return $bddArray;
}
function supprimeringredient($ID, $bdd)
{
    if (isset($_POST['ID'])) {
        $ID = $_GET['ID'];
    }
    $querydelete = "DELETE FROM ingredient WHERE id_ingredient = :ID";

    $query = $bdd->prepare($querydelete);
    $query->bindValue(':ID', $ID, PDO::PARAM_INT);
    $query->execute();
}

function modifydataclient($ID, $bdd)
{
    if (isset($_POST['ID'])) {
        $ID = $_GET['ID'];
    }
    $queryupdate = "UPDATE client SET 'nom_client'=:nom, 'prenom_client'=:prenom, 'adresse_client'=:adresse, 'ville_client'=:ville, 'code_postal_client'=:cp, 'num_client'=:num, 'email_client'=:email, 'date_naissance'=:date_naissance    WHERE 'client'.'ID' = :ID";

    $query = $bdd->prepare($queryupdate);
    $query->bindValue(':ID', $ID, PDO::PARAM_INT);
    $query->execute();
}
