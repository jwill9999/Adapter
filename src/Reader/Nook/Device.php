<?php

namespace Reader\Nook;

use Reader\EReaderInterface;

class Device implements EReaderInterface
{
    public function turnOn()
    {
        echo 'Turning the Nook Device On' . "\n";
    }

    public function pressNextButton()
    {
        echo 'press the next button on the Nook Device' . "\n";
    }
}
