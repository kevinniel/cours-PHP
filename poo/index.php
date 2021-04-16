<?php

// echo("welcome to POO");

// inclusion du fichier carre.php
require_once('classes/carre.php');

// echo( Carre::$count );

// $c = new Carre(3);

// echo($c->perimeter());

// echo( Carre::$count );

// echo($c->side);
// $c->printMe();
// $c->printMe2();
// $c->printMe3();
// echo($c->count);
// $c2 = new Carre(4);
// echo($c2->count);

$r = new Rectangle(3, 5);
$r->printMe();


