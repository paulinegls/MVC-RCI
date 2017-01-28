<div class="col-sm-10">
	<h1>Accueil <small>Liste des bases de données</small></h1>
  <ul class="list-group">
  <?php
  foreach ($list as $dbname) {
    echo '<li class="list-group-item"><a href="index.php?db='.$dbname.'">'.$dbname.'</a> <span class="badge">12</span></li>';
  }
  ?>
  </ul>
</div>