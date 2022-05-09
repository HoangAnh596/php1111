<?php
 function test($a) {
     //Hàm A gọi tới hàm B 
    try {
        throw new Exception("Lỗi 2");
    } catch(Exception $e) {
        echo $e->getMessage();
    }
    
    return "Chả có lỗi mịa j";
}

try {
    $b = test(0);
} catch(Exception $e) {
    echo $e->getMessage();
}

?>