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
|	中文 (TW) 語系檔案	
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'zh_TW');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "是";

$lang['admin']['no'] = "否";

$lang['admin']['edit'] = "編輯";

$lang['admin']['delete'] = "刪除";

$lang['admin']['delete_q'] = "您確定要刪除？";

$lang['admin']['add'] = "新增";

$lang['admin']['add_new'] = "新增";

$lang['admin']['write'] = "寫入";

$lang['admin']['read'] = "讀取";

$lang['admin']['na'] = "無"; // as in not applicable

$lang['admin']['all'] = "所有";

$lang['admin']['remove'] = "移除";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "刪除完成.",

'del_failed' => "刪除失敗.",

'update_success' => "更新完成.",

'update_fail' => "更新失敗.",

'add_success' => "新增完成.",

'add_failed' => "新增使用者失敗.",

'administrators_title' => "管理員",

'current_users' => "目前管理者.",

'id' => "ID",

'user_notes' => "使用者名稱 / 註釋",

'no_logins' => "尚未登入",

'super_user' => "超級使用者?",

'email' => "Email",

'action' => "動作",

'add_admin' => "您可以使用下列表單來增加管理員.",

'full_name' => "完整名稱:",

'username' => "使用者名稱:",

'administrator' => "管理員",

'email2' => "Email:",

'password' => "密碼:",

'pass_warn' => "(如果您需要更改密碼才輸入.)",

'make_super' => "超級使用者?",

'notes' => "註釋:",

'permissions' => "權限",

'pass_updated' => "密碼更新.",

'pass_not_updated' => "密碼未更新.",

'change_pass_below' => "請在下方輸入您更改的密碼:",

'old_pass' => "舊密碼:",

'new_pass' => "新密碼:",

'confirm_pass' => "重複新密碼:",

'perms_updated' => "權限更新.",

'set_perms' => "請在下方設定權限.",

'section' => "區域",

'nb_bulk' => "注意！大量 Email 客戶 ，使用者必許在客戶之下有寫入的權限.",

'admin_sessions' => "管理會期",

'sessions_desc' => "下列顯示最近嘗試登入管理的資料. 請注意到這些訊息並且確定沒有強迫嘗試去登入. 強烈建議您經常性的更改密碼.",

'login_id' => "登入 ID",

'time' => "時間",

'ip_address' => "IP 位址",

'success' => "完成",

);



$lang['admin']['categories'] = array (

'delete_success' => "刪除完成.",

'delete_fail' => "刪除失敗.",

'update_success' => "更新完成.",

'update_fail' => "更新分類失敗.",

'add_success' => "新增完成.",

'add_failed' => "新增分類失敗.",

'categories' => "分類",

'categories_desc' => "下方列出目前在資料庫中所有的分類.",

'cat_name' => "分類名稱",

'dir' => "目錄",

'image' => "圖檔",

'no_products' => "商品",

'action' => "動作",

'cannot_del' => "這個分類無法刪除，已經有存在商品.",

'no_cats_exist' => "資料庫目前沒有分類.",

'add_desc' => "您可以在分類中無限增加子分類、上傳新圖檔或者沿用已上傳的圖檔.",

'category' => "分類",

'category_name' => "分類名稱:",

'category_level' => "分類階級:",

'top_level' => "最上層",

'image_optional' => "圖檔: (選項)",

'upload_new_image' => "上傳新圖檔",

'browse_existing' => "瀏覽已上傳圖檔",

'ship_by_cat' => "使用分類瀏覽",

'per_ship' => "單一運費:",

'per_item' => "單一項目:",

'per_int_ship' => "單一國際運費:",

'per_int_item' => "單一國際項目:",

);



$lang['admin']['customers'] = array (

'customers' => "客戶",

'delete_success' => "刪除完成.",

'delete_fail' => "刪除失敗.",

'update_success' => "客戶更新完成.",

'update_fail' => "客戶新增失敗.",

'search_term' => "搜尋範圍:",

'reset' => "重設",

'name' => "名稱",

'email' => "Email",

'invoice_add' => "發票地址",

'phone' => "電話",

'reg_ip' => "註冊日期 / IP 位置",

'no_orders' => "訂購",

'action' => "動作",

'no_cust_exist' => "資料庫中沒有客戶資料.",

'edit_below' => "請在下方編輯客戶:",

'title' => "標題",

'first_name' => "名字:",

'last_name' => "姓:",

'email2' => "Email:",

'address' => "地址:",

'town' => "鄉鎮:",

'county' => "村/里:",

'postcode' => "郵遞區號:",

'country' => "縣市:",

'phone2' => "電話:",

'edit_customer' => "編輯客戶",

'no_download_email' => "沒有Email可以下載.",

'email_customers' => "Email給客戶",

'create_email' => "請在下方建立您的Email:",

'hint' => "提示:",

'click_source' => "您可以點選上方的來源按鈕，然後貼上在已經建立的Html檔.",

'important' => "重要:",

'absolute_links' => "確定所有圖片還連結是完全的 (例: 包含網址). 許多國家中這才是提供合法取消訂閱連結的義務:",

'email_subject' => "Email主題:",

'senders_name' => "寄件人名稱:",

'senders_email' => "寄件人Email:",

'return_path' => "回信位址:",

'bounce_desc' => "(回信位址是回信後所送達的位置.)",

'send_test' => "寄送測試信件?",

'test_email_recip' => "測試信收件人:",

'send_email' => "寄送信件",

'download_or_send' => "請選擇下載客戶Email名單或者藉由網站發送Email.",

'please_choose' => "請選擇:",

'used_to_download' => "這是用來下載Email名單給寄信軟體使用.",

'bulk_to_subscribed' => "這個允許您發送信件給從這個網站中曾經有訂閱過電子報的訪客.",

'include_name' => "包含名稱?",

'download_email' => "下載Email",

'send_email' => "傳送Email",

'sending_complete' => "傳送完畢",

'sending' => "傳送Email中",

'recipient' => "收件人:",

'prev_page' => "上一頁",

'page' => "頁:",

'bulk_finished' => "寄信工作已經完成.",

'time_taken' => "花費時間:",

'recipients' => "收件人:",

);



$lang['admin']['docs'] = array (

'update_fail' => "網頁無法更新，請確定 includes/static/home.inc.php 檔案權限設定正確.",

'update_success' => "網頁更新完成.",

'homepage' => "網頁",

'enabled' => "啟用:",

'enabled_desc' => "(如果關閉預設語系這將會被取代.)",

'language' => "語系:",

'title' => "標題:",

'use_rich_text' => "請使用多功能編輯器來編輯網站網頁. 一旦儲存將會立即的更換，所以更改前請先預覽.",

'update_homepage' => "更新網頁",

'delete_success' => "文件刪除完成.",

'delete_fail' => "刪除失敗.",

'update_success' => "更新完成.",

'update_fail' => "無法更新.",

'add_success' => "新增完成.",

'add_fail' => "新增文件失敗.",

'site_docs_other_lang' => "網站文件 - (其他語系)",

'use_rich_text' => "請使用多功能編輯器來編輯其他語系文件.",

'site_doc_other_lang' => "網站文件  - (其他語系)",

'doc_name' => "文件名稱:",

'language' => "語系:",

'update_doc' => "更新文件",

'save_doc' => "儲存文件",

'current_doc_list' => "以下列出目前網站的所有文件. 您可以隨時隨地的編輯/刪除.",

'doc_name2' => "文件名稱",

'action' => "動作",

'no_site_docs' => "資料庫目前沒有任何網頁文件.",

'site_docs' => "網站文件",

'site_doc' => "網站文件",

'languages' => "語言",

'no_docs' => "資料庫目前沒有任何網頁文件.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "圖檔瀏覽器",

'file' => "檔案:",

'no_imgs' => "沒有圖檔可用. 請關閉視窗且上傳圖檔.",

'preview' => "預覽:",

'ok' => "確定",

'cancel' => "取消",

'prod_cat_use_img' => "目前已有商品或分類使用 '%s'.",

'continue_q' => "繼續刪除?",

'site_doc_use_img' => "目前已經有網站文件使用 '%s'.",

'home_use_img' => "圖檔 '%s' 已經在網站網頁中使用.",

'gallery_use_img' => "圖檔 '%s' 已經在商品相簿中使用.",

'image_deleted' => "圖檔刪除.",

'delete_failed' => "刪除失敗.",

'image_manager' => "圖檔管理",

'delete_from_server' => "您可以從主機中刪除圖檔.",

'img_click_prev' => "圖檔 (點選預覽)",

'size' => "容量",

'action' => "動作",

'no_images_added' => "沒有圖檔增加.",

'prev_file' => "預覽檔案",

'close_window' => "關閉視窗",

'no_image_selected' => "沒有圖檔預覽.",

'file_uploader' => "檔案上傳",

'upload_image' => "圖檔上傳",

'please_browse_img' => "請瀏覽您的圖檔:",

'file_too_big' => "錯誤: %s 在 %s",

'img_already_exists' => "錯誤: %s 已經存在，請更改檔案名稱.",

'upload_too_large' => "錯誤: 您無法選擇太大的圖檔. 上傳最大限制 2MB.",

'not_valid_mime' => "錯誤: %s 不是正確的圖檔格式.",

'image_upload_success' => "完成: %s 上傳.",

'back' => "&laquo; 回上一頁",

);



$lang['admin']['misc'] = array (

'license_form' => "授權表單",

'write_error' => "無法開啟 includes/global.inc.php 檔案. 請試著更改 CHMOD 權限成 0777. 記得在更改後改回成 0644 !",

'try_again' => "再試一次",

'purchase_cubecart' => "購買 CubeCart:",

'invalid_key' => "抱歉，授權鑰匙無效或者已經被使用.",

'purchase_license_key' => "購買授權鑰匙",

'run_unlicensed' => "您似乎正在使用未授權的版本. 請在下方輸入您的授權來移除版權說明.",

'license_key' => "授權鑰匙:",

'submit_key' => "送出鑰匙",

'server_info' => "主機訊息",

'ini_set_desc' => "這裡顯示您目前主機環境設定. 這包含各種資訊可供您參考及當您使用 CubeCart 時所遭受到問題. 注意. 如果您使用虛擬主機或分享主機，您將會限制無法修改某些設定. </span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> 功能可以取代這些設定.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "此訂購狀態已經更改完成. 這段期間您可以發送給您的客戶一封Email發票並下載數位商品. ",

'click_here' => "點選這裡",

'send_invoice_desc' => "如果適用，當狀態從等待改為進行中，您將會得到一個可以寄送給客戶發票的功能及給予進入數位商品的權限.",

'delete_success' => "刪除完成.",

'delete_fail' => "刪除失敗.",

'orders' => "訂購",

'all_orders' => "下列所有於資料庫的訂購.",

'order_no' => "訂購編號",

'status' => "狀態",

'date_time' => "日期/時間",

'customer' => "客戶",

'ip_address' => "IP 位置",

'cart_total' => "總計",

'action' => "動作",

'no_orders_in_db' => "目前資料庫中沒有訂購單.",

'order_email' => "親愛的 %s 您好,\n\n您的訂購單號: %s 狀態已經更改為 %s\n\n",

'email_staff_comments' => "我們新回應了以下註解:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "此信件由 %s 自動寄出",

'email_subj_status_change' => "訂購狀態更改:",

'order_no2' => "訂購編號:",

'print_packing_slip' => "列印包裝",

'customer_info' => "客戶資料",

'invoice_address' => "發票地址:",

'delivery_address' => "寄貨地址:",

'contact_info' => "聯絡資訊:",

'tel' => "電話:",

'mobile' => "手機:",

'email' => "Email:",

'customer_comments' => "客戶意見:",

'no_comments_left' => "目前沒有任何意見.",

'order_summary' => "訂購大綱",

'product' => "商品",

'code' => "代碼",

'quantity' => "數量",

'price' => "價格",

'download_link' => "下載位址:",

'warn_reset' => "這將會設定下載數量成為 0 並且延伸到期時間.",

'reset_link' => "重設位置",

'download_stats' => "已下載 (%s) 次. 連結到期時間 %s",

'ip_address2' => "IP 位置:",

'order_date_time' => "訂購日期/時間:",

'payment_method' => "付款方式:",

'ship_method' => "提貨方式:",

'subtotal' => "小計:",

'total_tax' => "總計稅金:",

'shipping' => "快遞:",

'grand_total' => "總計:",

'order_notfound' => "無法找到訂購單號 %s.",

'order_status' => "訂購狀態",

'shipping_date' => "寄出時間:",

'ship_today' => "今日寄出",

'modify_status' => "修改狀態:",

'staff_comments' => "客服註解:",

'info_not_sent_customer' => "(這個訊息不會傳送給客戶!)",

'inform_customer' => "通知客戶:",

'customer_notified' => "(當此選擇客戶將會收到訂購狀態更改時的通知.)",

'comments_2_customer' => "給予客戶意見:",

'comments_2_customer_desc' => "(如果您希望通知客戶，這將會在訂購狀態更改之後寄到客戶預設的Email.)",

'save_order_status' => "儲存訂購狀態",

'paid_by' => "支付方式:",

'delivered_to' => "傳遞方式:",

'invoice_reciept_for' => "發票 / 抬頭:",

'order_of_time' => "您的訂購",

'order_id' => "訂購單號:",

'digi_goods_desc' => "如果您訂購了數位商品，那將會收到一封信件，裡面包含了下載說明. 您也可以從客戶管理中心去取得進入.",

'thank_you' => "謝謝您的惠顧!",

);



$lang['admin']['products'] = array (

'show_featured' => "顯示在首頁的的最新商品嗎?",

'upload_new_images' => "上傳圖檔",

'no_images_avail' => "抱歉，目前沒有圖片可供觀賞.",

'prod_added_to_cat' => "商品增加於分類.",

'prod_not_added_to_cat' => "商品增加於分類失敗.",

'prod_removed_from_cat' => "商品從分類中移除.",

'prod_not_removed_from_cat' => "商品從分類中移除失敗.",

'title_extraCats' => "分類管理",

'manage_cats' => "管理分類",

'master_cat' => "主分類:",

'close_window' => "關閉視窗",

'img_added_to_prod' => "圖檔增加到商品.",

'img_not_added_to_prod' => "圖檔增加到商品失敗.",

'img_removed' => "商品中移除圖檔.",

'img_not_removed' => "商品中移除圖檔失敗..",

'image_management' => "圖檔管理",

'manage_images' => "管理圖檔",

'image' => "圖檔",

'action' => "動作",

'delete_success' => "刪除完成.",

'delete_fail' => "刪除失敗.",

'update_successful' => "更新完成.",

'update_fail' => "更新分類失敗.",

'add_success' => "增加完成.",

'add_fail' => "增加分類失敗.",

'prod_inventory' => "商品存貨",

'current_prods_in_db' => "下列列出資料庫中所有商品.",

'all_cats' => "所有分類",

'prod_name' => "商品名稱",

'prod_id' => "商品編號",

'prod_code' => "商品代碼",

'master_cat2' => "主要分類",

'title' => "標題",

'stock_level' => "庫存等級",

'normal_price' => "售價",

'sale_price' => "特價",

'asc' => "升冪排列",

'desc' => "降冪排列",

'containing_text' => "包含文字",

'filter' => "過濾",

'reset' => "重設",

'id' => "編號",

'type' => "樣式",

'name' => "名稱",

'price_sale_price' => "售價 / 特價",

'in_stock' => "庫存中",

'action' => "動作",

'languages' => "語系",

'no_products_exist' => "目前資料庫中沒有商品.",

'add_prod_desc' => "您可以從下列增加商品到清單.",

'product' => "商品",

'prod_name2' => "商品名稱:",

'prod_stock_no' => "商品/存貨號碼:",

'auto_generated' => "(留空將會自動產生.)",

'description' => "描述:",

'primary_lang' => "(主語系中其他的語系可以在之後加入.)",

'category' => "分類:",

'image2' => "圖檔:",

'opt_and_thumbs' => "(如果格式選擇相容，選項及縮圖將會自動產生.)",

'upload_new' => "上傳新圖檔",

'browse_existing' => "瀏覽已存在圖檔",

'normal_price2' => "售價:",

'sale_price2' => "特價:",

'sale_mode_desc' => "(設定後將會只在此單一商品上出現.)",

'prod_weight' => "商品重量:",

'tax_class' => "稅率:",

'stock_level2' => "庫存量:",

'reduce_stock_level' => "(這庫存量將會在商品每銷售出去一次而減少.)",

'use_stock_q' => "使用庫存量?",

'product_type' => "商品樣式:",

'tangible' => "有實體",

'digital' => "純數位",

'digi_path' => "數位商品必須填入 HTTP 連結路徑或檔案路徑 (見下方).",

'digi_info' => "數位資訊:",

'digi_desc' => "<p><strong>HTTP 路徑:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong>檔案路徑 :</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(建議!)							</strong></p>

<p>建議將檔案放置在主機中一個開放的資料中. 如果您選擇檔案路徑的模式，購物車將會自動建議一個下載連結點並且有到期時間與下載次數的限制，您可以在商店設定中更改.</p>",

'prod_inv_langs' => "商品目錄 - (其他語系)",

'use_rich_oth_lang' => "請使用多功能編輯器來加入或編輯於其他語系.",

'language' => "語系:",

'update_prod_lang' => "更新商品語系",

'save_prod_lang' => "儲存商品語系",

'other_langs_exdefault' => "下列列出所有商品語系.",

'no_lang_exist' => "資料庫中沒有其他語系存在於此商品中.",

'opt_add_success' => "選項名稱增加.",

'opt_add_fail' => "選項名稱增加失敗.",

'att_add_success' => "選項屬性增加.",

'att_add_fail' => "選項屬性增加失敗.",

'assign_success' => "選項指定到商品.",

'assign_fail' => "選項指定到商品失敗.",

'product_options' => "商品選項",

'product_option' => "商品選項",

'quick_assign' => "快速指定:",

'prod_opts_of' => "商品選項",

'to' => "到",

'go' => "確定",

'opt_step1' => "1. 建立選項 (例. 顏色)",

'opt_id' => "編號",

'opt_name' => "選項名稱",

'warn_remove_opt' => "您確定要刪除此選項名稱? \n\n警告！刪除會將所有商品選項及選項屬性一併刪除！",

'no_options_made' => "沒有商品選項名稱產生.",

'option' => "選項",

'opt_step2' => "2. 建立選項值 (例. 紅色)",

'option_attributes' => "選項屬性",

'warn_remove_att' => "您確定要刪除此選項屬性? \n\n警告！刪除會將所有商品選項及選項屬性一併刪除！",

'no_attributes_made' => "沒有商品選項屬性產生.",

'attribute' => "屬性",

'opt_step3' => "3. 指定選項 &amp; 到商品 (例. T恤 &gt; 顏色 &gt; 紅色)",

'option_attribute' => "選項屬性",

'option_price' => "選項價格",

'add_subtract' => "增加 / 減少",

'remove_opt_prod' => "您確定要從此商品中移除此選項?",

'no_assigned_opts' => "沒有選項可指定商品.",

'prods_made_1st' => "商品必須在選項建立後增加.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Enable Script/Bot Flood Control?</strong><br />
Forces users to enter a code on registration, tell a friend etc to prevent bot's from spamming the store.",

//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'smtpHost' => "SMTP 主機:",

'defaultHost' => "(預設: localhost)",

'smtpPort' => "SMTP 埠:",

'defaultPort' => "(預設: 25)",

'smtpAuth' => "使用者認證?",

'defaultAuth' => "(預設: 否)",

'smtpUsername' => "SMTP 帳號:",

'smtpPassword' => "SMTP 密碼:",

//////////////////////////////////////////
// END: Added in 3.0.3
//////////////////

'show_latest' => "首頁顯示最新商品?",

'no_latest' => "顯示最新商品數量:",

'off_line_settings' => "離線設定",

'off_line' => "關閉商店?",

'off_line_content' => "離線訊息:",

'off_line_allow_admin' => "允許管理者離線時可以瀏覽商店? (必須有管理會期)",


'store_settings' => "商店設定",

'edit_below' => "請在下方編輯您的商店設定:",

'meta_data' => "定義資料",

'browser_title' => "瀏覽器標題:",

'meta_desc' => "定義描述:",

'meta_keywords' => "定義關鍵字:",

'comma_separated' => "(逗號分隔)",

'store_co_name' => "商店/公司名稱:",

'store_address' => "商店地址:",

'country' => "國家:",

'zone' => "縣市/鄉鎮/區域:",

'dirs_folders' => "目錄 &amp; 資料夾",

'rootRel' => "根開放HTML目錄:",

'include_slash' => "(尾部包含 / )",

'storeURL' => "完整商店網址:",

'eg_domain_com' => "例. http://www.domain.com",

'rootDir' => "主機相對路徑:",

'eg_root_path' => "例. /path/to/your/webstore",

'rootRel_SSL' => "根開放安全HTML目錄:",

'storeURL_SSL' => "主機安全相對路徑:",

'eg_domain_SSL' => "例. https://secure.domain.com",

'rootDir_SSL' => "主機安全相對路徑:",

'eg_root_path_secure' => "例. /path/to/your/secure/webstore",

'enable_ssl' => "開啟 SSL:",

'ssl_warn' => "(警告: 當您送出之後更改會立即套用. 請確定您的安全根目錄和安全網址正確並可運作)",

'digital_downloads' => "數位下載",

'download_expire_time' => "下載期限:",

'seconds' => "(秒)",

'download_attempts' => "下載次數:",

'attempts_desc' => "(客戶可下載商品的次數.)",

'styles_misc' => "樣式 &amp; 雜項",

'default_language' => "預設語系:",

'store_skin' => "商店樣式:",

'no_cats_per_row' => "每列分類數:",

'dir_symbol' => "目錄超連結:",

'prods_per_page' => "每頁商品數",

'precis_length' => "商品簡介長度:",

'chars' => "(字)",

'no_sale_items' => "特價商品中顯示數量:",

'no_pop_prod' => "熱賣商品中顯示數量:",

'email_name' => "Email 名稱:",

'email_name_desc' => "(這是網站寄出信件所顯示的名稱.)",

'email_address' => "Email 位置:",

'email_address_desc' => "(這是網站寄出所使用的Email位置.)",

'mail_method' => "郵件寄送模式:",

'mail_recommended' => "(建議使用SMTP)",

'max_upload_size' => "最大上傳容量:",

'under_x_recom' => "(建議在 2048KB 以內)",

'max_sess_length' => "最大會期長度:",

'db_settings' => "資料庫設定",

'db_host' => "資料庫位置:",

'db_username' => "資料庫帳號:",

'db_password' => "資料庫密碼:",

'db_name' => "資料庫名稱:",

'db_prefix' => "資料庫前綴:",

'gd_settings' => "GD 設定",

'gd_ver' => "GD 版本:",

'gd_thumb_size' => "縮圖尺寸:",

'gd_gif_support' => "支援 GIF: (請確定這個功能在您的主機是開啟的)",

'gd_max_img_size' => "最大圖檔尺寸:",

'gd_img_quality' => "GD 圖檔品質:",

'recom_quality' => "(建議 60 - 80)",

'stock_settings' => "庫存設定",

'use_stock' => "顯示庫存量?",

'allow_out_of_stock_purchases' => "允許超出庫存量?",

'weight_unit' => "寬度單位:",

'time_and_date' => "時間 &amp; 日期",

'time_format' => "時間格式:",

'time_format_desc' => "(請見 <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "時間設定:",

'time_offset_desc' => "(秒 - 使用於當主機的時間不同時)",

'date_format' => "日期格式:",

'date_format_desc' => "(請見 <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "當地化設定",

'default_currency' => "預設幣值",

'inc_tax_prices' => "價格含稅?",

'sale_mode' => "特價模式:",

'percent_of_all' => "所有價格打折",

'ind_sale_per_item' => "商品個別給予特惠價",

'sale_mode_off' => "特價模式關閉",

'sale_per_off' => "特價折數關閉:",

'sale_per_off_desc' => "(打折將會設定所有價格)",

'diff_dispatch' => "允許送貨地址與發票地址不相同嗎?",

'update_settings' => "更新設定",

'update_success' => "更新完成.",

'update_fail' => "更新失敗.",

'add_success' => "新增成功 ",

'add_fail' => "增加失敗.",

'delete_success' => "刪除完成.",

'delete_failed' => "刪除失敗.",

'currencies' => "貨幣",

'currency' => "貨幣",

'currencies_desc' => "請在下方編輯或刪除貨幣:",

'c_code' => "代碼",

'c_name' => "名稱",

'c_value' => "值",

'symbol_left' => "左方符號",

'symbol_right' => "右方符號",

'decimal_places' => "價格小數位",

'last_updated' => "最後更新",

'c_status' => "狀態",

'no_currencies' => "資料庫中沒有貨幣資料.",

'countries' => "貨幣",

'country' => "貨幣",

'edit_countries_below' => "請在下方編輯或刪除貨幣:",

'disable' => "關閉",

'enable' => "啟用",

'iso' => "ISO",

'iso_name' => "名稱",

'iso3' => "ISO3",

'num_code' => "數量代碼",

'action' => "動作",

'warn_del_country' => "您確定要刪除? 所有國家, 縣市和區域將會在此之前被刪除.",

'no_countries_in_db' => "資料庫中目前沒有國家.",

'edit_counties' => "請在下方編輯或刪除縣市/區域/地方:",

'no_counties_in_db' => "資料庫中沒有國家, 縣市或區域.",

'tax_Settings' => "稅率設定",

'edit_locale_below' => "請在下方設定您的當地化設定:",

'tax_only_to' => "下列區域中套用稅率:",

'manage_tax_below' => "請在下方管理您不同的稅率方式. 這將會套用到每個商品，所以您會有個稅率範例商品及不同的稅率在不同的商品樣式.",

'tax_class2' => "稅率分類",

'rate_per' => "比例 (%)",

'no_taxes_setup' => "抱歉目前沒有稅率設定.",

'tax' => "稅金",

);



$lang['admin']['stats'] = array(

'store_stats' => "商店統計",

'choose_view' => "請選擇您所要查看的各種統計:",

'search_terms' => "搜尋字串",

'product_pop' => "熱門商品",

'cust_online' => "線上客戶",

'search_terms_order_by' => "搜尋字串 (排列依照搜尋次數)",

'sorry_no_data' => "抱歉目前沒有資料可以顯示.",

'product_pop_ordered_by' => "熱門商品  (排列依照點閱次數)",

'cust_active' => "最近 15 分鐘曾在商店的客戶.",

'hash' => "#",

'customer' => "客戶",

'location' => "位置",

'sess_start_time' => "會期開始時間",

'last_click_time' => "最後點選時間",

'sess_length' => "會期長度",

'geust' => "訪客",

'signed_in' => "登入",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "警告: 主要設定檔 'includes/global.inc.php' 是可寫入的，您的商店正處於風險. 請立即將權限設定成 0644.",

'401' => "錯誤 401: 您沒有登入此頁面的權限. 請詢問客服人員來授權給您.",

'welcome_note' => "歡迎來到 CubeCart 後端管理控制介面",

'last_login' => "最後登入於 ",

'by' => "由",

'failed' => "失敗.",

'store_overview' => "商店預覽:",

'version' => "版本:",

'visit_cc' => "瀏覽 CubeCart 下載主機",

'no_products' => "總計商品數量:",

'no_customers' => "總計客戶數量:",

'img_upload_size' => "已上傳圖檔容量:",

'no_orders' => "訂購單數量:",

'quick_search' => "快速搜尋:",

'order_no' => "訂單編號:",

'search_now' => "立即搜尋",

'customer' => "客戶:",

'login_failed' => "登入失敗! 帳號或密碼錯誤.",

'new_pass_sent' => "新密碼將會寄給",

'no_admin_sess' => "沒有任何管理會期.",

'login_fail_2' => "登入失敗. 請再試一次.",

'login_below' => "請登入:",

'username' => "帳號:",

'password' => "密碼:",

'request_pass' => "請求密碼",

'login' => "登入",

'logout_failed' => "沒有管理會期，登出失敗.",

'reset_pass_email' => "親愛的 %s,

您, 或者某些人正嘗試重新取得新密碼.

您的登入資料如下:

~~~~~~~~~~~~~~~~~~~~~~~~~~
帳號: %s
密碼: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

此郵件由此 %s/admin/requestPass.php 發出\n

發送者IP位置: %s",

'pass_reset_failed' => "密碼重置失敗.",

'enter_email_below' => "請在下方輸入您的Email位置:",

'email_address' => "Email位置:",

'send_pass' => "傳送密碼",

);



$lang['admin']['nav'] = array(

'permission_error' => "您沒有權限.",

'navigation' => "導覽",

'admin_home' => "管理首頁",

'store_home' => "商店首頁",

'store_config' => "商店設定",

'gen_settings' => "一般設定",

'taxes' => "稅率",

'countries_zones' => "國家 &amp; 區域",

'currencies' => "貨幣",

'modules' => "模組",

'shipping' => "快遞",

'gateways' => "閘道",

'affiliates' => "關係",

'catalog' => "目錄",

'view_products' => "檢視商品",

'add_product' => "新增商品",

'product_options' => "商品選項",

'view_categories' => "檢視分類",

'add_categories' => "新增分類",

'customers' => "客戶",

'view_customers' => "檢視客戶",

'email_customers' => "Email給客戶",

'orders' => "訂購",

'file_manager' => "檔案管理",

'manage_images' => "管理圖檔",

'upload_images' => "上傳圖檔",

'statistics' => "統計",

'view_stats' => "檢視統計",

'documents' => "文件",

'homepage' => "首頁",

'site_docs' => "網站文件",

'misc' => "雜項",

'server_info' => "主機訊息",

'admin_users' => "管理使用者",

'administrators' => "管理員",

'admin_sessions' => "管理會期",

);



$lang['admin']['incs'] = array(

'administration' => "管理員",

'logged_in_as' => "目前登入:",

'logout' => "登出",

'change_pass' => "更改密碼",

'error_editing' => "嘗試編輯錯誤. 輸入資料不是陣列.",

'config_updated' => "設定更新完成. 請確定檔案權限已經設定正確.",

'cant_write' => "無法開啟 '%s' 檔案寫入. 嘗試 CHMOD 權限成 0777. 請記得結束後更改回 0644 !",

'db_config_updated' => "更新完成.",

'db_cant_write' => "更新失敗!",

'select_above' => "選擇之前",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "是";

$lang['front']['no'] = "否";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "常用連結",

'reg_and_checkout' => "註冊 &amp; 結帳",

'cont_shopping' => "繼續購物",

'edit_del_add' => "編輯寄貨地址",

'edit_inv_add' => "編輯發票地址",

'empty_cart' => "清空訂購",

'prev_page' => "上一頁",

'homepage' => "首頁",

'shop_by_cat' => "分類購物",

'sale_items' => "特價商品",

'save' => "特價",

'currency' => "貨幣",

'information' => "訊息",

'products' => "商品:",

'categories' => "分類:",

'prices' => "價格:",

'language' => "語言",

'mailing_list' => "電子報",

'subscribe_below' => "訂閱我們的電子報:",

'email' => "Email:",

'join_now' => "現在加入",

'already_subscribed' => "Email 位置 %s 已經完成訂閱並加入到我們的電子報，如果需要取消訂閱請登入到您的帳戶.",

'enter_valid_email' => "請輸入正確的 Email 位置.",

'added_to_mail' => "謝謝您, %s 已經加入到我們的電子報.",

'subscribed_to_mail' => "謝謝您, %s 已經訂閱我們的電子報",

'popular_products' => "熱門商品",

'featured_prod' => "特優商品",

'sale_items' => "特價商品",

'search_for' => "搜尋:",

'go' => "確定",

'welcome_back' => "歡迎回來",

'logout' => "登出",

'your_account' => "個人資料",

'welcome_guest' => "歡迎訪客",

'login' => "登入",

'register' => "註冊",

'shopping_cart' => "購物車",

'basket_empty' => "您的購物車是空的.",

'items_in_cart' => "已選購項目:",

'total' => "總計:",

'view_basket' => "檢視購物車",

);



$lang['front']['account'] = array(

'your_account' => "您的帳戶",

'personal_info' => "個人資料",

'order_history' => "訂購記錄",

'change_password' => "更改密碼",

'newsletter' => "電子報",

'login_to_view' => "您必須先登入才能檢視此頁.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "您輸入的密碼不正確.",

'conf_not_match' => "您重複輸入的密碼與您新密碼不相符.",

'change_pass' => "更改密碼",

'password_updated' => "謝謝您, 您的密碼已經更新.",

'change_pass_below' => "請在下方更改您的密碼:",

'old_pass' => "舊密碼:",

'new_pass' => "新密碼:",

'confirm_pass' => "重複新密碼:",

'submit' => "送出",

);



$lang['front']['dnExpire'] = array(

'sorry' => "抱歉",

'expired' => "下載位置已經過期或者是不正確的.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "忘記密碼",

'email' => "Email:",

'send_pass' => "傳送密碼",

'reset_email' => "親愛的 %s %s,

您, 或者某些人正嘗試重新取得新密碼. 您的新登入資料如下:

~~~~~~~~~~~~~~~~~~~~~~~~~~
帳號: %s
密碼: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
登入請由下列網址進入:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

Email寄送來自 %s
發送者 IP 位置: %s",

'new_pass_sent' => "新密碼已經寄給 %s.",

'email_not_found' => "抱歉，沒有此 Email 信箱資料.",

'enter_email' => "請在下方輸入您的Email信箱，系統將會寄送臨時密碼給您:",

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

'newOrderMsg' => "客戶新訂購 %s, 請由此連結檢視訂購: \n\n%s",

'newOrderSubj' => "商店新訂購",

'payment' => "付費選項",

'cart' => "檢視購物車",

'address' => "地址設定",

'payment' => "付費選項",

'complete' => "完成！",

'fill_out_below' => "請輸入以下資料:",

'transferring' => "轉換到支付",

'go_now' => "現在前往!",

'continue' => "繼續",

'choose_method' => "請選擇您常用的付款方式:",

'your_comments' => "您的意見:",

'none_configured' => "抱歉，沒有任何付款方式設定.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "登入",

'username' => "Email:",

'password' => "密碼:",

'remember_me' => "記住我?",

'forgot_pass' => "忘記了密碼?",

'login_success' => "您已經登入完成.",

'already_logged_in' => "您目前已經登入.",

'login_failed' => "登入失敗!",

'login_below' => "請登入:",

);



$lang['front']['index'] = array(

'latest_products' => "最新商品",

);



$lang['front']['logout'] = array(

'logout' => "登出",

'session_destroyed' => "您的紀錄已經消除.",

'no_session' => "沒有紀錄可以消除. 看起來您已經意外的結束.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "電子報設定",

'prefs_updates' => "您的電子報設定已經更新.",

'edit_prefs_below' => "請在下方設定您的電子報:",

'subscribe' => "訂閱電子報?",

'email_format' => "電子報格式:",

'plain_text' => "純文字",

'html' => "HTML",

'html_abbr' => "網頁語法",

'update' => "更新",

'login_required' => "您必須先登入才能檢視此頁面",

);



$lang['front']['noShip'] = array(

'sorry' => "抱歉",

'desc' => "我們無法將商品送達您的國家.",

);



$lang['front']['overWeight'] = array(

'sorry' => "抱歉",

'desc' => "我們無法送達此物品(重量).",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "電話號碼必須是數字.",

'complete_all' => "請確定所有的資料都有填齊.",

'email_invalid' => "請輸入一個有效的Email信箱.",

'numeric_only' => "電話號碼必須是數字.",

'email_inuse' => "抱歉，此Email信箱已經被使用.",

'update_email' => "親愛的 %s %s,

此信件是通知您的個人資料已經更新完成. 如果您覺得您的帳號更新是由別人動作的請立即與我們的客服人員聯絡.\n\n

此信件來自 %s\n

發送人 IP 位置: %s",

'update_email_subj' => "個人資料更新",

'personal_info' => "個人資料",

'account_updated' => "您的帳號已經更新. 如果您想再編輯，請在下方處理.",

'edit_below' => "請在下方編輯您的個人訊息:",

'title' => "稱呼:",

'first_name' => "名字:",

'last_name' => "姓名:",

'email' => "Email:",

'address' => "地址:",

'town' => "鄉鎮:",

'county' => "縣/市:",

'postcode' => "郵遞區號:",

'country' => "國家:",

'phone' => "聯絡電話:",

'mobile' => "手機:",

'update_account' => "更新帳號",

'login_required' => "您必須先登入才能檢視此頁面.",

);



$lang['front']['reg'] = array(

'fill_required' => "請確定所有資料都有填寫.",

'pass_not_match' => "請確定您輸入的密碼相符.",

'enter_valid_email' => "請輸入有效正確的Email信箱.",

'enter_valid_tel' => "電話號碼必須是數字.",

'email_in_use' => "抱歉，Email信箱已經使用中.",

'note_required' => "請注意，資料欄位上有 (*) 表示為必須填寫的欄位.",

'express_reg' => "快速註冊",

'submit_and_cont' => "送出 &amp; 繼續",

'personal_details' => "個人明細",

'address' => "地址",

'title' => "稱呼:",

'title_desc' => "(小姐/先生)",

'first_name' => "名字:",

'address2' => "地址:",

'last_name' => "姓氏:",

'email_address' => "Email 位置:",

'town' => "鄉鎮:",

'phone' => "電話:",

'county' => "縣市:",

'mobile' => "手機:",

'country' => "國家:",

'postcode' => "郵遞區號:",

'security_details' => "安全明細",

'choose_pass' => "選擇密碼:",

'conf_pass' => "確定密碼:",

'privacy_settings' => "隱私設定",

'receive_emails' => "我希望收到來自商店的Email",

'email_format' => "Email格式:",

'styled_html' => "網頁模式",

'plain_text' => "純文字",

'tandcs' => "使用協議",

'please_read' => "請確定已閱讀",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "親愛的 %s,

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~
觀看此商品請點選下列網址:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

信件發送來自 %s
寄件者 IP 位置: %s",

'email_subject' => "訊息來自: %s",

'tellafriend' => "告訴朋友",

'message_sent' => "謝謝您, 您已經寄給 <strong>%s</strong> 有關 '%s' 的訊息. 如果您希望也寄給其他朋友請見:",

'fill_out_below' => "請由此告知您的朋友有關 '%s' 訊息.",

'friends_name' => "朋友名稱:",

'friends_email' => "朋友Email:",

'your_name' => "您的名稱:",

'your_email' => "您的Email:",

'message' => "留言:",

'default_message' => "我找到 '%s' 這件商品，我想您應該會有興趣.",

'send' => "送出",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "取消訂閱 ",

'email' => "Email:",

'go' => "確定",

'enter_valid_email' => "請輸入有效正確的Email信箱.",

'email_removed' => "謝謝您, <strong>%s</strong> 已經從我們電子報名單中移除.",

'email_not_found' => "抱歉, <strong>%s</strong> 不在我們電子報名單中，可能已經取消訂閱.",

'enter_email_below' => "請在下方輸入您的信箱以便取消訂閱:",

);



$lang['front']['viewCat'] = array(

'search_results' => "搜尋結果",

'sale_items' => "特價商品",

'image' => "圖檔",

'description' => "描述",

'price' => "價格",

'products_in' => "商品:",

'buy' => "立即買",

'more' => "詳細內容",

'out_of_stock' => "超出庫存",

'no_products_match' => "抱歉, 沒有相符合的商品:",

'no_prods_in_cat' => "目前沒有相關商品.",

);



$lang['front']['viewDoc'] = array(

'error' => "錯誤",

'does_not_exist' => "文件不存在.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "訂購編號:",

'customer_info' => "客戶資料:",

'invoice_address' => "發票地址:",

'delivery_address' => "送貨地址:",

'na' => "無",

'customer_comments' => "客戶意見:",

'order_summary' => "訂購大綱:",

'product' => "商品",

'product_code' => "商品代碼",

'quantity' => "數量",

'price' => "價格",

'download_here' => "這裡下載",

'review_below' => "請在下方預覽訂購:",

'order_date_time' => "訂購日期/時間:",

'payment_method' => "付款方式:",

'ship_method' => "提貨方式:",

'subtotal' => "小計:",

'total_tax' => "總計稅金:",

'shipping' => "快遞:",

'grand_total' => "總計金額:",

'order_not_found' => "找不到訂購號碼.",

'login_required' => "您必須登入後才能檢視此頁面.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "您的訂購",

'orders_listed_below' => "帳號中所有的訂購清單如下:",

'order_no' => "訂購編號",

'status' => "狀態",

'date_time' => "日期/時間",

'action' => "動作",

'view' => "檢視",

'no_orders' => "我們系統中找不到記錄. 如果您發覺有問題請第一時間立即與我們客服人員聯絡.",

'login_required' => "您必須登入後才能檢視此頁面.",

);



$lang['front']['viewProd'] = array(

'product' => "商品",

'product_info' => "商品資訊",

'price' => "價格:",

'product_code' => "商品代碼:",

'tellafriend' => "告訴朋友這個商品",

'quantity' => "數量:",

'more_images' => "[+] 更多圖檔",

'add_to_basket' => "放入購物車",

'location' => "位置:",

'no_instock' => "庫存:",

'instock' => "庫存中",

'out_of_stock' => "超出庫存",

'prod_opts' => "商品選項:",

'prod_not_found' => "找不到此商品.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "您的購物車目前是空的.",

'allready_customer' => "您已經是客戶?",

'login_below' => "請先登入:",

'username' => "Email:",

'password' => "密碼:",

'remember_me' => "記住我?",

'login' => "登入",

'forgot_pass_q' => "忘記了密碼?",

'need_register' => "現在申請?",

'express_register' => "現在就註冊！十分快速簡單！",

'reg_and_cont' => "註冊 &amp; 繼續",

'cont_shopping_q' => "繼續購物?",

'cont_shopping' => "繼續購物",

'cont_browsing' => "如果希望以訪客身份繼續瀏覽, 請點選下方按鈕. 注意: 您必須先註冊才能完成購物流程.",

);





$lang['front']['cart'] = array(

'free_shipping' => "免運費",

'view_cart' => "檢視購物車",

'cart' => "檢視購物車",

'address' => "地址設定",

'payment' => "付費選項",

'complete' => "完成！",

'add_more' => "想要買更多？直接輸入商品代碼:",

'add' => "增加",

'qty' => "數量",

'product' => "商品",

'code' => "代碼",

'stock' => "庫存",

'price' => "單價",

'line_price' => "小計",

'delete' => "刪除",

'remove' => "移除項目",

'invoice_address' => "發票地址",

'delivery_address' => "送貨地址",

'title' => "稱呼:",

'first_name' => "名字:",

'last_name' => "姓氏:",

'address2' => "地址:",

'town' => "鄉鎮:",

'county' => "縣市:",

'postcode' => "郵遞區號:",

'country' => "國家:",

'edit_invoice_address' => "編輯發票地址",

'edit_delivery_address' => "編輯送貨地址",

'stock_warn' => "您訂購了多個項目超出我們目前可供應的數量. 您的訂購將會延遲直到我們庫存更新.",

'amount_capped' => "抱歉，我們目前庫存量不足您所訂購的數量，暫時將您的數量調整為庫存最大值.<br />安全庫存量為 ",

'na' => "無",

'shipping' => "運費:",

'tax' => "稅率:",

'subtotal' => "小計:",

'cart_total' => "總計:",

'if_changed_quan' => "(如果您有更改購買數量)",

'update_cart' => "更新購物車",

'continue' => "繼續",

'cart_empty' => "您的購物車目前是空的.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "確認畫面",

'cart' => "購物車",

'address' => "地址",

'payment' => "支付",

'complete' => "完成",

'order_success' => "謝謝您, 您的訂購已經完成! 歡迎再次光臨.",

'order_fail' => "抱歉, 您的購物失敗!",

'try_again_desc' => "您可以再一次嘗試購買購物車商品:",

'try_again' => "再試一次",

'request_login' => "您必須登入後才能檢視此頁面.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "親愛的 %s,

謝謝您的訂購，訂購單號: %s 於 %s

此交易完成並且我們會盡快將您的商品寄出

~~~~~~~~~~~~~~~~~~~~~~~~~~
名稱: %s
小計: %s
郵資 & 包裝: %s
稅率: %s
總計費用: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

發票地址:
%s
%s
%s
%s
%s
%s
%s

寄送地址:
%s
%s
%s
%s
%s
%s
%s

付費方式: %s
提貨方式: %s",

'inv_email_body_2' => "\n您的意見: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

購物清單:\n",

'inv_email_body_4' =>"商品: %s\n",

'inv_email_body_5' => "選項: %s\n",

'inv_email_body_6' => "數量: %s
商品代碼: %s
價格: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "訂購單號: ",

'digi_email_body1' => "親愛的 %s,

謝謝您的訂購，訂購單號: %s 於 %s

下方連結是您訂購的數位商品連結.

重要! 這個連結將會於 %s 到期而您有 %s 次的下載次數. 如果您有任何問題，請與我們聯絡並注意您的訂購號碼.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
下載位置:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "下載存取: ",

);



$lang['misc'] = array(

'pages' => " 頁 ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "客戶端瀏覽器:",

'server_software' => "主機端軟體:",

'perofOrderSub' => " % 訂購小計",

'freeForOrdOver' => "免費訂購",

'freeShipping' => "免運費",

'byWeight1stClass' => "重量 (第1順位)",

'1stClass' => "(第1順位)",

'byWeight2ndClass' => "重量 (第2順位)",

'2ndClass' => "(第2順位)",

'flatRate' => "平比例",

'free' => "免費",

'national' => "國內",

'international' => "國際",

'byCategory' => "由分類",

'perItem' => "單一項目",

'nextDayEarlyAm' => "Next Day Air Early AM",

'nextDayAir' => "Next Day Air",

'nextDayAirSaver' => "Next Day Air Saver",

'2ndDayEarlyAm' => "2nd Day Air Early AM",

'2ndDayAir' => "2nd Day Air",

'3daySelect' => "3 Day Select",

'ground' => "地面",

'canadaStandard' => "加拿大標準",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "發票抬頭",

'deliverTo' => "收件人",

'postalOrderFor' => "郵件收件人",

'orderOf' => "訂購",

'orderID' => "訂購單號:",

'product' => "商品",

'code' => "代碼",

'qty' => "數量",

'price' => "價格",

'shippingMethod' => "寄送方式:",

'subtotal' => "小計:",

'totalTax' => "總計稅金:",

'totalShipping' => "總計運費:",

'grandTotal' => "總計費用:",

'payByCheck' => "支票付款",

'payTo' => "請確定支付給",

'payByCard' => "信用卡付款",

'cardType' => "信用卡類型:",

'cardNo' => "卡號:",

'3-4DigiId' => "3-4 驗證碼:",

'expiryDate' => "到期日:",

'issueDate' => "發卡日期:",

'issueNo' => "發卡編號:",

'signature' => "簽名:",

'payByTransfer' => "銀行匯款付款",

'bankName' => "銀行名稱:",

'accountName' => "帳戶名稱:",

'sortCode' => "銀行代碼:",

'accountNo' => "帳戶號碼:",

'swiftCode' => "快速代碼:",

'bankAddress' => "銀行地址:",

'thanks' => "謝謝您的訂購!",

'postalAddress' => "郵寄地址:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "等待處理",

'2' => "進行處理",

'3' => "處理完成",

'4' => "取消交易",

'5' => "詐欺無效",

);

$lang['admin']['cats'] = array (

'delete_success' => "分類語系刪除完成.",

'delete_fail' => "刪除失敗.",

'update_fail' => "更新失敗.",

'update_success' => "更新完成.",

'add_success' => "增加完成.",

'add_fail' => "增加分類語系失敗.",

'site_cats_other_lang' => "分類 - (其他語系)",

'site_cat_other_lang' => "分類 - (其他語系)",

'cat_name' => "分類名稱:",

'language' => "語系:",

'update_cat' => "更新分類",

'save_cat' => "儲存分類",

'current_cat_list' => "下列顯示出所有目前分類語系. 這個可以隨時隨地的編輯或刪除.",

'cat_name2' => "分類名稱",

'action' => "動作",

'no_site_cats' => "這個分類名稱尚未翻譯.",

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