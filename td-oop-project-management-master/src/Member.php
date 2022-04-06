<?php

abstract class Member
{
    protected string $firstname;
    protected string $lastname;
    protected string $email;

    public function __construct(string $firstname, string $lastname, string $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}
