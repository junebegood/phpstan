<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'stats_rand_gen_t',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'df',
			false,
			PHPStan\Type\FloatType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\FloatType::__set_state(array())
);
