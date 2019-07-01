<?php include_once 'config/init.php'; ?>

<?php
$car = new Car;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($car->delete($del_id)){
        redirect('index.php', 'Car Deleted', 'success');
    } else {
        redirect('index.php', 'Car Not Deleted', 'error');
    }
}

$template = new Template('templates/car-single.php');

$car_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->car = $car->getCar($car_id);

echo $template;