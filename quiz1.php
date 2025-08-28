<?php
    $numberOfStars = isset($_GET['numberOfStars']) ? (int) $_GET['numberOfStars'] : null;
    $starPattern = '';

    if ($numberOfStars !== null && $numberOfStars > 0) {
        if ($numberOfStars % 2 === 0) {
            for ($i = 1; $i <= $numberOfStars; $i ++) {
                $starPattern .= str_repeat('*', $i) . '<br>';
            }
        } else {
            for ($i = $numberOfStars; $i >= 1; $i --) {
                $starPattern .= str_repeat('*', $i) . '<br>';
            }
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
    <form method="get">
        <label for="numberOfStars">Number of star: </label>
        <input type="number" id="numberOfStars" name="numberOfStars" value="<?= $numberOfStars ?>" required>
        <button type="submit">Submit</button>
    </form>
    <div>
        <?= $starPattern ?>
    </div>
</body>
</html>