<?php
require_once('../Connection.php'); // Include your database connection script

$recipeNames = [
    "Cotton",
    "Chicken Cotton",
    "Velvet",
    "Georgett",
    "Lachka Cotton",
    "Brazzo Cotton",
];

for ($i = 1; $i <= 30; $i++) {
    $fabricname = $fabricname[array_rand($recipeNames)];
    $description = "Description for $recipeName. This is comfy and stylish fabric!";
    $imagePath = "image$i.jpg";

    $rawmaterials = "";
    $nummaterials = rand(3, 10);
    for ($j = 1; $j <= $nummaterials; $j++) {
        $rawmaterials .= "Ingredient $j, ";
    }
    $rawmaterials = rtrim($rawmaterials, ', '); // Remove trailing comma and space

    $isCotton = rand(0, 1); // Randomly set as vegetarian (1) or non-vegetarian (0)

    $sql = "INSERT INTO Fabrics (fabric_name, description, image_path, rawmaterials, is_cotton) 
            VALUES ('$fabricname', '$description', '$imagePath', '$rawmaterials', '$isCotton')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error inserting Fabric: " . $conn->error;
    }
}

echo "Dummy Fabric inserted successfully";

// Close the database connection
$conn->close();
?>