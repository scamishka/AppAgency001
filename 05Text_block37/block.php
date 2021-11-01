<?
$data = array(
    'code' => '05Text_block37',
    'fields' => array(
        'NAME' => 'Блок иконок на сером фоне',
        'DESCRIPTION' => '05Text_block37',
        'SECTIONS' => 'Ипотечный брокер',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block37/preview.jpg',
        'CONTENT' => '
            <section id="text-block-ipoteka37" class="mortgage-section">
                <div class="container">
                    <div class="col-md-12">
                            <h2 class="cetacs-block_text-block_block-title mb-none text-left">Как вы сэкономите от 500 тыс. руб. на переплате?</h2>
                            <p class="cetacs-block_text-block_text text-left">
                                Приведем пример того, как вы можете сэкономить с нашей помощью.
                            </p>
                        <div class="card-deck">
                            <div class="cetacs-block_text-block_item card text-left">
                                <div class="cetacs-block_text-block_item-header card-header">
                                    Наименование
                                </div>
                                <div class="card-body">
                                 <!--h4 class="cetacs-block_text-block_item-title card-title"></h4-->
                                    <ul class="cetacs-block_text-block_item-card list-group list-group-flush">
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><h4>Сумма</h4></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><h4>Срок</h4></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><h4>Процентная ставка</h4></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><h4>Переплата</h4></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><h4>Экономия</h4></li>
                                      </ul>
                                    <!--p class="cetacs-block_text-block_item-subtitle card-text"></p-->
                                </div>
                                
                            </div>
                            <div class="cetacs-block_text-block_item card text-left">
                                <div class="cetacs-block_text-block_item-header card-header text-center">
                                    Самостоятельно
                                </div>
                                <div class="card-body">
                                    <!--h4 class="cetacs-block_text-block_item-title card-title"></h4-->
                                    <ul class="cetacs-block_text-block_item-card list-group list-group-flush">
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="info">3 000 000 руб.</span></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="info">15 лет</span></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="minus">11%</span></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="minus">3 137 624 руб.</span></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="minus">0 руб.</span></li>
                                      </ul>
                                    <!--p class="cetacs-block_text-block_item-subtitle  card-text"></p-->
                                </div>
                               
                            </div>
                            <div class="cetacs-block_text-block_item card text-left">
                                <div class="cetacs-block_text-block_item-header card-header text-center">
                                    С нашей помощью
                                </div>
                                <div class="card-body">
                                    <!--h4 class="cetacs-block_text-block_item-title card-title"></h4-->
                                    <ul class="cetacs-block_text-block_item-card list-group list-group-flush">
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="info">3 000 000 руб.</span></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="info">15 лет</span></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="plus">9%</span></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="plus">2 477 040 руб.</span></li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item"><span class="plus">660 584 руб.</span></li>
                                      </ul>
                                    <!--p class="cetacs-block_text-block_item-subtitle  card-text"></p-->
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
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block37/style.css'
            )
        ),
        'cards' => array(
            '.cetacs-block_text-block_item' => array (
                'name' => 'Карточка с шапкой',
                'label' => array(
                    '.cetacs-block_text-block_item-header'
                ),
            ),
            '.cetacs-block_text-block_item-card' => array(
                'name' => 'Список в карточке',
                'label' => array (
                    '.cetacs-block_text-block_item-card_item'
                )
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
            '.cetacs-block_text-block_item-header' => array(
                'name' => 'Шапка карточки',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_item-title' => array(
                'name' => 'Заголовок карточки',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_item-subtitle' => array(
                'name' => 'Подзаголовок карточки',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_item-card_item' => array(
                'name' => 'Список карточки',
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
                '.cetacs-block_text-block_item-header' => array(
                    'name' => 'Шапка карточки',
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
                '.cetacs-block_text-block_item-card_item' => array(
                    'name' => 'Список карточки',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);

