<?
$data = array(
    'code' => '03Banner_form_right11',
    'fields' => array(
        'NAME' => 'Баннер с текстом и формой справа',
        'DESCRIPTION' => '03Banner_form_right11',
        'SECTIONS' => 'Юрист по недвижимости',
        'subtype' => 'form',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/03Banner_form_right11/preview.jpg',
        'CONTENT' => '
            <section class="cetacs-block_banner-form_bg buy-order">
    <div class="bg-filter"></div>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-7 col-md-12">
                <div class="buy-order__text-block">
                    <div class="cetacs-block_banner-form_img-bg woman_bg"
                         style="background-image: url(https://abcdef.tmweb.ru/AppAgency001/03Banner_form_right11/banner_form.jpg);"></div>
                    
                    <ul class="cetacs-block_banner-form_subtitle">
                        <li class="cetacs-block_banner-form_subtitle-list">Правовая экспертиза документов</li>
                        <li class="cetacs-block_banner-form_subtitle-list">Проверка объекта недвижимости и продавца</li>
                        <li class="cetacs-block_banner-form_subtitle-list">Участие в переговорах</li>
                        <li class="cetacs-block_banner-form_subtitle-list">Подготовка документов для сделки</li>
                        <li class="cetacs-block_banner-form_subtitle-list">Споры с застройщиком</li>
                    </ul>
                   
                    <div class="cetacs-block_banner-form_block-text buy-order__else-text">
                        Если Вы не нашли то, что Вам нужно,
                        просто оставьте заявку и наш менеджер свяжется с Вами.
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="featured-boxes mt-none mb-none">
                    <div class="featured-box featured-box-primary mt-xl">
                        <div class="box-content brr-prm ">
                            <div class="bitrix24forms">
<!--                            <h4 class="mb-none fc-prm">Заявка на покупку недвижимости</h4>-->
                               
<!--                            <p>Оставьте заявку и мы свяжемся с вами в ближайшее время</p>-->
                            </div>
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
        'block' => array(
            'subtype' => 'form'
        ),
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/03Banner_form_right11/style.css'
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

