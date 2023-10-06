<?php
namespace class;

use class\Trait\IrishCoffeeTrait;
use class\Trait\EspressoCoffeeTrait;

class MultiCoffeeMachine extends CoffeMaker 
{
 
    use IrishCoffeeTrait;
    use EspressoCoffeeTrait;
}

?>