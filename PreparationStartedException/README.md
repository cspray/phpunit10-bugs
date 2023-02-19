# Preparation Started Exception Thrown

This bug occurs when an Extension throws an exception during the `PHPUnit\Event\Test\PreparationStarted` event. The test 
that is being prepared is silently discarded and is not marked as a failure.

To run this example navigate run `../vendor/bin/phpunit` from the directory this README is in. The expected output is to 
show 2 tests; 1 passing and 1 failing/with an error. Instead, the actual output is that only 1 test runs. You can control 
which test fails by changing which TestCase is annotated with `ThrowException`. If both are annotated then no tests are 
run.
