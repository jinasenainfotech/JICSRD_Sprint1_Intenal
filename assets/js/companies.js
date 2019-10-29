$(document).ready(function($) {


});

function classification(element,url,id){
	$('#'+element).empty();

	$.post(url, {
		id:id,
	}, function(r){

		// r.sort(function(a,b){
			// return parseFloat(r.)
		// })
		// for (var i = 1; i <  r.length ; i++) {
			for (var i = r.length - 1; i >= 0; i--) {
				$('#'+element).append($('<option></option>')
					.attr("value",r[i].id).text(r[i].name));

			}
		}, "json");
}