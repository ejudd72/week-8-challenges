<?php

namespace App\Library;

class Book
{
    private $title;
    private $pages;
    private $onPage = 1;

    public function __construct($title, $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read($number)
    {
        $this->onPage += $number;
        return $this;
    }

    public function currentPage()
    {
        return $this->onPage;
    }

    public function title()
    {
        return $this->title;
    }

}