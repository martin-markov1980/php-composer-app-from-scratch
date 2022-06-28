<?php
require 'vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;

echo 'Test';

$file_system = new Filesystem();

$file_system->dumpFile(__DIR__ . '/new_file.txt', 'Test content.');