<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.17
|   ========================================
|   by Alistair Brookbanks
|   CubeCart is a Trade Mark of CubeCart Limited
|   Copyright CubeCart Limited 2005 - 2014. All rights reserved.
|   CubeCart Limited,
|   5 Bridge Street,
|   Bishops Stortford,
|   HERTFORDSHIRE.
|   CM23 2JU
|   UNITED KINGDOM
|   http://www.CubeCart.com
|   UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Date: Tuesday, 17th July 2007
|   Email: sales (at) cubecart (dot) com
|   License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|   lang.inc.php
|   ========================================
|   Polish (PL) Language File
|   Translated from 'en_EN' lang. file by Tadeusz Kowalski - tjk2003@interia.pl 
+------------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'pl_PL');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Tak";

$lang['admin']['no'] = "Nie";

$lang['admin']['edit'] = "Edytuj";

$lang['admin']['delete'] = "Usuñ";

$lang['admin']['delete_q'] = "Czy jeste¶ pewien, ¿e chcesz to usun±æ?";

$lang['admin']['add'] = "Dodaj";

$lang['admin']['add_new'] = "Dodaj nowy";

$lang['admin']['write'] = "Wpisz";

$lang['admin']['read'] = "Czytaj";

$lang['admin']['na'] = "N/A"; // jako niewykonywalne

$lang['admin']['all'] = "Wszystko";

$lang['admin']['remove'] = "Usuñ";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array(

'del_success' => "Usuniêto poprawnie.",

'del_failed' => "Nie usuniêto.",

'update_success' => "Zaktualizowano poprawnie.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_failed' => "Nie dodano.",

'administrators_title' => "Administrator",

'current_users' => "Stali operatorzy Admina",

'id' => "Id",

'user_notes' => "Operator / Notatki",

'no_logins' => "Brak wpisów",

'super_user' => "Super operator?",

'email' => "E-mail",

'action' => "Akcja",

'add_admin' => "Chcesz dodaæ operatora - u¿yj poni¿szego formularza.",

'full_name' => "Pe³na nazwa:",

'username' => "Nazwa operatora:",

'administrator' => "Administrator",

'email2' => "Email:",

'password' => "Has³o:",

'pass_warn' => "(wpisz nowe has³o, tylko gdy chcesz je naprawdê zmieniæ)",

'make_super' => "Utworzyæ super operatora?",

'notes' => "Notatka:",

'permissions' => "Pozwolenia",

'pass_updated' => "Has³o zmieniono.",

'pass_not_updated' => "Has³a nie zmieniono.",

'change_pass_below' => "Proszê zmieniæ has³o:",

'old_pass' => "Stare has³o:",

'new_pass' => "Nowe has³o:",

'confirm_pass' => "Potwierd¼ has³o:",

'perms_updated' => "Pozwolenia zaktualizowano.",

'set_perms' => "Ustaw zezwolenia dla tego operatora.",

'section' => "Sekcja",

'nb_bulk' => "Uwaga! Na masowe wysy³anie emaili do klientów nale¿y wpierw uzyskaæ ich pisemn± zgodê.",

'admin_sessions' => "Sesje Admina",

'sessions_desc' => "Poni¿ej pokazano ostatnie próby logowania do Admina. Zwróæ uwagê i upewnij siê czy nie by³o to w³amanie. Zaleca siê usilnie zmieniaæ has³o Admina na nowe co jaki¶ czas.",

'login_id' => "Login ID",

'time' => "Czas",

'ip_address' => "Adres IP",

'success' => "Poprawnie",

);



$lang['admin']['categories'] = array(

'delete_success' => "Usuniêto poprawnie.",

'delete_fail' => "Nie usuniêto.",

'update_success' => "Aktualizacja poprawna.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_failed' => "Nie dodano.",

'categories' => "Kategorie",

'categories_desc' => "Poni¿ej jest lista wszystkich aktualnych kategorii w bazie danych.",

'cat_name' => "Nazwa kategorii",

'dir' => "Katalog",

'image' => "Obrazek",

'no_products' => "Liczba produktów",

'action' => "Akcja",

'cannot_del' => "Ta kategoria nie mo¿e byæ usuniêta - zawiera produkty.",

'no_cats_exist' => "Nie ma kategorii w bazie danych.",

'add_desc' => "Mo¿esz dodaæ kategorie z nielimitowan± liczb± podkategorii, za³aduj nowe obrazki lub wykorzystaj te z serwera.",

'category' => "Kategoria",

'category_name' => "Nazwa kategorii:",

'category_level' => "Poziom kategorii:",

'top_level' => "Najwy¿szy poziom",

'image_optional' => "Obrazek: (na ¿yczenie)",

'upload_new_image' => "Za³aduj nowy obrazek",

'browse_existing' => "Zobacz obrazki za³adowane",

'ship_by_cat' => "Ekspedycja wg kategorii",

'per_ship' => "Za przesy³kê:",

'per_item' => "Za pozycjê:",

'per_int_ship' => "Za przesy³kê (zagraniczn±):",

'per_int_item' => "Za pozycjê (zagraniczn±):",

);



$lang['admin']['customers'] = array(

'customers' => "Klienci",

'delete_success' => "Usuniêto poprawnie.",

'delete_fail' => "Nie usuniêto.",

'update_success' => "Dane klienta zaktualizowano poprawnie.",

'update_fail' => "Danych klienta nie zaktualizowano.",

'search_term' => "Warunek wyszukiwania:",

'reset' => "Skasuj",

'name' => "Nazwa",

'email' => "Email",

'invoice_add' => "Adres na rachunku",

'phone' => "Telefon",

'reg_ip' => "Data Rej. / Czas / IP",

'no_orders' => "Brak zamówieñ",

'action' => "Akcja",

'no_cust_exist' => "Nie ma klientów w bazie danych.",

'edit_below' => "Edytuj poni¿ej dane tego klienta:",

'title' => "Tytu³",

'first_name' => "Imiê:",

'last_name' => "Nazwisko:",

'email2' => "Email:",

'address' => "Adres:",

'town' => "Miasto:",

'county' => "Region / Województwo:",

'postcode' => "Kod pocztowy:",

'country' => "Kraj:",

'phone2' => "Telefon:",

'edit_customer' => "Edytuj klienta",

'no_download_email' => "Nie by³o emaili do pobrania.",

'email_customers' => "Email klientów",

'create_email' => "Proszê napisaæ tutaj swój email:",

'hint' => "Wzmianka:",

'click_source' => "Mo¿esz klikn±æ powy¿ej przycisk ¼ród³owy, który wkleja do dokumentu html to co ju¿ jest zrobione.",

'important' => "Wa¿ne:",

'absolute_links' => "Przygotuj wszystkie obrazki i linki tak, ¿e bêd± bezwarunkowe (np. zawieraj± nazwê domeny). W wiêkszo¶ci krajów jest obowi±zkiem daæ adresatowi mo¿liwo¶æ samodzielnego wypisania siê z list mailingowych:",

'email_subject' => "Temat emaila:",

'senders_name' => "Nazwa nadawcy:",

'senders_email' => "Email nadawcy:",

'return_path' => "Zwrot do:",

'bounce_desc' => "(¶cie¿ka zwrotna odbi³a emaile do:)", 

'send_test' => "Wys³aæ email testowy?",

'test_email_recip' => "Odbiorca emaila testowego:",

'send_email' => "Wy¶lij email",

'download_or_send' => "Wybierz - czy pobraæ adresy email klientów czy z tego miejsca wys³aæ grupê emaili.",

'please_choose' => "Proszê wybraæ:",

'used_to_download' => "(u¿yj do pobrania adresów email dla <b>BES</b> - programu  grupowego wysy³ania emaili)",

'bulk_to_subscribed' => "(wysy³aj emaile grupowo lecz TYLKO do tych, którzy s± zapisani na li¶cie mailingowej)",

'include_name' => "Wstawiæ nazwê?",

'download_email' => "Pobierz email",

'send_email' => "Wy¶lij email",

'sending_complete' => "Wysy³anie zakoñczone",


'sending' => "Wysy³anie emaila",

'recipient' => "Odbiorca:",

'prev_page' => "Poprzednia strona",

'page' => "Strona:",

'bulk_finished' => "<b>BES</b> wykona³ swoje zadanie poprawnie.",

'time_taken' => "Czas operacji:",

'recipients' => "Odbiorcy:",

);


$lang['admin']['docs'] = array(

'update_fail' => "Strona powitalna (Homepage) nie zosta³a zaktualizowana, proszê upewniæ siê czy atrybuty pliku <b>includes/static/home.inc.php</b>na to pozwalaj±.",

'update_success' => "Homepage zosta³a zaktualizowana.",

'homepage' => "Homepage",

'enabled' => "W³±czono:",

'enabled_desc' => "(je¶li nie, bêdzie u¿yty zamiennie jêzyk domy¶lny)",

'language' => "Jêzyk:",

'title' => "Tytu³:",

'use_rich_text' => "Aby dokonaæ zmian w homepage u¿yj edytora tekstowego. Przed zapisaniem zmian przegl±dnij wpierw poprawno¶æ wykonanej pracy.",

'update_homepage' => "Aktualizuj Homepage",

'delete_success' => "Usuniêto poprawnie.",

'delete_fail' => "Nie usuniêto.",

'update_success' => "Zaktualizowano poprawnie.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_fail' => "Nie dodano.",

'site_docs_other_lang' => "Umie¶æ dokument - (w innych jêzykach)",

'use_rich_text' => "Aby dodaæ lub redagowaæ dokumenty w innych jêzykach u¿yj edytora tekstowego",

'site_doc_other_lang' => "Zbiór dokumentów - (w innych jêzykach)",

'doc_name' => "Nazwa dokumentu:",

'language' => "Jêzyk:",

'update_doc' => "Aktualizuj dokument",

'save_doc' => "Zapisz dokument",

'current_doc_list' => "Lista wszystkich aktualych dokumentów jest poni¿ej. Mo¿na mieæ nielimitowan± ich liczbê i mog± byæ one zmieniane i/lub usuwane w ka¿dym czasie.",

'doc_name2' => "Nazwa dokumentu",

'action' => "Akcja",

'no_site_docs' => "Nie ma miejsca dokumentów w bazie danych.",

'site_docs' => "Zbiór dokumentów",

'site_doc' => "Umie¶æ dokument",

'languages' => "Jêzyki",

'no_docs' => "Nie umieszczono dokumentów w bazie danych.",

);



$lang['admin']['filemanager'] = array(

'image_browser' => "Przegl±darka obrazków",

'file' => "Plik:",

'no_imgs' => "¯adne obrazki nie s± dostêpne. Proszê zamkn±æ to okno i za³adowaæ tutaj jaki¶ obrazek.",

'preview' => "Widok:",

'ok' => "Ok",

'cancel' => "Anuluj",

'prod_cat_use_img' => "Tam s± produkty lub kategorie u¿ywaj±ce obrazka '%s'.",

'continue_q' => "KONTYNUOWAÆ USUWANIE?",

'site_doc_use_img' => "Tam jest miejsce dokumentu u¿ywaj±cego obrazka '%s'.",

'home_use_img' => "Obrazek '%s' jest u¿yty na stronie Homepage.",

'gallery_use_img' => "Obrazek '%s' jest u¿yty w galerii widoków produktów.",

'image_deleted' => "Obrazek usuniêty.",

'delete_failed' => "Nie usuniêto.",

'image_manager' => "Zarz±dca obrazków",

'delete_from_server' => "Poni¿ej mo¿esz usun±æ obrazki z serwera.",

'img_click_prev' => "Obrazek (kliknij do podgl±du)",

'size' => "Rozmiar",

'action' => "Akcja",

'no_images_added' => "Obrazka nie dodano.",

'prev_file' => "Przegl±daj plik",

'close_window' => "Zamknij okno",

'no_image_selected' => "Nie wybrano obrazka do podgl±du.",

'file_uploader' => "£adowarka pliku",

'upload_image' => "£aduj obrazek",

'please_browse_img' => "Zobacz swoje obrazki:",

'file_too_big' => "B³±d: %s za du¿y %s",

'img_already_exists' => "B³±d: %s ju¿ istnieje - proszê przemianowaæ plik, który próbujesz za³adowaæ lub poszukaæ zamiennika.",

'upload_too_large' => "B³±d: Nie ma ¿adnego obrazka do za³adowania lub plik by³ za du¿y dla serwera. Domy¶nie ³adowanie ograniczone do 2MB.",

'not_valid_mime' => "B³±d: %s nieodpowiedni typ obrazka.",

'image_upload_success' => "W porz±dku: %s za³adowano.",

'back' => "&laquo; Wróæ",

);



$lang['admin']['misc'] = array(

'license_form' => "Formularz licencji",

'write_error' => "B³±d zapisu pliku includes/global.inc.php. Spróbuj zmieniæ warto¶æ CHMOD na 0777. Pamiêtaj aby potem ustawiæ j± znów na 0644!",

'try_again' => "Próbuj Ponownie",

'purchase_cubecart' => "Kup CubeCart:",

'invalid_key' => "Klucz niewa¿ny lub by³ ju¿ u¿yty.",

'purchase_license_key' => "Wykup klucz licencji",

'run_unlicensed' => "Próbujesz uruchomiæ nielicencjonowan± wersjê CubeCart. Proszê wprowadziæ klucz licencji.",

'license_key' => "Klucz licencji:",

'submit_key' => "Potwierdzenie klucza",

'server_info' => "Informacja o serwerze",

'ini_set_desc' => "Poni¿sze informacje pokazuj± aktualne ustawienia ¶rodowiska serwera. Zawieraj± one wszystkie sk³adniki informacji jakie trzeba by zmieniæ, napotykaj±c problemy z CubeCart. Uwaga! Je¶li masz serwer virtualny lub wspó³dzielony jest mo¿liwe, ¿e bêdziesz mieæ ograniczon± mo¿liwo¶æ dokonywania zmian. Ta</span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> funkcja mo¿e byæ dosyæ czêsto u¿ywana do prze³amania takich ograniczeñ.",

);



$lang['admin']['orders'] = array(

'send_invoice_q' => "Status tego zamówienia zosta³ zmieniony poprawnie. Od tego momentu mo¿esz wys³aæ klientowi rachunek emailowy i daæ mu dostêp do pobrania Digitali (produktów w postaci cyfrowej). Zrób to",

'click_here' => "Kliknij Tutaj",

'send_invoice_desc' => "Je¶li status zmieni³ siê z <b>Pending</b> (Zg³oszone) na <b>Processing</b> (W trakcie) to wybierasz - Wysy³kê klientowi rachunku za pokwitowaniem i otwarcie dostêpu do Digitala (je¶li takowy produkt oferujesz).",

'delete_success' => "Usuniêto pomy¶lnie.",

'delete_fail' => "Nie usuniêto.",

'orders' => "Zamówienia",

'all_orders' => "Poni¿ej wszystkie z³o¿one zamówienia, zarejestrowane w bazie danych.",

'order_no' => "Nr Rachunku",

'status' => "Status",

'date_time' => "Data/Czas",

'customer' => "Klient",

'ip_address' => "Adres IP",

'cart_total' => "Zawarto¶æ wózka",

'action' => "Akcja",

'no_orders_in_db' => "Nie ma zamówieñ w bazie danych.",

'order_email' => "Szanowna(ny) %s,\n\n status Twojego zamówienia id: %s zosta³ zmieniony na %s\n\n",

'email_staff_comments' => "Nasz pracownik doda³ nastêpuj±cy komentarz: \n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Automatyczna wiadomo¶c, wys³ana z %s",

'email_subj_status_change' => "Zmiana statusu zamówienia:",

'order_no2' => "Zamówienie nr:",

'print_packing_slip' => "Drukuj etykietê paczki",

'customer_info' => "Informacja o kliencie",

'invoice_address' => "Adres na rachunku:",

'delivery_address' => "Adres dostawy:",

'contact_info' => "Informacje kontaktowe:",

'tel' => "Tel:",

'mobile' => "Mobile:",

'email' => "Email:",

'customer_comments' => "Komentarz klienta:",

'no_comments_left' => "Nie pozostawiono komentarza.",

'order_summary' => "Podsumowanie zamówienia",

'product' => "Produkt",

'code' => "Kod",

'quantity' => "Ilo¶æ",

'price' => "Cena",

'download_link' => "Pobierz link:",

'warn_reset' => "Kasuje liczbê pobrañ do zera i przed³u¿a termin dostêpu.",

'reset_link' => "Skasuj po³±czenie",

'download_stats' => "Liczba (%s) pobrañ. Czas dostêpu na pobrania up³ywa po %s",

'ip_address2' => "Adres IP:",

'order_date_time' => "Data zamówienia / Godzina:",

'payment_method' => "Sposób zap³aty:",

'ship_method' => "Sposób wysy³ki:",

'subtotal' => "Suma netto:",

'total_tax' => "Kwota podatku:",

'shipping' => "Wysy³ka:",

'grand_total' => "Razem do zap³aty:",

'order_notfound' => "Zamówienia nr %s nie znaleziono.",

'order_status' => "Status zamówienia",

'shipping_date' => "Data wysy³ki:",

'ship_today' => "W dniu dzisiejszym",

'modify_status' => "Zmieñ status:",

'staff_comments' => "Komentarz personelu:",

'info_not_sent_customer' => "(tej informacji NIE wys³ano do klienta!)",

'inform_customer' => "Poinformuj klienta:",

'customer_notified' => "(sprawdzono, ¿e klient nie zosta³ powiadomiony o zmianie statusu zamówienia)",

'comments_2_customer' => "Komentarz dla klienta:",

'comments_2_customer_desc' => "(tre¶æ bêdzie dodana do emaila, którym chcesz poinformowaæ klienta, ¿e ma zmieniony status zamówienia)",

'save_order_status' => "Zapisz ztatus zamówienia",

'paid_by' => "Zap³acono ... :",

'delivered_to' => "Dostarczono do:",

'invoice_reciept_for' => "Rachunek / Pokwitowanie dla:",

'order_of_time' => "Twoje zamówienie z dnia:",

'order_id' => "ID Zamówienia:",

'digi_goods_desc' => "Je¶li zamówi³e¶ Digitale (towar w postaci cyfrowej) powiniene¶ otrzymaæ wiadomo¶æ ze wskazówkami do ich pobrania. Instrukcje takie bêd± dostêpne równie¿ z panelu kontrolnego Twojego konta u nas, nad którym sam masz ca³kowit± kontrolê.",

'thank_you' => "Dziêkujemy za zakupy dokonane w naszym sklepie!",

);



$lang['admin']['products'] = array(

'show_featured' => "Wstawiæ go w Homepage do najnowszych produktów?",

'upload_new_images' => "£aduj obrazki",

'no_images_avail' => "Oops, nie ma tam obrazków.",

'prod_added_to_cat' => "Produkt dodano do kategorii.",

'prod_not_added_to_cat' => "Nie dodano produktu do kategorii.",

'prod_removed_from_cat' => "Produkt usuniêto z kategorii.",

'prod_not_removed_from_cat' => "Nie usuniêto produktu z kategorii.",

'title_extraCats' => "Zarz±dzanie kategori±",

'manage_cats' => "Nadzoruj kategorie",

'master_cat' => "Kategoria g³ówna:",

'close_window' => "Zamknij okno",

'img_added_to_prod' => "Obrazek dodany przy produkcie.",

'img_not_added_to_prod' => "Nie dodano obrazka przy produkcie.",

'img_removed' => "Usuniêto obrazek przy produkcie.",

'img_not_removed' => "Nie usuniêto obrazka przy produkcie.",

'image_management' => "Zarz±dzanie obrazkami",

'manage_images' => "Zarz±dzaj obrazkami",

'image' => "Obrazek",

'action' => "Akcja",

'delete_success' => "Usuniêto poprawnie.",

'delete_fail' => "Nie usuniêto.",

'update_successful' => "Aktualizacja poprawna.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_fail' => "Nie dodano.",

'prod_inventory' => "Wykaz produktów",

'current_prods_in_db' => "Lista wszystkich dostêpnych produktów w bazie danych.",

'all_cats' => "Wszystkie kategorie",

'prod_name' => "Nazwa produktu",

'prod_id' => "Id produktu",

'prod_code' => "Kod produktu",

'master_cat2' => "Kategoria g³ówna",

'title' => "Tytu³",

'stock_level' => "Poziom zapasów",

'normal_price' => "Cena bazowa",

'sale_price' => "Cena sprzeda¿y",

'asc' => "Zamówienie rosn±co",

'desc' => "Zamówienie malej±co",

'containing_text' => "Zawieraj±ca tekst",

'filter' => "Filtr",

'reset' => "Kasuj",

'id' => "Id",

'type' => "Typ",

'name' => "Nazwa",

'price_sale_price' => "Cena / Cena obni¿ona",

'in_stock' => "W zapasie",

'action' => "Akcja",

'languages' => "Jêzyki",

'no_products_exist' => "Nie ma ¿adnego produktu w bazie danych.",

'add_prod_desc' => "Dodaj produkt do zbioru za pomoc± poni¿szego formularza.",

'product' => "Produkt",

'prod_name2' => "Nazwa produktu:",

'prod_stock_no' => "Produkt/Zapas Nr:",

'auto_generated' => "(je¶li pozostawisz puste, bêdzie utworzone automatycznie)",

'description' => "Opis:",

'primary_lang' => "(w jêzyku podstawowym, w innych mo¿na dodaæ pó¼niej)",

'category' => "Kategoria:",

'image2' => "Obrazek:",

'opt_and_thumbs' => "(dowolny - miniatury bêd± zrobione automatycznie, GDY format pliku jest obs³ugiwany)",

'upload_new' => "Za³aduj nowy obrazek",

'browse_existing' => "Zobacz jakie ju¿ masz",

'normal_price2' => "Cena podstawowa:",

'sale_price2' => "Cena odsprzeda¿y:",

'sale_mode_desc' => "(ustal gdy bêdzie nastêpowaæ jedynie odsprzeda¿ produktu)",

'prod_weight' => "Waga produktu:",

'tax_class' => "Klasyfikacja podatku:",

'stock_level2' => "Poziom zapasów:",

'reduce_stock_level' => "(zmniejsza siê wraz z ilo¶ci± sztuk sprzedanych)",

'use_stock_q' => "U¿yæ wielko¶ci zapasów?",

'product_type' => "Typ produktu:",

'tangible' => "Rzecz",

'digital' => "Digital (plik w postaci cyfrowej)",

'digi_path' => "Produkty Digital potrzebuj± znajomo¶ci ¶cie¿ki HTTP albo SRP (Server Root Path) - spójrz na informacjê poni¿ej.",

'digi_info' => "Informacja o Digitalach:",

'digi_desc' => "<p><strong>HTTP Path:</strong> http://www.domain.com/downloads/download.exe<br/><strong>Server Root Path:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Zalecane!)</strong></p>

<p>Zaleta u¿ywania SRP polega na tym, ¿e pliki mog± byæ magazynowane gdzie indziej ni¿ w folderze powszechnie dostêpnym. Je¶li wybierzesz ten sposób CubeCart stworzy automatycznie link, który ma okre¶lony up³yw czasu i maksymaln± liczbê pobrañ, z góry wyznaczon± w ustawieniach sklepu.</p>",

'prod_inv_langs' => "Wykaz produktów - (w innych jêzykach)",

'use_rich_oth_lang' => "U¿yj edytora tekstowego do dodania lub zredagowania produktów w innych jêzykach.",

'language' => "Jêzyk:",

'update_prod_lang' => "Aktualizuj opis produktu",

'save_prod_lang' => "Zapisz opis produktu", 

'other_langs_exdefault' => "Poni¿ej lista wszystkich dostêpnych produktów z opisem w jêzykach innych ni¿ domy¶lny.",

'no_lang_exist' => "Opisu w tej wersji jêzykowej nie ma w bazie danych",

'opt_add_success' => "Nazwê opcji dodano.",

'opt_add_fail' => "Nie dodano opcji.",

'att_add_success' => "Parametry opcji dodano.",

'att_add_fail' => "Nie dodano parametrów opcji.",

'assign_success' => "Opcja przypisane do produktu.",

'assign_fail' => "Nie przypisano opcji do produktu.",

'product_options' => "Opcje produktu",

'product_option' => "Opcja produktu",

'quick_assign' => "Szybki przydzia³:",

'prod_opts_of' => "Wybór produktu ze wzglêdu na",

'to' => "Do",

'go' => "Dalej",

'opt_step1' => "1. Stwórz opcjê (np. kolor)",

'opt_id' => "Id",

'opt_name' => "Nazwa opcji",

'warn_remove_opt' => "Na pewno usun±æ nazwê tej opcji? r\n\n OSTRZE¯ENIE! Wszystko co jest powi±zane z t± nazw± bêdzie usuniête!",

'no_options_made' => "Nie utworzono nazwy opcji produktu.",

'option' => "Opcja",

'opt_step2' => "2. Stwórz warto¶æ opcji (np. czerwony)",

'option_attributes' => "Parametry opcji",

'warn_remove_att' => "Na pewno usun±æ ten parametr opcji? \n\n OSTRZE¯ENIE! Wszystko co jest powi±zane z tym parametrem bêdzie usuniête!",

'no_attributes_made' => "Nie wybrano parametrów opcji produktu.",

'attribute' => "Parametr",

'opt_step3' => "3. Przypisz warto¶æ &amp; opcji do produktu (np. T-Shirt &gt; kolor &gt; czerwony)",

'option_attribute' => "Parametr opcji",

'option_price' => "Cena dla tej opcji",

'add_subtract' => "Dodaj / Odejmij",

'remove_opt_prod' => "Na pewno oddj±æ tê opcjê od tego produktu?",

'no_assigned_opts' => "Nie przypisano ¿ednej opcji jakiemu kolwiek produktowi.",

'prods_made_1st' => "Zanim stworzysz opcje dodaj wpierw produkty.",

);



$lang['admin']['settings'] = array(

//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP Host:",

'defaultHost' => "(Domy¶lnie: localhost)",

'smtpPort' => "SMTP Port:",

'defaultPort' => "(Domy¶lnie: 25)",

'smtpAuth' => "Potwierdziæ?",

'defaultAuth' => "(Domy¶lnie: Tak)",

'smtpUsername' => "SMTP U¿ytkownik:",

'smtpPassword' => "SMTP Has³o:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "Pokazaæ najnowsze produkty na homepage?",

'no_latest' => "Liczba najnowszych produktów do pokazania:",

'off_line_settings' => "Ustawienia off line",

'off_line' => "Zamkn±æ sklep?",

'off_line_content' => "Wiadomo¶æ off line:",

'off_line_allow_admin' => "Pozwoliæ administratorom na podgl±d sklepu off line? (wymaga sesji Admina)",


'store_settings' => "Ustawienia sklepu",

'edit_below' => "Redaguj poni¿ej ustawienia konfiguracji sklepu:",

'meta_data' => "Meta dane",

'browser_title' => "Tytu³ (w przegl±darce):",

'meta_desc' => "Opis:",

'meta_keywords' => "S³owa kluczowe:",

'comma_separated' => "(oddzielaj przecinkiem)",

'store_co_name' => "Sklep / Nazwa firmy:",

'store_address' => "Adres sklepu:",

'country' => "Kraj:",

'zone' => "Region/Województwo/Strefa:",

'dirs_folders' => "Katalogi &amp; Foldery",

'rootRel' => "G³ówny folder publikacji HTML dla sklepu:",

'include_slash' => "(wstaw prawy uko¶nik)",

'storeURL' => "Poprawny URL sklepu:",

'eg_domain_com' => "np: http://www.domain.com",

'rootDir' => "G³ówny katalog na serwerze:",

'eg_root_path' => "np: /path/to/your/webstore",

'rootRel_SSL' => "G³ówny SSL folder publikacji HTML dla sklepu:",

'storeURL_SSL' => "Poprawny SSL URL sklepu:",

'eg_domain_SSL' => "np: https://secure.domain.com",

'rootDir_SSL' => "G³ówny katalog SSL na serwerze:",

'eg_root_path_secure' => "np: /path/to/your/secure/webstore",

'enable_ssl' => "W³±czyæ SSL?",

'ssl_warn' => "(Ta zmiana bêdzie skuteczna dopiero po zatwierdzeniu. Zanim zrobisz zmianê upewnij siê, ¿e Twój adres HTPPS oraz ¶cie¿ka do g³ównego katalogu SSL jest poprawna i funkcjonuje)",

'digital_downloads' => "Pobieranie Digitali",

'download_expire_time' => "Termin pobierania up³ywa:",

'seconds' => "(sekund)",

'download_attempts' => "Prób pobierania:",

'attempts_desc' => "(tyle razy klient mo¿e próbowaæ pobraæ produkt)",

'styles_misc' => "Sposoby &amp; Ró¿norodne",

'default_language' => "Jêzyk domy¶lny:",

'store_skin' => "Skórka sklepu:",

'no_cats_per_row' => "Kategorii w szeregu:",

'dir_symbol' => "Znak umowny katalogu:",

'prods_per_page' => "Produktów na stronie:",

'precis_length' => "Charakterystyka produktu:",

'chars' => "(znaków)",

'no_sale_items' => "Pozycji w pude³ku:",

'no_pop_prod' => "Pozycji w kartonie zbiorczym:",

'email_name' => "Nazwa emaila:",

'email_name_desc' => "(ze zbioru emaili - u¿ywane jako nazwa)",

'email_address' => "Adres email:",

'email_address_desc' => "(ze zbioru emaili - u¿ywane jako adres)",

'mail_method' => "Sposób wysy³ania poczty:",

'mail_recommended' => "(zalecane SMTP)",

'max_upload_size' => "Maksymalny rozmiar pliku:",

'under_x_recom' => "(zalecane poni¿ej 2048Kb)",

'max_sess_length' => "Maksymalna d³ugo¶æ sesji:",

'db_settings' => "Ustawienia bazy danych",

'db_host' => "Nazwa hosta bazy danych:",

'db_username' => "U¿ytkownik bazy danych:",

'db_password' => "Has³o bazy danych:",

'db_name' => "Nazwa bazy danych:",

'db_prefix' => "Prefix bazy danych:",

'gd_settings' => "Ustawienia GD",

'gd_ver' => "Wersja GD:",

'gd_thumb_size' => "Rozmiar miniaturki:",

'gd_gif_support' => "Wybraæ wsparcie GIF: (sprawd¼ czy serwer to obs³uguje)", 

'gd_max_img_size' => "Maksymalny rozmiar obrazka:",

'gd_img_quality' => "Rozdzielczo¶æ obrazka:",

'recom_quality' => "(Zalecane 60 - 80)",

'stock_settings' => "Ustawienia zapasów",

'use_stock' => "Pokazaæ poziom zapasów?",

'allow_out_of_stock_purchases' => "Pozwoliæ na zakupy ponad zapas?",

'weight_unit' => "Jednostka wagi:",

'time_and_date' => "Czas &amp; Data",

'time_format' => "Format czasu:",

'time_format_desc' => "(Spójrz <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Korekta czasu:",

'time_offset_desc' => "(Sekundy – u¿ywaæ dla serwera w innej strefie czasowej)",

'date_format' => " Format daty:",

'date_format_desc' => "(Spójrz <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Ustawienia lokalne",

'default_currency' => "Waluta domy¶lna:",

'inc_tax_prices' => "W³±czyæ podatek do cen?",

'sale_mode' => "Metoda sprzeda¿y:",

'percent_of_all' => "Obni¿ka cen o ustalony procent",

'ind_sale_per_item' => "Indywidualne ceny za sztukê",

'sale_mode_off' => "Wyprzeda¿",

'sale_per_off' => "Procent obni¿ki:",

'sale_per_off_desc' => "(pomniejszy to wszystkie ceny jednocze¶nie)",

'diff_dispatch' => "Dostarczyæ na adres inny ni¿ na rachunku?",

'update_settings' => "Aktualizuj ustawienia",

'update_success' => "Aktaualizacja poprawna.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_fail' => "Nie dodano.",

'delete_success' => "Usuniêto poprawnie.",

'delete_failed' => "Nie usuniêto.",

'currencies' => "Waluty",

'currency' => "Walutê",

'currencies_desc' => "Poni¿ej dodaj, redaguj lub usuñ waluty:",

'c_code' => "Kod",

'c_name' => "Nazwa",

'c_value' => "Warto¶æ",

'symbol_left' => "Symbol po lewej",

'symbol_right' => "Symbol po prawej",

'decimal_places' => "Miejsca dziesiêtne",

'last_updated' => "Ostatnia aktualizacja",

'c_status' => "Status",

'no_currencies' => "Nie ma walut w bazie danych.",

'countries' => "Kraje",

'country' => "Kraj:",

'edit_countries_below' => "Redaguj lub usuñ poni¿sze kraje:",

'disable' => "Wy³±cz",

'enable' => "W³±cz",

'iso' => "ISO",

'iso_name' => "Nazwa",

'iso3' => "ISO3",

'num_code' => "Kod Num",

'action' => "Akcja",

'warn_del_country' => "Napewno chcesz to usun±æ? Wszystkie razem - regiony, województwa i strefy bêd± usuniête.",

'no_countries_in_db' => "Nie ma krajów w bazie danych.",

'edit_counties' => "Zredaguj lub usuñ poni¿sze regiony/strefy/województwa:",

'no_counties_in_db' => "Nie ma regionów, województw lub stref w bazie danych.",

'tax_Settings' => "Ustawienia podatku",

'edit_locale_below' => "Zredaguj poni¿ej ustawienia lokalne:",

'tax_only_to' => "Zastosuj podatek TYLKO w nastêpuj±cym obszarze:",

'manage_tax_below' => "Zarz±dzaj poni¿ej Twoimi ró¿norodnymi stawkami podatku. One mog± byæ stosowane osobno do ka¿dego produktu, jako ¿e mo¿esz mieæ towar zwolniony lub zró¿nicowane stawki dla ró¿nych typów produktów.",

'tax_class2' => "Klasyfikacja podatku",

'rate_per' => "Stawka (%)",

'no_taxes_setup' => "Nie ustawiono podatku.",

'tax' => "Podatek",

);



$lang['admin']['stats'] = array(

'store_stats' => "Statystyka sprzeda¿y",

'choose_view' => "Wybierz statystyki do przegl±du:",

'search_terms' => "Warunki wyszukiwania",

'product_pop' => "Chodliwo¶æ produktu",

'cust_online' => "Klienci w sklepie",

'search_terms_order_by' => "Warunki wyszukiwania (porz±dkuj wg nr-u)",

'sorry_no_data' => "Nie ma danych do pokazania.",

'product_pop_ordered_by' => "Chodliwo¶æ produktu  (porz±dkuj wg odwiedzin)",

'cust_active' => "Klienci aktywni przez ostatnie 15 minut.",

'hash' => "#",

'customer' => "Klient",

'location' => "Sk±d",

'sess_start_time' => "Czas rozpoczêcia sesji", 

'last_click_time' => "Czas ostatniego klikniêcia",

'sess_length' => "D³ugo¶æ sesji",

'geust' => "Go¶æ",

'signed_in' => "Wszed³",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "OSTRZE¯ENIE: Plik konfiguracyjny 'includes/global.inc.php' is jest otwarty na zmiany a to jest ryzykowne dla sklepu. Ustaw jego warto¶æ CHMOD na 0644 tak szybko jak to mo¿liwe.",

'401' => "B³±d 401: Nie masz pozwolenia na dostêp do tej strony. Zapytaj administratora czy Ci go udzieli.",

'welcome_note' => "Witamy w panelu Administratora CubeCart",

'last_login' => "Ostatnie logowanie",

'by' => "przez",

'failed' => "B³êdny.",

'store_overview' => "Przegl±d sklepu:",

'version' => "Wersja:",

'visit_cc' => "Odwied¼ serwer pobierania CubeCart",

'no_products' => "Liczba produktów:",

'no_customers' => "Liczba klientów:",

'img_upload_size' => "Rozmiar foldera obrazków:",

'no_orders' => "Liczba zamówieñ:",

'quick_search' => "Szybkie wyszukiwanie:",

'order_no' => "Numer zamówienia:",

'search_now' => "Szukaj teraz",

'customer' => "Klient:",

'login_failed' => "B³êdne logowanie! Chyba nazwa i/lub has³o nie by³o poprawne.",

'new_pass_sent' => "Nowe has³o zostanie wys³ane",

'no_admin_sess' => "Nie wykryto sesji administracyjnej.",

'login_fail_2' => "B³êdne logowanie. Spróbuj ponownie.",

'login_below' => "Zaloguj siê poni¿ej:",

'username' => "Nazwa operatora:",

'password' => "Has³o:",

'request_pass' => "Popro¶ o has³o",

'login' => "Zaloguj",

'logout_failed' => "B³±d wylogowania, jako ¿e nie by³a to sesja Admina.",

'reset_pass_email' => "Szanowna(ny) %s,

O odtworzenie Twojego has³a poprosi³e¶ Ty, lub kto¶ kto pod Ciebie siê podszywa. 

Twoje nowe parametry dostêpu to:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nazwa: %s
Has³o: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Ten email zosta³ wys³any przez %s/admin/requestPass.php\n

IP Adres Nadawcy: %s",

'pass_reset_failed' => "B³±d odtworzenia has³a.",

'enter_email_below' => "Umie¶æ poni¿ej swój adres email:",

'email_address' => " Adres email:",

'send_pass' => "Wy¶lij has³o",

);



$lang['admin']['nav'] = array(

'permission_error' => "Nie masz tu zezwolenia na wstêp.",

'navigation' => "Nawigacja",

'admin_home' => "Wnêtrze Admina",

'store_home' => "Wnêtrze sklepu",

'store_config' => "Konfiguracja sklepu",

'gen_settings' => "Ustawienia ogólne",

'taxes' => "Podatki",

'countries_zones' => "Kraje &amp; Strefy",

'currencies' => "Waluty",

'modules' => "Modu³y",

'shipping' => "Wysy³ka",

'gateways' => "Bramki p³atnicze",

'affiliates' => "Cz³onkowie",

'catalog' => "Katalog",

'view_products' => "Przegl±d produktów",

'add_product' => "Dodaj produkt",

'product_options' => "Opcje produktu",

'view_categories' => "Przegl±d kategorii",

'add_categories' => "Dodaj kategoriê",

'customers' => "Klienci",

'view_customers' => "Przegl±d klientów",

'email_customers' => "Email klientów",

'orders' => "Zamówienia",

'file_manager' => "Zarz±dca plików",

'manage_images' => "Zarz±dzaj obrazkami",

'upload_images' => "Za³aduj obrazki",

'statistics' => "Statystyki",

'view_stats' => "Przegl±d Statystyk",

'documents' => "Dokumenty",

'homepage' => "Homepage",

'site_docs' => "Zbiór dokumentów",

'misc' => "Ró¿no¶ci",

'server_info' => "Informacja o serwerze",

'admin_users' => "U¿ytkownicy Admina",

'administrators' => "Administratorzy",

'admin_sessions' => "Sesje Admina",

);



$lang['admin']['incs'] = array(

'administration' => "Administracja",

'logged_in_as' => "Zalogowany jako:",

'logout' => "Wyloguj",

'change_pass' => "Zmieñ has³o",

'error_editing' => "B³±d próby redagowania. Dane wej¶ciowe nie po kolei.",

'config_updated' => "Zaktualizowano Konfiguracjê. Upewnij siê czy atrybuty pliku ustawiono poprawnie z powrotem.",

'cant_write' => "Nie mogê otworzyc pliku '%s' do zapisu. Spróbuj zmieniæ warto¶æ CHMOD na 0777. Pamiêtaj aby powróciæ potem do ustawieñ 0644 !",

'db_config_updated' => "Konfiguracja bazy danych zaktualizowana.",

'db_cant_write' => "B³±d zapisu!",

'select_above' => "Wybierz powy¿sze",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Tak";

$lang['front']['no'] = "Nie";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "U¿yteczne Linki",

'reg_and_checkout' => "Rejestruj &amp; Wymelduj",

'cont_shopping' => "Kontynuuj zakupy",

'edit_del_add' => "Podaj adres dostawy",

'edit_inv_add' => "Podaj adres do rachunku",

'empty_cart' => "Opró¿nij kosz",

'prev_page' => "Poprzednia strona",

'homepage' => "Homepage",

'shop_by_cat' => "Sklep wg kategorii",

'sale_items' => "Pozycje w sprzeda¿y",

'save' => "Zapisz",

'currency' => "Waluta",

'information' => "Informacja",

'products' => "Produkty:",

'categories' => "Kategorie:",

'prices' => "Ceny w:",

'language' => "Jêzyki",

'mailing_list' => "Lista mailingowa",

'subscribe_below' => "Wpisz siê na nasz± listê mailingow±:",

'email' => "Email:",

'join_now' => "Wejd¼ teraz",

'already_subscribed' => "Ten adres email %s zosta³ ju¿ wpisany na nasz± listê. Aby siê wypisaæ proszê zalogowaæ siê na swoje konto.",

'enter_valid_email' => "Proszê wprowadziæ poprawny adres email.",

'added_to_mail' => "Dziêkujemy, %s zosta³ dodany do naszego spisu emaili.",

'subscribed_to_mail' => "Dziêkujemy, %s zosta³ wpisany na nasz± listê mailingow±.",

'popular_products' => "Produkty chodliwe",

'featured_prod' => " Produkty zapowiadane",

'sale_items' => "Pozycje w sprzeda¿y",

'search_for' => "Szukaj dla:",

'go' => "Dalej",

'welcome_back' => "Witamy ponownie",

'logout' => "Wyloguj",

'your_account' => "Twoje konto",

'welcome_guest' => "Witamy Go¶cia",

'login' => "Zaloguj",

'register' => "Zarejestruj",

'shopping_cart' => "Wózek na zakupy",

'basket_empty' => "Twój koszyk jest pusty.",

'items_in_cart' => "Pozycji w koszyku:",

'total' => "Razem:",

'view_basket' => "Sprawd¼ koszyk",

);



$lang['front']['account'] = array(

'your_account' => "Twoje konto",

'personal_info' => "Informacje osobiste",

'order_history' => "Historia zamówieñ",

'change_password' => "Zmieñ has³o",

'newsletter' => "Nowinki",

'login_to_view' => " Aby przegl±daæ tê stronê musisz siê zalogowaæ.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Wprowadzi³e¶ niepoprawne has³o.",

'conf_not_match' => "Potwierdzenie has³a nie pasuje do niego.", 

'change_pass' => "Zmieñ has³o",

'password_updated' => "Dziêkujemy, Twoje has³o zosta³o zaktualizowane.",

'change_pass_below' => "Proszê zmieniæ poni¿ej has³o:",

'old_pass' => "Stare Has³o:",

'new_pass' => "Nowe Has³o:",

'confirm_pass' => "Potwierdz has³o:",

'submit' => "Akceptuj",

);



$lang['front']['dnExpire'] = array(

'sorry' => "¯a³ujê",

'expired' => "Twój link do pobrania jest nieprawid³owy lub termin dostêpu ju¿ min±³.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Zapomnia³em has³a",

'email' => "Email:",

'send_pass' => "Wy¶lij has³o",

'reset_email' => "Szanowna(ny) %s %s,

O odtworzenie Twojego has³a poprosi³e¶ Ty lub kto¶ kto siê pod Ciebie podszywa. Twoje nowe parametry dostêpu to:

~~~~~~~~~~~~~~~~~~~~~~~~~~
U¿ytkownik: %s
Has³o: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
U¿yj poni¿szego linku aby siê zalogowaæ: 
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Ten email by³ wys³any z %s
Adres IP Nadawcy: %s",

'new_pass_sent' => "Nowe has³o zosta³o wys³ane do %s.",

'email_not_found' => "Nie znaleziono takiego adresu email.",

'enter_email' => "Aby otrzymaæ has³o tymczasowe wpisz poni¿ej twój poprawny adres email:",

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

'newOrderMsg' => "Klient z³o¿y³ zamównienie %s, podgl±d tego zamówienia mo¿liwy za pomoc± poni¿szego linku: \n\n%s",

'newOrderSubj' => "Z³o¿ono nowe zamówienie",

'payment' => "P³atno¶æ",

'cart' => "Wózek",

'address' => "Adres",

'payment' => "Do zap³aty",

'complete' => "Zakoñcz",

'fill_out_below' => "Wyczy¶æ poni¿szy formularz:",

'transferring' => "Nalezno¶æ do zap³aty",

'go_now' => "Id¼ teraz!",

'continue' => "Dalej",

'choose_method' => "Wybierz sposób zap³aty:",

'your_comments' => "Twój komentarz:",

'none_configured' => "Oops, nie okre¶lono sposobu zap³aty.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Login",

'username' => "Email:",

'password' => "Has³o:",

'remember_me' => "Czy mnie pamiêtasz?",

'forgot_pass' => "Zapomnia³e¶ swoje has³o?",

'login_success' => "Jeste¶ zalogowany poprawnie.",

'already_logged_in' => "Ju¿ siê zalogowa³e¶.",

'login_failed' => "B³±d w logowaniu!",

'login_below' => "Zaloguj siê poni¿ej:",

);



$lang['front']['index'] = array(

'latest_products' => "Najnowsze produkty",

);



$lang['front']['logout'] = array(

'logout' => "Wyloguj",

'session_destroyed' => "Twoja sesja zosta³a anulowana.",

'no_session' => "Nie znaleziono sesji do anulowania. Chyba zawita³e¶ tutaj przez przypadek.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Ustawienia Newsletter'a",

'prefs_updates' => "Twoje ustawienia zosta³y zaktualizowane.",

'edit_prefs_below' => "Zredaguj poni¿ej swoje ustawienia:",

'subscribe' => "Zapisaæ na listê mailingow±?",

'email_format' => "Format emaila:",

'plain_text' => "Otwartym tekstem",

'html' => "HTML",

'html_abbr' => "Jêzykiem znaków hypertekstowych",

'update' => "Aktualizuj",

'login_required' => "Aby ogl±daæ stronê musisz siê zalogowaæ.",

);



$lang['front']['noShip'] = array(

'sorry' => "Oops",

'desc' => "Nie mo¿emy wys³aæ naszych produktów do Twojego kraju.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Oops",

'desc' => "Nie mo¿emy zrealizowac zamówienia o takiej wadze.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Wpisz poprawnie numer telefonu, ma byæ wpisany cyframi.",

'complete_all' => "Upewnij siê, ¿e wype³ni³e¶ wszystkie wymagane pola.",

'email_invalid' => "Wpisz poprawnie adres email.",

'numeric_only' => "Numer telefonu, ma byæ wpisany cyframi.",

'email_inuse' => "Ten adres email jest ju¿ u¿ywany.",

'update_email' => "Szanowna(ny) %s %s,

Ten email jest potwierdzeniem, ¿e Twoje informacje osobiste zosta³y zaktualizowane poprawnie. Je¶li za¶ spostrzeg³e¶, ¿e Twoje konto zosta³o u¿yte przez kogo¶ innego ni¿ Ty, proszê siê skontaktowaæ niezw³ocznie z naszym personelem..\n\n

Ten email by³ wys³any z %s\n

Adres IP nadawcy: %s",

'update_email_subj' => "Zaktualizowano informacje osobiste",

'personal_info' => "Informacje osobiste",

'account_updated' => "Twoje konto zosta³o zaktualizowane. Je¶li chcesz mo¿esz je ponownie redagowaæ poni¿ej.",

'edit_below' => "Zredaguj poni¿ej informacje o sobie:",

'title' => "Tytu³:",

'first_name' => "Imiê:",

'last_name' => "Nazwisko:",

'email' => "Email:",

'address' => "Adres:",

'town' => "Miasto:",

'county' => "Region/Województwo:",

'postcode' => "Kod pocztowy:",

'country' => "Kraj:",

'phone' => "Telefon:",

'mobile' => "Komórka:",

'update_account' => "Aktualizuj konto",

'login_required' => "Aby ogl±daæ stronê musisz siê zalogowaæ.",

);



$lang['front']['reg'] = array(

'fill_required' => "Upewnij siê, ¿e wype³ni³e¶ wszystkie wymagane pola.",

'pass_not_match' => "Upewnij siê, ¿e Twoje has³o pasuje.",

'enter_valid_email' => "Wpisz poprawnie adres email.",

'enter_valid_tel' => "Wpisz numer wy³±cznie cyframi.",

'email_in_use' => "Ten adres email jest ju¿w u¿yciu.",

'note_required' => "Uwaga! Wszystkie pola oznaczone gwiazdk± (*) s± wymagane do procesu rejestracji.",

'express_reg' => "Szybka rejestracja",

'submit_and_cont' => "Zatwierd¼ &amp; Dalej",

'personal_details' => "Dane personalne",

'address' => "Adres",

'title' => "Tytu³:",

'title_desc' => "(Pani/Panna/Pan)",

'first_name' => "Imiê:",

'address2' => "Adres:",

'last_name' => "Nazwisko:",

'email_address' => "Adres email:",

'town' => "Miasto:",

'phone' => "Telefon:",

'county' => "Region/Województwo:",

'mobile' => "Komórka:",

'country' => "Region:",

'postcode' => "Kod pocztowy:",

'security_details' => "Szczegó³y bezpieczeñstwa",

'choose_pass' => "Wybierz has³o:",

'conf_pass' => "Potwierd¼ has³o :",

'privacy_settings' => "Ustawienia prywatno¶ci",

'receive_emails' => "Chcia³bym otrzymywaæ emaile ze sklepu",

'email_format' => "Format emaila:",

'styled_html' => "W stylu HTML",

'plain_text' => "Otwartym Tekstem",

'tandcs' => "Warunki u¿ytkowania",

'please_read' => "Upewnij siê, ¿e przeczyta³e¶ nasze.",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "Szanowna(ny) %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Zobacz ten produkt za pomoc± poni¿szego linku:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Ten email by³ wys³any z %s
Adres IP nadawcy: %s",

'email_subject' => "Wiadomo¶ od: %s",

'tellafriend' => "Powiedz znajomemu",

'message_sent' => "Dziêkujemy,  Twoja wiadomo¶æ do <strong>%s</strong> o '%s' zosta³a wys³ana. Je¶li chcesz przekazaæ j± do kolejnej osoby, zrób to teraz poni¿ej:",

'fill_out_below' => " Aby zawiadomiæ znajomego o naszym towarze wstaw w poni¿sze okienka '%s'.",

'friends_name' => "Imiê znajomego:",

'friends_email' => "Adres email znajomego:",

'your_name' => "Twoje Imiê:",

'your_email' => "Twój adres email:",

'message' => "Wiadomo¶æ:",

'default_message' => "Cze¶æ. My¶lê, ¿e to '%s' mo¿e Ciê zainteresowaæ.",

'send' => "Wy¶lij",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Wypisz mnie",

'email' => "Email:",

'go' => "Id¼",

'enter_valid_email' => "Proszê wpisaæ w³a¶ciwy adres email.",

'email_removed' => "Dziêkujemy, <strong>%s</strong> zosta³ usuniêty z naszej listy mailingowej.",

'email_not_found' => "Oops, <strong>%s</strong> nie by³o go na li¶cie lub zosta³ ju¿ usuniêty.",

'enter_email_below' => "Aby siê wypisaæ z naszej listy umie¶æ poni¿ej swój adres email:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Wyniki wyszukiwania",

'sale_items' => "Pozycje w sprzeda¿y",

'image' => "Obrazek",

'description' => "Opis",

'price' => "Cena",

'products_in' => "Produkty w:",

'buy' => "Kup",

'more' => "Wiêcej",

'out_of_stock' => "BRAK W MAGAZYNIE",

'no_products_match' => "¯aden produkt nie pasuje do zapytania:",

'no_prods_in_cat' => "Nie ma produktów w tej kategorii.",

);



$lang['front']['viewDoc'] = array(

'error' => "Error",

'does_not_exist' => "Taki dokument nie istnieje.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Zamówienie Nr:",

'customer_info' => "Informacja o kliencie:",

'invoice_address' => "Adres na rachunku:",

'delivery_address' => "Adres dostawy:",

'na' => "n/a",

'customer_comments' => "Komentarze klienta:",

'order_summary' => "Streszczenie zamówienia:",

'product' => "Produkt",

'product_code' => "Kod produktu",

'quantity' => "Ilo¶æ",

'price' => "Cena",

'download_here' => "Pobierz tutaj",

'review_below' => "Przegl±dnij poni¿ej to zamówienie:",

'order_date_time' => "Data zamówienia / czas:",

'payment_method' => "Sposób zap³aty:",

'ship_method' => "Sposób wysy³ki:",

'subtotal' => "Suma:",

'total_tax' => "Kwota podatku:",

'shipping' => "Wysy³ka:",

'grand_total' => "Do zap³aty:",

'order_not_found' => " Nie odnaleziono tego numeru zamówienia.",

'login_required' => "Aby obejrzeæ stronê musisz siê zalogowaæ.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Twoje zamówienia",

'orders_listed_below' => "Poni¿ej masz listê wszystkich swoich zamówieñ:",

'order_no' => "Zamówienie Nr",

'status' => "Status",

'date_time' => "Data/Czas",

'action' => "Akcja",

'view' => "Podgl±d",

'no_orders' => "Nie zanotowali¶my w naszym sklepie ¿adnych Twoich zamówieñ. Je¶li wiesz, ¿e to pomy³ka proszê siê skontaktowaæ z naszym personelem przy pierwszej okazji.",

'login_required' => "Aby obejrzeæ stronê musisz siê zalogowaæ.",

);



$lang['front']['viewProd'] = array(

'product' => "Produkt",

'product_info' => "Informacja o produkcie",

'price' => "Cena:",

'product_code' => "Kod produktu:",

'tellafriend' => "Powiedz przyjacielowi",

'quantity' => "Ilo¶æ:",

'more_images' => "[+] Wiêcej obrazków",

'add_to_basket' => "Dodaj do koszyka",

'location' => "Po³o¿enie:",

'no_instock' => "W zapasie:",

'instock' => "W zapasie",

'out_of_stock' => "BRAK W ZAPASIE",

'prod_opts' => "Opcje produktu:",

'prod_not_found' => "Nie ma takiego produktu.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Twój wózek na zakupy obecnie jest pusty.",

'allready_customer' => "Jeste¶ ju¿ klientem?",

'login_below' => "Zaloguj sie poni¿ej:",

'username' => "Email:",

'password' => "Has³o:",

'remember_me' => "Pamiêtasz mnie?",

'login' => "Login",

'forgot_pass_q' => "Zapomnia³e¶ swojego has³a?",

'need_register' => "Chcesz siê zarejestrowaæ?",

'express_register' => "Nasza strona do szybkiej rejestracji pozwala to zrobiæ ³atwo i sprawnie.",

'reg_and_cont' => "Zarejestruj &amp; Dalej",

'cont_shopping_q' => "Kontynuowaæ zakupy?",

'cont_shopping' => "Kupuj dalej",

'cont_browsing' => " Aby przegl±daæ dalej jako go¶æ bez zalogowania kliknij poni¿ej przycisk. Uwaga! Nie bêdziesz móg³ nic kupiæ bez uprzedniej rejestracji.",

);




$lang['front']['cart'] = array(

'free_shipping' => "Na koszt sklepu",

'view_cart' => "Podgl±d wózka",

'cart' => "Wózek",

'address' => "Adres",

'payment' => "Zap³ata",

'complete' => "Zakoñcz",

'add_more' => "Chcesz dodaæ wiêcej sztuk? Wprowad¼ kod produktu:",

'add' => "Dodaj",

'qty' => "Ile",

'product' => "Produkt",

'code' => "Kod",

'stock' => "Zapas",

'price' => "Cena",

'line_price' => "Cena bran¿owa",

'delete' => "Usuñ",

'remove' => "Zdejm sztukê",

'invoice_address' => "Adres na rachunku",

'delivery_address' => "Adres dostawy",

'title' => "Tytu³:",

'first_name' => "Imiê:",

'last_name' => "Nazwisko:",

'address2' => "Adres:",

'town' => "Miasto:",

'county' => "Region/Województwo:",

'postcode' => "Kod pocztowy:",

'country' => "Kraj:",

'edit_invoice_address' => "Edytuj adres do rachunku",

'edit_delivery_address' => "Edytuj adres dostawy",

'stock_warn' => "Zamówi³e¶ wiêcej sztuk ni¿ s± aktualnie dostêpne. Dostawa mo¿e wiêc byæ opó¼niona a¿ zapasy zostan± uzupe³nione.",

'amount_capped' => "Oops, nie mo¿emy wykonaæ zamówienia ponad aktualny stan zapasów.<br/>Ilo¶ zamówionych sztuk zosta³a ograniczona do",

'na' => "n/a",

'shipping' => "Wysy³ka:",

'tax' => "Podatek:",

'subtotal' => "Suma:",

'cart_total' => "Razem w wózku:",

'if_changed_quan' => "(je¶li zmieni³e¶ jak±¶ ilo¶æ sztuk)",

'update_cart' => "Aktualizuj wózek",

'continue' => "Dalej",

'cart_empty' => "Twój wózek na zakupy jest obecnie pusty.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Potwierdzenie",

'cart' => "Wózek",

'address' => "Adres",

'payment' => "Zap³ata",

'complete' => "Zakoñcz",

'order_success' => "Dziêkujemy, zamowienie dokonane poprawnie! Proszê nas znów odwiedziæ.",

'order_fail' => "Opps, zamówienie b³êdne!",

'try_again_desc' => "Spróbuj poni¿ej zawarto¶æ Twojego koszyka kupiæ ponownie:",

'try_again' => "Spróbuj znowu",

'request_login' => "Aby przejrzeæ stronê musisz siê zalogowaæ.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Szanowna(ny) %s,

Dziêkujemy za zamówienie nr: %s z³o¿one na %s

Transakcja by³a poprawna, zamówiony towar wy¶lemy przy pierwszej sposobno¶ci.

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nazwa: %s
Suma: %s
Poczta & Pakowanie: %s
Podatek: %s
Do zap³aty: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Adres na rachunku:
%s
%s
%s
%s
%s
%s
%s

Adres wysy³kowy:
%s
%s
%s
%s
%s
%s
%s

Sposób zap³aty: %s
Sposób wysy³ki: %s",

'inv_email_body_2' => "\nTwój komentarz: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Order Inventory:\n",

'inv_email_body_4' =>"Produkt: %s\n",

'inv_email_body_5' => "Opcja: %s\n",

'inv_email_body_6' => "Ilo¶æ: %s
Kod produktu: %s
Cena: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Zamówienie nr: ",

'digi_email_body1' => "Szanowna(ny) %s,

Dziêkujemy za zamówienie nr: %s z³o¿one na %s

Znajd¼ poni¿ej linki niezbêdne do pobrania zamówionych Digitali.

WA¯NE - linki strac± wa¿no¶æ %s i masz %s prób dostêpu aby z nich skorzystaæ. Je¶li napotkasz jaki¶ problem proszê siê z nami skontaktowaæ, podaj±c numer swojego zamówienia.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
POBIERZ LINK:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Gotowy do pobrania:",

);



$lang['misc'] = array(

'pages' => " pages ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "Przegl±darka klienta:",

'server_software' => "Oprogramowanie serwera:",

'perofOrderSub' => " % od sumy zamówienia",

'freeForOrdOver' => "Darmowe za zamówienie powy¿ej",

'freeShipping' => "Wysy³ka darmowa",

'byWeight1stClass' => "Wg wagi (1st Class)",

'1stClass' => "(1st Class)",

'byWeight2ndClass' => "Wg wagi (2nd Class)",

'2ndClass' => "(2nd Class)",

'flatRate' => "Sta³a stawka",

'free' => "Darmo",

'national' => "Narodowa",

'international' => "Miêdzynarodowa",

'byCategory' => "Wg kategorii",

'perItem' => "Za sztukê",

'nextDayEarlyAm' => "Nastêpnego dnia - Lotnicza Early AM",

'nextDayAir' => "Nastêpnego dnia - Lotnicza",

'nextDayAirSaver' => "Nastêpnego dnia - Lotnicza polecona",

'2ndDayEarlyAm' => "Pojutrze - Lotnicza Early AM",

'2ndDayAir' => "Pojutrze - Lotnicza",

'3daySelect' => "3-go dnia - Wybranym",

'ground' => "Podstawowa",

'canadaStandard' => "Canada Standard",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Rachunek do",

'deliverTo' => "Dostarcz do",

'postalOrderFor' => "Zamówienie pocztowe dla",

'orderOf' => "Z zamówienia",

'orderID' => "ID zamówienia:",

'product' => "Produkt",

'code' => "Kod",

'qty' => "Ilo¶æ",

'price' => "Cena",

'shippingMethod' => "Sposób wysy³ki:",

'subtotal' => "Suma:",

'totalTax' => "Kwota podatku:",

'totalShipping' => "Kwota za ekspedycjê:",

'grandTotal' => "Do zap³aty:",

'payByCheck' => "Zap³aæ czekiem",

'payTo' => "Wystaw czek p³atniczy na",

'payByCard' => "Zap³aæ kart±",

'cardType' => "Typ karty:",

'cardNo' => "Nr karty:",

'3-4DigiId' => "3-4 cyfry ID:",

'expiryDate' => "Data wa¿no¶ci:",

'issueDate' => "Udzielono dnia:",

'issueNo' => "Przydzielony numer:",

'signature' => "Podpis:",

'payByTransfer' => "Zap³ata przelewem",

'bankName' => "Nazwa Banku:",

'accountName' => "Nazwa konta:",

'sortCode' => "Kod kierunkowy:",

'accountNo' => "Numer konta:",

'swiftCode' => "Kod Swift:",

'bankAddress' => "Adres banku:",

'thanks' => "Dziêkujemy za zakupy zrobione w naszym sklepie!",

'postalAddress' => "Adres pocztowy:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "Zg³oszone",

'2' => "W trakcie",

'3' => "Za³atwione",

'4' => "Odrzucone",

'5' => "Oszukañcze",

);

$lang['admin']['cats'] = array(

'delete_success' => "Kategoriê w tym jêzyku usuniêto poprawnie.",

'delete_fail' => "B³±d usuwania.",

'update_fail' => "B³±d aktualizacji.",

'update_success' => "Aktaualizacja poprawna.",

'add_success' => "Dodano poprawnie.",

'add_fail' => "Nie dodano kategorii w tym jêzyku.",

'site_cats_other_lang' => "Kategorie - (w innym jêzyku)",

'site_cat_other_lang' => "Kategoria - (w innym jêzyku)",

'cat_name' => "Nazwa kategorii:",

'language' => "Jêzyk:",

'update_cat' => "Aktualizuj kategoriê",

'save_cat' => "Zapisz kategoriê",

'current_cat_list' => "Poni¿ej jest wykaz wszystkich aktualnych kategorii w wersjach jêzykowych. Mog± byæ one redagowane i/lub usuwane w dowolnym czasie.",

'cat_name2' => "Nazwa kategorii",

'action' => "Akcja",

'no_site_cats' => "Nazwa tej kategorii nie zosta³a jeszcze przet³umaczona.",

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