<?php

namespace ParserGenerator\Tokens;
use ParserGenerator\Intermediate\CallExpression;
use ParserGenerator\Intermediate\IfStatement;
use ParserGenerator\Intermediate\OrExpression;
use ParserGenerator\Intermediate\ReturnStatement;
use ParserGenerator\Intermediate\ArgumentToken;

/**
 * Class OrToken
 * @author Griffin Bishop <grbishop@wpi.edu>
 */

class OrToken extends Token
{
    /** @var $left Token */
    private $left;

    /** @var $right Token */
    private $right;

    /**
     * OrToken constructor.
     * @param Token $left
     * @param Token $right
     */
    public function __construct($left, $right)
    {
        parent::__construct(Token::TYPE_OR);
        $this->left = $left;
        $this->right = $right;
    }

    public function generateGetFunction(array &$functions)
    {
        // TODO: Implement generateGetFunction() method.
    }

    public function getStatements(array &$output, array &$functions)
    {
        $return = new ReturnStatement(
            new OrExpression(
                new CallExpression(
                    array('this', $this->left),
                    array(
                        new ArgumentToken('output', true)
                    )
                ),
                new CallExpression(
                    array('this', $this->right),
                    array(
                        new ArgumentToken('output', true)
                    )
                )
            )
        );
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function getRight()
    {
        return $this->right;
    }
}