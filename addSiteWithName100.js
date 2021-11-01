let siteId;

function siteAddInfo(idSite) {
    BX24.callMethod(
        'landing.site.getList',
        {
            params: {
                select: [
                    'ID', 'TITLE'
                ],
                order: {
                    ID: 'DESC'
                }
            }
        },
        function (result) {
            if (result.error()) {
                console.error(result.error());
            } else {
                console.log(result.data());

                let tagInfo = document.getElementById('site-info');
                let items = result.data();
                //console.log(siteId);
                for (let i = 0, c = items.length; i < c; i++) {
                    //console.log(items[i].ID);
                    if (items[i].ID == idSite) {
                        let li = document.createElement('LI');
                        li.innerHTML = 'Добавлен ' + items[i].TITLE + ' - ' + 'SITE_ID - ' + items[i].ID;
                        tagInfo.appendChild(li);
                    }
                }
            }
        }
    );
};

async function getRegisterBlocks() {
    let idBlocks = await callMethod(
        'landing.repo.getList',
        {
            params: {
                select: [
                    'ID', 'NAME'
                ],
                filter: {
                    '>ID': '1'
                }
            }
        });
    console.log(idBlocks);
    for (let key of idBlocks) {
        //console.log(key.ID);
        codeBlock.push('repo_' + String(key.ID));
    }
    console.log(codeBlock);
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

async function addPage() {
    let idSite = $("#choiceSite option:selected").attr('id');
    let titlePage = $('#titleNew').val();
    let codePage = String('pageNew' + $.now());
    // $('#choiceSite option:selected').val());

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

        console.log(codeBlock);
        let getList = await getRepositoryBlocksSection();
        console.log('getList - ' + getList);
        // for (const block of blocksList) {
        //     let result = await addBlock(pageId, block);
        //     console.log('добавлен блок ' + result + ' ' + block);
        // }
    } catch (e) {
        console.error(e);
        console.log('не удалось создать страницу');


    }
};

async function getRepositoryBlocksSection (){

    let repositoryBlocksList = await callMethod(
        'landing.repo.getList',
        {
            params: {
                select: [
                    'ID', 'SECTIONS'
                ]
            }
        }
    )
    return repositoryBlocksList;
}



