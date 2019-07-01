<?php include 'inc/header.php' ?>
<div class="container">
    <?php echo $car->dealer; ?>
    <h2 class="page-header"><?php echo $car->car_make . " "; ?>(<?php echo $car->car_model; ?>)</h2>
    <small>Posted By: <?php echo $car->contact_user; ?></small>
    <hr>
    <p class="lead"><?php echo "Car Information"; ?></p>  <!-- <p class="lead"><?php echo $car->car_model; ?></p>  -->
    <ul class="list-group">
        <li class="list-group-item"><strong>Location: </strong> <?php echo $car->location; ?></li>
        <li class="list-group-item"><strong>Dealer: </strong> <?php echo $car->dealer; ?></li>
        <li class="list-group-item"><strong>Make: </strong> <?php echo $car->car_make; ?></li>
        <li class="list-group-item"><strong>Model: </strong> <?php echo $car->car_model; ?></li>
        <li class="list-group-item"><strong>Price: </strong> <?php echo $car->price; ?></li>
        <li class="list-group-item"><strong>Email: </strong> <a href="mailto:<?php echo $car->contact_email;?>"><?php echo $car->contact_email; ?></a></li>
    </ul>
    <br><br>
    <button class="btn btn-dark"><a href="index.php">Go Back</a></button>
    <br><br>
<?php include 'inc/footer.php'; ?>
