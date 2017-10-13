<?php
class JobOpening
{
    private $title;
    private $description;
    private $contact;

    public function __construct($title,$description,$contact)
    {
        $this->title = $title;
        $this->description = $description;
        $this->contact = $contact;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
?>