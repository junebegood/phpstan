<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'win32_stop_service',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'servicename',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'machine',
			true,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\IntegerType::__set_state(array())
);
