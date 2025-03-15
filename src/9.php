<?php
class Student {
    public $name;
    public $age;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function introduce() {
        return "My name is " . $this->name . ", I'm " . $this->age . " years old.";
    }
}
$student1 = new Student("Alice", 14);
$student2 = new Student("Bob", 16);
echo $student1->introduce();
echo "<br>";
echo $student2->introduce();
?>