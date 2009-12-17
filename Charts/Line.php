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
require_once('OFC/Charts/Line/Style.php');

class OFC_Charts_Line extends OFC_Charts_Base {
	function OFC_Charts_Line() {
		parent::OFC_Charts_Base();
		$this->type = 'line';
	}

	function set_values($v) {
		$this->values = $v;
	}

	function set_width($width) {
		$this->width = $width;
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_line_style($line_style) {
		if (is_string($line_style)) {
			$line_style = new OFC_Charts_Line_Style($style);
		}
		$this->line_style = $line_style;
	}

	function set_dot_style($dot_style) {
		$this->dot_style = $dot_style;
	}

	function set_dot_size($size) {
		$this->{'dot-size'} = $size;
	}

	function set_halo_size($size) {
		$this->{'halo-size'} = $size;
	}

	function set_key($text, $font_size) {
		$this->set_text($text);
		$this->set_font_size($font_size);
	}

	function set_text($text) {
		$this->text = $text;
	}

	function set_font_size($font_size) {
		$this->{'font-size'} = $font_size;
	}

	function set_on_show($on_show) {
		if (is_string($on_show)) {
			$on_show = new OFC_OnShow($on_show);
		}
		$this->{'on-show'} = $on_show;
	}
}