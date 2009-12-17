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

require_once('OFC/Charts/Series/Dot.php')

class OFC_Charts_Scatter_Value extends OFC_Charts_Series_Dot {
	function OFC_Charts_Scatter_Value($x, $y, $dot_size = -1) {
		parent::OFC_Charts_Series_Dot('dot');
		$this->set_x($x);
		$this->set_y($y);

		if ($dot_size > 0) {
			$this->set_dot_size($dot_size);
		}
	}

	function set_x($x) {
		$this->x = $x;
	}

	function set_y($y) {
		$this->y = $y;
	}
}