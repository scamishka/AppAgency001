<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить новость на сайт Агенства недвижимости</title>
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"-->
    <!--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"-->
    <!--          crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="https://abcdef.tmweb.ru/AppAgency001/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://abcdef.tmweb.ru/AppAgency001/libs/bootstrap4/js/bootstrap.js"></script>
    <script src="//api.bitrix24.com/api/v1/"></script>
    <!--    <script src="script.js"></script>-->
    <!--    <script src="https://abcdef.tmweb.ru/AppAgency001/addSiteWithName100.js"></script>-->
    <!--    <script src="https://abcdef.tmweb.ru/AppAgency001/deleteRegBlock.js"></script>-->
    <script>

    </script>
</head>
<body>

<header>
    <h1>Добавить новость</h1>
</header>

<!--<script src="https://abcdef.tmweb.ru/AppAgency001/addSiteWithName100.js"></script>-->

<script>
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

    let codeBlock = [];
    let nameBlock = [];

    let blocksListNewDetail = [
        'Шапка сайта с логотипом слева и контактами',
        'Новость детально',
        'Блок с меню справа и текстовым лого',
        'Футер с контактами, соц.сетями в колонках'
    ];

    $(document).on('ready', getListSite());

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
        console.log(listSites);
        for (let key of listSites) {
            $('#listSites select').append('<option id="' + key.ID + '" value="' + key.CODE + '">' + key.TITLE + '</option>');
        }
    }

    $('#createNew').on('click', async function () {
        await updateContentNewDetail();
        await addPage(blocksListNewDetail);
    });

    async function updateContentNewDetail(){
        let $blockTitle = $(#blockTitle).val();
        let update = await callMethod(
            'landing.block.updatenodes',
            {
                lid: idSite,
                block: 'repo_890',
                data: {
                    '.cetacs-block_new-detail_block-title': $blockTitle
                }
            }
        );
        console.log('update - ' + update);
    }

    async function getRegisterBlocks() {
        let idBlocks = await callMethod(
            'landing.repo.getList',
            {
                params: {
                    select: [
                        'ID', 'NAME', 'SECTIONS'
                    ]
                }
            });
        // console.log('id - ' + idBlocks);
        for (let key of idBlocks) {
            // console.log(String(key.NAME));
            nameBlock.push({name: String(key.NAME), code: ('repo_' + String(key.ID))});
            codeBlock.push('repo_' + String(key.ID));
        }
        return nameBlock;
        // console.log('123 - ' + codeBlock);
    }

    async function addHomePage(idSite) {
        try {
            let pageId = await callMethod(
                'landing.landing.add',
                {
                    fields: {
                        TITLE: 'Главная страница сайта',
                        CODE: 'homePage',
                        SITE_ID: idSite,
                    }
                });
            console.log('Cоздана главная страница: ID - ' + pageId);
            $('#idPage').text(pageId);
            codeBlock.reverse();

            for (const block of codeBlock) {
                let result = await addBlock(pageId, block);
                console.log('добавлен блок ' + result + ' ' + block);
                $('#ListBlocksSite').append('<li class="list-group-item">' + block + '</li>');

            }
        } catch (e) {
            console.error(e);
            console.log('не удалось создать страницу');
        }
    };

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
    };

    async function addPage(blocksList) {
        let idSite = $("#choiceSite option:selected").attr('id');
        let titlePage = $('#titleNew').val();
        let codePage = String('pageNew' + $.now());

        try {
            let pageId = await callMethod(
                'landing.landing.add',
                {
                    fields: {
                        TITLE: titlePage,
                        CODE: codePage,
                        SITE_ID: idSite,
                    }
                });
            console.log('Cоздана страница: ID - ' + pageId);
            console.log('titlePage - ' + titlePage);
            console.log('codePage - ' + codePage);
            console.log('idSite - ' + idSite);

            let blocksListRepository = await getRegisterBlocks();
            blocksListRepository.reverse();

            for (let block in blocksListRepository) {
                for (let name in blocksListNewDetail) {
                    if (blocksListRepository[block].name === blocksListNewDetail[name]) {
                        let result = await addBlock(pageId, blocksListRepository[block].code);
                        console.log('добавлен блок ' + result + ' ' + blocksListRepository[block].name);
                    }
                }
            }

        } catch (e) {
            console.error(e);
            console.log('не удалось создать страницу');

        }
    };

    async function getRepositoryBlocksSection() {

        let repositoryBlocksList = await callMethod(
            'landing.repo.getList',
            {
                params: {
                    select: [
                        'ID', 'NAME', 'SECTIONS'
                    ]
                }
            }
        )
        // return repositoryBlocksList;
        console.log('repositoryBlocksList - ' + repositoryBlocksList );
    }

</script>

</body>
</html>


