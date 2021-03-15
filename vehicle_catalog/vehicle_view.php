<?php include '../view/header.php'; ?>
<main>
<aside>
        <!-- display a list of classes -->
        <h2>Vehicle Classes</h2>
        <nav>
        <ul>
        <?php foreach ($classes as $class) : ?>
            <li>
            <a href="?class_id=<?php echo $class['ID']; ?>">
                <?php echo $class['class']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>
    <section>
        <h1><?php echo $year .' '. $model; ?></h1>
        <div id="left_column">
            <p>
                <img src="../images/car.jpg" />
            </p>
        </div>

        <div id="right_column">
            <p><b>Price:</b> $<?php echo $price; ?></p>
        </div>
    </section>
    <section>
        <h1><?php echo $year .' '. $model; ?></h1>
        <div id="left_column">
            <p>
                <img src="../images/car.jpg" />
            </p>
        </div>

        <div id="right_column">
            <p><b>Price:</b> $<?php echo $price; ?></p>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>