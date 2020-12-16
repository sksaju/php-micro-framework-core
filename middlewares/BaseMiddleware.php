<?php 

namespace sksaju\phpmvc\middlewares;

/**  
 * Class BaseMiddleware 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package sksaju\phpmvc\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}