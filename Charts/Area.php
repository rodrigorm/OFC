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

require_once('OFC/Charts/Line.php');

class OFC_Charts_Area extends OFC_Charts_Line {
	function OFC_Charts_Area() {
		parent::OFC_Charts_Base();
		$this->type = 'area';
	}

	function set_fill_colour($colour) {
		$this->fill = $colour;
	}

	function set_fill_alpha($alpha) {
		$this->{'fill-alpha'} = $alpha;
	}

	function set_loop() {
		$this->loop = true;
	}
}