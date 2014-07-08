<?php


$a = 'hello';
$b = 'world';
$c = 'php';

$msg = <<<VIKAS
This is dummy text in HEREDOC and you can
see that I am using " Double Quote" and
'Single Quote' inside that and it's amazing
it can parse any varibale ($a and $b in $c).

We can also use Backslash \ without any trouble
VIKAS;


echo $msg;
echo "\n----------NEW DOC--------\n";
$msg = <<<'VIKAS'
This is dummy text in HEREDOC and you can
see that I am using " Double Quote" and
'Single Quote' inside that and it's amazing
it can parse any varibale ($a and $b in $c).

We can also use Backslash \ without any trouble
VIKAS;


echo $msg;
