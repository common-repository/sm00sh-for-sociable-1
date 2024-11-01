<?php
/*
Plugin Name: sm00sh for Sociable
Plugin URI: http://ipublicis.com/
Description: Allow your readers to convert your post permalink to a shorten sm00shed one and include it in their's favorite social or blog site. Requires Sociable 3.4.1 or greater.
Version: 1.0.1
Author: Lopo Lencastre de Almeida <dev@ipublicis.com>
Author URI: http://ipublicis.com/
Donate link: http://smsh.me/7kit
License: GNU GPL v3 or later

    Copyright (C) 2009 iPublicis!COM

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

    Copyright 2006 Peter Harkins (ph@malaprop.org)
*/

function sm00sh_sociable_add_sites( $known_sites ) {
  $known_sites['sm00sh'] = array(
    'favicon' => 'http://smsh.me/favicon.ico',
    'url' => 'http://smsh.me/?save=y&url=PERMALINK',
    'description' => 'Short my URLs to use in your Social Sites'
  );
  return $known_sites;
}
add_filter('sociable_known_sites','sm00sh_sociable_add_sites',10,1);

?>
