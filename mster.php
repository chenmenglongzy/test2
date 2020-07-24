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

    echo '222';
}
?>