<?php

class LightSwitch {
    public function on()
    {

    }

    public function off()
    {

    }

    private function connect()
    {

    }

    private function activate()
    {

    }
}

$switch = new LightSwitch();
//$switch->connect();           // throwing error because the connect() is private and cannot be used outside the Class

/**
 * ENCAPSULATION
 * Assume that user will never use connect() and activate() methods rather these methods are only used only within the
 * class, so to make them public unnecessary, so to hide them from public we use ENCAPSULATION make it either protected
 * or private methods.
 * Private Properties:      Can only & exclusively be accessed within the Class.
 * Protected Properties:    Can be extended when the Class is Inherited.
 */