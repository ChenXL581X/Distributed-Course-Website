<?php
require_once 'core/init.php';
include "includes/header.php";
$token = Token::generate();
if(Input::exists('get')) $filetype=Input::get('type')
?>
<div class="main row">
    <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" role="form" method="post" action="uploadware_run.php"
        enctype="multipart/form-data" >
        <input type="hidden" id="taskId" name="taskId" value="">
        <div class="form-group">
           <input type="hidden" name=type value="<?php if($filetype) echo $filetype;?>">
        </div>
           <div class="form-group">
              <label  class="col-sm-2 ">文件</label>
              <div class="col-sm-10">
                 <input type="file" class="form-control" name="ware">
              </div>
            </div>
              <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
               <button type="submit" class="btn btn-default">
                上传
               </button>
           
    </div>
</div>
<?php
include "includes/footer.php";
?>