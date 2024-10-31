<?php

namespace PSCWF\Inc;

defined( 'ABSPATH' ) || exit;

class I18n {
	public static function init() {
		return array(
			'select_country'             => esc_html__( 'Select countries to show', 'product-size-chart-for-woo' ),
			'search_product'             => esc_html__( 'Select products', 'product-size-chart-for-woo' ),
			'search_product_cat'         => esc_html__( 'Select product categories', 'product-size-chart-for-woo' ),
			'size_chart_title'           => esc_html__( 'Size chart title', 'product-size-chart-for-woo' ),
			'assign'                     => esc_html__( 'Assign', 'product-size-chart-for-woo' ),
			'click_items_below'          => esc_html__( 'Click on items below to add row', 'product-size-chart-for-woo' ),
			'new_item'                   => esc_html__( 'New Item', 'product-size-chart-for-woo' ),
			'top'                        => esc_html__( 'Top', 'product-size-chart-for-woo' ),
			'right'                      => esc_html__( 'Right', 'product-size-chart-for-woo' ),
			'bottom'                     => esc_html__( 'Bottom', 'product-size-chart-for-woo' ),
			'left'                       => esc_html__( 'Left', 'product-size-chart-for-woo' ),
			'link_values_together'       => esc_html__( 'Link values together', 'product-size-chart-for-woo' ),
			'select_component'           => esc_html__( 'Select Component', 'product-size-chart-for-woo' ),
			'tab'                        => esc_html__( 'Tab', 'product-size-chart-for-woo' ),
			'accordion'                  => esc_html__( 'Accordion', 'product-size-chart-for-woo' ),
			'image'                      => esc_html__( 'Image', 'product-size-chart-for-woo' ),
			'table'                      => esc_html__( 'Table', 'product-size-chart-for-woo' ),
			'text'                       => esc_html__( 'Text', 'product-size-chart-for-woo' ),
			'divider'                    => esc_html__( 'Divider', 'product-size-chart-for-woo' ),
			'select_size_chart'          => esc_html__( 'Select Size Chart', 'product-size-chart-for-woo' ),
			'layout'                     => esc_html__( 'Layout', 'product-size-chart-for-woo' ),
			'text_optional'              => esc_html__( 'Text (optional)', 'product-size-chart-for-woo' ),
			'select_divider_color'       => esc_html__( 'Select Divider Color', 'product-size-chart-for-woo' ),
			'weight'                     => esc_html__( 'Weight', 'product-size-chart-for-woo' ),
			'margin'                     => esc_html__( 'Margin', 'product-size-chart-for-woo' ),
			'upload_image'               => esc_html__( 'Upload Image', 'product-size-chart-for-woo' ),
			'width'                      => esc_html__( 'Width', 'product-size-chart-for-woo' ),
			'height'                     => esc_html__( 'Height', 'product-size-chart-for-woo' ),
			'border_style'               => esc_html__( 'Border Style', 'product-size-chart-for-woo' ),
			'border_width_px'            => esc_html__( 'Border Width(px)', 'product-size-chart-for-woo' ),
			'border_color'               => esc_html__( 'Border Color', 'product-size-chart-for-woo' ),
			'padding'                    => esc_html__( 'Padding', 'product-size-chart-for-woo' ),
			'object_fit'                 => esc_html__( 'Object Fit', 'product-size-chart-for-woo' ),
			'multiple_tabs'              => esc_html__( 'Multiple Tabs', 'product-size-chart-for-woo' ),
			'default_first_tab'          => esc_html__( 'Default First Tab', 'product-size-chart-for-woo' ),
			'add_columns'                => esc_html__( 'Add Columns', 'product-size-chart-for-woo' ),
			'add_rows'                   => esc_html__( 'Add Rows', 'product-size-chart-for-woo' ),
			'header_background'          => esc_html__( 'Header Background', 'product-size-chart-for-woo' ),
			'text_header'                => esc_html__( 'Text Header', 'product-size-chart-for-woo' ),
			'header_text_bold'           => esc_html__( 'Header Text Bold', 'product-size-chart-for-woo' ),
			'header_text_size'           => esc_html__( 'Header Text Size', 'product-size-chart-for-woo' ),
			'columns_style'              => esc_html__( 'Columns Style', 'product-size-chart-for-woo' ),
			'even_background'            => esc_html__( 'Even Background', 'product-size-chart-for-woo' ),
			'even_text'                  => esc_html__( 'Even Text', 'product-size-chart-for-woo' ),
			'odd_background'             => esc_html__( 'Odd Background', 'product-size-chart-for-woo' ),
			'odd_text'                   => esc_html__( 'Odd Text', 'product-size-chart-for-woo' ),
			'cell_text_size'             => esc_html__( 'Cell Text Size', 'product-size-chart-for-woo' ),
			'horizontal_border_width'    => esc_html__( 'Horizontal Border Width', 'product-size-chart-for-woo' ),
			'horizontal_border_style'    => esc_html__( 'Horizontal Border Style', 'product-size-chart-for-woo' ),
			'vertical_border_width'      => esc_html__( 'Vertical Border Width', 'product-size-chart-for-woo' ),
			'vertical_border_style'      => esc_html__( 'Vertical Border Style', 'product-size-chart-for-woo' ),
			'border_radius'              => esc_html__( 'Border Radius', 'product-size-chart-for-woo' ),
			'max_height_px'              => esc_html__( 'Max Height (px)', 'product-size-chart-for-woo' ),
			'header_table'               => esc_html__( 'Header Table', 'product-size-chart-for-woo' ),
			'row_header'                 => esc_html__( 'Row Header', 'product-size-chart-for-woo' ),
			'column_header'              => esc_html__( 'Column Header', 'product-size-chart-for-woo' ),
			'both_header'                => esc_html__( 'Both Header', 'product-size-chart-for-woo' ),
			'title'                      => esc_html__( 'Title', 'product-size-chart-for-woo' ),
			'add_your_text'              => esc_html__( 'Add your text...', 'product-size-chart-for-woo' ),
			'tab_content'                => esc_html__( 'Tab Content', 'product-size-chart-for-woo' ),
			'accordion_content'          => esc_html__( 'Accordion Content', 'product-size-chart-for-woo' ),
			'unsupported_component_type' => esc_html__( 'Unsupported component type', 'product-size-chart-for-woo' ),
			'template_color'             => esc_html__( 'Select Template Color', 'product-size-chart-for-woo' ),
			'import_csv'                 => esc_html__( 'Import CSV', 'product-size-chart-for-woo' ),
			'required_file_csv'          => esc_html__( 'Required file extension is CSV!', 'product-size-chart-for-woo' ),
			'confirm_replace_csv'        => esc_html__( 'Size chart in CSV file will replace the current table?', 'product-size-chart-for-woo' ),
			'alert_csv_empty'            => esc_html__( 'Please upload non-empty csv file!', 'product-size-chart-for-woo' ),
		);
	}
}