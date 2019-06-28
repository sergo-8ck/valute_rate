<?php

namespace App;

class Valute
{
    protected $source1;
    protected $source2;

    public function __construct(ParserInterface $source1, ParserInterface $source2)
    {
        $this->source1 = $source1;
        $this->source2 = $source2;
    }

    public function getRate()
    {
        if($this->source1->response())
            return $this->source1->response();
        else
            return $this->source2->response();
    }
}
