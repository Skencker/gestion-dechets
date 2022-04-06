<?php

require_once 'Member.php';

abstract class Task
{
    private string $label;
    private DateTime $date;
    private int $duration;
    private ?Member $member;

    public function __construct(string $label, DateTime $date, int $duration)
    {
        $this->label = $label;
        $this->date = $date;
        $this->duration = $duration;
    }

    public function setMember(?Member $member): self
    {
        $this->member = $member;

        return $this;
    }
}
