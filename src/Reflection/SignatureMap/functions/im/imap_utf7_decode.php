<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'imap_utf7_decode',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'buf',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\StringType::__set_state(array())
);
