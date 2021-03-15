<?php include('view/header.php'); ?>
<main>
    <section id="list" class="list">
            <h1><?='Vehicle Inventory'?></h1>
            <!-- View All Makes -->
            <form action="." method="get" id="list__header_select" class="list__header_select">
                <input type="hidden" name="action" value="list_vehicles">
                <select name="make_id" required>
                    <option value="0">View All Makes</option>
                    <?php foreach($makes as $make) : ?>
                    <?php if($make_id == $make['ID']) { ?>
                    <option value="<?= $make['ID'] ?>" selected>
                        <?php } else { ?>
                    <option value="<?= $make['ID'] ?>">
                        <?php } ?>
                        <?= $make['make'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <button class="add-button bold">Go</button>
            </form>
            <!-- View All Types -->
            <form action="." method="get" id="list__header_select" class="list__header_select">
                <input type="hidden" name="action" value="list_vehicles">
                <select name="type_id" required>
                    <option value="0">View All Types</option>
                    <?php foreach($types as $type) : ?>
                    <?php if($type_id == $type['ID']) { ?>
                    <option value="<?= $type['ID'] ?>" selected>
                        <?php } else { ?>
                    <option value="<?= $type['ID'] ?>">
                        <?php } ?>
                        <?= $type['type'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <button class="add-button bold">Go</button>
            </form>
            <!-- View All Classes -->
            <form action="." method="get" id="list__header_select" class="list__header_select">
                <input type="hidden" name="action" value="list_vehicles">
                <select name="class_id" required>
                    <option value="0">View All Classes</option>
                    <?php foreach($classes as $class) : ?>
                    <?php if($class_id == $class['ID']) { ?>
                    <option value="<?= $class['ID'] ?>" selected>
                        <?php } else { ?>
                    <option value="<?= $class['ID'] ?>">
                        <?php } ?>
                        <?= $class['class'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <button class="add-button bold">Go</button>
            </form>
        <div id="sort-by">
        <p>Sort By:</p>
            <input type="radio" name="price" value="price">Price
            <input type="radio" name="year" value="year">Year
        </div>
        <nav>
        <?php if($vehicles) { ?>
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
        <?php } ?>
        <br>
        </nav>
    </section>
</main> 
<?php include('view/footer.php'); ?>