<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 23:56
 */
$langage = $_GET["langage"];
$serveur = $_GET["serveur"];
if (isset($langage) && isset($serveur)){
    echo htmlspecialchars($langage)." ".htmlspecialchars($serveur);
}else{
    echo '<a href="index.php?langage=PHP&serveur=LAMP">index.php?langage=PHP&serveur=LAMP</a>';
}