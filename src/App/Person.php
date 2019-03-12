<?php
namespace App;

use Reader\Book\BookInterface;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}
