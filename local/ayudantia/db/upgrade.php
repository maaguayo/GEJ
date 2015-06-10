<?php

defined ( 'MOODLE_INTERNAL' ) || die ();

/**
 * Execute emarking upgrade from the given old version
 *
 * @param int $oldversion
 * @return bool
*/
function xmldb_local_ayudantia_upgrade($oldversion) {
	global $DB;

	$dbman = $DB->get_manager (); // loads ddl manager and xmldb classes
	
if ($oldversion < 2015052001) {

	// Define table matematica1 to be created.
	$table = new xmldb_table('matematica1');

	// Adding fields to table matematica1.
	$table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
	$table->add_field('unidad1', XMLDB_TYPE_CHAR, '10', null, null, null, null);
	// Adding keys to table matematica1.
	$table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

	// Conditionally launch create table for matematica1.
	if (!$dbman->table_exists($table)) {
		$dbman->create_table($table);
	}

	// Ayudantia savepoint reached.
	upgrade_plugin_savepoint(true, 2015052001, 'local', 'ayudantia');
}

if ($oldversion < 2015052004) {

	// Define field contenido1 to be added to matematica1.
	$table = new xmldb_table('matematica1');
	$field = new xmldb_field('contenido1', XMLDB_TYPE_CHAR, '10', null, null, null, null, 'unidad1');

	// Conditionally launch add field contenido1.
	if (!$dbman->field_exists($table, $field)) {
		$dbman->add_field($table, $field);
	}

	// Ayudantia savepoint reached.
	upgrade_plugin_savepoint(true, 2015052004, 'local', 'ayudantia');
}

if ($oldversion < 2015052005) {

	// Define field cantenido2 to be added to matematica1.
	$table = new xmldb_table('matematica1');
	$field = new xmldb_field('cantenido2', XMLDB_TYPE_CHAR, '10', null, null, null, null, 'contenido1');

	// Conditionally launch add field cantenido2.
	if (!$dbman->field_exists($table, $field)) {
		$dbman->add_field($table, $field);
	}

	// Ayudantia savepoint reached.
	upgrade_plugin_savepoint(true, 2015052005, 'local', 'ayudantia');
}

if ($oldversion < 2015052006) {

	// Define field contenido3 to be added to matematica1.
	$table = new xmldb_table('matematica1');
	$field = new xmldb_field('contenido3', XMLDB_TYPE_CHAR, '10', null, null, null, null, 'cantenido2');

	// Conditionally launch add field contenido3.
	if (!$dbman->field_exists($table, $field)) {
		$dbman->add_field($table, $field);
	}

	// Ayudantia savepoint reached.
	upgrade_plugin_savepoint(true, 2015052006, 'local', 'ayudantia');
}



return true;
}