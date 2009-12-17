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

class OFC_Charts_Bar_Value {
	function OFC_Charts_Bar_Value($top, $bottom = null) {
		$this->top = $top;

		if (isset($bottom)) {
			$this->bottom = $bottom;
		}
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_tooltip($tip) {
		$this->tip = $tip;
	}

	function set_alpha($alpha) {
		$this->alpha = $alpha;
	}

	function set_on_click($on_click) {
		$this->{'on-click'} = $on_click;
	}

	function set_axis($axis) {
		$this->axis = $axis;
	}

	function set_on_show($on_show) {
		if (is_string($on_show)) {
			$on_show = new OFC_OnShow($on_show);
		}
		$this->{'on-show'} = $on_show;
	}

	function set_bottom($bottom) {
		$this->bottom = $bottom;
	}

	function set_top($top) {
		$this->top = $top;
	}
}