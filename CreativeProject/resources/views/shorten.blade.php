<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #e8e8e8;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                text-align: center;
            }
            #header{
                position: absolute;
                top: 150px;
                font-size: 60px;
                width: 100%;

            }
            #link{
                position: relative;
                top: 40%;
                font-size: 40px;
            }
            #return{
                position: absolute;
                bottom: 50px;
                left: 50%;
            }

        </style>
    </head>
    <body>
        <div id='header' class='animated wobble'>
        <h1><b>Congrats! Link Created!</b></h1>
        </div>
        <div id='link' class='animated bounce'><b>amcneel.me/public/{{$keyword}}</b></div>

        <div id='return'><b><i><a href="/">Home</a></i></b></div>

        
        
    </body>
</html>
