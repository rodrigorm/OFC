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

require_once('OFC/Elements/Axis/Radar/Label/Set.php');

class OFC_Elements_Axis_Radar {
	function OFC_Elements_Axis_Radar($labels = array()) {
		$this->set_labels($labels);
	}

	function set_stroke($stroke) {
		$this->stroke = $stroke;
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_grid_colour($grid_colour) {
		$this->{'grid-colour'} = $grid_colour;
	}

	function set_min($min) {
		$this->min = $min;
	}

	function set_max($max) {
		$this->max = $max;
	}

	function set_steps($steps) {
		$this->steps = $steps;
	}

	function set_labels($labels) {
		if (is_array($labels)) {
			$labels = new OFC_Elements_Axis_Radar_Label_Set($labels);
		}
		$this->labels = $labels;
	}

	function set_spoke_labels($spoke_labels) {
		$this->spoke_labels = $spoke_labels;
	}
}