<?php

namespace MyGreeter;

class Client
{


    /**
     *
     * @return string
     */
    public function getGreeting()
    {
        if(date('H') < '12'){
            return "Good morning";
        }elseif(date('H') < '18'){
            return "Good afternoon";
        }else{
            return "Good evening";
        }
    }
}
