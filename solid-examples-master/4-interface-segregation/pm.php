<?php

interface Worker
{
    public function canCode();
    public function code();
    public function test();
}

class Programmer implements Worker
{
    public function canCode()
    {
        return true;
    }

    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements Worker
{
    public function canCode()
    {
        return false;
    }

    public function code()
    {
         throw new Exception('Opps! I can not code');
    }

    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Worker $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}
