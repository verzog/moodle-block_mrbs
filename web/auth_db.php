<?php
/*****************************************************************************\
*									      *
*   File name       auth_db.php						      *
*									      *
*   Description	    Authenticate users from a table in the MRBS database.     *
*									      *
*   Notes	    To use this authentication scheme, set in config.inc.php: *
*			$auth["type"]  = "db";				      *
*									      *
*   History								      *
*    2004/01/11 JFL Created this file					      *
*									      *
\*****************************************************************************/

// $Id: auth_db.php,v 1.1 2007/04/05 22:25:24 arborrow Exp $

require_once("../../../config.php");

/* session_php.php and session_cookie.php will add a link to the user list
    in the logon box, if the value $user_list_link is set. */

$user_list_link = "edit_users.php";

/* authValidateUser($user, $pass)
 * 
 * Checks if the specified username/password pair are valid
 * 
 * $user  - The user name
 * $pass  - The password
 * 
 * Returns:
 *   0        - The pair are invalid or do not exist
 *   non-zero - The pair are valid
 */

function authValidateUser($user, $pass)
{
   global $tbl_users;

   $user=slashes($user);
   $user=strtolower($user);
   $pass = md5($pass);
   return sql_query1("select count(*) from $tbl_users where name='$user' and password='$pass';");
}

/* authGetUserLevel($user)
 * 
 * Determines the users access level
 * 
 * $user - The user name
 *
 * Returns:
 *   The users access level
 */
function authGetUserLevel($user, $lev1_admin)
{
   // User not logged in, user level '0'
   if(!isset($user))
      return 0;

   // Check if the user is can modify
   for($i = 0; isset($lev1_admin[$i]); $i++)
   {
      if(strcasecmp($user, $lev1_admin[$i]) == 0)
	 return 2;
   }

   // Everybody else is access level '1'
   return 1;
}

?>
