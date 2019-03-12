
<?php

namespace Reader\Kindle;

use Reader\Book\BookInterface;

// create an adapter and implement the interface of the
// class your trying to adapt.
class KindleAdapter implements BookInterface
{
    private $_kindle;

    public function __construct(Device $kindle)
    {
        $this->_kindle = $kindle;
    }

    public function open()
    {
        return $this->_kindle->turnOn();
        echo 'Turning the kindle On' . "\n";
    }

    public function turnPage()
    {
        return $this->_kindle->pressNextButton();
        echo 'press the next button on the kindle' . "\n";
    }

}


