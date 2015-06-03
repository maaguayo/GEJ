<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * 
 *
 * @package    local
 * @subpackage ayudantia 
 * @copyright  2015-Tics331
 * 				Francisco García Ralph (francisco.garcia.ralph@gmail.com)			
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once (dirname ( __FILE__ ) . '/../../config.php');

global $DB, $USER, $CFG;

require_login (); // Requiere estar log in

$baseurl = new moodle_url ( '/local/ayudantia/index.php' ); // importante para crear la clase pagina
$context = context_system::instance (); // context_system::instance();
$PAGE->set_context ( $context );
$PAGE->set_url ( $baseurl );
$PAGE->set_pagelayout ( 'standard' );
$PAGE->set_title ( get_string ( 'title', 'local_ayudantia' ) );
$PAGE->set_heading ( get_string ( 'title', 'local_ayudantia' ) );
$PAGE->navbar->add ( get_string ( 'ayudantia', 'local_ayudantia' ) );
$PAGE->navbar->add ( 'index', 'reservar.php' );





echo $OUTPUT->header (); // Imprime el header
echo $OUTPUT->heading ( get_string ( 'title', 'local_ayudantia' ) );





echo"	<html>
			<form action='http://localhost/moodle-master/local/ayudantia/index2.php' method='post'>";

echo "
<input type='submit' value='Subir contenido'>";


echo"</form>
			</html>"




/*<html>
			<form action="http://localhost/moodle-master/local/ayudantia/index2.php" method="post">

<input type=button value="Subir contenido" >
</form>

echo $OUTPUT->footer (); // imprime el footer */
?>


