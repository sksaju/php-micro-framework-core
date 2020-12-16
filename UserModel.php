<?php 

namespace sksaju\phpmvc;

use sksaju\phpmvc\db\DbModel;

/**  
 * Class UserModel 
 * 
 * @author SkSaju <sksaaju@gmail.com>
 * @package sksaju\phpmvc
 */

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}