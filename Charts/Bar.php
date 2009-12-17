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
require_once('OFC/Charts/Bar/Value.php');
require_once('OFC/ONShow.php');

class OFC_Charts_Bar extends OFC_Charts_Base {
	function OFC_Charts_Bar() {
		parent::OFC_Charts_Base();
		$this->type = 'bar';
	}

	function set_key($text, $size) {
		$this->set_text($text);
		$this->set_font_size($size);
	}

	function set_values($v) {
		$this->values = $v;
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_text($text) {
		$this->text = $text;
	}

	function set_font_size($font_size) {
		$this->font_size = $font_size;
	}

	function set_alpha($alpha) {
		$this->alpha = $alpha;
	}

	function set_tooltip($tip) {
		$this->tip = $tip;
	}

	function set_on_show($on_show) {
		if (is_string($on_show)) {
			$on_show = new OFC_OnShow($on_show);
		}
		$this->{'on-show'} = $on_show;
	}

	function set_on_click($text) {
		$this->{'on-click'} = $text;
	}
	
	function set_axis($axis) {
		$this->axis = $axis;
	}
}