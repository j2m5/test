<?php

class Equation {
	
	private $a; // первый коэффициент
	private $b; // второй коэффициент
	private $c; // свободный член
	private $d; // дискриминант
	
	public function __construct($a, $b, $c) {
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		$this->d = $b * $b - 4 * $a * $c;
	}
	
	public function result() {
		if ($this->a == 0) return "Результат: Уравнение не является квадратным";
		if ($this->d > 0) {
			$x1 = ($this->b * (-1) + sqrt($this->d)) / 2 * $this->a;
			$x2 = ($this->b * (-1) - sqrt($this->d)) / 2 * $this->a;
			return "Результат: Уравнение имеет два корня, x1 = {$x1}, x2 = {$x2}, D = {$this->d}";
		} elseif ($this->d == 0) {
			$x = ($this->b * (-1) + sqrt($this->d)) / 2 * $this->a;
			return "Результат: Уравнение имеет один корень, x = {$x}, D = {$this->d}";
		} else return "Результат: Уравнение не имеет корней D = {$this->d}";
	}
	
}