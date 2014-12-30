<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.17
|   ========================================
|   by Alistair Brookbanks
|	CubeCart is a Trade Mark of CubeCart Limited
|   Copyright CubeCart Limited 2005 - 2014. All rights reserved.
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
|   Date: Tuesday, 17th July 2007
|   Email: sales (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	lang.inc.php
|   ========================================
|	Svensk (SE) Spr�k Fil
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'se_SE');

/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Ja";

$lang['admin']['no'] = "Nej";

$lang['admin']['edit'] = "Redigera";

$lang['admin']['delete'] = "Radera";

$lang['admin']['delete_q'] = "�r du s�ker p� att du vill radera detta?";

$lang['admin']['add'] = "L�gg till ";

$lang['admin']['add_new'] = "L�gg till Ny";

$lang['admin']['write'] = "Skriv";

$lang['admin']['read'] = "L�s";

$lang['admin']['na'] = "Inte tillg�nglig"; // as in not applicable

$lang['admin']['all'] = "Alla";

$lang['admin']['remove'] = "Ta bort";

/////////////////////////////////////

// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Raderades problemfritt.",

'del_failed' => "Radering misslyckades.",

'update_success' => "uppdatering lyckades.",

'update_fail' => "Kunde inte uppdateras.",

'add_success' => "lades till problemfritt.",

'add_failed' => "Kunde inte l�gga till anv�ndare.",

'administrators_title' => "Administrat�rer",

'current_users' => "Nuvarande admins",

'id' => "Id",

'user_notes' => "Anv�ndarnamn / Noteringar",

'no_logins' => "Antal inloggningar",

'super_user' => "Superanv�ndare",

'email' => "E-post",

'action' => "�tg�rd",

'add_admin' => "Du kan anv�nda formul�ret nedan f�r att l�gga till en 
administrat�r.",

'full_name' => "Namn:",

'username' => "Anv�ndarnamn:",

'administrator' => "Administrat�r",

'email2' => "E-post:",

'password' => "L�senord:",

'pass_warn' => "(Ange enbart ett nytt l�senord om du vill byta det 
nuvarande.)",

'make_super' => "Skapa SuperAnv�ndare?",

'notes' => "Noteringar:",

'permissions' => "Till�telser",

'pass_updated' => "L�senord uppdaterat.",

'pass_not_updated' => "L�senordet inte uppdaterat.",

'change_pass_below' => "Var v�nlig �ndra ditt l�senord nedan:",

'old_pass' => "Gammalt L�senord:",

'new_pass' => "Nytt L�senord:",

'confirm_pass' => "Bekr�fta L�senord:",

'perms_updated' => "R�ttigheterna uppdaterade.",

'set_perms' => "Var v�nlig s�tt r�ttigheterna f�r denna anv�ndare nedan.",

'section' => "Sektion",

'nb_bulk' => "Notera: F�r att massposta till kunderna m�ste anv�ndaren ha 
skrivr�ttigheter under kunderna.",

'admin_sessions' => "Adminsessioner",

'sessions_desc' => "Nedan visas de senaste inloggningsf�rs�ken gjorda av 
admin. H�ll ett �ga p� detta f�r att f�rs�kra att d�r inte f�rekommer n�gra 
f�rs�k av inbrott eller attacker. Det �r starkt rekommenderat att du �ndrar 
adminl�senordet regelbundet.",

'login_id' => "Inloggnings-ID",

'time' => "Tid",

'ip_address' => "IP-Adress",

'success' => "Lyckades",
);



$lang['admin']['categories'] = array (

'delete_success' => "Raderades problemfritt.",

'delete_fail' => "Raderingen misslyckades.",

'update_success' => "Uppdatering lyckades.",

'update_fail' => "Misslyckades med att uppdatera Kategorin.",

'add_success' => "lades till problemfritt.",

'add_failed' => "Misslyckades med att l�gga till kategorin.",

'categories' => "Kategorier",

'categories_desc' => "Nedan finns en lista med alla kategorier i din databas 
f�rn�rvarande.",

'cat_name' => "Kategorinamn",

'dir' => "Katalog",

'image' => "Bild",

'no_products' => "Antal Produkter",

'action' => "�tg�rd",

'cannot_del' => "Denna kategorin kan inte raderas eftersom den inneh�ller 
produkter.",

'no_cats_exist' => "Det finns inga kategorier i databasen.",

'add_desc' => "Du kan l�gga till kategorier med ett obegr�nsat antal 
underkategorier, ladda upp nya bilder eller �teranv�nd bilder som redan 
finns p� servern.",

'category' => "Kategori",

'category_name' => "Kategorinamn:",

'category_level' => "Kategoriniv�:",

'top_level' => "�versta niv�n",

'image_optional' => "Bild: (Frivilligt)",

'upload_new_image' => "Ladda upp ny bild",

'browse_existing' => "Leta efter existerande bilder",

'ship_by_cat' => "Summa per leverans enligt kategori",

'per_ship' => "Per leverans:",

'per_item' => "Per produkt:",

'per_int_ship' => "Per internationell leverans:",

'per_int_item' => "Per internationell produkt:",

);



$lang['admin']['customers'] = array (

'customers' => "Kunder",

'delete_success' => "Raderades problemfritt.",

'delete_fail' => "Radering misslyckades.",

'update_success' => "Kund uppdaterades problemfritt.",

'update_fail' => "Misslyckades med att uppdatera kund.",

'search_term' => "S�kord:",

'reset' => "�terst�ll",

'name' => "Namn",

'email' => "E-post",

'invoice_add' => "Fakturaadress",

'phone' => "Telefon",

'reg_ip' => "Reg. Datum / IP-Adress",

'no_orders' => "Antal order",

'action' => "�tg�rd",

'no_cust_exist' => "Inga kunder existerar i databasen.",

'edit_below' => "Var v�nlig redigera denna kunden nedan:",

'title' => "Titel",

'first_name' => "F�rnamn:",

'last_name' => "Efternamn:",

'email2' => "E-post:",

'address' => "Adress:",

'town' => "Ort:",

'county' => "L�n:",

'postcode' => "Postnummer:",

'country' => "Land:",

'phone2' => "Telefon:",

'edit_customer' => "Redigera kund",

'no_download_email' => "Det fanns ingen e-post att ladda ner.",

'email_customers' => "e-posta kunderna",

'create_email' => "Var v�nlig skapa din e-post nedan:",

'hint' => "Tips:",

'click_source' => "Du kan klicka p� k�llknappen ovan och kopiera in ett 
HTML-dokument som du redan skapat.",

'important' => "Viktigt:",

'absolute_links' => "F�rs�kra att alla bilder och l�nkar �r kompletta 
(egentligen att dom innneh�ller korrekt dom�nnamn). I dom flesta l�nder �r 
det lag p� att det ska finnas en l�nk f�r upps�gning av en prenumeration 
(opt out):",

'email_subject' => "e-post�rende:",

'senders_name' => "Avs�ndarens Namn:",

'senders_email' => "Avs�ndarens e-post:",

'return_path' => "Returv�g:",

'bounce_desc' => "(Returadress dit �terkommande e-post skall g�.)",

'send_test' => "Skicka test-e-post?",

'test_email_recip' => "Mottagare av test-e-post:",

'send_email' => "Skicka e-post",

'download_or_send' => "Var v�nlig v�lj antingen om kundernas e-postadresser 
ska laddas ner eller om mass-e-post ska skickas genom denna webbsidan.",

'please_choose' => "Var v�nlig v�lj:",

'used_to_download' => "Detta anv�nds f�r nerladdning av e-postadresser som 
sedan kan anv�ndas i bulk-e-post mjukvara.",

'bulk_to_subscribed' => "Detta till�ter dig att skicka mass-e-post ENBART 
till dom som har prenumeration p� nyhetsbrev via denna webbsidan.",

'include_name' => "Inkludera namn?",

'download_email' => "Ladda ner e-post",

'send_email' => "Skicka e-post",

'sending_complete' => "Uts�ndningen fullf�ljd",

'sending' => "Skickar e-post",

'recipient' => "Mottagare:",

'prev_page' => "F�reg�ende Sida",

'page' => "Sida:",

'bulk_finished' => "Mass-e-postaren har fullf�ljt sin uppgift 
problemfritt.",

'time_taken' => "F�rbrukad tid:",

'recipients' => "Mottagare:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Hemsidan blev inte uppdaterad var v�nlig f�rs�kra dig om 
filernas r�ttigheter i includes/static/home.inc.php �r korrekta.",

'update_success' => "Hemsidan uppdaterad problemfritt.",

'homepage' => "Hemsida",

'enabled' => "Aktiverad:",

'enabled_desc' => "(Om denna inte �r aktiverad kommer huvudspr�ket att 
anv�ndas i f�rsta hand.)",

'language' => "Spr�k:",

'title' => "Titel:",

'use_rich_text' => "Var v�nlig anv�nd rich text-editorn nedan f�r att g�ra 
�ndringar p� hemsidan till webbsidan. Vid sparandet �ndras inneh�llet 
omedelbart s� var v�nlig g� igenom inneh�llet f�rst.",

'update_homepage' => "Uppdatera hemsidan",

'delete_success' => "Dokument raderat problemfritt.",

'delete_fail' => "Radering misslyckades.",

'update_success' => "uppdatering lyckades.",

'update_fail' => "blev inte uppdaterad.",

'add_success' => "lades till problemfritt.",

'add_fail' => "Misslyckades med att l�gga till dokument.",

'site_docs_other_lang' => "Sidans Dokument - (Andra Spr�k)",

'use_rich_text' => "Var v�nlig anv�nd rich text-editorn nedan f�r att l�gga 
till eller redigera sidans dokument till andra spr�k.",

'site_doc_other_lang' => "Sidans Dokument - (Andra Spr�k)",

'doc_name' => "Dokumentnamn:",

'language' => "Spr�k:",

'update_doc' => "Uppdatera dokument",

'save_doc' => "Spara dokument",

'current_doc_list' => "Nedan finns en lista �ver alla sidans dokument f�r 
n�rvarande. Du kan ha ett o�ndligt antal av dessa vilka kan redigeras 
och/eller raderas n�r som helst.",

'doc_name2' => "Dokumentnamn",

'action' => "�tg�rd",

'no_site_docs' => "Det finns inga dokument i databasen.",

'site_docs' => "Sidans dokument",

'site_doc' => "Sidans dokument",

'languages' => "Spr�k",

'no_docs' => "Det finns inga dokument i databasen.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Bildl�sare",

'file' => "Fil:",

'no_imgs' => "Inga bilder �r tillg�ngliga. Var v�nlig st�ng detta f�nster 
och ladda upp en bild ist�llet.",

'preview' => "�versikt:",

'ok' => "OK",

'cancel' => "Annullera",

'prod_cat_use_img' => "Det finns produkter eller kategorier som anv�nder sig 
av bilden '%s'.",

'continue_q' => "FORTS�TTA ATT RADERA?",

'site_doc_use_img' => "Det finns dokument som anv�nder sig av bilden '%s'.",

'home_use_img' => "Bilden '%s' anv�nds p� hemsidan.",

'gallery_use_img' => "Bilden '%s' anv�nds av ett bildgalleri �ver bilder p� 
produkter.",

'image_deleted' => "Bild raderad.",

'delete_failed' => "Radering misslyckades.",

'image_manager' => "Bildhanterare",

'delete_from_server' => "Nedan kan du radera bilder fr�n din server.",

'img_click_prev' => "Bild (Klicka f�r en �versikt)",

'size' => "Storlek",

'action' => "�tg�rd",

'no_images_added' => "Inga bilder har lagts till.",

'prev_file' => "Granska fil",

'close_window' => "St�ng F�nster",

'no_image_selected' => "Ingen bild valdes f�r granskning.",

'file_uploader' => "Fil Uppladdare",

'upload_image' => "Ladda upp Bild",

'please_browse_img' => "Var v�nlig leta reda p� din bild:",

'file_too_big' => "Felmeddelande: %s �r �ver %s",

'img_already_exists' => "Felmeddelande: %s finns redan var v�nlig d�p om 
filen du f�rs�ker ladda upp.",

'upload_too_large' => "Felmeddelande: Du letade inte efter n�gon bild att 
ladda upp eller s� var filen f�r stor f�r servern. Maximal uppladdningsgr�ns 
�r 2 MB.",

'not_valid_mime' => "Felmeddelande: %s �r ingen till�ten bildtyp.",

'image_upload_success' => "Lyckades: %s uppladdad.",

'back' => "&laquo; Tillbaka",

);



$lang['admin']['misc'] = array (

'license_form' => "Licensformul�r",

'write_error' => "Kunde inte �ppna includes/global.inc.php f�r att skrivas 
till. F�rs�k �ndra r�ttigheterna (CHMOD) till 0777. Kom ih�g att �ndra 
tillbaka till 0644 efter�t!",

'try_again' => "F�rs�k igen",

'purchase_cubecart' => "K�p CubeCart:",

'invalid_key' => "Urs�kta men licensnyckeln accepterades inte eller s� har 
den redan anv�nts.",

'purchase_license_key' => "K�p Licensnyckel",

'run_unlicensed' => "Det ser ut som du anv�nder en olicensierad version av 
Cubecart. Var v�nlig ange licensnyckeln nedan f�r att f� ta bort 
copyrighten.",

'license_key' => "Licensnyckel:",

'submit_key' => "Ange nyckel",

'server_info' => "Server Info",

'ini_set_desc' => "Informationen nedan visar inst�llningarna i server milj�n 
f�rn�rvarande. Denna inneh�ller all sorters information som kan beh�va 
�ndras om du upplever problem med Cubecart. Notera: Om du har en delad 
server eller en virtuell v�rd �r det troligt att du kommer ha begr�nsad 
tillg�ng f�r att �ndra inst�llningarna. </span> <a 
href='http://www.php.net/ini_set' target='_blank' 
class='txtLink'>ini_set()</a> <span class='copyText'> Funktionen kan ofta 
anv�ndas f�r att �sidos�tta dessa inst�llningar.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "Statusen p� denna ordern har �ndrats utan problem. I 
detta l�ge kan du skicka kunden en e-postfaktura vilket ger till�telse att 
ladda ner digitala produkter. F�r att g�ra detta ",

'click_here' => "Klicka H�r",

'send_invoice_desc' => "Om statusen �r �ndrad fr�n Avvaktar till Behandlas 
kommer du att ges ett val att skicka kunden ett fakturakvitto d�r till�telse 
beviljas till digitala produkter om det till�mpas.",

'delete_success' => "Raderades problemfritt.",

'delete_fail' => "Radering misslyckades.",

'orders' => "Alla order",

'all_orders' => "Nedan finns alla order som �r sparade i databasen.",

'order_no' => "Order Nr.",

'status' => "Status",

'date_time' => "Datum/Tid",

'customer' => "Kunder",

'ip_address' => "IP-Adress",

'cart_total' => "Varukorg totalt",

'action' => "�tg�rd",

'no_orders_in_db' => "Det finns inga order i databasen.",

'order_email' => "K�ra %s,\n\nVi vill bara meddela att statusen p� ditt 
order-id: %s har �ndrats till %s\n\n",

'email_staff_comments' => "V�r personal har lagt till f�ljande 
kommentar:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Detta e-post har automatiskt skickats fr�n %s",

'email_subj_status_change' => "Orderstatus �ndrad:",

'order_no2' => "Order Nr:",

'print_packing_slip' => "Skriv ut fraktsedel",

'customer_info' => "Kundinfo",

'invoice_address' => "Fakturaadress:",

'delivery_address' => "Leveransadress:",

'contact_info' => "Kontaktinformation:",

'tel' => "Tel:",

'mobile' => "Mobil:",

'email' => "e-post:",

'customer_comments' => "Kunds kommentar:",

'no_comments_left' => "Inga kommentarer l�mnades.",

'order_summary' => "Ordersammanst�llning",

'product' => "Produkt",

'code' => "Kod",

'quantity' => "Antal",

'price' => "Pris",

'download_link' => "Nerladdningsl�nk:",

'warn_reset' => "Detta s�tter antalet nerladdningar till noll och ut�kar 
f�rfallotiden.",

'reset_link' => "�terst�ll l�nk",

'download_stats' => "Nerladdad (%s) g�nger. L�nkens f�rfallotid %s",

'ip_address2' => "IP-adress:",

'order_date_time' => "Orderdatum/Tid:",

'payment_method' => "Betalningsmetod:",

'ship_method' => "Leveransmetod:",

'subtotal' => "Delsumma:",

'total_tax' => "Moms totalt:",

'shipping' => "Frakt:",

'grand_total' => "Totalt:",

'order_notfound' => "Ordernummer %s kunde inte hittas.",

'order_status' => "Orderstatus",

'shipping_date' => "Leveransdatum:",

'ship_today' => "Leverans idag",

'modify_status' => "Modifiera Status:",

'staff_comments' => "Personalens Kommentar:",

'info_not_sent_customer' => "(Denna informationen skickas INTE till kund!)",

'inform_customer' => "Informera kund:",

'customer_notified' => "(Med denna ibockad kommer kunden att bli meddelad 
n�r orderstatusen �ndras.)",

'comments_2_customer' => "Kommentar till kund:",

'comments_2_customer_desc' => "(Detta kommer att l�ggas till p� e-posten d�r 
du meddelar kunden att statusen p� ordern �r �ndrad.)",

'save_order_status' => "Spara orderstatus",

'paid_by' => "Betalning via:",

'delivered_to' => "Levererad till:",

'invoice_reciept_for' => "Faktura / Kvitto f�r:",

'order_of_time' => "Din order av",

'order_id' => "Order-ID:",

'digi_goods_desc' => "Om du har best�llt digitala varor ska du erh�lla ett 
e-post inneh�llande nerladdningsinstruktioner. Dessa kan ocks� tillg�s via 
ditt kontos kontrollpanel d�r du har full kontroll �ver ditt konto hos 
oss.",

'thank_you' => "Tack f�r att du handlar hos oss!",

);



$lang['admin']['products'] = array (

'show_featured' => "Inkludera senaste produkter p� hemsidan?",

'upload_new_images' => "Ladda upp bilder",

'no_images_avail' => "Det finns inga bilder tillg�ngliga.",

'prod_added_to_cat' => "Produkt lades till i kategori.",

'prod_not_added_to_cat' => "Misslyckades med att l�gga till kategori till 
produkt.",

'prod_removed_from_cat' => "Produkt borttagen fr�n kategori.",

'prod_not_removed_from_cat' => "Produkt blev inte borttagen fr�n kategori.",

'title_extraCats' => "Kategorihanterare",

'manage_cats' => "Hantera kategorier",

'master_cat' => "Originalkategori:",

'close_window' => "St�ng f�nster",

'img_added_to_prod' => "Bild lades till till produkt.",

'img_not_added_to_prod' => "Misslyckades med att l�gga till bild till 
produkt.",

'img_removed' => "Bild borttagen fr�n produkt.",

'img_not_removed' => "Bild blev inte borttagen fr�n produkt.",

'image_management' => "Bildhanterare",

'manage_images' => "Hantera bilder",

'image' => "Bild",

'action' => "�tg�rd",

'delete_success' => "Raderad problemfritt.",

'delete_fail' => "Radering misslyckades.",

'update_successful' => "uppdatering lyckades.",

'update_fail' => "Misslyckades med att uppdatera kategorin.",

'add_success' => "lades till problemfritt.",

'add_fail' => "Misslyckades med att l�gga till kategorin.",

'prod_inventory' => "Produktinventarier",

'current_prods_in_db' => "Nedan finns en lista �ver alla produkter i 
databasen f�rn�rvarande.",

'all_cats' => "Alla kategorier",

'prod_name' => "ProduKtnamn",

'prod_id' => "Produkt-ID",

'prod_code' => "Produktkod",

'master_cat2' => "Originalkategori",

'title' => "Titel",

'stock_level' => "Lager Status",

'normal_price' => "Ordinarie pris",

'sale_price' => "Utf�rs�ljningspris",

'asc' => "Stigande order",

'desc' => "Fallande order",

'containing_text' => "inneh�llande texten",

'filter' => "Filter",

'reset' => "�terst�ll",

'id' => "Id",

'type' => "Typ",

'name' => "Namn",

'price_sale_price' => "Pris / Utf�rs�ljningspris",

'in_stock' => "I lager",

'action' => "�tg�rd",

'languages' => "Spr�k",

'no_products_exist' => "Finns inga produkter i databasen.",

'add_prod_desc' => "Du kan anv�nda formul�ret nedan f�r att l�gga till en 
produkt till inventarierna.",

'product' => "Produkt",

'prod_name2' => "Produktnamn:",

'prod_stock_no' => "Produkt-/Lagernummer:",

'auto_generated' => "(Om denna l�mnas tom genereras ett nummer 
automatiskt.)",

'description' => "Beskrivning:",

'primary_lang' => "(I det prim�ra spr�ket kan andra spr�k l�ggas till 
efter�t.)",

'category' => "Kategori:",

'image2' => "Bild:",

'opt_and_thumbs' => "(Miniatyrbild kommer automatiskt att skapas OM valt 
format �r kompatibelt.)",

'upload_new' => "Ladda upp ny bild",

'browse_existing' => "S�k efter existerande bilder",

'normal_price2' => "Ordinarie pris:",

'sale_price2' => "Utf�rs�ljningspris:",

'sale_mode_desc' => "(Detta till�mpas enbart n�r butiken �r inst�lld p� 
l�get f�rs�ljning per produkt.)",

'prod_weight' => "Produktens vikt:",

'tax_class' => "Momsklass:",

'stock_level2' => "Lagerniv�:",

'reduce_stock_level' => "(Denna niv�n reduceras f�r var g�ng en produkt blir 
s�ld.)",

'use_stock_q' => "Anv�nda lagerniv�n?",

'product_type' => "Produkttyp:",

'tangible' => "Fysisk",

'digital' => "Digital",

'digi_path' => "Digitala produkter beh�ver antingen en HTTP-v�g eller en 
Server Root-V�g (se info nedan).",

'digi_info' => "Digital info:",

'digi_desc' => "<p><strong>HTTP-v�g:</strong> 
http://www.domain.com/downloads/download.exe<br />

				<strong>Server Root-V�g:</strong> 
/usr/local/vhosts/www.domain.com/downloads/download.exe 
<strong>(Rekommenderas!)</strong></p>

<p>F�rdelen med att anv�nda server root-v�gen �r att filerna kan lagras 
n�gon annanstans �n i den offentliga mappen. Om denna metoden �r vald kommer 
Cubecart att automatiskt skapa en nerladdningsl�nk som f�rses med en 
f�rfallotid och maximalt antal nerladdningar, inst�llningar som b�da g�rs i 
butikens inst�llningar.</p>",

'prod_inv_langs' => "Produktinventarier - (Andra spr�k)",

'use_rich_oth_lang' => "Var v�nlig anv�nd rich text-editorn nedan f�r att 
l�gga till eller redigera produkter i andra spr�k.",

'language' => "Spr�k:",

'update_prod_lang' => "Uppdatera produktspr�k",

'save_prod_lang' => "Spara produktspr�k",

'other_langs_exdefault' => "Nedan finns en lista p� alla produkter 
f�rn�rvarande p� andra spr�k �n originalspr�ket.",

'no_lang_exist' => "Inga spr�kvariationer finns f�r denna produkt i 
databasen.",

'opt_add_success' => "Valets namn tillagd.",

'opt_add_fail' => "Valets namn inte tillagd.",

'att_add_success' => "Val av attribut tillagd.",

'att_add_fail' => "Val av attribut inte tillagd.",

'assign_success' => "Valm�jlighet har tilldelats produkt.",

'assign_fail' => "Valm�jlighet inte tilldelad produkt.",

'product_options' => "Produktval",

'product_option' => "Produktval",

'quick_assign' => "Snabb tilldelning:",

'prod_opts_of' => "Produktens valm�jlighet fr�n",

'to' => "till",

'go' => "L�gg till",

'opt_step1' => "1. Skapa ett produktval (t.ex. F�rg)",

'opt_id' => "ID",

'opt_name' => "Valets Namn",

'warn_remove_opt' => "�r du s�ker p� att du vill radera denna valm�jlighets 
namn? \n\nVARNING: GENOM ATT G�RA S� S� KOMMER ALLA PRODUKTERS 
VALM�JLIGHETER OCH TILLH�RANDE ATTRIBUT MED DETTA NAMN ATT TAS BORT!",

'no_options_made' => "Inga namn p� produktens valm�jligheter har skapats.",

'option' => "Valm�jlighet",

'opt_step2' => "2. Skapa ett v�rde till valm�jligheten (t.ex. R�d)",

'option_attributes' => "Valm�jligheternas attribut",

'warn_remove_att' => "�r du s�ker p� att du vill radera denna 
valm�jlighetens attribut? \n\nVARNING: GENOM ATT G�RA S� S� RADERAS ALLA 
PRODUKTERS VALM�JLIGHET MED DETTA ATTRIBUT OCH VALETS NAMN!",

'no_attributes_made' => "Inga nya valm�jligheter har gjorts till 
attributen.",

'attribute' => "Attribut",

'opt_step3' => "3. Tilldela val &amp; v�rde till produkt (t.ex. T-Shirt &gt; 
F�rg &gt; R�d)",

'option_attribute' => "Valets attribut",

'option_price' => "Valets pris",

'add_subtract' => "L�gg till / Dra ifr�n",

'remove_opt_prod' => "�r du s�ker att du vill ta bort denna valm�jligheten 
fr�n denna produkt?",

'no_assigned_opts' => "Inget val har tilldelats n�gon produkt.",

'prods_made_1st' => "Produkter m�ste l�ggas till f�rst innan ett val kan 
skapas.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Enable Script/Bot Flood Control?</strong><br />
Forces users to enter a code on registration, tell a friend etc to prevent bot's from spamming the store.",


//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP Host:",

'defaultHost' => "(Standard: localhost)",

'smtpPort' => "SMTP Port:",

'defaultPort' => "(Standard: 25)",

'smtpAuth' => "Anv�nd autentisering?",

'defaultAuth' => "(Standard: Nej)",

'smtpUsername' => "SMTP Anv�ndarnamn:",

'smtpPassword' => "SMTP L�senord:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "Visa Senaste produkter p� hemsidan?",

'no_latest' => "Antal av dom senaste produkterna som ska visas:",

'off_line_settings' => "Offline-inst�llningar",

'off_line' => "St�nga av butiken?",

'off_line_content' => "Offline-meddelande:",

'off_line_allow_admin' => "Till�t adminstrat�rer att granska butiken 
offline? (Kr�ver en admin-session)",

'store_settings' => "Butikens inst�llningar",

'edit_below' => "Var v�nlig redigera din butiks konfigurationsinst�llningar 
nedan:",

'meta_data' => "Metadata",

'browser_title' => "Butikens titel:",

'meta_desc' => "Meta-beskrivning:",

'meta_keywords' => "Meta-nyckelord:",

'comma_separated' => "(Separeras med komma)",

'store_co_name' => "Butiks/F�retagsnamn:",

'store_address' => "Butiksadress:",

'country' => "Land:",

'zone' => "L�n:",

'dirs_folders' => "Kataloger &amp; Mappar",

'rootRel' => "Offentlig Root-HTML-katalog till butik:",

'include_slash' => "(Inkludera Snedstreck)",

'storeURL' => "Webbadress (URL) till butik:",

'eg_domain_com' => "t.ex. http://www.domain.com/",

'rootDir' => "Serverns Root-katalog:",

'eg_root_path' => "t.ex. s�kv�g/till/din/webbutik",

'rootRel_SSL' => "Offentlig S�KER Root HTML Mapp till butik:",

'storeURL_SSL' => "S�KER Webbadress (URL) till butik:",

'eg_domain_SSL' => "t.ex. https://secure.domain.com",

'rootDir_SSL' => "S�KER Server Root-katalog:",

'eg_root_path_secure' => "t.ex. /s�kv�g/till/din/s�kra/webbutik",

'enable_ssl' => "Aktivera SSL:",

'ssl_warn' => "(Varning: Denna �ndring g�rs omedelbart efter att den 
verkst�llts. Var v�nlig f�rs�kra dig om att den S�kra root-Katalogen och den 
s�kra Webbadressen (URL) �r korrekta och fungerar INNAN inst�llningen �ndras 
till Ja)",

'digital_downloads' => "Digitala nerladdningar",

'download_expire_time' => "Nerladdningens f�rfallotid:",

'seconds' => "(Sekunder)",

'download_attempts' => "Nerladdningsf�rs�k:",

'attempts_desc' => "(Antal f�rs�k kunden har f�r att kunna ladda ner 
produkt.)",

'styles_misc' => "Stil, Design &amp; �vrigt",

'default_language' => "Huvudspr�k:",

'store_skin' => "Butikens design:",

'no_cats_per_row' => "Antal kategorier per rad:",

'dir_symbol' => "Katalogsymbol:",

'prods_per_page' => "Antal produkter per sida:",

'precis_length' => "Produkts exakta l�ngd:",

'chars' => "(Tecken)",

'no_sale_items' => "Antal F�rem�l i Utf�rs�ljningsboxen:",

'no_pop_prod' => "Antal F�rem�l i boxen �ver popul�ra f�rem�l:",

'email_name' => "e-postnamn:",

'email_name_desc' => "(Detta anv�nds som avs�ndarnamn p� e-post som skickas 
fr�n denna webbsidan.)",

'email_address' => "e-postadress:",

'email_address_desc' => "(Denna anv�nds som huvudsaklig e-postadress till 
denna webbsidas e-post.)",

'mail_method' => "Postleveransmetod:",

'mail_recommended' => "(SMTP rekommenderas)",

'max_upload_size' => "Max uppladdningsstorlek:",

'under_x_recom' => "(Under 2048Kb rekommenderas)",

'max_sess_length' => "Max sessionsl�ngd:",

'db_settings' => "Databasinst�llningar",

'db_host' => "Databasv�rd:",

'db_username' => "Databasanv�ndarnamn:",

'db_password' => "Databasl�senord:",

'db_name' => "Databasnamn:",

'db_prefix' => "Databasprefix:",

'gd_settings' => "GD-inst�llningar",

'gd_ver' => "GD-version:",

'gd_thumb_size' => "MiniatyrbildsStorlek:",

'gd_gif_support' => "Till�ta GIF-st�d: (behaga g�ra s�ker den h�r �r s�ttet 
i st�nd till p� din servaren)",

'gd_max_img_size' => "Max bildstorlek:",

'gd_img_quality' => "GD-Bildkvalit�:",

'recom_quality' => "(60 - 80 rekommenderas)",

'stock_settings' => "Lagerinst�llningar",

'use_stock' => "Visa lagerniv�?",

'allow_out_of_stock_purchases' => "Till�ta k�p �ver lagerniv�?",

'weight_unit' => "Viktenhet:",

'time_and_date' => "Tid &amp; datum",

'time_format' => "Tidsformat:",

'time_format_desc' => "(Se <a href='http://www.php.net/strftime' 
target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Tidsoffset:",

'time_offset_desc' => "(Sekunder - Anv�nds av servern i andra l�nder med 
varierande tidszoner)",

'date_format' => "Datumformat:",

'date_format_desc' => "(Se <a href='http://www.php.net/date' target='_blank' 
class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Lokala inst�llningar",

'default_currency' => "Huvudvaluta",

'inc_tax_prices' => "Inkludera moms i priset?",

'sale_mode' => "Utf�rs�ljningsl�ge:",

'percent_of_all' => "Procent p� alla priser",

'ind_sale_per_item' => "Individuellt Utf�rs�ljningspris per f�rem�l",

'sale_mode_off' => "Utf�rs�ljningsl�ge AV",

'sale_per_off' => "Procentuellt avdrag vid Utf�rs�ljning:",

'sale_per_off_desc' => "(Procent som sl�s av p� alla priser)",

'diff_dispatch' => "Till�t leverans till adresser andra �n 
fakturaadressen?",

'update_settings' => "Uppdatera inst�llningar",

'update_success' => "uppdaterad problemfritt.",

'update_fail' => "blev inte uppdaterad.",

'add_success' => "lades till problemfritt",

'add_fail' => "blev inte tillagd.",

'delete_success' => "Raderades problemfritt.",

'delete_failed' => "Radering lyckades inte.",

'currencies' => "Valutor",

'currency' => "Valuta",

'currencies_desc' => "Var v�nlig l�gg till, redigera eller radera valutor 
nedan:",

'c_code' => "Kod",

'c_name' => "Namn",

'c_value' => "Kurs",

'symbol_left' => "Symbol v�nster",

'symbol_right' => "Symbol h�ger",

'decimal_places' => "Antal decimaler",

'last_updated' => "Senast uppdaterad",

'c_status' => "Status",

'no_currencies' => "Det finns inga valutor i databasen.",

'countries' => "L�nder:",

'ind_country' => "Land:",

'country' => "Land",

'edit_countries_below' => "Var v�nlig l�gg till, redigera eller radera 
l�nder nedan:",

'disable' => "Avaktivera",

'enable' => "Aktivera",

'iso' => "ISO",

'iso_name' => "Namn",

'iso3' => "ISO3",

'num_code' => "Numerisk Kod",

'action' => "�tg�rd",

'warn_del_country' => "�r du s�ker p� att du vill radera detta? Alla l�n 
kommer att raderas ovanf�r detta.",

'no_countries_in_db' => "Det finns inga l�nder i databasen.",

'edit_counties' => "Var v�nlig l�gg till, redigera eller radera l�n nedan:",

'no_counties_in_db' => "Det finns inga l�n i databasen.",

'add_country' => "L�gg till land",

'add_county' => "L�gg till L�n",

'tax_Settings' => "MOMS-inst�llningar",

'edit_locale_below' => "Var v�nlig redigera lokala inst�llningar nedan:",

'tax_only_to' => "L�gg till Moms ENBART p� f�ljande omr�den:",

'manage_tax_below' => "Var v�nlig arrangera dina olika typer av MOMS nedan. 
Dessa kan l�ggas till till olika produkter s� att du kan ha MOMS-fria 
(taxfree) produkter och olika MOMS-satser p� olika produkter.",

'tax_class2' => "MOMS-sats",

'rate_per' => "V�rde (%)",

'tax_update' => "Uppdatera",

'no_taxes_setup' => "Det finns ingen installation av MOMS.",

'tax' => "MOMS",

);



$lang['admin']['stats'] = array(

'store_stats' => "Butiksstatistik",

'choose_view' => "Var v�nlig v�lj vilken statistik du skulle vilja se:",

'search_terms' => "S�ktermer",

'product_pop' => "Produktpopularitet",

'cust_online' => "Kunder online",

'search_terms_order_by' => "S�ktermer (Arrangerade genom antalet 
s�kningar)",

'sorry_no_data' => "Det finns inget data att visa.",

'product_pop_ordered_by' => "Produktpopularitet  (Arrangerad genom antalet 
granskningar)",

'cust_active' => "Kunder som varit aktiva dom senaste 15 min.",

'hash' => "#",

'customer' => "Kund",

'location' => "Lokalisering",

'sess_start_time' => "Sessionens starttid",

'last_click_time' => "Senaste klicktid",

'sess_length' => "Sessionens l�ngd",

'geust' => "G�st",

'signed_in' => "Inloggad",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "VARNING: Den huvudsakliga konfigurationsfilen 
'includes/global.inc.php' �r skrivbar vilket inneb�r att din butik �r i en 
riskzon. Var v�nlig och �ndra filtill�telsen (CHMOD) till 0644 s� snart som 
m�jligt.",

'401' => "Felmeddelande 401: Du har inte till�telse att utnyttja denna 
sidan. Var v�nlig fr�ga en av superanv�ndarna f�r att bevilja dig detta.",

'welcome_note' => "V�lkommen till CubeCart-administrationens Kontrollpanel",

'last_login' => "Senaste inloggning var ",

'by' => "av",

'failed' => "misslyckades.",

'store_overview' => "�verblicka butik:",

'version' => "Version:",

'visit_cc' => "Bes�k CubeCarts nerladdningsserver",

'no_products' => "Antal produkter:",

'no_customers' => "Antal kunder:",

'img_upload_size' => "Uppladdningsmappens storlek f�r bilder:",

'no_orders' => "Antal order:",

'quick_search' => "Snabbs�k:",

'order_no' => "Ordernummer:",

'search_now' => "S�k nu",

'customer' => "Kunder:",

'login_failed' => "Inloggning Misslyckades! Antingen var anv�ndarnamnet 
eller l�senordet inte korrekt.",

'new_pass_sent' => "Ett nytt l�senord har e-postats till",

'no_admin_sess' => "Ingen administrationssession kunde hittas.",

'login_fail_2' => "Inloggningen misslyckades. Var v�nlig f�rs�k igen.",

'login_below' => "Var v�nlig logga in nedan:",

'username' => "Anv�ndarnamn:",

'password' => "L�senord:",

'request_pass' => "Beg�r l�senord",

'login' => "Logga in",

'logout_failed' => "Utloggningen misslyckades eftersom ingen admin-session 
var n�rvarande.",

'reset_pass_email' => "K�ra %s,

Du, eller n�gon annan som uppger sig f�r att vara du har efterfr�gat att f� 
ditt l�senord �terst�llt.

Dina nya inloggningsuppgifter �r:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Anv�ndarnamn: %s
L�senord: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Detta e-postet skickades fr�n %s/admin/requestPass.php\n
Avs�ndarens IP-adress �r: %s",

'pass_reset_failed' => "�terst�llning av l�senord misslyckades.",

'enter_email_below' => "Var v�nlig ange din e-postadress nedan:",

'email_address' => "e-postadress:",

'send_pass' => "Skicka l�senord",

);



$lang['admin']['nav'] = array(

'permission_error' => "Du har ingen till�telse h�r.",

'navigation' => "Navigera",

'admin_home' => "Admins hem",

'store_home' => "Butikens hem",

'store_config' => "Butikens konfig",

'gen_settings' => "Allm�nna inst�llningar",

'taxes' => "MOMS/Skatter",

'countries_zones' => "L�nder &amp; Zoner",

'currencies' => "Valutor",

'modules' => "Moduler",

'shipping' => "Leverans",

'gateways' => "Gateways",

'affiliates' => "Partners",

'catalog' => "Katalog",

'view_products' => "Granska produkter",

'add_product' => "L�gg till produkt",

'product_options' => "Produktval",

'view_categories' => "Granska kategorier",

'add_categories' => "L�gg till Kategori",

'customers' => "Kunder",

'view_customers' => "Granska kunder",

'email_customers' => "e-posta kunder",

'orders' => "Alla order",

'file_manager' => "Filhanteraren",

'manage_images' => "Arrangera bilder",

'upload_images' => "Ladda upp Bilder",

'statistics' => "Statistik",

'view_stats' => "Granska statistik",

'documents' => "Dokument",

'homepage' => "Hemsida",

'site_docs' => "Sidans dokument",

'misc' => "�vrigt",

'server_info' => "Serverinfo",

'admin_users' => "Admin-anv�ndare",

'administrators' => "Administrat�rer",

'admin_sessions' => "Admin-sessioner",

);



$lang['admin']['incs'] = array(

'administration' => "Administrationen",

'logged_in_as' => "Inloggad som:",

'logout' => "Logga ut",

'change_pass' => "�ndra l�senord",

'error_editing' => "Felmeddelande vid redigeringsf�rs�k. Indata var inte en 
pekare.",

'config_updated' => "Konfiguration Uppdaterad. Var v�nlig f�rs�kra dig om 
att filr�ttigheterna har st�llts tillbaka korrekt.",

'cant_write' => "Kunde inte �ppna filen '%s' f�r skrivning. F�rs�k �ndra 
filtill�telsen (CHMOD) till 0777. Kom ih�g att �ndra tillbaka till 0644 
efter�t!",

'db_config_updated' => "Konfigurationen uppdaterad.",

'db_cant_write' => "Uppdateringen misslyckades",

'select_above' => "V�lj ovan",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////
/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Ja";

$lang['front']['no'] = "Nej";
/////////////////////////////////////


$lang['front']['boxes'] = array(

'lang_links' => "Anv�ndbara l�nkar",

'reg_and_checkout' => "Registrera &amp; Checka ut",

'cont_shopping' => "Forts�tt handla",

'edit_del_add' => "Redigera leveransadress",

'edit_inv_add' => "Redigera fakturaadress",

'empty_cart' => "T�m varukorg",

'prev_page' => "F�reg�ende sida",

'homepage' => "Ing�ng",

'shop_by_cat' => "Kategorier",

'sale_items' => "F�rem�l till utf�rs�ljning",

'save' => "Spara",

'currency' => "Valuta",

'information' => "Information",

'products' => "Produkter:",

'categories' => "Kategorier:",

'prices' => "Priser:",

'language' => "Spr�k",

'mailing_list' => "Nyhetsbrev",

'subscribe_below' => "Prenumerera p� v�rt nyhetsbrev nedan:",

'email' => "e-post:",

'join_now' => "G� med nu!",

'already_subscribed' => "e-postadressen %s �r redan anm�ld f�r prenumeration 
av v�rt nyhetsbrev. Var v�nlig logga in p� ditt konto om du vill avsluta 
prenumerationen.",

'enter_valid_email' => "Var v�nlig ange en giltig e-postadress.",

'added_to_mail' => "Tack s� mycket, %s har blivit tillagd till v�r 
mailinglista.",

'subscribed_to_mail' => "Tack s� mycket, %s abonnerar nu p� v�rt 
nyhetsbrev.",

'popular_products' => "Popul�ra produkter",

'featured_prod' => "Aktuell produkt",

'sale_items' => "Utf�rs�ljning",

'search_for' => "S�k efter:",

'go' => "S�k",

'welcome_back' => "V�lkommen tillbaka",

'logout' => "Logga ut",

'your_account' => "Ditt Konto",

'welcome_guest' => "V�lkommen g�st",

'login' => "Logga in",

'register' => "Registrera",

'shopping_cart' => "Varukorg",

'basket_empty' => "Din varukorg �r tom.",

'items_in_cart' => "F�rem�l i varukorgen:",

'total' => "Totalt:",

'view_basket' => "Din Varukorg",

);



$lang['front']['account'] = array(

'your_account' => "Ditt konto",

'personal_info' => "Personlig info",

'order_history' => "Orderhistorik",

'change_password' => "�ndra l�senord",

'newsletter' => "Nyhetsbrev",

'login_to_view' => "Du m�ste logga in f�r att kunna se denna sidan.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "L�senordet du angav var inkorrekt.",

'conf_not_match' => "Ditt bekr�ftade l�senord matchade inte ditt nya 
l�senord.",

'change_pass' => "�ndra l�senord",

'password_updated' => "Tack s� mycket, ditt l�senord har blivit 
uppdaterat.",

'change_pass_below' => "Var v�nlig och �ndra ditt l�senord nedan:",

'old_pass' => "Gammalt l�senord:",

'new_pass' => "Nytt l�senord:",

'confirm_pass' => "Bekr�fta l�senord:",

'submit' => "Ange",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Urs�kta",

'expired' => "Din nerladdningsl�nk har f�rfallit eller �r ogiltig.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Gl�mt l�senord",

'email' => "e-post:",

'send_pass' => "Skicka l�senord",

'reset_email' => "K�ra %s %s,

Du, eller n�gon som uppger sig f�r att vara du har f�rfr�gat om att 
�terst�lla ditt l�senord. Dina nya uppgifter finns nedan:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Anv�ndare: %s
L�sen: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
F�r att Logga in, var v�nlig f�lj l�nken nedan:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Detta e-post skickades fr�n %s
Avs�ndarens IP-adress �r: %s",

'new_pass_sent' => "Ett nytt l�senord har blivit skickat till %s.",

'email_not_found' => "Urs�kta men den e-postadressen kunde inte hittas.",

'enter_email' => "Var v�nlig ange inloggningens e-postadress nedan f�r att 
f� ett tempor�rt l�senord skickat till dig:",

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

'newOrderMsg' => "En kund har just gjort f�ljande best�llning %s, f�r att se 
denna order f�lj l�nken nedanf�r: \n\n %s",

'newOrderSubj' => "Ny lagerorder upplagd",

'payment' => "Betalning",

'cart' => "Varukorg",

'address' => "Adress",

'payment' => "Betalning",

'complete' => "F�rdigst�ll",

'fill_out_below' => "Var v�nlig fyll i formul�ret nedan:",

'transferring' => "Skickar nu till betalning",

'go_now' => "K�r Nu!",

'continue' => "Forts�tt",

'choose_method' => "Var v�nlig v�lj den betalningsmetod du f�redrar:",

'your_comments' => "Dina kommentarer:",

'none_configured' => "Inga betalningsmetoder har blivit konfigurerade.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Logga in",

'username' => "Anv�ndarnamn:",

'password' => "L�senord:",

'remember_me' => "Kom ih�g mig?",

'forgot_pass' => "Gl�mt ditt l�senord?",

'login_success' => "Din inloggning lyckades.",

'already_logged_in' => "Du  har redan loggat in.",

'login_failed' => "Inloggningen misslyckades!",

'login_below' => "Var v�nlig logga in nedan:",

);



$lang['front']['index'] = array(

'latest_products' => "Senaste produkterna",

);



$lang['front']['logout'] = array(

'logout' => "Logga ut",

'session_destroyed' => "Din session har blivit avslutad.",

'no_session' => "Det fanns ingen session att makulera. Det verkar som du 
hamnat h�r av misstag.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Nyhetsbrevets inst�llningar",

'prefs_updates' => "Inst�llningarna f�r ditt nyhetsbrev har blivit 
uppdaterade.",

'edit_prefs_below' => "Var v�nlig redigera nyhetsbrevets inst�llningar 
nedan:",

'subscribe' => "Prenumerera p� v�rt nyhetsbrev?",

'email_format' => "e-postformat:",

'plain_text' => "Enkel text",

'html' => "HTML",

'html_abbr' => "Hyper Text Markup Language",

'update' => "Uppdatera",

'login_required' => "Du m�ste logga in f�r att kunna se denna sida.",

);



$lang['front']['noShip'] = array(

'sorry' => "Urs�kta",

'desc' => "Vi levererar inte produkter till ditt land.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Urs�kta",

'desc' => "Vi levererar inte produkter �ver orderns totalvikt.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Telefonnummer m�ste vara numeriskt.",

'complete_all' => "Var v�nlig f�rs�kra dig om att alla f�lten �r ifyllda.",

'email_invalid' => "Var v�nlig ange en giltig e-postadress.",

'numeric_only' => "Telefonnummer m�ste vara numeriska.",

'email_inuse' => "Urs�kta denna e-postadressen anv�nds redan.",

'update_email' => "K�ra %s %s,

Detta e-post har skickats till dig f�r att bekr�fta att din personliga 
information har uppdaterats problemfritt. Om du k�nner att ditt konto blivit 
uppdaterad av n�gon annan �n dig var d� v�nlig och kontakta v�r personal 
omg�ende.\n\n

Detta e-post skickades fr�n %s\n

Avs�ndarens IP-adress �r: %s",

'update_email_subj' => "Personlig info uppdaterad",

'personal_info' => "Personlig Information",

'account_updated' => "Ditt konto har uppdaterats. Du kan redigera det igen 
om du s� �nskar h�r nedan.",

'edit_below' => "Var v�nlig redigera personlig information nedan:",

'title' => "Titel:",

'first_name' => "F�rnamn:",

'last_name' => "Efternamn:",

'email' => "e-post:",

'address' => "Adress:",

'town' => "Stad:",

'county' => "L�n:",

'postcode' => "Postnummer:",

'country' => "Land:",

'phone' => "Telefon:",

'mobile' => "Mobiltelefon:",

'update_account' => "Uppdatera konto",

'login_required' => "Du m�ste logga in f�r att kunna se denna sida.",

);



$lang['front']['reg'] = array(

'fill_required' => "Var v�nlig f�rs�kra dig att alla f�lt �r ifyllda.",

'pass_not_match' => "Var v�nlig f�rs�kra dig att ditt l�senord passar.",

'enter_valid_email' => "Var v�nlig ange en giltig e-postadress.",

'enter_valid_tel' => "Telefonnummer m�ste vara numeriskt.",

'email_in_use' => "Denna e-postadress anv�nds redan.",

'note_required' => "Var v�nlig notera att alla f�lt markerade med en asterix 
(*) kr�vs f�r att kunna genomf�ra registreringen.",

'express_reg' => "Snabbregistrering",

'submit_and_cont' => "Verkst�ll &amp; forts�tt",

'personal_details' => "Personliga detaljer",

'address' => "Adress",

'title' => "Titel:",

'title_desc' => "(Herr/Fru/Fr�ken)",

'first_name' => "F�rnamn:",

'address2' => "Adress:",

'last_name' => "Efternamn:",

'email_address' => "e-postadress:",

'town' => "Ort:",

'phone' => "Telefon:",

'county' => "L�n:",

'mobile' => "Mobiltelefon:",

'country' => "Land:",

'postcode' => "Postnummer:",

'security_details' => "S�kerhetsdetaljer",

'choose_pass' => "Valt l�senord:",

'conf_pass' => "Bekr�fta l�senord:",

'privacy_settings' => "Privata inst�llningar",

'receive_emails' => "Jag skulle vilja erh�lla e-post fr�n butiken",

'email_format' => "e-postformat:",

'styled_html' => "Stylad HTML",

'plain_text' => "Enkel text",

'tandcs' => "Villkor &amp; Avtal",

'please_read' => "Var v�nlig och l�s v�r",

);



$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "K�ra %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
F�r att granska denna produkt var d� v�nlig och f�lj l�nken nedan:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Detta e-post skickades fr�n %s
Avs�ndarens IP-adress �r: %s",

'email_subject' => "Meddelande fr�n: %s",

'tellafriend' => "Meddela en V�n",

'message_sent' => "Tack s� mycket, ditt meddelande har blivit skickat till 
<strong>%s</strong> om '%s'. Om du skulle vilja skicka detta till en annan 
v�n d� kan du g�ra det igen h�r nedan:",

'fill_out_below' => "Var v�nlig behandla formul�ret nedan f�r att meddela en 
v�n om '%s'.",

'friends_name' => "V�nnens Namn:",

'friends_email' => "V�nnens e-post:",

'your_name' => "Ditt namn:",

'your_email' => "Din e-post:",

'message' => "Meddelande:",

'default_message' => "Jag hittade '%s' och t�nkte eventuellt att du kunde 
vara intresserad.",

'send' => "Skicka",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Avsluta prenumeration",

'email' => "e-post:",

'go' => "K�r",

'enter_valid_email' => "Var v�nlig ange en giltig e-postadress.",

'email_removed' => "Tack s� mycket, <strong>%s</strong> har tagits bort fr�n 
v�r mailinglista.",

'email_not_found' => "Urs�kta, <strong>%s</strong> kunde inte hittas i v�r 
mailing lista eller s� har prenumerationen redan avslutats.",

'enter_email_below' => "Var v�nlig ange din e-postadress nedan f�r att 
avsluta prenumeration av v�rt nyhetsbrev:",

);



$lang['front']['viewCat'] = array(

'search_results' => "S�kresultat",

'sale_items' => "Produkter till Utf�rs�ljning",

'image' => "Bild",

'description' => "Beskrivning",

'price' => "Pris",

'products_in' => "Produkter i:",

'buy' => "k�p",

'more' => "Mer",

'out_of_stock' => "TILLF�LLIGT SLUT",

'no_products_match' => "Inga produkter matchade s�kningen:",

'no_prods_in_cat' => "Det finns inga produkter i denna kategorin.",

);



$lang['front']['viewDoc'] = array(

'error' => "Felmeddelande",

'does_not_exist' => "Detta dokument existerar inte.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Ordernr:",

'customer_info' => "Kundinfo:",

'invoice_address' => "Fakturaadress:",

'delivery_address' => "Leveransadress:",

'na' => "inte tillg�nglig",

'customer_comments' => "Kundkommentarer:",

'order_summary' => "Ordersammanst�llning:",

'product' => "Produkt",

'product_code' => "Produktkod",

'quantity' => "Antal",

'price' => "Pris",

'download_here' => "Ladda ner h�r",

'review_below' => "Var v�nlig granska denna order nedan:",

'order_date_time' => "Orderdatum/Tid:",

'payment_method' => "Betalningsmetod:",

'ship_method' => "LeveransmMetod:",

'subtotal' => "Delsumma:",

'total_tax' => "Moms Totalt:",

'shipping' => "Frakt:",

'grand_total' => "Totalt:",

'order_not_found' => "Det ordernumret kunde inte hittas.",

'login_required' => "Du m�ste vara inloggad f�r att kunna se denna sida.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Dina Order",

'orders_listed_below' => "Alla order f�r detta kontot �r listat nedan:",

'order_no' => "Ordernr",

'status' => "Status",

'date_time' => "Datum/Tid",

'action' => "�tg�rd",

'view' => "Granska",

'no_orders' => "Vi har inga uppgifter i v�rat system p� att n�gon order �r 
placerad. Om du k�nner att ett fel beg�tts var d� v�nlig och kontakta v�r 
personal ",

'login_required' => "Du m�ste vara inloggad f�r att kunna se denna sida.",

);



$lang['front']['viewProd'] = array(

'product' => "Produkt",

'product_info' => "Produktinformation",

'price' => "Pris:",

'product_code' => "Produktkod:",

'tellafriend' => "Meddela en V�n",

'quantity' => "Antal:",

'more_images' => "[+] Fler bilder",

'add_to_basket' => "L�gg i Korg",

'location' => "Plats:",

'no_instock' => "I Lager:",

'instock' => "I Lager",

'out_of_stock' => "TILLF�LLIGT SLUTS�LD",

'prod_opts' => "Produktval:",

'prod_not_found' => "Den produkten kunde inte hittas.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Din varukorg �r f�rn�rvarande tom.",

'allready_customer' => "Redan en Kund?",

'login_below' => "Var v�nlig logga in nedan:",

'username' => "Anv�ndarnamn:",

'password' => "L�senord:",

'remember_me' => "Kom ih�g mig?",

'login' => "Logga in",

'forgot_pass_q' => "Gl�mt ditt l�senord?",

'need_register' => "Beh�ver du Registrera dig?",

'express_register' => "V�r snabbregistrering �r snabb och enkel.",

'reg_and_cont' => "Registrera &amp; Forts�tt",

'cont_shopping_q' => "Forts�tt handla?",

'cont_shopping' => "Forts�tt handla",

'cont_browsing' => "F�r att forts�tta och titta som g�st utan att logga in, 
klicka p� knappen nedan. Notera: du kan inte g�ra n�gra ink�p utan att ha 
registrerat dig f�rst.",

);



$lang['front']['cart'] = array(

'free_shipping' => "Fri leverans",

'view_cart' => "Granska varukorg",

'cart' => "Korg",

'address' => "Adress",

'payment' => "Betalning",

'complete' => "Avsluta",

'add_more' => "Vill du l�gga till fler produkter? Ange Produktkod:",

'add' => "L�gg till",

'qty' => "Antal",

'product' => "Produkt",

'code' => "Kod",

'stock' => "Lager",

'price' => "Pris",

'line_price' => "Riktpris",

'delete' => "Radera",

'remove' => "Tar bort F�rem�l",

'invoice_address' => "Fakturaadress",

'delivery_address' => "Leveransadress",

'title' => "Titel:",

'first_name' => "F�rnamn:",

'last_name' => "Efternamn:",

'address2' => "Adress:",

'town' => "Ort:",

'county' => "L�n:",

'postcode' => "Postnummer:",

'country' => "Land:",

'edit_invoice_address' => "Redigera fakturaadress",

'edit_delivery_address' => "Redigera leveransadress",

'stock_warn' => "Du har best�llt mer produkter �n vi f�rn�rvarande har 
tillg�ngligt. Din order kan bli en aning sen tills v�r lagerstatus �r 
uppdaterad.",

'amount_capped' => "Urs�kta men vi kan inte skicka order som ligger �ver v�r 
lagerstatus.<br />Antalet av detta f�rem�l �r begr�nsad till",

'na' => "-",

'shipping' => "Frakt:",

'tax' => "Moms:",

'subtotal' => "Delsumma:",

'cart_total' => "Totalt i korgen:",

'if_changed_quan' => "(om du �mnar �ndra antalet)",

'update_cart' => "Uppdatera korg",

'continue' => "Forts�tt",

'cart_empty' => "Din Varukorg �r f�rn�rvarande tom.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Bekr�ftelsesk�rm",

'cart' => "Korg",

'address' => "Adress",

'payment' => "Betalning",

'complete' => "Komplett",

'order_success' => "Tack s� mycket, din best�llning lyckades! Bes�k oss 
g�rna snart igen.",

'order_fail' => "Urs�kta, din order misslyckades!",

'try_again_desc' => "Du kan f�rs�ka att inhandla vad som fanns i varukorgen 
igen h�r nedan:",

'try_again' => "F�rs�k Igen",

'request_login' => "Du m�ste vara inloggad f�r att kunna se denna sida.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "K�ra %s,

Tack s� mycket f�r din order: %s placerad den %s

Transaktionen lyckades vilket g�r att varorna skickas s� snart som m�jligt.

~~~~~~~~~~~~~~~~~~~~~~~~~~
Namn: %s
Delsumma: %s
Porto & Postf�rskott: %s
Moms: %s
Totalt: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Fakturadress:
%s
%s
%s
%s
%s
%s
%s

Leverans Adress:
%s
%s
%s
%s
%s
%s
%s

Betalningsmetod: %s
Leveransmetod: %s",

'inv_email_body_2' => "\nDina kommentarer: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Order Inventarie:\n",

'inv_email_body_4' =>"Produkt: %s\n",

'inv_email_body_5' => "Valm�jlighet: %s\n",

'inv_email_body_6' => "Antal: %s
Produkt Kod: %s
Pris: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Order Nr: ",

'digi_email_body1' => "K�ra %s,

Tack s� mycket f�r din order: %s placerad den %s

Nedan finns l�nkarna som beh�vs f�r att f� tilltr�de till de digitala 
produkterna du best�llt.

VIKTIGT: Dessa l�nkar kommer att f�rfalla den %s och du har %s f�rs�k att 
ladda ner dom. Om du har n�gra problem var v�nlig kontakta oss f�r 
fastst�llande av order nummer.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
NERLADDNINGSL�NK:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Ing�ng f�r nerladdning: ",

);



$lang['misc'] = array(

'pages' => " sidor ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "Klientbrowser:",

'server_software' => "Servermjukvara:",

'perofOrderSub' => " % av orderns delsumma",

'freeForOrdOver' => "Free for Orders Over",

'freeShipping' => "Gratis frakt",

'byWeight1stClass' => "Viktberoende (1:a Klass)",

'1stClass' => "(1:a Klass)",

'byWeight2ndClass' => "Viktberoende (2:a Klass)",

'2ndClass' => "(2:a Klass)",

'flatRate' => "Fast fraktkostnad",

'free' => "Gratis",

'national' => "Nationellt",

'international' => "Internationellt",

'byCategory' => "Kategoribereonde",

'perItem' => "Per Vara",

'nextDayEarlyAm' => "N�sta dag - Morgon flygpost",

'nextDayAir' => "N�sta dag flygpost",

'nextDayAirSaver' => "N�sta dag - Ekonomi flygpost",

'2ndDayEarlyAm' => "2 dagars - Morgon flygpost",

'2ndDayAir' => "2 dagars flygpost",

'3daySelect' => "3 dagars post",

'ground' => "Standard",

'canadaStandard' => "Kanada - Standard",

'worldwideExpress' => "V�rldsomsp�nnande Express",

'worldwideExpressPlus' => "V�rldsomsp�nnande Express Plus",

'worldwideExpedited' => "V�rldsomsp�nnande via expedit�r",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Fakturaadress",

'deliverTo' => "Leveransadress",

'postalOrderFor' => "Postorder f�r",

'orderOf' => "Order av ",

'orderID' => "Order ID:",

'product' => "Produkt",

'code' => "Kod",

'qty' => "Antal",

'price' => "Pris",

'shippingMethod' => "Frakts�tt:",

'subtotal' => "Delsumma:",

'totalTax' => "Moms:",

'totalShipping' => "Fraktkostnad:",

'grandTotal' => "Totalt::",

'payByCheck' => "Betala med check",

'payTo' => "G�r checken betalningsbar till",

'payByCard' => "Betala med kort",

'cardType' => "Korttyp:",

'cardNo' => "Kortnummer:",

'3-4DigiId' => "3-4 sifferid:",

'expiryDate' => "Utg�ngsdatum:",

'issueDate' => "Utf�rdsdatum,:",

'issueNo' => "Utf�rdsnummer:",

'signature' => "Signatur:",

'payByTransfer' => "Betala med bank�verf�ring",

'bankName' => "Banknamn:",

'accountName' => "Kontoinnehavare:",

'sortCode' => "Clearingnummer:",

'accountNo' => "Kontonummer:",

'swiftCode' => "Swiftkod:",

'bankAddress' => "Bankadress:",

'thanks' => "Tack f�r att du handlar hos oss!",

'postalAddress' => "Postadress:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "Avvaktar",

'2' => "Bearbetas",

'3' => "Skickad",

'4' => "Nekad",

'5' => "Bedr�glig",

);

$lang['admin']['cats'] = array (

'delete_success' => "Kategorispr�k raderades problemfritt.",

'delete_fail' => "Raderingen misslyckades.",

'update_fail' => "Uppdatering misslyckades.",

'update_success' => "Uppdatering lyckades.",

'add_success' => "L�gga till kategorispr�k lyckades.",

'add_fail' => "L�gga till kategorispr�k misslyckades.",

'site_cats_other_lang' => "Kategorier - (�vriga spr�k)",

'site_cat_other_lang' => "Kategori - (�vriga spr�k",

'cat_name' => "Kategorinamn:",

'language' => "Spr�k:",

'update_cat' => "Uppdatera kategori",

'save_cat' => "Spara kategori",

'current_cat_list' => "Nedan �r en lista �ver alla nuvarande kategorispr�k. 
Dessa kan �ndras och/eller raderas n�r som helst.",

'cat_name2' => "Kategorinamn",

'action' => "K�r",

'no_site_cats' => "Kategorinamnet har inte blivit �versatt �n.",

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