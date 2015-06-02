<?php namespace App\Helpers;

/**
 * MicroTimer class.
 * Once created and started, a timer can only be reused by using the reset() method.
 *
 * @version 1.0
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
        if ( $start === 0 )
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
        if ( !$end )
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
     * @param int $digits
     * @return float
     */
    public function getTimeInSeconds ( $digits = 2 )
    {
        return round( $this->elapsed, $digits );
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