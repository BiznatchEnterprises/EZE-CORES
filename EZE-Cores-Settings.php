<?php
//+++++++++++++++++++++++++++++++++++++++++++
//EZE-CORES STRUCTURE - Biznatch Enterprises
//https://github.com/BiznatchEnterprises/EZE-CORES
//+++++++++++++++++++++++++++++++++++++++++++
//EZE-CMS 2.0  - Biznatch Enterprises
//https://github.com/BiznatchEnterprises/EZE-CMS
//+++++++++++++++++++++++++++++++++++++++++++


//-
//======================= EZE-Cores Settings File START =======================
$PRODUCT = '[EZE-CORES]';
$VERSION = '2.0';

//############ GENERAL CORES SETTINGS START ############
//$^^ EZE-Cores Filename Path ^^   = ;
$EZECORES_FILENAME   = 'index.php';
//$^^ EZE-Cores Default Selected CORE ^^   = ;
$EZECORES_DEFAULT_CORE   = '0';
//$^^ EZE-Cores Default Selected CHILD ^^   = ;
$EZECORES_DEFAULT_CHILD   = 'HOME';
//$^^ EZE-Cores Default Selected PARENT ^^   = ;
$EZECORES_DEFAULT_PARENT   = 'A';
//$^^ EZE-Cores Sector Output (Pre-Script, Layout, Engine) ^^   = ;
$EZECORES_OUTPUT_DATA   = '';
//############ GENERAL CORES SETTINGS END ############

//############ CORES VARIABLE SETTINGS START #############

//----- IMPORT REQUEST VARIABLES START --------
//import_request_variables("gP", "r"); 

//if ($rP <> '') { $P = $rP; }
//if ($rC <> '') { $C = $rC; } 
//if ($rCD <> '') { $CD = $rCD; } 
//if ($rCDX <> '') { $CDX = $rCDX; } 
//if ($rCDXX <> '') { $CDXX = $rCDXX; } 
//if ($rCDXXX <> '') { $CDXXX = $rCDXXX; } 
//if ($rCDD <> '') { $CDD = $rCDD; } 
//if ($rSC <> '') { $SC = $rSC; } 
//if ($rSID <> '') { $SID = $rSID; }
//if ($rUID <> '') { $UID = $rUID; }
//if ($rUSERNAME <> '') { $USERNAME = $rUSERNAME; } 
//if ($rPASSWORD <> '') { $PASSWORD = $rPASSWORD; } 
//if ($rP11 <> '') { $P11 = $rP11; } 
//if ($rP12 <> '') { $P12 = $rP12; } 
//if ($rP21 <> '') { $P21 = $rP21; } 
//if ($rP22 <> '') { $P22 = $rP22; } 
//if ($rP31 <> '') { $P31 = $rP31; } 
//if ($rP32 <> '') { $P32 = $rP32; }
//if ($rCDD <> '') { $CDD = $rCDD; }
//$REF = '';
//if ($rREF <> '') { $REF = $rREF; }
//if ($REF == '') { $REF = $rref; }
//if ($REF == '') { $REF = $rR; }
//if ($REF == '') { $REF = $rr; }
//if ($REF == '') { $REF = $rA; }
//if ($REF == '') { $REF = $ra; }
//if ($REF == '') { $REF = $rAFF; }
//if ($REF == '') { $REF = $raff; }
//if ($rIDNSL <> '') { $IDNSL = $rIDNSL; }
//if ($rDLNSL <> '') { $DLNSL = $rDLNSL; }
//if ($rSZNSL <> '') { $SZNSL = $rSZNSL; }
//if ($rWDNSL <> '') { $WDNSL = $rWDNSL; }
//if ($rHENSL <> '') { $HENSL = $rHENSL; }
//if ($rIMNSL <> '') { $IMNSL = $rIMNSL; }
//if ($rrte1<> '') { $rte1 = $rrte1; }
//$NSL = $rNSL; 
//$FORMEV = $rFORMEV; 
//$FORMEVA = $rFORMEVA; 
//$FORMEVB = $rFORMEVB;
//----- IMPORT REQUEST VARIABLES END --------


//---------------COOKIE FUNCTIONS START---------------------------
if (isset($_COOKIE["SWCookieValue"]) == TRUE) {
	 $SWCookieValue = $_COOKIE["SWCookieValue"];     //READ COOKIE IF IT EXISTS
}

	function cookie($function, $value) {

		if ($function == "set") {
			setcookie ("SWCookieValue", "$value", time() + 14400);// Cookie is Valid for 4 hours. 3 value in function is the time expiration in seconds. ... 3600 seconds = 1 hour
			return true;// cookie set, return true
			} else if ($function = "logout") {
			setcookie ("SWCookieValue", "$value", time() - 14400);// Cookie is now expired as we set the expiration value to 4 hours ago
			return true; // logout complete
			} else if ($function = "check") {
				if (isset($SWCookieValue)) {
					if ($SWCookieValue == $value) {
					//print("ALL GOOD.. cookie verified");
					return true;
					} else {
					//print("Value does not much cookie");
					return false; // Failed, so return false
					}
				}
			} else {
				return false;// Failed, since no operations match
		}

	}
//---------------COOKIE FUNCTIONS END   --------------------------------

//----- Referral VARIABLES START --------
if (isset($REF) == TRUE) {
	$REF = str_replace('%20', ' ', $REF);
}
//----- Referral VARIABLES END --------

//----- Command VARIABLES START --------
if (isset($C) == TRUE) {
	if ($C <> '') { $CHILD_NUM = $C; }
}
//----- Command VARIABLES END --------

//----- Command-Do VARIABLES START --------
if (isset($CD) == TRUE) {
	$CD = str_replace('%20', ' ', $CD);
} 
//----- Command-Do VARIABLES END --------

//----- GENERAL VARIABLES START --------
if (isset($P) == TRUE) {
	$PARENT_LETT = $P;
}
//----- GENERAL VARIABLES END --------

//----- GENERAL VARIABLES START --------
	if (isset($CORE) == TRUE) { 
		$CORE_NUM = $CORE;
	} else {
		$CORE_NUM = $EZECORES_DEFAULT_CORE;
	}

//----- GENERAL VARIABLES END --------

//----- CHILD SECTOR NUMBER (CURRENT) START --------
	if (isset($CHILD) == TRUE) {
		$CHILD_NUM = $CHILD;
	} else { 
		$CHILD_NUM = $EZECORES_DEFAULT_CHILD;
	}

//----- CHILD SECTOR NUMBER (CURRENT) END --------

//----- PARENT SECTOR LETTER START --------
if (isset($PARENT) == TRUE) {
	$PARENT_LETT = $PARENT;
} else { 
	$PARENT_LETT = $EZECORES_DEFAULT_PARENT;
}
//----- PARENT SECTOR LETTER END --------

//----- CLEAR TEMP VARIABLES START --------
$CORE = '';
$CHILD = '';
$PARENT = '';
//----- CLEAR TEMP VARIABLES END --------


//if ($TEMPL == '') { $TEMPL = $rTEMPL; }
$IP = getenv("REMOTE_ADDR") . ' ' . getenv("HTTP_CLIENT_IP") . ' ' .  getenv("HTTP_X_FORWARDED_FOR");
$IP = str_replace('  ', '', $IP);
//if ($IPP == '') { $IPP = $rIPP; }

//---- IF NO SESSION ID FROM GET/POST, ATTEMPT TO READ FROM COOKIE START -----
if (isset($SID) == TRUE){
	if ($SID == ''){
		if (isset($SWCookieValue)) {
		$SID = $SWCookieValue;
		}
	}
}
//---- IF NO SESSION ID FROM GET/POST, ATTEMPT TO READ FROM COOKIE END -----

//---- SESSION ID (LOGOUT) START -----
if (isset($CDX) == TRUE) {
	if ($CDX == 'Logout') { 
		$CDX = '';
		$CD = 'MemServices'; 
		$SID = '';
		setcookie("SWCookieValue", 'Empty');
		setcookie("LOGGEDIN", 'FALSE');
	}
}
//---- SESSION ID (LOGOUT) END -----
	
//---- SESSION ID (AUTHENTICATION) START ---------
//echo $SID;
if (isset($SID) == TRUE){
	if ($SID == 'Empty') { $SID = ''; }

		if ($SID <> ''){
			$tmp = decrypt($SID, $IP);
			$USERNAME = '';
			$PASSWORD = '';
			$SESSKEY = '';
			$t2 = explode('<-->', $tmp);
			$USERNAME = $t2[0];
			$PASSWORD = $t2[1];
			$SESSKEY = $t2[2];
			$SID = '';
		}

		if ($USERNAME <> '') {
			if ($PASSWORD <> ''){
				$SID = encrypt($USERNAME . '<-->' . $PASSWORD . '<-->' . $SESSKEY, $IP);
			}
	}
}
//if ($SID <> ''){ if ($CD == 'MemServices'){ $CDX = 'Members Login'; } }
//---- SESSION ID (AUTHENTICATION) END ---------

//@@@@@@@@@@
//---------------------------------------------
//############ CORES VARIABLE SETTINGS END #############


//############ THE CORES START ############
//@@@@@@@@@@@
//$^^^^^ CORE #0 START ^^^^^   = ;
$EZECORES_TITLE['CORE_0']   = 'CORE #0';
$EZECORES_ENABLED['CORE_0']   = 'TRUE';
$EZECORES_PRESCRIPT_FILENAME['CORE_0']   = 'CoreSectors/core0_PRS.php';
$EZECORES_PRESCRIPT_ENCRYPTED['CORE_0']   = 'FALSE';
$EZECORES_PRESCRIPT_CRYPTKEY['CORE_0']   = '';
$EZECORES_LAYOUT_FILENAME['CORE_0']   = 'CoreSectors/core0_ESL.php';
$EZECORES_PRESCRIPT_ENCRYPTED['CORE_0']   = 'FALSE';
$EZECORES_PRESCRIPT_CRYPTKEY['CORE_0']   = '';
$EZECORES_ENGINE_FILENAME['CORE_0']   = 'CoreSectors/core0_ENG.php';
$EZECORES_ENGINE_ENCRYPTED['CORE_0']   = 'FALSE';
$EZECORES_ENGINE_CRYPTKEY['CORE_0']   = '';
//$^^^^^ CORE #0 END ^^^^^   = ;
//@@@@@@@@@@@
//############ THE CORES END ############

//############ EXTERNAL SectorS (Plug-ins) START ############
//$^^^^^ PLUGIN #1 START ^^^^^ = ;
$EZECORES_SECTOR_TITLE['EXTERNAL']['CHILD_1'] = 'PLUGIN-1';
$EZECORES_SECTOR_ENABLED['EXTERNAL']['CHILD_1'] = 'TRUE';
$EZECORES_SECTOR_LAYOUT_FILENAME['EXTERNAL']['CHILD_1'] = 'ExternalSectors/LYT-MODULES/test-plugin.html';
$EZECORES_SECTOR_ENGINE_OUTPUT['EXTERNAL']['CHILD_1'] = '';
$EZECORES_SECTOR_PRESCRIPT_FILENAME['EXTERNAL']['CHILD_1'] = 'ExternalSectors/PHP-MODULES/test-plugin.php';
$EZECORES_SECTOR_ENGINE_FILENAME['EXTERNAL']['CHILD_1'] = '';
//$^^^^^ PLUGIN #1 END ^^^^^ = ;

//@@@@@@@@@@@
//-----
$EZECORES_SECTORS_CHILD_MAX['EXTERNAL'] = count($EZECORES_SECTOR_TITLE['EXTERNAL'], 1);
//############ EXTERNAL SectorS (Plug-ins) END ############


//############ ACTION SectorS START ############
//@@@@@@@@@@@

//------------------------------------------------------------------------------------------------------------
//$^^^^^ PARENT_A  CHILD_1 START ^^^^^ = ;
$EZECORES_SECTOR_TITLE['PARENT_A']['CHILD_1'] = 'HOME';
$EZECORES_SECTOR_ENABLED['PARENT_A']['CHILD_1'] = 'TRUE';
$EZECORES_SECTOR_SHOWINCORESECTOR['PARENT_A']['CHILD_1'] = 'TRUE';
$EZECORES_SECTOR_PRESCRIPT_FILENAME['PARENT_A']['CHILD_1'] = 'ActionSectors/Prescripts/Sector_A_1_PRS.php';
$EZECORES_SECTOR_PRESCRIPT_ENCRYPTED['PARENT_A']['CHILD_1'] = 'FALSE';
$EZECORES_SECTOR_PRESCRIPT_CRYPTKEY['PARENT_A']['CHILD_1'] = '';
$EZECORES_SECTOR_LAYOUT_FILENAME['PARENT_A']['CHILD_1'] = 'ActionSectors/Layouts/Sector_A_1_ESL.php';
$EZECORES_SECTOR_LAYOUT_ENCRYPTED['PARENT_A']['CHILD_1'] = 'FALSE';
$EZECORES_SECTOR_LAYOUT_CRYPTKEY['PARENT_A']['CHILD_1'] = '';
$EZECORES_SECTOR_ENGINE_FILENAME['PARENT_A']['CHILD_1'] = 'ActionSectors/Engines/Sector_A_1_ENG.php';
$EZECORES_SECTOR_ENGINE_ENCRYPTED['PARENT_A']['CHILD_1'] = 'FALSE';
$EZECORES_SECTOR_ENGINE_CRYPTKEY['PARENT_A']['CHILD_1'] = '';
$EZECORES_SECTOR_ENGINE_OUTPUT['PARENT_A']['CHILD_1'] = '';
//$^^^^^ PARENT_A  CHILD_1 END ^^^^^ = ;
//------------------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------------------------
//@@@@@@@@@@@
//############ ACTION SectorS END ############

//############ ACTION SectorS MAX CHILDREN START ############
//NUMBER OF CHILDREN IN PARENT Sector A
if (isset($EZECORES_SECTOR_TITLE['PARENT_A']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_A'] = count($EZECORES_SECTOR_TITLE['PARENT_A'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector B
if (isset($EZECORES_SECTOR_TITLE['PARENT_B']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_B'] = count($EZECORES_SECTOR_TITLE['PARENT_B'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector C
if (isset($EZECORES_SECTOR_TITLE['PARENT_C']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_C'] = count($EZECORES_SECTOR_TITLE['PARENT_C'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector D
if (isset($EZECORES_SECTOR_TITLE['PARENT_D']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_D'] = count($EZECORES_SECTOR_TITLE['PARENT_D'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector E
if (isset($EZECORES_SECTOR_TITLE['PARENT_E']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_E'] = count($EZECORES_SECTOR_TITLE['PARENT_E'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector F
if (isset($EZECORES_SECTOR_TITLE['PARENT_F']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_F'] = count($EZECORES_SECTOR_TITLE['PARENT_F'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector G
if (isset($EZECORES_SECTOR_TITLE['PARENT_G']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_G'] = count($EZECORES_SECTOR_TITLE['PARENT_G'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector H
if (isset($EZECORES_SECTOR_TITLE['PARENT_H']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_H'] = count($EZECORES_SECTOR_TITLE['PARENT_H'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector I
if (isset($EZECORES_SECTOR_TITLE['PARENT_I']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_I'] = count($EZECORES_SECTOR_TITLE['PARENT_I'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector J
if (isset($EZECORES_SECTOR_TITLE['PARENT_J']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_J'] = count($EZECORES_SECTOR_TITLE['PARENT_J'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector K
if (isset($EZECORES_SECTOR_TITLE['PARENT_K']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_K'] = count($EZECORES_SECTOR_TITLE['PARENT_K'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector L
if (isset($EZECORES_SECTOR_TITLE['PARENT_L']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_L'] = count($EZECORES_SECTOR_TITLE['PARENT_L'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector M
if (isset($EZECORES_SECTOR_TITLE['PARENT_M']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_M'] = count($EZECORES_SECTOR_TITLE['PARENT_M'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector N
if (isset($EZECORES_SECTOR_TITLE['PARENT_N']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_N'] = count($EZECORES_SECTOR_TITLE['PARENT_N'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector O
if (isset($EZECORES_SECTOR_TITLE['PARENT_O']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_O'] = count($EZECORES_SECTOR_TITLE['PARENT_O'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector P
if (isset($EZECORES_SECTOR_TITLE['PARENT_P']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_P'] = count($EZECORES_SECTOR_TITLE['PARENT_P'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector Q
if (isset($EZECORES_SECTOR_TITLE['PARENT_Q']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_Q'] = count($EZECORES_SECTOR_TITLE['PARENT_Q'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector R
if (isset($EZECORES_SECTOR_TITLE['PARENT_R']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_R'] = count($EZECORES_SECTOR_TITLE['PARENT_R'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector S
if (isset($EZECORES_SECTOR_TITLE['PARENT_S']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_S'] = count($EZECORES_SECTOR_TITLE['PARENT_S'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector T
if (isset($EZECORES_SECTOR_TITLE['PARENT_T']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_T'] = count($EZECORES_SECTOR_TITLE['PARENT_T'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector U
if (isset($EZECORES_SECTOR_TITLE['PARENT_U']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_U'] = count($EZECORES_SECTOR_TITLE['PARENT_U'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector V
if (isset($EZECORES_SECTOR_TITLE['PARENT_V']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_V'] = count($EZECORES_SECTOR_TITLE['PARENT_V'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector W
if (isset($EZECORES_SECTOR_TITLE['PARENT_W']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_W'] = count($EZECORES_SECTOR_TITLE['PARENT_W'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector X
if (isset($EZECORES_SECTOR_TITLE['PARENT_X']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_X'] = count($EZECORES_SECTOR_TITLE['PARENT_X'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector Y
if (isset($EZECORES_SECTOR_TITLE['PARENT_Y']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_Y'] = count($EZECORES_SECTOR_TITLE['PARENT_Y'], 1) + 1;
}
//NUMBER OF CHILDREN IN PARENT Sector Z
if (isset($EZECORES_SECTOR_TITLE['PARENT_Z']) == TRUE){
$EZECORES_SECTORS_CHILD_MAX['PARENT_Z'] = count($EZECORES_SECTOR_TITLE['PARENT_Z'], 1) + 1;
}
//############ ACTION SectorS MAX CHILDREN END ############

//############ INTERNAL SETTINGS START ##############
//----------- Allow Calling Of Action Sectors By Title START--------
if (isset($CHILD_NUM) == TRUE) {	

	if (isset($PARENT_LETT) == TRUE) {

		$CHILD_TITLE = $PARENT_LETT . '-' . $CHILD_NUM;
		$PT = 'PARENT_' . $PARENT_LETT;

			for ($CHILD_NUMs = 1; $CHILD_NUMs <= $EZECORES_SECTORS_CHILD_MAX[$PT] - 1; $CHILD_NUMs++) {
				$PTT = 'CHILD_' . $CHILD_NUMs;

				if ($EZECORES_SECTOR_TITLE[$PT][$PTT] == $CHILD_NUM) { 
					$CHILD_NUM = $CHILD_NUMs; 
				}
				
			}
	}
}
//----------- Allow Calling Of Action Sectors By Title END--------
//############ INTERNAL SETTINGS END ##############



//======================= EZE-Cores Settings File END =======================


?>