<?php
define('_JEXEC', 1);
 
require '../libraries/import.php';
 
class HelloYou extends JApplicationCli
{
    public function execute()
    {
       $this->out('What is your name?');
       $name = $this->in();
 
       $this->out();
       $this->out('Hi '.$name.',');
       $this->out('Welcome to the Joomla Platform!');
       $this->out();
    }
 
    /**
    * We don’t really need configuration for this application.
    *
    * @return  void
    */
    protected function fetchConfigurationData()
    {
       return array();
    }
}
 
JApplicationCli::getInstance('HelloYou')->execute();

?>