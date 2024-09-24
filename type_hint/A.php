<?php
// Bao gồm file C.php
require_once 'C.php';
// Tạo class A kế thừa từ class C
class A extends C {
    public function a1() {
        echo "This is function a1 from class A.";
    }
}
// Tạo một đối tượng từ class A và gọi phương thức a1()
$a = new A();
$a->a1();
?>
