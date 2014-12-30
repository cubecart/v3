<?php
/*
+------------------------------------------------------------------------------------
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
|	Spanish (es) Language File
|   Translate by Carlos Varela - http://www.carlosvarela.net - carlosvarela@gmail.com
+--------------------------------------------------------------------------------------
*/


/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'es_ES');

/////////// GLOBAL ADMIN ////////////
$lang['admin']['yes'] = "Si";

$lang['admin']['no'] = "No";

$lang['admin']['edit'] = "Editar";

$lang['admin']['delete'] = "Borrar";

$lang['admin']['delete_q'] = "Esta seguro que desea borrar?";

$lang['admin']['add'] = "Agregar";

$lang['admin']['add_new'] = "Agregar Nuevo";

$lang['admin']['write'] = "Escribir";

$lang['admin']['read'] = "Leer";

$lang['admin']['na'] = "N/A"; // as in not applicable

$lang['admin']['all'] = "Todo";

$lang['admin']['remove'] = "Remover";

/////////////////////////////////////



// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Borrado Exitosamente!.",

'del_failed' => "Error al Borrar.",

'update_success' => "Actualizado Exitosamente.",

'update_fail' => "Error al Actualizar.",

'add_success' => "Agregado Exitosamente.",

'add_failed' => "Error al Agregar Usuario.",

'administrators_title' => "Administradores",

'current_users' => "Usuarios Actuales.",

'id' => "Id",

'user_notes' => "Usuario / Notas",

'no_logins' => "No hay Ingresos de Usuario",

'super_user' => "Super Usuario?",

'email' => "Email",

'action' => "Accion",

'add_admin' => "Puedes usar este formulario para agregar un administrador.",

'full_name' => "Nombre Completo:",

'username' => "Usuario:",

'administrator' => "Administrador",

'email2' => "Email:",

'password' => "Clave:",

'pass_warn' => "(Solo ingresar clave si deseas cambiar la actual.)",

'make_super' => "Crear Super Usuario?",

'notes' => "Notas:",

'permissions' => "Permisos",

'pass_updated' => "Clave actualizada.",

'pass_not_updated' => "Clave no actualizada.",

'change_pass_below' => "Porfavor cambiar tu clave:",

'old_pass' => "Clave Anterior:",

'new_pass' => "Clave Nueva:",

'confirm_pass' => "Confirmar Clave:",

'perms_updated' => "Permisos Actualizados.",

'set_perms' => "Porfavor configurar los permisos para el siguiente usuario.",

'section' => "Seccion",

'nb_bulk' => "Para enviar correo a sus clientes el usuario debe tener permisos de escritura.",

'admin_sessions' => "Sesiones Admin",

'sessions_desc' => "A continuacion se muestran los intentos de ingresos como administrador. Vigile esto para asegurarse de intentos de hijacking. Se recomienda cambiar su clave de administrador regularmente.",

'login_id' => "ID Ingreso",

'time' => "Tiempo",

'ip_address' => "Direccion IP",

'success' => "Exitoso",

);



$lang['admin']['categories'] = array (

'delete_success' => "Borrado Exitosamente.",

'delete_fail' => "Error al Borrar.",

'update_success' => "Actualizado Exitosamente.",

'update_fail' => "Eror al actualizar categoria.",

'add_success' => "Agregado Exitosamente.",

'add_failed' => "Error al agregar una categoria.",

'categories' => "Categorias",

'categories_desc' => "A continuacion se muestra una lista de todas las categorias actuales en la base de datos.",

'cat_name' => "Nombre de la Categoria",

'dir' => "Directorio",

'image' => "Imagen",

'no_products' => "No hay Productos",

'action' => "Accion",

'cannot_del' => "Esta categoria no puede ser borrada asi como lo productos que contiene.",

'no_cats_exist' => "No existen categorias en la base de datos.",

'add_desc' => "Puede agregar categorias con ilimitadas subcategorias, subiendo nuevas imagenes o utilizando imagenes ya existentes en el servidor.",

'category' => "Categoria",

'category_name' => "Nombre de la Categoria:",

'category_level' => "Nivel de la Categoria:",

'top_level' => "Nivel Superior",

'image_optional' => "Imagen: (Opcional)",

'upload_new_image' => "Subir Nueva Imagen",

'browse_existing' => "Buscar Imagen Existente",

'ship_by_cat' => "Envio por Categoria",

'per_ship' => "Por Envio:",

'per_item' => "Por Item:",

'per_int_ship' => "Por Envio Internacional:",

'per_int_item' => "Por Item Internacional:",

);



$lang['admin']['customers'] = array (

'delete_success' => "Borrado Exitosamente!.",

'delete_fail' => "Error al Borrar.",

'update_success' => "Cliente actualizado exitosamente.",

'update_fail' => "Error al actualizar cliente.",

'search_term' => "Buscar Termino:",

'reset' => "Limpiar",

'name' => "Nombre",

'email' => "Email",

'invoice_add' => "Direccion de Factura",

'phone' => "Telefono",

'reg_ip' => "Fecha de Registro / Direccion IP",

'no_orders' => "No Pedidos",

'action' => "Accion",

'no_cust_exist' => "No de clientes en la base de datos.",

'edit_below' => "Porfavor editar la siguiente informacion:",

'title' => "Titulo",

'first_name' => "Nombre:",

'last_name' => "Apellido:",

'email2' => "Email:",

'address' => "Direccion:",

'town' => "Ciudad:",

'county' => "Estado/Provincia:",

'postcode' => "Codigo Postal:",

'country' => "Pais:",

'phone2' => "Telefono:",

'edit_customer' => "Editar Cliente",

'no_download_email' => "No hay Correos para descargar.",

'email_customers' => "Email Clientes",

'create_email' => "Porfavor crear su email a continuacion:",

'hint' => "Hint:",

'click_source' => "Puede presionar el boton del codigo fuente y pegarlo en un documento html ya hecho.",

'important' => "Importante:",

'absolute_links' => "Asegurese de que todas las imagenes y enlaces son absolutos (que contengan el dominio).En algunos paises es una obligacion legal proveer de un enlace de des-subcripcion:",

'email_subject' => "Titulo del Correo:",

'senders_name' => "Nombre de quien envia:",

'senders_email' => "Correo de quien envia:",

'return_path' => "Ruta de Retorno:",

'bounce_desc' => "(The return path bounced emails go to.)",

'send_test' => "Enviar correo de prueba?",

'test_email_recip' => "Direccion Correo de Prueba:",

'send_email' => "Enviar Correo",

'download_or_send' => "Porfavor elija descargar direcciones del email de los clientes o enviar a través de este sitio.",

'please_choose' => "Porfavor elija:",

'used_to_download' => "Esto es usado para descargar las direcciones de correos para ser usado con algun programa de envio masivo de correos.",

'bulk_to_subscribed' => "Esto te permite enviar correos masivos SOLO a los clientes que se han suscrito a su lista de correo..",

'include_name' => "Incluir Nombre?",

'download_email' => "Descargar Correo",

'send_email' => "Enviar Correo",

'sending_complete' => "Envio Completo",

'sending' => "Enviando Correo",

'recipient' => "Recipiente:",

'prev_page' => "Pagina Anterior",

'page' => "Pagina:",

'bulk_finished' => "El envio de mail masivo ha concluido con exito.",

'time_taken' => "Tiempo utilizado:",

'recipients' => "Recipientes:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Pagina Inicial no fue actualizado, porfavor asegurarse de dar los permisos correctos al archivo includes/static/home.inc.php .",

'update_success' => "Pagina Inicial actualizada exitosamente.",

'homepage' => "Pagina Inicial",

'enabled' => "Activado:",

'enabled_desc' => "(Si es desactivado el Idoma por defecto sera usado.)",

'language' => "Idioma:",

'title' => "Titulo:",

'use_rich_text' => "Porfavor usar un editor de texto enriquecido para hacer cambios a la pagina inicial. Una vez hechos los cambios, seran visibles automaticamente.",

'update_homepage' => "Actualizar Pagina Inicial",

'delete_success' => "Documento Borrado Exitosamente.",

'delete_fail' => "Error al Borrar Documento.",

'update_success' => "Actualizado Exitosamente",

'update_fail' => "No fue Actualizado.",

'add_success' => "Agregado Exitosamente.",

'add_fail' => "Error al agregar documento.",

'site_docs_other_lang' => "Documentos del Sitio - (Otros Idiomas)",

'use_rich_text' => "Porfavor usar un editor de texto enriquecido para agregar o editar los documentos del sitio en otros idiomas.",

'site_doc_other_lang' => "Documentos del Sitio - (Otros Idiomas)",

'doc_name' => "Nombre del Documento:",

'language' => "Idioma:",

'update_doc' => "Actualizar Documento",

'save_doc' => "Guardar Documento",

'current_doc_list' => "A continuacion una lista de todos los documentos en el sitio. Puede tener un numero ilimitado de documentos en su sitio, los cuales pueden ser editados o borrados cuando desee.",

'doc_name2' => "Nombre del Documento",

'action' => "Accion",

'no_site_docs' => "No hay documentos del sitio en la base de datos.",

'site_docs' => "Documentos del Sitio",

'site_doc' => "Documento del Sitio",

'languages' => "Idioma",

'no_docs' => "No hay documentos del sitio en la base de datos.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Imagen Navegador",

'file' => "Archivo:",

'no_imgs' => "No hay imagenes disponibles. Porfavor cierra esta ventana y sube una imagen a continuacion",

'preview' => "Previsualizar:",

'ok' => "OK",

'cancel' => "Cancelar",

'prod_cat_use_img' => "No hay productos o categorias usando la imagen '%s'.",

'continue_q' => "CONTINUAR BORRAR?",

'site_doc_use_img' => "No hay documentos del sitio usando la imagen '%s'.",

'home_use_img' => "La imagen '%s' es usada en la pagina inicial.",

'gallery_use_img' => "La Imagen  '%s' es usada en una galeria de imagen del producto.",

'image_deleted' => "Imagen Borrada.",

'delete_failed' => "Error al Borrar.",

'image_manager' => "Administrador de Imagenes",

'delete_from_server' => "A continuacion puede borrar imagenes del servidor.",

'img_click_prev' => "Imagen (Click para ampliar)",

'size' => "Tamaño",

'action' => "Accion",

'no_images_added' => "No hay imagenes agregadas.",

'prev_file' => "Previsualizar Archivo",

'close_window' => "Cerrar Ventana",

'no_image_selected' => "Ninguna imagen fue seleccionada.",

'file_uploader' => "Subir Archivos",

'upload_image' => "Subir Imagen",

'please_browse_img' => "Porfavor busque su imagen:",

'file_too_big' => "Error: %s esta sobre %s",

'img_already_exists' => "Error: %s ya existe, renombre el archivo y subalo nuevamente.",

'upload_too_large' => "Error: no se busco una imagen o el peso del archivo excede el limite. El peso maximo por defecto son 2MB.",

'not_valid_mime' => "Error: %s no es un tipo valido de archivo.",

'image_upload_success' => "Exitoso: %s Subido.",

'back' => "&laquo; Volver",

);



$lang['admin']['misc'] = array (

'license_form' => "Formulario de Licencia",

'write_error' => "No se pudo abrir el archivo includes/global.inc.php para escritura. Cambie el valor CHMOD a 0777. Recuerde dejar este valor en 0644 despues de utilizar!",

'try_again' => "Intente nuevamente",

'purchase_cubecart' => "Adquirir CubeCart:",

'invalid_key' => "Lo siento pero la clave de la licencia es invalida o ya ha sido usada.",

'purchase_license_key' => "Adquirir Clave de Licencia",

'run_unlicensed' => "Usted aparece utilizando una version sin licencia de CubeCart. Porfavor ingrese su clave de licencia para remover los derechos de copia.",

'license_key' => "Clave Licencia:",

'submit_key' => "Enviar Clave",

'server_info' => "Informacion del Servidor",

'ini_set_desc' => "La informacion a continuacion muestra el entorno de configuracion del servidor. Este contiene toda clase de informacion la cual podria necesitar si tiene problemas con CubeCart. Si usted tiene un servidor compartido o un almacenamiento virtual en el cual las modificaciones son limitadas. La funcion</span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> puede ser usada para reescribir este valor.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "El estado de esta orden ha cambiado exitosamente. En esta etapa puede enviar un correo a su cliente para acceder a descargar productos digitales/virtuales . Para hacer eso ",

'click_here' => "Presione Aqui",

'send_invoice_desc' => "Si su estado fue cambiado de Pendiente a Procesando usted tendra la opcion para enviar al cliente una factura y garantizar el acceso a productos digitales si es aplicable.",

'delete_success' => "Borrado Exitosamente.",

'delete_fail' => "Error al Borrar.",

'orders' => "Pedidos",

'all_orders' => "A continuacion todas las ordenes ingresadas en la base de tados.",

'order_no' => "No. Pedido",

'status' => "Estado",

'date_time' => "Fecha/Hora",

'customer' => "Cliente",

'ip_address' => "Direccion IP",

'cart_total' => "Total Carro",

'action' => "Accion",

'no_orders_in_db' => "No hay ordenes en la base de datos.",

'order_email' => "Estimado %s,\n\nEl estado de su orden id: %s ha sido cambiado a %s\n\n",

'email_staff_comments' => "Nuestro equipo agrego los siguientes comentarios:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Este correo fue enviado automaticamente por %s",

'email_subj_status_change' => "Estado de Orden Cambiado a:",

'order_no2' => "Orden No:",

'print_packing_slip' => "Imprimir Tira de Empaque",

'customer_info' => "Informacion del Cliente",

'invoice_address' => "Direccion de Factura:",

'delivery_address' => "Direccion de Entrega:",

'contact_info' => "Informacion de Contacto:",

'tel' => "Tel. Fijo:",

'mobile' => "Tel. Movil:",

'email' => "Email:",

'customer_comments' => "Comentarios del Cliente:",

'no_comments_left' => "No se dejaron comentarios.",

'order_summary' => "Resumen de la Orden",

'product' => "Producto",

'code' => "Codigo",

'quantity' => "Cantidad",

'price' => "Precio",

'download_link' => "Enlace de Descarga:",

'warn_reset' => "Esto configura el monto de descargas a zero y extiendo el tiempo de expiracion.",

'reset_link' => "Reiniciar Enlace",

'download_stats' => "Descargado (%s) veces. El enlace expira %s",

'ip_address2' => "Direccion IP:",

'order_date_time' => "Orden Fecha/Hora:",

'payment_method' => "Forma de Pago:",

'ship_method' => "Forma de Envio:",

'subtotal' => "Subtotal:",

'total_tax' => "Total Impuestos:",

'shipping' => "Envio:",

'grand_total' => "Importe Total:",

'order_notfound' => "La Orden numero %s no pudo ser encontrada.",

'order_status' => "Estado de la Orden",

'shipping_date' => "Fecha de Envio:",

'ship_today' => "Enviar Hoy",

'modify_status' => "Modificar Estado:",

'staff_comments' => "Comentarios del Equipo:",

'info_not_sent_customer' => "(Esta informacion NO sera enviada al cliente!)",

'inform_customer' => "Informe del Cliente:",

'customer_notified' => "(Con esto revisa si el cliente es notifica de los cambios de estado de su orden.)",

'comments_2_customer' => "Comentarios al Cliente:",

'comments_2_customer_desc' => "(Esto sera enviado al correo por defecto del cliente si desea informar del cambio de estado de su orden.)",

'save_order_status' => "Guardar Estado de Orden",

'paid_by' => "Pagado por:",

'delivered_to' => "Enviado a:",

'invoice_reciept_for' => "Factura / Recibida po:",

'order_of_time' => "Su orden ",

'order_id' => "Orden ID:",

'digi_goods_desc' => "Si ordeno un producto digital, usted deberia recibir un correo que contenga las instrucciones para su descarga. Esto puede ser visto a traves de su panel de control donde usted tiene un completo control de sus ordenes y estados.",

'thank_you' => "Gracias por comprar con nosotros!",

);



$lang['admin']['products'] = array (

'show_featured' => "¿Incluya en los productos más últimos en el homepage?",

'upload_new_images' => "Subir Imagenes",

'no_images_avail' => "Lo siento no hay imagenes disponibles.",

'prod_added_to_cat' => "Producto agregado a la categoria.",

'prod_not_added_to_cat' => "Error al agregar una categoria al producto.",

'prod_removed_from_cat' => "Producto removido de la categoria.",

'prod_not_removed_from_cat' => "Error al remover el producto de la categoria.",

'title_extraCats' => "Administrador de Categorias",

'manage_cats' => "Administrar Categorias",

'master_cat' => "Categoria Maestra:",

'close_window' => "Cerrar Ventana",

'img_added_to_prod' => "Imagen agregada al producto.",

'img_not_added_to_prod' => "Error al agregar una imagen al producto.",

'img_removed' => "Imagen removida del producto.",

'img_not_removed' => "Error al remover imagen del producto.",

'image_management' => "Administrador de Imagen",

'manage_images' => "Administrar Imagenes",

'image' => "Imagen",

'action' => "Accion",

'delete_success' => "Borrado Exitosamente.",

'delete_fail' => "Error al Borrar.",

'update_successful' => "Actualizado Exitosamente!.",

'update_fail' => "Error al actualizar Categoria.",

'add_success' => "Agregado Exitosamente.",

'add_fail' => "Error al agregar categoria.",

'prod_inventory' => "Inventario de Productos",

'current_prods_in_db' => "A continuacion una lista total de todos los productos en la base de datos.",

'all_cats' => "Todas las Categorias",

'prod_name' => "Nombre del Producto",

'prod_id' => "Id Producto",

'prod_code' => "Codigo del Producto",

'master_cat2' => "Categoria Maestra",

'title' => "Titilo",

'stock_level' => "Nivel de Stock",

'normal_price' => "Precio Normal",

'sale_price' => "Precio de Oferta",

'asc' => "Orden Ascendente",

'desc' => "Orden Descendente",

'containing_text' => "contiene el texto",

'filter' => "Filtro",

'reset' => "Reiniciar",

'id' => "id",

'type' => "Tipp",

'name' => "Nombre",

'price_sale_price' => "Precio / Precio Oferta",

'in_stock' => "En Stock",

'action' => "Accion",

'languages' => "Idiomas",

'no_products_exist' => "No existen productos en la base de datos.",

'add_prod_desc' => "A continuacion puede usar el formulario para agregar un producto al inventario.",

'product' => "Producto",

'prod_name2' => "Nombre del Producto:",

'prod_stock_no' => "Producto/Stock No:",

'auto_generated' => "(Si lo deja en blanco sera llenado automaticamente.)",

'description' => "Descripcion:",

'primary_lang' => "(En idioma por defecto, luego puede ser agregado para los demas idiomas.)",

'category' => "Categoria:",

'image2' => "Imagen:",

'opt_and_thumbs' => "(Opcional y miniaturas seran agregadas automaticamente si el formato elegido es compatible.)",

'upload_new' => "Subir Nueva Imagen",

'browse_existing' => "Buscan en Imagenes Existentes",

'normal_price2' => "Precio Normal:",

'sale_price2' => "Precio Oferta:",

'sale_mode_desc' => "(Esto es usado cuando la tienda esta en modo Oferta.)",

'prod_weight' => "Peso del Producto:",

'tax_class' => "Clase de Impuesto:",

'stock_level2' => "Nivel de Stock:",

'reduce_stock_level' => "(Se descuenta cada vez que un producto es vendido.)",

'use_stock_q' => "Usar Nivel de Stock?",

'product_type' => "Tipo de Producto:",

'tangible' => "Tangible",

'digital' => "Digital",

'digi_path' => "Productos Digitales son aquellos que requieren una ruta HTTP o un directorio de raiz de un servidor (ver abajo).",

'digi_info' => "Informacion Digital:",

'digi_desc' => "<p><strong>Ruta HTTP:</strong> http://www.dominio.com/descargas/descargar.exe<br />

				<strong>Ruta del Servidor</strong> /usr/local/vhosts/www.dominio.com/descargas/descargar.exe <strong>(Recomendado!)	</strong></p>

<p>La venta de usar la ruta de raiz es que los archivos pueden ser guardardos para luego crear un enlace que tiene una duracion determinada por la configuracion que esta tenga.</p>",

'prod_inv_langs' => "Inventario de Productos - (Otros Idiomas)",

'use_rich_oth_lang' => "Porfavor usar un editor de texto enriquecido para agregar o editar productos.",

'language' => "Idioma:",

'update_prod_lang' => "Actualizar Idioma del Producto",

'save_prod_lang' => "Guardar Idioma del Producto",

'other_langs_exdefault' => "A continuacion  una lista de todos los productos en sus otros idiomas por defecto.",

'no_lang_exist' => "No hay variaciones de idioma para este producto en la base de datos.",

'opt_add_success' => "Nombre de la Opcion Agregada.",

'opt_add_fail' => "Error Nombre de la opcion no agregada.",

'att_add_success' => "Atributo de la opcion agregada.",

'att_add_fail' => "Error Atributo de la opcion no agregada.",

'assign_success' => "Opcion asignada al producto.",

'assign_fail' => "Error Opcion No Asignada al Producto.",

'product_options' => "Opciones de Productos",

'product_option' => "Opcion del Producto",

'quick_assign' => "Asignacion Rapida:",

'prod_opts_of' => "opciones de productos de",

'to' => "a",

'go' => "IR",

'opt_step1' => "1. Crear una opcion (ej. Color)",

'opt_id' => "ID",

'opt_name' => "Nombre de la Opcion",

'warn_remove_opt' => "Esta seguro de remover esta opcion? \n\n ADVERTENCIA SI CONTINUA TODAS LAS OPCIONES Y ATRIBUTOS DEL PRODUCTO SERAN BORRADAS!",

'no_options_made' => "No se han creado opciones de nombre del producto.",

'option' => "Opcion",

'opt_step2' => "2. Crear un valor de una opcion (ej. Rojo)",

'option_attributes' => "Atributos de Opciones",

'warn_remove_att' => "Esta seguro que desea borrar esta opcion de atributo? \n\nADVERTENCIA SI CONTINUA TODAS LAS OPCIONES Y ATRIBUTOS DEL PRODUCTO SERAN BORRADAS",

'no_attributes_made' => "No se han creado opciones de  atributos del producto.",

'attribute' => "Atributo",

'opt_step3' => "3. Asignar opcion &amp; valor a un producto (e.g. Polera &gt; Color &gt; Roja)",

'option_attribute' => "Opcion de Atributo",

'option_price' => "Opcion de Precio",

'add_subtract' => "Agregar / Quitar",

'remove_opt_prod' => "Esta seguro que desea remover esta opcion del producto?",

'no_assigned_opts' => "No hay opciones asignadas a ningun producto.",

'prods_made_1st' => "Los prodcutos deben ser agregados antes de que una opcion sea hecha.",

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

'show_latest' => "¿Demuestre los productos más últimos en el homepage?",

'no_latest' => "Número de los productos más últimos a demostrar:",

'off_line_settings' => "Ajustes fuera de línea",

'off_line' => "¿Dé vuelta al almacén apagado?",

'off_line_content' => "Mensaje fuera de línea:",

'off_line_allow_admin' => "¿Permita que los administrators visión el almacén fuera de línea?  (requiere la sesión del admin)",


'store_settings' => "Configuracion de la Tienda",

'edit_below' => "Porfavor edite la configuracion de su tienda a continuacion:",

'meta_data' => "Meta Data",

'browser_title' => "Buscar Titulo:",

'meta_desc' => "Meta Descripcion:",

'meta_keywords' => "Meta Claves:",

'comma_separated' => "(Separado por coma)",

'store_co_name' => "Tienda/Nombre de la Compañia:",

'store_address' => "Direccion de la Tienda:",

'country' => "Pais:",

'zone' => "Estado/Provincia/Zona:",

'dirs_folders' => "Directorios &amp; Carpetas",

'rootRel' => "Carpeta Publica HTML de la tienda:",

'include_slash' => "(Incluir slash final ej. www.sudominio.com/tienda/ )",

'storeURL' => "URL absoluta de la tienda:",

'eg_domain_com' => "e.g. http://www.domain.com",

'rootDir' => "Directorio de Raiz del Servidor:",

'eg_root_path' => "ej. /directorio/a/su/tienda",

'rootRel_SSL' => "Carpeta SEGURA HTML a la tienda:",

'storeURL_SSL' => "Direcion SEGURA a la Tienda:",

'eg_domain_SSL' => "e.g. https://seguro.dominio.com",

'rootDir_SSL' => "Directorio de raiz SEGURO:",

'eg_root_path_secure' => "e.g. /ruta/a/su/directorio/seguro/tienda",

'enable_ssl' => "SSL Activado:",

'ssl_warn' => "(Advertencia: Esto cambia el lugar inmediatamente al enviar los datosThis change takes place immediately after submit. Porfavor asegurese que su Directorio de Raiz Seguro es correcta antes de hacer cambios.)",

'digital_downloads' => "Descargas Digitales",

'download_expire_time' => "Tiempo de Expiracion de la Descarga:",

'seconds' => "(Segundos)",

'download_attempts' => "Intentos de Descarga:",

'attempts_desc' => "(Numero de ves que el cliente puede descargar el producto.)",

'styles_misc' => "Estilos &amp; Otros",

'default_language' => "Idioma por defecto:",

'store_skin' => "Estilo de la Tienda:",

'no_cats_per_row' => "No de Categorias por fila:",

'dir_symbol' => "Directorio Simbolo:",

'prods_per_page' => "No de Productos por pagina",

'precis_length' => "Largo de Precios Producto:",

'chars' => "(Caracteres)",

'no_sale_items' => "No. de Item en la Caja de Ofertas:",

'no_pop_prod' => "No. de Item en la Caja Popular:",

'email_name' => "Nombre Email:",

'email_name_desc' => "(Esto es usado como el nombre de envio de los correos enviados desde este sitio.)",

'email_address' => "Direccion de Correo:",

'email_address_desc' => "(Este es usado como correo del sitio.)",

'mail_method' => "Metodo de Envio del Correo:",

'mail_recommended' => "(SMTP recomendado)",

'max_upload_size' => "Max Tamaño Archivo:",

'under_x_recom' => "(Se Recomienda menos 2048Kb)",

'max_sess_length' => "Max Duracion de Sesion:",

'db_settings' => "Configuracion de Base de Datos",

'db_host' => "Alojamiento de Base de datos:",

'db_username' => "Nombre de Usuario de Base de Datos:",

'db_password' => "Clave de Base de Datos",

'db_name' => "Nombre de Base Datos:",

'db_prefix' =>" Prefijo de Base de datos",

'gd_settings' => "Configuracion de GD",

'gd_ver' => "Version GD:",

'gd_thumb_size' => "Tamaño Miniatura:",

'gd_gif_support' => "Permita La Ayuda del GIF: (cerciórese de por favor que esto esté permitida en su servidor)",

'gd_max_img_size' => "Max Tamaño de Imagen:",

'gd_img_quality' => "GD Calidad Imagen:",

'recom_quality' => "(60 - 80 recomendado)",

'stock_settings' => "Configuracion Stock",

'use_stock' => "Mostrar nivel de Stock?",

'allow_out_of_stock_purchases' => "Permitir compras fuera de stock?",

'weight_unit' => "Unidad de Peso:",

'time_and_date' => "Hora &amp; Fecha",

'time_format' => "Formato Tiempo:",

'time_format_desc' => "(Ver <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Diferencia Horaria:",

'time_offset_desc' => "(Segundos - usado para servidores de diferentes zonas)",

'date_format' => "Formato Fecha:",

'date_format_desc' => "(Ver <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Configuracion Local",

'default_currency' => "Moneda por defecto",

'inc_tax_prices' => "Incluir Impuesto en precios?",

'sale_mode' => "Modo Oferta:",

'percent_of_all' => "Porcentaje de descuento",

'ind_sale_per_item' => "Oferta individual por item",

'sale_mode_off' => "Modo Oferta Deshabilitado",

'sale_per_off' => "Oferta Porcentaje Descuento:",

'sale_per_off_desc' => "(Percentaje aplicado a todos los precios)",

'diff_dispatch' => "Permitir despacho a otra direccion que la direccion de factura?",

'update_settings' => "Actualizar Configuracion",

'update_success' => "Actualizado Exitosamente!.",

'update_fail' => "Error no se logor actualizar.",

'add_success' => "Agrego Actualizar",

'add_fail' => "Error no fue agregado.",

'delete_success' => "Borrado Exitosamente.",

'delete_failed' => "Error al Borrar.",

'currencies' => "Monedas",

'currency' => "Moneda",

'currencies_desc' => "Porfavor agregar, editar o borrar monedas a la continuacion:",

'c_code' => "Codigo",

'c_name' => "Nombre",

'c_value' => "Valor",

'symbol_left' => "Simbolo Izquierdo",

'symbol_right' => "Simbolo Derecho",

'decimal_places' => "Lugar de decimales",

'last_updated' => "Ultima Actualizacion",

'c_status' => "Estado",

'no_currencies' => "No hay  valores de monedas en la base de datos.",

'countries' => "Paises",

'country' => "Pais",

'edit_countries_below' => "Porfavor agregar, editar o borrar paises a continuacion:",

'disable' => "Desactivar",

'enable' => "Activar",

'iso' => "ISO",

'iso_name' => "Nombre",

'iso3' => "ISO3",

'num_code' => "Numero Codigo",

'action' => "Accion",

'warn_del_country' => "Esta seguro que desea borrar esto? Todos los paises, zonas, estados seran borrados con ello.",

'no_countries_in_db' => "No hay paises en la base de datos.",

'edit_counties' => "Porfavor agregar editar o borrar provinias/zonas/estados a continuacion:",

'no_counties_in_db' => "No hay provincias, estados ni zonas en la base de datos.",

'tax_Settings' => "Configuracion Impuestos",

'edit_locale_below' => "Porfavor edite su configuracion local a continuacion:",

'tax_only_to' => "Aplicar impuestos SOLO a las siguientes areas:",

'manage_tax_below' => "Porfavor maneje sus diferentes tipos de impuestos en la siguiente tabla. Esto puede ser aplicado a cada producto como tambien aplicar por diferentes tipos de impuesto.",

'tax_class2' => "Clase de Impuesto",

'rate_per' => "Tarifa (%)",

'no_taxes_setup' => "Lo siento, no hay impuestos que aplicar.",

'tax' => "Impuesto",

);



$lang['admin']['stats'] = array(

'store_stats' => "Estadisticas de la Tienda",

'choose_view' => "Porfavor seleccione el tipo de estadistica que desea ver:",

'search_terms' => "Busqueda pr Terminos",

'product_pop' => "Popularidad del Producto",

'cust_online' => "Clientes Conectados",

'search_terms_order_by' => "Buscar por Terminos (Ordenado por No de Busquedas)",

'sorry_no_data' => "Lo siento no hay informacion que mostrar.",

'product_pop_ordered_by' => "Producto Popular (Orderenado por Vistas)",

'cust_active' => "Clientes quienes han sido activados en los ultimos 15 minutos",

'hash' => "#",

'customer' => "Cliente",

'location' => "Ubicacion",

'sess_start_time' => "Inicio de la Sesion",

'last_click_time' => "Tiempo Ultimo Click",

'sess_length' => "Largo de la Sesion",

'geust' => "Invitado",

'signed_in' => "Identificado",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "Advertencia: El archivo de configuracion principal 'includes/global.inc.php' posee permisos de escritura, lo cual pone en riesgo su tienda. Porfavor cambiar los permisos a CHMOD 0644 lo antes posible .",

'401' => "Error 401: Usted no posee autorizacion para visitar esta pagina, contacte al administrador.",

'welcome_note' => "Bienvenido al Panel de Administracion de CubeCart",

'last_login' => "Ultimo ingreso de ",

'by' => "por",

'failed' => "Error.",

'store_overview' => "Resumen de la Tienda:",

'version' => "Version:",

'visit_cc' => "Visitar El servidor de descargas de CubeCart",

'no_products' => "Numero de Productos:",

'no_customers' => "Numero de Clientes:",

'img_upload_size' => "Tamaño de la Carpeta de Imagenes Subidas:",

'no_orders' => "Numero de Pedidos:",

'quick_search' => "Busqueda Rapida",

'order_no' => "Numero de Orden:",

'search_now' => "Buscar Ahora",

'customer' => "Cliente:",

'login_failed' => "Eror al Ingreso! El usuario o clave son incorrectas.",

'new_pass_sent' => "Una nueva clave ha sido enviado a su correo electronico",

'no_admin_sess' => "No se encontro sesion de administrador.",

'login_fail_2' => "Error al Ingresar. Porfavor intentar de nuevo.",

'login_below' => "Porfavor Identificarse:",

'username' => "Usuario:",

'password' => "Clave:",

'request_pass' => "Olvido su clave?",

'login' => "Login",

'logout_failed' => "Error al terminar sesion, no hay sesiones de administrador presentes.",

'reset_pass_email' => "Estimado %s,



Usted o alguien haciendose pasar po usted ha solicitado reiniciar su clave

Su nueva informacion de acceso es:

~~~~~~~~~~~~~~~~~~~~~~~~~~

Usuario: %s

Clave: %s

~~~~~~~~~~~~~~~~~~~~~~~~~~



Este correo fue enviado desde %s/admin/requestPass.php\n

Direccion IP de quien envia: %s",

'pass_reset_failed' => "Error al reiniciar clave.",

'enter_email_below' => "Ingrese su direccion de correo a continuacion:",

'email_address' => "Direccion de Correo:",

'send_pass' => "Enviar Clave",

);



$lang['admin']['nav'] = array(

'permission_error' => "Usted no tiene autorizacion para acceder a esta pagina.",

'navigation' => "Navigacion",

'admin_home' => "Inicio Admin",

'store_home' => "Inicio Tienda",

'store_config' => "Configuracion Tienda",

'gen_settings' => "Configuracion General",

'taxes' => "Impuestos",

'countries_zones' => "Paises &amp; Zonas",

'currencies' => "Monedas",

'modules' => "Modulos",

'shipping' => "Envios",

'gateways' => "Empresas para Pago",

'affiliates' => "Afiliados",

'catalog' => "Catalogo",

'view_products' => "Ver Productos",

'add_product' => "Agregar Productos",

'product_options' => "Opciones Productos",

'view_categories' => "Ver Categorias",

'add_categories' => "Agregar Categorias",

'customers' => "Clientes",

'view_customers' => "Ver Clientes",

'email_customers' => "Email Clientes",

'orders' => "Pedidos",

'file_manager' => "Admin. Archivos",

'manage_images' => "Admin. Imagenes",

'upload_images' => "Subir Imagen",

'statistics' => "Estadisticas",

'view_stats' => "Ver Estadisticas",

'documents' => "Documentos",

'homepage' => "Pagina Inicial",

'site_docs' => "Documentos del Sitio",

'misc' => "Otros",

'server_info' => "Info  del Servidor",

'admin_users' => "Usuarios Administradores",

'administrators' => "Administradores",

'admin_sessions' => "Sesiones de Admin.",

);



$lang['admin']['incs'] = array(

'administration' => "Administration",

'logged_in_as' => "Identificado como:",

'logout' => "Salir",

'change_pass' => "Cambiar Clave",

'error_editing' => "Error Intentando Editar.No se pudo ingresar la informacion.",

'config_updated' => "Configuracion Actualizada!. Porfavor asegurese que los permisos de seguridad han vuelto a la normalidad.",

'cant_write' => "No se puedo abrir el archivo '%s' para escritura. Intente asignar permisos de CHMOD 0777. Recuerdo regresar los permisos a CHMOD 0644 despues de actualizar!",

'db_config_updated' => "Configuración Puesta al día.",

'db_cant_write' => "¡Actualizado Fallado!",

'select_above' => "Seleccione Arriba",

);



/////////////////////////////////////

//// FRONTEND LANGUAGE

/////////////////////////////////////

/////////// GLOBAL FRONT ////////////

$lang['front']['yes'] = "Si";

$lang['front']['no'] = "No";

/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Enlaces Utiles",

'reg_and_checkout' => "Registrar &amp; Revisar",

'cont_shopping' => "Continuar Comprando",

'edit_del_add' => "Editar Direccion de Entrega",

'edit_inv_add' => "Editar Direccion de Factura",

'empty_cart' => "Carro Vacio",

'prev_page' => "Pagina Anterior",

'homepage' => "Pagina Inicial",

'shop_by_cat' => "Comprar por Categoria",

'sale_items' => "Productos en Oferta",

'save' => "Ahorro",

'currency' => "Moneda",

'information' => "Informacion",

'products' => "Productos:",

'categories' => "Categorias:",

'prices' => "Precios:",

'language' => "Idioma",

'mailing_list' => "Lista de Correo",

'subscribe_below' => "Suscribir a nuestra Lista de Correo:",

'email' => "Email:",

'join_now' => "Inscribirse!",

'already_subscribed' => "La direccion de correo %s se ha suscrito a nuestra lista de correo. Porfavor identificarse para ingresar y cancelar su subscripcion.",

'enter_valid_email' => "Porfavor ingrese una direccion de correo valida! .",

'added_to_mail' => "Gracias, %s ha sido agregadoa nuestra lista de correo.",

'subscribed_to_mail' => "Gracias, %s ha sido agregadoa nuestra lista de correo..",

'popular_products' => "Productos Popular ",

'featured_prod' => "Producto Especial",

'sale_items' => "Productos en Oferta",

'search_for' => "Buscar por:",

'go' => "Ir",

'welcome_back' => "Bienvenido de vuelta,",

'logout' => "Salir",

'your_account' => "Su Cuenta",

'welcome_guest' => "Bienvenido",

'login' => "Ingresar",

'register' => "Registrar",

'shopping_cart' => "Carro de Compras",

'basket_empty' => "Su carro esta vacio.",

'items_in_cart' => "Productos en el Carro:",

'total' => "Total:",

'view_basket' => "Ver Carro",

);



$lang['front']['account'] = array(

'your_account' => "Su Cuenta",

'personal_info' => "Informacion Personal",

'order_history' => "Historial de Pedidos",

'change_password' => "Cambiar Clave",

'newsletter' => "Subscripcion de Noticias",

'login_to_view' => "Debe ingresar identificado para ver esta pagina .",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "La clave que ingreso no es correcta.",

'conf_not_match' => "Su clave de confirmacion no concuerda con su nueva clave.",

'change_pass' => "Cambiar Clave",

'password_updated' => "Gracias, su clave fue actualizada.",

'change_pass_below' => "Cambie su clave a continuacion:",

'old_pass' => "Clave Antigua:",

'new_pass' => "Clave Nueva:",

'confirm_pass' => "Confirmar Clave:",

'submit' => "Enviar",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Lo Siento",

'expired' => "Su enlace de descarga ha expirado o no es valido.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Olvido Su Clave?",

'email' => "Email:",

'send_pass' => "Enviar Clave",

'reset_email' => "Estimado %s %s,



Usted ha solicitado reiniciar su clave,  sus nueva informacion a continuacion:



~~~~~~~~~~~~~~~~~~~~~~~~~~

Usuario: %s

Clave: %s

~~~~~~~~~~~~~~~~~~~~~~~~~~

Para ingresar visite el siguiente enlace:

%s/index.php?act=login

~~~~~~~~~~~~~~~~~~~~~~~~~~



Este correo fue enviado de %s

Direccion IP de quien envia: %s",

'new_pass_sent' => "Una nueva clave ha sido enviada a  %s.",

'email_not_found' => "Lo siento pero su direccion de correo no se encontro.",

'enter_email' => "Porfavor ingrese su direccion de correo de ingreso para enviarle una clave temporal.",

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

'newOrderMsg' => "Un cliente acaba de hacer la orden %s, para visión esta orden sigue por favor el acoplamiento abajo: \n\n %s",

'newOrderSubj' => "La Nueva Orden Del Almacén Colocó",

'payment' => "Forma de Pago",

'cart' => "Carro",

'address' => "Direccion",

'payment' => "Pago",

'complete' => "Completo",

'fill_out_below' => "Porfavor complete el siguiente formulario:",

'transferring' => "Transferencia de Pago",

'go_now' => "Ir Ahora!",

'continue' => "Continuar",

'choose_method' => "Porfavor elegir su forma de pago:",

'your_comments' => "Sus Comentarios:",

'none_configured' => "Lo siento, no hay formas de pago configuradas.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Ingresar",

'username' => "Usuario:",

'password' => "Clave:",

'remember_me' => "Recordarme?",

'forgot_pass' => "Olvido su clave?",

'login_success' => "Ha ingresado exitosamente.",

'already_logged_in' => "Usted ya a sido identificado.",

'login_failed' => "Error al Ingreso",

'login_below' => "Porfavor indentificarse:",

);

$lang['front']['index'] = array(

'latest_products' => "Ultimos Productos",

);

$lang['front']['logout'] = array(

'logout' => "Salir",

'session_destroyed' => "Su sesion ha sido concluida.",

'no_session' => "No se encontraron sesiones para cerrar, Usted parece haber ingresado por error.",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Preferencias Lista de Correo",

'prefs_updates' => "Las preferencias de su Lista de Correo han sido actualizadas.",

'edit_prefs_below' => "Porfavor editar sus preferencias a continuacion:",

'subscribe' => "Inscribirse en la lista de correos?",

'email_format' => "Formato Email:",

'plain_text' => "Texto Plano",

'html' => "HTML",

'html_abbr' => "Hypertext Markup Language",

'update' => "Actualizar",

'login_required' => "Usted debe identificarse para acceder a esta pagina.",

);



$lang['front']['noShip'] = array(

'sorry' => "Lo siento",

'desc' => "Nosotros no enviamos productos a su pais.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Lo siento",

'desc' => "Nosotros no podemos enviar productos si sobrepasan el total de peso de la su orden.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "El numero telefonico solo deben ser caracteres numericos.",

'complete_all' => "Porfavor asegurese de completar todos los campos requeridos.",

'email_invalid' => "Porfavor ingresa una direccion de correo valida.",

'numeric_only' => "Telefono solo debe ser texto numerico.",

'email_inuse' => "Lo siento esa direccion de correo ya esta siendo usada por otro cliente.",

'update_email' => "Estimado %s %s,\n\n

Este correo ha sido enviado para confirmar que su informacion personal ha sido actualizada exitosamente, Si usted cree que su cuenta fue actualizada por otra persona haciendose pasar por usted, porfavor contacte inmediatamente a nuestro equipo de administracion.\n\n

\n\n

Este correo fue enviado de %s\n

Direccion IP de quien envia: %s",

'update_email_subj' => "Informacion Personal Actualizada",

'personal_info' => " Informacion Personal", 

'account_updated' => "Su cuenta ha sido actualizada. Puede editar esto de nuevo si lo estima necesario.",

'edit_below' => "Porfavor a continuacion edite su informacion personal:",

'title' => "Titulo:",

'first_name' => "Nombre:",

'last_name' => "Apellido:",

'email' => "Email:",

'address' => "Direccion:",

'town' => "Ciudad:",

'county' => "Estad/Zona:",

'postcode' => "Zip/Codigo Postal:",

'country' => "Pais:",

'phone' => "Telefono:",

'mobile' => "Telefono Movil:",

'update_account' => "Actualizar Cuenta",

'login_required' => "Usted debe estar identificado para poder acceder a esta pagina.",

);



$lang['front']['reg'] = array(

'fill_required' => "Porfavor complete todos los campos requeridos.",

'pass_not_match' => "Porfavor asegurese de que sus claves coinciden.",

'enter_valid_email' => "Porfavor ingrese una cuenta valida de correo.",

'enter_valid_tel' => "El numero telefonico solo deben ser caracteres numericos.",

'email_in_use' => "Lo siento esa direccion de correo ya esta siendo utilizada.",

'note_required' => "Porfavor completar todos los campos marcados con un asterisco (*) los cuales son necesarios para poder completar su pedido.",

'express_reg' => "Registracion Rapida!",

'submit_and_cont' => "Enviar &amp; Continuar",

'personal_details' => "Detalles Personales",

'address' => "Direccion",

'title' => "Titulo:",

'title_desc' => "(Sr/Sres/Sra)",

'first_name' => "Nombre:",

'address2' => "Direccion:",

'last_name' => "Apellido:",

'email_address' => "Direccion de Correo:",

'town' => "Ciudad:",

'phone' => "Telefono:",

'county' => "Region/Estado:",

'mobile' => "Telefono Movil:",

'country' => "Pais:",

'postcode' => "Codigo Postal:",

'security_details' => "Detalles de Seguridad",

'choose_pass' => "Elegir Clave:",

'conf_pass' => "Confirmar Clave:",

'privacy_settings' => "Configuracion de Privacidad",

'receive_emails' => "Le gustaria recibir novedades de nuestra tienda",

'email_format' => "Formato del Email:",

'styled_html' => "Estilo HTML",

'plain_text' => "Texto Plano",

'tandcs' => "Terminos &amp; Condiciones",

'please_read' => "Porfavor asegurese de haber leido",

);





$lang['front']['tellafriend'] = array(

'fill_out_below' => "Please submit the form below to tell a friend about '%s'.",

'error_code' => "Either no security code was entered or it did not match the characters in the image.",

'error_name' => "Please enter both your name and the recipients name.",

'error_email' => "Please make sure both your email address and the recipients is valid.",

'spambot' => "Security Code:",

'email_body' => "Estimado %s,



%s



~~~~~~~~~~~~~~~~~~~~~~~~~~

TPara ver este producto porfavor visitar el siguiente enlace:

%s/index.php?act=viewProd&productId=%s

~~~~~~~~~~~~~~~~~~~~~~~~~~



Este correo fue enviado desde la siguiente direccion IP: %s",

'email_subject' => "Mensaje: %s",

'tellafriend' => "Cuentale a un Amigo",

'message_sent' => "Gracias, su mensaje a sido envia a <strong>%s</strong> contadole sobre '%s'. Si desea enviar esta informacion a otro amigo, complete los siguientes datos:",

'fill_out_below' => "Porfavor envia la siguiente informacion para contarle a su amigo sobre '%s'.",

'friends_name' => "Nombre de su Amigo:",

'friends_email' => "Email: de Amigo",

'your_name' => "YSu nombre:",

'your_email' => "Su email:",

'message' => "Mesaje:",

'default_message' => "He encontrado esto'%s' pensando que le podria interesar.",

'send' => "Enviar",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Desinscribirse",

'email' => "Email:",

'go' => "Ir",

'enter_valid_email' => "Porfavor ingrese una direccion de correo valida.",

'email_removed' => "Gracias, <strong>%s</strong> ha sido removido exitosamente de nuestra lista .",

'email_not_found' => "Lo siento, <strong>%s</strong> no fue encontrado en nuestra lista de correo o fue previamente borrado.",

'enter_email_below' => "Porfavor ingrese su direccion de correo a continuacion para desinscribirse de nuestra lista de correo:",

);



$lang['front']['viewCat'] = array(

'search_results' => "Rsultados de la Busqueda",

'sale_items' => "Productos en Oferta",

'image' => "Imagen",

'description' => "Descripcion",

'price' => "Precio",

'products_in' => "Productos en:",

'buy' => "Comprar",

'more' => "Mas",

'out_of_stock' => "FUERA DE STOCK",

'no_products_match' => "Lo siento, no hay productos que concuerden con la busqueda:",

'no_prods_in_cat' => "No hay productos en esta categoria.",

);



$lang['front']['viewDoc'] = array(

'error' => "Error",

'does_not_exist' => "El documento no existe.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Pedido No:",

'customer_info' => "Informacion del Cliente:",

'invoice_address' => "Direccion de Factura:",

'delivery_address' => "Direccion de Entrega:",

'na' => "n/a",

'customer_comments' => "Comentarios del Cliente:",

'order_summary' => "Resume del Pedido:",

'product' => "Producto",

'product_code' => "Cogido del Producto",

'quantity' => "Cantidad",

'price' => "Precio",

'download_here' => "Descargar Aqui",

'review_below' => "Porfavor revisar el pedido a continuacion:",

'order_date_time' => "Pedido Fecha/Hora:",

'payment_method' => "Forma de Pago",

'ship_method' => "Forma de Envio:",

'subtotal' => "Subtotal:",

'total_tax' => "ImpuTotal:",

'shipping' => "Envio:",

'grand_total' => "Importe Total:",

'order_not_found' => "El numero de la orden no fue encontrado.",

'login_required' => "Debe identificarse primero para ver esta pagina.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "Sus Pedidos",

'orders_listed_below' => "Todos los pedidos bajo esta cuenta son listados a continuacion:",

'order_no' => "Pedido No",

'status' => "Estado",

'date_time' => "Fecha/Hora",

'action' => "Accion",

'view' => "Ver",

'no_orders' => "No tenemos registros de alguna orden en nuestro sistema. Si crees que es un error porfavor contactar a un administrador lo antes posible.",

'login_required' => "You must login to view this page.",

);



$lang['front']['viewProd'] = array(

'product' => "Producto",

'product_info' => "Informacion del Producto",

'price' => "Precio:",

'product_code' => "Codigo del Producto:",

'tellafriend' => "Contarle a un amigo?",

'quantity' => "Cantidad:",

'more_images' => "[+] Mas Imagenes",

'add_to_basket' => "Agregar a la Tienda",

'location' => "Ubicacion:",

'no_instock' => "No Stock:",

'instock' => "En Stock",

'out_of_stock' => "FUERA DE STOCK",

'prod_opts' => "Opciones del Producto:",

'prod_not_found' => "El producto no pudo ser encontrado.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "Su Carro de Compras esta vacio.",

'allready_customer' => "Ya es Cliente?",

'login_below' => "Ingrese con sus datos:",

'username' => "Usuario:",

'password' => "Clave:",

'remember_me' => "Recordarme",

'login' => "Ingresar",

'forgot_pass_q' => "Olvido su clave?",

'need_register' => "Necesitar Registrarse?",

'express_register' => "Nuestro registro rapido puede ser completado rapido y facilmente.",

'reg_and_cont' => "Registrar &amp; Continuar",

'cont_shopping_q' => "Continar Compra?",

'cont_shopping' => "Continar Comprando",

'cont_browsing' => "Para Continuar coprar como invitado sin registrar, debe presionar el boton a continuacion P.D: No podra comprar los productos si no  completa el registro como cliente.",

'save_text' => "Ahorre:",



);





$lang['front']['cart'] = array(

'free_shipping' => "Envio Gratuito",

'view_cart' => "Ver Carro",

'cart' => "Carro",

'address' => "Direccion",

'payment' => "Forma de Pago",

'complete' => "Completo",

'add_more' => "Desea agregar mas productos? Ingrese condigo del producto:",

'add' => "Agregar",

'qty' => "Ctd",

'product' => "Producto",

'code' => "Codigo",

'stock' => "Stock",

'price' => "Precio",

'line_price' => "Linea de Precio",

'delete' => "Borrar",

'remove' => "Remover Producto",

'invoice_address' => "Direccion de Factura",

'delivery_address' => "Direccion de Entrega",

'title' => "Titulo:",

'first_name' => "Nombre:",

'last_name' => "Apellido:",

'address2' => "Direccion",

'town' => "Ciudad:",

'county' => "Estado/Provincia:",

'postcode' => "Zip/Codigo Postal:",

'country' => "Pais:",

'edit_invoice_address' => "Editar Direccion de Factura",

'edit_delivery_address' => "Editarr Direccion de Entrga",

'stock_warn' => "Usted ha pedido mas productos de los que se encuentran disponibles. Esto podria hacer que su orden no sea entregada hasta completar el stock necesario.",

'amount_capped' => "Lo siento en este momento no podemos enviar pedidos sobre nuestro stock.<br />La cantidad del producto ha sido superada.",

'na' => "n/a",

'shipping' => "Envio:",

'tax' => "Impuesto:",

'subtotal' => "Subtotal:",

'cart_total' => "Total del Carro:",

'if_changed_quan' => "(Si usted ha cambiado alguna cantidad)",

'update_cart' => "Actualizar Carro",

'continue' => "Continar",

'cart_empty' => "Su carro esta vacio.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Pantalla de Confirmacion",

'cart' => "Carro",

'address' => "Direccion",

'payment' => "Forma de Pago",

'complete' => "Completa",

'order_success' => "Gracias!, su orden fue ingresada exitosamente, porfavor visite nuestra tienda.",

'order_fail' => "Error al ingresar la orden.",

'try_again_desc' => "Puede comprar el contenido de su carro a continuacion:",

'try_again' => "Intentar de Nuevo",

'request_login' => "Debe estar identificado para ver esta pagina.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Estimado %s,



Gracias su orden ha sido ubicada en el lugar  no: %s ingresada el %s



La transaccion fue ingresada exitosamente y le enviaremos su compra a la brevedad.



~~~~~~~~~~~~~~~~~~~~~~~~~~

Nombre: %s

Subtotal: %s

Envio & Empaque: %s

Impuesto: %s

Importe Total: %s

~~~~~~~~~~~~~~~~~~~~~~~~~~



Direccion de Factura:

%s

%s

%s

%s

%s

%s

%s



Direccion de Envio:

%s

%s

%s

%s

%s

%s

%s



Forma de Pago: %s

Forma de Envio: %s",

'inv_email_body_2' => "\nSus comentarios: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Order Inventory:\n",

'inv_email_body_4' =>"Producto: %s\n",

'inv_email_body_5' => "Opciones: %s\n",

'inv_email_body_6' => "Cantidad: %s

Codigo del Producto: %s

Precio: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Orden No: ",

'digi_email_body1' => "Estimado %s,



Gracias por su pedido no: %s ingresado el %s



A continuacion los enlaces que necesita para ingresar en caso que halla adquirido algun producto virtual o servicio.

IMPORTANTE estos enlaces expiraran el %s y usted tiene %s intentos para poder descargar. Si tiene algun problema no dude en escribir, sin olvidar el numero de su orden.



~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'digi_email_body2' => "%s

ENLACE DE DESCARGA:

%s/download.php?pid=%s&oid=%s&ak=%s

~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Acceso a Descargas: ",

);



$lang['misc'] = array(

'pages' => " paginas ",
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