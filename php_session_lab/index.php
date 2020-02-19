<?php 
include('header.php');

 ?>
    <nav>
          <form method="post" action="" class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" name="username" placeholder="User" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-success">LOG IN</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, dear customer!</h1>
        <p>This is a web site for a  marketing,information, distribution and sales of consumer electronics. It includes a  catalog with  5 products Use it as a starting point to entertain more unique.</p>
      
      </div>
    </div>

    

    </body>
</html>
<?php 
session_start();
if (!empty($_POST)){
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];
      if (!empty($_SESSION['username']) && !empty($_SESSION['password'])) {     
        echo "<p><a href='login.php'>Успешно успешно влязохте, "
      . $_SESSION['username']."</a></p>";
      }
   
  }
  ?>