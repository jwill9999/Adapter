<?php

namespace Reader\Nook;

use Reader\Book\BookInterface;

// create an adapter and implement the interface of the
// class your trying to adapt.
class NookAdapter implements BookInterface
{
    private $_Nook;

    public function __construct(Device $Nook)
    {
        $this->_Nook = $Nook;
    }

    public function open()
    {
        return $this->_Nook->turnOn();
        echo 'Turning the Nook On' . "\n";
    }

    public function turnPage()
    {
        return $this->_Nook->pressNextButton();
        echo 'press the next button on the Nook' . "\n";
    }

}
