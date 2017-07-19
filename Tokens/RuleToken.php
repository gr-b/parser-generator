<?php

namespace ParserGenerator\Tokens;

/**
 * Class RuleToken
 * @author Griffin Bishop <grbishop@wpi.edu>
 */

class RuleToken
{
    /** @var string $ruleName */
    private $ruleName;

    /** @var Token $expression */
    private $expression;

    public function __construct($ruleName, Token $expression)
    {
        $this->ruleName = $ruleName;
        $this->expression = $expression;
    }

    public function __toString()
    {
        return $this->ruleName." = ".$this->expression->__toString(). ";\n";
    }

    public function getName()
    {
        return $this->ruleName;
    }
}