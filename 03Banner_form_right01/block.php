<?
$data = array(
    'code' => '03Banner_form_right01',
    'fields' => array(
        'NAME' => 'Баннер с текстом и формой справа',
        'DESCRIPTION' => '03Banner_form_right01',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/03Banner_form_right01/preview.jpg',
        'CONTENT' => '
            <section class="cetacs-block_banner-form_bg buy-order">
    <div class="bg-filter"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="buy-order__text-block">
                    <div class="cetacs-block_banner-form_img-bg woman_bg"
                         style="background-image: url(https://abcdef.tmweb.ru/AppAgency001/03Banner_form_right01/banner_form.png);"></div>
                    <h1 class="cetacs-block_banner-form_title-head">Купить квартиру в Краснодаре</h1>
                    <ul class="cetacs-block_banner-form_subtitle">
                        <li class="cetacs-block_banner-form_subtitle-list">Найдите, что продают дешевле.</li>
                        <li class="cetacs-block_banner-form_subtitle-list">Узнайте, где строят лучше.</li>
                        <li class="cetacs-block_banner-form_subtitle-list">Выберите подходящий вариант.&nbsp;</li>
                    </ul>
                    <a href="#"
                       class="cetacs-block_banner-form_catalog-link buy-order__catalog-btn btn bgc-prm fc-white bgc-sec-hov">Перейти в каталог
                        объектов</a>
                    <div class="cetacs-block_banner-form_block-text buy-order__else-text">
                        Если Вы не нашли то, что Вам нужно,
                        просто оставьте заявку и наш менеджер свяжется с Вами.
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="featured-boxes mt-none mb-none">
                    <div class="featured-box featured-box-primary mt-xl">
                        <div class="box-content brr-prm">
                            <h4 class="mb-none fc-prm">Заявка на покупку недвижимости</h4>
                            <p>Оставьте заявку и мы свяжемся с вами в ближайшее время</p>
                            
                        </div>
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
                'https://abcdef.tmweb.ru/AppAgency001/03Banner_form_right01/style.css'
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

