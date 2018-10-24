<?php
/* ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 * |||            EZE-CORES (Plugin-Class 1.2)  [Oct, 2018]                 |||
 * |||  https://github.com/BiznatchEnterprises/EZE-CORES/tree/plugin-class  |||
 * |||      Copyright (C) 2017 Biznatch Enterprises - Biznaturally.ca     	|||
 * |||                                                                      |||
 * |||   MIT License https://opensource.org/licenses/MIT                	|||
 * |||   Permission is hereby granted, free of charge, to any person        |||
 * |||   obtaining a copy of this software and associated documentation     |||
 * |||   files (the "Software"), to deal in the Software without            |||
 * |||   restriction, including without limitation the rights to use,       |||
 * |||   copy, modify, merge, publish, distribute, sublicense, and/or       |||
 * |||   sell copies of the Software, and to permit persons to whom the     |||
 * |||   Software is furnished to do so, subject to the following           |||
 * |||   conditions: The above copyright notice and this permission         |||
 * |||   notice shall be included in all copies or substantial portions     |||
 * |||   of the Software. THE SOFTWARE IS PROVIDED "AS IS", WITHOUT         |||
 * |||   WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT        |||
 * |||   LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A        |||
 * |||   PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE      |||
 * |||   AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES      |||
 * |||   OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR      |||
 * |||   OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE          |||
 * |||   SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.             |||
 * |||                                                                      |||
 * ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/

// ~~~~~~~~~~~~~~~~~~~~~~~~~~ START ~~~~~~~~~~~~~~~~~~~~~~~~~~
// @ Name: EZE_CORES
// @ Description: Web Application Framework (PHP)
//

class EZE_CORES
{

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

    // -------------------- START --------------------
    // @ Name: Read_FileContents()
    // @ Action: Loads data from file into string
    // @ Param: string INPUTFILE
    // @ Returns: FNF
    // @ Status: <br><u><b>ERROR:</b>' . $INPUTFILE . ' File Not Found!</u><br>
    // @ Returns: <NoPermissions>
    // @ Status: <br><u><b>ERROR:</b>' . $INPUTFILE . ' Not Readable!</u><br>
    // @ Returns: <EmptyContents>
    // @ Status: <br><u><b>ERROR:</b>' . $INPUTFILE . ' Empty File!</u><br>
    //
    function Read_FileContents($FILE_PATHNAME)
    {

        $FILE_CONTENTS = '';

        if (file_exists($FILE_PATHNAME))
        { 
            //echo ''; 
        }
        else
        { 
            //echo '<br><u><b>ERROR:</b>' . $FILE_PATHNAME . ' File Not Found!</u><br>';
            return 'Error: File Not Found ' . $FILE_PATHNAME; 
        }

        if (is_readable($FILE_PATHNAME))
        {
	        $open_file = fopen($FILE_PATHNAME,"r+");
            while ((!feof($open_file)))
            {
	            $FILE_CONTENTS = $FILE_CONTENTS . fgets($open_file,100000);
	        }
	            fclose($open_file);
        }
        else
        {
	        //echo '<br><u><b>ERROR:</b>' . $FILE_PATHNAME . ' Not Readable!</u><br>';
	        return 'Error: File No Permissions ' . $FILE_PATHNAME;
	    }
        
        if ($FILE_CONTENTS <> '')
        { 
            return $FILE_CONTENTS; 
            unset($FILE_CONTENTS);
        } 
        else
        {
            return 'Error: File Empty Contents ' . $FILE_PATHNAME;
        }

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Extract_HTMLModules()
    // @ Action: Parse string for module tag names
    // @ Param: string INPUT to parse HTML module tags
    // @ Returns: array $HTML_MODULES module names
    //
     function Extract_HTMLModules($INPUT)
     {

        $HTML_MODULES = array();
        $startchar = "@^#";
        $endchar = "#^@";
        $mod_cnt = 0;
        $mod_num = 0;
        $strstart_pos = 1;
        $startpos = 0;
        $endpos = 0;
        $mod_cnt = 0;

        $mod_cnt = substr_count($INPUT, $startchar);

        if ($mod_cnt > 0)
        {

            $strstart_pos = 1;
            $mod_num = 1;

            for ($tmpnum = 1; $tmpnum <= $mod_cnt; $tmpnum++)
            {
                $startpos = strpos($INPUT, $startchar, $strstart_pos);
                    if ($startpos > 0)
                    {
                        $endpos = strpos($INPUT, $endchar, $strstart_pos);
                        $HTML_MODULES[$mod_num] = substr($INPUT, $startpos + strlen($startchar), $endpos - $startpos - strlen($startchar));
                        $mod_num = $mod_num + 1;
                        $strstart_pos = $endpos + 1;
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
    // --------------------- END ---------------------
    
    // -------------------- START --------------------
    // @ Name: Load_Layout()
    // @ Action: Loads Layout_File into Core memory
    // @ Returns: string "Success: " or "Error: "
    //
    function Load_Layout()
    {

        if ($this->CORE_FILEPATH <> '')
        {
            if($this->CORE_LAYOUT <> '')
            {
                $MODULE_FILENAME = $this->CORE_FILEPATH . $this->CORE_LAYOUT;

                //read HTMLPHPvars contents if exists
                if (file_exists($MODULE_FILENAME) == TRUE)
                {
                    if (is_readable($MODULE_FILENAME) == TRUE)
                    {
                        $this->CORE_OUTPUT = $this->Read_FileContents($MODULE_FILENAME);
                        return "Success: " . $MODULE_FILENAME;
                    }
                    else
                    {
                        return "Error: Layout file not readable " . $MODULE_FILENAME;
                    }
                }
                else
                {
                    return "Error: Layout file does not exist " . $MODULE_FILENAME; 
                }
            }
            else
            {
                return "Error: Layout file not specified " . $MODULE_FILENAME; 
            }
        }
        else
        {
            return "Error: Filepath not specified " . $MODULE_FILENAME; 
        }

        return "Error: Invalid layout " . $MODULE_FILENAME;
        
    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Load_Script()
    // @ Action: Loads Script_File into Core memory
    // @ Returns: string "Success" or "Error"
    //
    public function Load_Script()
    {
        if ($this->CORE_FILEPATH <> '')
        {
            if ($this->CORE_SCRIPT <> '')
            {
                $MODULE_FILENAME = $this->CORE_FILEPATH . $this->CORE_SCRIPT;

                //read HTMLPHPvars contents if exists
                if (file_exists($MODULE_FILENAME) == TRUE)
                {
                    if (is_readable($MODULE_FILENAME) == TRUE)
                    {
                        include($MODULE_FILENAME);
                        return "Success: " . $MODULE_FILENAME;
                    }
                    else
                    {
                        return "Error: Script file not readable " . $MODULE_FILENAME;
                    }
                }
                else
                {
                    return "Error: Script file does not exist " . $MODULE_FILENAME;
                }
            }
            else
            {
                return "Error: Script file not specified " . $MODULE_FILENAME;
            }
        }
        else
        {
            return "Error: Core Filepath not specified " . $MODULE_FILENAME;
        }

        return "Error: Invalid Script";
    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Load_HTMLPHPvars()
    // @ Action: Loads HTMLPHP vars into Core memory
    // @ Returns: string "success" or "failed"
    //
    function Load_HTMLPHPvars()
    {

        if ($this->CORE_FILEPATH <> '')
        {
            if ($this->CORE_HTMLPHPvars <> '')
            {
                $MODULE_FILENAME = $this->CORE_FILEPATH . $this->CORE_HTMLPHPvars;

                //read HTMLPHPvars contents if exists
                if (file_exists($MODULE_FILENAME) == TRUE)
                {
                    if (is_readable($MODULE_FILENAME) == TRUE)
                    {
                        // Load ##HVAR_## from static settings file
                        // Load ##HVAR_## from dynamic $CORE_CHTMLPHPvars
                        include($MODULE_FILENAME);
                        return "Success: PHP Vars " . $MODULE_FILENAME;
                    }
                    else
                    {
                        return "Error: PHP Vars not readable " . $MODULE_FILENAME;
                    }
                }
                else
                {
                    return "Error: PHP Vars not does not exist " . $MODULE_FILENAME;
                }
            }
            else
            {
                return "Error: PHP Vars not specified" . $MODULE_FILENAME;
            }
        }
        else
        {
            return "Error: Core Filepath specified" . $MODULE_FILENAME;
        }

        return "Error: Invalid PHP Vars " . $MODULE_FILENAME;

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Custom_HTMLPHPvars()
    // @ Action: $CORE_CHTMLPHPvars ##HVAR_## from dynamic inputs (array)
    // @ Param: NOT IMPLEMENTED YET 
    // @ Returns: NOT IMPLEMENTED YET
    //
    //public function Custom_HTMLPHPvars()
    //{
        
    //}
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Load_HTMLModules()
    // @ Action: Loads current HTML module
    // @ Returns: string "success" or "failed"
    //
    function Load_HTMLModules($OUTPUT_SOURCE)
    {
        $startchar = "@^#";
        $endchar = "#^@";

        if ($this->CORE_FILEPATH <> '')
        {
            if ($OUTPUT_SOURCE == "CORE")
            {
                // find all Embedded HTML modules in CORE_OUTPUT
                $USED_MODULES = $this->Extract_HTMLModules($this->CORE_OUTPUT);
            }
            else
            {
                // find all Embedded HTML modules in CORE_OUTPUT
                $USED_MODULES = $this->Extract_HTMLModules($this->APP_OUTPUT);
            }

            $MODCNT = count($USED_MODULES);

            $MODULE_OUTPUT = '';

                for ($CUR_MODULE = 1; $CUR_MODULE <= $MODCNT; $CUR_MODULE++)
                {
                    if ($USED_MODULES[$CUR_MODULE] <> '')
                    {
                        $MODULE_FILENAME = "html_modules/" . $USED_MODULES[$CUR_MODULE] . ".html";

                        //read module contents if exists
                        if (file_exists($MODULE_FILENAME) == TRUE)
                        {
                            if (is_readable($MODULE_FILENAME) == TRUE)
                            {
                                $MODULE_OUTPUT = $this->Read_FileContents($MODULE_FILENAME);

                                if ($OUTPUT_SOURCE == "CORE")
                                {
                                    //install html module contents into CORE_OUTPUT
                                    $this->CORE_OUTPUT = str_replace($startchar . $USED_MODULES[$CUR_MODULE] . $endchar, $MODULE_OUTPUT, $this->CORE_OUTPUT);
                                }
                                else
                                {
                                    //install html module contents into APP_OUTPUT
                                    $this->APP_OUTPUT = str_replace($startchar . $USED_MODULES[$CUR_MODULE] . $endchar, $MODULE_OUTPUT, $this->APP_OUTPUT);
                                }
                            }
                            else
                            {
                                echo "HTML Module Not readable: " . $MODULE_FILENAME;
                                return "Error: File not readable: " . $MODULE_FILENAME;
                            }
                        }
                        else
                        {
                            echo "HTML Module does not exist: " . $MODULE_FILENAME;
                            return "Error: File does not exist: " . $MODULE_FILENAME;
                        }
                        
                    }
            
                }

            unset($USED_MODULES);
            unset($MODULE_OUTPUT);

            return "Success Loaded: " . $MODCNT;
        }

        return "Error: Core FilePath Invalid";

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Load_Template()
    // @ Action: Loads current template
    // @ Returns: string "success" or "failed"
    //
    function Load_Template()
    {

        if ($this->APP_PATH <> '')
        {
            if ($this->CORE_TEMPLATE <> '')
            {

                $TemplateHTML = $this->APP_PATH . $this->TEMPLATE_PATH . $this->CORE_TEMPLATE . "index.html";
                $TemplatePHP = $this->APP_PATH . $this->TEMPLATE_PATH . $this->CORE_TEMPLATE . "script.php";
                $TemplateVARS = $this->APP_PATH . $this->TEMPLATE_PATH . $this->CORE_TEMPLATE . "html-php-variables.php";

                if (is_readable($TemplateHTML) == TRUE)
                {
                    $this->APP_OUTPUT = $this->Read_FileContents($TemplateHTML);
                    $this->APP_OUTPUT = str_replace("##CORE_OUTPUT##", $this->CORE_OUTPUT, $this->APP_OUTPUT);
                }
                else
                {
                    return "Error: can't read HTML Template"; 
                }

                if (is_readable($TemplatePHP) == TRUE)
                {
                    include($TemplatePHP);
                }
                else
                {
                    return "Error: can't read Template PHP Script"; 
                }

                if (is_readable($TemplateVARS) == TRUE)
                {
                    include($TemplateVARS);
                }
                else
                {
                    return "Error: can't read Template PHP Vars"; 
                }

                return "Success Loaded: " . $this->CORE_TEMPLATE;

            }
        }

        return "Error: Invalid APP_Path or Core_Template";

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Change_Current()
    // @ Action: Change current loaded page settings
    // @ Param: string BASEPATH
    // @ Param: string LAYOUTFILE
    // @ Param: string SCRIPTFILE
    // @ Param: string HTMLPHPVARSFILE
    // @ Param: string $TEMPLATEDIR
    // @ Returns: '[' . $BASEPATH . '][' . $LAYOUTFILE. '][' . $SCRIPTFILE. '][' . $HTMLPHPVARSFILE . '][' . $TEMPLATEDIR . ']'
    //
    function Change_Current($BASEPATH, $LAYOUTFILE, $SCRIPTFILE, $HTMLPHPVARSFILE, $TEMPLATEDIR)
    {

        $this->CORE_FILEPATH = $BASEPATH;
        $this->CORE_TEMPLATE = $TEMPLATEDIR;
        $this->CORE_LAYOUT = $LAYOUTFILE;
        $this->CORE_SCRIPT = $SCRIPTFILE;
        $this->CORE_HTMLPHPvars = $HTMLPHPVARSFILE;

        return '[' . $BASEPATH . '][' . $LAYOUTFILE. '][' . $SCRIPTFILE. '][' . $HTMLPHPVARSFILE . '][' . $TEMPLATEDIR . ']';

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Change_DefaultPage()
    // @ Action: Change default Page ID (if none specified)
    // @ Param: string PAGEID
    // @ Returns: string "Success" or "Error"
    //
    function Change_DefaultPage($PAGEID)
    {

        if ($PAGEID <> '')
        {
            $this->DEFAULT_PAGE = $PAGEID;
            return "Success";
        }

        return "Error: Invalid Default Page";

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Change_CurrentPage()
    // @ Action: Change Current Loaded Page
    // @ Param: string PAGEID
    // @ Returns: string "success" or "Error"
    //
    function Change_CurrentPage($PAGEID)
    {

        if ($PAGEID <> '')
        {
            $this->CURRENT_PAGE = $PAGEID;
            return "Success: " . $PAGEID;
        }

        return "Error: Invalid Page Specified";

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Change_Settings()
    // @ Action: Change Settings - Apppath & Template path
    // @ Param: string APPPATH
    // @ Param: string TEMPLATEPATH
    // @ Returns: string "Success" or "Error"
    //
    function Change_Settings($APPPATH, $TEMPLATEPATH)
    {

        if ($APPPATH <> '')
        {
            $this->APP_PATH = $APPPATH;
        }

        if ($TEMPLATEPATH <> '')
        {
            $this->TEMPLATE_PATH = $TEMPLATEPATH;
            return "Success: " . $TEMPLATEPATH;
        }

        return "Error: Template Path or APP Path invalid";

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Change_PageSettings()
    // @ Action: Change All Pages Settings
    // @ Param: string PAGEID
    // @ Param: sring BASEPATH
    // @ Param: string LAYOUTFILE
    // @ Param: string SCRIPTFILE
    // @ Param: string HTMLPHPVARSFILE
    // @ Param: string TEMPLATEFILE
    //
    function Change_PageSettings($PAGEID, $BASEPATH, $LAYOUTFILE, $SCRIPTFILE, $HTMLPHPVARSFILE, $TEMPLATEFILE)
    {

        $this->PAGES[$PAGEID]['BasePath'] = $BASEPATH;
            if ($LAYOUTFILE == '')
            {
                $LAYOUTFILE = 'layout.html';
            }
        $this->PAGES[$PAGEID]['LayoutFile'] = $LAYOUTFILE;
            if ($SCRIPTFILE == '')
            {
                $SCRIPTFILE = 'script.php';
            }
        $this->PAGES[$PAGEID]['ScriptFile'] = $SCRIPTFILE;
            if ($HTMLPHPVARSFILE == '')
            {
                $HTMLPHPVARSFILE = 'html-php-variables.php';
            }
        $this->PAGES[$PAGEID]['HTMLPHPVARSFile'] = $HTMLPHPVARSFILE;
        $this->PAGES[$PAGEID]['TemplateFile'] = $TEMPLATEFILE;

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Execute()
    // @ Action: Core Linker, Assembler & Compiler
    // @ Return: string Core output
    // @ Return: string failed
    //
    function Execute()
    {
        if ($this->CURRENT_PAGE == '')
        {
            $this->CURRENT_PAGE = $this->DEFAULT_PAGE;
        }

        $keys = array_keys($this->PAGES);
        $totalkeys = count($keys) - 1;

        for ($tmpkey = 0; $tmpkey <= $totalkeys; $tmpkey++)
        {
            $curkey = $keys[$tmpkey];
            if ($curkey == $this->CURRENT_PAGE)
            {
                //change current EZE-CORE to selected page
                $this->Change_Current($this->PAGES[$curkey]['BasePath'], $this->PAGES[$curkey]['LayoutFile'], $this->PAGES[$curkey]['ScriptFile'], $this->PAGES[$curkey]['HTMLPHPVARSFile'], $this->PAGES[$curkey]['TemplateFile']);
                return $this->Generate();
            }
        }
    
        unset($keys);
        unset($totalkeys);
        unset($tmpkey);
        unset($curkey);

        return "Error: Execution Failed";
        
    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Reset()
    // @ Action: Resets Core Output
    //
    function Reset()
    {
        
        $this->CORE_OUTPUT = '';
        $this->APP_OUTPUT = '';

    }
    // --------------------- END ---------------------


    // -------------------- START --------------------
    // @ Name: Clear()
    // @ Action: Clears Core Outpout and Settings
    //
    function Clear()
    {
        $this->APP_OUTPUT = '';
        $this->CORE_OUTPUT = '';
	    $this->CORE_FILEPATH = '';
	    $this->CORE_LAYOUT = '';
        $this->CORE_SCRIPT = '';
        $this->CORE_HTMLPHPvars = '';

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Clean()
    // @ Action: Unload Core Variables
    //
    public function Clean()
    {

        unset($this->CORE_FILEPATH);
        unset($this->CORE_LAYOUT);
        unset($this->CORE_SCRIPT);
        unset($this->CORE_HTMLPHPvars);
        unset($this->CORE_OUTPUT);
        unset($this->APP_OUTPUT);

    }
    // --------------------- END ---------------------

    // -------------------- START --------------------
    // @ Name: Generate()
    // @ Action: Core Assembler & Compiler
    // @ Returns: Assembled Core Output
    //
    public function Generate()
    {

        $this->CORE_OUTPUT = '';
        $this->APP_OUTPUT = '';
        $this->Load_Script();
        $this->Load_Layout();
        $this->Load_HTMLPHPvars();
        $this->Load_HTMLModules("CORE");
        $this->Load_Template();
        $this->Load_HTMLModules("APP");
        
        return $this->APP_OUTPUT;

    }
    // --------------------- END ---------------------

}
// ********************** END **********************

?>