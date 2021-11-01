<?
$data = array(
    'code' => '07News_detail01',
    'fields' => array(
        'NAME' => 'Новость детально',
        'DESCRIPTION' => '07News_detail01',
        'SECTIONS' => 'Типовой сайт агенства недвижимости',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/07News_detail01/preview.jpg',
        'CONTENT' => '
            <div class="container content">
                <div class="row">
                    <div class="content-center detail-news">
                        <div class="row">
                            <div class="col-sm-10">
                                <h1 class="cetacs-block_new-detail_block-title detail-news__h1">Стоимость однокомнатных квартир в разных городах России. Сравнивайте и
                                    выбирайте.</h1>
                            </div>
                            <div class="detail-news__inform col-sm-2">
                                <div class="detail-news__date">
                                    <div class="cetacs-block_new-detail_data-new-day detail-news__day">27</div>
                                    <div class="cetacs-block_new-detail_data-new-month detail-news__month">Августа</div>
                                </div>
                            </div>
                        </div>
                        <img class="cetacs-block_new-detail_image detail-news-img"
                             src="https://abcdef.tmweb.ru/AppAgency001/images/new_image.jpg"
                             alt="Стоимость однокомнатных квартир в разных городах России. Сравнивайте и выбирайте."
                             title="Стоимость однокомнатных квартир в разных городах России. Сравнивайте и выбирайте."
                        >
                        <p class="cetacs-block_new-detail_text-preview">
                            Сравнили средние цены на однокомнатные квартиры в разных городах России. Решили в этот раз поискать
                            однушку в центре. Сразу оговоримся, выбирали типовое жилье площадью не меньше 30 кв.м. с первичным
                            ремонтом. Посмотрите, что из этого получилось.
                        </p>     
                        <div class="cetacs-block_new-detail_text-detail">
                            <h2>
                                Москва </h2>
                            <p>
                                <b>Средняя цена: от 3 800 000 до 20 000 000 рублей.</b>
                            </p>
                            <p>
                                В Москве достаточно много предложений о продаже «однушек» в центре. При этом найти квартиру меньше, чем
                                на 35 квадратов, крайне проблематично. Либо это совсем «халупы», либо очень уж миниатюрные квартирки,
                                где даже перепланировка не поможет. Вторичного жилья практически нет, в основном квартиры в
                                новостройках.
                            </p>                      
                            <p>
                                Большое количество новостроек и достаточно комфортный климат в итоге дают большие возможности и
                                перспективы для покупателей на рынке недвижимости. Краснодар активно развивается и заселяется – в
                                основном выходцами из-за Урала – сибиряками, северянами и жителями Дальнего Востока.
                            </p>
                        </div>             
                        
                        <div class="detail-news__source">
                        <a class="cetacs-block_new-detail_source-link fc-prm"
                            href="https://dmrealty.ru/rubrics/kvartira/odnushka-v-tsentre-skolko-stoyat-odnokomnatnye-kvartiry-v-raznykh-gorodakh-rossii/">
                            ссылка на источник</a>
                        </div>
                        <div class="go-to-all">
                            <a class="bgc-prm" href="/">
                                <i class="fa fa-undo" aria-hidden="true"></i> К списку новостей
                            </a>
                        </div>
                    </div>
                </div>
            </div>       
        ',
    ),
    'manifest' => array(
        'assets' => array (
            'css' => array (
                'https://abcdef.tmweb.ru/AppAgency001/07News_detail01/style.css'
            ),
        ),
        'nodes' => array(
            '.cetacs-block_new-detail_block-title' => array(
                'name' => 'Заголовок блока',
                'type' => 'text'
            ),
            '.cetacs-block_new-detail_data-new-day' => array(
                'name' => 'Дата элемента - день',
                'type' => 'text'
            ),
            '.cetacs-block_new-detail_data-new-month' => array(
                'name' => 'Дата элемента - месяц',
                'type' => 'text'
            ),
            '.cetacs-block_new-detail_image' => array (
                'name' => 'Изображение новости',
                'type' => 'img'
            ),
            '.cetacs-block_new-detail_text-preview' => array(
                'name' => 'Текст анонса',
                'type' => 'text'
            ),
            '.cetacs-block_new-detail_text-detail' => array(
                'name' => 'Детальный текст',
                'type' => 'text'
            ),
            '.cetacs-block_new-detail_source-link' => array(
                'name' => 'Ссылка на источник',
                'type' => 'link',
            ),
        ),
        'style' => array(
            'block' => array(
                'block-default',
            ),
            'nodes' => array(
                '.cetacs-block_new-detail_block-title' => array(
                    'name' => 'Заголовок блока',
                    'type' => 'typo'
                ),
                '.cetacs-block_news-block_news-item_title-link' => array(
                    'name' => 'Заголовок ссылка элемента',
                    'type' => ['box', 'block-default']
                ),
                '.cetacs-block_new-detail_image' => array (
                    'name' => 'Изображение новости',
                    'type' => 'box'
                ),
                '.cetacs-block_new-detail_text-preview' => array(
                    'name' => 'Текст элемента',
                    'type' => 'typo'
                ),
                '.cetacs-block_new-detail_text-detail' => array(
                    'name' => 'Детальный текст',
                    'type' => 'typo'
                ),
            ),
        ),
    ),

);
echo json_encode($data);
