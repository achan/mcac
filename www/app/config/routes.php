<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	
    Router::connect('/logout', array('controller' => 'users', 'action' => 'logout', 'plugin' => 'urg', 'home'));
    
    Router::connect('/login', array('controller' => 'users', 'action' => 'login', 'plugin' => 'urg', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

    Router::connect("/jkaan", array("controller" => "pastors", "action" => "view", "plugin" => "urg_sermon", "jkaan"));
    Router::connect("/tchan", array("controller" => "pastors", "action" => "view", "plugin" => "urg_sermon", "tchan"));
    Router::connect("/tyeung", array("controller" => "pastors", "action" => "view", "plugin" => "urg_sermon", "tyeung"));
    Router::connect("/iho", array("controller" => "pastors", "action" => "view", "plugin" => "urg_sermon", "iho"));
    Router::connect("/mdavis", array("controller" => "pastors", "action" => "view", "plugin" => "urg_sermon", "mdavis"));

    Router::connect("/bethanies", array("controller" => "groups", "action" => "view", "plugin" => "urg", 8, "bethanies"));

    Router::connect("/groups/*", array("controller" => "groups", "action" => "view", "plugin" => "urg"));