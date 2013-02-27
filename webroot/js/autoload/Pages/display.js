$(document).ready(function() {
	// alert('hola');
	Gmap.populateMap('2725 N.E. 14th. Avenue Wilton Manors, FL 33334', 'First Christian Church of Wilton Manors');
	$('#header-right').html('Tip: Set an alarm for 9am on your cellphone to remind you what time it is.');
	// $('#votd').rssfeed('http://feeds.feedburner.com/hl-devos-votd', {
	// 	limit: 1
	// });
	$.getJSON(App.basePath + 'feeds/get_votd.json', function(results, data) {
		var description = results.description.split('&#8212;');
		var title = results.title.split(' - ');
		$('#votd').append(
			'<div class="votd-verse">'+description[0]+'</div><div class="votd-citation">'+title[1]+'</div>'
		);
	});
});
