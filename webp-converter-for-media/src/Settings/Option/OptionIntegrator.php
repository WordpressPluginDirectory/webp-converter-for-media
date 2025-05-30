<?php

namespace WebpConverter\Settings\Option;

/**
 * Allows to integrate with field in plugin settings by specifying its settings and value.
 */
class OptionIntegrator {

	/**
	 * Objects of supported settings options.
	 *
	 * @var OptionInterface
	 */
	private $option;

	/**
	 * @param OptionInterface $option .
	 */
	public function __construct( OptionInterface $option ) {
		$this->option = $option;
	}

	/**
	 * Returns data of option based on plugin settings.
	 *
	 * @param mixed[] $settings Plugin settings.
	 *
	 * @return mixed[] Associative array containing field data.
	 */
	public function get_option_data( array $settings ): array {
		$option_name     = $this->option->get_name();
		$option_type     = $this->option->get_type();
		$values          = $this->option->get_available_values( $settings );
		$disabled_values = $this->option->get_disabled_values( $settings );
		$value           = $this->option->validate_value(
			( $settings[ $option_name ] ?? $this->option->get_default_value() ),
			$values,
			$disabled_values
		);

		return [
			'name'            => $this->option->get_name(),
			'type'            => $option_type,
			'label'           => $this->option->get_label(),
			'notice_lines'    => $this->option->get_notice_lines(),
			'info'            => $this->option->get_info(),
			'placeholder'     => $this->option->get_placeholder(),
			'values'          => $values,
			'values_warnings' => $this->option->get_values_warnings( $settings ),
			'disabled'        => $disabled_values ?: [],
			'value'           => $value,
			'value_public'    => $this->option->get_public_value( $value ),
		];
	}
}
