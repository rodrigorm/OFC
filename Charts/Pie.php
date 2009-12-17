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
require_once('OFC/Charts/Pie/Value.php');

class OFC_Charts_Pie extends OFC_Charts_Base {
	function OFC_Charts_Pie() {
		parent::OFC_Charts_Base();
		$this->type = 'pie';
	}

	function set_animate($v) {
		$this->animate = $v;
	}

	function set_start_angle($angle) {
		$this->{'start-angle'} = $angle;
	}

	function set_colours($colours) {
		$this->colours = $colours;
	}

	function set_alpha($alpha) {
		$this->alpha = $alpha;
	}

	function set_label_colour($label_colour) {
		$this->{'label-colour'} = $label_colour;
	}

	function set_font_size($font_size) {
		$this->{'font-size'} = $font_size;
	}

	function set_gradient_fill($gradient_fill) {
		$this->{'gradient-fill'} = $gradient_fill;
	}

	function set_stroke($stroke) {
		$this->stroke = $stroke;
	}

	function set_tooltip($tooltip) {
		$this->tip = $tooltip;
	}

	function set_no_labels($no_labels) {
		$this->{'no-labels'} = $no_labels;
	}

	function set_on_click($on_click) {
		$this->{'on-click'} = $on_click;
	}

	function set_values($values) {
		$this->values = $values;
	}
}
