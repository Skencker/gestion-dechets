<?php

interface EmailInterface
{
    public function getEmail();
}

interface PhoneInterface
{
    public function getPhone();
}

interface AddressInterface
{
    public function getAddress();
}

class User implements EmailInterface, PhoneInterface, AddressInterface
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

class LeadUser implements EmailInterface
{
    public function getEmail()
    {
        return $this->email;
    }
}


class PhoneLeadUser implements PhoneInterface
{
    public function getPhone()
    {
        return $this->phone;
    }
}

class Mailer
{
    public function send(EmailInterface $contact)
    {
        $email = $contact->getEmail();
        mail($email, $subject, $content);
    }
}
