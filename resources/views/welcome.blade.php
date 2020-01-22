<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Files</title>

    </head>
    <body>
    <h1>Exportar datos en PDF</h1>
        <p>
            Click <a href="{{ route('users.pdf') }}">
                aquí
                </a>
                para descargar en PDF a los usuarios
         </p>

         <h1>Exportar datos en Excel</h1>
        <p>
            Click <a href="{{ route('users.excel') }}">
                aquí
                </a>
                para descargar en Excel a los usuarios
         </p>


         <h1>Importar datos desde Excel</h1>
        <form action="{{ route('users.import.excel') }}" method="post" enctype="multipart/form-data">
       
        @csrf
        @if(Session::has('message'))
        <p>{{ Session::get('message') }}</p>
        @endif

        <input type="file" name="file">
        <button>Importar usuarios</button>
        </form>
    </body>
</html>
