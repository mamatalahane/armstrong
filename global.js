//alert(11);

function checkArmstrong() {

	var msg = 'Not Armstrong! ';

	var inputNum = $('#inputtxt').val();

	var sum = 0;

	if(inputNum != '') {

		//console.log(inputNum.length);

		var numlength = inputNum.length;

		for (var i = 1; i <= numlength; i++) {

			//console.log('i = '+inputNum.substring(i-1, i));

			var mathInp = inputNum.substring(i-1, i);

			var multiVal = mathInp * mathInp * mathInp;

			sum += multiVal; 
		}

		if(inputNum == sum) {
			$('#msg').removeClass('notfound');
			$('#msg').addClass('found');
			var msg = 'Armstrong!';
		} else {
			$('#msg').removeClass('found');
			$('#msg').addClass('notfound');
		}

	}

	//console.log('input = '+inputNum+' & sum = '+sum);
	
	$('#msg').text(msg);

}


