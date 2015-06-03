<?php

/**
 * MicroTimer class.
 * Once created and started, a timer can only be reused by using the reset() method.
 *
 * @version 1.0.1
 */
class MicroTimer
{

    /**
     * Start time. Unix timestamp.
     *
     * @var int
     */
    private $start = 0;

    /**
     * End time. Unix Timestamp.
     *
     * @var int
     */
    private $end;

    /**
     * Elapsed time in milliseconds.
     *
     * @var int
     */
    private $elapsed = 0;



    /**
     * Start timer.
     *
     * @return self
     */
    public function start ()
    {
        if ( $this->start === 0 )
        {
            $this->start = microtime(true);
        }

        return $this;
    }



    /**
     * Stop timer.
     *
     * @return self
     */
    public function stop ()
    {
        if ( !$this->end )
        {
            $this->end = microtime(true);
            $this->elapsed = $this->end - $this->start;
        }

        return $this;
    }



    /**
     * Get time in microseconds.
     */
    public function getTime ()
    {
        return $this->elapsed;
    }



    /**
     *
     * Get time in seconds. Stops timer if still running.
     * Optional argument is prepended to the output value for
     *
     * @param int $decimals
     * @return float
     */
    public function getTimeInSeconds ( $decimals = 2 )
    {
        return round( $this->elapsed, $decimals );
    }



    /**
     * Reinitialize the time.
     *
     * @return self
     */
    public function reset ()
    {
        $this->start = 0;
        $this->end = null;
        $this->elapsed = 0;

        return $this;
    }


}