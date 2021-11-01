<?
$data = array(
    'code' => '05Text_block35',
    'fields' => array(
        'NAME' => 'Текст с заголовком на сером фоне',
        'DESCRIPTION' => '05Text_block35',
        'SECTIONS' => 'Ипотечный брокер',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/05Text_block35/preview.jpg',
        'CONTENT' => '
            <section id="text-block-ipoteka35" class="mortgage-section jumbotron">
                <div class="container">
                        <div class="col-12">
                        <h2 class="cetacs-block_text-block_block-title mb-none">Как мы снижаем ипотечную ставку на 2% от открытых предложений банков?
                            </h2>
                            <p class="cetacs-block_text-block_text lead">
                               Наша компания является официальным партнером более 30 банков Краснодарского края, выдающих 
                               ипотечные кредиты. Благодаря партнерским отношениям, надежной репутации, выполнению части 
                               работы менеджеров банков и большому потоку клиентских заявок от нас мы имеем специальные 
                               выгодные условия, которые не доступны в открытых для всех предложениях банков. Разница в 
                               процентной ставке может достигать 2%. Поэтому, оформляя ипотеку с нашей помощью, вы сможете 
                               существенно сэкономить на процентах.
                               <span class="font-weight-bold"></span>
                            </p>
                            <p class="cetacs-block_text-block_text-footer font-weight-bold">
                                
                            </p>
                        </div>
                </div>
            </section>
         ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/05Text_block35/style.css'
            ),
        ),
        'nodes' => array(
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
            '.cetacs-block_text-block_text-footer' => array(
                'name' => 'Текст в подвале блока',
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
                '.cetacs-block_text-block_text-footer' => array(
                    'name' => 'Текст в подвале блока',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);

