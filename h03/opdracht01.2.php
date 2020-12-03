<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//for($fotonummer = 1; $fotonummer <= 10; $fotonummer++) {
//    echo "<img src='cat_".$fotonummer.".jpg'>";
//}

$cats = array("cat_1.jpg", "cat_2.jpg", "cat_3.jpg", "cat_4.jpg", "cat_5.jpg", "cat_6.jpg", "cat_7.jpg", "cat_8.jpg", "cat_9.jpg", "cat_10.jpg", );
foreach ($cats as $cat) {
    echo "<img src = $cat>";
}
?>
</body>
</html>
