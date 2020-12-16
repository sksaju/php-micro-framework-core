<?php 

namespace sksaju\phpmvc\form;

use sksaju\phpmvc\Model;

/**  
 * Class Form 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package sksaju\phpmvc\form
 */

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        return '</form>';
    }

    public function field(Model $model, string $attribute)
    {
        return new InputField($model, $attribute);
    }
}