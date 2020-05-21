$(document).ready(function () {
    // References
    var container = $('.Album');


    // Handlebars init
    var source = $('#AlbumTemplate').html();
    var template = Handlebars.compile(source);

    $.ajax({
        url: 'http://localhost/php-ajax-dischi/partials/script/encode.php',
        method: 'GET',
        success: function(res) {
            for (var i = 0; i < res.length; i++) {
                var album = res[i];

                var context = {
                    posterPath: album.poster_path,
                    title: album.album_title,
                    artist: album.artist,
                    year: album.year
                }

                var html = template(context);
                container.append(html);
            }
        },
        error: function() {
            console.log('Error');
        }
    });

}); // <- End ready