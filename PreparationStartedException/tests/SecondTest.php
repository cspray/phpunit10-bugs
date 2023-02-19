<?php

namespace Cspray\PHPUnit10Bugs\PreprationStartedException\Tests;

use Cspray\PHPUnit10Bugs\PreparationStartedException\ThrowException;
use PHPUnit\Framework\TestCase;

#[ThrowException]
class SecondTest extends TestCase {

    public function testSomething() : void {
        self::assertFalse(false);
    }

}