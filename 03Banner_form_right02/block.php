<?
$data = array(
    'code' => '03Banner_form_right02',
    'fields' => array(
        'NAME' => 'Баннер с текстом и формой справа на темном фоне',
        'DESCRIPTION' => '03Banner_form_right02',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/03Banner_form_right02/preview.jpg',
        'CONTENT' => '
                <section class="cetacs-block_banner-form-02_bg sale-order">
    <div class="container">
        <h2 class="cetacs-block_banner-form-02_block-title">Если Вам действительно необходимо БЫСТРО продать квартиру - мы поможем.</h2>
        <div class="row">
            <div class="col-md-7">
                <div class="cetacs-block_banner-form-02_block-card-list">
                    <div class="cetacs-block_banner-form-02_block-list-title1 cetacs-block_banner-form-02_block-list-title-style">
                        На Ваш выбор:
                    </div>
                    <ul class="sale-order__list_dark-bg">
                        <li class="cetacs-block_banner-form-02_block-list-item1">
                            Полный комплекс риэлторских услуг в поиске покупателя и рекламной кампании Вашего
                            объекта.&nbsp;
                        </li>
                        <li class="cetacs-block_banner-form-02_block-list-item1">
                            Помощь в самых ответственных этапах продажи, включая юридическое сопровождение
                            опытного юриста.&nbsp;
                        </li>
                    </ul>
                </div>
                <div class="cetacs-block_banner-form-02_block-card-list">
                    <div class="cetacs-block_banner-form-02_block-list-title2 cetacs-block_banner-form-02_block-list-title-style">
                        Вам предлагаются две формы сотрудничества:
                    </div>
                    <ul class="sale-order__list_dark-bg">
                        <li class="cetacs-block_banner-form-02_block-list-item2">
                            Обычный договор с агентством на продажу объекта&nbsp;
                        </li>
                        <li class="cetacs-block_banner-form-02_block-list-item2">
                            Эксклюзивный договор с агентством на продажу объекта
                        </li>
                    </ul>
                </div>

                <div class="cetacs-block_banner-form-02_block-card-2 row mt-xlg mb-xl">

                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-info">
                                <h4 class="cetacs-block_banner-form-02_block-card-2_title heading-primary mb-xs">
                                    <i class="cetacs-block_banner-form-02_block-card-2_icon1 fa fa-star"></i>
                                    <span class="cetacs-block_banner-form-02_block-card-2_title-text1"> Опыт работы</span>
                                </h4>
                                <p class="cetacs-block_banner-form-02_block-card-2_item-text1 cetacs-block_banner-form-02_block-card-2_item-text">
                                    Многолетний опыт работы наших специалистов позволяет грамотно оценить все
                                    возможности для продажи конкретного объекта. Начиная со звонка нам и до
                                    завершения сделки вас будет сопровождать опытный специалист, знающий
                                    малейшие нюансы рынка недвижимости.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-info">
                                <h4 class="cetacs-block_banner-form-02_block-card-2_title heading-primary mb-xs">
                                    <i class="cetacs-block_banner-form-02_block-card-2_icon2 fa fa-heart"></i>
                                    <span class="cetacs-block_banner-form-02_block-card-2_title-text2">Нас рекомендуют</span>
                                </h4>
                                <p class="cetacs-block_banner-form-02_block-card-2_item-text2 cetacs-block_banner-form-02_block-card-2_item-text">
                                    Нас рекомендуют друзьям. И это лучшее доказательство успешности и
                                    профессионализма нашего агентства. Каждый клиент получает максимум внимания
                                    и компетенции. Будьте уверены – Ваш объект найдет покупателя с нашей
                                    помощью!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <br>
            </div>
            <div class="col-md-5">
                <div class="featured-boxes mt-none mb-none">
                    <div class="featured-box featured-box-primary mt-xl">
                        <div class="box-content brr-prm">
                            <h4 class="mb-none fc-prm">Заявка на продажу недвижимости</h4>
                            <p>Оставьте заявку и мы свяжемся с вами в ближайшее время</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/03Banner_form_right02/style.css'
            ),
        ),
        'cards' => array(
            '.cetacs-block_banner-form-02_block-list-item1' => array(
                'name' => 'Элемент списка1',
                'label' => array(
                    '.cetacs-block_banner-form-02_block-list-item1'
                ),
            ),
            '.cetacs-block_banner-form-02_block-list-item2' => array(
                'name' => 'Элемент списка2',
                'label' => array(
                    '.cetacs-block_banner-form-02_block-list-item2'
                ),
            ),
        ),
        'nodes' => array(
            // заголовок блока
            '.cetacs-block_banner-form-02_block-title' => array(
                'name' => 'Заголовок блока',
                'type' => 'text',
            ),
            // список 1
            '.cetacs-block_banner-form-02_block-list-title1' => array(
                'name' => 'Заголовок списка1',
                'type' => 'text',
            ),
            '.cetacs-block_banner-form-02_block-list-item1' => array(
                'name' => 'Элемент списка1',
                'type' => 'text'
            ),
            // список 2
            '.cetacs-block_banner-form-02_block-list-title2' => array(
                'name' => 'Заголовок списка2',
                'type' => 'text',
            ),
            '.cetacs-block_banner-form-02_block-list-item2' => array(
                'name' => 'Элемент списка2',
                'type' => 'text'
            ),
            // 1 колонка
            '.cetacs-block_banner-form-02_block-card-2_title-text1' => array(
                'name' => 'Заголовок колонки',
                'type' => 'text'
            ),
            '.cetacs-block_banner-form-02_block-card-2_icon1' => array(
                'name' => 'Иконка заголовка колонки',
                'type' => 'icon'
            ),
            '.cetacs-block_banner-form-02_block-card-2_item-text1' => array(
                'name' => 'Содержимое колонки',
                'type' => 'text'
            ),
            // 2 колонка
            '.cetacs-block_banner-form-02_block-card-2_title-text2' => array(
                'name' => 'Заголовок колонки',
                'type' => 'text'
            ),
            '.cetacs-block_banner-form-02_block-card-2_icon2' => array(
                'name' => 'Иконка заголовка колонки',
                'type' => 'icon'
            ),
            '.cetacs-block_banner-form-02_block-card-2_item-text2' => array(
                'name' => 'Содержимое колонки',
                'type' => 'text'
            ),
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.cetacs-block_banner-form-02_block-title' => array(
                    'name' => 'Заголовок блока',
                    'type' => 'typo',
                ),

                '.cetacs-block_banner-form-02_block-card-list' => array(
                    'name' => 'Блок списки',
                    'type' => array('typo', 'box'),
                ),
                '.cetacs-block_banner-form-02_block-list-title-style' => array(
                    'name' => 'Заголовок списка',
                    'type' => 'typo'
                ),
                '.cetacs-block_banner-form-02_block-card-2_title' => array(
                    'name' => 'Заголовок колонки',
                    'type' => array('typo', 'box'),
                ),
                '.cetacs-block_banner-form-02_block-card-2_item-text' => array(
                    'name' => 'Содержимое колонки',
                    'type' => 'typo',
                ),
            ),
        ),
    ),

);
echo json_encode($data);
