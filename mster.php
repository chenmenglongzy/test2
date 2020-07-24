<?php
//echo 'master';
//echo '2';
function actionDdjNotify() {

    try {
        $date = (string) $this->getParam('date');
        $this->getInstance()->notify($date);
    } catch (\Exception $e) {
        return $this->sdkOutput($e->getCode(), $e->getMessage());
    }
    $this->ret = [];
    exit;
}

function actionDdjNotifyV1() {

    try {
        $date = (string) $this->getParam('date');
        $this->getInstance()->notify($date);
    } catch (\Exception $e) {
        return $this->sdkOutput($e->getCode(), $e->getMessage());
    }
    $this->ret = [];
    exit;
}
function  test1(){
    echo '11';
}
function test(){

    echo '1111';
    $a = '2';
    if($a == 1){
        echo '2222';
    }else{
        echo '4444';
    }
    if($a == 5){
        echo '555';
    }
    echo '3333';
}
?>