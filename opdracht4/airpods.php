<?php

class Airpods {

    public function __construct() {}

    public $isCharging;
    # Battery levels
    public $charger_battery = 100;
    public $earbuds_battery = 100;
    public $soundMuted = false;
    public $connected = false;
    public $connection;

    public function callSiri() {
        # Call Siri
    }

    public function playPause() {
        $this->soundMuted = ($this->soundMuted == true) ? false : true;
    }

}

class Charger extends Airpods {

    public function __construct() {
        $this->charge();
    }

    public function charge() {
        if ($this->charger_battery > 0 && $this->earbuds_battery < 100) {
            $this->isCharging = true;
            # Increase power by one and lower battery of charger
            $this->charger_battery -= 1;
            $this->earbuds_battery += 1;
        } else {
            $this->isCharging = false;
        }
    }

    public function light() {
        if ($this->charger_battery < 25) {
            # Turn red
        } else if ($this->charger_battery < 60) {
            # Turn orange
        } else if ($this->charger_battery > 60) {
            # Turn green
        }
    }

    public function connect() {
        # Make a bluetooth connection
    }

    public function disconnect() {
        # Disconnect
        $this->connection = null;
        $this->connected = false;
    }

}

$airpods = new Charger();
var_dump($airpods); 