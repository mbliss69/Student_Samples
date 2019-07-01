<?php include_once 'config/init.php'; ?>

<?php
$car = new Car;

$car_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    $data = array();
    $data['car_make'] = $_POST['car_make'];
    $data['dealer'] = $_POST['dealer'];
    $data['category_id'] = $_POST['category_id'];
    $data['car_model'] = $_POST['car_model'];
    $data['location'] = $_POST['location'];
    $data['price'] = $_POST['price'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($car->update($car_id,$data)){
        redirect('index.php', 'Your car information has been updated', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/car-edit.php');

$template->car = $car->getCar($car_id);
$template->categories = $car->getCategories();

echo $template;