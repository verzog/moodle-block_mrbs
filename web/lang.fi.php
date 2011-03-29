<?php
# $Id : lang.fi,v 1.1 Thu Jan 30 2003 thierry_bo Exp $

# This file contains PHP code that specifies language specific strings
# The default strings come from lang.en, and anything in a locale
# specific file will overwrite the default. This is the Finnish version.
#
# Translation by Vesa Palmu ( vesa.palmu@no... ), Tom Ingberg 
# (tom.ingberg@edu.vantaa.fi)
#
# This file is PHP code. Treat it as such.

# The charset to use in "Content-type" header
$vocab["charset"]            = "iso-8859-1";

# Used in style.php
$vocab["mrbs"]               = "Huonetilojen varausj�rjestelm�";

# Used in functions.php
$vocab["report"]             = "Raportit";
$vocab["admin"]              = "Yll�pito";
$vocab["help"]               = "Ohjeet";
$vocab["search"]             = "Etsi:";
$vocab["not_php3"]             = "Varoitus: J�rjestelm� ei valtt�m�tt� toimi PHP3:lla.</H1>";

# Used in day.php
$vocab["bookingsfor"]        = "Varaukset";
$vocab["bookingsforpost"]    = ""; # Goes after the date
$vocab["areas"]              = "Tilat";
$vocab["daybefore"]          = "Edelliseen p�iv��n";
$vocab["dayafter"]           = "Seuraavaan p�iv��n";
$vocab["gototoday"]          = "T�h�n p�iv��n";
$vocab["goto"]               = "mene";
$vocab["highlight_line"]     = "Highlight this line";
$vocab["click_to_reserve"]   = "Click on the cell to make a reservation.";

# Used in trailer.php
$vocab["viewday"]            = "N�yt� p�iv�";
$vocab["viewweek"]           = "N�yt� viikko";
$vocab["viewmonth"]          = "N�yt� kuukausi";
$vocab["ppreview"]           = "Tulostuksen esikatselu";

# Used in edit_entry.php
$vocab["addentry"]           = "Lis�� varaus";
$vocab["editentry"]          = "Muokkaa varausta";
$vocab["editseries"]         = "Muokkaa varaussarjaa";
$vocab["namebooker"]         = "Lyhyt kuvaus:";
$vocab["fulldescription"]    = "T�ydellinen kuvaus:<br>&nbsp;&nbsp;(Montako ihmist�,<br>&nbsp;&nbsp;sis�inen/ulkoinen jne)";
$vocab["date"]               = "P�iv�m��r�:";
$vocab["start_date"]         = "Aloitusaika:";
$vocab["end_date"]           = "Lopetusaika:";
$vocab["time"]               = "Aika:";
$vocab["period"]             = "Period:";
$vocab["duration"]           = "Kesto:";
$vocab["seconds"]            = "sekuntia";
$vocab["minutes"]            = "minuuttia";
$vocab["hours"]              = "tuntia";
$vocab["days"]               = "p�iv��";
$vocab["weeks"]              = "viikkoa";
$vocab["years"]              = "vuotta";
$vocab["periods"]            = "periods";
$vocab["all_day"]            = "Koko p�iv�n";
$vocab["type"]               = "Tyyppi:";
$vocab["internal"]           = "Sis�inen";
$vocab["external"]           = "Ulkoinen";
$vocab["save"]               = "Tallenna";
$vocab["rep_type"]           = "Toiston tyyppi:";
$vocab["rep_type_0"]         = "Ei toistoa";
$vocab["rep_type_1"]         = "P�ivitt�in";
$vocab["rep_type_2"]         = "Viikoittain";
$vocab["rep_type_3"]         = "Kuukausittain";
$vocab["rep_type_4"]         = "Vuosittain";
$vocab["rep_type_5"]         = "Kuukausittain samana viikonp�iv�n�";
$vocab["rep_type_6"]         = "M��r�aikainen viikoittainen";
$vocab["rep_end_date"]       = "Toiston loppup�iv�m��r�:";
$vocab["rep_rep_day"]        = "Toiston viikonp�iv�:";
$vocab["rep_for_weekly"]     = "(viikottaiselle toistolle)";
$vocab["rep_freq"]           = "Tiheys:";
$vocab["rep_num_weeks"]      = "Montako viikkoa";
$vocab["rep_for_nweekly"]    = "(m��r�aikaiselle viikottaiselle)";
$vocab["ctrl_click"]         = "Pid� CTRL-nappi pohjassa valitaksesi useita huoneita.";
$vocab["entryid"]            = "Varauksen ID ";
$vocab["repeat_id"]          = "Toiston ID "; 
$vocab["you_have_not_entered"] = "Et ole antanut seuraavaa pakollista tietoa:";
$vocab["you_have_not_selected"] = "You have not selected a";
$vocab["valid_room"]         = "room.";
$vocab["valid_time_of_day"]  = "Ajankohta ei ole kelpaa.";
$vocab["brief_description"]  = "Lyhyt kuvaus";
$vocab["useful_n-weekly_value"] = "M��r�aikaisen viikottaisen varauksen viikkom��r�.";

# Used in view_entry.php
$vocab["description"]        = "Kuvaus:";
$vocab["room"]               = "Huone:";
$vocab["createdby"]          = "Varauksen tekij�:";
$vocab["lastupdate"]         = "P�ivitetty:";
$vocab["deleteentry"]        = "Poista varaus";
$vocab["deleteseries"]       = "Poista varaussarja";
$vocab["confirmdel"]         = "Oletko varma ett� haluat poistaa\\nt�m�n varauksen?\\n\\n";
$vocab["returnprev"]         = "Takaisin edelliselle sivulle";
$vocab["invalid_entry_id"]   = "Virheellinen varauksen ID.";
$vocab["invalid_series_id"]  = "Invalid series id.";

# Used in edit_entry_handler.php
$vocab["error"]              = "Virhe";
$vocab["sched_conflict"]     = "P��llekk�inen varaus";
$vocab["conflict"]           = "Uusi varaus menee p��llekk�in seuraavien varausten kanssa:";
$vocab["too_may_entrys"]     = "Valituilla ehdoilla tulisi liian monta varausta.<br>Valittuja ehtoja on muutettava.";
$vocab["returncal"]          = "Paluu kalenterin�kym��n";
$vocab["failed_to_acquire"]  = "Tietokantaan ei saatu (varauksetonta) yhteytt�."; 
$vocab["mail_subject_entry"] = $mail["subject"];
$vocab["mail_body_new_entry"] = $mail["new_entry"];
$vocab["mail_body_del_entry"] = $mail["deleted_entry"];
$vocab["mail_body_changed_entry"] = $mail["changed_entry"];
$vocab["mail_subject_delete"] = $mail["subject_delete"];

# Authentication stuff
$vocab["accessdenied"]       = "P��sy kielletty";
$vocab["norights"]           = "Sinulla ei ole riitt�v�sti oikeuksia yritt�m�si toiminnon suorittamiseen.";
$vocab["please_login"]       = "Ole hyv� ja kirjaudu sis��n";
$vocab["user_name"]          = "K�ytt�j�tunnus";
$vocab["user_password"]      = "Salasana";
$vocab["unknown_user"]       = "Tuntematon k�ytt�j�";
$vocab["you_are"]            = "Olet";
$vocab["login"]              = "Kirjaudu sis��n";
$vocab["logoff"]             = "Kirjaudu ulos";

# Authentication database
$vocab["user_list"]          = "User list";
$vocab["edit_user"]          = "Edit user";
$vocab["delete_user"]        = "Delete this user";
#$vocab["user_name"]         = Use the same as above, for consistency.
#$vocab["user_password"]     = Use the same as above, for consistency.
$vocab["user_email"]         = "Email address";
$vocab["password_twice"]     = "If you wish to change the password, please type the new password twice";
$vocab["passwords_not_eq"]   = "Error: The passwords do not match.";
$vocab["add_new_user"]       = "Add a new user";
$vocab["rights"]             = "Rights";
$vocab["action"]             = "Action";
$vocab["user"]               = "User";
$vocab["administrator"]      = "Administrator";
$vocab["unknown"]            = "Unknown";
$vocab["ok"]                 = "OK";
$vocab["show_my_entries"]    = "Click to display all my upcoming entries";

# Used in search.php
$vocab["invalid_search"]     = "Tyhj� tai kelpaamaton haku.";
$vocab["search_results"]     = "Hakutulokset:";
$vocab["nothing_found"]      = "Yht��n varausta ei l�ytynyt antamillasi ehdoilla. ";
$vocab["records"]            = "Tulokset ";
$vocab["through"]            = " - ";
$vocab["of"]                 = " tuloksia yhteens�: ";
$vocab["previous"]           = "Edellinen";
$vocab["next"]               = "Seuraava";
$vocab["entry"]              = "Varaus";
$vocab["view"]               = "Katsele";
$vocab["advanced_search"]    = "Tarkennettu haku";
$vocab["search_button"]      = "Hae";
$vocab["search_for"]         = "Etsi:";
$vocab["from"]               = "Alkaen";

# Used in report.php
$vocab["report_on"]          = "Raportti varauksista:";
$vocab["report_start"]       = "Raportin alkup�iv�m��r�:";
$vocab["report_end"]         = "Raportin loppup�iv�m��r�:";
$vocab["match_area"]         = "Alue:";
$vocab["match_room"]         = "Huone::";
$vocab["match_type"]         = "Match type:";
$vocab["ctrl_click_type"]    = "Use Control-Click to select more than one type";
$vocab["match_entry"]        = "Lyhyt kuvaus:";
$vocab["match_descr"]        = "T�ydellinen kuvaus:";
$vocab["include"]            = "Sis�lt�en:";
$vocab["report_only"]        = "Ainoastaan raportti";
$vocab["summary_only"]       = "Ainoastaan yhteenveto";
$vocab["report_and_summary"] = "Molemmat";
$vocab["summarize_by"]       = "Yhteenvedon peruste:";
$vocab["sum_by_descrip"]     = "Lyhyt kuvaus";
$vocab["sum_by_creator"]     = "Varaaja";
$vocab["entry_found"]        = "varaus l�ytyi";
$vocab["entries_found"]      = "varausta l�ytyi";
$vocab["summary_header"]     = "Varausten tunnit yhteens�";
$vocab["summary_header_per"] = "Summary of (Entries) Periods";
$vocab["total"]              = "Kaikkiaan";
$vocab["submitquery"]        = "Tee raportti";
$vocab["sort_rep"]           = "Sort Report by:";
$vocab["sort_rep_time"]      = "Start Date/Time";
$vocab["rep_dsp"]            = "Display in report:";
$vocab["rep_dsp_dur"]        = "Duration";
$vocab["rep_dsp_end"]        = "End Time";
 
# Used in week.php
$vocab["weekbefore"]         = "Edelliseen viikkoon";
$vocab["weekafter"]          = "Seuraavaan viikkoon";
$vocab["gotothisweek"]       = "T�h�n viikkoon";

# Used in month.php
$vocab["monthbefore"]        = "Edelliseen kuukauteen";
$vocab["monthafter"]         = "Seuraavaan kuukauteen";
$vocab["gotothismonth"]      = "T�h�n kuukauteen";

# Used in {day week month}.php
$vocab["no_rooms_for_area"]  = "T�ll� alueella ei ole yht��n huonetta.";

# Used in admin.php
$vocab["edit"]               = "Muokkaa";
$vocab["delete"]             = "Poista";
$vocab["rooms"]              = "Huoneet";
$vocab["in"]                 = "alueella";
$vocab["noareas"]            = "Ei alueita";
$vocab["addarea"]            = "Lis�� alue";
$vocab["name"]               = "Nimi";
$vocab["noarea"]             = "Ei valittua aluetta";
$vocab["browserlang"]        = "Selaimesi kieliasetus on";
$vocab["postbrowserlang"]    = ".";
$vocab["addroom"]            = "Lis�� huone";
$vocab["capacity"]           = "Maksimi henkil�m��r�";
$vocab["norooms"]            = "Ei huoneita.";
$vocab["administration"]     = "Yll�pito";

# Used in edit_area_room.php
$vocab["editarea"]           = "Muokkaa alueen tietoja";
$vocab["change"]             = "Talleta";
$vocab["backadmin"]          = "Takaisin yll�pitoon";
$vocab["editroomarea"]       = "Muokkaa alueen tai huoneen kuvausta";
$vocab["editroom"]           = "Muokkaa huoneen tietoja";
$vocab["update_room_failed"] = "Huoneen tietojen p�ivitys ep�onnistui: ";
$vocab["error_room"]         = "Virhe: huonetta ";
$vocab["not_found"]          = " ei l�ytynyt";
$vocab["update_area_failed"] = "Alueen tietojen p�ivitys ep�onnistui: ";
$vocab["error_area"]         = "Virhe: aluetta ";
$vocab["room_admin_email"]   = "Room admin email:";
$vocab["area_admin_email"]   = "Area admin email:";
$vocab["invalid_email"]      = "Invalid email!";

# Used in del.php
$vocab["deletefollowing"]    = "Seuraavat varaukset poistetaan";
$vocab["sure"]               = "Oletko varma?";
$vocab["YES"]                = "KYLL�";
$vocab["NO"]                 = "EN";
$vocab["delarea"]            = "Sinun t�ytyy poistaa kaikki alueen huoneet ennnen kuin voit poistaa alueen.<p>";

# Used in help.php
$vocab["about_mrbs"]         = "Tietoja varausj�rjestelm�st�";
$vocab["database"]           = "Tietokanta: ";
$vocab["system"]             = "K�ytt�j�rjestelm�: ";
$vocab["please_contact"]     = "J�rjestelm�n yhteyshenkil� ";
$vocab["for_any_questions"]  = "antaa lis�tietoja mik�li et l�yd� vastausta kysymykseesi n�ist� ohjeista.";

# Used in mysql.php AND pgsql.php
$vocab["failed_connect_db"]  = "J�rjestelm�virhe: Tietokantayhteyden avaaminen ei onnistu.";

?>
