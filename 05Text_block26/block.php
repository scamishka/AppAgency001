<?
$data = array(
    'code' => '05Text_block26',
    'fields' => array(
        'NAME' => 'Блок иконок на сером фоне',
        'DESCRIPTION' => '05Text_block26',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block26/preview.jpg',
        'CONTENT' => '
            <section id="price-rieltor26" class="mortgage-section">
                <div class="container">
                    <div class="col-md-12">
                            <h2 class="cetacs-block_text-block_block-title mb-none text-center">Стоимость экспертных услуг</h2>
                            <p class="cetacs-block_text-block_text text-center">
                                Цены на услуги риэлтора по продаже и покупке квартир, что входит в цену.
                            </p>
                        <div class="card-deck">
                            <div class="cetacs-block_text-block_item card text-center">
                                <div class="cetacs-block_text-block_item-header card-header">
                                    Продажа
                                </div>
                                <div class="card-body">
                                    <h4 class="cetacs-block_text-block_item-title card-title">от 2% стоимости</h4>
                                    <ul class="cetacs-block_text-block_item-card list-group list-group-flush">
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Реклама объекта</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Проведение переговоров</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Консалтинг по юридическим и налоговым вопросам</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Проведение сделки «под ключ»</li>

                                      </ul>
                                    <p class="cetacs-block_text-block_item-subtitle card-text"></p>
                                </div>
                                
                            </div>
                            <div class="cetacs-block_text-block_item card text-center">
                                <div class="cetacs-block_text-block_item-header card-header">
                                    Сопровождение
                                </div>
                                <div class="card-body">
                                    <h4 class="cetacs-block_text-block_item-title card-title">от 25000 руб.</h4>
                                    <ul class="cetacs-block_text-block_item-card list-group list-group-flush">
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Правовая экспертиза документов, проверка «чистоты» объекта</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Юридический консальтинг</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Экспертиза возможных рисков и несоответствий</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Гарантированная  регистрация документов</li>

                                      </ul>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text"></p>
                                </div>
                               
                            </div>
                            <div class="cetacs-block_text-block_item card text-center">
                                <div class="cetacs-block_text-block_item-header card-header ">
                                    Новостройки
                                </div>
                                <div class="card-body">
                                    <h4 class="cetacs-block_text-block_item-title card-title">0%  комиссии</h4>
                                    <ul class="cetacs-block_text-block_item-card list-group list-group-flush">
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Консалтинг  по новостройкам, подрядчикам, инвесторам</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Подбор квартиры под ваш бюджет и пожелания</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Персональная экскурсия по новостройкам</li>
                                        <li class="cetacs-block_text-block_item-card_item list-group-item">Юридическое представление ваших интересов у застройщика</li>

                                      </ul>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text"></p>
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
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block26/style.css'
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

