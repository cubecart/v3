<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.4
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
|	Slovakian (SK) Language File
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'sk_SK');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Áno";

$lang['admin']['no'] = "Nie";

$lang['admin']['edit'] = "Upravi";

$lang['admin']['delete'] = "Zmaza";

$lang['admin']['delete_q'] = "Ste si istí, e chcete maza?";

$lang['admin']['add'] = "Prida";

$lang['admin']['add_new'] = "Prida novı";

$lang['admin']['write'] = "Zapisa";

$lang['admin']['read'] = "Èíta";

$lang['admin']['na'] = "---"; // as in not applicable

$lang['admin']['all'] = "VŠETKY";

$lang['admin']['remove'] = "Odstráni";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Úspešne zmazané.",

'del_failed' => "Zmazanie neúspešné.",

'update_success' => "- úspešne zaktualizované.",

'update_fail' => "Aktualizácia neúspešná.",

'add_success' => "Úspešne pridané.",

'add_failed' => "Chyba pri pridaní uívate¾a.",

'administrators_title' => "Administratori",

'current_users' => "Aktuálni administrátori.",

'id' => "IÈ",

'user_notes' => "Uívate¾ / Poznámky",

'no_logins' => "Poèet prihlásení",

'super_user' => "Superuívate¾?",

'email' => "E-mail",

'action' => "Èinnos",

'add_admin' => "Vyplòte formulár, ak chcete prida/upravi konto administrátora.",

'full_name' => "Meno a priezvisko:",

'username' => "Uívate¾:",

'administrator' => "konto administrátora",

'email2' => "E-mail:",

'password' => "Heslo:",

'pass_warn' => "(Heslo vyplòte, iba ak chcete zmeni súèasné.)",

'make_super' => "Urobi superuívate¾om?",

'notes' => "Poznámky:",

'permissions' => "Práva",

'pass_updated' => "Heslo zaktualizované.",

'pass_not_updated' => "Neúspešná aktualizácia hesla.",

'change_pass_below' => "Zmeni heslo:",

'old_pass' => "Staré heslo:",

'new_pass' => "Nové heslo:",

'confirm_pass' => "Potvrdi heslo:",

'perms_updated' => "Oprávnenia aktualizované.",

'set_perms' => "Prosím, nastavte oprávnenia pre uívate¾a.",

'section' => "Sekcia",

'nb_bulk' => "Ak chcete posla skupinovı e-mail zákazníkom, musíte ma ako uívate¾ povolené práva na zápis.",

'admin_sessions' => "Administrátorske prihlásenia",

'sessions_desc' => "Posledné pokusy o administrátorske prihlásenia. Skontrolujte ich a uistite sa, e nedošlo k nejakım neoprávnenım pokusom o napadnutie Vášho internetového obchodu. Dôrazne odporúèame pravidelne meni Vaše administrátorske heslo.",

'login_id' => "IÈ",

'time' => "Èas",

'ip_address' => "IP Adresa",

'success' => "Úspešnos",

);



$lang['admin']['categories'] = array (

'delete_success' => "Úspešne zmazané.",

'delete_fail' => "Zmazanie neúspešné.",

'update_success' => "úspešne zaktualizované.",

'update_fail' => "Neúspešná aktualizácia skupiny tovaru.",

'add_success' => "úspešne pridané.",

'add_failed' => "Neúspešné pridanie skupiny tovaru.",

'categories' => "Skupiny tovaru",

'categories_desc' => "Zoznam všetkıch skupín tovaru v databáze.",

'cat_name' => "Názov skupiny",

'dir' => "Štruktúra skupín",

'image' => "Obrázok",

'no_products' => "Poèet tovarov",

'action' => "Èinnos",

'cannot_del' => "Túto skupinu tovaru nie je moné zmaza pokia¾ obsahuje nejaké druhy tovaru.",

'no_cats_exist' => "V databáze nie sú iadne skupiny tovaru.",

'add_desc' => "Prida skupiny tovaru s neobmedzenım mnostvom podkategórii, nahra nové obrázky alebo poui obrázky, ktoré u sú na servri.",

'category' => "skupinu tovaru",

'category_name' => "Názov skupiny:",

'category_level' => "Úroveò skupiny:",

'top_level' => "Najvyššia úroveò",

'image_optional' => "Obrázok: (volite¾né)",

'upload_new_image' => "Novı obrázok",

'browse_existing' => "Nalistova existujúce",

'ship_by_cat' => "Zasielanie pod¾a skupiny",

'per_ship' => "Za poštovné:",

'per_item' => "Za poloku:",

'per_int_ship' => "Za medzinárodné poštovné:",

'per_int_item' => "Za medzinárodnú poloku:",

);



$lang['admin']['customers'] = array (

'customers' => "Zákazníci",

'delete_success' => "Úspešne zmazané.",

'delete_fail' => "Zmazanie neúspešné.",

'update_success' => "Úspešná aktualizácia údajov zákazníka.",

'update_fail' => "Neúspešná aktualizácia údajov záákazníka.",

'search_term' => "H¾ada vıraz:",

'reset' => "Vyèisti",

'name' => "Meno",

'email' => "E-mail",

'invoice_add' => "Fakturaèná adresa",

'phone' => "Telefón",

'reg_ip' => "Dátum / IP Adresa",

'no_orders' => "Poèet objednávok",

'action' => "Èinnos",

'no_cust_exist' => "V databáze nie je iaden zákazník.",

'edit_below' => "Prosím upravte údaje zákazníka:",

'title' => "Oslovenie",

'first_name' => "Krstné meno:",

'last_name' => "Priezvisko:",

'email2' => "E-mail:",

'address' => "Adresa:",

'town' => "Mesto:",

'county' => "Kraj / Oblas:",

'postcode' => "PSÈ:",

'country' => "Krajina:",

'phone2' => "Telefón:",

'edit_customer' => "Upravi údaje zákazníka",

'no_download_email' => "Nenájdené iadne e-maily na stiahnutie.",

'email_customers' => "Pošlite e-mail zákazníkom",

'create_email' => "Vytvorte Vašu správu:",

'hint' => "Rada:",

'click_source' => "Môete kliknú na tlaèítko Zdroj vyššie a vloi Váš u existujúci HTML dokument.",

'important' => "Dôleité:",

'absolute_links' => "Ubezpeète sa, e všetky obrázky majú absolútnu cestu (to znamená, e obsahujú názov domény). Vo väèšine krajín je povinnos poskytnú odkaz pre monos odhlásenia sa zo zoznamu:",

'email_subject' => "Predmet správy:",

'senders_name' => "Meno odosielate¾a:",

'senders_email' => "E-mail odosielate¾a:",

'return_path' => "Návratová adresa:",

'bounce_desc' => "(Návratova adresa sa objaví príjemcovi, ak bude chcie odpoveda na Vašu správu.)",

'send_test' => "Odosla test-ovaciu správu?",

'test_email_recip' => "Príjemca testovacieho e-mailu:",

'send_email' => "Posla správu",

'download_or_send' => "Prosím zvo¾te, èi chcete stiahnú zoznam e-mailovıch adries zákazníkov, alebo posla hromadnı e-mail z tejto stránky.",

'please_choose' => "Prosím zvo¾te:",

'used_to_download' => "Pouite túto sekciu ak si chcete stiahnú zoznam e-mailovıch adries zákazníkov pre pouitie v inom programe.",

'bulk_to_subscribed' => "Táto sekcia Vám umoní posla hromadnı e-mail IBA tım zákazníkom, ktorí sa zaregistrovali na tejto stránke.",

'include_name' => "Pripoji meno?",

'download_email' => "Stiahnú e-maily",

'send_email' => "Rozposla správu",

'sending_complete' => "Odosielanie ukonèené",

'sending' => "Posielanie správy",

'recipient' => "Príjemca:",

'prev_page' => "Naspä",

'page' => "Strana:",

'bulk_finished' => "Hromadné odoslanie správy úspešne skonèilo.",

'time_taken' => "Èasová nároènos:",

'recipients' => "Príjemcovia:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Uvítacia stránka nebola zaktualizovaná, prosímm skontrolujte prístupové práva na súbor includes/static/home.inc.php.",

'update_success' => "Uvítacia stránka bola úspešne zaktualizovaná.",

'homepage' => "Uvítacia stránka",

'enabled' => "Povolené:",

'enabled_desc' => "(Ak nie je povolené, bude pouitı vıchodzí jazyk.)",

'language' => "Jazyk:",

'title' => "Nadpis:",

'use_rich_text' => "Pouijte tento editor, ak chcete prida alebo upravi dokument Vášho internetového obchodu. Pri ukladaní sa zmeny uplatnia okamite. Uistite sa, e ste si predtım prezreli náh¾ad.",

'update_homepage' => "Uloi zmeny",

'delete_success' => "Dokument úspešne zmazanı.",

'delete_fail' => "Zmazanie neúspešné.",

'update_success' => "úspešne zaktualizované.",

'update_fail' => "nebolo zauktualizované.",

'add_success' => "úspešne pridané.",

'add_fail' => "Chyba pri pridávaní dokumentu.",

'site_docs_other_lang' => "Dokumenty stránky (jazykové mutácie)",

'site_doc_other_lang' => "Dokument stránky (jazyková mutácia)",

'doc_name' => "Názov dokumentu:",

'language' => "Jazyk:",

'update_doc' => "Aktualizova dokument",

'save_doc' => "Uloi dokument",

'current_doc_list' => "Zoznam všetkıch dokumentov stránky. Môete ma neobmedzenı poèet tıchto dokumentov a môete ich kedyko¾vek maza, upravova èi pridáva.",

'doc_name2' => "Názov dokumentu",

'action' => "Èinnos",

'no_site_docs' => "V databáze nie sú iadne dokumenty stránky.",

'site_docs' => "Dokumenty stránky",

'site_doc' => "Dokument stránky",

'languages' => "Jazyky",

'no_docs' => "V databáze nie sú iadne dokumenty stránky.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Prezeranie obrázkov",

'file' => "Súbor:",

'no_imgs' => "Nie sú k dispozícii iadne obrázky. Prosím zatvorte toto okno a nahrajte obrázok na stránku.",

'preview' => "Náh¾ad:",

'ok' => "OK",

'cancel' => "Storno",

'prod_cat_use_img' => "Existuje kategória alebo tovar, ktorı pouíva obrázok '%s'.",

'continue_q' => "NAPRIEK TOMU ZMAZA?",

'site_doc_use_img' => "Existuje dokument stránky, ktorı pouíva obrázok '%s'.",

'home_use_img' => "Obrázok '%s' je pouitı na uvítacej stránke stránke.",

'gallery_use_img' => "Obrázok '%s' je pouitı v galérii obrázkov pre tovar.",

'image_deleted' => "Obrázok zmazanı.",

'delete_failed' => "Pri mazaní nastala chyba.",

'image_manager' => "Organizátor obrázkov",

'delete_from_server' => "Obrázky zo servra môete odstráni nišie.",

'img_click_prev' => "Obrázok (Kliknite pre náh¾ad)",

'size' => "Ve¾kos",

'action' => "Èinnos",

'no_images_added' => "Neboli pridané iadne obrázky.",

'prev_file' => "Náh¾ad na súbor",

'close_window' => "Zatvori okno",

'no_image_selected' => "Neboli vybrané iadne obrázky k náh¾adu.",

'file_uploader' => "Nahra súbor",

'upload_image' => "Nahra obrázok",

'please_browse_img' => "Prosím vyberte obrázok:",

'file_too_big' => "Chyba: %s je väèší ako %s",

'img_already_exists' => "Chyba: %s u existuje. Premenujte prosím súbor, ktorı sa snaíte nahra alebo vyh¾adajte rovnomennı v organizátore.",

'upload_too_large' => "Chyba: Nevyh¾adali ste obrázok, ktorı ste chceli nahra, alebo bol píliš ve¾kı k umiestneniu na server. Limit na ve¾kos obrázku je 2MB.",

'not_valid_mime' => "Chyba: %s nie je platnı typ obrázku.",

'image_upload_success' => "Obrázok %s bol úspešne nahranı.",

'back' => "&laquo; Spä",

);



$lang['admin']['misc'] = array (

'license_form' => "Licenènı formulár",

'write_error' => "Nie je moné otvori includes/global.inc.php pre zápis. Skúste zmeni CHMOD hodnotu na 0777. Nezabudnite ju potom nastavi spä na 0644!",

'try_again' => "Skúsi znova",

'purchase_cubecart' => "Kúpi CubeCart:",

'invalid_key' => "Prepáète, ale licenènı k¾úè je neplatnı, alebo u bol pouitı.",

'purchase_license_key' => "Kúpi licenènı k¾úè",

'run_unlicensed' => "Pravdepodobne nemáte kúpenú licenciu CubeCart-u. Prosím zadajte Váš licenènı k¾úè a oznam o copyright-e na spodku stránky bude odstránenı.",

'license_key' => "Licenènı k¾úè:",

'submit_key' => "Odosla k¾úè",

'server_info' => "Informácie o servri",

'ini_set_desc' => "Informácie o aktuálnom nastavení prostredia servra. Tieto informácie môu by uitoèné ak ste zaznamenali problémy s CubeCart-om. Ak Vám však CubeCart beí na zdie¾anom servri alebo máte zaplatené hostingové sluby, pravdepodobne budete ma iba chabé monosti zmeni nastavenia servra. Funkcia </span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> èastokrát pomôe obís tieto nastavenia.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "Stav objednávky bol úspešne zmenenı. V tomto momente môete zákazníkovi posla e-mailom faktúru, prípadne povoli stiahnutie dát. Ak to chcete urobi ",

'click_here' => "kliknite tu",

'send_invoice_desc' => "Ak sa zmení stav objednávky z -Vybavuje sa- na -Pripravuje sa-, budete ma monos posla zákazníkovi faktúru a prípadne zabezpeèi prístup k vyiadanım dátam.",

'delete_success' => "Úspešne zmazané.",

'delete_fail' => "Zmazanie neúspešné.",

'orders' => "Objednávky",

'all_orders' => "Všetky objednávky uloené v databáze.",

'order_no' => "È. objed.",

'status' => "Stav",

'date_time' => "Dátum/Èas",

'customer' => "Zákazník",

'ip_address' => "IP adresa",

'cart_total' => "Suma spolu",

'action' => "Èinnos",

'no_orders_in_db' => "V databáze nie sú iadne objednávky.",

'order_email' => "Váenı %s,\n\nStav Vašej objednávky èíslo: %s sa zmenil na %s\n\n",

'email_staff_comments' => "Náš personál pridal k objednávke tieto poznámky:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Táto správa bola zaslaná automaticky z %s",

'email_subj_status_change' => "Zmena stavu objednávky:",

'order_no2' => "Objednávka èíslo:",

'print_packing_slip' => "Vytlaèi visaèku k baleniu",

'customer_info' => "Informácie o zákazníkovi",

'invoice_address' => "Fakturaèná adresa:",

'delivery_address' => "Adresa doruèenia:",

'contact_info' => "Kontaktné informácie:",

'tel' => "Tel:",

'mobile' => "Mobil:",

'email' => "E-mail:",

'customer_comments' => "Poznámky zákazníka:",

'no_comments_left' => "Bez poznámok.",

'order_summary' => "Súhrn objednávky",

'product' => "Tovar",

'code' => "Kód",

'quantity' => "Mnostvo",

'price' => "Cena",

'download_link' => "Linka k stiahnutiu:",

'warn_reset' => "Tu vynulujete poèet stiahnutí a predåite èas platností dát k stiahnutiu.",

'reset_link' => "Zruši odkaz",

'download_stats' => "Stiahnuté (%s) krát. Odkaz stratí platnos %s",

'ip_address2' => "IP Adresa:",

'order_date_time' => "Èas objednávky:",

'payment_method' => "Spôsob platby:",

'ship_method' => "Spôsob doruèenia:",

'subtotal' => "Medzisúèet:",

'total_tax' => "DPH:",

'shipping' => "Doruèenie:",

'grand_total' => "SPOLU:",

'order_notfound' => "Objednávka èíslo %s sa nedá nájs.",

'order_status' => "Stav objednávky",

'shipping_date' => "Dátum expedície:",

'ship_today' => "Expedova dnes",

'modify_status' => "Zmeni stav:",

'staff_comments' => "Poznámky personálu:",

'info_not_sent_customer' => "(Táto informácia NEBUDE zaslaná zákazníkovi!)",

'inform_customer' => "Informova zákazníka:",

'customer_notified' => "(Zaškrtnite, ak chcete, aby bol zákazník informovanı o zmene priebehu objednávky.)",

'comments_2_customer' => "Poznámky pre zákazníka:",

'comments_2_customer_desc' => "(Toto bude pridané do automaticky generovaného e-mailu, ktorı bude informova zákazníka o zmene stavu jeho objednávky.)",

'save_order_status' => "Uloi stav objednávky",

'paid_by' => "Zaplatil:",

'delivered_to' => "Doruèi:",

'invoice_reciept_for' => "Faktúra / Doklad za:",

'order_of_time' => "objednávku prijatú",

'order_id' => "Èíslo objed.:",

'digi_goods_desc' => "Ak ste si objednali dáta k stiahnutiu, mali by ste dosta e-mail obsahujúci inštrukcie k sahovaniu. Tie sú prístupné aj z ovládacieho panelu Vášho konta.",

'thank_you' => "Ïakujeme, e nakupujete s nami!",

);



$lang['admin']['products'] = array (

'show_featured' => "Zobrazova v novinkách na uvítacej stránke?",

'upload_new_images' => "Nahra nové obrázky",

'no_images_avail' => "Prepáète, ale iadne obrázky nie sú k dispozícii.",

'prod_added_to_cat' => "Tovar bol pridanı do danej skupiny.",

'prod_not_added_to_cat' => "Chyba pri pridávaní tovaru do skupiny.",

'prod_removed_from_cat' => "Tovar bol úspešne odstráneny z danej skupiny.",

'prod_not_removed_from_cat' => "Chyba pri odstraòovaní tovaru z danej skupiny.",

'title_extraCats' => "Ostatné skupiny tovaru",

'manage_cats' => "Ostatné skupiny",

'master_cat' => "Hlavná skupina:",

'close_window' => "Zatvor okno",

'img_added_to_prod' => "Obrázok pridanı k tovaru.",

'img_not_added_to_prod' => "Chyba pri vkladaní obrázku k tovaru.",

'img_removed' => "Obrázok odstránenı od tovaru.",

'img_not_removed' => "Chyba pri odstraòovaní obrázku od tovaru.",

'image_management' => "Ïalšie obrázky",

'manage_images' => "Ïalšie obrázky",

'image' => "Obrázok",

'action' => "Èinnos",

'delete_success' => "Úspešne odstránenı.",

'delete_fail' => "Chyba pri odstraòovaní.",

'update_successful' => "úspešne zaktualizované.",

'update_fail' => "Chyba pri aktualizovaní skupín.",

'add_success' => "úspešne pridané.",

'add_fail' => "Chyba pri pridávaní novej skupiny tovaru.",

'prod_inventory' => "Zoznam tovaru",

'current_prods_in_db' => "Zoznam všetkého aktuálneho tovaru v databáze.",

'all_cats' => "Všetky kategórie",

'prod_name' => "Názov tovaru",

'prod_id' => "ID tovaru",

'prod_code' => "Kód tovaru",

'master_cat2' => "Hlavná skupina tovaru",

'stock_level' => "Mnostvo na sklade",

'normal_price' => "Bená cena",

'sale_price' => "Cena vo vıpredaji",

'asc' => "Vzostupnom poradí",

'desc' => "Zostupnom poradí",

'containing_text' => "obsahujúce text",

'filter' => "Utriedi",

'reset' => "Vynulova",

'id' => "ID",

'type' => "Typ",

'name' => "Názov",

'price_sale_price' => "Cena / Vıpredaj",

'in_stock' => "Na sklade",

'action' => "Èinnos",

'languages' => "Jazyky",

'no_products_exist' => "V databáze nie je iaden tovar.",

'add_prod_desc' => "Pouijte formulár nišie na pridanie tovaru do zoznamu.",

'product' => " Tovar",

'prod_name2' => "Názov tovaru:",

'prod_stock_no' => "Kód tovaru:",

'auto_generated' => "(Ak nevyplníte, bude vygenerovanı náhodnı kód.)",

'description' => "Popis:",

'primary_lang' => "(V základnom jazyku. Iné jazykovvé mutácie môu by pridané neskôr.)",

'category' => "Skupina tovaru:",

'image2' => "Obrázok:",

'opt_and_thumbs' => "(Nepovinné. Náh¾ad bude vygenerovanı automaticky, ak bude správne rozpoznanı formát obrázku.)",

'upload_new' => "Nahra novı obrázok",

'browse_existing' => "Vybra z obrázkov na serveri",

'normal_price2' => "Bená cena:",

'sale_price2' => "Cena vo vıpredaji:",

'sale_mode_desc' => "(Bude pouitá, iba ak je obchod nastavenı do módu vıpredaj.)",

'prod_weight' => "Váha tovaru:",

'tax_class' => "Druh DPH:",

'stock_level2' => "Mnostvo na sklade:",

'reduce_stock_level' => "(Mnostvo bude zníené po kadom predaji.)",

'use_stock_q' => "Uvádza mnostvo?",

'product_type' => "Druh tovaru:",

'tangible' => "Hmatate¾nı",

'digital' => "Dáta",

'digi_path' => "Dáta musia ma uvedenı buï HTTP odkaz alebo koreòovú cestu k súboru na serveri (pozri nišie).",

'digi_info' => "Informácie k dátam:",

'digi_desc' => "<p><strong>HTTP odkaz:</strong> http://www.domena.sk/k_stiahnutiu/stiahnut.exe<br />

				<strong>Koreòová cesta na serveri:</strong> /usr/local/vhosts/www.doena.sk/k_stiahnutiu/stiahnut.exe <strong>(odporúèané!)							</strong></p>

<p>Vıhoda pouitia koreòovej cesty na serveri je, e dáta môu by uloené inde ako vo verejne prístupnom adresári. Ak je pouitá táto metóda, CubeCart vytvorí automaticky odkaz k stiahnutiu, ktorı vyprší po nastavenom èase a poète pokusov o stiahnutie. Tieto parametre je moné zmeni vo všeobecnıch nastaveniach obchodu.</p>",

'prod_inv_langs' => "Zoznam tovaru - (Iné jazyky)",

'use_rich_oth_lang' => "Prosím, pouijte editor nišie, ak chcete prida alebo upravi tovar v inıch jazykoch.",

'language' => "Jazyk:",

'update_prod_lang' => "Aktualizova túto jazykovú verziu",

'save_prod_lang' => "Uloi túto jazykovú verziu",

'other_langs_exdefault' => "Zoznam aktuálneho tovaru v jazykoch inıch ako je základnı.",

'no_lang_exist' => "Pre tento tovar neexistuje v databáze iadna iná jazyková mutácia.",

'opt_add_success' => "Názov vlastnosti tovaru pridanı.",

'opt_add_fail' => "Chyba pri pridavaní vlastnosti tovaru.",

'att_add_success' => "Hodnota vlastnosti tovaru pridaná.",

'att_add_fail' => "Chyba pri pridávaní hodnoty vlastnosti tovaru.",

'assign_success' => "Vlastnos tovaru priradená k danému tovaru.",

'assign_fail' => "Chyba pri priradzovaní vlastnosti k danému tovaru.",

'product_options' => "Vlastnosti tovaru",

'product_option' => "vlastnos tovaru",

'quick_assign' => "Rıchle priradenie:",

'prod_opts_of' => "vlastnosti tovaru",

'to' => "k",

'go' => "OK",

'opt_step1' => "1. Vytvori vlastnos (napr. Farba)",

'opt_id' => "ID",

'opt_name' => "Názov vlastnosti",

'warn_remove_opt' => "Ste si istí, e chcete odstráni túto vlastnos? POZOR! TÁTO VLASTNOS U VŠETKÉHO TOVARU A VŠETKY HODNOTY TEJTO VLASTNOSTI BUDÚ ODSTRÁNENÉ SPOLU S TOUTO VLASTNOSOU!",

'no_options_made' => "Neboli vytvorené iadne vlastnosti tovaru.",

'option' => "vlastnos",

'opt_step2' => "2. Vytvori hodnotu danej vlastnosti (napr. èervená)",

'option_attributes' => "Hodnoty vlastnosti",

'warn_remove_att' => "Ste si istí, e chcete odstráni túto hodnotu vlastnosti tovaru? POZOR! TÁTO HODNOTA VLASTNOSTI BUDE ODSTRÁNENÁ U VŠETKÉHO TOVARU S TOUTO HODNOTOU VLASTNOSTI!",

'no_attributes_made' => "Neboli vytvorené iadne hodnoty vlastnosti tovaru.",

'attribute' => "hodnotu",

'opt_step3' => "3. Priradi vlastnos a jej hodnotu k tovaru (napr. trièko &gt; farba &gt; èervená)",

'option_attribute' => "Hodnota vlastnosti",

'option_price' => "Cena",

'add_subtract' => "+ / -",

'remove_opt_prod' => "Ste si istí, e chcete odobra túto vlastnos danému tovaru?",

'no_assigned_opts' => "K iadnemu tovaru neboli vytvorené iadne vlastnosti.",

'prods_made_1st' => "Najprv musí by pridanı tovar, aby sa mohla vytvori jeho vlastnos.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Enable Script/Bot Flood Control?</strong><br />
Forces users to enter a code on registration, tell a friend etc to prevent bot's from spamming the store.",


//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP hostite¾:",

'defaultHost' => "(implicitnı: localhost)",

'smtpPort' => "SMTP port:",

'defaultPort' => "(implicitnı: 25)",

'smtpAuth' => "Poui autentifikáciu?",

'defaultAuth' => "(implicitne: Nie)",

'smtpUsername' => "SMTP uívate¾:",

'smtpPassword' => "SMTP heslo:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "Zobrazova novinky na uvítacej stránke?",

'no_latest' => "Poèet zobrazovanıch noviniek:",

'off_line_settings' => "Nastavenia pri vypnutom obchode",

'off_line' => "Vypnú internetovı obchod?",

'off_line_content' => "Odkaz pri vypnutom obchode:",

'off_line_allow_admin' => "Povoli administrátorom prezera vypnutı obchod? (vyaduje admin sedenie)",

'store_settings' => "Nastavenia obchodu",

'edit_below' => "Prosím, upravte nastavenia Vášho obchodu:",

'meta_data' => "META dáta",

'browser_title' => "Titulok v prehliadaèi:",

'meta_desc' => "META popis:",

'meta_keywords' => "META k¾úèové slová:",

'comma_separated' => "(oddelené èiarkou)",

'store_co_name' => "Názov firmy/obchodu:",

'store_address' => "Adresa obchodu:",

'country' => "Krajina:",

'zone' => "Kraj / Oblas:",

'dirs_folders' => "Adresáre a zloky",

'rootRel' => "Koreòová verejná HTML cesta k obchodu:",

'include_slash' => "(vrátane lomítok)",

'storeURL' => "Absolútna URL k obchodu:",

'eg_domain_com' => "napr. http://www.domena.sk",

'rootDir' => "Koreòovı adresár na servri:",

'eg_root_path' => "napr. /cesta/k/obchodu",

'rootRel_SSL' => "Relatívna BEZPEÈNÁ URL k obchodu:",

'storeURL_SSL' => "Absolútna BEZPEÈNÁ URL k obchodu:",

'eg_domain_SSL' => "napr. https://zabezpecena.domena.sk",

'rootDir_SSL' => "Koreòovı BEZPEÈNİ adresár servera:",

'eg_root_path_secure' => "napr. /cesta/k/zabezpec/obchodu",

'enable_ssl' => "Povoli SSL:",

'ssl_warn' => "(Varovanie: Táto zmena bude aplikovaná okamite po odoslaní poiadavky. Uistite sa, e Váš koreòovı bezpeènı adresár a bezpeèná URL je zadaná správne a SSL zabezpeèenie pracuje správne, skôr ako tu nastavíte Áno)",

'digital_downloads' => "Sahovanie dát zákazníkmi",

'download_expire_time' => "Èas platnosti dát:",

'seconds' => "(sekúnd)",

'download_attempts' => "Poèet pokusov o stiahnutie:",

'attempts_desc' => "(ktoré má zákazník k dispozícii)",

'styles_misc' => "Štıly a iné",

'default_language' => "Implicitnı jazyk:",

'store_skin' => "Vzh¾ad obchodu:",

'no_cats_per_row' => "Poèet skupín tovaru na riadok:",

'dir_symbol' => "Symbol oddelenia skupín:",

'prods_per_page' => "Poèet tovarov na stranu:",

'precis_length' => "Dåka detail. názvu tovaru:",

'chars' => " (znakov)",

'no_sale_items' => "Poèet tovarov vo vıpredaji:",

'no_pop_prod' => "Poèet tovarov v rubrike ob¾úbené:",

'email_name' => "E-mail meno:",

'email_name_desc' => "(bude pouité ako meno odosielate¾a pri e-mailoch zo stránky)",

'email_address' => "E-mail adresa:",

'email_address_desc' => "(bude pouitá ako adresa odosielate¾a pri e-mailoch zo stránky)",

'mail_method' => "Spôsob odosielania e-mailov:",

'mail_recommended' => "(mail je odporúèanı)",

'max_upload_size' => "Max. ve¾kos nahrávanıch súborov:",

'under_x_recom' => "(odporúèa sa menej ako 2.097.152)",

'max_sess_length' => "Maximálna doba sedenia:",

'db_settings' => "Nastavenia databázy",

'db_host' => "Hostite¾ databázy:",

'db_username' => "Uívate¾ databázy:",

'db_password' => "Heslo uívate¾a databázy:",

'db_name' => "Názov databázy:",

'db_prefix' => "predpona tabuliek DB:",

'gd_settings' => "GD nastavenia",

'gd_ver' => "GD verzia:",

'gd_thumb_size' => "Ve¾kosti náh¾adov:",

'gd_gif_support' => "Povoli podporu GIF: (uistite sa, e je povolená na servri)",

'gd_max_img_size' => "Max ve¾kos obrázkov:",

'gd_img_quality' => "Kvalita obrázkov v GD:",

'recom_quality' => "(60 - 80 odporúèaná)",

'stock_settings' => "Nastavenie skladu",

'use_stock' => "Ukazova stav zásob?",

'allow_out_of_stock_purchases' => "Povoli nákup vypredaného tovaru?",

'weight_unit' => "Jednotka váhy:",

'time_and_date' => "Èas a dátum",

'time_format' => "Formát èasu:",

'time_format_desc' => "(viï. <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Èasovı posun:",

'time_offset_desc' => "(v sekundách - ak sa server nachádza v inom èasovom pásme)",

'date_format' => "Formát dátumu:",

'date_format_desc' => "(Viï. <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Lokálne nastavenia",

'default_currency' => "Implicitná mena",

'inc_tax_prices' => "Zahrnú DPH do ceny?",

'sale_mode' => "Spôsob vıpredaja:",

'percent_of_all' => "Rovnaká z¾ava zo všetkıch cien",

'ind_sale_per_item' => "Individuálne z¾avy na danı tovar",

'sale_mode_off' => "Z¾avy zakázané",

'sale_per_off' => "Celková z¾ava:",

'sale_per_off_desc' => "(Precentuálne zo všetkıch cien)",

'diff_dispatch' => "Povoli odoslanie na inú ako fakturaènú adresu?",

'update_settings' => "Uloi zmeny",

'update_success' => "úspešne zaktualizované.",

'update_fail' => "neúspešne zaktualizované.",

'add_success' => "úspešne pridané",

'add_fail' => "neúspešne pridané.",

'delete_success' => "Úspešne zmazané.",

'delete_failed' => "Chyba pri mazaní.",

'currencies' => "Meny",

'currency' => "Menu",

'currencies_desc' => "Prida, upravi alebo zmaza meny:",

'c_code' => "Kód",

'c_name' => "Názov",

'c_value' => "Hodnota",

'symbol_left' => "Symbol v¾avo",

'symbol_right' => "Symbol vpravo",

'decimal_places' => "Desatinıch miest",

'last_updated' => "Posledná úprava",

'c_status' => "Stav",

'no_currencies' => "V databáze nie sú meny iadneho štátu.",

'countries' => "Krajiny",

'country' => "Krajina",

'edit_countries_below' => "Prida, upravi alebo zmaza krajiny:",

'disable' => "Zakáza",

'enable' => "Povoli",

'iso' => "ISO",

'iso_name' => "Názov",

'iso3' => "ISO3",

'num_code' => "Èís. kód",

'action' => "Èinnos",

'warn_del_country' => "Ste si istí, e chcete maza? Všetky kraje èi oblasti pod danou krajinou budú zmazané.",

'no_countries_in_db' => "V databáze nie sú iadne krajiny.",

'edit_counties' => "Prida, upravi alebo zmaza kraj èi oblas:",

'no_counties_in_db' => "V databáze nie sú iadne kraje èi oblasti.",

'tax_Settings' => "Nastavenie DPH",

'edit_locale_below' => "Upravi lokálne nastavenia:",

'tax_only_to' => "Poui DPH IBA v nasledovnıch oblastiach:",

'manage_tax_below' => "Upravte rôzne druhy DPH. Tie môu by pouité pri kadom tovare, take môete vytvori vınimky z DPH pri tovaroch a rôzne úrovne DPH pre rôzne typy tovaru.",

'tax_class2' => "Trieda DPH",

'rate_per' => "sadzba (%)",

'no_taxes_setup' => "Nie je moná iadna úprava DPH.",

'tax' => "DPH",

);



$lang['admin']['stats'] = array(

'store_stats' => "Štatistiky obchodu",

'choose_view' => "Vyberte si štatistiku, ktorú chcete zobrazi:",

'search_terms' => "H¾adané vırazy",

'product_pop' => "Najpredávanejší tovar",

'cust_online' => "Práve nakupujúci zákazníci",

'search_terms_order_by' => "H¾adané vırazy (zoradené pod¾a poètu vıskytov)",

'sorry_no_data' => "Za poslednıch 15 minút nebol na stránke nikto.",

'product_pop_ordered_by' => "Ob¾úbenos tovaru (zoradené pod¾a poètu videní)",

'cust_active' => "Zákazníci, ktorí boli na stránke za poslednıch 15 minút.",

'hash' => "#",

'customer' => "Zákazník",

'location' => "Odkaz zo stránky",

'sess_start_time' => "Zaèiatok sedenia",

'last_click_time' => "Poslednı prístup",

'sess_length' => "Doba sedenia",

'geust' => "Hos",

'signed_in' => "Prihlásenı",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "UPOZORNENIE: Do hlavného konfiguraèného súboru 'includes/global.inc.php' je moné zapisova a tım je Váš obchod vystavenı riziku. Zmeòte mu èo najskôr práva zápisu na 0644.",

'401' => "Chyba 401: Nemáte prístupové práva na túto stránku. Poiadajte superuívate¾a, aby Vám umonil prístup.",

'welcome_note' => "Vitajte v ovládacom paneli CubeCart-u",

'last_login' => "Posledné prihlásenie ",

'by' => "na konto",

'failed' => "zlyhalo.",

'store_overview' => "Všeobecné informácie:",

'version' => "verzia:",

'visit_cc' => "Navštívi Server CubeCart-u k sahovaniu",

'no_products' => "Tovarovıch poloiek:",

'no_customers' => "Registrovanıch zákazníkov:",

'img_upload_size' => "Objem nahranıch obrázkov:",

'no_orders' => "Objednávok:",

'quick_search' => "Rıchle h¾adanie:",

'order_no' => "Èíslo objednávky:",

'search_now' => "H¾ada",

'customer' => "Zákazník:",

'login_failed' => "Prihlásenie zlyhalo! Uívate¾ske meno alebo heslo bolo zadané nesprávne.",

'new_pass_sent' => "Nové heslo bolo zaslané e-mailom",

'no_admin_sess' => "iadne administrátorske sedenie nie je aktívne.",

'login_fail_2' => "Prihlásenie zlyhalo. Skúste znova.",

'login_below' => "Prihláste sa:",

'username' => "Uívate¾:",

'password' => "Heslo:",

'request_pass' => "Poiada o heslo",

'login' => "Prihlási sa",

'logout_failed' => "Odhlásenie zlyhalo, lebo nebolo prítomné iadne administrátorské sedenie.",

'reset_pass_email' => "Váenı %s,

Vy alebo niekto, kto sa za Vás vydáva, poiadal o vynulovanie Vášho hesla.

Vaše nové údaje sú:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Uívate¾: %s
Heslo: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Tento e-mail bol zaslanı z linky %s/admin/requestPass.php\n

IP adresa odosielate¾a: %s",

'pass_reset_failed' => "Nulovanie hesla zlyhalo.",

'enter_email_below' => "Uveïte Vašu e-mailovú adresu:",

'email_address' => "E-mail:",

'send_pass' => "Odosla heslo",

);



$lang['admin']['nav'] = array(

'permission_error' => "Nemáte tu právo prístupu.",

'navigation' => "Navigácia",

'admin_home' => "Domov",

'store_home' => "Obchod",

'store_config' => "Nastavenia obchodu",

'gen_settings' => "Všeobecné",

'taxes' => "DPH",

'countries_zones' => "Krajiny a oblasti",

'currencies' => "Meny",

'modules' => "Moduly",

'shipping' => "Spôsoby doruèenia",

'gateways' => "Spôsoby platby",

'affiliates' => "Partneri",

'catalog' => "Katalóg",

'view_products' => "Zoznam tovaru",

'add_product' => "Prida tovar",

'product_options' => "Monosti tovaru",

'view_categories' => "Zoznam skupín",

'add_categories' => "Prida skupinu",

'customers' => "Zákazníci",

'view_customers' => "Zoznam zákazníkov",

'email_customers' => "E-mail zákazníkom",

'orders' => "Objednávky",

'file_manager' => "Správca súborov",

'manage_images' => "Organizér obrázkov",

'upload_images' => "Nahra obrázok",

'statistics' => "Štatistiky",

'view_stats' => "Zobrazi štatistiky",

'documents' => "Dokumenty",

'homepage' => "Uvítacia stránka",

'site_docs' => "Dokumenty stránky",

'misc' => "Rôzne",

'server_info' => "Info o serveri",

'admin_users' => "Správcovia",

'administrators' => "Administrátori",

'admin_sessions' => "Sedenia správcov",

);



$lang['admin']['incs'] = array(

'administration' => "Správa obchodu",

'logged_in_as' => "Prihlásenı:",

'logout' => "Odhlási sa",

'change_pass' => "Zmeni heslo",

'error_editing' => "Chyba pri pokuse o úpravu. Vstupné dáta neboli typu pole.",

'config_updated' => "Konfigurácia zaktualizovaná. Uistite sa, e prístupové práva súboru boli znova nastavené na pôvodné hodnoty.",

'cant_write' => "Nie je moné otvori súbor '%s' pre zápis. Skúste zmeni hodnotu CHMOD na 0777. Nezabudnite ju nastavi spä na 0644!",

'db_config_updated' => "Konfigurácia zaktualizovaná.",

'db_cant_write' => "Chyba pri aktualizácii!",

'select_above' => "Vyberte vyššie",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Áno";

$lang['front']['no'] = "Nie";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Uitoèné odkazy",

'reg_and_checkout' => "Registrácia a vyúètovanie",

'cont_shopping' => "Pokraèova v nákupe",

'edit_del_add' => "Upravi adr. doruè.",

'edit_inv_add' => "Upravi faktur. adr.",

'empty_cart' => "Vyprázdni košík",

'prev_page' => "Naspä",

'homepage' => "Domov",

'shop_by_cat' => "Skupiny tovaru",

'sale_items' => "Vıpredaj",

'save' => "Ušetrite",

'currency' => "Mena",

'information' => "Informácie",

'products' => "Druhov tovaru:",

'categories' => "Skupín tovaru:",

'prices' => "Ceny:",

'language' => "Jazyk",

'mailing_list' => "Zasielanie správ",

'subscribe_below' => "Chcete by informovaní o novinkách?",

'email' => "E-mail:",

'join_now' => "Zapísa sa",

'already_subscribed' => "Emailová adresa %s u bola zapísaná do nášho zoznamu predtım. Prihláste sa na Vaše konto, ak ho chcete zruši.",

'enter_valid_email' => "Prosím uveïte platnú e-mailovú adresu.",

'added_to_mail' => "Ïakujeme, e-mail %s bol pridanı do nášho zoznamu adresátov.",

'subscribed_to_mail' => "Thank you, %s has been subscribed to our mailing list.",

'popular_products' => "Ob¾úbenı tovar",

'featured_prod' => "Novinky",

'sale_items' => "Vıpredaj",

'search_for' => "H¾ada:",

'go' => "OK",

'welcome_back' => "Vitajte",

'logout' => "Odhlási sa",

'your_account' => "Vaše konto",

'welcome_guest' => "Neprihlásenı",

'login' => "Prihlási sa",

'register' => "Registrova sa",

'shopping_cart' => "Nákupnı košík",

'basket_empty' => "Váš košík je prázdny.",

'items_in_cart' => "Poloky v košíku:",

'total' => "Spolu:",

'view_basket' => "Ukáza košík",

);



$lang['front']['account'] = array(

'your_account' => "Vaše konto",

'personal_info' => "Osobné informácie",

'order_history' => "Vaše objednávky",

'change_password' => "Zmeni heslo",

'newsletter' => "Zasielanie noviniek",

'login_to_view' => "Musíte sa prihlási, aby ste videli túto stránku.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Zadali ste nesprávne heslo.",

'conf_not_match' => "Potvrdzujúce heslo nesúhlasí s novo zadanım.",

'change_pass' => "Zmeni heslo",

'password_updated' => "Ïakujeme, Vaše heslo bolo aktualizované.",

'change_pass_below' => "Zmeni Vaše heslo:",

'old_pass' => "Staré heslo:",

'new_pass' => "Nové heslo:",

'confirm_pass' => "Potvrïte heslo:",

'submit' => "Odosla",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Prepáète",

'expired' => "Vaša linka k stiahnutiu expirovala alebo nie je platná.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Zabudnuté heslo",

'email' => "E-mail:",

'send_pass' => "Posla heslo",

'reset_email' => "Váenı %s %s,

Vy alebo niekto, kto predstiera, e ste to Vy poiadal o vynulovanie Vášho hesla. Vaše nové prístupové údaje sú:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Uívate¾: %s
Heslo: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
Ak sa chcete prihlási teraz, kliknite na odkaz:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Tento e-mail bol odoslanı z %s
IP Adresa odosielate¾a: %s",

'new_pass_sent' => "Nové heslo bolo zaslané na %s.",

'email_not_found' => "Prepáète, ale táto e-mailová adresa nebola nájdená v našom zozname adresátov.",

'enter_email' => "Zadajte Vašu e-mailovú adresu, ktorú ste pouili pri registrácii, aby sme Vám mohli zasla doèasné nové heslo:",

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

'newOrderMsg' => "Zákazník práve dokonèil objednávku %s. Ak ju chcete zobrazi, následujte odkaz: \n\n%s",

'newOrderSubj' => "Bola zadaná nová objednávka",

'payment' => "Platba",

'cart' => "Košík",

'address' => "Adresa",

'payment' => "Platba",

'complete' => "Ukonèené",

'fill_out_below' => "Vyplnite formulár:",

'transferring' => "Prechod k platbe",

'go_now' => "OK",

'continue' => "Pokraèova",

'choose_method' => "Zvo¾te spôsob platby:",

'your_comments' => "Vaše poznámky:",

'none_configured' => "Prepáète, ale nie sú prednastavené iadne metódy platby.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Prihlási sa",

'username' => "E-mail:",

'password' => "Heslo:",

'remember_me' => "Zapamäta si?",

'forgot_pass' => "Zabudli ste heslo?",

'login_success' => "Úspešne ste sa prihlásili.",

'already_logged_in' => "U ste prihlásení.",

'login_failed' => "Prihlásenie zlyhalo!",

'login_below' => "Prihlási sa do nášho internetového obchodu:",

);



$lang['front']['index'] = array(

'latest_products' => "Novinky",

);



$lang['front']['logout'] = array(

'logout' => "Odhlási sa",

'session_destroyed' => "Vaš nákup bol prerušenı.",

'no_session' => "Nebol nájdenı iaden otvorenı nákup, ktorı by mal by zrušenı. Pravdepodobne ste sa sem dostali omylom.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Zasielanie noviniek",

'prefs_updates' => "Vaše vo¾by k zasielaniu informácií o novinkách boli zaktualizované.",

'edit_prefs_below' => "Upravte prosím Vaše vo¾by k zasielaniu informácií o novinkách:",

'subscribe' => "Zapísa sa do zoznamu adresátov?",

'email_format' => "Formát e-mailu:",

'plain_text' => "Obyèajnı text",

'html' => "HTML",

'html_abbr' => "Hypertext Markup Language",

'update' => "Uloi zmeny",

'login_required' => "Musíte sa prihlási, aby ste videli túto stránku.",

);



$lang['front']['noShip'] = array(

'sorry' => "Prepáète",

'desc' => "Do Vašej krajiny objednávku nemôeme doruèi.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Pepáète",

'desc' => "Nemôeme doruèi objednávku o takejto celkovej hmotnosti.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Telefónne èíslo musí obsahova iba èíslice.",

'complete_all' => "Ubezpeète sa, e ste vyplnili všetky poadované políèka.",

'email_invalid' => "Zadajte platnú e-mailovú adresu.",

'numeric_only' => "Telefónne èíslo musí obsahova iba èíslice.",

'email_inuse' => "Prepáète, ale túto e-mailová adresu u niekto pouíva.",

'update_email' => "Váenı %s %s,

Dostali ste tento potvrdzujúci e-mail, aby sme Vás informovali, e Vaše osobné informácie boli úspešne aktualizované v našom systéme. Ak máte pocit, e Vaše konto bolo aktualizované inou osobou ako Vami, bezodkladne nás informujte.\n\n

Tento e-mail bol odoslanı z %s\n

IP adresa odosielate¾a: %s",

'update_email_subj' => "Osobné údaje sú zaktualizované",

'personal_info' => "Osobné údaje",

'account_updated' => "Vaše konto bolo aktualizované. Môete ho znova úpravi nišie.",

'edit_below' => "Upravi Vaše osobné informácie:",

'title' => "Titul:",

'first_name' => "Meno:",

'last_name' => "Priezvisko:",

'email' => "E-mail:",

'address' => "Adresa:",

'town' => "Mesto:",

'county' => "Kraj / Oblas:",

'postcode' => "PSÈ:",

'country' => "Krajina:",

'phone' => "Telefón:",

'mobile' => "Mobil:",

'update_account' => "Uloi",

'login_required' => "Musíte sa prihlási, aby ste videli túto stránku.",

);



$lang['front']['reg'] = array(

'fill_required' => "Ubezpeète sa, e ste vyplnili všetky poadované políèka.",

'pass_not_match' => "Ubezpeète sa, e sa Vami zadané heslá zhodujú.",

'enter_valid_email' => "Zadajte platnú e-mailovú adresu.",

'enter_valid_tel' => "Telefónne èíslo musí obsahova iba èíslice.",

'email_in_use' => "Prepáète, ale túto e-mailová adresu u niekto pouíva.",

'note_required' => "Nezabudnite, e políèka oznaèené hviezdièkou (*) sú vyadované pri registrácii.",

'express_reg' => "Rıchla registrácia",

'submit_and_cont' => "Odosla a pokraèova",

'personal_details' => "Osobné informácie",

'address' => "Adresa",

'title' => "Oslovenie:",

'title_desc' => "(Pán/Pani)",

'first_name' => "Krstné meno:",

'address2' => "Adresa:",

'last_name' => "Priezvisko:",

'email_address' => "E-mailová adresa:",

'town' => "Mesto:",

'phone' => "Telefón:",

'county' => "Kraj / Oblas:",

'mobile' => "Mobil:",

'country' => "Krajina:",

'postcode' => "PSÈ:",

'security_details' => "Bezpeènostné detaily",

'choose_pass' => "Zvo¾te heslo:",

'conf_pass' => "Potvrïte heslo:",

'privacy_settings' => "Osobné nastavenia",

'receive_emails' => "Chcem dostáva e-maily o novinkách",

'email_format' => "Formát e-mailu:",

'styled_html' => "Formátovanı HTML",

'plain_text' => "Obyèajnı text",

'tandcs' => "Obchodné podmienky.",

'please_read' => "Uistite sa, e ste si preèítali naše",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "Dear %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Ak chcete zobrazi podrobnosti o tomto produkte, kliknite prosím na nasledujúcu linku:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Tento e-mail odoslal %s
IP adresa odosielate¾a: %s",

'email_subject' => "Odkaz od: %s",

'tellafriend' => "Dajte vedie známemu",

'message_sent' => "Ïakujeme Vám, Váš odkaz obral <strong>%s</strong> o '%s'. Ak chcete posla tento odkaz inému známemu, urobte tak nišie:",

'fill_out_below' => "Odošlite nasledujúci formulár známemu a my k nemu pripojíme informácie o tovare: '%s'.",

'friends_name' => "Meno známeho:",

'friends_email' => "Jeho e-mail:",

'your_name' => "Vaše meno:",

'your_email' => "Váš e-mail:",

'message' => "Odkaz:",

'default_message' => "Našiel som toto: '%s' a pomyslel som si, e by a to mohlo zaujíma.",

'send' => "Posla",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Odhlási sa",

'email' => "E-mail:",

'go' => "OK",

'enter_valid_email' => "Prosím uveïte platnú e-mailovú adresu.",

'email_removed' => "Ïakujeme Vám, záznam: <strong>%s</strong> bol odstránenı z nášho zoznamu adresátov.",

'email_not_found' => "Prepáète, ale záznam: <strong>%s</strong> nebol nájdenı v našom zozname adresátov alebo u bol zrušenı predtım.",

'enter_email_below' => "Prosím uveïte e-mailovú adresu, ktorá má by odstránená z nášho zoznamu adresátov:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Vısledky h¾adania",

'sale_items' => "Vıpredaj",

'image' => "Obrázok",

'description' => "Popis",

'price' => "Cena",

'products_in' => "Tovar v skupine:",

'buy' => "Kúpi",

'more' => "Detaily",

'out_of_stock' => "VYPREDANÉ",

'no_products_match' => "Bohuia¾ iaden tovar neobsahuje k¾úèové slovo:",

'no_prods_in_cat' => "V tejto skupine nie je iaden tovar.",

);



$lang['front']['viewDoc'] = array(

'error' => "Chyba",

'does_not_exist' => "Takı dokument neexistuje.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Obj. èíslo:",

'customer_info' => "Zákazník:",

'invoice_address' => "Fakturaèná adresa:",

'delivery_address' => "Adresa doruèenia:",

'na' => "---",

'customer_comments' => "Poznámky zákazníka:",

'order_summary' => "Objednávka:",

'product' => "Tovar",

'product_code' => "Kód tovaru",

'quantity' => "Mnostvo",

'price' => "Cena",

'download_here' => "Tu stiahnú",

'review_below' => "Prezrite si prosím Vašu objednávku:",

'order_date_time' => "Dátum a èas objednávky:",

'payment_method' => "Spôsob platby:",

'ship_method' => "Spôsob doruèenia:",

'subtotal' => "Medzisúèet:",

'total_tax' => "DPH:",

'shipping' => "Poštovné:",

'grand_total' => "Hotovos:",

'order_not_found' => "Také objednávacie èíslo sa nedá nájs.",

'login_required' => "Musíte sa prihlási, aby ste videli túto stránku.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Vaše objednávky",

'orders_listed_below' => "Všetky objednávky pod tımto úètom:",

'order_no' => "Obj. èíslo",

'status' => "Stav",

'date_time' => "Dátum/èas",

'action' => "Vo¾ba",

'view' => "Zobrazi",

'no_orders' => "V našom systéme nemáme iadne záznamy Vašich objednávok. Ak máte pocit, e to tak nemá by, kontaktujte nás èo najskôr.",

'login_required' => "Musíte sa prihlási, aby ste videli túto stránku.",

);



$lang['front']['viewProd'] = array(

'product' => "Tovar",

'product_info' => "Informácie o tovare",

'price' => "Cena:",

'product_code' => "Kód tovaru:",

'tellafriend' => "Dajte vedie známemu",

'quantity' => "Mnostvo:",

'more_images' => "[+] Viac obrázkov",

'add_to_basket' => "Prida do košíka",

'location' => "Skupina:",

'no_instock' => "Skladom:",

'instock' => "Skladom",

'out_of_stock' => "VYPREDANÉ",

'prod_opts' => "Monosti tovaru:",

'prod_not_found' => "Takı tovar nemono nájs.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Váš košík je momentálne prázdny.",

'allready_customer' => "Ste u zaregistrovaní v našom internetovom obchode?",

'login_below' => "Prosím prihláste sa:",

'username' => "E-mail:",

'password' => "Heslo:",

'remember_me' => "Zapamäta si?",

'login' => "Prihlási",

'forgot_pass_q' => "Zabudli ste heslo?",

'need_register' => "Potrebujete sa zaregistrova?",

'express_register' => "Zrıchlenú registraènú stránku vyplnite ¾ahko a rıchlo.",

'reg_and_cont' => "Zaregistrova sa a pokraèova",

'cont_shopping_q' => "Pokraèova v nákupe?",

'cont_shopping' => "Pokraèova v nákupe",

'cont_browsing' => "Ak chcete pokraèova v prezeraní ako hos bez loginu, kliknite na tlaèidlo nišie. Nebudete schopní urobi nákup skôr, ako sa zaregistrujete.",

);





$lang['front']['cart'] = array(

'free_shipping' => "Doruèenie zdarma",

'view_cart' => "Zobrazi košík",

'cart' => "Košík",

'address' => "Adresa",

'payment' => "Platba",

'complete' => "Dokonèi",

'add_more' => "Chcete prida viac poloiek? Zadajte kód tovaru:",

'add' => "Prida",

'qty' => "ks",

'product' => "Tovar",

'code' => "Kód",

'stock' => "Skladom",

'price' => "Cena",

'line_price' => "Spolu",

'delete' => "Zmaza",

'remove' => "Odstráni poloku",

'invoice_address' => "Fakturaèná adresa",

'delivery_address' => "Adresa doruèenia",

'title' => "Titul:",

'first_name' => "Krstné meno:",

'last_name' => "Priezvisko:",

'address2' => "Adresa:",

'town' => "Mesto:",

'county' => "Kraj / Oblas:",

'postcode' => "PSÈ:",

'country' => "Krajina:",

'edit_invoice_address' => "Upravi fakturaènú adresu",

'edit_delivery_address' => "Upravi adresu doruèenia",

'stock_warn' => "objednali ste si viac poloiek ako máme práve na sklade. Vaša objednávka sa môe oneskori, pokia¾ nedoobjednáme potrebné mnostvá.",

'amount_capped' => "Prepáète, ale nemôeme Vám zasla väèšie mnostvo ako máme na sklade.<br />Mnostvo tejto poloky bolo upravené na",

'na' => "---",

'shipping' => "Poštovné:",

'tax' => "DPH:",

'subtotal' => "Medzisúèet:",

'cart_total' => "Hotovos:",

'if_changed_quan' => "(ak ste zmenili nejaké mnostvá)",

'update_cart' => "Preráta košík",

'continue' => "Pokraèova",

'cart_empty' => "Váš nákupnı košík je momentálne prázdny.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Potvrdenie objednávky",

'cart' => "Košík",

'address' => "Adresa",

'payment' => "Platba",

'complete' => "Dokonèi",

'order_success' => "Ïakujeme, Vaša objewdnávka bola úspešne ukonèená! Budeme radi, ak sem zavítate opä.",

'order_fail' => "Bohuia¾ Vaša objednávka nebola úspešná!",

'try_again_desc' => "Môete skúsi potvrdi obsah Vášho košíka znova:",

'try_again' => "Skúsi znovu",

'request_login' => "Musíte sa prihlási, aby ste videli túto stránku.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Váenı %s,

Ïakujeme za Vašu objednávku èislo: %s urobenú na %s

Transakcia prebehla bez problémov a tovar Vám bude pri prvej príleitosti zaslanı (ak je dostupnı).

~~~~~~~~~~~~~~~~~~~~~~~~~~
Meno: %s
Medzisúèet: %s
Poštovné a balné: %s
DPH: %s
Spolu: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Fakturaèná adresa:
%s
%s
%s
%s
%s
%s
%s

Adresa doruèenia:
%s
%s
%s
%s
%s
%s
%s

Spôsob platby: %s
Spôsob doruèenia: %s",

'inv_email_body_2' => "\nVaše poznámky: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Obsah objednávky:\n",

'inv_email_body_4' =>"Tovar: %s\n",

'inv_email_body_5' => "Monosti: %s\n",

'inv_email_body_6' => "Mnostvo: %s
Kód tovaru: %s
Cena: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Obj. èíslo: ",

'digi_email_body1' => "Váenı %s,

Ïakujeme za Vašu objednávku èíslo: %s urobenú na %s

Nišie nájdete odkazy na stiahnutie èíslicovıch produktov, ktoré ste si objednali.

DÔLEITÉ: tieto odkazy expirujú %s a Vy máte %s pokus(y) na ich stiahnutie. Ak by ste mali problémy, obráte sa na nás s èislom tejto objednávky.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
ODKAZ K STIAHNUTIU:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Monos stiahnutia: ",

);



$lang['misc'] = array(

'pages' => " strán(y) ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "Klientskı prehliadaè:",

'server_software' => "Softvér na serveri:",

'perofOrderSub' => " % zo sumy objednávky",

'freeForOrdOver' => "Bezplatne pre objednávky nad",

'freeShipping' => "Bezplatné doruèenie",

'byWeight1stClass' => "Pod¾a hmotnosti (1. trieda)",

'1stClass' => "(1.trieda)",

'byWeight2ndClass' => "pod¾a hmotnosti (2. trieda)",

'2ndClass' => "(2. trieda)",

'flatRate' => "Poštou - pevná sadzba",

'free' => "Bezplatne",

'national' => "Národnı",

'international' => "Medzinárodnı",

'byCategory' => "Pod¾a skupiny tovaru",

'perItem' => "Za poloku",

'nextDayEarlyAm' => "Nasledujúci deò zavèas rána",

'nextDayAir' => "Nasledujúci deò letecky",

'nextDayAirSaver' => "Nasledujúci deò letecky s odkladom",

'2ndDayEarlyAm' => "O dva dni zavèas rána",

'2ndDayAir' => "O dva dni letecky",

'3daySelect' => "Tretí deò",

'ground' => "Pozemne",

'canadaStandard' => "Canada štandard",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Faktúra na",

'deliverTo' => "Doruèi",

'postalOrderFor' => "Poštová objednávka pre",

'orderOf' => "Objednávka",

'orderID' => "Èíslo objednávky:",

'product' => "Tovar",

'code' => "Kód",

'qty' => "Ks",

'price' => "Cena",

'shippingMethod' => "Spôsob doruèenia:",

'subtotal' => "Medzisúèet:",

'totalTax' => "DPH spolu:",

'totalShipping' => "Poštovné spolu:",

'grandTotal' => "SPOLU:",

'payByCheck' => "Platba šekom",

'payTo' => "Vypíšte prosím, šek na",

'payByCard' => "Platba kartou",

'cardType' => "Typ karty:",

'cardNo' => "Èíslo karty:",

'3-4DigiId' => "3-4 èíslica ID:",

'expiryDate' => "Dátum platnosti:",

'issueDate' => "Dátum vydania:",

'issueNo' => "Èíslo vydania:",

'signature' => "Podpis:",

'payByTransfer' => "Platba bankovım prevodom",

'bankName' => "Názov banky:",

'accountName' => "Názov úètu:",

'sortCode' => "Predèíslie:",

'accountNo' => "Èíslo úètu:",

'swiftCode' => "Rıchly kód:",

'bankAddress' => "Adresa banky:",

'thanks' => "Ïakujeme Vám za nákup!",

'postalAddress' => "Poštová adresa:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "Èaká na spracovanie",

'2' => "Spracováva sa",

'3' => "Vybavená",

'4' => "Odmietnutá",

'5' => "Falošná",

);

$lang['admin']['cats'] = array (

'delete_success' => "Jazyk skupiny tovaru úspešne zrušenı.",

'delete_fail' => "Neúspešné zrušenie.",

'update_fail' => "Neúspešná aktualizácia.",

'update_success' => "Úspešne zaktualizované.",

'add_success' => "úspešne pridané.",

'add_fail' => "Chyba pri pridávaní jazyka skupiny tovaru.",

'site_cats_other_lang' => "Skupiny tovaru - (iné jazyky)",

'site_cat_other_lang' => "Skupina tovaru - (iné jazyky)",

'cat_name' => "Názov skupiny:",

'language' => "Jazyk:",

'update_cat' => "Aktualizova skupinu",

'save_cat' => "Uloi skupinu",

'current_cat_list' => "Zoznam všetkıch aktuálnych jazykov skupín tovaru. Môu by kedyko¾vek upravované a/alebo zmazané.",

'cat_name2' => "Názov skupiny",

'action' => "Èinnos",

'no_site_cats' => "Táto skupina tovaru ešte nebola preloená do iného jazyka.",

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