<?php 
include __DIR__ . "/Partials/data/data.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap"> 
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
        <div class="Album u-flexRow u-justifyArd u-alignCtr u-flexWrap u-container">
            <?php foreach ($albumData as $data) : ?>
            <div class="Album-card">
                <img src="<?php echo $data['poster_path']; ?>" alt="cover">
                <h4><?php echo $data['album_title'] ?></h4>
                <h5><?php echo $data['artist'] ?></h5>
                <h6><?php echo $data['year'] ?></h6>
            </div>
            <?php endforeach ?>
        </div>
    </main>
    
    <!-- Template -->
    <script id="AlbumTemplate" type="text/x-handlebars-template">
        
    </script>


    <!-- JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
    <script src="dist/js/main.js"></script>
</body>
</html>