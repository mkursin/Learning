<?php
/**
 * User: Michail
 * Created: 25.02.14, 15:13
 */

/*
 * Построим систему классов для описания плоских геометрических фигур: круга, квадрата, прямоугольника. Предусмотрим методы для изменения размеров.
 */

   class Geometry_Circle
    {

        function circle()
        {   $radius = 10;
	        $area =3.14 * $radius *  $radius;
	       return $area;
        }
    }

	$result = new Geometry_Circle();
	echo $result ->circle();

   class Geometry_Rectangle
    {
		public  $width = 60;
	    public $length = 100;

        function rectange ()
        {
	        $area = $this->width * $this->length;
	        return $area;
        }
	}

    $new_rectangle = new Geometry_Rectangle;
    $new_rectangle ->rectange ();
	echo $new_rectangle ->rectange ();



    class Geometry_Square extends Geometry_Rectangle
    {
	    public  $length = 60;
        function square ()
        {
	        $ar = $this->width * $this->length;
	        return $ar;
        }
    }
	$new_square = new Geometry_Square();
	$new_square->square();
	echo $new_square->square();