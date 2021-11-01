<?
$data = array(
    'code' => '05Text_block32',
    'fields' => array(
        'NAME' => 'Блок иконок на светлом фоне',
        'DESCRIPTION' => '05Text_block32',
        'SECTIONS' => 'Ипотечный брокер',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block32/preview.jpg',
        'CONTENT' => '
            <section id="block-icons-ipoteka32" class="mortgage-section">
                <div class="container">
                    <div class="col-md-12">
                            <h2 class="cetacs-block_text-block_block-title mb-none text-center"></h2>
                            <p class="cetacs-block_text-block_text text-center">
                                
                            </p>
                        <div class="card-deck">
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-percent" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">От 6% годовых</h5>
                                    <p class="cetacs-block_text-block_item-subtitle card-text">Лучшие предложения от банков по спец. условиям</p>
                                </div>
                                <div class="card-footer">
                                    <small class="cetacs-block_text-block_item-text text-muted"></small>
                                </div>
                            </div>
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-check" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Одобряем 9 из 10</h5>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text">Поможем получить ипотеку даже в сложной ситуации</p>
                                </div>
                                <div class="card-footer">
                                  <small class="cetacs-block_text-block_item-text text-muted"></small>
                                </div>
                            </div>
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-money" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Взнос от 0%</h5>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text">Нужна ипотека без первоначального взноса? Легко!</p>
                                </div>
                                <div class="card-footer">
                                  <small class="cetacs-block_text-block_item-text text-muted"></small>
                                </div>
                            </div>
                           <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-handshake-o" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Без предоплаты</h5>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text">Оплата наших услуг только по факту одобрения ипотеки</p>
                                </div>
                                <div class="card-footer">
                                  <small class="cetacs-block_text-block_item-text text-muted"></small>
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
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block32/style.css'
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

