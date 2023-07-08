<?php
require('../model/database.php');
require('../model/technician_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    // ???
}

if ($action == 'list_technicians') {
    // ???
} else if ($action == 'delete_technician') {
    // ???
} else if ($action == 'show_add_form') {
    // ???
} else if ($action == 'add_technician') {
    // Validate the inputs
}
?>