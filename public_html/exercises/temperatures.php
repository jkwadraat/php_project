<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Temperatures</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Temperatures</h1>
    <?php
    $temperatures = "17,16,19,20,24,27,26,25,19,22,17,15,18,19,20,25,29,30,31,28,25,24,22,21,19,19,17,18,19,22";
    ?>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>The variable <code>$temperatures</code> contains a <b>string with</b> the <b>temperatures</b> measured
                during a month
            </li>
            <li>Create an <b>array</b> <code>$temperaturesArray</code> <b>with</b> all the <b>temperature values</b> in
                <code>$temperatures</code></li>
            <li>Then print:
                <ul>
                    <li><b>All measured temperatures</b>, separated by a (white)space</li>
                    <li>The <b>average</b> of all temperatures with 2 decimal digits</li>
                    <li>The <b>five lowest</b> temperatures</li>
                    <li>The <b>five highest</b> temperatures</li>
                </ul>
            </li>
        </ul>
    </blockquote>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
