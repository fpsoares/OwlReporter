<?php

// Include classes
include_once('tbs_class.php'); // Load the TinyButStrong template engine
include_once('tbs_plugin_opentbs.php'); // Load the OpenTBS plugin

// prevent from a PHP configuration problem when using mktime() and date()
if (version_compare(PHP_VERSION,'5.1.0')>=0) {
	if (ini_get('date.timezone')=='') {
		date_default_timezone_set('UTC');
	}
}

// Initialize the TBS instance
$TBS = new clsTinyButStrong; // new instance of TBS
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin

// ------------------------------
// Prepare data
// ------------------------------

// Retrieve the user name to display
$yourname = (isset($_POST['yourname'])) ? $_POST['yourname'] : '';
$yourname = trim(''.$yourname);
if ($yourname=='') $yourname = "(no name)";

$first_name = "first";
$last_name = "last";
$phone = "123-456-7890";
$email =  "asdasd@kloijhfsd.com";
$add1 = "123 asdsa st";
$add2 = "apt 5";
$city = "Boca";
$state = "FL";
$zip = "33431";

// A recordset for merging tables
$data = array();
$data['education'] = array();
$data['education'][] = array('inst'=>'FAU','major'=>'CE','start_date'=>'12/01/14','end_date'=>'06/01/17');
$data['skills'] = array();
$data['skills'][] = array('skill_name'=>'C++','prof_level'=>'Intermediate');
$data['skills'][] = array('skill_name'=>'PHP','prof_level'=>'Expert');
$data['skills'][] = array('skill_name'=>'Microcontrollers/MSP430','prof_level'=>'Intermediate');
$data['employment'] = array();
$data['employment'][] = array('location'=>'McD','position'=>'flipper','start_date'=>'10/05/12','end_date'=>'10/08/12');



// -----------------
// Load the template
// -----------------

$template = 'resume_template.odt';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Also merge some [onload] automatic fields (depends of the type of document).

// ----------------------
// Debug mode of the demo
// ----------------------
if (isset($_POST['debug']) && ($_POST['debug']=='current')) $TBS->Plugin(OPENTBS_DEBUG_XML_CURRENT, true); // Display the intented XML of the current sub-file, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='info'))    $TBS->Plugin(OPENTBS_DEBUG_INFO, true); // Display information about the document, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='show'))    $TBS->Plugin(OPENTBS_DEBUG_XML_SHOW); // Tells TBS to display information when the document is merged. No exit.

// --------------------------------------------
// Merging and other operations on the template
// --------------------------------------------

// Merge data in the body of the document
$TBS->MergeBlock('a', $data);

// -----------------
// Output the result
// -----------------

// Define the name of the output file
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', '_'.date('Y-m-d').$save_as.'.', $template);
if ($save_as==='') {
	// Output the result as a downloadable file (only streaming, no data saved in the server)
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); // Also merges all [onshow] automatic fields.
	// Be sure that no more output is done, otherwise the download file is corrupted with extra data.
	exit();
} else {
	// Output the result as a file on the server.
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	// The script can continue.
	exit("File [$output_file_name] has been created.");
}
