<?php

  $debug = true;
  $debugArray = array();

  # css for <pre> is already defined in css/site.css
  #pre{color:#fff;background-color: #000;font-size:20px;border-radius:10px;box-shadow:10px 10px 10px gray;padding:10px;}


  /***
   * Used to print Array as Debug Msg
   * @param $arr Array
   * ***/
  function pr($arr = array())
  {
      global $debugArray;

     $traceArray = (array_reverse(debug_backtrace()));

    $file =$traceArray[0]['file'];
    $line = $traceArray[0]['line'];
    $debugArray[] = ("<pre>$file on Line $line</pre>");


      $msg =  '<pre>';
      $msg .= print_r($arr,true);
      $msg .= '</pre>';
      $debugArray[] = $msg;
  }

  function pr1($arr = array())
  {
    global $debugArray;

    $traceArray = (array_reverse(debug_backtrace()));

    $file =$traceArray[0]['file'];
    $line = $traceArray[0]['line'];
    $debugArray[] = ("<pre>$file on Line $line</pre>");

      $msg =  '<pre style="color:#00FF00;background-color: #000;">';
      $msg .= print_r($arr,true);
      $msg .= '</pre>';
      $debugArray[] = $msg;
  }

  function getDebugLog()
  {
    global $debugArray;
    global $debug;

    if($debug == false )return false;

    $printMsg = '';
    foreach ($debugArray as $msg)
    {
      $printMsg .= $msg;
    }
    return $printMsg;
  }
