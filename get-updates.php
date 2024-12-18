
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dreams_goals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT activity, date FROM updates";
$result = $conn->query($sql);

$updates = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $updates[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($updates);

$conn->close();
?>
