<?
$data = array(
    'code' => '05Text_block12',
    'fields' => array(
        'NAME' => 'Текст с заголовком',
        'DESCRIPTION' => '05Text_block12',
        'SECTIONS' => 'Юрист по недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block12/preview.jpg',
        'CONTENT' => '
            <section id="service" class="cetacs-block_text-block_bg mortgage-section jumbotron">
                <div class="container ">
                    <h2 class="cetacs-block_text-block_block-title mb-none ">УСЛУГИ ЮРИСТА</h2>
            
                    <div class="">
                        <h3 class="display-4">Необходимо решить серьезный вопрос по недвижимости в ограниченный срок?</h3>
                        <p class="lead">Берегите свое время и силы!</p>
                        <p class="lead">Воспользуйтесь услугами квалифицированного юриста в Москве!</p>
                        <hr class="my-4">
                        <p class="cetacs-block_text-block_text">
                            Сложность задачи и срочность ее выполнения – вот главные критерии стоимости юридического
                            сопровождения покупки,
                            продажи либо иной операции с недвижимостью.</br>
                            Обратившись за консультацией в наш центр, Вы без сомнения сможете рассчитывать на отличное
                            обслуживание и разумные цены.
                        </p>
                        <p class="lead">Хотите с точностью до копейки узнать сколько будут стоить услуги юридического сопровождения?</p>
                        <p class="lead button-container">
                            <a href="#" class="btn button">Позвонить нам!</a>
                        </p>
                    </div>
                </div>
            </section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block12/style.css'
            )
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
                '.cetacs-block_text-block_text' => array(
                    'name' => 'Текст блока',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);

