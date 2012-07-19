<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Type: BBcode
| Name: Table
| Version: 1.00
| Author: Valerio Vendrame (lelebart)
+--------------------------------------------------------+
| Filename: table_bbcode_include_var.php
| Author: Valerio Vendrame (lelebart)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

//Table BBCode VARS
$__BBCODE__[] = 
array(
"description"				=>	$locale['bb_table_description'],
"value"						=>	"table",
"bbcode_start"				=>	"[table]",
"bbcode_end"				=>	"[/table]",
"usage"						=>	"[table]".$locale['bb_table_usage']."[/table]",
"onclick"					=>	"return overlay(this, 'bbcode_table_".$textarea_name."', 'rightbottom');",
"onmouseover"				=>	"",
"onmouseout"				=>	"",
"html_start"				=>	"<div id='bbcode_table_".$textarea_name."' class='tbl1' style='display: none; border:1px solid black; position: absolute; width: auto; height: auto; text-align: center' onclick=\"overlayclose('bbcode_table_".$textarea_name."');\">",
"includejscript"			=>	"",
"calljscript"				=>	"",
"phpfunction"				=>	"",
"html_middle"				=>	"<input type='button' value='".$locale['bb_table_1']."' class='button' style='width:70px' onclick=\"addText('".$textarea_name."', '[table]', '[/table]', '".$inputform_name."');return false;\" /><br />
<input type='button' value='".$locale['bb_table_2']."' class='button' style='width:70px' onclick=\"addText('".$textarea_name."', '[tr]', '[/tr]', '".$inputform_name."');return false;\" /><br />
<input type='button' value='".$locale['bb_table_3']."' class='button' style='width:70px' onclick=\"addText('".$textarea_name."', '[td]', '[/td]', '".$inputform_name."');return false;\" /><br />
<input type='button' value='".$locale['bb_table_4']."' class='button' style='width:70px' onclick=\"addText('".$textarea_name."', '[td=2]', '[/td]', '".$inputform_name."');return false;\" />",
"html_end"					=>	"</div>"
);

?>