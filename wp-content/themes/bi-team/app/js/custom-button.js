(function () {
    tinymce.PluginManager.add('advrt_button', function (editor, url) {
        editor.addButton('advrt_button', {
            title: 'Add the blockquote',
            icon: 'icon dashicons-admin-users',
            onclick: function () {
                editor.windowManager.open({
                    title: 'Blockquote',
                    body: [
                        {
                            type: 'textbox',
                            name: 'namePerson',
                            label: 'Name person'
                        },
                        {
                            type: 'textbox',
                            name: 'personCompany',
                            label: 'Person company'
                        },
                        {
                            type: 'textbox',
                            name: 'content',
                            label: 'Blockquote Text',

                            multiline: true,
                            minWidth: 300,
                            minHeight: 100
                        }
                    ],
                    onsubmit: function (e) {
                        editor.insertContent(' <blockquote class="blockquote-posts row align-items-center"> ' +
                            '<div class="col-md-8">' + '<p>' + e.data.content + '</p>' + '</div>' +
                            '<div class="col-md-4 text-center">' + '<h2>' + e.data.namePerson + '</h2>' + '<h3>' + e.data.personCompany + '</h3>' + '</div>' +
                            ' </blockquote>');
                    }
                });


            }
        });
    });
})();