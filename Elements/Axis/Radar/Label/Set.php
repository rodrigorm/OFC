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

require_once('OFC/Elements/Axis/Radar/Label.php');

class OFC_Elements_Axis_Radar_Label_Set {
	function OFC_Elements_Axis_Radar_Label_Set($labels = array()) {
		$this->set_labels($labels);
	}

	function set_steps($steps) {
		$this->steps = $steps;
	}

	function set_labels($labels) {
		$labels = OFC_Elements_Axis_Radar_Label::from_array($labels);
		$this->labels = $labels;
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_size($size) {
		$this->size = $size;
	}
}