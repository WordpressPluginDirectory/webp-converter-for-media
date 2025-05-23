<?php

namespace WebpConverter\Settings\Option;

/**
 * {@inheritdoc}
 */
class RewriteInheritanceOption extends OptionAbstract {

	const OPTION_NAME = 'rewrite_inherit_disabled';

	/**
	 * {@inheritdoc}
	 */
	public function get_name(): string {
		return self::OPTION_NAME;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_form_name(): string {
		return OptionAbstract::FORM_TYPE_ADVANCED;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_type(): string {
		return OptionAbstract::OPTION_TYPE_TOGGLE;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function get_label(): ?string {
		return null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_info(): string {
		return sprintf(
			'%1$s (%2$s)',
			__( 'Disable rewrite inheritance in .htaccess files', 'webp-converter-for-media' ),
			__( 'use if you have a problem with, e.g., loading CSS or JS files', 'webp-converter-for-media' )
		);
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_available_values( array $settings ): ?array {
		return null;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_default_value(): string {
		if ( strpos( $_SERVER['DOCUMENT_ROOT'] ?? '', '/home/strato/' ) === 0 ) { // phpcs:ignore WordPress.Security.ValidatedSanitizedInput
			return 'yes'; /* support for Strato AG */
		}

		return '';
	}

	/**
	 * {@inheritdoc}
	 */
	public function validate_value( $current_value, ?array $available_values = null, ?array $disabled_values = null ): string {
		return ( $current_value === 'yes' ) ? 'yes' : '';
	}

	/**
	 * {@inheritdoc}
	 */
	public function sanitize_value( $current_value ): string {
		return $this->validate_value( $current_value );
	}
}
