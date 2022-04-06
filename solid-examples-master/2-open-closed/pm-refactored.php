<?php

interface Worker
{
    public function work();
}

class Programmer implements Worker
{
    public function work()
    {
        return 'coding';
    }
}

class Tester implements Worker
{
    public function work()
    {
        return 'testing';
    }
}

class ProjectManagement
{
    protected $members;
    
    public function addmember(Worker $member)
    {
        $this->members[] = $member;
    }
    public function process(Worker $member)
    {
        return $member->work();
    }
}

$p = new ProjectManagement();
$p->process($member);