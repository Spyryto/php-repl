<?php

$___repl___result = null;
while (PHP_SAPI === 'cli') {
	if ( ! function_exists('readline')) {
		function readline($prompt) {
			echo $prompt;
			return stream_get_line(STDIN, 1024, PHP_EOL);
		}
	}
	$___repl___line = readline('< ');
	if (function_exists('readline_add_history')) readline_add_history($___repl___line);
	if ($___repl___line === 'done') break;
	try {
		// Try to return value
		$___repl___result = eval('return ' . $___repl___line . ';');
	} catch (ParseError $___repl___error) {
		try {
			// Language statement, no return value?
			$___repl___result = eval($___repl___line . ';');
		} catch (Throwable $___repl___error) {
			var_dump($___repl___error->getMessage());
		}
	} catch (Throwable $___repl___error) {
		var_dump($___repl___error->getMessage());
	}
	echo PHP_EOL
		. '> ' . var_export($___repl___result, true) . PHP_EOL
		. PHP_EOL;
}
