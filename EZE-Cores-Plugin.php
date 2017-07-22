<?php
//##########################################################################
//####################### EZE-CORES (Plugin-Class) #########################
//#######################        Version 1.0       #########################
//#######################   Biznatch Enterprises   #########################
//#   https://github.com/BiznatchEnterprises/EZE-CORES/tree/plugin-class   #
//#######################       May 31, 2017       #########################
//##########################################################################

// ~~~~~~~ START PLUGIN CLASS ~~~~~~~
class EZE_CORES {

	public $APP_PATH;
	public $TEMPLATE_PATH;
	public $APP_OUTPUT;
	public $CORE_OUTPUT;
	public $CORE_FILEPATH;
	public $CORE_LAYOUT;
	public $CORE_SCRIPT;
	public $CORE_TEMPLATE;
	public $CORE_HTMLPHPvars;
	public $CORE_CHTMLPHPvars;
	public $DEFAULT_PAGE;
	public $CURRENT_PAGE;
	public $PAGES = array();
  
    //----------- Read FileContents Start -----------
    function Read_FileContents($FILE_PATHNAME) {

        $FILE_CONTENTS = '';

	    if (file_exists($FILE_PATHNAME)) { 
            //echo ''; 
        } else { 
            //echo '<br><u><b>ERROR:</b>' . $FILE_PATHNAME . ' File Not Found!</u><br>';
    return 'FNF'; 
        }

	    if (is_readable($FILE_PATHNAME)) {
	        $open_file = fopen($FILE_PATHNAME,"r+");
	        while ((!feof($open_file))) {
	            $FILE_CONTENTS = $FILE_CONTENTS . fgets($open_file,100000);
	        }
	            fclose($open_file);
	    } else {
	        //echo '<br><u><b>ERROR:</b>' . $FILE_PATHNAME . ' Not Readable!</u><br>';
	return '<NoPermissions>';
	    }
        
        if ($FILE_CONTENTS <> '') { 
    return $FILE_CONTENTS; 
        unset($FILE_CONTENTS);
        } else {
    return '<EmptyContents>';
        }
    }
     //----------- Read FileContents End -----------

    //----------- Load Layout (HTML Layout) Start -----------
     function Extract_HTMLModules($INPUT){

        $HTML_MODULES = array();
        $startchar = "#{@";
        $endchar = "@}#";
        $mod_cnt;
        $mod_num;
        $strstart_pos = 1;
        $startpos = 0;
        $endpos = 0;
        $mod_cnt = 0;

        $mod_cnt = substr_count($INPUT, $startchar);

        if ($mod_cnt > 0){

            $strstart_pos = 1;
            $mod_num = 1;

            for ($tmpnum = 1; $tmpnum <= $mod_cnt; $tmpnum++) {
                $startpos = strpos($INPUT, $startchar, $strstart_pos);
                    if ($startpos > 0) {
                        $endpos = strpos($INPUT, $endchar, $strstart_pos);
                        $HTML_MODULES[$mod_num] = mid($INPUT, $startpos + strlen($starchar), $endpos - $startpos - strlen($startchar));
                        $mod_num = $mod_num + 1;
                        $strstart_pos = $endpos;
                    }
            }

        unset($startchar);
        unset($endchar);
        unset($mod_cnt);
        unset($mod_num);
        unset($strstart_pos);
        unset($startpos);
        unset($endpos);
        unset($mod_cnt);

     return $HTML_MODULES;

        }
     }
    //----------- Load Layout (HTML Template) Start -----------
    
    //----------- Load Layout (HTML Template) Start -----------
    function Load_Layout() {

        if ($this->CORE_FILEPATH <> ''){
            if($this->CORE_LAYOUT <> '') {

                $this->CORE_OUTPUT = $this->Read_FileContents($this->CORE_FILEPATH . $this->CORE_LAYOUT);

            }
        }

    }
    //----------- Load Layout (HTML Template) End -----------

    //----------- Load PHP Script Start -----------
    function Load_Script() {

        if ($this->CORE_FILEPATH <> ''){
            if ($this->CORE_SCRIPT <> ''){
                include($this->CORE_FILEPATH . $this->CORE_SCRIPT);
            }
        }

    }
    //----------- Load PHP Script End -----------

    //----------- Load HTML PHP vars Start -----------
    function Load_HTMLPHPvars() {

        if ($this->CORE_FILEPATH <> ''){
            if ($this->CORE_HTMLPHPvars <> ''){
                $TO_LOAD = $this->CORE_FILEPATH . $this->CORE_HTMLPHPvars;
                if (file_exists($TO_LOAD) == TRUE){
                    // Load ##HVAR_## from static settings file
                    // Load ##HVAR_## from dynamic $CORE_CHTMLPHPvars
                    include($TO_LOAD);
                }
            }
        }

    }
    //----------- Load HTML PHP vars End -----------

    //----------- Load Custom HTML PHP vars Start -----------
    //public function Custom_HTMLPHPvars() {

        // $CORE_CHTMLPHPvars ##HVAR_## from dynamic inputs (array)
        // NOT IMPLEMENTED YET
        
    //}
    //----------- Load Custom HTML PHP vars End -----------

    //----------- Load_HTMLModules Start -----------
   function Load_HTMLModules() {

        if ($this->CORE_FILEPATH <> '') {
            // find all ##HMOD_##
            $USED_MODULES = $this->Extract_HTMLModules($this->CORE_OUTPUT);
            $MODCNT = count($USED_MODULES);
            $MODULE_OUTPUT = '';

                for ($CUR_MODULE = 1; $CUR_MODULE <= $MODCNT; $CUR_MODULE++) {
                    if ($USED_MODULES[$CUR_MODULE] <> ''){
                        //read module contents
                        $MODULE_OUTPUT = $this->Read_FileContents($this->CORE_FILEPATH . "^" . $USED_MODULES[$CUR_MODULE] . "^.html");
                        //install html module contents into template
                        $CORE_OUTPUT = str_replace("#^@" . $USED_MODULES[$CUR_MODULE] . "@^#", $MODULE_OUTPUT, $CORE_OUTPUT);
                    }
            
                }
            unset($USED_MODULES);
            unset($MODCNT);
            unset($MODULE_OUTPUT);
        }

    }
    //----------- Load_HTMLModules End -----------

    //----------- Load_Template Start -----------
    function Load_Template() {

        if ($this->APP_PATH <> '') {
            if ($this->CORE_TEMPLATE <> ''){

                $TemplateHTML = $this->APP_PATH . $this->TEMPLATE_PATH . $this->CORE_TEMPLATE . "index.html";
                $TemplatePHP = $this->APP_PATH . $this->TEMPLATE_PATH . $this->CORE_TEMPLATE . "script.php";
                $TemplateVARS = $this->APP_PATH . $this->TEMPLATE_PATH . $this->CORE_TEMPLATE . "html-php-variables.php";

                if (is_readable($TemplateHTML))
                {
                    $this->APP_OUTPUT = $this->Read_FileContents($TemplateHTML);
                    $this->APP_OUTPUT = str_replace("##CORE_OUTPUT##", $this->CORE_OUTPUT, $this->APP_OUTPUT);
                }

                if (is_readable($TemplateHTML))
                {
                    include($TemplatePHP);
                }

                if (is_readable($TemplateVARS))
                {
                    include($TemplateVARS);
                }

            }
        }

    }
    //----------- Template End -----------

    //----------- Change Current Core Settings Start -----------
    function Change_Current($BASEPATH, $LAYOUTFILE, $SCRIPTFILE, $HTMLPHPVARSFILE, $TEMPLATEDIR) {

        $this->CORE_FILEPATH = $BASEPATH;
        $this->CORE_TEMPLATE = $TEMPLATEDIR;
        $this->CORE_LAYOUT = $LAYOUTFILE;
        $this->CORE_SCRIPT = $SCRIPTFILE;
        $this->CORE_HTMLPHPvars = $HTMLPHPVARSFILE;

    return '[' . $BASEPATH . '][' . $LAYOUTFILE. '][' . $SCRIPTFILE. '][' . $HTMLPHPVARSFILE . '][' . $TEMPLATEDIR . ']';

    }
    //----------- Change Current Core Settings End -----------

    //----------- Change Default Page Start -----------
    function Change_DefaultPage($PAGEID){

        if ($PAGEID <> '') {

            $this->DEFAULT_PAGE = $PAGEID;

        }

    }
    //----------- Change Default Page End -----------

    //----------- Change Current Page Start -----------
    function Change_CurrentPage($PAGEID){

        if ($PAGEID <> '') {

            $this->CURRENT_PAGE = $PAGEID;

        }

    }
    //----------- Change Current Page End -----------

    //----------- Change General Settings Start -----------
    function Change_Settings($APPPATH, $TEMPLATEPATH){

        if ($APPPATH <> '') {
            $this->APP_PATH = $APPPATH;
        }

        if ($TEMPLATEPATH <> '') {
            $this->TEMPLATE_PATH = $TEMPLATEPATH;
        }

    }
    //----------- Change General Settings End -----------  

    //----------- Change Cores Settings Start -----------
    function Change_PageSettings($PAGEID, $BASEPATH, $LAYOUTFILE, $SCRIPTFILE, $HTMLPHPVARSFILE, $TEMPLATEFILE) {

        $this->PAGES[$PAGEID]['BasePath'] = $BASEPATH;
            if ($LAYOUTFILE == ''){ $LAYOUTFILE = 'layout.html'; }
        $this->PAGES[$PAGEID]['LayoutFile'] = $LAYOUTFILE;
            if ($SCRIPTFILE == ''){ $LAYOUTFILE = 'script.php'; }
        $this->PAGES[$PAGEID]['ScriptFile'] = $SCRIPTFILE;
            if ($HTMLPHPVARSFILE == ''){ $HTMLPHPVARSFILE = 'html-php-variables.php'; }
        $this->PAGES[$PAGEID]['HTMLPHPVARSFile'] = $HTMLPHPVARSFILE;
        $this->PAGES[$PAGEID]['TemplateFile'] = $TEMPLATEFILE;

    }
    //----------- Change Cores Settings End -----------

    //----------- Execute (Page) Start -----------
    function Execute() {

        if ($this->CURRENT_PAGE == '') { $this->CURRENT_PAGE = $this->DEFAULT_PAGE; }

        $keys = array_keys($this->PAGES);
        $totalkeys = count($keys) - 1;

            for ($tmpkey = 0; $tmpkey <= $totalkeys; $tmpkey++) {
                $curkey = $keys[$tmpkey];
                    if ($curkey == $this->CURRENT_PAGE) {

                    //change current EZE-CORE to selected page
                    $this->Change_Current($this->PAGES[$curkey]['BasePath'], $this->PAGES[$curkey]['LayoutFile'], $this->PAGES[$curkey]['ScriptFile'], $this->PAGES[$curkey]['HTMLPHPVARSFile'], $this->PAGES[$curkey]['TemplateFile']);
    return $this->Generate();

                    }
            }
    
        unset($keys);
        unset($totalkeys);
        unset($tmpkey);
        unset($curkey);
        
    }
    //----------- Excute (Page) End -----------

    //----------- Reset Start -----------
    function Reset() {
        
        $this->CORE_OUTPUT = '';

    }
    //----------- Reset End -----------


    //----------- Reset Start -----------
    function Clear() {
        
        $this->CORE_OUTPUT = '';
	    $this->CORE_FILEPATH = '';
	    $this->CORE_LAYOUT = '';
        $this->CORE_SCRIPT = '';
        $this->CORE_HTMLPHPvars = '';

    }
    //----------- Reset End -----------

     
    //----------- Clean Start -----------
    function Clean() {

        unset($this->CORE_FILEPATH);
        unset($this->CORE_LAYOUT);
        unset($this->CORE_SCRIPT);
        unset($this->CORE_HTMLPHPvars);
        unset($this->CORE_OUTPUT);

    }
    //----------- Clean End -----------

    //----------- Generate Start -----------
    function Generate() {

        $this->CORE_OUTPUT = '';
        $this->APP_OUTPUT = '';

        $this->Load_Layout();
        $this->Load_HTMLModules();
        $this->Load_HTMLPHPvars();
        $this->Load_Script();
        $this->Load_Template();
        
        return $this->APP_OUTPUT;
    }
    //----------- Generate End -----------

}
// ~~~~~~~ END PLUGIN CLASS ~~~~~~~

?>
