<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        $name = "Mohamad Hakim Bin Arsahak";
        $matric_num = "AI220175";
        $course = "BIP";
        $year_of_study = "3 years"; // Corrected variable name casing
        $address = "No 63, Tingkat 3, Block A, Flat Larkin, 80350, Johor Bahru, Johor";
    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_num; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
