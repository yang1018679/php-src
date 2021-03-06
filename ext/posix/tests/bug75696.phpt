--TEST--
Bug #75696 (posix_getgrnam fails to print details of group)
--SKIPIF--
<?php
if (!extension_loaded('posix')) die('skip posix extension not available');
?>
--FILE--
<?php
$gid = posix_getgid();
$name = posix_getgrgid($gid)['name'];
$info = posix_getgrnam($name);
var_dump(is_array($info));
?>
===DONE===
--EXPECT--
bool(true)
===DONE===
