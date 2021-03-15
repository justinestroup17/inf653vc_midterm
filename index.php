<?php
// Import the five files from the model
include_once('model/database.php');
include_once('model/classes_db.php');
include_once('model/makes_db.php');
include_once('model/types_db.php');
include_once('model/vehicles_db.php');

$vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
$model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);

$type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
$make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
$class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);

// look for input_post, if not then input_get:
if (!$type_id) {
    $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
}
if (!$make_id) {
    $make_id = filter_input(INPUT_GET, 'make_id', FILTER_VALIDATE_INT);
}
if (!$class_id) {
    $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
}

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    // if action isn't defined, the default action is list vehicles
    if(!$action) {
        $action = '../view/vehicle_list.php';
    }
}

// controller will handle the routing
switch($action) {
    default:
        $vehicles = get_all_vehicles();
        $makes = get_makes();
        $types = get_types();
        $classes = get_classes();
        include('view/vehicle_list.php');
}
?>