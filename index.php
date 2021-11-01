<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my second app</title>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"-->
<!--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"-->
<!--          crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/css/bootstrap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/js/bootstrap.js"></script>
    <script src="//api.bitrix24.com/api/v1/"></script>
    <!--    <script src="script.js"></script>-->
    <script src="https://abcdef.tmweb.ru/AppAgency001/addSite.js"></script>
<!--    <script src="https://abcdef.tmweb.ru/AppAgency001/deleteRegBlock.js"></script>-->


</head>
<body>
<header>
    <h1>Конструктор сайта</h1>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Типовой сайт агенства недвижимости</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <button id="siteAdd" type="button" class="btn btn-outline-primary">Создать сайт</button>
            </div>
            <div class="col-4">
                <button id="deleteBlocks" type="button" class="btn btn-outline-primary">Удалить блоки</button>

            </div>
            <div class="col-12">
                <div class="site-info"></div>
            </div>
        </div>
    </div>
</section>
<script>


    $(document).on('ready', startRegisterBlocks());

    async function startRegisterBlocks() {

        for (let block of blockList) {

            let params = await getBlockParams(block);
            let blockId = await registerBlock(params);
            codeBlock.push('repo_' + String(blockId));
            console.log('Добавлен блок. id - ' + blockId);

        }
    }

    function getBlockParams(code) {
        return $.ajax({
            url: code + '/block.php',
            type: "POST",
            async: false,
            dataType: 'text',
            error: function () {
                alert('There was some error performing the AJAX call!');
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
</script>
<script>
    $('#siteAdd').click(async function () {
        let siteId = await callMethod(
            'landing.site.add',
            {
                fields: {
                    TITLE: 'Типовой сайт агенства недвижимости',
                    CODE: 'agencySite'
                }
            }).catch(e => console.error(e));
        console.log('Сайт создан: ID - ' + siteId);
        addHomePage(siteId);
    });


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
                function(result)
                {
                    if(result.error())
                        console.error(result.error());
                    else
                        console.log('удален ' - result.data());
                }
            );
        };
    });
</script>
</body>
</html>
