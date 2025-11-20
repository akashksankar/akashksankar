<!DOCTYPE html>
<html>
<body>

<h2>Original Student list</h2>
<?php
$students = array(
    "s1" => "rabee",
    "s2" => "samshar",
    "s3" => "amal",
    "s4" => "babu"
);

print_r($students);
?>

<h2>Ascending order</h2>
<?php
$asc = $students;
asort($asc);   // sort by value ascending
print_r($asc);
?>

<h2>descending order:</h2>
<?php
$desc = $students;
arsort($desc);  // sort by value descending
print_r($desc);
?>

</body>
</html>
