<!DOCTYPE html>
<?php include("appSetup.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hem</title>
</head>

<body>
    <nav>
        <div>
            <a href="index.php" class="logo">
                <?php echo $logo ?>
            </a>
            <ul class="links">
                <li><a class="active" href="index.php">
                        <?php echo $hem ?>
                    </a></li>
                <li><a href="sida1.php">
                        <?php echo $sida1 ?>
                    </a></li>
                <li><a href="sida2.php">
                        <?php echo $sida2 ?>
                    </a></li>
            </ul>
        </div>
    </nav>

    <div class="app-wrapper">
        <main>
            <section>
                <?php echo "<h1>$indexMessage</h1>" ?>
            </section>
        </main>
        <footer>
            <div>
                <?php echo "<p>$footerInfo</p>" ?>
            </div>
        </footer>
    </div>
</body>

</html>
