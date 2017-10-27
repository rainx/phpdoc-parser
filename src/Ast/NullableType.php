<?php declare(strict_types = 1);

namespace PhpStan\TypeParser\Ast;


class NullableType implements Node
{
	/** @var Node */
	public $type;


	public function __construct(Node $type)
	{
		$this->type = $type;
	}


	public function __toString(): string
	{
		return '?' . $this->type;
	}
}
