<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
      <h2>popo_juju_lulu</h2>
      <ul class="nav nav-pills nav-stacked">
      <?php
      if (!isset($isactive)) {
        echo '<li class="active"><a href="index.php">Dashboard</a></li>';
      }
      else {
        echo '<li><a href="">Dashboard</a></li>';
      }

      foreach ($list as $dbname) {
        if ($isactive == $dbname["Database"]) {
          echo '<li class="active"><a href="index.php?db='.$dbname["Database"].'">'.$dbname["Database"].'</a></li>';
        }
        else {
          echo '<li><a href="index.php?db='.$dbname["Database"].'">'.$dbname["Database"].'</a></li>';
        }
      }
      ?>
      </ul><br>
    </div>
    <br>
