# PHPUnit 10 Bugs

This repo represents isolated examples of working with PHPUnit 10 Extension and Event system that I believe represent 
bugs.

## Installation

This repo is not intended to be installed through Composer as a traditional dependency. It is recommended that you 
install this repo by cloning directly to your local machine.

```
git clone git@github.com:cspray/phpunit10-bugs.git
```

## How to Use This Repo

This repo is meant to showcase specific, isolated bugs. Each directory represents a different scenario that causes a 
bug to appear. If you navigate to the directory and run `../vendor/bin/phpunit` the tests should display either an 
error condition or something else unexpected. Each directory contains its own README explaining what is wrong in the 
given scenario, what actual output from PHPUnit looks like, and what the expected output is.