<?php
class Contact
{
    private $name;
    private $email;
    private $phone_number;
    private $job_postings;

    public function __construct($name,$email,$phone_number,$job_postings = [])
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->job_postings = [];
    }

    public function addJobPostings($jobPosting)
    {
        $this->job_postings[] = $jobPosting;
        return $this;
    }

    public function postedJobs()
    {
        return $this->job_postings;
    }

}

?>