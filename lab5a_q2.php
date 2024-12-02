<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php 
        $students = [
            "Siti Aminah" => "BIC21203",
            "Ali Bin Ahmad" => "BIC20203",
            "Fatimah Zahra" => "BIC20103"
        ];
    ?>

    <table border="1">
        <tr><th>Name</th><th>Course Code</th></tr>
        <?php 
            foreach ($students as $name => $course_code) {
                echo "<tr><td>$name</td><td>$course_code</td></tr>";
            }
        ?>
    </table>
</body>
</html>