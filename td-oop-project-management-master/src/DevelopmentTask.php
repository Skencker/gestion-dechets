<?php

require_once 'Task.php';
require_once 'Member.php';
require_once 'DeveloperInterface.php';

class DevelopmentTask extends Task
{
    public function setMember(?Member $member): self
    {
        if (!($member instanceof DeveloperInterface)) {
            throw new Exception("", 1);
        }
        return parent::setMember($member);
    }
}
