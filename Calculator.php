<!DOCTYPE html> :)
<html>
<head>
    <title>Simpel PHP Kalkulator</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<h2>Kalkulator simple</h2>

<form method="post">
    <input type="number" name="num1" required>
    
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    
    <input type="number" name="num2" required>
    
    <button type="submit" name="calculate">Hitung</button></form>

<?php
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
        $result = 0;

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "<p>Cannot divide by zero</p>";
                exit;
            }
            break;
    }

    echo "<h3>Hasil: $result</h3>";
}
?>

Today's Quote: Miaw

</body>
</html>