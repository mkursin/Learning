<?php
/**
 * User: Michail
 * Created: 25.02.14, 15:13
 */

/*
 * Система классов для описания плоских геометрических фигур: круга, квадрата, прямоугольника. Предусмотрим методы для изменения размеров.
 */

/**
 * Class Circle
 * Класс описывающий окружность
 */
class Circle
{
	/**
	 * Радиус окружности
	 * @var
	 */
	var $radius;

	/**
	 * Конструктор объекта окружности принимающий радиус
	 * @param $radius
	 */
	function Circle($radius)
	{
		$this->radius = $radius;
	}

	/**
	 * Возвращает площать окружности
	 * @return float
	 */
	function area()
	{
		$area = M_PI * $this->radius * $this->radius;
		return $area;
	}
}

// Пример создания окружности и получения ее площади
$circle1 = new Circle(10);
$area = $circle1->area();
echo "Площадь окружности: " . $area;

/**
 * Class Rectangle
 * Класс описывающий прямоугольник
 */
class Rectangle
{
	/**
	 * Ширина прямоугольника
	 * @var
	 */
	var $width;
	/**
	 * Высота примоугольника
	 * @var
	 */
	var $height;

	/**
	 * Конструктор прямоульника принимающий ширину и высоту
	 * @param $width
	 * @param $height
	 */
	function Rectangle($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
	}

	function area()
	{
		return $this->width * $this->height;
	}
}

// Пример создания прямоугольника и получение его площади
$new_rectangle = new Rectangle(10, 20);
$area = $new_rectangle->area();
echo "\nПлощадь прямоугольника: " . $area;

/**
 * Class Square
 * Класс описывающий квадрат
 */
class Square extends Rectangle
{
	/**
	 * Сторона квадрата
	 * @var
	 */
	var $side;

	/**
	 * Констуркутор создающий квадрат по стороне
	 * @param $side
	 */
	function Square($side)
	{
		$this->width = $side;
		$this->height = $side;
	}
}

// Пример использования
$new_square = new Square(10);
$area = $new_square->area();
echo "\nПлощадь квадрата: " . $area;