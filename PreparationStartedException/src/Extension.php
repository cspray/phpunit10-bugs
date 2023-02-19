<?php

namespace Cspray\PHPUnit10Bugs\PreparationStartedException;

use PHPUnit\Event\Code\TestMethod;
use PHPUnit\Event\Test\PreparationStarted;
use PHPUnit\Event\Test\PreparationStartedSubscriber;
use PHPUnit\Runner\Extension\Extension as PHPUnitExtension;
use PHPUnit\Runner\Extension\Facade;
use PHPUnit\Runner\Extension\ParameterCollection;
use PHPUnit\TextUI\Configuration\Configuration;

class Extension implements PHPUnitExtension {

    public function bootstrap(Configuration $configuration, Facade $facade, ParameterCollection $parameters) : void {
        $facade->registerSubscriber(new class implements PreparationStartedSubscriber {

            public function notify(PreparationStarted $event) : void {
                if ($event->test()->isTestMethod()) {
                    $test = $event->test();
                    assert($test instanceof TestMethod);
                    $reflectionClass = new \ReflectionClass($test->className());
                    if ($reflectionClass->getAttributes(ThrowException::class, \ReflectionAttribute::IS_INSTANCEOF) !== []) {
                        throw new \RuntimeException('Throwing an exception because ' . $test->className() . ' has #[ThrowException] Attribute.');
                    }
                }
            }
        });
    }
}