<?php
//session_start();

$bdd_username="root";
$bdd_password="";
$bdd_dbname="folio";

/***********  php functions ********/
function Age()
{
$am = explode('/', '22/06/1994');
$an = explode('/', date('d/m/Y'));
if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
return $an[2] - $am[2] - 1;
}

/***********  Sql requests ********/
require("bdd.php");
//select requests
$liste_lien_ressources = $connexion->prepare('SELECT * FROM documents WHERE section="lien-ressources"');
$liste_liens_utiles = $connexion->prepare('SELECT * FROM documents WHERE section="lien-utile"');
$liste_msir = $connexion->prepare('SELECT * FROM documents WHERE section="MSIR"');
$liste_e4 = $connexion->prepare('SELECT * FROM documents WHERE section="E4"');
$liste_e6 = $connexion->prepare('SELECT * FROM documents WHERE section="E6"');
$liste_acsid = $connexion->prepare('SELECT * FROM documents WHERE section="ACSID"');
$url_pdf = $connexion->prepare('SELECT contenu FROM documents WHERE id=:id');
$liste_ecoles = $connexion->prepare('SELECT * FROM etablissements WHERE section="ecoles"');
$liste_entreprises = $connexion->prepare('SELECT * FROM etablissements WHERE section="entreprises"');
$liste_interets = $connexion->prepare('SELECT * FROM loisirs_et_interets WHERE section="interets"');
$liste_loisirs = $connexion->prepare('SELECT * FROM loisirs_et_interets WHERE section="loisirs"');
$liste_diplomes = $connexion->prepare('SELECT * FROM diplomes');
$liste_experiences = $connexion->prepare('SELECT * FROM experiences ORDER BY id DESC');
$liste_competences = $connexion->prepare('SELECT * FROM competences');
$presentation = $connexion->prepare('SELECT * FROM home WHERE name="PRESENTATION"');
$localisation = $connexion->prepare('SELECT * FROM home WHERE name="LOCALISATION"');
?>