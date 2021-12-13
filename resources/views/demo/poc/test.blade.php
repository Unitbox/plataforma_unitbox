<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medium editor POC </title>

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
        <h1>POC Medium Editor plugin</h1>

        <textarea class="editable"></textarea>

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
                text: "Digite seu texto",
                hideOnClick: true
            },
            toolbar: {
                buttons: ['bold', 'italic', 'underline', 'anchor', 'h1', 'h2', 'h3']
            },
            buttonLabels: 'fontawesome'
        });

        // create function upload image

        function makeEditable(el, editor) {

            $(el).mediumInsert({
                editor: editor,
                addons: {
                    images: { // (object) Image addon configuration
                        label: '<span class="fa fa-camera"></span>',
                        uploadScript: null,
                        deleteScript: 'delete.php',
                        deleteMethod: 'POST',
                        fileDeleteOptions: {

                        }, // (object) extra parameters send on the delete ajax request, see http://api.jquery.com/jquery.ajax/
                        preview: true, // (boolean) Show an image before it is uploaded (only in browsers that support this feature)
                        captions: true, // (boolean) Enable captions
                        captionPlaceholder: 'Type caption for image (optional)', // (string) Caption placeholder
                        autoGrid: 3, // (integer) Min number of images that automatically form a grid
                        formData: {}, // DEPRECATED: Use fileUploadOptions instead
                        fileUploadOptions: { // (object) File upload configuration. See https://github.com/blueimp/jQuery-File-Upload/wiki/Options
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: 'upload.php', // (string) A relative path to an upload script
                            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i // (regexp) Regexp of accepted file types
                        },
                        preview: false,
                        captionPlaceholder: 'Digite uma legenda para a imagem'
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
