<?php
$Identifiant = $_POST['Identifiant'];
$motdepasse = $_POST['motdepasse'];

$conn = new mysqli('localhost', 'debian-sys-maint', 'pmsbO8FfcKoWctQS', 'fichierclient');
if ($conn->connect_error) {
    die('connection failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(Identifiant, motdepasse)
            VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("ssisss", $Identifiant, $motdepasse);
    $stmt->execute();
    echo "regitration successfully";
    $stmt->close();
    $conn->close();
}
