<!doctype html>
<html lang="en">
<head>
    <?php include_once('../shared/meta.php') ?>
    <title>Funny strings</title>
</head>
<body>
<?php include_once('../shared/nav.php') ?>
<main>
    <h1>Funny strings</h1>
    <?php
    $strings = array("one two three four five", "was it a car or a cat i saw", "a man a plan a canal panama", "madam I'm Adam");
    ?>

    <hr>
    <blockquote class="icon-gray-pen">
        <ul>
            <li>Given is an array <code>$strings</code> with 4 strings</li>
            <li>Print:
                <ul>
                    <li>The <b>original strings</b></li>
                    <li>The <b>strings, letters reversed</b>
                        <ul>
                            <li>Search on the internet for the PHP function you can use for this</li>
                        </ul>
                    </li>
                    <li>The <b>strings, words reversed</b>
                        <ul>
                            <li>Write a function <code>reverseWords($string)</code>, with returns a string with
                                the words of <code>$string</code> in reversed order
                            </li>
                        </ul>
                    </li>
                    <li>The <b>strings, words starting with capital letter</b>
                        <ul>
                            <li>Search on the internet for the PHP function you can use for this</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </blockquote>
</main>
<?php include_once('../shared/footer.php') ?>
</body>
</html>
