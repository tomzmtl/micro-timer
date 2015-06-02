# MicroTimer

A small PHP class to measure PHP scripts execution time.

## How to use

Simply initialize a MicroTimer instance to get started.
All methods return the object instance and can be chained.

```php

<?php

    $timer = new MicroTimer();

    $timer->start();

    // do stuff

    echo $timer->stop()->getTime();

?>

```

## Available methods

### MicroTimer::start()

Start the timer.

### MicroTimer::stop()

Stop the timer.

### MicroTimer::getTime()

Return the time in milliseconds. Do not stop the timer.

### MicroTimer::getTimeInSeconds( $digits = 2 )

Return the time in seconds. Optional argument defines number of digits.

### MicroTimer::reset()

By design, each MicrTimer instance can only be started and stopped once, retaining all its internal data.
If you need to reuse an instance, use the reset method.