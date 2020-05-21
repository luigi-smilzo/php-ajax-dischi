<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap"> 
    <link rel="stylesheet" href="dist/css/main.css">
    <title>Albums Ajax</title>
</head>
<body>
    <header>
        <div class="u-container u-flexRow u-justifyBtw u-alignCtr">
            <img src="dist/img/spotify-logo.png" alt="logo">
            <div class="SearchBar">
                <input id="SearchInput" type="text" placeholder="Cerca album...">
                <button id="SearchButton"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </header>

    <main>
        <div class="Album u-flexRow u-justifyArd u-alignCtr u-flexWrap u-container">
            
        </div>
    </main>
    
    <!-- Template -->
    <script id="AlbumTemplate" type="text/x-handlebars-template">
        <div class="Album-card">
            <img src="{{ posterPath }}" alt="{{ title }}">
            <h4>{{ title }}</h4>
            <h5>{{ artist }}</h5>
            <h6>{{ year }}</h6>
        </div>
    </script>

    <!-- JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
    <script src="dist/js/main.js"></script>
</body>
</html>