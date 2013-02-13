<?php

// global $user;
// $uid = $user->uid;

// $result = db_query("SELECT uid, note FROM {junior_notes} WHERE uid = :uid", array(':uid' => $uid,
//   ));


// $temp = array();
// $val = 0;

// foreach ($result as $record) {
//   $temp[] = $record->note;
// }



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
<?php

foreach ($temp as $note) {
  print "<li> $note </li>";
}
?>

</ol>


