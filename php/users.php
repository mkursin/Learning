<?php
/**
 * User: Michail
 * Created: 25.02.14, 14:15
 */
/*
 * Представим пользователя в виде объекта класса со свойствами: имя, фамилия, возраст, пол, а также реализуем метод получения своего полного имени.
 */
/*
 * класс со свойствами, характерными любому пользователю
 */
    class User
        {
            var $last_name;
            var $first_name;
            var $age;
            var $sex;
/*
 * функция получения своего полного имени
 */
            function name($last_name, $first_name)
            {
                echo " My name: $last_name, and surname : $first_name";
            }
        }
    $new_user = new User;
    $new_user ->name("Kursin", "Michael");

