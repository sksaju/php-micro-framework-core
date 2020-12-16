<?php 

namespace sksaju\phpmvc\exception;

/**  
 * Class NotFoundException 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package sksaju\phpmvc\exception
 */

class NotFoundException extends \Exception
{
    protected $code = 404;
    protected $message = 'Page not found';
}