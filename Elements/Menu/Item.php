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

class OFC_Elements_Menu_Item {
	function OFC_Elements_Menu_Item($text, $javascript_function) {
		$this->set_text($text);
		$this->set_javascript_function($javascript_function);
	}
	
	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_text($text) {
		$this->text = $text;
	}

	function set_javascript_function($javascript_function) {
		$this->{'javascript-function'} = $javascript_function;
	}

	function set_background_colour($background_colour) {
		$this->{'background-colour'} = $background_colour;
	}

	function set_glow_colour($glow_colour) {
		$this->{'glow-colour'} = $glow_colour;
	}

	function set_text_colour($text_colour) {
		$this->{'text-colour'} = $text_colour;
	}

	function from_array($values) {
		foreach ((array)$values as $key => $value) {
			if (is_string($value)) {
				$values[$key] = new self($value);
			}
		}
		return $values;
	}
}