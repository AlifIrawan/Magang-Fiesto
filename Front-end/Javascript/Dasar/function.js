var a = 5;

function check(n){
	console.log('-----------------');
	
	if ( n > 0) {
		console.log(n + ' lebih dari 0');
	}
	else {
		console.log(n + ' tidak lebih dari 0');
	};



	if ( n > a) {
		console.log( n + ' Lebih besar dari ' + a);
	} 
	else if ( n < a) {
		console.log( n + ' Kurang dari ' + a);
	}
	else {
		console.log( n + ' Sama dengan' + a);
	};

	console.log('-----------------');
}

check(-2);