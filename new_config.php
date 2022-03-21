<?php
/*
Open DMARC Analyzer - Open Source DMARC Analyzer
config.php
2022 - John Bradley (userjack6880)

Available at: https://github.com/userjack6880/Open-DMARC-Analyzer

This file is part of Open DMARC Analyzer.

Open DMARC Analyzer is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software 
Foundation, either version 3 of the License, or (at your option) any later 
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with 
this program.  If not, see <https://www.gnu.org/licenses/>.
*/

// MySQL Settings

define('DB_HOST', 'localhost');
define('DB_USER', 'dmarc');
define('DB_PASS', '55jlmmULRuiqDeT2');
define('DB_NAME', 'dmarc');
define('DB_PORT', '3306'); // default port 3306

// Debug Settings

define('DEBUG', 1);

// Template Settings

define('TEMPLATE', 'opendav2');

// Package Loader
define('AUTO_LOADER', 'vendor/autoload.php');   // autoloader for composer installed libraries

// GeoIP2 Settings
define('GEO_ENABLE', 1);                        // 0 - disable GeoIP2, 1 - enable GeoIP2
define('GEO_DB', 'includes/geolite2.mmdb');     // location of GeoIP2 database

// Defaults

define('DATE_RANGE', '-1m');                    // d - day, w - week, m - month

?>
