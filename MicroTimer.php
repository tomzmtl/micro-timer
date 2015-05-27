<?php namespace App\Helpers;

class MicroTimer
{

    /**
     *
     * @todo
     *
     *
     */
    private $start = null;

    /**
     *
     * @todo
     *
     *
     */
    private $end   = null;

    /**
     *
     * @todo
     *
     *
     */
    private $elapsed = 0;



    /**
     *
     * @todo
     *
     *
     */
    public function start ()
    {
        $this->start = microtime(true);

        return $this;
    }



    /**
     *
     * @todo
     *
     *
     */
    public function stop ()
    {
        $this->end = microtime(true);
        $this->elapsed = round( $this->end - $this->start, 2 );

        return $this;
    }



    /**
     *
     * Get time in seconds.
     * @todo
     *
     *
     */
    public function getTime ( $prepend = null )
    {
        if ( !$this->elapsed )
        {
            $this->stop();
        }

        $seconds = $this->elapsed;

        if ( $prepend )
        {
            $seconds .= $prepend;
        }

        return $seconds;
    }


}