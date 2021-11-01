<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Приложение с вводом Имени и логотипа сайта</title>
        <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"-->
        <!--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"-->
        <!--          crossorigin="anonymous">-->
        <link rel="stylesheet" href="https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/css/bootstrap.css">
<!--        <link rel="stylesheet" href="https://abcdef.tmweb.ru/AppAgency001/style.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/js/bootstrap.js"></script>
        <script src="//api.bitrix24.com/api/v1/"></script>
        <!--    <script src="script.js"></script>-->
<!--        <script type="text/javascript" src="https://abcdef.tmweb.ru/AppAgency001/addSiteWithName100.js"></script>-->
        <!--    <script src="https://abcdef.tmweb.ru/AppAgency001/deleteRegBlock.js"></script>-->
        <style type="text/css">

            body {
                background-color: #e8e5e5;
            }
            header {
                display: flex;
                justify-content: center;
                background-color: #d6e5f385;

            }
            .left-sidebar {
                height: 600px;
                background-color: #1b1e21;
                padding: 30px 10px;
            }
            section#logo {
                display: flex;
                justify-content: center;
            }
            section#logo img {
                height: 50px;
            }
            section#logo a {
                text-decoration: none;
            }
            section #Application_102 #step1,
            section #Application_102 #step2,
            section #Application_102 #step3 {
                display: none;
            }
            section #Application_102 .next-step {
                display: block;
            }
            .container {
                /*border: solid 1px grey;*/
                /*padding: 30px;*/
                /*margin-top: 30px;*/
            }
            #listSitesApp {
                padding: 20px;
                display: flex;
                justify-content: space-between;
                width: 100%;
            }
            .d-none {
                display: none;
            }
            .input-group-text {
                width: 200px;
            }

        </style>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-3 left-sidebar">
                    <section id="logo">
                        <a href="https://cetacs.com" alt="ЦЭТиКС" title="Разработка ЦЭТиКС">
                            <img src="https://abcdef.tmweb.ru/AppAgency001/images/logo_bw.png" alt="">
                        </a>
                    </section>
                    <section  class="text-white">
                        <blockquote class="blockquote">
                            <p class="mb-0 text-center">Для агенств недвижимости</p>
                        </blockquote>
                    </section>
                    <section class="text-center">
                        <button id="siteAgencyRielt" type="button" class="btn btn-outline-secondary">Создать сайт</button>
                    </section>
                    <section id="listSitesApp" class="text-white">
                        <!--список сайтов-->
                    </section>
                    <section class="text-center">
                        <button id="pageNewCreate" type="button" class="btn btn-outline-secondary">Создать новость</button>
                    </section>
                </div>

                <div class="col">
                    <header>
                        <h2></h2>
                    </header>
                    <section id="infoApp">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content"
                                         id="v-pills-tabContent">
                                        <div id="header-info" class="header-info">

                                        </div>
                                            <!--список страниц сайта-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

        <section id="Application_102">
            <div class="container">
                <div id="step1" class="row d-none">
                    <div class="col-12">
                        <h4>Укажите название сайта</h4>
                    </div>
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="nameSite">Название сайта</span>
                            </div>
                            <input id="siteTitle" type="text" class="form-control" aria-label="Название сайта"
                                   aria-describedby="nameSite" required>
                        </div>
                    </div>

                    <div id="one" class="col-4">
                        <button id="siteNameNext" type="button" class="btn btn-outline-primary">Далее</button>
                        <button id="siteNameCancel" type="button" class="btn btn-outline-secondary">Отмена</button>

                    </div>
                    <div class="col-8">
                        <div id="typeSites" class="input-group mb-3">
                            <select id="typeSite"
                                    class="custom-select">
                                <option selected>Выбрать тип сайта...</option>
                                <option value="agency">Сайт Агенство недвижимости</option>
                                <option value="jurist">Сайт Юрист по недвижимости</option>
                                <option value="rieltor">Сайт Риелтор</option>
                                <option value="ipoteka">Сайт Ипотечный брокер</option>
                            </select>
                        </div>
                    </div>
                </div>
<!--                <div id="two" class="col-4">-->
<!--                    <button id="siteNameNext" type="button" class="btn btn-outline-primary">Далее</button>-->
<!--                    <button id="siteNameCancel" type="button" class="btn btn-outline-secondary">Отмена</button>-->
<!--                </div>-->
                <div id="step2" class="row">
                    <div class="col-8">
                        <button id="siteAdd" type="button" class="btn btn-outline-primary">Создать сайт</button>
                    </div>
                </div>
                <div id="loader" class="row">
                    <div class="col-8">
                        <p id="loaderText" class="text-warning">

                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="InfoCreatSite">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Создан сайт агенства недвижимости</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p class="text-primary">Название сайта: </p>
                    </div>
                    <div class="col-4">
                        <p id="nameCreateSite" class="text-secondary"></p>
                    </div>
                    <div class="col-4">
                        <p id="idSite" class="text-secondary"></p>
                    </div>
                    <div class="col-4">
                        <p class="text-primary">Главная страница: </p>
                    </div>
                    <div class="col-4">
                        <p id="idPage" class="text-secondary"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p class="text-primary">Превью сайта:</p>
                    </div>
                    <div class="col-4">
                        <img id="previewSite" class="rounded w-100" src="" alt="Rounded image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p class="text-primary">Блоки сайта:</p>
                    </div>
                    <div class="col-8">
                        <ul id="ListBlocksSite" class="list-group list-group-horizontal d-flex flex-wrap">

                        </ul>

                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p class="text-primary">Перейти на сайт</p>
                    </div>
                    <div class="col-8">
                         <a id="linkPage" class="text-secondary" href="" target="_blank">

                         </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <button id="siteAddAgain" type="button" class="btn btn-outline-primary">Создать еще сайт</button>
                    </div>
                </div>
<!--                <div class="row">-->
<!--                    <div class="col-12">-->
<!--                        <a id="create-new"-->
<!--                           href="CreateNew.php"-->
<!--                           type="button"-->
<!--                           class="btn btn-outline-primary">Создать новость</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </section> <!-- Информация о сайте -->

        <section id="createPageNew" class="d-none">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h4>Создать новость на готовый сайт</h4>
                    </div>
                    <div class="col-4">
                        <button id="buttonStartCreatePageNew" type="button" class="btn btn-outline-primary">Начать</button>
                        <button id="buttonPageNewCancel" type="button" class="btn btn-outline-secondary">Отмена</button>

                    </div>
                </div>
            </div>
        </section> <!-- кнопка создать новость на сайт -->

        <section id="sectionCreatePageNew" class="d-none">
            <div class="container">
                <div id="step0" class="row">
                    <div class="col-12">
                        <h4>Выбор сайта</h4>
                    </div>
                    <div class="col-8">
                        <div id="listSites" class="input-group mb-3">
                            <select id="choiceSite"
                                    class="custom-select" id="inputGroupSelect01">
                                <option selected>Выбрать сайт...</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="step1" class="row">
                    <div class="col-12">
                        <h4>Название страницы</h4>
                    </div>
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Название страницы</span>
                            </div>
                            <input id="titleNew"
                                   type="text"
                                   class="form-control"
                                   aria-label="Заголовок новости"
                                   aria-describedby="titleNew">
                        </div>
                    </div>
                </div>
                <div id="step1a" class="row">
                    <div class="col-12">
                        <h4>Заголовок новости</h4>
                    </div>
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Заголовок новости</span>
                            </div>
                            <input id="blockTitle"
                                   type="text"
                                   class="form-control"
                                   aria-label="Заголовок новости"
                                   aria-describedby="blockTitle">
                        </div>
                    </div>
                </div>
                <div id="step2" class="row">
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Анонс новости</span>
                            </div>
                            <textarea id="previewNew"
                                      class="form-control"
                                      type="text"
                                      cols="100"
                                      rows="5"
                                      aria-label="Анонс новости"
                                      aria-describedby="previewNew">

                    </textarea>
                        </div>
                    </div>
                </div>

                <div id="step3" class="row">
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Полный текст новости</span>
                            </div>
                            <textarea id="detailNew"
                                      class="form-control"
                                      type="text"
                                      cols="200"
                                      rows="10"
                                      aria-label="Полный текст новости"
                                      aria-describedby="detailNew">
                    </textarea>
                        </div>
                    </div>
                </div>

                <div id="step4" class="row">
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Дата новости</span>
                            </div>
                            <input type="text"
                                   id="dayNew"
                                   class="form-control"
                                   name="dayNew"
                                   placeholder="день"

                                   min="01" max="31"
                                   aria-describedby="dayNew">
                            <input type="text"
                                   id="monthNew"
                                   class="form-control"
                                   name="monthNew"
                                   placeholder="месяц"
                                   min="01" max="12"
                                   aria-describedby="monthNew">
                            <input type="text"
                                   id="yearNew"
                                   class="form-control"
                                   name="yearNew"
                                   placeholder="год"
                                   min="2020" max="2020"
                                   aria-describedby="yearNew">
                        </div>
                    </div>
                </div>

                <div id="step5" class="row">
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Изображение новости</span>
                            </div>
                            <input
                                    id="imageNew"
                                    type="file"
                                    class="form-control-file"
                                    aria-describedby="imageNew">
                        </div>
                    </div>
                </div>
                <div id="step5" class="row">
                    <div class="col-12">
                        <h4>Ссылка на источник новости</h4>
                    </div>
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Источник новости</span>
                            </div>
                            <input id="linkSourceNew"
                                   type="text"
                                   class="form-control"
                                   aria-label="источник новости"
                                   aria-describedby="linkSourceNew">
                        </div>
                    </div>
                </div>
                <div id="step6" class="row">
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <button id="createNew" type="button" class="btn btn-outline-primary">Создать</button>
                        </div>
                    </div>
                </div>

                <div id="loaderNew" class="row">
                    <div class="col-8">
                        <p id="loaderNewText" class="text-warning">
                        </p>
                    </div>
                </div>
            </div>
        </section> <!-- создание новости на сайт -->

        <section id="InfoCreatPageNew">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Создана страница новости</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p class="text-primary">Название страницы новости: </p>
                    </div>
                    <div class="col-4">
                        <p id="nameCreatePage" class="text-secondary"></p>
                    </div>
                    <div class="col-4">
                        <p id="idPage" class="text-secondary"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p class="text-primary">Превью страницы:</p>
                    </div>
                    <div class="col-4">
                        <img id="previewPage" class="rounded w-100" src="" alt="Rounded image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p class="text-primary">Перейти на страницу</p>
                    </div>
                    <div class="col-8">
                        <a id="linkPageNew" class="text-secondary" href="">

                        </a>
                    </div>
                </div>
            </div>
        </section> <!-- Информация о странице новости -->



                </div>
            </div>
        </div>

        <script>
            $(document).on('ready', function () {
                $('#step2').css('display', 'none');
                $('#InfoCreatSite').css('display', 'none');
                //$('#sectionCreatePageNew').css('display', 'none');
                $('#InfoCreatPageNew').css('display', 'none');

            });
            $('#siteAgencyRielt').on ('click', function () {
                $('#step1').removeClass('d-none');
            });
            $('#siteNameNext').on ('click', function () {
                if ($('#siteTitle').val() != ''){
                    $('#step2').css('display', 'block');
                    $('#siteNameNext').css('display', 'none');
                } else {
                    alert('Введите название сайта');
                }
            });
            $('#siteNameCancel').on('click', function(){
                $('#step1').addClass('d-none');
            });
            $('#siteAddAgain').on ('click', function () {
                location.reload();
            });
            $('#pageNewCreate').on('click', function(){
                $('#createPageNew').removeClass('d-none');
            });
            $('#buttonStartCreatePageNew').on('click', function() {
                $('#sectionCreatePageNew').removeClass('d-none');
            });
            $('#buttonPageNewCancel').on('click', function(){
                $('#createPageNew').addClass('d-none');
                $('#sectionCreatePageNew').addClass('d-none');

            });
        </script>
        <script>
            $(document).on('ready', async function() {
                let sitesList = await getListSite();
                let myListSites = $('<div/>', {
                    "class": "nav flex-column nav-pills",
                    "id": "v-pills-tab",
                    "role": "tablist",
                    "aria-orientation": "vertical"
                });
                $.each(sitesList, async function (i, site) {
                    $('<a/>',{
                        "class": "nav-link text-light",
                        "id": "v-pills-"+i+"-tab",
                        "data-toggle": "pill",
                        "href": "#v-pills-"+i,
                        "role": "tab",
                        "aria-controls": "v-pills-"+i,
                        "aria-selected": "true",
                        text:site.TITLE}).appendTo(myListSites);
                    $('#listSitesApp').append(myListSites);
                    let pagesList = await getListPagesToId(site.ID);
                    let containerTable = $('<div/>', {
                        "class":"tab-pane fade",
                        "id":"v-pills-"+i,
                        "role": "tabpanel",
                        "aria-labelledby": "v-pills-"+i+"-tab"
                    });
                    let siteTitle = $('<h4/>', {text:site.TITLE})
                        .append (
                            $("<button/>",{
                                "id":site.ID,
                                "class":"btn btn-outline-primary",
                                text:"Удалить",
                                "onClick": "deleteSite("+ site.ID+ ")"
                            })).wrapInner('<div class="d-flex justify-content-between pl-2 pr-2"/>');


                    let pagesTableFull = $('<table/>', {"class": "table table-striped"});
                    let pagesTableHead = $('<thead class="thead-dark">' +
                        '<tr>' +
                        '<th scope=\"col\">ID</th>' +
                        "<th scope=\"col\">Название страницы</th>\n" +
                        "<th scope=\"col\">CODE</th>\n" +
                        "<th scope=\"col\" class='text-right'>Действия</th>\n" +
                        // "<th scope=\"col\"></th>\n" +
                        // "<th scope=\"col\"></th>\n" +
                        "</tr>\n" +
                        "</thead>"
                    );
                    let pagesTableBody = $('<tbody/>');
                    $.each(pagesList, function (j, page) {
                        let pagesTableTr = $('<tr/>');
                        $('<th/>',{
                            text:page.ID,
                            "scope": "row"}).appendTo(pagesTableTr);
                        $('<td/>',{
                            text:page.TITLE}).appendTo(pagesTableTr);
                        $('<td/>',{
                            text:page.CODE}).appendTo(pagesTableTr);
                        // $('<td/>').wrapInner(
                        //     $("<button/>",{
                        //         "class":"btn btn-outline-primary",
                        //         text:"Опубликовать"
                        //     }))
                        //     .appendTo(pagesTableTr);
                        // $('<td/>').wrapInner(
                        //     $("<button/>",{
                        //         "class":"btn btn-outline-primary",
                        //         text:"Настроить"
                        //     }))
                        //     .appendTo(pagesTableTr);
                        $('<td class="text-right"/>').wrapInner(
                            $("<button/>",{
                                "class":"btn btn-outline-primary",
                                "onClick":"deletePage("+page.ID+")",
                                text:"Удалить"
                            }))
                            .appendTo(pagesTableTr);
                        $(pagesTableTr).appendTo(pagesTableBody);
                    });
                    let pagesListTable = $(containerTable).append(pagesTableHead).append(pagesTableBody).wrapInner(pagesTableFull).prepend(siteTitle);
                     // = $(pagesTableFull).wrap(containerTable);

                    $('#v-pills-tabContent').append(pagesListTable);
                });
            })
        </script>
        <script>
            let codeBlocksOnHomePage = []; // массив кодов добавленных блоков типа repo_ID
            let repoBlocks = []; // массив данных кастомных блоков из репозитория 0:[NAME:name, CODE:repo_ID, DESCRIPTION:code]
            let listCustomBlocks = [
                '01Header_left_logo_contacts01',
                '01Header_left_logo_contacts02',
                '01Header_left_logo_contacts11',
                '01Header_left_logo_contacts21',
                '01Header_left_logo_contacts31',
                '02Menu_right01',
                '02Menu_right11',
                '02Menu_right21',
                '02Menu_right31',
                '03Banner_form_right01',
                '03Banner_form_right11',
                '03Banner_image_right21',
                '04Cards_cols01',
                '05Text_block01',
                '05Text_block11',
                '05Text_block12',
                '05Text_block14',
                '05Text_block13',
                '05Text_block15',
                '05Text_block21',
                '05Text_block22',
                '05Text_block23',
                '05Text_block24',
                '05Text_block25',
                '05Text_block26',
                '05Text_block27',
                '05Text_block31',
                '05Text_block32',
                '05Text_block33',
                '05Text_block34',
                '05Text_block35',
                '05Text_block36',
                '05Text_block37',
                '04Cards_cols03',
                '04Cards_cols04',
                '03Banner_form_right02',
                '04Cards_cols02',
                '06Banner_logo01',
                '06Banner_logo21',
                '06Banner_logo31',
                '06Banner_review22',
                '07News_block_cols01',
                '07News_detail01',
                '07News_detail01',
                '07News_list_page01',
                '05Text_block02',
                '08Footer01',
                '08Footer11',
                '08Footer21',
                '08Footer31'
            ];
            let blockListCreateHomePage = [
                '01Header_left_logo_contacts01',
                '02Menu_right01',
                '03Banner_form_right01',
                '04Cards_cols01',
                '05Text_block01',
                '04Cards_cols03',
                '04Cards_cols04',
                '03Banner_form_right02',
                '04Cards_cols02',
                '06Banner_logo01',
                '07News_block_cols01',
                '05Text_block02',
                '08Footer01',
            ];
            let blocksListNewDetail = [
                '01Header_left_logo_contacts01',
                '02Menu_right01',
                '07News_detail01',
                '08Footer01'
            ];
            let blocksListNewsPage = [
                '01Header_left_logo_contacts01',
                '02Menu_right01',
                '07News_list_page01',
                '08Footer01'
            ];
            let blocksListLandingJuristHomePage = [
                '01Header_left_logo_contacts11',
                '02Menu_right11',
                '03Banner_form_right11',
                '05Text_block11',
                '05Text_block12',
                '05Text_block14',
                '05Text_block13',
                // '05Text_block15',
                '08Footer11'
            ];
            let blocksListLandingRieltorHomePage = [
                // '01Header_left_logo_contacts21',
                '02Menu_right21',
                '03Banner_image_right21',
                '05Text_block21',
                '05Text_block22',
                '05Text_block23',
                '05Text_block24',
                '05Text_block25',
                '05Text_block26',
                '05Text_block27',
                '06Banner_review22',
                '08Footer21'
            ];
            let blocksListLandingIpotekaHomePage = [
                '01Header_left_logo_contacts31',
                '02Menu_right31',
                '06Banner_logo31',
                '05Text_block31',
                '05Text_block32',
                '05Text_block33',
                '05Text_block34',
                '05Text_block35',
                '05Text_block36',
                '05Text_block37',
                '08Footer31'
            ];

            // загрузка страницы с регистрацией блоков в репозитории
            $(document).on('ready', async function() {
                await startRegisterBlocks();
                // console.log('codeBlock - ' + codeBlocks);
                let listSites = await getListSite();
                for (let site of listSites) {

                    $('#listSites select').append('<option id="' + site.ID + '" value="' + site.CODE + '">' + site.TITLE + '</option>');
                }

                //создание сайта
                $('#siteAdd').on('click', async function () {
                    $('#siteAdd').css('display', 'none');
                    $('#loader').text('Идёт создание сайта...');
                    let siteTitle = $("#siteTitle").val();
                    let typeSite = $("#typeSite").val();
                    let previewSite;
                    let codeSite;
                    switch (typeSite) {
                        case 'agency':
                            console.log('сайт агенства - ' + typeSite);
                            previewSite = 'https://abcdef.tmweb.ru/AppAgency001/images/preview_site.jpg';
                            codeSite = 'agencySite';
                            break;
                        case 'jurist':
                            console.log('сайт юрист - ' + typeSite);
                            previewSite = 'https://abcdef.tmweb.ru/AppAgency001/images/preview_site_jurist.jpg';
                            codeSite = 'juristSite';

                            break;
                        case 'rieltor':
                            console.log('сайт риелтор - ' + typeSite);
                            previewSite = 'https://abcdef.tmweb.ru/AppAgency001/images/preview_site_rieltor.jpg';
                            codeSite = 'rieltorSite';

                            break;
                        case 'ipoteka':
                            console.log('сайт ипотека - ' + typeSite);
                            previewSite = 'https://abcdef.tmweb.ru/AppAgency001/images/preview_site_ipoteka.jpg';
                            codeSite = 'ipotekaSite';

                            break;
                        default:
                            alert('что-то пошло не так ' + typeSite);
                    }
                    let siteId = await callMethod(
                        'landing.site.add',
                        {
                            fields: {
                                TITLE: siteTitle,
                                CODE: codeSite,
                                PREVIEW_PICTURE: previewSite,
                            }
                        }).catch(e => console.error(e));
                    console.log('Сайт создан: ID - ' + siteId);
                    console.log('Название сайта - ' + siteTitle);
                    console.log('Тип сайта - ' + typeSite);
                    //await getRegisterBlocks();
                    let homePageId = await addHomePage(siteId); // добавляем на сайт главную страницу

                    await repoBlocks.reverse(); // упорядочивание блоков в репозитория
                    let codeBlocksOnHomePage;
                    switch (typeSite) {
                        case 'agency':
                            console.log('сайт агенства - ' + typeSite);
                            codeBlocksOnHomePage = await addListBlocksHomePage(blockListCreateHomePage, homePageId); // добавление блоков на главную страницу из списка блоков
                            break;
                        case 'jurist':
                            console.log('сайт юрист - ' + typeSite);
                            codeBlocksOnHomePage = await addListBlocksHomePage(blocksListLandingJuristHomePage, homePageId); // добавление блоков на главную страницу из списка блоков
                            break;
                        case 'rieltor':
                            console.log('сайт риелтор - ' + typeSite);
                            codeBlocksOnHomePage = await addListBlocksHomePage(blocksListLandingRieltorHomePage, homePageId); // добавление блоков на главную страницу из списка блоков
                            break;
                        case 'ipoteka':
                            console.log('сайт ипотека - ' + typeSite);
                            codeBlocksOnHomePage = await addListBlocksHomePage(blocksListLandingIpotekaHomePage, homePageId); // добавление блоков на главную страницу из списка блоков
                            break;
                        default:
                            alert('что-то пошло не так ' + typeSite);
                    }
                    // let codeBlocksOnHomePage = await addListBlocksHomePage(blockListCreateHomePage, homePageId); // добавление блоков на главную страницу из списка блоков

                    let linkHomePage = await getLinkPage(homePageId); //получение ссылки на опубликованную страницу

                    // создание страницы списка новостей
                    if (typeSite === 'agency') {
                        let newsPageTitle = 'Страница списка новостей';
                        let newsPageId = await addPage(siteId, newsPageTitle); // добавляем страницу списка новостей
                        let codeBlocksOnNewsPage = await addListBlocks (blocksListNewsPage, newsPageId); // добавляем блоки на страницу списка новостей
                        let linkNewsPage = await getLinkPage(newsPageId);    // получаем ссылку на страницу новостей
                        console.log('linkNewsPage - ' + linkNewsPage);
                        let logoBlock = '01Header_left_logo_contacts01';         // code блока шапки сайта
                        let idBlockLogo = await getIdBlockFromBlockOfRepository(codeBlocksOnNewsPage, logoBlock);    // получаем id блока шапки с логотипом
                        let contentLogo = {                                 // selector для вставки ссылки на Главную
                            '.header_block-logo-link': {href: linkHomePage, target: '_blank'}
                        };
                        console.log('newsPageId - ' + newsPageId + ' : ' +
                            'idBlockLogo - ' + idBlockLogo + ' : ' +
                            'contentLogo - ' + contentLogo + ' : ' +
                            'linkHomePage - ' + linkHomePage);
                        await updateContentBlock(newsPageId, idBlockLogo, contentLogo);     // обновляем ссылку на главную в блоке шапки с логотипом
                    }

                    // обновление ссылки на страницу списка новостей в меню на главной странице
                    if (typeSite === 'agency') {
                        let codeBlockMenu = '02Menu_right01';
                        let idBlockMenu = await getIdBlockFromBlockOfRepository(codeBlocksOnHomePage, codeBlockMenu);
                        let contentMenuItem = {
                            '.cetacs-block_menu_item_link@3': {href: linkNewsPage}
                        };
                        console.log('homePageId - ' + homePageId + ' : ' +
                            'idBlockMenu - ' + idBlockMenu + ' : ' +
                            'contentMenuItem - ' + contentMenuItem);
                        await updateContentBlock(homePageId, idBlockMenu, contentMenuItem);     // обновляем ссылку на Новости в блоке меню

                        // обновление ссылок новостей на страницу новостей
                        let codeBlockNews = '07News_block_cols01';
                        let idBlockNews = await getIdBlockFromBlockOfRepository(codeBlocksOnHomePage, codeBlockNews);
                        let linkToNewsPage = {
                            '.cetacs-block_news-block_news-item_title-link@0': {href: linkNewsPage},
                            '.cetacs-block_news-block_news-item_read-more-link@0': {href: linkNewsPage}
                        };
                        await updateContentBlock(homePageId, idBlockNews, linkToNewsPage);     // обновляем ссылку на Новости в блоке меню
                    }


                    $('#linkPage').attr('href', linkHomePage).text(siteTitle);
                    await infoAboutPage(siteId, siteTitle, previewSite); // вывод информации о сайте

                });

                //создание новости
                $('#createNew').on('click', async function () {
                    $('#sectionCreatePageNew').css('display', 'none');
                    $('#loaderNewText').text('Идёт создание страницы...');
                    let titleNew = $('#titleNew').val();                    //заголовок новости
                    let idSite = $("#choiceSite option:selected").attr('id'); // id выбранного сайта
                    let titlePage = $('#titleNew').val();                   // заголовок страницы новости
                    let pageId = await addPage(idSite, titlePage);     // добавляем страницу с детальной новостью

                    let homePage = 'homePage';                          // code Главной страницы
                    let listPages = await getListPages();               // получаем список страниц
                    let idHomePage = await getIdPage(listPages, homePage);  // получаем id Главной страницы из списка
                    let urlHomePage = await getLinkPage(idHomePage);    // получаем ссылку на Главную страницу по id


                    await repoBlocks.reverse();                  // упорядочивание списка блоков в репозитории приложения
                    let codeBlocksOnPage = await addListBlocks(blocksListNewDetail, pageId); // добавляем на страницу список блоков для страницы детальной новости
                    let contentNewDetail = await getContent();          // записываем в массив контент новости для детальной страницы
                    let codeNewsDetail = '07News_detail01';                        // code блока для заполнения новым контентом
                    console.log('urlHomePage - ' + urlHomePage);
                    let contentLogo = {                                 // selector для вставки ссылки на Главную
                        '.header_block-logo-link': urlHomePage,
                    };
                    let logoBlock = '01Header_left_logo_contacts01';         // code блока шапки сайта
                    let idBlockNewsDetail = await getIdBlockFromBlockOfRepository(codeBlocksOnPage, codeNewsDetail); // получаем id блока детальной новости

                    let upImage = await uploadImage(idBlockNewsDetail);
                    alert('image - ' + upImage.src + ' : ' + upImage.id );

                    let idBlockLogo = await getIdBlockFromBlockOfRepository(codeBlocksOnPage, logoBlock);    // получаем id блока шапки с логотипом
                    console.log('logo - ' + idBlockLogo);
                    await updateContentBlock(pageId, idBlockNewsDetail, contentNewDetail);  // обновляем контент детальной новости
                    console.log('contentLogo - ' + contentLogo);
                    await updateContentBlock(pageId, idBlockLogo, contentLogo);     // обновляем ссылку на главную в блоке шапки с логотипом
                    let urlPage = await getLinkPage(pageId);                // получаем ссылку на страницу детальной новости
                    console.log ('дошли ли до urlPage - ' + urlPage);

                    // обновление главной страницы после создания новости
                    let selectorNewsBlock = '.cetacs-block_news-block_news-item@0';     // селектор карточки новостей
                    let listBlocksOnHomePage = await getBlocksPage(idHomePage);         // получаем список блоков главной страницы
                    let newsBlock = '07News_block_cols01';                              // code блока новостей
                    let idBlockOfHomePage = await getIdBlockFromBlocksOfPage(repoBlocks, listBlocksOnHomePage, newsBlock); // получаем id блока новостей на главной
                    await cloneCardBlock(idHomePage, idBlockOfHomePage, selectorNewsBlock);     // копируем карточку новостей в блоке новостей
                    console.log('или сюда дошли - ' + idBlockOfHomePage);
                    let contentBlock = await getContentToHomePage(urlPage);             // получаем контент для добавления в блок новостей на главной
                    await updateContentBlock(idHomePage, idBlockOfHomePage, contentBlock);  // обновление контента карточки новости в блоке новостей на главной



                    //вывод информации о странице
                    //location.reload();
                    $('#loaderNewText').text(' ');
                    $('#InfoCreatPageNew').css('display', 'block');
                    $('#nameCreatePage').text(titleNew);
                    $('#previewPage').attr('src', upImage.src);
                    //$('#previewPage').attr('src', '/AppAgency001/images/new_detail_page.jpg');
                    $('#linkPageNew').attr('href', urlPage).attr('target', '_blank').text('Перейти на страницу');

                });
            });

            async function uploadImage (idBlock){
                try {
                    let result = await callMethod(
                        'landing.block.uploadfile',
                        {
                            block: idBlock,
                     //       picture: picture,
                          picture: document.getElementById('imageNew')
                        }
                    );
                    return result;
                    //alert('файл загружен - ' + result);
                    // location.reload();
                } catch(e) {
                    console.error(e);
                    alert('не удалось загрузить файл\n' + e);
                }
            }

            function getIdBlockFromBlockOfRepository (codeBlocksOnPage, nameBlock) {
                for (let block in codeBlocksOnPage) {    // перебираем блоки добавленные на страницу
                    if (codeBlocksOnPage[block].code === nameBlock) {
                        return codeBlocksOnPage[block].id;
                        //console.log ('codeBlocksOnPage[block].ID - ' +codeBlocksOnPage[block].id);
                    }
                }
            }

            function getIdBlockFromBlocksOfPage (listRepositoryBlocks, listBlocksOfPage, nameBlock) {
                for (let codeBlock in listRepositoryBlocks) {
                    if (listRepositoryBlocks[codeBlock].description === nameBlock) {
                        for (let block in listBlocksOfPage) {
                            if (listBlocksOfPage[block].code === listRepositoryBlocks[codeBlock].code) {
                                return listBlocksOfPage[block].id;
                            }
                        }
                    }
                }
            }

            function getIdPage (listPages, codePage) {
                for (let page in listPages) {
                    console.log('page - ' + listPages[page].CODE + ':' + listPages[page].ID + ':' + listPages[page].TITLE);
                    if (listPages[page].CODE === codePage) {
                        return listPages[page].ID;
                    }
                }
            }

            async function deleteSite(id) {
                try {
                    await callMethod(
                        'landing.site.delete',
                        {
                            id: id
                        }
                    );
                    alert('сайт удален');
                    location.reload();
                } catch(e)
                {
                    console.error(e);
                    alert('не удалось удалить сайт\n' + e);
                }


            }

            async function deletePage(lid) {
                try {
                    await callMethod(
                        'landing.landing.delete',
                        {
                            lid: lid
                        }
                    );
                    alert('страница удалена - ' + lid);
                    location.reload();
                } catch(e)
                {
                    console.error(e);
                    alert('не удалось удалить страницу\n' + e);
                }


            }

            async function callMethod(method, params) {
                return new Promise((resolve, reject) => {
                    BX24.callMethod(method, params, res => {
                        if (res.error()) {
                            return reject(res.error())
                        }
                        resolve(res.data());
                    });
                });
            }

            async function startRegisterBlocks() {
                let codeBlocksOnPage = [];
                await getRegisterBlocks(); // получаем список блоков в репозитории
                // console.log('repo - ' + repoBlocks.length);
                // console.log('list - ' + listCustomBlocks.length);
                if (repoBlocks.length < listCustomBlocks.length) {

                    for (let block of listCustomBlocks) {

                        let params = await getBlockParams(block);  // получаем параметры кастомного блока
                        let blockId = await registerBlock(params); // добавляем блок в репозиторий
                        codeBlocksOnPage.push('repo_' + String(blockId)); // добавляем в список код добавленного блока
                        console.log('Добавлен блок. id - ' + blockId); // выводим id блока
                    }
                } else
                    console.log ('новых блоков на добавление в репозиторий нет')
            }

            async function getListSite() {
                let listSites = await callMethod(
                    'landing.site.getList',
                    {
                        params: {
                            select: [
                                'ID', 'CODE', 'TITLE'
                            ],
                            order: {
                                ID: 'DESC'
                            }
                        }
                    });
                //console.log(listSites);
                return listSites;
            }

            async function getRegisterBlocks() {
                // repoBlocks.length = 0;
                let listBlocks = await callMethod(
                    'landing.repo.getList',
                    {
                        params: {
                            select: [
                                'ID', 'NAME', 'SECTIONS', 'DESCRIPTION'
                            ]
                        }
                    });
                // console.log('listblocks - ' + listBlocks);
                for (let block of listBlocks) {
                    // console.log(String(block.ID) + ':' + String(block.DESCRIPTION));
                    repoBlocks.push({name: String(block.NAME), code: ('repo_' + String(block.ID)), description:(String(block.DESCRIPTION))});
                    //codeBlock.push('repo_' + String(block.ID));
                }
                // console.log('repoblocks - ' + repoBlocks);
                 return repoBlocks;
            }

            function getBlockParams(code) {
                return $.ajax({
                    url: code + '/block.php',
                    type: "POST",
                    async: false,
                    dataType: 'text',
                    error: function () {
                        alert('Какая-то ошибка при AJAX запросе!');
                    },
                }).then(function (result) {
                    return JSON.parse(result);
                });
            }

            async function registerBlock(block) {
                try {
                    return await callMethod('landing.repo.register', block);
                } catch (e) {
                    console.error('не добавлен ' + e);
                }
            }

            async function setPublicPage (id) {
                return callMethod(
                    'landing.landing.publication',
                    {
                        lid: id,
                    }
                );
            }

            async function getLinkPage(id){
                await setPublicPage(id);
                return callMethod(
                    'landing.landing.getpublicurl',
                    {
                        lid: id,
                    }
                );
            }

            async function addHomePage(siteId) {
                try {
                    let pageId = await callMethod(
                        'landing.landing.add',
                        {
                            fields: {
                                TITLE: 'Главная страница сайта',
                                CODE: 'homePage',
                                SITE_ID: siteId,
                            }
                        });
                    console.log('Cоздана главная страница: ID - ' + pageId);
                    $('#idPage').text(pageId);
                    return pageId;
                    // $('#ListBlocksSite').append('<li class="list-group-item">' + block + '</li>');
                } catch (e) {
                    console.error(e);
                    console.log('не удалось создать страницу');
                }
            }

            async function addListBlocksHomePage (listBlocks, pageId) {
                try {
                    for (let block in repoBlocks){
                        for (let name in listBlocks) {
                            // console.log('description - ' + repoBlocks[block].description);
                            if (repoBlocks[block].description === listBlocks[name]) {
                                let result = await addBlock(pageId, repoBlocks[block].code);
                                codeBlocksOnHomePage.push({id: (String(result)), code: (repoBlocks[block].description)});
                                console.log('добавлен блок: ' + result + ' : '
                                    + repoBlocks[block].code + ' : '
                                    + repoBlocks[block].description);
                            }
                        }
                    }
                    //console.log('codeBlocksOnHomePage - ' + codeBlocksOnHomePage);
                    return codeBlocksOnHomePage;
                } catch (e) {
                    console.error(e);
                    console.log('ошибка добавления блоков');
                }
            }

            async function addListBlocks(listBlocks, pageId){
                let codeBlocksOnPage = [];
                try {
                    for (let block in repoBlocks){
                        for (let name in listBlocks) {
                            // console.log('description - ' + repoBlocks[block].description);
                            if (repoBlocks[block].description === listBlocks[name]) {
                                let result = await addBlock(pageId, repoBlocks[block].code);
                                codeBlocksOnPage.push({id: (String(result)), code: (repoBlocks[block].description)});

                                console.log('добавлен блок: ' + result + ' ' + repoBlocks[block].code + ' : ' + repoBlocks[block].description);
                            }
                        }
                    }
                    return codeBlocksOnPage;
                } catch (e) {
                    console.error(e);
                    console.log('ошибка добавления блоков');
                }
            }

            function addBlock(pageId, block) {
                return callMethod(
                    'landing.landing.addblock',
                    {
                        lid: pageId,
                        fields: {
                            CODE: block,
                            ACTIVE: 'Y'
                        },

                    }
                );
            }

            // вывод информации о созданном сайте
            function infoAboutPage(siteId, siteTitle, previewSite){
                $('#nameCreateSite').text(siteTitle);
                $('#idSite').text(siteId);
                $('#previewSite').attr('src', previewSite);
                $('#Application_102').css('display', 'none');
                $('#InfoCreatSite').css('display', 'block');
            }

            async function cloneCardBlock(pageId, block, selector){
                try {
                    await callMethod(
                        'landing.block.cloneCard',
                        {
                            lid: pageId,
                            block: block,
                            selector: selector
                        }
                    )
                } catch (e) {
                    console.error(e);
                    console.log('ошибка клонирования карточки блока')
                }
            }

            async function getListPagesToId (id) {
                let listPages = await callMethod(
                    'landing.landing.getList',
                    {
                        params: {
                            select: [
                                'ID', 'CODE', 'TITLE'
                            ],
                            filter: {
                                SITE_ID: id
                            },
                            order: {
                                ID: 'DESC'
                            }
                        }
                    });
                //console.log('listPages- ' + listPages);
                return listPages;
            }

            async function getListPages() {
                let listPages = await callMethod(
                    'landing.landing.getList',
                    {
                        params: {
                            select: [
                                'ID', 'CODE', 'TITLE'
                            ],
                            order: {
                                ID: 'DESC'
                            }
                        }
                    });
                //console.log('listPages- ' + listPages);
                return listPages;
            }

            async function getBlocksPage(pageId){
                try {
                    let blocksPage = await callMethod(
                        'landing.block.getlist',
                        {
                            lid: pageId,
                            params: {
                                edit_mode: 1
                            }
                        });
                        //console.log('blockPage - ' + blocksPage);
                        return blocksPage;
                } catch (e) {
                    console.error(e);
                    console.log('ошибка получения списка блоков');
                }
            }

            function getContentToHomePage (link) {
                let blockTitle = $('#blockTitle').val().replace(/\s+/g,' ');
                let previewNew = $('#previewNew').val().replace(/\s+/g,' ');
                let dayNew = $('#dayNew').val().replace(/\s+/g,' ');
                let monthNew = $('#monthNew').val().replace(/\s+/g,' ');
                let linkToPageNew = link;

                let contentToHomePage = {
                    '.cetacs-block_news-block_news-item_title-link': {text: blockTitle, href: linkToPageNew, target: '_blank'},
                    '.cetacs-block_news-block_news-item_text': previewNew,
                    '.cetacs-block_news-block_news-item_read-more-link': {href: linkToPageNew, target: '_blank'},
                    '.cetacs-block_news-block_news-item_day': dayNew,
                    '.cetacs-block_news-block_news-item_month': monthNew
                };
                return contentToHomePage;
            }

            function getContent () {
                let blockTitle = $('#blockTitle').val().replace(/\s+/g,' ');
                let previewNew = $('#previewNew').val().replace(/\s+/g,' ');
                let detailNew = $('#detailNew').val().replace(/\s+/g,' ');
                let dayNew = $('#dayNew').val().replace(/\s+/g,' ');
                let monthNew = $('#monthNew').val().replace(/\s+/g,' ');
                let linkSourceNew = $('#linkSourceNew').val().replace(/\s+/g,' ');

                let content =
                {
                    '.cetacs-block_new-detail_block-title': blockTitle,
                    '.cetacs-block_new-detail_text-preview': previewNew,
                    '.cetacs-block_new-detail_text-detail': detailNew,
                    '.cetacs-block_new-detail_data-new-day': dayNew,
                    '.cetacs-block_new-detail_data-new-month': monthNew,
                    '.cetacs-block_new-detail_source-link': {href: linkSourceNew, target: '_blank'},
                };
                return content;
            }

            async function updateContentBlock(pageId, blockId, content){
                try {
                    await callMethod(
                        'landing.block.updatenodes',
                        {
                            lid: pageId,
                            block: blockId,
                            data: content
                        }
                    )
                } catch (e) {
                    console.error(e);
                    console.log('ошибка обновления контента блока')
                }
            }

            async function addCardBlock(pageId, block, selector, content){
                console.log('block - ' + block);
                console.log('selector - ' + selector);
                console.log('content - ' + content);
                try {
                    await callMethod(
                        'landing.block.addCard',
                        {
                            lid: pageId,
                            block: block,
                            selector: selector,
                            content: content
                        }
                    )
                }
                catch (e) {
                    console.error(e);
                    console.log('ошибка добавления карточки');
                }
            }

            async function addPage(siteId, titlePage) {

                let codePage = String('pageNew' + $.now());

                try {
                    let pageId = await callMethod(
                        'landing.landing.add',
                        {
                            fields: {
                                TITLE: titlePage,
                                CODE: codePage,
                                SITE_ID: siteId,
                            }
                        });
                    console.log('Cоздана страница: ID - ' + pageId);
                    console.log('titlePage - ' + titlePage);
                    console.log('codePage - ' + codePage);
                    console.log('idSite - ' + idSite);

                    return pageId;

                } catch (e) {
                    console.error(e);
                    console.log('не удалось создать страницу');
                }
            }

        </script>

        <script>
            let blockListDelete = [
                '01Header_left_logo_contacts01',
                '02Menu_right01',
                '03Banner_form_right01',
                '04Cards_cols01',
                '05Text_block01',
                '04Cards_cols03',
                '04Cards_cols04',
                '03Banner_form_right02',
                '04Cards_cols02',
                '06Banner_logo01',
                '07News_block_cols01',
                '05Text_block02',
                '08Footer01'

            ];
            $('#deleteBlocks').click(async function () {
                for (let block of blockListDelete) {
                    BX24.callMethod(
                        'landing.repo.unregister',
                        {code: block},
                        function (result) {
                            if (result.error())
                                console.error(result.error());
                            else
                                console.log('удален ' - result.data());
                        }
                    );
                }
                ;
            });
        </script>
    </body>
</html>

