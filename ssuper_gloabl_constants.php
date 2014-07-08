<?php
namespace helloNameSpace;

  echo __LINE__ ;
  echo "\n\n";

  echo __NAMESPACE__ ;
  echo "\n\n";



  echo __FILE__ ;
  echo "\n\n";

  echo add();
  echo "\n\n";

  echo Apple::add1();
  echo "\n\n";


  function add()
  {
    echo __FUNCTION__;
  }

  class Apple{
    static function add1()
    {
      echo __METHOD__;
      echo ", And Class is ";
      echo __CLASS__;

    }

  }
