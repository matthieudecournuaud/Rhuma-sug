<?php

// on creer un variable, qui est une instance de la classe "PDO".//
$conn = new PDO("mysql:host=localhost;dbname=rhuma_sug", "matthieudecournuaud", "matthieu");

$stmt = $conn->prepare("SELECT * FROM Produit");
$stmt->execute();
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
$produitsJson = json_encode($produits);


echo ($produitsJson);
