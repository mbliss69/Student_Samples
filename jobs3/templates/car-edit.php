<?php include 'inc/header.php' ?>
    <div class="container">
    <h2 class="page-header">Edit Car Listing</h2>
    <form method="post" action="edit.php?id=<?php echo $car->id; ?>">
        <div class="form-group">
            <label>Dealer</label>
            <input type="text" class="form-control" name="dealer" value="<?php echo $car->dealer; ?>">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                <?php if($car->category_id == $category->id) : ?>
                    <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                <?php else : ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endif; ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Car Make</label>
            <input type="text" class="form-control" name="car_make" value="<?php echo $car->car_make; ?>">
        </div>
        <div class="form-group">
            <label>Car Model</label>
            <input type="text" class="form-control" name="car_model" value="<?php echo $car->car_model; ?>">
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location" value="<?php echo $car->location; ?>">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" value="<?php echo $car->price; ?>">
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $car->contact_user; ?>">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $car->contact_email; ?>">
        </div>
        <input type="submit" class="btn btn-default" value="Submit" name="submit">
        <a href="index.php" class="btn btn-primary">Cancel</a>
    </form>
</div>
<div class="container">
<?php include 'inc/footer.php'; ?>
