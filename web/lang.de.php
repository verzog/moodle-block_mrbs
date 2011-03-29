<?php
# $Id: lang.de.php,v 1.1 2007/04/05 22:25:31 arborrow Exp $

# This file contains PHP code that specifies language specific strings
# The default strings come from lang.en, and anything in a locale
# specific file will overwrite the default. This is a German file.
#
# Translations provided by: Michael Redinger
#
#
# This file is PHP code. Treat it as such.

# The charset to use in "Content-type" header
$vocab["charset"]            = "iso-8859-1";

# Used in style.php
$vocab["mrbs"]               = "Raumbuchungssystem MRBS";

# Used in functions.php
$vocab["report"]             = "Bericht";
$vocab["admin"]              = "Admin";
$vocab["help"]               = "Hilfe";
$vocab["search"]             = "Suche:";
$vocab["not_php3"]             = "<H1>WARNUNG: Funktioniert warscheinlich nicht mit PHP3</H1>";

# Used in day.php
$vocab["bookingsfor"]        = "Eintr�ge f�r";
$vocab["bookingsforpost"]    = "";
$vocab["areas"]              = "Bereiche";
$vocab["daybefore"]          = "gehe zum vorherigen Tag";
$vocab["dayafter"]           = "gehe zum n�chsten Tag";
$vocab["gototoday"]          = "gehe zum heutigen Tag";
$vocab["goto"]               = "Start";
$vocab["highlight_line"]     = "Markieren Sie diese Zeile";
$vocab["click_to_reserve"]   = "Click on the cell to make a reservation.";

# Used in trailer.php
$vocab["viewday"]            = "Zeige Tag";
$vocab["viewweek"]           = "Zeige Woche";
$vocab["viewmonth"]          = "Zeige Monat";
$vocab["ppreview"]           = "Druckansicht";

# Used in edit_entry.php
$vocab["addentry"]           = "Eintrag hinzuf�gen";
$vocab["editentry"]          = "Eintrag �ndern";
$vocab["editseries"]         = "Alle Eintr�ge �ndern";
$vocab["namebooker"]         = "Kurzbeschreibung ";
$vocab["fulldescription"]    = "Vollst�ndige Beschreibung:<br>&nbsp;&nbsp;(Anzahl der Teilnehmer etc;)";
$vocab["date"]               = "Tag:";
$vocab["start_date"]         = "Anfangsdatum:";
$vocab["end_date"]           = "Enddatum:";
$vocab["time"]               = "Zeit:";
$vocab["period"]             = "Period:";
$vocab["duration"]           = "Dauer:";
$vocab["seconds"]            = "Sekunden";
$vocab["minutes"]            = "Minuten";
$vocab["hours"]              = "Stunden";
$vocab["days"]               = "Tage";
$vocab["weeks"]              = "Wochen";
$vocab["years"]              = "Jahre";
$vocab["periods"]            = "periods";
$vocab["all_day"]            = "Ganzt�gig";
$vocab["type"]               = "Art:";
$vocab["internal"]           = "Intern";
$vocab["external"]           = "Extern";
$vocab["save"]               = "Speichern";
$vocab["rep_type"]           = "Art der Wiederholung:";
$vocab["rep_type_0"]         = "Keine";
$vocab["rep_type_1"]         = "t�glich";
$vocab["rep_type_2"]         = "w�chentlich";
$vocab["rep_type_3"]         = "monatlich";
$vocab["rep_type_4"]         = "j�hrlich";
$vocab["rep_type_5"]         = "monatlich, entsprechender Tag";
$vocab["rep_type_6"]         = "jede n-te Woche";
$vocab["rep_end_date"]       = "Ende der Wiederholung:";
$vocab["rep_rep_day"]        = "Tag der Wiederholung:";
$vocab["rep_for_weekly"]     = "(f�r w�chentlich)";
$vocab["rep_freq"]           = "H�ufigkeit:";
$vocab["rep_num_weeks"]      = "Anzahl Wochen";
$vocab["rep_for_nweekly"]    = "(f�r n-te Woche)";
$vocab["ctrl_click"]         = "Strg-Click um mehr als einen Raum auszuw�hlen";
$vocab["entryid"]            = "Entry ID ";
$vocab["repeat_id"]          = "Repeat ID "; 
$vocab["you_have_not_entered"] = "Sie haben folgendes Feld nicht ausgef�llt :";
$vocab["you_have_not_selected"] = "You have not selected a";
$vocab["valid_room"]         = "room.";
$vocab["valid_time_of_day"]  = "G�ltige Uhrzeit.";
$vocab["brief_description"]  = "Kurzbeschreibung.";
$vocab["useful_n-weekly_value"] = "useful n-weekly value.";

# Used in view_entry.php
$vocab["description"]        = "Beschreibung:";
$vocab["room"]               = "Raum";
$vocab["createdby"]          = "Erstellt von:";
$vocab["lastupdate"]         = "Letzte �nderung:";
$vocab["deleteentry"]        = "Eintrag l�schen";
$vocab["deleteseries"]       = "Alle Eintr�ge l�schen";
$vocab["confirmdel"]         = "Sind Sie sicher,\\ndass Sie diesen Eintrag\\nl�schen wollen?\\n\\n";
$vocab["returnprev"]         = "Zur�ck zur vorigen Seite";
$vocab["invalid_entry_id"]   = "Invalid entry id.";
$vocab["invalid_series_id"]  = "Invalid series id.";

# Used in edit_entry_handler.php
$vocab["error"]              = "Fehler";
$vocab["sched_conflict"]     = "Konflikt in der Planung";
$vocab["conflict"]           = "Der neue Eintrag hat einen Konflikt mit folgenden Eintr�gen:";
$vocab["too_may_entrys"]     = "Die gew�hlten Optionen w�rden zu viele Eintr�ge erzeugen.<BR>�ndern Sie bitte die Optionen!";
$vocab["returncal"]          = "Zur�ck zur Kalenderansicht";
$vocab["failed_to_acquire"]  = "Konnte nicht exclusiv auf die Datenbank zugreifen"; 
$vocab["mail_subject_entry"] = $mail["subject"];
$vocab["mail_body_new_entry"] = $mail["new_entry"];
$vocab["mail_body_del_entry"] = $mail["deleted_entry"];
$vocab["mail_body_changed_entry"] = $mail["changed_entry"];
$vocab["mail_subject_delete"] = $mail["subject_delete"];

# Authentication stuff
$vocab["accessdenied"]       = "Zugang verweigert";
$vocab["norights"]           = "Sie haben keine Berechtigung, diesen Eintrag zu �ndern";
$vocab["please_login"]       = "Bitte einloggen";
$vocab["user_name"]          = "Benutzername";
$vocab["user_password"]      = "Passwort";
$vocab["unknown_user"]       = "Unbekannter Benutzer";
$vocab["you_are"]            = "Sie sind";
$vocab["login"]              = "Einloggen";
$vocab["logoff"]             = "Ausloggen";

# Authentication database
$vocab["user_list"]          = "Benutzerliste";
$vocab["edit_user"]          = "Bearbeite Benutzer";
$vocab["delete_user"]        = "L�sche diesen Benutzer";
#$vocab["user_name"]         = Use the same as above, for consistency.
#$vocab["user_password"]     = Use the same as above, for consistency.
$vocab["user_email"]         = "Email Addresse";
$vocab["password_twice"]     = "Falls Sie Ihr Passwort �ndern wollen, geben Sie das neue Passwort zwei mal ein.";
$vocab["passwords_not_eq"]   = "Fehler: Die Passw�rter stimmen nicht �berein.";
$vocab["add_new_user"]       = "Benutzer hinzuf�gen";
$vocab["rights"]             = "Rechte";
$vocab["action"]             = "Action";
$vocab["user"]               = "Benutzer";
$vocab["administrator"]      = "Administrator";
$vocab["unknown"]            = "Unbekannt";
$vocab["ok"]                 = "OK";
$vocab["show_my_entries"]    = "Click to display all my upcoming entries";

# Used in search.php
$vocab["invalid_search"]     = "Leerer oder ung�ltiger Suchbegriff.";
$vocab["search_results"]     = "Suchergebnis f�r:";
$vocab["nothing_found"]      = "Keine passenden Suchergebnisse gefunden.";
$vocab["records"]            = "Ergebnisse ";
$vocab["through"]            = " bis ";
$vocab["of"]                 = " von ";
$vocab["previous"]           = "Vorige";
$vocab["next"]               = "N�chste";
$vocab["entry"]              = "Eintrag";
$vocab["view"]               = "�ffnen";
$vocab["advanced_search"]    = "Erweiterte Suche";
$vocab["search_button"]      = "Suche";
$vocab["search_for"]         = "Suche nach";
$vocab["from"]               = "Von";

# Used in report.php
$vocab["report_on"]          = "Bericht �ber Termine:";
$vocab["report_start"]       = "Bericht Beginn:";
$vocab["report_end"]         = "Bericht Ende:";
$vocab["match_area"]         = "Suche Bereich:";
$vocab["match_room"]         = "Suche Raum:";
$vocab["match_type"]         = "Nach typ:";
$vocab["ctrl_click_type"]    = "Strg-Click um mehr als einen Typus auszuw�hlen";
$vocab["match_entry"]        = "Suche Kurzbeschreibung:";
$vocab["match_descr"]        = "Suche Beschreibung:";
$vocab["include"]            = "Generiere:";
$vocab["report_only"]        = "nur Bericht";
$vocab["summary_only"]       = "nur Zusammenfassung";
$vocab["report_and_summary"] = "Bericht und Zusammenfassung";
$vocab["summarize_by"]       = "Zusammenfassung nach:";
$vocab["sum_by_descrip"]     = "Kurzbeschreibung";
$vocab["sum_by_creator"]     = "Ersteller";
$vocab["entry_found"]        = "Eintrag gefunden";
$vocab["entries_found"]      = "Eintr�ge gefunden";
$vocab["summary_header"]     = "Stundenzusammenfassung der Eintr�ge";
$vocab["summary_header_per"] = "Summary of (Entries) Periods";
$vocab["total"]              = "Gesamt";
$vocab["submitquery"]        = "Bericht erstellen";
$vocab["sort_rep"]           = "Sortiere Report nach:";
$vocab["sort_rep_time"]      = "Startzeit/Datum ";
$vocab["rep_dsp"]            = "zeige im Report:";
$vocab["rep_dsp_dur"]        = "Dauer";
$vocab["rep_dsp_end"]        = "Endzeit";

# Used in week.php
$vocab["weekbefore"]         = "gehe zur vorigen Woche";
$vocab["weekafter"]          = "gehe zur n�chsten Woche";
$vocab["gotothisweek"]       = "gehe zu dieser Woche";

# Used in month.php
$vocab["monthbefore"]        = "gehe zum vorigen Monat";
$vocab["monthafter"]         = "gehe zum n�chsten Monat";
$vocab["gotothismonth"]      = "gehe zu diesen Monat";

# Used in {day week month}.php
$vocab["no_rooms_for_area"]  = "Der Bereich enth�lt keinen Raum";

# Used in admin.php
$vocab["edit"]               = "Bearbeiten";
$vocab["delete"]             = "L�schen";
$vocab["rooms"]              = "R�ume";
$vocab["in"]                 = "in";
$vocab["noareas"]            = "Keine Bereiche";
$vocab["addarea"]            = "Bereich hinzuf�gen";
$vocab["name"]               = "Name";
$vocab["noarea"]             = "Kein Bereich ausgew�hlt";
$vocab["browserlang"]        = "Die Spracheinstellung Ihres Browsers ist";
$vocab["postbrowserlang"]    = ".";
$vocab["addroom"]            = "Raum hinzuf�gen";
$vocab["capacity"]           = "Kapazit�t";
$vocab["norooms"]            = "Keine R�ume vorhanden.";
$vocab["administration"]     = "Administration";

# Used in edit_area_room.php
$vocab["editarea"]           = "Bereich bearbeiten";
$vocab["change"]             = "�ndern";
$vocab["backadmin"]          = "Zur�ck zu Admin";
$vocab["editroomarea"]       = "Raum- oder Bereichsbeschreibung bearbeiten";
$vocab["editroom"]           = "Raum bearbeiten";
$vocab["update_room_failed"] = "Raum aktualisieren gescheitert: ";
$vocab["error_room"]         = "Error: Raum ";
$vocab["not_found"]          = " nicht gefunden";
$vocab["update_area_failed"] = "Update area failed: ";
$vocab["error_area"]         = "Fehler: Bereich ";
$vocab["room_admin_email"]   = "E-mail des Raumadministrators";
$vocab["area_admin_email"]   = "E-mail des Bereichsadministrators";
$vocab["invalid_email"]      = "Ung�ltige e-mail Adresse !";

# Used in del.php
$vocab["deletefollowing"]    = "Dadurch werden die folgenden Eintr�ge gel�scht";
$vocab["sure"]               = "Sind Sie sicher?";
$vocab["YES"]                = "JA";
$vocab["NO"]                 = "NEIN";
$vocab["delarea"]            = "Sie m�ssen alle R�ume dieses Bereiches l�schen, damit Sie den Bereich l�schen k�nnen<p>";

# Used in help.php
$vocab["about_mrbs"]         = "�ber MRBS";
$vocab["database"]           = "Datenbank: ";
$vocab["system"]             = "System: ";
$vocab["please_contact"]     = "Bitte kontaktieren Sie ";
$vocab["for_any_questions"]  = "f�r Fragen die hier nicht beantwortet sind.";

# Used in mysql.php AND pgsql.php
$vocab["failed_connect_db"]  = "Fataler Fehler: Kann nicht an Datenbank anbinden";

?>
