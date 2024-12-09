<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3 - Multiplication Table</title>
</head>
<body>
    <?php
    // Function
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'number' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Call the function
    $multiplier = 2; 
    $tableData = multiplication($multiplier);
    ?>

    
    <h1>Multiplication Table for <?php echo $multiplier; ?></h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($tableData as $row): ?>
        <tr>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['multiplier']; ?></td>
            <td><?php echo $row['answer']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
