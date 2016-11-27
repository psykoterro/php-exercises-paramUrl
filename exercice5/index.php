<?php
/**
 * Created by PhpStorm.
 * User: meg4r0m
 * Date: 27/11/16
 * Time: 23:58
 */
$semaine = $_GET["semaine"];

if (isset($semaine)){
    echo htmlspecialchars($semaine);
}else{
    echo '<a href="index.php?semaine=12">index.php?semaine=12</a>';
}