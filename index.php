<?php
$pageTitle = 'Home';
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textile Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main>
        <!-- Display Trending Recipes -->
        <section id="trending">
            <h2>Types of fabrics</h2>
            <!-- You can list trending recipes here using PHP -->
        </section>

        <!-- Recipe Categories -->
        <section id="categories">
            <h2>Varieties</h2>
            <ul>
                <li><a href="#">Cotton</a></li>
                <li><a href="#">Satin</a></li>
                <li><a href="#">Silk</a></li>
                <li><a href="#">Wool</a></li>
                <li><a href="#">Velvet</a></li>
                <li><a href="#">Chiffon</a></li>
                <!-- Add more categories as needed -->
            </ul>
        </section>

        <!-- Recipe Submission Form -->
        <section id="submit-recipe">
            <h2> Contact Us </h2>
            <form action="submit_recipe.php" method="post">
                <label for="recipeName">Name:</label>
                <input type="text" name="recipeName" required>

                <label for="category">Gender:</label>
                <select name="category" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <!-- Add more categories as needed -->
                </select>

                <label for="instructions">Contact Number:</label>
                <textarea name="instructions" required></textarea>

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
    
</body>
</html>
<?php
include('footer.php');
?>