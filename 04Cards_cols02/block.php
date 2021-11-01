<?
$data = array(
    'code' => '04Cards_cols02',
    'fields' => array(
        'NAME' => 'Блок карточек с полями',
        'DESCRIPTION' => '04Cards_cols02',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols02/preview.jpg',
        'CONTENT' => '
            <section class="realtors">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="cetacs-block_cards-cols_title heading-dark main-slider__h2">Наши Специалисты</h2>
                            <span class="main-slider__more-btn">
                                <a class="cetacs-block_cards-cols_title-link" href="#">
                                    Все специалисты
                                </a>
                            </span>
                            <ul class="team-list owl-carousel owl-theme">
            
                                <li class="cetacs-block_cards-cols_card isotope-item leadership">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                                        <span class="thumb-info-wrapper">
                                            <a class="cetacs-block_cards-cols_card_link"
                                                    target="_blank" rel="nofollow"
                                                href="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/seller/273/catalog/">
                                                <img class="cetacs-block_cards-cols_card_foto img-responsive"
                                                     src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/upload/resize_cache/main/f25/300_300_2/f25053f134161faac637995ebe7e0a7b.png"
                                                     alt="Иван  Иванов"
                                                     title="Иван  Иванов"
                                                     >
                                                <span class="thumb-info-title">
                                                    <span class="cetacs-block_cards-cols_card_name thumb-info-inner">
                                                        Иван  Иванов
                                                    </span>
                                                    <span class="cetacs-block_cards-cols_card_phone thumb-info-type bgc-prm">
                                                        +7-913-0211427
                                                    </span>
                                                </span>
                                            </a>
                                        </span>
                                        <span class="thumb-info-caption">
                                            <span class="cetacs-block_cards-cols_card_email thumb-info-caption-text">
                                                  RealKrasIvan@bk.ru
                                            </span>
                                        </span>
                                    </span>
                                </li>
            
                                <li class="cetacs-block_cards-cols_card isotope-item leadership">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                                        <span class="thumb-info-wrapper">
                                            <a class="cetacs-block_cards-cols_card_link"
                                                    target="_blank" rel="nofollow"
                                                href="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/seller/273/catalog/">
                                                <img class="cetacs-block_cards-cols_card_foto img-responsive"
                                                     src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/upload/resize_cache/main/f25/300_300_2/f25053f134161faac637995ebe7e0a7b.png"
                                                     alt="Алексей  Александров"
                                                     title="Алексей  Александров"
                                                     >
                                                <span class="thumb-info-title">
                                                    <span class="cetacs-block_cards-cols_card_name thumb-info-inner">
                                                        Алексей  Александров
                                                    </span>
                                                    <span class="cetacs-block_cards-cols_card_phone thumb-info-type bgc-prm">
                                                        +7-953-0911922
                                                    </span>
                                                </span>
                                            </a>
                                        </span>
                                        <span class="thumb-info-caption">
                                            <span class="cetacs-block_cards-cols_card_email thumb-info-caption-text">
                                                  RealKrasAlex@bk.ru
                                            </span>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
               'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols02/style.css',
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols02/owl.carousel.css'
            ),
            'js' => array (
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols02/owl.carousel.js',
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols02/script.js'
            ),
        ),
        'cards' => array(
            '.cetacs-block_cards-cols_card' => array(
                'name' => 'object',
                'label' => array(
                    '.cetacs-block_cards-cols_card_name'
                ),
            ),
        ),
        'nodes' => array(

            '.cetacs-block_cards-cols_title' => array(
                'name' => 'Заголовок блока',
                'type' => 'text',
            ),
            '.cetacs-block_cards-cols_title-link' => array(
                'name' => 'Ссылка блока',
                'type' => 'link'
            ),
            // карточка
            '.cetacs-block_cards-cols_card_foto'=> array(
                'nema' => 'Фото',
                'type' => 'img',
                'group' => 'Object-item'
            ),
            '.cetacs-block_cards-cols_card_name' => array(
                'name' => 'Имя',
                'type' => 'text',
                'group' => 'Object-item'
            ),
            '.cetacs-block_cards-cols_card_phone' => array(
                'name' => 'Телефон',
                'type' => 'text',
                'group' => 'Object-item'
            ),
            '.cetacs-block_cards-cols_card_email' => array(
                'name' => 'e-mail',
                'type' => 'text',
                'group' => 'Object-item'
            ),
            '.cetacs-block_cards-cols_card_link' => array(
                'name' => 'Ссылка',
                'type'=> 'link',
                'group' => 'Object-item',
                'skipContent' => true
            ),
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.cetacs-block_cards-cols_card' => array(
                    'name' => 'Карточка',
                    'type' => array(
                        'columns', 'animation'
                    ),
                ),
                '.cetacs-block_cards-cols_title' => array(
                    'name' => 'Заголовок блока',
                    'type' => 'typo',
                ),
                '.cetacs-block_cards-cols_title-link' => array(
                    'name' => 'Ссылка блока',
                    'type' => 'typo-link'
                ),
                '.cetacs-block_cards-cols_card_name' => array(
                    'name' => 'Имя',
                    'type' => 'typo'
                ),
                '.cetacs-block_cards-cols_card_phone' => array(
                    'name' => 'Телефон',
                    'type' => 'typo'
                ),
                '.cetacs-block_cards-cols_card_email' => array(
                    'name' => 'email',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);
