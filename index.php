<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
        $color = green;
        if ($color == red) :
            echo '<div style="background-color: '.$color.'; width: 200px; height: 200px;"></div>';
            elseif ($color == green) :
            echo '<div style="background-color: '.$color.'; width: 200px; height: 200px;"></div>';
            else:
            echo "Ты дурак, _____? Ты на что играешь?";
        endif;
    ?>
</body>

</html>
