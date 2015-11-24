<?php
include "includes/header.php";

$taskSubmit = new TaskSubmit();
$user = new User();
$taskS = $taskSubmit->findWithUserAndTask($user->data()->id,'2');
var_dump($taskS->data());
?>
<style type="text/css">
  nav{
    display: none;
  }
</style>
<?php
include "includes/footer.php";
?>