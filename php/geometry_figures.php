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
        var $radius;
        var $length;
        var $diametr;
        var $area;

        function circle ($radius)
        {
           if ($diametr = $radius*2);
            {
                if ($length = 3.14*$radius);
                {
                    if ($area = 3.14*$radius*$radius);
                }
            }
            {
            echo "радиус круга равен $radius, его диаметр равен $diametr, a длина его окружности равна $length,  площадь $area";
            }
        }
    }

$new_circle = new Geometry_Circle;
$new_circle ->circle ("100");