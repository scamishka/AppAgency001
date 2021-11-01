<?
$data = array(
    'code' => '05Text_block14',
    'fields' => array(
        'NAME' => 'Блок иконок на светлом фоне',
        'DESCRIPTION' => '05Text_block14',
        'SECTIONS' => 'Юрист по недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block14/preview.jpg',
        'CONTENT' => '
            <section id="support" class="cetacs-block_text-block_bg mortgage-section">
                <div class="container">
                    <div class="cetacs-block_text-block_block-list col-md-12">
                            <h2 class="cetacs-block_text-block_block-title mb-none text-center">СОПРОВОЖДЕНИЕ СДЕЛОК С НЕДВИЖИМОСТЬЮ</h2>
                            <p class="cetacs-block_text-block_text text-center">
                                Каждая сделка с недвижимостью имеет свою специфику в зависимости от
                                вида имущества и его особенностей. Важно так же правильное
                                использование ипотеки, материнского капитала, региональных субсидий
                                и прочие детали. В общих чертах схема юридического сопровождения
                                выглядит так:
                            </p>
                        <div class="card-deck">
                            <div class="card text-center">
                                <i class="fa fa-phone card-img-top" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Консультация</h5>
                                    <p class="card-text"></p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted">Звоните нам по телефону и назначаем встречу в офисе</small>
                                </div>
                            </div>
                            <div class="card text-center">
                                <i class="fa fa-search card-img-top" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Экспертиза</h5>
                                    <p class="card-text"></p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted">Проводим правовую экспертизу предоставленных клиентом документов</small>
                                </div>
                            </div>
                            <div class="card text-center">
                                <i class="fa fa-graduation-cap card-img-top" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Составление</h5>
                                    <p class="card-text"></p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted">Готовим предварительные и основные договоры, соглашения, акты, расписки</small>
                                </div>
                            </div>
                            <div class="card text-center">
                                <i class="fa fa-key card-img-top" aria-hidden="true"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Оформление</h5>
                                    <p class="card-text"></p>
                                </div>
                                <div class="card-footer">
                                  <small class="text-muted">Занимаемся регистрацией недвижимого имущества "под ключ"</small>
                                </div>
                            </div>
                        </div>
                        <p class="cetacs-block_text-block_text-footer text-left">
                        <strong>Важно!</strong> Если Вам это необходимо – юрист выезжает на дом или 
                        в Ваш офис по Москве.<br> 
                        Возможно участие юриста в переговорах сторон по условиям планируемой сделки.<br>
                        Нуждаетесь в консультации, проверке документов или есть хоть какой-то вопрос,
                         который Вы хотели бы задать юристу по недвижимости?<br>
                        <strong>Звоните прямо сейчас!</strong>
                        </p>
                    </div>
                </div>
            </section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block14/style.css'
            )
        ),
        'nodes' => array(
            '.cetacs-block_text-block_bg' => array(
                'name' => 'Фон блока',
                'type' => 'img',
                // изображение будет приведено к данному размеру
                'dimensions' => array('width' => 1920, 'height' => 1080),
            ),
            '.cetacs-block_text-block_block-title' => array(
                'name' => 'Заголовок блока',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_text' => array(
                'name' => 'Текст блока',
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
            ),
        ),
    ),

);
echo json_encode($data);

