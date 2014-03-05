<?php
define('_JEXEC', 1);
 
require '../libraries/import.php';
 
class JoomlaRocks extends JApplicationCli
{
    public function execute()
    {
       $this->out('   .           .     .__       |      | ');
       $this->out('   | _  _ ._ _ | _.  [__) _  _.|_/ __ | ');
       $this->out('\__|(_)(_)[ | )|(_]  |  \(_)(_.| \_)  * ');
    }
}
 
JApplicationCli::getInstance('JoomlaRocks')->execute();

?>