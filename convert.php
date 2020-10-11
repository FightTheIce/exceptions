<?php

//update the php files
$files = scandir('src');
foreach ($files as $file) {
    if ($file == '.' OR $file == '..') {
        continue;
    }

    $contents = file_get_contents('src/' . $file);

    //now lets do some replacements lol...
    $contents = str_replace('Bright Nucleus Core', 'Fight The Ice Core', $contents);
    $contents = str_replace('BrightNucleus\Exception', 'FightTheIce\Exceptions', $contents);
    $contents = str_replace('GPL-2.0+', 'MIT', $contents);
    $contents = str_replace('2015-2016 Alain Schlesser, Bright Nucleus', '2015-2020 Alain Schlesser, Bright Nucleus', $contents);

    file_put_contents('src/' . $file, $contents);
}

//update the composer file
$composer = file_get_contents('composer.json');
$composer = str_replace('BrightNucleus\\\\Exception\\\\', 'FightTheIce\\\\Exceptions\\\\', $composer);
$composer = str_replace('brightnucleus/exceptions', 'fighttheice/exceptions', $composer);
$composer = str_replace('Exceptions shared across Bright Nucleus components.', 'Exceptions shared across Fight The Ice components.', $composer);
file_put_contents('composer.json', $composer);

//update readme
$readme = file_get_contents('README.md');
$readme = str_replace('Copyright (c) 2017 Alain Schlesser, Bright Nucleus', 'Copyright (c) 2020 Alain Schlesser, Bright Nucleus', $readme);
$readme = str_replace('Bright Nucleus', 'Fight The Ice', $readme);
$readme = str_replace('brightnucleus', 'fighttheice', $readme);
file_put_contents('README.md', $readme);

//test suite
$test = file_get_contents('tests/ExceptionsTest.php');
$test = str_replace('BrightNucleus\Exception', 'FightTheIce\Exceptions', $test);
file_put_contents('tests/ExceptionsTest.php', $test);