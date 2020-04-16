function addtocart (id) { 
    var settings = {
        "async": true,
        "crossDomain": true,
       "url":"http://localhost/reagan/api/cart/add/"+id,
        "method": "GET",
        "data": {
            // "apiKey": "51e3d490e2da412c988237f19087ad66",
           // "newsSource": "abc-news-au"
        }
    }
    
    $.ajax(settings).done(function (response) {
        alert('added to cart',id)
    })    
// alert(id)
 }