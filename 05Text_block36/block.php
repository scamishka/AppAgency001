<?
$data = array(
    'code' => '05Text_block36',
    'fields' => array(
        'NAME' => 'Блок иконок на светлом фоне',
        'DESCRIPTION' => '05Text_block36',
        'SECTIONS' => 'Ипотечный брокер',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block36/preview.jpg',
        'CONTENT' => '
            <section id="block-icons-ipoteka36" class="mortgage-section">
                <div class="container">
                    <div class="col-md-12">
                            <h2 class="cetacs-block_text-block_block-title mb-none text-center">
                            Помощь в получении ипотеки в Краснодарском крае всем
                            </h2>
                            <p class="cetacs-block_text-block_text text-center">
                                
                            </p>
                        <div class="card-deck">
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-users" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Молодая семья</h5>
                                    <p class="cetacs-block_text-block_item-subtitle card-text">
                                    Ипотека для молодых семей по специальной программе
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="cetacs-block_text-block_item-text text-muted"></small>
                                </div>
                            </div>
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-blind" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Пенсионеры</h5>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text">
                                    Ипотека для пенсионеров и льготников на особых, выгодных условиях
                                    </p>
                                </div>
                                <div class="card-footer">
                                  <small class="cetacs-block_text-block_item-text text-muted"></small>
                                </div>
                            </div>
                            <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-child" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">Материнский капитал</h5>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text">
                                    Использование материнского капитала для ипотеки
                                    </p>
                                </div>
                                <div class="card-footer">
                                  <small class="cetacs-block_text-block_item-text text-muted"></small>
                                </div>
                            </div>
                           <div class="cetacs-block_text-block_item card text-center">
                                <i class="cetacs-block_text-block_item-icon fa fa-copy" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="cetacs-block_text-block_item-title card-title">По двум документам</h5>
                                    <p class="cetacs-block_text-block_item-subtitle  card-text">
                                    Выгодные программы ипотеки по двум документам
                                    </p>
                                </div>
                                <div class="card-footer">
                                  <small class="cetacs-block_text-block_item-text text-muted">
                                
                                   </small>
                                </div>
                            </div>
                        </div>
                       <p class="cetacs-block_text-block_text text-center">
                                
                            </p>
                    </div>
                </div>
            </section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block36/style.css'
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

