<?php
// Heanet Media filter plugin
// Copyright (C) 2015 swdev@heanet.ie

// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Heanet Media repository upload
 *
 * @package    repository_heanetmedia_upload
 * @copyright  2015 Heanet swdev@heanet.ie
 * @author     Luis Naia
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function xmldb_repository_heanetmedia_upload_install() {
    global $CFG;
    $result = true;
    require_once($CFG->dirroot.'/repository/lib.php');
    $repo = new repository_type('heanetmedia_upload', array(), true);
    if(!$id = $repo->create(true)) {
        $result = false;
    }
    return $result;
}
