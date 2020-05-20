<?php 
include __DIR__ . "/Partials/data/data.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/main.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="u-container">
            <img src="dist/img/spotify-logo.png" alt="logo">
        </div>
    </header>

    <main>
        <div class="Album u-flex u-container">
            <?php foreach ($albumData as $data) : ?>
            <div class="Album-card">
                <img src="<?php echo $data['poster_path']; ?>" alt="">
            </div>
            <?php endforeach ?>
        </div>
    </main>
</body>
</html>