<?php
$pageTitle = 'Home';
include('header.php');
?>
<?php


$Varities = [
    'Cotton',
    'Satin',
    'Silk',
    'Wool',
    'Silk',
    'Velvet',
    'Chiffon',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabric Variities - Textile Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main>
        <section id="recipe-categories">
            <h2>Fabric Categories</h2>
            <ul>
                <?php foreach ($Varities as $Variety) : ?>
                    <li><a href="categories.php?name=<?= urlencode($Variety) ?>"><?= $Variety ?></a></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>

</body>
</html>
<?php
include('footer.php');
?>