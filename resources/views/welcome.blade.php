<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        Hello Kevin

        <a href="<?= route('link_cliente')?>">Pagina Cliente</a>
        <a href="<?= route('link_contabilidad')?>">Pagina Contabilidad</a>
        <a href="<?= route('link_facturacion')?>">Pagina facturacion</a>

    </body>
</html>
