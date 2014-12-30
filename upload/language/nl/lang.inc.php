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
|	Dutch (NL) Language File by Rens Feijen v1.00 (rens@cube-it.nl) 12-07-2005
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'nl_NL');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Ja";

$lang['admin']['no'] = "Nee";

$lang['admin']['edit'] = "Bewerken";

$lang['admin']['delete'] = "Verwijderen";

$lang['admin']['delete_q'] = "Weet je zeker dat je dit wilt verwijderen ?";

$lang['admin']['add'] = "Toevoegen";

$lang['admin']['add_new'] = "Nieuwe toevoegen";

$lang['admin']['write'] = "Schrijven";

$lang['admin']['read'] = "Lezen";

$lang['admin']['na'] = "N/A"; // as in not applicable

$lang['admin']['all'] = "Alles";

$lang['admin']['remove'] = "Verwijderen";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Succesvol verwijderd.",

'del_failed' => "Verwijderen mislukt.",

'update_success' => "Succesvol geupdate.",

'update_fail' => "Update mislukt.",

'add_success' => "Succesvol toegevoegd.",

'add_failed' => "Mislukt om een gebruiker toe te voegen.",

'administrators_title' => "Administrators",

'current_users' => "Admin gebruikers.",

'id' => "Id",

'user_notes' => "Gebruikersnaam/ Aantekeningen",

'no_logins' => "Geen logins",

'super_user' => "Super Gebruiker?",

'email' => "Email",

'action' => "Bewerk",

'add_admin' => "Je kunt het formulier hieronder gebruiken om een admin toe te voegen.",

'full_name' => "Volledige naam:",

'username' => "Gebruikersnaam:",

'administrator' => "Administrator",

'email2' => "Email:",

'password' => "Wachtwoord:",

'pass_warn' => "(Vul hier alleen een wachtwoord in als je de huidige wil veranderen.)",

'make_super' => "Super gebruiker maken ?",

'notes' => "Aantekeningen:",

'permissions' => "Rechten",

'pass_updated' => "Wachtwoord veranderd.",

'pass_not_updated' => "Wachtwoord is niet veranderd.",

'change_pass_below' => "Verander uw wachtwoord hieronder:",

'old_pass' => "Oud wachtwoord:",

'new_pass' => "Nieuw wachtwoord:",

'confirm_pass' => "Herhaal wachtwoord:",

'perms_updated' => "Rechten veranderd.",

'set_perms' => "Verander hieronder de rechten van deze gebruiker.",

'section' => "Afdeling",

'nb_bulk' => "Om klanten te e-mailen moet je schrijfrechten hebben van de klanten.",

'admin_sessions' => "Admin Sessions",

'sessions_desc' => "Hieronder zie je wie als laatste via het admin gedeelte heeft ingelogd. Let hierop en zorg dat het wachtwoord regelmatig veranderd wordt.",

'login_id' => "Login ID",

'time' => "Tijd",

'ip_address' => "IP Adres",

'success' => "Succes",

);



$lang['admin']['categories'] = array (

'delete_success' => "Succesvol verwijderd.",

'delete_fail' => "Verwijderen is mislukt.",

'update_success' => "Succesvol veranderd.",

'update_fail' => "Categorie veranderen is mislukt.",

'add_success' => "Succesvol toegevoegd.",

'add_failed' => "Categorie toevoegen is mislukt.",

'categories' => "Categorieen",

'categories_desc' => "Hieronder vind u een lijst met alle categorien uit de database.",

'cat_name' => "Categorie naam",

'dir' => "Folder",

'image' => "Plaatje",

'no_products' => "Geen producten",

'action' => "Bewerk",

'cannot_del' => "Deze categorie kan niet verwijderd worden als er producten in staan.",

'no_cats_exist' => "Er bestaan geen categorieen in de database.",

'add_desc' => "Je kunt categorieen toevoegen met zoveel subcategorieen als je wilt, uploaden van nieuwe plaatjes, of plaatjes vervangen die al op de server staan.",

'category' => "Categorie",

'category_name' => "Categorie naam:",

'category_level' => "Categorie Level:",

'top_level' => "Top Level",

'image_optional' => "Plaatje: (Optioneel)",

'upload_new_image' => "Upload een nieuw plaatje",

'browse_existing' => "Zoek tussen bestaande plaatjes",

'ship_by_cat' => "Verzending per categorie",

'per_ship' => "Per bestelling:",

'per_item' => "Per artikel:",

'per_int_ship' => "Per Internationaal Transport:",

'per_int_item' => "Per Internationaal artikel:",

);



$lang['admin']['customers'] = array (

'customers' => "Klanten",

'delete_success' => "Succesvol verwijderd.",

'delete_fail' => "Verwijderen mislukt.",

'update_success' => "Klant succesvol aangepast.",

'update_fail' => "Klant aanpassen mislukt.",

'search_term' => "Zoek Term:",

'reset' => "Resetten",

'name' => "Naam",

'email' => "E-mail",

'invoice_add' => "Factuur adres",

'phone' => "Telefoonnummer",

'reg_ip' => "Registratie Datum / IP Adres",

'no_orders' => "Geen bestellingen",

'action' => "Bewerk",

'no_cust_exist' => "Er zitten nog geen klanten in de database.",

'edit_below' => "Bewerk de klant hieronder:",

'title' => "Titel",

'first_name' => "Voornaam:",

'last_name' => "Achternaam:",

'email2' => "E-mail:",

'address' => "Adres:",

'town' => "Woonplaats:",

'county' => "Provicie:",

'postcode' => "Postcode:",

'country' => "Land:",

'phone2' => "Telefoonnummer:",

'edit_customer' => "Klant bewerken",

'no_download_email' => "Er waren geen e-mails om op te halen.",

'email_customers' => "Email je klanten",

'create_email' => "Ontwerp je e-mail hieronder:",

'hint' => "Hint:",

'click_source' => "Je kunt er ook voor kiezen om een bestaand html document toe te voegen, klik op de source knop.",

'important' => "Belangrijk:",

'absolute_links' => "Zorg dat alle plaatjes gekoppeld zijn aan de domeinnaam (voor het bekijken van de email)en zorg ervoor dat er een afmeldlink in staat.",

'email_subject' => "E-mail onderwerp:",

'senders_name' => "Naam verzender:",

'senders_email' => "E-mail verzender:",

'return_path' => "Afzender:",

'bounce_desc' => "(Hier komen de e-mail op terug .)",

'send_test' => "Wilt u een test e-mail verzenden?",

'test_email_recip' => "Test E-mail Ontvanger:",

'send_email' => "Verzend e-mail",

'download_or_send' => "Please choose whether to download customers email addresses or to send a bulk email through this website.",

'please_choose' => "Maak uw keuze:",

'used_to_download' => "Dit wordt gebruikt om bulk e-mail te versturen met een mail programma.",

'bulk_to_subscribed' => "Dit geeft recht om een bulk e-mail te versturen naar mensen die zich hebben aangemeld voor de nieuwsbrief.",

'include_name' => "Naam toevoegen?",

'download_email' => "Download E-mail",

'send_email' => "Verzend E-mail",

'sending_complete' => "Succesvol verzonden",

'sending' => "E-mail verzenden",

'recipient' => "Ontvanger:",

'prev_page' => "Vorige pagina",

'page' => "Pagina:",

'bulk_finished' => "De bulk e-mail heeft succesvol zijn taak afgeron.",

'time_taken' => "Benodigde tijd:",

'recipients' => "Ontvangers:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Homepage was not updated please ensure file permissions of includes/static/home.inc.php are correct.",

'update_success' => "Beginpagina succesvol aangepast.",

'homepage' => "Beginpagina",

'enabled' => "Ingeschakeld:",

'enabled_desc' => "(Als het uitgeschakeld wordt wordt de standaard taal gekozen.)",

'language' => "Taal:",

'title' => "Titel:",

'use_rich_text' => "Gebruik een html editor om de beginpagina aan te passen. Bekijk eerst het voorbeeld en ga vervolgens de wijzigingen opslaan.",

'update_homepage' => "Beginpagina aanpassen",

'delete_success' => "Document succesvol verwijderd.",

'delete_fail' => "Verwijderen mislukt.",

'update_success' => "succesvol veranderd.",

'update_fail' => "is niet veranderd.",

'add_success' => "is succesvol toegevoegd.",

'add_fail' => "document toevoegen is mislukt.",

'site_docs_other_lang' => "Site documenten - (Andere talen)",

'use_rich_text' => "Gebruik een html editor om site documenten aan te passen of te bewerken of te vertalen .",

'site_doc_other_lang' => "Site Document - (Andere taal)",

'doc_name' => "Document Naam:",

'language' => "Taal:",

'update_doc' => "Verander document",

'save_doc' => "Bewaar document",

'current_doc_list' => "Hieronder is een lijst van alle documenten op de website. Je kunt er zoveel aanmaken als je wilt en kunnen ook altijd worden bewerkt.",

'doc_name2' => "Document Naam",

'action' => "Bewerk",

'no_site_docs' => "Er zitten geen website documenten in de database.",

'site_docs' => "Website documenten",

'site_doc' => "Website document",

'languages' => "Talen",

'no_docs' => "Er zitten geen website documenten in de database.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Image Browser",

'file' => "Bestand:",

'no_imgs' => "Geen plaatjes aanwezig . Sluit dit scherm en upload een plaatje.",

'preview' => "Voorbeeld:",

'ok' => "OK",

'cancel' => "Annuleren",

'prod_cat_use_img' => "Er zijn producten of categorien die gebruik maken van het plaatje '%s'.",

'continue_q' => "DOORGAAN MET VERWIJDEREN?",

'site_doc_use_img' => "Er zijn site documenten die gebruik maken van het plaatje: '%s'.",

'home_use_img' => "Het plaatje:  '%s' wordt gebruikt op de hoofdpagina.",

'gallery_use_img' => "Het plaatje  '%s' wordt gebruikt in een product/plaatjes gallerij.",

'image_deleted' => "Plaatje verwijderd.",

'delete_failed' => "Verwijderen mislukt.",

'image_manager' => "Plaatjes beheerder",

'delete_from_server' => "Hieronder kun je plaatjes van de server verwijderen.",

'img_click_prev' => "Plaatje (Klik voor een voorbeld)",

'size' => "Afmetingen",

'action' => "Bewerk",

'no_images_added' => "Er zijn geen plaatjes toegevoegd.",

'prev_file' => "Bekijk voorbeeld",

'close_window' => "Venster sluiten",

'no_image_selected' => "Er is geen plaatje geselcteerd om alvorens te bekijken.",

'file_uploader' => "Bestand Uploader",

'upload_image' => "Upload Plaatje",

'please_browse_img' => "Geef de locatie van uw plaatje aan:",

'file_too_big' => "Fout: %s is over %s",

'img_already_exists' => "Fout: %s bestaat al, probeer de bestandsnaam te veranderen.",

'upload_too_large' => "Fout: Je hebt het plaatje niet goed aangegeven of bet bestand was te groot (MAX 2 MB).",

'not_valid_mime' => "Fout: %s is niet een geldig formaat van een plaatje.",

'image_upload_success' => "Success: %s geupload.",

'back' => "&laquo; Terug",

);



$lang['admin']['misc'] = array (

'license_form' => "Licentie Formulier",

'write_error' => "Fout bij openen includes/global.inc.php om hem aan te passen. Probeer de bestandsrechten te wijzigen CHMOD value naar 0777. Vergeet hem niet terug te zetten naar 0644 ",

'try_again' => "Probeer nogmaals",

'purchase_cubecart' => "Purchase CubeCart:",

'invalid_key' => "Geen geldige key, of deze wordt al gebruikt.",

'purchase_license_key' => "Doorgeven Licentie Sleutel",

'run_unlicensed' => "Het schijnt dat je geen licentie hebt van CubeCart. Vul de Sleutel in om de Copyright te verwijderen.",

'license_key' => "Licentie Sleutel:",

'submit_key' => "Sleutel toevoegen",

'server_info' => "Server Info",

'ini_set_desc' => "The information below shows your current server environment settings. This contains all kinds of information  which may need to be changed if you are experiencing problems with CubeCart. N.B. If you have a shared server or virtual hosting it is likely that you will have limited access to modify settings. The</span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> function can often be used to override these settings.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "De status van de order is succesvol aangepast. Op dit moment kun je de klant een e-mail factuur sturen en toegang geven om digitale producten te downloaden. Om dit te doen ",

'click_here' => "Klik hier",

'send_invoice_desc' => "If status is changed from Pending to Processing you will get the option to send the customer an invoice receipt and grant access to digital products if applicable.",

'delete_success' => "Succesvol verwijderd.",

'delete_fail' => "Verwijderen is mislukt.",

'orders' => "Bestellingen",

'all_orders' => "Hieronder staan alle bestellingen die in de database zitten.",

'order_no' => "Bestelnummer",

'status' => "Status",

'date_time' => "Datum/Tijd",

'customer' => "Klant",

'ip_address' => "IP Adres",

'cart_total' => "Winkelwagen Totaal",

'action' => "Bewerk",

'no_orders_in_db' => "Er zitten geen bestellingen in de database.",

'order_email' => "Beste %s,\n\nDe status van uw Bestelnummer: %s zijn veranderd in %s\n\n",

'email_staff_comments' => "Ons personeel heft het volgende toegevoegd comments:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Deze e-mail was verzonden door %s",

'email_subj_status_change' => "Bestelstatus verandering:",

'order_no2' => "Bestelnummer:",

'print_packing_slip' => "Print Pakbon",

'customer_info' => "Klanten Info",

'invoice_address' => "Factuur adres:",

'delivery_address' => "Aflever adres:",

'contact_info' => "Contact Informatie:",

'tel' => "Telefoon:",

'mobile' => "GSM:",

'email' => "E-mail:",

'customer_comments' => "Vragen/Opmerkingen klant:",

'no_comments_left' => "Er zijn geen vragen of opmerkingen achter gelaten.",

'order_summary' => "Bestel geschiedenis",

'product' => "Product",

'code' => "Code",

'quantity' => "Hoeveelheid",

'price' => "Prijs",

'download_link' => "Download Link:",

'warn_reset' => "Ditz et het aantal downloads naar nul en zal de verloopdatum verlengen.",

'reset_link' => "Reset Link",

'download_stats' => " (%s) keer gedownload. Link Verloop Tijd %s",

'ip_address2' => "IP Address:",

'order_date_time' => "Bestel Datum/Tijd:",

'payment_method' => "Betaal methode:",

'ship_method' => "Verzend methode:",

'subtotal' => "Subtotaal:",

'total_tax' => "Totaal BTW:",

'shipping' => "Verzending:",

'grand_total' => " Totaal:",

'order_notfound' => "Bestelnummer  %s kon niet gevonden worden.",

'order_status' => "Bestelstatus",

'shipping_date' => "Verzenddatum:",

'ship_today' => "Vandaag verzenden",

'modify_status' => "Status bewerken:",

'staff_comments' => "Mededelingen personeel:",

'info_not_sent_customer' => "(Deze informatie is niet verzonden naar de klant!)",

'inform_customer' => "Informeer klant:",

'customer_notified' => "(Als dit aangevinkt wordt zal de klant op de hoogte wordne gehouden.)",

'comments_2_customer' => "Mededelingen aan de klant:",

'comments_2_customer_desc' => "(Ditz al worden toegevoegd aan de standaard e-mail welke gebruikt wordt om de klant te informeren over zijn/haar bestelling.)",

'save_order_status' => "Dewaar de status van de bestelling",

'paid_by' => "Betaald door:",

'delivered_to' => "Geleverd aan:",

'invoice_reciept_for' => "Factuur / Bon voor:",

'order_of_time' => "Je bestelling van",

'order_id' => "Bestel ID:",

'digi_goods_desc' => "Als je een digitaal product hebt besteld krijg je per e-mail de download instructies toegezonden.Deze is tevens ook toegankelijk vanuit het configuratie scherm waar je de complete controle hebt over je account.",

'thank_you' => "Bedankt dat je bij ons hebt gewinkeld!",

);



$lang['admin']['products'] = array (
// added in Beta
'show_featured' => "Toevoegen aan de laatste nieuwe producten in de beginpagina?",

'upload_new_images' => "Upload Plaatjes",

'no_images_avail' => "Sorry, er zijn geen plaatjes aanwezig.",

'prod_added_to_cat' => "Product is toegevoegd aan de categorie.",

'prod_not_added_to_cat' => "Toevoegen van product aan categorie is mislukt.",

'prod_removed_from_cat' => "Product verwijderd van categorie.",

'prod_not_removed_from_cat' => "Product niet verwijderd van categorie.",

'title_extraCats' => "Categorie Beheer",

'manage_cats' => "Beheer Categorieen",

'master_cat' => "Hoofd categorie:",

'close_window' => "Venster sluiten",

'img_added_to_prod' => "Plaatje toegevoegd aan product.",

'img_not_added_to_prod' => "Toevoegen van plaatje is mislukt.",

'img_removed' => "Plaatje is verwijderd van product.",

'img_not_removed' => "Plaatje is niet verwijderd van product.",

'image_management' => "Plaatjes beheer",

'manage_images' => "Beheer plaatjes",

'image' => "Plaatje",

'action' => "Bewerk",

'delete_success' => "Succesvol verwijderd.",

'delete_fail' => "Verwijderen mislukt.",

'update_successful' => "Succesvol gewijzigd.",

'update_fail' => "Wijzigen categorie mislukt.",

'add_success' => "Succesvol toegevoegd.",

'add_fail' => "Categorie toevoegen is mislukt.",

'prod_inventory' => "Productenlijst",

'current_prods_in_db' => "Hieronder staat een lijst met de producten.",

'all_cats' => "Alle categorieen",

'prod_name' => "Product Naam",

'prod_id' => "Product Id",

'prod_code' => "Product Code",

'master_cat2' => "Hoofd Categorie",

'title' => "Titel",

'stock_level' => "Voorraad niveau",

'normal_price' => "Normale Prijs",

'sale_price' => "Korting prijs",

'asc' => "Aflopend Bestelling",

'desc' => "Oplopend Bestelling ",

'containing_text' => "bevat de tekst",

'filter' => "Filter",

'reset' => "Resetten",

'id' => "id",

'type' => "Type",

'name' => "Naam",

'price_sale_price' => "Prijs / Kortingprijs",

'in_stock' => "In voorraad",

'action' => "Bewerk",

'languages' => "Talen",

'no_products_exist' => "Er bestaan geen producten in de database.",

'add_prod_desc' => "Je kutn het formulier hieronder gebruiken om een product aan de lijst toe te voegen.",

'product' => "Product",

'prod_name2' => "Product Naam:",

'prod_stock_no' => "Product/Voorraad Nummer:",

'auto_generated' => "( Als je dit leeg laat wordt het automatisch aangemaakt.)",

'description' => "Beschrijving:",

'primary_lang' => "(In de standard taal kunnen achteraf altijd talen wordne toegevoegd.)",

'category' => "Categorie:",

'image2' => "Plaatje:",

'opt_and_thumbs' => "(Als het plaatjesformaat compatible is zal van het standard plaatje automatisch een thumb gemaakt worden.)",

'upload_new' => "Upload Nieuw Plaatje",

'browse_existing' => "Bekijk bestaande plaatjes",

'normal_price2' => "Normale prijs:",

'sale_price2' => "Kortingprijs:",

'sale_mode_desc' => "(Ditz al alleen gebruikt worden als de korting per product berekend wordt.)",

'prod_weight' => "Product Gewicht:",

'tax_class' => "Belasting niveau:",

'stock_level2' => "Voorraad niveau:",

'reduce_stock_level' => "(Het wordt automatisch aangepast zodra er iets is verkocht.)",

'use_stock_q' => "Voorraad niveau gebruiken?",

'product_type' => "Product Type:",

'tangible' => "materieel",

'digital' => "Digitaal",

'digi_path' => "Digitale producten hebben een HTTP pad of een server root pad nodig (zie onder).",

'digi_info' => "Digital Info:",

'digi_desc' => "<p><strong>HTTP Path:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong>Server Root Path:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Recommended!)							</strong></p>

<p>The advantage of using the server root path is that files can be stored elsewhere than the publicly accessible folder. If this method is chosen CubeCart will automatically create a download link which has an expiry time and max amount of downloads which is configured in the store settings.</p>",

'prod_inv_langs' => "Product lijst - (Andere talen)",

'use_rich_oth_lang' => "Gebruik de tekst editor hieronder om de producten te bewerken in een andere taal.",

'language' => "Taal:",

'update_prod_lang' => "Wijzig Product Taal",

'save_prod_lang' => "Bewaar Product Taal",

'other_langs_exdefault' => "De lijst hieronder geeft alle producten weer die in een andere taal zijn dan de standaard.",

'no_lang_exist' => "Er is geen andere taal beschikbaar voor dit product.",

'opt_add_success' => "Naam van optie is toegevoegd.",

'opt_add_fail' => " Naam van optie is niet toegevoegd.",

'att_add_success' => "Attribuut van optie toegevoegd.",

'att_add_fail' => " Attribuut van optie niet toegevoegd.",

'assign_success' => "Optie toegewezen aan product.",

'assign_fail' => " Optie niet toegewezen aan product.",

'product_options' => "Product Opties",

'product_option' => "Product Optie",

'quick_assign' => "Snel toewijzen:",

'prod_opts_of' => "product opties van",

'to' => "naar",

'go' => "GO",

'opt_step1' => "1. Maak een optie aan (bijv.. Kleur)",

'opt_id' => "ID",

'opt_name' => "Naam van Optie",

'warn_remove_opt' => "Weet je zeker dat je deze optie wilt verwijderen? \n\n WAARSCHUWING Alle attributen worden ook verwijderd!",

'no_options_made' => "Er zijn geen product optienamen aangemaakt. ",

'option' => "Optie",

'opt_step2' => "2. Maak een optie waarde aan (bijv. Rood)",

'option_attributes' => "Optie Attributen",

'warn_remove_att' => "Weet je zeker dat je deze optie attribuut wil verwijderen? \n\n Let op: Hij zal alle product opties en attributen verwijderen!",

'no_attributes_made' => "Er zijn geen product optie attributen aangemaakt.",

'attribute' => "Attribuut",

'opt_step3' => "3. Toewijzen optie &amp; waarde voor product (bijv.. T-Shirt &gt; Colour &gt; Red)",

'option_attribute' => "Optie attribuut",

'option_price' => "Optie prijs",

'add_subtract' => "Toevoegen / Aftrekken",

'remove_opt_prod' => "Weet je zeker dat je de optie van het product wilt verwijderen ?",

'no_assigned_opts' => "Er is aan geen enkel product een optie toegevoegd.",

'prods_made_1st' => "Er zullen eerst producten toegevoegd moeten worden alvorens er opties gemaakt kunnen worden. ",

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

// added in BETA
'show_latest' => "Laatste producten laten zien op de beginpagina?",

'no_latest' => "Aantal laatst toegevoegde producten laten zien:",

'off_line_settings' => "Offline Instellingen",

'off_line' => "Webshop uitschakelen ?",

'off_line_content' => "Off line bericht:",

'off_line_allow_admin' => "Administrators toestaan om de site offline te bekijken ?",


'store_settings' => "Winkel Instellingen",

'edit_below' => "Verander de winkel instellingen hieronder:",

'meta_data' => "Meta woorden (zoekmachines)",

'browser_title' => "Browser Titel:",

'meta_desc' => "Meta Beschrijvingen(zoekmachines):",

'meta_keywords' => "Meta Sleutelwoorden (zoekmachines):",

'comma_separated' => "(Comma Bijzonder)",

'store_co_name' => "Winkel/Bedrijfs Naam:",

'store_address' => "Bedrijfsadres:",

'country' => "Land:",

'zone' => "Provincie:",

'dirs_folders' => "Directories &amp; Folders",

'rootRel' => "Root Public HTML Folder to store (pad verwijzing):",

'include_slash' => "(Include Trailing Slash)",

'storeURL' => "Directe URL naar de winkel:",

'eg_domain_com' => "bijv. http://www.cube-it.nl",

'rootDir' => "Server Root Directory (hoofd directory server):",

'eg_root_path' => "bijv.  /path/to/your/webstore",

'rootRel_SSL' => "Root SECURE Public HTML Folder naar winkel:",

'storeURL_SSL' => "Directe beveiligde (SSL) URL van webshop:",

'eg_domain_SSL' => "bijv. https://secure.domain.com",

'rootDir_SSL' => "Server SECURE Root Directory:",

'eg_root_path_secure' => "e.g. /path/to/your/secure/webstore",

'enable_ssl' => "Zet SSL aan:",

'ssl_warn' => "(Let op: Deze instellingen zijn direct van kracht. Controleer eerst of de server hierop ingesteld kan worden)",

'digital_downloads' => "Digitale downloads",

'download_expire_time' => "Download Verloop Tijd:",

'seconds' => "(Seconden)",

'download_attempts' => "Download Pogingen:",

'attempts_desc' => "(Aantal keer dat de klant het product kan downloaden.)",

'styles_misc' => "Stijlen &amp; Misc",

'default_language' => "Standaard taal:",

'store_skin' => "Winkel Layout:",

'no_cats_per_row' => "Aantal categorieen per lijn:",

'dir_symbol' => "Directory Symbool:",

'prods_per_page' => "Aantal Producten per Pagina:",

'precis_length' => "Precieze Lengte van product:",

'chars' => "(Chars)",

'no_sale_items' => "Aantal items in aanbieding tabel:",

'no_pop_prod' => "Aantal. items in meest bekeken tabel:",

'email_name' => "E-mail Naam:",

'email_name_desc' => "(Deze naam wordt gebruikt voor het versturen van site e-mail.)",

'email_address' => "E-mail Adres:",

'email_address_desc' => "( naam wordt gebruikt voor het versturen van site e-mail.)",

'mail_method' => "E-mail verzendmethode:",

'mail_recommended' => "(SMTP aanbevolen)",

'max_upload_size' => "Max Upload Bestandsgrootte:",

'under_x_recom' => "(Aanbevolen onder 2048Kb)",

'max_sess_length' => "Max Sessie Lengte:",

'db_settings' => "Database Instellingen",

'db_host' => "Database Hostname:",

'db_username' => "Database Gebruikersnaam:",

'db_password' => "Database Wachtwoord:",

'db_name' => "Database Naam:",

'db_prefix' => "Database Prefix:",

'gd_settings' => "GD Instellingen",

'gd_ver' => "GD Versie:",

'gd_thumb_size' => "Thumbnail Grootte:",

'gd_gif_support' => "Toestaan GIF Support: (Zorg dat je zeker weet dat je server dit ondersteund)",

'gd_max_img_size' => "Maximale grootte van plaatje:",

'gd_img_quality' => "GD Plaatjes kwaliteit:",

'recom_quality' => "(60 - 80 aanbevolen)",

'stock_settings' => "Voorraad instellingen",

'use_stock' => "Voorraad niveau laten zien ?",

'allow_out_of_stock_purchases' => "Toestaan zogenaamde niet-op-voorraad bestellingen ?",

'weight_unit' => "Gewicht eenheid:",

'time_and_date' => "Tijd &amp; Datum",

'time_format' => "Tijd formaat:",

'time_format_desc' => "(Bekijk <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Tijd Offset:",

'time_offset_desc' => "(Seconden – Wordt gebruik voor verschillende tijdzones)",

'date_format' => "Datum Formaat:",

'date_format_desc' => "(Bekijk <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Lokale instellingen",

'default_currency' => "Standaard valuta",

'inc_tax_prices' => "BTW bij de prijzen inbegrijpen?",

'sale_mode' => "Uitverkoop modus:",

'percent_of_all' => "Percentage op alle producten",

'ind_sale_per_item' => "Korting per artikel",

'sale_mode_off' => "Uitverkoop modus uit",

'sale_per_off' => "Uitverkoop percentage uit:",

'sale_per_off_desc' => "(Percentage zal alle prijzen verlagen)",

'diff_dispatch' => "Toestaan dat het verzendadres anders is dan het factuuradres?",

'update_settings' => "Wijzig instellingen",

'update_success' => "Succesvol gewijzigd.",

'update_fail' => "is nietgewijzigd.",

'add_success' => "succesvol toegevoegd",

'add_fail' => "is niet toegevoegd.",

'delete_success' => "Succesvol verwijderd.",

'delete_failed' => "Verwijderen is mislukt.",

'currencies' => "Valutas",

'currency' => "Valuta",

'currencies_desc' => "Bewerk of verwijder de valutas hieronder:",

'c_code' => "Code",

'c_name' => "Naam",

'c_value' => "Waarde",

'symbol_left' => "Symbool Links",

'symbol_right' => "Symbool Rechts",

'decimal_places' => "Decimale plaatsen",

'last_updated' => "Laatste keer veranderd:",

'c_status' => "Status",

'no_currencies' => "Er bevinden zich geen valutas in de database.",

'countries' => "Landen",

'country' => "Land",

'edit_countries_below' => "Bewerk of verwijder de landen hieronder:",

'disable' => "Uitschakelen",

'enable' => "Inschakelen",

'iso' => "ISO",

'iso_name' => "Naam",

'iso3' => "ISO3",

'num_code' => "Num Code",

'action' => "Bewerk",

'warn_del_country' => "Weet je zeker dat j edit item wil verwijderen ? Alle landen en provincies daarboven zullen verwijderd worden. ",

'no_countries_in_db' => "Er bevinden zich geen landen in de database.",

'edit_counties' => "Bewerk, voeg toe of verwijder landen/provincies hieronder:",

'no_counties_in_db' => " Er bevinden zich geen landen in de database.",

'tax_Settings' => "BTW Instellingen",

'edit_locale_below' => "Bewerk je eigen instellingen hieronder:",

'tax_only_to' => "Bereken BTW alleen op het volgende land:",

'manage_tax_below' => "Beheer de verschillende BTW tarieven hieronder. Het kan ingesteld worden per product, als je eventueel met andere belastingtarieven of belastingvrije artikelen te maken hebt .",

'tax_class2' => "BTW groep",

'rate_per' => "Tarief (%)",

'no_taxes_setup' => "Sorry, er is geen BTW ingesteld.",

'tax' => "BTW",

);



$lang['admin']['stats'] = array(

'store_stats' => "Webshop statistieken",

'choose_view' => "Maak een keuze uit de statistieken:",

'search_terms' => "Zoek termen",

'product_pop' => "Product populariteit",

'cust_online' => "Klanten die momenteel online zijn",

'search_terms_order_by' => "Zoek termen (Ordered by No Searches)",

'sorry_no_data' => "Sorry, er is geen data om wee rte geven.",

'product_pop_ordered_by' => "Product populariteit  (Ordered by Views)",

'cust_active' => "Klanten welke afgelopen 15 ingelogd waren.",

'hash' => "#",

'customer' => "Klant",

'location' => "Locatie",

'sess_start_time' => "Session Start Tijd",

'last_click_time' => "Last Click Time",

'sess_length' => "Sessie Lengte",

'geust' => "Gast",

'signed_in' => "Ingelogd",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => " Fout bij openen includes/global.inc.php om hem aan te passen. Probeer de bestandsrechten te wijzigen CHMOD value naar 0777. Vergeet hem niet terug te zetten naar 0644.",

'401' => "Fout 401: Je hebt geen rechten om deze pagina te bezoeken. Vraag het aan een van de super gebruikers om dit te veranderen.",

'welcome_note' => "Welkom bij het administratie gedeelte van Cube Cart",

'last_login' => "Laatste ingelogd door ",

'by' => "door",

'failed' => "mislukt.",

'store_overview' => "Winkel bekijken:",

'version' => "Versie:",

'visit_cc' => "Bezoek de CubeCart download site",

'no_products' => "Aantal producten:",

'no_customers' => "Aantal klanten:",

'img_upload_size' => "Grootte van de folder voor de plaatjes:",

'no_orders' => "Aantal orders:",

'quick_search' => "Snel zoeken:",

'order_no' => "Bestelnummer:",

'search_now' => "Zoek nu",

'customer' => "Klant:",

'login_failed' => "Inloggen mislukt! De gebruikersnaam of wachtwoord is incorrect.",

'new_pass_sent' => "Een nieuw wachtwoord is gemaild naar:",

'no_admin_sess' => "Er is geen admin sessie gevonden.",

'login_fail_2' => "Inloggen mislukt, probeer nogmaals.",

'login_below' => "Hieronder kun je inloggen:",

'username' => "Gebruikersnaam:",

'password' => "Wachtwoord:",

'request_pass' => "Vraag wachtwoord op",

'login' => "Inloggen",

'logout_failed' => "Uitloggen is mislukt omdat er geen admin sessie bekend was.",

'reset_pass_email' => "Beste %s,

Jij, of iemand anders heeft een nieuw wachtwoord voor je aangevragen.

Je nieuwe gegevens zijn:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Gebruikersnaam: %s
Wachtwoord: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Deze e-mail is verzonden van %s/admin/requestPass.php\n

IP Adresvan de afzender: %s",

'pass_reset_failed' => "Wachtwoord wijzigen is mislukt.",

'enter_email_below' => "Vul hieronder je wachtwoord in:",

'email_address' => "E-mail Adres:",

'send_pass' => "Verstuur wachtwoord",

);



$lang['admin']['nav'] = array(

'permission_error' => "Je hebt geen rechten om dit te bekijken.",

'navigation' => "Navigatie",

'admin_home' => "Amin Home",

'store_home' => "Uw Webshop",

'store_config' => "Winkel instellingen",

'gen_settings' => "Algemene instellingen",

'taxes' => "BTW tarieven",

'countries_zones' => "Landen &amp; Provincies",

'currencies' => "Valutas",

'modules' => "Modules",

'shipping' => "Verzending",

'gateways' => "Betalingsmogelijkheden",

'affiliates' => "Affiliates",

'catalog' => "Catalogus",

'view_products' => "Bekijk producten",

'add_product' => "Voeg een product toe",

'product_options' => "Product Opties",

'view_categories' => "Bekijk Categorieen",

'add_categories' => "Voeg een categorie toe",

'customers' => "Klanten",

'view_customers' => "Bekijk klanten",

'email_customers' => "E-mail Klanten",

'orders' => "Bestellingen",

'file_manager' => "Bestanden Beheerder",

'manage_images' => "Beheer plaatjes",

'upload_images' => "Upload Plaatjes",

'statistics' => "Statistieken",

'view_stats' => "Bekijk Statistieken",

'documents' => "Documenten",

'homepage' => "Beginpagina",

'site_docs' => "Website documenten",

'misc' => "Misc",

'server_info' => "Server Info",

'admin_users' => "Admin Gebruikers",

'administrators' => "Administrators",

'admin_sessions' => "Admin Sessies",

);



$lang['admin']['incs'] = array(

'administration' => "Administratie",

'logged_in_as' => "Ingelogd als:",

'logout' => "Uitloggen",

'change_pass' => "Wachtwoord veranderen",

'error_editing' => "Fout tijdens bewerken, ingevoerde data was niet in een array.",

'config_updated' => "Instellingen opgeslagen. Please Zorg dat de bestandpermissies goed ingesteld staan.",

'cant_write' => "Could not open file of '%s' for writing. Try changing the CHMOD value to 0777. Remember to set it back to 0644 afterwards!",

'db_config_updated' => "Configuratie Bijwerken.",

'db_cant_write' => "Bijwerken Zakken!",

'select_above' => "Selecteer hierboven",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Ja";

$lang['front']['no'] = "Nee";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Handige links",

'reg_and_checkout' => "Registreer &amp; Checkout",

'cont_shopping' => "Doorgaan met winkelen",

'edit_del_add' => "Bewerk aflever adres",

'edit_inv_add' => "Bewerk factuur adres",

'empty_cart' => "Maak winkelwagentje leeg",

'prev_page' => "Vorige pagina",

'homepage' => "Beginpagina",

'shop_by_cat' => "Kies een categorie",

'sale_items' => "Uitverkoop artikelen",

'save' => "Opslaan",

'currency' => "Valuta",

'information' => "Informatie",

'products' => "Producten:",

'categories' => "Categorieen:",

'prices' => "Prijzen:",

'language' => "Taalkeuze",

'mailing_list' => "Mailing Lijst",

'subscribe_below' => "Voeg je toe aan onze mailinglist hieronder:",

'email' => "E-mail:",

'join_now' => "Toevoegen",

'already_subscribed' => "Het e-mail adres %s is al toegevoegd aan onze mailinglist. Log in om je eventueel af te melden.",

'enter_valid_email' => "Vul aub been geldig e-mail adres in.",

'added_to_mail' => "Dank je, %s is aan de lijst toegevoegd.",

'subscribed_to_mail' => "Dank je, %s je bent toegevoegd aan de mailinglist.",

'popular_products' => "Populaire Producten",

'featured_prod' => "Speciale producten",

'sale_items' => "Uitverkoop items",

'search_for' => "Zoeken naar:",

'go' => "Go",

'welcome_back' => "Welkom terug",

'logout' => "Uitloggen",

'your_account' => "Uw profiel",

'welcome_guest' => "Welkom bezoeker, ",

'login' => "Inloggen",

'register' => "Registreren",

'shopping_cart' => "Winkelwagen",

'basket_empty' => "Je winkelwagentje is leeg",

'items_in_cart' => "Producten in de winkelwagen:",

'total' => "Totaal:",

'view_basket' => "Winkelwagen bekijken",

);



$lang['front']['account'] = array(

'your_account' => "Uw Account",

'personal_info' => "Persoonlijke informatie",

'order_history' => "Bestelgeschiedenis",

'change_password' => "Wachtwoord veranderen",

'newsletter' => "Nieuwsbrief",

'login_to_view' => "U moet inloggen om deze pagina te kunnen bezichtigen.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Het wachtwoord wat je hebt ingevuld is niet correct.",

'conf_not_match' => "Je controle wachtwoord komt niet overeen met die daarboven.",

'change_pass' => "Wijzig wachtwoord",

'password_updated' => "Dank je, je wachtwoord is gewijzigd.",

'change_pass_below' => "Verander je wachtwoord hieronder:",

'old_pass' => "Oud wachtwoord:",

'new_pass' => "Nieuw wachtwoord:",

'confirm_pass' => "Wachtwoord )nogmaals’:",

'submit' => "Toevoegen",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Sorry",

'expired' => "Je download link is verlopen.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Wachtwoord vergeten",

'email' => "E-mail:",

'send_pass' => "Verzend wachtwoord",

'reset_email' => "Beste %s %s,

Jij, of iemand anders heeft een nieuw wachtwoord voor je aangevragen.

Je nieuwe gegevens zijn:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Gebruikersnaam: %s
Wachtwoord: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
Om in te loggen volg deze link:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Deze e-mail is verzonden van %s
IP adres van afzender: %s",

'new_pass_sent' => "Een nieuw wachtwoord is verzonden aan %s.",

'email_not_found' => "Sorry, maar dit e-mail adres is niet gevonden.",

'enter_email' => "Vul aub je e-mail adres hieronder in om een tijdelijk wachtwoord te ontvangen:",

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

'newOrderMsg' => "TE klant heeft uitsluitend gemaakte naar de volgorde %s, voor zienswijze zulks volgorde wees zo goed volgen naar de verbinding onder : \n\n %s",

'newOrderSubj' => "Opkomend Zaak Volgorde Werkhuis",

'payment' => "Betaling",

'cart' => "Winkelwagen",

'address' => "Adres",

'payment' => "Betaling",

'complete' => "Compleet",

'fill_out_below' => "Vul aub het onderstaande formulier in:",

'transferring' => "In afwachting van betaling",

'go_now' => "Ga door!",

'continue' => "Ga verder",

'choose_method' => "Maak een keuze uit de betalingmethodes:",

'your_comments' => "Je vragen/opmerkingen:",

'none_configured' => "Sorry, er zijn nog geen betalingsmogelijkheden gedefineerd.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Inloggen",

'username' => "E-mail:",

'password' => "Wachtwoord:",

'remember_me' => "Wachtwoord onthouden?",

'forgot_pass' => "Wachtwoord vergeten?",

'login_success' => "Je bent succesvol ingelogd.",

'already_logged_in' => "Je bent al ingelogd.",

'login_failed' => "Inloggen mislukt!",

'login_below' => "Graag inloggen hieronder:",

);



$lang['front']['index'] = array(

'latest_products' => "Laatst toegevoegde producten",

);



$lang['front']['logout'] = array(

'logout' => "Uitloggen",

'session_destroyed' => "Je sessie is verwijderd.",

'no_session' => "Er is geen sessie gevonden om te verwijderen. Je bent hier waarschijnlijk per ongeluk terecht gekomen.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Instellingen nieuwsbrief",

'prefs_updates' => "Je nieuwsbriefinstellingen zijn opgeslagen.",

'edit_prefs_below' => "Bewerk je nieuwsbriefinstellingen hieronder:",

'subscribe' => "Toevoegen aan de mailinglijst?",

'email_format' => "E-mail Formaat:",

'plain_text' => "Gewone tekst",

'html' => "HTML",

'html_abbr' => "Hypertext Markup Language",

'update' => "Opslaan",

'login_required' => "Je moet inloggen om deze pagina te bekijken.",

);



$lang['front']['noShip'] = array(

'sorry' => "Sorry",

'desc' => "We kunnen niet leveren aan jouw land.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Sorry",

'desc' => "We kunnen een bestelling van dit gewicht niet verzenden. Neem contact op met ons.",

);



$lang['front']['profile'] = array(

'complete_all' => "Zorg dat alle benodigde velden zijn ingevuld.",

'email_invalid' => "Vul au been geldig e-mail adres in.",

'numeric_only' => "Telefoonnummers kunnen alleen cijfers bevatten.",

'email_inuse' => "Sorry dit e-mail adres is al in gebruik.",

'update_email' => "Beste %s %s,

Deze e-mail is verzonden om u er op te wijzen dat uw persoonlijke informatie is aangepast. Als je denkt dat iemand anders deze wijzigingen heeft gedaan neem dan zo spoedig mogelijk contact met ons op.\n\n

Deze e-mail is verzonden van %s\n

IP adres van afzender: %s",

'update_email_subj' => "Persoonlijke informatie aangepast",

'personal_info' => "Persoonlijke informatie",

'account_updated' => "Je profiel is aangepast. You Je kunt het hieronder nogmaals wijzigen als je wilt.",

'edit_below' => "Je kunt je persoonlijke instellingen hieronder wijzigen:",

'title' => "Titel:",

'first_name' => "Voornaam:",

'last_name' => "Achternaam:",

'email' => "E-mail:",

'address' => "Adres:",

'town' => "Woonplaats:",

'county' => "Provincie:",

'postcode' => "Postcode:",

'country' => "Land:",

'phone' => "Telefoon:",

'mobile' => "Mobiele telefoon:",

'update_account' => "Wijzig profiel",

'login_required' => "Je moet inloggen om deze pagina te kunnen bekijken.",

);



$lang['front']['reg'] = array(

'fill_required' => "Zorg dat alle benodigde velden ingevul zijn.",

'pass_not_match' => "Zorg dat de wachtwoorden overeen komen.",

'enter_valid_email' => "Voer een geldig e-mail adres in.",

'enter_valid_tel' => "Telefoonnummers mogen alleen numeriek zijn.",

'email_in_use' => "Sorry, dit e-mail adres is al in gebruik.",

'note_required' => "Alle velden met een (*) zijn verplicht voor de registratie.",

'express_reg' => "Express Registratie",

'submit_and_cont' => "Toevoegen &amp; Doorgaan",

'personal_details' => "Persoonlijke details",

'address' => "Adres",

'title' => "Titel:",

'title_desc' => "(Dhr/Drs/Ing)",

'first_name' => "Voornaam:",

'address2' => "Adres:",

'last_name' => "Familienaam:",

'email_address' => "E-mail adres:",

'town' => "Woonplaats:",

'phone' => "Telefoon:",

'county' => "Provincie:",

'mobile' => "Mobiele telefoon:",

'country' => "Land:",

'postcode' => "Postcode:",

'security_details' => "Beveiligings details",

'choose_pass' => "Kies een wachtwoord:",

'conf_pass' => "Herhaal wachtwoord:",

'privacy_settings' => "Privacy instellingen",

'receive_emails' => "Ik zou graag e-mails met aanbiedingen willen ontvangen",

'email_format' => "E-mail Formaat:",

'styled_html' => "Styled HTML",

'plain_text' => "Gewone tekst",

'tandcs' => "Gebruikersvoorwaarden",

'please_read' => "Zorg ervoor dat je deze hebt gelezen",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "Beste %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Om het product te bekijken volg onderstaande link:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Deze e-mail is verzonden van %s
iP adres afzender: %s",

'email_subject' => "Bericht van: %s",

'tellafriend' => "Vertel he teen vriend/vriendin",

'message_sent' => "Dank je, je bericht is verzonden aan <strong>%s</strong> over '%s'. Als je het naar nog een vriend/vriendin wil versturen herhaal deze procedure:",

'fill_out_below' => "Vul het formulier hieronder in '%s'.",

'friends_name' => "Naam vriend/vriendin:",

'friends_email' => "E-mail adres van vriend/vriendin:",

'your_name' => "Je eigen naam:",

'your_email' => "Je e-mail adres:",

'message' => "Bericht:",

'default_message' => "Ik heb  '%s' gevonden en dacht misschien dat jij ook wel geinteresserd zou zijn.",

'send' => "Verzenden",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Afmelden",

'email' => "E-mail:",

'go' => "Go",

'enter_valid_email' => "Vul een geldig e-mail adres in.",

'email_removed' => "Dank je, <strong>%s</strong> is succesvol verwijderd van onze email lijst.",

'email_not_found' => "Sorry, <strong>%s</strong> is niet gevonden in onze mailinglijst of is reeds al afgemeld.",

'enter_email_below' => "Vul hieronder je e-mail adres in om je af te melden van de mailinglijst :",

);



$lang['front']['viewCat'] = array(

'search_results' => "Zoek resultaten",

'sale_items' => "Aanbieding items",

'image' => "Plaatje",

'description' => "Beschrijving",

'price' => "Prijs",

'products_in' => "Products in:",

'buy' => "Kopen",

'more' => "Info",

'out_of_stock' => "-niet in voorraad-",

'no_products_match' => "Sorry, er werdt niets gevonden:",

'no_prods_in_cat' => "Er zitten geen producten in deze categorie.",

);



$lang['front']['viewDoc'] = array(

'error' => "Fout",

'does_not_exist' => "Dit document bestaat niet.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Bestelnummer:",

'customer_info' => "Klanten informatie:",

'invoice_address' => "Factuur adres:",

'delivery_address' => "Aflever adres:",

'na' => "n/a",

'customer_comments' => "Klanten vragen/opmerkingen:",

'order_summary' => "Bestelgeschiedenis:",

'product' => "Product",

'product_code' => "Product Code",

'quantity' => "Aantal",

'price' => "Prijs",

'download_here' => "Download Hier",

'review_below' => "Bekijk de bestelling hieronder:",

'order_date_time' => "Bestel Datum/Tijd:",

'payment_method' => "Betalingsmethode:",

'ship_method' => "Verzendingsmethode:",

'subtotal' => "Subtotaal:",

'total_tax' => "Totaal BTW:",

'shipping' => "Verzending:",

'grand_total' => " Totaal:",

'order_not_found' => "Dit bestelnummer is niet gevonden.",

'login_required' => "Je moet inloggen om deze pagina te bekijken.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Uw bestellingen",

'orders_listed_below' => "Alle bestellingen die onder dit account vallen staan hieronder:",

'order_no' => "Bestelnummer",

'status' => "Status",

'date_time' => "Datum/Tijd",

'action' => "Bewerk",

'view' => "Bekijken",

'no_orders' => "We hebben geen bestellingen in ons system staan. Als je denkt dat dit een systeemfout is kun je contact opnemen met ons.",

'login_required' => "Je moet inloggen om deze pagina te bekijken.",

);



$lang['front']['viewProd'] = array(

'product' => "Product",

'product_info' => "Product Informatie",

'price' => "Prijs:",

'product_code' => "Product Code:",

'tellafriend' => "Vertel het een vriend of vriendin!",

'quantity' => "Hoeveelheid:",

'more_images' => "[+] Meer foto’s",

'add_to_basket' => "Toevoegen aan winkelwagentje",

'location' => "Locatie:",

'no_instock' => "In voorraad:",

'instock' => "In voorraad",

'out_of_stock' => "- niet in voorraad - ",

'prod_opts' => "Product Opties:",

'prod_not_found' => "Dat product is niet gevonden.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Je winkelwagen is momenteel leeg.",

'allready_customer' => "Bent u al een klant?",

'login_below' => "Graag hieronder inloggen:",

'username' => "E-mail:",

'password' => "Wachtwoord:",

'remember_me' => "Wachtwoord onthouden?",

'login' => "Inloggen",

'forgot_pass_q' => "Wachtwoord vergeten?",

'need_register' => "Wilt u registreren?",

'express_register' => "Onze express registratie pagina kan snel en gemakkelijk wordne ingevuld.",

'reg_and_cont' => "Registreer  &amp; Ga door",

'cont_shopping_q' => "Doorgaan met winkelen?",

'cont_shopping' => "Doorgaan met winkelen",

'cont_browsing' => "Om door te gaan als gast zonder in te loggen, klik op de knop hieronder. Let wel je moet eerst registreren om een bestelling te plaatsen.",

);





$lang['front']['cart'] = array(

'free_shipping' => "Gratis verzendkosten",

'view_cart' => "Bekijk winkelwagen",

'cart' => "Winkelwagen",

'address' => "Adres",

'payment' => "Betaling",

'complete' => "Compleet",

'add_more' => "Wil je nog meer producten toevoegen? Voer de  Product Code in:",

'add' => "Toevoegen",

'qty' => "Hoeveelheid",

'product' => "Product",

'code' => "Code",

'stock' => "Voorraad",

'price' => "Prijs",

'line_price' => "Prijs lijn",

'delete' => "Verwijderen",

'remove' => "Verwijder item",

'invoice_address' => "Factuur adres",

'delivery_address' => "Aflever adres",

'title' => "Titel:",

'first_name' => "Voornaam:",

'last_name' => "Achternaam:",

'address2' => "Adres:",

'town' => "Woonplaats:",

'county' => "Provincie:",

'postcode' => "Postcode:",

'country' => "Land:",

'edit_invoice_address' => "Bewerk factuuradres",

'edit_delivery_address' => "Bewerk aflever adres",

'stock_warn' => "Je hebt meerdere items besteld dan in voorraad zijn, het zou kunnen zijn dat je bestelling wat langer duurt voordat ze weer bij de leverancier op voorraad zijn.",

'amount_capped' => "Sorry maar we kunnen geen bestellingen verzenden als ze niet op voorraad zijn.<br />Het aantal van dit product is verminderd naar",

'na' => "n/a",

'shipping' => "Transport:",

'tax' => "BTW:",

'subtotal' => "Subtotaal:",

'cart_total' => "Winkelwagen totaal:",

'if_changed_quan' => "(als je iets aan de voorraad hebt gewijzigd)",

'update_cart' => "Update Winkelwagentje",

'continue' => "Doorgaan",

'cart_empty' => "Je winkelwagentje is momenteel leeg.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Bevestigingsscherm",

'cart' => "Winkelwagentje",

'address' => "Adres",

'payment' => "Betaling",

'complete' => "Compleet",

'order_success' => "Dank je, je order was succesvol! Tot ziens!.",

'order_fail' => "Sorry, je bestelling is niet gelukt!",

'try_again_desc' => "Je kan proberen om je bestelling nogmaals te plaatsen:",

'try_again' => "Probeer nogmaals",

'request_login' => "Je moet inloggen om deze pagina te bekijken.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Beste %s,

Bdankt voor je bestelling, je bestelnummer is: %s placed on %s

De transactie was succesvol en we zullen het pakket z.s.m. verzenden .

~~~~~~~~~~~~~~~~~~~~~~~~~~
Naam: %s
Subtotaal: %s
Verzendkosten (wordt later berekend): %s
BTW: %s
Totaal: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Factuur adres:
%s
%s
%s
%s
%s
%s
%s

Verzendadres:
%s
%s
%s
%s
%s
%s
%s

Betaalmethode: %s
Verzendmethode: %s",

'inv_email_body_2' => "\nUw opmerkingen: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Order Inventory:\n",

'inv_email_body_4' =>"Product: %s\n",

'inv_email_body_5' => "Options: %s\n",

'inv_email_body_6' => "Quantity: %s
Product Code: %s
Price: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Bestelnummer: ",

'digi_email_body1' => "Beste %s,

Bedankt voor je bestelnummer: %s geplaatst op %s

Hieronder staat de link naar eventuele digitale producten.

LET OP zullen verlopen op %s en je hebt %s pogingen om hem te downloaden. Als je hiermee problemen hebt neem dan contact met ons op.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
DOWNLOAD LINK:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Downloads Toegang: ",

);



$lang['misc'] = array(

'pages' => " paginas ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "Klant Browser:",

'server_software' => "Server Software:",

'perofOrderSub' => " % van subtotaal",

'freeForOrdOver' => "Gratis voor bestellingen van meer dan",

'freeShipping' => "Gratis verzending",

'byWeight1stClass' => "Per gewicht (1st Class)",

'1stClass' => "(1st Class)",

'byWeight2ndClass' => "Per gewicht (2nd Class)",

'2ndClass' => "(2nd Class)",

'flatRate' => "Vaste kost",

'free' => "Gratis",

'national' => "Nationaal",

'international' => "Internationaal",

'byCategory' => "Per categorie",

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

'invoiceTo' => "Factuur voor",

'deliverTo' => "Leveren aan",

'postalOrderFor' => "Postal Order for",

'orderOf' => "Bestelling va",

'orderID' => "Bestelling ID:",

'product' => "Product",

'code' => "Code",

'qty' => "Aantal",

'price' => "Bedrag",

'shippingMethod' => "Verzendings Methode:",

'subtotal' => "Subtotaal:",

'totalTax' => "Totaal BTW:",

'totalShipping' => "Totaal Verzendingskosten:",

'grandTotal' => "Totaal:",

'payByCheck' => "Betaal per check",

'payTo' => "Gelieve uw cheque uit te schrijven aan",

'payByCard' => "Betaal met betaalkaart",

'cardType' => "Kaart Type:",

'cardNo' => "Kaart Nr:",

'3-4DigiId' => "3-4 Cijfer ID:",

'expiryDate' => "Vervaldag:",

'issueDate' => "Issue Date:",

'issueNo' => "Issue Number:",

'signature' => "Handtekening:",

'payByTransfer' => "Betaal per bankoverscrijving",

'bankName' => "Banknaam:",

'accountName' => "Uw accountnaam:",

'sortCode' => "Sort Code:",

'accountNo' => "Bankrekeningnr:",

'swiftCode' => "Swift Code:",

'bankAddress' => "Bank Adres:",

'thanks' => "Bedankt om te shoppen in onze online winkel!",

'postalAddress' => "ostadres:",

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

'delete_success' => "Categorietaal werd verwijderd.",

'delete_fail' => "Deleten is NIET gelukt.",

'update_fail' => "Opslaan is NIET gelukt.",

'update_success' => "werd geüpdate.",

'add_success' => "werd toegevoegd.",

'add_fail' => "Categorietaal werd NIET toegevoegd.",

'site_cats_other_lang' => "Categoriën - (Andere talen)",

'site_cat_other_lang' => "Categorie - (Andere talen)",

'cat_name' => "Categorienaam:",

'language' => "Taal:",

'update_cat' => "Categorie updaten",

'save_cat' => "Categorie opslaan",

'current_cat_list' => "Hieronder vindt U een lijst met alle categorietalen. Deze kan je bewerken of verwijderen wanneer je dat nodig acht.",

'cat_name2' => "Categorienaam",

'action' => "Bewerk",

'no_site_cats' => "Deze categorienaam is nog niet vertaald.",

);

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

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