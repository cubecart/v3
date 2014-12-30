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
|	Portuguese (pt) Language File
|   Translate by Ivo Alves -
+--------------------------------------------------------------------------------------
*/


/////////////////////////////////////
//// ADMIN LANGUAGE
/////////////////////////////////////
setlocale(LC_TIME, 'pt_PT');

/////////// GLOBAL ADMIN ////////////
$lang['admin']['yes'] = "Sim";

$lang['admin']['no'] = "Não";

$lang['admin']['edit'] = "Editar";

$lang['admin']['delete'] = "Eliminar";

$lang['admin']['delete_q'] = "Tens a certeza que queres Apagar?";

$lang['admin']['add'] = "Adicionar";

$lang['admin']['add_new'] = "Adicionar Novo";

$lang['admin']['write'] = "Escrever";

$lang['admin']['read'] = "Ler";

$lang['admin']['na'] = "N/A"; // as in not applicable

$lang['admin']['all'] = "Tudo";

$lang['admin']['remove'] = "Remover";

/////////////////////////////////////



// admin/adminusers/

$lang['admin']['adminusers'] = array (

'del_success' => "Eliminado com Sucesso!.",

'del_failed' => "Erro ao Eliminar.",

'update_success' => "Actualizado com Sucesso.",

'update_fail' => "Erro ao Actualizar.",

'add_success' => "Adicionado com Sucesso.",

'add_failed' => "Erro ao Adicionar Utilizador.",

'administrators_title' => "Administradores",

'current_users' => "Utilizadores Actuais.",

'id' => "Id",

'user_notes' => "Utilizador / Notas",

'no_logins' => "Não existem Logins de Utilizadores",

'super_user' => "Super Utilizador?",

'email' => "Email",

'action' => "Acção",

'add_admin' => "Podes usar este formulário para adicionar um administrador.",

'full_name' => "Nome Completo:",

'username' => "Utilizador:",

'administrator' => "Administrador",

'email2' => "Email:",

'password' => "Password:",

'pass_warn' => "(Só escrever a Password se deseja mudar a actual.)",

'make_super' => "Criar Super Utilizador?",

'notes' => "Notas:",

'permissions' => "Permissões",

'pass_updated' => "Password actualizada.",

'pass_not_updated' => "Password não actualizada.",

'change_pass_below' => "Por favor muda a tua Password:",

'old_pass' => "Password Antiga:",

'new_pass' => "Password Nova:",

'confirm_pass' => "Confirmar Password:",

'perms_updated' => "Permissões Actualizadas.",

'set_perms' => "Por favor configurar as permissões para o seguinte utilizador.",

'section' => "Secção",

'nb_bulk' => "Para enviar correio aos seus clientes o utilizador deve ter permissões de gravação.",

'admin_sessions' => "Sessões Admin",

'sessions_desc' => "Abaixo estão as tentativas de Logins como Administrador. Vigie com cuidado esta situação para evitar tentativas de hijacking. Recomenda-se mudar a Password de administrador regularmente.",

'login_id' => "Login ID",

'time' => "Tempo",

'ip_address' => "Endereço IP",

'success' => "Sucesso",

);



$lang['admin']['categories'] = array (

'delete_success' => "Eliminado com Sucesso.",

'delete_fail' => "Erro ao Eliminar.",

'update_success' => "Actualizado com Sucesso.",

'update_fail' => "Erro ao actualizar a categoria.",

'add_success' => "Adicionado com Sucesso.",

'add_failed' => "Erro ao adicionar uma categoria.",

'categories' => "Categorias",

'categories_desc' => "Abaixo está a lista de todas as categorias actuais da base de dados.",

'cat_name' => "Nome da Categoria",

'dir' => "Pasta",

'image' => "Imagem",

'no_products' => "Não há Produtos",

'action' => "Acção",

'cannot_del' => "Esta categoria não pode ser eliminada assim como os produtos que ela contém.",

'no_cats_exist' => "Não existem categorias na base de dados.",

'add_desc' => "Pode adicionar categorias com subcategorias ilimitadas, fazendo upload de imagens ou utlizando imagens já existentes no servidor.",

'category' => "Categoria",

'category_name' => "Nome da Categoria:",

'category_level' => "Nível da Categoria:",

'top_level' => "Nível Superior",

'image_optional' => "Imagem: (Opcional)",

'upload_new_image' => "Upload de Nova Imagem",

'browse_existing' => "Procurar Imagem Existente",

'ship_by_cat' => "Envio por Categoria",

'per_ship' => "Por Envio:",

'per_item' => "Por Item:",

'per_int_ship' => "Por Envio Internacional:",

'per_int_item' => "Por Item Internacional:",

);



$lang['admin']['customers'] = array (

'delete_success' => "Eliminado com Sucesso!.",

'delete_fail' => "Erro ao eliminar.",

'update_success' => "Cliente actualizado com sucesso.",

'update_fail' => "Erro ao actualizar o cliente.",

'search_term' => "Procurar Termo:",

'reset' => "Limpar",

'name' => "Nome",

'email' => "Email",

'invoice_add' => "Direcção da Factura",

'phone' => "Telefone",

'reg_ip' => "Data de Registo / Direcção IP",

'no_orders' => "Número de Pedidos",

'action' => "Acção",

'no_cust_exist' => "Número de Clientes na base de dados.",

'edit_below' => "Por favor editar a seguinte informação:",

'title' => "Titulo",

'first_name' => "Nome:",

'last_name' => "Apelido:",

'email2' => "Email:",

'address' => "Endereço:",

'town' => "Cidade:",

'county' => "Concelho",

'postcode' => "Código Postal:",

'country' => "Pais:",

'phone2' => "Telefone:",

'edit_customer' => "Editar Cliente",

'no_download_email' => "Não Existem Emails novos.",

'email_customers' => "Email Clientes",

'create_email' => "Por favor indique o seu email:",

'hint' => "Hint:",

'click_source' => "Pode pressionar o botão do código-fonte e adicionar a um documento html já feito.",

'important' => "Importante:",

'absolute_links' => "Confirme de que todas as imagens e links são absolutos (que contenham o dominio). Em alguns países é uma obrigação legal fornecer um link de desinscrição:",

'email_subject' => "Título do Email:",

'senders_name' => "Nome de quem envia:",

'senders_email' => "Mail de quem envia:",

'return_path' => "Caminho de retorno:",

'bounce_desc' => "(O caminho para onde os emails devolvidos seguem)",

'send_test' => "Enviar Email de teste?",

'test_email_recip' => "Endereço do Email de teste:",

'send_email' => "Enviar Email",

'download_or_send' => "Por favor escolha fazer Download de Endereços de Email dos clientes ou enviar através desta página Web.",

'please_choose' => "Por favor escolha:",

'used_to_download' => "Isto é usado para fazer download dos endereços de email para ser usado com programas de envio massivo de correio.",

'bulk_to_subscribed' => "Isto permite enviar emails massivos SÓ a clientes que se tenham registado na sua lista de Emails..",

'include_name' => "Incluir Nome?",

'download_email' => "Descarregar Email",

'send_email' => "Enviar Email",

'sending_complete' => "Envio Completo",

'sending' => "Enviando Email",

'recipient' => "Recipiente:",

'prev_page' => "Página Anterior",

'page' => "Página:",

'bulk_finished' => "O envio de mails massivo foi concluido com sucesso.",

'time_taken' => "Tempo utilizado:",

'recipients' => "Recipientes:",

);



$lang['admin']['docs'] = array (

'update_fail' => "Página Inicial não foi actualizada, por favor certifique-se de dar as permissões correctas ao ficheiro includes/static/home.inc.php .",

'update_success' => "Página Inicial actualizada com sucesso.",

'homepage' => "Página Inicial",

'enabled' => "Activado:",

'enabled_desc' => "(Se é desactivado, será usado o idioma por defeito.)",

'language' => "Idioma:",

'title' => "Título:",

'use_rich_text' => "Por favor usar um editor de texto mais potente para fazer modificações na página inicial. Uma vez alterada, as modificações serão automáticamente visivéis.",

'update_homepage' => "Actualizar Página Inicial",

'delete_success' => "Documento eliminado com sucesso.",

'delete_fail' => "Erro ao eliminar o documento.",

'update_success' => "Actualizado com sucesso",

'update_fail' => "Não foi actualizado.",

'add_success' => "Adicionado com sucesso.",

'add_fail' => "Erro ao adicionar o documento.",

'site_docs_other_lang' => "Documentos da Página Web - (outros idiomas)",

'use_rich_text' => "Por favor usar um editor de texto mais potente para adicionar ou editar os documentos da página web com idiomas diferentes.",

'site_doc_other_lang' => "Documentos da página Web - (Outros Idiomas)",

'doc_name' => "Nome do Documento:",

'language' => "Idioma:",

'update_doc' => "Actualizar Documento",

'save_doc' => "Guardar Documento",

'current_doc_list' => "Abaixo esta uma lista de todos os documentos da página web. Pode ter um nº ilimitado de documentos na sua pagina web, os quais podem ser editados ou apagados quando deseje.",

'doc_name2' => "Nome do Documento",

'action' => "Acção",

'no_site_docs' => "Não há documentos da página Web na base de dados.",

'site_docs' => "Documentos da página web",

'site_doc' => "Documento da página web",

'languages' => "Idioma",

'no_docs' => "Não há documentos na base de dados.",

);



$lang['admin']['filemanager'] = array (

'image_browser' => "Imagem do Navegador",

'file' => "ficheiro:",

'no_imgs' => "Não há imagens disponíveis. Por favor fecha a janela e faz upload de uma imagem",

'preview' => "Pre-visualizar:",

'ok' => "OK",

'cancel' => "Cancelar",

'prod_cat_use_img' => "Não há produtos ou categorias usando a imagem '%s'.",

'continue_q' => "CONTINUAR A ELIMINAR?",

'site_doc_use_img' => "Não há produtos ou categorias da pagina web usando a imagem '%s'.",

'home_use_img' => "A imagem '%s' é usada na página inicial.",

'gallery_use_img' => "A imagem '%s' é usada numa galeria de imagem do produto.",

'image_deleted' => "Imagen Eliminada.",

'delete_failed' => "Erro ao Eliminar.",

'image_manager' => "Administrador de Imagens",

'delete_from_server' => "Abaixo pode eliminar imagens do servidor.",

'img_click_prev' => "Imagem (Click para ampliar)",

'size' => "Tamanho",

'action' => "Acção",

'no_images_added' => "Não há imagens adicionadas.",

'prev_file' => "Pre-visualizar ficheiro",

'close_window' => "Fechar Janela",

'no_image_selected' => "Nenhuma imagem foi selecionada.",

'file_uploader' => "Fazer uploads de arquivos",

'upload_image' => "Fazer uploads de imagens",

'please_browse_img' => "Por favor procure a sua imagem:",

'file_too_big' => "Erro: %s esta fora do limite %s",

'img_already_exists' => "Erro: %s já existe, renomeie o ficheiro e faça o upload de novo.",

'upload_too_large' => "Erro: ou não há imagem ou o tamanho do ficheiro excede o limite permitido. O tamanho permitido por defeito é de 2MB.",

'not_valid_mime' => "Erro: %s não é um tipo válido de ficheiro.",

'image_upload_success' => "Sucesso: %s upload efectuado.",

'back' => "&laquo; Regressar",

);



$lang['admin']['misc'] = array (

'license_form' => "Formulário da Licença",

'write_error' => "Não se pode abrir o ficheiro includes/global.inc.php em modo escrita. Modifique o valor CHMOD para 0777. Não se esqueça de deixar o valor em 0644 depois de acabar!",

'try_again' => "Tente novamente",

'purchase_cubecart' => "Comprar o CubeCart:",

'invalid_key' => "Sinto muito mas a Chave da Licença não é válida ou já esta a ser utilizada.",

'purchase_license_key' => "Adquirir a Chave da Licença",

'run_unlicensed' => "Parece que está a utilizar uma versão sem a Licença da CubeCart. Por favor insira a sua chave da Licença para remover os direitos de cópia.",

'license_key' => "Chave da Licença:",

'submit_key' => "Submeter Chave da Licença",

'server_info' => "Informação do Servidor",

'ini_set_desc' => "A informação Abaixo mostra todas as configurações do ambiente do servidor. Contém todo o tipo de informação que pode ser necessário alterar se estiver a ter problemas com o Cubecart. N.B. Se tem um servidor partilhado ou um host virtual deve ter acesso limitado a modificações das definições. A função</span> <a href='http://www.php.net/ini_set' target='_blank' class='txtLink'>ini_set()</a> <span class='copyText'> pode ser usada para alterar essas defenições.",

);



$lang['admin']['orders'] = array (

'send_invoice_q' => "O estado deste encomenda foi alterado com sucesso. Neste ponto pode enviar uma factura por mail ao seu cliente e dar acesso a downloads dos produtos digitais disponivéis. Para fazer isso ",

'click_here' => "Carregue aqui",

'send_invoice_desc' => "Se o estado modificou de Pendente para Processado você terá a opção de enviar ao cliente uma factura-recibo e dar ao cliente acesso aos produtos digitais disponivéis se aplicavél.",

'delete_success' => "Eliminado com sucesso.",

'delete_fail' => "Erro ao eliminar.",

'orders' => "Encomendas",

'all_orders' => "Abaixo estão todas as Encomendas registadas na base de dados.",

'order_no' => "No. Encomenda",

'status' => "Estado",

'date_time' => "Data/Hora",

'customer' => "Cliente",

'ip_address' => "Endereço IP",

'cart_total' => "Total no Carro de compras",

'action' => "Acção",

'no_orders_in_db' => "Não há encomendas na base de dados.",

'order_email' => "Estimado %s,\n\nO estado da sua encomenda id: %s foi alterado para %s\n\n",

'email_staff_comments' => "A nossa equipa adicionou os seguintes comentários:\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n%s\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'email_sent_from' => "Este mail foi enviado automaticamente por %s",

'email_subj_status_change' => "Estado da encomenda modificado:",

'order_no2' => "Encomenda No:",

'print_packing_slip' => "Imprimir Tira de embrulho",

'customer_info' => "Informação do cliente",

'invoice_address' => "Endereço da Factura:",

'delivery_address' => "Endereço de entrega:",

'contact_info' => "Informação do contacto:",

'tel' => "Tel. Fixo:",

'mobile' => "Telemovel:",

'email' => "Email:",

'customer_comments' => "Comentários do cliente:",

'no_comments_left' => "Não deixaram comentários.",

'order_summary' => "Resumo da encomenda",

'product' => "Produto",

'code' => "Código",

'quantity' => "Quantidade",

'price' => "Preço",

'download_link' => "Link para Download:",

'warn_reset' => "Isto configura o total de Downloads para 0 e aumenta o tempo de expiração",

'reset_link' => "Reiniciar o Link",

'download_stats' => "Download (%s) vezes. O Link tem um tempo de expiração de  %s",

'ip_address2' => "Endereço IP:",

'order_date_time' => "Encomenda Data/Hora:",

'payment_method' => "Método de Pagamento:",

'ship_method' => "Método de Envio:",

'subtotal' => "Sub-total:",

'total_tax' => "Total c/ IVA:",

'shipping' => "Envio:",

'grand_total' => "Total:",

'order_notfound' => "A encomenda número %s não foi encontrada.",

'order_status' => "Estado da encomenda",

'shipping_date' => "Data de Envio:",

'ship_today' => "Enviar Hojeoy",

'modify_status' => "Modificar Estado:",

'staff_comments' => "Comentários da Loja:",

'info_not_sent_customer' => "(Esta informação NÃO será enviada ao cliente!)",

'inform_customer' => "Informação do Cliente:",

'customer_notified' => "(Com isto marcado o cliente é notificado da alteração do estado da encomenda.)",

'comments_2_customer' => "Comentários para o  Cliente:",

'comments_2_customer_desc' => "(Isto será adicionado ao mail de defeito se você quiser informar o cliente da alteração do estado da encomenda.)",

'save_order_status' => "Guardar o Estado da encomenda",

'paid_by' => "Pago por:",

'delivered_to' => "Enviado a:",

'invoice_reciept_for' => "Factura / Recibo para:",

'order_of_time' => "A sua encomenda ",

'order_id' => "ID da Encomenda:",

'digi_goods_desc' => "Se encomendou um produto digital, você deveria receber um mail que contenha as instruções para o seu download. Isto pode ser visto através do seu painel de controlo da sua conta onde terá controlo total á sua conta.",

'thank_you' => "Obrigado por comprar na nossa Loja! Volte Sempre!",

);



$lang['admin']['products'] = array (

'show_featured' => "Incluir os produtos mais recentes na Página Inicial?",

'upload_new_images' => "Upload de Imagens novas",

'no_images_avail' => "Não há imagens disponíveis.",

'prod_added_to_cat' => "Produto adicionado à categoria.",

'prod_not_added_to_cat' => "Erro ao adicionar uma categoria ao Produto.",

'prod_removed_from_cat' => "Produto removido da categoria.",

'prod_not_removed_from_cat' => "Produto nao removido da categoria.",

'title_extraCats' => "Administrador de Categorias",

'manage_cats' => "Administrar Categorias",

'master_cat' => "Categoria Principal:",

'close_window' => "Fechar Janela",

'img_added_to_prod' => "Imagem adicionada ao Produto.",

'img_not_added_to_prod' => "Erro ao adicionar a imagem do produto.",

'img_removed' => "Imagen removida do produto.",

'img_not_removed' => "Erro ao remover a imagem do produto.",

'image_management' => "Administrador de Imagem",

'manage_images' => "Administrar Imagens",

'image' => "Imagem",

'action' => "Acção",

'delete_success' => "Eliminado com sucesso.",

'delete_fail' => "Erro ao eliminar.",

'update_successful' => "Actualizado com sucesso!.",

'update_fail' => "Erro ao actualizar a categoria.",

'add_success' => "Adicionado com sucesso.",

'add_fail' => "Erro ao adicionar a categoria.",

'prod_inventory' => "Inventário de Produtos",

'current_prods_in_db' => "Em baixo esta a lista geral de todos os produtos da base de dados.",

'all_cats' => "Todas as Categorias",

'prod_name' => "Nome do Produto",

'prod_id' => "Id do Produto",

'prod_code' => "Temos em Stock",

'master_cat2' => "Categoria Principal",

'title' => "Titulo",

'stock_level' => "Nível de Stock",

'normal_price' => "Preço Normal",

'sale_price' => "Preço Promocional",

'asc' => "Ordem Ascendente",

'desc' => "Ordem Descendente",

'containing_text' => "Contem o  texto",

'filter' => "Filtro",

'reset' => "Reiniciar",

'id' => "id",

'type' => "Tipo",

'name' => "Nome",

'price_sale_price' => "Preço / Preço Promocional",

'in_stock' => "Em Stock",

'action' => "Acção",

'languages' => "Idiomas",

'no_products_exist' => "Não existem produtos na base de dados.",

'add_prod_desc' => "Abaixo pode usar o formulário para adicionar um produto ao inventário.",

'product' => "Produto",

'prod_name2' => "Nome do Produto:",

'prod_stock_no' => "Produto/Stock No:",

'auto_generated' => "(Se deixa em branco será preenchido automaticamente.)",

'description' => "Descrição:",

'primary_lang' => "(Está no idioma primário, outros idiomas podem ser adicionados mais tarde.)",

'category' => "Categoria:",

'image2' => "Imagem:",

'opt_and_thumbs' => "(Opções e Miniaturas serão adicionadas automaticamente se o formato escolhido for compatível.)",

'upload_new' => "Fazer upload de uma imagem nova",

'browse_existing' => "Procurar imagens existentes",

'normal_price2' => "Preço Normal:",

'sale_price2' => "Preço Promocional:",

'sale_mode_desc' => "(Isto é usado quando a Loja esta em modo Oferta.)",

'prod_weight' => "Peso do produto:",

'tax_class' => "Classe de imposto:",

'stock_level2' => "Nível de Stock:",

'reduce_stock_level' => "(Desconta cada vez que um produto é vendido.)",

'use_stock_q' => "Usar Nível de Stock?",

'product_type' => "Tipo de Produto:",

'tangible' => "Tangivel",

'digital' => "Digital",

'digi_path' => "Produtos Digitais são aqueles que requerem um caminho HTTP ou uma pasta na raiz de um servidor (ver Abaixo).",

'digi_info' => "Informação Digital:",

'digi_desc' => "<p><strong>Caminho HTTP:</strong> http://www.dominio.com/download/download.exe<br />

				<strong>Caminho do Servidor</strong> /usr/local/vhosts/www.dominio.com/download/download.exe <strong>(Recomendado!)	</strong></p>

<p>A vantagem de usar o Caminho da raiz de um servidor é que os ficheiros podem ser guardados em qualquer pasta sme ser exclusivamente na pasta publica. Se este método for escolhido, o Cubecart gera automaticamente um link para download que possui um tempo limitado e um numero limitado de downloads, isto é tudo configurado no painel de administrador.</p>",

'prod_inv_langs' => "Inventário de Produtos - (Outros Idiomas)",

'use_rich_oth_lang' => "Por favor usar um editor de texto mais potente para adicionar ou editar produtos.",

'language' => "Idioma:",

'update_prod_lang' => "Actualizar Idioma do Produto",

'save_prod_lang' => "Guardar Idioma do Produto",

'other_langs_exdefault' => "Abaixo está uma lista de todos os produtos em idiomas diferentes dos de defeito.",

'no_lang_exist' => "Não existe variação de Idioma para este produto na base de dados.",

'opt_add_success' => "Nome da Opção adicionada com sucesso.",

'opt_add_fail' => "Erro! Nome da Opção não adicionada!",

'att_add_success' => "Atributo da Opção adicionada com sucesso.",

'att_add_fail' => "Erro! Nome do Atributo não adicionado!",

'assign_success' => "Opção adicionada ao Produto.",

'assign_fail' => "Erro! Opção não adicionada ao Produto.",

'product_options' => "Opções de produtos",

'product_option' => "Opção do produto",

'quick_assign' => "Adição rápida:",

'prod_opts_of' => "Opções dos produtos de:",

'to' => "para",

'go' => "IR",

'opt_step1' => "1. Criar uma opção (ex. Cor)",

'opt_id' => "ID",

'opt_name' => "Nome da opção",

'warn_remove_opt' => "Tens a certeza que pretendes remover esta opção? \n\n AVISO! SE CONTINUA TODAS AS OPÇÕES E ATRIBUTOS DO PRODUTO COM ESTE NOME VÃO SER ELIMINADAS!",

'no_options_made' => "Não foram criadas opções de nome para o produto.",

'option' => "Opção",

'opt_step2' => "2. Criar um valor de uma opção (ex. Vermelho)",

'option_attributes' => "Atributos de Opciones",

'warn_remove_att' => "Tens a certeza que pretendes remover este atributo de opção? \n\nAVISO! SE CONTINUA TODAS AS OPÇÕES E ATRIBUTOS DO PRODUTO COM ESTE NOME E ATRIBUTOS VÃO SER ELIMINADAS!",

'no_attributes_made' => "Não foram criadas opções de atributo para o produto.",

'attribute' => "Atributo",

'opt_step3' => "3. Adicionar opção &amp; valor a um produto (ex. T-Shirt &gt; Cor &gt; Vermelha)",

'option_attribute' => "Opção do atributo",

'option_price' => "Opção do preço",

'add_subtract' => "Adicionar / Retirar",

'remove_opt_prod' => "Tens a certeza que desejas remover esta opção do produto??",

'no_assigned_opts' => "Não há opções adicionadas a produtos.",

'prods_made_1st' => "Adicione primeiro os produtos antes de criar uma opção.",

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

'show_latest' => "Mostrar os produtos mais recentes na Página Inicial?",

'no_latest' => "Número dos produtos mais recentes a mostrar:",

'off_line_settings' => "Definições off-line",

'off_line' => "Por a Loja off-line?",

'off_line_content' => "Mensagem off-line:",

'off_line_allow_admin' => "Permitir que os Administradores vejam a Loja off-line?  (Requer Sessão de Administrador)",


'store_settings' => "Definições da Loja",

'edit_below' => "Por favor configure as definições da sua Loja:",

'meta_data' => "Meta Data",

'browser_title' => "Procurar Título:",

'meta_desc' => "Descrição Meta:",

'meta_keywords' => "Chaves Meta:",

'comma_separated' => "(Separado por vírgula)",

'store_co_name' => "Loja/Nome da Empresa:",

'store_address' => "Endereço da Loja:",

'country' => "País:",

'zone' => "Estado/Província/Zona:",

'dirs_folders' => "Directórios &amp; Pastas",

'rootRel' => "Pasta Pública HTML da loja:",

'include_slash' => "(Incluir slash final ex. www.sudominio.com/Loja/ )",

'storeURL' => "URL absoluta para a Loja:",

'eg_domain_com' => "ex. http://www.domain.com",

'rootDir' => "Directório da Raiz do Servidor:",

'eg_root_path' => "ex. /caminho/para/tua/Loja",

'rootRel_SSL' => "Pasta SEGURA HTML para a Loja:",

'storeURL_SSL' => "Endereço SEGURO para a Loja:",

'eg_domain_SSL' => "ex. https://seguro.dominio.com",

'rootDir_SSL' => "Directório da raiz do servidor SEGURO:",

'eg_root_path_secure' => "ex. /caminho/para/tua/directorio/seguro/loja",

'enable_ssl' => "SSL Activado:",

'ssl_warn' => "(AVISO: Esta modificação torna-se efectiva imediatamente depois de submetida. Por favor verifique se o seu Directorio de Raiz e o seu URL Seguro esta correcto e a funcionar antes de fazer qualquer modificação.)",

'digital_downloads' => "Downloads Digitais",

'download_expire_time' => "Limite de tempo do Dowload:",

'seconds' => "(Segundos)",

'download_attempts' => "Tentativas de Dowload:",

'attempts_desc' => "(número de vezes que o cliente pode fazer dowload do produto.)",

'styles_misc' => "Estilos &amp; Outros",

'default_language' => "Idioma por defeito:",

'store_skin' => "Estilo da Loja:",

'no_cats_per_row' => "Nº de Categorias por Linha:",

'dir_symbol' => "Simbolo do Directorio:",

'prods_per_page' => "Nº de Produtos por Página",

'precis_length' => "Comprimento do espaço para os preços:",

'chars' => "(Caracteres)",

'no_sale_items' => "Nº de items na caixa de Ofertas:",

'no_pop_prod' => "Nº de items na caixa dos Mais Populares:",

'email_name' => "Nome do Email:",

'email_name_desc' => "(Isto é usado como o nome dos email enviados desde o site.)",

'email_address' => "Endereço de Email:",

'email_address_desc' => "(É usado como Email do Site.)",

'mail_method' => "Método de envio do Email:",

'mail_recommended' => "(SMTP recomendado)",

'max_upload_size' => "Tamanho Max de Ficheiro:",

'under_x_recom' => "(Aconselha-se menos de 2048Kb)",

'max_sess_length' => "Duração máxima de uma sessão:",

'db_settings' => "Configuração da Base de Dados",

'db_host' => "Alojamento da Base de dados:",

'db_username' => "Nome do Utilizador da Base de dados:",

'db_password' => "Password da Base de Dados",

'db_name' => "Nome da Base Dados:",

'db_prefix' =>" Prefixo da Base de dados",

'gd_settings' => "Configuração de GD",

'gd_ver' => "Versão GD:",

'gd_thumb_size' => "Tamanho das Miniaturas:",

'gd_gif_support' => "Permitir Suporte GIF: (por favor certifique-se que isto é permitido pelo seu servidor)",

'gd_max_img_size' => "Tamanho máximo da imagem:",

'gd_img_quality' => "Qualidade da imagem GD:",

'recom_quality' => "(recomenda-se 60 - 80)",

'stock_settings' => "Definições do Stock",

'use_stock' => "Mostrar nível do Stock?",

'allow_out_of_stock_purchases' => "Permitir compras fora do stock?",

'weight_unit' => "Unidade de Peso:",

'time_and_date' => "Hora &amp; Data",

'time_format' => "Formato do Tempo:",

'time_format_desc' => "(Ver <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",

'time_offset' => "Diferença Horária:",

'time_offset_desc' => "(Segundos - usado para servidores de diferentes zonas)",

'date_format' => "Formato da Data:",

'date_format_desc' => "(Ver <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",

'locale_settings' => "Configuração Local",

'default_currency' => "Moeda por defeito",

'inc_tax_prices' => "Incluir Imposto nos preços?",

'sale_mode' => "Modo Promocional:",

'percent_of_all' => "Percentagem de desconto",

'ind_sale_per_item' => "Promoção individual por item",

'sale_mode_off' => "Modo Promocional Desligado",

'sale_per_off' => "Modo Promocional por percentagem desligado:",

'sale_per_off_desc' => "(Percentagem de desconto a ser aplicado aos preços)",

'diff_dispatch' => "Permitir envio de Encomendas para outro endereço que não o da Factura?",

'update_settings' => "Actualizar as Definições",

'update_success' => "Actualizado com Sucesso!.",

'update_fail' => "Erro! A actualização falhou.",

'add_success' => "Adicionado com sucesso!",

'add_fail' => "Erro! Não foi adicionado.",

'delete_success' => "Eliminado com Sucesso!.",

'delete_failed' => "Erro ao eliminar.",

'currencies' => "Câmbios",

'currency' => "Moeda",

'currencies_desc' => "Por favor adicione, edite ou elimine câmbios abaixo:",

'c_code' => "Código",

'c_name' => "Nome",

'c_value' => "Valor",

'symbol_left' => "Símbolo esquerdo",

'symbol_right' => "Símbolo Direito",

'decimal_places' => "Decimais",

'last_updated' => "Última Actualização",

'c_status' => "Estado",

'no_currencies' => "Não há valores de câmbios na base de dados.",

'countries' => "Países",

'country' => "País",

'edit_countries_below' => "Por favor adicione, edite ou elimine paises abaixo:",

'disable' => "Desactivar",

'enable' => "Activar",

'iso' => "ISO",

'iso_name' => "Nome",

'iso3' => "ISO3",

'num_code' => "Número do Código",

'action' => "Acção",

'warn_del_country' => "Tem a certeza que deseja eliminar isto? Todos os Paises, Zonas e estados serão eliminados abaixo deste.",

'no_countries_in_db' => "Não há paises na base de dados.",

'edit_counties' => "Por favor adicionar, editar ou eliminar provincias/zonas/estados abaixo:",

'no_counties_in_db' => "Não há provincias, estados nem zonas na base de dados.",

'tax_Settings' => "Configuração de Imposto",

'edit_locale_below' => "Por favor edite a sus configuração local abaixo:",

'tax_only_to' => "Aplicar imposto SÓ às seguintes áreas:",

'manage_tax_below' => "Por favor use os diferentes tipos de imposto no seguinte quadro. Isto pode ser aplicado tanto a cada produto de modo a utilizar os diferentes modos de imposto para cada um dos produtos.",

'tax_class2' => "Classe de Imposto",

'rate_per' => "Tarifa (%)",

'no_taxes_setup' => "Desculpe, não há impostos a aplicar.",

'tax' => "Imposto",

);



$lang['admin']['stats'] = array(

'store_stats' => "Estatisticas da Loja",

'choose_view' => "Por favor selecione o tipo de estatistica que deseje ver:",

'search_terms' => "Procura por Palavras",

'product_pop' => "Popularidade do Produto",

'cust_online' => "Clientes online",

'search_terms_order_by' => "Procurar por palavras (Ordenado por Nº de Procuras)",

'sorry_no_data' => "Desculpe, não existe informação para mostrar.",

'product_pop_ordered_by' => "Produto Popular (Ordenado por Visualizações)",

'cust_active' => "Clientes que foram activos nos últimos 15 minutos",

'hash' => "#",

'customer' => "Cliente",

'location' => "Localização",

'sess_start_time' => "Inicio da Sessão",

'last_click_time' => "Tempo do último click",

'sess_length' => "Tempo da sessão",

'geust' => "Convidado",

'signed_in' => "Autenticação",

);



$lang['admin']['other'] = array(

'ip' => "IP:",

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'global_risk' => "Aviso: O arquivo de configuração principal 'includes/global.inc.php' tem permissões de escrita, que pode por em risco a segurança da sua Loja. Por favor modifique as permissões para CHMOD 0644 o mais rápido possivel.",

'401' => "Erro 401: Não possui autorização para visitar esta página, contacte o administrador.",

'welcome_note' => "Bem vindo ao painel de Administrador do CubeCart",

'last_login' => "Último Login por",

'by' => "por",

'failed' => "Erro.",

'store_overview' => "Resumo da Loja:",

'version' => "Versão:",

'visit_cc' => "Visitar o servidor de downloads do CubeCart",

'no_products' => "Número de Produtos:",

'no_customers' => "Número de Clientes:",

'img_upload_size' => "Tamanho da pasta de uploads de imagens:",

'no_orders' => "Numero de Encomendas:",

'quick_search' => "Procura Rápida",

'order_no' => "Numero de Encomenda:",

'search_now' => "Procurar Agora",

'customer' => "Cliente:",

'login_failed' => "Erro no Login! utilizador ou Passwords incorretas.",

'new_pass_sent' => "Uma nova Password foi enviada para o seu email",

'no_admin_sess' => "Não se encontrou nenhuma sessão de Administrador.",

'login_fail_2' => "Erro no Login. Por favor tente novamente.",

'login_below' => "Por favor faça o seu Login em baixo:",

'username' => "Utilizador:",

'password' => "Password:",

'request_pass' => "Escreva a sua Password",

'login' => "Login",

'logout_failed' => "Erro ao fechar a sessão, não existem sessões de administrador activas.",

'reset_pass_email' => "Estimado %s,



Você ou alguem fazendo-se passar por você solicitou o reset da password

A sua nova informação de acesso é:

~~~~~~~~~~~~~~~~~~~~~~~~~~

Utilizador: %s

Password: %s

~~~~~~~~~~~~~~~~~~~~~~~~~~



Este mail foi enviado por %s/admin/requestPass.php\n

Endereço IP de quem envia: %s",

'pass_reset_failed' => "Erro ao fazer o reset à Password.",

'enter_email_below' => "Escreva o seu endereço de email Abaixo:",

'email_address' => "Endereço de Email:",

'send_pass' => "Enviar Password",

);



$lang['admin']['nav'] = array(

'permission_error' => "Você não tem autorização para aceder a esta página.",

'navigation' => "Navigação",

'admin_home' => "Inicio Admin",

'store_home' => "Inicio Loja",

'store_config' => "Definições da Loja",

'gen_settings' => "Definições Gerais",

'taxes' => "Taxas",

'countries_zones' => "Paises &amp; Zonas",

'currencies' => "Câmbios",

'modules' => "Módulos",

'shipping' => "Envios",

'gateways' => "Empresas de modos de pagamento",

'affiliates' => "Afiliados",

'catalog' => "Catálogo",

'view_products' => "Ver Produtos",

'add_product' => "Adicionar Produtos",

'product_options' => "Opções de Produtos",

'view_categories' => "Ver Categorias",

'add_categories' => "Adicionar Categorias",

'customers' => "Clientes",

'view_customers' => "Ver Clientes",

'email_customers' => "Email de Clientes",

'orders' => "Encomendas",

'file_manager' => "Admin. Ficheiros",

'manage_images' => "Admin. Imagens",

'upload_images' => "Upload de Imagem",

'statistics' => "Estatísticas",

'view_stats' => "Ver Estatísticas",

'documents' => "Documentos",

'homepage' => "Pagina Inicial",

'site_docs' => "Documentos do site",

'misc' => "Outros",

'server_info' => "Info do Servidor",

'admin_users' => "Utilizadores Administradores",

'administrators' => "Administradores",

'admin_sessions' => "Sessões de Admin.",

);



$lang['admin']['incs'] = array(

'administration' => "Administração",

'logged_in_as' => "Identificado como:",

'logout' => "Sair",

'change_pass' => "Alterar Password",

'error_editing' => "Erro ao tentar editar. Nao se pôde editar a informação.",

'config_updated' => "Configuração Actualizada!. Por favor certifique-se que as permissões de segurança estão de novo no estado normal.",

'cant_write' => "Não se pode abrir o arquivo  '%s' para escrita. Tente mudar as permissões para CHMOD 0777. Lembre-se de voltar a por as permissões em CHMOD 0644 depois de actualizar!",

'db_config_updated' => "Definições Actualizadas.",

'db_cant_write' => "¡Actualização Falhada!",

'select_above' => "Seleccione acima",

);



/////////////////////////////////////

//// FRONTEND LANGUAGE

/////////////////////////////////////

/////////// GLOBAL FRONT ////////////

$lang['front']['yes'] = "Sim";

$lang['front']['no'] = "Não";

/////////////////////////////////////



$lang['front']['boxes'] = array(

'lang_links' => "Links Úteis",

'reg_and_checkout' => "Registar &amp; Verificar",

'cont_shopping' => "Continuar a Comprar",

'edit_del_add' => "Editar Endereço de Entrega",

'edit_inv_add' => "Editar Endereço da Factura",

'empty_cart' => "Carro Vazio",

'prev_page' => "Pagina Anterior",

'homepage' => "Pagina Inicial",

'shop_by_cat' => "Comprar por Categoria",

'sale_items' => "Produtos Promocionais",

'save' => "Guardar",

'currency' => "Moeda",

'information' => "Informação",

'products' => "Produtos:",

'categories' => "Categorias:",

'prices' => "Preços:",

'language' => "Idioma",

'mailing_list' => "Lista de Emails",

'subscribe_below' => "Subscrever o nosso envio de informação por email:",

'email' => "Email:",

'join_now' => "Subscrever-se!",

'already_subscribed' => "O seu email %s já foi adicionado à nossa lista de emails. Entre na sua conta para anular a inscrição se desejar.",

'enter_valid_email' => "Por favor escreva um email válido! .",

'added_to_mail' => "Obrigado, %s foi adicionado à nossa lista de emails.",

'subscribed_to_mail' => "Obrigado, %s foi adicionado à nossa lista de emails.",

'popular_products' => "Produtos Populares ",

'featured_prod' => "Produto Especial",

'sale_items' => "Produtos Promocionais",

'search_for' => "Procurar por:",

'go' => "Ir",

'welcome_back' => "Bem vindo de novo,",

'logout' => "Sair",

'your_account' => "A sua conta",

'welcome_guest' => "Bem vindo",

'login' => "Login",

'register' => "Registar",

'shopping_cart' => "Carro de compras",

'basket_empty' => "O seu carro está vazio.",

'items_in_cart' => "Produtos que estão no carro:",

'total' => "Total:",

'view_basket' => "Ver Carro",

);



$lang['front']['account'] = array(

'your_account' => "A sua Conta",

'personal_info' => "Informação Pessoal",

'order_history' => "Histórico de Encomendas",

'change_password' => "Alterar Password",

'newsletter' => "Subscrição de Notícias",

'login_to_view' => "Deve fazer login para ver esta página .",

);



$lang['front']['changePass'] = array(

'password_incorrect' => "A password está errada.",

'conf_not_match' => "A password de confirmação não corresponde à sua nova password.",

'change_pass' => "Alterar Password",

'password_updated' => "Obrigado, a sua password foi actualizada.",

'change_pass_below' => "Modifique a sua password:",

'old_pass' => "Password Antiga:",

'new_pass' => "Password Nova:",

'confirm_pass' => "Confirmar Password:",

'submit' => "Enviar",

);



$lang['front']['dnExpire'] = array(

'sorry' => "Desculpe",

'expired' => "O seu link de download expirou ou não é válido.",

);



$lang['front']['forgotPass'] = array(

'forgot_pass' => "Esqueceu a sua password?",

'email' => "Email:",

'send_pass' => "Enviar Password",

'reset_email' => "Estimado %s %s,



Você solicitou fazer o reset da sua password, a sua nova informação é esta:



~~~~~~~~~~~~~~~~~~~~~~~~~~

Utilizador: %s

Password: %s

~~~~~~~~~~~~~~~~~~~~~~~~~~

Para fazer Login click no seguinte link:

%s/index.php?act=login

~~~~~~~~~~~~~~~~~~~~~~~~~~



Este email foi enviado por %s

Endereço IP de quem envia: %s",

'new_pass_sent' => "Uma nova password foi enviada a  %s.",

'email_not_found' => "Sinto muito mas o seu endereço de email não foi encontrado.",

'enter_email' => "Por favor escreva o seu mail para lhe se enviado uma password temporária.",

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

'newOrderMsg' => "Um cliente acaba de fazer uma encomenda %s, para visualizar a encomenda, por favor click no link abaixo: \n\n %s",

'newOrderSubj' => "Foi feita uma nova encomenda na Loja",

'payment' => "Forma de Pagamento",

'cart' => "Carro",

'address' => "Endereço",

'payment' => "Pagamento",

'complete' => "Concluir",

'fill_out_below' => "Por favor complete o seguinte formulário:",

'transferring' => "Transferência de Pagamento",

'go_now' => "Ir Agora!",

'continue' => "Continuar",

'choose_method' => "Por favor seleccione um modo de pagamento:",

'your_comments' => "Os seus comentários:",

'none_configured' => "Desculpe, não há formas de pagamento configuradas.",

);



$lang['front']['login'] = array(

'blocked' => "Authentication blocked for %s minutes for security reasons.",

'login' => "Login",

'username' => "Utilizador:",

'password' => "Password:",

'remember_me' => "Lembrar?",

'forgot_pass' => "Esqueceu a sua Password?",

'login_success' => "O seu Login foi efectuado com êxito.",

'already_logged_in' => "Já fez o seu Login.",

'login_failed' => "Erro ao fazer Login",

'login_below' => "Por favor faça o Login abaixo:",

);

$lang['front']['index'] = array(

'latest_products' => "Produtos Recentes",

);

$lang['front']['logout'] = array(

'logout' => "Sair",

'session_destroyed' => "A sua sessão foi terminada.",

'no_session' => "Não se encontram sessões para terminar, deve ter chegado aqui por acidente!",

);



$lang['front']['newsletter'] = array(

'newsletter_prefs' => "Preferências da lista de emails",

'prefs_updates' => "As preferências da sua lista de emails foram actualizadas.",

'edit_prefs_below' => "Por favor editar as suas preferências abaixo:",

'subscribe' => "Subscrever na lista de emails?",

'email_format' => "Formato Email:",

'plain_text' => "Texto Plano",

'html' => "HTML",

'html_abbr' => "Linguagem Hypertexto",

'update' => "Actualizar",

'login_required' => "Deve identificar-se para aceder a esta página.",

);



$lang['front']['noShip'] = array(

'sorry' => "Desculpe",

'desc' => "Não enviamos produtos para o seu país.",

);



$lang['front']['overWeight'] = array(

'sorry' => "Desculpe",

'desc' => "Não podemos enviar a sua encomenda, possui peso escessivo.",

);



$lang['front']['profile'] = array(

'enter_valid_tel' => "O número de telefone só pode ter valores numéricos.",

'complete_all' => "Por favor certifique-se que completou todos os campos.",

'email_invalid' => "Por favor escreva um email válido.",

'numeric_only' => "O numero de telefone só pode ter valores numéricos.",

'email_inuse' => "Deculpe mas este email já está sendo usado por outro cliente.",

'update_email' => "Estimado %s %s,\n\n

Este email foi enviado para confirmar que a sua informação pessoal foi actualizada com sucesso. Se pensa que a sua conta foi actualizada por alguem sem sua autorização por favor contacte a administração da loja o mais rápido possivel.\n\n

\n\n

Este email foi enviado de %s\n

Endereço IP de quem envia: %s",

'update_email_subj' => "Informação pessoal Actualizada",

'personal_info' => "Informação pessoal", 

'account_updated' => "A sua conta foi actualizada. Pode editar a sua conta de novo se assim o desejar.",

'edit_below' => "Por favor edite a sua informação pessoal",

'title' => "Titulo:",

'first_name' => "Nome:",

'last_name' => "Apelido:",

'email' => "Email:",

'address' => "Endereço:",

'town' => "Cidade:",

'county' => "Estado/Zona:",

'postcode' => "Codigo Postal:",

'country' => "Pais:",

'phone' => "Telefone Fixo:",

'mobile' => "Telemovél:",

'update_account' => "Actualizar Conta",

'login_required' => "Você deve fazer login para visualizar esta página.",

);



$lang['front']['reg'] = array(

'fill_required' => "Por favor preencha os campos pedidos.",

'pass_not_match' => "Por favor certifique-se que as suas passwords coincidem.",

'enter_valid_email' => "Por favor escreva um endereço de email válido.",

'enter_valid_tel' => "O número de telefone só deve ter caracteres numéricos.",

'email_in_use' => "Sinto muito mas este email já esta sendo utilizado.",

'note_required' => "Por favor preencher todos os campos marcados com asterisco (*), são necessários para efectuar o seu pedido.",

'express_reg' => "Registro Rápido!",

'submit_and_cont' => "Enviar &amp; Continuar",

'personal_details' => "Detalhes Pessoais",

'address' => "Endereço",

'title' => "Titulo:",

'title_desc' => "(Sr/Srs/Sra)",

'first_name' => "Nome:",

'address2' => "Endereço:",

'last_name' => "Apelido:",

'email_address' => "Endereço de email:",

'town' => "Cidade:",

'phone' => "Telefone:",

'county' => "Concelho:",

'mobile' => "Telemóvel:",

'country' => "País:",

'postcode' => "Código Postal:",

'security_details' => "Detalhes de segurança",

'choose_pass' => "Escolher a Password:",

'conf_pass' => "Confirmar Password:",

'privacy_settings' => "Definições de Privacidade",

'receive_emails' => "Gostaria de receber novidades da vossa Loja.",

'email_format' => "Formato do Email:",

'styled_html' => "Estilo HTML",

'plain_text' => "Estilo normal",

'tandcs' => "Termos de uso",

'please_read' => "Por favor certifique-se de ter lido os nossos",

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

Para ver este produto por favor click no seguinte link:

%s/index.php?act=viewProd&productId=%s

~~~~~~~~~~~~~~~~~~~~~~~~~~



Este mail foi enviado desde o seguinte endereço IP: %s",

'email_subject' => "Mensagem de: %s",

'tellafriend' => "Conte a um amigo",

'message_sent' => "Obrigado, a sua mensagem foi enviada para <strong>%s</strong> contando-lhe sobre '%s'. Se deseja enviar esta informação a outro amigo, complete os seguintes dados:",

'fill_out_below' => "Por favor envie a seguinte informação para contar a um amigo sobre '%s'.",

'friends_name' => "Nome do seu Amigo:",

'friends_email' => "Email do seu Amigo",

'your_name' => "Seu nome:",

'your_email' => "Seu email:",

'message' => "Mensagem:",

'default_message' => "Encontrei isto '%s' pensei que lhe podia interessar.",

'send' => "Enviar",

);



$lang['front']['unsubscribe'] = array(

'unsubscribe' => "Desincrever-se",

'email' => "Email:",

'go' => "Ir",

'enter_valid_email' => "Por favor insira um email válido.",

'email_removed' => "Obrigado, <strong>%s</strong> foi removido com sucesso da nossa lista .",

'email_not_found' => "Desculpe, <strong>%s</strong> não foi encontrado na nossa lista ou já foi eliminado.",

'enter_email_below' => "Por favor escreva o seu mail para desinscrever-se da nossa lista de emails."

);



$lang['front']['viewCat'] = array(

'search_results' => "Resultados da Procura",

'sale_items' => "Produtos Promocionais",

'image' => "Imagem",

'description' => "Descrição",

'price' => "Preço",

'products_in' => "Produtos em:",

'buy' => "Comprar",

'more' => "Mais",

'out_of_stock' => "FORA DE STOCK",

'no_products_match' => "Desculpe, não há produtos que coincidam com a procura:",

'no_prods_in_cat' => "Não há produtos nesta categoria.",

);



$lang['front']['viewDoc'] = array(

'error' => "Erro",

'does_not_exist' => "O documento não existe.",

);



$lang['front']['viewOrder'] = array(

'order_no' => "Encomenda Nº:",

'customer_info' => "Informação do Cliente:",

'invoice_address' => "Endereço da Factura:",

'delivery_address' => "Endereço da Entrega:",

'na' => "n/a",

'customer_comments' => "Comentários do Cliente:",

'order_summary' => "Resumo do Pedido:",

'product' => "Produto",

'product_code' => "Código do Produto",

'quantity' => "Quantidade",

'price' => "Preço",

'download_here' => "Download aqui",

'review_below' => "Por favor verifique a encomenda:",

'order_date_time' => "Encomenda Data/Hora:",

'payment_method' => "Forma de Pagamento",

'ship_method' => "Forma de Envio:",

'subtotal' => "Sub-total:",

'total_tax' => "Total de impostos:",

'shipping' => "Envio:",

'grand_total' => "Total:",

'order_not_found' => "O nº da encomenda não foi encontrado.",

'login_required' => "Deve fazer o Login para visualizar esta página.",

);



$lang['front']['viewOrders'] = array(

'your_orders' => "As suas encomendas",

'orders_listed_below' => "Todas as encomendas desta conta estão listadas abaixo",

'order_no' => "Pedido Nº",

'status' => "Estado",

'date_time' => "Data/Hora",

'action' => "Acção",

'view' => "Ver",

'no_orders' => "Não temos registo de nenhuma encomenda. Se acha que é um erro, contacte por favor o nosso administrador o mais rápido possivel.",

'login_required' => "Deve fazer o Login para visualizar esta página.",

);



$lang['front']['viewProd'] = array(

'product' => "Produto",

'product_info' => "Informação do Produto",

'price' => "Preço:",

'product_code' => "Código do Produto:",

'tellafriend' => "Contar a um amigo?",

'quantity' => "Quantidade:",

'more_images' => "[+] Mais Imagens",

'add_to_basket' => "Adicionar ao carrinho de compras",

'location' => "Localização:",

'no_instock' => "Não existe em Stock:",

'instock' => "Em Stock",

'out_of_stock' => "FORA DE STOCK",

'prod_opts' => "Opções do Produto:",

'prod_not_found' => "O produto não foi encontrado.",

);



$lang['front']['step1'] = array(

'lang_empty_cart' => "O seu carro de compras está vazio.",

'allready_customer' => "Já é cliente?",

'login_below' => "Faça Login Abaixo:",

'username' => "Utilizador:",

'password' => "Password:",

'remember_me' => "Lembre-me",

'login' => "Login",

'forgot_pass_q' => "Esqueceu da sua Password?",

'need_register' => "É necessário registar-se?",

'express_register' => "O nosso registo rápido pode ser preenchido muito facilmente.",

'reg_and_cont' => "Registrar &amp; Continuar",

'cont_shopping_q' => "Continuar a Comprar?",

'cont_shopping' => "Continuar a Comprar",

'cont_browsing' => "Para continuar a navegar como convidado sem se registar deve clicar no botão abaixo P.D: Não poderá efectuar alguma compra sem que se registe primeiro.",

'save_text' => "Poupe:",



);





$lang['front']['cart'] = array(

'free_shipping' => "Envio Gratuito",

'view_cart' => "Ver Carrinho",

'cart' => "Carrinho",

'address' => "Endereço",

'payment' => "Forma de Pagamento",

'complete' => "Concluir",

'add_more' => "Deseja adicionar mais produtos? Escreva o código dos produtos:",

'add' => "Adicionar",

'qty' => "Qtd",

'product' => "Produto",

'code' => "Codigo",

'stock' => "Stock",

'price' => "Preço",

'line_price' => "Linha de preço",

'delete' => "Apagar",

'remove' => "Remover Produto",

'invoice_address' => "Endereço da Factura",

'delivery_address' => "Endereço de Entrega",

'title' => "Titulo:",

'first_name' => "Nome:",

'last_name' => "Apelido:",

'address2' => "Endereço",

'town' => "Cidade:",

'county' => "Concelho:",

'postcode' => "Código Postal:",

'country' => "País:",

'edit_invoice_address' => "Editar Endereço de Factura",

'edit_delivery_address' => "Editar Endereço de Entrega",

'stock_warn' => "Você pediu mais produtos do que os que estão disponiveis em stock. Isto pode fazer com que a sua encomenda não seja entregue ate que o stock seja reposto.",

'amount_capped' => "Desculpe mas de momento não podemos efectuar pedidos fora de stock.<br />a quantidade excedeu o stock existente.",

'na' => "n/a",

'shipping' => "Envio:",

'tax' => "Imposto:",

'subtotal' => "Sub-total:",

'cart_total' => "Total do Carrinho de Compras:",

'if_changed_quan' => "(Se você alterou alguma quantidade)",

'update_cart' => "Actualizar Carrinho de Compras",

'continue' => "Continuar",

'cart_empty' => "O seu carro está vazio.",

);



$lang['front']['confirmed'] = array(

'confirmation_screen' => "Janela de confirmação",

'cart' => "Carrinho",

'address' => "Endereço",

'payment' => "Forma de Pagamento",

'complete' => "Concluir",

'order_success' => "Obrigado! A sua encomenda foi completada com sucesso, por favor visite-nos de novo!",

'order_fail' => "Erro ao efectuar a encomenda.",

'try_again_desc' => "Pode tentar comprar o conteúdo do seu carro de compras, de novo, abaixo:",

'try_again' => "Tentar de Novo",

'request_login' => "Deve fazer o Login para visualizar esta página.",

);



$lang['front']['orderSuccess'] = array(

'inv_email_body_1' => "Estimado %s,



Obrigado pela sua encomenda número: %s efectuada em %s



A transacção foi efectuada com sucesso, enviaremos a sua encomenda o mais rapidamente possível (se aplicável)



~~~~~~~~~~~~~~~~~~~~~~~~~~

Nome: %s

Sub_total: %s

Envio & Despesas de manuseamento: %s

Imposto: %s

Total: %s

~~~~~~~~~~~~~~~~~~~~~~~~~~



Endereço da Factura:

%s

%s

%s

%s

%s

%s

%s



Endereço de Envio:

%s

%s

%s

%s

%s

%s

%s



Forma de Pagamento: %s

Forma de Envio: %s",

'inv_email_body_2' => "\nOs seus comentários: %s\n",

'inv_email_body_3' => "\n~~~~~~~~~~~~~~~~~~~~~~~~~~\n

Inventário da encomenda:\n",

'inv_email_body_4' =>"Produto: %s\n",

'inv_email_body_5' => "Opções: %s\n",

'inv_email_body_6' => "Quantidade: %s

Código do Produto: %s

Preço: %s\n\n",

'inv_email_body_7' => "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

%s

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'inv_email_subject' => "Encomenda Nº: ",

'digi_email_body1' => "Estimado %s,



Obrigado pela sua encomenda número: %s efectuada em %s



Abaixo estão os links necessários para aceder aos produtos digitais que você comprou.

IMPORTANTE! estes links expiram em  %s e você tem  %s tentativas para poder fazer o download. Se tiver algum problema não hesite em contactar-nos, sem esquecer o nº da sua encomenda.



~~~~~~~~~~~~~~~~~~~~~~~~~~\n",

'digi_email_body2' => "%s

LINK PARA DOWNLOAD:

%s/download.php?pid=%s&oid=%s&ak=%s

~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n",

'digi_subject' => "Acesso a downloads: ",

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