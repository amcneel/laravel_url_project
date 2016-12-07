<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #e8e8e8;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                
            }
            #input1{
                margin-left: 10px;
                margin-right: 10px;
            }
            #input2{
                margin-left: 10px;
                margin-right: 10px;
            }
            #inUse{
                color:red;
            }
            .fails{
                color:red;
            }
            #longText{
                text-align: center;
                font-size: 30px;
            }
            #shortText{
                text-align: center;
                font-size: 30px;
            }

        </style>
    </head>
    <body>
        <center><h1><b>Shorten Your URL!</b></h1></center>
        <br><br>
        <form method="POST">

        {{ csrf_field() }}
        <div id='long'>
        <div id='longText'>
        <b><i>Your Url:</i></b>
        </div>
        <div id="input1">
        <b><input class='form-control' id="i1" type="text" name="redirectTo" placeholder="Paste Link To Shorten"></b></div>
        <span class="fails"><b>{{$failed or ''}}</b></span>
        </div>

        <br><br>
        <div id='short'>
        <div id='shortText'>
        <b><i>Your Keyword:</i></b>
        </div>
        <div id="input2">
        <b><input id="i2" class='form-control' type="text" name="keyword" placeholder="Choose Ending Keyword(s)"></b></div>
        <span class="fails"><b>{{$failed or ''}}</b></span>
        <div id='inUse'><b>{{$inUse or ''}}</b></div>
        </div>
        <br><br>
        <center><input type="submit" class="btn btn-primary btn-lg" name="submit" value="Shorten"></center>
        </form>
        


    </body>
    <script type="text/javascript">
    //got from http://stackoverflow.com/questions/14236873/disable-spaces-in-input-and-allow-back-arrow
        $("#i1").on({
          keydown: function(e) {
            if (e.which === 32)
              return false;
          },
          change: function() {
            this.value = this.value.replace(/\s/g, "");
          }
        });
        $("#i2").on({
          keydown: function(e) {
            if (e.which === 32)
              return false;
          },
          change: function() {
            this.value = this.value.replace(/\s/g, "");
          }
        });
    </script>
</html>
