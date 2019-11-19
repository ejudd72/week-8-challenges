<?php

namespace App\Library;

class Shelf
{
    private $books = [];
    private $titles = [];

    public function addBook($book)
    {
        $this->books[] = $book;
        return $this;
    }

    public function titles()
    {
       $titles = array_map(function ($book){
            return $book->title();
        }, $this->books);
        return $titles;
    }

    public function books()
    {
        return $this-> $books;
    }
}

