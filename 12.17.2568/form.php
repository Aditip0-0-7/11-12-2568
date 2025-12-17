<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ประมวลผลดัชนีมวลกาย</title>
</head>
<body>

<h2>ประมวลผลดัชนีมวลกาย</h2>

<form action="result.php" method="post">
    ชื่อ – นามสกุล : 
    <input type="text" name="fullname" required><br><br>

    วันเกิด (ค.ศ.) :
    <input type="date" name="birthday" required><br><br>

    น้ำหนัก (กก.) :
    <input type="number" name="weight" step="0.1" required><br><br>

    ส่วนสูง (ซม.) :
    <input type="number" name="height" step="0.1" required><br><br>

    <button type="submit">Submit</button>
    <button type="reset">Clear</button>
</form>

</body>
</html>
