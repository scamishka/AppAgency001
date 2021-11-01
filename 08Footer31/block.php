<?
$data = array(
    'code' => '08Footer31',
    'fields' => array(
        'NAME' => 'Подвал сайта на темном фоне с формой',
        'DESCRIPTION' => '08Footer31',
        'SECTIONS' => 'Ипотечный брокер',
        'subtype' => 'form',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/08Footer31/preview.jpg',
        'CONTENT' => '
           <footer id="contacts31" class="cetacs-block_footer_bg contacts">
                <div class="container">
                    <h2 class="cetacs-block_footer_title text-center">Контакты</h2>
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="buy-order__text-block">
                                <p class="cetacs-block_footer_text lead">
                                   
                                </p>
            
                                <div class="buy-order__else-text">
                                    <h3 class="cetacs-block_footer_title-contacts">Центральный офис</h3>
                                    <address>
                                        <a class="cetacs-block_footer_phone-link fc-prm" href="tel:+70001000000">
                                            <abbr><i class="cetacs-block_footer_phone-icon fa fa-phone"></i></abbr>
                                            <span class="cetacs-block_footer_phone-item">+7 000 100 00 00 </span>
                                        </a><br>
                                            <abbr><i class="cetacs-block_footer_address-icon fa fa-map-marker"></i></abbr>
                                            <span class="cetacs-block_footer_address-item">Краснодар, улица Ленина, дом 11</span>
                                    </address>
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
            </footer>
        ',
    ),
    'manifest' => array(
        'block' => array(
            'subtype' => 'form'
        ),
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/08Footer31/style.css'
            ),
            'ext' => array (
                'landing_form'
            ),
        ),
        'nodes' => array(
            '.cetacs-block_footer_bg' => array(
                'name' => 'Фон блока',
                'type' => 'img',
                // изображение будет приведено к данному размеру
                'dimensions' => array('width' => 1920, 'height' => 1080),
            ),
            '.cetacs-block_footer_title' => array (
                'name' => 'Заголовок блока',
                'type' => 'text'
            ),
            '.cetacs-block_footer_text' => array(
                'name' => 'Текст блока',
                'type' => 'text'
            ),
            '.cetacs-block_footer_title-contacts' => array(
                'name' => 'Заголовок контактов',
                'type' => 'text'
            ),
            '.cetacs-block_footer_phone-icon' => array(
                'name' => 'Иконка телефон',
                'type' => 'icon',
            ),
            '.cetacs-block_footer_phone-item' => array(
                'name' => 'Телефон',
                'type' => 'text'
            ),
            '.cetacs-block_footer_phone-link' => array(
                'name' => 'Ссылка контакт',
                'type' => 'link',
                'skipContent' => true
            ),
            '.cetacs-block_footer_address-icon' => array(
                'name' => 'Иконка телефон',
                'type' => 'icon',
            ),
            '.cetacs-block_footer_address-item' => array(
                'name' => 'Телефон',
                'type' => 'text'
            ),
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.cetacs-block_footer_bg' => array(
                    'name' => 'Фон блока',
                    'type' => 'block-default-background-overlay'
                ),
                '.cetacs-block_footer_title' => array (
                    'name' => 'Заголовок блока',
                    'type' => 'typo'
                ),
                '.cetacs-block_footer_text' => array(
                    'name' => 'Текст блока',
                    'type' => 'typo'
                ),
                '.cetacs-block_footer_title-contacts' => array(
                    'name' => 'Заголовок контактов',
                    'type' => 'typo'
                ),
                '.cetacs-block_footer_phone-icon' => array(
                    'name' => 'Иконка телефон',
                    'type' => 'typo',
                ),
                '.cetacs-block_footer_phone-item' => array(
                    'name' => 'Телефон',
                    'type' => 'typo'
                ),
                '.cetacs-block_footer_phone-link' => array(
                    'name' => 'Ссылка контакт',
                    'type' => 'typo',
                    'skipContent' => true
                ),
                '.cetacs-block_footer_address-icon' => array(
                    'name' => 'Иконка телефон',
                    'type' => 'typo',
                ),
                '.cetacs-block_footer_address-item' => array(
                    'name' => 'Телефон',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);

