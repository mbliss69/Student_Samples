<?php include_once 'config/init.php'; ?>

<?php
$car = new Car;

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

    if($car->create($data)){
        redirect('index.php', 'Your car has been listed', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/car-create.php');

$template->categories = $car->getCategories();

echo $template;