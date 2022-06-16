<?php

 require_once 'controller.php';

var_dump(Database::recover(Database::query("SELECT * FROM user  WHERE id = ?", [7])));
var_dump(Database::recover(Database::query("SELECT * FROM user  WHERE id = ?", [7])));
var_dump(Database::recover(Database::query("SELECT * FROM user  WHERE id = ?", [7])));