<?
$data = array(
    'code' => '04Cards_cols01',
    'fields' => array(
        'NAME' => 'Блок карточек в колонки',
        'DESCRIPTION' => '04Cards_cols01',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols01/preview.jpg',
        'CONTENT' => '
            <section class="special-realty-list block-view">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class=" cetacs-block_cards-cols_title heading-dark main-slider__h2">Горячие Предложения</h2>
                            <span class="main-slider__more-btn">
                                <a class="cetacs-block_cards-cols_title-link" href="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/an/364/catalog/">Все объекты</a>
                            </span>
            
                            <ul class="owl-carousel owl-theme">
                                <li class="cetacs-block_cards-cols_card">
                                    <div class=" price bgc-prm">
                                        <span class="cetacs-block_cards-cols_card_price">1 110 000 </span> <i class="fa fa-rub"></i>
                                    </div>
            
                                    <div class="realty_list_item" data-mh="list">
                                        <div class="pict-container">
                                            <div class="img-thumbnail">
                                                <a class="cetacs-block_cards-cols_card_img-link" target="_blank"
                                                   href="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/catalog/123541">
                                                    <img class="cetacs-block_cards-cols_card_img" src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/upload/images/realty/tgi/min_tGibaNH4K8QGf2iF.jpeg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="about-container">
                                            <div class="row"></div>
            
                                            <div class="about-text">
                                                <div class="title">
                                                    <a class="cetacs-block_cards-cols_card_item-link" target="_blank"
                                                       href="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/catalog/123541">
                                                        1-комн. квартира, 33.1 м<sup>2</sup>, Войсковая улица, 4, Краснодар </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cetacs-block_cards-cols_card">
                                    <div class="price bgc-prm">
                                        <span class="cetacs-block_cards-cols_card_price">1 110 000 </span> <i class="fa fa-rub"></i>
                                    </div>
            
                                    <div class="realty_list_item" data-mh="list">
                                        <div class="pict-container">
                                            <div class="img-thumbnail">
                                                <a class="cetacs-block_cards-cols_card_img-link" target="_blank"
                                                   href="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/catalog/123539">
                                                    <img class="cetacs-block_cards-cols_card_img" src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/upload/images/realty/t9y/min_t9Yb8ad5KTADyAya.jpeg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="about-container">
                                            <div class="row"></div>
            
                                            <div class="about-text">
                                                <div class="title">
                                                    <a class="cetacs-block_cards-cols_card_item-link" target="_blank"
                                                       href="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/catalog/123539">
                                                        1-комн. квартира, 32.9 м<sup>2</sup>, Войсковая улица, 4, Краснодар </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols01/style.css',
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols01/owl.carousel.css'

            ),
            'js' => array (
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols01/owl.carousel.js',
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols01/script.js'
            ),
        ),
        'cards' => array(
            '.cetacs-block_cards-cols_card' => array(
                'name' => 'object',
                'label' => array(
                    '.cetacs-block_cards-cols_card_item'
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
            '.cetacs-block_cards-cols_card_price' => array(
                'name' => 'Цена',
                'type' => 'text',
                'group' => 'Object-item'
            ),
            '.cetacs-block_cards-cols_card_img-link' => array(
                'name' => 'Ссылка img',
                'type'=> 'link',
                'group' => 'Object-item',
                'skipContent' => true
            ),
            '.cetacs-block_cards-cols_card_img'=> array(
                'nema' => 'Картинка',
                'type' => 'img',
                'group' => 'Object-item'
            ),
            '.cetacs-block_cards-cols_card_item-link' => array(
                'name' => 'Название объекта',
                'type' => 'link',
                'group' => 'Object-item'
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
                '.cetacs-block_cards-cols_card_price' => array(
                    'name' => 'Цена',
                    'type' => 'typo'
                ),
                '.cetacs-block_cards-cols_card_img-link' => array(
                    'name' => 'Ссылка img',
                    'type'=> 'typo-link'
                ),
                '.cetacs-block_cards-cols_card_img'=> array(
                    'nema' => 'Картинка',
                    'type' => ['box', 'block-default'],
                ),
                '.cetacs-block_cards-cols_card_item-link' => array(
                    'name' => 'Название объекта',
                    'type' => 'typo-link'
                ),
            ),
        ),
    ),

);
echo json_encode($data);
