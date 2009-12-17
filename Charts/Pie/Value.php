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

class OFC_Charts_Pie_Value {
	function OFC_Charts_Pie_Value($value, $text) {
		$this->set_value($value);
		$this->set_label($text);
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_tooltip($tip) {
		$this->tip = $tip;
	}

	function set_start($start) {
		$this->start = $start;
	}

	function set_angle($angle) {
		$this->angle = $angle;
	}

	function set_value($value) {
		$this->value = $value;
	}

	function set_label($label) {
		$this->label = $label;
	}

	function set_animate($animate) {
		$this->animate = $animate;
	}

	function set_alpha($alpha) {
		$this->alpha = $alpha;
	}

	function set_label_colour($label_colour) {
		$this->{'label-colour'} = $label_colour;
	}

	function set_no_labels($no_labels) {
		$this->{'no-labels'} = $no_labels;
	}

	function set_font_size($font_size) {
		$this->{'font-size'} = $font_size;
	}

	function set_on_click($on_click) {
		$this->{'on-click'} = $on_click;
	}
}