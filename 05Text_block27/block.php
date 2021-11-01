<?
$data = array(
    'code' => '05Text_block27',
    'fields' => array(
        'NAME' => 'Блок иконок на сером фоне',
        'DESCRIPTION' => '05Text_block27',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block27/preview.jpg',
        'CONTENT' => '
            <section id="form-rieltor27" class="mortgage-section jumbotron">
                <div class="container">
                    <div class="col-md-12">
                            
                        <div class="card text-center">
                          
                          <div class="card-body">
                            <h5 class="cetacs-block_text-block_block-title card-title">Остались вопросы?</h5>
                            <p class="cetacs-block_text-block_text card-text">Подробнее по телефону
                                <a class="cetacs-block_text-block_link main-menu__home-btn" href="tel:+79001000000">
                                            <i class="cetacs-block_text-block_icon fa fa-phone" aria-hidden="true"></i>
                                            <span class="cetacs-block_text-block_title">+7 900 100 0000</span>
                                        </a>
                            </p>
                            <button class="b24-web-form-popup-btn-8 btn btn-primary">Задать вопрос</button>

                           
                          </div>
                          
                        </div>
                       
                    </div>
                </div>
            </section>
         ',
    ),
    'manifest' => array(
        'block' => array(
        ),
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block27/style.css'
            )
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
            '.cetacs-block_text-block_link' => array(
                'name' => 'Ссылка пункт меню',
                'type' => 'link',
                'skipContent' => true
            ),
            '.cetacs-block_text-block_icon' => array(
                'name' => 'Иконка телефона',
                'type' => 'icon'
            ),
            '.cetacs-block_text-block_title' => array(
                'name' => 'Телефон',
                'type' => 'text',
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
                '.cetacs-block_text-block_link' => array(
                    'name' => 'Ссылка пункт меню',
                    'type' => 'ypo',
                ),
                '.cetacs-block_text-block_title' => array(
                    'name' => 'Телефон',
                    'type' => 'typo',
                ),
            ),
        ),
    ),

);
echo json_encode($data);

