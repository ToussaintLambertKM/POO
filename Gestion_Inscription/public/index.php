<?php
require_once("../model/User.php");
require_once("../model/AC.php");
$ac=new AC;
$ac->setId(1);
$ac->setLogin("lambert");
$ac->setPassword("toussaint");
echo $ac->getRole("br");
echo $ac->getLogin();
$etudiant=new Etudiant;
$etudiant->setNomComplet("toussaint lambert");
$etudiant->setId("12569");
$etudiant->setTuteur("Pere: toussaint");
$etudiant->setLogin("Lambert");
$etudiant->setPassword("password123");
echo $etudiant->getId();
echo $etudiant->getNomComplet();
echo $etudiant->getLogin();
echo $etudiant->getRole();
echo $etudiant->getTuteur();
