<?php include 'inc/header.php' ?>

      <div class="container">
        <h1 class="title">List of Cars</h1>
    <h2><?php echo $title; ?></h2>
    <?php foreach($cars as $car): ?>
      <div class="row marketing border">
            <div class="col-md-10">
              <h4><?php echo $car->dealer . " - " . $car->location; ?></h4>
              <p><?php echo $car->car_make; ?></p>
            </div>

            <div class="col-md-2 margin">
                <button><a class="btn btn-dark" href="car.php?id=<?php echo $car->id; ?>">Modify</a></button>
            </div>
      </div>
    <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>
