<?
$data = array(
    'code' => '05Text_block24',
    'fields' => array(
        'NAME' => 'Текст с картинкой слева на сером фоне',
        'DESCRIPTION' => '05Text_block24',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block24/preview.jpg',
        'CONTENT' => '
            <section id="about-rieltor24" class="mortgage-section jumbotron">
                <div class="container">
                    <div class="row">
                       <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <span class="img-thumbnail">
                                <img alt="" class="cetacs-block_text-block_img img-responsive rounded-circle"
                                     src="https://abcdef.tmweb.ru/AppAgency001/05Text_block24/image.jpg">
                            </span>
                        </div>
                        <div class="col-md-8">
                        <h2 class="cetacs-block_text-block_block-title mb-none">Ваш личный эксперт по недвижимости
                            </h2>
                            <p class="cetacs-block_text-block_text">
                               Здравствуйте!<br>
                               Меня зовут Николай Пентхаусов и вот уже много лет я работаю 
                               в сфере недвижимости. Начинал я в далеком 1995 с расселения коммунальных 
                               квартир, после чего нарабатывал свой серьезный опыт в продажах самых разных 
                               объектов. Безупречная репутация и рекомендации клиентов являются для меня 
                               главным достижением и мерилом моего успеха.
                               <br>
                               Мой профессионализм дает возможность Вам получать только самые высококачественные 
                               услуги,касается ли это продажи или подбора объектов, оформления ипотеки или 
                               юридического сопровождения сделки. Я - постоянный участник профессиональных 
                               тренингов и профессиональных сообществ в области недвижимости и нахожусь в 
                               тесном конаткте с лучшими специалистами агентств недвижимости, строительных компаний, 
                               крупными подрядчиками и банкам города.
                               <br>
                               Мои коллеги всегда строго придерживаются самых высоких этических норм взаимоотношений 
                               с клиентами. Поэтому Вы можете смело доверить мне решение любых вопросов и проблем, 
                               касающихся Вашей недвижимости. Я лично гарантирую Вам оперативное и эффективное 
                               решение вопросов, связанных с недвижимостью!
                               <br><br>
                               <span class="font-weight-bold">Бесплатная консультация по вопросам недвижимости и права.</span>
                            </p>
                            <p class="cetacs-block_text-block_text-footer font-weight-bold">
                                Звоните прямо сейчас!
                            </p>
                        </div>
                        
                    </div>
                </div>
            </section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block24/style.css'
            ),
        ),
        'nodes' => array(
            '.cetacs-block_text-block_block-title' => array(
                'name' => 'Заголовок блока',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_img' => array(
                'name' => 'Картинка блока',
                'type' => 'img'
            ),
            '.cetacs-block_text-block_text' => array(
                'name' => 'Текст блока',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_text-footer' => array(
                'name' => 'Текст в подвале блока',
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
                '.cetacs-block_text-block_img' => array(
                    'name' => 'Картинка блока',
                    'type' => ['box', 'block-default']
                ),
                '.cetacs-block_text-block_text' => array(
                    'name' => 'Текст блока',
                    'type' => 'typo'
                ),
                '.cetacs-block_text-block_text-footer' => array(
                    'name' => 'Текст в подвале блока',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);

