function calcFactors(num) {
	let sum = 0;
	for (let i=0; i<=num; i++) {
		if (i % num === 0) {
			sum = sum + i;
			console.log(i);
		}
	}
	console.log(sum);
}

calcFactors(40);