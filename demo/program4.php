<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
    <style>
        body { font-family: Arial; text-align: center; }
        .box {
            width: 350px;
            margin: auto;
            border: 1px solid black;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<h2><b>Electricity Bill</b></h2>

<div class="box">
<form method="post" action="">
    <label>Enter Your Name:</label><br>
    <input type="text" name="cname" required><br><br>

    <label>How Many Units are Used:</label><br>
    <input type="number" name="units" required><br><br>

    <input type="submit" name="submit" value="submit">
</form>
</div>

<br>

<?php
if(isset($_POST["submit"])) {

    $name   = $_POST["cname"];
    $units  = $_POST["units"];

    // Simple fixed tariff per unit
    $tariff = 1.50;   // You can change this value

    // Bill calculation
    $bill = $units * $tariff;

    echo "<h3>
            Name: $name <br>
            Electricity Bill: ₹ ".number_format($bill,2)."
          </h3>";
}
?>

</body>
</html>
