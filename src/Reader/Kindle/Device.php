

<?php

namespace Reader\Kindle;

use Reader\EReaderInterface;

class Device implements EReaderInterface
{
    public function turnOn()
    {
        echo 'Turning the kindle On' . "\n";
    }

    public function pressNextButton()
    {
        echo 'press the next button on the kindle' . "\n";
    }
}
