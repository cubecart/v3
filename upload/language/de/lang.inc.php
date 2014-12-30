<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.17
|   ========================================
|	CubeCart is a registered trade mark of CubeCart Limited
|   Copyright CubeCart Limited 2014. All rights reserved.
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Email: sales@cubecart.com
|	License: GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
+--------------------------------------------------------------------------
|	lang.inc.php
|   ========================================
|	German (DE) Language File	
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'de_DE');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Ja";

$lang['admin']['no'] = "Nein";

$lang['admin']['edit'] = "Ändern";

$lang['admin']['delete'] = "Löschen";

$lang['admin']['delete_q'] = "Wollen Sie dies wirklich löschen?";

$lang['admin']['add'] = "Hinzufügen";

$lang['admin']['add_new'] = "Neu hinzufügen";

$lang['admin']['write'] = "Schreiben";

$lang['admin']['read'] = "Lesen";

$lang['admin']['na'] = "N/A"; // as in not applicable

$lang['admin']['all'] = "Alles";

$lang['admin']['remove'] = "Entfernen";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Erfolgreich gelöscht.",

'del_failed' => "Löschen fehlgeschlagen.",

'update_success' => "erfolgreich aktualisiert.",

'update_fail' => "Aktualisierung fehlgeschlagen.",

'add_success' => "erfolgreich hinzugefügt.",

'add_failed' => "Benutzer wurde nicht hinzugefügt.",

'administrators_title' => "Administratoren",

'current_users' => "Aktuelle Admin-Benutzer.",

'id' => "Id",

'user_notes' => "Benutzernamen / Mitteilungen",

'no_logins' => "Anzahl Logins",

'super_user' => "Super User?",

'email' => "Email",

'action' => "Action",

'add_admin' => "Um einen Administrator hinzuzufügen benutzen Sie das Formular unten.",

'full_name' => "Kompletter Name:",

'username' => "Username:",

'administrator' => "Administrator",

'email2' => "Email:",

'password' => "Passwort:",

'pass_warn' => "(Passwort nur eingeben wenn Sie das aktuelle ändern wollen.)",

'make_super' => "Super User erstellen?",

'notes' => "Bemerkungen:",

'permissions' => "Rechte",

'pass_updated' => "Passwort aktualisiert.",

'pass_not_updated' => "Passwort wurde nicht aktualisiert.",

'change_pass_below' => "Bitte ändern Sie Ihr Passwort unten:",

'old_pass' => "Altes Passwort:",

'new_pass' => "Neues Passwort:",

'confirm_pass' => "Passwort bestätigen:",

'perms_updated' => "Rechte aktualisiert.",

'set_perms' => "Bitte legen Sie unten die Rechte für diesen Benutzer fest.",

'section' => "Bereich",

'nb_bulk' => "N.B Für Massenemails an Kunden muss der Benutzer Schreibrechte auf customers haben.",

'admin_sessions' => "Admin Sitzung",

'sessions_desc' => "Unten werden die letzten Admin-Login Versuche angezeigt. Behalten Sie diese im Auge. Es wird dringend empfohlen das Admin-Passwort regelmässig zu ändern.",

'login_id' => "Login ID",

'time' => "Zeit",

'ip_address' => "IP Adresse",

'success' => "Erfolg",

);



$lang['admin']['categories'] = array (

'delete_success' => "Erfolgreich gelöscht.",

'delete_fail' => "Löschen fehlgeschlagen.",

'update_success' => "erfolgreich aktualisiert.",

'update_fail' => "Kategorie wurde nicht aktualisiert.",

'add_success' => "erfolgreich hinzugefügt.",

'add_failed' => "Kategorie wurde nicht hinzugefügt.",

'categories' => "Kategorien",

'categories_desc' => "Unten ist eine Liste aller Kategorien der Datenbank.",

'cat_name' => "Kategorie",

'dir' => "Verzeichnis",

'image' => "Bild",

'no_products' => "Artikelanzahl",

'action' => "Action",

'cannot_del' => "Diese Kategorie kann nicht gelöscht werden, da sie Artikel enthält.",

'no_cats_exist' => "In der Datenbank existieren keine Kategorien.",

'add_desc' => "Sie können Kategorien mit unbegrenzten Unterkategorien erstellen, neue Bilder auf den Server laden oder dort bereits vorhandene verwenden.",

'category' => "Kategorie",

'category_name' => "Kategorie Name:",

'category_level' => "Kategorie Ebene:",

'top_level' => "Top Level",

'image_optional' => "Bild: (Optional)",

'upload_new_image' => "Neues Bild hochladen",

'browse_existing' => "Bilder durchsuchen",

'ship_by_cat' => "Versand je Kategorie",

'per_ship' => "Je Versand:",

'per_item' => "Je Artikel:",

'per_int_ship' => "Je Auslandsversand:",

'per_int_item' => "Je Auslandsartikel:",

);



$lang['admin']['customers'] = array (

'customers' => "Kunden",

'delete_success' => "Erfolgreich gelöscht.",

'delete_fail' => "Löschen fehlgeschlagen.",

'update_success' => "Kunden erfolgreich aktualisiert.",

'update_fail' => "Kunde wurde nicht aktualisiert.",

'search_term' => "Begriff suchen:",

'reset' => "Reset",

'name' => "Name",

'email' => "Email",

'invoice_add' => "Rechnungsanschrift",

'phone' => "Telefon",

'reg_ip' => "Reg Datum / IP Adresse",

'no_orders' => "Anzahl Bestellungen",

'action' => "Action",

'no_cust_exist' => "Keine Kunden in der Datenbank.",

'edit_below' => "Bitte bearbeiten Sie den Kunden unten:",

'title' => "Titel",

'first_name' => "Vorname:",

'last_name' => "Nachname:",

'email2' => "Email:",

'address' => "Adresse:",

'town' => "Ort:",

'county' => "Bundesland:",

'postcode' => "Postleitzahl:",

'country' => "Land:",

'phone2' => "Telefon:",

'edit_customer' => "Kunde bearbeiten",

'no_download_email' => "Es gab keine eMails zum herunterladen.",

'email_customers' => "Email Kunden",

'create_email' => "Bitte erstellen Sie unten Ihre eMail:",

'hint' => "Tip:",

'click_source' => "Sie können den Source-Knopf oben anklicken und den Inhalt in ein HTML-Dokument einfügen das sie bereits erstellt haben.",

'important' => "Wichtig:",

'absolute_links' => "Stellen Sie sicher dass alle Bilder und Links absolut sind (z.b. den Domainnamen enthalten). In den meisten Ländern ist es vorgeschrieben eine Möglichkeit zum Abmelden zur Verfügung zu stellen:",

'email_subject' => "eMail Betreff:",

'senders_name' => "Absender Name:",

'senders_email' => "Absender eMail:",

'return_path' => "Return Path:",

'bounce_desc' => "(Der Pfad zu dem zurückgewiesene Emails gehen.)",

'send_test' => "Test-eMail senden?",

'test_email_recip' => "Test Email Empfänger:",

'send_email' => "Email senden",

'download_or_send' => "Möchten Sie Kunden-eMailadressen herunterladen oder eine Sammel-eMail über diese Seite verschicken.",

'please_choose' => "Bitte wählen:",

'used_to_download' => "Hiermit laden Sie eMail-Adressen herunter um Sie zum Sammelversand zu benutzen.",

'bulk_to_subscribed' => "Hiermit können Sie eine Sammelemail an alle verschicken, die sich für den Newsletter eingetragen haben.",

'include_name' => "Name einfügen?",

'download_email' => "Email herunterladen",

'send_email' => "Email senden",

'sending_complete' => "Senden abgeschlossen",

'sending' => "Email wird gesendet",

'recipient' => "Empfänger:",

'prev_page' => "Vorherige Seite",

'page' => "Seite:",

'bulk_finished' => "Sammelemail wurde erfolgreich versendet.",

'time_taken' => "Verwendete Zeit:",

'recipients' => "Empfänger:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Homepage wurde nicht aktualisiert. Stellen Sie sicher, dass die Rechte von includes/static/home.inc.php richtig sind.",

'update_success' => "Hompage erfolgreich aktualisiert.",

'homepage' => "Homepage",

'enabled' => "An:",

'enabled_desc' => "(Wenn dies Aus ist wird statt dessen die Standardsprache verwendet.)",

'language' => "Sprache:",

'title' => "Titel:",

'use_rich_text' => "Bitte benutzen Sie den Rich Text Editor unten um Änderungen an der Homepage vorzunehmen. Änderungen werden beim Speichern sofort durchgeführt, daher bitte die Vorschau benutzen.",

'update_homepage' => "Homepage aktualisieren",

'delete_success' => "Dokument erfolgreich gelöscht.",

'delete_fail' => "Löschen fehlgeschlagen.",

'update_success' => "erfolgreich aktualisiert.",

'update_fail' => "wurde nicht aktualisiert.",

'add_success' => "erfolgreich hinzugefügt.",

'add_fail' => "Dokument wurde nicht hinzugefügt.",

'site_docs_other_lang' => "Seiten Dokumente - (Andere Sprachen)",

'use_rich_text' => "Bitte benutzen Sie den Rich Text Editor unten um Seiten in anderen Sprachen hinzuzufügen oder zu ändern.",

'site_doc_other_lang' => "Seiten Dokument - (Andere Sprachen)",

'doc_name' => "Dokumentenname:",

'language' => "Sprache:",

'update_doc' => "Dokument aktualisieren",

'save_doc' => "Dokument speichern",

'current_doc_list' => "Unten finden Sie eine Liste aller Seitendokumente. Sie können beliebig viele hiervon anlegen und diese jederzeit ändern.",

'doc_name2' => "Dokument Name",

'action' => "Action",

'no_site_docs' => "Es gibt keine Dokumente in der Datenbank.",

'site_docs' => "Seiten Dokumente",

'site_doc' => "Seiten Dokument",

'languages' => "Sprachen",

'no_docs' => "Es gibt keine Seitendokumente in der Datenbank.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Image Browser",

'file' => "Datei:",

'no_imgs' => "Keine Bilder verfügbar. Bitte schliessen Sie dieses Fenster und laden Sie statt dessen ein Bild hoch.",

'preview' => "Vorschau:",

'ok' => "OK",

'cancel' => "Abrechen",

'prod_cat_use_img' => "Andere Produkte oder Kategorien verwenden das Bild '%s'.",

'continue_q' => "LÖSCHEN FORTSETZEN?",

'site_doc_use_img' => "Es gibt Seitendokumente die das Bild '%s' verwenden.",

'home_use_img' => "Das Bild '%s' wird auf der Homepage verwendet.",

'gallery_use_img' => "Das Bild '%s' wird in einer Artikelgallerie verwendet.",

'image_deleted' => "Bild gelöscht.",

'delete_failed' => "Löschen fehlgeschlagen.",

'image_manager' => "Bilder Manager",

'delete_from_server' => "Unten können Sie Bilder vom Server löschen.",

'img_click_prev' => "Bild (Klick für Vorschau)",

'size' => "Grösse",

'action' => "Action",

'no_images_added' => "Es wurden keine Bilder hinzugefügt.",

'prev_file' => "Dateivorschau",

'close_window' => "Fenster schliessen",

'no_image_selected' => "Es wurde kein Bild für die Vorschau ausgewählt.",

'file_uploader' => "Datei Uploader",

'upload_image' => "Bild hochladen",

'please_browse_img' => "Bitte wählen Sie Ihr Bild aus:",

'file_too_big' => "Fehler: %s ist über %s",

'img_already_exists' => "Fehler: %s besteht bereits. Bitte benennen Sie die Datei um oder wählen sie statt dessen die gewünschte Datei aus.",

'upload_too_large' => "Fehler: Die haben keine Datei zum hochladen ausgewählt oder die Datei war zu gross. Das Standard-Uploadlimit ist 2MB.",

'not_valid_mime' => "Fehler: %s ist kein gültiger Bildertyp.",

'image_upload_success' => "Erfolgreich: %s hochgeladen.",

'back' => "&laquo; Zurück",

);



$lang['admin']['misc'] = array (

'license_form' => "Lizenzformular",

'write_error' => "includes/global.inc.php konnte nicht zum schreiben geöffnet werden. Ändern Sie CHMOD auf 0777. Denken Sie daran anschliessend wieder auf 0644 zu ändern!",

'try_again' => "Versuchen Sie es nochmals",

'purchase_cubecart' => "CubeCart kaufen:",

'invalid_key' => "Der Lizenzschlüssel war ungültig oder schon benutzt.",

'purchase_license_key' => "Lizenzschlüssel kaufen",

'run_unlicensed' => "Sie scheinen eine unlizensiert Version von CubeCart zu benutzen. Bitte geben Sie Ihren Lizenzschlüssel ein, um den Copyright Hinweis zu entfernen.",

'license_key' => "Lizenzschlüssel:",

'submit_key' => "Schlüssel übertragen",

'server_info' => "Server Info",

'ini_set_desc' => "Unten sehen Sie die aktuellen Servereinstellungen. Dies enthält alle Informationen die Sie gegebenenfalls ändern müssen wenn Sie Probleme  mit CubeCart haben. N.B. Wenn Sie keinen eigenen Webserver haben, werden Sie wahrscheinlich nur eingeschränkt Zugriff auf diese Einstellungen haben. Die </span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> Funktion kann oft benutzt werden um diese Einschränkung zu umgehen.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "Der Bestellstatus dieser Bestellung wurde erfolgreich geändert. An dieser Stelle können Sie Ihrem Kunden eine Rechnung und Zugriff zum Download Digitaler Produkte schicken. Um dies zu tun ",

'click_here' => "Hier klicken",

'send_invoice_desc' => "Wenn der Status von Offen auf In Bearbeitung geändert wird können Sie dem Kunden eine Rechnung schicken und Zugriff auf Digitale Produkte geben.",

'delete_success' => "Erfolgreich gelöscht.",

'delete_fail' => "Löschen fehlgeschlagen.",

'orders' => "Bestellungen",

'all_orders' => "Unten finden Sie alle Bestellungen die in der Datenbank gespeichert sind.",

'order_no' => "Bestellnr.",

'status' => "Status",

'date_time' => "Datum/Zeit",

'customer' => "Kunde",

'ip_address' => "IP Adresse",

'cart_total' => "Gesamtsumme",

'action' => "Action",

'no_orders_in_db' => "Es gibt keine Bestellungen in der Datenbank.",

'order_email' => "Sehr geehrte(r) %s,\n\nDer Status Ihrer Bestell-ID: %s hat sich auf %s geändert\n\n",

'email_staff_comments' => "Unsere Mitarbeiter haben die folgenden  Bemerkungen hinzugefügt:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Diese eMail wurde automatisch versandt von %s",

'email_subj_status_change' => "Änderung Bestellstatus:",

'order_no2' => "Bestellnr.:",

'print_packing_slip' => "Packliste drucken",

'customer_info' => "Kunden Info",

'invoice_address' => "Rechnungsanschrift:",

'delivery_address' => "Lieferanschrift:",

'contact_info' => "Kontakt-Information:",

'tel' => "Tel:",

'mobile' => "Handy:",

'email' => "Email:",

'customer_comments' => "Kundenbemerkungen:",

'no_comments_left' => "Es wurden keine Bemerkungen gemacht.",

'order_summary' => "Bestellzusammenfassung",

'product' => "Artikel",

'code' => "Code",

'quantity' => "Menge",

'price' => "Preis",

'download_link' => "Download Link:",

'warn_reset' => "Dies setzt die Anzahl Downloads auf Null und verlängert die Gültigkeitszeit.",

'reset_link' => "Link zurücksetzen",

'download_stats' => "Downloaded (%s) mal. Link gültig bis %s",

'ip_address2' => "IP Adresse:",

'order_date_time' => "Bestelldatum/-zeit:",

'payment_method' => "Zahlungsart:",

'ship_method' => "Versandart:",

'subtotal' => "Zwischensumme:",

'total_tax' => "Steuer:",

'shipping' => "Versand:",

'grand_total' => "Gesamtsumme:",

'order_notfound' => "Bestellnummer %s wurde nicht gefunden.",

'order_status' => "Bestellstatus",

'shipping_date' => "Versanddatum:",

'ship_today' => "Versand heute",

'modify_status' => "Status ändern:",

'staff_comments' => "Mitarbeiter Bemerkungen:",

'info_not_sent_customer' => "(Diese Mitteilung wird NICHT an den Kunden geschickt!)",

'inform_customer' => "Kunde informieren:",

'customer_notified' => "(Der Kunde wird über die Statusänderung informiert wenn hier angeklickt wird.)",

'comments_2_customer' => "Anmerkungen für den Kunden:",

'comments_2_customer_desc' => "(Dies wird der Standard-email über Statusänderung an den Kunden hinzugefügt.)",

'save_order_status' => "Bestellstatus speichern",

'paid_by' => "Bezahlt mit:",

'delivered_to' => "Geliefert an:",

'invoice_reciept_for' => "Rechnung für:",

'order_of_time' => "Ihre Bestellung vom",

'order_id' => "Bestell ID:",

'digi_goods_desc' => "Wenn Sie Digitale Waren bestellt haben, sollten Sie eine eMail mit Downloadhinweisen erhalten haben. Diese können Sie auch über Ihre Kontoverwaltung erhalten, wo kompletten Zugriff auf Ihr Konto bei uns haben.",

'thank_you' => "Vielen Dank für Ihren Einkauf bei uns!",

);



$lang['admin']['products'] = array (

'show_featured' => "Die neuesten Produkte in Homepage einfügen?",

'upload_new_images' => "Bilder hochladen",

'no_images_avail' => "Leider keine Bilder verfügbar.",

'prod_added_to_cat' => "Artikel zur Kategorie hinzugefügt.",

'prod_not_added_to_cat' => "Kategorie konnte nicht zum Artikel hinzugefügt werden.",

'prod_removed_from_cat' => "Artikel wurde aus Kategorie entfernt.",

'prod_not_removed_from_cat' => "Artikel wurde nicht aus Kategorie entfernt.",

'title_extraCats' => "Kategorieverwaltung",

'manage_cats' => "Kategorien verwalten",

'master_cat' => "Hauptkategorie:",

'close_window' => "Fenster schliessen",

'img_added_to_prod' => "Bild wurde zum Artikel hinzugefügt.",

'img_not_added_to_prod' => "Bild konnte nicht zum Artikel hinzugefügt werden.",

'img_removed' => "Bild wurde vom Artikel entfernt.",

'img_not_removed' => "Bild wurde nicht vom Artikel entfernt.",

'image_management' => "Bilderverwaltung",

'manage_images' => "Bilder verwalten",

'image' => "Bild",

'action' => "Action",

'delete_success' => "Erfolgreich gelöscht.",

'delete_fail' => "Löschen fehlgeschlagen.",

'update_successful' => "erfolgreich aktualisiert.",

'update_fail' => "Kategorie konnte nicht aktualisiert werden.",

'add_success' => "erfolgreich hinzugefügt.",

'add_fail' => "Kategorie konnte nicht hinzugefügt werden.",

'prod_inventory' => "Artikelbestand",

'current_prods_in_db' => "Unten ist eine Liste mit allen Artikeln der Datenbank.",

'all_cats' => "Alle Kategorien",

'prod_name' => "Artikelname",

'prod_id' => "Artikel Id",

'prod_code' => "Artikel Code",

'master_cat2' => "Hauptkategorie",

'title' => "Titel",

'stock_level' => "Lagerbestand",

'normal_price' => "Standardpreis",

'sale_price' => "Verkaufspreis",

'asc' => "Aufsteigende Bestellung",

'desc' => "Absteigende Bestellung",

'containing_text' => "enthält den Text",

'filter' => "Filter",

'reset' => "Reset",

'id' => "id",

'type' => "Art",

'name' => "Name",

'price_sale_price' => "Preis / Verkaufspreis",

'in_stock' => "Im Lager",

'action' => "Action",

'languages' => "Sprachen",

'no_products_exist' => "Kein Artikel in der Datenbank.",

'add_prod_desc' => "Sie können das Formular unten benutzen um einen Artikel dem Artikelbestand hinzuzufügen.",

'product' => "Artikel",

'prod_name2' => "Artikelname:",

'prod_stock_no' => "Artikel/Lagernr.:",

'auto_generated' => "(Zur automatischen Vergabe leer lassen.)",

'description' => "Beschreibung:",

'primary_lang' => "(In Standardsprache. Andere Sprachen können später hinzugefügt werden.)",

'category' => "Kategorie:",

'image2' => "Bild:",

'opt_and_thumbs' => "(Optional und Thumbnails werden automatisch erstellt wenn das gewählte Format kompatibel ist.)",

'upload_new' => "Neues Bild hochladen",

'browse_existing' => "Bilder durchsuchen",

'normal_price2' => "Standardpreis:",

'sale_price2' => "Verkaufspreis:",

'sale_mode_desc' => "(Dies wird nur verwendet wenn der Shop auf Verkaufsmodus pro Produkt eingestellt ist.)",

'prod_weight' => "Artikelgewicht:",

'tax_class' => "Steuerklasse:",

'stock_level2' => "Lagerbestand:",

'reduce_stock_level' => "(Der Bestand reduziert sich bei jedem Verkauf.)",

'use_stock_q' => "Lagerbestand verwenden?",

'product_type' => "Artikelart:",

'tangible' => "Tangible",

'digital' => "Digital",

'digi_path' => "Digitale Artikel benötigen entweder einen HTTP Pfad oder Server Root Pfad (siehe unten).",

'digi_info' => "Digital Info:",

'digi_desc' => "<p><strong>HTTP Pfad:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong>Server Root Pfad:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Empfohlen!)							</strong></p>

<p>Der Vorteil den Server Root Pfad zu benutzen ist, dass die Dateien ausserhalb des öffentlich zugänglichen Verzeichnisses gespeichert werden können. Wird diese Methode gewählt, erstellt CubeCart automatisch einen Downloadlink der ein Ablaufdatum und eine Höchstanzahl an Downloads enthält, die in den Shopeinstellungen festgelegt wurden.</p>",

'prod_inv_langs' => "Artikelbestand - (Andere Sprachen)",

'use_rich_oth_lang' => "Benutzen Sie den Rich Text Editor unten um Artikel in anderen Sprachen zu ändern oder hinzuzufügen.",

'language' => "Sprache:",

'update_prod_lang' => "Artikelsprache aktualisieren",

'save_prod_lang' => "Artikelsprache speichern",

'other_langs_exdefault' => "Unten finden Sie eine Liste mit Artikeln in von der Standardsprache abweichenden Sprachen.",

'no_lang_exist' => "Für diesen Artikel gibt es keine alternative Spache in der Datenbank.",

'opt_add_success' => "Optionsname hinzugefügt.",

'opt_add_fail' => "Optionsname nicht hinzugefügt.",

'att_add_success' => "Optionsattribut hinzugefügt.",

'att_add_fail' => "Optionsattribut nicht hinzugefügt.",

'assign_success' => "Option dem Artikel zugewiesen.",

'assign_fail' => "Option dem Artikel nicht zugewiesen.",

'product_options' => "Artikeloptionen",

'product_option' => "Artikeloption",

'quick_assign' => "Schnell zuweisen:",

'prod_opts_of' => "Artikeloptionen von",

'to' => "bis",

'go' => "LOS",

'opt_step1' => "1. Option erstellen (z.B. Farbe)",

'opt_id' => "ID",

'opt_name' => "Optionsname",

'warn_remove_opt' => "Sind Sie sicher dass Sie diesen Optionsnamen entfernen wollen? \n\nWARNUNG ! WENN SIE FORTSETZEN WERDEN ALLE ARTIKELOPTIONEN UND OPTIONSATTRIBUTE MIT DIESEM NAMEN ENTFERNT!",

'no_options_made' => "Artikeloptionsnamen wurden nicht erstellt.",

'option' => "Option",

'opt_step2' => "2. Optionswert erstellen (z.B. Rot)",

'option_attributes' => "Optionsattribute",

'warn_remove_att' => "Sind Sie sicher dass Sie dieses Optionsattribut entfernen wollen? \n\nWARNUNG ! WENN SIE FORTSETZEN WERDEN ALLE ARTIKELOPTIONEN MIT DIESEM ATTRIBUT UND OPTIONSNAMEN GELÖSCHT!",

'no_attributes_made' => "Kein Artikeloptionsattribut wurde erstellt.",

'attribute' => "Attribute",

'opt_step3' => "3. Optionswert &amp; dem Artikel zuweisen (z.B. T-Shirt &gt; Farbe &gt; Rot)",

'option_attribute' => "Optionsattribute",

'option_price' => "Optionspreis",

'add_subtract' => "Addieren / Abziehen",

'remove_opt_prod' => "Sind Sie sicher dass Sie diese Option vom Artikel entfernen möchten?",

'no_assigned_opts' => "Keinem Artikel wurden Optionen zugewiesen.",

'prods_made_1st' => "Artikel müssen hinzugefügt werden bevor Optionen erstellt werden können.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Enable Script/Bot Flood Control?</strong><br />
Forces users to enter a code on registration, tell a friend etc to prevent bot's from spamming the store.",


//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP Host:",

'defaultHost' => "(Default: localhost)",

'smtpPort' => "SMTP Port:",

'defaultPort' => "(Default: 25)",

'smtpAuth' => "Use Authentication?",

'defaultAuth' => "(Default: No)",

'smtpUsername' => "SMTP Username:",

'smtpPassword' => "SMTP Password:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "Neueste Artikel auf der Homepage anzeigen?",

'no_latest' => "Anzahl anzuzeigender neuester Produkte:",

'off_line_settings' => "Offline Einstellungen",

'off_line' => "Shop abschalten?",

'off_line_content' => "Offline Mitteilung:",

'off_line_allow_admin' => "Administratoren erlauben Shop offline zu sehen? (Benötigt Admin Sitzung)",


'store_settings' => "Shopeinstellungen",

'edit_below' => "Bitte ändern Sie Ihre Shopkonfiguration unten:",

'meta_data' => "Meta Data",

'browser_title' => "Browser Titel:",

'meta_desc' => "Meta Beschreibung:",

'meta_keywords' => "Meta Keywords:",

'comma_separated' => "(Durch Komma getrennt)",

'store_co_name' => "Shop/Firmen Name:",

'store_address' => "Shop Adresse:",

'country' => "Land:",

'zone' => "Bundesland:",

'dirs_folders' => "Verzeichnisse &amp; Ordner",

'rootRel' => "Root Public HTML Ordner zum Shop:",

'include_slash' => "(mit abschiessendem /)",

'storeURL' => "Absolute URL zum Shop:",

'eg_domain_com' => "z.B. http://www.domain.com",

'rootDir' => "Server Root Verzeichnis:",

'eg_root_path' => "z.B. /pfad/zu/ihrem/webshop",

'rootRel_SSL' => "Root SECURE Public HTML Ordner zum Shop:",

'storeURL_SSL' => "Absolute SECURE URL zum Shop:",

'eg_domain_SSL' => "z.B. https://secure.domain.com",

'rootDir_SSL' => "Server SECURE Root Verzeichnis:",

'eg_root_path_secure' => "z.B. /pfad/zu/ihrem/secure/webshop",

'enable_ssl' => "SSL zulassen:",

'ssl_warn' => "(Warnung: Diese Änderung wird nach abschicken sofort wirksam. Bitte stellen Sie sicher dass die secure Root Verzeichnisse und Secure URL richtig sind und funktionieren bevor Sie die Einstellung auf JA ändern)",

'digital_downloads' => "Digital Downloads",

'download_expire_time' => "Download Gültigkeitsdauer:",

'seconds' => "(Sekunden)",

'download_attempts' => "Download Versuche:",

'attempts_desc' => "(Anzahl Downloads die der Kunde machen kann.)",

'styles_misc' => "Styles &amp; Misc",

'default_language' => "Standardsprache:",

'store_skin' => "Shop Skin:",

'no_cats_per_row' => "Anzahl Kategorien pro Reihe:",

'dir_symbol' => "Verzeichnis Symbol:",

'prods_per_page' => "Anzahl Artikel pro Seite:",

'precis_length' => "Artikellänge:",

'chars' => "(Zeichen)",

'no_sale_items' => "Anzahl Artikel in Sonderangebote:",

'no_pop_prod' => "Anzahl Artikel in Beliebte Artikel:",

'email_name' => "Email Name:",

'email_name_desc' => "(Dies ist der Absendername von Shopemails.)",

'email_address' => "Email Adresse:",

'email_address_desc' => "(Dies wird als eMailadresse in Shopemails verwendet.)",

'mail_method' => "Email Sendemethode:",

'mail_recommended' => "(SMTP empfohlen)",

'max_upload_size' => "Max Upload Dateigrösse:",

'under_x_recom' => "(Unter 2048Kb empfohlen)",

'max_sess_length' => "Max Sitzungslänge:",

'db_settings' => "Datenbankeinstellungen",

'db_host' => "Datenbank Hostname:",

'db_username' => "Datenbank Username:",

'db_password' => "Datenbank Passwort:",

'db_name' => "Datenbank Name:",

'db_prefix' => "Datenbank Prefix:",

'gd_settings' => "GD Einstellungen",

'gd_ver' => "GD Version:",

'gd_thumb_size' => "Thumbnail Grösse:",

'gd_gif_support' => "Erlauben Sie GIF-Unterstützung:  (überprüfen Sie bitte, daß dieses auf Ihrem Bediener ermöglicht wird)",

'gd_max_img_size' => "Max Bildergrösse:",

'gd_img_quality' => "GD Bilderqualität:",

'recom_quality' => "(60 - 80 empfohlen)",

'stock_settings' => "Lagereinstellungen",

'use_stock' => "Lagerbestand anzeigen?",

'allow_out_of_stock_purchases' => "Verkäufe ohne Lagerbestand zulassen?",

'weight_unit' => "Gewichtseinheit:",

'time_and_date' => "Zeit &amp; Datum",

'time_format' => "Zeitformat:",

'time_format_desc' => "(Siehe <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Time Offset:",

'time_offset_desc' => "(Sekunden - Für Server in anderen Zeitzonen)",

'date_format' => "Datumsformat:",

'date_format_desc' => "(Siehe <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Lokale Einstellungen",

'default_currency' => "Standardwährung",

'inc_tax_prices' => "Preis incl. Steuer?",

'sale_mode' => "Sonderverkaufsmodus:",

'percent_of_all' => "Prozent von allen Preisen",

'ind_sale_per_item' => "Verkaufspreis pro Artikel",

'sale_mode_off' => "Sonderverkaufsmodus Aus",

'sale_per_off' => "Sonderverkauf Prozent Aus:",

'sale_per_off_desc' => "(Prozent die von allen Preisen abgezogen werden)",

'diff_dispatch' => "Versand an andere als Rechnungsanschrift zulassen?",

'update_settings' => "Einstellungen aktualisieren",

'update_success' => "erfolgreich aktualisiert.",

'update_fail' => "wurde nicht aktualisiert.",

'add_success' => "erfolgreich hinzugefügt",

'add_fail' => "wurde nicht hinzugefügt.",

'delete_success' => "Erfolgreich gelöscht.",

'delete_failed' => "Löschen fehlgeschlagen.",

'currencies' => "Währungen",

'currency' => "Währung",

'currencies_desc' => "Bitte löschen, ändern oder fügen Sie Währungen unten hinzu:",

'c_code' => "Code",

'c_name' => "Name",

'c_value' => "Wert",

'symbol_left' => "Symbol Links",

'symbol_right' => "Symbol Rechts",

'decimal_places' => "Dezimalstellen",

'last_updated' => "Letzte Aktualisierung",

'c_status' => "Status",

'no_currencies' => "Keine Währungen in der Datenbank.",

'countries' => "Länder",

'country' => "Land",

'edit_countries_below' => "Bitte löschen, ändern oder fügen Sie Länder unten hinzu:",

'disable' => "Aus",

'enable' => "Ein",

'iso' => "ISO",

'iso_name' => "Name",

'iso3' => "ISO3",

'num_code' => "Num Code",

'action' => "Action",

'warn_del_country' => "Sind Sie sicher dass Sie dies löschen möchten? Alle Länder, Staaten und Gebiete werden gelöscht.",

'no_countries_in_db' => "Keine Länder in der Datenbank.",

'edit_counties' => "Bitte löschen, ändern oder fügen Sie Bundesländer/Gebiete/Staaten unten hinzu:",

'no_counties_in_db' => "Keine Bundesländer/Gebiete/Staaten in der Datenbank.",

'tax_Settings' => "Steuereinstellungen",

'edit_locale_below' => "Bitte ändern Sie Ihre örtlichen Einstellungen unten:",

'tax_only_to' => "Steuer NUR dem folgenden Gebiet zuweisen:",

'manage_tax_below' => "Verwalten Sie Ihre verschiedenen Steuertypen unten. Diese können den Artikeln individuell zugewiesen werden.",

'tax_class2' => "Steuergruppe",

'rate_per' => "Satz (%)",

'no_taxes_setup' => "Keine Steuersätze vorhanden.",

'tax' => "Steuer",

);



$lang['admin']['stats'] = array(

'store_stats' => "Shop Statistik",

'choose_view' => "Bitte wählen Sie die Statistik die Sie sehen möchten:",

'search_terms' => "Suchbegriffe",

'product_pop' => "Artikelpopularität",

'cust_online' => "Kunden Online",

'search_terms_order_by' => "Suchbegriffe (Nach Anzahl durchgeführter Suchen)",

'sorry_no_data' => "Leider keine Daten anzuzeigen.",

'product_pop_ordered_by' => "Artikelbeliebtheit  (Nach Aufrufen)",

'cust_active' => "Kunden die in den letzten 15min. aktiv waren",

'hash' => "#",

'customer' => "Kunden",

'location' => "Ort",

'sess_start_time' => "Startzeit Session",

'last_click_time' => "Zeit letzter Klick",

'sess_length' => "Sitzungsdauer",

'geust' => "Gast",

'signed_in' => "Eingeschrieben",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "WARUNG: Die Hauptkonfigurationsdatei 'includes/global.inc.php' ist nicht schreibgeschütz. Dies ist ein Risiko für Ihren Shop. Bitte ändern Sie die Einstellungen so bald wie möglich auf 0644 .",

'401' => "Error 401: Sie haben keine Rechte für Zugriff auf diese Seite. Bitte wenden Sie sich an einen der Super-User.",

'welcome_note' => "Willkommen im CubeCart Administrationsbereich",

'last_login' => "Letzter Login von ",

'by' => "von",

'failed' => "fehlgeschlagen.",

'store_overview' => "Shop Überblick:",

'version' => "Version:",

'visit_cc' => "Besuchen Sie den CubeCart Downloads Server",

'no_products' => "Anzahl Artikel:",

'no_customers' => "Anzahl Kunden:",

'img_upload_size' => "Grösse Bilderupload-Ordner:",

'no_orders' => "Anzahl Bestellungen:",

'quick_search' => "Schnellsuche:",

'order_no' => "Bestellnummer:",

'search_now' => "Jetzt Suchen",

'customer' => "Kunde:",

'login_failed' => "Login fehlgeschlagen! Benutzername oder Passwort falsch.",

'new_pass_sent' => "Ein neues Passwort wurde geschickt an",

'no_admin_sess' => "Keine Admin-Sitzung gefunden.",

'login_fail_2' => "Login fehlgeschlagen. Bitte versuchen Sie es erneut.",

'login_below' => "Bitte unten anmelden:",

'username' => "Benutzername:",

'password' => "Passwort:",

'request_pass' => "Passwort schicken lassen",

'login' => "Login",

'logout_failed' => "Logout fehlgeschlagen da derzeit keine Admin-Sitzung besteht.",

'reset_pass_email' => "Sehr geehrte(r) %s,

Sie oder jemand der sich als Sie ausgegeben hat, hat beantragt das Passwort zurückzusetzen.

Ihre neuen Zugangsdaten:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Benutzername: %s
Passwort: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Diese eMail wurde verschickt von %s/admin/requestPass.php\n

Senders IP Adresse: %s",

'pass_reset_failed' => "Passwort reset fehlgeschlagen.",

'enter_email_below' => "Bitte geben Sie Íhre Emailadresse an:",

'email_address' => "Email Adresse:",

'send_pass' => "Sende Passwort",

);



$lang['admin']['nav'] = array(

'permission_error' => "Die haben hierfür keine Zugriffsrechte.",

'navigation' => "Navigation",

'admin_home' => "Admin Home",

'store_home' => "Shop Home",

'store_config' => "Shop Konfiguration",

'gen_settings' => "Allgem.Einstellungen",

'taxes' => "Steuern",

'countries_zones' => "Länder &amp; Gebiete",

'currencies' => "Währungen",

'modules' => "Module",

'shipping' => "Versand",

'gateways' => "Gateways",

'affiliates' => "Affiliates",

'catalog' => "Katalog",

'view_products' => "Artikel anzeigen",

'add_product' => "Artikel hinzufügen",

'product_options' => "Artikel Optionen",

'view_categories' => "Kategorien anzeigen",

'add_categories' => "Kategorie hinzufügen",

'customers' => "Kunden",

'view_customers' => "Kunden anzeigen",

'email_customers' => "Email Kunden",

'orders' => "Bestellungen",

'file_manager' => "Datei Manager",

'manage_images' => "Bilder verwalten",

'upload_images' => "Bilderupload",

'statistics' => "Statistiken",

'view_stats' => "Statistiken anzeigen",

'documents' => "Dokumente",

'homepage' => "Homepage",

'site_docs' => "Seitendokumente",

'misc' => "Misc",

'server_info' => "Server Info",

'admin_users' => "Admin Users",

'administrators' => "Administratoren",

'admin_sessions' => "Admin Sitzungen",

);



$lang['admin']['incs'] = array(

'administration' => "Administration",

'logged_in_as' => "Angemeldet als:",

'logout' => "Logout",

'change_pass' => "Passwort ändern",

'error_editing' => "Fehler beim ändern. Daten waren kein Array.",

'config_updated' => "Konfiguration aktualisiert. Stellen Sie sicher dass die Dateizugriffsrechte richtig sind.",

'cant_write' => "Datei '%s' konne nicht zum schreiben geöffnet werden. Versuchen Sie den CHMOD Wert auf 0777 zu setzen. Denken Sie daran ihn anschliessend wieder auf 0644 zu setzen!",

'db_config_updated' => "Konfiguration Aktualisierte",

'db_cant_write' => "Aktualisiertes Verlassen!",

'select_above' => "Oben auswählen",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Ja";

$lang['front']['no'] = "Nein";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Nützliche Links",

'reg_and_checkout' => "Registrieren &amp; Checkout",

'cont_shopping' => "Einkauf fortsetzen",

'edit_del_add' => "Lieferanschrift ändern",

'edit_inv_add' => "Rechnungsanschrift ändern",

'empty_cart' => "Einkaufswagen leeren",

'prev_page' => "Vorherige Seite",

'homepage' => "Homepage",

'shop_by_cat' => "Shop nach Kategorie",

'sale_items' => "Sonderangebote",

'save' => "Speichern",

'currency' => "Währung",

'information' => "Information",

'products' => "Artikel:",

'categories' => "Kategorien:",

'prices' => "Preise:",

'language' => "Sprache",

'mailing_list' => "Mailing List",

'subscribe_below' => "Bestellen Sie unseren Newsletter:",

'email' => "Email:",

'join_now' => "Jetzt anmelden",

'already_subscribed' => "Die email-Adresse %s hat unseren Newsletter schon bestellt. Bitte melden Sie sich an um die Bestellung zu löschen.",

'enter_valid_email' => "Bitte geben Sie eine gültige email-Adresse an.",

'added_to_mail' => "Vielen Dank, %s wurde zu unserer Mailinglist hinzugefügt.",

'subscribed_to_mail' => "Vielen Dank, %s wurde zu unserer Mailinglist hinzugefügt.",

'popular_products' => "Beliebte Artikel",

'featured_prod' => "Besonderer Artikel",

'sale_items' => "Sonderangebote",

'search_for' => "Suchen nach:",

'go' => "Los",

'welcome_back' => "Schön Sie wieder zu sehen",

'logout' => "Logout",

'your_account' => "Ihr Konto",

'welcome_guest' => "Willkommen",

'login' => "Login",

'register' => "Registrieren",

'shopping_cart' => "Einkaufswagen",

'basket_empty' => "Ihr Warenkorb ist leer.",

'items_in_cart' => "Artikel im Wagen:",

'total' => "Gesamt:",

'view_basket' => "Warenkorb anzeigen",

);



$lang['front']['account'] = array(

'your_account' => "Ihr Konto",

'personal_info' => "Persönliche Infos",

'order_history' => "Bestellhistorie",

'change_password' => "Passwort ändern",

'newsletter' => "Newsletter",

'login_to_view' => "Sie müssen Sich anmelden um diese Seite zu sehen.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Das eingegebene Passwort war falsch.",

'conf_not_match' => "Das Bestätigungspasswort war nicht mit dem ersten Passwort identisch.",

'change_pass' => "Passwort ändern",

'password_updated' => "Vielen Dank, Ihr Passwort wurde geändert.",

'change_pass_below' => "Bitte ändern Sie Ihr Passwort:",

'old_pass' => "Altes Passwort:",

'new_pass' => "Neues Passwort:",

'confirm_pass' => "Passwort bestätigen:",

'submit' => "Senden",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Sorry",

'expired' => "Ihr Downloadlink ist abgelaufen oder ungültig.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Passwort vergessen",

'email' => "Email:",

'send_pass' => "Sende Passwort",

'reset_email' => "Sehr geehrte(r) %s %s,

Sie oder jemand der sich als Sie ausgegeben hat, hat beantragt Ihr Passwort zurückzusetzen. Ihre neuen Zugangsdaten:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Benutzername: %s
Passwort: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
Um sich einzuloggen klicken Sie auf folgenden Link:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Diese email wurde verschickt von %s
Senders IP Adresse: %s",

'new_pass_sent' => "Ein neues Passwort wurde verschickt an %s.",

'email_not_found' => "Diese email-Adresse wurde leider nicht gefunden.",

'enter_email' => "Bitte geben Sie Ihre Login-Emailadresse ein um ein temporäres Passwort zugeschickt zu bekommen:",

);



$lang['front']['gateway'] = array(

//////////////////////////////////////////
// START: Added in 3.0.6 by Sir William
//////////////////

'admin_email_body_1' => "Dear CubeCart Store Administrator,

New Order Number: %s placed on %s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Name: %s
E-Mail: %s
Subtotal: %s
Postage & Packaging: %s
Tax: %s
Grand Total: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Invoice Address:
%s
%s
%s
%s
%s
%s
%s

Shipping Address:
%s
%s
%s
%s
%s
%s
%s

Payment Method: %s
Shipping Method: %s",

'admin_email_body_2' => "\nCustomer comments: %s\n",

'admin_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Order Inventory:\n",

'admin_email_body_4' =>"Product: %s\n",

'admin_email_body_5' => "Options: %s\n",

'admin_email_body_6' => "Quantity: %s
Product Code: %s
Price: %s\n\n",

//////////////////////////////////////////
// END: Added in 3.0.6 by Sir William
//////////////////

'newOrderMsg' => "Ein Kunde hat gerade den Auftrag %s, diesen Auftrag ansehen gelassen folgen bitte der Verbindung unten: \n\n %s",

'newOrderSubj' => "Neuer SpeichercAuftrag Setzte",

'payment' => "Bezahlung",

'cart' => "Einkaufswagen",

'address' => "Adresse",

'payment' => "Bezahlung",

'complete' => "Fertig",

'fill_out_below' => "Bitte füllen Sie folgendes Formular aus:",

'transferring' => "Weiterleitung zur Bezahlung",

'go_now' => "Jetzt gehen!",

'continue' => "Fortsetzen",

'choose_method' => "Bitte wählen Sie Ihre bevorzugte Bezahlungsart:",

'your_comments' => "Ihre Anmerkungen:",

'none_configured' => "Leider wurden keine Bezahlungsarten konfiguriert.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Login",

'username' => "Benutzername:",

'password' => "Passwort:",

'remember_me' => "Logindaten merken?",

'forgot_pass' => "Passwort vergessen?",

'login_success' => "Sie haben sich erfolgreich angemeldet.",

'already_logged_in' => "Sie sind bereits angemeldet.",

'login_failed' => "Login fehlgeschlagen!",

'login_below' => "Bitte unten anmelden:",

);



$lang['front']['index'] = array(

'latest_products' => "Neueste Artikel",

);



$lang['front']['logout'] = array(

'logout' => "Logout",

'session_destroyed' => "Ihre Sitzung wurde beendet.",

'no_session' => "Keine Sitzung zum beenden gefunden. Sie scheinen irrtümlich hier gelandet zu sein.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Newsletter Einstellungen",

'prefs_updates' => "Ihre Newslettereinstellungen wurden aktualisiert.",

'edit_prefs_below' => "Bitte ändern Sie Ihre Newslettereinstellungen hier:",

'subscribe' => "In Mailingliste eintragen?",

'email_format' => "Email Format:",

'plain_text' => "Plain Text",

'html' => "HTML",

'html_abbr' => "Hypertext Markup Language",

'update' => "Update",

'login_required' => "Sie müssen sich anmelden um diese Seite zu sehen.",

);



$lang['front']['noShip'] = array(

'sorry' => "Sorry",

'desc' => "Wir können unsere Artikel leider nicht in Ihr Land verschicken.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Sorry",

'desc' => "Wir können Sendungen mit dem Gesamtgewicht Ihrer Bestellung nicht verschicken.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Telefonnummern dürfen nur numerische Zeichen enthalten.",

'complete_all' => "Bitte stellen Sie sicher dass alle Pflichtfelder ausgefüllt sind.",

'email_invalid' => "Bitte geben Sie eine gültige eMail-Adresse ein.",

'numeric_only' => "Telefonnummern dürfen nur numerische Zeichen enthalten.",

'email_inuse' => "Diese eMail-Adresse wird schon verwendet.",

'update_email' => "Sehr geehrte(r) %s %s,

Sie erhalten diese eMail als Bestätigung für die erfolgreiche Änderung Ihrer persönlichen Daten. Wenn Sie den Eindruck haben, dass Ihr Konto von einer fremden Person geändert wurde, nehmen Sie bitte dringend Kontakt mit uns auf.\n\n

Diese eMail wurde verschickt von %s\n

Senders IP Adresse: %s",

'update_email_subj' => "Persönliche Daten aktualisiert",

'personal_info' => "Persönliche Informationen",

'account_updated' => "Ihr Konto wurde aktualisiert. Sie können dieses unten nochmals ändern wenn Sie möchten.",

'edit_below' => "Bitte ändern Sie Ihre persönlichen Daten hier:",

'title' => "Titel:",

'first_name' => "Vorname:",

'last_name' => "Nachname:",

'email' => "Email:",

'address' => "Adresse:",

'town' => "Ort:",

'county' => "Bundesland:",

'postcode' => "Postleitzahl:",

'country' => "Land:",

'phone' => "Telefon:",

'mobile' => "Handy:",

'update_account' => "Kontoaktualisierung",

'login_required' => "Sie müssen sich anmelden um diese Seite zu sehen.",

);



$lang['front']['reg'] = array(

'fill_required' => "Bitte stellen Sie sicher, dass alle Pflichtfelder ausgefüllt wurden.",

'pass_not_match' => "Stellen Sie sicher, dass die Passwörter übereinstimmen.",

'enter_valid_email' => "Bitte geben Sie eine gültige eMail-Adresse ein.",

'enter_valid_tel' => "Telefonnummern dürfen nur numerische Zeichen enthalten.",

'email_in_use' => "Diese eMail-Adresse wird schon verwendet.",

'note_required' => "Bitte beachten Sie, dass alle Felder mit einem Stern (*) Pflichtfelder sind um Ihre Anmeldung zu bearbeiten.",

'express_reg' => "Express Registrierung",

'submit_and_cont' => "Senden &amp; Weiter",

'personal_details' => "Persönliche Daten",

'address' => "Adresse",

'title' => "Titel:",

'title_desc' => "(Herr/Frau)",

'first_name' => "Vorname:",

'address2' => "Adresse:",

'last_name' => "Nachname:",

'email_address' => "Email Adresse:",

'town' => "Ort:",

'phone' => "Telefon:",

'county' => "Bundesland:",

'mobile' => "Handy:",

'country' => "Land:",

'postcode' => "Postleitzahl:",

'security_details' => "Sicherheitsdetails",

'choose_pass' => "Passwort wählen:",

'conf_pass' => "Passwort bestätigen:",

'privacy_settings' => "Privacy Einstellungen",

'receive_emails' => "Ich möchte Shop-eMails bekommen",

'email_format' => "Email Format:",

'styled_html' => "Styled HTML",

'plain_text' => "Plain Text",

'tandcs' => "Nutzungsbedingungen",

'please_read' => "Bitte lesen Sie unsere",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "Sehr geehrte(r) %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Um diesen Artikel zu sehen klicken Sie auf folgenden Link:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Diese email wurde verschickt von %s
Senders IP Adresse: %s",

'email_subject' => "Mitteilung vom: %s",

'tellafriend' => "Einem Freund mitteilen",

'message_sent' => "Danke, Ihre Mitteilung wurde verschickt an <strong>%s</strong> über '%s'. Wenn Sie diese an einen weiteren Freund verschicken möchten können Sie dies hier tun:",

'fill_out_below' => "Bitte senden Sie das Formular unten um einen Freund über '%s' zu informieren.",

'friends_name' => "Name des Freundes:",

'friends_email' => "Email des Freundes:",

'your_name' => "Ihr Name:",

'your_email' => "Ihre Email:",

'message' => "Mitteilung:",

'default_message' => "Ich habe dies gefunden '%s' und dachte es könnte für dich interessant sein.",

'send' => "Senden",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Abmelden",

'email' => "Email:",

'go' => "Los",

'enter_valid_email' => "Bitte geben Sie eine gültige eMail-Adresse an.",

'email_removed' => "Danke, <strong>%s</strong> wurde aus unserer Mailingliste gelöscht.",

'email_not_found' => "<strong>%s</strong> wurde in unserer Mailingliste nicht gefunden oder wurde bereits gelöscht.",

'enter_email_below' => "Bitte geben Sie unten Ihre eMail-Adresse an um sich aus der Mailingliste auszutragen:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Ergebnisse suchen",

'sale_items' => "Sonderangebote",

'image' => "Bild",

'description' => "Beschreibung",

'price' => "Preis",

'products_in' => "Artikel in:",

'buy' => "Kaufen",

'more' => "Mehr",

'out_of_stock' => "Ausverkauft",

'no_products_match' => "Sorry, keine Artikel passen zur Abfrage:",

'no_prods_in_cat' => "In dieser Kategorie gibt es keine Artikel.",

);



$lang['front']['viewDoc'] = array(

'error' => "Fehler",

'does_not_exist' => "Dieses Dokument existiert nicht.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Bestellnummer:",

'customer_info' => "Kunden Info:",

'invoice_address' => "Rechnungsanschrift:",

'delivery_address' => "Lieferanschrift:",

'na' => "n/a",

'customer_comments' => "Kundenanmerkungen:",

'order_summary' => "Bestellzusammenfassung:",

'product' => "Artikel",

'product_code' => "Artikel Code",

'quantity' => "Menge",

'price' => "Preis",

'download_here' => "Download hier",

'review_below' => "Bitte kontrollieren Sie folgende Bestellung:",

'order_date_time' => "Bestelldatum/-zeit:",

'payment_method' => "Zahlungsart:",

'ship_method' => "Versandart:",

'subtotal' => "Zwischensumme:",

'total_tax' => "Steuer:",

'shipping' => "Versand:",

'grand_total' => "Gesamtsumme:",

'order_not_found' => "Diese Bestellnummer wurde nicht gefunden.",

'login_required' => "Sie müssen sich anmelden um diese Seite zu sehen.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Ihre Bestellungen",

'orders_listed_below' => "Alle Bestellungen dieses Kontos finden Sie unten:",

'order_no' => "Bestellnummer",

'status' => "Status",

'date_time' => "Datum/Zeit",

'action' => "Action",

'view' => "Ansehen",

'no_orders' => "Wir haben keine Aufzeichungen dass eine Bestellung bei uns aufgegeben wurde. Wenn Sie denken, dass es sich hierbei um einen Fehler handelt wenden Sie sich bitte an uns.",

'login_required' => "Sie müssen sich anmelden um diese Seite zu sehen.",

);



$lang['front']['viewProd'] = array(

'product' => "Artikel",

'product_info' => "Artikelinformationen",

'price' => "Preis:",

'product_code' => "Artikel Code:",

'tellafriend' => "Einem Freund mitteilen",

'quantity' => "Menge:",

'more_images' => "[+] Mehr Bilder",

'add_to_basket' => "Zum Warenkorb hinzufügen",

'location' => "Ort:",

'no_instock' => "Im Lager:",

'instock' => "Im Lager",

'out_of_stock' => "Ausverkauft",

'prod_opts' => "Artikeloptionen:",

'prod_not_found' => "Dieser Artikel wurde nicht gefunden.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Ihr Einkaufswagen ist derzeit leer.",

'allready_customer' => "Bereits Kunde?",

'login_below' => "Bitte unten anmelden:",

'username' => "Benutzername:",

'password' => "Passwort:",

'remember_me' => "Login-Daten merken?",

'login' => "Login",

'forgot_pass_q' => "Passwort vergessen?",

'need_register' => "Registrieren?",

'express_register' => "Unsere Expressregistrierung ist schnell und einfach.",

'reg_and_cont' => "Registrieren &amp; Weiter",

'cont_shopping_q' => "Weiter einkaufen?",

'cont_shopping' => "Weiter einkaufen",

'cont_browsing' => "Um als Gast ohne Login weiterzumachen unten klicken. N.B: Es wird nicht möglich sein den Vorgang ohne Registrierung abzuschliessen.",

);





$lang['front']['cart'] = array(

'free_shipping' => "Kostenloser Versand",

'view_cart' => "Warenkorb anzeigen",

'cart' => "Einkaufswagen",

'address' => "Adresse",

'payment' => "Zahlung",

'complete' => "Fertig",

'add_more' => "Weitere Artikel hinzufügen? Artikel Code eingeben:",

'add' => "Hinzufügen",

'qty' => "Menge",

'product' => "Artikel",

'code' => "Code",

'stock' => "Lager",

'price' => "Preis",

'line_price' => "Pos.Preis",

'delete' => "Löschen",

'remove' => "Artikel entfernen",

'invoice_address' => "Rechnungsanschrift",

'delivery_address' => "Lieferanschrift",

'title' => "Titel:",

'first_name' => "Vorname:",

'last_name' => "Nachname:",

'address2' => "Adresse:",

'town' => "Ort:",

'county' => "Bundesland:",

'postcode' => "Postleitzahl:",

'country' => "Land:",

'edit_invoice_address' => "Rechnungsanschrift ändern",

'edit_delivery_address' => "Lieferanschrift ändern",

'stock_warn' => "Sie haben mehr Artikel bestellt als wir derzeit vorrätig haben. Ihre Bestellung wird verzögert bis wieder neue Artikel an Lager sind.",

'amount_capped' => "Leider können wir keine Artikel ausliefern die über unseren Lagerbestand hinausgehen.<br />Die Menge dieses Artikel ist begrenzt auf",

'na' => "n/a",

'shipping' => "Versand:",

'tax' => "Steuer:",

'subtotal' => "Zwischensumme:",

'cart_total' => "Gesamtsumme:",

'if_changed_quan' => "(wenn Sie Mengen geändert haben)",

'update_cart' => "Warenkorb aktualisieren",

'continue' => "Weiter",

'cart_empty' => "Ihr Einkaufskorb ist derzeit leer.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Bestätigungsseite",

'cart' => "Warenkorb",

'address' => "Adresse",

'payment' => "Zahlung",

'complete' => "Fertig",

'order_success' => "Danke, Ihre Bestellung war erfolgreich! Wir freuen uns auf Ihren nächsten Besuch.",

'order_fail' => "Sorry, Bestellung fehlgeschlagen!",

'try_again_desc' => "Sie können versuchen Ihren Warenkorbinhalt erneut zu bestellen:",

'try_again' => "Nochmal versuchen",

'request_login' => "Sie müssen sich anmelden um diese Seite zu sehen.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Sehr geehrte(r) %s,

Vielen Dank für Ihre Bestellung Nr.: %s vom %s

Die Bestellung war erfolgreich und wir werden Ihre Lieferung so bald wie möglich versenden.

~~~~~~~~~~~~~~~~~~~~~~~~~~
Name: %s
Zwischensumme: %s
Porto & Versand: %s
Steuer: %s
Gesamtsumme: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Rechnungsanschrift:
%s
%s
%s
%s
%s
%s
%s

Lieferanschrift:
%s
%s
%s
%s
%s
%s
%s

Zahlungsart: %s
Versandart: %s",

'inv_email_body_2' => "\nIhre Anmerkungen: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Bestellungsübersicht:\n",

'inv_email_body_4' =>"Artikel: %s\n",

'inv_email_body_5' => "Optionen: %s\n",

'inv_email_body_6' => "Menge: %s
Artikel Code: %s
Preis: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Bestellnummer: ",

'digi_email_body1' => "Sehr geehrte(r) %s,

Vielen Dank für Ihre Bestellung Nr.: %s vom %s

Unten finden Sie die Links die Sie benötigen um die bestellten Artikel herunterzuladen.

WICHTIG diese Links sind gültig bis %s und Sie haben %s Versuche um Sie zu downloaden. Falls es zu Problemen kommt, wenden Sie sich unter Angabe Ihrer Bestellnummer an uns.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
DOWNLOAD LINK:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Downloads Zugang: ",

);



$lang['misc'] = array(

'pages' => " Seiten ",
//////////////////////////////////////////
// Added in 3.0.3
//////////////////

'client_browser' => "Client Browser:",

'server_software' => "Server Software:",

'perofOrderSub' => " % of Order Subtotal",

'freeForOrdOver' => "Free for Orders Over",

'freeShipping' => "Free Shipping",

'byWeight1stClass' => "By Weight (1st Class)",

'1stClass' => "(1st Class)",

'byWeight2ndClass' => "By Weight (2nd Class)",

'2ndClass' => "(2nd Class)",

'flatRate' => "Flat Rate",

'free' => "Free",

'national' => "National",

'international' => "International",

'byCategory' => "By Category",

'perItem' => "Per Item",

'nextDayEarlyAm' => "Next Day Air Early AM",

'nextDayAir' => "Next Day Air",

'nextDayAirSaver' => "Next Day Air Saver",

'2ndDayEarlyAm' => "2nd Day Air Early AM",

'2ndDayAir' => "2nd Day Air",

'3daySelect' => "3 Day Select",

'ground' => "Ground",

'canadaStandard' => "Canada Standard",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Invoice to",

'deliverTo' => "Deliver to",

'postalOrderFor' => "Postal Order for",

'orderOf' => "Order of",

'orderID' => "Order ID:",

'product' => "Product",

'code' => "Code",

'qty' => "Qty",

'price' => "Price",

'shippingMethod' => "Shipping Method:",

'subtotal' => "Subtotal:",

'totalTax' => "Total Tax:",

'totalShipping' => "Total Shipping:",

'grandTotal' => "Grand Total:",

'payByCheck' => "Pay by check",

'payTo' => "Please make cheques payable to",

'payByCard' => "Pay by Card",

'cardType' => "Card Type:",

'cardNo' => "Card No:",

'3-4DigiId' => "3-4 Digit ID:",

'expiryDate' => "Expiry Date:",

'issueDate' => "Issue Date:",

'issueNo' => "Issue Number:",

'signature' => "Signature:",

'payByTransfer' => "Pay by Bank Transfer",

'bankName' => "Bank Name:",

'accountName' => "Account Name:",

'sortCode' => "Sort Code:",

'accountNo' => "Account Number:",

'swiftCode' => "Swift Code:",

'bankAddress' => "Bank Address:",

'thanks' => "Thank you for shopping with us!",

'postalAddress' => "Postal address:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "Pending",

'2' => "Processing",

'3' => "Completed",

'4' => "Declined",

'5' => "Fraudulent",

);

$lang['admin']['cats'] = array (

'delete_success' => "Category language deleted successfully.",

'delete_fail' => "Delete failed.",

'update_fail' => "Update failed.",

'update_success' => "Updated successfully.",

'add_success' => "added successfully.",

'add_fail' => "Failed to add category language.",

'site_cats_other_lang' => "Categories - (Other Languages)",

'site_cat_other_lang' => "Category - (Other Languages)",

'cat_name' => "Category Name:",

'language' => "Language:",

'update_cat' => "Update Category",

'save_cat' => "Save Category",

'current_cat_list' => "Below is a list of all the current category languages. These can be edited and/or deleted at any time.",

'cat_name2' => "Category Name",

'action' => "Action",

'no_site_cats' => "This category name nas not been translated yet.",

);

//////////////////////////////////////////
// START: Added in 3.0.6
//////////////////
$lang['front']['popup'] = array (

'thumb_alt' => "Click for Larger Image",

'large_alt' => "Full Image View",

);

$lang['install'] = array (

'stage2Name' => "Check File Permissions",

'stage1Error' => "You must agree to our License Agreement",

'stage3Name' => "Build Config File &amp; Install Database Tables",

'enterDBHostname' => "Please enter the database hostname",

'enterDBName' => "Please enter the database name",

'enterDBUsername' => "Please enter the database username",

'enteradminUsername' => "Please enter your desired admin username",

'enteradminPassword' => "Please enter an admin password",

'passwordMatch' => "Please make sure your passwords match",

'enterValidEmail' => "Please enter a valid email address",

'enterFullname' => "Please enter your full name",

'storeOfflineText' => "The store is currently offline. Please visit again soon.",

'configWriteError' => "The config file could not be written.",

'stage4Name' => "Set Back File Permissions",

'stage5Name' => "Installation Complete",

'stage1Name' => "License Agreement",

'agreeToLicense' => "Please click the checkbox to continue.",

'installation' => "CubeCart Installation v%s",

'stepStatus' => "Step %s out of %s",

'step' => "Step",

'iagreetoLic' => "I have read understood and agree to the licence agreement",

'checkFilePerms' => "Please make sure the following file permissions are set correctly:",

'fileFolder' => "File / Folder",

'currentPermission' => "Current Permission",

'requiredPermission' => "Required Permission",

'na' => "n/a",

'congratsFilePerms' => "Congratulations. File permissions are set correctly.",

'filePermsNotCorrect' => "Please ensure the file permission are set correctly to continue.",

'dbSettings' => "Database Settings",

'fromProvider' => "(If you are unsure these should be available from your web hosting provider.)",

'dbhostname' => "Database Hostname:",

'eg' => "e.g.", // as in example

'dbName' => "Database Name:",

'dbUsername' => "Database Username:",

'dbPassword' => "Database Password:",

'dbPrefix' => "Database Prefix:",

'dbPrefixOptional' => "(Optional - Used for multiple installations on one database)",

'dropifExist' => "Drop tables if they exist:",

'previousInstallLost' => "With this checked any previous install with same tables prefix on this database will be lost. (Default is checked)",

'localeSettings' => "Locale Settings",

'storeCountry' => "Store Country:",

'US' => "United States of America",

'UK' => "United Kingdom",

'EU' => "Europe",

'currenciesAccord' => "This will setup the currencies and other settings accordingly.",

'help' => "Help",

'administratorSettings' => "Administrator Configuration Settings",

'adminSetDesc' => "(These details are used to access the admin control panel of your store)",

'username' => "Username:",

'password' => "Password:",

'confPass' => "Confirm Password:",

'emailAddress' => "Email Address:",

'fullName' => "Full Name:",

'skin' => "Skin",

'clickForLarger' => "Click for Larger View",

'changedAnytime' => "(This can be changed at anytime)",

'classic' => "Classic (Fixed Width)",

'legend' => "Legend (Fixed Width)",

'killer' => "Killer (100% width)",

'advancedSettings' => "Advanced Settings",

'leaveIfUnsure' => "(Leave these if you are unsure)",

'storeURL' => "Store URL:",

'serverRoot' => "Server Root Directory:",

'siteRootRel' => "Site Root Relative Path:",

'gdVersion' => "GD Version:",

'phpinfoLink' => "View <a href='info.php' target='_blank'>phpinfo()</a><br />(Opens in new window)",

'none' => "None",

'clickLink' => "Click the phpinfo() link to check your server config.",

'filepermsBack' => "Please make sure the following file permissions are set back correctly:",

'congratulations' => "Congratulations! Your store has been installed successfully.",

'congratulationsSub' => "Please select a destination. We recommend you start by logging into your admin control panel to configure your store settings.",

'adminHomepage' => "Admin Homepage",

'storeHomepage' => "Store Homepage",

'important' => "IMPORTANT:",

'deleteInstall' => "Your store will not function until the install directory has been deleted.",

'tryAgain' => "Try Again",

'contToStep' => "Continue to Step %s", // Continue to Step x 

'closeWindow' => "Close Window",

'prevPage' => "Previous Page",

'clicktoClose' => "Click to Close",

'chooseLang' => "Choose Language:",

'adminConfSettings' => "Administrator Configuration Settings",

'adminConfSettingsDesc' => "<p>The administrators control panel is an area where you have complete control over your store, from the products you sell to management of orders. To access the administrators control panel of your store you are required to setup one user on installation. This uses will be a &quot;Super User&quot; which means they have complete control over the store and its core settings.</p>
<p>If you wish to add other administrators after the installation, this can be achieved from the admin control panel. You can even grant them specific permissions to access certain areas of the store.</p>",

'advancedSettings' => "Advanced Settings",

'advancedSettingsDesc' => "<p>These settings are for advanced users. Please only change them if you are an experienced server administrator or developer. </p>
<p>To determine your GD version click in the link <a href='../info.php' target='_blank'>phpinfo()</a>. Locate the section titled &quot;GD&quot; this will say your GD version as 1.x.x or 2.x.x. If you do not have any mention of GD please select &quot;None&quot;. </p>
<p><strong>Why do I get the error message &quot;Call to undefined function: imagecreatefromjpg()&quot;?<br />
  </strong>This is because your web server is not configured to have GD enabled. To run CubeCart GD version 1 or above is required. Please contact your host and ask them nicely to enable it for you but you must remember that they are not obliged to do this for you. If you can't use GD either seek an alternative hosting company or set your GD version to be &quot;None&quot;.</p>",
'mysqlDBSettings' => "MySQL Database Settings",

'mysqlDBSettingsDesc' => "<p>To run CubeCart on your server you are required to have one MySQL database for it to store information such as your product and customer details. If your are attempting to install CubeCart on a shared (virtual) hosting environment then your hosting provider should be able to provide you with the information required for this stage of the install process. This information should include database name, username, password and the hostname. Sometimes you will find that you can setup and manage your MySQL database(s) from your hosting control panel. If however you are installing CubeCart on a testing machine or a dedicated server you may need to consult the <a href='http://dev.mysql.com/doc/mysql/en/index.html' target='_blank'>MySQL manual</a>. </p>
<p><strong>What is the database prefix used for?</strong>
<br />
The CubeCart installation script will create tables within your MySQL database which are essential for it to function. If you wish to install many different stores and you only have one database, these tables will have to be distinguished from each other somehow. This is achieved by putting a prefix on the front of each database table for each shop.</p>",

'selectOs' => "Please select your servers operating system:",

'permsMac' => "Setting File Permissions on a Macintosh Server",

'permsWin' => "Setting File Permissions on a Windows Server",

'permsWinDesc' => "Windows servers do not require file permissions to be changed. Please progress to the next step as nothing needs to be done.",

'permsLinux' => "Setting File Permissions on a Linux/Unix Server",

'permsLinuxDesc' => "<p>Start up  your  favourite <abbr title='File Transfer Protocol'>FTP</abbr> software or the one you used to upload CubeCart to your web server. We recommend <a href='http://www.smartftp.com' target='_blank'>SmartFTP</a> or <a href='http://filezilla.sourceforge.net/' target='_blank'>FileZilla</a>. (Screenshots are taken from SmartFTP)</p>
<p><strong>1. Locate the file that requires a change of permission and right click it and select 'CHMOD'.  </strong></p>
<p align='center'><img src='../images/smartFTPSel.gif' alt='' width='309' height='427' title='' /></p>
<p><strong>2. Type the required chmod value in the box marked &quot;Permissions&quot; and click 'Ok'. Alternatively you can click the checkboxes until you get the desired value and click &quot;Ok&quot;. </strong></p>
<p align='center'><img src='../images/typeChmodVal.gif' alt='' width='382' height='494' title='' /></p>
<p><strong>3. Your done! </strong></p>
<p><strong>Hint:</strong> If your FTP software disagrees with the value this install script says it is simply hit the refresh button on the FTP software and try again. </p>",

'installHelp' => "Install Help:",

'helpAdminSettings' => "Administrator Settings",

'helpAdvanced' => "Advanced Settings",

'helpDatabase' => "Database",

'helpFilePerms' => "File Permissions",

'opDectResultTrue' => "Your server operating system has been detected as",

'opDectResultFalse' => "Sorry, your server operating system could not be detected. Please make a selection below.",

'suggestedOS' => "Suggested Operating System",

'skinPreview' => "Skin Preview",

);
////////////////////
// Start of Modules

$lang['module']['directPayment'] = array (

'cc_info_title' => "Credit Card Information",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'card_type' => "Card Type:",

'card_number' => "Card Number:",

'expires' => "Expires:",

'mmyyyy' => "(mm/yyyy)",

'security_code' => "Security Code:",

'customer_info' => "Customer Information",

'email' => "E-Mail:",

'address' => "Address:",

'city' => "City:",

'state' => "State:",

'zipcode' => "Zip/Post Code:",

'country' => "Country:",

'optional' => "(Optional)",

);

$lang['module']['bluePay'] = array (

'cc_info_title' => "Credit Card Information",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'card_number' => "Card Number:",

'expires' => "Expires:",

'mmyy' => "(mm/yy)",

'security_code' => "Security Code:",

'customer_info' => "Customer Information",

'email' => "E-Mail:",

'address' => "Address:",

'city' => "City:",

'state' => "State:",

'zipcode' => "Zip/Post Code:",

'country' => "Country:",

'optional' => "(Optional)",

);

$lang['module']['eway'] = array (

'cc_info_title' => "Credit Card Information",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'card_number' => "Card Number:",

'expires' => "Expires:",

'mmyy' => "(mm/yy)",

'security_code' => "Security Code:",

'customer_info' => "Customer Information",

'email' => "E-Mail:",

'address' => "Address:",

'city' => "City:",

'state' => "State:",

'zipcode' => "Zip/Post Code:",

'country' => "Country:",

'optional' => "(Optional)",

);

$lang['module']['iPay'] = array (

'cc_info_title' => "Credit Card Information",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'card_number' => "Card Number:",

'expires' => "Expires:",

'mmyy' => "(mm/yy)",

'security_code' => "Security Code:",

'customer_info' => "Customer Information",

'email' => "E-Mail:",

'address' => "Address:",

'city' => "City:",

'state' => "State:",

'zipcode' => "Zip/Post Code:",

'country' => "Country:",

'optional' => "(Optional)",

);

$lang['module']['psiGate'] = array (

'cc_info_title' => "Credit Card Information",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'card_number' => "Card Number:",

'expires' => "Expires:",

'mmyy' => "(mm/yy)",

'security_code' => "Security Code:",

'customer_info' => "Customer Information",

'email' => "E-Mail:",

'address' => "Address:",

'city' => "City:",

'state' => "State:",

'zipcode' => "Zip/Post Code:",

'country' => "Country:",

'optional' => "(Optional)",

);

//////////////////////////////////////////
// END: Added in 3.0.6
//////////////////

//////////////////////////////////////////
// START: Added in 3.0.7
//////////////////

$lang['module']['PayJunction'] = array (

'cc_info_title' => "Credit Card Information",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'card_number' => "Card Number:",

'expires' => "Expires:",

'mmyy' => "(mm/yy)",

'security_code' => "Security Code:",

'customer_info' => "Customer Information",

'email' => "E-Mail:",

'address' => "Address:",

'city' => "City:",

'state' => "State:",

'zipcode' => "Zip/Post Code:",

'country' => "Country:",



);

//////////////////////////////////////////
// END: Added in 3.0.7
//////////////////

// now we need to include the config file 

include("config.inc.php");

?>