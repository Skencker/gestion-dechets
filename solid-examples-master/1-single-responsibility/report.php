<?php

class Report
{
    private $title;
    private $date;

    public function __construct($title, $date)
    {
        $this->title = $title;
        $this->date = $date;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }

    public function formatJson()
    {
        return json_encode($this->getContents());
    }
}
