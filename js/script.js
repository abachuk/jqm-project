$(document).on("pageinit", ".ui-page", function () {
	console.log('any page loaded');
});

$( document ).delegate("#home-page", "pageinit", function() {

	console.log('home page loaded');

	$('#search-button').click(function(){
		$.ajax({
			url: 'http://search.twitter.com/search.json?q='+ $('#search-term').val() +'&rpp=10',
			dataType:  'jsonp',
			success: function(data) {
				var template = _.template($('#twitter-template').html());
				results = data.results;
				$('#twitter-results').html(template(results));
				//$('ul').listview('refresh');
				console.log(data.results);
			},
			error: function (data) {
				console.log(data);
			}
		});
	});


});

//beforeSend: function() { $.mobile.showPageLoadingMsg(); }, //Show spinner
//complete: function() { $.mobile.hidePageLoadingMsg() }, //Hide spinner
