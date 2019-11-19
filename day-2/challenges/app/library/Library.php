<?php

namespace App\Library;

class Library
{
    private $shelves = [];

    public function shelves()
    {
        return $this->$shelves;
    }

    public function addShelf($shelf)
    {
        $this->shelves[] = $shelf;
        return $this;
    }

    public function titles()
    {
        $titles = [];

        //put the titles into an array
        foreach($this->shelves as $shelf) {  
            $titles = array_merge($titles, $shelf->titles());
        };
        return $titles;
    }
}