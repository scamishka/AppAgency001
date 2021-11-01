<?
$data = array(
    'code' => '05Text_block01',
    'fields' => array(
        'NAME' => 'Текст с картинкой слева',
        'DESCRIPTION' => '05Text_block01',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block01/preview.jpg',
        'CONTENT' => '
            <section class="cetacs-block_text-block_bg mortgage-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="cetacs-block_text-block_block-title mb-none">Ипотека на самых выгодных условиях
                </h2>
            </div>
            <div class="cetacs-block_text-block_block-img col-md-4">
                <span class="img-thumbnail">
                    <img alt="" class="cetacs-block_text-block_img img-responsive"
                         src="http://xn------6cdbajecgoidqqnbadc0fmdkbud5dhmckfbn.xn--p1ai/local/components/mainpage/ipoteka/templates/.default/img/ipoteca.jpg">
                </span>
            </div>
            <div class="cetacs-block_text-block_block-list col-md-8">
                <ul class="mortgage-section__list">
                    <li class="cetacs-block_text-block_list-item">Вы получаете ответы на все вопросы по ипотеке: ставки разных банков, подбор
                        подходящих программ, шансы на одобрение, акции банков и т.д.
                    </li>
                    <li class="cetacs-block_text-block_list-item">Помощь в формировании пакета документов на заемщика и на объект.</li>
                    <li class="cetacs-block_text-block_list-item">Заполнение анкет и подача заявки в выбранный банк, сопровождение до одобрения
                        заявки.
                    </li>
                    <li class="cetacs-block_text-block_list-item">Помощь в одобрении выбранного объекта</li>
                    <li class="cetacs-block_text-block_list-item">В случае отказа одним банком – подача заявок в другие банки.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block01/style.css'
            ),
            'js' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block01/script.js'
            ),
        ),
        'cards' => array(
            '.cetacs-block_text-block_block-list' => array(
                'name' => 'Список',
                'label' => array(
                    '.cetacs-block_text-block_block-list'
                ),
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
            '.cetacs-block_text-block_list-item' => array(
                'name' => 'Список блока',
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
                '.cetacs-block_text-block_list-item' => array(
                    'name' => 'Список блока',
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

