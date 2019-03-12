<?php

require __DIR__ . '/vendor/autoload.php';

new App\Main;

/**
 *         Wrap the new device with an adapter
 *         Default device is paperBack Book
 */

// PaperBack
(new App\Person)->read(new Reader\Book\PaperBack);
// Kindle
(new App\Person)->read(new Reader\Kindle\KindleAdapter(new Reader\Kindle\Device));
// Nook
(new App\Person)->read(new Reader\Nook\NookAdapter(new Reader\Nook\Device));
