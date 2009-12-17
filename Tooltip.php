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

class OFC_Tooltip {
	const CLOSEST = 0;
	const PROXIMITY = 1;
	const NORMAL = 2;

	function OFC_Tooltip($text = '') {
		$this->set_text($text);
	}

	function set_shadow($shadow) {
		$this->shadow = $shadow ? 1 : 0;
	}

	function set_rounded($rounded) {
		$this->rounded = $rounded;
	}

	function set_stroke($stroke) {
		$this->stroke = $stroke;
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_background($background) {
		$this->background = $background;
	}

	function set_title($title) {
		$this->title = $title;
	}

	function set_body($body) {
		$this->body = $body;
	}

	function set_mouse($mouse) {
		$this->mouse = $mouse;
	}

	function set_text($text) {
		$this->text = $text;
	}
}