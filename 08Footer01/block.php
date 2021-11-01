<?
$data = array(
    'code' => '08Footer01',
    'fields' => array(
        'NAME' => 'Футер с контактами, соц.сетями в колонках',
        'DESCRIPTION' => '08Footer01',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/08Footer01/preview.jpg',
        'CONTENT' => '
            <footer id="footer" class="footer_bg">
                <div class="container">
                    <div class="row">
                        <div class="footer-ribbon">
                            <span><a href="index.html#callback_modal">Заказать звонок</a></span>
                        </div>
                        <div class="col-md-4">
                            <div class="newsletter">
                                <h4 class="footer_social-block_title">Поделись с друзьями</h4>
                                <div id="footer-social">
                                    <ul class="social-icons">
                                        <li class="footer_contacts_social" data-card-preset="vk">
            
                                            <a class="footer_social-block_link" href="https://vk.com/#">
                                                <i class="footer_social-block_icon fa fa-vk"></i>
                                            </a>
                                        </li>
                                        <li class="footer_contacts_social" data-card-preset="facebook">
            
                                            <a class="footer_social-block_link" href="https://facebook.com/#">
                                                <i class="footer_social-block_icon fa fa-facebook"></i>
                                            </a>
                                        </li>
                                    </ul>
            
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-details">
                                <h4 class="footer_phone-block_title">Телефон</h4>
                                <p class="footer_contacts_phone">
                                    <i class="footer_phone-block_icon fa fa-phone"></i> &nbsp;
                                    <a class="footer_phone-block_link" href="tel:+79581008542">
                                        +7 958 100 85 42
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-details">
                                <h4 class="footer_email-block_title">Электронная почта</h4>
                                <p class="footer_contacts_email">
                                    <i class="footer_email-block_icon fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;
                                    <a class="footer_email-block_email" href="mailto:info@increza.ru">info@increza.ru</a>
                                </p>
                            </div>
            
                        </div>
                    </div>
                </div>
            
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <p>Сайт работает под управлением сервиса <a target="_blank" href="http://increza.ru/">Инкреза</a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="lk">Вход в<a href="http://increza.ru/private-office/"> Личный кабинет</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </footer>
        ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/08Footer01/style.css'
            ),
        ),
        'cards' => array(
            '.footer_contacts_phone' => array(
                'name' => 'Контакт телефон',
                'label' => array(
                    '.footer_phone-block_icon',
                    '.footer_phone-block_item'
                ),
            ),
            '.footer_contacts_email' => array(
                'name' => 'Контакт email',
                'label' => array(
                    '.footer_email-block_icon',
                    '.footer_email-block_item'
                ),
            ),
            '.footer_contacts_social' => array(
                'name' => 'Социальные сети',
                'label' => array (
                    '.footer_social-block_icon',
                ),
                'presets' => array(
                    'vk' => array(
                        'name' => '<span class="footer_social-block_icon fa fa-vk"></span> В Контакте',
                        'html' => '<li class="footer_contacts_social" data-card-preset="vk">                      
                                        <a class="footer_social-block_link" href="https://vk.com/#">
                                            <i class="footer_social-block_icon fa fa-vk"></i>
                                        </a>
                                    </li>',
                        'disallow' => array(
                            '.footer_social-block_icon'
                        ),
                        'values' => array(
                            '.footer_social-block_title' => 'В Контакте',
                            '.footer_social-block_link' => array(
                                'href' => 'https://vk.com/#',
                                'target' => '_blank',
                            ),
                            '.footer_social-block_icon' => array(
                                'type' => 'icon',
                                'classList' => array('fa', 'fa-vk')
                            ),
                        ),

                    ),

                    'facebook' => array(
                        'name' => '<span class="footer_social-block_icon fa fa-facebook"></span> Facebook',
                        'html' => '<li class="footer_contacts_social" data-card-preset="facebook">                       
                        <a class="footer_social-block_link" href="https://facebook.com/#">
                            <i class="footer_social-block_icon fa fa-facebook"></i>
                        </a>
                    </li>',
                        'disallow' => array(
                            '.footer_social-block_icon'
                        ),
                        'values' => array(
                            '.footer_social-block_title' => 'facebook',
                            '.footer_social-block_link' => array(
                                'href' => 'https://facebook.com/#',
                                'target' => '_blank',
                            ),
                            '.footer_social-block_icon' => array(
                                'type' => 'icon',
                                'classList' => array('fa', 'fa-facebook')
                            ),
                        ),

                    ),

                    'telegram' => array(
                        'name' => '<span class="footer_social-block_icon fa fa-telegram"></span> Telegram',
                        'html' => '<li class="footer_contacts_social" data-card-preset="telegram">                       
                        <a class="footer_social-block_link" href="https://telegram.com/#">
                            <i class="footer_social-block_icon fa fa-telegram"></i>
                        </a>
                    </li>',
                        'disallow' => array(
                            '.footer_social-block_icon'
                        ),
                        'values' => array(
                            '.footer_social-block_title' => 'Telegram',
                            '.footer_social-block_link' => array(
                                'href' => 'https://telegram.com/#',
                                'target' => '_blank',
                            ),
                            '.footer_social-block_icon' => array(
                                'type' => 'icon',
                                'classList' => array('fa', 'fa-telegram')
                            ),
                        ),

                    ),
                ),
            ),
        ),
        'nodes' => array(
            '.footer_bg' => array(
                'name' => 'Фон',
                'type' => 'img'
            ),
            '.footer_social-block_title' => array(
                'name' => 'Заголовок блок соц. иконок',
                "type" => 'text'
            ),

            '.footer_phone-block_title' => array(
                'name' => 'Заголовок блока телефона',
                'type' => 'text',

            ),
            '.footer_phone-block_icon' => array(
                'name' => 'Иконка телефон',
                'type' => 'icon',

            ),
            '.footer_phone-block_link' => array(
                'name' => 'Ссылка Телефон',
                'type' => 'Link',

            ),

            '.footer_email-block_title' => array(
                'name' => 'Заголовок блока почты',
                'type' => 'text',

            ),
            '.footer_email-block_icon' => array(
                'name' => 'Иконка почты',
                'type' => 'icon',

            ),
            '.footer_email-block_link' => array(
                'name' => 'Ссылка почта',
                'type' => 'Link',

            ),
            '.footer_email-block_item' => array(
                'name' => 'Почта',
                'type' => 'text',

            ),

            '.footer_social-block_link' => array(
                'name' => 'Ссылка контакт',
                'type' => 'link',

            ),
            '.footer_social-block_icon' => array(
                'name' => 'Иконка',
                'type' => 'icon',

            )
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.footer_bg' => array(
                    'name' => "Фон",
                    'type' => 'block-default',
                ),
                '.footer_social-block_title' => array(
                    'name' => "Заголовок соц.иконок",
                    'type' => 'typo',
                ),
                '.footer_phone-block_title' => array(
                    'name' => "Заголовок Телефонов",
                    'type' => 'typo',
                ),
                '.footer_email-block_title' => array(
                    'name' => "Заголовок почты",
                    'type' => 'typo',
                ),
                '.footer_email-block_item' => array(
                    'name' => 'Почта',
                    'type' => 'typo',
                ),
            ),
        ),
    ),

);
echo json_encode($data);
