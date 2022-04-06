<?php

class Report implements Formattable
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
}

interface JsonFormattable
{
    public function getContents();
}

class JsonFormatter
{
    public function format(JsonFormattable $object)
    {
        return json_encode($object->getContents());
    }
}

$formatter = new JsonFormatter();
$formatter->format(new Report('my report', new DateTime()));
