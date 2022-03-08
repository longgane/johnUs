$(function () {
	var read = [false, false];
	$('.checkbox01 .links1 a').each(function(i, e){
		e.addEventListener('click', function(){
			read[i] = true;
			console.log(read)
			if (read[0] && read[2]){
				$('input[name="agree"]').prop('checked', true);
			}
		});
	});
	$('.checkbox01 .links2 a').each(function (i, e) {
		e.addEventListener('click', function () {
			read[i] = true;
			console.log(read)
			if (read[0] && read[1]) {
				$('input[name="agree"]').prop('checked', true);
			}
		});
	});
});