<?php
class bugfile {
   
   private function _doBug($param)
   {
      if($param == '')
      {
         return false;
      }
   }
   
}


$a = new Foo();
$a->bar = 4;
$a->Bar = 6;

echo $a->bar;

