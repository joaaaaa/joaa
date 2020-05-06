<?php
// Линейное уравнение a*x + b = 0
class Linear {
	
	protected $x;
	public function LinearEquation($a, $b) {
		if($a != 0){
			return $this->x = -$b /$a;
			
		} 
		return false;
	}
}

// Квадратное уравнение ax^2+bx+c
class Square extends Linear {
		//Добавить решение линейного уравнения, если а = 0
		// Нахождение дискириминанта
		protected function findDisc($a, $b, $c){
		    return ($b * $b) - 4 * $a * $c;
		}
		
		// Нахождение корней уравнения
		public function discEquation($a, $b, $c) {
		    if($a != 0){
				$disc = $this->findDisc($a, $b, $c);

				if($disc > 0) {
					$x1 = (-$b + sqrt($disc))/(2 * $a);
					$x2 = (-$b - sqrt($disc))/(2 * $a);
					$this->x = Array($x1, $x2);
				} elseif($disc == 0) {
					$this->x = -$b/(2 * $a);
				} else {
					$this->x = false;
				}
			
				return $this->x;
			} else{
				$this->x = $this->LinearEquation($a, $b);
			}   
			return $this->x;
		}
}
/*
class B extends A {

}
*/
$lineareq = new Linear();
var_dump ($lineareq->LinearEquation(0, 0));

$sqrteq = new Square();
var_dump($sqrteq->discEquation(0,0,0));
?>
