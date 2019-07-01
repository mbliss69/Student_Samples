<?php include 'inc/header.php' ?>
<div class="container">
    <?php echo $car->dealer; ?>
    <h2 class="page-header"><?php echo $car->car_make . " "; ?>(<?php echo $car->car_model; ?>)</h2>
    <small>Posted By: <?php echo " " . $car->contact_user; ?></small>
    <hr>
    <p class="lead"> <?php echo $car->location; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Location: </strong> <?php echo $car->location; ?></li>
        <li class="list-group-item"><strong>Dealer: </strong> <?php echo $car->dealer; ?></li>
        <li class="list-group-item"><strong>Make: </strong> <?php echo $car->car_make; ?></li>
        <li class="list-group-item"><strong>Model: </strong> <?php echo $car->car_model; ?></li>
    </ul>
        <form style="display:inline;">
       <a href="index.php" class="goback">Go Back</a>
        </form>
        <form style="display:inline;">
        <a onclick="return confirm('Are you sure you want to EDIT this item?');" href="edit.php?id=<?php echo $car->id;?>" class="btn btn-primary">Edit</a>
        </form>
        <form style="display:inline;" method="post" action="car.php">
            <input type="hidden" name="del_id" value="<?php echo $car->id; ?>">
            <a href="url_to_delete" onclick="return confirm('Are you sure you want to DELETE this item?');"><input type="submit" class="btn btn-danger" value="Delete"></a>
        </form>
</div>
<div class="container">
<?php include 'inc/footer.php'; ?>
