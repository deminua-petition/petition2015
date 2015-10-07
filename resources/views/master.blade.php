<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')Бесплатный каталог шрифтов - noMail. Первый репозиторий шрифтов - хранилище шрифтов!">
    <meta name="keywords" content="@yield('keywords')Каталог шрифтов, noMail, репозиторий шрифтов, хранилище шрифтов, Repository, Fonts, бесплатный шрифт" />
    <meta name="google-site-verification" content="j_RrL2Z7ZToEiYqJjChw3dat-Z3q576fFAazaDxP0Mo" />
    <meta name='yandex-verification' content='48360d377393dd69' />

    {!! HTML::script('javascripts/jquery.min.js') !!}
    {!! HTML::script('javascripts/bootstrap.min.js') !!}
    {!! HTML::style('stylesheets/style.css') !!}

</head>
<body>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
...more buttons...

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>