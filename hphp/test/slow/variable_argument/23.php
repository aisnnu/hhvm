<?php

class Foo {
  public static function Add($x, $y) {
}
}

<<__EntryPoint>>
function main_23() {
$x = 0;
if (!call_user_func(array('Foo', 'add'), $x, 0)) {
  echo 'foo';
}
}
