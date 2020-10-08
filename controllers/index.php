<?php

$tasks = $database->selectAll('tasks');

require 'views/index.view.php';