<?php
class Database {
    public function checkData($data) {
        throw new Exception('Data format error');
    }
}
$db = new Database();
$data = [];

if (false) {
    throw new Exception('Data error');
}

try {
  $db->checkData($data);
} catch (Exception $e) {
    echo $e->getMessage();
}
