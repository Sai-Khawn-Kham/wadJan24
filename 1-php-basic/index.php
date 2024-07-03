<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1> -->
        <!-- basic syntax -->
        <?php
            // echo "Hi, I'm PHP";
        ?>
    <!-- </h1> -->

    <!-- <h1> -->
        <?php // echo "hello world" ?>
    <!-- </h1> -->

    <!-- <p> -->
        <!-- short echo tag -->
        <?= "print this string" ?>
    <!-- </p> -->

    <!-- if else condition -->
    <?php // if(true){ ?>
        <!-- <p>It is true</p> -->
    <?php // }else { ?>
        <!-- <p>It is false</p> -->
    <?php // } ?>

    <!-- escaping from html -->
    <?php // if(false): ?>
        <!-- <p>It is true</p> -->
    <?php // else: ?>
        <!-- <p>It is false</p> -->
    <?php // endif; ?>



    <?php 
        $fruits = ["apple","banana","orange","grapes","mango"];
    ?>

    <pre>
        <?php
            print_r($fruits);
        ?>
    </pre>
</body>
</html>