<?
$data = array(
    'code' => '05Text_block25',
    'fields' => array(
        'NAME' => 'Блок горизонтальных иконок на светлом фоне',
        'DESCRIPTION' => '05Text_block25',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block25/preview.jpg',
        'CONTENT' => '
            <section id="advantages-rieltor25" class="mortgage-section">
                <div class="container">
                    <div class="col-md-12">
                            <h2 class="cetacs-block_text-block_block-title mb-none text-center">Преимущества работысо мной</h2>
                            <p class="cetacs-block_text-block_text text-center">
                            </p>
                        <!--div class="card-deck"-->
                        <div class="row">
                            <div class="cetacs-block_text-block_item card col-6 text-center">
                                <div class="row no-gutters">
                                    <div class="col-2 d-flex">
                                        <i class="cetacs-block_text-block_item-icon fa fa-check card-img-top d-flex justify-content-center align-self-center" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10 text-left">
                                        <div class="card-body">
                                            <h4 class="cetacs-block_text-block_item-title card-title">Эксперт в недвижимости</h4>
                                            <p class="cetacs-block_text-block_item-subtitle card-text">
                                                20 с лишним лет успешной деятельности в сфере недвижимости Москвы и области, 
                                                юрист по недвижимости.
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
                                        <i class="cetacs-block_text-block_item-icon fa fa-check card-img-top d-flex justify-content-center align-self-center" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10 text-left">
                                         <div class="card-body">
                                                <h4 class="cetacs-block_text-block_item-title card-title">Оперативная поддержка</h4>
                                                <p class="cetacs-block_text-block_item-subtitle  card-text">
                                                Возможно подключение к процессу работу на любом этапе сделки. Обеспечиваю 
                                                исключительно выгодные и безопасные возможности продать или купить недвижимость.
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
                                        <i class="cetacs-block_text-block_item-icon fa fa-check card-img-top d-flex justify-content-center align-self-center" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10 text-left">
                                        <div class="card-body">
                                            <h4 class="cetacs-block_text-block_item-title card-title">Эффективные технологии</h4>
                                            <p class="cetacs-block_text-block_item-subtitle  card-text">
                                                Только рабочие и самые современные технологии переговоров и продаж в недвижимости.

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
                                            <i class="cetacs-block_text-block_item-icon fa fa-check card-img-top d-flex justify-content-center align-self-center" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-10 text-left">
                                            <div class="card-body">
                                                <h4 class="cetacs-block_text-block_item-title card-title">Гарантированный результат</h4>
                                                <p class="cetacs-block_text-block_item-subtitle  card-text">
                                                    Экспертные методы и комплексный подход – гарантия результата по договору. 
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
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block25/style.css'
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

