<?php

require_once 'Developer.php';
require_once 'TestingTask.php';

$pierre = new Developer('Pierre', 'Poljak', 'pp@pp.com');
$task1 = new TestingTask('first task', new DateTime(), 60);
$task1->setMember($pierre);
