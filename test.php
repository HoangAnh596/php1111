<?php 
echo "\n\n\n Bài : fibonacci: \n";

function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
 
echo ("10 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");
}
?>
<?php header('Content-type: text/plain');
echo "\n\n\n Bài 2 : Regular: email, số điện thoại của Nhật, postcode nhật: \n";
    $email = "@gmail.com";
    $rl_email = "/@gmail.com/i";

    $phone = "8112345678";
    //$phone = "00-81-90-123-4567"
    $re_phone = "/^\d{10}$|^\d{11}$/"; // ^\d trùng khớp với các phần tử digit từ 0-9, {10}: 10 số; ^\d{10}$: có 10 số trùng khớp
        // 
    if(preg_match($rl_email, $email)){
        echo "Mail ok";
    }
    else{
        echo "Mail không hợp lệ";
    }
    echo "\n";
    if(preg_match($re_phone, $phone)){
        echo "Phone ok";
    }
    else{
        echo "Phone không hợp lệ";
    }
?>
<?php header('Content-type: text/plain');
//bai 2:
echo "\n";
echo "Bài 3: \n";
$n = 8;
for ( $i = 0; $i < $n; $i++ ) { 
    for ( $j = $i; $j < $n ; $j++ ) { 
        echo " ";
    }
    for ( $j = 0; $j <= $i*2 ; $j++ ) { 
        echo "*";
    }
    echo "\n";
}

// Bai 3
echo "\n\n\n Bài 4: \n";
$n = 8;
for($i=1; $i<$n; $i++) {
    for($j=$i; $j<$n; $j++) {
        echo " ";
    }
    for($j=1; $j<=$i; $j++){
        printf("%u",$j);
    }
    for($j=$i-1; $j>=1; $j--){
        printf("%u",$j);
    }
    echo "\n";
}


//Bai 5
echo "\n\n\n Bài 5 : \n";
function isPalindrome($str){
    $leng = strlen($str);
    for ($i=0; $i < floor($leng/2); $i++) { 
        if ($str[$i] != $str[$leng-$i-1] ) {
            return false;
        }
    }
    return true;
}

$str = "AAbAA";
echo isPalindrome($str)?"$str là số đối xứng" : " $str không phải số đối xứng";



//bai 6:
echo "\n\n\n Bài 6: \n";
function PrimeNumber($n){
    if ($n<2) {
        return false;
    }
    for ( $i = 2; $i <= sqrt($n); $i++ ) { 
        if ($n % $i ==0) {
            return false;
        }
    }
    return true; 
}
$a = [[1, 1], [2, 2],[3,3], 2];
$count  = 0 ;
foreach($a as $key){
    if(is_int($key) && PrimeNumber($key)) {
        $count += $key;
    }
    if(is_array($key)){
        foreach($key as $value){
            if(PrimeNumber($value)) {
                $count += $value;
            }
        }
    }
}
echo "Tổng các số nguyên tố có trong mảng: $count";

// Bài 7 : Tìm giai thừa
echo "\n\n\n Bài 7 : Tính giai thừa: \n";

function tinhGiaithua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
$a = 0;
echo "$a! = ". tinhGiaithua($a);

echo "\n";

