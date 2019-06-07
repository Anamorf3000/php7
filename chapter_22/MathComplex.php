<?php  ## пример класса
	class MathComplex
	{
		// свойства: действительная и мнимая часть
		public $re;
		public $im;
		
		function add($re, $im)
		{
			$this->re += $re;
			$this->im += $im;
		}
	}
?>