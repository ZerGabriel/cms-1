<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * @package		KodiCMS/Dashboard
 * @category	Widget
 * @author		butschster <butschster@gmail.com>
 * @link		http://kodicms.ru
 * @copyright	(c) 2012-2014 butschster
 * @license		http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt
 */
class Model_Widget_Dashboard_Calendar extends Model_Widget_Decorator_Dashboard {	
	
	/**
	 *
	 * @var boolean
	 */
	protected $_multiple = FALSE;
	
	protected $_size = array(
		'x' => 3,
		'y' => 1,
		'max_size' => array(5, 1),
		'min_size' => array(3, 1)
	);
	
	
	public function fetch_data(){}
}