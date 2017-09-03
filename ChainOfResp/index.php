<?php

abstract class HomeChecker
{

    protected $successor;

    public abstract function check(HomeStatus $home);

    public function successWith(HomeChecker $successor) {

        $this->successor = $successor;
    }

    public function next(HomeStatus $home) {

        if ($this->successor != null)
        {

            $this->successor->check($home);
        }
    }
}

class Locks extends HomeChecker
{

    public function check(HomeStatus $home) {

        if (! $home->locked)
        {
            throw new Exception('You forgot to lock.');
        }

        $this->next($home);
    }
}

class Lights extends HomeChecker
{

    public function check(HomeStatus $home) {

        if (! $home->lightsOff)
        {
            throw new Exception('You forgot to turn the lights off.');
        }

        $this->next($home);
    }
}

class Alarms extends HomeChecker
{

    public function check(HomeStatus $home) {

        if (! $home->alarmOn)
        {
            throw new Exception('Alarms have not been turned on.');
        }

        $this->next($home);
    }
}

class HomeStatus
{

    public $locked = true;

    public $lightsOff = true;

    public $alarmOn = false;

}

$lock = new Locks();
$light = new Lights();
$alarm = new Alarms();

$lock->successWith($light);
$light->successWith($alarm);


$lock->check(new HomeStatus());


