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

require_once('OFC/Charts/Series/Dot.php');

class OFC_Charts_Series_Dot_Hollow extends OFC_Charts_Series_Dot {
	function OFC_Charts_Series_Dot_Hollow($type = 'hollow-dot') {
		parent::OFC_Charts_Series_Dot($type);
	}

	function set_hollow($hollow) {
		$this->hollow = $hollow;
	}

	function set_background_colour($background_colour) {
		$this->{'background-colour'} = $background_colour;
	}

	function set_background_alpha($background_alpha) {
		$this->{'background-alpha'} = $background_alpha;
	}

	function set_halo_size($halo_size) {
		$this->{'halo-size'} = $halo_size;
	}
}