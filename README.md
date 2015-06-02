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

```php

<?php

    // Start the timer.
    $timer->start();

    // Stop the timer.
    $timer->stop()

    // Get time (milliseconds).
    $timer->getTime()

    // Get time (seconds) with 3 decimals.
    $timer->getTimeInSeconds( 3 )

    // Erase and reset internal data.
    $timer->reset()


?>

```

## Notes

By design, each MicroTimer instance can only be started and stopped once, retaining all its internal data.

If you need to reuse an instance, use the reset method.