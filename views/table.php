<div class="col-sm-10 col-sm-offset-2 main">
	<h1><?php echo $table_name ?></h1>
	<table class="table table-hover">
    <thead>
      <tr>
<?php
  $html = '';

  foreach($fields as $field){
    $html.= "<th>".$field['Field']." (".$field['Type'].")</th>";
  }

  echo $html;
?>
      </tr>
    </thead>
    <tbody>
<?php

$html = '';
foreach($rows as $row){
  $html.= "<tr>";
  foreach($row as $column){
    $html.= "<td>" .$column. "</td>";
  }
  $html.= "</tr>";
}

echo $html;
?>
    </tbody>
  </table>
</div>