<?php 
	class MathComplex2
	{
		public $re;
		public $im;
		
		// инициализация нового объекта
		function __construct($re, $im)
		{
			$this->re = $re;
			$this->im = $im;
		}
		// добавляет к комплексному числу другое
		function add(MathComplex2 $y)
		{
			$this->re += $y->re;
			$this->im += $y->im;
		}
		// преобразует число в строку
		function __toString()
		{
			return "({$this->re}, {$this->im})";
		}
	}
?>