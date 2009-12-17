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

class OFC_Charts_Tags_Value {
	function OFC_Charts_Tags_Value($text, $x = null, $y = null) {
		$this->set_text($text);
		$this->set_x($x);
		$this->set_y($y);
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_x($x) {
		$this->x = $x;
	}

	function set_y($y) {
		$this->y = $y;
	}

	function set_axis($axis) {
		$this->axis = $axis;
	}

	function set_on_click($on_click) {
		$this->{'on-click'} = $on_click;
	}

	function set_text($text) {
		$this->text = $text;
	}

	function set_alpha($alpha) {
		$this->alpha = $alpha;
	}

	function set_border($border) {
		$this->border = $border;
	}

	function set_background($background) {
		$this->background = $background;
	}

	function set_rotate($rotate) {
		$this->rotate = $rotate;
	}

	function set_font($font) {
		$this->font = $font;
	}

	function set_font_size($font_size) {
		$this->{'font-size'} = $font_size;
	}

	function set_bold($bold) {
		$this->bold = $bold;
	}

	function set_underline($underline) {
		$this->underline = $underline;
	}

	function set_align_x($align_x) {
		$this->{'align-x'} = $align_x;
	}

	function set_align_y($align_y) {
		$this->{'align-y'} = $align_y;
	}

	function set_pad_x($pad_x) {
		$this->{'pad-x'} = $pad_x;
	}

	function set_pad_y($pad_y) {
		$this->{'pad-y'} = $pad_y;
	}
}