<?php

require_once 'Member.php';
require_once 'DesignerInterface.php';
require_once 'TesterInterface.php';

class Designer extends Member implements DesignerInterface, TesterInterface
{
    public function code()
    {

    }
}
