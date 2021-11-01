<?
$data = array(
    'code' => '05Text_block13',
    'fields' => array(
        'NAME' => 'Текстовый блок на сером фоне',
        'DESCRIPTION' => '05Text_block13',
        'SECTIONS' => 'Юрист по недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block13/preview.jpg',
        'CONTENT' => '
            <section id="drawing" class="cetacs-block_text-block_bg block-text">
                <div class="container">
                    <h2 class="cetacs-block_text-block_block-title">ОФОРМЛЕНИЕ НЕДВИЖИМОСТИ В МОСКВЕ</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="cetacs-block_text-block_text">
                                Каждый месяц Москва прирастает целыми микрорайонами новостроек, увеличивается 
                                население 
                                города, и, соответственно – растет количество сделок купли-продажи квартир, 
                                домов и земельных участков. 
                            <br/><br/>
                                Зарегистрировать переход прав на недвижимое имущество в Росреестре может 
                                показаться Вам простым делом. 
                                Однако простота эта обманчива.
                            <br/><br/>
                                Как можно обезопасить сделку и свои деньги? Обязательно нужно грамотное 
                                составление договора, однозначно определяющее все существенные положения 
                                актов купли-продажи, аренды, обмена, дарения и т.п. Практически всегда 
                                необходимо проверить не только право собственности, но и отсутствие 
                                ограничений на имущество, юридически точно составить договор задатка, 
                                возможно – собрать иные недостающие документы, необходимые для регистрации. 
                                <br/><br/>
                                Поручив заниматься всем этим юристу Вы гарантированно 
                                избежите непредвиденные ситуации риска.
                            </p>
                            <i>
                                    <p class="cetacs-block_text-block_caption" style="text-align: right;"><strong>
                                        «Юрист по недвижимости»:&nbsp;<br>
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
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block13/style.css'
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

