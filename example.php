<?php
require __DIR__ . '/vendor/autoload.php';
use Namdevel\DuniaGames;

$a = new DuniaGames();

echo $a->getUserNameMobileLegends('161307989', '2244');
echo $a->getUserNameFreeFire('1250078552');
echo $a->getUserNameCODMobile('243402956362890880');
echo $a->getUserNameLifeAfter('23235326', 'Obelisk');
