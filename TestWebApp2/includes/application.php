<?php
/**
 * Override the doExecute method from JApplicationWeb. Here you define what your application does.
 */
class MyWebApp extends JApplicationWeb
{
	/**
	 * Display the application.
	 */
	protected function doExecute(){

		$this->setBody(
				'<h1>My Web Application</h1>'.
				'The current URL is '.JUri::current().'<br/>'.
				'The date is '. JFactory::getDate('now')
		);
	}
}

?>