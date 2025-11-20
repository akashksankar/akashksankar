8<!DOCTYPE html>
<html>
<head>
    <title>List of Indian Cricket Players</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            font-size: 18px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: #d3d3d3;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
        td {
            padding: 8px;
            text-align: center;
        }
        h2 {
            text-align: center;
            font-weight: bold;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<h2>List of Indian Cricket Players</h2>

<?php
$players = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Sachin Tendulkar",
    "MS Dhoni",
    "Shikhar Dhawan",
    "KL Rahul",
    "Jadeja",
    "Hardik Pandya",
    "Bhuvneshwar Kumar",
    "Ishant Sharma"
);
?>

<table>
    <tr>
        <th>S.No</th>
        <th>Player Name</th>
    </tr>

    <?php
    $i = 1;
    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$player</td>";
        echo "</tr>";
        $i++;
    }
    ?>
</table>

</body>
</html>
