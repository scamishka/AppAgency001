<?
$data = array(
    'code' => '05Text_block23',
    'fields' => array(
        'NAME' => 'Блок горизонтальных иконок на светлом фоне',
        'DESCRIPTION' => '05Text_block23',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block23/preview.jpg',
        'CONTENT' => '
            <section id="service-rieltor22" class="mortgage-section">
                <div class="container">
                    <div class="col-md-12">
                            <h2 class="cetacs-block_text-block_block-title mb-none text-center">Подбор квартир вновостройках</h2>
                            <p class="cetacs-block_text-block_text text-center">
                                Подберу и помогу грамотно купить квартиру в новостройках Москвы напрямую от застройщиков, подрядчиков и инвесторов. Комиссия – ноль %
                            </p>
                        <!--div class="card-deck"-->
                        <div class="row">
                            <div class="cetacs-block_text-block_item card col-6 text-center">
                                <div class="row no-gutters">
                                    <div class="col-2 d-flex">
                                        <i class="cetacs-block_text-block_item-icon fa fa-mobile card-img-top d-flex align-self-center justify-content-center" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10 text-left">
                                        <div class="card-body">
                                            <h4 class="cetacs-block_text-block_item-title card-title">Выбор новостройки</h4>
                                            <p class="cetacs-block_text-block_item-subtitle card-text">
                                                Консультирую по покупке новостроек в Москве и области. Экспертные 
                                                советы по ЖК, застройщикам, подрядчикам, инвесторам.
                                            </p>
                                            <p class="card-text">
                                                <small class="cetacs-block_text-block_item-text text-muted">
                                                </small>
                                            </p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="cetacs-block_text-block_item card col-6 text-center">
                                <div class="row no-gutters">
                                    <div class="col-2 d-flex">
                                        <i class="cetacs-block_text-block_item-icon fa fa-search card-img-top d-flex align-self-center justify-content-center" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10 text-left">
                                             <div class="card-body">
                                            <h4 class="cetacs-block_text-block_item-title card-title">Подбор и бронирование квартир</h4>
                                            <p class="cetacs-block_text-block_item-subtitle  card-text">
                                                Подбираю только лучшие и выгодные варианты по вашему бюджету и параметрам из 
                                                профессиональной базы надежных застройщиков, подрядчиков, инвесторов.
                                            </p>
                                            <p class="card-text">
                                                <small class="cetacs-block_text-block_item-text text-muted">
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                            <div class="cetacs-block_text-block_item card col-6 text-center">
                                <div class="row no-gutters">
                                    <div class="col-2 d-flex">
                                        <i class="cetacs-block_text-block_item-icon fa fa-car card-img-top d-flex align-self-center justify-content-center" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10 text-left">
                                    <div class="card-body">
                                                <h4 class="cetacs-block_text-block_item-title card-title">Обзорные экскурсии по новостройкам</h4>
                                                <p class="cetacs-block_text-block_item-subtitle  card-text">
                                                    Проведу для Вас индивидуальную обзорную экскурсию по новостройкам, 
                                                    предоставляю планировки и описание помещений.
                                                </p>
                                                <p class="card-text">
                                                    <small class="cetacs-block_text-block_item-text text-muted">
                                                    </small>
                                                </p>
                                            </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="cetacs-block_text-block_item card col-6 text-center">
                                    <div class="row no-gutters">
                                        <div class="col-2 d-flex">
                                            <i class="cetacs-block_text-block_item-icon fa fa-thumbs-o-up card-img-top d-flex align-self-center justify-content-center" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-10 text-left">
                                            <div class="card-body">
                                                <h4 class="cetacs-block_text-block_item-title card-title">Консультативное сопровождение у застройщика</h4>
                                                <p class="cetacs-block_text-block_item-subtitle  card-text">
                                                    Экспертное юридическое сопровождение сделки с застройщиком, подрядчиком,
                                                     инвестором на всех этапах. Комиссия – ноль % 
                                                </p>
                                                <p class="card-text">
                                                    <small class="cetacs-block_text-block_item-text text-muted">
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!--/div-->
                    </div>
                </div>
            </section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block23/style.css'
            )
        ),
        'cards' => array(
            '.cetacs-block_text-block_item' => array (
                'name' => 'Карточка с иконкой',
                'label' => array(
                    '.cetacs-block_text-block_item-icon',
                    '.cetacs-block_text-block_item-title'
                ),
            ),
        ),
        'nodes' => array(
            '.cetacs-block_text-block_block-title' => array(
                'name' => 'Заголовок блока',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_text' => array(
                'name' => 'Текст блока',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_item-icon' => array(
                'name' => 'Иконка карточки',
                'type' => 'icon'
            ),
            '.cetacs-block_text-block_item-title' => array(
                'name' => 'Заголовок карточки',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_item-subtitle' => array(
                'name' => 'Подзаголовок карточки',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_item-text' => array(
                'name' => 'Текст карточки',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_text-footer' => array(
                'name' => 'Текст подвала блока',
                'type' => 'text'
            ),
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.cetacs-block_text-block_block-title' => array(
                    'name' => 'Заголовок блока',
                    'type' => 'typo'
                ),
                '.cetacs-block_text-block_text' => array(
                    'name' => 'Текст блока',
                    'type' => 'typo'
                ),
                '.cetacs-block_text-block_text-footer' => array(
                    'name' => 'Текст подвала блока',
                    'type' => 'typo'
                ),
                '.cetacs-block_text-block_item-icon' => array(
                    'name' => 'Иконка карточки',
                    'type' => 'typo'
                ),
                '.cetacs-block_text-block_item-title' => array(
                    'name' => 'Заголовок карточки',
                    'type' => 'typo'
                ),
                '.cetacs-block_text-block_item-subtitle' => array(
                    'name' => 'Подзаголовок карточки',
                    'type' => 'typot'
                ),
                '.cetacs-block_text-block_item-text' => array(
                    'name' => 'Текст карточки',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);

