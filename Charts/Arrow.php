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

class OFC_Charts_Arrow extends OFC_Charts_Base {
	function OFC_Charts_Arrow() {
		parent::OFC_Charts_Base();
		$this->type = 'arrow';
	}

	function set_start($start) {
		$this->start = $start;
	}

	function set_end($end) {
		$this->end = $end;
	}

	function set_colour($colour) {
		$this->colour = $colour;
	}

	function set_alpha($alpha) {
		$this->alpha = $alpha;
	}

	function set_barb_length($barb_length) {
		$this->{'barb-length'} = $barb_length;
	}
}