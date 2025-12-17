<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ผลการคำนวณ BMI</title>
</head>
<body>

<?php
// รับข้อมูลจาก form
$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$weight   = floatval($_POST['weight']);
$height   = floatval($_POST['height']);

// แปลงวันเกิดเป็นอายุ
$birthYear = date("Y", strtotime($birthday));
$currentYear = date("Y");
$age = $currentYear - $birthYear;

// คำนวณ BMI
$height_m = $height / 100;       // เปลี่ยนเป็นเมตร
$BMI = $weight / ($height_m ** 2);
$BMI = number_format($BMI, 2);

// ตีความค่า BMI
if ($BMI < 18.5) {
    $result = "น้ำหนักน้อย / ผอม";
} elseif ($BMI < 23) {
    $result = "น้ำหนักปกติ";
} elseif ($BMI < 25) {
    $result = "ท้วม / น้ำหนักเกิน";
} elseif ($BMI < 30) {
    $result = "อ้วนระดับ 1";
} else {
    $result = "อ้วนระดับ 2";
}
?>

<h2>ผลการคำนวณ BMI</h2>

ชื่อ – สกุล : <?= $fullname ?><br><br>
วันเกิด : <?= $birthday ?><br><br>
อายุ : <?= $age ?> ปี<br><br>
น้ำหนัก : <?= $weight ?> กก.<br><br>
ส่วนสูง : <?= $height ?> ซม.<br><br>

ค่า BMI : <?= $BMI ?><br><br>
แปลผล BMI : <?= $result ?><br><br>

<a href="form.php">
    <button>กลับไปหน้าแรก</button>
</a>

</body>
</html>
