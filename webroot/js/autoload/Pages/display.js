$(document).ready(function() {
	var displayName = $('#displayName').html();
	$('#header-right').html('Tip: Set an alarm for 9am on your cellphone to remind you what time it is.');

	if (displayName == 'partners') {
		Gmap.populateMap('2725 N.E. 14th. Avenue Wilton Manors, FL 33334', 'First Christian Church of Wilton Manors');
	}

	if (displayName == 'home') {
		$.getJSON(App.basePath + 'feeds/get_votd.json', function(results, data) {
			// console.log(results.guid);
			var description = results.description.split('&#8212;');
			var title = results.title.split(' - ');
			$('#votd').append(
				'<div class="votd-verse">'+description[0]+'</div>\n\
				<div class="votd-citation">'+title[1]+'</div>\n\
				<div class="votd-source"><a href="'+results.guid+'" target="_blank">Read more</a></div>'
			);
		});
	}
});
