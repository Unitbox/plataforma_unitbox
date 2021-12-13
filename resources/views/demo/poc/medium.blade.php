<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medium Plugin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/vendor/medium-editor/examples/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/medium-editor/examples/css/demo.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/themes/default.css">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/medium-editor/dist/css/medium-editor-insert-plugin.min.css') }}">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>

        .medium-insert-images.medium-insert-images-grid.small-grid figure {
            width: 10%;
        }

        @media (max-width: 750px) {
            .medium-insert-images.medium-insert-images-grid.small-grid figure {
                width: 20%;
            }
        }

        @media (max-width: 450px) {
            .medium-insert-images.medium-insert-images-grid.small-grid figure {
                width: 25%;
            }
        }

        .medium-editor-insert-plugin .medium-insert-buttons button {

            color: #242424 !important;
            border: 1px solid #242424 !important;
        }

    </style>
</head>

<body>

    <div class="container">
        <h1>POC Medium Editor js</h1>

        <textarea class="medium-editor-textarea editable"></textarea>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.runtime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sortable/0.9.13/jquery-sortable-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.ui.widget@1.10.3/jquery.ui.widget.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.iframe-transport/1.0.1/jquery.iframe-transport.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.28.0/js/jquery.fileupload.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor-insert-plugin/2.5.1/js/medium-editor-insert-plugin.min.js">
    </script>

    <script>
        var editMedium = new MediumEditor('.editable', {
            placeholder: {
                text: 'Digite seu texto',
                hideOnClick: true
            },
            anchor: {
                customClassOption: null,
                customClassOptionText: 'Button',
                linkValidation: false,
                placeholderText: 'Cole ou digite um link',
                targetCheckbox: true,
                targetCheckboxText: 'Abre em um nova janela?'
            },
            toolbar: {
                allowMultiParagraphSelection: true,
                buttons: ['bold', 'italic', 'underline', 'quote', 'anchor', 'image', 'justifyLeft', 'justifyCenter',
                    'justifyRight', 'justifyFull', 'orderedlist', 'unorderedlist', 'pre', 'outdent', 'indent',
                    'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
                ],
                diffLeft: 0,
                diffTop: -10,
                firstButtonClass: 'medium-editor-button-first',
                lastButtonClass: 'medium-editor-button-last',
                relativeContainer: null,
                standardizeSelectionStart: false,
                static: true,
                align: 'center',
                sticky: true,
                updateOnEmptySelection: false
            },
            buttonLabels: 'fontawesome',
        });

        function makeEditable(el, editor) 
        {
            var url_upload = "{{ route('upload') }}";
            var url_delete = "{{ route('delete') }}";

            $(el).mediumInsert({
                editor: editor,
                spellcheck: false,
                addons: {
                    images: {
                        deleteScript: url_delete,
                        deleteMethod: 'POST',
                        fileDeleteOptions: {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        },
                        fileUploadOptions: {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: url_upload,
                            type: 'POST',
                            acceptFileTypes: /(.|\/)(gif|jpe?g|png)$/i,
                            maxFileSize: 50000000,
                        },
                        preview: false,
                        captionPlaceholder: 'Digite uma legenda para sua imagem.',
                        uploadCompleted: function($el, data) {
                            alert("Upload Realizado com sucesso");
                            console.log($el);
                            console.log(data);
                        },
                        uploadFailed: function(uploadErrors, data) {
                            console.log(uploadErrors);
                            console.log(data);
                        },
                        styles: {
                            slideshow: {
                                label: '<span class="fa fa-play"></span>',
                                added: function($el) {
                                    // Initialize slideshow
                                    $el.cycle({
                                        slides: 'figure'
                                    });
                                },
                                removed: function($el) {
                                    // Destroy slideshow
                                    $el.cycle('destroy');
                                }
                            }
                        },
                        messages: {
                            acceptFileTypesError: 'Arquivo não suportado, por favor escolha .jpeg, .gif ou .png',
                            maxFileSizeError: 'Este arquivo é muito grande: '
                        },
                        actions: null
                    },
                    embeds: {
                        placeholder: "Cole aqui seus links de redes sociais"
                    }
                }
            });

            var images = $(el).data('plugin_mediumInsertImages'),
                originalAdd = images.add;

            images.add = function() {
                originalAdd.call(images);
            };
        }

        $(function() {
            makeEditable('.editable', editMedium);
        });
    </script>

</body>

</html>
