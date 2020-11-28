<?php
require_once('./layouts/header.php');
include_once './classes/robot.class.php';
require_once('./robotInit.php');


?>

<div class="col-md-8">
<?php require_once('./layouts/sidebar.php') ?>
</div>

<div class="container">
<div class="card mb-3 bg-dark text-center">
  <img src=<?php echo "./assets/images/{$robot->image}"; ?> class="card-img-top mx-auto" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $robot->name ?></h5>
    <p class="card-text">
      <?php foreach($robot->questions as $question): ?>
         
        <small><?php echo $question ?></small>

        <?php endforeach ?>
    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>