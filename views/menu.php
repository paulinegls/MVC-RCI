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
          echo '<li><a href="index.php">Dashboard</a></li>';
        }
        foreach ($list as $dbname) {
          if ($isactive) {
            echo '<li class="active"><a href="index.php?db='.$dbname.'">'.$dbname.'</a></li>';
          }
          else {
            echo '<li><a href="index.php?db='.$dbname.'">'.$dbname.'</a></li>';
          }
        }
        ?>
      </ul><br>
    </div>
    <br>
