<?php

namespace packages\Domain\Domain\User;

class UseId
{
    /**
     * @param string $value
     */
    public function __construct(private string $value){
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }


}
