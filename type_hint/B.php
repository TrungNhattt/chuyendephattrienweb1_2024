<?php
// Bao gồm file C.php
require_once 'C.php';
// Tạo class B kế thừa từ class C
class B extends C {
    public function b1() {
        echo "This is function b1 from class B.";
    }
}
// Tạo một đối tượng từ class B và gọi phương thức b1()
$b = new B();
$b->b1();
?>
