$(function () {
	// メーターの数値取得
	$('.status .meter .scale').each(function (i) {
		const inputV = $(this).text();
		if (inputV == 0) {
			$(this).css({
				'width': '4em',
				'background-color': '#E5E5E5'
			});
		} else if (inputV < 5) {
			$(this).css('width', '4em');
		} else {
			$(this).css('width', inputV + '%');
		}
	});

	$('.aside .form button.submit').click(function(){
		$('.alert').fadeIn().css({'display': 'flex'});
	});
	$('.close').click(function(){
		$('.alert').fadeOut();
	});
	
	var read = [false, false];
	$('.aside .links ul li a').each(function(i, e){
		e.addEventListener('click', function(){
			read[i] = true;
			console.log(read)
			if(read[0]&&read[1]){
				$('.submit').removeClass('disabled');
			}
		});
	});
});