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
        $radius  = 10;
        $length  = 31.4;
        $diametrs = 20;
        $area = 314;

        function circle ($radius)
        {
           if ($diametrs = $radius*2);
            {
                if ($length = 3.14*$radius);
                {
                    if ($area = 3.14*$radius*$radius);
                }
            }
            {
            echo "радиус круга равен $radius, его диаметр равен $diametrs, a длина его окружности равна $length,  площадь $area";
            }
        }
    }

    $new_circle = new Geometry_Circle;
    $new_circle ->circle ("10");

    class Geometry_Rectangle
    {
        var $width  = 10;
        var $length  = 20 ;
        var $area = 200;

    function rectange ($area, $length)

    {
        $width = $area / $length;
        echo "длина равна $width";
    }
}
    $new_rectangle = new Geometry_Rectangle;
    $new_rectangle ->rectange("10", "50");

    class Geometry_Square extends Geometry_Rectangle
    {
        function rectange ($area, $length)
        echo "длина равна: $width";
    }