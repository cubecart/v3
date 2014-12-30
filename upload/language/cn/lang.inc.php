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
|	���� (TW) �y�t�ɮ�	
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'zh_TW');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "�O";

$lang['admin']['no'] = "�_";

$lang['admin']['edit'] = "�s��";

$lang['admin']['delete'] = "�R��";

$lang['admin']['delete_q'] = "�z�T�w�n�R���H";

$lang['admin']['add'] = "�s�W";

$lang['admin']['add_new'] = "�s�W";

$lang['admin']['write'] = "�g�J";

$lang['admin']['read'] = "Ū��";

$lang['admin']['na'] = "�L"; // as in not applicable

$lang['admin']['all'] = "�Ҧ�";

$lang['admin']['remove'] = "����";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "�R������.",

'del_failed' => "�R������.",

'update_success' => "��s����.",

'update_fail' => "��s����.",

'add_success' => "�s�W����.",

'add_failed' => "�s�W�ϥΪ̥���.",

'administrators_title' => "�޲z��",

'current_users' => "�ثe�޲z��.",

'id' => "ID",

'user_notes' => "�ϥΪ̦W�� / ����",

'no_logins' => "�|���n�J",

'super_user' => "�W�ŨϥΪ�?",

'email' => "Email",

'action' => "�ʧ@",

'add_admin' => "�z�i�H�ϥΤU�C���ӼW�[�޲z��.",

'full_name' => "����W��:",

'username' => "�ϥΪ̦W��:",

'administrator' => "�޲z��",

'email2' => "Email:",

'password' => "�K�X:",

'pass_warn' => "(�p�G�z�ݭn���K�X�~��J.)",

'make_super' => "�W�ŨϥΪ�?",

'notes' => "����:",

'permissions' => "�v��",

'pass_updated' => "�K�X��s.",

'pass_not_updated' => "�K�X����s.",

'change_pass_below' => "�Цb�U���J�z��諸�K�X:",

'old_pass' => "�±K�X:",

'new_pass' => "�s�K�X:",

'confirm_pass' => "���Ʒs�K�X:",

'perms_updated' => "�v����s.",

'set_perms' => "�Цb�U��]�w�v��.",

'section' => "�ϰ�",

'nb_bulk' => "�`�N�I�j�q Email �Ȥ� �A�ϥΪ̥��\�b�Ȥᤧ�U���g�J���v��.",

'admin_sessions' => "�޲z�|��",

'sessions_desc' => "�U�C��̪ܳ���յn�J�޲z�����. �Ъ`�N��o�ǰT���åB�T�w�S���j�����եh�n�J. �j�P��ĳ�z�g�`�ʪ����K�X.",

'login_id' => "�n�J ID",

'time' => "�ɶ�",

'ip_address' => "IP ��}",

'success' => "����",

);



$lang['admin']['categories'] = array (

'delete_success' => "�R������.",

'delete_fail' => "�R������.",

'update_success' => "��s����.",

'update_fail' => "��s��������.",

'add_success' => "�s�W����.",

'add_failed' => "�s�W��������.",

'categories' => "����",

'categories_desc' => "�U��C�X�ثe�b��Ʈw���Ҧ�������.",

'cat_name' => "�����W��",

'dir' => "�ؿ�",

'image' => "����",

'no_products' => "�ӫ~",

'action' => "�ʧ@",

'cannot_del' => "�o�Ӥ����L�k�R���A�w�g���s�b�ӫ~.",

'no_cats_exist' => "��Ʈw�ثe�S������.",

'add_desc' => "�z�i�H�b�������L���W�[�l�����B�W�Ƿs���ɩΪ̪u�Τw�W�Ǫ�����.",

'category' => "����",

'category_name' => "�����W��:",

'category_level' => "��������:",

'top_level' => "�̤W�h",

'image_optional' => "����: (�ﶵ)",

'upload_new_image' => "�W�Ƿs����",

'browse_existing' => "�s���w�W�ǹ���",

'ship_by_cat' => "�ϥΤ����s��",

'per_ship' => "��@�B�O:",

'per_item' => "��@����:",

'per_int_ship' => "��@��ڹB�O:",

'per_int_item' => "��@��ڶ���:",

);



$lang['admin']['customers'] = array (

'customers' => "�Ȥ�",

'delete_success' => "�R������.",

'delete_fail' => "�R������.",

'update_success' => "�Ȥ��s����.",

'update_fail' => "�Ȥ�s�W����.",

'search_term' => "�j�M�d��:",

'reset' => "���]",

'name' => "�W��",

'email' => "Email",

'invoice_add' => "�o���a�}",

'phone' => "�q��",

'reg_ip' => "���U��� / IP ��m",

'no_orders' => "�q��",

'action' => "�ʧ@",

'no_cust_exist' => "��Ʈw���S���Ȥ���.",

'edit_below' => "�Цb�U��s��Ȥ�:",

'title' => "���D",

'first_name' => "�W�r:",

'last_name' => "�m:",

'email2' => "Email:",

'address' => "�a�}:",

'town' => "�m��:",

'county' => "��/��:",

'postcode' => "�l���ϸ�:",

'country' => "����:",

'phone2' => "�q��:",

'edit_customer' => "�s��Ȥ�",

'no_download_email' => "�S��Email�i�H�U��.",

'email_customers' => "Email���Ȥ�",

'create_email' => "�Цb�U��إ߱z��Email:",

'hint' => "����:",

'click_source' => "�z�i�H�I��W�誺�ӷ����s�A�M��K�W�b�w�g�إߪ�Html��.",

'important' => "���n:",

'absolute_links' => "�T�w�Ҧ��Ϥ��ٳs���O������ (��: �]�t���}). �\�h��a���o�~�O���ѦX�k�����q�\�s�����q��:",

'email_subject' => "Email�D�D:",

'senders_name' => "�H��H�W��:",

'senders_email' => "�H��HEmail:",

'return_path' => "�^�H��}:",

'bounce_desc' => "(�^�H��}�O�^�H��Ұe�F����m.)",

'send_test' => "�H�e���իH��?",

'test_email_recip' => "���իH����H:",

'send_email' => "�H�e�H��",

'download_or_send' => "�п�ܤU���Ȥ�Email�W��Ϊ��ǥѺ����o�eEmail.",

'please_choose' => "�п��:",

'used_to_download' => "�o�O�ΨӤU��Email�W�浹�H�H�n��ϥ�.",

'bulk_to_subscribed' => "�o�Ӥ��\�z�o�e�H�󵹱q�o�Ӻ��������g���q�\�L�q�l�����X��.",

'include_name' => "�]�t�W��?",

'download_email' => "�U��Email",

'send_email' => "�ǰeEmail",

'sending_complete' => "�ǰe����",

'sending' => "�ǰeEmail��",

'recipient' => "����H:",

'prev_page' => "�W�@��",

'page' => "��:",

'bulk_finished' => "�H�H�u�@�w�g����.",

'time_taken' => "��O�ɶ�:",

'recipients' => "����H:",

);



$lang['admin']['docs'] = array (

'update_fail' => "�����L�k��s�A�нT�w includes/static/home.inc.php �ɮ��v���]�w���T.",

'update_success' => "������s����.",

'homepage' => "����",

'enabled' => "�ҥ�:",

'enabled_desc' => "(�p�G�����w�]�y�t�o�N�|�Q���N.)",

'language' => "�y�t:",

'title' => "���D:",

'use_rich_text' => "�ШϥΦh�\��s�边�ӽs���������. �@���x�s�N�|�ߧY���󴫡A�ҥH���e�Х��w��.",

'update_homepage' => "��s����",

'delete_success' => "���R������.",

'delete_fail' => "�R������.",

'update_success' => "��s����.",

'update_fail' => "�L�k��s.",

'add_success' => "�s�W����.",

'add_fail' => "�s�W��󥢱�.",

'site_docs_other_lang' => "������� - (��L�y�t)",

'use_rich_text' => "�ШϥΦh�\��s�边�ӽs���L�y�t���.",

'site_doc_other_lang' => "�������  - (��L�y�t)",

'doc_name' => "���W��:",

'language' => "�y�t:",

'update_doc' => "��s���",

'save_doc' => "�x�s���",

'current_doc_list' => "�H�U�C�X�ثe�������Ҧ����. �z�i�H�H���H�a���s��/�R��.",

'doc_name2' => "���W��",

'action' => "�ʧ@",

'no_site_docs' => "��Ʈw�ثe�S������������.",

'site_docs' => "�������",

'site_doc' => "�������",

'languages' => "�y��",

'no_docs' => "��Ʈw�ثe�S������������.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "�����s����",

'file' => "�ɮ�:",

'no_imgs' => "�S�����ɥi��. �����������B�W�ǹ���.",

'preview' => "�w��:",

'ok' => "�T�w",

'cancel' => "����",

'prod_cat_use_img' => "�ثe�w���ӫ~�Τ����ϥ� '%s'.",

'continue_q' => "�~��R��?",

'site_doc_use_img' => "�ثe�w�g���������ϥ� '%s'.",

'home_use_img' => "���� '%s' �w�g�b�����������ϥ�.",

'gallery_use_img' => "���� '%s' �w�g�b�ӫ~��ï���ϥ�.",

'image_deleted' => "���ɧR��.",

'delete_failed' => "�R������.",

'image_manager' => "���ɺ޲z",

'delete_from_server' => "�z�i�H�q�D�����R������.",

'img_click_prev' => "���� (�I��w��)",

'size' => "�e�q",

'action' => "�ʧ@",

'no_images_added' => "�S�����ɼW�[.",

'prev_file' => "�w���ɮ�",

'close_window' => "��������",

'no_image_selected' => "�S�����ɹw��.",

'file_uploader' => "�ɮפW��",

'upload_image' => "���ɤW��",

'please_browse_img' => "���s���z������:",

'file_too_big' => "���~: %s �b %s",

'img_already_exists' => "���~: %s �w�g�s�b�A�Ч���ɮצW��.",

'upload_too_large' => "���~: �z�L�k��ܤӤj������. �W�ǳ̤j���� 2MB.",

'not_valid_mime' => "���~: %s ���O���T�����ɮ榡.",

'image_upload_success' => "����: %s �W��.",

'back' => "&laquo; �^�W�@��",

);



$lang['admin']['misc'] = array (

'license_form' => "���v���",

'write_error' => "�L�k�}�� includes/global.inc.php �ɮ�. �иյۧ�� CHMOD �v���� 0777. �O�o�b�����^�� 0644 !",

'try_again' => "�A�դ@��",

'purchase_cubecart' => "�ʶR CubeCart:",

'invalid_key' => "��p�A���v�_�͵L�ĩΪ̤w�g�Q�ϥ�.",

'purchase_license_key' => "�ʶR���v�_��",

'run_unlicensed' => "�z���G���b�ϥΥ����v������. �Цb�U���J�z�����v�Ӳ������v����.",

'license_key' => "���v�_��:",

'submit_key' => "�e�X�_��",

'server_info' => "�D���T��",

'ini_set_desc' => "�o����ܱz�ثe�D�����ҳ]�w. �o�]�t�U�ظ�T�i�ѱz�ѦҤη�z�ϥ� CubeCart �ɩҾD������D. �`�N. �p�G�z�ϥε����D���Τ��ɥD���A�z�N�|����L�k�ק�Y�ǳ]�w. </span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> �\��i�H���N�o�ǳ]�w.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "���q�ʪ��A�w�g��粒��. �o�q�����z�i�H�o�e���z���Ȥ�@��Email�o���äU���Ʀ�ӫ~. ",

'click_here' => "�I��o��",

'send_invoice_desc' => "�p�G�A�ΡA���A�q���ݧאּ�i�椤�A�z�N�|�o��@�ӥi�H�H�e���Ȥ�o�����\��ε����i�J�Ʀ�ӫ~���v��.",

'delete_success' => "�R������.",

'delete_fail' => "�R������.",

'orders' => "�q��",

'all_orders' => "�U�C�Ҧ����Ʈw���q��.",

'order_no' => "�q�ʽs��",

'status' => "���A",

'date_time' => "���/�ɶ�",

'customer' => "�Ȥ�",

'ip_address' => "IP ��m",

'cart_total' => "�`�p",

'action' => "�ʧ@",

'no_orders_in_db' => "�ثe��Ʈw���S���q�ʳ�.",

'order_email' => "�˷R�� %s �z�n,\n\n�z���q�ʳ渹: %s ���A�w�g��אּ %s\n\n",

'email_staff_comments' => "�ڭ̷s�^���F�H�U����:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "���H��� %s �۰ʱH�X",

'email_subj_status_change' => "�q�ʪ��A���:",

'order_no2' => "�q�ʽs��:",

'print_packing_slip' => "�C�L�]��",

'customer_info' => "�Ȥ���",

'invoice_address' => "�o���a�}:",

'delivery_address' => "�H�f�a�}:",

'contact_info' => "�p����T:",

'tel' => "�q��:",

'mobile' => "���:",

'email' => "Email:",

'customer_comments' => "�Ȥ�N��:",

'no_comments_left' => "�ثe�S������N��.",

'order_summary' => "�q�ʤj��",

'product' => "�ӫ~",

'code' => "�N�X",

'quantity' => "�ƶq",

'price' => "����",

'download_link' => "�U����}:",

'warn_reset' => "�o�N�|�]�w�U���ƶq���� 0 �åB��������ɶ�.",

'reset_link' => "���]��m",

'download_stats' => "�w�U�� (%s) ��. �s������ɶ� %s",

'ip_address2' => "IP ��m:",

'order_date_time' => "�q�ʤ��/�ɶ�:",

'payment_method' => "�I�ڤ覡:",

'ship_method' => "���f�覡:",

'subtotal' => "�p�p:",

'total_tax' => "�`�p�|��:",

'shipping' => "�ֻ�:",

'grand_total' => "�`�p:",

'order_notfound' => "�L�k���q�ʳ渹 %s.",

'order_status' => "�q�ʪ��A",

'shipping_date' => "�H�X�ɶ�:",

'ship_today' => "����H�X",

'modify_status' => "�ק窱�A:",

'staff_comments' => "�ȪA����:",

'info_not_sent_customer' => "(�o�ӰT�����|�ǰe���Ȥ�!)",

'inform_customer' => "�q���Ȥ�:",

'customer_notified' => "(����ܫȤ�N�|����q�ʪ��A���ɪ��q��.)",

'comments_2_customer' => "�����Ȥ�N��:",

'comments_2_customer_desc' => "(�p�G�z�Ʊ�q���Ȥ�A�o�N�|�b�q�ʪ��A��蠟��H��Ȥ�w�]��Email.)",

'save_order_status' => "�x�s�q�ʪ��A",

'paid_by' => "��I�覡:",

'delivered_to' => "�ǻ��覡:",

'invoice_reciept_for' => "�o�� / ���Y:",

'order_of_time' => "�z���q��",

'order_id' => "�q�ʳ渹:",

'digi_goods_desc' => "�p�G�z�q�ʤF�Ʀ�ӫ~�A���N�|����@�ʫH��A�̭��]�t�F�U������. �z�]�i�H�q�Ȥ�޲z���ߥh���o�i�J.",

'thank_you' => "���±z���f�U!",

);



$lang['admin']['products'] = array (

'show_featured' => "��ܦb���������̷s�ӫ~��?",

'upload_new_images' => "�W�ǹ���",

'no_images_avail' => "��p�A�ثe�S���Ϥ��i���[��.",

'prod_added_to_cat' => "�ӫ~�W�[�����.",

'prod_not_added_to_cat' => "�ӫ~�W�[���������.",

'prod_removed_from_cat' => "�ӫ~�q����������.",

'prod_not_removed_from_cat' => "�ӫ~�q��������������.",

'title_extraCats' => "�����޲z",

'manage_cats' => "�޲z����",

'master_cat' => "�D����:",

'close_window' => "��������",

'img_added_to_prod' => "���ɼW�[��ӫ~.",

'img_not_added_to_prod' => "���ɼW�[��ӫ~����.",

'img_removed' => "�ӫ~����������.",

'img_not_removed' => "�ӫ~���������ɥ���..",

'image_management' => "���ɺ޲z",

'manage_images' => "�޲z����",

'image' => "����",

'action' => "�ʧ@",

'delete_success' => "�R������.",

'delete_fail' => "�R������.",

'update_successful' => "��s����.",

'update_fail' => "��s��������.",

'add_success' => "�W�[����.",

'add_fail' => "�W�[��������.",

'prod_inventory' => "�ӫ~�s�f",

'current_prods_in_db' => "�U�C�C�X��Ʈw���Ҧ��ӫ~.",

'all_cats' => "�Ҧ�����",

'prod_name' => "�ӫ~�W��",

'prod_id' => "�ӫ~�s��",

'prod_code' => "�ӫ~�N�X",

'master_cat2' => "�D�n����",

'title' => "���D",

'stock_level' => "�w�s����",

'normal_price' => "���",

'sale_price' => "�S��",

'asc' => "�ɾ��ƦC",

'desc' => "�����ƦC",

'containing_text' => "�]�t��r",

'filter' => "�L�o",

'reset' => "���]",

'id' => "�s��",

'type' => "�˦�",

'name' => "�W��",

'price_sale_price' => "��� / �S��",

'in_stock' => "�w�s��",

'action' => "�ʧ@",

'languages' => "�y�t",

'no_products_exist' => "�ثe��Ʈw���S���ӫ~.",

'add_prod_desc' => "�z�i�H�q�U�C�W�[�ӫ~��M��.",

'product' => "�ӫ~",

'prod_name2' => "�ӫ~�W��:",

'prod_stock_no' => "�ӫ~/�s�f���X:",

'auto_generated' => "(�d�űN�|�۰ʲ���.)",

'description' => "�y�z:",

'primary_lang' => "(�D�y�t����L���y�t�i�H�b����[�J.)",

'category' => "����:",

'image2' => "����:",

'opt_and_thumbs' => "(�p�G�榡��ܬۮe�A�ﶵ���Y�ϱN�|�۰ʲ���.)",

'upload_new' => "�W�Ƿs����",

'browse_existing' => "�s���w�s�b����",

'normal_price2' => "���:",

'sale_price2' => "�S��:",

'sale_mode_desc' => "(�]�w��N�|�u�b����@�ӫ~�W�X�{.)",

'prod_weight' => "�ӫ~���q:",

'tax_class' => "�|�v:",

'stock_level2' => "�w�s�q:",

'reduce_stock_level' => "(�o�w�s�q�N�|�b�ӫ~�C�P��X�h�@���Ӵ��.)",

'use_stock_q' => "�ϥήw�s�q?",

'product_type' => "�ӫ~�˦�:",

'tangible' => "������",

'digital' => "�¼Ʀ�",

'digi_path' => "�Ʀ�ӫ~������J HTTP �s�����|���ɮ׸��| (���U��).",

'digi_info' => "�Ʀ��T:",

'digi_desc' => "<p><strong>HTTP ���|:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong>�ɮ׸��| :</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(��ĳ!)							</strong></p>

<p>��ĳ�N�ɮש�m�b�D�����@�Ӷ}�񪺸�Ƥ�. �p�G�z����ɮ׸��|���Ҧ��A�ʪ����N�|�۰ʫ�ĳ�@�ӤU���s���I�åB������ɶ��P�U�����ƪ�����A�z�i�H�b�ө��]�w�����.</p>",

'prod_inv_langs' => "�ӫ~�ؿ� - (��L�y�t)",

'use_rich_oth_lang' => "�ШϥΦh�\��s�边�ӥ[�J�νs����L�y�t.",

'language' => "�y�t:",

'update_prod_lang' => "��s�ӫ~�y�t",

'save_prod_lang' => "�x�s�ӫ~�y�t",

'other_langs_exdefault' => "�U�C�C�X�Ҧ��ӫ~�y�t.",

'no_lang_exist' => "��Ʈw���S����L�y�t�s�b�󦹰ӫ~��.",

'opt_add_success' => "�ﶵ�W�ټW�[.",

'opt_add_fail' => "�ﶵ�W�ټW�[����.",

'att_add_success' => "�ﶵ�ݩʼW�[.",

'att_add_fail' => "�ﶵ�ݩʼW�[����.",

'assign_success' => "�ﶵ���w��ӫ~.",

'assign_fail' => "�ﶵ���w��ӫ~����.",

'product_options' => "�ӫ~�ﶵ",

'product_option' => "�ӫ~�ﶵ",

'quick_assign' => "�ֳt���w:",

'prod_opts_of' => "�ӫ~�ﶵ",

'to' => "��",

'go' => "�T�w",

'opt_step1' => "1. �إ߿ﶵ (��. �C��)",

'opt_id' => "�s��",

'opt_name' => "�ﶵ�W��",

'warn_remove_opt' => "�z�T�w�n�R�����ﶵ�W��? \n\nĵ�i�I�R���|�N�Ҧ��ӫ~�ﶵ�οﶵ�ݩʤ@�֧R���I",

'no_options_made' => "�S���ӫ~�ﶵ�W�ٲ���.",

'option' => "�ﶵ",

'opt_step2' => "2. �إ߿ﶵ�� (��. ����)",

'option_attributes' => "�ﶵ�ݩ�",

'warn_remove_att' => "�z�T�w�n�R�����ﶵ�ݩ�? \n\nĵ�i�I�R���|�N�Ҧ��ӫ~�ﶵ�οﶵ�ݩʤ@�֧R���I",

'no_attributes_made' => "�S���ӫ~�ﶵ�ݩʲ���.",

'attribute' => "�ݩ�",

'opt_step3' => "3. ���w�ﶵ &amp; ��ӫ~ (��. T�� &gt; �C�� &gt; ����)",

'option_attribute' => "�ﶵ�ݩ�",

'option_price' => "�ﶵ����",

'add_subtract' => "�W�[ / ���",

'remove_opt_prod' => "�z�T�w�n�q���ӫ~���������ﶵ?",

'no_assigned_opts' => "�S���ﶵ�i���w�ӫ~.",

'prods_made_1st' => "�ӫ~�����b�ﶵ�إ߫�W�[.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Enable Script/Bot Flood Control?</strong><br />
Forces users to enter a code on registration, tell a friend etc to prevent bot's from spamming the store.",

//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP �D��:",

'defaultHost' => "(�w�]: localhost)",

'smtpPort' => "SMTP ��:",

'defaultPort' => "(�w�]: 25)",

'smtpAuth' => "�ϥΪ̻{��?",

'defaultAuth' => "(�w�]: �_)",

'smtpUsername' => "SMTP �b��:",

'smtpPassword' => "SMTP �K�X:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "������̷ܳs�ӫ~?",

'no_latest' => "��̷ܳs�ӫ~�ƶq:",

'off_line_settings' => "���u�]�w",

'off_line' => "�����ө�?",

'off_line_content' => "���u�T��:",

'off_line_allow_admin' => "���\�޲z�����u�ɥi�H�s���ө�? (�������޲z�|��)",


'store_settings' => "�ө��]�w",

'edit_below' => "�Цb�U��s��z���ө��]�w:",

'meta_data' => "�w�q���",

'browser_title' => "�s�������D:",

'meta_desc' => "�w�q�y�z:",

'meta_keywords' => "�w�q����r:",

'comma_separated' => "(�r�����j)",

'store_co_name' => "�ө�/���q�W��:",

'store_address' => "�ө��a�}:",

'country' => "��a:",

'zone' => "����/�m��/�ϰ�:",

'dirs_folders' => "�ؿ� &amp; ��Ƨ�",

'rootRel' => "�ڶ}��HTML�ؿ�:",

'include_slash' => "(�����]�t / )",

'storeURL' => "����ө����}:",

'eg_domain_com' => "��. http://www.domain.com",

'rootDir' => "�D���۹���|:",

'eg_root_path' => "��. /path/to/your/webstore",

'rootRel_SSL' => "�ڶ}��w��HTML�ؿ�:",

'storeURL_SSL' => "�D���w���۹���|:",

'eg_domain_SSL' => "��. https://secure.domain.com",

'rootDir_SSL' => "�D���w���۹���|:",

'eg_root_path_secure' => "��. /path/to/your/secure/webstore",

'enable_ssl' => "�}�� SSL:",

'ssl_warn' => "(ĵ�i: ��z�e�X������|�ߧY�M��. �нT�w�z���w���ڥؿ��M�w�����}���T�åi�B�@)",

'digital_downloads' => "�Ʀ�U��",

'download_expire_time' => "�U������:",

'seconds' => "(��)",

'download_attempts' => "�U������:",

'attempts_desc' => "(�Ȥ�i�U���ӫ~������.)",

'styles_misc' => "�˦� &amp; ����",

'default_language' => "�w�]�y�t:",

'store_skin' => "�ө��˦�:",

'no_cats_per_row' => "�C�C������:",

'dir_symbol' => "�ؿ��W�s��:",

'prods_per_page' => "�C���ӫ~��",

'precis_length' => "�ӫ~²������:",

'chars' => "(�r)",

'no_sale_items' => "�S���ӫ~����ܼƶq:",

'no_pop_prod' => "����ӫ~����ܼƶq:",

'email_name' => "Email �W��:",

'email_name_desc' => "(�o�O�����H�X�H�����ܪ��W��.)",

'email_address' => "Email ��m:",

'email_address_desc' => "(�o�O�����H�X�ҨϥΪ�Email��m.)",

'mail_method' => "�l��H�e�Ҧ�:",

'mail_recommended' => "(��ĳ�ϥ�SMTP)",

'max_upload_size' => "�̤j�W�Ǯe�q:",

'under_x_recom' => "(��ĳ�b 2048KB �H��)",

'max_sess_length' => "�̤j�|������:",

'db_settings' => "��Ʈw�]�w",

'db_host' => "��Ʈw��m:",

'db_username' => "��Ʈw�b��:",

'db_password' => "��Ʈw�K�X:",

'db_name' => "��Ʈw�W��:",

'db_prefix' => "��Ʈw�e��:",

'gd_settings' => "GD �]�w",

'gd_ver' => "GD ����:",

'gd_thumb_size' => "�Y�Ϥؤo:",

'gd_gif_support' => "�䴩 GIF: (�нT�w�o�ӥ\��b�z���D���O�}�Ҫ�)",

'gd_max_img_size' => "�̤j���ɤؤo:",

'gd_img_quality' => "GD ���ɫ~��:",

'recom_quality' => "(��ĳ 60 - 80)",

'stock_settings' => "�w�s�]�w",

'use_stock' => "��ܮw�s�q?",

'allow_out_of_stock_purchases' => "���\�W�X�w�s�q?",

'weight_unit' => "�e�׳��:",

'time_and_date' => "�ɶ� &amp; ���",

'time_format' => "�ɶ��榡:",

'time_format_desc' => "(�Ш� <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "�ɶ��]�w:",

'time_offset_desc' => "(�� - �ϥΩ��D�����ɶ����P��)",

'date_format' => "����榡:",

'date_format_desc' => "(�Ш� <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "��a�Ƴ]�w",

'default_currency' => "�w�]����",

'inc_tax_prices' => "����t�|?",

'sale_mode' => "�S���Ҧ�:",

'percent_of_all' => "�Ҧ����楴��",

'ind_sale_per_item' => "�ӫ~�ӧO�����S�f��",

'sale_mode_off' => "�S���Ҧ�����",

'sale_per_off' => "�S���������:",

'sale_per_off_desc' => "(����N�|�]�w�Ҧ�����)",

'diff_dispatch' => "���\�e�f�a�}�P�o���a�}���ۦP��?",

'update_settings' => "��s�]�w",

'update_success' => "��s����.",

'update_fail' => "��s����.",

'add_success' => "�s�W���\ ",

'add_fail' => "�W�[����.",

'delete_success' => "�R������.",

'delete_failed' => "�R������.",

'currencies' => "�f��",

'currency' => "�f��",

'currencies_desc' => "�Цb�U��s��ΧR���f��:",

'c_code' => "�N�X",

'c_name' => "�W��",

'c_value' => "��",

'symbol_left' => "����Ÿ�",

'symbol_right' => "�k��Ÿ�",

'decimal_places' => "����p�Ʀ�",

'last_updated' => "�̫��s",

'c_status' => "���A",

'no_currencies' => "��Ʈw���S���f�����.",

'countries' => "�f��",

'country' => "�f��",

'edit_countries_below' => "�Цb�U��s��ΧR���f��:",

'disable' => "����",

'enable' => "�ҥ�",

'iso' => "ISO",

'iso_name' => "�W��",

'iso3' => "ISO3",

'num_code' => "�ƶq�N�X",

'action' => "�ʧ@",

'warn_del_country' => "�z�T�w�n�R��? �Ҧ���a, �����M�ϰ�N�|�b�����e�Q�R��.",

'no_countries_in_db' => "��Ʈw���ثe�S����a.",

'edit_counties' => "�Цb�U��s��ΧR������/�ϰ�/�a��:",

'no_counties_in_db' => "��Ʈw���S����a, �����ΰϰ�.",

'tax_Settings' => "�|�v�]�w",

'edit_locale_below' => "�Цb�U��]�w�z����a�Ƴ]�w:",

'tax_only_to' => "�U�C�ϰ줤�M�ε|�v:",

'manage_tax_below' => "�Цb�U��޲z�z���P���|�v�覡. �o�N�|�M�Ψ�C�Ӱӫ~�A�ҥH�z�|���ӵ|�v�d�Ұӫ~�Τ��P���|�v�b���P���ӫ~�˦�.",

'tax_class2' => "�|�v����",

'rate_per' => "��� (%)",

'no_taxes_setup' => "��p�ثe�S���|�v�]�w.",

'tax' => "�|��",

);



$lang['admin']['stats'] = array(

'store_stats' => "�ө��έp",

'choose_view' => "�п�ܱz�ҭn�d�ݪ��U�زέp:",

'search_terms' => "�j�M�r��",

'product_pop' => "�����ӫ~",

'cust_online' => "�u�W�Ȥ�",

'search_terms_order_by' => "�j�M�r�� (�ƦC�̷ӷj�M����)",

'sorry_no_data' => "��p�ثe�S����ƥi�H���.",

'product_pop_ordered_by' => "�����ӫ~  (�ƦC�̷��I�\����)",

'cust_active' => "�̪� 15 �������b�ө����Ȥ�.",

'hash' => "#",

'customer' => "�Ȥ�",

'location' => "��m",

'sess_start_time' => "�|���}�l�ɶ�",

'last_click_time' => "�̫��I��ɶ�",

'sess_length' => "�|������",

'geust' => "�X��",

'signed_in' => "�n�J",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "ĵ�i: �D�n�]�w�� 'includes/global.inc.php' �O�i�g�J���A�z���ө����B���I. �ХߧY�N�v���]�w�� 0644.",

'401' => "���~ 401: �z�S���n�J���������v��. �и߰ݫȪA�H���ӱ��v���z.",

'welcome_note' => "�w��Ө� CubeCart ��ݺ޲z�����",

'last_login' => "�̫�n�J�� ",

'by' => "��",

'failed' => "����.",

'store_overview' => "�ө��w��:",

'version' => "����:",

'visit_cc' => "�s�� CubeCart �U���D��",

'no_products' => "�`�p�ӫ~�ƶq:",

'no_customers' => "�`�p�Ȥ�ƶq:",

'img_upload_size' => "�w�W�ǹ��ɮe�q:",

'no_orders' => "�q�ʳ�ƶq:",

'quick_search' => "�ֳt�j�M:",

'order_no' => "�q��s��:",

'search_now' => "�ߧY�j�M",

'customer' => "�Ȥ�:",

'login_failed' => "�n�J����! �b���αK�X���~.",

'new_pass_sent' => "�s�K�X�N�|�H��",

'no_admin_sess' => "�S������޲z�|��.",

'login_fail_2' => "�n�J����. �ЦA�դ@��.",

'login_below' => "�еn�J:",

'username' => "�b��:",

'password' => "�K�X:",

'request_pass' => "�ШD�K�X",

'login' => "�n�J",

'logout_failed' => "�S���޲z�|���A�n�X����.",

'reset_pass_email' => "�˷R�� %s,

�z, �Ϊ̬Y�ǤH�����խ��s���o�s�K�X.

�z���n�J��Ʀp�U:

~~~~~~~~~~~~~~~~~~~~~~~~~~
�b��: %s
�K�X: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

���l��Ѧ� %s/admin/requestPass.php �o�X\n

�o�e��IP��m: %s",

'pass_reset_failed' => "�K�X���m����.",

'enter_email_below' => "�Цb�U���J�z��Email��m:",

'email_address' => "Email��m:",

'send_pass' => "�ǰe�K�X",

);



$lang['admin']['nav'] = array(

'permission_error' => "�z�S���v��.",

'navigation' => "����",

'admin_home' => "�޲z����",

'store_home' => "�ө�����",

'store_config' => "�ө��]�w",

'gen_settings' => "�@��]�w",

'taxes' => "�|�v",

'countries_zones' => "��a &amp; �ϰ�",

'currencies' => "�f��",

'modules' => "�Ҳ�",

'shipping' => "�ֻ�",

'gateways' => "�h�D",

'affiliates' => "���Y",

'catalog' => "�ؿ�",

'view_products' => "�˵��ӫ~",

'add_product' => "�s�W�ӫ~",

'product_options' => "�ӫ~�ﶵ",

'view_categories' => "�˵�����",

'add_categories' => "�s�W����",

'customers' => "�Ȥ�",

'view_customers' => "�˵��Ȥ�",

'email_customers' => "Email���Ȥ�",

'orders' => "�q��",

'file_manager' => "�ɮ׺޲z",

'manage_images' => "�޲z����",

'upload_images' => "�W�ǹ���",

'statistics' => "�έp",

'view_stats' => "�˵��έp",

'documents' => "���",

'homepage' => "����",

'site_docs' => "�������",

'misc' => "����",

'server_info' => "�D���T��",

'admin_users' => "�޲z�ϥΪ�",

'administrators' => "�޲z��",

'admin_sessions' => "�޲z�|��",

);



$lang['admin']['incs'] = array(

'administration' => "�޲z��",

'logged_in_as' => "�ثe�n�J:",

'logout' => "�n�X",

'change_pass' => "���K�X",

'error_editing' => "���սs����~. ��J��Ƥ��O�}�C.",

'config_updated' => "�]�w��s����. �нT�w�ɮ��v���w�g�]�w���T.",

'cant_write' => "�L�k�}�� '%s' �ɮ׼g�J. ���� CHMOD �v���� 0777. �аO�o��������^ 0644 !",

'db_config_updated' => "��s����.",

'db_cant_write' => "��s����!",

'select_above' => "��ܤ��e",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "�O";

$lang['front']['no'] = "�_";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "�`�γs��",

'reg_and_checkout' => "���U &amp; ���b",

'cont_shopping' => "�~���ʪ�",

'edit_del_add' => "�s��H�f�a�}",

'edit_inv_add' => "�s��o���a�}",

'empty_cart' => "�M�ŭq��",

'prev_page' => "�W�@��",

'homepage' => "����",

'shop_by_cat' => "�����ʪ�",

'sale_items' => "�S���ӫ~",

'save' => "�S��",

'currency' => "�f��",

'information' => "�T��",

'products' => "�ӫ~:",

'categories' => "����:",

'prices' => "����:",

'language' => "�y��",

'mailing_list' => "�q�l��",

'subscribe_below' => "�q�\�ڭ̪��q�l��:",

'email' => "Email:",

'join_now' => "�{�b�[�J",

'already_subscribed' => "Email ��m %s �w�g�����q�\�å[�J��ڭ̪��q�l���A�p�G�ݭn�����q�\�еn�J��z���b��.",

'enter_valid_email' => "�п�J���T�� Email ��m.",

'added_to_mail' => "���±z, %s �w�g�[�J��ڭ̪��q�l��.",

'subscribed_to_mail' => "���±z, %s �w�g�q�\�ڭ̪��q�l��",

'popular_products' => "�����ӫ~",

'featured_prod' => "�S�u�ӫ~",

'sale_items' => "�S���ӫ~",

'search_for' => "�j�M:",

'go' => "�T�w",

'welcome_back' => "�w��^��",

'logout' => "�n�X",

'your_account' => "�ӤH���",

'welcome_guest' => "�w��X��",

'login' => "�n�J",

'register' => "���U",

'shopping_cart' => "�ʪ���",

'basket_empty' => "�z���ʪ����O�Ū�.",

'items_in_cart' => "�w���ʶ���:",

'total' => "�`�p:",

'view_basket' => "�˵��ʪ���",

);



$lang['front']['account'] = array(

'your_account' => "�z���b��",

'personal_info' => "�ӤH���",

'order_history' => "�q�ʰO��",

'change_password' => "���K�X",

'newsletter' => "�q�l��",

'login_to_view' => "�z�������n�J�~���˵�����.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "�z��J���K�X�����T.",

'conf_not_match' => "�z���ƿ�J���K�X�P�z�s�K�X���۲�.",

'change_pass' => "���K�X",

'password_updated' => "���±z, �z���K�X�w�g��s.",

'change_pass_below' => "�Цb�U����z���K�X:",

'old_pass' => "�±K�X:",

'new_pass' => "�s�K�X:",

'confirm_pass' => "���Ʒs�K�X:",

'submit' => "�e�X",

);



$lang['front']['dnExpire'] = array(

'sorry' => "��p",

'expired' => "�U����m�w�g�L���Ϊ̬O�����T��.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "�ѰO�K�X",

'email' => "Email:",

'send_pass' => "�ǰe�K�X",

'reset_email' => "�˷R�� %s %s,

�z, �Ϊ̬Y�ǤH�����խ��s���o�s�K�X. �z���s�n�J��Ʀp�U:

~~~~~~~~~~~~~~~~~~~~~~~~~~
�b��: %s
�K�X: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
�n�J�ХѤU�C���}�i�J:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Email�H�e�Ӧ� %s
�o�e�� IP ��m: %s",

'new_pass_sent' => "�s�K�X�w�g�H�� %s.",

'email_not_found' => "��p�A�S���� Email �H�c���.",

'enter_email' => "�Цb�U���J�z��Email�H�c�A�t�αN�|�H�e�{�ɱK�X���z:",

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

'newOrderMsg' => "�Ȥ�s�q�� %s, �ХѦ��s���˵��q��: \n\n%s",

'newOrderSubj' => "�ө��s�q��",

'payment' => "�I�O�ﶵ",

'cart' => "�˵��ʪ���",

'address' => "�a�}�]�w",

'payment' => "�I�O�ﶵ",

'complete' => "�����I",

'fill_out_below' => "�п�J�H�U���:",

'transferring' => "�ഫ���I",

'go_now' => "�{�b�e��!",

'continue' => "�~��",

'choose_method' => "�п�ܱz�`�Ϊ��I�ڤ覡:",

'your_comments' => "�z���N��:",

'none_configured' => "��p�A�S������I�ڤ覡�]�w.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "�n�J",

'username' => "Email:",

'password' => "�K�X:",

'remember_me' => "�O���?",

'forgot_pass' => "�ѰO�F�K�X?",

'login_success' => "�z�w�g�n�J����.",

'already_logged_in' => "�z�ثe�w�g�n�J.",

'login_failed' => "�n�J����!",

'login_below' => "�еn�J:",

);



$lang['front']['index'] = array(

'latest_products' => "�̷s�ӫ~",

);



$lang['front']['logout'] = array(

'logout' => "�n�X",

'session_destroyed' => "�z�������w�g����.",

'no_session' => "�S�������i�H����. �ݰ_�ӱz�w�g�N�~������.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "�q�l���]�w",

'prefs_updates' => "�z���q�l���]�w�w�g��s.",

'edit_prefs_below' => "�Цb�U��]�w�z���q�l��:",

'subscribe' => "�q�\�q�l��?",

'email_format' => "�q�l���榡:",

'plain_text' => "�¤�r",

'html' => "HTML",

'html_abbr' => "�����y�k",

'update' => "��s",

'login_required' => "�z�������n�J�~���˵�������",

);



$lang['front']['noShip'] = array(

'sorry' => "��p",

'desc' => "�ڭ̵L�k�N�ӫ~�e�F�z����a.",

);



$lang['front']['overWeight'] = array(

'sorry' => "��p",

'desc' => "�ڭ̵L�k�e�F�����~(���q).",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "�q�ܸ��X�����O�Ʀr.",

'complete_all' => "�нT�w�Ҧ�����Ƴ������.",

'email_invalid' => "�п�J�@�Ӧ��Ī�Email�H�c.",

'numeric_only' => "�q�ܸ��X�����O�Ʀr.",

'email_inuse' => "��p�A��Email�H�c�w�g�Q�ϥ�.",

'update_email' => "�˷R�� %s %s,

���H��O�q���z���ӤH��Ƥw�g��s����. �p�G�zı�o�z���b����s�O�ѧO�H�ʧ@���ХߧY�P�ڭ̪��ȪA�H���p��.\n\n

���H��Ӧ� %s\n

�o�e�H IP ��m: %s",

'update_email_subj' => "�ӤH��Ƨ�s",

'personal_info' => "�ӤH���",

'account_updated' => "�z���b���w�g��s. �p�G�z�Q�A�s��A�Цb�U��B�z.",

'edit_below' => "�Цb�U��s��z���ӤH�T��:",

'title' => "�٩I:",

'first_name' => "�W�r:",

'last_name' => "�m�W:",

'email' => "Email:",

'address' => "�a�}:",

'town' => "�m��:",

'county' => "��/��:",

'postcode' => "�l���ϸ�:",

'country' => "��a:",

'phone' => "�p���q��:",

'mobile' => "���:",

'update_account' => "��s�b��",

'login_required' => "�z�������n�J�~���˵�������.",

);



$lang['front']['reg'] = array(

'fill_required' => "�нT�w�Ҧ���Ƴ�����g.",

'pass_not_match' => "�нT�w�z��J���K�X�۲�.",

'enter_valid_email' => "�п�J���ĥ��T��Email�H�c.",

'enter_valid_tel' => "�q�ܸ��X�����O�Ʀr.",

'email_in_use' => "��p�AEmail�H�c�w�g�ϥΤ�.",

'note_required' => "�Ъ`�N�A������W�� (*) ��ܬ�������g�����.",

'express_reg' => "�ֳt���U",

'submit_and_cont' => "�e�X &amp; �~��",

'personal_details' => "�ӤH����",

'address' => "�a�}",

'title' => "�٩I:",

'title_desc' => "(�p�j/����)",

'first_name' => "�W�r:",

'address2' => "�a�}:",

'last_name' => "�m��:",

'email_address' => "Email ��m:",

'town' => "�m��:",

'phone' => "�q��:",

'county' => "����:",

'mobile' => "���:",

'country' => "��a:",

'postcode' => "�l���ϸ�:",

'security_details' => "�w������",

'choose_pass' => "��ܱK�X:",

'conf_pass' => "�T�w�K�X:",

'privacy_settings' => "���p�]�w",

'receive_emails' => "�ڧƱ榬��Ӧ۰ө���Email",

'email_format' => "Email�榡:",

'styled_html' => "�����Ҧ�",

'plain_text' => "�¤�r",

'tandcs' => "�ϥΨ�ĳ",

'please_read' => "�нT�w�w�\Ū",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "�˷R�� %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
�[�ݦ��ӫ~���I��U�C���}:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

�H��o�e�Ӧ� %s
�H��� IP ��m: %s",

'email_subject' => "�T���Ӧ�: %s",

'tellafriend' => "�i�D�B��",

'message_sent' => "���±z, �z�w�g�H�� <strong>%s</strong> ���� '%s' ���T��. �p�G�z�Ʊ�]�H����L�B�ͽШ�:",

'fill_out_below' => "�ХѦ��i���z���B�ͦ��� '%s' �T��.",

'friends_name' => "�B�ͦW��:",

'friends_email' => "�B��Email:",

'your_name' => "�z���W��:",

'your_email' => "�z��Email:",

'message' => "�d��:",

'default_message' => "�ڧ�� '%s' �o��ӫ~�A�ڷQ�z���ӷ|������.",

'send' => "�e�X",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "�����q�\ ",

'email' => "Email:",

'go' => "�T�w",

'enter_valid_email' => "�п�J���ĥ��T��Email�H�c.",

'email_removed' => "���±z, <strong>%s</strong> �w�g�q�ڭ̹q�l���W�椤����.",

'email_not_found' => "��p, <strong>%s</strong> ���b�ڭ̹q�l���W�椤�A�i��w�g�����q�\.",

'enter_email_below' => "�Цb�U���J�z���H�c�H�K�����q�\:",

);



$lang['front']['viewCat'] = array(

'search_results' => "�j�M���G",

'sale_items' => "�S���ӫ~",

'image' => "����",

'description' => "�y�z",

'price' => "����",

'products_in' => "�ӫ~:",

'buy' => "�ߧY�R",

'more' => "�ԲӤ��e",

'out_of_stock' => "�W�X�w�s",

'no_products_match' => "��p, �S���۲ŦX���ӫ~:",

'no_prods_in_cat' => "�ثe�S�������ӫ~.",

);



$lang['front']['viewDoc'] = array(

'error' => "���~",

'does_not_exist' => "��󤣦s�b.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "�q�ʽs��:",

'customer_info' => "�Ȥ���:",

'invoice_address' => "�o���a�}:",

'delivery_address' => "�e�f�a�}:",

'na' => "�L",

'customer_comments' => "�Ȥ�N��:",

'order_summary' => "�q�ʤj��:",

'product' => "�ӫ~",

'product_code' => "�ӫ~�N�X",

'quantity' => "�ƶq",

'price' => "����",

'download_here' => "�o�̤U��",

'review_below' => "�Цb�U��w���q��:",

'order_date_time' => "�q�ʤ��/�ɶ�:",

'payment_method' => "�I�ڤ覡:",

'ship_method' => "���f�覡:",

'subtotal' => "�p�p:",

'total_tax' => "�`�p�|��:",

'shipping' => "�ֻ�:",

'grand_total' => "�`�p���B:",

'order_not_found' => "�䤣��q�ʸ��X.",

'login_required' => "�z�����n�J��~���˵�������.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "�z���q��",

'orders_listed_below' => "�b�����Ҧ����q�ʲM��p�U:",

'order_no' => "�q�ʽs��",

'status' => "���A",

'date_time' => "���/�ɶ�",

'action' => "�ʧ@",

'view' => "�˵�",

'no_orders' => "�ڭ̨t�Τ��䤣��O��. �p�G�z�oı�����D�вĤ@�ɶ��ߧY�P�ڭ̫ȪA�H���p��.",

'login_required' => "�z�����n�J��~���˵�������.",

);



$lang['front']['viewProd'] = array(

'product' => "�ӫ~",

'product_info' => "�ӫ~��T",

'price' => "����:",

'product_code' => "�ӫ~�N�X:",

'tellafriend' => "�i�D�B�ͳo�Ӱӫ~",

'quantity' => "�ƶq:",

'more_images' => "[+] ��h����",

'add_to_basket' => "��J�ʪ���",

'location' => "��m:",

'no_instock' => "�w�s:",

'instock' => "�w�s��",

'out_of_stock' => "�W�X�w�s",

'prod_opts' => "�ӫ~�ﶵ:",

'prod_not_found' => "�䤣�즹�ӫ~.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "�z���ʪ����ثe�O�Ū�.",

'allready_customer' => "�z�w�g�O�Ȥ�?",

'login_below' => "�Х��n�J:",

'username' => "Email:",

'password' => "�K�X:",

'remember_me' => "�O���?",

'login' => "�n�J",

'forgot_pass_q' => "�ѰO�F�K�X?",

'need_register' => "�{�b�ӽ�?",

'express_register' => "�{�b�N���U�I�Q���ֳt²��I",

'reg_and_cont' => "���U &amp; �~��",

'cont_shopping_q' => "�~���ʪ�?",

'cont_shopping' => "�~���ʪ�",

'cont_browsing' => "�p�G�Ʊ�H�X�Ȩ����~���s��, ���I��U����s. �`�N: �z���������U�~�৹���ʪ��y�{.",

);





$lang['front']['cart'] = array(

'free_shipping' => "�K�B�O",

'view_cart' => "�˵��ʪ���",

'cart' => "�˵��ʪ���",

'address' => "�a�}�]�w",

'payment' => "�I�O�ﶵ",

'complete' => "�����I",

'add_more' => "�Q�n�R��h�H������J�ӫ~�N�X:",

'add' => "�W�[",

'qty' => "�ƶq",

'product' => "�ӫ~",

'code' => "�N�X",

'stock' => "�w�s",

'price' => "���",

'line_price' => "�p�p",

'delete' => "�R��",

'remove' => "��������",

'invoice_address' => "�o���a�}",

'delivery_address' => "�e�f�a�}",

'title' => "�٩I:",

'first_name' => "�W�r:",

'last_name' => "�m��:",

'address2' => "�a�}:",

'town' => "�m��:",

'county' => "����:",

'postcode' => "�l���ϸ�:",

'country' => "��a:",

'edit_invoice_address' => "�s��o���a�}",

'edit_delivery_address' => "�s��e�f�a�}",

'stock_warn' => "�z�q�ʤF�h�Ӷ��ضW�X�ڭ̥ثe�i�������ƶq. �z���q�ʱN�|���𪽨�ڭ̮w�s��s.",

'amount_capped' => "��p�A�ڭ̥ثe�w�s�q�����z�ҭq�ʪ��ƶq�A�ȮɱN�z���ƶq�վ㬰�w�s�̤j��.<br />�w���w�s�q�� ",

'na' => "�L",

'shipping' => "�B�O:",

'tax' => "�|�v:",

'subtotal' => "�p�p:",

'cart_total' => "�`�p:",

'if_changed_quan' => "(�p�G�z������ʶR�ƶq)",

'update_cart' => "��s�ʪ���",

'continue' => "�~��",

'cart_empty' => "�z���ʪ����ثe�O�Ū�.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "�T�{�e��",

'cart' => "�ʪ���",

'address' => "�a�}",

'payment' => "��I",

'complete' => "����",

'order_success' => "���±z, �z���q�ʤw�g����! �w��A�����{.",

'order_fail' => "��p, �z���ʪ�����!",

'try_again_desc' => "�z�i�H�A�@�������ʶR�ʪ����ӫ~:",

'try_again' => "�A�դ@��",

'request_login' => "�z�����n�J��~���˵�������.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "�˷R�� %s,

���±z���q�ʡA�q�ʳ渹: %s �� %s

����������åB�ڭ̷|�ɧֱN�z���ӫ~�H�X

~~~~~~~~~~~~~~~~~~~~~~~~~~
�W��: %s
�p�p: %s
�l�� & �]��: %s
�|�v: %s
�`�p�O��: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

�o���a�}:
%s
%s
%s
%s
%s
%s
%s

�H�e�a�}:
%s
%s
%s
%s
%s
%s
%s

�I�O�覡: %s
���f�覡: %s",

'inv_email_body_2' => "\n�z���N��: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

�ʪ��M��:\n",

'inv_email_body_4' =>"�ӫ~: %s\n",

'inv_email_body_5' => "�ﶵ: %s\n",

'inv_email_body_6' => "�ƶq: %s
�ӫ~�N�X: %s
����: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "�q�ʳ渹: ",

'digi_email_body1' => "�˷R�� %s,

���±z���q�ʡA�q�ʳ渹: %s �� %s

�U��s���O�z�q�ʪ��Ʀ�ӫ~�s��.

���n! �o�ӳs���N�|�� %s ����ӱz�� %s �����U������. �p�G�z��������D�A�лP�ڭ��p���ê`�N�z���q�ʸ��X.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
�U����m:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "�U���s��: ",

);



$lang['misc'] = array(

'pages' => " �� ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "�Ȥ���s����:",

'server_software' => "�D���ݳn��:",

'perofOrderSub' => " % �q�ʤp�p",

'freeForOrdOver' => "�K�O�q��",

'freeShipping' => "�K�B�O",

'byWeight1stClass' => "���q (��1����)",

'1stClass' => "(��1����)",

'byWeight2ndClass' => "���q (��2����)",

'2ndClass' => "(��2����)",

'flatRate' => "�����",

'free' => "�K�O",

'national' => "�ꤺ",

'international' => "���",

'byCategory' => "�Ѥ���",

'perItem' => "��@����",

'nextDayEarlyAm' => "Next Day Air Early AM",

'nextDayAir' => "Next Day Air",

'nextDayAirSaver' => "Next Day Air Saver",

'2ndDayEarlyAm' => "2nd Day Air Early AM",

'2ndDayAir' => "2nd Day Air",

'3daySelect' => "3 Day Select",

'ground' => "�a��",

'canadaStandard' => "�[���j�з�",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "�o�����Y",

'deliverTo' => "����H",

'postalOrderFor' => "�l�󦬥�H",

'orderOf' => "�q��",

'orderID' => "�q�ʳ渹:",

'product' => "�ӫ~",

'code' => "�N�X",

'qty' => "�ƶq",

'price' => "����",

'shippingMethod' => "�H�e�覡:",

'subtotal' => "�p�p:",

'totalTax' => "�`�p�|��:",

'totalShipping' => "�`�p�B�O:",

'grandTotal' => "�`�p�O��:",

'payByCheck' => "�䲼�I��",

'payTo' => "�нT�w��I��",

'payByCard' => "�H�Υd�I��",

'cardType' => "�H�Υd����:",

'cardNo' => "�d��:",

'3-4DigiId' => "3-4 ���ҽX:",

'expiryDate' => "�����:",

'issueDate' => "�o�d���:",

'issueNo' => "�o�d�s��:",

'signature' => "ñ�W:",

'payByTransfer' => "�Ȧ�״ڥI��",

'bankName' => "�Ȧ�W��:",

'accountName' => "�b��W��:",

'sortCode' => "�Ȧ�N�X:",

'accountNo' => "�b�ḹ�X:",

'swiftCode' => "�ֳt�N�X:",

'bankAddress' => "�Ȧ�a�}:",

'thanks' => "���±z���q��!",

'postalAddress' => "�l�H�a�}:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "���ݳB�z",

'2' => "�i��B�z",

'3' => "�B�z����",

'4' => "�������",

'5' => "�B�۵L��",

);

$lang['admin']['cats'] = array (

'delete_success' => "�����y�t�R������.",

'delete_fail' => "�R������.",

'update_fail' => "��s����.",

'update_success' => "��s����.",

'add_success' => "�W�[����.",

'add_fail' => "�W�[�����y�t����.",

'site_cats_other_lang' => "���� - (��L�y�t)",

'site_cat_other_lang' => "���� - (��L�y�t)",

'cat_name' => "�����W��:",

'language' => "�y�t:",

'update_cat' => "��s����",

'save_cat' => "�x�s����",

'current_cat_list' => "�U�C��ܥX�Ҧ��ثe�����y�t. �o�ӥi�H�H���H�a���s��ΧR��.",

'cat_name2' => "�����W��",

'action' => "�ʧ@",

'no_site_cats' => "�o�Ӥ����W�٩|��½Ķ.",

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