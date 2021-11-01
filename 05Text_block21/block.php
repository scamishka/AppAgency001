<?
$data = array(
    'code' => '05Text_block21',
    'fields' => array(
        'NAME' => 'Блок иконок на светлом фоне',
        'DESCRIPTION' => '05Text_block21',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block21/preview.jpg',
        'CONTENT' => '
            <section id="service-rieltor21" class="mortgage-section">
                <div class="container">
                    <div class="col-md-12">
                            <h2 class="cetacs-block_text-block_block-title mb-none text-center">Услуги риелтора в городе Москва</h2>
                            <p class="cetacs-block_text-block_text text-center">
                                Экспертные услуги по недвижимости в Москве – моя профессия.
                            </p>
                        <div class="card-deck">
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-briefcase card-img-top" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Надежно</h5>
                                    <p class="cetacs-block_text-block_item-subtitle card-text"></p>
                                </div>
                                <div class="card-footer">
                                    <small class="cetacs-block_text-block_item-text text-muted">От консультации по телефону до полного закрытия Вашей сделки – работаю комплексно.</small>
                                </div>
                            </div>
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-graduation-cap card-img-top" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Профессионально</h5>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text"></p>
                                </div>
                                <div class="card-footer">
                                  <small class="cetacs-block_text-block_item-text text-muted">Только работающие и эффективные продающие технологии. Каждая сделка сопровождается экспертом-юристом.</small>
                                </div>
                            </div>
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-clock-o card-img-top" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Выгодно</h5>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text"></p>
                                </div>
                                <div class="card-footer">
                                  <small class="cetacs-block_text-block_item-text text-muted">Продаю Вашу недвижимость быстро и по максимальной цене. </small>
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
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block21/style.css'
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

