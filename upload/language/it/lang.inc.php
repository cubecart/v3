<?php
/*
+--------------------------------------------------------------------------
|   CubeCart v3.0.14
|   ========================================
|   by Alistair Brookbanks
|	CubeCart is a Trade Mark of CubeCart Limited
|   Copyright CubeCart Limited 2005 - 2014. All rights reserved.
|   CubeCart Limited,
|   22 Thomas Heskin Court,
|   Station Road,
|   Bishops Stortford,
|   HERTFORDSHIRE.
|   CM23 3EE
|   UNITED KINGDOM
|   http://www.CubeCart.com
|	UK Private Limited Company No. 5323904
|   ========================================
|   Web: http://www.cubecart.com
|   Date: Wednesday, 17th March 2007
|   Email: sales (at) cubecart (dot) com
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	lang.inc.php
|   ========================================
|	English (UK) Language File
|	Translation by Frank Graves	
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'en_EN');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Si";

$lang['admin']['no'] = "No";

$lang['admin']['edit'] = "Modifica";

$lang['admin']['delete'] = "Cancella";

$lang['admin']['delete_q'] = " Se cancellate questa categoria le relative sottocategorie possono diventare ridondanti! Clicca Ok per continuare!";

$lang['admin']['add'] = " Aggiunga";

$lang['admin']['add_new'] = " Aggiunga Nuovo";

$lang['admin']['write'] = " Scriva";

$lang['admin']['read'] = " Colto";

$lang['admin']['na'] = "N/A"; // as in not applicable

$lang['admin']['all'] = " TUTTI";

$lang['admin']['remove'] = " Rimuova";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => " Cancellato con successo.",

'del_failed' => " La cancellazione viene a mancare.",

'update_success' => " aggiornato con successo.",

'update_fail' => " Non è riuscito ad aggiornare.",

'add_success' => " aggiunto con successo.",

'add_failed' => " Non è riuscito ad aggiungere l'utente.",

'administrators_title' => " Coordinatori",

'current_users' => " Utenti correnti di admin.",

'id' => "Id",

'user_notes' => "Username / Notes",

'no_logins' => " Nessun Inizio attività",

'super_user' => " Utente Eccellente?",

'email' => "Email",

'action' => " Azione",

'add_admin' => " Potete usare la forma qui sotto per aggiungere un coordinatore.",

'full_name' => " Nome Completo:",

'username' => "Username:",

'administrator' => " Coordinatore",

'email2' => "Email:",

'password' => " Parola d'accesso:",

'pass_warn' =>"(digiti soltanto una parola d'accesso se desiderate cambiare quello corrente.) ",

'make_super' => " Faccia L'Utente Eccellente?",

'notes' => " Note:",

'permissions' => " Permessi",

'pass_updated' => " Parola d'accesso aggiornata.",

'pass_not_updated' => " Parola d'accesso non aggiornata.",

'change_pass_below' => " Cambi prego la vostra parola d'accesso qui sotto:",

'old_pass' => " Vecchia Parola d'accesso:",

'new_pass' => " Nuova Parola d'accesso:",

'confirm_pass' => " Confermi La Parola d'accesso:",

'perms_updated' => " Permessi aggiornati.",

'set_perms' => " Regoli prego i permessi per questo utente qui sotto.",

'section' => " Sezione",

'nb_bulk' => " N.B ai clienti ch'all'ingrosso del email scrivere l'utente deve fare a i permessi sotto i clienti.",

'admin_sessions' => " Sessioni Di Admin",

'sessions_desc' => " Sotto le esposizioni l'ultimo inizio attività tenta al admin. Mantenga un occhio su questo per accertarsi che non ci siano tentativi di dirottamento. È vivamente suggerisce che li cambiate regolarmente parola d'accesso di admin.",

'login_id' => " Identificazione Di Inizio attività",

'time' => " Tempo",

'ip_address' => "IP Address",

'success' => " Successo",

);



$lang['admin']['categories'] = array (

'delete_success' => " Cancellato con successo.",

'delete_fail' => " La cancellazione viene a mancare.",

'update_success' => " aggiornato con successo.",

'update_fail' => " Non è riuscito ad aggiornare la categoria.",

'add_success' => " aggiunto con successo.",

'add_failed' => " Non è riuscito ad aggiungere la categoria.",

'categories' => " Categorie",

'categories_desc' => " Sotto è una lista di tutte le categorie correnti nella base di dati.",

'cat_name' => " Nome Di Categoria",

'dir' => " Indice",

'image' => " Immagine",

'no_products' => " Nessun Prodotti",

'action' => " Azione",

'cannot_del' => " Questa categoria non può essere cancellata mentre contiene i prodotti.",

'no_cats_exist' => " Nessuna categoria esiste nella base di dati.",

'add_desc' => " Potete aggiungere le categorie con le sottocategorie illimitate, upload le nuove immagini o riciclare le immagini già sull'assistente.",

'category' => " Categoria",

'category_name' => " Nome Di Categoria:",

'category_level' => " Livello Di Categoria:",

'top_level' => " Livello Superiore",

'image_optional' => " Immagine: (facoltativo)",

'upload_new_image' => " Nuova Immagine Di Upload",

'browse_existing' => " Passi in rassegna Le Immagini Attuali",

'ship_by_cat' => " Spedendo per Category",

'per_ship' => " Per La Spedizione:",

'per_item' => " Per voce:",

'per_int_ship' => " Per La Spedizione Internazionale:",

'per_int_item' => " Per L'Articolo Internazionale:",

);



$lang['admin']['customers'] = array (

'customers' => " Clienti",

'delete_success' => " Cancellato con successo.",

'delete_fail' => " La cancellazione viene a mancare.",

'update_success' => " Il cliente ha aggiornato con successo.",

'update_fail' => " Non è riuscito ad aggiornare il cliente.",

'search_term' => " Termine Di Ricerca:",

'reset' => " Risistemazione",

'name' => " Nome",

'email' => "Email",

'invoice_add' => " Indirizzo Della Fattura",

'phone' => " Telefono",

'reg_ip' => " Data/IP address Del Registro",

'no_orders' => " Nessun Ordini",

'action' => " Azione",

'no_cust_exist' => " Nessun cliente esiste nella base di dati.",

'edit_below' => " Pubblichi prego questo cliente qui sotto:",

'title' => " Titolo",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'email2' => "Email:",

'address' => " Indirizzo:",

'town' => " Città:",

'county' => " County/dichiarare:",

'postcode' => "Postcode:",

'country' => " Paese:",

'phone2' => " Telefono:",

'edit_customer' => " Pubblichi Il Cliente",

'no_download_email' => " Non ci erano email da trasferire.",

'email_customers' => " Clienti Del Email",

'create_email' => " Generi prego il vostro email qui sotto:",

'hint' => " Suggerimento:",

'click_source' => " Potete scattare il tasto di fonte sopra una colla in un documento che del HTML già avete fatto.",

'important' => " Importante:",

'absolute_links' => " Accerti tutte le immagini ed i collegamenti sono assoluti (cioè contenga il Domain Name). Nella maggior parte dei paesi è un obbligo legale di fornire un collegamento del unsubscribe:",

'email_subject' => " Oggetto Del Email:",

'senders_name' => " Nome Dei Mittenti:",

'senders_email' => " Email Dei Mittenti:",

'return_path' => " Percorso Di ritorno:",

'bounce_desc' => "( I email rimbalzati del percorso di ritorno vanno a.)",

'send_test' => " Trasmetta Il Email Della Prova?",

'test_email_recip' => " Esamini Il Destinatario Del Email:",

'send_email' => " Trasmetta Il Email",

'download_or_send' => " Scelga prego se trasferire gli indirizzi dal sistema centrale verso i satelliti del email dei clienti o trasmettere un email alla rinfusa con questo Web site.",

'please_choose' => " Scelga prego:",

'used_to_download' => " Ciò è usata per trasferire il email address dal sistema centrale verso i satelliti da usare all'ingrosso il software del email.",

'bulk_to_subscribed' => " Ciò permette che trasmettiate un email alla rinfusa SOLTANTO a coloro che si è abbonato alla lista spedente con questo Web site.",

'include_name' => " Includa Il Nome?",

'download_email' => " Email Di Trasferimento dal sistema centrale verso i satelliti",

'send_email' => " Trasmetta Il Email",

'sending_complete' => " Trasmissione Completa",

'sending' => " Trasmissione Del Email",

'recipient' => " Destinatario:",

'prev_page' => " Pagina Precedente",

'page' => " Pagina:",

'bulk_finished' => " Il emailer all'ingrosso ha completato con successo la relativa operazione.",

'time_taken' => " Tempo speso:",

'recipients' => " Destinatari:",

);



$lang['admin']['docs'] = array (

'update_fail' => " Il homepage non è stato aggiornato prego accerta i permessi della lima di includes/static/home.inc.php è corretto.",

'update_success' => " Il homepage ha aggiornato con successo.",

'homepage' => "Homepage",

'enabled' => " Permesso:",

'enabled_desc' => "( Se questo è inabilitato la lingua di difetto sarà usata preferibilmente.)",

'language' => " Lingua:",

'title' => " Titolo:",

'use_rich_text' => " Usi prego il sistema di editazione testi ricco qui sotto per fare i cambiamenti al homepage del Web site. Sul saving i cambiamenti avvengono immediatamente così soddisfano sono sicuri vedere in anteprima i cambiamenti in primo luogo.",

'update_homepage' => " Homepage Dell'Aggiornamento",

'delete_success' => " Documento cancellato con successo.",

'delete_fail' => " La cancellazione viene a mancare.",

'update_success' => " aggiornato con successo.",

'update_fail' => " non era aggiornato.",

'add_success' => " aggiunto con successo.",

'add_fail' => " Non è riuscito ad aggiungere il documento.",

'site_docs_other_lang' => " Documenti Del Luogo - (Altre Lingue)",

'use_rich_text' => " Usi prego il sistema di editazione testi ricco qui sotto per aggiungere o pubblicare i documenti del luogo in altre lingue.",

'site_doc_other_lang' => " Documento Del Luogo - (Altre Lingue)",

'doc_name' => " Nome Del Documento:",

'language' => " Lingua:",

'update_doc' => " Documento Dell'Aggiornamento",

'save_doc' => " Risparmi Il Documento",

'current_doc_list' => " Sotto è una lista di tutti i documenti correnti del luogo. Potete avere una quantità illimitata di questi e possono essere pubblicati in qualunque momento e/o cancellati.",

'doc_name2' => " Nome Del Documento2",

'action' => " Azione",

'no_site_docs' => " Non ci sono documenti del luogo nella base di dati.",

'site_docs' => " Documenti Del Luogo
",

'site_doc' => " Documento Del Luogo",

'languages' => " Lingue",

'no_docs' => " Non ci sono documenti del luogo nella base di dati.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => " Browser Di Immagine",

'file' => " Lima:",

'no_imgs' => " Non ci sono immagini disponibili. Chiuda prego questa finestra ed upload un'immagine insteadFile.",

'preview' => " Previsione:",

'ok' => " Approvazione",

'cancel' => " Annullamento",

'prod_cat_use_img' => " Ci sono prodotto o categorie usando l'immagine '%s'.",

'continue_q' => " Continui a Cancellare?",

'site_doc_use_img' => " Ci sono documenti del luogo usando l'immagine '%s'.",

'home_use_img' => " L'immagine '%s' è usato sul homepage del luogo.",

'gallery_use_img' => "The image '%s' è usato in una galleria di immagine di prodotto.",

'image_deleted' => " L'immagine ha cancellato.",

'delete_failed' => " La cancellazione viene a mancare.",

'image_manager' => " Responsabile Di Immagine",

'delete_from_server' => " Sotto voi può cancellare le immagini dall'assistente.",

'img_click_prev' => " Immagine (scatto da vedere in anteprima)",

'size' => " Formato",

'action' => " Azione",

'no_images_added' => " Nessun'immagine è stata aggiunta.",

'prev_file' => " Lima Di Previsione",

'close_window' => " Finestra Vicina",

'no_image_selected' => " Nessun'immagine è stata selezionata vedere in anteprima.",

'file_uploader' => " Lima Uploader",


'upload_image' => " Immagine Di Upload",

'please_browse_img' => " Passi in rassegna prego per la vostra immagine:",

'file_too_big' => " Errore: %s finito %s",

'img_already_exists' => " Errore: %s già esiste prego cambiano titolo la lima che state tentando di upload o passare in rassegna per questa lima preferibilmente.",

'upload_too_large' => " Errore: Non avete passato in rassegna affinchè un'immagine upload o la lima era troppo grande per l'assistente. Il limite massimo di upload di difetto è 2MB.",

'not_valid_mime' => " Errore: %s non è un tipo valido di immagine.",

'image_upload_success' => " Successo: %s uploaded.",

'back' => "&laquo; Parte posteriore",

);



$lang['admin']['misc'] = array (

'license_form' => " Forma Dell'Autorizzazione",

'write_error' => " Non ha potuto aprire includes/global.inc.php per scrittura. Prova che cambia il valore di CHMOD a 0777. Ricordisi di regolarlo in seguito di nuovo a 0644!",

'try_again' => " Prova Ancora",

'purchase_cubecart' => " Acquisto CubeCart:",

'invalid_key' => " Spiacente ma la chiave dell'autorizzazione era non valido o già è stato usato.",

'purchase_license_key' => " Chiave Dell'Autorizzazione Dell'Acquisto",

'run_unlicensed' => " Sembrate essere funzionare unlicensed la versione di CubeCart. Entri prego nella vostra chiave dell'autorizzazione qui sotto per rimuovere il copyright.",

'license_key' => " Chiave Dell'Autorizzazione:",

'submit_key' => " Presenti La Chiave",

'server_info' => " Assistente Info",

'ini_set_desc' => " Le informazioni sotto mostrano le vostre regolazioni correnti dell'ambiente dell'assistente. Ciò contiene tutti i generi di informazioni che possono avere bisogno di di essere cambiato se state avvertendo i problemi con CubeCart. N.B.: Se avete un assistente comune o ospitare virtuale è probabile che avrete limitato l'accesso per modificare le regolazioni.
La</span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> funzione può essere usata spesso per escludere queste regolazioni.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => " La condizione di questo ordine è stata cambiata con successo. In questa fase potete trasmettere al vostro cliente una fattura del email ed accedere a per trasferire i prodotti dal sistema centrale verso i satelliti digitali. Per fare questo",

'click_here' => " Scattisi Qui",

'send_invoice_desc' => " Se la condizione è cambiata da in corso all'elaborazione convincerete l'opzione per trasmettere al cliente una ricevuta della fattura e per assegnare l'accesso ai prodotti digitali se applicabile.",

'delete_success' => " Cancellato con successo.",

'delete_fail' => " La cancellazione viene a mancare.",

'orders' => " Ordini",

'all_orders' => " Sotto sono tutti gli ordini memorizzati nella base di dati.",

'order_no' => " Numero Di Ordine",

'status' => " Condizione",

'date_time' => " Data/Tempo",

'customer' => " Cliente",

'ip_address' => "IP Address",

'cart_total' => " Totale Del Cestino",

'action' => " Azione",

'no_orders_in_db' => " Non ci sono ordini nella base di dati.",

'order_email' => " Caro %s,\n\nLa condizione della vostra identificazione di ordine: %s è stato cambiato a %s\n\n",

'email_staff_comments' => " Il nostro personale ha aggiunto le seguenti osservazioni
:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => " Questo email è stato trasmesso automaticamente da %s",

'email_subj_status_change' => " Cambiamento Di Condizione Di Ordine:",

'order_no2' => " No. Di Ordine:",

'print_packing_slip' => " Slittamento Di Imballaggio Della Stampa",

'customer_info' => " Cliente Info",

'invoice_address' => " Indirizzo Della Fattura:",

'delivery_address' => " Indirizzo Di Consegna:",

'contact_info' => " Le Informazioni Del Contatto:",

'tel' => "Tel:",

'mobile' => "Mobile:",

'email' => "Email:",

'customer_comments' => " Osservazioni Del Cliente:",

'no_comments_left' => " Nessun'osservazione è stata lasciata.",

'order_summary' => " Sommario Di Ordine",

'product' => " Prodotto",

'code' => " Codice",

'quantity' => " Quantità",

'price' => " Prezzo",

'download_link' => " Collegamento Di Trasferimento dal sistema centrale verso i satelliti:",

'warn_reset' => " Ciò regolerà la quantità di trasferimenti dal sistema centrale verso i satelliti a zero ed estenderà il tempo di scadenza.",

'reset_link' => " Ripristini Il Collegamento",

'download_stats' => " Trasferito (%s) periodi. Il Collegamento Espira Tempo %s",

'ip_address2' => "IP Address:",

'order_date_time' => " Data/Tempo Di Ordine:",

'payment_method' => " Metodo Di Pagamento:",

'ship_method' => " Metodo Di Trasporto:",

'subtotal' => " Totale parziale:",

'total_tax' => " Tassa Totale:",

'shipping' => " Trasporto:",

'grand_total' => " Importo Totale:",

'order_notfound' => " Numero di ordine %s non ha potuto essere trovato.",

'order_status' => " Condizione Di Ordine",

'shipping_date' => " Data Di Trasporto:",

'ship_today' => " Nave oggi",

'modify_status' => " Modifichi La Condizione:",

'staff_comments' => " Osservazioni Del Personale:",

'info_not_sent_customer' => "( Queste informazioni non sono trasmesse al cliente!)",

'inform_customer' => " Informi il cliente:",

'customer_notified' => "( Con questo controllato il cliente è informato del cambiamento di condizione di ordine.)",

'comments_2_customer' => " Osservazioni al cliente:",

'comments_2_customer_desc' => "( Ciò sarà aggiunta al email che di difetto desiderate informare il cliente l'ordine dichiara è cambiato.)",

'save_order_status' => " Risparmi Condizione Di Ordine",

'paid_by' => " Pagato vicino:",

'delivered_to' => " Trasportato a:",

'invoice_reciept_for' => " Fattura/ricevuta per:",

'order_of_time' => " Il vostro ordine di",

'order_id' => " Identificazione Di Ordine:",

'digi_goods_desc' => "Se ordinaste le merci digitali dovreste ricevere un email che contiene le istruzioni di trasferimento dal sistema centrale verso i satelliti. Questi possono anche essere accesed dal vostro pannello di controllo di cliente in cui potete avere controllo completo sopra il vostro cliente con noi.",

'thank_you' => " Grazie per l'acquisto con noi!",

);



$lang['admin']['products'] = array (

'show_featured' => " Includa in ultimi prodotti in homepage?",

'upload_new_images' => " Immagini Di Upload
 ",

'no_images_avail' => " Spiacente non ci sono immagini disponibili.",

'prod_added_to_cat' => " Prodotto aggiunto alla categoria.",

'prod_not_added_to_cat' => " Non è riuscito ad aggiungere la categoria al prodotto.",

'prod_removed_from_cat' => " Prodotto rimosso dalla categoria.",

'prod_not_removed_from_cat' => " Prodotto non rimosso dalla categoria.",

'title_extraCats' => " Amministrazione Di Categoria
",

'manage_cats' => " Controlli Le Categorie
",

'master_cat' => " Categoria matrice:",

'close_window' => " Finestra Vicina",

'img_added_to_prod' => " Immagine aggiunta al prodotto.",

'img_not_added_to_prod' => " Non è riuscito ad aggiungere l'immagine al prodotto.",

'img_removed' => " Immagine rimossa dal prodotto.",

'img_not_removed' => " Immagine non rimossa dal prodotto.",

'image_management' => " Amministrazione Di Immagine",

'manage_images' => " Controlli Le Immagini",

'image' => " Immagine",

'action' => " Azione",

'delete_success' => " Cancellato con successo.",

'delete_fail' => " La cancellazione viene a mancare.",

'update_successful' => " aggiornato con successo.",

'update_fail' => " Non è riuscito ad aggiornare la categoria.",

'add_success' => " aggiunto con successo.",

'add_fail' => " Non è riuscito ad aggiungere la categoria.",

'prod_inventory' => " Inventario Del Prodotto",

'current_prods_in_db' => " Sotto è una lista di tutti i prodotti correnti nella base di dati.",

'all_cats' => " Tutte le Categorie",

'prod_name' => " Nome Del Prodotto",

'prod_id' => " Identificazione Del Prodotto",

'prod_code' => " Codice Di Prodotto",

'master_cat2' => " Categoria Matrice",

'title' => " Titolo",

'stock_level' => " Livello Di riserva",

'normal_price' => " Prezzo Normale",

'sale_price' => " Prezzo Di Vendita",

'asc' => " Ordine Ascendente",

'desc' => " Ordine Discendente",

'containing_text' => " contenere il testo",

'filter' => " Filtro",

'reset' => " Risistemazione",

'id' => " identificazione",

'type' => " Tipo",

'name' => " Nome",

'price_sale_price' => " Prezzo/Prezzo Di Vendita",

'in_stock' => " In Azione",

'action' => " Azione",

'languages' => " Lingue",

'no_products_exist' => " Nessun prodotto esiste nella base di dati.",

'add_prod_desc' => " Potete usare la forma qui sotto per aggiungere un prodotto all'inventario.",

'product' => " Prodotto",

'prod_name2' => " Nome Del Prodotto:",

'prod_stock_no' => " Prodotto/No Di riserva:",

'auto_generated' => "( Se andato lo spazio in bianco questo sarà automobile generata.)",

'description' => " Descrizione:",

'primary_lang' => "( In lingua primaria altre lingue possono essere aggiunte in seguito.)",

'category' => " Categoria:",

'image2' => " Immagine:",

'opt_and_thumbs' => "( Facoltativo e thumbnails sarà fatto automaticamente SE la disposizione scelta è compatibile.)",

'upload_new' => " Nuova Immagine Di Upload",

'browse_existing' => " Passi in rassegna Le Immagini Attuali",

'normal_price2' => " Prezzo Normale:",

'sale_price2' => " Prezzo Di Vendita:",

'sale_mode_desc' => "( Ciò è usata soltanto quando il deposito è regolato nel modo di vendita per il prodotto.)",

'prod_weight' => " Peso Del Prodotto:",

'tax_class' => " Codice categoria Di Imposta:",

'stock_level2' => " Livello Di riserva:",

'reduce_stock_level' => "( Questo livello riduce ogni volta un articolo è venduto.)",

'use_stock_q' => " Usi il livello di riserva?",

'product_type' => " Tipo Del Prodotto:",

'tangible' => " Definito",

'digital' => "Digital",

'digi_path' => " I prodotti di Digital sono richiesti per avere un percorso del HTTP o percorso della radice dell'assistente (veda sotto).",

'digi_info' => " Le Informazioni Di Digital:",

'digi_desc' => "<p><strong> Percorso del HTTP:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong> Percorso Della Radice Dell'Assistente:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>( Suggerito!)							</strong></p>

<p>Il vantaggio di per mezzo del percorso della radice dell'assistente è che le lime possono essere immagazzinate altrove che il dispositivo di piegatura pubblicamente accessibile. Se questo metodo è scelto CubeCart genererà automaticamente un collegamento di trasferimento dal sistema centrale verso i satelliti che ha un tempo di scadenza e quantità di massimo di trasferimenti dal sistema centrale verso i satelliti che è configurata nelle regolazioni del deposito.</p>",

'prod_inv_langs' => " Inventario Del Prodotto - (Altre Lingue)",

'use_rich_oth_lang' => " Usi prego il sistema di editazione testi ricco qui sotto per aggiungere o pubblicare i prodotti in altre lingue.",

'language' => " Lingua:",

'update_prod_lang' => " Lingua Del Prodotto Dell'Aggiornamento",

'save_prod_lang' => " Risparmi La Lingua Del Prodotto",

'other_langs_exdefault' => " Sotto è una lista di tutti i prodotti correnti nelle lingue tranne il difetto.",

'no_lang_exist' => " Nessuna variazione di lingua per questo prodotto esiste nella base di dati.",

'opt_add_success' => " Nome di opzione aggiunto.",

'opt_add_fail' => " Nome di opzione non aggiunto.",

'att_add_success' => " L'attributo di opzione ha aggiunto.",

'att_add_fail' => " Attributo di opzione non aggiunto.",

'assign_success' => " Opzione assegnata al prodotto.",

'assign_fail' => " Opzione non assegnata al prodotto.",

'product_options' => " Opzioni Del Prodotto",

'product_option' => " Opzione Del Prodotto",

'quick_assign' => " Rapidamente Assegni:",

'prod_opts_of' => " opzioni del prodotto di",

'to' => " a",

'go' => " Andare ",

'opt_step1' => "1. Generi un'opzione (per esempio colore)",

'opt_id' => " Identificazione",

'opt_name' => " Nome Di Opzione",

'warn_remove_opt' => " Siete sicuri voi desiderate rimuovere questo nome di opzione?
\n\nAVVERTENDO FACENDO COSÌ TUTTI GLI OPZIONI DEL PRODOTTO ED ATTRIBUTI DI OPZIONE CON QUESTO NOME SARÀ RIMOSSO!",

'no_options_made' => " Nessun nome di opzione del prodotto è stato fatto.",

'option' => "Option",

'opt_step2' => "2. Generi un valore di opzione (per esempio colore rosso)",

'option_attributes' => " Attributi Di Opzione",

'warn_remove_att' => " Siete sicuri voi desiderate rimuovere questo attributo di opzione? \n\n FARE AVVERTENTE COSÌ CANCELLERÀ TUTTE LE OPZIONI DEL PRODOTTO CON QUESTI ATTRIBUTO E NOME DI OPZIONE!",

'no_attributes_made' => " Nessun attributo di opzione del prodotto è stato fatto.",

'attribute' => " Attributo",

'opt_step3' => "3. Assegni l'opzione &amp; valore al prodotto (per esempio T-Camicia &gt; Colore &gt; Rosso)",

'option_attribute' => " Attributo Di Opzione",

'option_price' => " Prezzo Di Opzione",

'add_subtract' => " Aggiunga/Sottragga",

'remove_opt_prod' => " Siete sicuri voi desiderio per rimuovere questa opzione da questo prodotto?",

'no_assigned_opts' => " Nessun'opzione è stata assegnata a tutti i prodotti.",

'prods_made_1st' => " I prodotti devono essere aggiunti prima che le opzioni possano essere fatte.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong> Permetta Il Controllo Dell'Inondazione Di Script/Bot?</strong><br />
Forza gli utenti impostare un codice sul registro, dicono ad un amico ecc di impedire i BOT lo Spamming il deposito.",


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

'show_latest' => " Mostri gli ultimi prodotti sul homepage?",

'no_latest' => " Numero di ultimi prodotti da mostrare:",

'off_line_settings' => " Regolazioni Fuori linea",

'off_line' => " Spenga il deposito?",

'off_line_content' => " Messaggio fuori linea:",

'off_line_allow_admin' => " Permetta che i coordinatori osservino il deposito fuori linea? (richiede la sessione di admin)",


'store_settings' => " Immagazzini Le Regolazioni",

'edit_below' => " Pubblichi prego le vostre regolazioni di configurazione del deposito qui sotto:",

'meta_data' => " Meta dati",

'browser_title' => " Titolo Del Browser:",

'meta_desc' => " Descrizione Del Meta:",

'meta_keywords' => " Parole chiavi Del Meta:",

'comma_separated' => "( La Virgola Ha separato)",

'store_co_name' => " Immagazzini Il Nome Di /Company:",

'store_address' => " Immagazzini L'Indirizzo:",

'country' => " Paese:",

'zone' => " La Contea/Dichiara/Zona:",

'dirs_folders' => " Indici &amp; Dispositivi di piegatura",

'rootRel' => " Dispositivo di piegatura pubblico del HTML della radice da immagazzinare:",

'include_slash' => " per esempio /store/(includa il taglio strascicante)",

'storeURL' => " Absolute URL da immagazzinare:",

'eg_domain_com' => " per esempio http://www.domain.com",

'rootDir' => " Indice Di Radice Dell'Assistente:",

'eg_root_path' => " per esempio /path// vostro/webstore",

'rootRel_SSL' => " Dispositivo di piegatura SICURO del HTML del pubblico della radice da immagazzinare:",

'storeURL_SSL' => " URL SICURO assoluto da immagazzinare:",

'eg_domain_SSL' => " per esempio https://secure.domain.com/store (a parte il taglio strascicante)",

'rootDir_SSL' => " Indice Di Radice SICURO Dell'Assistente:",

'eg_root_path_secure' => " per esempio /path// vostro/fissano/webstore",

'enable_ssl' => " Permetta lo SSL:",

'ssl_warn' => "( Avvertimento: Questo cambiamento avviene subito dopo di presenta. Accerti prego il vostro indice di radice sicuro ed il URL sicuro è corretto e funzionante prima della regolazione del questo a sì
)",

'digital_downloads' => " Trasferimenti dal sistema centrale verso i satelliti Di Digital",

'download_expire_time' => " Tempo Di Scadenza Di Trasferimento dal sistema centrale verso i satelliti:",

'seconds' => "( Secondi)",

'download_attempts' => " Tentativi Di Trasferimento dal sistema centrale verso i satelliti:",

'attempts_desc' => "( Il numero di volte il cliente può trasferire il prodotto dal sistema centrale verso i satelliti.)",

'styles_misc' => " Stili &amp; Varie",

'default_language' => " Lingua Di Difetto:",

'store_skin' => " Immagazzini La Pelle:",

'no_cats_per_row' => " Nessun Categorie Per La Fila:",

'dir_symbol' => " Simbolo Dell'Indice:",

'prods_per_page' => " Nessun prodotti per la pagina:",

'precis_length' => " Lunghezza del riassunto del prodotto:",

'chars' => "(Chars)",

'no_sale_items' => " Articoli di numero in scatola degli articoli in vendita:",

'no_pop_prod' => " Articoli di numero in scatola popolare degli articoli:",

'email_name' => " Nome Del Email:",

'email_name_desc' => "( Ciò è usata come il nome di trasmissione dei email del luogo.)",

'email_address' => "Email Address:",

'email_address_desc' => "( Ciò è usata come il email address nei email del luogo.)",

'mail_method' => " Posta Che Trasmette Metodo:",

'mail_recommended' => "( Lo smtp ha suggerito)",

'max_upload_size' => " Formato di lima massimo di upload:",

'under_x_recom' => "( Sotto 2048Kb Suggerito)",

'max_sess_length' => " Lunghezza Massima Di Sessione:",

'db_settings' => " Regolazioni Della Base di dati",

'db_host' => " Hostname Della Base di dati:",

'db_username' => " Nome dell'utente della base di dati:",

'db_password' => " Parola d'accesso Della Base di dati:",

'db_name' => " Nome Della Base di dati:",

'db_prefix' => " Prefisso Della Base di dati:",

'gd_settings' => " Regolazioni di GD",

'gd_ver' => " Versione di GD:",

'gd_thumb_size' => " Formato Di Thumbnail:",

'gd_gif_support' => " Permetta Il Supporto del GIF: (assicurisi per favore che questo è permesso sul vostro assistente)",

'gd_max_img_size' => " Formato Massimo Di Immagine:",

'gd_img_quality' => " Qualità Di Immagine di GD:",

'recom_quality' => "(60 - 80 suggeriti)",

'stock_settings' => " Regolazioni Di riserva",

'use_stock' => " Mostri il livello di riserva?",

'allow_out_of_stock_purchases' => " consent di riserva acquisto?",

'weight_unit' => " Unità Del Peso:",

'time_and_date' => " Tempo &amp; Data",

'time_format' => " Disposizione Di Tempo:",

'time_format_desc' => "( Veda <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => " Immagine riportata Di Tempo:",

'time_offset_desc' => "( Secondi - usati per gli assistenti in timezone differente)",

'date_format' => " Disposizione Di Data:",

'date_format_desc' => "( Veda <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => " Regolazioni Del Locale",

'default_currency' => " Valuta Di Difetto",

'inc_tax_prices' => " Includa la tassa nei prezzi
?<br />
(Con questa permessa voi deve aggiungere la tassa nel prezzo delle merci ed è applicato a tutti i clienti)",

'sale_mode' => " Modo Di Vendita:",

'percent_of_all' => " Percentuale fuori di tutti i prezzi",

'ind_sale_per_item' => " Diversi prezzi di vendita per voce",

'sale_mode_off' => " Modo Di Vendita Fuori",

'sale_per_off' => " Percento Di Vendita Fuori:",

'sale_per_off_desc' => "( Percentuale da battere fuori di tutti i prezzi)",

'diff_dispatch' => " Permetta che la spedizione richiami tranne l'indirizzo della fattura?",

'update_settings' => " Regolazioni Dell'Aggiornamento",

'update_success' => " aggiornato con successo.",

'update_fail' => " non era aggiornato.",

'add_success' => " aggiunto con successo",

'add_fail' => " non è stato aggiunto.",

'delete_success' => " Cancellato con successo.",

'delete_failed' => " La cancellazione è venuto a mancare.",

'currencies' => " Valute",

'currency' => " Valuta",

'currencies_desc' => " Aggiunga prego pubblicano o cancellano le valute qui sotto:",

'c_code' => " Codice",

'c_name' => " Nome",

'c_value' => " Valore",

'symbol_left' => " Simbolo Lasciato",

'symbol_right' => " Destra Di Simbolo",

'decimal_places' => " Posti Decimali",

'last_updated' => " Ultimo Aggiornato",

'c_status' => " Condizione",

'no_currencies' => " Non ci sono valute nella base di dati.",

'countries' => " Paesi",

'country' => " Paese",

'edit_countries_below' => " Aggiunga prego pubblicano o cancellano i paesi qui sotto:",

'disable' => " Inabiliti",

'enable' => " Permetta",

'iso' => "ISO",

'iso_name' => " Nome di ISO",

'iso3' => "ISO3",

'num_code' => " Codice Di Numero",

'action' => " Azione",

'warn_del_country' => " Siete sicuri voi desiderate cancellare questo? Tutte le contee, dichiara e le zone saranno cancellate sopra esso.",

'no_countries_in_db' => " Non ci sono paesi nella base di dati.",

'edit_counties' => " Aggiunga prego pubblicano o le contee di cancellazione/zone/dichiara sotto:",

'no_counties_in_db' => " Non ci sono contee, dichiarano o zone nella base di dati.",

'tax_Settings' => " Regolazioni Di Imposta",

'edit_locale_below' => " Pubblichi prego le vostre regolazioni del locale qui sotto:",

'tax_only_to' => " Applichi la tassa SOLTANTO la seguente zona:",

'manage_tax_below' => " Controlli prego i vostri tipi differenti di tasse qui sotto. Questi possono essere applicati ad ogni prodotto in moda da poterli avere voi i prodotti esenti da tasse e livelli differenti della tassa per i tipi differenti del prodotto.",

'tax_class2' => " Codice categoria Di Imposta",

'rate_per' => " Tasso (%)",

'no_taxes_setup' => " Spiacente non ci è messa a punto di imposte.",

'tax' => " Tassa",

);



$lang['admin']['stats'] = array(

'store_stats' => " Immagazzini Le Statistiche
 ",

'choose_view' => " Scelga prego le statistiche che vorreste osservare:",

'search_terms' => " Termini Di Ricerca",

'product_pop' => " Popolarità Del Prodotto",

'cust_online' => " Clienti In linea",

'search_terms_order_by' => " Termini di ricerca (ordinati da nessun ricerche)",

'sorry_no_data' => " Spiacente non ci sono dati da mostrare.",

'product_pop_ordered_by' => " Popolarità del prodotto (ordinata da Views)",

'cust_active' => " Clienti che sono stati attivi negli ultimi 15 minuti.",

'hash' => "#",

'customer' => " Cliente",

'location' => " Posizione",

'sess_start_time' => " Tempo Di Inizio Di Sessione",

'last_click_time' => " Ultima Volta Di Scatto",

'sess_length' => " Lunghezza Di Sessione",

'geust' => " Ospite",

'signed_in' => " Firmato Dentro",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => " Autenticazione ostruita per %s resoconto per i motivi di sicurezza.",

'global_risk' => " AVVERTIMENTO: La lima principale 'include/global.inc.php 'di configurazione è scrivibila ed il vostro deposito è al rischio. Cambi prego appena possibile questi permessi a 0644.",

'401' => " Errore 401: Non avete permesso accedere a quella pagina. Chieda prego ad uno degli utenti eccellenti di assegnarvi questo per.",

'welcome_note' => " Benvenuto al CubeCart™ Pannello di controllo Della Gestione",

'last_login' => " Ultimo inizio attività vicino",

'by' => " da",

'failed' => " venuto a mancare.",

'store_overview' => " Immagazzini La Descrizione:",

'version' => " Versione:",

'visit_cc' => " Visiti l'assistente di trasferimenti dal sistema centrale verso i satelliti di CubeCart",

'no_products' => " Numero di prodotti
:",

'no_customers' => " Numero di clienti:",

'img_upload_size' => " Formato del dispositivo di piegatura di upload di immagine:",

'no_orders' => " Numero di ordini:",

'quick_search' => " Ricerca Rapida:",

'order_no' => " Numero Di Ordine:",

'search_now' => " Ricerca Ora",

'customer' => " Cliente:",

'login_failed' => " L'Inizio attività È venuto a mancare! Il username o la parola d'accesso era errata.",

'new_pass_sent' => " Una nuova parola d'accesso è stata emailed a",

'no_admin_sess' => " Nessuna sessione della gestione è stata trovata.",

'login_fail_2' => " L'inizio attività viene a mancare. Prego prova ancora.",

'login_below' => " Prego inizio attività qui sotto:",

'username' => " Nome dell'utente:",

'password' => " Parola d'accesso:",

'request_pass' => " Parola d'accesso Di Richiesta",

'login' => " Inizio attività",

'logout_failed' => " Il termine attività venuto a mancare come nessuna sessione di admin era presente.",

'reset_pass_email' => " Caro %s,

Voi, o qualcuno che finge essere voi avete invitato la vostra parola d'accesso per essere ripristinati.

I vostri nuovi particolari di accesso sono:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nome dell'utente: %s
Parola d'accesso: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Questo email è stato trasmesso da %s/admin/requestPass.php\n

IP address Dei Mittenti: %s",

'pass_reset_failed' => " La risistemazione di parola d'accesso è venuto a mancare.",

'enter_email_below' => " Entri prego nel vostro email address qui sotto:",

'email_address' => "Email Address:",

'send_pass' => " Trasmetta La Parola d'accesso
",

);



$lang['admin']['nav'] = array(

'permission_error' => " Non avete permesso accedere a questo.",

'navigation' => " Navigazione",

'admin_home' => " Admin Domestico",

'store_home' => " Immagazzini La Sede",

'store_config' => " Immagazzini La Configurazione",

'gen_settings' => " Regolazioni Generali",

'taxes' => " Tasse",

'countries_zones' => " Paesi &amp; Zone",

'currencies' => " Valute",

'modules' => " Moduli",

'shipping' => " Trasporto",

'gateways' => "Gateways",

'affiliates' => " Filiali",

'catalog' => " Catalogo",

'view_products' => " Prodotti Di Vista",

'add_product' => " Aggiunga Il Prodotto",

'product_options' => " Opzioni Del Prodotto",

'view_categories' => " Categorie Di Vista",

'add_categories' => " Aggiunga La Categoria",

'customers' => " Clienti",

'view_customers' => " Clienti Di Vista",

'email_customers' => " Clienti Del Email",

'orders' => " Ordini",

'file_manager' => " Amministratore dell'archivio",

'manage_images' => " Controlli Le Immagini",

'upload_images' => " Immagini Di Upload",

'statistics' => " Statistiche",

'view_stats' => " Statistiche Di Vista",

'documents' => " Documenti",

'homepage' => "Homepage",

'site_docs' => " Documenti Del Luogo",

'misc' => " Varie",

'server_info' => " Le Informazioni Dell'Assistente",

'admin_users' => " Utenti Di Coordinatore",

'administrators' => " Coordinatori",

'admin_sessions' => " Sessioni Del Coordinatore
 ",

);



$lang['admin']['incs'] = array(

'administration' => " Gestione",

'logged_in_as' => " Entrato:",

'logout' => " Termine attività",

'change_pass' => " Cambi La Parola d'accesso",

'error_editing' => " Errore che prova a pubblicare. I dati di input non erano un allineamento.",

'config_updated' => " Configurazione Aggiornata. Si assicura prego il permesso della lima essere regolato correttamente indietro.",

'cant_write' => " Non ha potuto aprire la lima di '%s' per scrittura. Prova che cambia il valore di CHMOD a 0777. Ricordisi di regolarlo in seguito di nuovo a 0644!",

'db_config_updated' => " Configurazione Aggiornata.",

'db_cant_write' => " Aggiornato Venuto a mancare!",

'select_above' => " Selezioni Sopra",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = " Sì";

$lang['front']['no'] = "No";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => " Collegamenti Utili",

'reg_and_checkout' => " Registro &amp; Verifica",

'cont_shopping' => " Continui Ad acquistare",

'edit_del_add' => " Pubblichi L'Indirizzo Di Consegna",

'edit_inv_add' => " Pubblichi L'Indirizzo Della Fattura",

'empty_cart' => " Cestino Vuoto",

'prev_page' => " Pagina Precedente",

'homepage' => "Homepage",

'shop_by_cat' => " Negozio per la categoria",

'sale_items' => "Articoli in Vendita",

'save' => " Risparmi",

'currency' => " Valuta",

'information' => " Le informazioni",

'products' => " Prodotti:",

'categories' => " Categorie:",

'prices' => " Prezzi:",

'language' => " Lingua",

'mailing_list' => " Lista Spedente",

'subscribe_below' => " Aggiungiti alla nostra posta elettronica:",

'email' => "Email:",

'join_now' => " Ora Uniscasi",

'already_subscribed' => " Il email address %s già si è abbonato alla nostra lista spedente. Prego inizio attività al vostro cliente a unsubscribe.",

'enter_valid_email' => " Entri prego in un email address valido.",

'added_to_mail' => "Thank you, %s has been added to our mailing list.",

'subscribed_to_mail' => " Grazie, %s è stato aggiunto alla nostra lista spedente.",

'popular_products' => "Prodotti In Vendita nuova collezione",

'featured_prod' => " Prodotto Descritto",

'sale_items' => "Articoli in Vendita",

'search_for' => " Ricerca di:",

'go' => " Andare ",

'welcome_back' => " Benvenuto indietro",

'logout' => " Termine attività",

'your_account' => " Il Vostro Cliente",

'welcome_guest' => " Ospite Benvenuto",

'login' => " Inizio attività",

'register' => " Registro",

'shopping_cart' => " Carrello  Shopping ",

'basket_empty' => " Il vostro cestino è vuoto.",

'items_in_cart' => " 0 Articoli in carrello:",

'total' => " Totale:",

'view_basket' => "Il vostro carrello  è vuoto",

);



$lang['front']['account'] = array(

'your_account' => " Il Vostro Cliente",

'personal_info' => " Info Personale",

'order_history' => " Storia Di Ordine",

'change_password' => " Cambi La Parola d'accesso",

'newsletter' => " Bollettino",

'login_to_view' => " Dovete inizio attività osservare questa pagina.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => " La parola d'accesso che avete digitato era errata.",

'conf_not_match' => " La vostra parola d'accesso di conferma non ha abbinato la vostra nuova parola d'accesso.",

'change_pass' => " Cambi La Parola d'accesso",

'password_updated' => " Grazie, la vostra parola d'accesso è stata aggiornata.",

'change_pass_below' => " Cambi prego la vostra parola d'accesso qui sotto:",

'old_pass' => " Vecchia parola del passaggio:",

'new_pass' => " Nuova parola del passaggio:",

'confirm_pass' => " Confermi la parola del passaggio:",

'submit' => " Presenti",

);



$lang['front']['dnExpire'] = array(

'sorry' => " Spiacente",

'expired' => " Il vostro collegamento di trasferimento dal sistema centrale verso i satelliti ha espirato o è non valido.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => " Parola dimenticata del passaggio",

'email' => "Email:",

'send_pass' => " Trasmetta la parola del passaggio",

'reset_email' => "Caro %s %s,

Voi, o qualcuno che finge essere voi avete chiesto per la vostra parola d'accesso per essere ripristinati. I vostri nuovi particolari di accesso sono sotto:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nome Dell'Utente: %s
Passi la parola: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
All'inizio attività, segua prego il collegamento qui sotto:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Questo email è stato trasmesso da %s
IP address Dei Mittenti: %s",

'new_pass_sent' => " Una nuova parola d'accesso è stata trasmessa a %s.",

'email_not_found' => " Spiacente ma quel email address non è stato trovato.",

'enter_email' => " Entri prego nel vostro email address di inizio attività qui sotto per avere una parola d'accesso provvisoria trasmessa voi:",

);



$lang['front']['gateway'] = array(

//////////////////////////////////////////
// START: Added in 3.0.6 by Sir William
//////////////////

'admin_email_body_1' => " Caro Coordinatore Del Deposito Di CubeCart,

New Order Number: %s disposto sopra %s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nome: %s
E-Mail: %s
Totale parziale: %s
Affrancatura & Impaccare: %s
Tassa: %s
Importo Totale: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Indirizzo Della Fattura:
%s
%s
%s
%s
%s
%s
%s

Indirizzo Di Spedizione:
%s
%s
%s
%s
%s
%s
%s

Metodo Di Pagamento: %s
Metodo Di Trasporto: %s",

'admin_email_body_2' => "\nOsservazioni del cliente: %s\n",

'admin_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Inventario Di Ordine:\n",

'admin_email_body_4' =>" Prodotto: %s\n",

'admin_email_body_5' => " Opzioni: %s\n",

'admin_email_body_6' => " Quantità: %s
Codice Di Prodotto: %s
Prezzo: %s\n\n",

//////////////////////////////////////////
// END: Added in 3.0.6 by Sir William
//////////////////

'newOrderMsg' => " Un cliente ha fatto appena l'ordine %s, per osservare questo ordine segua prego il collegamento qui sotto: \n\n%s",

'newOrderSubj' => " Nuovo Ordine Del Deposito #",

'payment' => " Pagamento",

'cart' => " Cestino",

'address' => " Indirizzo",

'payment' => " Pagamento",

'complete' => " Completo",

'fill_out_below' => " Compili prego la forma qui sotto:",

'transferring' => " Trasferendo al pagamento",

'go_now' => " Ora Andare !",

'continue' => " Continui",

'choose_method' => " Scelga prego il vostro metodo preferito di pagamento:",

'your_comments' => " Le vostre osservazioni:",

'none_configured' => " Spiacente nessun metodo di pagamento è stato configurato.",

);



$lang['front']['login'] = array(

'blocked' => " Autenticazione ostruita per %s resoconto per i motivi di sicurezza.",

'login' => " Inizio attività",

'username' => "Email:",

'password' => " Passi la parola:",

'remember_me' => " Selo ricordi di?",

'forgot_pass' => " Ha dimenticato la vostra parola del passaggio?",

'login_success' => " Avete entrato con successo.",

'already_logged_in' => " Già avete entrato.",

'login_failed' => " L'inizio attività viene a mancare!",

'login_below' => " Prego inizio attività qui sotto:",

);



$lang['front']['index'] = array(

'latest_products' => " Ultimi Prodotti",

);



$lang['front']['logout'] = array(

'logout' => " Termine attività",

'session_destroyed' => " La vostra sessione si è conclusa.",

'no_session' => " Nessuna sessione è stata trovata per distrugg. Sembrate arrivare qui dall'incidente.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => " Preferenze Del Bollettino",

'prefs_updates' => " Le vostre preferenze del bollettino sono state aggiornate.",

'edit_prefs_below' => " Pubblichi prego le vostre preferenze del bollettino qui sotto:",

'subscribe' => " Aggiungiti alla nostra posta elettronica?",

'email_format' => " Disposizione Del Email:",

'plain_text' => " Testo Normale",

'html' => "HTML",

'html_abbr' => " Lingua Di Margine di profitto Di Hypertext",

'update' => " Aggiornamento",

'login_required' => " Dovete inizio attività osservare questa pagina.",

);



$lang['front']['noShip'] = array(

'sorry' => "Sorry",

'desc' => " Nessun metodo di trasporto ha installato per il vostro paese. Seli metta in contatto con prego per vedere se possiamo fare una disposizione alternativa.",

);



$lang['front']['overWeight'] = array(

'sorry' => " Spiacente
 ",

'desc' => " Il peso totale del vostro ordine esso troppo su. Seli metta in contatto con prego per vedere se possiamo fare una disposizione alternativa o ridurre la quantità di articoli nel vostro cestino.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => " I numeri di telefono devono essere numerici soltanto.",

'complete_all' => " Assicurisi prego che tutti i campi richiesti sono completati.",

'email_invalid' => " Entri prego in un email address valido.",

'numeric_only' => " I numeri di telefono devono essere numerici soltanto.",

'email_inuse' => " Spiacente che il email address è già in uso.",

'update_email' => "Caro %s %s,

Questo email è stato trasmesso per confermare che le vostre informazioni personali sono state aggiornate con successo. Se ritenete che il vostro cliente è stato aggiornato prego da qualcuno tranne lei mettasi in contatto con immediatamente un membro del personale.\n\n

Questo email è stato trasmesso da %s\n

IP address Dei Mittenti: %s",

'update_email_subj' => " L'Info Personale Ha aggiornato",

'personal_info' => " Le Informazioni Personali",

'account_updated' => " Il vostro cliente è stato aggiornato. Potete pubblicare ancora questo sotto se desiderate.",

'edit_below' => " Pubblichi prego le vostre informazioni personali qui sotto:",

'title' => " Titolo:",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'email' => "Email:",

'address' => " Indirizzo:",

'town' => " Città:",

'county' => " La contea/Dichiara:",

'postcode' => " Chiusura lampo/Postcode:",

'country' => " Paese:",

'phone' => " Telefono:",

'mobile' => " Telefono Mobile:",

'update_account' => " Cliente Dell'Aggiornamento",

'login_required' => " Dovete inizio attività osservare questa pagina.",

);



$lang['front']['reg'] = array(

'fill_required' => " Assicurisi prego che tutti i campi richiesti sono completati.",

'pass_not_match' => " Si assicura prego il vostro fiammifero di parole del passaggio.",

'enter_valid_email' => " Entri prego in un email address valido.",

'enter_valid_tel' => " I numeri di telefono devono essere numerici soltanto.",

'email_in_use' => " Spiacente che il email address è già in uso.",

'note_required' => " Noti prego che tutti i campi che hanno un asterisco (*) sono richiesti per procedere il vostro registro.",

'express_reg' => " Registro Espresso",

'submit_and_cont' => " Presenti &amp; Continui",

'personal_details' => " Particolari Personali",

'address' => " Indirizzo",

'title' => " Titolo:",

'title_desc' => "( Sig./Sig.ra)",

'first_name' => " Nome:",

'address2' => " Indirizzo:",

'last_name' => " Ultimo Nome:",

'email_address' => "Email Address:",

'town' => " Città:",

'phone' => " Telefono:",

'county' => " La contea/Dichiara:",

'mobile' => " Telefono Mobile:",

'country' => " Paese:",

'postcode' => " Codice dell'alberino:",

'security_details' => " Particolari Di Sicurezza",

'choose_pass' => " Scelga la parola del passaggio:",

'conf_pass' => " Confermi la parola del passaggio:",

'privacy_settings' => " Regolazioni Di Segretezza",

'receive_emails' => " Vorrei ricevere i email del deposito",

'email_format' => " Disposizione Del Email:",

'styled_html' => " HTML Designato",

'plain_text' => " Testo Normale",

'tandcs' => " Termini di uso",

'please_read' => " Sia prego sicuro leggere il nostro",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => " Presenti prego la forma qui sotto per dire ad un amico circa '%s'.",

'error_code' => " O nessun codice di sicurezza è stato impostato o non ha abbinato i caratteri nell'immagine.",

'error_name' => " Introduca prego sia il vostro nome che il nome dei destinatari.",

'error_email' => " Assicurisi prego che sia il vostro email address che i destinatari è validi.",

'spambot' => " Codice Di Sicurezza:",

'email_body' => "Caro %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Per osservare questo prodotto segua prego il collegamento qui sotto:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Questo email è stato trasmesso da %s
IP address Dei Mittenti: %s",

'email_subject' => " Messaggio da: %s",

'tellafriend' => " Dica ad un amico",

'message_sent' => " Grazie, il vostro messaggio è stato trasmesso a
 <strong>%s</strong> circa '%s'. Se voleste trasmettere prego questo ad un altro amico faccia così sotto:",

'fill_out_below' => " Presenti prego la forma qui sotto per dire ad un amico circa '%s'.",

'friends_name' => " Nome Degli Amici:",

'friends_email' => " Email Degli Amici:",

'your_name' => " Il Vostro Nome:",

'your_email' => " Il Vostro Email:",

'message' => " Messaggio:",

'default_message' => " Ho trovato questo '%s' e pensato che possiate essere interessati.",

'send' => " Trasmetta",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => " arresti l'abbonamento
 ",

'email' => "Email:",

'go' => " Andare ",

'enter_valid_email' => " Entri prego in un email address valido.",

'email_removed' => " Grazie, <strong>%s</strong> è stato rimosso dalla nostra lista spedente.",

'email_not_found' => " Spiacente, <strong>%s</strong> non è stato trovato nella nostra lista spedente o già ha arrestato l'abbonamento.",

'enter_email_below' => " Entri prego nel vostro email address qui sotto per arrestare l'abbonamento dalla nostra lista spedente:",

);



$lang['front']['viewCat'] = array(

'search_results' => " Risultati Di Ricerca",

'sale_items' => "Articoli in Vendita",

'image' => " Immagine",

'description' => " Descrizione",

'price' => " Prezzo",

'products_in' => " Prodotti dentro:",

'buy' => " Acquisto",

'more' => " Più",

'out_of_stock' => " DALLE AZIONE",

'no_products_match' => " Spiacente, nessun prodotto abbina la domanda:",

'no_prods_in_cat' => " Non ci sono prodotti in questa categoria.",

);



$lang['front']['viewDoc'] = array(

'error' => " Errore",

'does_not_exist' => " Quel documento non esiste.",

);



$lang['front']['viewOrder'] = array(

'order_no' => " No. Di Ordine:",

'customer_info' => " Le Informazioni Del Cliente:",

'invoice_address' => " Indirizzo Della Fattura:",

'delivery_address' => " Indirizzo Di Consegna:",

'na' => " non applicabile",

'customer_comments' => " Osservazioni Del Cliente:",

'order_summary' => " Sommario Di Ordine:",

'product' => " Prodotto
 ",

'product_code' => " Codice Di Prodotto",

'quantity' => " Quantità",

'price' => " Prezzo",

'download_here' => " Trasferimento dal sistema centrale verso i satelliti Qui",

'review_below' => " Riveda prego questo ordine qui sotto:",

'order_date_time' => " Data/Tempo Di Ordine:",

'payment_method' => " Metodo Di Pagamento:",

'ship_method' => " Metodo Di Trasporto:",

'subtotal' => " Totale parziale:",

'total_tax' => " Tassa Totale:",

'shipping' => " Trasporto:",

'grand_total' => " Importo Totale:",

'order_not_found' => " Che il numero di ordine non potrebbe essere trovato.",

'login_required' => " Dovete inizio attività osservare questa pagina.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => " I Vostri Ordini",

'orders_listed_below' => " Tutti gli ordini sotto questo cliente sono elencati qui sotto:",

'order_no' => " No. Di Ordine",

'status' => " Condizione",

'date_time' => " Data/Tempo",

'action' => " Azione",

'view' => " Vista",

'no_orders' => " Non abbiamo annotazioni di alcuni ordinati nel nostro sistema. Se ritenete che questo è prego per sbaglio mettasi in contatto con un membro del personale alla prima occasione possibile.",

'login_required' => " Dovete inizio attività osservare questa pagina.",

);



$lang['front']['viewProd'] = array(

'product' => " Prodotto",

'product_info' => " Le Informazioni Di Prodotto",

'price' => " Prezzo:",

'product_code' => " Codice Di Prodotto:",

'tellafriend' => " Dica ad un amico",

'quantity' => " Quantità:",

'more_images' => "[+] Più Immagini",

'add_to_basket' => " Aggiunga al cestino",

'location' => " Posizione:",

'no_instock' => " In Azione:",

'instock' => " In Azione",

'out_of_stock' => " Nessun In Azione",

'prod_opts' => " Opzioni Del Prodotto:",

'prod_not_found' => " Quel prodotto non ha potuto essere trovato.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => " Il vostro carrello di shopping è attualmente vuoto.",

'allready_customer' => " Già un cliente?",

'login_below' => " Prego inizio attività qui sotto:",

'username' => "Email:",

'password' => " Passi la parola:",

'remember_me' => " Selo ricordi di?",

'login' => " Inizio attività",

'forgot_pass_q' => " Ha dimenticato la vostra parola d'accesso?",

'need_register' => " Necessità di registrare?",

'express_register' => " La nostra pagina espressa di registro può essere completata rapidamente e facilmente.",

'reg_and_cont' => " Registro &amp; Continui",

'cont_shopping_q' => " Continui Ad acquistare?",

'cont_shopping' => " Continui Ad acquistare",

'cont_browsing' => " Per continuare a passare in rassegna come ospite senza un inizio attività, scatti il tasto qui sotto. NOTA: non potrete fare un acquisto senza registrare in primo luogo.",

);





$lang['front']['cart'] = array(

'free_shipping' => " Trasporto Libero",

'view_cart' => "Il vostro carrello  è vuoto",

'cart' => " Cestino",

'address' => " Indirizzo",

'payment' => " Pagamento",

'complete' => " Completo",

'add_more' => " Desideri aggiungere più articoli? Imposti il codice del prodotto:",

'add' => " Aggiunga",

'qty' => " Quantità",

'product' => " Prodotto",

'code' => " Codice",

'stock' => " Azione",

'price' => " Prezzo",

'line_price' => " Linea Prezzo",

'delete' => " Cancellazione",

'remove' => " Rimuova L'Articolo",

'invoice_address' => " Indirizzo Della Fattura",

'delivery_address' => " Indirizzo Di Consegna",

'title' => " Titolo:",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'address2' => "Indirizzo:",

'town' => " Città:",

'county' => " La contea/Dichiara:",

'postcode' => " Codice alberino/della chiusura lampo:",

'country' => " Paese:",

'edit_invoice_address' => " Pubblichi L'Indirizzo Della Fattura",

'edit_delivery_address' => " Pubblichi L'Indirizzo Di Consegna
",

'stock_warn' => " Avete ordinato più articoli che attualmente abbiamo a disposizione. Il vostro ordine può essere fatto ritardare fino a che i nostri livelli di riserva non siano aggiornati.",

'amount_capped' => " Spiacente ma noi non possono gli ordini di spedizione sopra il nostro livello di riserva corrente.<br /> La quantità di questo articolo è stata ricoperta a",

'na' => " Non applicabile",

'shipping' => " Trasporto:",

'tax' => "Tassa:",

'subtotal' => " Totale parziale:",

'cart_total' => " Totale Del Cestino:",

'if_changed_quan' => "( se avete cambiato qualunque quantità)",

'update_cart' => " Cestino Dell'Aggiornamento",

'continue' => " Continui",

'cart_empty' => " Il vostro carrello di shopping è attualmente vuoto.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => " Schermo Di Conferma",

'cart' => " Cestino",

'address' => " Indirizzo",

'payment' => " Pagamento",

'complete' => " Completo",

'order_success' => " Grazie, il vostro ordine riusciva! Prego chiamata ancora presto.",

'order_fail' => " Spiacente, il vostro ordine viene a mancare!",

'try_again_desc' => " Potete tentare di comprare ancora il vostro soddisfare del cestino sotto:",

'try_again' => " Prova Ancora",

'request_login' => " Dovete inizio attività osservare questa pagina.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Caro %s,

Grazie per il vostro no. di ordine: %s disposto sopra %s

La transazione riusciva e spediremo le vostre merci alla prima occasione possibile (se applicabile).

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nome: %s
Totale parziale: %s
Affrancatura & Impaccare: %s
Tassa: %s
Importo Totale: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Indirizzo Della Fattura:
%s
%s
%s
%s
%s
%s
%s

Indirizzo Di Spedizione:
%s
%s
%s
%s
%s
%s
%s

Metodo Di Pagamento: %s
Metodo Di Trasporto: %s",

'inv_email_body_2' => "\nLe vostre osservazioni
: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Inventario Di Ordine:\n",

'inv_email_body_4' =>" Prodotto: %s\n",

'inv_email_body_5' => " Opzioni: %s\n",

'inv_email_body_6' => " Quantità: %s
Codice Di Prodotto: %s
Prezzo: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => " No. Di Ordine: ",


'digi_email_body1' => "Caro %s,

Grazie per il vostro no. di ordine: %s disposto sopra %s

Sotto sono i collegamenti che dovete accedere ai prodotti digitali avete ordinato.

IMPORTANTE questi collegamenti espireranno su %s ed avete tentativi di %s di trasferirli dal sistema centrale verso i satelliti. Se avete tutti i problemi soddisfano se li mettono in contatto con che dichiariamo il vostro numero di ordine.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
TRASFERIMENTO:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => " Accesso Di Trasferimenti: ",

);



$lang['misc'] = array(

'pages' => " pages ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => " Browser Del Cliente:",

'server_software' => " Software Dell'Assistente:",

'perofOrderSub' => " % del totale parziale di ordine",

'freeForOrdOver' => " Liberi per gli ordini sopra",

'freeShipping' => " Trasporto Libero",

'byWeight1stClass' => " Di peso (Primo Codice categoria)",

'1stClass' => "( Primi Codice categoria)",

'byWeight2ndClass' => " Di peso (Secondo Codice categoria)",

'2ndClass' => "( Secondo Codice categoria)",

'flatRate' => " Aliquota forfettaria",

'free' => " Libero",

'national' => " Nazionale",

'international' => " Internazionale",

'byCategory' => " Per la categoria",

'perItem' => " Per voce",

'nextDayEarlyAm' => " Il giorno seguente Aria Presto",

'nextDayAir' => " Il giorno seguente Aria",

'nextDayAirSaver' => " Il giorno seguente Risparmiatore Dell'Aria",

'2ndDayEarlyAm' => "Secondi Aria Presto Di Giorno",

'2ndDayAir' => "Secondi Aria Di Giorno",

'3daySelect' => "Giorno 3 Prescelto",

'ground' => " Terra",

'canadaStandard' => "Canada Standard",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => " Fattura a",

'deliverTo' => " Trasporti a",

'postalOrderFor' => " Ordine postale per",

'orderOf' => " Ordine di",

'orderID' => " Identificazione Di Ordine:",

'product' => " Prodotto",

'code' => " Codice",

'qty' => " Quantità",

'price' => " Prezzo",

'shippingMethod' => " Metodo Di Trasporto:",

'subtotal' => " Totale parziale:",

'totalTax' => " Tassa Totale:",

'totalShipping' => " Trasporto Totale:",

'grandTotal' => " Importo Total:",

'payByCheck' => " Paga con l'assegno",

'payTo' => " Prego renda gli assegni pagabili a",

'payByCard' => " Paga dalla carta di credito",

'cardType' => " Tipo Della Scheda:",

'cardNo' => " Numero Di Scheda:",

'3-4DigiId' => "3-4 Identificazione Della Cifra:",

'expiryDate' => " Data Di Scadenza:",

'issueDate' => " Data Dell'Edizione:",

'issueNo' => " Numero Dell'Edizione:",

'signature' => " Firma:",

'payByTransfer' => " Paga da banca Transfer",

'bankName' => " Nome della banca:",

'accountName' => " Nome Di Cliente:",

'sortCode' => " Codice Di Specie:",

'accountNo' => " Numero Di Cliente:",

'swiftCode' => " Codice Rapido / Swift:",

'bankAddress' => " Indirizzo della banca:",

'thanks' => " Grazie per l'acquisto con noi!",

'postalAddress' => " Indirizzo postale:",

);

$lang['orderState'] = array(

'6' => " Annullato",

'7' => " Non ha eliminato",

'1' => " In corso",

'2' => " Elaborazione",

'3' => " Completato",

'4' => " Ribassante",

'5' => " Fraudolento",

);

$lang['admin']['cats'] = array (

'delete_success' => " Lingua di categoria cancellata con successo.",

'delete_fail' => " La cancellazione viene a mancare.",

'update_fail' => " L'aggiornamento viene a mancare.",

'update_success' => " Aggiornato con successo.",

'add_success' => " aggiunto con successo.",

'add_fail' => " Non è riuscito ad aggiungere la lingua di categoria.",

'site_cats_other_lang' => " Categorie - (Altre Lingue)",

'site_cat_other_lang' => " Categoria - (Altre Lingue)",


'cat_name' => " Nome Di Categoria:",

'language' => " Lingua:",

'update_cat' => " Categoria Dell'Aggiornamento",

'save_cat' => " Risparmi La Categoria",

'current_cat_list' => " Sotto è una lista di tutte le lingue correnti di categoria. Questi possono essere pubblicati in qualunque momento e/o cancellati.",

'cat_name2' => " Nome Di Categoria",

'action' => " Azione",

'no_site_cats' => " Questo nome di categoria non è stato tradotto ancora.",

);

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////


//////////////////////////////////////////
// START: Added in 3.0.6
//////////////////
$lang['front']['popup'] = array (

'thumb_alt' => " Scatto per la più grande immagine",

'large_alt' => " Vista Completa Di Immagine
",

);

$lang['install'] = array (

'stage2Name' => " Controlli I Permessi Della Lima",

'stage1Error' => " Dovete accosentire al nostro accordo di autorizzazione",

'stage3Name' => " Costruisca La Lima Di Config & Installi Le Tabelle Della Base di dati",

'enterDBHostname' => " Entri prego nel hostname della base di dati",

'enterDBName' => " Introduca prego il nome della base di dati",

'enterDBUsername' => " Introduca prego il nome dell'utente della base di dati",

'enteradminUsername' => " Introduca prego il vostro nome voluto dell'utente di admin",

'enteradminPassword' => " Entri prego in una parola del passaggio di admin",

'passwordMatch' => " Si assicura prego il vostro fiammifero di parole del passaggio",

'enterValidEmail' => " Entri prego in un email address valido",

'enterFullname' => " Introduca prego il vostro nome completo",

'storeOfflineText' => " Il deposito è attualmente fuori linea. Prego chiamata ancora presto.",

'configWriteError' => " La lima di configurazione non ha potuto essere scritta.",

'stage4Name' => " Regoli Indietro I Permessi Della Lima",

'stage5Name' => " Installazione Completa",

'stage1Name' => " Accordo Di Autorizzazione",

'agreeToLicense' => " Scatti prego il checkbox per continuare.",

'installation' => " Installazione Di CubeCart v%s",

'stepStatus' => " Punto %s da %s",

'step' => " Punto",

'iagreetoLic' => " Ho letto capito e accosento all'accordo di patente",

'checkFilePerms' => " Assicurisi prego che i seguenti permessi della lima sono regolati correttamente:",

'fileFolder' => " Lima/Dispositivo di piegatura",

'currentPermission' => " Permesso Corrente",

'requiredPermission' => " Permesso Richiesto",

'na' => " non applicabile",

'congratsFilePerms' => " Congratulazioni. I permessi della lima sono regolati correttamente.",

'filePermsNotCorrect' => " Accerti prego il permesso della lima sono regolati correttamente per continuare.",

'dbSettings' => " Regolazioni Della Base di dati",

'fromProvider' => "( Se siete incerti questi dovrebbero essere disponibili dal vostro fotoricettore che ospita il fornitore.)",

'dbhostname' => " Nome ospite della base di dati:",

'eg' => "per esempio",// come nell'esempio

'dbName' => " Nome Della Base di dati:",

'dbUsername' => " Nome dell'utente della base di dati:",

'dbPassword' => " Parola del passaggio della base di dati:",

'dbPrefix' => " Prefisso Della Base di dati:",

'dbPrefixOptional' => "( Facoltativo - usato per le installazioni multiple su una base di dati)",

'dropifExist' => " Tabelle di goccia se esistono:",

'previousInstallLost' => " Con questo affatto precedenti controllati installano con le stesse tabelle che prefisso su questa base di dati sarà perso. (difetto è controllato)",

'localeSettings' => " Regolazioni Del Locale",

'storeCountry' => " Immagazzini Il Paese:",

'US' => " Unito Dichiara dell'America",

'UK' => " Il Regno Unito",

'EU' => " Europa",

'currenciesAccord' => " Ciò installerà di conseguenza le valute ed altre regolazioni.",

'help' => " Aiuto",

'administratorSettings' => " Regolazioni Di Configurazione Del Coordinatore",

'adminSetDesc' => "( Questi particolari sono usati per accedere al pannello di controllo di admin del vostro deposito)",

'username' => " Nome dell'utente:",

'password' => " Passi la parola:",

'confPass' => " Confermi la parola del passaggio:",

'emailAddress' => "Email Address:",

'fullName' => " Nome Completo:",

'skin' => " Pelle",

'clickForLarger' => " Scatto per la più grande vista",

'changedAnytime' => "( Ciò può essere cambiata in qualsiasi momento)",

'classic' => " Classico (Larghezza Fissa)",

'legend' => " Leggenda (Larghezza Fissa)",

'killer' => " Assassino (larghezza di 100%)",

'advancedSettings' => " Regolazioni Avanzate",

'leaveIfUnsure' => "( Lasci questi se siete incerti)",

'storeURL' => " Immagazzini il URL:",

'serverRoot' => " Indice Di Radice Dell'Assistente:",

'siteRootRel' => " Percorso Del Parente Della Radice Del Luogo:",

'gdVersion' => " Versione di GD:",

'phpinfoLink' => " Vista <a href='info.php' target='_blank'>phpinfo()</a><br />( Si apre in nuova finestra)",

'none' => " Nessuno",

'clickLink' => " Scatti il collegamento del phpinfo () per controllare la vostra configurazione dell'assistente.",

'filepermsBack' => " Assicurisi prego che i seguenti permessi della lima sono regolati correttamente indietro:",

'congratulations' => " Congratulazioni! Il vostro deposito è stato installato con successo.",

'congratulationsSub' => " Selezioni prego una destinazione. Li suggeriamo cominci annotando nel vostro pannello di controllo di admin per configurare le vostre regolazioni del deposito.",

'adminHomepage' => " Homepage Di Admin",

'storeHomepage' => " Immagazzini Il Homepage",

'important' => " IMPORTANTE:",

'deleteInstall' => " Il vostro deposito non funzionerà fino a cancellare l'indice di installazione.",

'tryAgain' => " Prova Ancora",

'contToStep' => " Continui a fare un passo %s", // Continui a fare un passo x 

'closeWindow' => " Finestra Vicina",

'prevPage' => " Pagina Precedente",

'clicktoClose' => " Scatto da chiudersi",

'chooseLang' => " Scelga La Lingua:",

'adminConfSettings' => " Regolazioni Di Configurazione Del Coordinatore",

'adminConfSettingsDesc' => "<p> Il pannello di controllo dei coordinatori è una zona dove avete controllo completo sopra il vostro deposito, dai prodotti che vendete all'amministrazione degli ordini. Per accedere al pannello di controllo dei coordinatori del vostro deposito siete tenuti ad installare un utente su installazione. Ciò usa sarà a
 &quot;Super User&quot; quali mezzo il controllo completo sopra il deposito e le relative regolazioni di nucleo.</p>
<p> Se desiderate aggiungere altri coordinatori dopo l'installazione, questo può essere realizzato dal pannello di controllo di admin. Potete persino assegnare loro i permessi specifici accedere a determinate zone del deposito.</p>",

'advancedSettings' => " Regolazioni Avanzate",

'advancedSettingsDesc' => "<p> Queste regolazioni sono per gli utenti avanzati. Cambile prego soltanto se siete un coordinatore o uno sviluppatore con esperienza dell'assistente. </p>
<p> Per determinare la vostra versione di GD scattisi nel collegamento
<a href='../info.php' target='_blank'>phpinfo()</a>. Individui la sezione nominata &quot;GD&quot; ciò dirà la vostra versione di GD come 1.x.x o 2.x.x. se non avete prego alcuna menzione di GD prescelto &quot;None&quot;. </p>
<p><strong> Perchè ottengo il messaggio di errore &quot;Call to undefined function: imagecreatefromjpg()&quot;?<br />
  </strong>Ciò è perché il vostro web server non è configurato per avere GD permesso. Fare funzionare la versione 1 di CubeCart GD o sopra è richiesto. Mettasi in contatto con prego il vostro ospite e che chiedali che piacevolmente permettervelo per voi ma deve ricordarsi di che non sono obbligati per farvi questo per. Se non potete usare la ricerca di GD un'azienda ospitante alternativa o regolare la vostra versione di GD sia&quot;None&quot;.</p>",
'mysqlDBSettings' => " Regolazioni Della Base di dati Di MySQL",

'mysqlDBSettingsDesc' => "<p> Per fare funzionare CubeCart sul vostro assistente siete tenuti ad averle una base di dati di MySQL affinchè memorizziate le informazioni quali i vostri particolari del cliente e del prodotto. Se vostro stanno tentando di installare CubeCart sull'compartecipe (virtuale) ospitando l'ambiente allora il vostro fornitore ospitante dovrebbe potere fornirvi le informazioni richieste per questa fase del processo di installazione. Queste informazioni dovrebbero includere il nome della base di dati, il username, la parola d'accesso ed il hostname. A volte troverete che potete installare e controllare il vostro database(s) di MySQL dal vostro pannello di controllo ospitante. Se tuttavia state installando CubeCart su una macchina difficile o su un assistente dedicato potete avere bisogno di di consultare
 <a href='http://dev.mysql.com/doc/mysql/en/index.html' target='_blank'> Manuale di MySQL </a>. </p>
<p><strong> Che cosa è il prefisso della base di dati usato per?</strong>
<br />
Lo scritto dell'installazione di CubeCart genererà le tabelle all'interno della vostra base di dati di MySQL che sono essenziali affinchè funzionino. Se desiderate installare molti depositi differenti ed avete soltanto una base di dati, queste tabelle dovranno essere distinte da a vicenda in qualche modo. Ciò è realizzata mettendo un prefisso sulla parte anteriore di ogni tabella della base di dati per ogni negozio
.</p>",

'selectOs' => " Selezioni prego il vostro sistema operativo degli assistenti:",

'permsMac' => " Regolazione dei permessi della lima su un assistente del Macintosh",

'permsWin' => " Regolazione dei permessi della lima su un assistente di Windows",

'permsWinDesc' => " Gli assistenti di Windows non richiedono i permessi della lima essere cambiato. Diventare prego il punto seguente come niente deve essere fatto.",

'permsLinux' => " Regolazione dei permessi della lima su un assistente di Linux/Unix",

'permsLinuxDesc' => "<p> Inizi in su il vostro favorito
 <abbr title='File Transfer Protocol'>FTP</abbr> software o quello che avete usato upload CubeCart al vostro web server. Suggeriamo:<a href='http://www.smartftp.com' target='_blank'>SmartFTP</a> o <a href='http://filezilla.sourceforge.net/' target='_blank'>FileZilla</a>. (Screenshots è preso da SmartFTP)</p>
<p><strong>1. Individui la lima che richiede un cambiamento di permesso e di giusto scatto esso e selezioni 'CHMOD '.  </strong></p>
<p align='center'><img src='../images/smartFTPSel.gif' alt='' width='309' height='427' title='' /></p>
<p><strong>2. Scriva il valore a macchina richiesto del chmod nella scatola contrassegnata2 &quot;Permissions&quot; e scatto 'giusto '. Potete scattare alternativamente i checkboxes fino a che non otteniate il valore e lo scatto voluti &quot;Ok&quot;. </strong></p>
<p align='center'><img src='../images/typeChmodVal.gif' alt='' width='382' height='494' title='' /></p>
<p><strong>3. Vostro fatto!</strong></p>
<p><strong> Suggerimento: </strong> Se il vostro software del ftp non è d'accordo con il valore questo installi lo scritto dice che semplicemente è colpito il tasto di rinfresc sul software e sulla prova del ftp ancora.
 </p>",

'installHelp' => " Installi L'Aiuto:",

'helpAdminSettings' => " Regolazioni Del Coordinatore",

'helpAdvanced' => " Regolazioni Avanzate",

'helpDatabase' => " Base di dati
 ",

'helpFilePerms' => " Permessi Della Lima",

'opDectResultTrue' => " Il vostro sistema operativo dell'assistente è stato rilevato As",

'opDectResultFalse' => " Spiacente, il vostro sistema operativo dell'assistente non ha potuto essere rilevato. Faccia prego una selezione qui sotto.",

'suggestedOS' => " Sistema Operativo Suggerito",

'skinPreview' => " Previsione Della Pelle",

);

////////////////////
// Start of Modules

$lang['module']['directPayment'] = array (

'cc_info_title' => " Le Informazioni Della Carta di credito",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'card_type' => " Tipo Della Scheda:",

'card_number' => " Numero Di Scheda:",

'expires' => " Espira:",

'mmyyyy' => "(mm/yyyy)",

'security_code' => " Codice Di Sicurezza:",

'customer_info' => " Le Informazioni Del Cliente",

'email' => "E-Mail:",

'address' => " Indirizzo:",

'city' => " Città:",

'state' => " Dichiari:",

'zipcode' => " Codice Alberino/Della Chiusura lampo:",

'country' => " Paese:",

'optional' => "( Facoltativo)",

);

$lang['module']['bluePay'] = array (

'cc_info_title' => " Le Informazioni Della Carta di credito",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'card_number' => " Numero Di Scheda:",

'expires' => " Espira:",

'mmyy' => "(mm/yy)",

'security_code' => " Codice Di Sicurezza:",

'customer_info' => " Le Informazioni Del Cliente ",

'email' => "E-Mail:",

'address' => " Indirizzo:",

'city' => " Città:",

'state' => " Dichiari:",

'zipcode' => " Codice Alberino/Della Chiusura lampo:",

'country' => " Paese:",

'optional' => "( Facoltativo)",

);

$lang['module']['eway'] = array (

'cc_info_title' => " Le Informazioni Della Carta di credito ",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'card_number' => " Numero Di Scheda:",

'expires' => " Espira:",

'mmyy' => "(mm/yy)",

'security_code' => " Codice Di Sicurezza:",

'customer_info' => " Le Informazioni Del Cliente ",

'email' => "E-Mail:",

'address' => " Indirizzo:",

'city' => " Città:",

'state' => " Dichiari:",

'zipcode' => " Codice Alberino/Della Chiusura lampo:",

'country' => " Paese:",

'optional' => "( Facoltativo)",

);

$lang['module']['iPay'] = array (

'cc_info_title' => " Le Informazioni Della Carta di credito ",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'card_number' => " Numero Di Scheda:",

'expires' => " Espira:",

'mmyy' => "(mm/yy)",

'security_code' => " Codice Di Sicurezza:",

'customer_info' => " Le Informazioni Del Cliente ",

'email' => "E-Mail:",

'address' => " Indirizzo:",

'city' => " Città:",

'state' => " Dichiari:",

'zipcode' => " Codice Alberino/Della Chiusura lampo:",

'country' => " Paese:",

'optional' => "( Facoltativo)",
);

$lang['module']['psiGate'] = array (

'cc_info_title' => " Le Informazioni Della Carta di credito ",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'card_number' => " Numero Di Scheda:",

'expires' => " Espira:",

'mmyy' => "(mm/yy)",

'security_code' => " Codice Di Sicurezza:",

'customer_info' => " Le Informazioni Del Cliente ",

'email' => "E-Mail:",

'address' => " Indirizzo:",

'city' => " Città:",

'state' => " Dichiari:",

'zipcode' => " Codice Alberino/Della Chiusura lampo:",

'country' => " Paese:",

'optional' => "( Facoltativo)",


);

//////////////////////////////////////////
// END: Added in 3.0.6
//////////////////

//////////////////////////////////////////
// START: Added in 3.0.7
//////////////////

$lang['module']['PayJunction'] = array (

'cc_info_title' => " Le Informazioni Della Carta di credito ",

'first_name' => " Nome:",

'last_name' => " Ultimo Nome:",

'card_number' => " Numero Di Scheda:",

'expires' => " Espira:",

'mmyy' => "(mm/yy)",

'security_code' => " Codice Di Sicurezza:",

'customer_info' => " Le Informazioni Del Cliente ",

'email' => "E-Mail:",

'address' => " Indirizzo:",

'city' => " Città:",

'state' => " Dichiari:",

'zipcode' => " Codice Alberino/Della Chiusura lampo:",

'country' => " Paese:",


);

//////////////////////////////////////////
// END: Added in 3.0.7
//////////////////


// ora dobbiamo includere la lima di config includa
include("config.inc.php");



?>