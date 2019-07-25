<?php

/*
 * This class takes 2 numbers and a string as an operator and does a mathematical operation based on the operator string.
 */
class Calculator {
	private $operator;	//Specified operator.
	private $num1;		// Number 1
	private $num2;		// Number 2

	/*
	 * Class constructor, initializes the class.
	 */
	public function __construct($num1, $op, $num2) {
		$this->num1 = $num1;
		$this->operator = $op;
		$this->num2 = $num2;
	}

	function setOperator($op) : void {
		if ($op === "+" or "-" or "/" or "*") {
			echo "You chose ", $op;
		} else {
			echo "Invalid operation";
			return;
		}
		$this->operator = $op;
	}

	function getOp() : string {
		return $this->operator;
	}

	function doMath() {
		switch($this->operator) {
			case "+":
				echo "$this->num1" . "$this->operator" . "$this->num2" . "=", $this->num1 + $this->num2, "\n";
				break;
			case "-":
				echo "$this->num1" . "$this->operator" . "$this->num2" . "=", $this->num1 - $this->num2, "\n";
				break;
			case "/":
				echo "$this->num1" . "$this->operator" . "$this->num2" . "=", $this->num1 / $this->num2, "\n";
				break;
			case "*":
				echo "$this->num1" . "$this->operator" . "$this->num2" . "=", $this->num1 * $this->num2, "\n";
				break;
			default:
				echo "Invalid operation!";
		}
	}
}

$math = new Calculator(20, "+", 20);
$math->doMath();

?>