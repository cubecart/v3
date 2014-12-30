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
|   Web : http://www.cubecart.com
|   Date : Thursday, 13 October 2005
|   Email : info (at) cubecart (dot) com
|	License Type : CubeCart is NOT Open Source Software and Limitations Apply 
|   Licence Info : http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
|	lang.inc.php
|   ========================================
|	French (FR) Language File by RaoulDeLaPe�a (http://www.pokecardex.com - guif007lepro (at) hotmail (dot) com)
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'fr_FR');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Oui";

$lang['admin']['no'] = "Non";

$lang['admin']['edit'] = "Modifier";

$lang['admin']['delete'] = "Effacer";

$lang['admin']['delete_q'] = "Etes-vous sur de vouloir effacer ceci ?";

$lang['admin']['add'] = "Ajouter";

$lang['admin']['add_new'] = "Ajouter nouveau";

$lang['admin']['write'] = "Ecrire";

$lang['admin']['read'] = "Lire";

$lang['admin']['na'] = "N/A"; // as in not applicable

$lang['admin']['all'] = "TOUS";

$lang['admin']['remove'] = "Enlever";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Effacement confirm�.",

'del_failed' => "Effacement �chou�.",

'update_success' => "Modification effectu�e.",

'update_fail' => "Modification �chou�e",

'add_success' => "Ajout confirm�",

'add_failed' => "Ajout de l'utilisateur �chou�",

'administrators_title' => "Administrateurs",

'current_users' => "Ci-dessous, la liste des administrateurs de votre boutique.",

'id' => "ID",

'user_notes' => "Nom d'utilisateur / Notes",

'no_logins' => "Nombre de login",

'super_user' => "Administrateur ?",

'email' => "Email",

'action' => "Action",

'add_admin' => "Vous pouvez utiliser le formulaire ci-dessous pour ajouter un administrateur.",

'full_name' => "Nom / Pr�nom:",

'username' => "Username:",

'administrator' => "Administrateur",

'email2' => "Email:",

'password' => "Password:",

'pass_warn' => "(Entrez un password seulement si vous voulez changer votre password actuel.)",

'make_super' => "Administrateur ?",

'notes' => "Notes:",

'permissions' => "Permissions",

'pass_updated' => "Password modifi�.",

'pass_not_updated' => "Password non modifi�.",

'change_pass_below' => "Merci de changer votre ci-dessous:",

'old_pass' => "Ancien Password:",

'new_pass' => "Nouveau Password:",

'confirm_pass' => "Confirmez votre Password:",

'perms_updated' => "Permissions modifi�es.",

'set_perms' => "Merci de mettre les permissions pour cette utilisateur ci-dessous.",

'section' => "Section",

'nb_bulk' => "N.B Pour envoyer un mail au client, l'utilisateur doit avoir accepter vos e-mails.",

'admin_sessions' => "Sessions Administrateur",

'sessions_desc' => "Ci-dessous est d�crit les derniers utilisateur qui ont essay� de se logger en administrateur. Gardez un oeil sur cette page pour �tre sur qu'il n'y ait aucune tentative de hacking. Il est fortement recommand� de changer votre mot de passe r�guli�rement.",

'login_id' => "ID",

'time' => "Date / Heure",

'ip_address' => "Adresse IP",

'success' => "Succ�s ?",

);



$lang['admin']['categories'] = array (

'delete_success' => "- Effacement r�ussi.",

'delete_fail' => "Effacement de la cat�gorie �chou�.",

'update_success' => "- Modification r�ussi.",

'update_fail' => "Modification de la cat�gorie �chou�e.",

'add_success' => "- Ajout r�ussi.",

'add_failed' => "Ajout de la cat�gorie �chou�.",

'categories' => "Categories",

'categories_desc' => "La liste de vos cat�gories actuelles enregistr�es dans votre base de donn�es est ci-dessous.",

'cat_name' => "Nom Cat�gorie",

'dir' => "Cat�gorie",

'image' => "Image",

'no_products' => "Nombre produit ?",

'action' => "Action",

'cannot_del' => "Cette cat�gorie ne peut �tre effac�e parce qu'elle contient des articles.",

'no_cats_exist' => "Aucune cat�gorie dans la base de donn�es.",

'add_desc' => "Vous pouvez ajouter des cat�gories avec un nombre illimit� de sous-cat�gories, modifier les images, ou reprendre les images d�j� sur le serveur.",

'category' => "Categorie",

'category_name' => "Nom Cat�gorie:",

'category_level' => "Sous Cat�gorie:",

'top_level' => "T�te de cat�gorie",

'image_optional' => "Image (Optionnel):",

'upload_new_image' => "Charger une nouvelle image",

'browse_existing' => "Parcourir les images existantes",

'ship_by_cat' => "Frais de port par cat�gorie:",

'per_ship' => "Par envoi:",

'per_item' => "Par article:",

'per_int_ship' => "Par envoi international:",

'per_int_item' => "Par article (international):",

);



$lang['admin']['customers'] = array (

'customers' => "Clients",

'delete_success' => "Supprim� avec succ�s.",

'delete_fail' => "Effacement �chou�.",

'update_success' => "Client modifi� avec succ�s.",

'update_fail' => "Modification du client �chou�.",

'search_term' => "Recherche d'un client:",

'reset' => "Reset",

'name' => "Nom",

'email' => "Email",

'invoice_add' => "Adresse",

'phone' => "T�l�phone",

'reg_ip' => "Date d'enregistrement / IP",

'no_orders' => "Nombre commandes",

'action' => "Action",

'no_cust_exist' => "Aucun client existe dans la base de donn�e.",

'edit_below' => "Modification des infos sur un client:",

'title' => "Mr/Mme/Mlle",

'first_name' => "Pr�nom:",

'last_name' => "Nom:",

'email2' => "Email:",

'address' => "Adresse:",

'town' => "Ville:",

'county' => "R�gion:",

'postcode' => "Code Postal:",

'country' => "Pays:",

'phone2' => "Telephone:",

'edit_customer' => "Modifier",

'no_download_email' => "Il y a aucun mail � t�l�charger.",

'email_customers' => "Mailez les clients",

'create_email' => "Cr�ez votre message ci-dessous:",

'hint' => "Conseil:",

'click_source' => "Vous pouvez cliquer sur le bouton 'Source' ci-dessus et coller un document HTML que vous avez d�j� cr�e.",

'important' => "Important:",

'absolute_links' => "Assurez-vous que toutes les images et les liens contiennent le nom de domaine de votre site (ex : http://www.xxxxx.xxx). Dans de nombreux pays, il est obligatoire de mettre un lien de d�siscription � la mailing-list:",

'email_subject' => "Sujet du message:",

'senders_name' => "Votre Nom:",

'senders_email' => "Votre e-mail:",

'return_path' => "Adresse mail d'erreur:",

'bounce_desc' => "(L'adresse mail d'erreur recevera les messages d'erreurs li�s � votre envoi.)",

'send_test' => "Envoyez un message de test ?",

'test_email_recip' => "Adresse mail pour le message de test:",

'send_email' => "Envoyer le mail",

'download_or_send' => "Choisissez si vous voulez t�l�charger les adresses d'email de vos clients ou si vous voulez envoyer un mail par ce site Web.",

'please_choose' => "Choisissez:",

'used_to_download' => "Pour t�l�charger toutes les adresses e-mails de votre client.",

'bulk_to_subscribed' => "Pour envoyer un mail seulement au personnes qui se sont inscrits � la mailing-list de ce site.",

'include_name' => "Inclure le nom ?",

'download_email' => "Telecharger",

'send_email' => "Envoyer un mail",

'sending_complete' => "Envoi termin�",

'sending' => "Envoi en cours",

'recipient' => "Destinataire:",

'prev_page' => "Page pr�c�dente",

'page' => "Page:",

'bulk_finished' => "Le serveur � effectuer sa tache avec succ�s",

'time_taken' => "Temps:",

'recipients' => "Destinataires:",

);



$lang['admin']['docs'] = array (

'update_fail' => "La page d'accueil n'a pas �t� mise � jour. Assurez-vous que les permissions de includes/static/home.inc.php sont correctes.",

'update_success' => "Page d'accueil mis � jour avec succ�s.",

'homepage' => "Accueil",

'enabled' => "Activ�:",

'enabled_desc' => "(S'il est d�sactiv�, la langue par d�faut sera utilis�e.)",

'language' => "Langue:",

'title' => "Titre:",

'use_rich_text' => "Veuillez utiliser l'�diteur de texte ci-dessous pour faire des changements sur la page d'accueil de votre site Web. Avant de sauvegarder les changements, assurez-vous qu'il n'y ait pas d'erreurs de syntaxe. Les changements sont pris en compte imm�diatement.",

'update_homepage' => "Modifier la page d'accueil",

'delete_success' => "Document effac� avec succ�s.",

'delete_fail' => "Effacement �chou�",

'update_success' => "modifi� avec succ�s.",

'update_fail' => "n'a pas �t� modifi�.",

'add_success' => "ajout� avec succ�s.",

'add_fail' => "Echec de l'ajout du document.",

'site_docs_other_lang' => "Documents - (Autres Langues)",

'use_rich_text' => "Utilisez l'�diteur de texte pour ajouter ou modifier le document ci-dessous.",

'site_doc_other_lang' => "Document - (Autre Langue)",

'doc_name' => "Nom du document:",

'language' => "Langue:",

'update_doc' => "Modifier le document",

'save_doc' => "Sauvegarder le document",

'current_doc_list' => "Ci-dessous, la liste de tous les documents actuels. Vous pouvez avoir une quantit� illimit�e de ces derniers et ils peuvent �tre �dit�s et/ou supprim�s � tout moment.",

'doc_name2' => "Nom du document",

'action' => "Action",

'no_site_docs' => "Il y a aucun document dans la base de donn�es.",

'site_docs' => "Documents",

'site_doc' => "Document",

'languages' => "Langues",

'no_docs' => "Il y a aucun document dans la base de donn�es.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Navigateur d'image",

'file' => "Fichier:",

'no_imgs' => "Aucune image n'est disponible. Fermez cette fenetre et uploader une image � la place.",

'preview' => "Preview:",

'ok' => "OK",

'cancel' => "Effacer",

'prod_cat_use_img' => "Les articles et cat�gories suivants utilisent l'image '%s'.",

'continue_q' => "CONTINUER A EFFACER ?",

'site_doc_use_img' => "Les documents suivants utilisent l'image '%s'.",

'home_use_img' => "Cette image '%s' est utilis�e sur la page d'accueil.",

'gallery_use_img' => "Cette image '%s' est utilis�e pour une gallerie.",

'image_deleted' => "Image effac�e avec succ�s.",

'delete_failed' => "Effacement de l'image �chou�.",

'image_manager' => "Images envoy�es sur le serveur",

'delete_from_server' => "Vous pouvez effacer des images de votre serveur.",

'img_click_prev' => "Image (Cliquer pour voir un aper�u)",

'size' => "Poids",

'action' => "Action",

'no_images_added' => "Aucune image a �t� ajout�e.",

'prev_file' => "Aper�u du fichier",

'close_window' => "Fermer la fenetre",

'no_image_selected' => "Aucune image selectionner pour un aper�u.",

'file_uploader' => "Uploader des fichiers",

'upload_image' => "Envoyer une image sur votre serveur.",

'please_browse_img' => "S�lectionnez votre image:",

'file_too_big' => "Erreur ! Votre fichier est trop lourd (Max : %s)",

'img_already_exists' => "Erreur ! %s existe d�j� ! Renonmmer votre fichier et r�essayer.",

'upload_too_large' => "Erreur ! Votre fichier est trop lourd. La limite de poids est de 2 Mo.",

'not_valid_mime' => "Erreur ! %s n'est pas une image valide.",

'image_upload_success' => "%s � �t� t�l�charg� sur le serveur avec succ�s !",

'back' => "&laquo; Retour",

);



$lang['admin']['misc'] = array (

'license_form' => "Formulaire de licence",

'write_error' => "Le serveur ne peut pas �crire le fichier suivant : includes/global.inc.php. Essayez de changer la valeur CHMOD de ce fichier � 0777. Souvenez-vous qu'il faut changer cette valeur � 0644 apr�s l'op�ration !",

'try_again' => "R�essayer",

'purchase_cubecart' => "Acheter CubeCart:",

'invalid_key' => "D�sol�, mais votre num�ro de licence est invalide ou est d�j� utilis�.",

'purchase_license_key' => "Acheter une licence",

'run_unlicensed' => "Vous utilisez une version gratuite de CubeCart. Veuillez �crire votre num�ro de licence ci-dessous afin d'enlever les copyrights .",

'license_key' => "Num�ro de licence:",

'submit_key' => "Envoyer",

'server_info' => "Information du serveur",

'ini_set_desc' => "Les informations ci-dessous vous montre la configuration actuelle de votre serveur. Ces infos contiennent toutes sortes d'informations qui peuvent �tre chang�es si vous �prouvez des probl�mes avec CubeCart. N.B. Si vous avez un serveur partag�, il est probable que vous ayez un acc�s limit� voir aucun acc�s pour modifier cette configuration. La fonction <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> peut �tre utilis� pour modifier ces param�tres.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "Le status de cette commande a �t� modifi� avec succ�s. Vous pouvez envoyer un mail d'avertissement � votre client et pour qu'il acc�de t�l�chargement du produits.",

'click_here' => "Cliquez Ici",

'send_invoice_desc' => "Si le status est passe de 'En attente de paiement' � 'En Pr�paration', vous pourrez envoyer � votre client un mail comme quoi son paiement est arriv� et donner l'acc�s aux articles � t�l�charger, s'il y en a.",

'delete_success' => "Effac�e avec succ�s.",

'delete_fail' => "Effacement �chou�.",

'orders' => "Commandes",

'all_orders' => "Ci-dessous, la liste de toutes les commandes dans votre base de donn�es.",

'order_no' => "Commande N�",

'status' => "Status",

'date_time' => "Date/Heure",

'customer' => "Client",

'ip_address' => "Adresse IP",

'cart_total' => "Total",

'action' => "Action",

'no_orders_in_db' => "Il y a aucune commande dans votre base de donn�es.",

'order_email' => "Cher %s,\n\nle status de votre commande n� %s a �t� chang� en %s\n\n",

'email_staff_comments' => "Notre staff a ajout� le commentaire suivant : \n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Cette e-mail a �t� envoy� automatiquement par %s",

'email_subj_status_change' => "Changement de status de votre commande:",

'order_no2' => "Commande N�:",

'print_packing_slip' => "Imprimer le bon de livraison",

'customer_info' => "Info sur le client",

'invoice_address' => "Adresse de facturation:",

'delivery_address' => "Adresse d'envoi:",

'contact_info' => "Info pour contacter votre client:",

'tel' => "Tel:",

'mobile' => "Mobile:",

'email' => "Email:",

'customer_comments' => "Commentaires du client:",

'no_comments_left' => "Aucun commentaire laiss�.",

'order_summary' => "R�sum� de la commande",

'product' => "Article",

'code' => "Code",

'quantity' => "Quantit�",

'price' => "Prix",

'download_link' => "T�l�charger lien:",

'warn_reset' => "Cela r�initialisera le total des t�l�chargements � 0 et �tendra le delai d'expiration.",

'reset_link' => "R�initialiser le lien",

'download_stats' => "T�l�charg� (%s) fois. Expiration dans %s",

'ip_address2' => "Adresse IP:",

'order_date_time' => "Commande Date/Heure:",

'payment_method' => "Methode de paiement:",

'ship_method' => "M�thode d'envoi:",

'subtotal' => "Sous-Total:",

'total_tax' => "Taxe:",

'shipping' => "Frais de port:",

'grand_total' => "TOTAL:",

'order_notfound' => "Commande n�%s n'a pas �t� trouv�e.",

'order_status' => "Status de la commande",

'shipping_date' => "Date de l'envoi:",

'ship_today' => "Envoy� aujourd'hui",

'modify_status' => "Modifier le status:",

'staff_comments' => "Commentaires du staff:",

'info_not_sent_customer' => "(Ces informations ne seront pas envoy�es � votre client !)",

'inform_customer' => "Informer le client:",

'customer_notified' => "(En cochant la case, le client sera inform� du changement de status de sa commande.)",

'comments_2_customer' => "Commentaires pour le client:",

'comments_2_customer_desc' => "(Ces commentaires seront ajout�s � l'email qui informera le client que sa commande a chang�e de status.)",

'save_order_status' => "Sauvegarder le status",

'paid_by' => "Pay� par:",

'delivered_to' => "Envoy� �:",

'invoice_reciept_for' => "Facture pour:",

'order_of_time' => "Votre commande pour",

'order_id' => "ID Commande:",

'digi_goods_desc' => "Si vous commandez des articles non mat�riels (e-books par ex), vous allez recevoir par e-mail contenant un lien pour t�l�charger votre article. Vous pouvez aussi y acceder par votre panneau de configuration de votre compte.",

'thank_you' => "Merci de nous faire confiance !",

);



$lang['admin']['products'] = array (

'show_featured' => "Inclure le dernier produit sur la page d'accueil ?",

'upload_new_images' => "Images t�l�charg�es",

'no_images_avail' => "D�sol�, il n'y a pas d'images disponibles.",

'prod_added_to_cat' => "Article ajout� � la cat�gorie.",

'prod_not_added_to_cat' => "Echec de l'ajout de l'article.",

'prod_removed_from_cat' => "Article effac� de la cat�gorie.",

'prod_not_removed_from_cat' => "Article non effac� de sa cat�gorie.",

'title_extraCats' => "Gestion des cat�gories",

'manage_cats' => "Gerer les cat�gories",

'master_cat' => "Cat�gorie principale:",

'close_window' => "Fermer la fenetre",

'img_added_to_prod' => "Image ajout�e � l'article.",

'img_not_added_to_prod' => "L'image de l'article n'a pas �t� ajout�e.",

'img_removed' => "Image effac�e de l'article.",

'img_not_removed' => "L'image de l'article n'a pas �t� effac�e.",

'image_management' => "Gestion des images",

'manage_images' => "Gerer les images",

'image' => "Image",

'action' => "Action",

'delete_success' => "Effac�e avec succ�s.",

'delete_fail' => "Effacement �chou�.",

'update_successful' => "modifi�e avec succ�s.",

'update_fail' => "Modification de la cat�gorie �chou�e.",

'add_success' => "ajout�e avec succ�s.",

'add_fail' => "Ajout de la cat�gorie �chou�.",

'prod_inventory' => "Inventaire des produits",

'current_prods_in_db' => "Ci-dessous, la liste des articles actuellement dans votre base de donn�es.",

'all_cats' => "Toutes les cat�gories",

'prod_name' => "Nom de l'article",

'prod_id' => "ID de l'article",

'prod_code' => "Code de l'article",

'master_cat2' => "Cat�gorie",

'title' => "Titre",

'stock_level' => "Etat du Stock",

'normal_price' => "Prix",

'sale_price' => "Prix sold�",

'asc' => "Ordre croissant",

'desc' => "Ordre d�croissant",

'containing_text' => "contenant le texte",

'filter' => "Filter",

'reset' => "Reset",

'id' => "ID",

'type' => "Type",

'name' => "Nom",

'price_sale_price' => "Prix / Prix Sold�",

'in_stock' => "En Stock",

'action' => "Action",

'languages' => "Langues",

'no_products_exist' => "Aucun produit dans la base de donn�es.",

'add_prod_desc' => "Vous pouvez utiliser le formulaire ci-dessous pour ajouter un article dans votre base de donn�es.",

'product' => "Article",

'prod_name2' => "Nom de l'article:",

'prod_stock_no' => "Code du produit:",

'auto_generated' => "(Le code sera g�n�r� automatiquement si vous laissez vide.)",

'description' => "Description:",

'primary_lang' => "(Dans votre langue principal, d'autres langues pourront �tre ajout�es ensuite.)",

'category' => "Categorie:",

'image2' => "Image:",

'opt_and_thumbs' => "(Les aper�us seront g�n�r�s automatiquement si le format choisi est compatible.)",

'upload_new' => "Uploader nouvelle image",

'browse_existing' => "Parcourir les images",

'normal_price2' => "Prix:",

'sale_price2' => "Prix sold�:",

'sale_mode_desc' => "(Peut �tre utilis� seulement si le magasin est en mode 'Prix sold� par produit'.)",

'prod_weight' => "Poids de l'article:",

'tax_class' => "Taxe:",

'stock_level2' => "Stock:",

'reduce_stock_level' => "(Ce stock diminue � chaque fois que cet article est vendu)",

'use_stock_q' => "Utiliser la gestion du stock ?",

'product_type' => "Type de produit:",

'tangible' => "Mat�riel (Livres, Vetements...)",

'digital' => "Non-Mat�riel/Virtuel (E-book...)",

'digi_path' => "Pour utiliser des articles Non-Mat�riel ou Virtuel, vous devez remplir les champs 'HTTP Path' ou 'Server Root Path' (Voir ci-dessous).",

'digi_info' => "Information pour les produits non-mat�riel/virtuel:",

'digi_desc' => "<p><strong>HTTP Path:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong>Server Root Path:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Recommend� !)							</strong></p>

<p>L'avantage d'utiliser le 'Server Root Path' consiste � ce que les fichiers peuvent �tre stock�s ailleurs que le dossier publiquement accessible. Si cette m�thode est choisie, CubeCart cr�era automatiquement une lien de t�l�chargement qui a un temps d'expiration et une quantit� de t�l�chargements limit�e configur�e dans les param�tres du magasin.</p>",

'prod_inv_langs' => "Inventaire des articles - (Autres Langues)",

'use_rich_oth_lang' => "Utilisez l'�diteur de texte ci-dessous pour ajouter ou modifier des articles dans une autre langue.",

'language' => "Langue:",

'update_prod_lang' => "Mettre � jour l'article",

'save_prod_lang' => "Sauvegarder la langue pour cet article",

'other_langs_exdefault' => "Ci-dessous, la liste des produits avec une langue diff�rente que celle par d�faut.",

'no_lang_exist' => "Aucune variation de langue pour ce produit existe dans la base de donn�es.",

'opt_add_success' => "Nom de l'option ajout�.",

'opt_add_fail' => "Echec de l'ajout du nom de l'option.",

'att_add_success' => "Valeur de l'option ajout�.",

'att_add_fail' => "La valeur de l'option n'a pas �t� ajout�e.",

'assign_success' => "Option ajout�e � l'article.",

'assign_fail' => "L'option n'a pas �t� ajout� � l'article.",

'product_options' => "Options de l'article",

'product_option' => "Option de l'article",

'quick_assign' => "Assignation rapide:",

'prod_opts_of' => "Option de l'article de",

'to' => "�",

'go' => "GO",

'opt_step1' => "1. Cr�ez une option (ex : Couleur)",

'opt_id' => "ID",

'opt_name' => "Nom de l'option",

'warn_remove_opt' => "Etes-vous sur d\'effacer ce nom d'option ?",

'no_options_made' => "Aucune option n'a �t� cr��e.",

'option' => "Option",

'opt_step2' => "2. Cr�ez une valeur de cette option (Ex. : Rouge)",

'option_attributes' => "Valeur des options",

'warn_remove_att' => "Etes-vous sur d effacer cette valeur d\'option ?",

'no_attributes_made' => "Aucune valeur n'a �t� ajout�.",

'attribute' => "Attribuer",

'opt_step3' => "3. Assignez Option &amp; valeur � un article/cat�gorie (Ex : T-Shirt &gt; Couleur &gt; Rouge)",

'option_attribute' => "Valeur de l'option",

'option_price' => "Prix de l'option",

'add_subtract' => "Ajouter / Retirer",

'remove_opt_prod' => "Etes-vous sur d\'enlever cette option � cet article ?",

'no_assigned_opts' => "Aucune option n'a �t� attribu�e � des produits.",

'prods_made_1st' => "Les articles doivent �tre ajout�s avant que les options soient cr��es.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Enable Script/Bot Flood Control?</strong><br />
Forces users to enter a code on registration, tell a friend etc to prevent bot's from spamming the store.",


//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "Hote SMTP:",

'defaultHost' => "(Par d�faut : localhost)",

'smtpPort' => "Port SMTP:",

'defaultPort' => "(Par d�faut : 25)",

'smtpAuth' => "Utiliser l'authentification ?",

'defaultAuth' => "(Par d�faut : Non)",

'smtpUsername' => "Nom d'utilisateur SMTP:",

'smtpPassword' => "Mot de Passe SMTP:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "Montrer le dernier article sur la page d'accueil ?",

'no_latest' => "Nombres des derniers articles � montrer:",

'off_line_settings' => "Param�tres Offline",

'off_line' => "Mettre le magasin OffLine ?",

'off_line_content' => "Message d'accueil quand la boutique est OffLine:",

'off_line_allow_admin' => "Autoriser les administrateurs � voir le magasin OffLine ? (Besoin d'une session admin)",


'store_settings' => "Param�tres de la boutique",

'edit_below' => "Vous pouvez modifier les param�tres de votre boutique ci-dessous:",

'meta_data' => "Informations Principales",

'browser_title' => "Nom de votre boutique (Balise META):",

'meta_desc' => "Description de votre boutique (Balise META):",

'meta_keywords' => "Mots-Cl� (Balise META):",

'comma_separated' => "(Separez les mots avec des virgules)",

'store_co_name' => "Nom de votre boutique/entreprise:",

'store_address' => "Adresse de votre boutique:",

'country' => "Pays:",

'zone' => "R�gion:",

'dirs_folders' => "R�pertoires et Dossiers",

'rootRel' => "Dossier public de la boutique:",

'include_slash' => "(Slash inclus)",

'storeURL' => "URL absolue de la boutique:",

'eg_domain_com' => "ex : http://www.domain.com",

'rootDir' => "Chemin du r�pertoire sur le serveur:",

'eg_root_path' => "ex : /path/to/your/webstore",

'rootRel_SSL' => "Chemin du r�pertoire SECURISE de la boutique:",

'storeURL_SSL' => "URL SECURISE absolue de la boutique:",

'eg_domain_SSL' => "ex : https://secure.domain.com",

'rootDir_SSL' => "Chemin du r�pertoire SECURISE sur le serveur:",

'eg_root_path_secure' => "ex : /path/to/your/secure/webstore",

'enable_ssl' => "Activ� la protection SSL:",

'ssl_warn' => "(ATTENTION : Ce changement prend effet tout de suite apr�s la soumission. Assurez-vous que les infos ci-dessus sont exactes et fonctionnent bien avant de mettre Oui !",

'digital_downloads' => "T�l�chargement des articles non-mat�riels/virtuels (E-book,...)",

'download_expire_time' => "Temps d'expiration du lien de t�l�chargement:",

'seconds' => "(Secondes)",

'download_attempts' => "Nombre de t�l�chargement:",

'attempts_desc' => "(Nombre de fois que le client pourra t�l�charger le produit)",

'styles_misc' => "Styles &amp; Divers",

'default_language' => "Langue par d�faut:",

'store_skin' => "Skin de la boutique:",

'no_cats_per_row' => "Nombre de cat�gorie par rang�e:",

'dir_symbol' => "Symbole de direction:",

'prods_per_page' => "Nombre d'articles par pages:",

'precis_length' => "Longueur du r�sum� de l'article : ",

'chars' => "(Charact�res)",

'no_sale_items' => "Nombre d'articles dans la partie Articles en Soldes:",

'no_pop_prod' => "Nombre d'articles dans la partie Articles Populaires:",

'email_name' => "Nom:",

'email_name_desc' => "(Utilis� comme le nom d'exp�diteur des mails de la boutique.)",

'email_address' => "E-mail:",

'email_address_desc' => "(Utilis� comme l'adresse de l'exp�diteur des mails de la boutique.)",

'mail_method' => "M�thode d'envoi des mails:",

'mail_recommended' => "(SMTP recommand�e)",

'max_upload_size' => "Poids maximum des images:",

'under_x_recom' => "(Moins de 2048 Ko recommand�)",

'max_sess_length' => "Dur�e maximal de la session:",

'db_settings' => "Param�tres de la base de donn�es",

'db_host' => "Adresse du serveur MySQL:",

'db_username' => "Nom d'utilisateur:",

'db_password' => "Mot de passe:",

'db_name' => "Nom de la base de donn�es:",

'db_prefix' => "Pr�fixe des tables de la boutique:",

'gd_settings' => "Param�tres de la Librarie Graphique (GD)",

'gd_ver' => "Version de GD:",

'gd_thumb_size' => "Taille des aper�us:",

'gd_gif_support' => "Autoriser les GIF : (Assurez-vous que l'option est activ�e sur votre serveur)",

'gd_max_img_size' => "Taille Max de l'image:",

'gd_img_quality' => "Qualit� de l'image:",

'recom_quality' => "(60 - 80 recommand�)",

'stock_settings' => "Param�tres des stocks",

'use_stock' => "Montrer l'�tat des stocks ?",

'allow_out_of_stock_purchases' => "Autoriser l'achat d'article en rupture de stock ?",

'weight_unit' => "Unit� de poids:",

'time_and_date' => "Temps &amp; Date",

'time_format' => "Format (Heure+Date):",

'time_format_desc' => "(Plus d'info : <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "D�calage horaire:",

'time_offset_desc' => "(Secondes - Pour les serveurs situ�s dans un autre fuseau horaire que vous)",

'date_format' => "Format (Date):",

'date_format_desc' => "(Plus d'info : <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Param�tres locals",

'default_currency' => "Monnaie par d�faut",

'inc_tax_prices' => "Inclure les taxes dans les prix ?",

'sale_mode' => "Mode de fonctionnement pour les Soldes:",

'percent_of_all' => "R�duction de x% sur tous les prix de tous les articles",

'ind_sale_per_item' => "Prix Sold� individuel et fix� pour chaque article",

'sale_mode_off' => "Aucun Prix Sold�",

'sale_per_off' => "Pourcentage de r�duction:",

'sale_per_off_desc' => "(Pourcentage du prix � enlever sur chaque prix)",

'diff_dispatch' => "Autoriser � mettre une adresse diff�rente pour l'exp�dition ?",

'update_settings' => "Mettre � jour les param�tres",

'update_success' => "mis � jour avec succ�s.",

'update_fail' => "n'a pas �t� mis � jour.",

'add_success' => "ajout� avec succ�s",

'add_fail' => "n'a pas �t� ajout�.",

'delete_success' => "effac� avec succ�s.",

'delete_failed' => "n'a pas �t� effac�.",

'currencies' => "Devises",

'currency' => "Devise",

'currencies_desc' => "Vous pouvez ajouter ou modifier les devises ci-dessous:",

'c_code' => "Code",

'c_name' => "Nom",

'c_value' => "Valeur",

'symbol_left' => "Symbole de gauche",

'symbol_right' => "Symbole de droite",

'decimal_places' => "Nombre de d�cimals",

'last_updated' => "Derni�re mise � jour",

'c_status' => "Status",

'no_currencies' => "Il y a aucune devise dans la base de donn�es.",

'countries' => "Pays",

'country' => "Pays",

'edit_countries_below' => "Vous pouvez ajouter, modifier ou effacer des pays ci-dessous:",

'disable' => "D�sactiver",

'enable' => "Activer",

'iso' => "ISO",

'iso_name' => "Nom",

'iso3' => "ISO3",

'num_code' => "Code n�",

'action' => "Action",

'warn_del_country' => "Etes-vous s�r d\'effacer ce pays ? Toutes les r�gions li�es � ce pays seront effac�es.",

'no_countries_in_db' => "Il y a aucun pays dans la base de donn�es.",

'edit_counties' => "Vous pouvez ajouter, modifier ou effacer les r�gions ci-dessous:",

'no_counties_in_db' => "Il n'y a aucune r�gion dans la base de donn�es.",

'tax_Settings' => "Param�tres des taxes",

'edit_locale_below' => "Vous pouvez modifier les taxes locales de votre pays ci-dessous:",

'tax_only_to' => "Vous pouvez appliquer les taxes SEULEMENT dans certaines r�gion/pays/localit�:",

'manage_tax_below' => "Vous pouvez gerer les diff�rentes taxes ci-dessous. Elles peuvent �tre appliqu�es � chaque produit. Vous pouvez avoir des articles exempt�s de taxes et diff�rentes taxes pour chaque type de produit.",

'tax_class2' => "Cat�gorie de Taxe",

'rate_per' => "Pourcentage (%)",

'no_taxes_setup' => "D�sol�, il n'y a aucune taxe dans votre base de donn�es.",

'tax' => "Taxe",

);



$lang['admin']['stats'] = array(

'store_stats' => "Statistiques de la boutique",

'choose_view' => "Choisissez les statistiques que vous voulez voir:",

'search_terms' => "Moteur de recherche de la boutique",

'product_pop' => "Popularit� des articles",

'cust_online' => "Clients en ligne",

'search_terms_order_by' => "Moteur de recherche de la boutique",

'sorry_no_data' => "D�sol�, aucune donn�e n'est disponible.",

'product_pop_ordered_by' => "Popularit� des articles",

'cust_active' => "Clients qui ont �t� actifs lors des 15 derni�res minutes.",

'hash' => "#",

'customer' => "Client",

'location' => "Location",

'sess_start_time' => "D�but de session",

'last_click_time' => "Dernier click",

'sess_length' => "Taille de la session",

'geust' => "Invit�",

'signed_in' => "Enregistr�",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "ATTENTION : Le fichier principal de configuration 'includes/global.inc.php' n'est pas prot�g� en �criture. Changez les permissions de ce fichier � 0644 d�s que possible.",

'401' => "Erreur 401 : Vous n'avez pas la permission d'acceder � cette page.",

'welcome_note' => "Bienvenue sur le Panneau de Configuration pour l'administration de votre boutique.",

'last_login' => "Dernier login le",

'by' => "par",

'failed' => "�chou�.",

'store_overview' => "D�tails de la boutique:",

'version' => "Version:",

'visit_cc' => "Visitez le serveur de t�l�chargement de CubeCart",

'no_products' => "Nombres d'articles:",

'no_customers' => "Nombres de clients:",

'img_upload_size' => "Poids des images t�l�charg�es sur le serveur:",

'no_orders' => "Nombres de commandes:",

'quick_search' => "Recherche Rapide:",

'order_no' => "Commande N�:",

'search_now' => "Rechercher maintenant",

'customer' => "Client:",

'login_failed' => "Authentification �chou�e ! Votre Nom d'utilisateur ou votre mot de passe sont incorrects.",

'new_pass_sent' => "Un nouveau mot de passe a �t� mail� �",

'no_admin_sess' => "Aucune session d'administration n'a �t� trouv�e.",

'login_fail_2' => "Authentification �chou�e. R�essayez plus tard.",

'login_below' => "Le formulaire ci-dessous vous permettra d'acceder � votre Panneau de Configuration.",

'username' => "Nom d'utilisateur",

'password' => "Mot de passe",

'request_pass' => "J'ai oubli� mon mot de passe ?",

'login' => "Login",

'logout_failed' => "Logout �chou�. Aucune session d'admin �tait pr�sente.",

'reset_pass_email' => "Cher(e) %s,

Vos nouveaux identifiants pour l'administration CubeCart :

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nom d'utilisateur : %s
Mot de Passe : %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Cette e-mail a �t� envoy� par %s/admin/requestPass.php\n

Adresse IP du demandeur du mot de passe : %s",

'pass_reset_failed' => "R�initialisation du mot de passe �chou�e.",

'enter_email_below' => "Entrez votre adresse e-mail ci-dessous:",

'email_address' => "Adresse E-mail:",

'send_pass' => "Envoyer mon mot de passe",

);



$lang['admin']['nav'] = array(

'permission_error' => "Vous n'avez pas la permission d'acceder � ce module.",

'navigation' => "Navigation",

'admin_home' => "Accueil de l'Admin",

'store_home' => "Accueil de la boutique",

'store_config' => "Configuration de la boutique",

'gen_settings' => "Param�tres g�n�raux",

'taxes' => "Taxes",

'countries_zones' => "Pays &amp; R�gions",

'currencies' => "Devises",

'modules' => "Envois/Affiliation",

'shipping' => "Frais de ports",

'gateways' => "Moyens de paiement",

'affiliates' => "Affiliation",

'catalog' => "Catalogue",

'view_products' => "Voir les articles",

'add_product' => "Ajouter un article",

'product_options' => "Options des articles",

'view_categories' => "Voir les cat�gories",

'add_categories' => "Ajouter une cat�gorie",

'customers' => "Clients",

'view_customers' => "Voir vos clients",

'email_customers' => "Mailer vos clients",

'orders' => "Commandes",

'file_manager' => "Gestion des fichiers",

'manage_images' => "Gestion des images",

'upload_images' => "Uploader une image sur le serveur",

'statistics' => "Statistiques",

'view_stats' => "Voir les statistiques",

'documents' => "Documents",

'homepage' => "Page d'accueil",

'site_docs' => "Documents du sites",

'misc' => "Divers",

'server_info' => "Information sur le serveur",

'admin_users' => "Administration",

'administrators' => "Administrateurs",

'admin_sessions' => "Session d'admin",

);



$lang['admin']['incs'] = array(

'administration' => "Administration",

'logged_in_as' => "Mot d'utilisateur:",

'logout' => "D�connexion",

'change_pass' => "Modifier le mot de passe",

'error_editing' => "Erreur lors de la modification.",

'config_updated' => "Configutation mise � jour. Assurez-vous que les permissions du fichier sont bien comme avant la modification.",

'cant_write' => "Impossible d'ouvrir le fichier '%s' pour �criture. Essayez de changer la permission de ce fichier en CHMOD 0777. Rappellez-vous que vous devez remettre cette permission en CHMOD 0644 ensuite !",

'db_config_updated' => "Param�tres mis � jour avec succ�s.",

'db_cant_write' => "Echec de la mise � jour des param�tres !",

'select_above' => "Selectionnez ci-dessous",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Oui";

$lang['front']['no'] = "Non";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Liens utiles",

'reg_and_checkout' => "Enregistrez-vous &amp; Passez votre commande",

'cont_shopping' => "Continuer les achats",

'edit_del_add' => "Modifier l'adresse de livraison",

'edit_inv_add' => "Modifier l'adresse de facturation",

'empty_cart' => "Vider votre panier",

'prev_page' => "Page pr�c�dente",

'homepage' => "Accueil",

'shop_by_cat' => "Achat par cat�gorie",

'sale_items' => "Articles en soldes",

'save' => "Vous economisez",

'currency' => "Devises",

'information' => "Informations",

'products' => "Articles:",

'categories' => "Cat�gories:",

'prices' => "Prix:",

'language' => "Langue",

'mailing_list' => "Newsletter",

'subscribe_below' => "Inscrivez-vous � la newsletter:",

'email' => "Email:",

'join_now' => "S'inscrire",

'already_subscribed' => "L'adresse e-mail %s est d�j� inscrite � la Newsletter. Si vous voulez vous d�sinscrire, connectez-vous sur votre compte.",

'enter_valid_email' => "Merci d'entrer une adresse e-mail valide.",

'added_to_mail' => "Merci, %s a bien �t� ajout� � notre Newsletter.",

'subscribed_to_mail' => "Merci, %s a bien �t� inscrit � notre Newsletter.",

'popular_products' => "Articles les plus vus",

'featured_prod' => "Article du moment",

'sale_items' => "Articles en solde",

'search_for' => "Recherche:",

'go' => "Go",

'welcome_back' => "Bienvenue",

'logout' => "Logout",

'your_account' => "Votre compte",

'welcome_guest' => "Bienvenue invit�",

'login' => "Connectez-vous",

'register' => "Enregistrez-vous",

'shopping_cart' => "Panier",

'basket_empty' => "Votre panier est vide.",

'items_in_cart' => "Articles dans votre panier:",

'total' => "Total:",

'view_basket' => "Voir votre panier",

);



$lang['front']['account'] = array(

'your_account' => "Votre compte",

'personal_info' => "Informations Personnelles",

'order_history' => "Historique de votre commande",

'change_password' => "Modifier votre Mot de Passe",

'newsletter' => "Newsletter",

'login_to_view' => "Vous devez �tre connect� pour voir cette page.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "Le Mot de Passe que vous avez entr� est incorrect.",

'conf_not_match' => "Votre Mot de Passe de confirmation est diff�rent que votre nouveau Mot de Passe.",

'change_pass' => "Le formulaire ci-dessous vous permettra de changer votre Mot de Passe.",

'password_updated' => "Merci, votre Mot de Passe a �t� mis � jour.",

'change_pass_below' => "Changer son Mot de Passe:",

'old_pass' => "Ancien Mot de Passe:",

'new_pass' => "Nouveau Mot de Passe:",

'confirm_pass' => "Confirmez ce nouveau Mot de Passe:",

'submit' => "GO",

);



$lang['front']['dnExpire'] = array(

'sorry' => "D�sol�",

'expired' => "Votre lien de t�l�chargement a expir� ou est invalide.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "J'ai oubli� mon Mot de Passe",

'email' => "Email:",

'send_pass' => "Envoyez mon Mot de Passe",

'reset_email' => "Cher(e) %s %s,

Vous venez de changer votre Mot de Passe. Voici le d�tail de vos nouveaux identifiants :

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nom d'Utilisateur : %s
Mot de Passe : %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
Pour vous connecter, cliquez sur le lien suivant :
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Cette e-mail a �t� envoy� par %s avec l'adresse IP : %s",

'new_pass_sent' => "Un nouveau Mot de Passe a �t� envoy� � %s.",

'email_not_found' => "D�sol�, mais votre adresse e-mail n'existe pas dans notre base de donn�es.",

'enter_email' => "Entrez votre adresse e-mail ci-dessous pour avoir un Mot de Passe temporaire:",

);



$lang['front']['gateway'] = array(

//////////////////////////////////////////
// START: Added in 3.0.6 by Sir William
//////////////////

'admin_email_body_1' => "Cher(e) Administrateur,

Une nouvelle commande portant le n�: %s vous a �t� pass�e le %s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nom : %s
E-Mail : %s
Sous-Total : %s
Frais de port : %s
Taxes : %s
TOTAL : %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Adresse de facturation :
%s
%s
%s
%s
%s
%s
%s

Adresse d'envoi :
%s
%s
%s
%s
%s
%s
%s

M�thode de paiement : %s
M�thode d'envoi : %s",

'admin_email_body_2' => "\nCommentaires du client : %s\n",

'admin_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

D�tail de la commande :\n",

'admin_email_body_4' =>"Article : %s\n",

'admin_email_body_5' => "Options : %s\n",

'admin_email_body_6' => "Quantit� : %s
Code Article : %s
Prix : %s\n\n",

//////////////////////////////////////////
// END: Added in 3.0.6 by Sir William
//////////////////

'newOrderMsg' => "Un client vient juste de passer une commande %s. Pour voir cette commande, cliquez sur le lien suivant : \n\n%s",

'newOrderSubj' => "Nouvelle commande",

'payment' => "Paiement",

'cart' => "Panier",

'address' => "Adresse",

'complete' => "Complete",

'fill_out_below' => "Remplissez le formulaire suivant:",

'transferring' => "En cours de transfert pour le paiement",

'go_now' => "Go Now!",

'continue' => "Continue",

'choose_method' => "Choisissez votre mode de paiement pr�f�r�:",

'your_comments' => "Vos commentaires:",

'none_configured' => "D�sol�, mais aucune m�thode de paiement a �t� configur�e.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Connexion � votre compte",

'username' => "Email:",

'password' => "Mot de Passe:",

'remember_me' => "Se souvenir de moi ?",

'forgot_pass' => "J'ai oubli� mon mot de passe !",

'login_success' => "Vous vous �tes connect� avec succ�s.",

'already_logged_in' => "Vous �tes d�j� connect�.",

'login_failed' => "Connexion �chou�e !",

'login_below' => "Remplissez le formulaire ci-dessous pour vous connectez:",

);



$lang['front']['index'] = array(

'latest_products' => "Derniers Articles",

);



$lang['front']['logout'] = array(

'logout' => "D�connexion",

'session_destroyed' => "Votre session a �t� d�truite.",

'no_session' => "Aucune session � d�truire. Vous �tes sans doute arriv� ici par accident.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Pr�f�rences pour la Newsletter",

'prefs_updates' => "Vos pr�f�rences ont �t� modifi�es.",

'edit_prefs_below' => "Vous pouvez modifier les pr�f�rences par rapport � notre newsletter ci-dessous:",

'subscribe' => "S'inscrire � la Newsletter ?",

'email_format' => "Format d'e-mail:",

'plain_text' => "Texte Brut",

'html' => "HTML",

'html_abbr' => "Hypertext Markup Language",

'update' => "Modifier",

'login_required' => "Vous devez �tre connect� pour voir cette page.",

);



$lang['front']['noShip'] = array(

'sorry' => "D�sol�",

'desc' => "Nous ne pouvons pas envoyer vos articles dans votre pays.",

);



$lang['front']['overWeight'] = array(

'sorry' => "D�sol�",

'desc' => "Nous ne pouvons pas envoyer une commande aussi lourde.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Les num�ros de t�l�phones doivent �tre compos�s uniquement de chiffres (0-9).",

'complete_all' => "Assurez-vous que tous les champs du formulaire sont remplis.",

'email_invalid' => "Merci d'entrer une adresse e-mail valide.",

'numeric_only' => "Les num�ros de t�l�phones doivent �tre compos�s uniquement de chiffres (0-9).",

'email_inuse' => "D�sol�, mais cette adresse e-mail est d�j� utilis�e.",

'update_email' => "Cher(e) %s %s,

Ce message confirme que vous avez bien modifi� votre profil. Si vous croyez que votre compte a �t� modifi� par une autre personne, contactez imm�diatement une personne de notre staff.\n\n

Cette e-mail a �t� envoy� par %s\n

Adresse IP de la personne qui a modifi� votre compte: %s",

'update_email_subj' => "Informations personnelles mises � jour",

'personal_info' => "Informations personnelles",

'account_updated' => "Votre compte a �t� mis � jour. Vous pouvez le remodifier si vous le voulez.",

'edit_below' => "Vous pouvez modifier vos informations personnelles ci-dessous:",

'title' => "Mr/Mme/Mlle:",

'first_name' => "Prenom:",

'last_name' => "Nom:",

'email' => "Email:",

'address' => "Adresse:",

'town' => "Ville:",

'county' => "R�gion:",

'postcode' => "Code Postal/Zip:",

'country' => "Pays:",

'phone' => "Telephone:",

'mobile' => "T�l�phone portable:",

'update_account' => "Mettre � jour",

'login_required' => "Vous devez �tre connect� pour voir cette page.",

);



$lang['front']['reg'] = array(

'fill_required' => "Assuerez-vous que tous les champs du formulaires soient remplis.",

'pass_not_match' => "Assurez-vous que votre Mot de Passe corresponde � celui que vous avez d�j� rentr�.",

'enter_valid_email' => "Merci d'entrer une adresse e-mail valide.",

'enter_valid_tel' => "Les num�ros de t�l�phone doivent �tre compos�s uniquement de chiffres (0-9).",

'email_in_use' => "D�sol�, mais cette adresse e-mail est d�j� utilis�e.",

'note_required' => "Tous les champs not�s par un (*) doivent �tre renseign� pour poursuivre l'enregistrement.",

'express_reg' => "Enregistrement express",

'submit_and_cont' => "Envoyez &amp; Continuez",

'personal_details' => "D�tails Personnels",

'address' => "Adresse",

'title' => "",

'title_desc' => "(Mr/Mme/Mlle)",

'first_name' => "Prenom:",

'address2' => "Adresse:",

'last_name' => "Nom:",

'email_address' => "Adresse E-mail:",

'town' => "Ville:",

'phone' => "T�l�phone:",

'county' => "Region:",

'mobile' => "T�l�phone Portable:",

'country' => "Pays:",

'postcode' => "Code Postal:",

'security_details' => "S�curit�",

'choose_pass' => "Choisissez un Mot de Passe:",

'conf_pass' => "Confirmez ce Mot de Passe:",

'privacy_settings' => "Priv�",

'receive_emails' => "Je veux recevoir les mails de la boutique",

'email_format' => "Format des E-Mail:",

'styled_html' => "HTML",

'plain_text' => "Texte Brut",

'tandcs' => "Conditions d'utilisation",

'please_read' => "Assurez-vous de bien lire nos",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "Cher(e) %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
Pour voir l'article, cliquez sur le lien ci-dessous :
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

L'email a �t� envoy� par %s
Adresses IP de l'envoyeur : %s",

'email_subject' => "Message de : %s",

'tellafriend' => "Dites-le � vos amis !",

'message_sent' => "Merci, votre message a bien �t� envoy� � <strong>%s</strong> � propos de '%s'. Si vous voulez envoyer cette article � un autre ami, remplissez de nouveau ce formulaire:",

'fill_out_below' => "Remplissez le formaulaire ci-dessous pour tenir au courant de l'existance de ce produit '%s'.",

'friends_name' => "Nom de votre ami:",

'friends_email' => "E-mail de votre ami:",

'your_name' => "Votre nom:",

'your_email' => "Votre E-mail:",

'message' => "Votre message:",

'default_message' => "J'ai trouv� cet article '%s' et je pense que tu pourrais �tre int�ress�.",

'send' => "Envoyer",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Se d�siscrire",

'email' => "E-mail:",

'go' => "Go",

'enter_valid_email' => "Merci d'entrer une adresse e-mail valide.",

'email_removed' => "<strong>%s</strong> a bien �t� effac� de notre Newsletter.",

'email_not_found' => "D�sol�, <strong>%s</strong> n'a pas �t� trouv� dans notre Newsletter ou cette adresse a d�j� �t� effac�e.",

'enter_email_below' => "Entrez votre adresse e-mail ci-dessous pour vous d�siscrire:",

);



$lang['front']['viewCat'] = array(

'search_results' => "R�sultat de votre recherche",

'sale_items' => "Articles en solde",

'image' => "Image",

'description' => "Description",

'price' => "Prix",

'products_in' => "Produits dans:",

'buy' => "Acheter",

'more' => "Plus",

'out_of_stock' => "INDISPONIBLE",

'no_products_match' => "D�sol�, aucun article correspond � votre demande.",

'no_prods_in_cat' => "Il n'y a pas d'article dans cette cat�gorie.",

);



$lang['front']['viewDoc'] = array(

'error' => "Erreur",

'does_not_exist' => "Ce document n'existe pas.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Commande n�",

'customer_info' => "Info sur le client:",

'invoice_address' => "Adresse de facturation:",

'delivery_address' => "Adresse pour l'envoi:",

'na' => "n/a",

'customer_comments' => "Commentaires du client:",

'order_summary' => "R�sum� de la commande:",

'product' => "Articles",

'product_code' => "Code Article",

'quantity' => "Quantit�",

'price' => "Prix",

'download_here' => "T�l�charger ici !",

'review_below' => "Vous pouvez v�rifier votre commande ci-dessous:",

'order_date_time' => "Commande le Date/Heure:",

'payment_method' => "M�thode de paiement:",

'ship_method' => "M�thode d'envoi:",

'subtotal' => "Sous-Total:",

'total_tax' => "Taxes:",

'shipping' => "Frais de Port:",

'grand_total' => "TOTAL:",

'order_not_found' => "Ce num�ro de commande n'a pas �t� trouv�.",

'login_required' => "Vous devez vous connecter pour voir cette page.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Vos commandes",

'orders_listed_below' => "Toutes vos commandes sont list�es ci-dessous:",

'order_no' => "Commande n�",

'status' => "Status",

'date_time' => "Date/Heure",

'action' => "Action",

'view' => "Voir",

'no_orders' => "Nous avons aucune commande vous consernant. Si vous pensez qu'il s'agit d'une erreur, contactez un membre du staff imm�diatement.",

'login_required' => "Vous devez vous connecter pour voir cette page.",

);



$lang['front']['viewProd'] = array(

'product' => "Article",

'product_info' => "Description de l'article",

'price' => "Prix:",

'product_code' => "Code Article:",

'tellafriend' => "Signaler cet article � un ami",

'quantity' => "Quantit�:",

'more_images' => "[+] Plus d'images",

'add_to_basket' => "Ajouter au panier",

'location' => "Lieu:",

'no_instock' => "Stock actuel:",

'instock' => "En Stock",

'out_of_stock' => "INDISPONIBLE",

'prod_opts' => "Options du produit:",

'prod_not_found' => "Ce produit n'a pas �t� trouv�.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Votre panier est actuellement vide.",

'allready_customer' => "D�j� client ?",

'login_below' => "Merci de vous connectez ci-dessous:",

'username' => "E-mail:",

'password' => "Mot de Passe:",

'remember_me' => "Se souvenir de moi ?",

'login' => "Login",

'forgot_pass_q' => "J'ai oubli� mon Mot de Passe !",

'need_register' => "Besoin de s'enregistrer ?",

'express_register' => "Notre enregistrement express peut �tre compl�t� rapidement et facilement.",

'reg_and_cont' => "S'enregistrer &amp; Continuer",

'cont_shopping_q' => "Continuez le shopping ?",

'cont_shopping' => "Continuez le shopping",

'cont_browsing' => "Pour continuer � acheter comme invit�, cliquez sur le bouton ci-dessous. N.B : Vous devez vous enregistrer pour passer une commande.",

);





$lang['front']['cart'] = array(

'free_shipping' => "Frais de Port gratuit",

'view_cart' => "Voir le panier",

'cart' => "Panier",

'address' => "Adresse",

'payment' => "Paiement",

'complete' => "Complet�",

'add_more' => "Voulez-vous ajouter plus d'articles ? Entrez le code de l'article:",

'add' => "Ajouter",

'qty' => "Qt�",

'product' => "Article",

'code' => "Code",

'stock' => "Stock",

'price' => "Prix unitaire",

'line_price' => "Total",

'delete' => "Effacer",

'remove' => "Enlever l'article",

'invoice_address' => "Adresse de facturation",

'delivery_address' => "Adresse d'envoi",

'title' => "Mr/Mme/Mlle:",

'first_name' => "Pr�nom:",

'last_name' => "Nom:",

'address2' => "Adresse:",

'town' => "Ville:",

'county' => "R�gion:",

'postcode' => "Code Postal:",

'country' => "Pays:",

'edit_invoice_address' => "Modifier l'adresse de facturation",

'edit_delivery_address' => "Modifier l'adresse d'envoi",

'stock_warn' => "Vous avez command� plus d'articles que nous avons actuellement disponible. Votre commande peut �tre retard�e jusqu'� ce que nos stocks soient mis � jour.",

'amount_capped' => "D�sol�, mais ne pouvons pas traiter les commandes au-dessus de nos stocks actuels.<br />La quantit� de cet article a �t� limit�e �",

'na' => "n/a",

'shipping' => "Frais de Port:",

'tax' => "Taxes:",

'subtotal' => "Sous-total:",

'cart_total' => "TOTAL:",

'if_changed_quan' => "(Si vous avez chang� les quantit�s)",

'update_cart' => "Mettre � jour le panier",

'continue' => "Continuer",

'cart_empty' => "Votre panier est actuellement vide.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Confirmation des informations",

'cart' => "Panier",

'address' => "Adresse",

'payment' => "Paiement",

'complete' => "Complet�",

'order_success' => "Merci, votre commande a �t� enregistr�e avec succ�s ! Merci de votre confiance !",

'order_fail' => "D�sol�, votre commande n'a pas �t� enregistr�e !",

'try_again_desc' => "Vous pouvez essayer d'acheter votre panier encore une fois ci-dessous:",

'try_again' => "Ressayer encore",

'request_login' => "Vous devez �tre connect� pour voir cette page.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Cher(e) %s,

Merci de votre commande ! Voici son num�ro : %s pass�e le %s

Votre commande a bien �t� enregistr�e, et nous l'enverrons le plus vite possible.

~~~~~~~~~~~~~~~~~~~~~~~~~~
Nom : %s
Sous-Total : %s
Frais de port : %s
Taxes : %s
TOTAL : %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

Adresse de facturation :
%s
%s
%s
%s
%s
%s
%s

Adresse d'envoi :
%s
%s
%s
%s
%s
%s
%s

M�thode de paiement : %s
M�thode d'envoi : %s",

'inv_email_body_2' => "\nVos commentaires : %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

R�sum� de votre commande :\n",

'inv_email_body_4' =>"Article : %s\n",

'inv_email_body_5' => "Options : %s\n",

'inv_email_body_6' => "Quantit� : %s
Code de l'article : %s
Prix : %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Commande N� : ",

'digi_email_body1' => "Cher(e) %s,

Merci de votre commande ! Voici son num�ro : %s pass�e le %s

Ci-dessous, voici les liens des articles non-mat�riels/virtuels que vous avez achet�s

IMPORTANT : Ces liens expireront dans %s et vous ne pouver t�l�charger votre article que %s fois votre article. Si vous avez des probl�mes, contactez notre staff, en mentionnant votre num�ro de commande.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
Lien pour le t�l�chargement :
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Acc�s des t�l�chargements : ",

);



$lang['misc'] = array(

'pages' => " pages ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "Navigateur utilis�:",

'server_software' => "Logiciel serveur utilis�:",

'perofOrderSub' => " % du Sous-Total de la commande",

'freeForOrdOver' => "Gratuit pour les commandes au-dessus de",

'freeShipping' => "Frais de port gratuit",

'byWeight1stClass' => "Par le poids (Prioritaire)",

'1stClass' => "(Prioritaire)",

'byWeight2ndClass' => "Par le poids (Economique)",

'2ndClass' => "(Economique)",

'flatRate' => "Frais de port fixe",

'free' => "gratuit",

'national' => "National",

'international' => "International",

'byCategory' => "Par cat�gorie",

'perItem' => "Par article",

'nextDayEarlyAm' => "Par avion le jour suivant pendant le matin",

'nextDayAir' => "Par avion le jour suivant",

'nextDayAirSaver' => "Par avion le jour suivant �co",

'2ndDayEarlyAm' => "Par avion le sur-lendemain pendant le matin",

'2ndDayAir' => "Par avion le sur-lendemain",

'3daySelect' => "Livraison en 3 jours",

'ground' => "Par voie terrestre",

'canadaStandard' => "Standard pour le Canada",

'worldwideExpress' => "Dans le monde entier Express",

'worldwideExpressPlus' => "Dans le monde entier Express Plus",

'worldwideExpedited' => "Dans le monde entier",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Facture envoy�e �",

'deliverTo' => "Livraison �",

'postalOrderFor' => "Paiement pour:",

'orderOf' => "Commande du",

'orderID' => "ID:",

'product' => "Article",

'code' => "Code",

'qty' => "Qt�",

'price' => "Prix",

'shippingMethod' => "Frais de port:",

'subtotal' => "Sous-total:",

'totalTax' => "Taxes:",

'totalShipping' => "Frais de port:",

'grandTotal' => "TOTAL:",

'payByCheck' => "Paiement par ch�que",

'payTo' => "Le ch�que doit �tre � l'ordre de ",

'payByCard' => "Paiement par Carte Bancaire",

'cardType' => "Type de carte:",

'cardNo' => "Num�ro de carte:",

'3-4DigiId' => "Code de s�curit� (3-4 chiffres):",

'expiryDate' => "Date d'expiration:",

'issueDate' => " ",

'issueNo' => " ",

'signature' => "Signature:",

'payByTransfer' => "Paiement par Virement Bancaire",

'bankName' => "Nom de la banque:",

'accountName' => "Nom du compte:",

'sortCode' => " ",

'accountNo' => "Num�ro du compte:",

'swiftCode' => " ",

'bankAddress' => "Adresse de la banque:",

'thanks' => "Merci de nous avoir fait confiance ! A bientot !",

'postalAddress' => "Adresse de la boutique:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "En attente de paiement",

'2' => "En Pr�paration",

'3' => "Exp�di�",

'4' => "R�fus�",

'5' => "Frauduleuse",

);

$lang['admin']['cats'] = array (

'delete_success' => "Traduction effac�e avec succ�s.",

'delete_fail' => "Echec de l'effacement.",

'update_fail' => "Echec de la mise � jour.",

'update_success' => "Mis � jour avec succ�s.",

'add_success' => "ajout� avec succ�s.",

'add_fail' => "Echec de l'ajout d'une traduction.",

'site_cats_other_lang' => "Cat�gories - (Autres Langues-Traductions)",

'site_cat_other_lang' => "Cat�gorie - (Autre Langues-traductions)",

'cat_name' => "Nom de la cat�gorie:",

'language' => "Langue:",

'update_cat' => "Mettre � jour la cat�gorie",

'save_cat' => "Savegarder la cat�gorie",

'current_cat_list' => "Vous trouverez ci-dessous la liste des traductions de chacune de vos noms de cat�gories. A tout moment, vous pouvez effacer ou modifier ces donn�es.",

'cat_name2' => "Nom de la cat�gorie",

'action' => "Action",

'no_site_cats' => "Ce nom de cat�gorie n'a pas �t� encore traduit.",

);

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

//////////////////////////////////////////
// START: Added in 3.0.6
//////////////////
$lang['front']['popup'] = array (

'thumb_alt' => "Cliquez pour un zoom",

'large_alt' => "Vu de l'image taille r�el",

);

$lang['install'] = array (

'stage2Name' => "Verifiez les permissions de fichiers",

'stage1Error' => "Vous devez �tre d'accord avec notre licence",

'stage3Name' => "Cr�ation du fichier config. &amp; Installation de la Base de Donn�es",

'enterDBHostname' => "Entrez le Hostname de la base",

'enterDBName' => "Entrez le nom de la base",

'enterDBUsername' => "Entrez le nom d'utilisateur de la base",

'enteradminUsername' => "Choisissez votre nom d'utilisateur Admin",

'enteradminPassword' => "Choisissez votre mot de passe Admin",

'passwordMatch' => "Assurez-vous que les mots de passe correspondent !",

'enterValidEmail' => "Entrez votre adresse e-mail",

'enterFullname' => "Entrez votre nom et Pr�nom",

'storeOfflineText' => "Le magasine est actuellement offline.",

'configWriteError' => "Le fichier config ne peut �tre �crit.",

'stage4Name' => "Remodifier les permissions de fichiers",

'stage5Name' => "Installation complet�e",

'stage1Name' => "License",

'agreeToLicense' => "Cliquez sur le bouton pour continuer.",

'installation' => "Installation de CubeCart v.%s",

'stepStatus' => "Etape %s sur %s",

'step' => "Etape",

'iagreetoLic' => "J'ai lu, compris et je suis d'accord avec la licence d'acceptation",

'checkFilePerms' => "Soyez sur que les permissions de fichiers sont configur�es correctement:",

'fileFolder' => "Fichier / Dossier",

'currentPermission' => "Permission actuelle",

'requiredPermission' => "Permission requise",

'na' => "n/a",

'congratsFilePerms' => "F�licitation ! Les permissions de fichiers sont configur�es correctement.",

'filePermsNotCorrect' => "Configurez les permissions de fichiers correctement pour continuer.",

'dbSettings' => "Option de la Base de Donn�es",

'fromProvider' => "(Si vous n'�tes pas sur, vous devriez trouver �a chez votre h�bergeur.)",

'dbhostname' => "Hostname de la Base de Donn�es:",

'eg' => "ex:", // as in example

'dbName' => "Nom de la base de donn�es (BD):",

'dbUsername' => "Nom d'utilisateur BD:",

'dbPassword' => "Password BD:",

'dbPrefix' => "Pr�fixe des tables BD:",

'dbPrefixOptional' => "(Facultatif - Utilis� pour des installations multiples sur une meme Base de Donn�es)",

'dropifExist' => "Ecraser les tables si elles existent ?",

'previousInstallLost' => "En cochant cette case, toutes les installations pr�c�dentes avec le meme prefixes de tables de cette base de donn�es seront perdues. (Coch�e par d�faut)",

'localeSettings' => "Configation locale:",

'storeCountry' => "Pays du magasin",

'US' => "Etats-Unis d'Am�rique (USA)",

'UK' => "Grande Bretagne",

'EU' => "Europe",

'currenciesAccord' => "Cela va install� les devises et les autres configurations en cons�quence avec vos choix.",

'help' => "Aide",

'administratorSettings' => "Configuration de la partie Admin:",

'adminSetDesc' => "(Ces d�tails sont utilis�s pour le panneau de controle admin de votre magasin)",

'username' => "Nom d'utilisateur:",

'password' => "Password:",

'confPass' => "Confirmation Password:",

'emailAddress' => "Adresse E-mail:",

'fullName' => "Nom/Prenom:",

'skin' => "Skin",

'clickForLarger' => "Cliquez pour agrandir l'image",

'changedAnytime' => "(Le Skin peut-�tre changer � tout moment)",

'classic' => "Classic (Largeur fix�)",

'legend' => "Legend (Largeur fix�)",

'killer' => "Killer (Largeur 100%)",

'advancedSettings' => "Configuration avanc�e",

'leaveIfUnsure' => "(Laissez vide si vous n'�tes pas s�r de vous)",

'storeURL' => "URL magasin:",

'serverRoot' => "Chemin du r�pertoire sur le serveur:",

'siteRootRel' => "Chemin relatif du site:",

'gdVersion' => "Version GD:",

'phpinfoLink' => "Regardez <a href='info.php' target='_blank'>phpinfo()</a><br />(Ouverture dans une nouvelle fenetre)",

'none' => "Aucune",

'clickLink' => "Cliquez sur le lien phpinfo() pour v�rifier la configuration de votre serveur.",

'filepermsBack' => "Assurez-vous que les permissions de fichiers ont �t� correctement remodifi�es:",

'congratulations' => "F�licitations ! Votre magasin est maintenant install� !",

'congratulationsSub' => "S�lectionnez une destination. Nous vous recommandons de commencer par vous connecter sur votre Panneau de Controle Admin pour modifier les options de votre magasin.",

'adminHomepage' => "Page d'accueil Admin",

'storeHomepage' => "Page d'accueil Magasin",

'important' => "IMPORTANT:",

'deleteInstall' => "Votre boutique ne fonctionnera pas tant que vous n'aurez pas supprimer le dossier 'install'.",

'tryAgain' => "Essayez encore",

'contToStep' => "Continuer pour l'�tape %", // Continue to Step x 

'closeWindow' => "Fermez la fenetre",

'prevPage' => "Page pr�c�dente",

'clicktoClose' => "Cliquez pour fermer",

'chooseLang' => "Choisissez une langue:",

'adminConfSettings' => "Param�tres de l'administrateur",

'adminConfSettingsDesc' => "<p>Le Panneau de controle Administrateur est un espace o� vous avez le controle complet de votre boutique, des articles que vous vendez au suivi des commandes. Pour acceder � ce Panneau de Controle, vous devez cr�er un utilisateur lors de l'installation. Cet utilisateur sera un &quot;Administrateur&quot;. Ils ont un controle complet sur la boutique et ces param�tres.</p>
<p>Si vous voulez ajouter d'autres administrateurs apr�s l'installation, vous pouvez le faire � partir du Panneau de Controle. Vous pourrez aussi lui attribuer des permissions sp�cifiques qui lui autoriseront l'acc�s � certaines parties de la partie Admin.</p>",

'advancedSettings' => "Param�tres avanc�s",

'advancedSettingsDesc' => "<p>Ces param�tres sont destin�s aux utilisateurs confirm�s. Changez ces param�tres seulement si vous savez ce que vous allez faire !</p>
<p>Pour d�terminer votre version GD, cliquez sur le lien suivant <a href='../info.php' target='_blank'>phpinfo()</a>. Localisez la ligne intitul�e &quot;GD&quot;. Cette ligne vous dira la version GD comme 1.x.x ou 2.x.x. Si vous n'avez aucune notion de GD dans les informations fournies, s�lectionnez &quot;Aucune&quot;. </p>
<p><strong>Pourquoi j'ai le message d'erreur &quot;Call to undefined function: imagecreatefromjpg()&quot;?<br />
  </strong>Vous obtenez cela parce que votre serveur n'est pas configur� pour que GD soit activ�. Pour utiliser Cubecart, GD v.1 ou plus est requis. Contactez votre h�bergeur pour qu'il active le GD, mais ils ne sont oblig�s de le faire. Si vous ne pouvez pas utiliser GD, cherchez un autre h�bergeur ou mettez que vous n'avez aucune version de GD.</p>",
  
'mysqlDBSettings' => "Param�tres Bade de Donn�es MySQL",

'mysqlDBSettingsDesc' => "<p>Pour utiliser Cubecart, vous devez avoir une base de donn�es MySQL. Ces informations inclus le nom de la base, le nom d'utilisateur, le mot de passe et le nom de l'hote. Vous pouvez modifier ces infos dans le Panneau de Configuration. Si vous installez Cubecard sur une machine test ou sur un serveur d�dicac�, vous aurez peut-�tre besoin du <a href='http://dev.mysql.com/doc/mysql/en/index.html' target='_blank'>manuel MySQL</a>. </p>
<p><strong>A quoi sert le pr�fixe de table ?</strong>
<br />
L'installation de Cubecart cr�era des tables dans votre base de donn�es qui sont essentiels au bon fonctionnement de votre boutique. Si vous voulez installer diff�rentes boutiques et que vous avez qu'une seule base de donn�es, ces tables ne seraient pas distinguables entre elles. Ce probl�me est r�solu en ajoutant un pr�fixe � chaque table consernant chaque magasin.</p>",

'selectOs' => "Selectionnez un type de serveur:",

'permsMac' => "Parametrer les permissions de fichiers d'un serveur fonctionnant avec Macintosh",

'permsWin' => "Parametrer les permissions de fichiers d'un serveur fonctionnant avec Windows",

'permsWinDesc' => "Les serveurs Windows n'ont pas besoin que les permissions de fichiers soient chang�es. Allez � la prochaine �tape en consid�rant que tout est OK.",

'permsLinux' => "Parametrer les permissions de fichiers d'un serveur fonctionnant avec Linux/Unix",

'permsLinuxDesc' => "<p>Ouvrez votre logiciel <abbr title='File Transfer Protocol'>FTP</abbr> favori ou celui que vous avez utilis� pour t�l�charger Cubecart sur votre serveur. Nous recommandons <a href='http://www.smartftp.com' target='_blank'>SmartFTP</a> ou <a href='http://filezilla.sourceforge.net/' target='_blank'>FileZilla</a>. (Les Captures d'�cran proviennent de SmartFTP)</p>
<p><strong>1. Localisez le fichier surlequel vous devez changer les permissions, clic-droit dessus et s�lectionnez 'CHMOD'.  </strong></p>
<p align='center'><img src='../images/smartFTPSel.gif' alt='' width='309' height='427' title='' /></p>
<p><strong>2. Tapez le CHMOD requis dans la case &quot;Permissions&quot; et cliquez sur 'OK'. Vous pouvez aussi cochez les cases jusqu'� ce que vous obtenez le CHMOD d�sir�. </strong></p>
<p align='center'><img src='../images/typeChmodVal.gif' alt='' width='382' height='494' title='' /></p>
<p><strong>3. C'est tout bon ! </strong></p>
<p><strong>Astuce :</strong> Si votre logiciel FTP n'est pas d'accord avec la valeur que le script dit, essayez simplement de actualiser votre serveur et rev�rifiez. </p>",

'installHelp' => "Aide � l'installation:",

'helpAdminSettings' => "Param�tres administrateur",

'helpAdvanced' => "Param�tres avanc�s",

'helpDatabase' => "Base de donn�es",

'helpFilePerms' => "Permissions de fichiers",

'opDectResultTrue' => "Votre serveur fonctionne avec ",

'opDectResultFalse' => "D�sol�, votre logiciel avec lequel votre serveur fonctionne n'a pas �t� d�tect�. Faites votre choix ci-dessous:",

'suggestedOS' => "Logiciel sugg�r�",

'skinPreview' => "Preview du Skin",

);
////////////////////
// Start of Modules

$lang['module']['directPayment'] = array (

'cc_info_title' => "Information de Carte de Cr�dit",

'first_name' => "Nom:",

'last_name' => "Prenom:",

'card_type' => "Type de carte:",

'card_number' => "N� de carte:",

'expires' => "Expire le:",

'mmyyyy' => "(mm/aaaa)",

'security_code' => "Code de s�curit�:",

'customer_info' => "Information sur le client",

'email' => "E-Mail:",

'address' => "Adresse:",

'city' => "Ville:",

'state' => "R�gion:",

'zipcode' => "Code Postal:",

'country' => "Pays:",

'optional' => "(Facultatif)",

);

$lang['module']['bluePay'] = array (

'cc_info_title' => "Information de Carte de Cr�dit",

'first_name' => "Nom:",

'last_name' => "Prenom:",

'card_type' => "Type de carte:",

'card_number' => "N� de carte:",

'expires' => "Expire le:",

'mmyyyy' => "(mm/aaaa)",

'security_code' => "Code de s�curit�:",

'customer_info' => "Information sur le client",

'email' => "E-Mail:",

'address' => "Adresse:",

'city' => "Ville:",

'state' => "R�gion:",

'zipcode' => "Code Postal:",

'country' => "Pays:",

'optional' => "(Facultatif)",

);

$lang['module']['eway'] = array (

'cc_info_title' => "Information de Carte de Cr�dit",

'first_name' => "Nom:",

'last_name' => "Prenom:",

'card_type' => "Type de carte:",

'card_number' => "N� de carte:",

'expires' => "Expire le:",

'mmyyyy' => "(mm/aaaa)",

'security_code' => "Code de s�curit�:",

'customer_info' => "Information sur le client",

'email' => "E-Mail:",

'address' => "Adresse:",

'city' => "Ville:",

'state' => "R�gion:",

'zipcode' => "Code Postal:",

'country' => "Pays:",

'optional' => "(Facultatif)",

);

$lang['module']['iPay'] = array (

'cc_info_title' => "Information de Carte de Cr�dit",

'first_name' => "Nom:",

'last_name' => "Prenom:",

'card_type' => "Type de carte:",

'card_number' => "N� de carte:",

'expires' => "Expire le:",

'mmyyyy' => "(mm/aaaa)",

'security_code' => "Code de s�curit�:",

'customer_info' => "Information sur le client",

'email' => "E-Mail:",

'address' => "Adresse:",

'city' => "Ville:",

'state' => "R�gion:",

'zipcode' => "Code Postal:",

'country' => "Pays:",

'optional' => "(Facultatif)",

);

$lang['module']['psiGate'] = array (

'cc_info_title' => "Information de Carte de Cr�dit",

'first_name' => "Nom:",

'last_name' => "Prenom:",

'card_type' => "Type de carte:",

'card_number' => "N� de carte:",

'expires' => "Expire le:",

'mmyyyy' => "(mm/aaaa)",

'security_code' => "Code de s�curit�:",

'customer_info' => "Information sur le client",

'email' => "E-Mail:",

'address' => "Adresse:",

'city' => "Ville:",

'state' => "R�gion:",

'zipcode' => "Code Postal:",

'country' => "Pays:",

'optional' => "(Facultatif)",

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