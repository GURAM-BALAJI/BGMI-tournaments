<html>

<body>
    <?php
    if (isset($_GET['image']))
        echo "<img src='" . $_GET['image'] . "'>";
        else
        echo "<h1>Move Back...</h1>";
    ?>
</body>

</html>