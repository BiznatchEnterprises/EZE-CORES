<?PHP
//+++++++++++++++++++++++++++++++++++++++++++
// EZE-CORES STRUCTURE 2002 - RELEASED APRIL 7, 2017
// https://github.com/BiznatchEnterprises/EZE-CORES
//
// Dynamic Object Oriented Pre-Hypertext Processing Cores
//    -> EZE-CONTENT MANAGEMENT SYSTEM (HTML/CSS/JAVASCRIPT/ETC)
//
// COPYRIGHT BIZNATCH ENTERPRISES (biznaturally.ca)
// EZE-CORES - DOOPHPC COPYRIGHT 2002
//
// Redistribution and use in source and binary forms are permitted
// provided that the above copyright notice and this paragraph are
// duplicated in all such forms and that any documentation,
// advertising materials, and other materials related to such
// distribution and use acknowledge that the software was developed
// by Biznatch Enterprises. The name of the
// EZE-CORES or Biznatch Enterprises may not be used to endorse or promote products derived
// from this software without specific prior written permission.
// THIS SOFTWARE IS PROVIDED ``AS IS'' AND WITHOUT ANY EXPRESS OR
// IMPLIED WARRANTIES, INCLUDING, WITHOUT LIMITATION, THE IMPLIED
// WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.
//
//+++++++++++++++++++++++++++++++++++++++++++
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% EZE CORES START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$CORES_SETTINGS_FILE = 'EZE-Cores-Settings.php';
$CORES_SETTINGS_ENCRYPTED = 'FALSE';
$CORES_SETTINGS_CRYPTKEY = '';
//-------------------------------------
//^^^^ EZE-Cores Run in Debugging Mode ^^^^

//^^^^ EZE-Cores Run in Debugging Mode ^^^^
$SETTINGSMODE = '1'; // 1 = INLINE  2 = DYNAMIC FILE (EZE-Cores-DBG-Settings.var)
	if ($SETTINGSMODE == '1'){
	//-------------INLINE TRIGGER SETTINGS-------------
	//RECOMMENDED FOR SPEED-PERFORMANCE
	$EZECORES_Run_Debug_Mode = 'FALSE'; //RUN DEBUG MODE
	$EZECORES_Run_Debug_MTP = '2';  //1 = FULL   2 = Page Load Time Only
	//-------------------------------------------------
	}  else {
	//-------------DYNAMIC TRIGGER SETTINGS-------------
	$tmp = file('EZE-Cores-DBG-Settings.var.txt');
	$EZECORES_Run_Debug_Mode = str_replace(chr(13) . chr(10), '', $tmp[0]);
	$EZECORES_Run_Debug_MTP = str_replace(chr(13) . chr(10), '', $tmp[1]);
//-------------------------------------------------
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
//-------------STATIC SETTINGS START-------------
$CURRENTPATH = dirname(__FILE__);
$CURRENTPATH = str_replace("index.php", "", $CURRENTPATH);
$starttime = microtime();
$startarray = explode(" ", $starttime);
$starttime = $startarray[1] + $startarray[0];
set_time_limit(0);
//-------------STATIC SETTINGS END-------------
//***************  INTERNAL SECTORS START***************
// ---------------------- DEBUG-MODE START ----------------------
if ($EZECORES_Run_Debug_Mode == 'TRUE') {
	//echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' . chr(13) . chr(10);
	echo '<div id="EZECores Debug Output" style="position: absolute; z-index: 32767; background-color: #FF0000; border:1px solid #000000; left: 0px; top: 0px; width: 50%;">';
	echo '<font color="#FFFF00"><center><h1>--EZE-CORES Debug--</h1>';
}
// ---------------------- DEBUG-MODE END ----------------------
// ---------------------- STRIPSLASHEZ START ----------------------
function stripslashez($string){
	$string = str_replace('\"', '"', $string);
	$string = str_replace("\'", "'", $string);
	return $string;
}
// ---------------------- STRIPSLASHEZ END ----------------------
// ---------------------- NUMBER TO LETTER START ----------------------
//USED to handle parent IDs
function NumberToLetter($Number){
	if ($Number == '1'){ return 'A'; }
	if ($Number == '2'){ return 'B'; }
	if ($Number == '3'){ return 'C'; }
	if ($Number == '4'){ return 'D'; }
	if ($Number == '5'){ return 'E'; }
	if ($Number == '6'){ return 'F'; }
	if ($Number == '7'){ return 'G'; }
	if ($Number == '8'){ return 'H'; }
	if ($Number == '9'){ return 'I'; }
	if ($Number == '10'){ return 'J'; }
	if ($Number == '11'){ return 'K'; }
	if ($Number == '12'){ return 'L'; }
	if ($Number == '13'){ return 'M'; }
	if ($Number == '14'){ return 'N'; }
	if ($Number == '15'){ return 'O'; }
	if ($Number == '16'){ return 'P'; }
	if ($Number == '17'){ return 'Q'; }
	if ($Number == '18'){ return 'R'; }
	if ($Number == '19'){ return 'S'; }
	if ($Number == '20'){ return 'T'; }
	if ($Number == '21'){ return 'U'; }
	if ($Number == '22'){ return 'V'; }
	if ($Number == '23'){ return 'W'; }
	if ($Number == '24'){ return 'X'; }
	if ($Number == '25'){ return 'Y'; }
	if ($Number == '26'){ return 'Z'; }
}
// ---------------------- NUMBER TO LETTER END ----------------------
// ---------------------- LETTER TO NUMBER START ----------------------
//USED to handle parent IDs
function LetterToNumber($Letter){
	if ($Letter == 'A'){ return '1'; }
	if ($Letter == 'B'){ return '2'; }
	if ($Letter == 'C'){ return '3'; }
	if ($Letter == 'D'){ return '4'; }
	if ($Letter == 'E'){ return '5'; }
	if ($Letter == 'F'){ return '6'; }
	if ($Letter == 'G'){ return '7'; }
	if ($Letter == 'H'){ return '8'; }
	if ($Letter == 'I'){ return '9'; }
	if ($Letter == 'J'){ return '10'; }
	if ($Letter == 'K'){ return '11'; }
	if ($Letter == 'L'){ return '12'; }
	if ($Letter == 'M'){ return '13'; }
	if ($Letter == 'N'){ return '14'; }
	if ($Letter == 'O'){ return '15'; }
	if ($Letter == 'P'){ return '16'; }
	if ($Letter == 'Q'){ return '17'; }
	if ($Letter == 'R'){ return '18'; }
	if ($Letter == 'S'){ return '19'; }
	if ($Letter == 'T'){ return '20'; }
	if ($Letter == 'U'){ return '21'; }
	if ($Letter == 'V'){ return '22'; }
	if ($Letter == 'W'){ return '23'; }
	if ($Letter == 'X'){ return '24'; }
	if ($Letter == 'Y'){ return '25'; }
	if ($Letter == 'Z'){ return '26'; }
}
// ---------- LETTER TO NUMBER END ---------------
// ---------- ??? ---------------
//function carray_search($DATA_ARRAY, $STRING, $SUBKEY){
//	for ($tmp1 = 0; $tmp1 <= count($DATA_ARRAY); $tmp1++) {
//	if ($DATA_ARRAY[$tmp1][1] == $STRING) { return $tmp1; }
//	}
//}
// ---------- ??? ---------------
// ---------- GET MAX KEYS IN DOUBLE ARRAY START ---------------
//function dblarray_key_count($DBLARRAY, $KEY){
//$cnt = 0;
//for ($tmp1 = 0; $tmp1 <= count($DBLARRAY) - 1; $tmp1++) {
//for ($tmp2 = 0; $tmp2 <= count($DBLARRAY[$tmp1]) - 1; $tmp2++) {
//if ($DBLARRAY[$tmp1][$tmp2] == $KEY) { $cnt = $cnt + 1; }
//}
//}
//return $cnt;
//}
// ---------- GET MAX KEYS IN DOUBLE ARRAY END ---------------
// ---------- ADDCHAR START ---------------
//ADDS $CHAR to string $INT amount of times
//$POS = BEFORE or AFTER
function addchar($STRING, $CHAR, $INT, $POS){
	for ($tmp1 = 1; $tmp1 <= $INT; $tmp1++) {
		if ($POS == 'BEFORE'){
			$STRING = $CHAR . $STRING;
		} else { 
			$STRING = $STRING . $CHAR;
		}
	}
return $STRING;
}
// ---------- ADDCHAR END---------------
// ---------- PREPBEFOREPROPERSORT START ---------------
//ADDS (-a..-) to subkey in array for proper alpha sorting
function prepbeforpropersort($DATA_ARRAY, $SUBKEY_NUM, $SPECIAL_LIST){
	for ($tmp1 = 0; $tmp1 <= count($DATA_ARRAY); $tmp1++) {
		for ($tmp2 = 1; $tmp2 <= count($SPECIAL_LIST); $tmp2++) {
			if ($DATA_ARRAY[$tmp1][$SUBKEY_NUM] == $SPECIAL_LIST[$tmp2]) {
				$DATA_ARRAY[$tmp1][$SUBKEY_NUM] = '(-' . addchar($STRING, 'a', $tmp2, 'BEFORE') . '-)' . $DATA_ARRAY[$tmp1][$SUBKEY_NUM];
			}
		}
	}
return $DATA_ARRAY;
}
// ---------- PREPBEFOREPROPERSORT END---------------
// ---------- PREPAFTERPROPERSORT START ---------------
//REMOVES(-a..-) to subkey in array after proper alpha sort
function prepafterpropersort($DATA_ARRAY, $SUBKEY_NUM){
	for ($tmp1 = 0; $tmp1 <= count($DATA_ARRAY); $tmp1++) {
	$tmp2 = strpos($DATA_ARRAY[$tmp1][$SUBKEY_NUM], '-)');
		if ($tmp2 > 0){
			$tmp3 = strlen($DATA_ARRAY[$tmp1][$SUBKEY_NUM]);
			$DATA_ARRAY[$tmp1][$SUBKEY_NUM] = substr($DATA_ARRAY[$tmp1][$SUBKEY_NUM], $tmp2 + 2, $tmp3 - $tmp2 - 2);
		}
	}
	return $DATA_ARRAY;
}
// ---------- PREPAFTERPROPERSORT END---------------
// ---------- PHP SCRIPT OPENCLOSEEXIT CLEANER START ---------------
//CLEANS IMPORTED PHP SCRIPTS
function PHPSOCEC($INPUT){
	$INPUT = str_replace('<?php exit; ?>', '', $INPUT); 
	$INPUT = str_replace('<?PHP EXIT; ?>', '', $INPUT); 
	$INPUT = str_replace('<?php exit; ?>', '', $INPUT); 
	$INPUT = str_replace('<?PHP EXIT; ?>', '', $INPUT); 
	$INPUT = str_replace('<?php', '', $INPUT); 
	$INPUT = str_replace('<?PHP', '', $INPUT); 
	$INPUT = str_replace('?>', '', $INPUT); 
return $INPUT;
}
// ---------- PHP SCRIPT OPENCLOSEEXIT CLEANER END ---------------
//-------------ISIN_INFO FUNCTION START----------------
//EXPLODES an array and returns $DATANUMBER key
//
function ISIN_INFO($INPUT, $DATANUMBER){
	$tmpp = explode(';', $INPUT);
return $tmpp[$DATANUMBER];
}
//-------------ISIN_INFO FUNCTION END----------------
//-------------LOAD_FILECONTENTS START----------------
function LOAD_FILECONTENTS($INPUTFILE){
$FILECONTENTS = '';
	if (file_exists($INPUTFILE)){ 
		echo '';
	} else { 
		echo '<br><u><b>ERROR:</b>' . $INPUTFILE . ' File Not Found!</u><br>';
		return 'FNF'; 
	}
	if (is_readable($INPUTFILE)){
		$open_file = fopen($INPUTFILE,"r+");
			while ((!feof($open_file))){
				$FILECONTENTS = $FILECONTENTS . fgets($open_file,100000);
			}
		fclose($open_file);
	} else {
		echo '<br><u><b>ERROR:</b>' .  $INPUTFILE . ' Not Readable!</u><br>';
return '<NoPermissions>';
	}
	if ($FILECONTENTS <> ''){
return $FILECONTENTS;
		} else {
return '<EmptyContents>';
	}
}
//-------------LOAD_FILECONTENTS END----------------
//-------------WRITE_FILECONTENTS START----------------
function WRITE_FILECONTENTS($OUTPUTFILE, $CONTENTS){
	$handle = fopen($CURRENTPATH . $OUTPUTFILE, "w");
	fputs($handle, $CONTENTS);
	fclose($handle);
}
//-------------WRITE_FILECONTENTS END----------------
//-----------------FIND STRING IN DOUBLE ARRAY START--------------------
//FIND A STRING IN A DOUBLE ARRAY and return it's Parent and Child key numbers
//
function ISIN_DOUBLEARRAY($ARRAY, $FINDSTRING){
	$found = 'false';
	$cln = "";
	for ($t = 0; $t <= count($ARRAY) - 1; $t++) {
		for ($tt = 0; $tt <= count($ARRAY[$t]) - 1; $tt++) {
			if ($ARRAY[$t][$tt] == $FINDSTRING){
			$found = 'true';
			$cln = $t . ';' . $tt;
			$t = count($ARRAY) - 1;
			$tt = count($ARRAY[$t]) - 1;
			}
		}
	}
	if ($found == 'true') {
return 'TRUE;' . $cln;
	} else {
return 'FALSE;0;0';
	}
}
//-----------------FIND STRING IN DOUBLE ARRAY END--------------------
//-----------------EZE_DATABASE PARSER START--------------------
//Object Oriented Database Parser Class (Data Delimitered String to ARRAY)
class EZE_DATABASE{
	var $EZEDBS_DATA;
	var $POSTMP;
	var $EZEDBS_ENTRIES;
	function ParseString($STRING, $START_SUBSTR, $END_SUBSTR, $START_POS){
		$posa = strpos($STRING, $START_SUBSTR, $START_POS);
		$posb = strpos($STRING, $END_SUBSTR, $posa + strlen($START_SUBSTR));
		$this->POSTMP = $posa;
	return substr($STRING, $posa + strlen($START_SUBSTR), $posb - $posa - strlen($START_SUBSTR));
	}	
	function ParseDatabase($DATASTRING, $START_SUBSTR, $END_SUBSTR){
		$this->EZEDBS_DATA = array();
		$TOTCOMPS = substr_count($DATASTRING, $START_SUBSTR);
        	for ($bb = 1; $bb <= $TOTCOMPS; $bb++) {
				$DATA[$bb + 1] = $this->ParseString($DATASTRING, $START_SUBSTR, $END_SUBSTR, $this->POSTMP);
				$this->POSTMP = $this->POSTMP + strlen($START_SUBSTR) + 1;
			}
		$this->EZEDBS_ENTRIES = $TOTCOMPS;
		$this->EZEDBS_DATA = array_merge($this->EZEDBS_DATA, $DATA);
	}
}
//-----------------EZE_DATABASE PARSER END--------------------
// ---------------------- ENCRYPTION START ----------------------
//Name: Encrypt()
//Args: $txt-> String to encrypt.
//Args: $CRYPT_KEY -> String used to generate a encryption key.
function encrypt($txt,$CRYPT_KEY){
	if (!$txt && $txt != "0"){
return false;
	exit;
	}
	if (!$CRYPT_KEY){
return false;
	exit;
	}
	$kv = keyvalue($CRYPT_KEY);
	$estr = "";
	$enc = "";
	for ($i=0; $i<strlen($txt); $i++) {
		$e = ord(substr($txt, $i, 1));
		$e = $e + $kv[1];
		$e = $e * $kv[2];
		(double)microtime()*1000000;
		$rstr = chr(rand(65, 90));
		$estr .= "$rstr$e";
	}
return $estr;
}
// ---------------------- ENCRYPTION END ----------------------
// ---------------------- DECRYPTION START ----------------------
//Name: Decrypt()
//Args: $txt-> String to decrypt.
//Args: $CRYPT_KEY -> String used to encrypt the string.
function decrypt($txt, $CRYPT_KEY){
	if (!$txt && $txt != "0"){
return false;
	exit;
	}
	if (!$CRYPT_KEY){
return false;
	exit;
	}
	$kv = keyvalue($CRYPT_KEY);
	$estr = "";
	$tmp = "";
	for ($i=0; $i<strlen($txt); $i++) {
		if ( ord(substr($txt, $i, 1)) > 64 && ord(substr($txt, $i, 1)) < 91 ) {
			if ($tmp != "") {
			$tmp = $tmp / $kv[2];
			$tmp = $tmp - $kv[1];
			$estr .= chr($tmp);
			$tmp = "";
			}
		} else{
		$tmp .= substr($txt, $i, 1);
		}
	}
	$tmp = $tmp / $kv[2];
	$tmp = $tmp - $kv[1];
	$estr .= chr($tmp);
return $estr;
}
// ---------------------- DECRYPTION START ----------------------
// ---------------------- KEYVALUE START ----------------------
//Name: keyvalue()   
//Args: $CRYPT_KEY -> String used to generate a encryption key.
//Returns: $keyvalue -> Array containing 2 encryption keys.
function keyvalue($CRYPT_KEY){
	$keyvalue = "";
	$keyvalue[1] = "0";
	$keyvalue[2] = "0";
	for ($i=1; $i<strlen($CRYPT_KEY); $i++) {
		$curchr = ord(substr($CRYPT_KEY, $i, 1));
		$keyvalue[1] = $keyvalue[1] + $curchr;
		$keyvalue[2] = strlen($CRYPT_KEY);
	}
return $keyvalue;
}
// ---------------------- KEYVALUE END ----------------------
// ---------------------- EZE_DBS_HELPER INIT START ----------------------
function EZE_DBS_HELPER($DBSCOMMAND, $HELPERFILENAME, $DBSFILENAME, $DBSOPTION1, $DBSOPTION2, $DBSOPTION3, $DBSOPTION4, $DBSOPTION5, $DBSSTATUS){
	$HELPERERRORPMOK = '<b>EZE-DATABASE-HELPER ERROR:</b> PARSER FILE INVALID!<br>(Unable to open file, but permissions are OK)<br><br>Command: ' . $DBSCOMMAND . '<br>Parser File: ' . $HELPERFILENAME . '<br>Databse File: ' . $DBSFILENAME;
	$HELPERERRORPMNOK = '<b>EZE-DATABASE-HELPER ERROR:</b> PARSER FILE INVALID!<br>(Unable to open file, possible file permissions error.)<br><br>Command: ' . $DBSCOMMAND . '<br>Parser File: ' . $HELPERFILENAME . '<br>Databse File: ' . $DBSFILENAME;
	
global $EZE_DBS_OUTPUT;
//call to EZE-DATABASE-HELPER External Sector
	//open database file, parse, return array of data
	$EZE_DBS_OUTPUT = null;
	global $LASTDBSHELPER;
	if ($HELPERFILENAME <> 'LASTHELPER') {
		$CURRENTPATH = dirname(__FILE__);
		$CURRENTPATH = str_replace("index.php", "", $CURRENTPATH);
		if (is_readable($CURRENTPATH . '/' . $HELPERFILENAME)) {
		$DATABASEHELPER = '';
		$open_file = fopen($CURRENTPATH . '/' . $HELPERFILENAME,"r+");
			if ($open_file <> ""){
				while ((!feof($open_file))){
				$DATABASEHELPER = $DATABASEHELPER. fgets($open_file,100000);
				}
			fclose($open_file);
			$LASTDBSHELPER = $DATABASEHELPER;
			if ($DBSSTATUS == 'TRUE1'){ 
				echo "<br><b>EZE-DATABASE-HELPER Loaded</b>: " . $HELPERFILENAME . "<br>";
			}
   			} else {
			//Possible Permissions OTHER ERROR
return $HELPERERRORPMOK;
   				if ($DBSSTATUS == 'TRUE1'){
					echo $HELPERERRORPMOK;
				}
			}
		}
		else
		{
		//Possible Permissions Error
return $HELPERERRORPMNOK;
			if ($DBSSTATUS == 'TRUE1'){
				echo $HELPERERRORPMNOK;
			}
		}
	}
	if (isset($DATABASEHELPER) == TRUE) { 
			if ($DATABASEHELPER == '') {
				$DATABASEHELPER = $LASTDBSHELPER;
			}
	}
	if (isset($DBSFILENAME) == TRUE) {
		$EZE_DBS_FILE = $DBSFILENAME;
	}
	if (isset($DBSCOMMAND) == TRUE) {
		$EZE_DBS_CMD = $DBSCOMMAND;
	}
	if (isset($DBSCHNGSOURCE) == TRUE) {
		$EZE_DBS_CHANGESOURCE = $DBSCHNGSOURCE;
	}
	if (isset($DBSCHNGDEST) == TRUE) {
		$EZE_DBS_CHANGEDEST = $DBSCHNGDEST;
	}
	if (isset($DBSOPTION1) == TRUE) {
		$EZE_DBS_OPT1 = $DBSOPTION1;
	}
	if (isset($DBSOPTION2) == TRUE) {
		$EZE_DBS_OPT2 = $DBSOPTION2;
	}
	if (isset($DBSOPTION3) == TRUE) {
		$EZE_DBS_OPT3 = $DBSOPTION3;
	}
	if (isset($DBSOPTION4) == TRUE) {
		$EZE_DBS_OPT4 = $DBSOPTION4;
	}
	if (isset($DBSOPTION5) == TRUE) {
		$EZE_DBS_OPT5 = $DBSOPTION5;
	}
	if (isset($DBSOPTION6) == TRUE) {
		$EZE_DBS_OPT6 = $DBSOPTION6;
	}
	if (isset($DATABASEHELPER) == TRUE) {
		if ($DATABASEHELPER <> ''){
			eval(PHPSOCEC($DATABASEHELPER));
		}
	}
}
// ---------------------- EZE_DBS_HELPER INIT END ----------------------
//--------------LOAD LAYOUT MODULE START----------------------------------------------
function LOAD_LYTMODULE($DATA, $MODE, $FORMAT){
	if ($MODE == 0){
		$TMPDPLC = str_replace('#{', '', $DATA);
		$TMPDPLC = str_replace('}#', '', $TMPDPLC);
	}
	if ($MODE == 1){
		$TMPDPLC = $DATA;
	}
	
		$INPUTFILE = 'ExternalSectors/LYT-MODULES/' . $TMPDPLC . '.php';
			if (file_exists($INPUTFILE) == 'TRUE') { $tmpdata = $tmpdata . LOAD_FILECONTENTS($INPUTFILE);	}
	
				if ($FORMAT <> 'HTML'){
					htmlspecialchars($tmpdata); 
					$tmpdata = str_replace(chr(13) . chr(10), '<br>', $tmpdata);
					$tmpdata = str_replace(chr(13), '<br>',  $tmpdata);
				}	
			
				return stripslashez($tmpdata);
}
//-----------------LOAD LAYOUT MODULE END-------------------------
//*************** INTERNAL SECTORS END ***************
//*************** LOAD CORES SETTINGS FILE START ***************
$setdata = LOAD_FILECONTENTS($CORES_SETTINGS_FILE);
if ($setdata <> ""){
	if ($CORES_SETTINGS_ENCRYPTED == 'TRUE'){
		$setdata = decrypt(PHPSOCEC($setdata),$CORES_SETTINGS_CRYPTKEY);
	}
	if ($EZECORES_Run_Debug_MTP == '1'){
		if ($EZECORES_Run_Debug_Mode == 'TRUE'){
			echo "<br><b>Loaded</b>: " . $CORES_SETTINGS_FILE . "<br>";
		}
	}
	
	eval(PHPSOCEC($setdata));
	//echo PHPSOCEC($setdata);
}
//*************** LOAD CORES SETTINGS FILE END ***************
//*************** EZE_MODULE Clone Class Start ***************
//LPLUGIN() RETURNS plugin output from EXTERNAL SECTOR Output Builded from Prescript-Layout-Engine Files
//CLONER() RETURNS NEW EXTERNAL SECTOR OUTPUT FROM ORIGINAL INPUT USING On-The-Fly Engine Re-Processing (ESL_OBJ = 'Find String',  NESL_OBJ = 'Replace String')
//-
class EZE_MODULE{
//----LoadPlugin Global Variables----
//-
	//------------------------------
	//----Clone Global Variables----
	var $DBG; //Passthru variable for Debug Mode
	var $ESL_OBJ;  //Source EZE_Script_Layout Object 
	var $NESL_OBJ; //Destination EZE_Script_Layout Object
	var $DATA;
	//------------------------------
	//--------------------------------------------
	function LPLUGIN($DS_TITLE, $SM_TITLE, $SM_DATA){
		//$CURRENTPATH = dirname(__FILE__);
		//$CURRENTPATH = str_replace("index.php", "", $CURRENTPATH);
	}
	//--------------------------------------------
	//--------------------------------------------
	function CLONER($DS_TITLE, $SM_TITLE, $SM_DATA){
		if ($this->DBG == 'TRUE1'){
			echo "<br><b>Cloned:</b> " . $SM_TITLE . ' -> ' . $DS_TITLE . "<br>";
		}
		$this->DATA = $SM_DATA;
        	for ($CC = 0; $CC <= count($this->ESL_OBJ) - 1; $CC++) {
				$this->DATA = str_replace($this->ESL_OBJ[$CC], $this->NESL_OBJ[$CC], $this->DATA);
			}
	}
	//---------------------------------------------
}
//*************** EZE_MODULE Clone Class END ***************
//*************** ReMake Module From Custom Engine File Start ***************
//RETURNS A RE_MAKE OF EXISTING EXTERNAL SECTOR OUTPUT FROM LOADED OR CLONED INPUT (using a secondary engine)
//
//WARNING-DEV: ADD DECRYPTION FOR SECONDARY ENGINE
//
function ReMake($DATASTRING, $ENGINE_PATH, $EZECORES_Run_Debug_Mode){
	$ENGINE_OUTPUT = $DATASTRING;
   	//-------------------  LOAD EXTERNAL SECTOR ENGINE START  -------------------
	if ($ENGINE_PATH <> ''){
		$engine = LOAD_FILECONTENTS($ENGINE_PATH);
  		if($engine <> 'FNF'){ 
			if ($EZECORES_Run_Debug_MTP == '1'){
				if ($EZECORES_Run_Debug_Mode == 'TRUE'){
					echo "<br><b>Loaded Plugin:</b> " . $ENGINE_PATH. "<br>";
				}
			}
		} else {
			echo "<br><b>Plugin is Empty:</b> " . $ENGINE_PATH. "<br>";
		}
		if ($engine <> ""){
			eval(PHPSOCEC($engine));
		}
return $ENGINE_OUTPUT;
	}
	//-------------------  LOAD EXTERNAL SECTOR ENGINE END  -------------------
}
//*************** ReMake Module From Custom Engine File End ***************
//~~~~~~~~~~~~~~~~~~~~~~~~ EXTERNAL SECTORS START ~~~~~~~~~~~~~~~~~~~~~~~~
function LoadXPlugin($Child){
	global $EZECORES_SECTOR_ENABLED;
	global $EZECORES_SECTOR_LAYOUT_FILENAME;
	global $EZECORES_SECTOR_ENGINE_OUTPUT;
	global $EZECORES_SECTOR_LAYOUT_ENCRYPTED;
	global $EZECORES_SECTOR_LAYOUT_CRYPTKEY;
	global $EZECORES_SECTOR_PRESCRIPT_FILENAME;
	global $EZECORES_Run_Debug_MTP;
	global $EZECORES_Run_Debug_Mode;
	global $EZECORES_SECTOR_PRESCRIPT_ENCRYPTED;
	global $EZECORES_SECTOR_PRESCRIPT_CRYPTKEY;
	global $EZECORES_SECTOR_ENGINE_FILENAME;
	global $EZECORES_SECTOR_ENGINE_ENCRYPTED;
	global $EZECORES_SECTOR_ENGINE_CRYPTKEY;
	if ($EZECORES_SECTOR_ENABLED['EXTERNAL']['CHILD_' . $Child]  == 'TRUE'){
		//-------------------       OPEN EXTERNAL SECTOR LAYOUT START      -------------------
   		if ($EZECORES_SECTOR_LAYOUT_FILENAME['EXTERNAL']['CHILD_' . $Child] <> ''){
			$EXTERNAL_SECTOR_OUTPUT = LOAD_FILECONTENTS($EZECORES_SECTOR_LAYOUT_FILENAME['EXTERNAL']['CHILD_' . $Child]);
			if ($EXTERNAL_SECTOR_OUTPUT <> '<NoPermissions>') { 
				if ($EXTERNAL_SECTOR_OUTPUT <> 'FNF'){
					if ($EZECORES_Run_Debug_MTP == '1'){
						if ($EZECORES_Run_Debug_Mode == 'TRUE'){
							echo "<br><b>Loaded Plugin #" . $Child . ":</b> " . $EZECORES_SECTOR_LAYOUT_FILENAME['EXTERNAL']['CHILD_' . $Child] . "<br>";
						}
					}
				}
			}
   			if($EXTERNAL_SECTOR_OUTPUT <> ''){
				if (isset($EZECORES_SECTOR_LAYOUT_ENCRYPTED['EXTERNAL']['CHILD_' . $Child]) == TRUE) {
					if ($EZECORES_SECTOR_LAYOUT_ENCRYPTED['EXTERNAL']['CHILD_' . $Child] == 'TRUE'){
						$EXTERNAL_SECTOR_OUTPUT = decrypt($EZECORES_OUTPUT_DATA,$EZECORES_SECTOR_LAYOUT_CRYPTKEY['EXTERNAL']['CHILD_' . $Child]);
					}
				}
			}
		}
		//-------------------       OPEN EXTERNAL SECTOR LAYOUT END      -------------------
		//-------------------    LOAD EXTERNAL SECTOR PRE-SCRIPT START   -------------------
		if ($EZECORES_SECTOR_PRESCRIPT_FILENAME['EXTERNAL']['CHILD_' . $Child] <> ''){
			$prescript = LOAD_FILECONTENTS($EZECORES_SECTOR_PRESCRIPT_FILENAME['EXTERNAL']['CHILD_' . $Child]);
			if ($prescript <> 'FNF'){
				if ($EZECORES_Run_Debug_MTP == '1'){
					 if ($EZECORES_Run_Debug_Mode == 'TRUE'){echo "<br><b>Loaded</b>: " . $EZECORES_SECTOR_PRESCRIPT_FILENAME['EXTERNAL']['CHILD_' . $Child] . "<br>";
					 }
				}	
			}
   			if ($prescript <> ''){
   				$prescript = PHPSOCEC($prescript); 
				if (isset($EZECORES_SECTOR_PRESCRIPT_ENCRYPTED['EXTERNAL']['CHILD_' . $Child]) == TRUE) {
   					if ($EZECORES_SECTOR_PRESCRIPT_ENCRYPTED['EXTERNAL']['CHILD_' . $Child] == 'TRUE'){
						$prescript = decrypt($prescript,$EZECORES_SECTOR_PRESCRIPT_CRYPTKEY['EXTERNAL']['CHILD_' . $Child]);
					}
				}
   				eval(PHPSOCEC($prescript));
   			}
		}
		//-------------------     LOAD EXTERNAL SECTOR PRE-SCRIPT END    -------------------
		//-------------------  LOAD EXTERNAL SECTOR ENGINE START  -------------------
		if ($EZECORES_SECTOR_ENGINE_FILENAME['EXTERNAL']['CHILD_' . $Child] <> ''){
			$engine = LOAD_FILECONTENTS($EZECORES_SECTOR_ENGINE_FILENAME['EXTERNAL']['CHILD_' . $Child]);
			if ($engine <> '<NoPermissions>') {
				if ($engine <> 'FNF'){
					if ($EZECORES_Run_Debug_MTP == '1'){
						if ($EZECORES_Run_Debug_Mode == 'TRUE'){
						echo "<br><b>Loaded</b>: " . $Child . ' - ' . $EZECORES_SECTOR_ENGINE_FILENAME['EXTERNAL']['CHILD_' . $Child] . "<br>";
						}
					}
				}
			}
			if ($engine <> ''){
   				$engine = PHPSOCEC($engine); 
					if (isset($EZECORES_SECTOR_ENGINE_ENCRYPTED['EXTERNAL']['CHILD_' . $Child]) == TRUE) {
  						if ($EZECORES_SECTOR_ENGINE_ENCRYPTED['EXTERNAL']['CHILD_' . $Child] == 'TRUE'){
					 		$engine = decrypt($engine,$EZECORES_SECTOR_ENGINE_CRYPTKEY['EXTERNAL']['CHILD_' . $Child]);
						}
					}
				eval(PHPSOCEC($engine));
				}
			}
		//-------------------  LOAD EXTERNAL SECTOR ENGINE END  -------------------
	
	$EZECORES_SECTOR_ENGINE_OUTPUT['EXTERNAL']['CHILD_' . $Child] = $EXTERNAL_SECTOR_OUTPUT;
	
		if ($EXTERNAL_SECTOR_OUTPUT <> ''){
return 'Loaded: ' . $Child;
		}
	}
}
//~~~~~~~~~~~~~~~~~~~~~~~~ EXTERNAL SECTORS END ~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~ ACTION SECTORS START ~~~~~~~~~~~~~~~~~~~~~~~~
$ACTION_PRESCRIPT_FILENAME = '';
$ACTION_LAYOUT_FILENAME = '';
$ACTION_ENGINE_FILENAME = '';
$ACTION_OUTPUT = '';
$posy = 26;
for ($Parent = 1; $Parent <= 26; $Parent++) {
	$kid_max = 0;	
	if (isset($EZECORES_SECTORS_CHILD_MAX['PARENT_' . NumberToLetter($posy)]) == TRUE) { 
		$kid_max = $EZECORES_SECTORS_CHILD_MAX['PARENT_' . NumberToLetter($posy)]; 
	}
	
	if($kid_max <> '0'){
		$kids = $kid_max;
		//echo NumberToLetter($posy) . " " . $kids . " " . $posy . "<br>";
	        for ($Child = 1; $Child <= $kid_max; $Child++) {
			//echo $kids . " " . $child . "<br>";
				if (isset($EZECORES_SECTOR_ENABLED['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids]) == TRUE){
	            
					//-------------------        DEFINE CURRENT EZECORES_SECTOR FILES (PRESCRIPT/LAYOUT/ENGINE) START    -------------------
					if ($EZECORES_SECTOR_ENABLED['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids] == 'TRUE'){
						$ACTION_PRESCRIPT_FILENAME = $EZECORES_SECTOR_PRESCRIPT_FILENAME['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids];
						$ACTION_LAYOUT_FILENAME = $EZECORES_SECTOR_LAYOUT_FILENAME['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids];
						$ACTION_ENGINE_FILENAME = $EZECORES_SECTOR_ENGINE_FILENAME['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids];
					}
					//-------------------       DEFINE CURRENT EZECORES_SECTOR FILES (PRESCRIPT/LAYOUT/ENGINE) END       -------------------
				
					//-------------------       OPEN ACTION SECTOR LAYOUT START       -------------------
					if ($ACTION_LAYOUT_FILENAME <> ''){
						$ACTION_OUTPUT = LOAD_FILECONTENTS($ACTION_LAYOUT_FILENAME);
						if($ACTION_OUTPUT <> 'FNF'){
							if ($EZECORES_Run_Debug_MTP == '1'){
								if ($EZECORES_Run_Debug_Mode == 'TRUE'){echo "<br><b>Loaded</b>: $ACTION_LAYOUT_FILENAME<br>";
								}
							}
						}
						if($ACTION_OUTPUT <> ''){
							if ($EZECORES_SECTOR_LAYOUT_ENCRYPTED['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids] == 'TRUE'){
								$ACTION_OUTPUT = decrypt($ACTION_OUTPUT,$EZECORES_SECTOR_LAYOUT_CRYPTKEY['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids]);
							}
						}
                	}	
					//-------------------       OPEN ACTION SECTOR LAYOUT END      -------------------
				
					//-------------------    LOAD ACTION SECTOR PRE-SCRIPT START   -------------------
					if ($ACTION_PRESCRIPT_FILENAME <> ''){
						$prescript = LOAD_FILECONTENTS($ACTION_PRESCRIPT_FILENAME);
						if($prescript <> 'FNF'){
							if ($EZECORES_Run_Debug_MTP == '1'){
								if ($EZECORES_Run_Debug_Mode == 'TRUE'){echo "<br><b>Loaded</b>: $ACTION_PRESCRIPT_FILENAME<br>";
								}
							}
						}
						if ($prescript <> ""){
							$prescript = PHPSOCEC($prescript); 
							if ($EZECORES_SECTOR_PRESCRIPT_ENCRYPTED['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids] == 'TRUE'){
								$prescript = decrypt($prescript,$EZECORES_SECTOR_PRESCRIPT_CRYPTKEY['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids]);
							}
								$prescript = PHPSOCEC($prescript); 
								eval($prescript);
							}
						}
					
					//-------------------     LOAD ACTION SECTOR PRE-SCRIPT END    -------------------
					//-------------------  LOAD ACTION SECTOR ENGINE START  -------------------
					if ($ACTION_ENGINE_FILENAME <> ''){
						$engine = LOAD_FILECONTENTS($ACTION_ENGINE_FILENAME);
						if ($EZECORES_Run_Debug_MTP == '1'){
							if ($EZECORES_Run_Debug_Mode == 'TRUE'){
								echo "<br><b>Loaded</b>: $ACTION_ENGINE_FILENAME<br>";
							}
						}
							if ($engine <> ""){
							$engine = PHPSOCEC($engine);
								if ($EZECORES_SECTOR_ENGINE_ENCRYPTED['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids] == 'TRUE'){
									$engine = decrypt($engine,$EZECORES_SECTOR_ENGINE_CRYPTKEY['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids]);
								}
								$engine = PHPSOCEC($engine);
								eval($engine);
							}
					}
					//-------------------  LOAD ACTION SECTOR ENGINE END  -------------------
			
			//-------------------  SEND EZE-CORES OUTPUT TO HTTP BUFFER START  -------------------
			$EZECORES_SECTOR_ENGINE_OUTPUT['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids] = $ACTION_OUTPUT;
			$ACTION_OUTPUT = '';
			//if ($EZECORES_SECTOR_ENGINE_OUTPUT['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids] <> ""){ echo $EZECORES_SECTOR_ENGINE_OUTPUT['PARENT_' . NumberToLetter($posy)]['CHILD_' . $kids]; }
			//-------------------  SEND EZE-CORES OUTPUT TO HTTP BUFFER END  -------------------
			}
		$kids = $kids - 1;
		}
	}
$posy = $posy - 1;
}
//----
if ($EZECORES_SECTOR_SHOWINCORESECTOR['PARENT_' . $PARENT_LETT]['CHILD_' . $CHILD_NUM] == 'TRUE'){
	if ($EZECORES_SECTOR_ENGINE_OUTPUT['PARENT_' . $PARENT_LETT]['CHILD_' . $CHILD_NUM] <> ''){
		$EZECORES_OUTPUT= $EZECORES_SECTOR_ENGINE_OUTPUT['PARENT_' . $PARENT_LETT]['CHILD_' . $CHILD_NUM];
	}
}else{
	$endtime = microtime();
	$endarray = explode(" ", $endtime);
	$endtime = $endarray[1] + $endarray[0];
	$totaltime = $endtime - $starttime;
	$totaltime = round($totaltime,5);
	
	if ($EZECORES_Run_Debug_Mode == 'TRUE'){
		echo "<br><b>Page Generated In:</b> " . $totaltime . " <b> Seconds</b><br></center></font></div>";
	}
		echo $EZECORES_SECTOR_ENGINE_OUTPUT['PARENT_' . $PARENT_LETT]['CHILD_' . $CHILD_NUM];
		exit;
}
//---
//~~~~~~~~~~~~~~~~~~~~~~~~ ACTION SECTORS END ~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~ CORES SECTORS START ~~~~~~~~~~~~~~~~~~~~~~~~
if ($EZECORES_ENABLED['CORE_' . $CORE_NUM] == 'TRUE'){
	//-------------------       OPEN CORES LAYOUT START       -------------------
	if ($EZECORES_LAYOUT_FILENAME['CORE_' . $CORE_NUM] <> ''){
	$EZECORES_OUTPUT_DATA = LOAD_FILECONTENTS($EZECORES_LAYOUT_FILENAME['CORE_' . $CORE_NUM]);
		if($EZECORES_OUTPUT_DATA <> 'FNF'){
			if ($EZECORES_Run_Debug_MTP == '1'){
				if ($EZECORES_Run_Debug_Mode == 'TRUE'){
					echo "<br><b>Loaded:</b> " . $EZECORES_LAYOUT_FILENAME['CORE_' . $CORE_NUM] . "<br>";
				}
			}
		}
		if($EZECORES_OUTPUT_DATA <> '') {
				if (isset($EZECORES_LAYOUT_ENCRYPTED['CORE_' . $CORE_NUM]) == TRUE) {
					if ($EZECORES_LAYOUT_ENCRYPTED['CORE_' . $CORE_NUM] == 'TRUE'){
						$EZECORES_OUTPUT_DATA = decrypt($EZECORES_OUTPUT_DATA,$EZECORES_LAYOUT_CRYPTKEY['CORE_' . $CORE_NUM]);
					}
				}
		}	
	}
	//-------------------       OPEN CORES LAYOUT END      -------------------
	//-------------------    LOAD CORES PRE-SCRIPT START   -------------------
	if ($EZECORES_PRESCRIPT_FILENAME['CORE_' . $CORE_NUM] <> ''){
		$prescript = LOAD_FILECONTENTS($EZECORES_PRESCRIPT_FILENAME['CORE_' . $CORE_NUM]);
		if($prescript <> 'FNF'){
			if ($EZECORES_Run_Debug_MTP == '1'){
				if ($EZECORES_Run_Debug_Mode == 'TRUE'){
					echo "<br><b>Loaded:</b> " . $EZECORES_PRESCRIPT_FILENAME['CORE_' . $CORE_NUM] . "<br>";
				}
			}
		}
		if ($prescript <> ""){
		$prescript = PHPSOCEC($prescript); 
			if (isset($EZECORES_PRESCRIPT_ENCRYPTED['CORE_' . $CORE_NUM]) == TRUE) {
				if ($EZECORES_PRESCRIPT_ENCRYPTED['CORE_' . $CORE_NUM] == 'TRUE'){
					$prescript = decrypt($prescript,$EZECORES_PRESCRIPT_CRYPTKEY['CORE_' . $CORE_NUM]);
				}
			}
		$prescript = PHPSOCEC($prescript); 
		eval($prescript);
   		}
	}
	//-------------------     LOAD CORES PRE-SCRIPT END    -------------------
	//-------------------  LOAD CORES ENGINE START  -------------------
	if ($EZECORES_ENGINE_FILENAME['CORE_' . $CORE_NUM] <> ''){
		$engine = LOAD_FILECONTENTS($EZECORES_ENGINE_FILENAME['CORE_' . $CORE_NUM]);
		if($engine <> 'FNF'){
			if ($EZECORES_Run_Debug_MTP == '1'){
				if ($EZECORES_Run_Debug_Mode == 'TRUE'){
					echo "<br><b>Loaded:</b> " . $EZECORES_ENGINE_FILENAME['CORE_' . $CORE_NUM] . "<br>";
					}
				}
			}
		if ($engine <> ""){
		$engine = PHPSOCEC($engine);
			if (isset($EZECORES_ENGINE_ENCRYPTED['CORE_' . $CORE_NUM]) == TRUE) {
				if ($EZECORES_ENGINE_ENCRYPTED['CORE_' . $CORE_NUM] == 'TRUE'){
				$engine = decrypt($engine,$EZECORES_ENGINE_CRYPTKEY['CORE_' . $CORE_NUM]);
				}
			$engine = PHPSOCEC($engine);
			eval($engine);
			}
		}
	}
	//-------------------  LOAD ACTION SECTOR ENGINE END  -------------------
}	
//~~~~~~~~~~~~~~~~~~~~~~~~ CORE SECTORS END ~~~~~~~~~~~~~~~~~~~~~~~~

//---------- SHOW DEBUG INFORMATION START -----------
//echo memory_get_usage() . ' ' . memory_limit();
$endtime = microtime();
$endarray = explode(" ", $endtime);
$endtime = $endarray[1] + $endarray[0];
$totaltime = $endtime - $starttime;
$totaltime = round($totaltime,5);
if ($EZECORES_Run_Debug_Mode == 'TRUE'){
	echo "<br><center><b>Page Generated In:</b> " . $totaltime . " <b>Seconds</b><br></center></font></div><br>" . chr(13) . chr(10);
}
//---------- SHOW DEBUG INFORMATION END -----------

$EZECORES_OUTPUT_DATA = str_replace("\&#39;", "&#39;",  $EZECORES_OUTPUT_DATA);
echo $EZECORES_OUTPUT_DATA;

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% EZE-CORES END %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
?>
