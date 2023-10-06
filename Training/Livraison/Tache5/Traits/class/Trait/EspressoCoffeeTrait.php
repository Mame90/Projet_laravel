<?php 

namespace class\Trait;
  trait EspressoCoffeeTrait
  {
    public function makeEspresso(): string
    {
        return static::class. 'fait un cafe espresso';
    }
  }