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
| Filename: table_bbcode_include.php
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

//$text = preg_replace_callback("#\[table\](.*?)\[/table\]#si",create_function('$matches','return "[table]".str_replace("\n","",$matches[1]);'),$text);
//$text = preg_replace("#\[table\](.*?)\[/table\]#sie", "'[table]'.str_replace(array('\n','\r\n','<br>','<br />'),'',nl2br('\\1')).'[/table]'", $text, 1);
//$text = preg_replace("#\[table\](.*?)\[/table\]#sie", "'[table]'.nl2br('\\1').'[/table]'", $text, 1);
//$text = preg_replace("#\[table\](.*?)\[/table\]#sie", "'[table]'.trim('\\1','\n\r').'[/table]'", $text, 1);

// create tables with BBCode 
$text = preg_replace('#\[table\](.*?)\[/table\]#si', '<table cellpadding=\'0\' cellspacing=\'1\' width=\'100%\' class=\'tbl-border\'>\1</table>', $text);
$text = preg_replace('#\[tr\](.*?)\[/tr\]#si', '<tr>\1</tr>', $text);
$text = preg_replace('#\[td\](.*?)\[/td\]#si', '<td class=\'tbl1\'>\1</td>', $text);
$text = preg_replace('#\[td=([0-9].*?)\](.*?)\[/td\]#si', '<td class=\'tbl1\' colspan=\'\1\'>\2</td>', $text);


/*
$count = preg_match_all("#\[table\](.*?)\[/table\]#si", $text, $match, PREG_PATTERN_ORDER);
for($i=0; $i<$count; $i++) {
	//$tablerows = explode("\n", $match[1][$i]);
	$tabletext = str_replace(array('\n','\r\n','<br>','<br />'), '', $match[1][$i]);
	$text = str_replace($match[0][$i], '[table]'.$tabletext.'[/table]', $text);
}
unset($tabletext);
*/
?>
