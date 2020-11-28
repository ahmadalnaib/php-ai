
<?php
require_once('./layouts/header.php');
include_once './classes/robot.class.php';
require_once('./robotInit.php');

?>

<main>

  <div class="col-md-4">
 <?php require_once('./layouts/sidebar.php') ?>
  </div>
  
   <hr>
  <div class="container">
  <div class="row">
<div class="col-sm-8">

  <div class="grid-main">
  
    <?php foreach($robots as $robot): ?>
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo "assets/images/".$robot->image  ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-dark"><?php echo $robot->name ?></h5>
        <p class="card-text  text-dark"><?php echo $robot->spec ?></p>
        <a href="details.php?rotbot=<?=$robot ?>" class="btn btn-primary">more</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  </div>
</div>
    </div>
</main>

<hr>

<?php require_once('./layouts/footer.php') ?>