<?php

require_once 'Member.php';
require_once 'DeveloperInterface.php';
require_once 'TesterInterface.php';

class Developer extends Member implements DeveloperInterface, TesterInterface
{
    public function code()
    {

    }
}
