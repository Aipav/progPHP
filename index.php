<?php
use App\MagicClass;
use App\Point;
use App\Vector;
require 'vendor/autoload.php';


#Магические методы
echo "\n Магические методы \n";
echo "Создание объекта\n";
$object = new MagicClass();

echo "Вызов отсутствующего метода\n";
$object->someMethod();

echo "Вызов статического метода\n";
MagicClass::someStaticMethod();

echo "Работа со свойствами\n";
$object->name = "Test";
echo $object->name . "\n";

isset($object->name);
unset($object->name);

echo "Преобразование объекта в строку\n";
echo $object . "\n";

echo "Использование объекта как функции\n";
$object();

echo "Клонирование объекта\n";
$copy = clone $object;

echo "Отладочный вывод\n";
var_dump($object);

echo "Сериализация и восстановление\n";
$serialized = serialize($object);
$restored = unserialize($serialized);

echo "Восстановление через var_export\n";
$exported = var_export($object, true);
eval('$restoredExport = ' . $exported . ';');

unset($object, $copy, $restored, $restoredExport);


#Геометрия
echo "\n Геометрия \n";
$T1=new Point(2,3);
$V1=new Vector(3,4);
$V2=new Vector(0,0);
$V3=new Vector(4,-3);

echo "Длина вектора V1: ".$V1->getLength()."\n";
echo "Длина вектора V2: ".$V2->getLength()."\n";
echo "Длина вектора V3: ".$V3->getLength()."\n";

if ($V1->isPerpendicular($V3)) {
    echo "V1 и V3 перпендикулярны\n";
} else {
    echo "V1 и V3 не перпендикулярны\n";
}

$T1->moveX($V1->x);
$T1->moveY($V1->y);
echo "Новые координаты T1: (" . $T1->x . ", " . $T1->y . ")\n";

