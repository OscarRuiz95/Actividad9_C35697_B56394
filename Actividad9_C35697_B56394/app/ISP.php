<?php

namespace App;

interface ManageableInterface
{
    public function beManaged(): string;
}

interface WorkableInterface
{
    public function work(): string;
}

interface SleepableInterface
{
    public function sleep(): string;
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{
    public function work(): string
    {
        return 'Humano Trabajando';
    }

    public function sleep(): string
    {
        return 'Humano Durmiendo';
    }

    public function beManaged(): string
    {
        return $this->work() . " | " . $this->sleep();
    }
}

class Android implements WorkableInterface, ManageableInterface
{
    public function work(): string
    {
        return 'Android Trabajando';
    }

    public function beManaged(): string
    {
        return $this->work();
    }
}

class Captain
{
    public function manage(ManageableInterface $worker): string
    {
        return $worker->beManaged();
    }
}
