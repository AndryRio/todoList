<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #322B30;
                color: whitesmoke;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                text-align: center;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <h1> Todo List</h1> <br>

            @foreach($listItems as $listItem)
                <p>Item: {{ $listItem->name }}</p>

            <form method="post" action="{{ route('markComplete', $listItem->id) }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <button type="submit" style="max-height: 25px; margin-left: 20px;">Mark Complete</button>
            </form>
            @endforeach


            <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
                {{ csrf_field() }}

                <br>
            <label for="listItem">New Todo Item</label> <br>
            <input type="text" name="listItem"> <br>
            <button>Submit</button>

            </form>
        </br>
        </div>
    </body>
</html>
