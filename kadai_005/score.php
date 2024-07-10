<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_005</title>
</head>

<body>
    <p>
        <?php
            $score_no1 = 80;
            $score_no2 = 60;
            $score_no3 = 55;
            $score_no4 = 40;
            $score_no5 = 100;
            $score_no6 = 25;
            $score_no7 = 80;
            $score_no8 = 95;
            $score_no9 = 30;
            $score_no10 = 60;

            $score_average = ($score_no1 + $score_no2 + $score_no3 + $score_no4 + $score_no5 + $score_no6 + $score_no7 + $score_no8 + $score_no9 + $score_no10) / 10;

            echo $score_average;
        ?>
    </p>
</body>

</html>