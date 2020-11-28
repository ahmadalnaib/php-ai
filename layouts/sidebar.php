<?php $isLoggedIn=false;

if(isset($_POST['email']))
{
  if($_POST['email']=="php@ahmed.com" && $_POST['password']=='123')
  {
    $message="ok good";
    $isLoggedIn=true;
  } else{
     $message="no";
  }
}

if(isset($message))
{
  echo $message;
}

?>

<?php if(!$isLoggedIn): ?>
<form method="post" action="index.php">
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
 <?php else: ?>
  <a href="index.php" class="btn btn-primary">خروج</a>

<?php endif; ?>