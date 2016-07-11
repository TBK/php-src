--TEST--
Test normal operation of password_needs_rehash() with argon2
--SKIPIF--
<?php
if (!defined(PASSWORD_ARGON2)) die('password_get_info not built with Argon2');
--FILE--
<?php
var_dump(password_needs_rehash('$argon2i$v=19$m=65536,t=3,p=1$YkprUktYN0lHQTd2bWRFeA$79aA+6IvgclpDAJVoezProlqzIPy7do/P0sBDXS9Nn0', PASSWORD_ARGON2, ['m_cost' => 1<<17]));
var_dump(password_needs_rehash('$argon2i$v=19$m=65536,t=3,p=1$YkprUktYN0lHQTd2bWRFeA$79aA+6IvgclpDAJVoezProlqzIPy7do/P0sBDXS9Nn0', PASSWORD_ARGON2, ['t_cost' => 2]));
var_dump(password_needs_rehash('$argon2i$v=19$m=65536,t=3,p=1$YkprUktYN0lHQTd2bWRFeA$79aA+6IvgclpDAJVoezProlqzIPy7do/P0sBDXS9Nn0', PASSWORD_ARGON2, ['threads' => 2]));
echo "OK!";
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
OK!
