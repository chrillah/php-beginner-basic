<!DOCTYPE html>
<?php include("appSetup.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sida 2</title>
</head>

<body>
    <nav>
        <div>
            <a href="index.php" class="logo">
                <?php echo $logo ?>
            </a>
            <ul class="links">
                <li><a href="index.php">
                        <?php echo $hem ?>
                    </a></li>
                <li><a href="sida1.php">
                        <?php echo $sida1 ?>
                    </a></li>
                <li><a class="active" href="sida2.php">
                        <?php echo $sida2 ?>
                    </a></li>
            </ul>
        </div>
    </nav>
    <div class="app-wrapper">
        <main>
            <section>
                <?php echo "<h1>$sida2</h1>" ?>
            </section>
            <section>
               <?php echo "<h4>$numberOfTheDay:ans multiplikation, upp till $numberOfTheMonth siffror</h4>" ?>
                <ul class="numbers">
                    <?php
                    for ($i = 1; $i <= $numberOfTheMonth; $i++) {
                        ?>
                        <li>
                            <p><?php echo $i * $numberOfTheDay. '    '; ?></p>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
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
