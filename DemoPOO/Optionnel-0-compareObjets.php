<?php

class A {

    public $att1;
    public $att2;

}

class B {

    public $att1;
    public $att2;

}

$a = new A();
$a->att1='Hello';
$a->att2='Bonjour';
var_dump($a);

$b = new B;
$b->att1='Hello';
$b->att2='Bonjour';
//var_dump($b);

$c = new A();
$c->att1='Hello';
$c->att2='Bonjour';
var_dump($c);

$d = $a;
var_dump($d);

if ($a == $b)
    echo '$a == $b';
else
    echo '$a != $b';

echo '<br />';

if ($a == $c)
    echo '$a == $c';
else
    echo '$a != $c';

$c->att1 = 'Coucou';
echo '<br />';
if ($a == $c)
    echo '$a == $c';
else
    echo '$a != $c';

$a->att1 = 'Coucou';
echo '<br />';
if ($a == $c)
    echo '$a == $c';
else
    echo '$a != $c';
echo '<br />';

if ($a === $c)
    echo '$a === $c';
else
    echo '$a !== $c';

echo '<br />';
if ($a === $d)
    echo '$a === $d';
else
    echo '$a !== $d';



?>
