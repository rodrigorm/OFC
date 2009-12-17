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
require_once('OFC/Charts/Bar/Horizontal/Value.php');

class OFC_Charts_Bar_Horizontal extends OFC_Charts_Base {
	function OFC_Charts_Bar_Horizontal() {
		parent::OFC_Charts_Base();
		$this->type = 'hbar';
	}

	function set_values($values) {
		$this->values = $values;
	}

	function set_colour($colour) {
		$this->colour = $colour;
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

	function set_on_click($on_click) {
		$this->{'on-click'} = $on_click;
	}
}