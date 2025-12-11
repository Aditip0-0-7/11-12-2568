<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Include Example function</h1>
    <h2>ทด PHP date() Function</h2>
    
    <?php 
    echo "Today is " . date("d/m/Y") . "<br>";
echo "Today is " . date("H:i:sa") . "<br>";
echo "วันนี้เป็นวัน " . date("l");

    ?>
    <h2>ทด PHP include() Function</h2>
  <?php
$date1 = date_create("2003-10-05");
$date2 = date_create($datetime = 'now');
$diff = date_diff($date1, $date2);

echo "วันที่ต่างกัน " 
. $diff->days . " วัน<br>";
echo "หรือ " 
    . $diff->y . " ปี, "
    . $diff->m . " เดือน, "
    . $diff->d . " วัน<br>";
?>
<h2>ทดสอบการใช้ Math function</h2>
<?php
$number = 5.7;
$number2 = 15.3;
$pi = 3.14159;

echo "ค่าปัดขึ้นของ $number คือ " . ceil($number) . "<br>";
echo "ค่าปัดลงของ $number2 คือ " . floor($number2) . "<br>";
echo "ค่าที่ใกล้เคียงของ $pi คือ " . round($pi, 2) . "<br>";
echo "ค่าของ pi คือ " . pi() . "<br>";
echo "ค่าของ 5 ยกกำลัง 3 คือ " . pow(5, 3) . "<br>";
echo "ค่าของ รากที่สองของ 49 คือ " . sqrt(49) . "<br>";
echo "สุ่มตัวเลข 1 - 100 : " . rand(1, 100) . "<br>";
echo "สุ่มตัวเลข 50 - 150 : " . rand(50, 150) . "<br>";

$arr = array(3, 5, 1, 8, 2);
echo "ค่าสูงสุดใน array คือ " . max($arr) . "<br>";
echo "ค่าต่ำสุดใน array คือ " . min($arr) . "<br>";
?>
<h2>ทดสอบการใช้ String function</h2>
<?php
$str = "Hello, welcome to PHP programming!";
echo "ความยาวของสตริงคือ " . strlen($str) . "<br>";
echo "ตำแหน่งของคำว่า 'PHP' คือ " . strtoupper($str) . "<br>";
echo "สตริงตัวพิมพ์ใหญ่: " . strtolower($str) . "<br>";
echo "สตริงตัวพิมพ์ใหญ่ทั้งหมด: " . ucfirst($str) . "<br>";
echo "สตริงตัวพิมพ์ใหญ่แต่ละคำ: " . ucwords($str) . "<br>";
$substr = "PHP";
echo "แทนที่ 'PHP' 'substr'ด้วย 'JavaScript': " . strpos($str, $substr) . "<br>";
$replacedStr = str_replace("PHP", "JavaScript", $str);
echo "สตริงที่ถูกแทนที่: 'fu' 'ด้วย' ฟัง' 'replace'<br>";
$str2 = "  PHP Functions with Spaces  ";
echo "สตริงก่อนตัดช่องว่าง: '" . $str2 . "'<br>";
echo "สตริงหลังตัดช่องว่าง: '" . trim($str2) . "'<br>";
?>

<?php myFooter("aditip"); ?>
</body>
</html>
<?php
function myFooter($myname) {
    echo "<footer><hr>";
    echo "<p>Php ชื่อของคุณ2024</p>";
    echo "<p>สร้างโดย: $myname</p>";
    echo "</footer>";
}
?>
