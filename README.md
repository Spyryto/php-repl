# PHP REPL

A powerful but incredibly simple tool to debug or test your code live!

Quick, simple, easy, portable and hackable.

## For a quick test:

```
C:\tools\php\7.4.7> php \projects\repl\repl.php
```

```php
< function_exists('mysqli_connect')

> true

< die
```

```
C:\tools\php\7.4.7>
```

The syntax after the `>` prompt must be valid PHP syntax, but you can omit the
final semicolon.

It can be used without `echo` or `print()`, beacause it will always return the
evaluated expression:

```php
< 1 + 1

> 2

< join('-', [1, 3, 5])

> '1-3-5'
```

For PHP constructs (not functions) you can omit parentheses too, like this:

```php
< echo 'hello'
hello
> NULL

< exit
```

## A dirty trick for debugging live:

Anywhere in your PHP file:

```php
require_once 'C:\projects\repl\repl.php';

```

```
< $_GET

> array (
)

< $method

> 'POST'

< _
```

## Other

You can load it in you VS Code terminal and use it like any other REPL (think
LISP, Scheme, Python...).

## Notes

The implementation is deliberately very simple. This way, the REPL can have
access to variables and functions in its scope just like a debugger could.

If it was wrapped in a `function` or `class`, it couldn’t.

This tool is quick, simple, easy, portable and hackable.