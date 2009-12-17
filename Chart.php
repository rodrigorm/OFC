<?php
/**
 * PHP Integration of Open Flash Chart
 * Copyright (C) 2008 John Glazebrook <open-flash-chart@teethgrinder.co.uk>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 */

if (!function_exists('json_encode')) {
	require_once('OFC/JSON.php');
}

require_once('OFC/JSON_Format.php');

require_once('OFC/Elements.php');
require_once('OFC/Tooltip.php');

require_once('OFC/Charts/Area.php');
require_once('OFC/Charts/Bar.php');
require_once('OFC/Charts/Line.php');
require_once('OFC/Charts/Pie.php');
require_once('OFC/Charts/Scatter.php');
require_once('OFC/Charts/Area/Hollow.php');
require_once('OFC/Charts/Bar/Filled.php');
require_once('OFC/Charts/Bar/3d.php');
require_once('OFC/Charts/Bar/Glass.php');
require_once('OFC/Charts/Bar/Horizontal.php');
require_once('OFC/Charts/Bar/Sketch.php');
require_once('OFC/Charts/Bar/Stack.php');
require_once('OFC/Charts/Line/Dot.php');
require_once('OFC/Charts/Line/Hollow.php');

class OFC_Chart {
	function OFC_Chart() {
		$this->set_title('Many data lines');
		$this->elements = array();
	}

	function set_tooltip($tooltip) {
		if (is_string($tooltip)) {
			$tooltip = new OFC_Tooltip($tooltip);
		}
		$this->tooltip = $tooltip;
	}

	function set_title($title) {
		if (is_string($title)) {
			$title = new OFC_Elements_Title($title);
		}
		$this->title = $title;
	}

	function set_x_axis($x_axis) {
		$this->x_axis = $x_axis;
	}

	function set_y_axis($y_axis) {
		$this->y_axis = $y_axis;
	}

	function set_y_axis_right($y_axis) {
		$this->y_axis_right = $y_axis;
	}

	function add_element($element) {
		$this->elements[] = $element;
	}

	function set_x_legend($x_legend) {
		if (is_string($x_legend)) {
			$x_legend = new OFC_Elements_Legend_X($x_legend);
		}
		$this->x_legend = $x_legend;
	}

	function set_y_legend($y_legend) {
		$this->_set_y_legend('y_legend', $y_legend);
	}

	function set_y2_legend($y2_legend) {
		$this->_set_y_legend('y2_legend', $y2_legend);
	}

	function _set_y_legend($name, $y_legend) {
		if (is_string($y_legend)) {
			$y_legend = new OFC_Elements_Legend_Y($y_legend);
		}
		$this->$name = $y_legend;
	}

	function set_bg_colour($colour) {
		$this->bg_colour = $colour;
	}

	function set_bg_image($image) {
		$this->bg_image = $image;
	}

	function set_num_decimals($num_decimals) {
		$this->num_decimals = $num_decimals;
	}

	function set_is_fixed_num_decimals_forced($is_fixed_num_decimals_forced) {
		$this->is_fixed_num_decimals_forced = $is_fixed_num_decimals_forced;
	}

	function set_is_decimal_separator_comma($is_decimal_separator_comma) {
		$this->is_decimal_separator_comma = $is_decimal_separator_comma;
	}

	function set_is_thousand_separator_disabled($is_thousand_separator_disabled) {
		$this->is_thousand_separator_disabled = $is_thousand_separator_disabled;
	}

	function set_radar_axis($radar_axis = true) {
		if (is_array($radar_axis)) {
			$radar_axis = new OFC_Elements_Axis_Radar($radar_axis);
		}
		$this->radar_axis = $radar_axis;
	}

	function toString() {
		if (function_exists('json_encode')) {
			return json_encode($this);
		} else {
			$json = new Services_JSON();
			return $json->encode($this);
		}
	}

	function toPrettyString() {
		return json_format($this->toString());
	}

	function set_menu($menu) {
		$this->menu = $menu;
	}
}