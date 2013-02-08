<?php

global $user;
$result = db_query("SELECT uid, note FROM {junior_notes}");
$uid = $user->uid;

$row =$result->fetchAssoc();

$count = 0;

$return = array();

if ($row['uid'] == $uid) {
  for ($count; $count <= 4; $count++) {
    $return[$count] = $row['note'];
    $row;
  }
}

?>

<style>
#circle {
  width: 100px;
  height: 100px;
  background: yellow;
  -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
  border-radius: 50px; }
</style>

<ol>
<li> <?php print $return[0] ?>
<li> <?php print $return[1] ?>
<li> <?php print $return[2] ?>
<li> <?php print $return[3] ?>
<li> <?php print $return[4] ?>

</ol>


