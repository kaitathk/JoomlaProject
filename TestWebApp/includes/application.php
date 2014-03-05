<?php
// no direct access
defined('JPATH_PLATFORM') or die;
final class JMyWebApp extends JApplication
{
	/**
	 * Display the application.
	 */
	public function render()
	{
		echo '<h1>My Web Application</h1>';
		echo 'The current URL is '.JUri::current().'<br/>';
		echo 'The date is '. JFactory::getDate('now');
	}
}
?>