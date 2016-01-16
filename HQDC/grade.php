<?php
include 'includes/header.php';
?>
<?php 
$task = new DBTask();
$taskAll = $task->findAll();
$dbtaskSubmit = new DBTaskSubmit();
$taskSubmit = new TaskSubmit();
$submitData = $dbtaskSubmit->findAll();
$student = new DBStudent();
$stu = $student->findAll();
//var_dump($submitData);
?>
<link rel="stylesheet" type="text/css" href="css/table/component.css">
<link rel="stylesheet" type="text/css" href="css/grade.css">  
<div class="main row">
    <div class="box col-md-8 col-md-offset-2">
        <table class="table">
            <thead>
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <?php foreach ($taskAll as $key=>$value){
                        echo "<th>{$value->title}</th>\n";
                    }?>
                    <th>成绩</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($stu as $key1=>$value1){
              
                
            ?>
                <tr>
                 
                    <?php 
                     echo "<td>{$user->find($value1->user_id)->data()->username}</td>";
                     echo "<td>{$user->find($value1->user_id)->data()->name}</td>";
                     $totalGrade = 0;
                     foreach ($taskAll as $key=>$value){
                       
                        $taskS = $taskSubmit->findWithUserAndTask($value1->user_id, $value->id);
                        $grade = 0;
                        if($taskS){
                         
                          $grade = $taskS->score;  
                        }
                        $totalGrade+=$grade;
                        echo "<td>{$grade}</td>\n";
                    }
                    $totalGrade/=count($taskAll);
                    echo "<td>{$totalGrade}</td>";
                    ?>
                    
                </tr>
               <?php }?>
            </tbody>
        </table>
    </div>     
</div>

<script src="js/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/jquery.stickyheader.js"></script>


<?php
include "includes/footer.php";
?>