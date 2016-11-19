<?php
namespace GraphQL\Language\AST;

class InputValueDefinitionNode extends Node
{
    /**
     * @var string
     */
    public $kind = NodeType::INPUT_VALUE_DEFINITION;

    /**
     * @var NameNode
     */
    public $name;

    /**
     * @var TypeNode
     */
    public $type;

    /**
     * @var ValueNode
     */
    public $defaultValue;

    /**
     * @var DirectiveNode[]
     */
    public $directives;
}