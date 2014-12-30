<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.17
|   ========================================
|   by Alistair Brookbanks
|	CubeCart is a Trade Mark of CubeCart Limited
|   (c) 2005 CubeCart Limited
|   CubeCart Limited,
|   5 Bridge Street,
|   Bishops Stortford,
|   HERTFORDSHIRE.
|   CM23 2JU
|   UNITED KINGDOM
|   http://www.CubeCart.com
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Date: Wednesday, 9th October 2005
|   Email: sales (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	lang.inc.php
|   ========================================
|	English (UK) Language File	
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'no_NO');


/////////// GLOBAL ADMIN ////////////
$lang['admin']['yes'] = "Ja";
$lang['admin']['no'] = "Nei";
$lang['admin']['edit'] = "Rediger";
$lang['admin']['delete'] = "Slett";
$lang['admin']['delete_q'] = "Er du sikker på at du vil slette?";
$lang['admin']['add'] = "Legg til";
$lang['admin']['add_new'] = "Legg til ny";
$lang['admin']['write'] = "Skriv";
$lang['admin']['read'] = "Les";
$lang['admin']['na'] = "N/A"; // as in not applicable
$lang['admin']['all'] = "Alle";
$lang['admin']['remove'] = "Fjern";
/////////////////////////////////////

// admin/adminusers/
$lang['admin']['adminusers'] = array (
'del_success' => "Slettet.",
'del_failed' => "Sletting feilet.",
'update_success' => "Oppdatering OK.",
'update_fail' => "Oppdatering feilet.",
'add_success' => "Lagt til.",
'add_failed' => "Legge til ny bruker feilet.",
'administrators_title' => "Administratorer",
'current_users' => "Administratorer.",
'id' => "Id",
'user_notes' => "brukernavn / Notater",
'no_logins' => "Ingen innlogging",
'super_user' => "Superbruker?",
'email' => "E-post",
'action' => "Handling",
'add_admin' => "Bruk skjemaet for å legge til en administrator.",
'full_name' => "Fullt navn:",
'username' => "brukernavn:",
'administrator' => "Administrator",
'email2' => "E-post:",
'password' => "Passord:",
'pass_warn' => "(Bare skriv inn passord hvis du vil endre det gamle.)",
'make_super' => "Opprette superbruker?",
'notes' => "Notater:",
'permissions' => "Rettigheter",
'pass_updated' => "Passord oppdatert.",
'pass_not_updated' => "Passord ikke oppdatert.",
'change_pass_below' => "Vennligst bytt passord:",
'old_pass' => "Gammelt passord:",
'new_pass' => "Nytt passord:",
'confirm_pass' => "Bekreft passord:",
'perms_updated' => "Rettigheter oppdatert.",
'set_perms' => "Sett rettigheter for bruker.",
'section' => "Avdeling",
'nb_bulk' => "N.B For å masseutsende e-post til kunder må brukeren ha skriverettigheter under Kunder.", 
'admin_sessions' => "Admin økt",
'sessions_desc' => "Under vises siste innloggingsforsøket til admin kontoen. Sjekk ofte meldingen her for eventuelle misbruk av kontoen. Det anbefales at du ofte bytter passord til denne konto.",
'login_id' => "Login ID",
'time' => "Tidspunkt",
'ip_address' => "IP Addresse",
'success' => "Gjennomført",
);

$lang['admin']['categories'] = array (
'delete_success' => "Sletting vellykket.",
'delete_fail' => "Sletting feilet.",
'update_success' => "oppdatering vellykket.",
'update_fail' => "kunne ikke oppdatere kategori.",
'add_success' => "lagt til vellykket.",
'add_failed' => "Kunne ikke legge til kategori.",
'categories' => "Kategorier",
'categories_desc' => "Under er en liste over kategoriene i databasen.",
'cat_name' => "Katagori navn",
'dir' => "Område",
'image' => "Bilde",
'no_products' => "Antall produkter",
'action' => "Handling",
'cannot_del' => "Kategorien kan ikke slettes da den inneholder produkter.",
'no_cats_exist' => "Det er ingen kategori i databasen.",
'add_desc' => "Du kan legge til kategorier med ubegrensede underkategorier,laste opp nye bilder eller oppdatere bilde i databasen.",
'category' => "Kategorier",
'category_name' => "Kategori navn:",
'category_level' => "Kategori nivå:",
'top_level' => "Øverste nivå",
'image_optional' => "Bilde: (Valgfritt)",
'upload_new_image' => "Last opp nytt bilde",
'browse_existing' => "Se eksisternde bilder",
'ship_by_cat' => "Frakt utfra kategori",
'per_ship' => "Pr. sending:",
'per_item' => "Pr. produkt:",
'per_int_ship' => "Pr. internasjonal forsendelse:",
'per_int_item' => "Pr. internasjonal produkt:",
);

$lang['admin']['customers'] = array (
'delete_success' => "Sletting vellykket.",
'delete_fail' => "Sletting feilet.",
'update_success' => "Kunde oppdatert.",
'update_fail' => "Kunne ikke oppdatere kunde.",
'search_term' => "Søkebegrep:",
'reset' => "Tøm",
'name' => "Navn",
'email' => "E-post",
'invoice_add' => "Faktura adresse",
'phone' => "Telefon",
'reg_ip' => "Reg dato / IP Addresse",
'no_orders' => "Antall ordre",
'action' => "Handling",
'no_cust_exist' => "Ingen kunder i databasen.",
'edit_below' => "Vennligst endre kundedata under:",
'title' => "Tittel",
'first_name' => "Fornavn:",
'last_name' => "Etternavn:",
'email2' => "E-post:",
'address' => "Addresse:",
'town' => "Sted:",
'county' => "Fylke:",
'postcode' => "Postnummer:",
'country' => "Land:",
'phone2' => "Telefon:",
'edit_customer' => "Rediger kunde",
'no_download_email' => "Ingen e-post å laste ned.",
'email_customers' => "Send e-post til kunder",
'create_email' => "Opprett e-post melding under:",
'hint' => "Hint:",
'click_source' => "Klikk på kildeknappen under for å sette inn forhåndslaget HTML fil.",
'important' => "Viktig!:",
'absolute_links' => "Sørg for at bilder og URL'er er absolutte (f.eks inneholder domenenavnet). I de fleste land er dette påbudt slik at mottaker kan melde seg av nyhetsbrevet:",
'email_subject' => "Emne :",
'senders_name' => "Avsender navn:",
'senders_email' => "Avsender e-post:",
'return_path' => "Returner til:",
'bounce_desc' => "(E-post returneres til.)",
'send_test' => "Sende test melding?",
'test_email_recip' => "Test e-post mottakere:",
'send_email' => "Send e-post",
'download_or_send' => "Vennligst velg om du skal laste ned e-postadressene eller sende nyhetsbrevet fra nettsiden.",
'please_choose' => "Vennligst velg:",
'used_to_download' => "Bruk denne for å laste ned e-postadresser for utsending av mail fra annet epostprogam.",
'bulk_to_subscribed' => "Dette gir deg mulighet til å sende e-post til de av dine kunder som har meldt seg på ditt nyhetsbrev.",
'include_name' => "Inkluder navn?",
'download_email' => "Hent e-post",
'send_email' => "Send e-post",
'sending_complete' => "Sending utført",
'sending' => "Sending e-post",
'recipient' => "Mottaker:",
'prev_page' => "Forrige side",
'page' => "Side:",
'bulk_finished' => "Masseutsending av epost fullført.",
'time_taken' => "Tid:",
'recipients' => "Mottakere:",
);

$lang['admin']['docs'] = array (
'update_fail' => "Nettsiden ble ikke oppdatert, sjekk rettighetene til: includes/static/home.inc.php are correct.",
'update_success' => "Nettsiden ble vellykket oppdatert.",
'homepage' => "Hjemmeside",
'enabled' => "Aktivert:",
'enabled_desc' => "(Hvis deaktiver, vil hovedspråk bli valgt.)",
'language' => "Språk:",
'title' => "Tittel:",
'use_rich_text' => "Vennligst bruk teksteditoren for å andre innholdet. Endringene vil bli utført umidelbart, sørg for å ha sjekket innholdet før du lagrer.",
'update_homepage' => "Oppdater hjemmeside",
'delete_success' => "Dokument slettet.",
'delete_fail' => "Sletting feilet.",
'update_success' => "oppdatering vellykket.",
'update_fail' => "ble ikke oppdatert.",
'add_success' => "lagt til vellykket.",
'add_fail' => "Feilet ved å legge til dokument.",
'site_docs_other_lang' => "Side dokumenter - (Andre språk)",
'use_rich_text' => "Vennligst bruk teksteditoren for å redigere/legge til dokumenter .",
'site_doc_other_lang' => "Side dokumenter - (Andre språk)",
'doc_name' => "Dokument navn:",
'language' => "Språk:",
'update_doc' => "Oppdater dokument",
'save_doc' => "Lagre dokument",
'current_doc_list' => "Eksisterende dokumenter. Du kan ha ubegrenset av disse dokumentene og du kan legge til og endre de når du vil.",
'doc_name2' => "Dokument navn",
'action' => "Handling",
'no_site_docs' => "Det er ingen dokumenter i databasen.",
'site_docs' => "Side dokumenter",
'site_doc' => "Side dokument",
'languages' => "Språk",
'no_docs' => "Det er ingen side dokument i databasen.",
);

$lang['admin']['filemanager'] = array (
'image_browser' => "Bilde oversikt",
'file' => "Fil:",
'no_imgs' => "Ingen bilder tilgjenglig. Steng bildet og last opp et nytt bilde.",
'preview' => "Forhåndsvis:",
'ok' => "OK",
'cancel' => "Avbryt",
'prod_cat_use_img' => "Ingen produkt eller categorier bruker bildet '%s'.",
'continue_q' => "FORTSETTE SLETTING?",
'site_doc_use_img' => "Det er ingen side dokument som bruker bildet '%s'.",
'home_use_img' => "Bildet '%s' er brukt på side dokumentet.",
'gallery_use_img' => "Bildet '%s' er brukt i produkt galleriet.",
'image_deleted' => "Bildet slettet.",
'delete_failed' => "Sletting feilet.",
'image_manager' => "Bilde kontrollpanel",
'delete_from_server' => "Under kan du slette bildet fra serveren.",
'img_click_prev' => "Bilde (Forhåndsvisning)",
'size' => "Størrelse",
'action' => "Handling",
'no_images_added' => "Ingen bilder er lagt til.",
'prev_file' => "Forhåndsvis fil",
'close_window' => "Steng vindu",
'no_image_selected' => "Ingen bilder valgt for forhåndsvisning.",
'file_uploader' => "Fil opplasting",
'upload_image' => "Last opp bilde",
'please_browse_img' => "Let gjennom for ditt bilde:",
'file_too_big' => "FEIL: %s er over %s",
'img_already_exists' => "FEIL: %s eksisterer fra før vennligst bytt navn på filen du skal laste opp.",
'upload_too_large' => "FEIL: Du har ikke valgt bilde for opplasting eller bildet du skal laste opp var for stort. Maks størrelse på bilde er 2MB.",
'not_valid_mime' => "FEIL: %s ikke gyldig billed format.",
'image_upload_success' => "UTFØRT: %s er lastet opp.",
'back' => "&laquo; Tilbake",
);

$lang['admin']['misc'] = array (
'license_form' => "Lisensskjema",
'write_error' => "Kunne ikke åpne/global.inc.php for redigering. Prøv å forandre CHMOD verdi til 0777. Husk å sett verdien tilbake til 0644 etterpå!",
'try_again' => "Prøv igjen",
'purchase_cubecart' => "Kjøp CubeCart:",
'invalid_key' => "Beklager lisensen er ugyldig eller alt i bruk.",
'purchase_license_key' => "Kjøp lisensnøkkel",
'run_unlicensed' => "Du bruker en ugyldig lisens. Bruk din lisensnøkkel for å få fjernet Copyright.",
'license_key' => "Lisensnøkkel:",
'submit_key' => "Legg inn nøkkel",
'server_info' => "Server Info",
'ini_set_desc' => "Informasjonen viser din serverkonfigurasjon. This contains all kinds of information  which may need to be changed if you are experiencing problems with CubeCart. N.B. If you have a shared server or virtual hosting it is likely that you will have limited access to modify settings. The</span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> function can often be used to override these settings.",
);

$lang['admin']['orders'] = array (
'send_invoice_q' => "Status på denne ordren har blitt endret. Du kan nå sende kunden en -post, faktura og adgang til å laste ned ditt digitale produkt. For å gjøre det ",
'click_here' => "Klikk her",
'send_invoice_desc' => "Hvis status er endret fra på vent til utført du vil få mulighet til å sende kunden faktura og gi tilgang til det digitale produktet.",
'delete_success' => "Slettingen var vellykket.",
'delete_fail' => "Slettingen feilet.",
'orders' => "Order",
'all_orders' => "Alle ordre registrert i databasen.",
'order_no' => "Ordre Nr",
'status' => "Status",
'date_time' => "Dato/Tid",
'customer' => "Kunde",
'ip_address' => "IP Addresse",
'cart_total' => "Totalt",
'action' => "Handling",
'no_orders_in_db' => "Det er ingen ordre i databasen.",
'order_email' => "Kjære %s,\n\nStatus på ordre id: %s er endret to %s\n\n",
'email_staff_comments' => "Vår kundeservice har følgende kommentar:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",
'email_sent_from' => "Denne e-post ble automatisk sendt fra %s",
'email_subj_status_change' => "Ordrestatus endret:",
'order_no2' => "Ordre Nr:",
'print_packing_slip' => "Print Packing Slip",
'customer_info' => "Kunde informasjon",
'invoice_address' => "Faktura adresse:",
'delivery_address' => "Leverings adresse:",
'contact_info' => "Kontakt informasjon:",
'tel' => "Tel:",
'mobile' => "Mobil:",
'email' => "E-post:",
'customer_comments' => "Kommentar fra kunde:",
'no_comments_left' => "Ingen kommentar skrevet.",
'order_summary' => "Ordre oppsummering",
'product' => "Produkt",
'code' => "Art.nr",
'quantity' => "Mengde",
'price' => "Pris",
'download_link' => "Last ned:",
'warn_reset' => "Dette vil resette nedlastings muligheten og utløpstiden.",
'reset_link' => "Nullstille",
'download_stats' => "Nedlastet (%s) ganger. Nedlasting utløper %s",
'ip_address2' => "IP Addresse:",
'order_date_time' => "Ordre Dato/Tid:",
'payment_method' => "Betalingsmåte:",
'ship_method' => "Fraktmetode:",
'subtotal' => "Sub Total:",
'total_tax' => "MVA/Avgifter:",
'shipping' => "Frakt:",
'grand_total' => "Totalt:",
'order_notfound' => "Ordrenummer %s ble ikke funnet.",
'order_status' => "Ordre status",
'shipping_date' => "Sendes dato:",
'ship_today' => "Sendes i dag",
'modify_status' => "Endre status:",
'staff_comments' => "Melding fra kundeservice:",
'info_not_sent_customer' => "(Denne informasjonen blir ikke sendt til kunde!)",
'inform_customer' => "Informer kunde:",
'customer_notified' => "(Med denne avuket blir kunde informert om statusendring.)",
'comments_2_customer' => "Kommentar til kunde:",
'comments_2_customer_desc' => "(Dette vil bli lagt til standardmeldningen kunden får om endring i ordrestatus.)",
'save_order_status' => "Lagre ordrestatus",
'paid_by' => "Betalt av:",
'delivered_to' => "Levert til:",
'invoice_reciept_for' => "Faktura / Kvittering til:",
'order_of_time' => "Din ordre av",
'order_id' => "Ordre ID:",
'digi_goods_desc' => "Hvis du har bestilt digtale varer for nedlasting, vil du snart motta en e-post med nedlastingsinstuksjoner. Du kan også nå dette via din brukerkonto hos oss.",
'thank_you' => "Takk for at du handlet hos oss!",
);

$lang['admin']['products'] = array (
'upload_new_images' => "Laste opp bilder",
'no_images_avail' => "Beklager ingen bilder tilgjenglig.",
'prod_added_to_cat' => "Produktet er lagt til kategorien.",
'prod_not_added_to_cat' => "Feilet i å legge produktet i kategorien.",
'prod_removed_from_cat' => "Produktet fjernet fra kategorien.",
'prod_not_removed_from_cat' => "Produktet ble ikke fjernet fra kategorien.",
'title_extraCats' => "Kategori administrasjon",
'manage_cats' => "Administrere kategorier",
'master_cat' => "Hovedkategori:",
'close_window' => "Steng vindu",
'img_added_to_prod' => "Bilde lagt til produkt.",
'img_not_added_to_prod' => "Kunne ikke legge bilde til produkt.",
'img_removed' => "Bilde fjernet fra produkt.",
'img_not_removed' => "Bilde ikke fjernet fra produkt.",
'image_management' => "Bilde administrasjon",
'manage_images' => "Administrer bilder",
'image' => "Bilde",
'action' => "Handling",
'delete_success' => "Sletting vellykket.",
'delete_fail' => "Sletting feilet.",
'update_successful' => "Oppdatering vellykket.",
'update_fail' => "Kunne ikke oppdatere kategori.",
'add_success' => "ble lagt til.",
'add_fail' => "Kunne ikke legge til kategori.",
'prod_inventory' => "Produkter på lager",
'current_prods_in_db' => "Oversikt over produkter i databasen.",
'all_cats' => "Alle kategorier",
'prod_name' => "Produkt navn",
'prod_id' => "Produkt Id",
'prod_code' => "Art. nummer",
'master_cat2' => "Hovedkategori",
'title' => "Tittel",
'stock_level' => "Antall på lager",
'normal_price' => "Ordinær pris",
'sale_price' => "Salgs pris",
'asc' => "Stigende",
'desc' => "Synkende",
'containing_text' => "Beskrivelse",
'filter' => "Filtrer",
'reset' => "Nullstill",
'id' => "id",
'type' => "Type",
'name' => "Navn",
'price_sale_price' => "Pris / Salgs Pris",
'in_stock' => "På lager",
'action' => "Handling",
'languages' => "Språk",
'no_products_exist' => "Ingen produkter i databasen.",
'add_prod_desc' => "Bruk skjemaet for å legge til et produkt.",
'product' => "Produkt",
'prod_name2' => "Produkt navn:",
'prod_stock_no' => "Produkt/Art.nummer:",
'auto_generated' => "(Hvis blankt blir det generert et.)",
'description' => "Beskrivelse:",
'primary_lang' => "(I primærspråket, andre språk kan bli lagt til senere.)",
'category' => "Kategori:",
'image2' => "Bilde:",
'opt_and_thumbs' => "(Ikoner blir automatisk generert hvis et kompatibelt billedformat er benyttet.)",
'upload_new' => "Last opp nytt bilde",
'browse_existing' => "Se gjennom eksisterende bilder",
'normal_price2' => "Ordinær pris:",
'sale_price2' => "Salgs pris:",
'sale_mode_desc' => "(Bare brukt hvis salgs modus er aktiv for hvert produkt.)",
'prod_weight' => "Vekt:",
'tax_class' => "Avgifts nivå:",
'stock_level2' => "Antall på lager:",
'reduce_stock_level' => "(Endres ved hvert solgte produkt.)",
'use_stock_q' => "Bruke lagerstyring?",
'product_type' => "Produkt type:",
'tangible' => "Fysisk",
'digital' => "Digitalt",
'digi_path' => "Digitale produkter må ha en HTTP sti eller en server root sti.",
'digi_info' => "Digital Info:",
'digi_desc' => "<p><strong>HTTP sti:</strong> http://www.domain.com/downloads/download.exe<br />
				<strong>Server Root sti:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Anbafales!)							</strong></p>
<p>Fordelen med å bruke root er at filene kan lagres andre steder en public folders. Hvis denne metoden velges vil Cubecart automatisk generere en nedlastingslenke tilpasset din nedlastingsprofil(utløsptid/antall tillatte nedlastninger).</p>",
'prod_inv_langs' => "Produkter på lager - (Andre språk)",
'use_rich_oth_lang' => "Bruk tekst editoren for å legge til produkter på andre språk.",
'language' => "Språk:",
'update_prod_lang' => "Oppdater produkt språk",
'save_prod_lang' => "Lagre produkt språk",
'other_langs_exdefault' => "Liste over andre språk.",
'no_lang_exist' => "Andre språk for dette produktet er ikke i databasen.",
'opt_add_success' => "Valg navn lagt til.",
'opt_add_fail' => "Valg navn ikke lagt til.",
'att_add_success' => "Valg instillinger lagt til.",
'att_add_fail' => "Valg instillinger ikke lagt til.",
'assign_success' => "Valg lagt til produkt.",
'assign_fail' => "Valg ikke lagt til produkt.",
'product_options' => "Produkt valg",
'product_option' => "Produkt valg",
'quick_assign' => "Hurtig tildel:",
'prod_opts_of' => "produkt valg til",
'to' => "til",
'go' => "Gå",
'opt_step1' => "1. Opprette valg (f.eks. Farge)",
'opt_id' => "ID",
'opt_name' => "Valg navn",
'warn_remove_opt' => "Sikker på at du vil fjerne valg navn? \n\nADVARSEL:ALLE VALG OG INNSTILLINGER MED DETTE NAVNET VIL BLI FJERNET!",
'no_options_made' => "Navn på valg er ikke fjernet.",
'option' => "Valg",
'opt_step2' => "2. Oppgi en verdi (f.eks. Rød)",
'option_attributes' => "Valg instillinger",
'warn_remove_att' => "Er du sikker på at du vil fjerne denne instillingen? \n\nADVARSEL:ALLE VALG OG INNSTILLINGER MED DETTE NAVNET VIL BLI FJERNET!",
'no_attributes_made' => "Ingen instillinger for valg er gjort.",
'attribute' => "Instillinger",
'opt_step3' => "3. Tildel valg instillinger &amp; til produkt (f.eks. T-Skjorte &gt; Farge &gt; Rød)",
'option_attribute' => "Valg instillinger",
'option_price' => "Valg pris",
'add_subtract' => "Legg til / Trekk fra",
'remove_opt_prod' => "Ønsker du å fjerne dette valg fra dette produkt?",
'no_assigned_opts' => "Ingen valg er tildelt noe produkt.",
'prods_made_1st' => "Produkt må legges til før valg kan bli laget.",
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


'store_settings' => "Instillinger",
'edit_below' => "Under kan du redigere butikk instillingene:",
'meta_data' => "Meta Data",
'browser_title' => "Leser tittel:",
'meta_desc' => "Meta beskrivelse:",
'meta_keywords' => "Meta nøkkelord:",
'comma_separated' => "(adskilt med ,)",
'store_co_name' => "Butikk/Firma Navn:",
'store_address' => "Butikk adresse:",
'country' => "Land:",
'zone' => "Område/Fylke:",
'dirs_folders' => "Område &amp; Mapper",
'rootRel' => "Root Public HTML Folder to store:",
'include_slash' => "(Include Trailing Slash)",
'storeURL' => "URL til butikk:",
'eg_domain_com' => "f.eks. http://www.domain.com",
'rootDir' => "Server root:",
'eg_root_path' => "f.eks. /path/to/your/webstore",
'rootRel_SSL' => "Root SECURE Public HTML Folder to store:",
'storeURL_SSL' => "SIKKER URL til butikk:",
'eg_domain_SSL' => "f.eks. https://secure.domain.com",
'rootDir_SSL' => "SIKKER server Root :",
'eg_root_path_secure' => "f.eks. /path/to/your/secure/webstore",
'enable_ssl' => "Aktiver SSL:",
'ssl_warn' => "(ADVARSEL: Endringen gjøres umiddelbart. Sørg for at sikker server root plassering og sikker URL er korrekte og virker før du setter dette valget til Ja)",
'digital_downloads' => "Digitale nedlastinger",
'download_expire_time' => "Nedlasting utgår:",
'seconds' => "(Sekunder)",
'download_attempts' => "Nedlastings forsøk:",
'attempts_desc' => "(Antall ganger kunde kan laste ned produkt.)",
'styles_misc' => "Stiler &amp; Div",
'default_language' => "Primærspråk:",
'store_skin' => "Utseendemal:",
'no_cats_per_row' => "Antall kategorier pr rad:",
'dir_symbol' => "Directory Symbol:",
'prods_per_page' => "Antall produkter pr. side:",
'precis_length' => "Length of product precis:",
'chars' => "(Chars)",
'no_sale_items' => "Antall produkter på salg:",
'no_pop_prod' => "Antall populære produkter:",
'email_name' => "E-post navn:",
'email_name_desc' => "(Avsender e-post fra butikken.)",
'email_address' => "E-post adresse:",
'email_address_desc' => "(Avsender e-post fra butikken.)",
'mail_method' => "E-post sendings metode:",
'mail_recommended' => "(SMTP anbefalt)",
'max_upload_size' => "Max filstørrelse:",
'under_x_recom' => "(Under 2048Kb anbefalt)",
'max_sess_length' => "Max økt tid:",
'db_settings' => "Database instillinger",
'db_host' => "Database vertsnavn:",
'db_username' => "Database brukernavn:",
'db_password' => "Database Passord:",
'db_name' => "Database Navn:",
'db_prefix' => "Database Prefix:",
'gd_settings' => "GD instillinger",
'gd_ver' => "GD Verson:",
'gd_thumb_size' => "Thumbnail størrelse:",
'gd_max_img_size' => "Max bilde størrelse:",
'gd_img_quality' => "GD bilde kvalitet:",
'gd_thumb_size' => "Thumbnail størrelse:",
'gd_gif_support' => "Støtte for GIF: (Sørg for at dette støttes av serveren din)",
'recom_quality' => "(60 - 80 anbefalt)",
'stock_settings' => "Lagerstyring",
'use_stock' => "Vis lagerstatus?",
'allow_out_of_stock_purchases' => "Godta kjøp av varer som ikke er på lager?",
'weight_unit' => "Vekt enhet:",
'time_and_date' => "Tid &amp; Dato",
'time_format' => "Tid Format:",
'time_format_desc' => "(Se <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",
'time_offset' => "Time Offset:",
'time_offset_desc' => "(Seconds - Used for servers in different timezone)",
'date_format' => "Dato format:",
'date_format_desc' => "(Se <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",
'locale_settings' => "Lokale instillinger",
'default_currency' => "Primær valuta",
'inc_tax_prices' => "MVA/skatter inkuldert i pris?",
'sale_mode' => "Salgs modus:",
'percent_of_all' => "prosent av alle priser",
'ind_sale_per_item' => "Indivduell salgs pris",
'sale_mode_off' => "Salgs modus av",
'sale_per_off' => "Salg prosent av:",
'sale_per_off_desc' => "(Prosent til å bli trukket av alle priser)",
'diff_dispatch' => "Godta utsending til andre adresser enn faktura adresse?",
'update_settings' => "Oppdater instillinger",
'update_success' => "oppdatering vellykket.",
'update_fail' => "ble ikke oppdatert.",
'add_success' => "vellykket lagt til",
'add_fail' => "ble ikke lagt til.",
'delete_success' => "Vellykket slettet.",
'delete_failed' => "Sletting feilet.",
'currencies' => "Valutaer",
'currency' => "Valuta",
'currencies_desc' => "Slett, legg til eller oppdater valutaer her:",
'c_code' => "Kode",
'c_name' => "Navn",
'c_value' => "Verdi",
'symbol_left' => "Symbol venstre",
'symbol_right' => "Symbol høyre",
'decimal_places' => "Desimal plassering",
'last_updated' => "Sist oppdatert",
'c_status' => "Status",
'no_currencies' => "Det er ingen valuta i databasen.",
'countries' => "Land",
'country' => "Land",
'edit_countries_below' => "Slett, legg til eller oppdater land her:",
'disable' => "Deaktiver",
'enable' => "Aktiver",
'iso' => "ISO",
'iso_name' => "Navn",
'iso3' => "ISO3",
'num_code' => "Nr Kode",
'action' => "Handling",
'warn_del_country' => "Vil du virkelig slette? Alle fylker, områder and soner over vil bli slettet.",
'no_countries_in_db' => "Det er ingen land i databasen.",
'edit_counties' => "Vennligst legg til, slett, eller oppdater fylker,områder og zoner her:",
'no_counties_in_db' => "Det er ingen områder, fylker eller soner i databasen.",
'tax_Settings' => "MVA/skatt instillinger",
'edit_locale_below' => "Vennligst gjør lokale instillinger under:",
'tax_only_to' => "MVA/skatt BARE gyldig for dette området:",
'manage_tax_below' => "Vennligst gjør dine MVA/avgiftsinstillinger under. Disse kan bli lagt til hvert produkt så du kan ha forskjellige avgifter for forskjellige produkter.",
'tax_class2' => "MVA/skatt gruppe",
'rate_per' => "Verdi (%)",
'no_taxes_setup' => "Ingen MVA/avgifter konfigurert.",
'tax' => "MVA/Avgift",
'show_latest' => "Vis siste produkter på hjemmesiden?",

'no_latest' => "Antall siste produkter å vise:",

'off_line_settings' => "Offline instillinger",

'off_line' => "Sette butikk offline?",

'off_line_content' => "Meldning ved offline:",

'off_line_allow_admin' => "Admin kan se butikk offline? (Krever admin innlogging)",

);

$lang['admin']['stats'] = array(
'store_stats' => "Statistikk",
'choose_view' => "Vennligst velg ønsket statistikk:",
'search_terms' => "Søke begrep",
'product_pop' => "Produkt popularitet",
'cust_online' => "Besøkende nå",
'search_terms_order_by' => "Søke begrep (Ordered by No Searches)",
'sorry_no_data' => "Beklager, ingen informasjon tilgjenglig.",
'product_pop_ordered_by' => "Populære produkter  (Visninger)",
'cust_active' => "Aktive kunder de siste 15 minuttene.",
'hash' => "#",
'customer' => "Kunde",
'location' => "Plassering",
'sess_start_time' => "Økt start tidspunkt",
'last_click_time' => "Siste klikk",
'sess_length' => "Økt Lengde",
'geust' => "Gjest",
'signed_in' => "Logget inn",
);

$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",
'global_risk' => "ADVARSEL: Konfigurasjonsfilen: 'includes/global.inc.php' er skrivbar og utsatt for sikkerhetsrisiko. Vennligst endre rettighetene til 0644 snarest.",
'401' => "Error 401: Du har ikke tilatelse til å nå denne siden. Vennligst be superbrukerene om assistanse.",
'welcome_note' => "Velkommen til CubeCart Administrasjons Panel",
'last_login' => "Sist logged inn ",
'by' => "er",
'failed' => "feilet.",
'store_overview' => "Overikt:",
'version' => "Versjon:",
'visit_cc' => "Besøk CubeCart nedlastings Server",
'no_products' => "Antall produkter:",
'no_customers' => "Antall kunder:",
'img_upload_size' => "Størrelse på bilde mappe:",
'no_orders' => "Antall ordre:",
'quick_search' => "Hurtigsøk:",
'order_no' => "Ordrenummer:",
'search_now' => "Søk nå",
'customer' => "Kunde:",
'login_failed' => "Innlogging feilet! Enten var brukernavn eler passord feil.",
'new_pass_sent' => "Et nytt passord er sendt til",
'no_admin_sess' => "Ingen admin økt ble funnet.",
'login_fail_2' => "Pålogging feilet. Vennligst prøv igjen.",
'login_below' => "Logg på her:",
'username' => "Brukernavn:",
'password' => "Passord:",
'request_pass' => "Be om passord",
'login' => "Logg på",
'logout_failed' => "Avloggging feilet, ingen admin økt aktiv.",
'reset_pass_email' => "Kjære %s,

Du, eller noen prøver å be om å nullstille ditt passord.

Din nye påloggings informasjon er:
~~~~~~~~~~~~~~~~~~~~~~~~~~
Brukernavn: %s
Passord   : %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

This email was sent from %s/admin/requestPass.php\n
Senders IP Address: %s",
'pass_reset_failed' => "Nullstilling av passord feilet.",
'enter_email_below' => "Vennligst fyll inn e-postadresse:",
'email_address' => "E-post adresse:",
'send_pass' => "Send Passord",
);

$lang['admin']['nav'] = array(
'permission_error' => "Ingen adgangm sjekk dine rettigheter.",
'navigation' => "Navigering",
'admin_home' => "Admin hjem",
'store_home' => "Butikk front",
'store_config' => "Butikk instillinger ",
'gen_settings' => "Generelle instillinger",
'taxes' => "MVA/skatter",
'countries_zones' => "Land &amp; Soner",
'currencies' => "Valuta",
'modules' => "Moduler",
'shipping' => "Frakt",
'gateways' => "Betalingsystemer",
'affiliates' => "Affiliates",
'catalog' => "Katalog",
'view_products' => "Se produkter",
'add_product' => "Legg til produkt",
'product_options' => "Produkt valg",
'view_categories' => "Se kategorier",
'add_categories' => "Legg til kategorier",
'customers' => "Kunder",
'view_customers' => "Se kunder",
'email_customers' => "E-post kunder",
'orders' => "Ordre",
'file_manager' => "Filbehandler",
'manage_images' => "Administrere bilder",
'upload_images' => "Last opp bilde",
'statistics' => "Statistikk",
'view_stats' => "Se statistikk",
'documents' => "Dokumenter",
'homepage' => "Hjemmeside",
'site_docs' => "Side dokumenter",
'misc' => "Diverse",
'server_info' => "Server Info",
'admin_users' => "Admin brukere",
'administrators' => "Administratorer",
'admin_sessions' => "Admin Økter",
);

$lang['admin']['incs'] = array(
'administration' => "Administration",
'logged_in_as' => "Logget inn som:",
'logout' => "Logg ut",
'change_pass' => "Endre passord",
'error_editing' => "Feil ved endring. Data finnes ikke.",
'config_updated' => "Konfigurasjon oppdatert. Sørg for at filrettigheter er satt tilbake korrekt.",
'cant_write' => "Kunne ikke åpne fil '%s' for skriving. Prøv å endre CHMOD verdi til 0777. Husk å sett den tilbake til 0644 etterpå!",
'db_config_updated' => "Konfigurasjonen Oppdatert.",
'db_cant_write' => "Oppdatert Mislykkes!",
'select_above' => "Velg ovenfor",
);

/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////
/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Yes";
$lang['front']['no'] = "No";
/////////////////////////////////////

$lang['front']['boxes'] = array(
'lang_links' => "Nyttige linker",
'reg_and_checkout' => "Registrer &amp; Fullfør",
'cont_shopping' => "Fortsette handel",
'edit_del_add' => "Redigere leveringsadresse",
'edit_inv_add' => "Redigere fakturaadresse",
'empty_cart' => "Tøm handlekurv",
'prev_page' => "Forrige side",
'homepage' => "Forsiden",
'shop_by_cat' => "Kategorier",
'sale_items' => "Produkter på salg",
'save' => "Spar",
'currency' => "Valuta",
'information' => "Informasjon",
'products' => "Produkter:",
'categories' => "Kategorier:",
'prices' => "Priser:",
'language' => "Språk",
'mailing_list' => "Mailing List",
'subscribe_below' => "Abonner på vår mailingliste:",
'email' => "E-post:",
'join_now' => "Meld inn",
'already_subscribed' => "E-post adressen %s er alt registrert i vår mailingliste. Vennligst logg deg inn til din konto og meld deg av.",
'enter_valid_email' => "Vennligst oppgi en gyldig adresse.",
'added_to_mail' => "Takk, %s har blitt lagt til vår mailingliste.",
'subscribed_to_mail' => "Takk, %s har blitt lagt til vår mailingliste.",
'popular_products' => "Populære produkter",
'featured_prod' => "Aktuelle produkter",
'sale_items' => "Salg",
'search_for' => "Søk etter:",
'go' => "Søk",
'welcome_back' => "Velkommen tilbake",
'logout' => "Logg ut",
'your_account' => "Din konto",
'welcome_guest' => "Velkommen gjest     ",
'login' => "Logg inn",
'register' => "Registrer",
'shopping_cart' => "Handlekurv",
'basket_empty' => "Kurven er tom.",
'items_in_cart' => "Produkter i handlekurv:",
'total' => "Totalt:",
'view_basket' => "Se handlekurv",
);

$lang['front']['account'] = array(
'your_account' => "Din konto",
'personal_info' => "Personlig info",
'order_history' => "Ordre ",
'change_password' => "Endre passord",
'newsletter' => "Nyhetsbrev",
'login_to_view' => "Du må logge inn for å se denne siden.",
);

$lang['front']['changePass'] = array(
'password_incorrect' => "Passordet var ikke korrekt.",
'conf_not_match' => "Ditt bekreftende passord passer ikke ditt nye passord.",
'change_pass' => "Endre passord",
'password_updated' => "Takk, ditt passord er oppdatert.",
'change_pass_below' => "Vennligst endre ditt passord her:",
'old_pass' => "Gammelt passord:",
'new_pass' => "Nytt passord:",
'confirm_pass' => "Bekreft passord:",
'submit' => "Send",
);

$lang['front']['dnExpire'] = array(
'sorry' => "Beklager",
'expired' => "Din nedlasting er ikke gyldig eller har utgått.",
);

$lang['front']['forgotPass'] = array(
'forgot_pass' => "Glemt passord",
'email' => "E-post:",
'send_pass' => "Send Passord",
'reset_email' => "Kjære %s %s,

Du, eller noen har bedt om å nullstille ditt passord. Dine nye påloggings data er:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Brukernavn: %s
Passord   : %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
For å logge på, vennligst følg linken under:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Denne s-post var sendt fra %s
Avsenders IP Addresse: %s",
'new_pass_sent' => "Et nytt passord er sendt til %s.",
'email_not_found' => "Beklager, men e-post adressen ble ikke funnet.",
'enter_email' => "Vennligst skriv inn din e-postaddresse for å få tilsendt et midlertidig passord:",
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
'newOrderMsg' => "EN kunden har nettopp laget det bestillingen %s, å utsikt denne ordre behage følg etter koble sammen neden: \n\n %s",
'newOrderSubj' => "Ny Lager Ordre Oppstilt",
'payment' => "Betaling",
'cart' => "Handlekurv",
'address' => "Addresse",
'payment' => "Betaling",
'complete' => "Fullført",
'fill_out_below' => "Vennligst fyll ut skjemaet:",
'transferring' => "Overfører til Betaling",
'go_now' => "Gå videre!",
'continue' => "Fortsett",
'choose_method' => "Vennligst velg ønsket Betalingsmåte:",
'your_comments' => "Dine kommentarer:",
'none_configured' => "Beklager, ingen Betalingsmetoder er konfigurert.",
);

$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",
'login' => "Pålogging",
'username' => "Brukernavn:",
'password' => "Passord:",
'remember_me' => "Husk meg?",
'forgot_pass' => "Glemt passord?",
'login_success' => "Påloggingen var godkjent.",
'already_logged_in' => "Du er allerede logget på.",
'login_failed' => "Pålogging feilet!",
'login_below' => "Vennligst logg på her:",
);

$lang['front']['logout'] = array(
'logout' => "Logg av",
'session_destroyed' => "Din økt er ødelagt.",
'no_session' => "Ingen økt å ødelegge. Du her komme hit ved en feiltakelse.",
);

$lang['front']['newsletter'] = array(
'newsletter_prefs' => "Nyhetsbrev instillinger",
'prefs_updates' => "Instillinger for nyhetsbrev har blitt oppdatert.",
'edit_prefs_below' => "Vennligst rediger dine nyhetsbrev instillinger under:",
'subscribe' => "Abonnere på mailingliste?",
'email_format' => "E-post format:",
'plain_text' => "Ren tekst",
'html' => "HTML",
'html_abbr' => "Hypertext Markup Language",
'update' => "Oppdater",
'login_required' => "Du må logge inn for å se denne siden.",
);

$lang['front']['noShip'] = array(
'sorry' => "Beklager",
'desc' => "Vi kan ikke sende bestillinger til valgt land.",
);

$lang['front']['overWeight'] = array(
'sorry' => "Beklager",
'desc' => "Vi kan ikke sende bestillinger med denne vekt.",
);

$lang['front']['profile'] = array(
'enter_valid_tel' => "Telefonnummere kan bare inneholde tall.",
'complete_all' => "Se til at alle påkrevede felter er utfylt.",
'email_invalid' => "Vennligst fyll inn en gyldig e-post adresse.",
'numeric_only' => "Telefonnummert kan bare inneholde tall.",
'email_inuse' => "Beklager, e-postadressen er alt brukt i vår database.",
'update_email' => "Kjære %s %s,\n\n
Denne meldingen er sendt for å informere om at oppdateringen av din peronlige informasjon er utført. Hvis du mener dette er gjort av andre enn deg selv, vennligst ta kontakt med kundeservice umiddelbart slik at de kan sjekke dette.\n\n
\n\n
Denne e-post medlingen ble sendt av %s\n
Avsenders IP adresse: %s",
'update_email_subj' => "Personlig informasjon oppdatert",
'personal_info' => "Personlig informasjon",
'account_updated' => "Din konto er oppdatert. Du kan endre den når som helst.",
'edit_below' => "Vennligst endre din personlige informasjon under:",
'title' => "Tittel:",
'first_name' => "Fornavn:",
'last_name' => "Etternavn:",
'email' => "E-post:",
'address' => "Adresse:",
'town' => "By:",
'county' => "Fylke/område:",
'postcode' => "Posnummer:",
'country' => "Land:",
'phone' => "Telefon:",
'mobile' => "Mobiltelefon:",
'update_account' => "Oppdatere konto",
'login_required' => "Du må logge inn for å kunne se denne siden.",
);

$lang['front']['reg'] = array(
'fill_required' => "Vennligst fyll ut alle påkrevede felter.",
'pass_not_match' => "Passord er feil!Vennligst påse at riktig passord benyttes.",
'enter_valid_email' => "Vennligst påse at du bruker en gyldig e-post adresse.",
'enter_valid_tel' => "Telefonnummere kan bare inneholde tall.",
'email_in_use' => "Beklager, e-postadressen er allerede i bruk i vår database.",
'note_required' => "Felter merket med (*) må være utfylt for å kunne gjennomføre bestillingen.",
'express_reg' => "Hurtigregistrering",
'submit_and_cont' => "Send &amp; Fortsett",
'personal_details' => "Personlige Detaljer",
'address' => "Adresse",
'title' => "Tittel:",
'title_desc' => "(Herr/Frue/Frøken)",
'first_name' => "Fornavn:",
'address2' => "Adresse:",
'last_name' => "Etternavn:",
'email_address' => "E-post adresse:",
'town' => "By:",
'phone' => "Telefon:",
'county' => "Fylke/område:",
'mobile' => "Mobiltelefon:",
'country' => "Land:",
'postcode' => "Postnummer:",
'security_details' => "Innloggings detaljer",
'choose_pass' => "Velg passord:",
'conf_pass' => "Bekreft passord:",
'privacy_settings' => "Kontakt detaljer",
'receive_emails' => "Jeg ønsker å motta e-post",
'email_format' => "E-post format:",
'styled_html' => "HTML",
'plain_text' => "Ren tekst",
'tandcs' => "Vilkår; ",
'please_read' => "Vennligst sørg for å les våre",
);


$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",
'email_body' => "Kjære %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
For å se dette produktet, trykk på linken under:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Denne meldningen var sendt fra %s
Avsenders IP adresse: %s",
'email_subject' => "Melding fra: %s",
'tellafriend' => "Tips en venn",
'message_sent' => "Takk, din melding har blitt sendt til <strong>%s</strong> about '%s'. Hvis du ønsker å tipse flere venner kan du gjøre det i skjemaet under:",
'fill_out_below' => "Vennligst send skjemaet for å tipse en venn '%s'.",
'friends_name' => "Din venns navn:",
'friends_email' => "Venns e-post:",
'your_name' => "Ditt navn:",
'your_email' => "Din e-post:",
'message' => "Melding:",
'default_message' => "Jeg fant denne '%s' og tenkte dette kunne interessere deg.",
'send' => "Send",
);

$lang['front']['unsubscribe'] = array(
'unsubscribe' => "Meld av",
'email' => "E-post:",
'go' => "Meld av",
'enter_valid_email' => "Vennligst fyll inn gyldig e-post adresse.",
'email_removed' => "Takk, <strong>%s</strong> har blitt fjernet fra vår mailing liste.",
'email_not_found' => "Beklager, <strong>%s</strong> ble ikke funnet i vår mailing liste eller er allerede meldt av.",
'enter_email_below' => "Vennligst fyll ut e-post adresse for å melde av mailing liste:",
);

$lang['front']['viewCat'] = array(
'search_results' => "Søkeresultat",
'sale_items' => "Produkt på salg",
'image' => "Bilde",
'description' => "Beskrivelse",
'price' => "Pris",
'products_in' => "Produkter på:",
'buy' => "Kjøp",
'more' => "Mer",
'out_of_stock' => "IKKE PÅ LAGER",
'no_products_match' => "Beklager, ingen produkter matche ditt søk:",
'no_prods_in_cat' => "Det er ingen produkter i katalogen.",
);

$lang['front']['viewDoc'] = array(
'error' => "Feil",
'does_not_exist' => "Dokumentet finnes ikke.",
);

$lang['front']['viewOrder'] = array(
'order_no' => "Ordrenummer:",
'customer_info' => "Kunde Info:",
'invoice_address' => "Faktura adresse:",
'delivery_address' => "Leverings adresse:",
'na' => "n/a",
'customer_comments' => "Kommentarer fra kunde:",
'order_summary' => "Ordre oppsumering:",
'product' => "Produkt",
'product_code' => "Art.nr",
'quantity' => "Antall",
'price' => "Pris",
'download_here' => "Last ned her",
'review_below' => "Se ordren her:",
'order_date_time' => "Ordre Dato/Tid:",
'payment_method' => "Betalingsmåte:",
'ship_method' => "Fraktmetode:",
'subtotal' => "Subtotalt:",
'total_tax' => "MVA:",
'shipping' => "Frakt:",
'grand_total' => "Ordre Totalt:",
'order_not_found' => "Ordrenummeret ble ikke funnet.",
'login_required' => "Du må logge på for å se denne siden.",
);

$lang['front']['viewOrders'] = array(
'your_orders' => "Dine ordre",
'orders_listed_below' => "Følgende ordre er registrert på denne konto:",
'order_no' => "Ordre nr",
'status' => "Status",
'date_time' => "Dato/Tid",
'action' => "Handling",
'view' => "Se",
'no_orders' => "Det er ingen ordre registrert på deg i vårt system. Hvis du mener dette er en feil, vennligst ta kontakt med kundeservice.",
'login_required' => "Du må logge deg på for å se denne siden.",
);

$lang['front']['viewProd'] = array(
'product' => "Produkt",
'product_info' => "Produkt informasjon",
'price' => "Pris:",
'product_code' => "Art.nr:",
'tellafriend' => "Tips en venn",
'quantity' => "Antall:",
'more_images' => "[+] Flere bilder",
'add_to_basket' => "Legg i handlekurv",
'location' => "Sted:",
'no_instock' => "På lager:",
'instock' => "På lager",
'out_of_stock' => "UTSOLGT",
'prod_opts' => "Produkt valg:",
'prod_not_found' => "Produktet finnes ikke.",
);

$lang['front']['step1'] = array(
'lang_empty_cart' => "Handlekurven er tom.",
'allready_customer' => "Tilbakevendene kunde?",
'login_below' => "Vennligst logg deg inn her:",
'username' => "Brukernavn:",
'password' => "Passord:",
'remember_me' => "Husk meg?",
'login' => "Logg inn",
'forgot_pass_q' => "Glemt passord?",
'need_register' => "Registrere deg?",
'express_register' => "Registreringen kan gjøres enkelt og raskt.",
'reg_and_cont' => "Registrer &amp; Fortsett",
'cont_shopping_q' => "Fortsette handelen?",
'cont_shopping' => "Forsette handelen",
'cont_browsing' => "Fortsette å se sidens innhold uten å registrere, klikk på knappen under. N.B: du vil ikke få lagt inn ordre uten å være registrert først.",
);


$lang['front']['cart'] = array(
'free_shipping' => "Frakt fritt",
'view_cart' => "Se handlekurv",
'cart' => "Handlekurv",
'address' => "Adresse",
'payment' => "Betaling",
'complete' => "Utført",
'add_more' => "Legge til flere produkter? Legg inn art.nummer:",
'add' => "legg til",
'qty' => "Antall",
'product' => "Produkt",
'code' => "Kode",
'stock' => "Lager",
'price' => "Pris",
'line_price' => "Linjepris",
'delete' => "Slette",
'remove' => "Fjerne produkt",
'invoice_address' => "Faktura adresse",
'delivery_address' => "Leverings adresse",
'title' => "Tittel:",
'first_name' => "Fornavn:",
'last_name' => "Etternavn:",
'address2' => "Adresse:",
'town' => "By:",
'county' => "Fylke/område:",
'postcode' => "Postnummer:",
'country' => "Land:",
'edit_invoice_address' => "Rediger fakturaadresse",
'edit_delivery_address' => "Redigere leveringsadresse",
'stock_warn' => "Du har bestilt flere produkter enn det som for tiden er på lager. Du må regne med noe lenger leveringstid til vi har fått varer inn på lager igjen. Vi vil kontakte deg angående leveringstid.",
'amount_capped' => "Vi kan ikke sende ordre som overskrider vår lagerbeholdning.<br />Antallet for denne ordren er redusert til",
'na' => "n/a",
'shipping' => "Frakt:",
'tax' => "MVA:",
'subtotal' => "Subtotal:",
'cart_total' => "Totalt:",
'if_changed_quan' => "(hvis du har endret antall)",
'update_cart' => "Oppdater handlekurv",
'continue' => "Fortsette",
'cart_empty' => "Din handlekurv er tom.",
);

$lang['front']['confirmed'] = array(
'confirmation_screen' => "Bekreftelse",
'cart' => "Handlekurv",
'address' => "Adresse",
'payment' => "Betaling",
'complete' => "Fortsette",
'order_success' => "Takk for deres bestilling! Besøk oss gjerne igjen så snart du har muligheten.",
'order_fail' => "Beklager, ordren kunne ikke gjennomføres!",
'try_again_desc' => "Du kan prøve å bestille handlekurvens innhold igjen ved å trykke på knappen under:",
'try_again' => "Prøv igjen",
'request_login' => "Du må logge på for å se siden.",
);

$lang['front']['orderSuccess'] = array(
'inv_email_body_1' => "Kjære %s,

Takk for din ordrenr: %s bestilt %s

Bestillingen ble gjennomført uten problemer og vil bli effektuert så fort som mulig (hvis varer er på lager).

~~~~~~~~~~~~~~~~~~~~~~~~~~
Navn: %s
Subtotalt: %s
Frakt & Forsendelse: %s
MVA: %s
Totalt: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Fakturaadresse:
%s
%s
%s
%s
%s
%s
%s

Fraktadresse:
%s
%s
%s
%s
%s
%s
%s

Betalingsmåte: %s
Fraktmetode: %s",
'inv_email_body_2' => "\nDine kommentarer: %s\n",
'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n
Produkter:\n",
'inv_email_body_4' =>"Art.nr: %s\n",
'inv_email_body_5' => "Valg: %s\n",
'inv_email_body_6' => "Antall: %s
Produktnr: %s
Pris: %s\n\n",
'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'inv_email_subject' => "Ordrenr: ",
'digi_email_body1' => "Kjære %s,

Takk for din ordrenr: %s bestilt %s

Under vil du finne en link til det digitale produktet du har bestilt(hvis du har bestilt et).
VIKTIG: denne linken vil utløpe %s og du har %s forsøk på å laste ned filen. Hvis du har problemer med dette, vennligst ta kontakt med oss pr e-post, vennligst bruk ditt ordrenummer som referanse.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
DOWNLOAD LINK:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",
'digi_subject' => "Tilgang til nedlastinger: ",
);

$lang['misc'] = array(
'pages' => " sider ",
//////////////////////////////////////////
// START: Added in 3.0.3
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

'localeSettings' => "Locale Settings:",

'storeCountry' => "Store Country:",

'US' => "United States of America",

'UK' => "United Kingdom",

'EU' => "Europe",

'currenciesAccord' => "This will setup the currencies and other settings accordingly.",

'help' => "Help",

'administratorSettings' => "Administrator Configuration Settings:",

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

'contToStep' => "Continue to Step %", // Continue to Step x 

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