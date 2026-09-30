<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_companero_ira');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>