+--------------------------------------------------------+
| Type: ...... BBcode
| Name: ...... Table
| Version: ... 1.00
| Author: .... Valerio Vendrame (lelebart)
| Released: .. Jan, 27th 2010
| Download: .. http://www.php-fusion.it
+--------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+---------------------------------------------------------+

	/************************************************\
	
		Table of Contents
		- Description
		- Installation
		- Usage
		- Notes
		
	\************************************************/

+-------------+
| DESCRIPTION |
+-------------+

With this BBcode you can create tables just using it.


+--------------+
| INSTALLATION |
+--------------+

1. Upload all files and folders to your ftp root;
2. Go to Admin -> System Administration -> BBCodes and 
3. just enable "table" BBCode, that's it!


+-------+
| USAGE |
+-------+

In order to obtain a table like this:

	+-------+-------+-------+
	| ceil1 | ceil2 | ceil3 |
	+-------+---------------+
	| ceil4 |     ceil5     |
	+-------+---------------+

you've to type something like:

[table][tr][td]ceil1[/td][td]ceil2[/td][td]ceil3[/td][/tr][tr][td]ceil4[/td][td=2]ceil5[/td][/tr][/table]


+-------+
| NOTES |
+-------+

Don't put new lines between different tags. Never. :)