$( document ).ready(function() {
    var news_read_all_url = $('#news-read-all').val();
    var news_items_container = $('#news-items-container');
    var news_items = $('#news-items');
    $.post(news_read_all_url, function(data) {
        var result = $.parseJSON(data);
        var success = result.success;
        if (success){
            var news = result.news;
            $.each( news, function( key, value ) {
               news_items.append('<li><a href='+news[key].link+' target="_blank">'+news[key].title+'</a></li>');
            });
            news_items_container.vTicker({
                speed: 700,
                pause: 4000,
                showItems: 1,
                padding: 5
            });
            console.log('News are loaded.')
        }
    });
});