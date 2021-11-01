<?
$data = array(
    'code' => '06Banner_logo01',
    'fields' => array(
        'NAME' => 'Блог партнёры',
        'DESCRIPTION' => '06Banner_logo01',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/06Banner_logo01/preview.jpg',
        'CONTENT' => '
            <section class="cetacs-block_banner-logo_bg partners">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="cetacs-block_banner-logo_title heading-dark">Наши Партнёры</h2>
                            <div class="row">
                                <div class="cetacs-block_banner-logo_list-logo col-md-3">
                                    <a href="#" class="cetacs-block_banner-logo_link">
                                    <img class="cetacs-block_banner-logo_img img-responsive"
                                          src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/upload/resize_cache/iblock/205/0_73_1/205b8387a275077a05f6587cf4473238.png"
                                          alt="">
                                    </a>
                                </div>
                                <div class="cetacs-block_banner-logo_list-logo col-md-3">
                                    <a href="#" class="cetacs-block_banner-logo_link">
                                    <img class="cetacs-block_banner-logo_img img-responsive"
                                          src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/upload/resize_cache/iblock/034/0_73_1/03419e3607139acff3c615d58f2a80c6.png"
                                          alt="">
                                    </a>
                                </div>
                                <div class="cetacs-block_banner-logo_list-logo col-md-3">
                                    <a href="#" class="cetacs-block_banner-logo_link">
                                    <img class="cetacs-block_banner-logo_img img-responsive"
                                          src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/upload/resize_cache/iblock/1a8/0_73_1/1a8524a322e4f0983fefb99a639c2698.png"
                                          alt="">
                                    </a>
                                </div>
                                <div class="cetacs-block_banner-logo_list-logo col-md-3">
                                    <a href="#" class="cetacs-block_banner-logo_link">
                                    <img class="cetacs-block_banner-logo_img img-responsive"
                                          src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/upload/resize_cache/iblock/298/0_73_1/298e69fcbaba97ff2483ce52396c0170.jpg"
                                          alt="">
                                    </a>
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
                'https://abcdef.tmweb.ru/AppAgency001/06Banner_logo01/style.css',
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols01/owl.carousel.css'
            ),
            'js' => array (
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols01/owl.carousel.js',
                'https://abcdef.tmweb.ru/AppAgency001/04Cards_cols01/script.js'
            ),
        ),
        'cards' => [
            '.cetacs-block_banner-logo_list-logo' => [
                'name' => 'Логотип',
                'label' => array(
                    '.cetacs-block_banner-logo_img',
                ),
            ],
        ],
        'nodes' => array(
            '.cetacs-block_banner-logo_bg' => array(
                'name' => 'Фон блока',
                'type' => 'img',
                'dimensions' => array('width' => 270, 'height' => 80),
            ),
            '.cetacs-block_banner-logo_title' => array(
                'name' => 'Заголовок блок',
                'type' => 'text',
            ),
            '.cetacs-block_banner-logo_img' => array(
                'name' => 'Логотип',
                'type' => 'img',
                // изображение будет приведено к данному размеру
                'dimensions' => array('maxWidth' => 270, 'maxHeight' => 90),
                'group' => 'logo',
            ),
            '.cetacs-block_banner-logo_link' => array(
                'name' => 'Ссылка',
                'type' => 'link',
                'group' => 'logo'
            ),
        ),
        'style' => array(
            '.cetacs-block_banner-logo_list-logo' => [
                'name' => 'Логотип',
                'type' => array(
                    'columns', 'animation'
                ),
            ],
            '.cetacs-block_banner-logo_bg' => array(
                'name' => "Блок",
                'type' => 'block-default-background-overlay-height-vh',
            ),
            '.cetacs-block_banner-logo_title' => array(
                'name' => 'Заголовок блок',
                'type' => 'typo',
            ),

        ),
    ),

);
echo json_encode($data);
