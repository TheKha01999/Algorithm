<?php
$arrs = [];

function findMinMax($arrs)
{
    $max = $arrs[0];
    $min = $arrs[0];
    foreach ($arrs as $arr) {
        if ($arr > $max) {
            $max = $arr;
        }
        if ($arr < $min) {
            $min = $arr;
        }
    }
    return [$min, $max];
}

function miniMaxSum($arrs, $max, $min)
{
    $sumMax = 0;
    $sumMin = 0;
    foreach ($arrs as $arr) {
        if ($arr !== $max) {
            $sumMin += $arr;
        }
        if ($arr !== $min) {
            $sumMax += $arr;
        }
    }
    return [$sumMin, $sumMax];
}

if (isset($_GET["input"])) {
    $arrs = explode(" ", $_GET["input"]);
    $min = findMinMax($arrs)[0];
    $max = findMinMax($arrs)[1];
    $sumMin =  miniMaxSum($arrs, $max, $min)[0];
    $sumMax =  miniMaxSum($arrs, $max, $min)[1];
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
    <form action="" method="GET">
        <input type="text" name="input" placeholder="Ex:1 2 3 4 5">
        <button type="submit">Submit</button>
    </form>

    <p>
        <?php
        if (isset($_GET["input"])) {
            echo "SumMaxMin: " . $sumMin . " " . $sumMax;
        } else {
            echo "SumMaxMin: ";
        }
        ?>
    </p>
</body>

</html>