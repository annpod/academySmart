<?php
/**
 * Smart_Custom_Fields_Field_Check
 * Version    : 1.0.2
 * Author     : Takashi Kitajima
 * Created    : October 7, 2014
 * Modified   : February 10, 2015
 * License    : GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
class Smart_Custom_Fields_Field_Check extends Smart_Custom_Fields_Field_Base {

	/**
	 * init
	 * @return array ( name, label, optgroup, allow-multiple-data )
	 */
	protected function init() {
		return array(
			'name'     => 'check',
			'label'    => __( 'Check', 'smart-custom-fields' ),
			'optgroup' => 'select-fields',
			'allow-multiple-data' => true,
		);
	}

	/**
	 * get_field
	 * @param array $field フィールドの情報
	 * @param int $index インデックス番号
	 * @param mixed $value 保存されている値（check のときだけ配列）
	 */
	public function get_field( $field, $index, $value ) {
		$name = $this->get_name_attribute( $field['name'], $index );
		$disabled = $this->get_disable_attribute( $index );
		$choices = SCF::choices_eol_to_array( $field['choices'] );

		$form_field = sprintf(
			'<input type="hidden" name="%s" value="" %s />',
			esc_attr( $name ),
			disabled( true, $disabled, false )
		);
		foreach ( $choices as $choice ) {
			$choice = trim( $choice );
			$checked = ( is_array( $value ) && in_array( $choice, $value ) ) ? 'checked="checked"' : '' ;
			$form_field .= sprintf(
				'<label><input type="checkbox" name="%s" value="%s" %s %s /> %s</label>',
				esc_attr( $name . '[]' ),
				esc_attr( $choice ),
				$checked,
				disabled( true, $disabled, false ),
				esc_html( $choice )
			);
		}
		return $form_field;
	}

	/**
	 * display_field_options
	 * @param int $group_key
	 * @param int $field_key
	 */
	public function display_field_options( $group_key, $field_key ) {
		?>
		<tr>
			<th><?php esc_html_e( 'Choices', 'smart-custom-fields' ); ?></th>
			<td>
				<textarea
					name="<?php echo esc_attr( $this->get_field_name( $group_key, $field_key, 'choices' ) ); ?>"
					class="widefat"
					rows="5" /><?php echo esc_textarea( "\n" . $this->get_field_value( 'choices' ) ); ?></textarea>
			</td>
		</tr>
		<tr>
			<th><?php esc_html_e( 'Default', 'smart-custom-fields' ); ?></th>
			<td>
				<textarea
					name="<?php echo esc_attr( $this->get_field_name( $group_key, $field_key, 'default' ) ); ?>"
					class="widefat"
					rows="5" /><?php echo esc_textarea( "\n" . $this->get_field_value( 'default' ) ); ?></textarea>
			</td>
		</tr>
		<tr>
			<th><?php esc_html_e( 'Notes', 'smart-custom-fields' ); ?></th>
			<td>
				<input type="text"
					name="<?php echo esc_attr( $this->get_field_name( $group_key, $field_key, 'notes' ) ); ?>"
					class="widefat"
					value="<?php echo esc_attr( $this->get_field_value( 'notes' ) ); ?>"
				/>
			</td>
		</tr>
		<?php
	}
}