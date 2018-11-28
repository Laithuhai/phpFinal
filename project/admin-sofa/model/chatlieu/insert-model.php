<?php
function insertAdmin($chatlieu){

    $sql = "Insert into tb_chatlieu ( chatlieu) values( '$chatlieu')";

    $check = execute($sql);
    return $check;
}
