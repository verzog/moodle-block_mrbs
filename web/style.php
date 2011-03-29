<?php

# $Id: style.php,v 1.1 2007/04/05 22:25:33 arborrow Exp $
require_once("../../../config.php"); //for Moodle integration
global $unicode_encoding;
global $vocab; # outside of scope; needs to be denote as global

?>
  <LINK REL="stylesheet" href="mrbs.css" type="text/css">
  <META HTTP-EQUIV="Content-Type" content="text/html; charset=<?php
   if ($unicode_encoding)
   {
     echo "utf-8";
   }
   else
   {
     # We use $vocab directly instead of get_vocab() because we have
     # no requirement to convert the vocab text, we just output
     # the charset
     echo $vocab["charset"];
   }
?>">
<?php

global $refresh_rate;
global $PHP_SELF;

if (($refresh_rate != 0) &&
    preg_match("/(day|week|month)\.php/",$PHP_SELF))
{
  echo "  <META HTTP-EQUIV=\"Refresh\" CONTENT=\"$refresh_rate\">\n";
}
?>
