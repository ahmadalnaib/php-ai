

<?php
require_once('./layouts/header.php');
include_once './classes/robot.class.php';

$ahmed=new Robot('ahmed','php-laravel','faheem.png',array('what is noveLaravel',"node or laravel"),array('laravel admin','laravel'));


$zozo=new Robot('zozo','react-php','sportsman.png',array('what is express',"node or c#"),array('node frame work','c#'));


$bobo=new Robot('zozo','react-php','sportsman.png',array('what is express',"node or c#"),array('node frame work','c#'));

$bobo1=new Robot('zozo1','react-php','sportsman.png',array('what is express',"node or c#"),array('node frame work','c#'));


$robots=[$ahmed,$zozo,$bobo,$bobo1];

$isLoggedIn=false;

?>


<main>

  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
   <hr>
  <div class="container">
  <div class="grid-main">
  
    <?php foreach($robots as $robot): ?>
      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo "assets/images/".$robot->image  ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title text-dark"><?php echo $robot->name ?></h5>
        <p class="card-text  text-dark"><?php echo $robot->spec ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
    </div>
</main>

<hr>

<?php require_once('./layouts/footer.php') ?>