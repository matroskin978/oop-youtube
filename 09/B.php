<?php

class B extends A
{

    public string $public = 'public2';
    protected string $protected = 'protected2';
    private string $private = 'private2';

    public function printProps(): void
    {
        echo __CLASS__ . PHP_EOL;
        echo $this->public . PHP_EOL;
        echo $this->protected . PHP_EOL;
        echo $this->private . PHP_EOL;
    }

    public function getPrivate(): string
    {
        return $this->private;
    }

    public function setPrivate(string $private): void
    {
        $this->private = $private;
    }

}