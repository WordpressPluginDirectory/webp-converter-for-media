<?php

namespace WebpConverter\Settings\Option;

use WebpConverter\Conversion\Directory\DirectoryFactory;
use WebpConverter\Conversion\Format\FormatFactory;
use WebpConverter\Conversion\Method\MethodFactory;
use WebpConverter\Repository\TokenRepository;

/**
 * .
 */
class OptionsAggregator {

	/**
	 * Objects of supported options.
	 *
	 * @var OptionInterface[]
	 */
	private $options = [];

	public function __construct(
		TokenRepository $token_repository,
		MethodFactory $method_factory,
		FormatFactory $format_factory,
		DirectoryFactory $directory_factory
	) {
		$conversion_method = new ConversionMethodOption( $token_repository, $method_factory );

		$this->set_option( new ImagesQualityOption() );
		$this->set_option( new OutputFormatsOption( $token_repository, $format_factory, $conversion_method ) );
		$this->set_option( new SupportedDirectoriesOption( $directory_factory ) );
		$this->set_option( new ImageResizeOption( $token_repository ) );
		$this->set_option( new AutoConversionOption() );

		$this->set_option( new AccessTokenOption( $token_repository ) );

		$this->set_option( new SupportedExtensionsOption() );
		$this->set_option( $conversion_method );
		$this->set_option( new LoaderTypeOption() );
		$this->set_option( new RewriteInheritanceOption() );
		$this->set_option( new ExcludedDirectoriesOption() );
		$this->set_option( new ExtraFeaturesOption() );
		$this->set_option( new MediaStatsOption() );

		$this->set_option( new CloudflareZoneIdOption() );
		$this->set_option( new CloudflareApiTokenOption() );

		$this->set_option( new ServiceModeOption() );
		$this->set_option( new HtaccessRewriteRootOption() );
		$this->set_option( new HtaccessRewritePathOption() );
		$this->set_option( new HtaccessRewriteOutputOption() );
	}

	/**
	 * @param string|null $form_name .
	 *
	 * @return OptionInterface[]
	 */
	public function get_options( ?string $form_name = null ): array {
		$options = [];
		foreach ( $this->options as $option ) {
			if ( ( $form_name === null ) || ( $form_name === $option->get_form_name() ) ) {
				$options[] = $option;
			}
		}

		return apply_filters( 'webpc_settings_options', $options );
	}

	/**
	 * @param string $option_name .
	 *
	 * @return OptionInterface|null
	 */
	public function get_option( string $option_name ) {
		$options = $this->get_options();

		foreach ( $options as $option ) {
			if ( $option->get_name() === $option_name ) {
				return $option;
			}
		}

		return null;
	}

	/**
	 * @param OptionInterface $new_option .
	 *
	 * @return void
	 */
	private function set_option( OptionInterface $new_option ) {
		foreach ( $this->options as $option_index => $option ) {
			if ( $option->get_name() === $new_option->get_name() ) {
				$this->options[ $option_index ] = $new_option;
				return;
			}
		}

		$this->options[] = $new_option;
	}
}
