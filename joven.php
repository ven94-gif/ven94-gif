<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="" />
<link rel="stylesheet" href="joven1php.css">
</head>

<body>

<div class="box">
 
<h2>Grade Evaluation System</h2>

<?php
echo"<center>";

if (isset($_POST['grade'])) {
    $grade = $_POST['grade'];

    if ($grade >= 75) {
        echo "Passed <br>";

        if ($grade >= 90) {
            echo "With honor";
        }
    } else {
        echo "failed!!";
    }
}

echo "</center>"

?>

    

    

</a>

</div>


</body>

</html>






</div>
</body>
