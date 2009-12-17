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

class OFC_OnShow {
	const none = 'none';
	const pop_up = 'pop-up';

	function OFC_OnShow($type, $cascade, $delay) {
		$this->set_type($type);
		$this->set_cascade($cascade);
		$this->set_delay($delay);
	}

	function set_type($type) {
		$this->type = $type;
	}

	function set_cascade($cascade) {
		$this->cascade = $cascade;
	}

	function set_delay($delay) {
		$this->delay = $delay;
	}
}