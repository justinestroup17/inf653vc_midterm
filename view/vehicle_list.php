<main>
    <section>
        <h1><?='Vehicle Inventory'?></h1>
        <!-- View All Makes -->
        <form action="." method="get">
            <select name="make_id" required>
                <option hidden disabled selected>View All Makes</option>
                <?php foreach ($makes as $make) : ?>
                    <option value=$make['make']?><?=$make['make']?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Submit">
        </form>
        <!-- View All Types -->
        <form action="." method="get">
            <select name="type_id" required>
                <option hidden disabled selected>View All Types</option>
                <?php foreach ($types as $type) : ?>
                    <option value=$type['type']?><?=$type['type']?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Submit">
        </form>
        <!-- View All Classes -->
        <form action="." method="get">
            <select name="class_id" required>
                <option hidden disabled selected>View All Classes</option>
                <?php foreach ($classes as $class) : ?>
                    <option value=$class['class']?><?=$class['class']?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Submit">
        </form>
        <div id="sort-by">
        <p>Sort By:</p>
            <input type="radio" name="price" value="price">Price
            <input type="radio" name="year" value="year">Year
        </div>
        <nav>
        <table>
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <!-- display all vehicles by attribute in table -->
                <?php foreach ($vehicles as $vehicle) : ?>
                <tr>
                    <td><?php echo $vehicle['year']; ?></td>
                    <td><?php echo $vehicle['make']; ?></td>
                    <td><?php echo $vehicle['model']; ?></td>
                    <td><?php echo $vehicle['type']; ?></td>
                    <td><?php echo $vehicle['class']; ?></td>
                    <td><?php echo "$".$vehicle['price']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </nav>
    </section>
</main> 
<?php include('view/footer.php'); ?>