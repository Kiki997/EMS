<?php
//session_start();
if(!$_SESSION['u_name']){
    header('Location: index.php');
}

?>
<style>
nav{
  background-color:#9e9e9d;
}


</style>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="dash.php">WELCOME <?php echo $_SESSION['u_name']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dash.php">Dash <span class="sr-only">(current)</span></a>
      </li>
      
     
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn text-dark btn-outline-success my-2 my-sm-0 bg-warning" type="submit"><a href="logout.php"> Log out </a></button>

    </form>
  </div>
</nav>