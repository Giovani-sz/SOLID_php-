<?php
interface CanPlay
{
public function play ();

}
interface CanFloat
{
public function float();

}

interface CanQuack
{
    public function quack();
}

class Duck implements CanFloat, CanQuack, CanPlay
{
public function float()
{
    echo "the duck is floating";
}

public function quack()
{
    echo "the duck is quacking";
}
public function play()
{
    $this->float();
    $this->quack();
}
}

    class WoodenDuck implements CanFloat, CanPlay
{
public function float()
{
    echo "the wooden duck is floating";
}

public function play()
{
    $this->float();
}
}
class Frog implements CanPlay 
{

    public function play ()
    {
        echo "the frog is palying";
    }
}
class Robot implements CanPlay 
{

    public function play ()
    {
        echo "the robot is dancing";
    }
}

class pond
{

    public function sendToPlay(CanPlay $player)   
    {
        $player->play();
    }
}

$pond = new Pond();
$pond->sendToPlay(new Duck());
$pond->sendToPlay(new WoodenDuck());
$pond->sendToPlay(new Frog());
$pond->sendToPlay(new Robot());