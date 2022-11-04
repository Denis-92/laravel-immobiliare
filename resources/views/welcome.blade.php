<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <table>
            <thead>

                <tr>
                    <th>indirizzo</th>
                    <th>prezzo</th>
                    <th>proprietario</th>
                    <th>data</th>
                </tr>


            </thead>

               @foreach ($houses as $house)

               <tr>
                <td>{{$house['indirizzo']}}</td>
                <td>{{$house['prezzo']}}</td>
                <td>{{$house->proprietario}}</td>
                <td>{{$house->data_di_costruzione}}</td>

               </tr>



               @endforeach

        </table>

    </div>

</body>
</html>
