<?php
/**
 * StupidQuestion - Userfriendly Captcha for MODX Revolution
 * 
 * StupidQuestion is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * StupidQuestion is distributed in the hope that it will be useful, but WITHOUT 
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS 
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more 
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * StupidQuestion; if not, write to the Free Software Foundation, Inc., 
 * 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package stupidquestion
 * @subpackage build
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Copyright 2010-2013, Thomas Jakobi
 *
 * Define the MODX path constants necessary for installation
 */
define('MODX_BASE_PATH', dirname(dirname(dirname(dirname(__FILE__)))) . '/modx/');
define('MODX_CORE_PATH', MODX_BASE_PATH . 'core/');
define('MODX_MANAGER_PATH', MODX_BASE_PATH . 'manager/');
define('MODX_CONNECTORS_PATH', MODX_BASE_PATH . 'connectors/');
define('MODX_ASSETS_PATH', MODX_BASE_PATH . 'assets/');

define('MODX_BASE_URL','/modx/');
define('MODX_CORE_URL', MODX_BASE_URL . 'core/');
define('MODX_MANAGER_URL', MODX_BASE_URL . 'manager/');
define('MODX_CONNECTORS_URL', MODX_BASE_URL . 'connectors/');
define('MODX_ASSETS_URL', MODX_BASE_URL . 'assets/');