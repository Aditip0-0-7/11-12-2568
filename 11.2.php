<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "10.20 คือ " . sum(10, 20) . "<br>";
echo "15.25 คือ " . sum(15, 25) . "<br>";
$a = 10; $b = 45;
echo "<$a และ $b คือ " . sum($a, $b) . "<br>";
echo "<hr>";
$num = 50;

add_five($num);
echo "ค่าของ num =add_five $num<br>";
echo "ค่าของ new_value add_five= $num<br>";
    ?>
    <h2>ทดสอบการใช้ Function ที่สร้างขึ้นเอง</h2>
<?php
function sumListofNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}
echo "ผลรวมของ 10, 20, 30 คือ " . sumListofNumbers(10, 20, 30) . "<br>";
echo "ผลรวมของ 5, 15, 25, 35, 45 คือ " 
. sumListofNumbers(5, 15, 25, 35, 45) . "<br>";

function myFamily($lastname, ...$firstnames) {
    $len = count($firstnames);
    for ($i = 0; $i < $len; $i++) {
        echo "helo  สวัด" . $firstnames[$i] . " " . $lastname . "<br>";
    }
    
}

myFamily("Smith", "John", "Jane", "Jim", "Jill");

?>
<h2>ทดสอบการใช้ Function ที่สร้างขึ้นเองแบบมีค่าปริยายพารามิเตอร์</h2>
<?php
function thai_data($strDate='now') {
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));

    $thaiMonthNames = [
        "", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
        "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];

    $strMonthThai = $thaiMonthNames[$strMonth];
    return "$strDay $strMonthThai พ.ศ $strYear";
   
}

echo thai_data("2024-12-31") . "<br>";
echo thai_data();
    ?>

</body>
</html>
<?php
function sum($num1, $num2) {
    $result =  $num1 + $num2;
    return $result;
}
function add_five($num) {
    $value = $num + 5;
    echo "This line will not beคือ $value<br>";
}
?>