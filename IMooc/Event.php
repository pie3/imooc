<?php

namespace IMooc;

class Event extends EventGenerator
{
    function trigger(){
        echo "Event<br/>\n";
        $this->notify();

    }
}

class Observer1 implements Observer
{
    function update($event_info = null)
    {
        echo "逻辑1<br/>\n";
    }
}

class Observer2 implements Observer
{
    function update($event_info = null)
    {
        echo "逻辑2<br/>\n";
    }
}

$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();