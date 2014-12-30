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
|	Danish (DA) Language File	
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'en_EN');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Ja";

$lang['admin']['no'] = "Nej";

$lang['admin']['edit'] = "Redig�r";

$lang['admin']['delete'] = "Slet";

$lang['admin']['delete_q'] = "Er du sikker p� at du vil slette?";

$lang['admin']['add'] = "Tilf�j";

$lang['admin']['add_new'] = "Tilf�j ny";

$lang['admin']['write'] = "Indtast";

$lang['admin']['read'] = "L�s";

$lang['admin']['na'] = "Ikke relevant"; // as in not applicable

$lang['admin']['all'] = "ALT";

$lang['admin']['remove'] = "Fjern";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Sletning lykkedes.",

'del_failed' => "Sletning mislykkedes.",

'update_success' => "Opdatering lykkedes.",

'update_fail' => "Opdatering mislykkedes.",

'add_success' => "Tilf�jelse af bruger lykkedes.",

'add_failed' => "Tilf�jelse af bruger mislykkedes",

'administrators_title' => "Administratorer",

'current_users' => "Nuv�rende administratorer.",

'id' => "Id",

'user_notes' => "Brugernavn / Noter",

'no_logins' => "Antal Logins",

'super_user' => "Super bruger?",

'email' => "Email",

'action' => "Handling",

'add_admin' => "Benyt evt. skemaet herunder til at tilf�je en administrator.",

'full_name' => "Navn:",

'username' => "Brugernavn:",

'administrator' => "Administrator",

'email2' => "Email:",

'password' => "Adgangskode:",

'pass_warn' => "(Indtast kun en adgangskode hvis du �nsker at �ndre den nuv�rende adganskode.)",

'make_super' => "G�r til superbruger?",

'notes' => "Noter:",

'permissions' => "Tilladelser",

'pass_updated' => "Adgangskode opdateret.",

'pass_not_updated' => "Adgangskode blev ikke opdateret.",

'change_pass_below' => "Adgangskoden �ndres herunder:",

'old_pass' => "Gammel adgangskode:",

'new_pass' => "Ny adgangskode:",

'confirm_pass' => "Bekr�ft adgangskode:",

'perms_updated' => "Tilladelser opdateret.",

'set_perms' => "V�lg indstillinger for brugerens tilladelser herunder.",

'section' => "Sektion",

'nb_bulk' => "Bem�rk: For at sende en masse-email til kunder skal brugeren have skriverettigheder under kunder.",

'admin_sessions' => "Administrator Sessioner",

'sessions_desc' => "Herunder vises seneste log ind fors�g til admin. Hold �je med dette for at sikre mod fors�g p� overtagelse. Det er st�rkt anbefalet at �ndre admin adgangskoden regelm�ssigt.",

'login_id' => "Log ind ID",

'time' => "Tid",

'ip_address' => "IP Adresse",

'success' => "Fuldendt",

);



$lang['admin']['categories'] = array (

'delete_success' => "Sletning lykkedes.",

'delete_fail' => "Sletning mislykkedes.",

'update_success' => "Opdatering lykkedes.",

'update_fail' => "Opdatering af kategori mislykkedes.",

'add_success' => "Tilf�jelse lykkedes.",

'add_failed' => "Tilf�jelse til kategori mislykkedes.",

'categories' => "Kategorier",

'categories_desc' => "Herunder vises en liste af alle nuv�rende kategorier i databasen.",

'cat_name' => "Kategorinavn",

'dir' => "Bibliotek",

'image' => "Billede",

'no_products' => "Ingen produkter",

'action' => "Handling",

'cannot_del' => "Denne kategori kan ikke slettes, da den indeholder produkter.",

'no_cats_exist' => "Der er ingen kategorier i databasen.",

'add_desc' => "Du kan tilf�je kategorier med ubegr�nset antal underkategorier, uploade nye billeder eller genanvende billeder fra serveren.",

'category' => "Kategori",

'category_name' => "Kategorinavn:",

'category_level' => "Kategori-niveau:",

'top_level' => "�verste niveau",

'image_optional' => "Billede: (Valgfrit)",

'upload_new_image' => "Upload nyt billede",

'browse_existing' => "Gennemse billeder",

'ship_by_cat' => "Forsendelse efter kategori",

'per_ship' => "Per forsendelse:",

'per_item' => "Per produkt:",

'per_int_ship' => "Per international forsendelse:",

'per_int_item' => "Per internationalt produkt:",

);



$lang['admin']['customers'] = array (

'customers' => "Kunder",

'delete_success' => "Sletning lykkedes.",

'delete_fail' => "Sletning mislykkedes.",

'update_success' => "Kundeopdatering lykkedes.",

'update_fail' => "Kundeopdatering mislykkedes.",

'search_term' => "S�geord:",

'reset' => "Genetabl�r",

'name' => "Navn",

'email' => "Email",

'invoice_add' => "Faktureringsadresse",

'phone' => "Tlf nr",

'reg_ip' => "Reg dato / IP Adresse",

'no_orders' => "Ingen bestillinger",

'action' => "Handling",

'no_cust_exist' => "Ingen kunder i databasen.",

'edit_below' => "Redig�r kunden herunder:",

'title' => "Titel",

'first_name' => "Fornavn:",

'last_name' => "Efternavn:",

'email2' => "Email:",

'address' => "Adresse:",

'town' => "By:",

'county' => "Omr�de:",

'postcode' => "Postnummer:",

'country' => "Land:",

'phone2' => "Tlf nr:",

'edit_customer' => "Redig�r kunde",

'no_download_email' => "Der var ingen email at hente.",

'email_customers' => "Email kunder",

'create_email' => "Skriv din email herunder:",

'hint' => "Tip:",

'click_source' => "Du kan klikke p� kilde-tasten herover og inds�tte et html dokument du har lavet p� forh�nd.",

'important' => "Vigtigt:",

'absolute_links' => "S�rg for at alle billeder og links er fuldkomne (dvs indeholder fuldt dom�nenavn). I de fleste lande skal man ved lov s�rge for et link til afbestilling:",

'email_subject' => "Email emne:",

'senders_name' => "Afsenders navn:",

'senders_email' => "Afsenders email:",

'return_path' => "Retur-sti:",

'bounce_desc' => "(Retur-sti for emails der ikke kan afleveres.)",

'send_test' => "Send en test-email?",

'test_email_recip' => "Modtager af test-email:",

'send_email' => "Send email",

'download_or_send' => "V�lg venligst om kunders emailadresser skal hentes eller en masse-email skal sendes via denne internetside.",

'please_choose' => "V�lg:",

'used_to_download' => "Dette benyttes til at hente emailadresser til brug i masse-email software.",

'bulk_to_subscribed' => "Dette g�r det muligt at sende en masse-email KUN til dem der har meldt sig til mailing listen gennem denne internetside.",

'include_name' => "Tilf�j navn?",

'download_email' => "Hent email",

'send_email' => "Send email",

'sending_complete' => "Afsendelse fuldendt",

'sending' => "Sender email",

'recipient' => "Modtager:",

'prev_page' => "Foreg�ende side",

'page' => "Side:",

'bulk_finished' => "Masse-email-funktionen har fuldendt sin opgave.",

'time_taken' => "Tid benyttet:",

'recipients' => "Modtagere:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Hjemmesiden blev ikke opdateret. S�rg venligst for at fil-tilladelser for includes/static/home.inc.php er korrekte.",

'update_success' => "Opdatering af hjemmesiden lykkedes.",

'homepage' => "Hjemmeside",

'enabled' => "Aktiveret:",

'enabled_desc' => "(Hvis dette er deaktiveret vil standardsproget anvendes i stedet.)",

'language' => "Sprog:",

'title' => "Titel:",

'use_rich_text' => "Brug venligst rich text editoren herunder for at redigere hjemmesiden for dette website. S� snart du gemmer, sker �ndringerne p� hjemmesiden, s� s�rg endelig for at gennemse det redigerede f�r du gemmer.",

'update_homepage' => "Opdat�r hjemmeside",

'delete_success' => "Dokumentet er slettet.",

'delete_fail' => "Sletning mislykkedes.",

'update_success' => "Opdatering lykkedes.",

'update_fail' => "Opdatering mislykkedes.",

'add_success' => "Tilf�jelse lykkedes.",

'add_fail' => "Tilf�jelse mislykkedes.",

'site_docs_other_lang' => "Sidens dokumenter - (andre sprog)",

'use_rich_text' => "Benyt venligst rich text editoren herunder til at tilf�je eller redigere dokumenter til sitet p� andre sprog.",

'site_doc_other_lang' => "Sitet dokument - (Andre sprog)",

'doc_name' => "Dokumentnavn:",

'language' => "Sprog:",

'update_doc' => "Opdat�r dokument",

'save_doc' => "Gem dokument",

'current_doc_list' => "Herunder vises en liste af alle sitets nuv�rende dokumenter. Du kan have et ubegr�nset antal dokumenter og de kan redigeres og/eller slettes n�r som helst.",

'doc_name2' => "Dokumentnavn",

'action' => "Handling",

'no_site_docs' => "Der er ingen site dokumenter i databasen.",

'site_docs' => "Site dokumenter",

'site_doc' => "Site Dokumenter",

'languages' => "Sprog",

'no_docs' => "Der er ingen site dokumenter i databasen.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Billed browser",

'file' => "Fil:",

'no_imgs' => "Der er ingen billeder tilg�ngelige. Luk dette vindue og upload et billede i stedet.",

'preview' => "Se eksempel:",

'ok' => "OK",

'cancel' => "Annul�r",

'prod_cat_use_img' => "Billedet '%s' benyttes til produkter eller kategorier.",

'continue_q' => "Forts�t med sletning?",

'site_doc_use_img' => "Billedet '%s' benyttes til site dokumenter.",

'home_use_img' => "Billedet '%s' benyttes p� sitets hjemmeside.",

'gallery_use_img' => "Billedet '%s' benyttes i et galleri af produktbilleder.",

'image_deleted' => "Billedet er slettet.",

'delete_failed' => "Sletning mislykkedes.",

'image_manager' => "Billed administration",

'delete_from_server' => "Herunder kan du slette billeder fra serveren.",

'img_click_prev' => "Billede (Klik for at se eksempel)",

'size' => "St�rrelse",

'action' => "Handling",

'no_images_added' => "Ingen billeder er tilf�jet.",

'prev_file' => "Se eksempel p� fil",

'close_window' => "Luk vinduet",

'no_image_selected' => "Ingen eksempelfil valgt.",

'file_uploader' => "Fil Uploader",

'upload_image' => "Upload billede",

'please_browse_img' => "S�g venligst efter dit billede:",

'file_too_big' => "Fejl: %s er over %s",

'img_already_exists' => "Fejl: %s findes allerede, omd�b venligst den fil du vil uploade eller s�g i stedet efter denne fil.",

'upload_too_large' => "Fejl: Du s�gte ikke efter et billede til at uploade, eller filen var for stor til serveren. Standard maksimum for upload er 2MB.",

'not_valid_mime' => "Fejl: %s er ikke en gyldig filtype.",

'image_upload_success' => "Upload af %s lykkedes.",

'back' => "&laquo; Tilbage",

);



$lang['admin']['misc'] = array (

'license_form' => "Licensformular",

'write_error' => "includes/global.inc.php kunne ikke �bnes til indtastning. Pr�v at �ndre CHMOD v�rdien til 0777. Husk at genv�lge indstillingen 0644 bagefter!",

'try_again' => "F�rs�g igen",

'purchase_cubecart' => "K�b CubeCart:",

'invalid_key' => "Licensn�glen var desv�rre ugyldig eller benyttes allerede.",

'purchase_license_key' => "K�b Licensn�gle",

'run_unlicensed' => "Du benytter en version of CubeCart uden licens. Indtast venligst din licensn�gle herunder for at fjerne copyright.",

'license_key' => "Licensn�gle:",

'submit_key' => "Send n�gle",

'server_info' => "Server info",

'ini_set_desc' => "Informationen herunder viser dine nuv�rende servermilj� indstillinger. Dette inkluderer alle former for information som eventuelt skal �ndres, hvis du f�r problemer med CubeCart. N.B. Hvis du benytter en delt server eller virtuel hosting er det sandsynligt at du vil have begr�nset adgang til at �ndre indstillinger. </span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> funktionen kan ofte benyttes til at s�tte sig ud over disse indstillinger.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "�ndring af status for denne bestilling lykkedes. Du kan nu sende din kunde en fakturerings-email og adgang til at downloade digitale produkter. For at g�re dette ",

'click_here' => "Klik Her",

'send_invoice_desc' => "Hvis status �ndres fra Afventende til Igang, f�r du mulighed for at sende kunden en faktura-kvittering og tillade adgang til digitale produkter, hvis dette er relevant.",

'delete_success' => "Sletning lykkedes.",

'delete_fail' => "Sletning mislykkedes.",

'orders' => "Bestillinger",

'all_orders' => "Herunder vises alle bestillinger gemt i databasen.",

'order_no' => "Bestillings Nr",

'status' => "Status",

'date_time' => "Dato/Tid",

'customer' => "Kunde",

'ip_address' => "IP Adresse",

'cart_total' => "Indk�bskurv Total",

'action' => "Handling",

'no_orders_in_db' => "Der er ingen bestillinger i databasen.",

'order_email' => "K�re %s,\n\nStatus for dit bestillings-id: %s er �ndret til %s\n\n",

'email_staff_comments' => "Vore medarbejdere har tilf�jet f�lgende kommentarer:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Denne email blev automatisk sendt fra %s",

'email_subj_status_change' => "�ndring i bestillingsstatus:",

'order_no2' => "Bestilling nr:",

'print_packing_slip' => "Print pakkeseddel",

'customer_info' => "Kundeinfo",

'invoice_address' => "Faktureringsadresse:",

'delivery_address' => "Leveringsadresse:",

'contact_info' => "Kontaktinformation:",

'tel' => "Tlf:",

'mobile' => "Mobil:",

'email' => "Email:",

'customer_comments' => "Kunde-kommenterer:",

'no_comments_left' => "Ingen kunde-kommentarer.",

'order_summary' => "Bestillingsoversigt",

'product' => "Produkt",

'code' => "Kode",

'quantity' => "M�ngde",

'price' => "Pris",

'download_link' => "Download link:",

'warn_reset' => "Dette indstiller antal downloads til nul og udvider udl�bstidspunktet.",

'reset_link' => "Genindstil link",

'download_stats' => "Downloadet (%s) gange. Link udl�ber efter %s",

'ip_address2' => "IP Adresse:",

'order_date_time' => "Bestillings Dato/Tid:",

'payment_method' => "Betalingsmetode:",

'ship_method' => "Forsendelsesmetode:",

'subtotal' => "Subtotal:",

'total_tax' => "Total skat:",

'shipping' => "Forsendelse:",

'grand_total' => "Total:",

'order_notfound' => "Bestilling nummer %s blev ikke fundet.",

'order_status' => "Bestillingsstatus",

'shipping_date' => "Forsendelsesdato:",

'ship_today' => "Sendes idag",

'modify_status' => "Redig�r status:",

'staff_comments' => "Medarbejderkommentar:",

'info_not_sent_customer' => "(Denne information sendes IKKE til kunden!)",

'inform_customer' => "Inform�r kunde:",

'customer_notified' => "(N�r dette er markeret oplyses kunden om �ndringen i bestillingsstatus.)",

'comments_2_customer' => "Kommentarer til kunden:",

'comments_2_customer_desc' => "(Dette f�jes til standard emailen du �nsker at informere kunden at bestillingsstatus er �ndret.)",

'save_order_status' => "Gem bestillingsstatus",

'paid_by' => "Betalt af:",

'delivered_to' => "Leveret til:",

'invoice_reciept_for' => "Faktura / Kvittering for:",

'order_of_time' => "Din bestilling af",

'order_id' => "Bestillings ID:",

'digi_goods_desc' => "Hvis du bestilte digitale produkter, b�r du have modtaget en email med download instruktioner. Disse er ogs� tilg�ngelige fra dit Konto kontrolpanel, hvor du kan administrere din konto hos os.",

'thank_you' => "Tak fordi du handlede hos os!",

);



$lang['admin']['products'] = array (

'show_featured' => "F�j til Nyeste produkter p� hjemmesiden?",

'upload_new_images' => "Upload billeder",

'no_images_avail' => "Der er desv�rre ingen tilg�ngelige billeder.",

'prod_added_to_cat' => "Produktet er f�jet til kategorien.",

'prod_not_added_to_cat' => "Tilf�jelsen af produktet til kategorien mislykkedes.",

'prod_removed_from_cat' => "Produktet er fjernet fra kategorien.",

'prod_not_removed_from_cat' => "Produktet blev ikke fjernet fra kategorien.",

'title_extraCats' => "Administration af kategorier",

'manage_cats' => "Administr�r kategorier",

'master_cat' => "Master kategori:",

'close_window' => "Luk vindue",

'img_added_to_prod' => "Billedet er f�jet til produktet.",

'img_not_added_to_prod' => "Billedet kunne ikke f�jes til produktet.",

'img_removed' => "Billedet er fjernet fra produktet.",

'img_not_removed' => "Billedet kunne ikke fjernes fra produktet.",

'image_management' => "Administration af billeder",

'manage_images' => "Administr�r billeder",

'image' => "Billede",

'action' => "Handling",

'delete_success' => "Sletning lykkedes.",

'delete_fail' => "Sletning mislykkedes.",

'update_successful' => "Opdatering fuldendt.",

'update_fail' => "Opdatering af kategori mislykkedes.",

'add_success' => "Tilf�jelse lykkedes.",

'add_fail' => "Tilf�jelse af kategori mislykkedes.",

'prod_inventory' => "Produktliste",

'current_prods_in_db' => "Herunder vises en liste af alle nuv�rende produkter i databasen.",

'all_cats' => "Alle kategorier",

'prod_name' => "Produktnavn",

'prod_id' => "Produkt Id",

'prod_code' => "Produktkode",

'master_cat2' => "Master Kategori",

'title' => "Titel",

'stock_level' => "Inventarieliste",

'normal_price' => "Normalpris",

'sale_price' => "Udsalgspris",

'asc' => "Stigende sortering",

'desc' => "Faldende sortering",

'containing_text' => "Inklusiv tekst",

'filter' => "Filtr�r",

'reset' => "Genindstil",

'id' => "id",

'type' => "Type",

'name' => "Navn",

'price_sale_price' => "Pris / Udsalgspris",

'in_stock' => "P� lager",

'action' => "Handling",

'languages' => "Sprog",

'no_products_exist' => "Ingen produkter i databasen.",

'add_prod_desc' => "Du kan benytte nedenst�ende formular til at tilf�je et produkt til inventarielisten.",

'product' => "Produkt",

'prod_name2' => "Produktnavn:",

'prod_stock_no' => "Produkt/Lager Nr:",

'auto_generated' => "(Hvis feltet er tomt autogenereres nummeret.)",

'description' => "Beskrivelse:",

'primary_lang' => "(P� hovedsproget. Andre sprog kan tilf�jes senere.)",

'category' => "Kategori:",

'image2' => "Billede:",

'opt_and_thumbs' => "(Valgmulighed og miniaturebillede genereres automatisk HVIS det valgte format er kompatibelt.)",

'upload_new' => "Upload nyt billede",

'browse_existing' => "Gennemse eksisterende billeder",

'normal_price2' => "Normalpris:",

'sale_price2' => "Udsalgspris:",

'sale_mode_desc' => "(Dette benyttes kun n�r forretningen er indstillet til udsalg per produkt.)",

'prod_weight' => "Produktv�gt:",

'tax_class' => "Skatteklasse:",

'stock_level2' => "Lagerniveau:",

'reduce_stock_level' => "(Dette niveau reduceres hver gang noget s�lges.)",

'use_stock_q' => "Benyt lagerniveau?",

'product_type' => "Produkttype:",

'tangible' => "Materiel",

'digital' => "Digital",

'digi_path' => "Digitale produkter skal have enten en HTTP sti eller en Server rodsti (se nedenfor).",

'digi_info' => "Digital information:",

'digi_desc' => "<p><strong>HTTP sti:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong>Server rodsti:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Anbefalet!)							</strong></p>

<p>Fordelen ved at benytte server rodstien er, at filer kan gemmes andre steder end i den offentligt tilg�ngelige mappe. Hvis denne metode v�lges vil CubeCart automatisk danne et download link, der har et udl�bstidspunkt og et maksimum antal downloads, som er konfigureret i gemmeindstillingerne.</p>",

'prod_inv_langs' => "Inventarieliste - (Andre sprog)",

'use_rich_oth_lang' => "Benyt venligst rich text editoren herunder til at tilf�je eller redigere produkter p� andre sprog.",

'language' => "Sprog:",

'update_prod_lang' => "Updat�r produktsprog",

'save_prod_lang' => "Gem produktsprog",

'other_langs_exdefault' => "Herunder vises en liste af alle nuv�rende produkter p� andre sprog end standardsroget.",

'no_lang_exist' => "Der er ingen sprogvariationer for dette produkt i databasen.",

'opt_add_success' => "Valgmulighedsnavn tilf�jet.",

'opt_add_fail' => "Valgmulighedsnavn ikke tilf�jet.",

'att_add_success' => "Valgmulighedsattribut tilf�jet.",

'att_add_fail' => "Valgmulighedsattribut ikke tilf�jet.",

'assign_success' => "Valgmulighed er knyttet til produktet.",

'assign_fail' => "Valgmulighed blev ikke knyttet til produktet.",

'product_options' => "Produkt-valgmuligheder",

'product_option' => "Produkt-valgmulighed",

'quick_assign' => "Lyntildeling:",

'prod_opts_of' => "Produkt-valgmuligheder fra",

'to' => "til",

'go' => "GO",

'opt_step1' => "1. Skab en valgmulighed (f.eks. Farve)",

'opt_id' => "ID",

'opt_name' => "Valgmulighedsnavn",

'warn_remove_opt' => "Er du sikker p� at du vil fjerne dette valgmulighedsnavn? \n\nADVARSEL: VED AT G�RE DETTE FJERNES ALLE PRODUKTVALGMULIGHEDER OG VALGMULIGHEDSATTRIBUTTER MED DETTE NAVN!",

'no_options_made' => "Der er ikke skabt nogen produktvalgmuligheder.",

'option' => "Valgmulighed",

'opt_step2' => "2. Skab en valgmulighedsv�rdi (f.eks R�d)",

'option_attributes' => "Valgmulighedsattributter",

'warn_remove_att' => "Er du sikker p� at du vil fjerne dette valgmulighedsattribut? \n\nADVARSEL: VED AT G�RE DETTE FJERNES ALLE PRODUKTVALGMULIGHEDER MED DETTE ATTRIBUT OG VALGMULIGHEDSNAVN!",

'no_attributes_made' => "Der er ikke skabt nogen produktattributter.",

'attribute' => "Attribut",

'opt_step3' => "3. Tildel valgmulighed &amp; v�rdi til produkt (F.eks. T-Shirt &gt; Farve &gt; R�d)",

'option_attribute' => "Valgmulighedsattribut",

'option_price' => "Valgmulighedspris",

'add_subtract' => "L�g til / Tr�k fra",

'remove_opt_prod' => "Er du sikker p� at du vil fjerne denne valgmulighed fra dette produkt?",

'no_assigned_opts' => "Der er ikke tildelt nogen valgmuligheder til produkter.",

'prods_made_1st' => "F�r du kan skabe valgmuligheder, skal der tilf�jes produkter.",

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

'show_latest' => "Vis nyeste produkter p� hjemmesiden?",

'no_latest' => "Antal nye produkter at vise:",

'off_line_settings' => "Offline indstillinger",

'off_line' => "Sluk forretningen?",

'off_line_content' => "Offline besked:",

'off_line_allow_admin' => "Tillad at adminstratorer kan se forretningen n�r de er off line? (Foruds�tter administrator session)",


'store_settings' => "Forretningsindstillinger",

'edit_below' => "Redig�r venligst din forretnings konfigurationsindstilliger herunder:",

'meta_data' => "Meta Data",

'browser_title' => "Browsertitel:",

'meta_desc' => "Meta beskrivelse:",

'meta_keywords' => "Meta n�gleord:",

'comma_separated' => "(Separeret af komma)",

'store_co_name' => "Forretnings-/Firmanavn:",

'store_address' => "Forretningsadresse:",

'country' => "Land:",

'zone' => "Omr�de:",

'dirs_folders' => "Biblioteker &amp; Mapper",

'rootRel' => "offentlig rod-HTML mappe til forretning:",

'include_slash' => "(Inklud�r afsluttende skr�streg)",

'storeURL' => "fuldendt URL til forretningen:",

'eg_domain_com' => "f.eks. http://www.dom�ne.com",

'rootDir' => "Server Rod-bibliotek:",

'eg_root_path' => "F.eks. /sti/til/din/internet-forretning",

'rootRel_SSL' => "SIKKER offentlig rod-HTML mappe til forretning:",

'storeURL_SSL' => "Helt SIKKER URL til forretning:",

'eg_domain_SSL' => "F.eks. https://sikker.dom�ne.com",

'rootDir_SSL' => "Server SIKKERT Rod-bibliotek:",

'eg_root_path_secure' => "F.eks. /sti/til/din/sikre/internet-forretning",

'enable_ssl' => "Aktiv�r SSL:",

'ssl_warn' => "(Advarsel: Denne �ndring sker umiddelbart efter den afsendes. S�rg venligst for at dit sikre Rod-bibliotek og din sikre URL er korrekte og fungerer f�r du v�lger indstillingen Ja)",

'digital_downloads' => "Digitale Downloads",

'download_expire_time' => "Download udl�bstidspunkt:",

'seconds' => "(Sekunder)",

'download_attempts' => "Download fors�g:",

'attempts_desc' => "(Antal gange kunden kan downloade produktet.)",

'styles_misc' => "Stil &amp; Diverse",

'default_language' => "Standardsprog:",

'store_skin' => "Forretningsdesign:",

'no_cats_per_row' => "Antal kategorier per r�kke:",

'dir_symbol' => "Bibliotekssymbol:",

'prods_per_page' => "Antal produkter per side:",

'precis_length' => "L�ngde af produkt-oversigt:",

'chars' => "(Bogstaver)",

'no_sale_items' => "Antal artikler i boksen med udsalgsartikler:",

'no_pop_prod' => "Antal artikler i boksen med popul�re artikler:",

'email_name' => "Email navn:",

'email_name_desc' => "(Dette benyttes som afsendernavn p� site emails.)",

'email_address' => "Email-adresse:",

'email_address_desc' => "(Dette benyttes som email-adresse i site emails.)",

'mail_method' => "Sendemetode:",

'mail_recommended' => "(SMTP anbefales)",

'max_upload_size' => "Maksimum filst�rrelse til Upload:",

'under_x_recom' => "(Under 2048Kb anbefales)",

'max_sess_length' => "Maksimum sessionstid:",

'db_settings' => "Databaseindstillinger",

'db_host' => "Database host-navn:",

'db_username' => "Database brugernavn:",

'db_password' => "Database adgangskode:",

'db_name' => "Database navn:",

'db_prefix' => "Database pr�fiks:",

'gd_settings' => "GD indstillinger",

'gd_ver' => "GD Version:",

'gd_thumb_size' => "St�rrelse af miniature-billeder:",

'gd_gif_support' => "Tillad GIF Support: (S�rg venligst for at dette er aktiveret p� din server)",

'gd_max_img_size' => "Maksimum billedst�rrelse:",

'gd_img_quality' => "GD billedkvalitet:",

'recom_quality' => "(60 - 80 anbefalet)",

'stock_settings' => "lagerindstillinger",

'use_stock' => "Vis lagerniveau?",

'allow_out_of_stock_purchases' => "Tillad k�b ved manglende lager?",

'weight_unit' => "V�gtenhed:",

'time_and_date' => "Tid &amp; Dato",

'time_format' => "Tidsformat:",

'time_format_desc' => "(Se <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Tids-afbalancering:",

'time_offset_desc' => "(Sekunder - Benyttes hvor servere er i forskellige tidszoner)",

'date_format' => "Datoformat:",

'date_format_desc' => "(Se <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Lokale indstillinger",

'default_currency' => "Standard valuta",

'inc_tax_prices' => "Inklud�r skat i priser?",

'sale_mode' => "Udsalgstilstand:",

'percent_of_all' => "Procenter fratrukket alle priser",

'ind_sale_per_item' => "Individuelle udsalgspriser per artikel",

'sale_mode_off' => "Deaktiv�r udsalgstilstand",

'sale_per_off' => "Deaktiv�r udsalgsprocenter:",

'sale_per_off_desc' => "(Procenter der skal fratr�kkes alle priser)",

'diff_dispatch' => "Tillad forsendelse til anden adresse end fakturaadressen?",

'update_settings' => "Opdat�r indstillinger",

'update_success' => "Opdatering fuldendt.",

'update_fail' => "Opdatering mislykkedes.",

'add_success' => "Er tilf�jet",

'add_fail' => "Tilf�jelse mislykkedes.",

'delete_success' => "Sletning lykkedes.",

'delete_failed' => "Sletning mislykkedes.",

'currencies' => "Valutaer",

'currency' => "Valuta",

'currencies_desc' => "Redig�r, tilf�j eller slet valutaer herunder:",

'c_code' => "Kode",

'c_name' => "Navn",

'c_value' => "V�rdi",

'symbol_left' => "Symbol venstre",

'symbol_right' => "Symbol h�jre",

'decimal_places' => "Antal decimaler",

'last_updated' => "Senest opdateret",

'c_status' => "Status",

'no_currencies' => "Der er ingen valutaer i databasen.",

'countries' => "Lande",

'country' => "Land",

'edit_countries_below' => "Redig�r, tilf�j eller slet lande herunder:",

'disable' => "Deaktiv�r",

'enable' => "Aktiv�r",

'iso' => "ISO",

'iso_name' => "Navn",

'iso3' => "ISO3",

'num_code' => "Nr. kode",

'action' => "Handling",

'warn_del_country' => "Er du sikker p� at du vil slette? Alle lande og omr�der over dette bliver slettet.",

'no_countries_in_db' => "Der er ingen lande i databesen.",

'edit_counties' => "Redig�r, tilf�j eller slet omr�der herunder:",

'no_counties_in_db' => "Der er ingen omr�der i databasen.",

'tax_Settings' => "Skatte-indstillinger",

'edit_locale_below' => "Redig�r venligst dine lokale indstillinger herunder:",

'tax_only_to' => "G�r kun skat g�ldende indenfor f�lgende omr�de:",

'manage_tax_below' => "Administr�r dine forskellige former for skat herunder. Disse kan g�res g�ldende for hvert enkelt produkt, s� du kan have skattefri produkter og forskellige niveauer af skat p� forskellige produkttyper.",

'tax_class2' => "Skatteklasse",

'rate_per' => "Rate (%)",

'no_taxes_setup' => "Der er desv�rre ingen skatteindstillinger.",

'tax' => "Skat",

);



$lang['admin']['stats'] = array(

'store_stats' => "Forretningens statistik",

'choose_view' => "V�lg venligst den statistik du gerne vil se:",

'search_terms' => "S�geord",

'product_pop' => "Produkt-popularitet",

'cust_online' => "Kunder Online",

'search_terms_order_by' => "S�geord (Sorteret efter antal s�gninger)",

'sorry_no_data' => "Der er desv�rre ingen data at vise.",

'product_pop_ordered_by' => "Produkt-popularitet  (Sorteret efter visninger)",

'cust_active' => "Kunder der har v�ret aktive indenfor de seneste 15 min.",

'hash' => "#",

'customer' => "Kunde",

'location' => "Placering",

'sess_start_time' => "Sessionens starttid",

'last_click_time' => "Tidspunkt for seneste klik",

'sess_length' => "Sessionens l�ngde",

'geust' => "G�st",

'signed_in' => "Indskrevet",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "ADVARSEL: Der er skrivetilladelse p� den vigtigste konfigurationsfil 'includes/global.inc.php' og dette udg�r en risiko for din forretning. S�rg venligst for at �ndre denne tilladelse til 0644 s� snart som muligt.",

'401' => "Fejl 401: Du har ikke tilladelse til at �bne siden. Bed venligst en af superbrugerne om at give dig tilladelse.",

'welcome_note' => "Velkommen til kontrolpanelet for CubeCart administration",

'last_login' => "Sidste log ind af ",

'by' => "af",

'failed' => "mislykkedes.",

'store_overview' => "Forretningsoversigt:",

'version' => "Version:",

'visit_cc' => "Bes�g CubeCarts Download Server",

'no_products' => "Antal produkter:",

'no_customers' => "Antal kunder:",

'img_upload_size' => "Mappest�rrelse for billed-upload:",

'no_orders' => "Antal bestillinger:",

'quick_search' => "Hurtig-s�gning:",

'order_no' => "Bestillingsnummer:",

'search_now' => "S�g",

'customer' => "Kunde:",

'login_failed' => "Log ind mislykkedes! Enten brugernavnet eller adgangskoden var forkert.",

'new_pass_sent' => "En ny adgangskode er sendt til ",

'no_admin_sess' => "Der blev ikke fundet nogen administrationssession.",

'login_fail_2' => "Log ind mislykkedes. Pr�v igen.",

'login_below' => "Log ind herunder:",

'username' => "Brugernavn:",

'password' => "Adgangskode:",

'request_pass' => "Anmod om adgangskode",

'login' => "Log ind",

'logout_failed' => "Log ud mislykkedes eftersom der ikke var en administrationssession.",

'reset_pass_email' => "K�re %s,

Du, eller en person der udgiver sig for dig, har bedt om at f� genindstillet din adgangskode.

Dine nye adgangsinformationer er:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Brugernavn: %s
Adgangskode: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Denne email er sendt fra %s/admin/requestPass.php\n

Afsenders IP Adresse: %s",

'pass_reset_failed' => "Genindstilling af adgangskode mislykkedes.",

'enter_email_below' => "Indtast venligst din email-adresse herunder:",

'email_address' => "Email-adresse:",

'send_pass' => "Send adgangskode",

);



$lang['admin']['nav'] = array(

'permission_error' => "Du er ikke tilladt adgang til dette.",

'navigation' => "Navigation",

'admin_home' => "Admin Hjem",

'store_home' => "Forretning Hjem",

'store_config' => "Forretnings-konfigurationer",

'gen_settings' => "Almene indstillinger",

'taxes' => "Skatter",

'countries_zones' => "Lande &amp; Omr�der",

'currencies' => "Valutaer",

'modules' => "Moduler",

'shipping' => "Forsendelse",

'gateways' => "Gateways",

'affiliates' => "Affiliater",

'catalog' => "Katalog",

'view_products' => "Se produkter",

'add_product' => "Tilf�j produkt",

'product_options' => "Produkt-valgmuligheder",

'view_categories' => "Vis kategorier",

'add_categories' => "Tilf�j kategori",

'customers' => "Kunder",

'view_customers' => "Se kunder",

'email_customers' => "Email kunder",

'orders' => "Bestillinger",

'file_manager' => "Fil-administration",

'manage_images' => "Administr�r billeder",

'upload_images' => "Upload billeder",

'statistics' => "Statistik",

'view_stats' => "Se statistik",

'documents' => "Dokumenter",

'homepage' => "Hjemmeside",

'site_docs' => "Site dokumenter",

'misc' => "Diverse",

'server_info' => "Server info",

'admin_users' => "Admin brugere",

'administrators' => "Administratorer",

'admin_sessions' => "Admin sessioner",

);



$lang['admin']['incs'] = array(

'administration' => "Administration",

'logged_in_as' => "Logget ind som:",

'logout' => "Log ud",

'change_pass' => "Skift adgangskode",

'error_editing' => "handlingen mislykkedes. Indtastede data var ikke et array.",

'config_updated' => "Konfiguration opdateret. S�rg venligst for at filtilladeser genindstilles korrekt.",

'cant_write' => "Kunne ikke �bne filen for '%s' til indtastning. Pr�v at �ndre CHMOD v�rdien til 0777. Husk at s�tte den tilbage til 0644 efterf�lgende!",

'db_config_updated' => "Konfiguration Opdateret.",

'db_cant_write' => "Opdatering mislykkedes!",

'select_above' => "V�lg ovenfor",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Ja";

$lang['front']['no'] = "Nej";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Nyttige Links",

'reg_and_checkout' => "Registr�r &amp; Kasse",

'cont_shopping' => "Forts�t med indk�b",

'edit_del_add' => "Redig�r leveringsadressen",

'edit_inv_add' => "Redig�r fakturaadressen",

'empty_cart' => "T�m indk�bskurv",

'prev_page' => "Forrige side",

'homepage' => "Hjemmeside",

'shop_by_cat' => "K�b ind per kategori",

'sale_items' => "Udsalgsartikler",

'save' => "Gem",

'currency' => "Valuta",

'information' => "Information",

'products' => "Produkter:",

'categories' => "Kategorier:",

'prices' => "Priser:",

'language' => "Sprog",

'mailing_list' => "Mailing-Liste",

'subscribe_below' => "Meld dig p� vores mailing-liste herunder:",

'email' => "Email:",

'join_now' => "Meld til",

'already_subscribed' => "Email adressen %s er allerede p� vores mailing-liste. Log venligst ind p� din konto for at afmelde.",

'enter_valid_email' => "Indtast venligst en gyldig email adresse.",

'added_to_mail' => "Tak, %s er nu p� vores mailing-liste.",

'subscribed_to_mail' => "Tak, %s er nu meldt til vores mailing-liste.",

'popular_products' => "Popul�re produkter",

'featured_prod' => "Aktuelt produkt",

'sale_items' => "Udsalgsartikel",

'search_for' => "S�g efter:",

'go' => "S�g",

'welcome_back' => "Velkommen tilbage",

'logout' => "Log ud",

'your_account' => "Din konto",

'welcome_guest' => "Velkommen g�st",

'login' => "Log ind",

'register' => "Registr�r",

'shopping_cart' => "Indk�bskurv",

'basket_empty' => "Din indk�bskurv er tom.",

'items_in_cart' => "Artikler i indk�bskurven:",

'total' => "Total:",

'view_basket' => "Se din indk�bskurv",

);



$lang['front']['account'] = array(

'your_account' => "Din konto",

'personal_info' => "Personlig info",

'order_history' => "Bestillingsoversigt",

'change_password' => "Skift adgangskode",

'newsletter' => "Nyhedsbrev",

'login_to_view' => "Du skal v�re logget ind for at se denne side.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Den indtastede adgangskode var forkert.",

'conf_not_match' => "Bekr�ftelsen af din adgangskode matchede ikke din nye adgangskode.",

'change_pass' => "Skift adgangskode",

'password_updated' => "Tak, din adgangskode er nu opdateret.",

'change_pass_below' => "Skift venligst din adgangskode herunder:",

'old_pass' => "Gammel adgangskode:",

'new_pass' => "Ny adgangskode:",

'confirm_pass' => "Bekr�ft adgangskode:",

'submit' => "Send",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Undskyld",

'expired' => "Dit download link er enten udl�bet eller ikke gyldigt.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Glemt adgangskode",

'email' => "Email:",

'send_pass' => "Send adgangskode",

'reset_email' => "K�re %s %s,

du, eller �n person der udgiver sig for dig, har bedt om at f� genindstillet din adgangskode. Dine nye adgangsinformationer er:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Brugernavn: %s
Adgangskode: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
For at logge ind, f�lg venligst nedenst�ende link:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Denne email blev sendt fra %s
Afsenders IP Adresse: %s",

'new_pass_sent' => "En ny adgangskode blev sendt til %s.",

'email_not_found' => "Denne email adresse blev desv�rre ikke fundet.",

'enter_email' => "Indtast venligst din log ind email adresse herunder, for at f� tilsendt en midlertidig adgangskode:",

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

'newOrderMsg' => "En kunde har netop foretaget bestillingen %s, F�lg linket herunder for at se denne bestilling: \n\n%s",

'newOrderSubj' => "Ny forretningsbestilling foretaget",

'payment' => "Betaling",

'cart' => "Indk�bskurv",

'address' => "Adresse",

'payment' => "Betaling",

'complete' => "Fuldendt",

'fill_out_below' => "Udfyld venligst skemaet herunder:",

'transferring' => "Overf�rer til betaling",

'go_now' => "Begynd nu!",

'continue' => "Forts�t",

'choose_method' => "V�lg venligst din foretrukne betalingsmetode:",

'your_comments' => "Dine kommentarer:",

'none_configured' => "Der er desv�rre ikke blevet konfigureret nogen betalingsmetoder.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Log ind",

'username' => "Email:",

'password' => "Adgangskode:",

'remember_me' => "Husk mig?",

'forgot_pass' => "Glemt din agangskode?",

'login_success' => "Log ind lykkedes.",

'already_logged_in' => "Du er allerede logget ind.",

'login_failed' => "Log ind mislykkedes!",

'login_below' => "Log venligst ind herunder:",

);



$lang['front']['index'] = array(

'latest_products' => "Nyeste produkter",

);



$lang['front']['logout'] = array(

'logout' => "Log ud",

'session_destroyed' => "Din session blev �delagt.",

'no_session' => "Der blev ikke fundet nogen sessioner til �del�ggelse. Du ser ud til at v�re ankommet her ved en fejl.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Pr�ferencer til nyhedsbrev",

'prefs_updates' => "Dine pr�ferencer til nyhedsbrev er opdateret.",

'edit_prefs_below' => "Redig�r venligst dine pr�ferencer til nyhedsbrev herunder:",

'subscribe' => "Meld dig til mailing-listen?",

'email_format' => "Emailformat:",

'plain_text' => "Tekst",

'html' => "HTML",

'html_abbr' => "HTML",

'update' => "Opdat�r",

'login_required' => "Du skal v�re logget ind for at se denne side.",

);



$lang['front']['noShip'] = array(

'sorry' => "Beklager",

'desc' => "Vi kan desv�rre ikke sende produkter til dit land.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Beklager",

'desc' => "Vi kan desv�rre ikke sende en ordre af denne v�gt.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Telefonnumre m� kun indeholde tal.",

'complete_all' => "S�rg venligst for at alle obligatoriske felter er udfyldt.",

'email_invalid' => "Indtast venligst en gyldig email-adresse.",

'numeric_only' => "Telefonnumre m� kun indeholde tal.",

'email_inuse' => "Denne email-adresse er allerede i brug.",

'update_email' => "K�re %s %s,

Denne email sendes for at bekr�fte at din personlige information er blevet opdateret. Hvis du mener, at din konto er blevet opdateret af en anden end dig selv, kontakt venligst en medarbejder med det samme.\n\n

Denne email blev sendt fra %s\n

Afsenders IP Adresse: %s",

'update_email_subj' => "Personlig information opdateret",

'personal_info' => "Personlig information",

'account_updated' => "Din konto er blevet opdateret. Du kan redig�re dette igen hvis du �nsker.",

'edit_below' => "Redig�r venligst din personlige information herunder:",

'title' => "Titel:",

'first_name' => "Fornavn:",

'last_name' => "Efternavn:",

'email' => "Email:",

'address' => "Adresse:",

'town' => "By:",

'county' => "Omr�de:",

'postcode' => "Postnummer:",

'country' => "Land:",

'phone' => "Telefon:",

'mobile' => "Mobil:",

'update_account' => "Opdat�r konto",

'login_required' => "Du skal v�re logget ind for at se denne side.",

);



$lang['front']['reg'] = array(

'fill_required' => "S�rg venligst for at alle obligatoriske felter er udfyldt.",

'pass_not_match' => "S�rg venligst for at dine adgangskoder stemmer overens.",

'enter_valid_email' => "Indtast venligst en gyldig email-adresse.",

'enter_valid_tel' => "Telefonnumre m� kun indeholde tal.",

'email_in_use' => "Denne email-adresse er allerede i brug.",

'note_required' => "Bem�rk venligst at alle felter der er markeret med en stjerne (*), er obligatoriske for at foretage din registrering.",

'express_reg' => "Hurtig registrering",

'submit_and_cont' => "Afsend &amp; Forts�t",

'personal_details' => "Person oplysninger",

'address' => "Adresse",

'title' => "Titel:",

'title_desc' => "(Hr/Fru/Frk)",

'first_name' => "Fornavn:",

'address2' => "Adresse:",

'last_name' => "Efternavn:",

'email_address' => "Email Adresse:",

'town' => "By:",

'phone' => "Telefon:",

'county' => "Omr�de:",

'mobile' => "Mobil:",

'country' => "Land:",

'postcode' => "Postnummer:",

'security_details' => "Sikkerhedsoplysninger",

'choose_pass' => "V�lg adgangskode:",

'conf_pass' => "Bekr�ft adgangskode:",

'privacy_settings' => "Private indstillinger",

'receive_emails' => "Jeg vil gerne modtage email fra forretningen",

'email_format' => "Emailformat:",

'styled_html' => "Stylet HTML",

'plain_text' => "Ren tekst",

'tandcs' => "Aftalevilk�r",

'please_read' => "L�s venligst vore ",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "K�re %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
F�lg venligst nedenst�ende link for at se dette produkt:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Denne email er sendt fra %s
Afsenders IP Adresse: %s",

'email_subject' => "Besked fra: %s",

'tellafriend' => "Fort�l en ven",

'message_sent' => "Tak, din besked er nu sendt til <strong>%s</strong> om '%s'. Hvis du �nsker at sende dette til en anden ven, kan du g�re det herunder:",

'fill_out_below' => "Send venligst skemaet herunder for at fort�lle en ven om os '%s'.",

'friends_name' => "Vennens navn:",

'friends_email' => "Vennens email:",

'your_name' => "Dit navn:",

'your_email' => "Din email:",

'message' => "Besked:",

'default_message' => "Jeg fandt dette '%s' og mente du m�ske var interesseret.",

'send' => "Send",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Afmeld",

'email' => "Email:",

'go' => "Begynd",

'enter_valid_email' => "Indtast venligst en gyldig email-adresse.",

'email_removed' => "Tak, <strong>%s</strong> er fjernet fra vores mailing liste.",

'email_not_found' => "Desv�rre blev <strong>%s</strong> ikke fundet p� vores mailing liste, eller en afmelding er allerede foretaget.",

'enter_email_below' => "Indtast venligst din email-adresse herunder for at afmelde dig fra vores mailing-liste:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Resultat af s�gning",

'sale_items' => "Udsalgsartikler",

'image' => "Billede",

'description' => "Beskrivelse",

'price' => "Pris",

'products_in' => "Produkter:",

'buy' => "K�b",

'more' => "Mere",

'out_of_stock' => "UDSOLGT",

'no_products_match' => "Der er desv�rre ingen produkter der matcher din eftersp�rgsel:",

'no_prods_in_cat' => "Der er ingen produkter i denne kategori.",

);



$lang['front']['viewDoc'] = array(

'error' => "Fejl",

'does_not_exist' => "Dokumentet eksisterer ikke.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Bestillingsnummer:",

'customer_info' => "Kunde info:",

'invoice_address' => "Faktureringsadresse:",

'delivery_address' => "Leveringsadresse:",

'na' => "ikke relevant",

'customer_comments' => "Kunde-kommentarer:",

'order_summary' => "Bestillingsoversigt:",

'product' => "Produkt",

'product_code' => "Produkt kode",

'quantity' => "Kvantitet",

'price' => "Pris",

'download_here' => "Download Her",

'review_below' => "Gennemse venligst bestillingen herunder:",

'order_date_time' => "Bestillings Dato/Tid:",

'payment_method' => "Betalingsmetode:",

'ship_method' => "Forsendelsesmetode:",

'subtotal' => "Subtotal:",

'total_tax' => "Total skat:",

'shipping' => "Forsendelse:",

'grand_total' => "Total:",

'order_not_found' => "Bestillingsnummeret blev ikke fundet.",

'login_required' => "Du skal v�re logget ind for at se denne side.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Dine bestillinger",

'orders_listed_below' => "Alle bestillinger for denne konto vises nedenfor:",

'order_no' => "Bestillingsnr.",

'status' => "Status",

'date_time' => "Dato/Tid",

'action' => "Handling",

'view' => "Vis",

'no_orders' => "Vi har ingen oplysninger om bestillinger gjort i vores system. Hvis du mener dette er en fejl, kontakt venligst en medarbejder s� snart som muligt.",

'login_required' => "Du skal v�re logget ind for at se denne side.",

);



$lang['front']['viewProd'] = array(

'product' => "Produkt",

'product_info' => "Produktinformation",

'price' => "Pris:",

'product_code' => "Produkt kode:",

'tellafriend' => "Fort�l en ven",

'quantity' => "Kvantitet:",

'more_images' => "[+] Flere billeder",

'add_to_basket' => "L�g i kurven",

'location' => "Placering:",

'no_instock' => "P� lager:",

'instock' => "P� lager",

'out_of_stock' => "UDSOLGT",

'prod_opts' => "Produkt valgmuligheder:",

'prod_not_found' => "Produktet kunne ikke findes.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Din kurv er tom.",

'allready_customer' => "Allerede kunde?",

'login_below' => "Log ind herunder:",

'username' => "Email:",

'password' => "Adgangskode:",

'remember_me' => "Husk mig?",

'login' => "Log ind",

'forgot_pass_q' => "Glemt din adgangskode?",

'need_register' => "Vil du registreres?",

'express_register' => "Vores hurtig-registreringsskema er hurtigt og nemt at udfylde.",

'reg_and_cont' => "Registr�r &amp; Forts�t",

'cont_shopping_q' => "Forts�t med indk�b?",

'cont_shopping' => "Forts�t indk�b",

'cont_browsing' => "For at forts�tte som g�st uden at logge ind, klik p� knappen herunder. Bem�rk: Du kan ikke foretage indk�b uden f�rst at v�re registreret.",

);





$lang['front']['cart'] = array(

'free_shipping' => "Gratis forsendelse",

'view_cart' => "Vis indk�bskurv",

'cart' => "Indk�bskurv",

'address' => "Adresse",

'payment' => "Betaling",

'complete' => "Afslut",

'add_more' => "Vil du tilf�je flere artikler? Indtast produkt kode:",

'add' => "Tilf�j",

'qty' => "Antal",

'product' => "Produkt",

'code' => "Kode",

'stock' => "Lager",

'price' => "Pris",

'line_price' => "Linjepris",

'delete' => "Slet",

'remove' => "Fjern artikel",

'invoice_address' => "Faktureringsadresse",

'delivery_address' => "Leveringsadresse",

'title' => "Titel:",

'first_name' => "Fornavn:",

'last_name' => "Efternavn:",

'address2' => "Adresse:",

'town' => "By:",

'county' => "Omr�de:",

'postcode' => "Postnummer:",

'country' => "Land:",

'edit_invoice_address' => "Redig�r faktureringsadresse",

'edit_delivery_address' => "Redig�r leveringsadresse",

'stock_warn' => "Du har bestilt flere artikler, end vi har p� lager p� nuv�rende tidspunkt. Din bestilling bliver m�ske forsinket til vi har opdateret lagerbeholdningen.",

'amount_capped' => "Vi kan desv�rre ikke sende bestillinger der overstiger vores nuv�rende lagerbeholdning.<br />Kvantiteten af denne artikel er sat til begr�nsningen ",

'na' => "Ikke relevant",

'shipping' => "Forsendelse:",

'tax' => "Skat:",

'subtotal' => "Subtotal:",

'cart_total' => "Indk�bskurv Total:",

'if_changed_quan' => "(Hvis du har �ndret kvantiteter)",

'update_cart' => "Opdat�r indk�bskurv",

'continue' => "Forts�t",

'cart_empty' => "Din indk�bskurv er tom.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Bekr�ftelsessk�rm",

'cart' => "Indk�bskurv",

'address' => "Adresse",

'payment' => "Betaling",

'complete' => "Afslut",

'order_success' => "Tak, din bestilling er fuldendt! Bes�g os snart igen.",

'order_fail' => "Beklager, din bestilling mislykkedes!",

'try_again_desc' => "Du kan fors�ge at k�be artiklerne i din indk�bskurv igen herunder:",

'try_again' => "Pr�v igen",

'request_login' => "Du skal v�re logget ind for at se denne side.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "K�re %s,

Tak for din bestilling nr.: %s foretaget %s

Transaktionen lykkedes og vi sender dine varer s� snart som muligt (hvis relevant).

~~~~~~~~~~~~~~~~~~~~~~~~~~
Navn: %s
Subtotal: %s
Forsendelse: %s
Skat: %s
Total: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Faktureringsadresse:
%s
%s
%s
%s
%s
%s
%s

Leveringsadresse:
%s
%s
%s
%s
%s
%s
%s

Betalingsmetode: %s
Forsendelsesmetode: %s",

'inv_email_body_2' => "\nDine kommentarer: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Order Inventory:\n",

'inv_email_body_4' =>"Produkt: %s\n",

'inv_email_body_5' => "Valgmuligheder: %s\n",

'inv_email_body_6' => "Kvantitet: %s
Produkt Kode: %s
Pris: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Bestilling nr.: ",

'digi_email_body1' => "K�re %s,

Tak for din bestilling nr.: %s foretaget %s

De links du skal bruge til de digitale produkter du har bestilt findes herunder.

VIGTIGT disse links udl�ber %s og du har %s download-fors�g. Hvis der er problemer, kontakt os endelig og hav dit bestillingsnummer parat.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
DOWNLOAD LINK:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Download adgang: ",

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