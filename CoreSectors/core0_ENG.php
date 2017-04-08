<?php
//+++++++++++++++++++++++++++++++++++++++++++
// EZE-CORES STRUCTURE 2002 - Biznatch Enterprises
// https://github.com/BiznatchEnterprises/EZE-CORES
// +++++++++++++++++++++++++++++++++++++++++++
// EZE-CMS 2.0 - Biznatch Enterprises
// https://github.com/BiznatchEnterprises/EZE-CMS
//+++++++++++++++++++++++++++++++++++++++++++

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% EZE-CORES PHP->HTML VARIABLE ENGINE (Global) START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

if (isset($EZECORES_FILENAME) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##EZECORES_FILENAME##', $EZECORES_FILENAME, $EZECORES_OUTPUT_DATA);  //FILENAME OF THE CORE SCRIPT
}
if (isset($EZECORES_OUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##EZECORES_OUTPUT##', $EZECORES_OUTPUT, $EZECORES_OUTPUT_DATA);   //CONTENTS OF THE CORES OUTPUT
}
if (isset($NAVBUTTONS) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##NAVBUTTONS##', $NAVBUTTONS, $EZECORES_OUTPUT_DATA); 
}
if (isset($TREELINKS) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##TREELINKS##', $TREELINKS, $EZECORES_OUTPUT_DATA);   //
}
if (isset($ALLSUBLINKS) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##ALLSUBLINKS##', $ALLSUBLINKS, $EZECORES_OUTPUT_DATA);   //
}
if (isset($TREETITLE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##TREETITLE##', $TREETITLE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($NAVOUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##NAVOUTPUT##', $NAVOUTPUT, $EZECORES_OUTPUT_DATA);   //CONTENTS OF THE CORES OUTPUT
}
if (isset($CATEDITOUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CATEDITOUTPUT##', $CATEDITOUTPUT, $EZECORES_OUTPUT_DATA);   //CONTENTS OF THE CORES OUTPUT
}
if (isset($GENCATOUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##GENCATOUTPUT##', $GENCATOUTPUT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($CONTENTSPACERS) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CONTENTSPACERS##', $CONTENTSPACERS, $EZECORES_OUTPUT_DATA);   //
}
if (isset($CNTRPADDING) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CONTENTRIGHTPADDING##', $CNTRPADDING, $EZECORES_OUTPUT_DATA);   //
}
if (isset($CNTLPADDING) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CONTENTLEFTPADDING##', $CNTLPADDING, $EZECORES_OUTPUT_DATA);   //
}
if (isset($CONTENT_PADTOP) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CONTENTTOPPADDING##', $CONTENT_PADTOP, $EZECORES_OUTPUT_DATA);   //
}
if (isset($CONTENT_PADBOT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CONTENTBOTTPADDING##', $CONTENT_PADBOT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($CONTDITOUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CONTDITOUTPUT##', $CONTDITOUTPUT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($ACONTDITOUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##ACONTDITOUTPUT##', $ACONTDITOUTPUT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($CONTENTSFLOATWRAP) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CONTENTSFLOATWRAP##', $CONTENTSFLOATWRAP, $EZECORES_OUTPUT_DATA);   //
}
if (isset($FORMPAT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##FORMPAT##', $FORMPAT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SLIDEEDITOUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SLIDEEDITOUTPUT##', $SLIDEEDITOUTPUT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SLIDESHOWSCRIPT1) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SLIDESHOWSCRIPT1##', $SLIDESHOWSCRIPT1, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SLIDESHOWSCRIPT2) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SLIDESHOWSCRIPT2##', $SLIDESHOWSCRIPT2, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SLIDESHOWS_FOLDER) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SLIDESHOWDIR##', $SLIDESHOWS_FOLDER, $EZECORES_OUTPUT_DATA);   //
}
if (isset($PAGETITLE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##PAGETITLE##', $PAGETITLE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($PAGEDOMAIN) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##PAGEDOMAIN##', $PAGEDOMAIN, $EZECORES_OUTPUT_DATA);   //
}
if (isset($COPYRIGHT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##COPYRIGHT##', $COPYRIGHT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_ABSTRACT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_ABSTRACT##', $META_ABSTRACT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_DESCRIPTION) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_DESCRIPTION##', $META_DESCRIPTION, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_KEYWORDS) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_KEYWORDS##', $META_KEYWORDS, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_AUTHOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_AUTHOR##', $META_AUTHOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_LANGUAGE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_LANGUAGE##', $META_LANGUAGE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_DISTRIB) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_DISTRIB##', $META_DISTRIB, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_PRAGMA) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_PRAGMA##', $META_PRAGMA, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_RESOURCE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_RESOURCE##', $META_RESOURCE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_ROBOTS) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_ROBOTS##', $META_ROBOTS, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_REVISIT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_REVISIT##', $META_REVISIT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($META_RATING) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##META_RATING##', $META_RATING, $EZECORES_OUTPUT_DATA);   //
}
if (isset($BODY_BKCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##BODY_BKCOLOR##', $BODY_BKCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($BODY_FONTFAMILY) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##BODY_FONTFAMILY##', $BODY_FONTFAMILY, $EZECORES_OUTPUT_DATA);   //
}
if (isset($BODY_FONTSIZE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##BODY_FONTSIZE##', $BODY_FONTSIZE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($BODY_COLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##BODY_COLOR##', $BODY_COLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($A_LINKCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##A_LINKCOLOR##', $A_LINKCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($A_VLINKCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##A_VLINKCOLOR##', $A_VLINKCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($H1_FONTSIZE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##H1_FONTSIZE##', $H1_FONTSIZE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($H1_FONTCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##H1_FONTCOLOR##', $H1_FONTCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($H1_LINEHEIGHT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##H1_LINEHEIGHT##', $H1_LINEHEIGHT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($NAV_FONTCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##NAV_FONTCOLOR##', $NAV_FONTCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($NAV_FONTSIZE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##NAV_FONTSIZE##', $NAV_FONTSIZE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($NAV_AFONTCOlOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##NAV_AFONTCOlOR##', $NAV_AFONTCOlOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($NAV_ABKCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##NAV_ABKCOLOR##', $NAV_ABKCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SUBNAV_FONTCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SUBNAV_FONTCOLOR##', $SUBNAV_FONTCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SUBNAV_AFONTCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SUBNAV_AFONTCOLOR##', $SUBNAV_AFONTCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SUBNAV_ABKCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SUBNAV_ABKCOLOR##', $SUBNAV_ABKCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_RIGHT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_RIGHT##', $SIDEBAR_RIGHT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_TOP) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_TOP##', $SIDEBAR_TOP, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_WIDTH) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_WIDTH##', $SIDEBAR_WIDTH, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_BORDER) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_BORDER##', $SIDEBAR_BORDER, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_BKCOLOR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_BKCOLOR##', $SIDEBAR_BKCOLOR, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_PADTOP) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_PADTOP##', $SIDEBAR_PADTOP, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_PADBOTT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_PADBOTT##', $SIDEBAR_PADBOTT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_PADLEFT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_PADLEFT##', $SIDEBAR_PADLEFT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_PADRIGHT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_PADRIGHT##', $SIDEBAR_PADRIGHT, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SIDEBAR_TXTALIGN) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SIDEBAR_TXTALIGN##', $SIDEBAR_TXTALIGN, $EZECORES_OUTPUT_DATA);   //
}
if (isset($MEMDATE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##MEMDATE##', $MEMDATE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($MEMREF) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##MEMREF##', $MEMREF, $EZECORES_OUTPUT_DATA);   //
}
if (isset($MEMPAGE) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##MEMPAGE##', $MEMPAGE, $EZECORES_OUTPUT_DATA);   //
}
if (isset($MEMEXTRA) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##MEMEXTRA##', $MEMEXTRA, $EZECORES_OUTPUT_DATA);   //
}
if (isset($MEMEMAIL) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##MEMEMAIL##', $MEMEMAIL, $EZECORES_OUTPUT_DATA);   //
}
if (isset($MEMGOLD) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##MEMGOLD##', $MEMGOLD, $EZECORES_OUTPUT_DATA);   //
}
if (isset($SERVIMG) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SERVIMG##', $SERVIMG, $EZECORES_OUTPUT_DATA);   //
}
if (isset($IP) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##IP##', $IP, $EZECORES_OUTPUT_DATA);   //
}
if (isset($CD) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CD##', $CD, $EZECORES_OUTPUT_DATA); 
}


//------------- PAGEPATH VAR (GLOBAL) START -----------
if (isset($PAGEPATH) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##PAGEPATH##', $PAGEPATH, $EZECORES_OUTPUT_DATA); 
}
//------------- PAGEPATH VAR (GLOBAL) END -----------
//------------- IMAGEPATH VAR (GLOBAL) START -----------
if (isset($IMAGEPATHz) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##IMAGEPATH##', $IMAGEPATHz, $EZECORES_OUTPUT_DATA);   //
}
//------------- IMAGEPATH VAR (GLOBAL) END -----------
//------------- IMGPATH VAR (GLOBAL) END -----------
if (isset($IMAGEPATHz) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##IMGPATH##', $IMAGEPATHz, $EZECORES_OUTPUT_DATA); 
}
//------------- IMGPATH VAR (GLOBAL) END -----------
//------------- SID VAR (GLOBAL) END -----------
if (isset($SID) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##SID##', $SID, $EZECORES_OUTPUT_DATA); 
}
//------------- SID VAR (GLOBAL) END -----------
//------------- ERROR VAR (GLOBAL) END -----------
if (isset($ERROR) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##ERROR##', $ERROR, $EZECORES_OUTPUT_DATA);   //
}
//------------- ERROR VAR (GLOBAL) END -----------
//------------- TEMPLATEOUTPUT VAR (GLOBAL) END -----------
if (isset($TEMPLATEOUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##TEMPLATEOUTPUT##', $TEMPLATEOUTPUT, $EZECORES_OUTPUT_DATA);   //
}
//------------- TEMPLATEOUPUT VAR (GLOBAL) END -----------
//------------- OUTPUT VAR (GLOBAL) END -----------
if (isset($OUTPUT) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##OUTPUT##', $OUTPUT, $EZECORES_OUTPUT_DATA);   //
}
//------------- OUTPUT VAR (GLOBAL) END -----------
//------------- CURRENTTEMPLATE VAR (GLOBAL) END -----------
if (isset($CURTEMPLL) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##CURRENTTEMPLATE##', $CURTEMPLL, $EZECORES_OUTPUT_DATA);   //
}
//------------- CURRENTTEMPLATE VAR (GLOBAL) END -----------



//----- EXTERNAL SECTOR ENGINE OUTPUT START -------

for ($Child = 1; $Child <= $EZECORES_SECTORS_CHILD_MAX['EXTERNAL']; $Child++) {
    if (isset($EZECORES_SECTOR_ENGINE_OUTPUT['EXTERNAL']['CHILD_' . $Child]) == TRUE){
        $EZECORES_OUTPUT_DATA = str_replace('##EZECORES_SECTOR_ENGINE_OUTPUT[EXTERNAL][CHILD_' . $Child . ']##', $EZECORES_SECTOR_ENGINE_OUTPUT['EXTERNAL']['CHILD_' . $Child], $EZECORES_OUTPUT_DATA);
    }
}
//----- EXTERNAL SECTOR ENGINE OUTPUT END -------


//----- EXTERNAL SECTOR ENGINE OUTPUT START -------
$posy = 26;
for ($Parent = 1; $Parent <= 26; $Parent++) {
    if (isset($EZECORES_SECTORS_CHILD_MAX['PARENT_' . NumberToLetter($posy)]) == TRUE) {
        $kid_max = $EZECORES_SECTORS_CHILD_MAX['PARENT_' . NumberToLetter($posy)];
            if($kid_max <> '0'){
                $kids = $kid_max;
                    for ($Child = 1; $Child <= $kid_max; $Child++) {
                        $EZECORES_OUTPUT_DATA = str_replace('##EZECORES_SECTOR_ENGINE_OUTPUT[PARENT_' . NumberToLetter($posy) . '][CHILD_' . $Child . ']##', $EZECORES_SECTOR_ENGINE_OUTPUT['PARENT_' . NumberToLetter($posy)]['CHILD_' . $Child], $EZECORES_OUTPUT_DATA);
                    }
            }
    $posy = $posy - 1;
    }
}
//----- EXTERNAL SECTOR ENGINE OUTPUT END -------

//------ LOADING PLUGIN 1 ----- ADD TO EZE-CORES OUTPUT ---- START -----------
$PLUGIN1 = LoadXPlugin(1);

if (isset($PLUGIN1) == TRUE){
    $EZECORES_OUTPUT_DATA = str_replace('##PLUGIN-1##', $PLUGIN1, $EZECORES_OUTPUT_DATA); 
}
//------ LOADING PLUGIN 1 ----- ADD TO EZE-CORES OUTPUT ---- END -----------

//----- EZE-CORES GLOBAL SECTOR ENGINE File END -----

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% EZE CORES START %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

?>
