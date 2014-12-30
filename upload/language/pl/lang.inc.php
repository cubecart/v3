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

$lang['admin']['delete'] = "Usu�";

$lang['admin']['delete_q'] = "Czy jeste� pewien, �e chcesz to usun��?";

$lang['admin']['add'] = "Dodaj";

$lang['admin']['add_new'] = "Dodaj nowy";

$lang['admin']['write'] = "Wpisz";

$lang['admin']['read'] = "Czytaj";

$lang['admin']['na'] = "N/A"; // jako niewykonywalne

$lang['admin']['all'] = "Wszystko";

$lang['admin']['remove'] = "Usu�";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array(

'del_success' => "Usuni�to poprawnie.",

'del_failed' => "Nie usuni�to.",

'update_success' => "Zaktualizowano poprawnie.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_failed' => "Nie dodano.",

'administrators_title' => "Administrator",

'current_users' => "Stali operatorzy Admina",

'id' => "Id",

'user_notes' => "Operator / Notatki",

'no_logins' => "Brak wpis�w",

'super_user' => "Super operator?",

'email' => "E-mail",

'action' => "Akcja",

'add_admin' => "Chcesz doda� operatora - u�yj poni�szego formularza.",

'full_name' => "Pe�na nazwa:",

'username' => "Nazwa operatora:",

'administrator' => "Administrator",

'email2' => "Email:",

'password' => "Has�o:",

'pass_warn' => "(wpisz nowe has�o, tylko gdy chcesz je naprawd� zmieni�)",

'make_super' => "Utworzy� super operatora?",

'notes' => "Notatka:",

'permissions' => "Pozwolenia",

'pass_updated' => "Has�o zmieniono.",

'pass_not_updated' => "Has�a nie zmieniono.",

'change_pass_below' => "Prosz� zmieni� has�o:",

'old_pass' => "Stare has�o:",

'new_pass' => "Nowe has�o:",

'confirm_pass' => "Potwierd� has�o:",

'perms_updated' => "Pozwolenia zaktualizowano.",

'set_perms' => "Ustaw zezwolenia dla tego operatora.",

'section' => "Sekcja",

'nb_bulk' => "Uwaga! Na masowe wysy�anie emaili do klient�w nale�y wpierw uzyska� ich pisemn� zgod�.",

'admin_sessions' => "Sesje Admina",

'sessions_desc' => "Poni�ej pokazano ostatnie pr�by logowania do Admina. Zwr�� uwag� i upewnij si� czy nie by�o to w�amanie. Zaleca si� usilnie zmienia� has�o Admina na nowe co jaki� czas.",

'login_id' => "Login ID",

'time' => "Czas",

'ip_address' => "Adres IP",

'success' => "Poprawnie",

);



$lang['admin']['categories'] = array(

'delete_success' => "Usuni�to poprawnie.",

'delete_fail' => "Nie usuni�to.",

'update_success' => "Aktualizacja poprawna.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_failed' => "Nie dodano.",

'categories' => "Kategorie",

'categories_desc' => "Poni�ej jest lista wszystkich aktualnych kategorii w bazie danych.",

'cat_name' => "Nazwa kategorii",

'dir' => "Katalog",

'image' => "Obrazek",

'no_products' => "Liczba produkt�w",

'action' => "Akcja",

'cannot_del' => "Ta kategoria nie mo�e by� usuni�ta - zawiera produkty.",

'no_cats_exist' => "Nie ma kategorii w bazie danych.",

'add_desc' => "Mo�esz doda� kategorie z nielimitowan� liczb� podkategorii, za�aduj nowe obrazki lub wykorzystaj te z serwera.",

'category' => "Kategoria",

'category_name' => "Nazwa kategorii:",

'category_level' => "Poziom kategorii:",

'top_level' => "Najwy�szy poziom",

'image_optional' => "Obrazek: (na �yczenie)",

'upload_new_image' => "Za�aduj nowy obrazek",

'browse_existing' => "Zobacz obrazki za�adowane",

'ship_by_cat' => "Ekspedycja wg kategorii",

'per_ship' => "Za przesy�k�:",

'per_item' => "Za pozycj�:",

'per_int_ship' => "Za przesy�k� (zagraniczn�):",

'per_int_item' => "Za pozycj� (zagraniczn�):",

);



$lang['admin']['customers'] = array(

'customers' => "Klienci",

'delete_success' => "Usuni�to poprawnie.",

'delete_fail' => "Nie usuni�to.",

'update_success' => "Dane klienta zaktualizowano poprawnie.",

'update_fail' => "Danych klienta nie zaktualizowano.",

'search_term' => "Warunek wyszukiwania:",

'reset' => "Skasuj",

'name' => "Nazwa",

'email' => "Email",

'invoice_add' => "Adres na rachunku",

'phone' => "Telefon",

'reg_ip' => "Data Rej. / Czas / IP",

'no_orders' => "Brak zam�wie�",

'action' => "Akcja",

'no_cust_exist' => "Nie ma klient�w w bazie danych.",

'edit_below' => "Edytuj poni�ej dane tego klienta:",

'title' => "Tytu�",

'first_name' => "Imi�:",

'last_name' => "Nazwisko:",

'email2' => "Email:",

'address' => "Adres:",

'town' => "Miasto:",

'county' => "Region / Wojew�dztwo:",

'postcode' => "Kod pocztowy:",

'country' => "Kraj:",

'phone2' => "Telefon:",

'edit_customer' => "Edytuj klienta",

'no_download_email' => "Nie by�o emaili do pobrania.",

'email_customers' => "Email klient�w",

'create_email' => "Prosz� napisa� tutaj sw�j email:",

'hint' => "Wzmianka:",

'click_source' => "Mo�esz klikn�� powy�ej przycisk �r�d�owy, kt�ry wkleja do dokumentu html to co ju� jest zrobione.",

'important' => "Wa�ne:",

'absolute_links' => "Przygotuj wszystkie obrazki i linki tak, �e b�d� bezwarunkowe (np. zawieraj� nazw� domeny). W wi�kszo�ci kraj�w jest obowi�zkiem da� adresatowi mo�liwo�� samodzielnego wypisania si� z list mailingowych:",

'email_subject' => "Temat emaila:",

'senders_name' => "Nazwa nadawcy:",

'senders_email' => "Email nadawcy:",

'return_path' => "Zwrot do:",

'bounce_desc' => "(�cie�ka zwrotna odbi�a emaile do:)", 

'send_test' => "Wys�a� email testowy?",

'test_email_recip' => "Odbiorca emaila testowego:",

'send_email' => "Wy�lij email",

'download_or_send' => "Wybierz - czy pobra� adresy email klient�w czy z tego miejsca wys�a� grup� emaili.",

'please_choose' => "Prosz� wybra�:",

'used_to_download' => "(u�yj do pobrania adres�w email dla <b>BES</b> - programu  grupowego wysy�ania emaili)",

'bulk_to_subscribed' => "(wysy�aj emaile grupowo lecz TYLKO do tych, kt�rzy s� zapisani na li�cie mailingowej)",

'include_name' => "Wstawi� nazw�?",

'download_email' => "Pobierz email",

'send_email' => "Wy�lij email",

'sending_complete' => "Wysy�anie zako�czone",


'sending' => "Wysy�anie emaila",

'recipient' => "Odbiorca:",

'prev_page' => "Poprzednia strona",

'page' => "Strona:",

'bulk_finished' => "<b>BES</b> wykona� swoje zadanie poprawnie.",

'time_taken' => "Czas operacji:",

'recipients' => "Odbiorcy:",

);


$lang['admin']['docs'] = array(

'update_fail' => "Strona powitalna (Homepage) nie zosta�a zaktualizowana, prosz� upewni� si� czy atrybuty pliku <b>includes/static/home.inc.php</b>na to pozwalaj�.",

'update_success' => "Homepage zosta�a zaktualizowana.",

'homepage' => "Homepage",

'enabled' => "W��czono:",

'enabled_desc' => "(je�li nie, b�dzie u�yty zamiennie j�zyk domy�lny)",

'language' => "J�zyk:",

'title' => "Tytu�:",

'use_rich_text' => "Aby dokona� zmian w homepage u�yj edytora tekstowego. Przed zapisaniem zmian przegl�dnij wpierw poprawno�� wykonanej pracy.",

'update_homepage' => "Aktualizuj Homepage",

'delete_success' => "Usuni�to poprawnie.",

'delete_fail' => "Nie usuni�to.",

'update_success' => "Zaktualizowano poprawnie.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_fail' => "Nie dodano.",

'site_docs_other_lang' => "Umie�� dokument - (w innych j�zykach)",

'use_rich_text' => "Aby doda� lub redagowa� dokumenty w innych j�zykach u�yj edytora tekstowego",

'site_doc_other_lang' => "Zbi�r dokument�w - (w innych j�zykach)",

'doc_name' => "Nazwa dokumentu:",

'language' => "J�zyk:",

'update_doc' => "Aktualizuj dokument",

'save_doc' => "Zapisz dokument",

'current_doc_list' => "Lista wszystkich aktualych dokument�w jest poni�ej. Mo�na mie� nielimitowan� ich liczb� i mog� by� one zmieniane i/lub usuwane w ka�dym czasie.",

'doc_name2' => "Nazwa dokumentu",

'action' => "Akcja",

'no_site_docs' => "Nie ma miejsca dokument�w w bazie danych.",

'site_docs' => "Zbi�r dokument�w",

'site_doc' => "Umie�� dokument",

'languages' => "J�zyki",

'no_docs' => "Nie umieszczono dokument�w w bazie danych.",

);



$lang['admin']['filemanager'] = array(

'image_browser' => "Przegl�darka obrazk�w",

'file' => "Plik:",

'no_imgs' => "�adne obrazki nie s� dost�pne. Prosz� zamkn�� to okno i za�adowa� tutaj jaki� obrazek.",

'preview' => "Widok:",

'ok' => "Ok",

'cancel' => "Anuluj",

'prod_cat_use_img' => "Tam s� produkty lub kategorie u�ywaj�ce obrazka '%s'.",

'continue_q' => "KONTYNUOWA� USUWANIE?",

'site_doc_use_img' => "Tam jest miejsce dokumentu u�ywaj�cego obrazka '%s'.",

'home_use_img' => "Obrazek '%s' jest u�yty na stronie Homepage.",

'gallery_use_img' => "Obrazek '%s' jest u�yty w galerii widok�w produkt�w.",

'image_deleted' => "Obrazek usuni�ty.",

'delete_failed' => "Nie usuni�to.",

'image_manager' => "Zarz�dca obrazk�w",

'delete_from_server' => "Poni�ej mo�esz usun�� obrazki z serwera.",

'img_click_prev' => "Obrazek (kliknij do podgl�du)",

'size' => "Rozmiar",

'action' => "Akcja",

'no_images_added' => "Obrazka nie dodano.",

'prev_file' => "Przegl�daj plik",

'close_window' => "Zamknij okno",

'no_image_selected' => "Nie wybrano obrazka do podgl�du.",

'file_uploader' => "�adowarka pliku",

'upload_image' => "�aduj obrazek",

'please_browse_img' => "Zobacz swoje obrazki:",

'file_too_big' => "B��d: %s za du�y %s",

'img_already_exists' => "B��d: %s ju� istnieje - prosz� przemianowa� plik, kt�ry pr�bujesz za�adowa� lub poszuka� zamiennika.",

'upload_too_large' => "B��d: Nie ma �adnego obrazka do za�adowania lub plik by� za du�y dla serwera. Domy�nie �adowanie ograniczone do 2MB.",

'not_valid_mime' => "B��d: %s nieodpowiedni typ obrazka.",

'image_upload_success' => "W porz�dku: %s za�adowano.",

'back' => "&laquo; Wr��",

);



$lang['admin']['misc'] = array(

'license_form' => "Formularz licencji",

'write_error' => "B��d zapisu pliku includes/global.inc.php. Spr�buj zmieni� warto�� CHMOD na 0777. Pami�taj aby potem ustawi� j� zn�w na 0644!",

'try_again' => "Pr�buj Ponownie",

'purchase_cubecart' => "Kup CubeCart:",

'invalid_key' => "Klucz niewa�ny lub by� ju� u�yty.",

'purchase_license_key' => "Wykup klucz licencji",

'run_unlicensed' => "Pr�bujesz uruchomi� nielicencjonowan� wersj� CubeCart. Prosz� wprowadzi� klucz licencji.",

'license_key' => "Klucz licencji:",

'submit_key' => "Potwierdzenie klucza",

'server_info' => "Informacja o serwerze",

'ini_set_desc' => "Poni�sze informacje pokazuj� aktualne ustawienia �rodowiska serwera. Zawieraj� one wszystkie sk�adniki informacji jakie trzeba by zmieni�, napotykaj�c problemy z CubeCart. Uwaga! Je�li masz serwer virtualny lub wsp�dzielony jest mo�liwe, �e b�dziesz mie� ograniczon� mo�liwo�� dokonywania zmian. Ta</span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> funkcja mo�e by� dosy� cz�sto u�ywana do prze�amania takich ogranicze�.",

);



$lang['admin']['orders'] = array(

'send_invoice_q' => "Status tego zam�wienia zosta� zmieniony poprawnie. Od tego momentu mo�esz wys�a� klientowi rachunek emailowy i da� mu dost�p do pobrania Digitali (produkt�w w postaci cyfrowej). Zr�b to",

'click_here' => "Kliknij Tutaj",

'send_invoice_desc' => "Je�li status zmieni� si� z <b>Pending</b> (Zg�oszone) na <b>Processing</b> (W trakcie) to wybierasz - Wysy�k� klientowi rachunku za pokwitowaniem i otwarcie dost�pu do Digitala (je�li takowy produkt oferujesz).",

'delete_success' => "Usuni�to pomy�lnie.",

'delete_fail' => "Nie usuni�to.",

'orders' => "Zam�wienia",

'all_orders' => "Poni�ej wszystkie z�o�one zam�wienia, zarejestrowane w bazie danych.",

'order_no' => "Nr Rachunku",

'status' => "Status",

'date_time' => "Data/Czas",

'customer' => "Klient",

'ip_address' => "Adres IP",

'cart_total' => "Zawarto�� w�zka",

'action' => "Akcja",

'no_orders_in_db' => "Nie ma zam�wie� w bazie danych.",

'order_email' => "Szanowna(ny) %s,\n\n status Twojego zam�wienia id: %s zosta� zmieniony na %s\n\n",

'email_staff_comments' => "Nasz pracownik doda� nast�puj�cy komentarz: \n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Automatyczna wiadomo�c, wys�ana z %s",

'email_subj_status_change' => "Zmiana statusu zam�wienia:",

'order_no2' => "Zam�wienie nr:",

'print_packing_slip' => "Drukuj etykiet� paczki",

'customer_info' => "Informacja o kliencie",

'invoice_address' => "Adres na rachunku:",

'delivery_address' => "Adres dostawy:",

'contact_info' => "Informacje kontaktowe:",

'tel' => "Tel:",

'mobile' => "Mobile:",

'email' => "Email:",

'customer_comments' => "Komentarz klienta:",

'no_comments_left' => "Nie pozostawiono komentarza.",

'order_summary' => "Podsumowanie zam�wienia",

'product' => "Produkt",

'code' => "Kod",

'quantity' => "Ilo��",

'price' => "Cena",

'download_link' => "Pobierz link:",

'warn_reset' => "Kasuje liczb� pobra� do zera i przed�u�a termin dost�pu.",

'reset_link' => "Skasuj po��czenie",

'download_stats' => "Liczba (%s) pobra�. Czas dost�pu na pobrania up�ywa po %s",

'ip_address2' => "Adres IP:",

'order_date_time' => "Data zam�wienia / Godzina:",

'payment_method' => "Spos�b zap�aty:",

'ship_method' => "Spos�b wysy�ki:",

'subtotal' => "Suma netto:",

'total_tax' => "Kwota podatku:",

'shipping' => "Wysy�ka:",

'grand_total' => "Razem do zap�aty:",

'order_notfound' => "Zam�wienia nr %s nie znaleziono.",

'order_status' => "Status zam�wienia",

'shipping_date' => "Data wysy�ki:",

'ship_today' => "W dniu dzisiejszym",

'modify_status' => "Zmie� status:",

'staff_comments' => "Komentarz personelu:",

'info_not_sent_customer' => "(tej informacji NIE wys�ano do klienta!)",

'inform_customer' => "Poinformuj klienta:",

'customer_notified' => "(sprawdzono, �e klient nie zosta� powiadomiony o zmianie statusu zam�wienia)",

'comments_2_customer' => "Komentarz dla klienta:",

'comments_2_customer_desc' => "(tre�� b�dzie dodana do emaila, kt�rym chcesz poinformowa� klienta, �e ma zmieniony status zam�wienia)",

'save_order_status' => "Zapisz ztatus zam�wienia",

'paid_by' => "Zap�acono ... :",

'delivered_to' => "Dostarczono do:",

'invoice_reciept_for' => "Rachunek / Pokwitowanie dla:",

'order_of_time' => "Twoje zam�wienie z dnia:",

'order_id' => "ID Zam�wienia:",

'digi_goods_desc' => "Je�li zam�wi�e� Digitale (towar w postaci cyfrowej) powiniene� otrzyma� wiadomo�� ze wskaz�wkami do ich pobrania. Instrukcje takie b�d� dost�pne r�wnie� z panelu kontrolnego Twojego konta u nas, nad kt�rym sam masz ca�kowit� kontrol�.",

'thank_you' => "Dzi�kujemy za zakupy dokonane w naszym sklepie!",

);



$lang['admin']['products'] = array(

'show_featured' => "Wstawi� go w Homepage do najnowszych produkt�w?",

'upload_new_images' => "�aduj obrazki",

'no_images_avail' => "Oops, nie ma tam obrazk�w.",

'prod_added_to_cat' => "Produkt dodano do kategorii.",

'prod_not_added_to_cat' => "Nie dodano produktu do kategorii.",

'prod_removed_from_cat' => "Produkt usuni�to z kategorii.",

'prod_not_removed_from_cat' => "Nie usuni�to produktu z kategorii.",

'title_extraCats' => "Zarz�dzanie kategori�",

'manage_cats' => "Nadzoruj kategorie",

'master_cat' => "Kategoria g��wna:",

'close_window' => "Zamknij okno",

'img_added_to_prod' => "Obrazek dodany przy produkcie.",

'img_not_added_to_prod' => "Nie dodano obrazka przy produkcie.",

'img_removed' => "Usuni�to obrazek przy produkcie.",

'img_not_removed' => "Nie usuni�to obrazka przy produkcie.",

'image_management' => "Zarz�dzanie obrazkami",

'manage_images' => "Zarz�dzaj obrazkami",

'image' => "Obrazek",

'action' => "Akcja",

'delete_success' => "Usuni�to poprawnie.",

'delete_fail' => "Nie usuni�to.",

'update_successful' => "Aktualizacja poprawna.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_fail' => "Nie dodano.",

'prod_inventory' => "Wykaz produkt�w",

'current_prods_in_db' => "Lista wszystkich dost�pnych produkt�w w bazie danych.",

'all_cats' => "Wszystkie kategorie",

'prod_name' => "Nazwa produktu",

'prod_id' => "Id produktu",

'prod_code' => "Kod produktu",

'master_cat2' => "Kategoria g��wna",

'title' => "Tytu�",

'stock_level' => "Poziom zapas�w",

'normal_price' => "Cena bazowa",

'sale_price' => "Cena sprzeda�y",

'asc' => "Zam�wienie rosn�co",

'desc' => "Zam�wienie malej�co",

'containing_text' => "Zawieraj�ca tekst",

'filter' => "Filtr",

'reset' => "Kasuj",

'id' => "Id",

'type' => "Typ",

'name' => "Nazwa",

'price_sale_price' => "Cena / Cena obni�ona",

'in_stock' => "W zapasie",

'action' => "Akcja",

'languages' => "J�zyki",

'no_products_exist' => "Nie ma �adnego produktu w bazie danych.",

'add_prod_desc' => "Dodaj produkt do zbioru za pomoc� poni�szego formularza.",

'product' => "Produkt",

'prod_name2' => "Nazwa produktu:",

'prod_stock_no' => "Produkt/Zapas Nr:",

'auto_generated' => "(je�li pozostawisz puste, b�dzie utworzone automatycznie)",

'description' => "Opis:",

'primary_lang' => "(w j�zyku podstawowym, w innych mo�na doda� p�niej)",

'category' => "Kategoria:",

'image2' => "Obrazek:",

'opt_and_thumbs' => "(dowolny - miniatury b�d� zrobione automatycznie, GDY format pliku jest obs�ugiwany)",

'upload_new' => "Za�aduj nowy obrazek",

'browse_existing' => "Zobacz jakie ju� masz",

'normal_price2' => "Cena podstawowa:",

'sale_price2' => "Cena odsprzeda�y:",

'sale_mode_desc' => "(ustal gdy b�dzie nast�powa� jedynie odsprzeda� produktu)",

'prod_weight' => "Waga produktu:",

'tax_class' => "Klasyfikacja podatku:",

'stock_level2' => "Poziom zapas�w:",

'reduce_stock_level' => "(zmniejsza si� wraz z ilo�ci� sztuk sprzedanych)",

'use_stock_q' => "U�y� wielko�ci zapas�w?",

'product_type' => "Typ produktu:",

'tangible' => "Rzecz",

'digital' => "Digital (plik w postaci cyfrowej)",

'digi_path' => "Produkty Digital potrzebuj� znajomo�ci �cie�ki HTTP albo SRP (Server Root Path) - sp�jrz na informacj� poni�ej.",

'digi_info' => "Informacja o Digitalach:",

'digi_desc' => "<p><strong>HTTP Path:</strong> http://www.domain.com/downloads/download.exe<br/><strong>Server Root Path:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Zalecane!)</strong></p>

<p>Zaleta u�ywania SRP polega na tym, �e pliki mog� by� magazynowane gdzie indziej ni� w folderze powszechnie dost�pnym. Je�li wybierzesz ten spos�b CubeCart stworzy automatycznie link, kt�ry ma okre�lony up�yw czasu i maksymaln� liczb� pobra�, z g�ry wyznaczon� w ustawieniach sklepu.</p>",

'prod_inv_langs' => "Wykaz produkt�w - (w innych j�zykach)",

'use_rich_oth_lang' => "U�yj edytora tekstowego do dodania lub zredagowania produkt�w w innych j�zykach.",

'language' => "J�zyk:",

'update_prod_lang' => "Aktualizuj opis produktu",

'save_prod_lang' => "Zapisz opis produktu", 

'other_langs_exdefault' => "Poni�ej lista wszystkich dost�pnych produkt�w z opisem w j�zykach innych ni� domy�lny.",

'no_lang_exist' => "Opisu w tej wersji j�zykowej nie ma w bazie danych",

'opt_add_success' => "Nazw� opcji dodano.",

'opt_add_fail' => "Nie dodano opcji.",

'att_add_success' => "Parametry opcji dodano.",

'att_add_fail' => "Nie dodano parametr�w opcji.",

'assign_success' => "Opcja przypisane do produktu.",

'assign_fail' => "Nie przypisano opcji do produktu.",

'product_options' => "Opcje produktu",

'product_option' => "Opcja produktu",

'quick_assign' => "Szybki przydzia�:",

'prod_opts_of' => "Wyb�r produktu ze wzgl�du na",

'to' => "Do",

'go' => "Dalej",

'opt_step1' => "1. Stw�rz opcj� (np. kolor)",

'opt_id' => "Id",

'opt_name' => "Nazwa opcji",

'warn_remove_opt' => "Na pewno usun�� nazw� tej opcji? r\n\n OSTRZE�ENIE! Wszystko co jest powi�zane z t� nazw� b�dzie usuni�te!",

'no_options_made' => "Nie utworzono nazwy opcji produktu.",

'option' => "Opcja",

'opt_step2' => "2. Stw�rz warto�� opcji (np. czerwony)",

'option_attributes' => "Parametry opcji",

'warn_remove_att' => "Na pewno usun�� ten parametr opcji? \n\n OSTRZE�ENIE! Wszystko co jest powi�zane z tym parametrem b�dzie usuni�te!",

'no_attributes_made' => "Nie wybrano parametr�w opcji produktu.",

'attribute' => "Parametr",

'opt_step3' => "3. Przypisz warto�� &amp; opcji do produktu (np. T-Shirt &gt; kolor &gt; czerwony)",

'option_attribute' => "Parametr opcji",

'option_price' => "Cena dla tej opcji",

'add_subtract' => "Dodaj / Odejmij",

'remove_opt_prod' => "Na pewno oddj�� t� opcj� od tego produktu?",

'no_assigned_opts' => "Nie przypisano �ednej opcji jakiemu kolwiek produktowi.",

'prods_made_1st' => "Zanim stworzysz opcje dodaj wpierw produkty.",

);



$lang['admin']['settings'] = array(

//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP Host:",

'defaultHost' => "(Domy�lnie: localhost)",

'smtpPort' => "SMTP Port:",

'defaultPort' => "(Domy�lnie: 25)",

'smtpAuth' => "Potwierdzi�?",

'defaultAuth' => "(Domy�lnie: Tak)",

'smtpUsername' => "SMTP U�ytkownik:",

'smtpPassword' => "SMTP Has�o:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "Pokaza� najnowsze produkty na homepage?",

'no_latest' => "Liczba najnowszych produkt�w do pokazania:",

'off_line_settings' => "Ustawienia off line",

'off_line' => "Zamkn�� sklep?",

'off_line_content' => "Wiadomo�� off line:",

'off_line_allow_admin' => "Pozwoli� administratorom na podgl�d sklepu off line? (wymaga sesji Admina)",


'store_settings' => "Ustawienia sklepu",

'edit_below' => "Redaguj poni�ej ustawienia konfiguracji sklepu:",

'meta_data' => "Meta dane",

'browser_title' => "Tytu� (w przegl�darce):",

'meta_desc' => "Opis:",

'meta_keywords' => "S�owa kluczowe:",

'comma_separated' => "(oddzielaj przecinkiem)",

'store_co_name' => "Sklep / Nazwa firmy:",

'store_address' => "Adres sklepu:",

'country' => "Kraj:",

'zone' => "Region/Wojew�dztwo/Strefa:",

'dirs_folders' => "Katalogi &amp; Foldery",

'rootRel' => "G��wny folder publikacji HTML dla sklepu:",

'include_slash' => "(wstaw prawy uko�nik)",

'storeURL' => "Poprawny URL sklepu:",

'eg_domain_com' => "np: http://www.domain.com",

'rootDir' => "G��wny katalog na serwerze:",

'eg_root_path' => "np: /path/to/your/webstore",

'rootRel_SSL' => "G��wny SSL folder publikacji HTML dla sklepu:",

'storeURL_SSL' => "Poprawny SSL URL sklepu:",

'eg_domain_SSL' => "np: https://secure.domain.com",

'rootDir_SSL' => "G��wny katalog SSL na serwerze:",

'eg_root_path_secure' => "np: /path/to/your/secure/webstore",

'enable_ssl' => "W��czy� SSL?",

'ssl_warn' => "(Ta zmiana b�dzie skuteczna dopiero po zatwierdzeniu. Zanim zrobisz zmian� upewnij si�, �e Tw�j adres HTPPS oraz �cie�ka do g��wnego katalogu SSL jest poprawna i funkcjonuje)",

'digital_downloads' => "Pobieranie Digitali",

'download_expire_time' => "Termin pobierania up�ywa:",

'seconds' => "(sekund)",

'download_attempts' => "Pr�b pobierania:",

'attempts_desc' => "(tyle razy klient mo�e pr�bowa� pobra� produkt)",

'styles_misc' => "Sposoby &amp; R�norodne",

'default_language' => "J�zyk domy�lny:",

'store_skin' => "Sk�rka sklepu:",

'no_cats_per_row' => "Kategorii w szeregu:",

'dir_symbol' => "Znak umowny katalogu:",

'prods_per_page' => "Produkt�w na stronie:",

'precis_length' => "Charakterystyka produktu:",

'chars' => "(znak�w)",

'no_sale_items' => "Pozycji w pude�ku:",

'no_pop_prod' => "Pozycji w kartonie zbiorczym:",

'email_name' => "Nazwa emaila:",

'email_name_desc' => "(ze zbioru emaili - u�ywane jako nazwa)",

'email_address' => "Adres email:",

'email_address_desc' => "(ze zbioru emaili - u�ywane jako adres)",

'mail_method' => "Spos�b wysy�ania poczty:",

'mail_recommended' => "(zalecane SMTP)",

'max_upload_size' => "Maksymalny rozmiar pliku:",

'under_x_recom' => "(zalecane poni�ej 2048Kb)",

'max_sess_length' => "Maksymalna d�ugo�� sesji:",

'db_settings' => "Ustawienia bazy danych",

'db_host' => "Nazwa hosta bazy danych:",

'db_username' => "U�ytkownik bazy danych:",

'db_password' => "Has�o bazy danych:",

'db_name' => "Nazwa bazy danych:",

'db_prefix' => "Prefix bazy danych:",

'gd_settings' => "Ustawienia GD",

'gd_ver' => "Wersja GD:",

'gd_thumb_size' => "Rozmiar miniaturki:",

'gd_gif_support' => "Wybra� wsparcie GIF: (sprawd� czy serwer to obs�uguje)", 

'gd_max_img_size' => "Maksymalny rozmiar obrazka:",

'gd_img_quality' => "Rozdzielczo�� obrazka:",

'recom_quality' => "(Zalecane 60 - 80)",

'stock_settings' => "Ustawienia zapas�w",

'use_stock' => "Pokaza� poziom zapas�w?",

'allow_out_of_stock_purchases' => "Pozwoli� na zakupy ponad zapas?",

'weight_unit' => "Jednostka wagi:",

'time_and_date' => "Czas &amp; Data",

'time_format' => "Format czasu:",

'time_format_desc' => "(Sp�jrz <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Korekta czasu:",

'time_offset_desc' => "(Sekundy � u�ywa� dla serwera w innej strefie czasowej)",

'date_format' => " Format daty:",

'date_format_desc' => "(Sp�jrz <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Ustawienia lokalne",

'default_currency' => "Waluta domy�lna:",

'inc_tax_prices' => "W��czy� podatek do cen?",

'sale_mode' => "Metoda sprzeda�y:",

'percent_of_all' => "Obni�ka cen o ustalony procent",

'ind_sale_per_item' => "Indywidualne ceny za sztuk�",

'sale_mode_off' => "Wyprzeda�",

'sale_per_off' => "Procent obni�ki:",

'sale_per_off_desc' => "(pomniejszy to wszystkie ceny jednocze�nie)",

'diff_dispatch' => "Dostarczy� na adres inny ni� na rachunku?",

'update_settings' => "Aktualizuj ustawienia",

'update_success' => "Aktaualizacja poprawna.",

'update_fail' => "Nie zaktualizowano.",

'add_success' => "Dodano poprawnie.",

'add_fail' => "Nie dodano.",

'delete_success' => "Usuni�to poprawnie.",

'delete_failed' => "Nie usuni�to.",

'currencies' => "Waluty",

'currency' => "Walut�",

'currencies_desc' => "Poni�ej dodaj, redaguj lub usu� waluty:",

'c_code' => "Kod",

'c_name' => "Nazwa",

'c_value' => "Warto��",

'symbol_left' => "Symbol po lewej",

'symbol_right' => "Symbol po prawej",

'decimal_places' => "Miejsca dziesi�tne",

'last_updated' => "Ostatnia aktualizacja",

'c_status' => "Status",

'no_currencies' => "Nie ma walut w bazie danych.",

'countries' => "Kraje",

'country' => "Kraj:",

'edit_countries_below' => "Redaguj lub usu� poni�sze kraje:",

'disable' => "Wy��cz",

'enable' => "W��cz",

'iso' => "ISO",

'iso_name' => "Nazwa",

'iso3' => "ISO3",

'num_code' => "Kod Num",

'action' => "Akcja",

'warn_del_country' => "Napewno chcesz to usun��? Wszystkie razem - regiony, wojew�dztwa i strefy b�d� usuni�te.",

'no_countries_in_db' => "Nie ma kraj�w w bazie danych.",

'edit_counties' => "Zredaguj lub usu� poni�sze regiony/strefy/wojew�dztwa:",

'no_counties_in_db' => "Nie ma region�w, wojew�dztw lub stref w bazie danych.",

'tax_Settings' => "Ustawienia podatku",

'edit_locale_below' => "Zredaguj poni�ej ustawienia lokalne:",

'tax_only_to' => "Zastosuj podatek TYLKO w nast�puj�cym obszarze:",

'manage_tax_below' => "Zarz�dzaj poni�ej Twoimi r�norodnymi stawkami podatku. One mog� by� stosowane osobno do ka�dego produktu, jako �e mo�esz mie� towar zwolniony lub zr�nicowane stawki dla r�nych typ�w produkt�w.",

'tax_class2' => "Klasyfikacja podatku",

'rate_per' => "Stawka (%)",

'no_taxes_setup' => "Nie ustawiono podatku.",

'tax' => "Podatek",

);



$lang['admin']['stats'] = array(

'store_stats' => "Statystyka sprzeda�y",

'choose_view' => "Wybierz statystyki do przegl�du:",

'search_terms' => "Warunki wyszukiwania",

'product_pop' => "Chodliwo�� produktu",

'cust_online' => "Klienci w sklepie",

'search_terms_order_by' => "Warunki wyszukiwania (porz�dkuj wg nr-u)",

'sorry_no_data' => "Nie ma danych do pokazania.",

'product_pop_ordered_by' => "Chodliwo�� produktu  (porz�dkuj wg odwiedzin)",

'cust_active' => "Klienci aktywni przez ostatnie 15 minut.",

'hash' => "#",

'customer' => "Klient",

'location' => "Sk�d",

'sess_start_time' => "Czas rozpocz�cia sesji", 

'last_click_time' => "Czas ostatniego klikni�cia",

'sess_length' => "D�ugo�� sesji",

'geust' => "Go��",

'signed_in' => "Wszed�",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "OSTRZE�ENIE: Plik konfiguracyjny 'includes/global.inc.php' is jest otwarty na zmiany a to jest ryzykowne dla sklepu. Ustaw jego warto�� CHMOD na 0644 tak szybko jak to mo�liwe.",

'401' => "B��d 401: Nie masz pozwolenia na dost�p do tej strony. Zapytaj administratora czy Ci go udzieli.",

'welcome_note' => "Witamy w panelu Administratora CubeCart",

'last_login' => "Ostatnie logowanie",

'by' => "przez",

'failed' => "B��dny.",

'store_overview' => "Przegl�d sklepu:",

'version' => "Wersja:",

'visit_cc' => "Odwied� serwer pobierania CubeCart",

'no_products' => "Liczba produkt�w:",

'no_customers' => "Liczba klient�w:",

'img_upload_size' => "Rozmiar foldera obrazk�w:",

'no_orders' => "Liczba zam�wie�:",

'quick_search' => "Szybkie wyszukiwanie:",

'order_no' => "Numer zam�wienia:",

'search_now' => "Szukaj teraz",

'customer' => "Klient:",

'login_failed' => "B��dne logowanie! Chyba nazwa i/lub has�o nie by�o poprawne.",

'new_pass_sent' => "Nowe has�o zostanie wys�ane",

'no_admin_sess' => "Nie wykryto sesji administracyjnej.",

'login_fail_2' => "B��dne logowanie. Spr�buj ponownie.",

'login_below' => "Zaloguj si� poni�ej:",

'username' => "Nazwa operatora:",

'password' => "Has�o:",

'request_pass' => "Popro� o has�o",

'login' => "Zaloguj",

'logout_failed' => "B��d wylogowania, jako �e nie by�a to sesja Admina.",

'reset_pass_email' => "Szanowna(ny) %s,

O odtworzenie Twojego has�a poprosi�e� Ty, lub kto� kto pod Ciebie si� podszywa. 

Twoje nowe parametry dost�pu to:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nazwa: %s
Has�o: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Ten email zosta� wys�any przez %s/admin/requestPass.php\n

IP Adres Nadawcy: %s",

'pass_reset_failed' => "B��d odtworzenia has�a.",

'enter_email_below' => "Umie�� poni�ej sw�j adres email:",

'email_address' => " Adres email:",

'send_pass' => "Wy�lij has�o",

);



$lang['admin']['nav'] = array(

'permission_error' => "Nie masz tu zezwolenia na wst�p.",

'navigation' => "Nawigacja",

'admin_home' => "Wn�trze Admina",

'store_home' => "Wn�trze sklepu",

'store_config' => "Konfiguracja sklepu",

'gen_settings' => "Ustawienia og�lne",

'taxes' => "Podatki",

'countries_zones' => "Kraje &amp; Strefy",

'currencies' => "Waluty",

'modules' => "Modu�y",

'shipping' => "Wysy�ka",

'gateways' => "Bramki p�atnicze",

'affiliates' => "Cz�onkowie",

'catalog' => "Katalog",

'view_products' => "Przegl�d produkt�w",

'add_product' => "Dodaj produkt",

'product_options' => "Opcje produktu",

'view_categories' => "Przegl�d kategorii",

'add_categories' => "Dodaj kategori�",

'customers' => "Klienci",

'view_customers' => "Przegl�d klient�w",

'email_customers' => "Email klient�w",

'orders' => "Zam�wienia",

'file_manager' => "Zarz�dca plik�w",

'manage_images' => "Zarz�dzaj obrazkami",

'upload_images' => "Za�aduj obrazki",

'statistics' => "Statystyki",

'view_stats' => "Przegl�d Statystyk",

'documents' => "Dokumenty",

'homepage' => "Homepage",

'site_docs' => "Zbi�r dokument�w",

'misc' => "R�no�ci",

'server_info' => "Informacja o serwerze",

'admin_users' => "U�ytkownicy Admina",

'administrators' => "Administratorzy",

'admin_sessions' => "Sesje Admina",

);



$lang['admin']['incs'] = array(

'administration' => "Administracja",

'logged_in_as' => "Zalogowany jako:",

'logout' => "Wyloguj",

'change_pass' => "Zmie� has�o",

'error_editing' => "B��d pr�by redagowania. Dane wej�ciowe nie po kolei.",

'config_updated' => "Zaktualizowano Konfiguracj�. Upewnij si� czy atrybuty pliku ustawiono poprawnie z powrotem.",

'cant_write' => "Nie mog� otworzyc pliku '%s' do zapisu. Spr�buj zmieni� warto�� CHMOD na 0777. Pami�taj aby powr�ci� potem do ustawie� 0644 !",

'db_config_updated' => "Konfiguracja bazy danych zaktualizowana.",

'db_cant_write' => "B��d zapisu!",

'select_above' => "Wybierz powy�sze",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Tak";

$lang['front']['no'] = "Nie";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "U�yteczne Linki",

'reg_and_checkout' => "Rejestruj &amp; Wymelduj",

'cont_shopping' => "Kontynuuj zakupy",

'edit_del_add' => "Podaj adres dostawy",

'edit_inv_add' => "Podaj adres do rachunku",

'empty_cart' => "Opr�nij kosz",

'prev_page' => "Poprzednia strona",

'homepage' => "Homepage",

'shop_by_cat' => "Sklep wg kategorii",

'sale_items' => "Pozycje w sprzeda�y",

'save' => "Zapisz",

'currency' => "Waluta",

'information' => "Informacja",

'products' => "Produkty:",

'categories' => "Kategorie:",

'prices' => "Ceny w:",

'language' => "J�zyki",

'mailing_list' => "Lista mailingowa",

'subscribe_below' => "Wpisz si� na nasz� list� mailingow�:",

'email' => "Email:",

'join_now' => "Wejd� teraz",

'already_subscribed' => "Ten adres email %s zosta� ju� wpisany na nasz� list�. Aby si� wypisa� prosz� zalogowa� si� na swoje konto.",

'enter_valid_email' => "Prosz� wprowadzi� poprawny adres email.",

'added_to_mail' => "Dzi�kujemy, %s zosta� dodany do naszego spisu emaili.",

'subscribed_to_mail' => "Dzi�kujemy, %s zosta� wpisany na nasz� list� mailingow�.",

'popular_products' => "Produkty chodliwe",

'featured_prod' => " Produkty zapowiadane",

'sale_items' => "Pozycje w sprzeda�y",

'search_for' => "Szukaj dla:",

'go' => "Dalej",

'welcome_back' => "Witamy ponownie",

'logout' => "Wyloguj",

'your_account' => "Twoje konto",

'welcome_guest' => "Witamy Go�cia",

'login' => "Zaloguj",

'register' => "Zarejestruj",

'shopping_cart' => "W�zek na zakupy",

'basket_empty' => "Tw�j koszyk jest pusty.",

'items_in_cart' => "Pozycji w koszyku:",

'total' => "Razem:",

'view_basket' => "Sprawd� koszyk",

);



$lang['front']['account'] = array(

'your_account' => "Twoje konto",

'personal_info' => "Informacje osobiste",

'order_history' => "Historia zam�wie�",

'change_password' => "Zmie� has�o",

'newsletter' => "Nowinki",

'login_to_view' => " Aby przegl�da� t� stron� musisz si� zalogowa�.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Wprowadzi�e� niepoprawne has�o.",

'conf_not_match' => "Potwierdzenie has�a nie pasuje do niego.", 

'change_pass' => "Zmie� has�o",

'password_updated' => "Dzi�kujemy, Twoje has�o zosta�o zaktualizowane.",

'change_pass_below' => "Prosz� zmieni� poni�ej has�o:",

'old_pass' => "Stare Has�o:",

'new_pass' => "Nowe Has�o:",

'confirm_pass' => "Potwierdz has�o:",

'submit' => "Akceptuj",

);



$lang['front']['dnExpire'] = array(

'sorry' => "�a�uj�",

'expired' => "Tw�j link do pobrania jest nieprawid�owy lub termin dost�pu ju� min��.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Zapomnia�em has�a",

'email' => "Email:",

'send_pass' => "Wy�lij has�o",

'reset_email' => "Szanowna(ny) %s %s,

O odtworzenie Twojego has�a poprosi�e� Ty lub kto� kto si� pod Ciebie podszywa. Twoje nowe parametry dost�pu to:

~~~~~~~~~~~~~~~~~~~~~~~~~~
U�ytkownik: %s
Has�o: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
U�yj poni�szego linku aby si� zalogowa�: 
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Ten email by� wys�any z %s
Adres IP Nadawcy: %s",

'new_pass_sent' => "Nowe has�o zosta�o wys�ane do %s.",

'email_not_found' => "Nie znaleziono takiego adresu email.",

'enter_email' => "Aby otrzyma� has�o tymczasowe wpisz poni�ej tw�j poprawny adres email:",

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

'newOrderMsg' => "Klient z�o�y� zam�wnienie %s, podgl�d tego zam�wienia mo�liwy za pomoc� poni�szego linku: \n\n%s",

'newOrderSubj' => "Z�o�ono nowe zam�wienie",

'payment' => "P�atno��",

'cart' => "W�zek",

'address' => "Adres",

'payment' => "Do zap�aty",

'complete' => "Zako�cz",

'fill_out_below' => "Wyczy�� poni�szy formularz:",

'transferring' => "Nalezno�� do zap�aty",

'go_now' => "Id� teraz!",

'continue' => "Dalej",

'choose_method' => "Wybierz spos�b zap�aty:",

'your_comments' => "Tw�j komentarz:",

'none_configured' => "Oops, nie okre�lono sposobu zap�aty.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Login",

'username' => "Email:",

'password' => "Has�o:",

'remember_me' => "Czy mnie pami�tasz?",

'forgot_pass' => "Zapomnia�e� swoje has�o?",

'login_success' => "Jeste� zalogowany poprawnie.",

'already_logged_in' => "Ju� si� zalogowa�e�.",

'login_failed' => "B��d w logowaniu!",

'login_below' => "Zaloguj si� poni�ej:",

);



$lang['front']['index'] = array(

'latest_products' => "Najnowsze produkty",

);



$lang['front']['logout'] = array(

'logout' => "Wyloguj",

'session_destroyed' => "Twoja sesja zosta�a anulowana.",

'no_session' => "Nie znaleziono sesji do anulowania. Chyba zawita�e� tutaj przez przypadek.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Ustawienia Newsletter'a",

'prefs_updates' => "Twoje ustawienia zosta�y zaktualizowane.",

'edit_prefs_below' => "Zredaguj poni�ej swoje ustawienia:",

'subscribe' => "Zapisa� na list� mailingow�?",

'email_format' => "Format emaila:",

'plain_text' => "Otwartym tekstem",

'html' => "HTML",

'html_abbr' => "J�zykiem znak�w hypertekstowych",

'update' => "Aktualizuj",

'login_required' => "Aby ogl�da� stron� musisz si� zalogowa�.",

);



$lang['front']['noShip'] = array(

'sorry' => "Oops",

'desc' => "Nie mo�emy wys�a� naszych produkt�w do Twojego kraju.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Oops",

'desc' => "Nie mo�emy zrealizowac zam�wienia o takiej wadze.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Wpisz poprawnie numer telefonu, ma by� wpisany cyframi.",

'complete_all' => "Upewnij si�, �e wype�ni�e� wszystkie wymagane pola.",

'email_invalid' => "Wpisz poprawnie adres email.",

'numeric_only' => "Numer telefonu, ma by� wpisany cyframi.",

'email_inuse' => "Ten adres email jest ju� u�ywany.",

'update_email' => "Szanowna(ny) %s %s,

Ten email jest potwierdzeniem, �e Twoje informacje osobiste zosta�y zaktualizowane poprawnie. Je�li za� spostrzeg�e�, �e Twoje konto zosta�o u�yte przez kogo� innego ni� Ty, prosz� si� skontaktowa� niezw�ocznie z naszym personelem..\n\n

Ten email by� wys�any z %s\n

Adres IP nadawcy: %s",

'update_email_subj' => "Zaktualizowano informacje osobiste",

'personal_info' => "Informacje osobiste",

'account_updated' => "Twoje konto zosta�o zaktualizowane. Je�li chcesz mo�esz je ponownie redagowa� poni�ej.",

'edit_below' => "Zredaguj poni�ej informacje o sobie:",

'title' => "Tytu�:",

'first_name' => "Imi�:",

'last_name' => "Nazwisko:",

'email' => "Email:",

'address' => "Adres:",

'town' => "Miasto:",

'county' => "Region/Wojew�dztwo:",

'postcode' => "Kod pocztowy:",

'country' => "Kraj:",

'phone' => "Telefon:",

'mobile' => "Kom�rka:",

'update_account' => "Aktualizuj konto",

'login_required' => "Aby ogl�da� stron� musisz si� zalogowa�.",

);



$lang['front']['reg'] = array(

'fill_required' => "Upewnij si�, �e wype�ni�e� wszystkie wymagane pola.",

'pass_not_match' => "Upewnij si�, �e Twoje has�o pasuje.",

'enter_valid_email' => "Wpisz poprawnie adres email.",

'enter_valid_tel' => "Wpisz numer wy��cznie cyframi.",

'email_in_use' => "Ten adres email jest ju�w u�yciu.",

'note_required' => "Uwaga! Wszystkie pola oznaczone gwiazdk� (*) s� wymagane do procesu rejestracji.",

'express_reg' => "Szybka rejestracja",

'submit_and_cont' => "Zatwierd� &amp; Dalej",

'personal_details' => "Dane personalne",

'address' => "Adres",

'title' => "Tytu�:",

'title_desc' => "(Pani/Panna/Pan)",

'first_name' => "Imi�:",

'address2' => "Adres:",

'last_name' => "Nazwisko:",

'email_address' => "Adres email:",

'town' => "Miasto:",

'phone' => "Telefon:",

'county' => "Region/Wojew�dztwo:",

'mobile' => "Kom�rka:",

'country' => "Region:",

'postcode' => "Kod pocztowy:",

'security_details' => "Szczeg�y bezpiecze�stwa",

'choose_pass' => "Wybierz has�o:",

'conf_pass' => "Potwierd� has�o :",

'privacy_settings' => "Ustawienia prywatno�ci",

'receive_emails' => "Chcia�bym otrzymywa� emaile ze sklepu",

'email_format' => "Format emaila:",

'styled_html' => "W stylu HTML",

'plain_text' => "Otwartym Tekstem",

'tandcs' => "Warunki u�ytkowania",

'please_read' => "Upewnij si�, �e przeczyta�e� nasze.",

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
Zobacz ten produkt za pomoc� poni�szego linku:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Ten email by� wys�any z %s
Adres IP nadawcy: %s",

'email_subject' => "Wiadomo� od: %s",

'tellafriend' => "Powiedz znajomemu",

'message_sent' => "Dzi�kujemy,  Twoja wiadomo�� do <strong>%s</strong> o '%s' zosta�a wys�ana. Je�li chcesz przekaza� j� do kolejnej osoby, zr�b to teraz poni�ej:",

'fill_out_below' => " Aby zawiadomi� znajomego o naszym towarze wstaw w poni�sze okienka '%s'.",

'friends_name' => "Imi� znajomego:",

'friends_email' => "Adres email znajomego:",

'your_name' => "Twoje Imi�:",

'your_email' => "Tw�j adres email:",

'message' => "Wiadomo��:",

'default_message' => "Cze��. My�l�, �e to '%s' mo�e Ci� zainteresowa�.",

'send' => "Wy�lij",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Wypisz mnie",

'email' => "Email:",

'go' => "Id�",

'enter_valid_email' => "Prosz� wpisa� w�a�ciwy adres email.",

'email_removed' => "Dzi�kujemy, <strong>%s</strong> zosta� usuni�ty z naszej listy mailingowej.",

'email_not_found' => "Oops, <strong>%s</strong> nie by�o go na li�cie lub zosta� ju� usuni�ty.",

'enter_email_below' => "Aby si� wypisa� z naszej listy umie�� poni�ej sw�j adres email:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Wyniki wyszukiwania",

'sale_items' => "Pozycje w sprzeda�y",

'image' => "Obrazek",

'description' => "Opis",

'price' => "Cena",

'products_in' => "Produkty w:",

'buy' => "Kup",

'more' => "Wi�cej",

'out_of_stock' => "BRAK W MAGAZYNIE",

'no_products_match' => "�aden produkt nie pasuje do zapytania:",

'no_prods_in_cat' => "Nie ma produkt�w w tej kategorii.",

);



$lang['front']['viewDoc'] = array(

'error' => "Error",

'does_not_exist' => "Taki dokument nie istnieje.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Zam�wienie Nr:",

'customer_info' => "Informacja o kliencie:",

'invoice_address' => "Adres na rachunku:",

'delivery_address' => "Adres dostawy:",

'na' => "n/a",

'customer_comments' => "Komentarze klienta:",

'order_summary' => "Streszczenie zam�wienia:",

'product' => "Produkt",

'product_code' => "Kod produktu",

'quantity' => "Ilo��",

'price' => "Cena",

'download_here' => "Pobierz tutaj",

'review_below' => "Przegl�dnij poni�ej to zam�wienie:",

'order_date_time' => "Data zam�wienia / czas:",

'payment_method' => "Spos�b zap�aty:",

'ship_method' => "Spos�b wysy�ki:",

'subtotal' => "Suma:",

'total_tax' => "Kwota podatku:",

'shipping' => "Wysy�ka:",

'grand_total' => "Do zap�aty:",

'order_not_found' => " Nie odnaleziono tego numeru zam�wienia.",

'login_required' => "Aby obejrze� stron� musisz si� zalogowa�.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Twoje zam�wienia",

'orders_listed_below' => "Poni�ej masz list� wszystkich swoich zam�wie�:",

'order_no' => "Zam�wienie Nr",

'status' => "Status",

'date_time' => "Data/Czas",

'action' => "Akcja",

'view' => "Podgl�d",

'no_orders' => "Nie zanotowali�my w naszym sklepie �adnych Twoich zam�wie�. Je�li wiesz, �e to pomy�ka prosz� si� skontaktowa� z naszym personelem przy pierwszej okazji.",

'login_required' => "Aby obejrze� stron� musisz si� zalogowa�.",

);



$lang['front']['viewProd'] = array(

'product' => "Produkt",

'product_info' => "Informacja o produkcie",

'price' => "Cena:",

'product_code' => "Kod produktu:",

'tellafriend' => "Powiedz przyjacielowi",

'quantity' => "Ilo��:",

'more_images' => "[+] Wi�cej obrazk�w",

'add_to_basket' => "Dodaj do koszyka",

'location' => "Po�o�enie:",

'no_instock' => "W zapasie:",

'instock' => "W zapasie",

'out_of_stock' => "BRAK W ZAPASIE",

'prod_opts' => "Opcje produktu:",

'prod_not_found' => "Nie ma takiego produktu.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Tw�j w�zek na zakupy obecnie jest pusty.",

'allready_customer' => "Jeste� ju� klientem?",

'login_below' => "Zaloguj sie poni�ej:",

'username' => "Email:",

'password' => "Has�o:",

'remember_me' => "Pami�tasz mnie?",

'login' => "Login",

'forgot_pass_q' => "Zapomnia�e� swojego has�a?",

'need_register' => "Chcesz si� zarejestrowa�?",

'express_register' => "Nasza strona do szybkiej rejestracji pozwala to zrobi� �atwo i sprawnie.",

'reg_and_cont' => "Zarejestruj &amp; Dalej",

'cont_shopping_q' => "Kontynuowa� zakupy?",

'cont_shopping' => "Kupuj dalej",

'cont_browsing' => " Aby przegl�da� dalej jako go�� bez zalogowania kliknij poni�ej przycisk. Uwaga! Nie b�dziesz m�g� nic kupi� bez uprzedniej rejestracji.",

);




$lang['front']['cart'] = array(

'free_shipping' => "Na koszt sklepu",

'view_cart' => "Podgl�d w�zka",

'cart' => "W�zek",

'address' => "Adres",

'payment' => "Zap�ata",

'complete' => "Zako�cz",

'add_more' => "Chcesz doda� wi�cej sztuk? Wprowad� kod produktu:",

'add' => "Dodaj",

'qty' => "Ile",

'product' => "Produkt",

'code' => "Kod",

'stock' => "Zapas",

'price' => "Cena",

'line_price' => "Cena bran�owa",

'delete' => "Usu�",

'remove' => "Zdejm sztuk�",

'invoice_address' => "Adres na rachunku",

'delivery_address' => "Adres dostawy",

'title' => "Tytu�:",

'first_name' => "Imi�:",

'last_name' => "Nazwisko:",

'address2' => "Adres:",

'town' => "Miasto:",

'county' => "Region/Wojew�dztwo:",

'postcode' => "Kod pocztowy:",

'country' => "Kraj:",

'edit_invoice_address' => "Edytuj adres do rachunku",

'edit_delivery_address' => "Edytuj adres dostawy",

'stock_warn' => "Zam�wi�e� wi�cej sztuk ni� s� aktualnie dost�pne. Dostawa mo�e wi�c by� op�niona a� zapasy zostan� uzupe�nione.",

'amount_capped' => "Oops, nie mo�emy wykona� zam�wienia ponad aktualny stan zapas�w.<br/>Ilo� zam�wionych sztuk zosta�a ograniczona do",

'na' => "n/a",

'shipping' => "Wysy�ka:",

'tax' => "Podatek:",

'subtotal' => "Suma:",

'cart_total' => "Razem w w�zku:",

'if_changed_quan' => "(je�li zmieni�e� jak�� ilo�� sztuk)",

'update_cart' => "Aktualizuj w�zek",

'continue' => "Dalej",

'cart_empty' => "Tw�j w�zek na zakupy jest obecnie pusty.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Potwierdzenie",

'cart' => "W�zek",

'address' => "Adres",

'payment' => "Zap�ata",

'complete' => "Zako�cz",

'order_success' => "Dzi�kujemy, zamowienie dokonane poprawnie! Prosz� nas zn�w odwiedzi�.",

'order_fail' => "Opps, zam�wienie b��dne!",

'try_again_desc' => "Spr�buj poni�ej zawarto�� Twojego koszyka kupi� ponownie:",

'try_again' => "Spr�buj znowu",

'request_login' => "Aby przejrze� stron� musisz si� zalogowa�.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Szanowna(ny) %s,

Dzi�kujemy za zam�wienie nr: %s z�o�one na %s

Transakcja by�a poprawna, zam�wiony towar wy�lemy przy pierwszej sposobno�ci.

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nazwa: %s
Suma: %s
Poczta & Pakowanie: %s
Podatek: %s
Do zap�aty: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Adres na rachunku:
%s
%s
%s
%s
%s
%s
%s

Adres wysy�kowy:
%s
%s
%s
%s
%s
%s
%s

Spos�b zap�aty: %s
Spos�b wysy�ki: %s",

'inv_email_body_2' => "\nTw�j komentarz: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Order Inventory:\n",

'inv_email_body_4' =>"Produkt: %s\n",

'inv_email_body_5' => "Opcja: %s\n",

'inv_email_body_6' => "Ilo��: %s
Kod produktu: %s
Cena: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Zam�wienie nr: ",

'digi_email_body1' => "Szanowna(ny) %s,

Dzi�kujemy za zam�wienie nr: %s z�o�one na %s

Znajd� poni�ej linki niezb�dne do pobrania zam�wionych Digitali.

WA�NE - linki strac� wa�no�� %s i masz %s pr�b dost�pu aby z nich skorzysta�. Je�li napotkasz jaki� problem prosz� si� z nami skontaktowa�, podaj�c numer swojego zam�wienia.

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

'client_browser' => "Przegl�darka klienta:",

'server_software' => "Oprogramowanie serwera:",

'perofOrderSub' => " % od sumy zam�wienia",

'freeForOrdOver' => "Darmowe za zam�wienie powy�ej",

'freeShipping' => "Wysy�ka darmowa",

'byWeight1stClass' => "Wg wagi (1st Class)",

'1stClass' => "(1st Class)",

'byWeight2ndClass' => "Wg wagi (2nd Class)",

'2ndClass' => "(2nd Class)",

'flatRate' => "Sta�a stawka",

'free' => "Darmo",

'national' => "Narodowa",

'international' => "Mi�dzynarodowa",

'byCategory' => "Wg kategorii",

'perItem' => "Za sztuk�",

'nextDayEarlyAm' => "Nast�pnego dnia - Lotnicza Early AM",

'nextDayAir' => "Nast�pnego dnia - Lotnicza",

'nextDayAirSaver' => "Nast�pnego dnia - Lotnicza polecona",

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

'postalOrderFor' => "Zam�wienie pocztowe dla",

'orderOf' => "Z zam�wienia",

'orderID' => "ID zam�wienia:",

'product' => "Produkt",

'code' => "Kod",

'qty' => "Ilo��",

'price' => "Cena",

'shippingMethod' => "Spos�b wysy�ki:",

'subtotal' => "Suma:",

'totalTax' => "Kwota podatku:",

'totalShipping' => "Kwota za ekspedycj�:",

'grandTotal' => "Do zap�aty:",

'payByCheck' => "Zap�a� czekiem",

'payTo' => "Wystaw czek p�atniczy na",

'payByCard' => "Zap�a� kart�",

'cardType' => "Typ karty:",

'cardNo' => "Nr karty:",

'3-4DigiId' => "3-4 cyfry ID:",

'expiryDate' => "Data wa�no�ci:",

'issueDate' => "Udzielono dnia:",

'issueNo' => "Przydzielony numer:",

'signature' => "Podpis:",

'payByTransfer' => "Zap�ata przelewem",

'bankName' => "Nazwa Banku:",

'accountName' => "Nazwa konta:",

'sortCode' => "Kod kierunkowy:",

'accountNo' => "Numer konta:",

'swiftCode' => "Kod Swift:",

'bankAddress' => "Adres banku:",

'thanks' => "Dzi�kujemy za zakupy zrobione w naszym sklepie!",

'postalAddress' => "Adres pocztowy:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "Zg�oszone",

'2' => "W trakcie",

'3' => "Za�atwione",

'4' => "Odrzucone",

'5' => "Oszuka�cze",

);

$lang['admin']['cats'] = array(

'delete_success' => "Kategori� w tym j�zyku usuni�to poprawnie.",

'delete_fail' => "B��d usuwania.",

'update_fail' => "B��d aktualizacji.",

'update_success' => "Aktaualizacja poprawna.",

'add_success' => "Dodano poprawnie.",

'add_fail' => "Nie dodano kategorii w tym j�zyku.",

'site_cats_other_lang' => "Kategorie - (w innym j�zyku)",

'site_cat_other_lang' => "Kategoria - (w innym j�zyku)",

'cat_name' => "Nazwa kategorii:",

'language' => "J�zyk:",

'update_cat' => "Aktualizuj kategori�",

'save_cat' => "Zapisz kategori�",

'current_cat_list' => "Poni�ej jest wykaz wszystkich aktualnych kategorii w wersjach j�zykowych. Mog� by� one redagowane i/lub usuwane w dowolnym czasie.",

'cat_name2' => "Nazwa kategorii",

'action' => "Akcja",

'no_site_cats' => "Nazwa tej kategorii nie zosta�a jeszcze przet�umaczona.",

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