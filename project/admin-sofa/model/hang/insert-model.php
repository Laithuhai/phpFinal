<?php
function insertAdmin($hang){

    $sql = "Insert into tb_hang ( ten_hang) values( '$hang')";

    $check = execute($sql);
    return $check;
}
