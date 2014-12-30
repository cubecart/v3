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
|	Svensk (SE) Språk Fil
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

$lang['admin']['delete_q'] = "Är du säker på att du vill radera detta?";

$lang['admin']['add'] = "Lägg till ";

$lang['admin']['add_new'] = "Lägg till Ny";

$lang['admin']['write'] = "Skriv";

$lang['admin']['read'] = "Läs";

$lang['admin']['na'] = "Inte tillgänglig"; // as in not applicable

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

'add_failed' => "Kunde inte lägga till användare.",

'administrators_title' => "Administratörer",

'current_users' => "Nuvarande admins",

'id' => "Id",

'user_notes' => "Användarnamn / Noteringar",

'no_logins' => "Antal inloggningar",

'super_user' => "Superanvändare",

'email' => "E-post",

'action' => "Åtgärd",

'add_admin' => "Du kan använda formuläret nedan för att lägga till en 
administratör.",

'full_name' => "Namn:",

'username' => "Användarnamn:",

'administrator' => "Administratör",

'email2' => "E-post:",

'password' => "Lösenord:",

'pass_warn' => "(Ange enbart ett nytt lösenord om du vill byta det 
nuvarande.)",

'make_super' => "Skapa SuperAnvändare?",

'notes' => "Noteringar:",

'permissions' => "Tillåtelser",

'pass_updated' => "Lösenord uppdaterat.",

'pass_not_updated' => "Lösenordet inte uppdaterat.",

'change_pass_below' => "Var vänlig ändra ditt lösenord nedan:",

'old_pass' => "Gammalt Lösenord:",

'new_pass' => "Nytt Lösenord:",

'confirm_pass' => "Bekräfta Lösenord:",

'perms_updated' => "Rättigheterna uppdaterade.",

'set_perms' => "Var vänlig sätt rättigheterna för denna användare nedan.",

'section' => "Sektion",

'nb_bulk' => "Notera: För att massposta till kunderna måste användaren ha 
skrivrättigheter under kunderna.",

'admin_sessions' => "Adminsessioner",

'sessions_desc' => "Nedan visas de senaste inloggningsförsöken gjorda av 
admin. Håll ett öga på detta för att försäkra att där inte förekommer några 
försök av inbrott eller attacker. Det är starkt rekommenderat att du ändrar 
adminlösenordet regelbundet.",

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

'add_failed' => "Misslyckades med att lägga till kategorin.",

'categories' => "Kategorier",

'categories_desc' => "Nedan finns en lista med alla kategorier i din databas 
förnärvarande.",

'cat_name' => "Kategorinamn",

'dir' => "Katalog",

'image' => "Bild",

'no_products' => "Antal Produkter",

'action' => "Åtgärd",

'cannot_del' => "Denna kategorin kan inte raderas eftersom den innehåller 
produkter.",

'no_cats_exist' => "Det finns inga kategorier i databasen.",

'add_desc' => "Du kan lägga till kategorier med ett obegränsat antal 
underkategorier, ladda upp nya bilder eller återanvänd bilder som redan 
finns på servern.",

'category' => "Kategori",

'category_name' => "Kategorinamn:",

'category_level' => "Kategorinivå:",

'top_level' => "Översta nivån",

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

'search_term' => "Sökord:",

'reset' => "Återställ",

'name' => "Namn",

'email' => "E-post",

'invoice_add' => "Fakturaadress",

'phone' => "Telefon",

'reg_ip' => "Reg. Datum / IP-Adress",

'no_orders' => "Antal order",

'action' => "Åtgärd",

'no_cust_exist' => "Inga kunder existerar i databasen.",

'edit_below' => "Var vänlig redigera denna kunden nedan:",

'title' => "Titel",

'first_name' => "Förnamn:",

'last_name' => "Efternamn:",

'email2' => "E-post:",

'address' => "Adress:",

'town' => "Ort:",

'county' => "Län:",

'postcode' => "Postnummer:",

'country' => "Land:",

'phone2' => "Telefon:",

'edit_customer' => "Redigera kund",

'no_download_email' => "Det fanns ingen e-post att ladda ner.",

'email_customers' => "e-posta kunderna",

'create_email' => "Var vänlig skapa din e-post nedan:",

'hint' => "Tips:",

'click_source' => "Du kan klicka på källknappen ovan och kopiera in ett 
HTML-dokument som du redan skapat.",

'important' => "Viktigt:",

'absolute_links' => "Försäkra att alla bilder och länkar är kompletta 
(egentligen att dom innnehåller korrekt domännamn). I dom flesta länder är 
det lag på att det ska finnas en länk för uppsägning av en prenumeration 
(opt out):",

'email_subject' => "e-postärende:",

'senders_name' => "Avsändarens Namn:",

'senders_email' => "Avsändarens e-post:",

'return_path' => "Returväg:",

'bounce_desc' => "(Returadress dit återkommande e-post skall gå.)",

'send_test' => "Skicka test-e-post?",

'test_email_recip' => "Mottagare av test-e-post:",

'send_email' => "Skicka e-post",

'download_or_send' => "Var vänlig välj antingen om kundernas e-postadresser 
ska laddas ner eller om mass-e-post ska skickas genom denna webbsidan.",

'please_choose' => "Var vänlig välj:",

'used_to_download' => "Detta används för nerladdning av e-postadresser som 
sedan kan användas i bulk-e-post mjukvara.",

'bulk_to_subscribed' => "Detta tillåter dig att skicka mass-e-post ENBART 
till dom som har prenumeration på nyhetsbrev via denna webbsidan.",

'include_name' => "Inkludera namn?",

'download_email' => "Ladda ner e-post",

'send_email' => "Skicka e-post",

'sending_complete' => "Utsändningen fullföljd",

'sending' => "Skickar e-post",

'recipient' => "Mottagare:",

'prev_page' => "Föregående Sida",

'page' => "Sida:",

'bulk_finished' => "Mass-e-postaren har fullföljt sin uppgift 
problemfritt.",

'time_taken' => "Förbrukad tid:",

'recipients' => "Mottagare:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Hemsidan blev inte uppdaterad var vänlig försäkra dig om 
filernas rättigheter i includes/static/home.inc.php är korrekta.",

'update_success' => "Hemsidan uppdaterad problemfritt.",

'homepage' => "Hemsida",

'enabled' => "Aktiverad:",

'enabled_desc' => "(Om denna inte är aktiverad kommer huvudspråket att 
användas i första hand.)",

'language' => "Språk:",

'title' => "Titel:",

'use_rich_text' => "Var vänlig använd rich text-editorn nedan för att göra 
ändringar på hemsidan till webbsidan. Vid sparandet ändras innehållet 
omedelbart så var vänlig gå igenom innehållet först.",

'update_homepage' => "Uppdatera hemsidan",

'delete_success' => "Dokument raderat problemfritt.",

'delete_fail' => "Radering misslyckades.",

'update_success' => "uppdatering lyckades.",

'update_fail' => "blev inte uppdaterad.",

'add_success' => "lades till problemfritt.",

'add_fail' => "Misslyckades med att lägga till dokument.",

'site_docs_other_lang' => "Sidans Dokument - (Andra Språk)",

'use_rich_text' => "Var vänlig använd rich text-editorn nedan för att lägga 
till eller redigera sidans dokument till andra språk.",

'site_doc_other_lang' => "Sidans Dokument - (Andra Språk)",

'doc_name' => "Dokumentnamn:",

'language' => "Språk:",

'update_doc' => "Uppdatera dokument",

'save_doc' => "Spara dokument",

'current_doc_list' => "Nedan finns en lista över alla sidans dokument för 
närvarande. Du kan ha ett oändligt antal av dessa vilka kan redigeras 
och/eller raderas när som helst.",

'doc_name2' => "Dokumentnamn",

'action' => "Åtgärd",

'no_site_docs' => "Det finns inga dokument i databasen.",

'site_docs' => "Sidans dokument",

'site_doc' => "Sidans dokument",

'languages' => "Språk",

'no_docs' => "Det finns inga dokument i databasen.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Bildläsare",

'file' => "Fil:",

'no_imgs' => "Inga bilder är tillgängliga. Var vänlig stäng detta fönster 
och ladda upp en bild istället.",

'preview' => "Översikt:",

'ok' => "OK",

'cancel' => "Annullera",

'prod_cat_use_img' => "Det finns produkter eller kategorier som använder sig 
av bilden '%s'.",

'continue_q' => "FORTSÄTTA ATT RADERA?",

'site_doc_use_img' => "Det finns dokument som använder sig av bilden '%s'.",

'home_use_img' => "Bilden '%s' används på hemsidan.",

'gallery_use_img' => "Bilden '%s' används av ett bildgalleri över bilder på 
produkter.",

'image_deleted' => "Bild raderad.",

'delete_failed' => "Radering misslyckades.",

'image_manager' => "Bildhanterare",

'delete_from_server' => "Nedan kan du radera bilder från din server.",

'img_click_prev' => "Bild (Klicka för en översikt)",

'size' => "Storlek",

'action' => "Åtgärd",

'no_images_added' => "Inga bilder har lagts till.",

'prev_file' => "Granska fil",

'close_window' => "Stäng Fönster",

'no_image_selected' => "Ingen bild valdes för granskning.",

'file_uploader' => "Fil Uppladdare",

'upload_image' => "Ladda upp Bild",

'please_browse_img' => "Var vänlig leta reda på din bild:",

'file_too_big' => "Felmeddelande: %s är över %s",

'img_already_exists' => "Felmeddelande: %s finns redan var vänlig döp om 
filen du försöker ladda upp.",

'upload_too_large' => "Felmeddelande: Du letade inte efter någon bild att 
ladda upp eller så var filen för stor för servern. Maximal uppladdningsgräns 
är 2 MB.",

'not_valid_mime' => "Felmeddelande: %s är ingen tillåten bildtyp.",

'image_upload_success' => "Lyckades: %s uppladdad.",

'back' => "&laquo; Tillbaka",

);



$lang['admin']['misc'] = array (

'license_form' => "Licensformulär",

'write_error' => "Kunde inte öppna includes/global.inc.php för att skrivas 
till. Försök ändra rättigheterna (CHMOD) till 0777. Kom ihåg att ändra 
tillbaka till 0644 efteråt!",

'try_again' => "Försök igen",

'purchase_cubecart' => "Köp CubeCart:",

'invalid_key' => "Ursäkta men licensnyckeln accepterades inte eller så har 
den redan använts.",

'purchase_license_key' => "Köp Licensnyckel",

'run_unlicensed' => "Det ser ut som du använder en olicensierad version av 
Cubecart. Var vänlig ange licensnyckeln nedan för att få ta bort 
copyrighten.",

'license_key' => "Licensnyckel:",

'submit_key' => "Ange nyckel",

'server_info' => "Server Info",

'ini_set_desc' => "Informationen nedan visar inställningarna i server miljön 
förnärvarande. Denna innehåller all sorters information som kan behöva 
ändras om du upplever problem med Cubecart. Notera: Om du har en delad 
server eller en virtuell värd är det troligt att du kommer ha begränsad 
tillgång för att ändra inställningarna. </span> <a 
href='http://www.php.net/ini_set' target='_blank' 
class='txtLink'>ini_set()</a> <span class='copyText'> Funktionen kan ofta 
användas för att åsidosätta dessa inställningar.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "Statusen på denna ordern har ändrats utan problem. I 
detta läge kan du skicka kunden en e-postfaktura vilket ger tillåtelse att 
ladda ner digitala produkter. För att göra detta ",

'click_here' => "Klicka Här",

'send_invoice_desc' => "Om statusen är ändrad från Avvaktar till Behandlas 
kommer du att ges ett val att skicka kunden ett fakturakvitto där tillåtelse 
beviljas till digitala produkter om det tillämpas.",

'delete_success' => "Raderades problemfritt.",

'delete_fail' => "Radering misslyckades.",

'orders' => "Alla order",

'all_orders' => "Nedan finns alla order som är sparade i databasen.",

'order_no' => "Order Nr.",

'status' => "Status",

'date_time' => "Datum/Tid",

'customer' => "Kunder",

'ip_address' => "IP-Adress",

'cart_total' => "Varukorg totalt",

'action' => "Åtgärd",

'no_orders_in_db' => "Det finns inga order i databasen.",

'order_email' => "Kära %s,\n\nVi vill bara meddela att statusen på ditt 
order-id: %s har ändrats till %s\n\n",

'email_staff_comments' => "Vår personal har lagt till följande 
kommentar:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Detta e-post har automatiskt skickats från %s",

'email_subj_status_change' => "Orderstatus ändrad:",

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

'no_comments_left' => "Inga kommentarer lämnades.",

'order_summary' => "Ordersammanställning",

'product' => "Produkt",

'code' => "Kod",

'quantity' => "Antal",

'price' => "Pris",

'download_link' => "Nerladdningslänk:",

'warn_reset' => "Detta sätter antalet nerladdningar till noll och utökar 
förfallotiden.",

'reset_link' => "Återställ länk",

'download_stats' => "Nerladdad (%s) gånger. Länkens förfallotid %s",

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
när orderstatusen ändras.)",

'comments_2_customer' => "Kommentar till kund:",

'comments_2_customer_desc' => "(Detta kommer att läggas till på e-posten där 
du meddelar kunden att statusen på ordern är ändrad.)",

'save_order_status' => "Spara orderstatus",

'paid_by' => "Betalning via:",

'delivered_to' => "Levererad till:",

'invoice_reciept_for' => "Faktura / Kvitto för:",

'order_of_time' => "Din order av",

'order_id' => "Order-ID:",

'digi_goods_desc' => "Om du har beställt digitala varor ska du erhålla ett 
e-post innehållande nerladdningsinstruktioner. Dessa kan också tillgås via 
ditt kontos kontrollpanel där du har full kontroll över ditt konto hos 
oss.",

'thank_you' => "Tack för att du handlar hos oss!",

);



$lang['admin']['products'] = array (

'show_featured' => "Inkludera senaste produkter på hemsidan?",

'upload_new_images' => "Ladda upp bilder",

'no_images_avail' => "Det finns inga bilder tillgängliga.",

'prod_added_to_cat' => "Produkt lades till i kategori.",

'prod_not_added_to_cat' => "Misslyckades med att lägga till kategori till 
produkt.",

'prod_removed_from_cat' => "Produkt borttagen från kategori.",

'prod_not_removed_from_cat' => "Produkt blev inte borttagen från kategori.",

'title_extraCats' => "Kategorihanterare",

'manage_cats' => "Hantera kategorier",

'master_cat' => "Originalkategori:",

'close_window' => "Stäng fönster",

'img_added_to_prod' => "Bild lades till till produkt.",

'img_not_added_to_prod' => "Misslyckades med att lägga till bild till 
produkt.",

'img_removed' => "Bild borttagen från produkt.",

'img_not_removed' => "Bild blev inte borttagen från produkt.",

'image_management' => "Bildhanterare",

'manage_images' => "Hantera bilder",

'image' => "Bild",

'action' => "Åtgärd",

'delete_success' => "Raderad problemfritt.",

'delete_fail' => "Radering misslyckades.",

'update_successful' => "uppdatering lyckades.",

'update_fail' => "Misslyckades med att uppdatera kategorin.",

'add_success' => "lades till problemfritt.",

'add_fail' => "Misslyckades med att lägga till kategorin.",

'prod_inventory' => "Produktinventarier",

'current_prods_in_db' => "Nedan finns en lista över alla produkter i 
databasen förnärvarande.",

'all_cats' => "Alla kategorier",

'prod_name' => "ProduKtnamn",

'prod_id' => "Produkt-ID",

'prod_code' => "Produktkod",

'master_cat2' => "Originalkategori",

'title' => "Titel",

'stock_level' => "Lager Status",

'normal_price' => "Ordinarie pris",

'sale_price' => "Utförsäljningspris",

'asc' => "Stigande order",

'desc' => "Fallande order",

'containing_text' => "innehållande texten",

'filter' => "Filter",

'reset' => "Återställ",

'id' => "Id",

'type' => "Typ",

'name' => "Namn",

'price_sale_price' => "Pris / Utförsäljningspris",

'in_stock' => "I lager",

'action' => "Åtgärd",

'languages' => "Språk",

'no_products_exist' => "Finns inga produkter i databasen.",

'add_prod_desc' => "Du kan använda formuläret nedan för att lägga till en 
produkt till inventarierna.",

'product' => "Produkt",

'prod_name2' => "Produktnamn:",

'prod_stock_no' => "Produkt-/Lagernummer:",

'auto_generated' => "(Om denna lämnas tom genereras ett nummer 
automatiskt.)",

'description' => "Beskrivning:",

'primary_lang' => "(I det primära språket kan andra språk läggas till 
efteråt.)",

'category' => "Kategori:",

'image2' => "Bild:",

'opt_and_thumbs' => "(Miniatyrbild kommer automatiskt att skapas OM valt 
format är kompatibelt.)",

'upload_new' => "Ladda upp ny bild",

'browse_existing' => "Sök efter existerande bilder",

'normal_price2' => "Ordinarie pris:",

'sale_price2' => "Utförsäljningspris:",

'sale_mode_desc' => "(Detta tillämpas enbart när butiken är inställd på 
läget försäljning per produkt.)",

'prod_weight' => "Produktens vikt:",

'tax_class' => "Momsklass:",

'stock_level2' => "Lagernivå:",

'reduce_stock_level' => "(Denna nivån reduceras för var gång en produkt blir 
såld.)",

'use_stock_q' => "Använda lagernivån?",

'product_type' => "Produkttyp:",

'tangible' => "Fysisk",

'digital' => "Digital",

'digi_path' => "Digitala produkter behöver antingen en HTTP-väg eller en 
Server Root-Väg (se info nedan).",

'digi_info' => "Digital info:",

'digi_desc' => "<p><strong>HTTP-väg:</strong> 
http://www.domain.com/downloads/download.exe<br />

				<strong>Server Root-Väg:</strong> 
/usr/local/vhosts/www.domain.com/downloads/download.exe 
<strong>(Rekommenderas!)</strong></p>

<p>Fördelen med att använda server root-vägen är att filerna kan lagras 
någon annanstans än i den offentliga mappen. Om denna metoden är vald kommer 
Cubecart att automatiskt skapa en nerladdningslänk som förses med en 
förfallotid och maximalt antal nerladdningar, inställningar som båda görs i 
butikens inställningar.</p>",

'prod_inv_langs' => "Produktinventarier - (Andra språk)",

'use_rich_oth_lang' => "Var vänlig använd rich text-editorn nedan för att 
lägga till eller redigera produkter i andra språk.",

'language' => "Språk:",

'update_prod_lang' => "Uppdatera produktspråk",

'save_prod_lang' => "Spara produktspråk",

'other_langs_exdefault' => "Nedan finns en lista på alla produkter 
förnärvarande på andra språk än originalspråket.",

'no_lang_exist' => "Inga språkvariationer finns för denna produkt i 
databasen.",

'opt_add_success' => "Valets namn tillagd.",

'opt_add_fail' => "Valets namn inte tillagd.",

'att_add_success' => "Val av attribut tillagd.",

'att_add_fail' => "Val av attribut inte tillagd.",

'assign_success' => "Valmöjlighet har tilldelats produkt.",

'assign_fail' => "Valmöjlighet inte tilldelad produkt.",

'product_options' => "Produktval",

'product_option' => "Produktval",

'quick_assign' => "Snabb tilldelning:",

'prod_opts_of' => "Produktens valmöjlighet från",

'to' => "till",

'go' => "Lägg till",

'opt_step1' => "1. Skapa ett produktval (t.ex. Färg)",

'opt_id' => "ID",

'opt_name' => "Valets Namn",

'warn_remove_opt' => "Är du säker på att du vill radera denna valmöjlighets 
namn? \n\nVARNING: GENOM ATT GÖRA SÅ SÅ KOMMER ALLA PRODUKTERS 
VALMÖJLIGHETER OCH TILLHÖRANDE ATTRIBUT MED DETTA NAMN ATT TAS BORT!",

'no_options_made' => "Inga namn på produktens valmöjligheter har skapats.",

'option' => "Valmöjlighet",

'opt_step2' => "2. Skapa ett värde till valmöjligheten (t.ex. Röd)",

'option_attributes' => "Valmöjligheternas attribut",

'warn_remove_att' => "Är du säker på att du vill radera denna 
valmöjlighetens attribut? \n\nVARNING: GENOM ATT GÖRA SÅ SÅ RADERAS ALLA 
PRODUKTERS VALMÖJLIGHET MED DETTA ATTRIBUT OCH VALETS NAMN!",

'no_attributes_made' => "Inga nya valmöjligheter har gjorts till 
attributen.",

'attribute' => "Attribut",

'opt_step3' => "3. Tilldela val &amp; värde till produkt (t.ex. T-Shirt &gt; 
Färg &gt; Röd)",

'option_attribute' => "Valets attribut",

'option_price' => "Valets pris",

'add_subtract' => "Lägg till / Dra ifrån",

'remove_opt_prod' => "Är du säker att du vill ta bort denna valmöjligheten 
från denna produkt?",

'no_assigned_opts' => "Inget val har tilldelats någon produkt.",

'prods_made_1st' => "Produkter måste läggas till först innan ett val kan 
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

'smtpAuth' => "Använd autentisering?",

'defaultAuth' => "(Standard: Nej)",

'smtpUsername' => "SMTP Användarnamn:",

'smtpPassword' => "SMTP Lösenord:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "Visa Senaste produkter på hemsidan?",

'no_latest' => "Antal av dom senaste produkterna som ska visas:",

'off_line_settings' => "Offline-inställningar",

'off_line' => "Stänga av butiken?",

'off_line_content' => "Offline-meddelande:",

'off_line_allow_admin' => "Tillåt adminstratörer att granska butiken 
offline? (Kräver en admin-session)",

'store_settings' => "Butikens inställningar",

'edit_below' => "Var vänlig redigera din butiks konfigurationsinställningar 
nedan:",

'meta_data' => "Metadata",

'browser_title' => "Butikens titel:",

'meta_desc' => "Meta-beskrivning:",

'meta_keywords' => "Meta-nyckelord:",

'comma_separated' => "(Separeras med komma)",

'store_co_name' => "Butiks/Företagsnamn:",

'store_address' => "Butiksadress:",

'country' => "Land:",

'zone' => "Län:",

'dirs_folders' => "Kataloger &amp; Mappar",

'rootRel' => "Offentlig Root-HTML-katalog till butik:",

'include_slash' => "(Inkludera Snedstreck)",

'storeURL' => "Webbadress (URL) till butik:",

'eg_domain_com' => "t.ex. http://www.domain.com/",

'rootDir' => "Serverns Root-katalog:",

'eg_root_path' => "t.ex. sökväg/till/din/webbutik",

'rootRel_SSL' => "Offentlig SÄKER Root HTML Mapp till butik:",

'storeURL_SSL' => "SÄKER Webbadress (URL) till butik:",

'eg_domain_SSL' => "t.ex. https://secure.domain.com",

'rootDir_SSL' => "SÄKER Server Root-katalog:",

'eg_root_path_secure' => "t.ex. /sökväg/till/din/säkra/webbutik",

'enable_ssl' => "Aktivera SSL:",

'ssl_warn' => "(Varning: Denna ändring görs omedelbart efter att den 
verkställts. Var vänlig försäkra dig om att den Säkra root-Katalogen och den 
säkra Webbadressen (URL) är korrekta och fungerar INNAN inställningen ändras 
till Ja)",

'digital_downloads' => "Digitala nerladdningar",

'download_expire_time' => "Nerladdningens förfallotid:",

'seconds' => "(Sekunder)",

'download_attempts' => "Nerladdningsförsök:",

'attempts_desc' => "(Antal försök kunden har för att kunna ladda ner 
produkt.)",

'styles_misc' => "Stil, Design &amp; Övrigt",

'default_language' => "Huvudspråk:",

'store_skin' => "Butikens design:",

'no_cats_per_row' => "Antal kategorier per rad:",

'dir_symbol' => "Katalogsymbol:",

'prods_per_page' => "Antal produkter per sida:",

'precis_length' => "Produkts exakta längd:",

'chars' => "(Tecken)",

'no_sale_items' => "Antal Föremål i Utförsäljningsboxen:",

'no_pop_prod' => "Antal Föremål i boxen över populära föremål:",

'email_name' => "e-postnamn:",

'email_name_desc' => "(Detta används som avsändarnamn på e-post som skickas 
från denna webbsidan.)",

'email_address' => "e-postadress:",

'email_address_desc' => "(Denna används som huvudsaklig e-postadress till 
denna webbsidas e-post.)",

'mail_method' => "Postleveransmetod:",

'mail_recommended' => "(SMTP rekommenderas)",

'max_upload_size' => "Max uppladdningsstorlek:",

'under_x_recom' => "(Under 2048Kb rekommenderas)",

'max_sess_length' => "Max sessionslängd:",

'db_settings' => "Databasinställningar",

'db_host' => "Databasvärd:",

'db_username' => "Databasanvändarnamn:",

'db_password' => "Databaslösenord:",

'db_name' => "Databasnamn:",

'db_prefix' => "Databasprefix:",

'gd_settings' => "GD-inställningar",

'gd_ver' => "GD-version:",

'gd_thumb_size' => "MiniatyrbildsStorlek:",

'gd_gif_support' => "Tillåta GIF-stöd: (behaga göra säker den här är sättet 
i stånd till på din servaren)",

'gd_max_img_size' => "Max bildstorlek:",

'gd_img_quality' => "GD-Bildkvalité:",

'recom_quality' => "(60 - 80 rekommenderas)",

'stock_settings' => "Lagerinställningar",

'use_stock' => "Visa lagernivå?",

'allow_out_of_stock_purchases' => "Tillåta köp över lagernivå?",

'weight_unit' => "Viktenhet:",

'time_and_date' => "Tid &amp; datum",

'time_format' => "Tidsformat:",

'time_format_desc' => "(Se <a href='http://www.php.net/strftime' 
target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Tidsoffset:",

'time_offset_desc' => "(Sekunder - Används av servern i andra länder med 
varierande tidszoner)",

'date_format' => "Datumformat:",

'date_format_desc' => "(Se <a href='http://www.php.net/date' target='_blank' 
class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Lokala inställningar",

'default_currency' => "Huvudvaluta",

'inc_tax_prices' => "Inkludera moms i priset?",

'sale_mode' => "Utförsäljningsläge:",

'percent_of_all' => "Procent på alla priser",

'ind_sale_per_item' => "Individuellt Utförsäljningspris per föremål",

'sale_mode_off' => "Utförsäljningsläge AV",

'sale_per_off' => "Procentuellt avdrag vid Utförsäljning:",

'sale_per_off_desc' => "(Procent som slås av på alla priser)",

'diff_dispatch' => "Tillåt leverans till adresser andra än 
fakturaadressen?",

'update_settings' => "Uppdatera inställningar",

'update_success' => "uppdaterad problemfritt.",

'update_fail' => "blev inte uppdaterad.",

'add_success' => "lades till problemfritt",

'add_fail' => "blev inte tillagd.",

'delete_success' => "Raderades problemfritt.",

'delete_failed' => "Radering lyckades inte.",

'currencies' => "Valutor",

'currency' => "Valuta",

'currencies_desc' => "Var vänlig lägg till, redigera eller radera valutor 
nedan:",

'c_code' => "Kod",

'c_name' => "Namn",

'c_value' => "Kurs",

'symbol_left' => "Symbol vänster",

'symbol_right' => "Symbol höger",

'decimal_places' => "Antal decimaler",

'last_updated' => "Senast uppdaterad",

'c_status' => "Status",

'no_currencies' => "Det finns inga valutor i databasen.",

'countries' => "Länder:",

'ind_country' => "Land:",

'country' => "Land",

'edit_countries_below' => "Var vänlig lägg till, redigera eller radera 
länder nedan:",

'disable' => "Avaktivera",

'enable' => "Aktivera",

'iso' => "ISO",

'iso_name' => "Namn",

'iso3' => "ISO3",

'num_code' => "Numerisk Kod",

'action' => "Åtgärd",

'warn_del_country' => "Är du säker på att du vill radera detta? Alla län 
kommer att raderas ovanför detta.",

'no_countries_in_db' => "Det finns inga länder i databasen.",

'edit_counties' => "Var vänlig lägg till, redigera eller radera län nedan:",

'no_counties_in_db' => "Det finns inga län i databasen.",

'add_country' => "Lägg till land",

'add_county' => "Lägg till Län",

'tax_Settings' => "MOMS-inställningar",

'edit_locale_below' => "Var vänlig redigera lokala inställningar nedan:",

'tax_only_to' => "Lägg till Moms ENBART på följande områden:",

'manage_tax_below' => "Var vänlig arrangera dina olika typer av MOMS nedan. 
Dessa kan läggas till till olika produkter så att du kan ha MOMS-fria 
(taxfree) produkter och olika MOMS-satser på olika produkter.",

'tax_class2' => "MOMS-sats",

'rate_per' => "Värde (%)",

'tax_update' => "Uppdatera",

'no_taxes_setup' => "Det finns ingen installation av MOMS.",

'tax' => "MOMS",

);



$lang['admin']['stats'] = array(

'store_stats' => "Butiksstatistik",

'choose_view' => "Var vänlig välj vilken statistik du skulle vilja se:",

'search_terms' => "Söktermer",

'product_pop' => "Produktpopularitet",

'cust_online' => "Kunder online",

'search_terms_order_by' => "Söktermer (Arrangerade genom antalet 
sökningar)",

'sorry_no_data' => "Det finns inget data att visa.",

'product_pop_ordered_by' => "Produktpopularitet  (Arrangerad genom antalet 
granskningar)",

'cust_active' => "Kunder som varit aktiva dom senaste 15 min.",

'hash' => "#",

'customer' => "Kund",

'location' => "Lokalisering",

'sess_start_time' => "Sessionens starttid",

'last_click_time' => "Senaste klicktid",

'sess_length' => "Sessionens längd",

'geust' => "Gäst",

'signed_in' => "Inloggad",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "VARNING: Den huvudsakliga konfigurationsfilen 
'includes/global.inc.php' är skrivbar vilket innebär att din butik är i en 
riskzon. Var vänlig och ändra filtillåtelsen (CHMOD) till 0644 så snart som 
möjligt.",

'401' => "Felmeddelande 401: Du har inte tillåtelse att utnyttja denna 
sidan. Var vänlig fråga en av superanvändarna för att bevilja dig detta.",

'welcome_note' => "Välkommen till CubeCart-administrationens Kontrollpanel",

'last_login' => "Senaste inloggning var ",

'by' => "av",

'failed' => "misslyckades.",

'store_overview' => "Överblicka butik:",

'version' => "Version:",

'visit_cc' => "Besök CubeCarts nerladdningsserver",

'no_products' => "Antal produkter:",

'no_customers' => "Antal kunder:",

'img_upload_size' => "Uppladdningsmappens storlek för bilder:",

'no_orders' => "Antal order:",

'quick_search' => "Snabbsök:",

'order_no' => "Ordernummer:",

'search_now' => "Sök nu",

'customer' => "Kunder:",

'login_failed' => "Inloggning Misslyckades! Antingen var användarnamnet 
eller lösenordet inte korrekt.",

'new_pass_sent' => "Ett nytt lösenord har e-postats till",

'no_admin_sess' => "Ingen administrationssession kunde hittas.",

'login_fail_2' => "Inloggningen misslyckades. Var vänlig försök igen.",

'login_below' => "Var vänlig logga in nedan:",

'username' => "Användarnamn:",

'password' => "Lösenord:",

'request_pass' => "Begär lösenord",

'login' => "Logga in",

'logout_failed' => "Utloggningen misslyckades eftersom ingen admin-session 
var närvarande.",

'reset_pass_email' => "Kära %s,

Du, eller någon annan som uppger sig för att vara du har efterfrågat att få 
ditt lösenord återställt.

Dina nya inloggningsuppgifter är:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Användarnamn: %s
Lösenord: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Detta e-postet skickades från %s/admin/requestPass.php\n
Avsändarens IP-adress är: %s",

'pass_reset_failed' => "Återställning av lösenord misslyckades.",

'enter_email_below' => "Var vänlig ange din e-postadress nedan:",

'email_address' => "e-postadress:",

'send_pass' => "Skicka lösenord",

);



$lang['admin']['nav'] = array(

'permission_error' => "Du har ingen tillåtelse här.",

'navigation' => "Navigera",

'admin_home' => "Admins hem",

'store_home' => "Butikens hem",

'store_config' => "Butikens konfig",

'gen_settings' => "Allmänna inställningar",

'taxes' => "MOMS/Skatter",

'countries_zones' => "Länder &amp; Zoner",

'currencies' => "Valutor",

'modules' => "Moduler",

'shipping' => "Leverans",

'gateways' => "Gateways",

'affiliates' => "Partners",

'catalog' => "Katalog",

'view_products' => "Granska produkter",

'add_product' => "Lägg till produkt",

'product_options' => "Produktval",

'view_categories' => "Granska kategorier",

'add_categories' => "Lägg till Kategori",

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

'misc' => "Övrigt",

'server_info' => "Serverinfo",

'admin_users' => "Admin-användare",

'administrators' => "Administratörer",

'admin_sessions' => "Admin-sessioner",

);



$lang['admin']['incs'] = array(

'administration' => "Administrationen",

'logged_in_as' => "Inloggad som:",

'logout' => "Logga ut",

'change_pass' => "Ändra lösenord",

'error_editing' => "Felmeddelande vid redigeringsförsök. Indata var inte en 
pekare.",

'config_updated' => "Konfiguration Uppdaterad. Var vänlig försäkra dig om 
att filrättigheterna har ställts tillbaka korrekt.",

'cant_write' => "Kunde inte öppna filen '%s' för skrivning. Försök ändra 
filtillåtelsen (CHMOD) till 0777. Kom ihåg att ändra tillbaka till 0644 
efteråt!",

'db_config_updated' => "Konfigurationen uppdaterad.",

'db_cant_write' => "Uppdateringen misslyckades",

'select_above' => "Välj ovan",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////
/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Ja";

$lang['front']['no'] = "Nej";
/////////////////////////////////////


$lang['front']['boxes'] = array(

'lang_links' => "Användbara länkar",

'reg_and_checkout' => "Registrera &amp; Checka ut",

'cont_shopping' => "Fortsätt handla",

'edit_del_add' => "Redigera leveransadress",

'edit_inv_add' => "Redigera fakturaadress",

'empty_cart' => "Töm varukorg",

'prev_page' => "Föregående sida",

'homepage' => "Ingång",

'shop_by_cat' => "Kategorier",

'sale_items' => "Föremål till utförsäljning",

'save' => "Spara",

'currency' => "Valuta",

'information' => "Information",

'products' => "Produkter:",

'categories' => "Kategorier:",

'prices' => "Priser:",

'language' => "Språk",

'mailing_list' => "Nyhetsbrev",

'subscribe_below' => "Prenumerera på vårt nyhetsbrev nedan:",

'email' => "e-post:",

'join_now' => "Gå med nu!",

'already_subscribed' => "e-postadressen %s är redan anmäld för prenumeration 
av vårt nyhetsbrev. Var vänlig logga in på ditt konto om du vill avsluta 
prenumerationen.",

'enter_valid_email' => "Var vänlig ange en giltig e-postadress.",

'added_to_mail' => "Tack så mycket, %s har blivit tillagd till vår 
mailinglista.",

'subscribed_to_mail' => "Tack så mycket, %s abonnerar nu på vårt 
nyhetsbrev.",

'popular_products' => "Populära produkter",

'featured_prod' => "Aktuell produkt",

'sale_items' => "Utförsäljning",

'search_for' => "Sök efter:",

'go' => "Sök",

'welcome_back' => "Välkommen tillbaka",

'logout' => "Logga ut",

'your_account' => "Ditt Konto",

'welcome_guest' => "Välkommen gäst",

'login' => "Logga in",

'register' => "Registrera",

'shopping_cart' => "Varukorg",

'basket_empty' => "Din varukorg är tom.",

'items_in_cart' => "Föremål i varukorgen:",

'total' => "Totalt:",

'view_basket' => "Din Varukorg",

);



$lang['front']['account'] = array(

'your_account' => "Ditt konto",

'personal_info' => "Personlig info",

'order_history' => "Orderhistorik",

'change_password' => "Ändra lösenord",

'newsletter' => "Nyhetsbrev",

'login_to_view' => "Du måste logga in för att kunna se denna sidan.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Lösenordet du angav var inkorrekt.",

'conf_not_match' => "Ditt bekräftade lösenord matchade inte ditt nya 
lösenord.",

'change_pass' => "Ändra lösenord",

'password_updated' => "Tack så mycket, ditt lösenord har blivit 
uppdaterat.",

'change_pass_below' => "Var vänlig och ändra ditt lösenord nedan:",

'old_pass' => "Gammalt lösenord:",

'new_pass' => "Nytt lösenord:",

'confirm_pass' => "Bekräfta lösenord:",

'submit' => "Ange",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Ursäkta",

'expired' => "Din nerladdningslänk har förfallit eller är ogiltig.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Glömt lösenord",

'email' => "e-post:",

'send_pass' => "Skicka lösenord",

'reset_email' => "Kära %s %s,

Du, eller någon som uppger sig för att vara du har förfrågat om att 
återställa ditt lösenord. Dina nya uppgifter finns nedan:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Användare: %s
Lösen: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
För att Logga in, var vänlig följ länken nedan:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Detta e-post skickades från %s
Avsändarens IP-adress är: %s",

'new_pass_sent' => "Ett nytt lösenord har blivit skickat till %s.",

'email_not_found' => "Ursäkta men den e-postadressen kunde inte hittas.",

'enter_email' => "Var vänlig ange inloggningens e-postadress nedan för att 
få ett temporärt lösenord skickat till dig:",

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

'newOrderMsg' => "En kund har just gjort följande beställning %s, för att se 
denna order följ länken nedanför: \n\n %s",

'newOrderSubj' => "Ny lagerorder upplagd",

'payment' => "Betalning",

'cart' => "Varukorg",

'address' => "Adress",

'payment' => "Betalning",

'complete' => "Färdigställ",

'fill_out_below' => "Var vänlig fyll i formuläret nedan:",

'transferring' => "Skickar nu till betalning",

'go_now' => "Kör Nu!",

'continue' => "Fortsätt",

'choose_method' => "Var vänlig välj den betalningsmetod du föredrar:",

'your_comments' => "Dina kommentarer:",

'none_configured' => "Inga betalningsmetoder har blivit konfigurerade.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Logga in",

'username' => "Användarnamn:",

'password' => "Lösenord:",

'remember_me' => "Kom ihåg mig?",

'forgot_pass' => "Glömt ditt lösenord?",

'login_success' => "Din inloggning lyckades.",

'already_logged_in' => "Du  har redan loggat in.",

'login_failed' => "Inloggningen misslyckades!",

'login_below' => "Var vänlig logga in nedan:",

);



$lang['front']['index'] = array(

'latest_products' => "Senaste produkterna",

);



$lang['front']['logout'] = array(

'logout' => "Logga ut",

'session_destroyed' => "Din session har blivit avslutad.",

'no_session' => "Det fanns ingen session att makulera. Det verkar som du 
hamnat här av misstag.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Nyhetsbrevets inställningar",

'prefs_updates' => "Inställningarna för ditt nyhetsbrev har blivit 
uppdaterade.",

'edit_prefs_below' => "Var vänlig redigera nyhetsbrevets inställningar 
nedan:",

'subscribe' => "Prenumerera på vårt nyhetsbrev?",

'email_format' => "e-postformat:",

'plain_text' => "Enkel text",

'html' => "HTML",

'html_abbr' => "Hyper Text Markup Language",

'update' => "Uppdatera",

'login_required' => "Du måste logga in för att kunna se denna sida.",

);



$lang['front']['noShip'] = array(

'sorry' => "Ursäkta",

'desc' => "Vi levererar inte produkter till ditt land.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Ursäkta",

'desc' => "Vi levererar inte produkter över orderns totalvikt.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Telefonnummer måste vara numeriskt.",

'complete_all' => "Var vänlig försäkra dig om att alla fälten är ifyllda.",

'email_invalid' => "Var vänlig ange en giltig e-postadress.",

'numeric_only' => "Telefonnummer måste vara numeriska.",

'email_inuse' => "Ursäkta denna e-postadressen används redan.",

'update_email' => "Kära %s %s,

Detta e-post har skickats till dig för att bekräfta att din personliga 
information har uppdaterats problemfritt. Om du känner att ditt konto blivit 
uppdaterad av någon annan än dig var då vänlig och kontakta vår personal 
omgående.\n\n

Detta e-post skickades från %s\n

Avsändarens IP-adress är: %s",

'update_email_subj' => "Personlig info uppdaterad",

'personal_info' => "Personlig Information",

'account_updated' => "Ditt konto har uppdaterats. Du kan redigera det igen 
om du så önskar här nedan.",

'edit_below' => "Var vänlig redigera personlig information nedan:",

'title' => "Titel:",

'first_name' => "Förnamn:",

'last_name' => "Efternamn:",

'email' => "e-post:",

'address' => "Adress:",

'town' => "Stad:",

'county' => "Län:",

'postcode' => "Postnummer:",

'country' => "Land:",

'phone' => "Telefon:",

'mobile' => "Mobiltelefon:",

'update_account' => "Uppdatera konto",

'login_required' => "Du måste logga in för att kunna se denna sida.",

);



$lang['front']['reg'] = array(

'fill_required' => "Var vänlig försäkra dig att alla fält är ifyllda.",

'pass_not_match' => "Var vänlig försäkra dig att ditt lösenord passar.",

'enter_valid_email' => "Var vänlig ange en giltig e-postadress.",

'enter_valid_tel' => "Telefonnummer måste vara numeriskt.",

'email_in_use' => "Denna e-postadress används redan.",

'note_required' => "Var vänlig notera att alla fält markerade med en asterix 
(*) krävs för att kunna genomföra registreringen.",

'express_reg' => "Snabbregistrering",

'submit_and_cont' => "Verkställ &amp; fortsätt",

'personal_details' => "Personliga detaljer",

'address' => "Adress",

'title' => "Titel:",

'title_desc' => "(Herr/Fru/Fröken)",

'first_name' => "Förnamn:",

'address2' => "Adress:",

'last_name' => "Efternamn:",

'email_address' => "e-postadress:",

'town' => "Ort:",

'phone' => "Telefon:",

'county' => "Län:",

'mobile' => "Mobiltelefon:",

'country' => "Land:",

'postcode' => "Postnummer:",

'security_details' => "Säkerhetsdetaljer",

'choose_pass' => "Valt lösenord:",

'conf_pass' => "Bekräfta lösenord:",

'privacy_settings' => "Privata inställningar",

'receive_emails' => "Jag skulle vilja erhålla e-post från butiken",

'email_format' => "e-postformat:",

'styled_html' => "Stylad HTML",

'plain_text' => "Enkel text",

'tandcs' => "Villkor &amp; Avtal",

'please_read' => "Var vänlig och läs vår",

);



$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "Kära %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
För att granska denna produkt var då vänlig och följ länken nedan:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Detta e-post skickades från %s
Avsändarens IP-adress är: %s",

'email_subject' => "Meddelande från: %s",

'tellafriend' => "Meddela en Vän",

'message_sent' => "Tack så mycket, ditt meddelande har blivit skickat till 
<strong>%s</strong> om '%s'. Om du skulle vilja skicka detta till en annan 
vän då kan du göra det igen här nedan:",

'fill_out_below' => "Var vänlig behandla formuläret nedan för att meddela en 
vän om '%s'.",

'friends_name' => "Vännens Namn:",

'friends_email' => "Vännens e-post:",

'your_name' => "Ditt namn:",

'your_email' => "Din e-post:",

'message' => "Meddelande:",

'default_message' => "Jag hittade '%s' och tänkte eventuellt att du kunde 
vara intresserad.",

'send' => "Skicka",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Avsluta prenumeration",

'email' => "e-post:",

'go' => "Kör",

'enter_valid_email' => "Var vänlig ange en giltig e-postadress.",

'email_removed' => "Tack så mycket, <strong>%s</strong> har tagits bort från 
vår mailinglista.",

'email_not_found' => "Ursäkta, <strong>%s</strong> kunde inte hittas i vår 
mailing lista eller så har prenumerationen redan avslutats.",

'enter_email_below' => "Var vänlig ange din e-postadress nedan för att 
avsluta prenumeration av vårt nyhetsbrev:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Sökresultat",

'sale_items' => "Produkter till Utförsäljning",

'image' => "Bild",

'description' => "Beskrivning",

'price' => "Pris",

'products_in' => "Produkter i:",

'buy' => "köp",

'more' => "Mer",

'out_of_stock' => "TILLFÄLLIGT SLUT",

'no_products_match' => "Inga produkter matchade sökningen:",

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

'na' => "inte tillgänglig",

'customer_comments' => "Kundkommentarer:",

'order_summary' => "Ordersammanställning:",

'product' => "Produkt",

'product_code' => "Produktkod",

'quantity' => "Antal",

'price' => "Pris",

'download_here' => "Ladda ner här",

'review_below' => "Var vänlig granska denna order nedan:",

'order_date_time' => "Orderdatum/Tid:",

'payment_method' => "Betalningsmetod:",

'ship_method' => "LeveransmMetod:",

'subtotal' => "Delsumma:",

'total_tax' => "Moms Totalt:",

'shipping' => "Frakt:",

'grand_total' => "Totalt:",

'order_not_found' => "Det ordernumret kunde inte hittas.",

'login_required' => "Du måste vara inloggad för att kunna se denna sida.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Dina Order",

'orders_listed_below' => "Alla order för detta kontot är listat nedan:",

'order_no' => "Ordernr",

'status' => "Status",

'date_time' => "Datum/Tid",

'action' => "Åtgärd",

'view' => "Granska",

'no_orders' => "Vi har inga uppgifter i vårat system på att någon order är 
placerad. Om du känner att ett fel begåtts var då vänlig och kontakta vår 
personal ",

'login_required' => "Du måste vara inloggad för att kunna se denna sida.",

);



$lang['front']['viewProd'] = array(

'product' => "Produkt",

'product_info' => "Produktinformation",

'price' => "Pris:",

'product_code' => "Produktkod:",

'tellafriend' => "Meddela en Vän",

'quantity' => "Antal:",

'more_images' => "[+] Fler bilder",

'add_to_basket' => "Lägg i Korg",

'location' => "Plats:",

'no_instock' => "I Lager:",

'instock' => "I Lager",

'out_of_stock' => "TILLFÄLLIGT SLUTSÅLD",

'prod_opts' => "Produktval:",

'prod_not_found' => "Den produkten kunde inte hittas.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Din varukorg är förnärvarande tom.",

'allready_customer' => "Redan en Kund?",

'login_below' => "Var vänlig logga in nedan:",

'username' => "Användarnamn:",

'password' => "Lösenord:",

'remember_me' => "Kom ihåg mig?",

'login' => "Logga in",

'forgot_pass_q' => "Glömt ditt lösenord?",

'need_register' => "Behöver du Registrera dig?",

'express_register' => "Vår snabbregistrering är snabb och enkel.",

'reg_and_cont' => "Registrera &amp; Fortsätt",

'cont_shopping_q' => "Fortsätt handla?",

'cont_shopping' => "Fortsätt handla",

'cont_browsing' => "För att fortsätta och titta som gäst utan att logga in, 
klicka på knappen nedan. Notera: du kan inte göra några inköp utan att ha 
registrerat dig först.",

);



$lang['front']['cart'] = array(

'free_shipping' => "Fri leverans",

'view_cart' => "Granska varukorg",

'cart' => "Korg",

'address' => "Adress",

'payment' => "Betalning",

'complete' => "Avsluta",

'add_more' => "Vill du lägga till fler produkter? Ange Produktkod:",

'add' => "Lägg till",

'qty' => "Antal",

'product' => "Produkt",

'code' => "Kod",

'stock' => "Lager",

'price' => "Pris",

'line_price' => "Riktpris",

'delete' => "Radera",

'remove' => "Tar bort Föremål",

'invoice_address' => "Fakturaadress",

'delivery_address' => "Leveransadress",

'title' => "Titel:",

'first_name' => "Förnamn:",

'last_name' => "Efternamn:",

'address2' => "Adress:",

'town' => "Ort:",

'county' => "Län:",

'postcode' => "Postnummer:",

'country' => "Land:",

'edit_invoice_address' => "Redigera fakturaadress",

'edit_delivery_address' => "Redigera leveransadress",

'stock_warn' => "Du har beställt mer produkter än vi förnärvarande har 
tillgängligt. Din order kan bli en aning sen tills vår lagerstatus är 
uppdaterad.",

'amount_capped' => "Ursäkta men vi kan inte skicka order som ligger över vår 
lagerstatus.<br />Antalet av detta föremål är begränsad till",

'na' => "-",

'shipping' => "Frakt:",

'tax' => "Moms:",

'subtotal' => "Delsumma:",

'cart_total' => "Totalt i korgen:",

'if_changed_quan' => "(om du ämnar ändra antalet)",

'update_cart' => "Uppdatera korg",

'continue' => "Fortsätt",

'cart_empty' => "Din Varukorg är förnärvarande tom.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Bekräftelseskärm",

'cart' => "Korg",

'address' => "Adress",

'payment' => "Betalning",

'complete' => "Komplett",

'order_success' => "Tack så mycket, din beställning lyckades! Besök oss 
gärna snart igen.",

'order_fail' => "Ursäkta, din order misslyckades!",

'try_again_desc' => "Du kan försöka att inhandla vad som fanns i varukorgen 
igen här nedan:",

'try_again' => "Försök Igen",

'request_login' => "Du måste vara inloggad för att kunna se denna sida.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Kära %s,

Tack så mycket för din order: %s placerad den %s

Transaktionen lyckades vilket gör att varorna skickas så snart som möjligt.

~~~~~~~~~~~~~~~~~~~~~~~~~~
Namn: %s
Delsumma: %s
Porto & Postförskott: %s
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

'inv_email_body_5' => "Valmöjlighet: %s\n",

'inv_email_body_6' => "Antal: %s
Produkt Kod: %s
Pris: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Order Nr: ",

'digi_email_body1' => "Kära %s,

Tack så mycket för din order: %s placerad den %s

Nedan finns länkarna som behövs för att få tillträde till de digitala 
produkterna du beställt.

VIKTIGT: Dessa länkar kommer att förfalla den %s och du har %s försök att 
ladda ner dom. Om du har några problem var vänlig kontakta oss för 
fastställande av order nummer.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
NERLADDNINGSLÄNK:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Ingång för nerladdning: ",

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

'nextDayEarlyAm' => "Nästa dag - Morgon flygpost",

'nextDayAir' => "Nästa dag flygpost",

'nextDayAirSaver' => "Nästa dag - Ekonomi flygpost",

'2ndDayEarlyAm' => "2 dagars - Morgon flygpost",

'2ndDayAir' => "2 dagars flygpost",

'3daySelect' => "3 dagars post",

'ground' => "Standard",

'canadaStandard' => "Kanada - Standard",

'worldwideExpress' => "Världsomspännande Express",

'worldwideExpressPlus' => "Världsomspännande Express Plus",

'worldwideExpedited' => "Världsomspännande via expeditör",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Fakturaadress",

'deliverTo' => "Leveransadress",

'postalOrderFor' => "Postorder för",

'orderOf' => "Order av ",

'orderID' => "Order ID:",

'product' => "Produkt",

'code' => "Kod",

'qty' => "Antal",

'price' => "Pris",

'shippingMethod' => "Fraktsätt:",

'subtotal' => "Delsumma:",

'totalTax' => "Moms:",

'totalShipping' => "Fraktkostnad:",

'grandTotal' => "Totalt::",

'payByCheck' => "Betala med check",

'payTo' => "Gör checken betalningsbar till",

'payByCard' => "Betala med kort",

'cardType' => "Korttyp:",

'cardNo' => "Kortnummer:",

'3-4DigiId' => "3-4 sifferid:",

'expiryDate' => "Utgångsdatum:",

'issueDate' => "Utfärdsdatum,:",

'issueNo' => "Utfärdsnummer:",

'signature' => "Signatur:",

'payByTransfer' => "Betala med banköverföring",

'bankName' => "Banknamn:",

'accountName' => "Kontoinnehavare:",

'sortCode' => "Clearingnummer:",

'accountNo' => "Kontonummer:",

'swiftCode' => "Swiftkod:",

'bankAddress' => "Bankadress:",

'thanks' => "Tack för att du handlar hos oss!",

'postalAddress' => "Postadress:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "Avvaktar",

'2' => "Bearbetas",

'3' => "Skickad",

'4' => "Nekad",

'5' => "Bedräglig",

);

$lang['admin']['cats'] = array (

'delete_success' => "Kategorispråk raderades problemfritt.",

'delete_fail' => "Raderingen misslyckades.",

'update_fail' => "Uppdatering misslyckades.",

'update_success' => "Uppdatering lyckades.",

'add_success' => "Lägga till kategorispråk lyckades.",

'add_fail' => "Lägga till kategorispråk misslyckades.",

'site_cats_other_lang' => "Kategorier - (Övriga språk)",

'site_cat_other_lang' => "Kategori - (Övriga språk",

'cat_name' => "Kategorinamn:",

'language' => "Språk:",

'update_cat' => "Uppdatera kategori",

'save_cat' => "Spara kategori",

'current_cat_list' => "Nedan är en lista över alla nuvarande kategorispråk. 
Dessa kan ändras och/eller raderas när som helst.",

'cat_name2' => "Kategorinamn",

'action' => "Kör",

'no_site_cats' => "Kategorinamnet har inte blivit översatt än.",

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