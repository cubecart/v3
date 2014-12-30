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

$lang['admin']['yes'] = "�no";

$lang['admin']['no'] = "Nie";

$lang['admin']['edit'] = "Upravi�";

$lang['admin']['delete'] = "Zmaza�";

$lang['admin']['delete_q'] = "Ste si ist�, �e chcete maza�?";

$lang['admin']['add'] = "Prida�";

$lang['admin']['add_new'] = "Prida� nov�";

$lang['admin']['write'] = "Zapisa�";

$lang['admin']['read'] = "��ta�";

$lang['admin']['na'] = "---"; // as in not applicable

$lang['admin']['all'] = "V�ETKY";

$lang['admin']['remove'] = "Odstr�ni�";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "�spe�ne zmazan�.",

'del_failed' => "Zmazanie ne�spe�n�.",

'update_success' => "- �spe�ne zaktualizovan�.",

'update_fail' => "Aktualiz�cia ne�spe�n�.",

'add_success' => "�spe�ne pridan�.",

'add_failed' => "Chyba pri pridan� u��vate�a.",

'administrators_title' => "Administratori",

'current_users' => "Aktu�lni administr�tori.",

'id' => "I�",

'user_notes' => "U��vate� / Pozn�mky",

'no_logins' => "Po�et prihl�sen�",

'super_user' => "Superu��vate�?",

'email' => "E-mail",

'action' => "�innos�",

'add_admin' => "Vypl�te formul�r, ak chcete prida�/upravi� konto administr�tora.",

'full_name' => "Meno a priezvisko:",

'username' => "U��vate�:",

'administrator' => "konto administr�tora",

'email2' => "E-mail:",

'password' => "Heslo:",

'pass_warn' => "(Heslo vypl�te, iba ak chcete zmeni� s��asn�.)",

'make_super' => "Urobi� superu��vate�om?",

'notes' => "Pozn�mky:",

'permissions' => "Pr�va",

'pass_updated' => "Heslo zaktualizovan�.",

'pass_not_updated' => "Ne�spe�n� aktualiz�cia hesla.",

'change_pass_below' => "Zmeni� heslo:",

'old_pass' => "Star� heslo:",

'new_pass' => "Nov� heslo:",

'confirm_pass' => "Potvrdi� heslo:",

'perms_updated' => "Opr�vnenia aktualizovan�.",

'set_perms' => "Pros�m, nastavte opr�vnenia pre u��vate�a.",

'section' => "Sekcia",

'nb_bulk' => "Ak chcete posla� skupinov� e-mail z�kazn�kom, mus�te ma� ako u��vate� povolen� pr�va na z�pis.",

'admin_sessions' => "Administr�torske prihl�senia",

'sessions_desc' => "Posledn� pokusy o administr�torske prihl�senia. Skontrolujte ich a uistite sa, �e nedo�lo k nejak�m neopr�vnen�m pokusom o napadnutie V�ho internetov�ho obchodu. D�razne odpor��ame pravidelne meni� Va�e administr�torske heslo.",

'login_id' => "I�",

'time' => "�as",

'ip_address' => "IP Adresa",

'success' => "�spe�nos�",

);



$lang['admin']['categories'] = array (

'delete_success' => "�spe�ne zmazan�.",

'delete_fail' => "Zmazanie ne�spe�n�.",

'update_success' => "�spe�ne zaktualizovan�.",

'update_fail' => "Ne�spe�n� aktualiz�cia skupiny tovaru.",

'add_success' => "�spe�ne pridan�.",

'add_failed' => "Ne�spe�n� pridanie skupiny tovaru.",

'categories' => "Skupiny tovaru",

'categories_desc' => "Zoznam v�etk�ch skup�n tovaru v datab�ze.",

'cat_name' => "N�zov skupiny",

'dir' => "�trukt�ra skup�n",

'image' => "Obr�zok",

'no_products' => "Po�et tovarov",

'action' => "�innos�",

'cannot_del' => "T�to skupinu tovaru nie je mo�n� zmaza� pokia� obsahuje nejak� druhy tovaru.",

'no_cats_exist' => "V datab�ze nie s� �iadne skupiny tovaru.",

'add_desc' => "Prida� skupiny tovaru s neobmedzen�m mno�stvom podkateg�rii, nahra� nov� obr�zky alebo pou�i� obr�zky, ktor� u� s� na servri.",

'category' => "skupinu tovaru",

'category_name' => "N�zov skupiny:",

'category_level' => "�rove� skupiny:",

'top_level' => "Najvy��ia �rove�",

'image_optional' => "Obr�zok: (volite�n�)",

'upload_new_image' => "Nov� obr�zok",

'browse_existing' => "Nalistova� existuj�ce",

'ship_by_cat' => "Zasielanie pod�a skupiny",

'per_ship' => "Za po�tovn�:",

'per_item' => "Za polo�ku:",

'per_int_ship' => "Za medzin�rodn� po�tovn�:",

'per_int_item' => "Za medzin�rodn� polo�ku:",

);



$lang['admin']['customers'] = array (

'customers' => "Z�kazn�ci",

'delete_success' => "�spe�ne zmazan�.",

'delete_fail' => "Zmazanie ne�spe�n�.",

'update_success' => "�spe�n� aktualiz�cia �dajov z�kazn�ka.",

'update_fail' => "Ne�spe�n� aktualiz�cia �dajov z��kazn�ka.",

'search_term' => "H�ada� v�raz:",

'reset' => "Vy�isti�",

'name' => "Meno",

'email' => "E-mail",

'invoice_add' => "Faktura�n� adresa",

'phone' => "Telef�n",

'reg_ip' => "D�tum / IP Adresa",

'no_orders' => "Po�et objedn�vok",

'action' => "�innos�",

'no_cust_exist' => "V datab�ze nie je �iaden z�kazn�k.",

'edit_below' => "Pros�m upravte �daje z�kazn�ka:",

'title' => "Oslovenie",

'first_name' => "Krstn� meno:",

'last_name' => "Priezvisko:",

'email2' => "E-mail:",

'address' => "Adresa:",

'town' => "Mesto:",

'county' => "Kraj / Oblas�:",

'postcode' => "PS�:",

'country' => "Krajina:",

'phone2' => "Telef�n:",

'edit_customer' => "Upravi� �daje z�kazn�ka",

'no_download_email' => "Nen�jden� �iadne e-maily na stiahnutie.",

'email_customers' => "Po�lite e-mail z�kazn�kom",

'create_email' => "Vytvorte Va�u spr�vu:",

'hint' => "Rada:",

'click_source' => "M��ete klikn�� na tla��tko Zdroj vy��ie a vlo�i� V� u� existuj�ci HTML dokument.",

'important' => "D�le�it�:",

'absolute_links' => "Ubezpe�te sa, �e v�etky obr�zky maj� absol�tnu cestu (to znamen�, �e obsahuj� n�zov dom�ny). Vo v��ine kraj�n je povinnos� poskytn�� odkaz pre mo�nos� odhl�senia sa zo zoznamu:",

'email_subject' => "Predmet spr�vy:",

'senders_name' => "Meno odosielate�a:",

'senders_email' => "E-mail odosielate�a:",

'return_path' => "N�vratov� adresa:",

'bounce_desc' => "(N�vratova adresa sa objav� pr�jemcovi, ak bude chcie� odpoveda� na Va�u spr�vu.)",

'send_test' => "Odosla� test-ovaciu spr�vu?",

'test_email_recip' => "Pr�jemca testovacieho e-mailu:",

'send_email' => "Posla� spr�vu",

'download_or_send' => "Pros�m zvo�te, �i chcete stiahn�� zoznam e-mailov�ch adries z�kazn�kov, alebo posla� hromadn� e-mail z tejto str�nky.",

'please_choose' => "Pros�m zvo�te:",

'used_to_download' => "Pou�ite t�to sekciu ak si chcete stiahn�� zoznam e-mailov�ch adries z�kazn�kov pre pou�itie v inom programe.",

'bulk_to_subscribed' => "T�to sekcia V�m umo�n� posla� hromadn� e-mail IBA t�m z�kazn�kom, ktor� sa zaregistrovali na tejto str�nke.",

'include_name' => "Pripoji� meno?",

'download_email' => "Stiahn�� e-maily",

'send_email' => "Rozposla� spr�vu",

'sending_complete' => "Odosielanie ukon�en�",

'sending' => "Posielanie spr�vy",

'recipient' => "Pr�jemca:",

'prev_page' => "Nasp�",

'page' => "Strana:",

'bulk_finished' => "Hromadn� odoslanie spr�vy �spe�ne skon�ilo.",

'time_taken' => "�asov� n�ro�nos�:",

'recipients' => "Pr�jemcovia:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Uv�tacia str�nka nebola zaktualizovan�, pros�mm skontrolujte pr�stupov� pr�va na s�bor includes/static/home.inc.php.",

'update_success' => "Uv�tacia str�nka bola �spe�ne zaktualizovan�.",

'homepage' => "Uv�tacia str�nka",

'enabled' => "Povolen�:",

'enabled_desc' => "(Ak nie je povolen�, bude pou�it� v�chodz� jazyk.)",

'language' => "Jazyk:",

'title' => "Nadpis:",

'use_rich_text' => "Pou�ijte tento editor, ak chcete prida� alebo upravi� dokument V�ho internetov�ho obchodu. Pri ukladan� sa zmeny uplatnia okam�ite. Uistite sa, �e ste si predt�m prezreli n�h�ad.",

'update_homepage' => "Ulo�i� zmeny",

'delete_success' => "Dokument �spe�ne zmazan�.",

'delete_fail' => "Zmazanie ne�spe�n�.",

'update_success' => "�spe�ne zaktualizovan�.",

'update_fail' => "nebolo zauktualizovan�.",

'add_success' => "�spe�ne pridan�.",

'add_fail' => "Chyba pri prid�van� dokumentu.",

'site_docs_other_lang' => "Dokumenty str�nky (jazykov� mut�cie)",

'site_doc_other_lang' => "Dokument str�nky (jazykov� mut�cia)",

'doc_name' => "N�zov dokumentu:",

'language' => "Jazyk:",

'update_doc' => "Aktualizova� dokument",

'save_doc' => "Ulo�i� dokument",

'current_doc_list' => "Zoznam v�etk�ch dokumentov str�nky. M��ete ma� neobmedzen� po�et t�chto dokumentov a m��ete ich kedyko�vek maza�, upravova� �i prid�va�.",

'doc_name2' => "N�zov dokumentu",

'action' => "�innos�",

'no_site_docs' => "V datab�ze nie s� �iadne dokumenty str�nky.",

'site_docs' => "Dokumenty str�nky",

'site_doc' => "Dokument str�nky",

'languages' => "Jazyky",

'no_docs' => "V datab�ze nie s� �iadne dokumenty str�nky.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Prezeranie obr�zkov",

'file' => "S�bor:",

'no_imgs' => "Nie s� k dispoz�cii �iadne obr�zky. Pros�m zatvorte toto okno a nahrajte obr�zok na str�nku.",

'preview' => "N�h�ad:",

'ok' => "OK",

'cancel' => "Storno",

'prod_cat_use_img' => "Existuje kateg�ria alebo tovar, ktor� pou��va obr�zok '%s'.",

'continue_q' => "NAPRIEK TOMU ZMAZA�?",

'site_doc_use_img' => "Existuje dokument str�nky, ktor� pou��va obr�zok '%s'.",

'home_use_img' => "Obr�zok '%s' je pou�it� na uv�tacej str�nke str�nke.",

'gallery_use_img' => "Obr�zok '%s' je pou�it� v gal�rii obr�zkov pre tovar.",

'image_deleted' => "Obr�zok zmazan�.",

'delete_failed' => "Pri mazan� nastala chyba.",

'image_manager' => "Organiz�tor obr�zkov",

'delete_from_server' => "Obr�zky zo servra m��ete odstr�ni� ni��ie.",

'img_click_prev' => "Obr�zok (Kliknite pre n�h�ad)",

'size' => "Ve�kos�",

'action' => "�innos�",

'no_images_added' => "Neboli pridan� �iadne obr�zky.",

'prev_file' => "N�h�ad na s�bor",

'close_window' => "Zatvori� okno",

'no_image_selected' => "Neboli vybran� �iadne obr�zky k n�h�adu.",

'file_uploader' => "Nahra� s�bor",

'upload_image' => "Nahra� obr�zok",

'please_browse_img' => "Pros�m vyberte obr�zok:",

'file_too_big' => "Chyba: %s je v��� ako %s",

'img_already_exists' => "Chyba: %s u� existuje. Premenujte pros�m s�bor, ktor� sa sna��te nahra� alebo vyh�adajte rovnomenn� v organiz�tore.",

'upload_too_large' => "Chyba: Nevyh�adali ste obr�zok, ktor� ste chceli nahra�, alebo bol p�li� ve�k� k umiestneniu na server. Limit na ve�kos� obr�zku je 2MB.",

'not_valid_mime' => "Chyba: %s nie je platn� typ obr�zku.",

'image_upload_success' => "Obr�zok %s bol �spe�ne nahran�.",

'back' => "&laquo; Sp�",

);



$lang['admin']['misc'] = array (

'license_form' => "Licen�n� formul�r",

'write_error' => "Nie je mo�n� otvori� includes/global.inc.php pre z�pis. Sk�ste zmeni� CHMOD hodnotu na 0777. Nezabudnite ju potom nastavi� sp� na 0644!",

'try_again' => "Sk�si� znova",

'purchase_cubecart' => "K�pi� CubeCart:",

'invalid_key' => "Prep��te, ale licen�n� k��� je neplatn�, alebo u� bol pou�it�.",

'purchase_license_key' => "K�pi� licen�n� k���",

'run_unlicensed' => "Pravdepodobne nem�te k�pen� licenciu CubeCart-u. Pros�m zadajte V� licen�n� k��� a oznam o copyright-e na spodku str�nky bude odstr�nen�.",

'license_key' => "Licen�n� k���:",

'submit_key' => "Odosla� k���",

'server_info' => "Inform�cie o servri",

'ini_set_desc' => "Inform�cie o aktu�lnom nastaven� prostredia servra. Tieto inform�cie m��u by� u�ito�n� ak ste zaznamenali probl�my s CubeCart-om. Ak V�m v�ak CubeCart be�� na zdie�anom servri alebo m�te zaplaten� hostingov� slu�by, pravdepodobne budete ma� iba chab� mo�nosti zmeni� nastavenia servra. Funkcia </span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> �astokr�t pom��e ob�s� tieto nastavenia.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "Stav objedn�vky bol �spe�ne zmenen�. V tomto momente m��ete z�kazn�kovi posla� e-mailom fakt�ru, pr�padne povoli� stiahnutie d�t. Ak to chcete urobi� ",

'click_here' => "kliknite tu",

'send_invoice_desc' => "Ak sa zmen� stav objedn�vky z -Vybavuje sa- na -Pripravuje sa-, budete ma� mo�nos� posla� z�kazn�kovi fakt�ru a pr�padne zabezpe�i� pr�stup k vy�iadan�m d�tam.",

'delete_success' => "�spe�ne zmazan�.",

'delete_fail' => "Zmazanie ne�spe�n�.",

'orders' => "Objedn�vky",

'all_orders' => "V�etky objedn�vky ulo�en� v datab�ze.",

'order_no' => "�. objed.",

'status' => "Stav",

'date_time' => "D�tum/�as",

'customer' => "Z�kazn�k",

'ip_address' => "IP adresa",

'cart_total' => "Suma spolu",

'action' => "�innos�",

'no_orders_in_db' => "V datab�ze nie s� �iadne objedn�vky.",

'order_email' => "V�en� %s,\n\nStav Va�ej objedn�vky ��slo: %s sa zmenil na %s\n\n",

'email_staff_comments' => "N� person�l pridal k objedn�vke tieto pozn�mky:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "T�to spr�va bola zaslan� automaticky z %s",

'email_subj_status_change' => "Zmena stavu objedn�vky:",

'order_no2' => "Objedn�vka ��slo:",

'print_packing_slip' => "Vytla�i� visa�ku k baleniu",

'customer_info' => "Inform�cie o z�kazn�kovi",

'invoice_address' => "Faktura�n� adresa:",

'delivery_address' => "Adresa doru�enia:",

'contact_info' => "Kontaktn� inform�cie:",

'tel' => "Tel:",

'mobile' => "Mobil:",

'email' => "E-mail:",

'customer_comments' => "Pozn�mky z�kazn�ka:",

'no_comments_left' => "Bez pozn�mok.",

'order_summary' => "S�hrn objedn�vky",

'product' => "Tovar",

'code' => "K�d",

'quantity' => "Mno�stvo",

'price' => "Cena",

'download_link' => "Linka k stiahnutiu:",

'warn_reset' => "Tu vynulujete po�et stiahnut� a pred�ite �as platnost� d�t k stiahnutiu.",

'reset_link' => "Zru�i� odkaz",

'download_stats' => "Stiahnut� (%s) kr�t. Odkaz strat� platnos� %s",

'ip_address2' => "IP Adresa:",

'order_date_time' => "�as objedn�vky:",

'payment_method' => "Sp�sob platby:",

'ship_method' => "Sp�sob doru�enia:",

'subtotal' => "Medzis��et:",

'total_tax' => "DPH:",

'shipping' => "Doru�enie:",

'grand_total' => "SPOLU:",

'order_notfound' => "Objedn�vka ��slo %s sa ned� n�js�.",

'order_status' => "Stav objedn�vky",

'shipping_date' => "D�tum exped�cie:",

'ship_today' => "Expedova� dnes",

'modify_status' => "Zmeni� stav:",

'staff_comments' => "Pozn�mky person�lu:",

'info_not_sent_customer' => "(T�to inform�cia NEBUDE zaslan� z�kazn�kovi!)",

'inform_customer' => "Informova� z�kazn�ka:",

'customer_notified' => "(Za�krtnite, ak chcete, aby bol z�kazn�k informovan� o zmene priebehu objedn�vky.)",

'comments_2_customer' => "Pozn�mky pre z�kazn�ka:",

'comments_2_customer_desc' => "(Toto bude pridan� do automaticky generovan�ho e-mailu, ktor� bude informova� z�kazn�ka o zmene stavu jeho objedn�vky.)",

'save_order_status' => "Ulo�i� stav objedn�vky",

'paid_by' => "Zaplatil:",

'delivered_to' => "Doru�i�:",

'invoice_reciept_for' => "Fakt�ra / Doklad za:",

'order_of_time' => "objedn�vku prijat�",

'order_id' => "��slo objed.:",

'digi_goods_desc' => "Ak ste si objednali d�ta k stiahnutiu, mali by ste dosta� e-mail obsahuj�ci in�trukcie k s�ahovaniu. Tie s� pr�stupn� aj z ovl�dacieho panelu V�ho konta.",

'thank_you' => "�akujeme, �e nakupujete s nami!",

);



$lang['admin']['products'] = array (

'show_featured' => "Zobrazova� v novink�ch na uv�tacej str�nke?",

'upload_new_images' => "Nahra� nov� obr�zky",

'no_images_avail' => "Prep��te, ale �iadne obr�zky nie s� k dispoz�cii.",

'prod_added_to_cat' => "Tovar bol pridan� do danej skupiny.",

'prod_not_added_to_cat' => "Chyba pri prid�van� tovaru do skupiny.",

'prod_removed_from_cat' => "Tovar bol �spe�ne odstr�neny z danej skupiny.",

'prod_not_removed_from_cat' => "Chyba pri odstra�ovan� tovaru z danej skupiny.",

'title_extraCats' => "Ostatn� skupiny tovaru",

'manage_cats' => "Ostatn� skupiny",

'master_cat' => "Hlavn� skupina:",

'close_window' => "Zatvor okno",

'img_added_to_prod' => "Obr�zok pridan� k tovaru.",

'img_not_added_to_prod' => "Chyba pri vkladan� obr�zku k tovaru.",

'img_removed' => "Obr�zok odstr�nen� od tovaru.",

'img_not_removed' => "Chyba pri odstra�ovan� obr�zku od tovaru.",

'image_management' => "�al�ie obr�zky",

'manage_images' => "�al�ie obr�zky",

'image' => "Obr�zok",

'action' => "�innos�",

'delete_success' => "�spe�ne odstr�nen�.",

'delete_fail' => "Chyba pri odstra�ovan�.",

'update_successful' => "�spe�ne zaktualizovan�.",

'update_fail' => "Chyba pri aktualizovan� skup�n.",

'add_success' => "�spe�ne pridan�.",

'add_fail' => "Chyba pri prid�van� novej skupiny tovaru.",

'prod_inventory' => "Zoznam tovaru",

'current_prods_in_db' => "Zoznam v�etk�ho aktu�lneho tovaru v datab�ze.",

'all_cats' => "V�etky kateg�rie",

'prod_name' => "N�zov tovaru",

'prod_id' => "ID tovaru",

'prod_code' => "K�d tovaru",

'master_cat2' => "Hlavn� skupina tovaru",

'stock_level' => "Mno�stvo na sklade",

'normal_price' => "Be�n� cena",

'sale_price' => "Cena vo v�predaji",

'asc' => "Vzostupnom porad�",

'desc' => "Zostupnom porad�",

'containing_text' => "obsahuj�ce text",

'filter' => "Utriedi�",

'reset' => "Vynulova�",

'id' => "ID",

'type' => "Typ",

'name' => "N�zov",

'price_sale_price' => "Cena / V�predaj",

'in_stock' => "Na sklade",

'action' => "�innos�",

'languages' => "Jazyky",

'no_products_exist' => "V datab�ze nie je �iaden tovar.",

'add_prod_desc' => "Pou�ijte formul�r ni��ie na pridanie tovaru do zoznamu.",

'product' => " Tovar",

'prod_name2' => "N�zov tovaru:",

'prod_stock_no' => "K�d tovaru:",

'auto_generated' => "(Ak nevypln�te, bude vygenerovan� n�hodn� k�d.)",

'description' => "Popis:",

'primary_lang' => "(V z�kladnom jazyku. In� jazykovv� mut�cie m��u by� pridan� nesk�r.)",

'category' => "Skupina tovaru:",

'image2' => "Obr�zok:",

'opt_and_thumbs' => "(Nepovinn�. N�h�ad bude vygenerovan� automaticky, ak bude spr�vne rozpoznan� form�t obr�zku.)",

'upload_new' => "Nahra� nov� obr�zok",

'browse_existing' => "Vybra� z obr�zkov na serveri",

'normal_price2' => "Be�n� cena:",

'sale_price2' => "Cena vo v�predaji:",

'sale_mode_desc' => "(Bude pou�it�, iba ak je obchod nastaven� do m�du v�predaj.)",

'prod_weight' => "V�ha tovaru:",

'tax_class' => "Druh DPH:",

'stock_level2' => "Mno�stvo na sklade:",

'reduce_stock_level' => "(Mno�stvo bude zn�en� po ka�dom predaji.)",

'use_stock_q' => "Uv�dza� mno�stvo?",

'product_type' => "Druh tovaru:",

'tangible' => "Hmatate�n�",

'digital' => "D�ta",

'digi_path' => "D�ta musia ma� uveden� bu� HTTP odkaz alebo kore�ov� cestu k s�boru na serveri (pozri ni��ie).",

'digi_info' => "Inform�cie k d�tam:",

'digi_desc' => "<p><strong>HTTP odkaz:</strong> http://www.domena.sk/k_stiahnutiu/stiahnut.exe<br />

				<strong>Kore�ov� cesta na serveri:</strong> /usr/local/vhosts/www.doena.sk/k_stiahnutiu/stiahnut.exe <strong>(odpor��an�!)							</strong></p>

<p>V�hoda pou�itia kore�ovej cesty na serveri je, �e d�ta m��u by� ulo�en� inde ako vo verejne pr�stupnom adres�ri. Ak je pou�it� t�to met�da, CubeCart vytvor� automaticky odkaz k stiahnutiu, ktor� vypr�� po nastavenom �ase a po�te pokusov o stiahnutie. Tieto parametre je mo�n� zmeni� vo v�eobecn�ch nastaveniach obchodu.</p>",

'prod_inv_langs' => "Zoznam tovaru - (In� jazyky)",

'use_rich_oth_lang' => "Pros�m, pou�ijte editor ni��ie, ak chcete prida� alebo upravi� tovar v in�ch jazykoch.",

'language' => "Jazyk:",

'update_prod_lang' => "Aktualizova� t�to jazykov� verziu",

'save_prod_lang' => "Ulo�i� t�to jazykov� verziu",

'other_langs_exdefault' => "Zoznam aktu�lneho tovaru v jazykoch in�ch ako je z�kladn�.",

'no_lang_exist' => "Pre tento tovar neexistuje v datab�ze �iadna in� jazykov� mut�cia.",

'opt_add_success' => "N�zov vlastnosti tovaru pridan�.",

'opt_add_fail' => "Chyba pri pridavan� vlastnosti tovaru.",

'att_add_success' => "Hodnota vlastnosti tovaru pridan�.",

'att_add_fail' => "Chyba pri prid�van� hodnoty vlastnosti tovaru.",

'assign_success' => "Vlastnos� tovaru priraden� k dan�mu tovaru.",

'assign_fail' => "Chyba pri priradzovan� vlastnosti k dan�mu tovaru.",

'product_options' => "Vlastnosti tovaru",

'product_option' => "vlastnos� tovaru",

'quick_assign' => "R�chle priradenie:",

'prod_opts_of' => "vlastnosti tovaru",

'to' => "k",

'go' => "OK",

'opt_step1' => "1. Vytvori� vlastnos� (napr. Farba)",

'opt_id' => "ID",

'opt_name' => "N�zov vlastnosti",

'warn_remove_opt' => "Ste si ist�, �e chcete odstr�ni� t�to vlastnos�? POZOR! T�TO VLASTNOS� U V�ETK�HO TOVARU A V�ETKY HODNOTY TEJTO VLASTNOSTI BUD� ODSTR�NEN� SPOLU S TOUTO VLASTNOS�OU!",

'no_options_made' => "Neboli vytvoren� �iadne vlastnosti tovaru.",

'option' => "vlastnos�",

'opt_step2' => "2. Vytvori� hodnotu danej vlastnosti (napr. �erven�)",

'option_attributes' => "Hodnoty vlastnosti",

'warn_remove_att' => "Ste si ist�, �e chcete odstr�ni� t�to hodnotu vlastnosti tovaru? POZOR! T�TO HODNOTA VLASTNOSTI BUDE ODSTR�NEN� U V�ETK�HO TOVARU S TOUTO HODNOTOU VLASTNOSTI!",

'no_attributes_made' => "Neboli vytvoren� �iadne hodnoty vlastnosti tovaru.",

'attribute' => "hodnotu",

'opt_step3' => "3. Priradi� vlastnos� a jej hodnotu k tovaru (napr. tri�ko &gt; farba &gt; �erven�)",

'option_attribute' => "Hodnota vlastnosti",

'option_price' => "Cena",

'add_subtract' => "+ / -",

'remove_opt_prod' => "Ste si ist�, �e chcete odobra� t�to vlastnos� dan�mu tovaru?",

'no_assigned_opts' => "K �iadnemu tovaru neboli vytvoren� �iadne vlastnosti.",

'prods_made_1st' => "Najprv mus� by� pridan� tovar, aby sa mohla vytvori� jeho vlastnos�.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Enable Script/Bot Flood Control?</strong><br />
Forces users to enter a code on registration, tell a friend etc to prevent bot's from spamming the store.",


//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP hostite�:",

'defaultHost' => "(implicitn�: localhost)",

'smtpPort' => "SMTP port:",

'defaultPort' => "(implicitn�: 25)",

'smtpAuth' => "Pou�i� autentifik�ciu?",

'defaultAuth' => "(implicitne: Nie)",

'smtpUsername' => "SMTP u��vate�:",

'smtpPassword' => "SMTP heslo:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "Zobrazova� novinky na uv�tacej str�nke?",

'no_latest' => "Po�et zobrazovan�ch noviniek:",

'off_line_settings' => "Nastavenia pri vypnutom obchode",

'off_line' => "Vypn�� internetov� obchod?",

'off_line_content' => "Odkaz pri vypnutom obchode:",

'off_line_allow_admin' => "Povoli� administr�torom prezera� vypnut� obchod? (vy�aduje admin sedenie)",

'store_settings' => "Nastavenia obchodu",

'edit_below' => "Pros�m, upravte nastavenia V�ho obchodu:",

'meta_data' => "META d�ta",

'browser_title' => "Titulok v prehliada�i:",

'meta_desc' => "META popis:",

'meta_keywords' => "META k���ov� slov�:",

'comma_separated' => "(oddelen� �iarkou)",

'store_co_name' => "N�zov firmy/obchodu:",

'store_address' => "Adresa obchodu:",

'country' => "Krajina:",

'zone' => "Kraj / Oblas�:",

'dirs_folders' => "Adres�re a zlo�ky",

'rootRel' => "Kore�ov� verejn� HTML cesta k obchodu:",

'include_slash' => "(vr�tane lom�tok)",

'storeURL' => "Absol�tna URL k obchodu:",

'eg_domain_com' => "napr. http://www.domena.sk",

'rootDir' => "Kore�ov� adres�r na servri:",

'eg_root_path' => "napr. /cesta/k/obchodu",

'rootRel_SSL' => "Relat�vna BEZPE�N� URL k obchodu:",

'storeURL_SSL' => "Absol�tna BEZPE�N� URL k obchodu:",

'eg_domain_SSL' => "napr. https://zabezpecena.domena.sk",

'rootDir_SSL' => "Kore�ov� BEZPE�N� adres�r servera:",

'eg_root_path_secure' => "napr. /cesta/k/zabezpec/obchodu",

'enable_ssl' => "Povoli� SSL:",

'ssl_warn' => "(Varovanie: T�to zmena bude aplikovan� okam�ite po odoslan� po�iadavky. Uistite sa, �e V� kore�ov� bezpe�n� adres�r a bezpe�n� URL je zadan� spr�vne a SSL zabezpe�enie pracuje spr�vne, sk�r ako tu nastav�te �no)",

'digital_downloads' => "S�ahovanie d�t z�kazn�kmi",

'download_expire_time' => "�as platnosti d�t:",

'seconds' => "(sek�nd)",

'download_attempts' => "Po�et pokusov o stiahnutie:",

'attempts_desc' => "(ktor� m� z�kazn�k k dispoz�cii)",

'styles_misc' => "�t�ly a in�",

'default_language' => "Implicitn� jazyk:",

'store_skin' => "Vzh�ad obchodu:",

'no_cats_per_row' => "Po�et skup�n tovaru na riadok:",

'dir_symbol' => "Symbol oddelenia skup�n:",

'prods_per_page' => "Po�et tovarov na stranu:",

'precis_length' => "D�ka detail. n�zvu tovaru:",

'chars' => " (znakov)",

'no_sale_items' => "Po�et tovarov vo v�predaji:",

'no_pop_prod' => "Po�et tovarov v rubrike ob��ben�:",

'email_name' => "E-mail meno:",

'email_name_desc' => "(bude pou�it� ako meno odosielate�a pri e-mailoch zo str�nky)",

'email_address' => "E-mail adresa:",

'email_address_desc' => "(bude pou�it� ako adresa odosielate�a pri e-mailoch zo str�nky)",

'mail_method' => "Sp�sob odosielania e-mailov:",

'mail_recommended' => "(mail je odpor��an�)",

'max_upload_size' => "Max. ve�kos� nahr�van�ch s�borov:",

'under_x_recom' => "(odpor��a sa menej ako 2.097.152)",

'max_sess_length' => "Maxim�lna doba sedenia:",

'db_settings' => "Nastavenia datab�zy",

'db_host' => "Hostite� datab�zy:",

'db_username' => "U��vate� datab�zy:",

'db_password' => "Heslo u��vate�a datab�zy:",

'db_name' => "N�zov datab�zy:",

'db_prefix' => "predpona tabuliek DB:",

'gd_settings' => "GD nastavenia",

'gd_ver' => "GD verzia:",

'gd_thumb_size' => "Ve�kosti n�h�adov:",

'gd_gif_support' => "Povoli� podporu GIF: (uistite sa, �e je povolen� na servri)",

'gd_max_img_size' => "Max ve�kos� obr�zkov:",

'gd_img_quality' => "Kvalita obr�zkov v GD:",

'recom_quality' => "(60 - 80 odpor��an�)",

'stock_settings' => "Nastavenie skladu",

'use_stock' => "Ukazova� stav z�sob?",

'allow_out_of_stock_purchases' => "Povoli� n�kup vypredan�ho tovaru?",

'weight_unit' => "Jednotka v�hy:",

'time_and_date' => "�as a d�tum",

'time_format' => "Form�t �asu:",

'time_format_desc' => "(vi�. <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "�asov� posun:",

'time_offset_desc' => "(v sekund�ch - ak sa server nach�dza v inom �asovom p�sme)",

'date_format' => "Form�t d�tumu:",

'date_format_desc' => "(Vi�. <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Lok�lne nastavenia",

'default_currency' => "Implicitn� mena",

'inc_tax_prices' => "Zahrn�� DPH do ceny?",

'sale_mode' => "Sp�sob v�predaja:",

'percent_of_all' => "Rovnak� z�ava zo v�etk�ch cien",

'ind_sale_per_item' => "Individu�lne z�avy na dan� tovar",

'sale_mode_off' => "Z�avy zak�zan�",

'sale_per_off' => "Celkov� z�ava:",

'sale_per_off_desc' => "(Precentu�lne zo v�etk�ch cien)",

'diff_dispatch' => "Povoli� odoslanie na in� ako faktura�n� adresu?",

'update_settings' => "Ulo�i� zmeny",

'update_success' => "�spe�ne zaktualizovan�.",

'update_fail' => "ne�spe�ne zaktualizovan�.",

'add_success' => "�spe�ne pridan�",

'add_fail' => "ne�spe�ne pridan�.",

'delete_success' => "�spe�ne zmazan�.",

'delete_failed' => "Chyba pri mazan�.",

'currencies' => "Meny",

'currency' => "Menu",

'currencies_desc' => "Prida�, upravi� alebo zmaza� meny:",

'c_code' => "K�d",

'c_name' => "N�zov",

'c_value' => "Hodnota",

'symbol_left' => "Symbol v�avo",

'symbol_right' => "Symbol vpravo",

'decimal_places' => "Desatin�ch miest",

'last_updated' => "Posledn� �prava",

'c_status' => "Stav",

'no_currencies' => "V datab�ze nie s� meny �iadneho �t�tu.",

'countries' => "Krajiny",

'country' => "Krajina",

'edit_countries_below' => "Prida�, upravi� alebo zmaza� krajiny:",

'disable' => "Zak�za�",

'enable' => "Povoli�",

'iso' => "ISO",

'iso_name' => "N�zov",

'iso3' => "ISO3",

'num_code' => "��s. k�d",

'action' => "�innos�",

'warn_del_country' => "Ste si ist�, �e chcete maza�? V�etky kraje �i oblasti pod danou krajinou bud� zmazan�.",

'no_countries_in_db' => "V datab�ze nie s� �iadne krajiny.",

'edit_counties' => "Prida�, upravi� alebo zmaza� kraj �i oblas�:",

'no_counties_in_db' => "V datab�ze nie s� �iadne kraje �i oblasti.",

'tax_Settings' => "Nastavenie DPH",

'edit_locale_below' => "Upravi� lok�lne nastavenia:",

'tax_only_to' => "Pou�i� DPH IBA v nasledovn�ch oblastiach:",

'manage_tax_below' => "Upravte r�zne druhy DPH. Tie m��u by� pou�it� pri ka�dom tovare, tak�e m��ete vytvori� v�nimky z DPH pri tovaroch a r�zne �rovne DPH pre r�zne typy tovaru.",

'tax_class2' => "Trieda DPH",

'rate_per' => "sadzba (%)",

'no_taxes_setup' => "Nie je mo�n� �iadna �prava DPH.",

'tax' => "DPH",

);



$lang['admin']['stats'] = array(

'store_stats' => "�tatistiky obchodu",

'choose_view' => "Vyberte si �tatistiku, ktor� chcete zobrazi�:",

'search_terms' => "H�adan� v�razy",

'product_pop' => "Najpred�vanej�� tovar",

'cust_online' => "Pr�ve nakupuj�ci z�kazn�ci",

'search_terms_order_by' => "H�adan� v�razy (zoraden� pod�a po�tu v�skytov)",

'sorry_no_data' => "Za posledn�ch 15 min�t nebol na str�nke nikto.",

'product_pop_ordered_by' => "Ob��benos� tovaru (zoraden� pod�a po�tu viden�)",

'cust_active' => "Z�kazn�ci, ktor� boli na str�nke za posledn�ch 15 min�t.",

'hash' => "#",

'customer' => "Z�kazn�k",

'location' => "Odkaz zo str�nky",

'sess_start_time' => "Za�iatok sedenia",

'last_click_time' => "Posledn� pr�stup",

'sess_length' => "Doba sedenia",

'geust' => "Hos�",

'signed_in' => "Prihl�sen�",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "UPOZORNENIE: Do hlavn�ho konfigura�n�ho s�boru 'includes/global.inc.php' je mo�n� zapisova� a t�m je V� obchod vystaven� riziku. Zme�te mu �o najsk�r pr�va z�pisu na 0644.",

'401' => "Chyba 401: Nem�te pr�stupov� pr�va na t�to str�nku. Po�iadajte superu��vate�a, aby V�m umo�nil pr�stup.",

'welcome_note' => "Vitajte v ovl�dacom paneli CubeCart-u",

'last_login' => "Posledn� prihl�senie ",

'by' => "na konto",

'failed' => "zlyhalo.",

'store_overview' => "V�eobecn� inform�cie:",

'version' => "verzia:",

'visit_cc' => "Nav�t�vi� Server CubeCart-u k s�ahovaniu",

'no_products' => "Tovarov�ch polo�iek:",

'no_customers' => "Registrovan�ch z�kazn�kov:",

'img_upload_size' => "Objem nahran�ch obr�zkov:",

'no_orders' => "Objedn�vok:",

'quick_search' => "R�chle h�adanie:",

'order_no' => "��slo objedn�vky:",

'search_now' => "H�ada�",

'customer' => "Z�kazn�k:",

'login_failed' => "Prihl�senie zlyhalo! U��vate�ske meno alebo heslo bolo zadan� nespr�vne.",

'new_pass_sent' => "Nov� heslo bolo zaslan� e-mailom",

'no_admin_sess' => "�iadne administr�torske sedenie nie je akt�vne.",

'login_fail_2' => "Prihl�senie zlyhalo. Sk�ste znova.",

'login_below' => "Prihl�ste sa:",

'username' => "U��vate�:",

'password' => "Heslo:",

'request_pass' => "Po�iada� o heslo",

'login' => "Prihl�si� sa",

'logout_failed' => "Odhl�senie zlyhalo, lebo nebolo pr�tomn� �iadne administr�torsk� sedenie.",

'reset_pass_email' => "V�en� %s,

Vy alebo niekto, kto sa za V�s vyd�va, po�iadal o vynulovanie V�ho hesla.

Va�e nov� �daje s�:

~~~~~~~~~~~~~~~~~~~~~~~~~~
U��vate�: %s
Heslo: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Tento e-mail bol zaslan� z linky %s/admin/requestPass.php\n

IP adresa odosielate�a: %s",

'pass_reset_failed' => "Nulovanie hesla zlyhalo.",

'enter_email_below' => "Uve�te Va�u e-mailov� adresu:",

'email_address' => "E-mail:",

'send_pass' => "Odosla� heslo",

);



$lang['admin']['nav'] = array(

'permission_error' => "Nem�te tu pr�vo pr�stupu.",

'navigation' => "Navig�cia",

'admin_home' => "Domov",

'store_home' => "Obchod",

'store_config' => "Nastavenia obchodu",

'gen_settings' => "V�eobecn�",

'taxes' => "DPH",

'countries_zones' => "Krajiny a oblasti",

'currencies' => "Meny",

'modules' => "Moduly",

'shipping' => "Sp�soby doru�enia",

'gateways' => "Sp�soby platby",

'affiliates' => "Partneri",

'catalog' => "Katal�g",

'view_products' => "Zoznam tovaru",

'add_product' => "Prida� tovar",

'product_options' => "Mo�nosti tovaru",

'view_categories' => "Zoznam skup�n",

'add_categories' => "Prida� skupinu",

'customers' => "Z�kazn�ci",

'view_customers' => "Zoznam z�kazn�kov",

'email_customers' => "E-mail z�kazn�kom",

'orders' => "Objedn�vky",

'file_manager' => "Spr�vca s�borov",

'manage_images' => "Organiz�r obr�zkov",

'upload_images' => "Nahra� obr�zok",

'statistics' => "�tatistiky",

'view_stats' => "Zobrazi� �tatistiky",

'documents' => "Dokumenty",

'homepage' => "Uv�tacia str�nka",

'site_docs' => "Dokumenty str�nky",

'misc' => "R�zne",

'server_info' => "Info o serveri",

'admin_users' => "Spr�vcovia",

'administrators' => "Administr�tori",

'admin_sessions' => "Sedenia spr�vcov",

);



$lang['admin']['incs'] = array(

'administration' => "Spr�va obchodu",

'logged_in_as' => "Prihl�sen�:",

'logout' => "Odhl�si� sa",

'change_pass' => "Zmeni� heslo",

'error_editing' => "Chyba pri pokuse o �pravu. Vstupn� d�ta neboli typu pole.",

'config_updated' => "Konfigur�cia zaktualizovan�. Uistite sa, �e pr�stupov� pr�va s�boru boli znova nastaven� na p�vodn� hodnoty.",

'cant_write' => "Nie je mo�n� otvori� s�bor '%s' pre z�pis. Sk�ste zmeni� hodnotu CHMOD na 0777. Nezabudnite ju nastavi� sp� na 0644!",

'db_config_updated' => "Konfigur�cia zaktualizovan�.",

'db_cant_write' => "Chyba pri aktualiz�cii!",

'select_above' => "Vyberte vy��ie",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "�no";

$lang['front']['no'] = "Nie";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "U�ito�n� odkazy",

'reg_and_checkout' => "Registr�cia a vy��tovanie",

'cont_shopping' => "Pokra�ova� v n�kupe",

'edit_del_add' => "Upravi� adr. doru�.",

'edit_inv_add' => "Upravi� faktur. adr.",

'empty_cart' => "Vypr�zdni� ko��k",

'prev_page' => "Nasp�",

'homepage' => "Domov",

'shop_by_cat' => "Skupiny tovaru",

'sale_items' => "V�predaj",

'save' => "U�etrite",

'currency' => "Mena",

'information' => "Inform�cie",

'products' => "Druhov tovaru:",

'categories' => "Skup�n tovaru:",

'prices' => "Ceny:",

'language' => "Jazyk",

'mailing_list' => "Zasielanie spr�v",

'subscribe_below' => "Chcete by� informovan� o novink�ch?",

'email' => "E-mail:",

'join_now' => "Zap�sa� sa",

'already_subscribed' => "Emailov� adresa %s u� bola zap�san� do n�ho zoznamu predt�m. Prihl�ste sa na Va�e konto, ak ho chcete zru�i�.",

'enter_valid_email' => "Pros�m uve�te platn� e-mailov� adresu.",

'added_to_mail' => "�akujeme, e-mail %s bol pridan� do n�ho zoznamu adres�tov.",

'subscribed_to_mail' => "Thank you, %s has been subscribed to our mailing list.",

'popular_products' => "Ob��ben� tovar",

'featured_prod' => "Novinky",

'sale_items' => "V�predaj",

'search_for' => "H�ada�:",

'go' => "OK",

'welcome_back' => "Vitajte",

'logout' => "Odhl�si� sa",

'your_account' => "Va�e konto",

'welcome_guest' => "Neprihl�sen�",

'login' => "Prihl�si� sa",

'register' => "Registrova� sa",

'shopping_cart' => "N�kupn� ko��k",

'basket_empty' => "V� ko��k je pr�zdny.",

'items_in_cart' => "Polo�ky v ko��ku:",

'total' => "Spolu:",

'view_basket' => "Uk�za� ko��k",

);



$lang['front']['account'] = array(

'your_account' => "Va�e konto",

'personal_info' => "Osobn� inform�cie",

'order_history' => "Va�e objedn�vky",

'change_password' => "Zmeni� heslo",

'newsletter' => "Zasielanie noviniek",

'login_to_view' => "Mus�te sa prihl�si�, aby ste videli t�to str�nku.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Zadali ste nespr�vne heslo.",

'conf_not_match' => "Potvrdzuj�ce heslo nes�hlas� s novo zadan�m.",

'change_pass' => "Zmeni� heslo",

'password_updated' => "�akujeme, Va�e heslo bolo aktualizovan�.",

'change_pass_below' => "Zmeni� Va�e heslo:",

'old_pass' => "Star� heslo:",

'new_pass' => "Nov� heslo:",

'confirm_pass' => "Potvr�te heslo:",

'submit' => "Odosla�",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Prep��te",

'expired' => "Va�a linka k stiahnutiu expirovala alebo nie je platn�.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Zabudnut� heslo",

'email' => "E-mail:",

'send_pass' => "Posla� heslo",

'reset_email' => "V�en� %s %s,

Vy alebo niekto, kto predstiera, �e ste to Vy po�iadal o vynulovanie V�ho hesla. Va�e nov� pr�stupov� �daje s�:

~~~~~~~~~~~~~~~~~~~~~~~~~~
U��vate�: %s
Heslo: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
Ak sa chcete prihl�si� teraz, kliknite na odkaz:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Tento e-mail bol odoslan� z %s
IP Adresa odosielate�a: %s",

'new_pass_sent' => "Nov� heslo bolo zaslan� na %s.",

'email_not_found' => "Prep��te, ale t�to e-mailov� adresa nebola n�jden� v na�om zozname adres�tov.",

'enter_email' => "Zadajte Va�u e-mailov� adresu, ktor� ste pou�ili pri registr�cii, aby sme V�m mohli zasla� do�asn� nov� heslo:",

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

'newOrderMsg' => "Z�kazn�k pr�ve dokon�il objedn�vku %s. Ak ju chcete zobrazi�, n�sledujte odkaz: \n\n%s",

'newOrderSubj' => "Bola zadan� nov� objedn�vka",

'payment' => "Platba",

'cart' => "Ko��k",

'address' => "Adresa",

'payment' => "Platba",

'complete' => "Ukon�en�",

'fill_out_below' => "Vyplnite formul�r:",

'transferring' => "Prechod k platbe",

'go_now' => "OK",

'continue' => "Pokra�ova�",

'choose_method' => "Zvo�te sp�sob platby:",

'your_comments' => "Va�e pozn�mky:",

'none_configured' => "Prep��te, ale nie s� prednastaven� �iadne met�dy platby.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Prihl�si� sa",

'username' => "E-mail:",

'password' => "Heslo:",

'remember_me' => "Zapam�ta� si?",

'forgot_pass' => "Zabudli ste heslo?",

'login_success' => "�spe�ne ste sa prihl�sili.",

'already_logged_in' => "U� ste prihl�sen�.",

'login_failed' => "Prihl�senie zlyhalo!",

'login_below' => "Prihl�si� sa do n�ho internetov�ho obchodu:",

);



$lang['front']['index'] = array(

'latest_products' => "Novinky",

);



$lang['front']['logout'] = array(

'logout' => "Odhl�si� sa",

'session_destroyed' => "Va� n�kup bol preru�en�.",

'no_session' => "Nebol n�jden� �iaden otvoren� n�kup, ktor� by mal by� zru�en�. Pravdepodobne ste sa sem dostali omylom.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Zasielanie noviniek",

'prefs_updates' => "Va�e vo�by k zasielaniu inform�ci� o novink�ch boli zaktualizovan�.",

'edit_prefs_below' => "Upravte pros�m Va�e vo�by k zasielaniu inform�ci� o novink�ch:",

'subscribe' => "Zap�sa� sa do zoznamu adres�tov?",

'email_format' => "Form�t e-mailu:",

'plain_text' => "Oby�ajn� text",

'html' => "HTML",

'html_abbr' => "Hypertext Markup Language",

'update' => "Ulo�i� zmeny",

'login_required' => "Mus�te sa prihl�si�, aby ste videli t�to str�nku.",

);



$lang['front']['noShip'] = array(

'sorry' => "Prep��te",

'desc' => "Do Va�ej krajiny objedn�vku nem��eme doru�i�.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Pep��te",

'desc' => "Nem��eme doru�i� objedn�vku o takejto celkovej hmotnosti.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Telef�nne ��slo mus� obsahova� iba ��slice.",

'complete_all' => "Ubezpe�te sa, �e ste vyplnili v�etky po�adovan� pol��ka.",

'email_invalid' => "Zadajte platn� e-mailov� adresu.",

'numeric_only' => "Telef�nne ��slo mus� obsahova� iba ��slice.",

'email_inuse' => "Prep��te, ale t�to e-mailov� adresu u� niekto pou��va.",

'update_email' => "V�en� %s %s,

Dostali ste tento potvrdzuj�ci e-mail, aby sme V�s informovali, �e Va�e osobn� inform�cie boli �spe�ne aktualizovan� v na�om syst�me. Ak m�te pocit, �e Va�e konto bolo aktualizovan� inou osobou ako Vami, bezodkladne n�s informujte.\n\n

Tento e-mail bol odoslan� z %s\n

IP adresa odosielate�a: %s",

'update_email_subj' => "Osobn� �daje s� zaktualizovan�",

'personal_info' => "Osobn� �daje",

'account_updated' => "Va�e konto bolo aktualizovan�. M��ete ho znova �pravi� ni��ie.",

'edit_below' => "Upravi� Va�e osobn� inform�cie:",

'title' => "Titul:",

'first_name' => "Meno:",

'last_name' => "Priezvisko:",

'email' => "E-mail:",

'address' => "Adresa:",

'town' => "Mesto:",

'county' => "Kraj / Oblas�:",

'postcode' => "PS�:",

'country' => "Krajina:",

'phone' => "Telef�n:",

'mobile' => "Mobil:",

'update_account' => "Ulo�i�",

'login_required' => "Mus�te sa prihl�si�, aby ste videli t�to str�nku.",

);



$lang['front']['reg'] = array(

'fill_required' => "Ubezpe�te sa, �e ste vyplnili v�etky po�adovan� pol��ka.",

'pass_not_match' => "Ubezpe�te sa, �e sa Vami zadan� hesl� zhoduj�.",

'enter_valid_email' => "Zadajte platn� e-mailov� adresu.",

'enter_valid_tel' => "Telef�nne ��slo mus� obsahova� iba ��slice.",

'email_in_use' => "Prep��te, ale t�to e-mailov� adresu u� niekto pou��va.",

'note_required' => "Nezabudnite, �e pol��ka ozna�en� hviezdi�kou (*) s� vy�adovan� pri registr�cii.",

'express_reg' => "R�chla registr�cia",

'submit_and_cont' => "Odosla� a pokra�ova�",

'personal_details' => "Osobn� inform�cie",

'address' => "Adresa",

'title' => "Oslovenie:",

'title_desc' => "(P�n/Pani)",

'first_name' => "Krstn� meno:",

'address2' => "Adresa:",

'last_name' => "Priezvisko:",

'email_address' => "E-mailov� adresa:",

'town' => "Mesto:",

'phone' => "Telef�n:",

'county' => "Kraj / Oblas�:",

'mobile' => "Mobil:",

'country' => "Krajina:",

'postcode' => "PS�:",

'security_details' => "Bezpe�nostn� detaily",

'choose_pass' => "Zvo�te heslo:",

'conf_pass' => "Potvr�te heslo:",

'privacy_settings' => "Osobn� nastavenia",

'receive_emails' => "Chcem dost�va� e-maily o novink�ch",

'email_format' => "Form�t e-mailu:",

'styled_html' => "Form�tovan� HTML",

'plain_text' => "Oby�ajn� text",

'tandcs' => "Obchodn� podmienky.",

'please_read' => "Uistite sa, �e ste si pre��tali na�e",

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
Ak chcete zobrazi� podrobnosti o tomto produkte, kliknite pros�m na nasleduj�cu linku:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Tento e-mail odoslal %s
IP adresa odosielate�a: %s",

'email_subject' => "Odkaz od: %s",

'tellafriend' => "Dajte vedie� zn�memu",

'message_sent' => "�akujeme V�m, V� odkaz obr�al <strong>%s</strong> o '%s'. Ak chcete posla� tento odkaz in�mu zn�memu, urobte tak ni��ie:",

'fill_out_below' => "Odo�lite nasleduj�ci formul�r zn�memu a my k nemu pripoj�me inform�cie o tovare: '%s'.",

'friends_name' => "Meno zn�meho:",

'friends_email' => "Jeho e-mail:",

'your_name' => "Va�e meno:",

'your_email' => "V� e-mail:",

'message' => "Odkaz:",

'default_message' => "Na�iel som toto: '%s' a pomyslel som si, �e by �a to mohlo zauj�ma�.",

'send' => "Posla�",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Odhl�si� sa",

'email' => "E-mail:",

'go' => "OK",

'enter_valid_email' => "Pros�m uve�te platn� e-mailov� adresu.",

'email_removed' => "�akujeme V�m, z�znam: <strong>%s</strong> bol odstr�nen� z n�ho zoznamu adres�tov.",

'email_not_found' => "Prep��te, ale z�znam: <strong>%s</strong> nebol n�jden� v na�om zozname adres�tov alebo u� bol zru�en� predt�m.",

'enter_email_below' => "Pros�m uve�te e-mailov� adresu, ktor� m� by� odstr�nen� z n�ho zoznamu adres�tov:",

);



$lang['front']['viewCat'] = array(

'search_results' => "V�sledky h�adania",

'sale_items' => "V�predaj",

'image' => "Obr�zok",

'description' => "Popis",

'price' => "Cena",

'products_in' => "Tovar v skupine:",

'buy' => "K�pi�",

'more' => "Detaily",

'out_of_stock' => "VYPREDAN�",

'no_products_match' => "Bohu�ia� �iaden tovar neobsahuje k���ov� slovo:",

'no_prods_in_cat' => "V tejto skupine nie je �iaden tovar.",

);



$lang['front']['viewDoc'] = array(

'error' => "Chyba",

'does_not_exist' => "Tak� dokument neexistuje.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Obj. ��slo:",

'customer_info' => "Z�kazn�k:",

'invoice_address' => "Faktura�n� adresa:",

'delivery_address' => "Adresa doru�enia:",

'na' => "---",

'customer_comments' => "Pozn�mky z�kazn�ka:",

'order_summary' => "Objedn�vka:",

'product' => "Tovar",

'product_code' => "K�d tovaru",

'quantity' => "Mno�stvo",

'price' => "Cena",

'download_here' => "Tu stiahn��",

'review_below' => "Prezrite si pros�m Va�u objedn�vku:",

'order_date_time' => "D�tum a �as objedn�vky:",

'payment_method' => "Sp�sob platby:",

'ship_method' => "Sp�sob doru�enia:",

'subtotal' => "Medzis��et:",

'total_tax' => "DPH:",

'shipping' => "Po�tovn�:",

'grand_total' => "Hotovos�:",

'order_not_found' => "Tak� objedn�vacie ��slo sa ned� n�js�.",

'login_required' => "Mus�te sa prihl�si�, aby ste videli t�to str�nku.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Va�e objedn�vky",

'orders_listed_below' => "V�etky objedn�vky pod t�mto ��tom:",

'order_no' => "Obj. ��slo",

'status' => "Stav",

'date_time' => "D�tum/�as",

'action' => "Vo�ba",

'view' => "Zobrazi�",

'no_orders' => "V na�om syst�me nem�me �iadne z�znamy Va�ich objedn�vok. Ak m�te pocit, �e to tak nem� by�, kontaktujte n�s �o najsk�r.",

'login_required' => "Mus�te sa prihl�si�, aby ste videli t�to str�nku.",

);



$lang['front']['viewProd'] = array(

'product' => "Tovar",

'product_info' => "Inform�cie o tovare",

'price' => "Cena:",

'product_code' => "K�d tovaru:",

'tellafriend' => "Dajte vedie� zn�memu",

'quantity' => "Mno�stvo:",

'more_images' => "[+] Viac obr�zkov",

'add_to_basket' => "Prida� do ko��ka",

'location' => "Skupina:",

'no_instock' => "Skladom:",

'instock' => "Skladom",

'out_of_stock' => "VYPREDAN�",

'prod_opts' => "Mo�nosti tovaru:",

'prod_not_found' => "Tak� tovar nemo�no n�js�.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "V� ko��k je moment�lne pr�zdny.",

'allready_customer' => "Ste u� zaregistrovan� v na�om internetovom obchode?",

'login_below' => "Pros�m prihl�ste sa:",

'username' => "E-mail:",

'password' => "Heslo:",

'remember_me' => "Zapam�ta� si?",

'login' => "Prihl�si�",

'forgot_pass_q' => "Zabudli ste heslo?",

'need_register' => "Potrebujete sa zaregistrova�?",

'express_register' => "Zr�chlen� registra�n� str�nku vyplnite �ahko a r�chlo.",

'reg_and_cont' => "Zaregistrova� sa a pokra�ova�",

'cont_shopping_q' => "Pokra�ova� v n�kupe?",

'cont_shopping' => "Pokra�ova� v n�kupe",

'cont_browsing' => "Ak chcete pokra�ova� v prezeran� ako hos� bez loginu, kliknite na tla�idlo ni��ie. Nebudete schopn� urobi� n�kup sk�r, ako sa zaregistrujete.",

);





$lang['front']['cart'] = array(

'free_shipping' => "Doru�enie zdarma",

'view_cart' => "Zobrazi� ko��k",

'cart' => "Ko��k",

'address' => "Adresa",

'payment' => "Platba",

'complete' => "Dokon�i�",

'add_more' => "Chcete prida� viac polo�iek? Zadajte k�d tovaru:",

'add' => "Prida�",

'qty' => "ks",

'product' => "Tovar",

'code' => "K�d",

'stock' => "Skladom",

'price' => "Cena",

'line_price' => "Spolu",

'delete' => "Zmaza�",

'remove' => "Odstr�ni� polo�ku",

'invoice_address' => "Faktura�n� adresa",

'delivery_address' => "Adresa doru�enia",

'title' => "Titul:",

'first_name' => "Krstn� meno:",

'last_name' => "Priezvisko:",

'address2' => "Adresa:",

'town' => "Mesto:",

'county' => "Kraj / Oblas�:",

'postcode' => "PS�:",

'country' => "Krajina:",

'edit_invoice_address' => "Upravi� faktura�n� adresu",

'edit_delivery_address' => "Upravi� adresu doru�enia",

'stock_warn' => "objednali ste si viac polo�iek ako m�me pr�ve na sklade. Va�a objedn�vka sa m��e oneskori�, pokia� nedoobjedn�me potrebn� mno�stv�.",

'amount_capped' => "Prep��te, ale nem��eme V�m zasla� v��ie mno�stvo ako m�me na sklade.<br />Mno�stvo tejto polo�ky bolo upraven� na",

'na' => "---",

'shipping' => "Po�tovn�:",

'tax' => "DPH:",

'subtotal' => "Medzis��et:",

'cart_total' => "Hotovos�:",

'if_changed_quan' => "(ak ste zmenili nejak� mno�stv�)",

'update_cart' => "Prer�ta� ko��k",

'continue' => "Pokra�ova�",

'cart_empty' => "V� n�kupn� ko��k je moment�lne pr�zdny.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Potvrdenie objedn�vky",

'cart' => "Ko��k",

'address' => "Adresa",

'payment' => "Platba",

'complete' => "Dokon�i�",

'order_success' => "�akujeme, Va�a objewdn�vka bola �spe�ne ukon�en�! Budeme radi, ak sem zav�tate op�.",

'order_fail' => "Bohu�ia� Va�a objedn�vka nebola �spe�n�!",

'try_again_desc' => "M��ete sk�si� potvrdi� obsah V�ho ko��ka znova:",

'try_again' => "Sk�si� znovu",

'request_login' => "Mus�te sa prihl�si�, aby ste videli t�to str�nku.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "V�en� %s,

�akujeme za Va�u objedn�vku �islo: %s uroben� na %s

Transakcia prebehla bez probl�mov a tovar V�m bude pri prvej pr�le�itosti zaslan� (ak je dostupn�).

~~~~~~~~~~~~~~~~~~~~~~~~~~
Meno: %s
Medzis��et: %s
Po�tovn� a baln�: %s
DPH: %s
Spolu: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Faktura�n� adresa:
%s
%s
%s
%s
%s
%s
%s

Adresa doru�enia:
%s
%s
%s
%s
%s
%s
%s

Sp�sob platby: %s
Sp�sob doru�enia: %s",

'inv_email_body_2' => "\nVa�e pozn�mky: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Obsah objedn�vky:\n",

'inv_email_body_4' =>"Tovar: %s\n",

'inv_email_body_5' => "Mo�nosti: %s\n",

'inv_email_body_6' => "Mno�stvo: %s
K�d tovaru: %s
Cena: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Obj. ��slo: ",

'digi_email_body1' => "V�en� %s,

�akujeme za Va�u objedn�vku ��slo: %s uroben� na %s

Ni��ie n�jdete odkazy na stiahnutie ��slicov�ch produktov, ktor� ste si objednali.

D�LE�IT�: tieto odkazy expiruj� %s a Vy m�te %s pokus(y) na ich stiahnutie. Ak by ste mali probl�my, obr�te sa na n�s s �islom tejto objedn�vky.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
ODKAZ K STIAHNUTIU:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Mo�nos� stiahnutia: ",

);



$lang['misc'] = array(

'pages' => " str�n(y) ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "Klientsk� prehliada�:",

'server_software' => "Softv�r na serveri:",

'perofOrderSub' => " % zo sumy objedn�vky",

'freeForOrdOver' => "Bezplatne pre objedn�vky nad",

'freeShipping' => "Bezplatn� doru�enie",

'byWeight1stClass' => "Pod�a hmotnosti (1. trieda)",

'1stClass' => "(1.trieda)",

'byWeight2ndClass' => "pod�a hmotnosti (2. trieda)",

'2ndClass' => "(2. trieda)",

'flatRate' => "Po�tou - pevn� sadzba",

'free' => "Bezplatne",

'national' => "N�rodn�",

'international' => "Medzin�rodn�",

'byCategory' => "Pod�a skupiny tovaru",

'perItem' => "Za polo�ku",

'nextDayEarlyAm' => "Nasleduj�ci de� zav�as r�na",

'nextDayAir' => "Nasleduj�ci de� letecky",

'nextDayAirSaver' => "Nasleduj�ci de� letecky s odkladom",

'2ndDayEarlyAm' => "O dva dni zav�as r�na",

'2ndDayAir' => "O dva dni letecky",

'3daySelect' => "Tret� de�",

'ground' => "Pozemne",

'canadaStandard' => "Canada �tandard",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Fakt�ra na",

'deliverTo' => "Doru�i�",

'postalOrderFor' => "Po�tov� objedn�vka pre",

'orderOf' => "Objedn�vka",

'orderID' => "��slo objedn�vky:",

'product' => "Tovar",

'code' => "K�d",

'qty' => "Ks",

'price' => "Cena",

'shippingMethod' => "Sp�sob doru�enia:",

'subtotal' => "Medzis��et:",

'totalTax' => "DPH spolu:",

'totalShipping' => "Po�tovn� spolu:",

'grandTotal' => "SPOLU:",

'payByCheck' => "Platba �ekom",

'payTo' => "Vyp�te pros�m, �ek na",

'payByCard' => "Platba kartou",

'cardType' => "Typ karty:",

'cardNo' => "��slo karty:",

'3-4DigiId' => "3-4 ��slica ID:",

'expiryDate' => "D�tum platnosti:",

'issueDate' => "D�tum vydania:",

'issueNo' => "��slo vydania:",

'signature' => "Podpis:",

'payByTransfer' => "Platba bankov�m prevodom",

'bankName' => "N�zov banky:",

'accountName' => "N�zov ��tu:",

'sortCode' => "Pred��slie:",

'accountNo' => "��slo ��tu:",

'swiftCode' => "R�chly k�d:",

'bankAddress' => "Adresa banky:",

'thanks' => "�akujeme V�m za n�kup!",

'postalAddress' => "Po�tov� adresa:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "�ak� na spracovanie",

'2' => "Spracov�va sa",

'3' => "Vybaven�",

'4' => "Odmietnut�",

'5' => "Falo�n�",

);

$lang['admin']['cats'] = array (

'delete_success' => "Jazyk skupiny tovaru �spe�ne zru�en�.",

'delete_fail' => "Ne�spe�n� zru�enie.",

'update_fail' => "Ne�spe�n� aktualiz�cia.",

'update_success' => "�spe�ne zaktualizovan�.",

'add_success' => "�spe�ne pridan�.",

'add_fail' => "Chyba pri prid�van� jazyka skupiny tovaru.",

'site_cats_other_lang' => "Skupiny tovaru - (in� jazyky)",

'site_cat_other_lang' => "Skupina tovaru - (in� jazyky)",

'cat_name' => "N�zov skupiny:",

'language' => "Jazyk:",

'update_cat' => "Aktualizova� skupinu",

'save_cat' => "Ulo�i� skupinu",

'current_cat_list' => "Zoznam v�etk�ch aktu�lnych jazykov skup�n tovaru. M��u by� kedyko�vek upravovan� a/alebo zmazan�.",

'cat_name2' => "N�zov skupiny",

'action' => "�innos�",

'no_site_cats' => "T�to skupina tovaru e�te nebola prelo�en� do in�ho jazyka.",

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