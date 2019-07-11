/*
function add(num1, num2) {
	return num1 + num2
}

function contc(string1, string2) {
	return string1 + string2;
}

console.log(add(4, 4));
console.log(add("Hello ", "World!"));
*/

var elevatorPitch = {
	Name: "My name is Mark.",
	What: "I make spatulas that make the perfect omelet no matter you skill level.",
	Why: "I made this product to help everyone enjoy the perfect omelet.",
	How: "Pattent pending epic non-stick technology",
	Question: "Why not make the perfect omelet?",
};

function pitch(name, what, why, how, question) {
	var thePitch = name + " " + what + " " + why + "\n" + how + " " + question;
	console.log(thePitch);
}

pitch(elevatorPitch.Name, elevatorPitch.What, elevatorPitch.Why, elevatorPitch.How, elevatorPitch.Question);