<?php

interface test {
    public function bar();
}

class foo implements test {

    public function bar($foo = NULL) {
        echo "foo\n";
    }
}
<<__EntryPoint>> function main() {
error_reporting(4095);

$foo = new foo;
$foo->bar();
}
