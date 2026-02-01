<?php
$conn = new mysqli("localhost", "root", "", "cha_revelacao");

if (isset($_POST['revelar'])) {
    $conn->query("INSERT INTO acessos () VALUES ()");
    echo "Sucesso";
    exit;
}
?>