<?
$data = array(
    'code' => '01Header_left_logo_contacts31',
    'fields' => array(
        'NAME' => 'Шапка сайта с логотипом слева и контактами',
        'DESCRIPTION' => '01Header_left_logo_contacts31',
        'SECTIONS' => 'Ипотечный брокер',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts31/preview.jpg',
        'CONTENT' => '
                        <header id="ipoteka-header31" data-sticky-top-spacing="- 51" class="sticky">
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="header-left col-md-5 col-xs-8">
                    <a href="/" class="header_block-logo-link logo fc-prm">
                        <!--span class="photo"-->
                        <h2 class="header_block-logo_logo_title-text title-text">
                            Ипотечный Брокер
                        </h2>
                        <p class="header_block-logo_logo_subtitle-text subtitle-text">
                        </p>
                        <!--img src="" class="header_block-logo" alt="logo"-->
                        <!--/span-->
                    </a>
                </div>

                <div class="header-right col-md-7 col-xs-4">
                    <div class="header-right-top"></div>
                    <div class="header-right-bottom">
                        <div class="menu_main">
                            <ul class="menu_top">
                                <li class="header_block_contacts header-contact hidden-md-down">
                                    <a class="header_block-item_link fc-prm" href="#">
                                        <i class="header_block-item_icon fa fa-map-marker"></i>
                                        <span class="header_block-item">Краснодар, улица Ленина, дом 11</span>
                                    </a>
                                </li>
                                <li class="header_block_contacts header-contact hidden-md-down">
                                    <a class="header_block-item_link fc-prm" href="tel:+70001000000">
                                        <i class="header_block-item_icon fa fa-phone"></i>
                                        <span class="header_block-item">+7 000 100 00 00 </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>'
    ),
    'manifest' => array (
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/css/bootstrap.css',
                'https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts31/slicknav.css',
                'https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts31/style.css',
            ),
            'js' => array (
                'https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts31/jquery.slicknav.js',
                'https://abcdef.tmweb.ru/AppAgency001/01Header_left_logo_contacts31/slicknav.js',
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
                        'html' => '<li class="header_block_contacts header-contact hidden-md-down" data-card-preset="phone">
                                    <a class="header_block-item_link fc-prm" href="tel:+79001000000">
                                        <i class="header_block-item_icon fa fa-phone"></i>
                                        <span class="header_block-item">+7 900 100 00 00 </span>
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
                        'html' => '<li class="header_block_contacts header-contact hidden-md-down" data-card-preset="email">
                                    <a class="header_block-item_link fc-prm" href="mailto:info@ipoteka.ru">
                                        <i class="header_block-item_icon fa fa-envelope-o"></i>
                                        <span class="header_block-item">info@ipoteka.ru</span></a>
                                </li>',
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
                    'address' => array (
                        'name' => 'address',
                        'html' => '<li class="header_block_contacts header-contact hidden-md-down" data-card-preset="address">
                                    <a class="header_block-item_link fc-prm" href="#">
                                        <i class="header_block-item_icon fa fa-map-marker"></i>
                                        <span class="header_block-item">Краснодар, улица Ленина, дом 11</span>
                                    </a>                        
                                </li>',
                        'values' => array (
                            '.header_block-item_icon' => array(
                                'type' => 'icon',
                                'classList' => ['header_block-item_icon', 'fa', 'fa-map-marker']
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
            '.header_block-logo_logo_title-text' => array (
                'name' => 'Заголовок логотип',
                'type' => 'text',
                'group' => 'logo'
            ),
            '.header_block-logo_logo_subtitle-text' => array (
                'name' => 'Подзаголовок логотип',
                'type' => 'text',
                'group' => 'logo'
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
                '.header_block-logo_logo_title-text' => array (
                    'name' => 'Заголовок логотип',
                    'type' => 'typo'
                ),
                '.header_block-logo_logo_subtitle-text' => array (
                    'name' => 'Подзаголовок логотип',
                    'type' => 'typo'
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
