<?php

namespace Reader\Book;

class PaperBack implements BookInterface
{
    public function open()
    {
        echo 'opening the paper book' . "\n";
    }

    public function turnPage()
    {
        echo 'turning the page of the paper book' . "\n";
    }
}
