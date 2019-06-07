<?php
##ссылки на объекты
// Объявляем новый класс
class AgentSmith{

    public $mind;

}

// создаем новый объект класса AgentSmith
$first = new AgentSmith();
// присваиваем значение атрибуту класса
$first->mind = 0.123;
// копируем объект
$second = $first;
// изменяем значение у копии
$second->mind = 100;
// выводим оба значения
echo "First mind: {$first->mind}, second: {$second->mind}";

