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
|	Finnish (FI) Language File	
|   Translated: Tomppa at www.turkiat.com
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'fi_FI');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Kyll‰";

$lang['admin']['no'] = "Ei";

$lang['admin']['edit'] = "Muokkaa";

$lang['admin']['delete'] = "Poista";

$lang['admin']['delete_q'] = "Haluatko poistaa t‰m‰n?";

$lang['admin']['add'] = "Lis‰‰";

$lang['admin']['add_new'] = "Lis‰‰ uusi";

$lang['admin']['write'] = "Kirjoita";

$lang['admin']['read'] = "Lue";

$lang['admin']['na'] = "Ei mit‰‰n"; // as in not applicable

$lang['admin']['all'] = "Kaikki";

$lang['admin']['remove'] = "Poista";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Poistettu.",

'del_failed' => "Poisto ep‰onnistui.",

'update_success' => "P‰ivitys onnistui.",

'update_fail' => "P‰ivitys ep‰onnistui.",

'add_success' => "Lis‰tty.",

'add_failed' => "K‰ytt‰j‰n lis‰‰minen ep‰onnistui.",

'administrators_title' => "Yll‰pit‰j‰t",

'current_users' => "Nykyiset yll‰pit‰j‰t.",

'id' => "Tunnus",

'user_notes' => "K‰ytt‰j‰tunnus / Huomautukset",

'no_logins' => "Kirjautumiskertoja",

'super_user' => "P‰‰k‰ytt‰j‰?",

'email' => "S‰hkˆposti",

'action' => "Toiminto",

'add_admin' => "Seuraavalla lomakkeella voit lis‰t‰ yll‰pit‰ji‰.",

'full_name' => "T‰ydellinen nimi:",

'username' => "K‰ytt‰j‰tunnus:",

'administrator' => "Yll‰pit‰j‰",

'email2' => "S‰hkˆposti:",

'password' => "Salasana:",

'pass_warn' => "(Kirjoita salasana ainoastaan jos muutat sit‰.)",

'make_super' => "Annetaanko tunnukselle p‰‰k‰ytt‰j‰n oikeudet?",

'notes' => "Huomautukset:",

'permissions' => "Oikeudet",

'pass_updated' => "Salasana muutettu.",

'pass_not_updated' => "Salasanaa ei muutettu.",

'change_pass_below' => "Muuta salasanasi seuraavassa kohdassa:",

'old_pass' => "Vanha salasana:",

'new_pass' => "Uusi salasana:",

'confirm_pass' => "Vahvista salasana:",

'perms_updated' => "Oikeudet p‰ivitetty.",

'set_perms' => "M‰‰rit‰ oikeudet seuraavassa kohdassa.",

'section' => "Sectio",

'nb_bulk' => "L‰hett‰ess‰si s‰hkˆpostia ulkopuolisella s‰hkˆpostiohjelmalla k‰ytt‰j‰ll‰ pit‰‰ olla kirjoitusoikeudet asiakkaisiin.",

'admin_sessions' => "Yll‰pit‰jien k‰ynnit",

'sessions_desc' => "Seuraavassa n‰et yll‰pit‰jien edelliset k‰ynnit. Tarkista v‰lill‰ ett‰ yll‰pitoon ei ole yritetty murtautua. On suositeltavaa vaihtaa yll‰pit‰j‰n salasanaa ajoittain.",

'login_id' => "Kirjautumistunnus",

'time' => "Aika",

'ip_address' => "IP Osoite",

'success' => "Onnistui",

);



$lang['admin']['categories'] = array (

'delete_success' => "Poistettu.",

'delete_fail' => "Poisto ep‰onnistui.",

'update_success' => "P‰ivitys onnistui.",

'update_fail' => "Kategorian p‰ivitys ep‰onnistui.",

'add_success' => "Lis‰tty.",

'add_failed' => "Kategorian lis‰ys ep‰onnistui.",

'categories' => "Kategoriat",

'categories_desc' => "Seuraavassa nykyiset kategoriat.",

'cat_name' => "Kategorian nimi",

'dir' => "Hakemisto",

'image' => "Kuva",

'no_products' => "Tuotteita",

'action' => "Toiminnot",

'cannot_del' => "Kategoriaa ei voida poistaa jos se sis‰lt‰‰ tuotteita.",

'no_cats_exist' => "Kategorioita ei ole luotuna.",

'add_desc' => "Voit luoda kategorioita rajoittamattomalla m‰‰r‰ll‰ alakategoroita, lis‰t‰ uusia kuvia tai k‰ytt‰‰ palvelimella olevia kuvia.",

'category' => "Kategoria",

'category_name' => "Kategorian nimi:",

'category_level' => "Kategorian sijainti:",

'top_level' => "P‰‰kategoria",

'image_optional' => "Kuva: (Optio)",

'upload_new_image' => "Lis‰‰ uusi kuva",

'browse_existing' => "Selaa olemassaolevia kuvia",

'ship_by_cat' => "Kategorian toimituskulu",

'per_ship' => "Kerta toimituskulu:",

'per_item' => "Tuotekohtainen toimituskulu:",

'per_int_ship' => "Kansainv‰linen kerta toimituskulu:",

'per_int_item' => "Kansainv‰linen tuotekohtainen toimituskulu:",

);



$lang['admin']['customers'] = array (

'customers' => "Asiakkaat",

'delete_success' => "Poistettu.",

'delete_fail' => "Poistaminen ep‰onnistui.",

'update_success' => "Asiakastiedot p‰ivitetty.",

'update_fail' => "Asiakastietojen p‰ivitys ep‰onnistui.",

'search_term' => "Hae nimell‰:",

'reset' => "Resetoi",

'name' => "Nimi",

'email' => "S‰hkˆposti",

'invoice_add' => "Laskutusosoite",

'phone' => "Puhelin",

'reg_ip' => "Rekisterˆintip‰iv‰ / IP Osoite",

'no_orders' => "Tilaukset",

'action' => "Toiminnot",

'no_cust_exist' => "Ei rekisterˆityneit‰ asiakkaita.",

'edit_below' => "Muokkaa asiakkaan tietoja seuraavalla lomakkeella:",

'title' => "Sukupuoli",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'email2' => "S‰hkˆposti:",

'address' => "Osoite:",

'town' => "Postitoimipaikka:",

'county' => "L‰‰ni:",

'postcode' => "Postinumero:",

'country' => "Maa:",

'phone2' => "Puhelin:",

'edit_customer' => "Muokkaa asiakasta",

'no_download_email' => "Ei ole s‰hkˆpostiosoitteita ladattavaksi.",

'email_customers' => "S‰hkˆpostia asiakkaille",

'create_email' => "Luo s‰hkˆposti seuraavassa:",

'hint' => "Vihje:",

'click_source' => "Voit klikata l‰hde painiketta jos haluat liitt‰‰ aiemmin tekem‰si HTML koodin.",

'important' => "T‰rke‰‰:",

'absolute_links' => "Varmista ett‰ kaikki kuvat ja linkit ovat ehdottomasti omaisuuttasi (Esim. sis‰ltyv‰t domainiisi). Joissakin maissa on kielletty‰ k‰ytt‰‰ linkityst‰ toisten omistamiin kuviin jne..:",

'email_subject' => "S‰hkˆpostin otsikko:",

'senders_name' => "L‰hett‰j‰n nimi:",

'senders_email' => "L‰hett‰j‰n s‰hkˆpostiosoite:",

'return_path' => "Palautusosoite:",

'bounce_desc' => "(Osoite johon estetyt s‰hkˆpostit palautetaan.)",

'send_test' => "L‰het‰ testis‰hkˆposti?",

'test_email_recip' => "Testin vastaanottaja:",

'send_email' => "L‰het‰",

'download_or_send' => "Valitse l‰hetet‰‰nkˆ s‰hkˆpostia verkkokaupan ohjelmalla vai ulkopuolisella s‰hkˆpostiohjelmalla.",

'please_choose' => "Valitse seuraavasta:",

'used_to_download' => "T‰ll‰ valinnalla voit l‰hett‰‰ s‰hkˆpostia ulkopuolisella s‰hkˆpostiohjelmalla.",

'bulk_to_subscribed' => "T‰ll‰ valinnalla voit l‰hett‰‰ s‰hkˆpostia verkkokaupan asiakkaille jotka ovat liittyneet s‰hkˆpostilistalle.",

'include_name' => "Lis‰t‰‰nkˆ nimet?",

'download_email' => "Lataa s‰hkˆpostiosoitteet",

'send_email' => "L‰het‰ s‰hkˆpostia",

'sending_complete' => "L‰hetys valmis",

'sending' => "L‰hetet‰‰n s‰hkˆpostia",

'recipient' => "Vastaanottajat:",

'prev_page' => "Edellinen sivu",

'page' => "Sivu:",

'bulk_finished' => "Ulkopuolinen s‰hkˆpostiohjelma on suorittanut toiminnan loppuun.",

'time_taken' => "Aikaa kului:",

'recipients' => "Vastaanottajat:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Verkkokauppaa ei p‰ivitetty, varmista ett‰ tiedoston oikeudet hakemistossa includes/static/home.inc.php on asetettu oikein.",

'update_success' => "Verkkokauppa p‰ivitetty.",

'homepage' => "Etusivu",

'enabled' => "Aktivoi:",

'enabled_desc' => "(Jos t‰m‰ on poissa k‰ytˆst‰, k‰ytet‰‰n oletuskielt‰.)",

'language' => "Kieli:",

'title' => "Otsikko:",

'use_rich_text' => "K‰yt‰ allaolevaa tekstieditoria tehd‰ksesi muutoksia verkkokaupan etusivuun. Ennenkuin tallennat muutokset, tarkista tekem‰si muutokset.",

'update_homepage' => "P‰ivit‰ etusivu",

'delete_success' => "Dokumentti poistettu.",

'delete_fail' => "Poistaminen ep‰onnistui.",

'update_success' => "P‰ivitys onnistui.",

'update_fail' => "Ei p‰ivitetty.",

'add_success' => "Lis‰tty.",

'add_fail' => "Dokumentin lis‰‰minen ep‰onnistui.",

'site_docs_other_lang' => "Kaupan dokumentit - (Muilla kielill‰)",

'use_rich_text' => "K‰yt‰ seuravaa tekstieditoria lis‰t‰ksesi tai muokataksesi kaupan dokumentteja muilla kielill‰.",

'site_doc_other_lang' => "Kaupan dokumentit - (Muilla kielill‰)",

'doc_name' => "Dokumentin nimi:",

'language' => "Kieli:",

'update_doc' => "P‰ivit‰ dokumentti",

'save_doc' => "Tallenna dokumentti",

'current_doc_list' => "Seuraavassa lista kaupan nykyisist‰ dokumenteista. Voit lis‰t‰ m‰‰r‰ttˆm‰sti dokumentteja ja niit‰ voidaan muokata tai poistaa koska vain.",

'doc_name2' => "Dokumentin nimi",

'action' => "Toiminnot",

'no_site_docs' => "Verkokaupassa ei ole yht‰‰n dokumenttia.",

'site_docs' => "Verkkokaupan dokumentit",

'site_doc' => "Verkkokaupan dokumentti",

'languages' => "Kielet",

'no_docs' => "Verkkokaupassa ei ole yht‰‰n dokumenttia.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Kuvaselain",

'file' => "Tiedosto:",

'no_imgs' => "Kuvia ei saatavilla. Sulje t‰m‰ ikkuna ja lis‰‰ kuvia.",

'preview' => "Esikatselu:",

'ok' => "OK",

'cancel' => "Peruuta",

'prod_cat_use_img' => "Kategoriassa on tuotteita jotka k‰ytt‰v‰t myˆs kuvaa '%s'.",

'continue_q' => "JATKA POISTAAKSESI?",

'site_doc_use_img' => "Verkkokaupassa on dokumentteja jotka k‰ytt‰v‰t myˆs kuvaa '%s'.",

'home_use_img' => "Kuva '%s' on k‰ytˆss‰ kaupan etusivulla.",

'gallery_use_img' => "Kuva '%s' on k‰ytˆss‰ tuote kuvagalleriassa.",

'image_deleted' => "Kuva poistettu.",

'delete_failed' => "Poisto ep‰onnistui.",

'image_manager' => "Kuvien hallinta",

'delete_from_server' => "Seuraavassa voit poistaa kuvia palvelimelta.",

'img_click_prev' => "Kuva (Klikkaa esikatsellaksesi)",

'size' => "Koko",

'action' => "Toiminnot",

'no_images_added' => "Ei kuvia lis‰ttyn‰.",

'prev_file' => "Tiedoston esikatselu",

'close_window' => "Sulje ikkuna",

'no_image_selected' => "Ei valittua kuvaa esikatseltavaksi.",

'file_uploader' => "Tiedoston siirt‰j‰",

'upload_image' => "Siirr‰ kuva",

'please_browse_img' => "Etsi kuva:",

'file_too_big' => "VIRHE: %s on ylitse %s",

'img_already_exists' => "VIRHE: %s on jo olemassa, nime‰ kuva uudestaan tai k‰yt‰ jo olemassa olevaa kuvaa.",

'upload_too_large' => "VIRHE: Et valinnut kuvaa siirrett‰v‰ksi tai kuva on liian suuri. Oletus maksimi kuvakoko on 2MB.",

'not_valid_mime' => "VIRHE: %s ei ole hyv‰ksytt‰v‰ kuvamuoto.",

'image_upload_success' => "Onnistui: %s siirretty.",

'back' => "&laquo; Takaisin",

);



$lang['admin']['misc'] = array (

'license_form' => "Lisenssilomake",

'write_error' => "Ei voitu aukaista includes/global.inc.php tiedostoa kirjoitusta varten. Muuta CHMOD arvo 0777. Muista palauttaa se takaisin 0644 muotoon tehty‰si muutokset!",

'try_again' => "Yrit‰ uudestaan",

'purchase_cubecart' => "Osta CubeCart:",

'invalid_key' => "Olemme pahoillamme, mutta lisenssiavain on virheellinen tai se on jo k‰ytˆss‰.",

'purchase_license_key' => "Osta lisenssiavain",

'run_unlicensed' => "K‰yt‰t lisenssitˆnt‰ versiota CubeCart:sta. Kirjoita linsessiavaimesi seuraavaan halutessasi poistaa copyright tekstin.",

'license_key' => "Lisenssiavain:",

'submit_key' => "Lis‰‰ avain",

'server_info' => "Palvelimen tiedot",

'ini_set_desc' => "Seuraava tieto n‰ytt‰‰ nykyisen palvelimesi asetukset. T‰m‰ sis‰lt‰‰ kaiken tarvittavan tiedon jos sinulla on ongelmia CubeCart:in kanssa. HUOM. Jos sinulla on jaettu palvelin tai virtuaalinen palvelin, sinulla saattaa olla rajoitetut oikeudet muuttaa n‰it‰ asetuksia. </span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> toiminto saattaa ohittaa n‰m‰ asetukset.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "Tilauksen tilaa on muutettu. T‰ss‰ kohtaa voit l‰hett‰‰ asiakkaalle s‰hkˆpostissa laskun ja antaa oikeudet ladata ladattavia tuotteita. Tehd‰ksesi t‰m‰n ",

'click_here' => "Klikkaa t‰h‰n",

'send_invoice_desc' => "Jos tilauksentilaa on muutettu odottaa k‰sittely‰ muotoon k‰sittelyss‰, saat lis‰toiminnon k‰yttˆˆsi jolla voit l‰hett‰‰ asiakkaalle laskun ja antaa oikeudet ladattaviin tuotteisiin jos ne on k‰ytˆss‰.",

'delete_success' => "Poistettu.",

'delete_fail' => "Poisto ep‰onnistui.",

'orders' => "Tilaukset",

'all_orders' => "Seuraavassa kaupan tilaukset.",

'order_no' => "Tilausnumero",

'status' => "Tila",

'date_time' => "P‰iv‰/Aika",

'customer' => "Asiakas",

'ip_address' => "IP Osoite",

'cart_total' => "Ostoskori yhteens‰",

'action' => "Toiminnot",

'no_orders_in_db' => "Verkkokaupassa ei ole tilauksia.",

'order_email' => "Hyv‰ asiakkaamme %s,\n\nK‰sittelyss‰ oleva tilausnumero: %s on %s\n\n",

'email_staff_comments' => "Hyv‰ asiakkaamme :\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "T‰m‰ on automaattinen s‰hkˆposti %s",

'email_subj_status_change' => "Tilauksen k‰sittelyn muutos:",

'order_no2' => "Tilausnumero:",

'print_packing_slip' => "Tulosta pakkauslista",

'customer_info' => "Asiakastiedot",

'invoice_address' => "Laskutusosoite:",

'delivery_address' => "Toimitusosoite:",

'contact_info' => "Yhteystiedot:",

'tel' => "Puhelin:",

'mobile' => "GSM:",

'email' => "S‰hkˆposti:",

'customer_comments' => "Asiakkaan antama lis‰tieto:",

'no_comments_left' => "Asiakas ei ole antanut lis‰tietoa.",

'order_summary' => "Tilauksen yhteenveto",

'product' => "Tuote",

'code' => "Tuotekoodi",

'quantity' => "M‰‰r‰",

'price' => "Hinta",

'download_link' => "Latauslinkki:",

'warn_reset' => "T‰m‰ asettaa latausm‰‰r‰n 0:ksi ja jatkaa p‰‰ttymisaikaa.",

'reset_link' => "Resetoi linkki",

'download_stats' => "Ladattu (%s) kertaa. Linkkin p‰‰ttymisaika %s",

'ip_address2' => "IP Osoite:",

'order_date_time' => "Tilausp‰iv‰/Aika:",

'payment_method' => "Maksutapa:",

'ship_method' => "Toimitustapa:",

'subtotal' => "Yhteens‰:",

'total_tax' => "Verot yhteens‰:",

'shipping' => "Toimituskulut:",

'grand_total' => "Kaikki yhteens‰:",

'order_notfound' => "Tilausnumeroa %s ei lˆytynyt.",

'order_status' => "Tilauksentila",

'shipping_date' => "Toimitusp‰iv‰:",

'ship_today' => "Toimita t‰n‰‰n",

'modify_status' => "Muokkaa tilaa:",

'staff_comments' => "Yll‰pit‰j‰n muistio:",

'info_not_sent_customer' => "(T‰t‰ tietoa EI l‰hetet‰ asiakkaalle!)",

'inform_customer' => "Tiedota asiakasta:",

'customer_notified' => "(Jos t‰m‰ on valittuna asiakas saa tiedon tilauksen muutoksista.)",

'comments_2_customer' => "Verkkokaupan tiedote asiakkaalle:",

'comments_2_customer_desc' => "(T‰ss‰ voit tiedottaa asiakasta esim. puuttuvista tuotteista jne.....)",

'save_order_status' => "Tallenna tilauksen muutos",

'paid_by' => "Maksettu:",

'delivered_to' => "Toimitettu:",

'invoice_reciept_for' => "Laskun / Vastaanottaja:",

'order_of_time' => "Tilausaika",

'order_id' => "Tilausnumero:",

'digi_goods_desc' => "Jos olet tilannut ladattavia tuotteita sinulle on l‰hetetty s‰hkˆpostia jossa on ohjeet tuotteen lataamiseen. Samat tiedot lˆytyv‰t myˆs k‰ytt‰j‰tiedoistasi jos olet maksanut laskun.",

'thank_you' => "Kiitos kun asioit kaupassamme!, Tervetuloa uudestaan",

);



$lang['admin']['products'] = array (

'show_featured' => "N‰ytet‰‰nkˆ viimeksi lis‰tyt tuotteet etusivulla?",

'upload_new_images' => "Lis‰‰ uusia kuvia",

'no_images_avail' => "Kuvia ei ole saatavilla.",

'prod_added_to_cat' => "Tuote lis‰tty kategoriaan.",

'prod_not_added_to_cat' => "Tuotteen lis‰‰minen kategoriaan ep‰onnistui.",

'prod_removed_from_cat' => "Tuote poistettu kategoriasta.",

'prod_not_removed_from_cat' => "Tuoteen poistaminen kategoriasta ep‰onnistui.",

'title_extraCats' => "Kategorioiden hallinta",

'manage_cats' => "Hallitse kategorioita",

'master_cat' => "P‰‰kategoria:",

'close_window' => "Sulje ikkuna",

'img_added_to_prod' => "Kuva lis‰tty tuotteeseen.",

'img_not_added_to_prod' => "Kuvan lis‰‰minen tuotteeseen ep‰onnistui.",

'img_removed' => "Kuva poistettu tuotteesta.",

'img_not_removed' => "Kuvan poistaminen tuotteesta ep‰onnistui.",

'image_management' => "Kuvien hallinta",

'manage_images' => "Hallitse kuvia",

'image' => "Kuva",

'action' => "Toiminnot",

'delete_success' => "Poistettu.",

'delete_fail' => "Poistaminen ep‰onnistui.",

'update_successful' => "P‰ivitetty.",

'update_fail' => "Kategorian p‰ivitys ep‰onnistui.",

'add_success' => "Lis‰tty.",

'add_fail' => "Kategoriaan lis‰‰minen ep‰onnistui.",

'prod_inventory' => "Tuoteluettelo",

'current_prods_in_db' => "Seuraavassa lista kaupassa olevista tuotteista.",

'all_cats' => "Kaikki kategoriat",

'prod_name' => "Tuotteen nimi",

'prod_id' => "Tuotetunnus",

'prod_code' => "Tuotekoodi",

'master_cat2' => "P‰‰kategoria",

'title' => "Otsikko",

'stock_level' => "Varastotilanne",

'normal_price' => "Normaali hinta",

'sale_price' => "Tarjoushinta",

'asc' => "Nouseva j‰rjestys",

'desc' => "Laskeva j‰rjestys",

'containing_text' => "sis‰lt‰‰ teksti‰",

'filter' => "Suodata",

'reset' => "Resetoi",

'id' => "Tunnus",

'type' => "Tyyppi",

'name' => "Nimi",

'price_sale_price' => "Hinta / Tarjoushinta",

'in_stock' => "Varastossa",

'action' => "Toiminnot",

'languages' => "Kielet",

'no_products_exist' => "Verkkokaupassa ei ole tuotteita.",

'add_prod_desc' => "Voit lis‰t‰ tuotteita seuraavalla lomakkeella.",

'product' => "Tuote",

'prod_name2' => "Tuotteen nimi:",

'prod_stock_no' => "Tuotekoodi:",

'auto_generated' => "(Tuotekoodi luodaan automaattisesti jos et lis‰‰ tuotekoodia.)",

'description' => "Tuotteen kuvaus:",

'primary_lang' => "(Tuotteen kuvaus muilla kielill‰, voidaan myˆs lis‰t‰ j‰lkik‰teen.)",

'category' => "Kategoria:",

'image2' => "Kuva:",

'opt_and_thumbs' => "(Optio. Thumbnailit luodaan automaattisesti jos valittu kuvaformaatti on yhteensopiva.)",

'upload_new' => "Siirr‰ uusi kuva",

'browse_existing' => "Selaa olemassaolevia kuvia",

'normal_price2' => "Normaali hinta:",

'sale_price2' => "Tarjoushinta:",

'sale_mode_desc' => "(T‰t‰ tarjoushintaa k‰ytet‰‰n vain jos kauppan asetuksissa on asetettu tuotekohtainen tarjous.)",

'prod_weight' => "Tuotteen paino:",

'tax_class' => "Veroluokka:",

'stock_level2' => "Varastossa (Kpl):",

'reduce_stock_level' => "(M‰‰r‰ v‰henee automaattisesti kun tuotetta myyd‰‰n.)",

'use_stock_q' => "N‰ytet‰‰nkˆ varastotilanne?",

'product_type' => "Tuotetyyppi:",

'tangible' => "Todellinen",

'digital' => "Ladattava",

'digi_path' => "Ladattavat tuotteet vaativat ett‰ sinulla on HTTP polku tai Palvelimen polku m‰‰ritettyn‰ (Katso seuraava).",

'digi_info' => "Ladattavat info:",

'digi_desc' => "<p><strong>HTTP polku:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong>Palvelimen polku:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Suositellaan!)							</strong></p>

<p>K‰ytt‰m‰ll‰ palvelimen polkua voidaan tiedostot tallettaa kaikkialle muualle paitsi julkisiin hakemistoihin. Jos t‰m‰ tapa on valittuna, CubeCart luo automaattisesti latauslinkin miss‰ latausajan p‰‰ttyminen ja latauskertojen m‰‰r‰ on m‰‰ritetty kaupan asetuksissa.</p>",

'prod_inv_langs' => "Tuoteluettelo - (Muilla kielill‰)",

'use_rich_oth_lang' => "K‰yt‰ seuraavaa tekstieditoria lis‰t‰ksesi tai muokataksesi tuotteita toisella kielell‰.",

'language' => "Kieli:",

'update_prod_lang' => "P‰ivit‰ tuotteen kieli",

'save_prod_lang' => "Tallenna tuotteen kieli",

'other_langs_exdefault' => "Seuraavassa lista tuotteista muilla kielill‰ kuin oletuskielell‰.",

'no_lang_exist' => "Ei tuotetietoja muilla kielill‰.",

'opt_add_success' => "Option nimi lis‰tty.",

'opt_add_fail' => "Option nime‰ ei lis‰tty.",

'att_add_success' => "Option arvo lis‰tty.",

'att_add_fail' => "Option arvoa ei lis‰tty.",

'assign_success' => "Optio lis‰tty tuotteeseen.",

'assign_fail' => "Optiota ei lis‰tty tuotteeseen.",

'product_options' => "Tuotteiden lis‰optiot",

'product_option' => "Tuotteen optiot",

'quick_assign' => "Pikalis‰ys:",

'prod_opts_of' => "tuotteen optio",

'to' => "tuotteelle",

'go' => "Mene",

'opt_step1' => "1. Luo lis‰optio (esim. V‰ri)",

'opt_id' => "Tunnus",

'opt_name' => "Option nimi",

'warn_remove_opt' => "Poistetaanko t‰m‰ option nimi? \n\nVAROITUS !!, KAIKKI OPTIO ARVOT JA TUOTTEEN LISƒOPTIOT JOIHIN TƒMƒ OPTIO ON LIITETTY POISTETAAN!",

'no_options_made' => "Ei tuotteen option nime‰ luotuna.",

'option' => "Optio",

'opt_step2' => "2. Luo option arvo (esim. Punainen)",

'option_attributes' => "Option arvot",

'warn_remove_att' => "Poistetaanko t‰m‰ option arvo? \n\nKAIKKI OPTIO ARVOT JA TUOTTEEN LISƒOPTIOT JOIHIN TƒMƒ OPTIO ON LIITETTY POISTETAAN!",

'no_attributes_made' => "Ei option arvoja lis‰ttyn‰.",

'attribute' => "Arvo",

'opt_step3' => "3. Lis‰‰ option &amp; arvo tuotteelle (esim. T-Paita &gt; V‰ri &gt; Punainen)",

'option_attribute' => "Option arvo",

'option_price' => "Option hinta",

'add_subtract' => "Lis‰‰ / V‰henn‰",

'remove_opt_prod' => "Haluatko poistaa t‰m‰n option t‰lt‰ tuotteelta?",

'no_assigned_opts' => "Ei yht‰‰n optiota lis‰tty tuotteille.",

'prods_made_1st' => "Tuote on lis‰tt‰v‰ ennen option lis‰‰mist‰.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Aktivoi scriptien/ bottien floodauksen esto?</strong><br />
K‰ytt‰j‰n rekisterˆityess‰ vaaditaan vahvistuskoodi, sek‰ kerro yst‰v‰lle toimintoa k‰ytett‰ess‰.",


//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP Palvelin:",

'defaultHost' => "(Oletus: localhost)",

'smtpPort' => "SMTP Portti:",

'defaultPort' => "(Oletus: 25)",

'smtpAuth' => "K‰yt‰ tunnistusta?",

'defaultAuth' => "(Oletus: Ei)",

'smtpUsername' => "SMTP K‰ytt‰j‰tunnus:",

'smtpPassword' => "SMTP Salasana:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "N‰ytet‰‰nkˆ viimeksi lis‰tyt tuotteet etusivulla?",

'no_latest' => "Montako viimeksi lis‰tty‰ tuotetta n‰ytet‰‰n etusivulla:",

'off_line_settings' => "Kaupan asetukset kun kauppa suljettu",

'off_line' => "Sulje kauppa?",

'off_line_content' => "Viesti asiakkaille kun kauppa on suljettu:",

'off_line_allow_admin' => "Salli yll‰pit‰jien n‰hd‰ kauppa kun se on suljettu? (Vaatii yll‰pit‰j‰ session)",


'store_settings' => "Kaupan asetukset",

'edit_below' => "Muokkaa kaupan asetuksia seuraavassa:",

'meta_data' => "Metatietoa (Hakukoneille, esim. Google)",

'browser_title' => "Selaimen palkissa n‰kyv‰ nimi:",

'meta_desc' => "Kaupan kuvaus:",

'meta_keywords' => "Hakusanat:",

'comma_separated' => "(Erottele pilkulla esim. tuote, tarjous, alennus)",

'store_co_name' => "Kaupan/Yrityksen nimi:",

'store_address' => "Kaupan osoite:",

'country' => "Maa:",

'zone' => "L‰‰ni:",

'dirs_folders' => "Hakemistot &amp; Kansiot",

'rootRel' => "Kaupan p‰‰hakemisto:",

'include_slash' => "(Lis‰‰ myˆs /)",

'storeURL' => "T‰ydellinen verkkokaupan osoite:",

'eg_domain_com' => "esim. http://www.domain.com",

'rootDir' => "Palvelimen p‰‰hakemisto:",

'eg_root_path' => "esim. /path/to/your/webstore",

'rootRel_SSL' => "P‰‰hakemisto SSL kansiolle:",

'storeURL_SSL' => "T‰ydellinen SSL osoite kaupalle:",

'eg_domain_SSL' => "esim. https://secure.domain.com",

'rootDir_SSL' => "Palvelimen SSL p‰‰hakemisto:",

'eg_root_path_secure' => "esim. /path/to/your/secure/webstore",

'enable_ssl' => "Aktivoi SSL:",

'ssl_warn' => "(VAROITUS: T‰m‰ toiminto astuu voimaan heti hyv‰ksynn‰n j‰lkeen. Varmista ett‰ SSL p‰‰hakemisto ja SSL osoite ovat oikein ja toimivat ennenkuin otat toiminnon k‰yttˆˆn)",

'digital_downloads' => "Ladattavien tuotteiden asetukset",

'download_expire_time' => "Latauksen voimassaoloaika:",

'seconds' => "(Sekunttia)",

'download_attempts' => "Latauskertoja:",

'attempts_desc' => "(Montako kertaa asiakas voi ladata tuotteen.)",

'styles_misc' => "Tyyli &amp; Muut asetukset",

'default_language' => "Oletuskieli:",

'store_skin' => "Kaupan ulkoasu:",

'no_cats_per_row' => "Montako kategoriaa rivill‰:",

'dir_symbol' => "Hakemiston symboli:",

'prods_per_page' => "Montako tuotetta sivulla:",

'precis_length' => "Tuotteen kuvauksen pituus:",

'chars' => "(Merkki‰)",

'no_sale_items' => "Montako tuotetta n‰ytet‰‰n tarjoustuotteet ikkunassa:",

'no_pop_prod' => "Montako tuotetta n‰ytet‰‰n suosituimmat tuotteet ikkunassa:",

'email_name' => "S‰hkˆpostin l‰hett‰j‰n nimi:",

'email_name_desc' => "(T‰t‰ k‰ytet‰‰n kun l‰hetet‰‰n s‰hkˆpostia kaupasta.)",

'email_address' => "S‰hkˆpostiosoite:",

'email_address_desc' => "(T‰t‰ k‰ytet‰‰n kaupan s‰hkˆpostiosoitteena.)",

'mail_method' => "S‰hkˆpostin l‰hetystapa:",

'mail_recommended' => "(SMTP suositus)",

'max_upload_size' => "Maksimi tallennettava kuvakoko:",

'under_x_recom' => "(Suositus alle 2048Kb)",

'max_sess_length' => "Maksimi session pituus:",

'db_settings' => "Tietokannan asetukset",

'db_host' => "Tietokantapalvelin:",

'db_username' => "K‰ytt‰j‰tunnus:",

'db_password' => "Salasana:",

'db_name' => "Tietokannan nimi:",

'db_prefix' => "Tietokannan etuliite:",

'gd_settings' => "GD Asetukset",

'gd_ver' => "GD Versio:",

'gd_thumb_size' => "Thumbnailien koko:",

'gd_gif_support' => "GIF Tuki: (Nahdollistaa Gif kuvien k‰ytˆn kaupassa)",

'gd_max_img_size' => "Maksimi kuvan koko:",

'gd_img_quality' => "GD Kuvan laatu:",

'recom_quality' => "(60 - 80 suositus)",

'stock_settings' => "Varaston asetukset",

'use_stock' => "N‰ytet‰‰nkˆ varastosaldo?",

'allow_out_of_stock_purchases' => "Sallitaanko ostaminen tuotteen ollessa loppu?",

'weight_unit' => "Painoyksikkˆ:",

'time_and_date' => "Aika &amp; P‰iv‰",

'time_format' => "Aikamuoto:",

'time_format_desc' => "(Katso <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Aikavyˆhyke:",

'time_offset_desc' => "(Sekunttia - Jos palvelin sijaitsee eri aikavyˆhykkeell‰)",

'date_format' => "P‰iv‰yksen muoto:",

'date_format_desc' => "(Katso <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Paikalliset asetukset",

'default_currency' => "Oletusvaluutta",

'inc_tax_prices' => "Sis‰ltyykˆ vero hintoihin?",

'sale_mode' => "Tarjousmuoto:",

'percent_of_all' => "Prosenttia hinnasta",

'ind_sale_per_item' => "Erillinen tarjoushinta tuotteelle",

'sale_mode_off' => "Tarjoustila pois p‰‰lt‰",

'sale_per_off' => "Tarjousprosentti:",

'sale_per_off_desc' => "(Prosenttia k‰ytet‰‰n kaikissa hinnoissa)",

'diff_dispatch' => "Sallitaanko tilaaminen muuhun osoitteeseen kuin laskutusosoitteeseen?",

'update_settings' => "P‰ivit‰ asetukset",

'update_success' => "P‰ivitetty.",

'update_fail' => "Ei p‰ivitetty.",

'add_success' => "Lis‰tty",

'add_fail' => "Ei lis‰tty.",

'delete_success' => "Poistettu.",

'delete_failed' => "Poisto ep‰onnistui.",

'currencies' => "Valuutat",

'currency' => "Valuutta",

'currencies_desc' => "Lis‰‰ tai muokkaa valuuttoja seuraavassa:",

'c_code' => "Koodi",

'c_name' => "Nimi",

'c_value' => "Arvo",

'symbol_left' => "Merkki vasemmalla",

'symbol_right' => "Merkki oikealla",

'decimal_places' => "Decimaalin paikka",

'last_updated' => "P‰ivitetty viimeksi",

'c_status' => "Tila",

'no_currencies' => "Tietokannassa ei ole valuuttoja.",

'countries' => "Maat",

'country' => "Maa",

'edit_countries_below' => "Lis‰‰, muokkaa tai poista maita seuraavassa:",

'disable' => "Poista k‰ytˆst‰",

'enable' => "Ota k‰yttˆˆn",

'iso' => "ISO",

'iso_name' => "Nimi",

'iso3' => "ISO3",

'num_code' => "Num. Koodi",

'action' => "Toiminnot",

'warn_del_country' => "Haluatko poistaa t‰m‰n? Kaikki l‰‰nit, ja alueet poistetaan myˆs.",

'no_countries_in_db' => "Ei maita tietokannassa.",

'edit_counties' => "Lis‰‰, muokkaa tai poista maita/alueita/l‰‰nej‰ seuraavassa:",

'no_counties_in_db' => "Ei ole maita, alueita eik‰ l‰‰nej‰ tietokannassa.",

'tax_Settings' => "Vero asetukset",

'edit_locale_below' => "Muokkaa paikallisia asetuksia seuraavassa:",

'tax_only_to' => "K‰yt‰ veroa AINOASTAAN seuraavilla alueilla:",

'manage_tax_below' => "Hallitse erilaisia veromuotoja seuraavassa. N‰it‰ voidaan k‰ytt‰‰ jokaisessa tuotteessa joten sinulla voi olla vero tuotteessa ja eri verotasoja eri tuote tyypeill‰.",

'tax_class2' => "Veroluokka",

'rate_per' => "M‰‰r‰ (%)",

'no_taxes_setup' => "Veroja ei asetettuna.",

'tax' => "Vero",

);



$lang['admin']['stats'] = array(

'store_stats' => "Kaupan tilastot",

'choose_view' => "Valitse tilastot jotka haluat n‰hd‰:",

'search_terms' => "Hakutermit",

'product_pop' => "Suosituimmat tuotteet",

'cust_online' => "Paikalla olevat asiakkaat",

'search_terms_order_by' => "Hakutermit (J‰rjestys hakukertojen mukaan)",

'sorry_no_data' => "Ei tilastoa n‰ytett‰v‰ksi.",

'product_pop_ordered_by' => "Suosituimmat tuotteet  (J‰rjestys n‰yttˆkertojen mukaan)",

'cust_active' => "Asiakkaat jotka ovat olleet aktiivisia viimeisen 15 min aikana.",

'hash' => "#",

'customer' => "Asiakas",

'location' => "Sijainti",

'sess_start_time' => "Saapumisaika",

'last_click_time' => "Edellinen klikkaus aika",

'sess_length' => "K‰ynnin kesto",

'geust' => "Vieras",

'signed_in' => "Kirjautuneena sis‰‰n",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Kirjautuminen estetty %s minuutiksi turvallisuus syist‰ johtuen.",

'global_risk' => "VAROITUS: P‰‰asetustiedosto 'includes/global.inc.php' on kirjoitettavissa ja se on riskitekij‰. Muuta CHMOD oikeudet 0644 niin pian kuin mahdollista.",

'401' => "Virhe 401: K‰yttˆoikeutesi eiv‰t riit‰ sivun tarkasteluun. Kysy p‰‰k‰ytt‰j‰lt‰ voiko h‰n antaa sinulle oikeudet t‰lle sivulle.",

'welcome_note' => "Tervetuloa CubeCart Yll‰pit‰j‰n hallintapaneeliin",

'last_login' => "Edellinen kirjautumisyritys oli ",

'by' => "tunnuksella",

'failed' => " joka ei onnistunut.",

'store_overview' => "Kaupan yleistiedot:",

'version' => "Versio:",

'visit_cc' => "Siirry Cubecart tukisivulle",

'no_products' => "Tuotteita kaupassa:",

'no_customers' => "Asiakkaita kaupassa:",

'img_upload_size' => "Tallennettujen kuvien koko:",

'no_orders' => "Tilauksia:",

'quick_search' => "Pikahaku:",

'order_no' => "Tilausnumero:",

'search_now' => "Hae",

'customer' => "Asiakas:",

'login_failed' => "Kirjautuminen ep‰onnistui! K‰ytt‰j‰tunnus tai salasana oli virheellinen.",

'new_pass_sent' => "Uusi salasana on l‰hetetty",

'no_admin_sess' => "Et ole kirjautuneena sis‰‰n.",

'login_fail_2' => "Virhe. Yrit‰ uudestaan.",

'login_below' => "Kirjaudu sis‰‰n:",

'username' => "K‰ytt‰j‰tunnus:",

'password' => "Salasana:",

'request_pass' => "Unohditko salasanasi",

'login' => "Kirjaudu",

'logout_failed' => "Kirjautuminen ulos ep‰onnistui.",

'reset_pass_email' => "Hei %s,

Sin‰ tai joku muu on pyyt‰nyt uuttaa salasanaa.

Uudet tunnuksesi ovat:

~~~~~~~~~~~~~~~~~~~~~~~~~~
K‰ytt‰j‰tunnus: %s
Salasana: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

T‰m‰ s‰hkˆposti on l‰hetetty %s/admin/requestPass.php\n

L‰hett‰j‰n IP Osoite: %s",

'pass_reset_failed' => "Salasanan resetointi ep‰onnistui.",

'enter_email_below' => "Kirjoita s‰hkˆpostiosoitteesi seuraavaan:",

'email_address' => "S‰hkˆpostiosoite:",

'send_pass' => "L‰het‰ salasana",

);



$lang['admin']['nav'] = array(

'permission_error' => "Oikeutesi eiv‰t riit‰ t‰h‰n toimintoon.",

'navigation' => "Navigointi",

'admin_home' => "Yll‰pito etusivu",

'store_home' => "Kauppa etusivu",

'store_config' => "Kaupan asetukset",

'gen_settings' => "Yleiset asetukset",

'taxes' => "Verot",

'countries_zones' => "Maat &amp; Alueet",

'currencies' => "Valuutat",

'modules' => "Moduulit",

'shipping' => "Toimitustavat",

'gateways' => "Maksutavat",

'affiliates' => "Yhteistyˆkumppanit",

'catalog' => "Tuoteluettelo",

'view_products' => "N‰yt‰ tuotteet",

'add_product' => "Lis‰‰ tuote",

'product_options' => "Tuotteen lis‰optiot",

'view_categories' => "N‰yt‰ kategoriat",

'add_categories' => "Lis‰‰ kategoria",

'customers' => "Asiakkaat",

'view_customers' => "N‰yt‰ asiakkaat",

'email_customers' => "Asiakas s‰hkˆposti",

'orders' => "Tilaukset",

'file_manager' => "Tiedostonhallinta",

'manage_images' => "Hallitse kuvia",

'upload_images' => "Lis‰‰ kuvia",

'statistics' => "Tilastot",

'view_stats' => "N‰yt‰ tilastot",

'documents' => "Dokumentit",

'homepage' => "Etusivu",

'site_docs' => "Kaupan dokumentit",

'misc' => "Muuta",

'server_info' => "Palvelimen tiedot",

'admin_users' => "Yll‰pit‰j‰t",

'administrators' => "Yll‰pit‰j‰t",

'admin_sessions' => "Yll‰pit‰jien k‰ynnit",

);



$lang['admin']['incs'] = array(

'administration' => "Yll‰pito",

'logged_in_as' => "Olet kirjautuneena sis‰‰n tunnuksella:",

'logout' => "Kirjaudu ulos",

'change_pass' => "Muuta salasana",

'error_editing' => "Virhe yritett‰ess‰ muokata. Annettua dataa ei lˆydy.",

'config_updated' => "Asetukset p‰ivitetty. Varmista ett‰ tiedostojen oikeudet on asetettu takaisin oikeeseen CHMOD muotoon.",

'cant_write' => "'%s' ei voida kirjoittaa. Muuta CHMOD oikeudet 0777 muotoon. Muista palauttaa takaisin 0644 muotoon muutosten j‰lkeen!",

'db_config_updated' => "Kokoonpano p‰ivitetty.",

'db_cant_write' => "P‰ivitys ep‰onnistui!",

'select_above' => "Valitse seuraavasta",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Kyll‰";

$lang['front']['no'] = "Ei";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Linkit",

'reg_and_checkout' => "Rekisterˆidy &amp; ja vahvista tilauksesi",

'cont_shopping' => "Jatka ostamista",

'edit_del_add' => "Muokkaa toimitusosoitetta",

'edit_inv_add' => "Muokkaa laskutusosoitetta",

'empty_cart' => "Tyhjenn‰ ostoskori",

'prev_page' => "Edellinen sivu",

'homepage' => "Etusivu",

'shop_by_cat' => "Tuotekategoriat",

'sale_items' => "Tarjoustuotteet",

'save' => "S‰‰st‰t",

'currency' => "Valuutta",

'information' => "Info",

'products' => "Tuotteita:",

'categories' => "Kategorioita:",

'prices' => "Hinnat:",

'language' => "Kieli",

'mailing_list' => "S‰hkˆpostilista",

'subscribe_below' => "Liity s‰hkˆpostilistalle:",

'email' => "S‰hkˆpostiosoite:",

'join_now' => "Liity",

'already_subscribed' => "S‰hkˆpostiosoite %s on jo lis‰tty s‰hkˆpostilistalle. Kirjaudu sis‰‰n k‰ytt‰j‰tietoihisi jos et halua s‰hkˆpostia kaupasta.",

'enter_valid_email' => "Kirjoita hyv‰ksytt‰v‰ s‰hkˆpostiosoite.",

'added_to_mail' => "Kiitos, %s on lis‰tty s‰hkˆpostilistallemme.",

'subscribed_to_mail' => "Kiitos, %s on poistettu s‰hkˆpostilistaltamme.",

'popular_products' => "Suosituimmat tuotteet",

'featured_prod' => "Suosittelemme",

'sale_items' => "Tarjoustuotteet",

'search_for' => "Hae tuote:",

'go' => "Hae",

'welcome_back' => "Tervetuloa takaisin",

'logout' => "Kirjaudu ulos",

'your_account' => "Asiakastietosi",

'welcome_guest' => "Tervetuloa vieras",

'login' => "Kirjaudu",

'register' => "Rekisterˆidy",

'shopping_cart' => "Ostoskori",

'basket_empty' => "Ostoskorisi on tyhj‰.",

'items_in_cart' => "Tuotteita:",

'total' => "Yhteens‰:",

'view_basket' => "Ostoskori",

);



$lang['front']['account'] = array(

'your_account' => "Asiakastietosi",

'personal_info' => "Asiakastiedot",

'order_history' => "Tilaushistoria",

'change_password' => "Muuta salasana",

'newsletter' => "Uutiskirje",

'login_to_view' => "Kirjaudu sis‰‰n n‰hd‰ksesi t‰m‰n sivun.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Antamasi salasana oli virheellinen.",

'conf_not_match' => "Salasanan vahvistus ei vastaa uutta salasanaasi.",

'change_pass' => "Muuta salasana",

'password_updated' => "Salasanasi on vaihdettu.",

'change_pass_below' => "Voit muuttaa salasanaasi seuraavassa:",

'old_pass' => "Vanha salasana:",

'new_pass' => "Uusi salasana:",

'confirm_pass' => "Vahvista salasana:",

'submit' => "Lis‰‰",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Olemme pahoillamme",

'expired' => "Latauslinkkisi latauskerrat on k‰ytetty.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Unohdettu salasana",

'email' => "S‰hkˆposti:",

'send_pass' => "L‰het‰ salasana",

'reset_email' => "Hei %s %s,

Sin‰ tai joku muu on pyyt‰nyt uutta salasanaa. Uudet k‰ytt‰j‰tietosi ovat seuraavat:

~~~~~~~~~~~~~~~~~~~~~~~~~~
K‰ytt‰j‰tunnus: %s
Salasana: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
Kirjautuaksesi sis‰‰n, k‰yt‰ seuraavaa linkki‰:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

T‰m‰n s‰hkˆpostin l‰hetti %s
L‰hett‰j‰n IP Osoite: %s",

'new_pass_sent' => "Uusi salasana on l‰hetetty %s.",

'email_not_found' => "S‰hkˆpostiosoitetta ei lˆydy.",

'enter_email' => "Kirjoita s‰hkˆpostiosoite jolla olet rekisterˆitynyt ja l‰het‰mme uuden salasanan sinulle:",

);



$lang['front']['gateway'] = array(

//////////////////////////////////////////
// START: Added in 3.0.6 by Sir William
//////////////////

'admin_email_body_1' => "Hyv‰ verkkokaupan yll‰pit‰j‰,

Tilausnumero: %s on on lis‰tty verkkokauppaan %s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nimi: %s
S‰hkˆposti: %s
Yhteens‰: %s
Pakkaus & Toimituskulut: %s
Vero: %s
Kaikki yhteens‰: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Laskutusosoite:
%s
%s
%s
%s
%s
%s
%s

Toimitusosoite:
%s
%s
%s
%s
%s
%s
%s

Maksutapa: %s
Toimitustapa: %s",

'admin_email_body_2' => "\nAsiakkaan j‰tt‰m‰ lis‰tieto: %s\n",

'admin_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Tilauslista:\n",

'admin_email_body_4' =>"Tuote: %s\n",

'admin_email_body_5' => "Lis‰optio: %s\n",

'admin_email_body_6' => "KPL: %s
Tuotekoodi: %s
Hinta: %s\n\n",

//////////////////////////////////////////
// END: Added in 3.0.6 by Sir William
//////////////////

'newOrderMsg' => "Tilausnumero %s on vastaanotettu, voit klikata allaolevaa linkki‰ toimittaaksesi tilauksen: \n\n %s",

'newOrderSubj' => "Tilaus vastaanotettu",

'payment' => "Maksutapa",

'cart' => "Ostoskori",

'address' => "Toimitusosoite",

'payment' => "Maksutapa",

'complete' => "Valmis",

'fill_out_below' => "T‰yt‰ seuraava lomake:",

'transferring' => "Siirret‰‰n maksua",

'go_now' => "Mene!",

'continue' => "Jatka",

'choose_method' => "Valitse maksutapa:",

'your_comments' => "Lis‰tiedot:",

'none_configured' => "Olemme pahoillamme, mutta maksutapaa ei ole asetettu.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Kirjaudu",

'username' => "K‰ytt‰j‰nimi (S‰hkˆpostiosoite):",

'password' => "Salasana:",

'remember_me' => "Pysy kirjutuneena?",

'forgot_pass' => "Unohditko salasanasi?",

'login_success' => "Olet kirjautunut sis‰‰n.",

'already_logged_in' => "Olet kirjautunut ulos aikaisemmin.",

'login_failed' => "Kirjautuminen ep‰onnistui!",

'login_below' => "Kirjaudu sis‰‰n verkkokauppaan:",

);



$lang['front']['index'] = array(

'latest_products' => "Uusia tuotteita verkkokaupassamme",

);



$lang['front']['logout'] = array(

'logout' => "Kirjaudu ulos",

'session_destroyed' => "Olet kirjautunut ulos kaupasta.",

'no_session' => "Et ollut kirjautuneena kauppaan, t‰st‰ syyst‰ et voi kirjautua ulos uudestaan.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Uutiskirjeen asetukset",

'prefs_updates' => "Uutiskirjeen asetukset on p‰ivitetty.",

'edit_prefs_below' => "Muokkaa uutiskirjeen asetuksia seuraavassa:",

'subscribe' => "Haluatko liitty‰ s‰hkˆpostilistalle?",

'email_format' => "S‰hkˆpostin muoto:",

'plain_text' => "Teksti",

'html' => "HTML",

'html_abbr' => "Hyperteksti kieli",

'update' => "P‰ivit‰",

'login_required' => "Kirjaudu sis‰‰n n‰hd‰ksesi t‰m‰n sivun.",

);



$lang['front']['noShip'] = array(

'sorry' => "Olemme pahoillamme",

'desc' => "Emme toimita tuotteita maahasi.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Olemme pahoillamme",

'desc' => "Emme voi toimittaa tuotteita jotka ylitt‰v‰t painorajan tilauksessasi.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Puhelinnumerossa saa olla vain numeroita.",

'complete_all' => "Varmista ett‰ kaikki vaadittavat kent‰t on t‰ytetty.",

'email_invalid' => "Kirjoita hyv‰ksytt‰v‰ s‰hkˆpostiosoite.",

'numeric_only' => "Puhelinnumerossa voi olla vain numeroita.",

'email_inuse' => "Kirjoittamasi s‰hkˆpostiosoite on jo k‰ytˆss‰.",

'update_email' => "Hyv‰ asiakkaamme %s %s,

T‰m‰ s‰hkˆposti on vahvistus siit‰, ett‰ asiakastietosi on p‰ivitetty. Jos sinusta tuntuu ett‰ joku muu on p‰ivitt‰nyt tietojasi, ota v‰littˆm‰sti yhteytt‰ kaupan yll‰pitoon.\n\n

T‰m‰ s‰hkˆposti on l‰hetetty %s\n

L‰hett‰j‰n IP osoite: %s",

'update_email_subj' => "Asiakastiedot p‰ivitetty",

'personal_info' => "Asiakastiedot",

'account_updated' => "Asiakastietosi on p‰ivitetty. Voit muokata niit‰ uudestaan jos on tarvetta.",

'edit_below' => "Voit muokata asiakastietojasi seuraavassa:",

'title' => "Sukupuoli:",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'email' => "S‰hkˆpostiosoite:",

'address' => "Osoite:",

'town' => "Postitoimipaikka:",

'county' => "L‰‰ni:",

'postcode' => "Postinumero:",

'country' => "Maa:",

'phone' => "Puhelin:",

'mobile' => "Gsm:",

'update_account' => "P‰ivit‰ tiedot",

'login_required' => "Kirjaudu sis‰‰n n‰hd‰ksesi t‰m‰n sivun.",

);



$lang['front']['reg'] = array(

'fill_required' => "Varmista ett‰ kaikki vaaditut kent‰t on t‰ytetty.",

'pass_not_match' => "Tarkista salasana.",

'enter_valid_email' => "Tarkista s‰hkˆpostiosoite.",

'enter_valid_tel' => "Puhelinnumerossa saa olla vain numeroita.",

'email_in_use' => "Antamasi s‰hkˆpostiosoite on jo k‰ytˆss‰.",

'note_required' => "Huomaa ett‰ kaikki kent‰t jotka on merkitty (*) pit‰‰ t‰ytt‰‰ jotta rekisterˆinti hyv‰ksyt‰‰n.",

'express_reg' => "Asiakkaaksi rekisterˆityminen",

'submit_and_cont' => "Vahvista &amp; Jatka",

'personal_details' => "Asiakastiedot",

'address' => "Osoitetiedot",

'title' => "Sukupuoli:",

'title_desc' => "(Mies/Nainen)",

'first_name' => "Etunimi:",

'address2' => "Osoite:",

'last_name' => "Sukunimi:",

'email_address' => "S‰hkˆpostiosoite:",

'town' => "Postitoimipaikka:",

'phone' => "Puhelinnumero:",

'county' => "L‰‰ni:",

'mobile' => "GSM:",

'country' => "Maa:",

'postcode' => "Postinumero:",

'security_details' => "Salasana",

'choose_pass' => "Kirjoita salasana:",

'conf_pass' => "Vahvista salasana:",

'privacy_settings' => "S‰hkˆpostilista",

'receive_emails' => "Haluan ett‰ minulle l‰hetet‰‰n s‰hkˆpostia verkkokaupasta",

'email_format' => "S‰hkˆpostin muoto:",

'styled_html' => "HTML",

'plain_text' => "Teksti",

'tandcs' => "k‰yttˆehdot ja rekisteritiedot",

'please_read' => "Olethan lukenut kauppamme ",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "T‰yt‰ seuraava lomake kertoaksesi yst‰v‰llesi '%s'.",

'error_code' => "Et kirjoittanut vahvistukoodia tai vahvistuskoodi oli virheellinen.",

'error_name' => "Kirjoita oma ja vastaanottajan nimi.",

'error_email' => "Varmista ett‰ omasi ja vastaanottajan s‰hkˆpostiosoite on kirjoitettu oikein.",

'spambot' => "Vahvistuskoodi:",

'email_body' => "Hyv‰ asiakkaamme %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
N‰hd‰ksesi tuotteen tiedot, klikkaa seuraavaa linkki‰:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

T‰m‰n s‰hkˆpostin l‰hetti %s
L‰hett‰j‰n IP Osoite on: %s",

'email_subject' => "Viestin l‰hett‰j‰: %s",

'tellafriend' => "Kerro yst‰v‰lle",

'message_sent' => "Kiitos sinulle, viestisi l‰hetettiin <strong>%s</strong>:lle kertoaksesi tuotteesta '%s'. Jos haluat l‰hett‰‰ viestin myˆs toiselle yst‰v‰llesi, t‰yt‰ seuraavat tiedot:",

'fill_out_below' => "T‰yt‰ seuraava lomake jos haluat kertoa yst‰v‰llesi '%s' tuotteesta.",

'friends_name' => "Yst‰v‰n nimi:",

'friends_email' => "Yst‰v‰n s‰hkˆpostiosoite:",

'your_name' => "Oma nimesi:",

'your_email' => "Oma s‰hkˆpostiosoitteesi:",

'message' => "Viesti:",

'default_message' => "Lˆysin t‰m‰n '%s' tuotteen ja ajattelin ett‰ se saattaisi kiinnostaa sinua.",

'send' => "L‰het‰",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Poistu s‰hkˆpostilistalta",

'email' => "S‰hkˆposti:",

'go' => "Siirry",

'enter_valid_email' => "Kirjoita oikea s‰hkˆpostiosoite.",

'email_removed' => "Kiitos sinulle, <strong>%s</strong> on poistettu s‰hkˆpostilistalta.",

'email_not_found' => "Olemme pahoillamme, <strong>%s</strong> ei lˆytynyt s‰hkˆpostilistalta tai se on jo poistettu aiemmin.",

'enter_email_below' => "Kirjoita s‰hkˆpostiosoitteesi poistuaksesi s‰hkˆpostilistalta:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Hakutulokset",

'sale_items' => "Tarjoustuotteet",

'image' => "Kuva",

'description' => "Tuotekuvaus",

'price' => "Hinta",

'products_in' => "Tuotteet kategoriassa:",

'buy' => "Osta",

'more' => "Lis‰tiedot",

'out_of_stock' => "TUOTETTA EI VARASTOSSA",

'no_products_match' => "Tuotteita ei lˆytynyt hakuehdoillasi:",

'no_prods_in_cat' => "T‰ss‰ kategoriassa ei ole tuotteita.",

);



$lang['front']['viewDoc'] = array(

'error' => "Virhe",

'does_not_exist' => "Dokumenttia ei lˆydy.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Tilausnumero:",

'customer_info' => "Asiakastiedot:",

'invoice_address' => "Laskutusosoite:",

'delivery_address' => "Toimitusosoite:",

'na' => "----------",

'customer_comments' => "Asiakkaan antamat lis‰tiedot:",

'order_summary' => "Tilauksen yhteenveto:",

'product' => "Tuote",

'product_code' => "Tuotekoodi",

'quantity' => "M‰‰r‰",

'price' => "Hinta",

'download_here' => "Lataa tuote t‰st‰",

'review_below' => "Tilaustiedot:",

'order_date_time' => "Tilausp‰iv‰/Aika:",

'payment_method' => "Maksutapa:",

'ship_method' => "Toimitustapa:",

'subtotal' => "Yhteens‰:",

'total_tax' => "Verot yhteens‰:",

'shipping' => "Toimituskulut:",

'grand_total' => "Kaikki yhteens‰:",

'order_not_found' => "Tilausnumeroa ei lˆydy.",

'login_required' => "Kirjaudu sis‰‰n n‰hd‰ksesi t‰m‰n sivun.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Tilauksesi",

'orders_listed_below' => "Seuraavassa lista aikaisemmin tekemist‰si tilauksista:",

'order_no' => "Tilausnumero",

'status' => "Tila",

'date_time' => "P‰iv‰/Aika",

'action' => "Toiminnot",

'view' => "N‰yt‰",

'no_orders' => "Tietokannastamme ei lˆydy aikaisempia tilaustietojasi. Kun teet kaupassa tilauksia voit t‰‰lt‰ tarkistaa tekem‰si tilaukset.",

'login_required' => "Kirjaudu sis‰‰n n‰hd‰ksesi t‰m‰n sivun.",

);



$lang['front']['viewProd'] = array(

'product' => "Tuote",

'product_info' => "Tuotetiedot",

'price' => "Hinta:",

'product_code' => "Tuotekoodi:",

'tellafriend' => "Kerro yst‰v‰lle",

'quantity' => "M‰‰r‰:",

'more_images' => "[+] Lis‰‰ tuotekuvia",

'add_to_basket' => "Siirr‰ ostoskoriin",

'location' => "Sijainti:",

'no_instock' => "Varastossa:",

'instock' => "Varastossa",

'out_of_stock' => "LOPPU",

'prod_opts' => "Lis‰optiot:",

'prod_not_found' => "Tuotetta ei lˆydy.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Ostoskorisi on tyhj‰.",

'allready_customer' => "Oletko jo aikaisemmin rekisterˆitynyt asiakkaaksi?",

'login_below' => "Kirjaudu seuraavassa:",

'username' => "K‰ytt‰j‰tunnus (S‰hkˆpostiosoite):",

'password' => "Salasana:",

'remember_me' => "Pysy kirjautuneena?",

'login' => "Kirjaudu",

'forgot_pass_q' => "Unohditko salasanasi?",

'need_register' => "Rekisterˆidy?",

'express_register' => "Rekisterˆityminen on nopeata ja helppoa.",

'reg_and_cont' => "Rekisterˆidy &amp; Jatka",

'cont_shopping_q' => "Jatka ostamista?",

'cont_shopping' => "Jatka ostamista",

'cont_browsing' => "Jatkaaksesi tuotteiden selailua ilman rekisterˆinti‰, klikkaa seuraavaa painiketta. HUOM: Et voi ostaa tuotteita jos et ole rekisterˆitynyt kauppaan.",

);





$lang['front']['cart'] = array(

'free_shipping' => "Ei toimituskuluja",

'view_cart' => "N‰yt‰ ostokori",

'cart' => "Ostoskori",

'address' => "Osoite",

'payment' => "Maksutapa",

'complete' => "Valmis",

'add_more' => "Haluatko lis‰t‰ lis‰‰ tuotteita? Kirjoita tuotekoodi:",

'add' => "Lis‰‰",

'qty' => "M‰‰r‰",

'product' => "Tuote",

'code' => "Koodi",

'stock' => "Varastossa",

'price' => "Hinta",

'line_price' => "Yhteens‰",

'delete' => "Poista",

'remove' => "Poista tuote",

'invoice_address' => "Laskutusosoite",

'delivery_address' => "Toimitusosoite",

'title' => "Sukupuoli:",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'address2' => "Osoite:",

'town' => "Postitoimipaikka:",

'county' => "L‰‰ni:",

'postcode' => "Postinumero:",

'country' => "Maa:",

'edit_invoice_address' => "Muokkaa laskutusosoitetta",

'edit_delivery_address' => "Muokkaa toimitusosoitetta",

'stock_warn' => "Olet tilannut tuotteita joita meill‰ ei juuri nyt ole varastossa. Tilauksesi l‰hetet‰‰n sinulle kun saamme tuotetta varastoon.",

'amount_capped' => "Tuote on p‰‰ssyt tilap‰isesti loppumaan.<br />Tuotetta ei ole varastossa ",

'na' => "--",

'shipping' => "Toimituskulut:",

'tax' => "Vero:",

'subtotal' => "Yhteens‰:",

'cart_total' => "Kaikki yhteens‰:",

'if_changed_quan' => "(jos olet muuttanut KPL m‰‰ri‰)",

'update_cart' => "P‰ivit‰ ostoskori",

'continue' => "Jatka",

'cart_empty' => "Ostoskorisi on tyhj‰.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Tilauksen vahvistaminen",

'cart' => "Ostoskori",

'address' => "Toimitusosoite",

'payment' => "Maksutapa",

'complete' => "Valmis",

'order_success' => "Kiitoksia, tilauksesi on vastaanotettu! Tervetuloa uudestaan kauppaamme.",

'order_fail' => "Olemme pahoillamme, tilauksesi ep‰onnistui!",

'try_again_desc' => "Voit yritt‰‰ vahvistaa tilauksesi uudestaan seuraavassa:",

'try_again' => "Yrit‰ uudestaan",

'request_login' => "Kirjaudu sis‰‰n n‰hd‰ksesi t‰m‰n sivun.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Hyv‰ asiakkaamme %s,

Kiitos tilauksestasi, tilausnumerosi on: %s vastaanotettu %s

Tilauksesi on vastaanotettu ja toimitamme tilauksesi mahdollisimman pian.

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nimi: %s
Yhteens‰: %s
Postitus & Pakkaus: %s
Vero: %s
Kaikki yhteens‰: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Laskutusosoite:
%s
%s
%s
%s
%s
%s
%s

Toimitusosoite:
%s
%s
%s
%s
%s
%s
%s

Maksutapa: %s
Toimitustapa: %s",

'inv_email_body_2' => "\nLis‰tietosi: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Tilauslista:\n",

'inv_email_body_4' =>"Tuote: %s\n",

'inv_email_body_5' => "Optiot: %s\n",

'inv_email_body_6' => "M‰‰r‰: %s
Tuotekoodi: %s
Hinta: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Tilausnumero: ",

'digi_email_body1' => "Hyv‰ asiakkaamme %s,

Kiitoksia tilauksestasi, tilausnumerosi on: %s vastaanotettu %s

Seuraavassa linkki josta voit ladata ladattavat tuotteet jotka olet tilannut.

TƒRKEƒƒ linkkien k‰yttˆoikeus umpeutuu %s ja sinulla on %s kertaa oikeus ladata tuotetta. Jos sinulla on ongelmia tuotteen kanssa, ota yhteytt‰ kauppaan ja ilmoita tilausnumerosi samassa yhteydess‰.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
LATAUSLINKKI:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Lataus oikeudet: ",

);



$lang['misc'] = array(

'pages' => " sivua ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "Asiakkaan selain:",

'server_software' => "Palvelimen ohjelmisto:",

'perofOrderSub' => " % tilauksen summasta",

'freeForOrdOver' => "Ei toimituskuluja tilauksille joiden summa on yli",

'freeShipping' => "Ei toimituskuluja",

'byWeight1stClass' => "Painon mukaan (1 luokka)",

'1stClass' => "(1 luokka)",

'byWeight2ndClass' => "Painon mukaan (2 Luokka)",

'2ndClass' => "(2 Luokka)",

'flatRate' => "Kiinte‰ toimituskulu",

'free' => "Ei toimituskuluja",

'national' => "Paikallinen",

'international' => "Kansainv‰linen",

'byCategory' => "Kategorian",

'perItem' => "Tuote",

'nextDayEarlyAm' => "Seuraavana p‰iv‰n‰ aamusta",

'nextDayAir' => "Seuraavana p‰iv‰n‰",

'nextDayAirSaver' => "Seuraavana p‰iv‰n‰, s‰‰stˆhinta",

'2ndDayEarlyAm' => "2nd Day Air Early AM",

'2ndDayAir' => "2nd Day Air",

'3daySelect' => "3 Day Select",

'ground' => "Maakuljetus",

'canadaStandard' => "Canada Standard",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Laskutusosoite",

'deliverTo' => "Toimitusosoite",

'postalOrderFor' => "Postitettava tilauslomake",

'orderOf' => "Tilausp‰iv‰",

'orderID' => "Tilaustunnus:",

'product' => "Tuotteet",

'code' => "Tuotekoodi",

'qty' => "Kpl",

'price' => "Hinta",

'shippingMethod' => "Toimitustapa:",

'subtotal' => "Yhteens‰:",

'totalTax' => "Vero:",

'totalShipping' => "Toimituskulut:",

'grandTotal' => "Kaikki yhteens‰:",

'payByCheck' => "Maksu shekill‰",

'payTo' => "Please make cheques payable to",

'payByCard' => "Maksu kortilla",

'cardType' => "Kortti:",

'cardNo' => "Kortin numero:",

'3-4DigiId' => "3-4 Numeroinen tunnus:",

'expiryDate' => "Voimassaolon p‰‰ttymisp‰iv‰:",

'issueDate' => "Myˆnt‰misp‰iv‰:",

'issueNo' => "Myˆnt‰misnumero:",

'signature' => "Allekirjoitus:",

'payByTransfer' => "Ennakkomaksu pankkiin",

'bankName' => "Pankin nimi:",

'accountName' => "Saajan nimi:",

'sortCode' => "Viitenumero:",

'accountNo' => "Tilinumero:",

'swiftCode' => "Swift numero:",

'bankAddress' => "Pankin osoite:",

'thanks' => "Kiitos k‰ynnist‰, Tervetuloa uudestaan!",

'postalAddress' => "K‰yntiosoite:",

);

$lang['orderState'] = array(

'6' => "Peruutettu",

'7' => "Ei k‰sitelty",

'1' => "Odottaa k‰sittely‰",

'2' => "K‰sittelyss‰",

'3' => "Tilaus toimitettu",

'4' => "Tilaus peruttu",

'5' => "Ei toimitusta",

);

$lang['admin']['cats'] = array (

'delete_success' => "Kategorian kieli poistettu.",

'delete_fail' => "Poistaminen ep‰onnistui.",

'update_fail' => "P‰ivitys ep‰onnistui.",

'update_success' => "P‰ivitetty onnistuneesti.",

'add_success' => "Lis‰tty onnistuneesti.",

'add_fail' => "Kielen lis‰‰minen kategoriaan ep‰onnistui.",

'site_cats_other_lang' => "Kategoriat - (Muilla kielill‰)",

'site_cat_other_lang' => "Kategoria - (Muilla kielill‰)",

'cat_name' => "Kategorian nimi:",

'language' => "Kieli:",

'update_cat' => "P‰ivit‰ kategoria",

'save_cat' => "Tallenna kategoria",

'current_cat_list' => "Seuraavassa lista nykyisist‰ kategorioiden kielist‰. N‰it‰ voidaan muokata ja poistaa milloin vain.",

'cat_name2' => "Kategorian nimi",

'action' => "Toiminnot",

'no_site_cats' => "T‰t‰ kategorian nime‰ ei ole viel‰ k‰‰nnetty.",

);

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

//////////////////////////////////////////
// START: Added in 3.0.6
//////////////////
$lang['front']['popup'] = array (

'thumb_alt' => "Suurenna kuvaa",

'large_alt' => "T‰ysikokoinen koko",

);

$lang['install'] = array (

'stage2Name' => "Tarkista tiedostooikeudet",

'stage1Error' => "Sinun on hyv‰ksytt‰v‰ k‰yttˆoikeuslisenssi",

'stage3Name' => "Luodaan asetustiedosto &amp; Asennetaan tietokanta",

'enterDBHostname' => "Tietokantapalvelin",

'enterDBName' => "Tietokannan nimi",

'enterDBUsername' => "Tietokannan k‰ytt‰j‰tunnus",

'enteradminUsername' => "Yll‰pit‰j‰n k‰ytt‰j‰tunnus",

'enteradminPassword' => "Yll‰pit‰j‰n salasana",

'passwordMatch' => "Tarkista salasanojen samanlaisuus",

'enterValidEmail' => "Kirjoita hyv‰ksytt‰v‰ s‰hkˆpostiosoite",

'enterFullname' => "Kirjoita koko nimesi",

'storeOfflineText' => "Kauppa on suljettu. Tervetuloa myˆhemmin uudestaan.",

'configWriteError' => "Asetustiedosto ei ole kirjoitettavissa.",

'stage4Name' => "Aseta takaisin tiedoston kirjoitusoikeudet",

'stage5Name' => "Asennus valmis",

'stage1Name' => "Lisenssin hyv‰ksyminen",

'agreeToLicense' => "Laita rasti ruutuun jatkaaksesi.",

'installation' => "CubeCart asennus v%s",

'stepStatus' => "Vaihe %s - %s",

'step' => "Vaihe",

'iagreetoLic' => "Olen lukenut k‰yttˆehdot ja hyv‰ksyn ne",

'checkFilePerms' => "Varmista ett‰ seuraavien tiedostojen kirjoitusoikeudet ovat m‰‰ritetty oikein:",

'fileFolder' => "Tiedosto / Kansio",

'currentPermission' => "Nykyiset kirjoitusoikeudet",

'requiredPermission' => "Vaadittava kirjoitusoikeus",

'na' => "--",

'congratsFilePerms' => "Tiedostooikeudet on m‰‰ritetty oikein.",

'filePermsNotCorrect' => "Varmista ett‰ tiedostooikeudet on m‰‰ritetty oikein ennenkuin jatkat.",

'dbSettings' => "Tietokanta asetukset",

'fromProvider' => "(Jos et ole varma asetuksista niin kysy tarvittavat tiedot palveluntarjoajaltasi.)",

'dbhostname' => "Tietokanta palvelin:",

'eg' => "esim.", // as in example

'dbName' => "Tietokannan nimi:",

'dbUsername' => "Tietokannan k‰ytt‰j‰tunnus:",

'dbPassword' => "Tietokannan salasana:",

'dbPrefix' => "Tietokannan etuliite:",

'dbPrefixOptional' => "(Optio - K‰ytet‰‰n usean kaupan asennuksessa)",

'dropifExist' => "Pudota taulukot jos ne ovat olemassa:",

'previousInstallLost' => "Jos t‰m‰ on valittuna aikaisemman asennuksen samannimiset taulukot poistetaan. (Oletuksena valittu)",

'localeSettings' => "Paikalliset asetukset",

'storeCountry' => "Kaupan sijainti:",

'US' => "Yhdysvallat",

'UK' => "Englanti",

'EU' => "Eurooppa",

'currenciesAccord' => "T‰m‰ asetus m‰‰ritt‰‰ k‰ytett‰v‰n valuutan ja muita asetuksia valmiiksi.",

'help' => "Apua",

'administratorSettings' => "Yll‰pit‰j‰n asetukset",

'adminSetDesc' => "(N‰it‰ tietoja k‰ytet‰‰n kaupan yll‰pitoon kirjauduttaessa)",

'username' => "K‰ytt‰j‰tunnus:",

'password' => "Salasana:",

'confPass' => "Vahvista salasana:",

'emailAddress' => "S‰hkˆpostiosoite:",

'fullName' => "Koko nimi:",

'skin' => "Teema",

'clickForLarger' => "Suurempi kuva",

'changedAnytime' => "(T‰t‰ voidaan muuttaa milloin vaan)",

'classic' => "Classic (Muokattu leveys)",

'legend' => "Legend (Muokattu leveys)",

'killer' => "Killer (100% leveys)",

'advancedSettings' => "Lis‰asetukset",

'leaveIfUnsure' => "(ƒl‰ muuta jos et ole varma asetuksista)",

'storeURL' => "Kaupan URL:",

'serverRoot' => "Palvelimen p‰‰hakemisto:",

'siteRootRel' => "Site Root Relative Path:",

'gdVersion' => "GD Versio:",

'phpinfoLink' => "N‰yt‰ <a href='info.php' target='_blank'>phpinfo()</a><br />(Avautuu uuteen ikkunaan)",

'none' => "Ei mit‰‰n",

'clickLink' => "Klikkaa phpinfo() linkki‰ tarkistaaksesi palvelimen tiedot.",

'filepermsBack' => "Varmista ett‰ seuraavat tiedostooikeudet on m‰‰ritetty takaisin oikeaan muotoon:",

'congratulations' => "Verkkokauppa asennettu onnistuneesti.",

'congratulationsSub' => "Valitse seuraavista. Suosittelemme ett‰ aloitat kirjautumalla kaupan yll‰pitoon, muokataksesi kaupan asetuksia.",

'adminHomepage' => "Kaupan yll‰pitosivu",

'storeHomepage' => "Kaupan etusivu",

'important' => "TƒRKEƒƒ:",

'deleteInstall' => "Kauppa ei ole k‰yett‰viss‰ ennen kuin install hakemisto on poistettu.",

'tryAgain' => "Yrit‰ uudestaan",

'contToStep' => "Jatka vaiheeseen %s", // Continue to Step x 

'closeWindow' => "Sulje ikkuna",

'prevPage' => "Edellinen sivu",

'clicktoClose' => "Klikkaa sulkeaksesi",

'chooseLang' => "Valitse kieli:",

'adminConfSettings' => "Yll‰pit‰j‰n asetusten m‰‰ritt‰minen",

'adminConfSettingsDesc' => "<p>The administrators control panel is an area where you have complete control over your store, from the products you sell to management of orders. To access the administrators control panel of your store you are required to setup one user on installation. This uses will be a &quot;Super User&quot; which means they have complete control over the store and its core settings.</p>
<p>If you wish to add other administrators after the installation, this can be achieved from the admin control panel. You can even grant them specific permissions to access certain areas of the store.</p>",

'advancedSettings' => "Lis‰asetukset",

'advancedSettingsDesc' => "<p>These settings are for advanced users. Please only change them if you are an experienced server administrator or developer. </p>
<p>To determine your GD version click in the link <a href='../info.php' target='_blank'>phpinfo()</a>. Locate the section titled &quot;GD&quot; this will say your GD version as 1.x.x or 2.x.x. If you do not have any mention of GD please select &quot;None&quot;. </p>
<p><strong>Why do I get the error message &quot;Call to undefined function: imagecreatefromjpg()&quot;?<br />
  </strong>This is because your web server is not configured to have GD enabled. To run CubeCart GD version 1 or above is required. Please contact your host and ask them nicely to enable it for you but you must remember that they are not obliged to do this for you. If you can't use GD either seek an alternative hosting company or set your GD version to be &quot;None&quot;.</p>",
'mysqlDBSettings' => "MySQL Tietokanta asetukset",

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

'installHelp' => "Asennus apu:",

'helpAdminSettings' => "Yll‰pit‰j‰n asetukset",

'helpAdvanced' => "Lis‰asetukset",

'helpDatabase' => "Tietokanta",

'helpFilePerms' => "Tiedostojen oikeudet",

'opDectResultTrue' => "Palvelimesi k‰yttˆj‰rjestelm‰ on",

'opDectResultFalse' => "Palvelimesi k‰yttˆj‰rjestelm‰‰ ei voitu tunnistaa. Valitse joku seuraavista.",

'suggestedOS' => "Suggested Operating System",

'skinPreview' => "Ulkoasun esikatselu",

);
////////////////////
// Start of Modules

$lang['module']['directPayment'] = array (

'cc_info_title' => "Luottokortin tiedot",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'card_type' => "Kortin tyyppi:",

'card_number' => "Kortin numero:",

'expires' => "Voimassaolo:",

'mmyyyy' => "(mm/yyyy)",

'security_code' => "Vahvistuskoodi:",

'customer_info' => "Asiakastiedot",

'email' => "S‰hkˆposti:",

'address' => "Osoite:",

'city' => "Kaupunki:",

'state' => "L‰‰ni:",

'zipcode' => "Postinumero:",

'country' => "Maa:",

'optional' => "(Optio)",

);

$lang['module']['bluePay'] = array (

'cc_info_title' => "Luottokortin tiedot",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'card_number' => "Kortin numero:",

'expires' => "Voimassaolo:",

'mmyy' => "(mm/yy)",

'security_code' => "Vahvistukoodi:",

'customer_info' => "Asiakastiedot",

'email' => "S‰hkˆpostiosoite:",

'address' => "Osoite:",

'city' => "Kaupunki:",

'state' => "L‰‰ni:",

'zipcode' => "Postinumero:",

'country' => "Maa:",

'optional' => "(Optio)",

);

$lang['module']['eway'] = array (

'cc_info_title' => "Luottokortin tiedot",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'card_number' => "Luottokortin numero:",

'expires' => "Voimassaolo:",

'mmyy' => "(mm/yy)",

'security_code' => "Vahvistukoodi:",

'customer_info' => "Asiakastiedot",

'email' => "S‰hkˆpostiosoite:",

'address' => "Osoite:",

'city' => "Kaupunki:",

'state' => "L‰‰ni:",

'zipcode' => "Postinumero:",

'country' => "Maa:",

'optional' => "(Optio)",

);

$lang['module']['iPay'] = array (

'cc_info_title' => "Luottokortti tiedot",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'card_number' => "Kortin numero:",

'expires' => "Voimassaolo:",

'mmyy' => "(mm/yy)",

'security_code' => "Vahvistukoodi:",

'customer_info' => "Asiakastiedot",

'email' => "S‰hkˆpostiosoite:",

'address' => "Osoite:",

'city' => "Kaupunki:",

'state' => "L‰‰ni:",

'zipcode' => "Postinumero:",

'country' => "Maa:",

'optional' => "(Optio)",

);

$lang['module']['psiGate'] = array (

'cc_info_title' => "Luottokortin tiedot",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'card_number' => "Kortin numero:",

'expires' => "Voimassaolo:",

'mmyy' => "(mm/yy)",

'security_code' => "Vahvistukoodi:",

'customer_info' => "Asiakastiedot",

'email' => "S‰hkˆpostiosoite:",

'address' => "Osoite:",

'city' => "Kaupunki:",

'state' => "L‰‰ni:",

'zipcode' => "Postinumero:",

'country' => "Maa:",

'optional' => "(Optio)",

);

//////////////////////////////////////////
// END: Added in 3.0.6
//////////////////

//////////////////////////////////////////
// START: Added in 3.0.7
//////////////////

$lang['module']['PayJunction'] = array (

'cc_info_title' => "Luottokortti tiedot",

'first_name' => "Etunimi:",

'last_name' => "Sukunimi:",

'card_number' => "Kortin numero:",

'expires' => "Voimassaolo:",

'mmyy' => "(mm/yy)",

'security_code' => "Vahvistukoodi:",

'customer_info' => "Asiakastiedot",

'email' => "S‰hkˆpostiosoite:",

'address' => "Osoite:",

'city' => "Kaupunki:",

'state' => "L‰‰ni:",

'zipcode' => "Postinumero:",

'country' => "Maa:",



);

//////////////////////////////////////////
// END: Added in 3.0.7
//////////////////

// now we need to include the config file 

include("config.inc.php");

?>