<?php

$pdo = new PDO('root:rot/');




$p = $pdo->prepare("INSERT INTO lalala (id, email, name) VALUES (:id, :email, :name)", [
    ':email'=> "email@gmail",
    ':id'=> "email@gmail",
    ':name'=> "Vlad",
])->execute();





