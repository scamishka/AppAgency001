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

        codeBlock.reverse();
        for (const block of codeBlock) {
            let result = await addBlock(pageId, block);
            console.log('добавлен блок ' + result + ' ' + block);
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
