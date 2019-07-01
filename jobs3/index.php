<?php include_once 'config/init.php'; ?>

<?php
$car = new Car;
if(isset($_SESSION['u_id'])){
    $template = new Template('templates/frontpage.php');
} else {
    $template = new Template('templates/customerview.php');
}

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->cars = $car->getByCategory($category);
    $template->title = 'Cars In'.$car->getCategory($category)->name;
} else {
    $template->title = 'List Cars for Sale';
    $template->cars = $car->getAllCars();
}

$template->categories = $car->getCategories();

echo $template;