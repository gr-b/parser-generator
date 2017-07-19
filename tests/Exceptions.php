<?php

namespace ParserGenerator;

require TESTPHP_TESTS_DIRECTORY.'/autoload.php';
use Exception;

$input = null;

// Test
$parser = new Parser();
$output = $parser->parse($input);
$output = $output->__toString();


// Input
$input = "";

// Output
throw new Exception("Expected rule after '', got '' instead\n");


// Input
$input = "rule ";

// Output
throw new Exception("Expected ' = ' after rule 'rule', got ' ' instead\n");


// Input
$input = "rule = ";

// Output
throw new Exception("Expected expression after 'rule =', got '' instead\n");


// Input
$input = "rule = otherRule";

// Output
throw new Exception("Expected ';' after expression 'otherRule', got '' instead\n");


// Input
$input = "rule = @";

// Output
throw new Exception("Expected identifier after '@', got '' instead\n");


// Input
$input = "rule = otherRule | ";

// Output
throw new Exception("Expected expression after '|', got '' instead\n");


// Input
$input = "rule = otherRule , ";

// Output
throw new Exception("Expected expression after ',', got '' instead\n");


// Input
$input = "rule = \"";

// Output
throw new Exception("Expected terminal after '\"', got '' instead\n");


// Input
$input = "rule = \"test";

// Output
throw new Exception("Expected '\"' after '\"test', got '' instead\n");


// Input
$input = "rule = [";

// Output
throw new Exception("Expected expression after '[', got '' instead\n");


// Input
$input = "rule = [ expr ";

// Output
throw new Exception("Expected ']' after expression 'expr', got ' ' instead\n");


// Input
$input = "rule = {";

// Output
throw new Exception("Expected expression after '{', got '' instead\n");


// Input
$input = "rule = { expr ";

// Output
throw new Exception("Expected '}' after expression 'expr', got ' ' instead\n");


// Input
$input = "rule = (";

// Output
throw new Exception("Expected expression after '(', got '' instead\n");


// Input
$input = "rule = ( expr ";

// Output
throw new Exception("Expected ')' after expression 'expr', got ' ' instead\n");






