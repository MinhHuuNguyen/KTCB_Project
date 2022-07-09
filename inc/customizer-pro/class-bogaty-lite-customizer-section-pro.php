<?php
/**
 * The "Go Pro" section in the Customizer.
 *
 * @package Bogaty Lite
 */

/**
 * Pro customizer section.
 */
class Bogaty_Lite_Customizer_Section_Pro extends WP_Customize_Section {
	/**
	 * The type of customize section being rendered.
	 *
	 * @var string
	 */
	public $type = 'gt-go-pro';

	/**
	 * Custom button text to output.
	 *
	 * @var string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @var string
	 */
	public $pro_url = '';

	/**
	 * Custom doc title.
	 *
	 * @var string
	 */
	public $doc_title = '';

	/**
	 * Custom doc button text to output.
	 *
	 * @var string
	 */
	public $doc_text = '';

	/**
	 * Custom doc button URL.
	 *
	 * @var string
	 */
	public $doc_url = '';

	/**
	 * Custom link documentation to output.
	 *
	 * @var string
	 */
	public $section_type = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @return array
	 */
	public function json() {
		$json = parent::json();

		$json['pro_text']  = $this->pro_text;
		$json['section_type'] = $this->section_type;
		$json['pro_url']   = esc_url( $this->pro_url );
		$json['doc_title'] = $this->doc_title;
		$json['doc_text']  = $this->doc_text;
		$json['doc_url']   = esc_url( $this->doc_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 */
	protected function render_template() {
		?>
		<# if ( 'doc' === data.section_type ) { #>
			<li id="accordion-section-{{ data.id }}-doc" class="accordion-section control-section cannot-expand">
				<h3 class="accordion-section-title link-doc">
					<a href="{{{ data.doc_url }}}" target="_blank">{{ data.doc_text }}</a>
				</h3>
			</li>
		<# } #>
		<# if ( 'pro' === data.section_type ) { #>
			<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
				<h3 class="accordion-section-title link-doc">
					{{ data.title }}
					<a href="{{{ data.pro_url }}}" class="button button-primary alignright" target="_blank">{{ data.pro_text }}</a>
				</h3>
			</li>
		<# } #>
		<?php
	}
}
