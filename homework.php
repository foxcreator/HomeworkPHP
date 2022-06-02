<?php

require_once 'vendor/autoload.php';
//
//class ValueObject
//{
//
//    function __construct(private int $red, private int $green, private int $blue)
//    {
//        $this->setRed($this->red);
//        $this->setGreen($this->green);
//        $this->setBlue($this->blue);
//    }
//
//    public function getRed(): int
//    {
//        return $this->red;
//    }
//
//    public function getGreen(): int
//    {
//        return $this->green;
//    }
//
//    public function getBlue(): int
//    {
//        return $this->blue;
//    }
//
//
//
//
//    private function setRed(int $colorParam){
//            $this->isColorValid($colorParam);
//            $this->red=$colorParam;
//
//    }
//
//    private function setGreen(int $colorParam){
//        $this->isColorValid($colorParam);
//        $this->green=$colorParam;
//    }
//
//    private function setBlue(int $colorParam){
//            $this->isColorValid($colorParam);
//            $this->blue=$colorParam;
//
//    }
//
//
//    private function isColorValid(int $colorParam)
//    {
//        if ($colorParam < 0 || $colorParam > 255) {
//        throw new Exception('Not valid color');
//        }
//    }
//
//    public function equals(ValueObject $color): bool
//    {
//        return $this->getGreen() === $color->getGreen() && $this->getRed() === $color->getRed() && $this->getBlue() === $color->getBlue();
//    }
//
//    public function mixColor(ValueObject $color)
//    {
//        $red = ($this->getRed() + $color->getRed()) / 2;
//        $green = ($this->getGreen() + $color->getGreen()) / 2;
//        $blue = ($this->getBlue() + $color->getBlue()) / 2;
//
//        return new ValueObject($red, $green, $blue);
//    }
//}
//
//$obj = new ValueObject(70,34,52);
//$mix = $obj->mixColor(new ValueObject(30,34,52));
//$reds = $mix->getRed();
//dd($reds);






class User
{
    public function __construct(private string $name, private int $age, private string $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }


    private function setName($name)
    {
        $this->name = $name;
    }

    private function setAge($age)
    {
        $this->age = $age;
    }

    public function getAll(): array
    {
        $userinfo = [
            "name" => $this->name,
            "age" => $this->age,
            "email" => $this->email
        ];
        return $userinfo;
    }



    public function __call($name, $arguments)
    {
        echo "Not found method - '$name' "
            . implode(', ', $arguments) . "\n";
    }

}

$users = new User('Seva', 29, 'Houston, we have a problem');
dd($users->getAlls());
dd($users->getAll());










//class MethodTest {
//    public function __call($name, $arguments) {
//        // Замечание: значение $name регистрозависимо.
//        echo "Вызов метода '$name' "
//            . implode(', ', $arguments). "\n";
//    }
//
//    public static function __callStatic($name, $arguments) {
//        // Замечание: значение $name регистрозависимо.
//        echo "Вызов статического метода '$name' "
//            . implode(', ', $arguments). "\n";
//    }
//}
//
//$obj = new MethodTest;
//$obj->runTest('в контексте объекта');