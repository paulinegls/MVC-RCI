<div class="col-sm-10 col-sm-offset-2 main">
  <h1><?php echo $db ?></h1>
  <nav>
    <ul>
<?php

$html = '';

foreach($tables as $table){
  $html.= '<li><a href="index.php?db='.$db.'&table='.$table['Tables_in_'.$db].'">'. $table['Tables_in_'.$db] .'</a></li>';
}

echo $html;

?>
    </ul>
  </nav>
</div>
