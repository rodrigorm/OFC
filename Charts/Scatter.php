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

require_once('OFC/Charts/Base.php');
require_once('OFC/Charts/Scatter/Value.php');

class OFC_Charts_Scatter extends OFC_Charts_Base {
	function OFC_Charts_Scatter($colour, $dot_size) {
		parent::OFC_Charts_Base();

		$this->type = 'scatter';
		$this->set_colour($colour);
		$this->set_dot_size($dot_size);
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_dot_size($dot_size) {
		$this->{'dot-size'} = $dot_size;
	}

	function set_values($values) {
		$this->values = $values;
	}

	function set_text($text) {
		$this->text = $text;
	}

	function set_font_size($font_size) {
		$this->{'font-size'} = $font_size;
	}

	function set_tooltip($tip) {
		$this->tip = $tip;
	}

	function set_axis($axis) {
		$this->axis = $axis;
	}

	function set_dot_style($dot_style) {
		$this->dot_style = $dot_style;
	}

	function set_on_show($on_show) {
		if (is_string($on_show)) {
			$on_show = new OFC_OnShow($on_show);
		}
		$this->{'on-show'} = $on_show;
	}

	function set_width($width) {
		$this->width = $width;
	}
}