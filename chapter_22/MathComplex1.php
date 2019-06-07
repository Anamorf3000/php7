<?php 
	class MathComplex1
	{
		public $re;
		public $im;
		
		// добавляет к комплексному числу другое
		function add(MathComplex1 $y)
		{
			$this->re += $y->re;
			$this->im += $y->im;
		}
		// преобразует число в строку для вывода
		function __toString()
		{
			return "({$this->re}, {$this->im})";
		}
	}
?>