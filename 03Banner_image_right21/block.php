<?
$data = array(
    'code' => '03Banner_image_right21',
    'fields' => array(
        'NAME' => 'Баннер с текстом и изображением справа',
        'DESCRIPTION' => '03Banner_image_right21',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/03Banner_image_right21/preview.jpg',
        'CONTENT' => '
            <section id="banner-image-right21" class="cetacs-block_banner-image_bg buy-order jumbotron vh-100">
                <div class="container h-100 d-flex">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="buy-order__text-block">
                                <h1 class="cetacs-block_banner-image_title display-4">
                                    Ваш эксперт по недвижимости, риэлтор Николай Пентхаусов
                                </h1>
                                    <p class="cetacs-block_banner-image_text lead">
                                        Я – эксперт по недвижимости в городе Москва и 
                                        рад приветствовать вас на своем персональном сайте.
                                    </p>
                                    <p class="lead button-container">
                                        <a href="#" class="btn button buy-order__catalog-btn bgc-prm fc-white bgc-sec-hov">Заказать звонок!</a>
                                    </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="image-bg">
                            <img src="https://abcdef.tmweb.ru/AppAgency001/03Banner_image_right21/banner_form.png" alt="">
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
                'https://abcdef.tmweb.ru/AppAgency001/03Banner_image_right21/style.css'
            ),
            'ext' => array (
                'landing_form'
            ),
        ),
        'cards' => array(
            '.cetacs-block_banner-form_subtitle-list' => array(
                'name' => 'Список',
                'label' => array(
                    '.cetacs-block_banner-form_subtitle-list'
                ),
            ),
        ),
        'nodes' => array(
            '.cetacs-block_banner-form_bg' => array(
                'name' => 'Фон блока',
                'type' => 'img',
                // изображение будет приведено к данному размеру
                'dimensions' => array('width' => 1920, 'height' => 1080),
            ),
            '.cetacs-block_banner-form_img-bg' => array (
                'name' => 'Фоновая картинка',
                'type' => 'img',
                // изображение будет приведено к данному размеру
                'dimensions' => array('width' => 300, 'height' => 420),
            ),
            '.cetacs-block_banner-form_title-head' => array(
                'name' => 'Заголовок',
                'type' => 'text'
            ),
            '.cetacs-block_banner-form_subtitle-list' => array(
                'name' => 'Список подзаголовок',
                'type' => 'text'
            ),
            '.cetacs-block_banner-form_catalog-link' => array(
                'name' => 'Ссылка на каталог',
                'type' => 'link'
            ),
            '.cetacs-block_banner-form_block-text' => array(
                'name' => 'Текст',
                'type' => 'text'
            ),
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.cetacs-block_banner-form_bg' => array(
                    'name' => 'Фон блока',
                    'type' => 'block-default-background-overlay'
                ),
                '.cetacs-block_banner-form_title-head' => array(
                    'name' => 'Заголовок',
                    'type' => 'typo'
                ),
                '.cetacs-block_banner-form_subtitle-list' => array(
                    'name' => 'Список подзаголовок',
                    'type' => 'typo'
                ),
                '.cetacs-block_banner-form_catalog-link' => array(
                    'name' => 'Ссылка на каталог',
                    'type' => 'typo-link'
                ),
                '.cetacs-block_banner-form_block-text' => array(
                    'name' => 'Текст',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);

