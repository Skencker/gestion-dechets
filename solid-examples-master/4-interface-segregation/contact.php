<?php

interface ContactInterface
{
    public function getPhone();
    public function getEmail();
    public function getAddress();
}

class User implements ContactInterface
{
    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return $this->address;
    }
}

class LeadUser implements ContactInterface
{
    public function getPhone()
    {
        return null;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return null;
    }
}

class PhoneLeadUser implements ContactInterface
{
    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return null;
    }

    public function getAddress()
    {
        return null;
    }
}

class Mailer
{
    public function send(ContactInterface $contact)
    {
        $email = $contact->getEmail();
        mail($email, $subject, $content);
    }
}
