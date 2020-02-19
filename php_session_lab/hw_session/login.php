<?php 
include('header.php');
 ?>
  <div id="navbar" class="navbar-collapse collapse">
    <form method="post" action="" class="navbar-form navbar-right" role="form">
      <div class="form-group">
        <input type="text" name="username" placeholder="Name" class="form-control">
      </div>
          <div class="form-group">
            <input type="number" name="sum" placeholder="sum" class="form-control">
            </div>
          <button type="submit" name="submit" class="btn btn-success">Изпрати</button>
    </form>
        </div>
      </div>
<?php 
include('footer.php');
  if (!empty($_POST)) {
      if ($_POST['username'] ==='') {
      echo "Моля въведете вашето име";
      }elseif ($_POST['sum'] == null) {
      echo "Моля въведете сума!";
      }else{
        $_SESSION['username']=$_POST['username'];
        $_SESSION['sum']=$_POST['sum'];
        header('Location:products.php');
      } 
  }

?>


				