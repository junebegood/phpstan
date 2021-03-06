<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'cairo_scaled_font_get_ctm',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'scaledfont',
			false,
			PHPStan\Type\ObjectType::__set_state(array(    'className' => 'cairoscaledfont', )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\ObjectType::__set_state(array(    'className' => 'CairoMatrix', ))
);
