<?php
header('Content-Type: application/json');
$conn = mysqli_connect("localhost", "root", "", "db_sentimen");

if (!$conn) {
    echo json_encode(["error" => "Koneksi Gagal"]);
    exit;
}

$query = "SELECT * FROM hasil_sentimen";
$result = mysqli_query($conn, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>