<?php
//###################################################################
//####################      EZE-CORES 2.0       #####################
//#      https://github.com/BiznatchEnterprises/EZE-CORES/2.0       #
//####################   Biznatch Enterprises   #####################
//####################        Jan, 2017         #####################
//###################################################################

// @@@@@@@ [EZE-CORES Plugin 1.0]  @@@@@@@
// https://github.com/BiznatchEnterprises/EZE-CORES/tree/plugin-class
include('EZE-Cores-Plugin.php'); //     
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

// www.domain.com/?page=home     
// www.domain.com/?page=blog

$PAGE = "";

$WEB_APP = new EZE_CORES;

// ~~~~~~~~~~~~~~~~~~~~~~~~~~ GET/Post Variable [PAGE] Start ~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_POST["page"]) == TRUE) {
        $PAGE = $_POST["page"];
    }
    if (isset($_POST["PAGE"]) == TRUE) {
        $PAGE = $_POST["PAGE"];
    }
    if (isset($_GET["page"]) == TRUE) {
        $PAGE = $_GET["page"];
    }
    if (isset($_GET["PAGE"]) == TRUE) {
        $PAGE = $_GET["PAGE"];
    }

    if ($PAGE <> ""){
        $WEB_APP->Change_CurrentPage($PAGE);
    }
// ~~~~~~~~~~~~~~~~~~~~~~~~~~ GET/Post Variable [PAGE] End ~~~~~~~~~~~~~~~~~~~~~~~~~~

// ~~~~~~~~~~~~~~~~~~~~~~~~~~ Page Sections Start ~~~~~~~~~~~~~~~~~~~~~~~~~~

$WEB_APP = new EZE_CORES;                                                                                       // Create new EZE_CORES Object
$WEB_APP->Change_Settings($SCRIPT_PATH, 'templates/');                                                          // Change General Settings

$TEMPLATEPATH_1 = 'Template-1/';                                                                                // Template #1 Filename
$TEMPLATEPATH_2 = 'Template-2/';                                                                                // Template #2 Filename
$WEB_APP->Change_DefaultPage("home");                                                                           // Default Page ID

$WEB_APP->Change_PageSettings('home', 'pages/home/', '', '', '', $TEMPLATEPATH_1);                              // [SetPAGE] Homepage (Default)
$WEB_APP->Change_PageSettings('blog', 'pages/blog/', '', '', '', $TEMPLATEPATH_2);               		        // [SetPAGE] Blog

echo $WEB_APP->Execute();

// ~~~~~~~~~~~~~~~~~~~~~~~~~~ Page Sections End ~~~~~~~~~~~~~~~~~~~~~~~~~~

?>
