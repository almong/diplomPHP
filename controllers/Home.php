<?php
include '../function/autoloadClass.php';

$query = new QueryBuilder();

$categorys = $query->showAll('category');
$questions = $query->showAll('question');

include '../views/index.php';