<?php 

namespace sksaju\phpmvc\middlewares;

use sksaju\phpmvc\Application;
use sksaju\phpmvc\exception\ForbiddenException;

/**  
 * Class AuthMiddleware 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package sksaju\phpmvc\middlewares
 */

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    /**  
     * AuthMiddleware constructor
     * 
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}