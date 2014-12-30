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
|	English (UK) Language File	
+--------------------------------------------------------------------------
*/

/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'en_EN');


/////////// GLOBAL ADMIN ////////////

$lang['admin']['yes'] = "Yes";

$lang['admin']['no'] = "No";

$lang['admin']['edit'] = "Edit";

$lang['admin']['delete'] = "Delete";

$lang['admin']['delete_q'] = "Are you sure you want to delete this?";

$lang['admin']['add'] = "Add";

$lang['admin']['add_new'] = "Add New";

$lang['admin']['write'] = "Write";

$lang['admin']['read'] = "Read";

$lang['admin']['na'] = "N/A"; // as in not applicable

$lang['admin']['all'] = "ALL";

$lang['admin']['remove'] = "Remove";

/////////////////////////////////////
// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Deleted successfully.",

'del_failed' => "Delete failed.",

'update_success' => "updated successfully.",

'update_fail' => "Failed to update.",

'add_success' => "added successfully.",

'add_failed' => "Failed to add user.",

'administrators_title' => "Administrators",

'current_users' => "Current admin users.",

'id' => "Id",

'user_notes' => "Username / Notes",

'no_logins' => "No Logins",

'super_user' => "Super User?",

'email' => "Email",

'action' => "Action",

'add_admin' => "You can use the form below to add an administrator.",

'full_name' => "Full Name:",

'username' => "Username:",

'administrator' => "Administrator",

'email2' => "Email:",

'password' => "Password:",

'pass_warn' => "(Only enter a password if you want to change the current one.)",

'make_super' => "Make Super User?",

'notes' => "Notes:",

'permissions' => "Permissions",

'pass_updated' => "Password updated.",

'pass_not_updated' => "Password not updated.",

'change_pass_below' => "Please change your password below:",

'old_pass' => "Old Password:",

'new_pass' => "New Password:",

'confirm_pass' => "Confirm Password:",

'perms_updated' => "Permissions updated.",

'set_perms' => "Please set the permissions for this user below.",

'section' => "Section",

'nb_bulk' => "N.B To bulk email customers the user must have write permissions under customers.",

'admin_sessions' => "Admin Sessions",

'sessions_desc' => "Below shows the last login attempts to admin. Keep an eye on this to ensure that there are no Hijacking attempts. It is strongly recommend that you change you admin password regularly.",

'login_id' => "Login ID",

'time' => "Time",

'ip_address' => "IP Address",

'success' => "Success",

);



$lang['admin']['categories'] = array (

'delete_success' => "Deleted successfully.",

'delete_fail' => "Delete failed.",

'update_success' => "updated successfully.",

'update_fail' => "Failed to update category.",

'add_success' => "added successfully.",

'add_failed' => "Failed to add category.",

'categories' => "Categories",

'categories_desc' => "Below is a list of all the current categories in the database.",

'cat_name' => "Category Name",

'dir' => "Directory",

'image' => "Image",

'no_products' => "No Products",

'action' => "Action",

'cannot_del' => "This category cannot be deleted as it contains products.",

'no_cats_exist' => "No categories exist in the database.",

'add_desc' => "You can add categories with unlimited subcategories, upload new images or recycle images already on the server.",

'category' => "Category",

'category_name' => "Category Name:",

'category_level' => "Category Level:",

'top_level' => "Top Level",

'image_optional' => "Image: (Optional)",

'upload_new_image' => "Upload New Image",

'browse_existing' => "Browse Existing Images",

'ship_by_cat' => "Shipping by Category",

'per_ship' => "Per Shipment:",

'per_item' => "Per Item:",

'per_int_ship' => "Per International Shipment:",

'per_int_item' => "Per International Item:",

);



$lang['admin']['customers'] = array (

'customers' => "Customers",

'delete_success' => "Deleted successfully.",

'delete_fail' => "Delete failed.",

'update_success' => "Customer updated successfully.",

'update_fail' => "Failed to update customer.",

'search_term' => "Search Term:",

'reset' => "Reset",

'name' => "Name",

'email' => "Email",

'invoice_add' => "Invoice Address",

'phone' => "Phone",

'reg_ip' => "Reg Date / IP Address",

'no_orders' => "No Orders",

'action' => "Action",

'no_cust_exist' => "No customers exist in the database.",

'edit_below' => "Please edit this customer below:",

'title' => "Title",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'email2' => "Email:",

'address' => "Address:",

'town' => "Town:",

'county' => "County/State:",

'postcode' => "Postcode:",

'country' => "Country:",

'phone2' => "Phone:",

'edit_customer' => "Edit Customer",

'no_download_email' => "There were no emails to download.",

'email_customers' => "Email Customers",

'create_email' => "Please create your email below:",

'hint' => "Hint:",

'click_source' => "You can click the source button above an paste in a html document you have already made.",

'important' => "Important:",

'absolute_links' => "Ensure all images and links are absolute (i.e. contain the domain name). In most countries it is a legal obligation to provide an unsubscribe link:",

'email_subject' => "Email Subject:",

'senders_name' => "Senders Name:",

'senders_email' => "Senders Email:",

'return_path' => "Return Path:",

'bounce_desc' => "(The return path bounced emails go to.)",

'send_test' => "Send Test Email?",

'test_email_recip' => "Test Email Recipient:",

'send_email' => "Send Email",

'download_or_send' => "Please choose whether to download customers email addresses or to send a bulk email through this website.",

'please_choose' => "Please choose:",

'used_to_download' => "This is used to download email address to be used in bulk email software.",

'bulk_to_subscribed' => "This allows you to send a bulk email ONLY to those who have subscribed to the mailing list through this website.",

'include_name' => "Include Name?",

'download_email' => "Download Email",

'send_email' => "Send Email",

'sending_complete' => "Sending Complete",

'sending' => "Sending Email",

'recipient' => "Recipient:",

'prev_page' => "Previous Page",

'page' => "Page:",

'bulk_finished' => "The bulk emailer has completed its task successfully.",

'time_taken' => "Time taken:",

'recipients' => "Recipients:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Homepage was not updated please ensure file permissions of includes/static/home.inc.php are correct.",

'update_success' => "Homepage updated successfully.",

'homepage' => "Homepage",

'enabled' => "Enabled:",

'enabled_desc' => "(If this is disabled the default language will be used instead.)",

'language' => "Language:",

'title' => "Title:",

'use_rich_text' => "Please use the rich text editor below to make changes to the homepage of the website. On saving changes take place immediately so please be sure to preview the changes first.",

'update_homepage' => "Update Homepage",

'delete_success' => "Document deleted successfully.",

'delete_fail' => "Delete failed.",

'update_success' => "updated successfully.",

'update_fail' => "was not updated.",

'add_success' => "added successfully.",

'add_fail' => "Failed to add document.",

'site_docs_other_lang' => "Site Documents - (Other Languages)",

'use_rich_text' => "Please use the rich text editor below to add or edit site documents in other languages.",

'site_doc_other_lang' => "Site Document - (Other Languages)",

'doc_name' => "Document Name:",

'language' => "Language:",

'update_doc' => "Update Document",

'save_doc' => "Save Document",

'current_doc_list' => "Below is a list of all the current site documents. You may have an unlimited amount of these and they can be edited and/or deleted at any time.",

'doc_name2' => "Document Name",

'action' => "Action",

'no_site_docs' => "There are no site documents in the database.",

'site_docs' => "Site Documents",

'site_doc' => "Site Document",

'languages' => "Languages",

'no_docs' => "There are no site documents in the database.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Image Browser",

'file' => "File:",

'no_imgs' => "No images are available. Please close this window and upload an image instead.",

'preview' => "Preview:",

'ok' => "OK",

'cancel' => "Cancel",

'prod_cat_use_img' => "There are product or categories using the image '%s'.",

'continue_q' => "CONTINUE TO DELETE?",

'site_doc_use_img' => "There are site documents using the image '%s'.",

'home_use_img' => "The image '%s' is used on the site homepage.",

'gallery_use_img' => "The image '%s' is used in a product image gallery.",

'image_deleted' => "Image deleted.",

'delete_failed' => "Delete failed.",

'image_manager' => "Image Manager",

'delete_from_server' => "Below you can delete images from the server.",

'img_click_prev' => "Image (Click to Preview)",

'size' => "Size",

'action' => "Action",

'no_images_added' => "No images have been added.",

'prev_file' => "Preview File",

'close_window' => "Close Window",

'no_image_selected' => "No image was selected to preview.",

'file_uploader' => "File Uploader",

'upload_image' => "Upload Image",

'please_browse_img' => "Please browse for your image:",

'file_too_big' => "Error: %s is over %s",

'img_already_exists' => "Error: %s already exists please rename the file you are attempting to upload or browse for this file instead.",

'upload_too_large' => "Error: You did not browse for an image to upload or the file was too large for the server. The default maximum upload limit is 2MB.",

'not_valid_mime' => "Error: %s is not a valid image type.",

'image_upload_success' => "Success: %s uploaded.",

'back' => "&laquo; Back",

);



$lang['admin']['misc'] = array (

'license_form' => "License Form",

'write_error' => "Could not open includes/global.inc.php for writing. Try changing the CHMOD value to 0777. Remember to set it back to 0644 afterwards!",

'try_again' => "Try Again",

'purchase_cubecart' => "Purchase CubeCart:",

'invalid_key' => "Sorry but the license key was invalid or has already been used.",

'purchase_license_key' => "Purchase License Key",

'run_unlicensed' => "You appear to be running an unlicensed version of CubeCart. Please enter your license key below in order to remove copyright.",

'license_key' => "License Key:",

'submit_key' => "Submit Key",

'server_info' => "Server Info",

'ini_set_desc' => "The information below shows your current server environment settings. This contains all kinds of information  which may need to be changed if you are experiencing problems with CubeCart. N.B. If you have a shared server or virtual hosting it is likely that you will have limited access to modify settings. The</span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> function can often be used to override these settings.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "The status of this order has been changed successfully. At this stage you can send your customer an email invoice and access to download digital products. To do this ",

'click_here' => "Click Here",

'send_invoice_desc' => "If status is changed from Pending to Processing you will get the option to send the customer an invoice receipt and grant access to digital products if applicable.",

'delete_success' => "Deleted successfully.",

'delete_fail' => "Delete failed.",

'orders' => "Orders",

'all_orders' => "Below are all orders stored in the database.",

'order_no' => "Order No",

'status' => "Status",

'date_time' => "Date/Time",

'customer' => "Customer",

'ip_address' => "IP Address",

'cart_total' => "Basket Total",

'action' => "Action",

'no_orders_in_db' => "There are no orders in the database.",

'order_email' => "Dear %s,\n\nThe status of your order id: %s has been changed to %s\n\n",

'email_staff_comments' => "Our staff have added the following comments:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "This email was automatically sent from %s",

'email_subj_status_change' => "Order Status Change:",

'order_no2' => "Order No:",

'print_packing_slip' => "Print Packing Slip",

'customer_info' => "Customer Info",

'invoice_address' => "Invoice Address:",

'delivery_address' => "Delivery Address:",

'contact_info' => "Contact Information:",

'tel' => "Tel:",

'mobile' => "Mobile:",

'email' => "Email:",

'customer_comments' => "Customer Comments:",

'no_comments_left' => "No comments were left.",

'order_summary' => "Order Summary",

'product' => "Product",

'code' => "Code",

'quantity' => "Quantity",

'price' => "Price",

'download_link' => "Download Link:",

'warn_reset' => "This will set the amount of downloads to zero and extend the expiry time.",

'reset_link' => "Reset Link",

'download_stats' => "Downloaded (%s) times. Link Expire Time %s",

'ip_address2' => "IP Address:",

'order_date_time' => "Order Date/Time:",

'payment_method' => "Payment Method:",

'ship_method' => "Shipping Method:",

'subtotal' => "Subtotal:",

'total_tax' => "Total Tax:",

'shipping' => "Shipping:",

'grand_total' => "Grand Total:",

'order_notfound' => "Order number %s could not be found.",

'order_status' => "Order Status",

'shipping_date' => "Shipping Date:",

'ship_today' => "Ship today",

'modify_status' => "Modify Status:",

'staff_comments' => "Staff Comments:",

'info_not_sent_customer' => "(This information is NOT sent to the customer!)",

'inform_customer' => "Inform customer:",

'customer_notified' => "(With this checked the customer is notified of the order status change.)",

'comments_2_customer' => "Comments to customer:",

'comments_2_customer_desc' => "(This will be added to the default email you wish to inform the customer the order state has changed.)",

'save_order_status' => "Save Order Status",

'paid_by' => "Paid by:",

'delivered_to' => "Delivered to:",

'invoice_reciept_for' => "Invoice / Receipt for:",

'order_of_time' => "Your order of",

'order_id' => "Order ID:",

'digi_goods_desc' => "If you ordered digital goods you should have received an email containing download instructions. These can also be accesed from your account control panel where you can have complete control over your account with us.",

'thank_you' => "Thank you for shopping with us!",

);



$lang['admin']['products'] = array (

'show_featured' => "Include in latest products in homepage?",

'upload_new_images' => "Upload Images",

'no_images_avail' => "Sorry there are no images available.",

'prod_added_to_cat' => "Product added to category.",

'prod_not_added_to_cat' => "Failed to add category to product.",

'prod_removed_from_cat' => "Product removed from category.",

'prod_not_removed_from_cat' => "Product not removed from category.",

'title_extraCats' => "Category Management",

'manage_cats' => "Manage Categories",

'master_cat' => "Master category:",

'close_window' => "Close Window",

'img_added_to_prod' => "Image added to product.",

'img_not_added_to_prod' => "Failed to add image to product.",

'img_removed' => "Image removed from product.",

'img_not_removed' => "Image not removed from product.",

'image_management' => "Image Management",

'manage_images' => "Manage Images",

'image' => "Image",

'action' => "Action",

'delete_success' => "Deleted successfully.",

'delete_fail' => "Delete failed.",

'update_successful' => "updated successfully.",

'update_fail' => "Failed to update category.",

'add_success' => "added successfully.",

'add_fail' => "Failed to add category.",

'prod_inventory' => "Product Inventory",

'current_prods_in_db' => "Below is a list of all the current products in the database.",

'all_cats' => "All Categories",

'prod_name' => "Product Name",

'prod_id' => "Product Id",

'prod_code' => "Product Code",

'master_cat2' => "Master Category",

'title' => "Title",

'stock_level' => "Stock Level",

'normal_price' => "Normal Price",

'sale_price' => "Sale Price",

'asc' => "Ascending Order",

'desc' => "Descending Order",

'containing_text' => "containing the text",

'filter' => "Filter",

'reset' => "Reset",

'id' => "id",

'type' => "Type",

'name' => "Name",

'price_sale_price' => "Price / Sale Price",

'in_stock' => "In Stock",

'action' => "Action",

'languages' => "Languages",

'no_products_exist' => "No products exist in the database.",

'add_prod_desc' => "You can use the form below to add a product to the inventory.",

'product' => "Product",

'prod_name2' => "Product Name:",

'prod_stock_no' => "Product/Stock No:",

'auto_generated' => "(If left blank this will be auto generated.)",

'description' => "Description:",

'primary_lang' => "(In primary language other languages can be added afterwards.)",

'category' => "Category:",

'image2' => "Image:",

'opt_and_thumbs' => "(Optional and thumbnails will automatically be made IF the format chosen is compatible.)",

'upload_new' => "Upload New Image",

'browse_existing' => "Browse Existing Images",

'normal_price2' => "Normal Price:",

'sale_price2' => "Sale Price:",

'sale_mode_desc' => "(This is only used when the store is set in sale mode per product.)",

'prod_weight' => "Product Weight:",

'tax_class' => "Tax Class:",

'stock_level2' => "Stock Level:",

'reduce_stock_level' => "(This level reduces each time an item is sold.)",

'use_stock_q' => "Use stock level?",

'product_type' => "Product Type:",

'tangible' => "Tangible",

'digital' => "Digital",

'digi_path' => "Digital products are required to have either an HTTP Path or Server Root Path (see below).",

'digi_info' => "Digital Info:",

'digi_desc' => "<p><strong>HTTP Path:</strong> http://www.domain.com/downloads/download.exe<br />

				<strong>Server Root Path:</strong> /usr/local/vhosts/www.domain.com/downloads/download.exe <strong>(Recommended!)							</strong></p>

<p>The advantage of using the server root path is that files can be stored elsewhere than the publicly accessible folder. If this method is chosen CubeCart will automatically create a download link which has an expiry time and max amount of downloads which is configured in the store settings.</p>",

'prod_inv_langs' => "Product Inventory - (Other Languages)",

'use_rich_oth_lang' => "Please use the rich text editor below to add or edit products in other languages.",

'language' => "Language:",

'update_prod_lang' => "Update Product Language",

'save_prod_lang' => "Save Product Language",

'other_langs_exdefault' => "Below is a list of all the current products in languages other than the default.",

'no_lang_exist' => "No language variations for this product exist in the database.",

'opt_add_success' => "Option name added.",

'opt_add_fail' => "Option name not added.",

'att_add_success' => "Option attribute added.",

'att_add_fail' => "Option attribute not added.",

'assign_success' => "Option assigned to product.",

'assign_fail' => "Option not assigned to product.",

'product_options' => "Product Options",

'product_option' => "Product Option",

'quick_assign' => "Quick Assign:",

'prod_opts_of' => "product options of",

'to' => "to",

'go' => "GO",

'opt_step1' => "1. Create an option (e.g. Colour)",

'opt_id' => "ID",

'opt_name' => "Option Name",

'warn_remove_opt' => "Are you sure you want to remove this option name? \n\nWARNING BY DOING SO ALL PRODUCT OPTIONS AND OPTION ATTRIBUTES WITH THIS NAME WILL BE REMOVED!",

'no_options_made' => "No product option names have been made.",

'option' => "Option",

'opt_step2' => "2. Create an option value (e.g. Red)",

'option_attributes' => "Option Attributes",

'warn_remove_att' => "Are you sure you want to remove this option attribute? \n\nWARNING DOING SO WILL DELETE ALL PRODUCT OPTIONS WITH THIS ATTRIBUTE AND OPTION NAME!",

'no_attributes_made' => "No product option attributes have been made.",

'attribute' => "Attribute",

'opt_step3' => "3. Assign option &amp; value to product (e.g. T-Shirt &gt; Colour &gt; Red)",

'option_attribute' => "Option Attribute",

'option_price' => "Option Price",

'add_subtract' => "Add / Subtract",

'remove_opt_prod' => "Are you sure you wish to remove this option from this product?",

'no_assigned_opts' => "No option have been assigned to any products.",

'prods_made_1st' => "Products need to be added before options can be made.",

);



$lang['admin']['settings'] = array (

'spambot' => "<strong>Enable Script/Bot Flood Control?</strong><br />
Forces users to enter a code on registration, tell a friend etc to prevent bot's from spamming the store.",


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

'show_latest' => "Show Latest Products on homepage?",

'no_latest' => "Number of latest products to show:",

'off_line_settings' => "Offline Settings",

'off_line' => "Turn store off?",

'off_line_content' => "Off line message:",

'off_line_allow_admin' => "Allow administrators to view store off line? (Requires admin session)",


'store_settings' => "Store Settings",

'edit_below' => "Please edit your store configuration settings below:",

'meta_data' => "Meta Data",

'browser_title' => "Browser Title:",

'meta_desc' => "Meta Description:",

'meta_keywords' => "Meta Keywords:",

'comma_separated' => "(Comma Separated)",

'store_co_name' => "Store/Company Name:",

'store_address' => "Store Address:",

'country' => "Country:",

'zone' => "County/State/Zone:",

'dirs_folders' => "Directories &amp; Folders",

'rootRel' => "Root Public HTML Folder to store:",

'include_slash' => "e.g. /store/ (Include Trailing Slash)",

'storeURL' => "Absolute URL to store:",

'eg_domain_com' => "e.g. http://www.domain.com",

'rootDir' => "Server Root Directory:",

'eg_root_path' => "e.g. /path/to/your/webstore",

'rootRel_SSL' => "Root SECURE Public HTML Folder to store:",

'storeURL_SSL' => "Absolute SECURE URL to store:",

'eg_domain_SSL' => "e.g. https://secure.domain.com/store (Excluding Trailing Slash)",

'rootDir_SSL' => "Server SECURE Root Directory:",

'eg_root_path_secure' => "e.g. /path/to/your/secure/webstore",

'enable_ssl' => "Enable SSL:",

'ssl_warn' => "(Warning: This change takes place immediately after submit. Please ensure your secure Root Directory and Secure URL are correct and working before setting this to Yes)",

'digital_downloads' => "Digital Downloads",

'download_expire_time' => "Download Expiry Time:",

'seconds' => "(Seconds)",

'download_attempts' => "Download Attempts:",

'attempts_desc' => "(Number of times the customer can download the product.)",

'styles_misc' => "Styles &amp; Misc",

'default_language' => "Default Language:",

'store_skin' => "Store Skin:",

'no_cats_per_row' => "No Categories Per Row:",

'dir_symbol' => "Directory Symbol:",

'prods_per_page' => "No Products per Page:",

'precis_length' => "Length of product precis:",

'chars' => "(Chars)",

'no_sale_items' => "No. Items in Sale Items Box:",

'no_pop_prod' => "No. Items in Popular Items Box:",

'email_name' => "Email Name:",

'email_name_desc' => "(This is used as the send name of site emails.)",

'email_address' => "Email Address:",

'email_address_desc' => "(This is used as the email address in site emails.)",

'mail_method' => "Mail Sending Method:",

'mail_recommended' => "(SMTP recommended)",

'max_upload_size' => "Max Upload Filesize:",

'under_x_recom' => "(Under 2048Kb Recommended)",

'max_sess_length' => "Max Session Length:",

'db_settings' => "Database Settings",

'db_host' => "Database Hostname:",

'db_username' => "Database Username:",

'db_password' => "Database Password:",

'db_name' => "Database Name:",

'db_prefix' => "Database Prefix:",

'gd_settings' => "GD Settings",

'gd_ver' => "GD Version:",

'gd_thumb_size' => "Thumbnail Size:",

'gd_gif_support' => "Allow GIF Support: (Please make sure this is enabled on your server)",

'gd_max_img_size' => "Max Image Size:",

'gd_img_quality' => "GD Image Quality:",

'recom_quality' => "(60 - 80 recommended)",

'stock_settings' => "Stock Settings",

'use_stock' => "Show stock level?",

'allow_out_of_stock_purchases' => "Allow out of stock purchases?",

'weight_unit' => "Weight Unit:",

'time_and_date' => "Time &amp; Date",

'time_format' => "Time Format:",

'time_format_desc' => "(See <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Time Offset:",

'time_offset_desc' => "(Seconds - Used for servers in different timezone)",

'date_format' => "Date Format:",

'date_format_desc' => "(See <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Locale Settings",

'default_currency' => "Default Currency",

'inc_tax_prices' => "Include tax in prices?<br />
(With this enabled you must add tax into the price of the goods and it is applied to all customers)",

'sale_mode' => "Sale Mode:",

'percent_of_all' => "Percentage off all prices",

'ind_sale_per_item' => "Individual Sale Prices per item",

'sale_mode_off' => "Sale Mode Off",

'sale_per_off' => "Sale Percent Off:",

'sale_per_off_desc' => "(Percentage to be knocked off all prices)",

'diff_dispatch' => "Allow dispatch to address other than invoice address?",

'update_settings' => "Update Settings",

'update_success' => "updated successfully.",

'update_fail' => "was not updated.",

'add_success' => "added successfully",

'add_fail' => "was not added.",

'delete_success' => "Deleted successfully.",

'delete_failed' => "Delete failed.",

'currencies' => "Currencies",

'currency' => "Currency",

'currencies_desc' => "Please add edit or delete currencies below:",

'c_code' => "Code",

'c_name' => "Name",

'c_value' => "Value",

'symbol_left' => "Symbol Left",

'symbol_right' => "Symbol Right",

'decimal_places' => "Decimal Places",

'last_updated' => "Last Updated",

'c_status' => "Status",

'no_currencies' => "There are no currencies in the database.",

'countries' => "Countries",

'country' => "Country",

'edit_countries_below' => "Please add edit or delete countries below:",

'disable' => "Disable",

'enable' => "Enable",

'iso' => "ISO",

'iso_name' => "Name",

'iso3' => "ISO3",

'num_code' => "Num Code",

'action' => "Action",

'warn_del_country' => "Are you sure you want to delete this? All counties, states and zones will be deleted above it.",

'no_countries_in_db' => "There are no countries in the database.",

'edit_counties' => "Please add edit or delete counties/zones/states below:",

'no_counties_in_db' => "There are no counties, states or zones in the database.",

'tax_Settings' => "Tax Settings",

'edit_locale_below' => "Please edit your locale settings below:",

'tax_only_to' => "Apply Tax ONLY the following area:",

'manage_tax_below' => "Please manage your different types of tax below. These can be applied to each product so that you can have tax exempt products and different levels of tax for different product types.",

'tax_class2' => "Tax Class",

'rate_per' => "Rate (%)",

'no_taxes_setup' => "Sorry there are no taxes setup.",

'tax' => "Tax",

);



$lang['admin']['stats'] = array(

'store_stats' => "Store Statistics",

'choose_view' => "Please choose the statistics you would like to view:",

'search_terms' => "Search Terms",

'product_pop' => "Product Popularity",

'cust_online' => "Customers Online",

'search_terms_order_by' => "Search Terms (Ordered by No Searches)",

'sorry_no_data' => "Sorry there is no data to show.",

'product_pop_ordered_by' => "Product Popularity  (Ordered by Views)",

'cust_active' => "Customers who have been active in the last 15 mins.",

'hash' => "#",

'customer' => "Customer",

'location' => "Location",

'sess_start_time' => "Session Start Time",

'last_click_time' => "Last Click Time",

'sess_length' => "Session Length",

'geust' => "Guest",

'signed_in' => "Signed In",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "WARNING: The main configuration file 'includes/global.inc.php' is writable and your store is at risk. Please change these permissions to 0644 as soon as possible.",

'401' => "Error 401: You do not have permission to access that page. Please ask one of the super users to grant this for you.",

'welcome_note' => "Welcome to the CubeCart&trade; Administration Control Panel",

'last_login' => "Last login by ",

'by' => "by",

'failed' => "failed.",

'store_overview' => "Store Overview:",

'version' => "Version:",

'visit_cc' => "Visit the CubeCart Downloads Server",

'no_products' => "Number of Products:",

'no_customers' => "Number of Customers:",

'img_upload_size' => "Image upload folder size:",

'no_orders' => "Number of Orders:",

'quick_search' => "Quick Search:",

'order_no' => "Order Number:",

'search_now' => "Search Now",

'customer' => "Customer:",

'login_failed' => "Login Failed! Either the username or password was incorrect.",

'new_pass_sent' => "A new password has been emailed to",

'no_admin_sess' => "No administration session was found.",

'login_fail_2' => "Login failed. Please try again.",

'login_below' => "Please login below:",

'username' => "Username:",

'password' => "Password:",

'request_pass' => "Request Password",

'login' => "Login",

'logout_failed' => "Logout failed as no admin session was present.",

'reset_pass_email' => "Dear %s,

You, or somebody pretending to be you has requested your password to be reset.

Your new access details are:

~~~~~~~~~~~~~~~~~~~~~~~~~~
Username: %s
Password: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~

This email was sent from %s/admin/requestPass.php\n

Senders IP Address: %s",

'pass_reset_failed' => "Password reset failed.",

'enter_email_below' => "Please enter your email address below:",

'email_address' => "Email Address:",

'send_pass' => "Send Password",

);



$lang['admin']['nav'] = array(

'permission_error' => "You do not have permission to access this.",

'navigation' => "Navigation",

'admin_home' => "Admin Home",

'store_home' => "Store Home",

'store_config' => "Store Config",

'gen_settings' => "General Settings",

'taxes' => "Taxes",

'countries_zones' => "Countries &amp; Zones",

'currencies' => "Currencies",

'modules' => "Modules",

'shipping' => "Shipping",

'gateways' => "Gateways",

'affiliates' => "Affiliates",

'catalog' => "Catalog",

'view_products' => "View Products",

'add_product' => "Add Product",

'product_options' => "Product Options",

'view_categories' => "View Categories",

'add_categories' => "Add Category",

'customers' => "Customers",

'view_customers' => "View Customers",

'email_customers' => "Email Customers",

'orders' => "Orders",

'file_manager' => "File Manager",

'manage_images' => "Manage Images",

'upload_images' => "Upload Images",

'statistics' => "Statistics",

'view_stats' => "View Stats",

'documents' => "Documents",

'homepage' => "Homepage",

'site_docs' => "Site Documents",

'misc' => "Misc",

'server_info' => "Server Info",

'admin_users' => "Admin Users",

'administrators' => "Administrators",

'admin_sessions' => "Admin Sessions",

);



$lang['admin']['incs'] = array(

'administration' => "Administration",

'logged_in_as' => "Logged in as:",

'logout' => "Logout",

'change_pass' => "Change Password",

'error_editing' => "Error trying to edit. Input data was not an array.",

'config_updated' => "Configuration Updated. Please make sure the file permission have been set back correctly.",

'cant_write' => "Could not open file of '%s' for writing. Try changing the CHMOD value to 0777. Remember to set it back to 0644 afterwards!",

'db_config_updated' => "Configuration Updated.",

'db_cant_write' => "Updated Failed!",

'select_above' => "Select Above",

);



/////////////////////////////////////
//// FRONTEND LANGUAGE
/////////////////////////////////////

/////////// GLOBAL FRONT ////////////
$lang['front']['yes'] = "Yes";

$lang['front']['no'] = "No";
/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Useful Links",

'reg_and_checkout' => "Register &amp; Checkout",

'cont_shopping' => "Continue Shopping",

'edit_del_add' => "Edit Delivery Address",

'edit_inv_add' => "Edit Invoice Address",

'empty_cart' => "Empty Basket",

'prev_page' => "Previous Page",

'homepage' => "Homepage",

'shop_by_cat' => "Shop by Category",

'sale_items' => "Sale Items",

'save' => "Save",

'currency' => "Currency",

'information' => "Information",

'products' => "Products:",

'categories' => "Categories:",

'prices' => "Prices:",

'language' => "Language",

'mailing_list' => "Mailing List",

'subscribe_below' => "Subscribe to our mailing list below:",

'email' => "Email:",

'join_now' => "Join Now",

'already_subscribed' => "The email address %s has already been subscribed to our mailing list. Please login to your account to unsubscribe.",

'enter_valid_email' => "Please enter a valid email address.",

'added_to_mail' => "Thank you, %s has been added to our mailing list.",

'subscribed_to_mail' => "Thank you, %s has been subscribed to our mailing list.",

'popular_products' => "Popular Products",

'featured_prod' => "Featured Product",

'sale_items' => "Sale Items",

'search_for' => "Search for:",

'go' => "Go",

'welcome_back' => "Welcome back",

'logout' => "Logout",

'your_account' => "Your Account",

'welcome_guest' => "Welcome Guest",

'login' => "Login",

'register' => "Register",

'shopping_cart' => "Shopping Basket",

'basket_empty' => "Your basket is empty.",

'items_in_cart' => "Items in cart:",

'total' => "Total:",

'view_basket' => "View Basket",

);



$lang['front']['account'] = array(

'your_account' => "Your Account",

'personal_info' => "Personal Info",

'order_history' => "Order History",

'change_password' => "Change Password",

'newsletter' => "Newsletter",

'login_to_view' => "You must login to view this page.",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "The password you entered was incorrect.",

'conf_not_match' => "Your confirmation password did not match your new password.",

'change_pass' => "Change Password",

'password_updated' => "Thank you, your password has been updated.",

'change_pass_below' => "Please change your password below:",

'old_pass' => "Old Password:",

'new_pass' => "New Password:",

'confirm_pass' => "Confirm Password:",

'submit' => "Submit",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Sorry",

'expired' => "Your download link has expired or is not valid.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Forgotten Password",

'email' => "Email:",

'send_pass' => "Send Password",

'reset_email' => "Dear %s %s,

You, or somebody pretending to be you has requested for your password to be reset. Your new access details are below:

~~~~~~~~~~~~~~~~~~~~~~~~~~
User: %s
Pass: %s
~~~~~~~~~~~~~~~~~~~~~~~~~~
To login, please follow the link below:
%s/index.php?act=login
~~~~~~~~~~~~~~~~~~~~~~~~~~

This email was sent from %s
Senders IP Address: %s",

'new_pass_sent' => "A new password has been sent to %s.",

'email_not_found' => "Sorry but that email address was not found.",

'enter_email' => "Please enter your login email address below to have a temporary password sent to you:",

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

'newOrderMsg' => "A customer has just made the order %s, to view this order please follow the link below: \n\n%s",

'newOrderSubj' => "New Store Order #",

'payment' => "Payment",

'cart' => "Basket",

'address' => "Address",

'payment' => "Payment",

'complete' => "Complete",

'fill_out_below' => "Please fill out the form below:",

'transferring' => "Transferring to payment",

'go_now' => "Go Now!",

'continue' => "Continue",

'choose_method' => "Please choose your preferred payment method:",

'your_comments' => "Your comments:",

'none_configured' => "Sorry no payment methods have been configured.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Login",

'username' => "Email:",

'password' => "Password:",

'remember_me' => "Remember me?",

'forgot_pass' => "Forgot your password?",

'login_success' => "You have logged in successfully.",

'already_logged_in' => "You have already logged in.",

'login_failed' => "Login failed!",

'login_below' => "Please login below:",

);



$lang['front']['index'] = array(

'latest_products' => "Latest Products",

);



$lang['front']['logout'] = array(

'logout' => "Logout",

'session_destroyed' => "Your session has ended.",

'no_session' => "No session was found to destroy. You appear to have arrived here by accident.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Newsletter Preferences",

'prefs_updates' => "Your newsletter preferences have been updated.",

'edit_prefs_below' => "Please edit your newsletter preferences below:",

'subscribe' => "Subscribe to mailing list?",

'email_format' => "Email Format:",

'plain_text' => "Plain Text",

'html' => "HTML",

'html_abbr' => "Hypertext Markup Language",

'update' => "Update",

'login_required' => "You must login to view this page.",

);



$lang['front']['noShip'] = array(

'sorry' => "Sorry",

'desc' => "No shipping method setup for your country. Please contact us to see if we can make an alternative arrangement.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Sorry",

'desc' => "The total weight of your order it too high. Please contact us to see if we can make an alternative arrangement or reduce the amount of items in your basket.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "Telephone numbers must be numeric only.",

'complete_all' => "Please make sure all required fields are completed.",

'email_invalid' => "Please enter a valid email address.",

'numeric_only' => "Telephone numbers must be numeric only.",

'email_inuse' => "Sorry that email address is already in use.",

'update_email' => "Dear %s %s,

This email has been sent to confirm that your personal information has been updated successfully. If you feel that your account has been updated by someone other than yourself please contact a member of staff immediately.\n\n

This email was sent from %s\n

Senders IP Address: %s",

'update_email_subj' => "Personal Info Updated",

'personal_info' => "Personal Information",

'account_updated' => "Your account has been updated. You may edit this again below if you wish.",

'edit_below' => "Please edit your personal information below:",

'title' => "Title:",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'email' => "Email:",

'address' => "Address:",

'town' => "Town:",

'county' => "County/State:",

'postcode' => "Zip/Postcode:",

'country' => "Country:",

'phone' => "Telephone:",

'mobile' => "Cellphone:",

'update_account' => "Update Account",

'login_required' => "You must login to view this page.",

);



$lang['front']['reg'] = array(

'fill_required' => "Please make sure all required fields are completed.",

'pass_not_match' => "Please make sure your passwords match.",

'enter_valid_email' => "Please enter a valid email address.",

'enter_valid_tel' => "Telephone numbers must be numeric only.",

'email_in_use' => "Sorry that email address is already in use.",

'note_required' => "Please note that all fields that have an asterisk (*) are required to process your registration.",

'express_reg' => "Express Registration",

'submit_and_cont' => "Submit &amp; Continue",

'personal_details' => "Personal Details",

'address' => "Address",

'title' => "Title:",

'title_desc' => "(Mr/Mrs/Miss)",

'first_name' => "First Name:",

'address2' => "Address:",

'last_name' => "Last Name:",

'email_address' => "Email Address:",

'town' => "Town:",

'phone' => "Telephone:",

'county' => "County/State:",

'mobile' => "Cell Phone:",

'country' => "Country:",

'postcode' => "Postcode:",

'security_details' => "Security Details",

'choose_pass' => "Choose Password:",

'conf_pass' => "Confirm Password:",

'privacy_settings' => "Privacy Settings",

'receive_emails' => "I would like to receive store emails",

'email_format' => "Email Format:",

'styled_html' => "Styled HTML",

'plain_text' => "Plain Text",

'tandcs' => "Terms of Use",

'please_read' => "Please be sure to read our",

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
To view this product please follow the link below:
%s/index.php?act=viewProd&productId=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~

This email was sent from %s
Senders IP Address: %s",

'email_subject' => "Message from: %s",

'tellafriend' => "Tell a Friend",

'message_sent' => "Thank you, your message has been sent to <strong>%s</strong> about '%s'. If you would like to send this to another friend please do so below:",

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'friends_name' => "Friends Name:",

'friends_email' => "Friends Email:",

'your_name' => "Your Name:",

'your_email' => "Your Email:",

'message' => "Message:",

'default_message' => "I found this '%s' and thought that you may be interested.",

'send' => "Send",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Unsubscribe",

'email' => "Email:",

'go' => "Go",

'enter_valid_email' => "Please enter a valid email address.",

'email_removed' => "Thank you, <strong>%s</strong> has been removed from our mailing list.",

'email_not_found' => "Sorry, <strong>%s</strong> was not found in our mailing list or has already been unsubscribed.",

'enter_email_below' => "Please enter your email address below to unsubscribe from our mailing list:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Search Results",

'sale_items' => "Sale Items",

'image' => "Image",

'description' => "Description",

'price' => "Price",

'products_in' => "Products in:",

'buy' => "Buy",

'more' => "More",

'out_of_stock' => "OUT OF STOCK",

'no_products_match' => "Sorry, no products match the query:",

'no_prods_in_cat' => "There are no products in this category.",

);



$lang['front']['viewDoc'] = array(

'error' => "Error",

'does_not_exist' => "That document doesn't exist.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Order No:",

'customer_info' => "Customer Info:",

'invoice_address' => "Invoice Address:",

'delivery_address' => "Delivery Address:",

'na' => "n/a",

'customer_comments' => "Customer Comments:",

'order_summary' => "Order Summary:",

'product' => "Product",

'product_code' => "Product Code",

'quantity' => "Quantity",

'price' => "Price",

'download_here' => "Download Here",

'review_below' => "Please review this order below:",

'order_date_time' => "Order Date/Time:",

'payment_method' => "Payment Method:",

'ship_method' => "Shipping Method:",

'subtotal' => "Subtotal:",

'total_tax' => "Total Tax:",

'shipping' => "Shipping:",

'grand_total' => "Grand Total:",

'order_not_found' => "That order number could not be found.",

'login_required' => "You must login to view this page.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Your Orders",

'orders_listed_below' => "All the orders under this account are listed below:",

'order_no' => "Order No",

'status' => "Status",

'date_time' => "Date/Time",

'action' => "Action",

'view' => "View",

'no_orders' => "We have no records of any orders placed in our system. If you feel this is in error please contact a member of staff at the first possible opportunity.",

'login_required' => "You must login to view this page.",

);



$lang['front']['viewProd'] = array(

'product' => "Product",

'product_info' => "Product Information",

'price' => "Price:",

'product_code' => "Product Code:",

'tellafriend' => "Tell a Friend",

'quantity' => "Quantity:",

'more_images' => "[+] More Images",

'add_to_basket' => "Add to Basket",

'location' => "Location:",

'no_instock' => "In Stock:",

'instock' => "In Stock",

'out_of_stock' => "OUT OF STOCK",

'prod_opts' => "Product Options:",

'prod_not_found' => "That product could not be found.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Your shopping cart is currently empty.",

'allready_customer' => "Already a Customer?",

'login_below' => "Please login below:",

'username' => "Email:",

'password' => "Password:",

'remember_me' => "Remember me?",

'login' => "Login",

'forgot_pass_q' => "Forgot your password?",

'need_register' => "Need to Register?",

'express_register' => "Our express registration page can be completed quickly and easily.",

'reg_and_cont' => "Register &amp; Continue",

'cont_shopping_q' => "Continue Shopping?",

'cont_shopping' => "Continue Shopping",

'cont_browsing' => "To continue browsing as a guest without a login, click the button below. N.B: you will not be able to make a purchase without registering first.",

);





$lang['front']['cart'] = array(

'free_shipping' => "Free Shipping",

'view_cart' => "View Basket",

'cart' => "Basket",

'address' => "Address",

'payment' => "Payment",

'complete' => "Complete",

'add_more' => "Want to add more items? Enter the Product Code:",

'add' => "Add",

'qty' => "Qty",

'product' => "Product",

'code' => "Code",

'stock' => "Stock",

'price' => "Price",

'line_price' => "Line Price",

'delete' => "Delete",

'remove' => "Remove Item",

'invoice_address' => "Invoice Address",

'delivery_address' => "Delivery Address",

'title' => "Title:",

'first_name' => "First Name:",

'last_name' => "Last Name:",

'address2' => "Address:",

'town' => "Town:",

'county' => "County/State:",

'postcode' => "Zip/Postcode:",

'country' => "Country:",

'edit_invoice_address' => "Edit Invoice Address",

'edit_delivery_address' => "Edit Delivery Address",

'stock_warn' => "You have ordered more items than we currently have available. Your order may be delayed until our stock levels are updated.",

'amount_capped' => "Sorry but we cannot dispatch orders over our current stock level.<br />The quantity of this item has been capped to",

'na' => "n/a",

'shipping' => "Shipping:",

'tax' => "Tax:",

'subtotal' => "Subtotal:",

'cart_total' => "Basket Total:",

'if_changed_quan' => "(if you have changed any quantities)",

'update_cart' => "Update Basket",

'continue' => "Continue",

'cart_empty' => "Your shopping cart is currently empty.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Confirmation Screen",

'cart' => "Basket",

'address' => "Address",

'payment' => "Payment",

'complete' => "Complete",

'order_success' => "Thank you, your order was successful! Please visit again soon.",

'order_fail' => "Sorry, your order failed!",

'try_again_desc' => "You can attempt to purchase your basket contents again below:",

'try_again' => "Try Again",

'request_login' => "You must login to view this page.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Dear %s,

Thank you for your order no: %s placed on %s

The transaction was successful and we will ship your goods at the first possible opportunity (if applicable).

~~~~~~~~~~~~~~~~~~~~~~~~~~
Name: %s
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

'inv_email_body_2' => "\nYour comments: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Order Inventory:\n",

'inv_email_body_4' =>"Product: %s\n",

'inv_email_body_5' => "Options: %s\n",

'inv_email_body_6' => "Quantity: %s
Product Code: %s
Price: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
%s
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Order No: ",

'digi_email_body1' => "Dear %s,

Thank you for your order no: %s placed on %s

Below are the links you need to access the digital products you have ordered.

IMPORTANT these links will expire on %s and you have %s attempts to download them. If you have any problems please contact us stating your order number.

~~~~~~~~~~~~~~~~~~~~~~~~~~\n",
'digi_email_body2' => "%s
DOWNLOAD LINK:
%s/download.php?pid=%s&oid=%s&ak=%s
~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Downloads Access: ",

);



$lang['misc'] = array(

'pages' => " pages ",
//////////////////////////////////////////
// START: Added in 3.0.3
//////////////////

'client_browser' => "Client Browser:",

'server_software' => "Server Software:",

'perofOrderSub' => " % of Order Subtotal",

'freeForOrdOver' => "Free for Orders Over",

'freeShipping' => "Free Shipping",

'byWeight1stClass' => "By Weight (1st Class)",

'1stClass' => "(1st Class)",

'byWeight2ndClass' => "By Weight (2nd Class)",

'2ndClass' => "(2nd Class)",

'flatRate' => "Flat Rate",

'free' => "Free",

'national' => "National",

'international' => "International",

'byCategory' => "By Category",

'perItem' => "Per Item",

'nextDayEarlyAm' => "Next Day Air Early AM",

'nextDayAir' => "Next Day Air",

'nextDayAirSaver' => "Next Day Air Saver",

'2ndDayEarlyAm' => "2nd Day Air Early AM",

'2ndDayAir' => "2nd Day Air",

'3daySelect' => "3 Day Select",

'ground' => "Ground",

'canadaStandard' => "Canada Standard",

'worldwideExpress' => "Worldwide Express",

'worldwideExpressPlus' => "Worldwide Express Plus",

'worldwideExpedited' => "Worldwide Expedited",


);

$lang['printOrderForm'] = array(

'invoiceTo' => "Invoice to",

'deliverTo' => "Deliver to",

'postalOrderFor' => "Postal Order for",

'orderOf' => "Order of",

'orderID' => "Order ID:",

'product' => "Product",

'code' => "Code",

'qty' => "Qty",

'price' => "Price",

'shippingMethod' => "Shipping Method:",

'subtotal' => "Subtotal:",

'totalTax' => "Total Tax:",

'totalShipping' => "Total Shipping:",

'grandTotal' => "Grand Total:",

'payByCheck' => "Pay by check",

'payTo' => "Please make cheques payable to",

'payByCard' => "Pay by Card",

'cardType' => "Card Type:",

'cardNo' => "Card No:",

'3-4DigiId' => "3-4 Digit ID:",

'expiryDate' => "Expiry Date:",

'issueDate' => "Issue Date:",

'issueNo' => "Issue Number:",

'signature' => "Signature:",

'payByTransfer' => "Pay by Bank Transfer",

'bankName' => "Bank Name:",

'accountName' => "Account Name:",

'sortCode' => "Sort Code:",

'accountNo' => "Account Number:",

'swiftCode' => "Swift Code:",

'bankAddress' => "Bank Address:",

'thanks' => "Thank you for shopping with us!",

'postalAddress' => "Postal address:",

);

$lang['orderState'] = array(

'6' => "Cancelled",

'7' => "Uncleared",

'1' => "Pending",

'2' => "Processing",

'3' => "Completed",

'4' => "Declined",

'5' => "Fraudulent",

);

$lang['admin']['cats'] = array (

'delete_success' => "Category language deleted successfully.",

'delete_fail' => "Delete failed.",

'update_fail' => "Update failed.",

'update_success' => "Updated successfully.",

'add_success' => "added successfully.",

'add_fail' => "Failed to add category language.",

'site_cats_other_lang' => "Categories - (Other Languages)",

'site_cat_other_lang' => "Category - (Other Languages)",

'cat_name' => "Category Name:",

'language' => "Language:",

'update_cat' => "Update Category",

'save_cat' => "Save Category",

'current_cat_list' => "Below is a list of all the current category languages. These can be edited and/or deleted at any time.",

'cat_name2' => "Category Name",

'action' => "Action",

'no_site_cats' => "This category name nas not been translated yet.",

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