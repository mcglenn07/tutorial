<?php

require_once 'db.php';

$con = new pdo_db("users");

// $where = array("id"=>2);
// $columns = ["CONCAT(fname, ' ', lname) full_name"];
// $results = $con->get($where,$columns);

// var_dump($results);
// echo $results[0]['full_name'];

// $columns = ["lname","dept"];
// $all = $con->all($columns);

// var_dump($all);

// $q = $con->getData("SELECT * FROM users");

// var_dump($q);

// $data = array("fname"=>"Sly","lname"=>"Flores");
// $con->insertData($data);

// $data = array("id"=>3,"fname"=>"Sylvester","lname"=>"Flores","dept"=>"MISD");
// $con->updateData($data,'id');

// $delete = array("id"=>"1,3");
// $con->deleteData($delete);

$con->table = "documents";
$con->updateData(array('id'=>2,'doc_owner'=>'Lorem'),'id');

?>