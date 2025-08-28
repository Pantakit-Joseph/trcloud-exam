<?php
$array1 = [
    ['code' => 101, 'name' => 'AAA'],
    ['code' => 102, 'name' => 'BBB'],
    ['code' => 103, 'name' => 'CCC']
];

$array2 = [
    ['code' => 103, 'city' => 'Singapore'],
    ['code' => 102, 'city' => 'Tokyo'],
    ['code' => 101, 'city' => 'Bangkok']
];

$merged = [];
foreach ($array1 as $item1) {
    foreach ($array2 as $item2) {
        if ($item1['code'] === $item2['code']) {
            $merged[] = array_merge($item1, $item2);
            break;
        }
    }
}
// echo '<pre>';
// var_dump($merged);

function array_to_table($data)
{
    ob_start();
?>
    <table border="1">
        <tr>
            <?php foreach ($data[0] as $key => $value): ?>
                <th><?= $key ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($data as $row): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <td><?= $cell ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
<?php

    return ob_get_clean();
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
<h2>Array 1</h2>
<?= array_to_table($array1) ?>
<h2>Array 2</h2>
<?= array_to_table($array2) ?>
<h2>Output</h2>
<?= array_to_table($merged) ?>
</body>

</html>