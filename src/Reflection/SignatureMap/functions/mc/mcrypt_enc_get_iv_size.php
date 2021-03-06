<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'mcrypt_enc_get_iv_size',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'td',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\IntegerType::__set_state(array())
);
