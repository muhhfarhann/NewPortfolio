<?php 
$conn = mysqli_connect("localhost", "root", "", "myporto");

function insert($m) {
    global $conn;

    $message = htmlspecialchars($m["message"]);

    $query = "INSERT INTO pesan VALUES (NULL, '$message')";
    $result = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>