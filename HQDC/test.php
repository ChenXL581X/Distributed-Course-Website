<?php
include "includes/header.php";

$taskSubmit = new TaskSubmit();
$user = new User();
$taskS = $taskSubmit->findWithUserAndTask($user->data()->id,'1');
var_dump($taskS);

// $task = new DBTask();
// $date = 1448060300;
// $date1 = 1448060500;
// $taskArray = $task->findWithDateBetween($date,$date1);
// var_dump($taskArray);
?>
<style type="text/css">
  nav{
    display: none;
  }
</style>
<?php
include "includes/footer.php";
?>