let blockListDelete = [
    '01Header_left_logo_contacts01',
    '02Menu_right01',
    '03Banner_form_right01',
    '04Cards_cols01',
    '04Cards_cols02',
    '05Text_block01',
    '03Banner_form_right02',
    '06Banner_logo01',
    '07News_block_cols01',
    '08Footer01'

];
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


