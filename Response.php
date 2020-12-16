<?php

namespace sksaju\phpmvc;

/**  
 * Class Request 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package sksaju\phpmvc
 */

class Response
{
    public function setStatusCode(int $code) {
        http_response_code($code);
    }

    public function redirect(string $string)
    {
        header("location: $string");
    }
}