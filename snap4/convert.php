<?php
	//Take arguments and convert the number to grams.
/**
 * @param $num
 * @param $unit
 * @return int
 */
function toGrams($num, $unit) : float {
	//$gram = 453.59237;
	$kg = 1000;
	$oz = 28.34;
	$lbs = 453.59237;
	$mg = 0.001;
	//Depending on what the unit is, convert the unit to grams.

	//To pounds
	switch ($unit) {
		case "lbs":
			$calc = $num * $lbs;
			break;

		case "oz":
			$calc = $num * $oz;
			break;

		case "kg":
			$calc = $num * $kg;
			break;

		case "mg":
			$calc = $num * $mg;
			break;

		case "g":
			$calc = $num * 1;
			break;

		default:
			echo "You entered an incorrect value.";
	}
	return $calc;
}


$gToLbs = toGrams(10,"lbs");
$ozToGrams = toGrams(10, "oz");
$kgToGrams = toGrams(10, "kg");
$gToGrams = toGrams(10, "g");
$mgToGrams = toGrams(10, "mg");

echo "Pounds to Grams: ", $gToLbs, "\n";
echo "Oz to Grams: ", $ozToGrams, "\n";
echo "Kg to Grams: ", $kgToGrams, "\n";
echo "Gram to Gram: ", $gToGrams, "\n";
echo "Mg to Grams: ", $mgToGrams, "\n";
?>