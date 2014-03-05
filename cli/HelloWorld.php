<?php
define('_JEXEC', 1);
define('JPATH_BASE', dirname(__FILE__));
 
require '../libraries/import.php';
 
class HelloWorld extends JApplicationCli
{
    public function execute()
    {
        $this->out('Hello World');
    }
}
 
JApplicationCli::getInstance('HelloWorld')->execute();

?>