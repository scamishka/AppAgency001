<?
$data = array(
    'code' => '02Menu_right21',
    'fields' => array(
        'NAME' => 'Блок с меню справа и текстовым лого',
        'DESCRIPTION' => '02Menu_right21',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/02Menu_right21/preview.jpg',
        'CONTENT' => '
            <div id="menu_right21" class="cetacs-block_menu page_header bgc-prm">
                <div class="page_header_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 hidden-md-down d-flex align-items-center">
                                    <a href="/" class="cetacs-block_menu_logo logo fc-prm">
                                        Ваш Риелтор
                                    </a>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <ul id="main-menu" class=" main-menu">
                                    <li class="cetacs-block_menu_item">
                                        <a class="cetacs-block_menu_item_link main-menu__home-btn" href="/">
                                            <i class="cetacs-block_menu_item_icon fa fa-home" aria-hidden="true"></i>
                                            <span class="cetacs-block_menu_item_title"></span>
                                        </a>
                                    </li>
                                    <li class="cetacs-block_menu_item">
                                        <a class="cetacs-block_menu_item_link" href="#service">
                                            <span class="cetacs-block_menu_item_title">Услуги</span>
                                        </a>
                                    </li>
                                    <li class="cetacs-block_menu_item">
                                        <a class="cetacs-block_menu_item_link" href="#about">
                                            <span class="cetacs-block_menu_item_title">Обо мне</span>
                                        </a>
                                    </li>
                                    <li class="cetacs-block_menu_item">
                                        <a class="cetacs-block_menu_item_link" href="#">
                                            <span class="cetacs-block_menu_item_title">Преимущества</span>
                                        </a>
                                    </li>
                                    <li class="cetacs-block_menu_item">
                                        <a class="cetacs-block_menu_item_link" href="#review">
                                            <span class="cetacs-block_menu_item_title">Отзывы</span>
                                        </a>
                                    </li>
                                    <li class="cetacs-block_menu_item">
                                        <a class="cetacs-block_menu_item_link" href="#contacts">
                                            <span class="cetacs-block_menu_item_title">Контакты</span>
                                        </a>
                                    </li>
                                    <li class="cetacs-block_menu_item">
                                        <a class="cetacs-block_menu_item_link main-menu__home-btn" href="tel:+79001000000">
                                            <i class="cetacs-block_menu_item_icon fa fa-phone" aria-hidden="true"></i>
                                            <span class="cetacs-block_menu_item_title">+7 900 100 0000</span>
                                        </a>
                                    </li>
                                    <div style="clear: both"></div>
                                </ul>
                                <div id="container-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/02Menu_right21/style.css'
            ),
        ),
        'cards' => array(
            '.cetacs-block_menu_item' => array(
                'name' => 'Пункт меню',
                'label' => array(
                    '.cetacs-block_menu_item_icon',
                    '.cetacs-block_menu_item_title'
                ),
                'presets' => array(
                    'home' => array(
                        'name' => 'Пункт меню иконка',
                        'html' => '<li class="cetacs-block_menu_item" data-card-preset="home">
                                    <a class="cetacs-block_menu_item_link main-menu__home-btn" href="#">
                                        <i class="cetacs-block_menu_item_icon fa fa-home" aria-hidden="true"></i>
                                        <span class="cetacs-block_menu_item_title"></span>
                                    </a>
                                </li>',
                        'values' => array(
                            '.cetacs-block_menu_item_icon' => array(
                                'type' => 'icon',
                                'classList' => ['cetacs-block_menu_item_icon', 'fa', 'fa-home']
                            ),
                        ),
                        'disallow' => array(
                            '.header_block-item_icon'
                        ),
                    ),
                    'item' => array(
                        'name' => 'Пункт меню без иконки',
                        'html' => '<li class="cetacs-block_menu_item" data-card-preset="item">
                                    <a class="cetacs-block_menu_item_link" href="#">
                                        <span class="cetacs-block_menu_item_title">Каталог</span>
                                    </a>
                                </li>',
                    ),
                ),
            ),
        ),
        'nodes' => array(
            '.cetacs-block_menu_logo' => array(
                'name' => 'Логотип',
                'type' => 'link'
            ),
            '.cetacs-block_menu_item_link' => array(
                'name' => 'Ссылка пункт меню',
                'type' => 'link',
                'group' => 'menu-title',
                'skipContent' => true
            ),
            '.cetacs-block_menu_item_icon' => array(
                'name' => 'Иконка меню',
                'type' => 'icon',
                'group' => 'menu-title'
            ),
            '.cetacs-block_menu_item_title' => array(
                'name' => 'Пункт меню',
                'type' => 'text',
                'group' => 'menu-title'
            ),
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.cetacs-block_menu_logo' => array(
                    'name' => 'Логотип',
                    'type' => 'typo'
                ),
                '.cetacs-block_menu' => array(
                    'name' => 'Блок меню',
                    'type' => ['box', 'typo', 'block-default']
                ),
                '.cetacs-block_menu_item_icon' => array(
                    'name' => "Иконка",
                    'type' => 'icon',
                ),
                '.cetacs-block_menu_item_link' => array(
                    'name' => "Ссылка",
                    'type' => 'typo',
                ),
                '.cetacs-block_menu_item_title' => array(
                    'name' => "Текст",
                    'type' => 'typo',
                ),

            ),
        ),
    ),

);
echo json_encode($data);
