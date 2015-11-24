<?php

$taskSubmit = new TaskSubmit();

$taskSubmit->transJson($_POST['data']);

if ($taskSubmit->update()) {
    echo "success";
}
else {
    echo "fail";
}