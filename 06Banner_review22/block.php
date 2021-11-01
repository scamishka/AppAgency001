<?
$data = array(
    'code' => '06Banner_review22',
    'fields' => array(
        'NAME' => 'Карусель отзывы',
        'DESCRIPTION' => '06Banner_review22',
        'SECTIONS' => 'Персональный риелтор',
        'PREVIEW' => 'https://abcdef.tmweb.ru/AppAgency001/06Banner_review22/preview.jpg',
        'CONTENT' => '
            <section id="review22" class="partners jumbotron">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="cetacs-block_banner-review_title heading-dark text-center">Отзывы клиентов</h2>
                            <div class="row owl-carousel owl-theme">
                                <div class="cetacs-block_banner-review_card card text-center">
                                      <div class="card-body">
                                            <p class="cetacs-block_banner-review_review-text card-text lead">Обратились к Николаю  за консультациями по новостройкам. 
                                            Хотели взять в ипотеку, т.к. не могли продать свою дачу в Подмосковье из-за 
                                            коряво оформленных документов. Результат – за полтора месяца переоформили 
                                            документы на землю, продали дачу и взяли квартиру от подрядчика по цене гораздо 
                                            ниже, чем у застройщика. При этом взятая ипотека составила всего половину от того,
                                            что предполагали на старте общения.</p>
                                            <p class="cetacs-block_banner-review_review-subtext card-text lead">Николай, вы просто профи в своем деле. Спасибо от всей семьи.</p>
                                            <p class="card-text d-flex justify-content-center">
                                                <img class="cetacs-block_banner-review_img img-responsive rounded-circle"
                                                  src="https://abcdef.tmweb.ru/AppAgency001/06Banner_review22/cds.jpg"
                                                  alt="">
                                            </p>
                                            
                                      </div>
                                      <div class="cetacs-block_banner-review_review-author card-footer text-muted">
                                        Ирина и Георгий (Москва)
                                      </div>
                                </div>
                                <div class="cetacs-block_banner-review_card card text-center">
                                      <div class="card-body">
                                            <p class="cetacs-block_banner-review_review-text card-text lead">
                                            Очень быстро продали мою квартиру благодаря массовой рекламе на ведущих 
                                            площадках в интернете и замечательному дизайну продающего лэндинга. Николай лично 
                                            контролировал процесс создания, ездил на показы и честное слово – я не видел 
                                            более мастерски выстроенных диалогов с покупателями. Хотелось просто остановить 
                                            продажу со словами: Такая квартира нужна самому !!!
                                            </p>
                                            <p class="cetacs-block_banner-review_review-subtext card-text lead">
                                                Все завершилось буквально за несколько недель и я очень рад, 
                                                что обратился именно к этому риэлтору. Искренне рекомендую!
                                             </p>
                                             <p class="card-text d-flex justify-content-center">
                                            <img class="cetacs-block_banner-review_img img-responsive rounded-circle"
                                              src="https://abcdef.tmweb.ru/AppAgency001/06Banner_review22/etalon.jpg"
                                              alt="">
                                              </p>
                                      </div>
                                      <div class="cetacs-block_banner-review_review-author card-footer text-muted">
                                        Степан  (Химки)
                                      </div>
                                </div>
                                <div class="cetacs-block_banner-review_card card text-center">
                                      <div class="card-body">
                                            <p class="cetacs-block_banner-review_review-text card-text lead">
                                            Искренне благодарна Николаю за внимание к деталям и отлично выполненную работу.  
                                            Я покупала студию для детей и одновременно продавала свою квартиру, которую получила 
                                            в наследство на другом конце России – в Красноярске.  Участие и доверие в сообществе 
                                            профессионалов – это не просто слова. Мне не пришлось даже летать в Красноярск. Все 
                                            было сделано благодаря партнерским отношениям Николая с сибирскими агентствами. Для 
                                            меня это просто фантастика. 
                                            </p>
                                            <p class="cetacs-block_banner-review_review-subtext card-text lead">
                                                Всех благ вам и удачи!
                                                </p>
                                                <p class="card-text d-flex justify-content-center">
                                            <img class="cetacs-block_banner-review_img img-responsive rounded-circle"
                                              src="https://abcdef.tmweb.ru/AppAgency001/06Banner_review22/lcp.jpg"
                                              alt="">
                                              </p>
                                      </div>
                                      <div class="cetacs-block_banner-review_review-author card-footer text-muted">
                                        Елена Васильева (Сыктывкар)
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
                'https://abcdef.tmweb.ru/AppAgency001/06Banner_review22/style.css',
                'https://abcdef.tmweb.ru/AppAgency001/06Banner_review22/owl.carousel.css'
            ),
            'js' => array (
                'https://abcdef.tmweb.ru/AppAgency001/06Banner_review22/owl.carousel.js',
                'https://abcdef.tmweb.ru/AppAgency001/06Banner_review22/script.js'
            ),
        ),
        'cards' => [
            '.cetacs-block_banner-review_card' => [
                'name' => 'Отзыв',
                'label' => array(
                    '.cetacs-block_banner-review_img',
                    '.cetacs-block_banner-review_review-author',
                ),
            ],
        ],
        'nodes' => array(
            '.cetacs-block_banner-review_title' => array(
                'name' => 'Заголовок блок',
                'type' => 'text',
            ),
            '.cetacs-block_banner-review_img' => array(
                'name' => 'Фото автора',
                'type' => 'img',
                // изображение будет приведено к данному размеру
                'dimensions' => array('maxWidth' => 150, 'maxHeight' => 150),
                'group' => 'review',
            ),
            '.cetacs-block_banner-review_review-text' => array(
                'name' => 'Текст отзыва',
                'type' => 'text',
                'group' => 'review'
            ),
            '.cetacs-block_banner-review_review-subtext' => array(
                'name' => 'Второстепенный текст отзыва',
                'type' => 'text',
                'group' => 'review'
            ),
            '.cetacs-block_banner-review_review-author' => array(
                'name' => 'Автор отзыва',
                'type' => 'text',
                'group' => 'review'
            ),
        ),
        'style' => array(
            '.cetacs-block_banner-review_title' => array(
                'name' => 'Заголовок блок',
                'type' => 'typo',
            ),
            '.cetacs-block_banner-review_review-text' => array(
                'name' => 'Текст отзыва',
                'type' => 'typo',
            ),
            '.cetacs-block_banner-review_review-subtext' => array(
                'name' => 'Второстепенный текст отзыва',
                'type' => 'typo',
            ),
            '.cetacs-block_banner-review_review-author' => array(
                'name' => 'Автор отзыва',
                'type' => 'typo',
            ),

        ),
    ),

);
echo json_encode($data);
