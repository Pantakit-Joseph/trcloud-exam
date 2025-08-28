<?php

$baseNumbers = [100, 7, 107, 3, 104];
$scaledNumbers= [];
if (!empty($_GET['numbers']) && is_array($_GET['numbers'])) {
    $inputNumbers = $_GET['numbers'];
    $numberOfRatios = 1;
    foreach ($inputNumbers as $index => $value) {
        if (!empty($value)) {
            $numberOfRatios = (float) $value / $baseNumbers[$index];
            break;
        }
    }

    foreach ($baseNumbers as $index => $value) {
        $ratios[$index] = $value * $numberOfRatios;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    You can fill in 1 field.
    <form action="" method="get">
        <table border="1">
            <thead>
                <tr>
                    <?php foreach ($baseNumbers as $number): ?>
                        <th><?= $number ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($baseNumbers as $index => $number): ?>
                        <td>
                            <input type="number" name="numbers[<?= $index ?>]" value="<?= isset($ratios[$index]) ? $ratios[$index] : '' ?>">
                        </td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
        <button type="submit">Submit</button>
        <a href="<?= $_SERVER['PHP_SELF'] ?>">Clear</a>
    </form>

</body>

</html>