<?php include 'inc/header.php' ?>
    <div class="container">

        <h2 class="page-header">Create Car Listing</h2>

        <form method="post" action="create.php">
        <div class="form-group">
            <label>Dealer</label>
            <input type="text" class="form-control" name="dealer">
        </div>

            <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

            <div class="form-group">
            <label>Car Make</label>
            <input type="text" class="form-control" name="car_make">
        </div>

            <div class="form-group">
            <label>Car Model</label>
            <textarea type="text" class="form-control" name="car_model"></textarea>
        </div>

            <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location">
        </div>

            <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price">
        </div>

            <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user">
        </div>

            <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <input type="submit" class="btn btn-default" value="Submit" name="submit">
        <a href="index.php" class="btn btn-primary">Cancel</a>
    </form>
</div>
</div class="container">
<?php include 'inc/footer.php'; ?>
