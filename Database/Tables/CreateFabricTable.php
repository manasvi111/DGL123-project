<?php
require_once('Connection.php');

$sql = "CREATE TABLE IF NOT EXISTS fabrics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fabric_name VARCHAR(255) NOT NULL,
    description TEXT,
    image_path VARCHAR(255),
    rawmaterials TEXT,
    is_cotton BOOLEAN,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'fabrics' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>