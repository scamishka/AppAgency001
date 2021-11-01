<?
$data = array(
    'code' => '05Text_block11',
    'fields' => array(
        'NAME' => 'Текст с картинкой справа',
        'DESCRIPTION' => '05Text_block11',
        'SECTIONS' => 'Юрист по недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block11/preview.jpg',
        'CONTENT' => '
            <section class="cetacs-block_text-block_bg mortgage-section">
                <div class="container">
                    <div class="row">
                       
                        <div class="cetacs-block_text-block_block-list col-md-8">
                        <h1 class="cetacs-block_text-block_block-title mb-none">Юрист по сделкам с недвижимостью
                            </h1>
                            <p class="cetacs-block_text-block_text">
                                Вам необходимо купить или продать квартиру, дом, земельный участок и для сопровождения требуется юрист по недвижимости  в Москве?
                                Необходимо в кратчайшее время зарегистрировать сделку с гарантией ее «чистоты»?
                                Тогда Вам просто необходима грамотная консультация юриста по недвижимости!
                                Поняв все нюансы Вашей ситуации и разобрав все документы, наш юрист проконсультирует Вас по любым вопросам, подскажет, где возможен риск и объяснит, как его избежать. А самое главное – Вы получите наилучший план действий в конкретной ситуации.
                            </p>
                            
                        </div>
                        <div class="cetacs-block_text-block_block-img col-md-4">
                            <span class="img-thumbnail">
                                <img alt="" class="cetacs-block_text-block_img img-responsive"
                                     src="https://abcdef.tmweb.ru/AppAgency001/05Text_block11/image.jpg">
                            </span>
                        </div>
                    </div>
                </div>
            </section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block11/style.css'
            ),
            'js' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block11/script.js'
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
            '.cetacs-block_text-block_img' => array(
                'name' => 'Картинка блока',
                'type' => 'img'
            ),
            '.cetacs-block_text-block_text' => array(
                'name' => 'Текст блока',
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
            ),
        ),
        'attrs' => array(
            '.cetacs-block_text-block_block-img' => array(
                'name' => 'Расположение картинки',
                'type' => 'dropdown',
                'attribute' => 'data-img-position',
                'items' => array(
                    'img-left' => 'слева',
                    'img-right' => 'справа',

                ),
            ),
        ),
    ),

);
echo json_encode($data);

