<?
$data = array(
    'code' => '05Text_block02',
    'fields' => array(
        'NAME' => 'Текстовый блок на светлом фоне',
        'DESCRIPTION' => '05Text_block02',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block02/preview.jpg',
        'CONTENT' => '
            <section class="cetacs-block_text-block_bg block-text">
    <div class="container">
        <h2 class="cetacs-block_text-block_block-title">Эксперт по недвижимости</h2>
        <div class="row">
            <div class="col-md-12">
                <p class="cetacs-block_text-block_text">
                    «Успешное агентство» - надежное и успешное агентство, которое уже много лет работает на
                    рынке недвижимости. Имея за плечами столь серьезный опыт, мы продолжаем активно искать и
                    находить новые возможности для своего профессионального роста.
                <br/><br/>

                    Наш профессионализм дает возможность нашим клиентам получать только самые
                    высококачественные услуги, касается ли это продажи или подбора объектов, оформления
                    ипотеки или юридического сопровождения сделки. «Успешное агентство»- участник многих
                    профессиональных сообществ в области недвижимости и это является еще одной гарантией для
                    наших клиентов.
                <br/><br/>

                    Наши сотрудники всегда строго придерживаются самых высоких этических норм
                    взаимоотношений с клиентами. Поэтому вы можете смело доверить нам любые вопросы и
                    проблемы, касающиеся вашей недвижимости. У нас вы всегда получите оперативное и
                    эффективное решение своих вопросов, связанных с недвижимостью!
                </p>
                <i>
                        <p class="cetacs-block_text-block_caption" style="text-align: right;"><strong>
                            «Успешное агентство»:&nbsp;<br>
                            Лучшие ответы на вечные вопросы!</strong>
                        </p>
                    </i>
            </div>
        </div>
    </div>
</section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block02/style.css'
            ),
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
                'name' => 'Текст',
                'type' => 'text'
            ),
            '.cetacs-block_text-block_caption' => array(
                'name' => 'Подпись',
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
                    'name' => 'Текст',
                    'type' => 'typo'
                ),
                '.cetacs-block_text-block_caption' => array(
                    'name' => 'Подпись',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);

