<?
//$data  = '<div>test</div>';
$data = array(
    'code' => '01Header_left_logo_contacts02',
    'fields' => array(
        'NAME' => 'Адаптивная Шапка сайта с логотипом слева и контактами',
        'DESCRIPTION' => '01Header_left_logo_contacts02',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts02/preview.jpg',
        'CONTENT' => '
                    <header id="header-agency02">
                    <div class="container header">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="header-left col-md-4 col-xs-8">
                          <a class="navbar-brand header_block-logo-link logo" href="/">
                            <span class="photo">
                                 <img src="https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts01/logo.jpg" class="header_block-logo" alt="logo">
                            </span>
                          </a>
                          </div>
                          <div class="header-right col-md-8 col-xs-4">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="">                       
                              <div class="menu-main collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-top">
                                  <li class="header_block_contacts header-contact nav-item" data-card-preset="phone">
                                        <a class=" nav-link header_block-item_link font-weight-bold fc-prm" href="tel:+79581008542">
                                       <i class="header_block-item_icon fa fa-phone"></i>
                                       <span class="header_block-item">+7 958 100 85 42 </span>
                                    </a> 
                                    </li>
                                  <li class="header_block_contacts header-contact nav-item">
                                      <a class="header_block-item_link nav-link font-weight-bold fc-prm" href="mailto:info@increza.ru">
                                         <i class="header_block-item_icon fa fa-envelope-o"></i>
                                         <span class="header_block-item">info@increza.ru</span>
                                     </a>                               
                                  </li>                       
                                </ul>                     
                              </div>
                          </div>
                          </div>
                        </nav>
                        </div>
                    </header>'
    ),
    'manifest' => array (
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/css/bootstrap.css',
//                'https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts01/slicknav.css',
                'https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts02/style.css',


            ),
            'js' => array (
                'https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/js/bootstrap.js',

            )
        ),
        'cards' => array (
            '.header_block_contacts' => array (
                'name' => 'Контакт',
                'label' => array(
                    '.header_block-item_icon',
                    '.header_block-item'
                ),
                'presets' => array(
                    'phone' => array (
                        'name' => 'phone',
                        'html' => '<li class="header_block_contacts header-contact nav-item" data-card-preset="phone">
                                        <a class=" nav-link header_block-item_link font-weight-bold fc-prm" href="tel:+79581008542">
                                       <i class="header_block-item_icon fa fa-phone"></i>
                                       <span class="header_block-item">+7 958 100 85 42 </span>
                                    </a> 
                                    </li>',
                        'values' => array(
                            '.header_block-item_icon' => array(
                                'type' => 'icon',
                                'classList' => ['header_block-item_icon', 'fa', 'fa-phone']
                            ),
                        ),
                        'disallow' => array (
                            '.header_block-item_icon'
                        ),
                ),
                    'email' => array (
                        'name' => 'email',
                        'html' => '<li class="header_block_contacts header-contact nav-item">
                                      <a class="header_block-item_link nav-link font-weight-bold fc-prm" href="mailto:info@increza.ru">
                                         <i class="header_block-item_icon fa fa-envelope-o"></i>
                                         <span class="header_block-item">info@increza.ru</span>
                                     </a>                               
                                  </li> ',
                        'values' => array (
                            '.header_block-item_icon' => array(
                                'type' => 'icon',
                                'classList' => ['header_block-item_icon', 'fa', 'fa-envelope-o']
                            ),
                        ),
                        'disallow' => array (
                            '.header_block-item_icon'
                        ),
                    ),
                ),
            ),
        ),
        'nodes' => array(
            '.header_block-logo' => array(
                'name' => 'Логотип',
                'type' => 'img',
                'group' => 'logo',
                'dimensions' => array('width' => 302, 'height' => 45),
            ),
            '.header_block-logo-link' => array(
                'name' => 'Ссылка логотип',
                'type' => 'link',
                'group' => 'logo',
            ),
            '.header_block-item_icon' => array(
                'name' => 'Иконка контакт',
                'type' => 'icon',
            ),
            '.header_block-item' => array(
                'name' => 'Контакт',
                'type' => 'text',
                'group' => 'contact',
            ),
            '.header_block-item_link' => array(
                'name' => 'Ссылка контакт',
                'type' => 'link',
                'group' => 'contact',
                'skipContent' => true
            ),
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.header_block-logo' => array(
                    'name' => "Логотип",
                    'type' => 'block-default-background-overlay-height-vh',
                ),
                '.header_block-logo-link' => array(
                    'name' => "Ссылка",
                    'type' => 'typo',
                ),
                '.header_block-item' => array(
                    'name' => "Текст",
                    'type' => 'typo',
                ),
                '.header_block-item_link' => array(
                    'name' => "Заголовок",
                    'type' => 'border-color',
                ),
                '.header-left' => array(
                    'name' => 'Блок лого',
                    'type' => array ('box','typo','block-default')
                ),
            ),
        ),
    ),


);
echo json_encode($data);
