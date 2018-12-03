var client = algoliasearch('IZO55MWFBD', 'ae66b555d3fd135629041cbc386e637a');
var index = client.initIndex('products');
//initialize autocomplete on search input (ID selector must match)
autocomplete('#aa-search-input',
    { hint: false }, {
        source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
        //value to be displayed in input control after user's suggestion selection
        displayKey: 'name',
        //hash of templates used when rendering dataset
        templates: {
            //'suggestion' templating function used to render a single suggestion
            suggestion: function(suggestion) {
                return '<img class="w-25 h-25" src="/storage/'+suggestion.image+'"></img>'
                +'<span>' + suggestion._highlightResult.name.value + '</span>'
                +'<span>' + suggestion.price + '</span>' ;
            },
            empty:function (result) {
                return 'Sorry we did not any result for "'+result.query+"'";
                
            }
        }
    }).on('autocomplete:selected',function (event,suggestion,dataset) {
    window.location.href=window.location.origin+'/shop/'+suggestion.slug;
    enterPressed = true;

}).on('keyup', function(event) {
    if (event.keyCode == 13 && !enterPressed) {
        window.location.href = window.location.origin + '/search-algolia?q=' + document.getElementById('aa-search-input').value;
    }
});