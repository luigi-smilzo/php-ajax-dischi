$(document).ready(function () {
    // References
    var container = $('.Album');
    var searchInput = $('#SearchInput');
    var searchBtn = $('#SearchButton');
    


    // Handlebars init
    var source = $('#AlbumTemplate').html();
    var template = Handlebars.compile(source);

    // Showing albums
    albumLoad(container, template);

    // Search
    searchBtn.click(function() {
        albumSearch (container, template, searchInput);
    });

    searchInput.keypress(function(e) {
        if (e.which == 13) {
            albumSearch (container, template, searchInput);
        }
    });


}); // <- End ready

/*************
 * FUNCTIONS *
 *************/

function albumLoad(container, template) {
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
}

function albumSearch (container, template, searchInput) {
    var searchVal = searchInput.val().trim().toLowerCase();

    $.ajax({
        url: 'http://localhost/php-ajax-dischi/partials/script/encode.php',
        method: 'GET',
        success: function(res) {
            container.html('');
            
            if (searchVal != '') {
                
                for (var i = 0; i < res.length; i++) {
                    
                    
                    if ( res[i].album_title == searchVal ) {
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
    
                }
                
                searchInput.val('').blur();
            } else {
                searchInput.focus()
                container.append('Campo di ricerca vuoto')
            }
            
        },
        error: function() {
            console.log('Error');
        }
    });
}