<?php
$pageTitle = 'Home';
include('header.php');
?>
<?php


$trendingFabrics = [
    
    ['title' => 'Trending Fabric 1', 'description' => 'This is the first trending Fabric World-wide.'],
    ['title' => 'Trending Fabric 2', 'description' => 'This is the second trending Fabric.'],
    ['title' => 'Trending Fabric 3', 'description' => 'This is the third trending Fabric.'],
    
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Fabrics - Textile Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   
    <main>
        <section id="trending-recipes">
            <h2>Trending Fabrics</h2>
            <ul>
                <?php foreach ($trendingFabrics as $Fabric) : ?>
                    <li>
                        <h3><?= $Fabric['title'] ?></h3>
                        <p><?= $Fabric['description'] ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
</body>
</html>
<?php
include('footer.php');
?>