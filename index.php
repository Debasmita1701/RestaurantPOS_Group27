<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restaurant Management System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
           
            
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        body {
  background-image: url("image/img1.jpeg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
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

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .links{

  font-size: 30px;
  font-weight: 600;
  padding: 15px 32px;

  color: #00000;
  display:inline-block;
  float:left;
  border-radius : 4px;
  margin:auto;
  top:50%;
  cursor: pointer;
  hover:grey;
  outline: none;
  position:absolute;
  transition : 0.2s;

}
button{
    font: 1em sans-serif #00000;
}
button:hover{
    background-color: #a9a9a9;
}
button:hover span{
    padding-right:25px;
}
button:hover span:after{
    opacity:1;
    right:0;
}

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            

            <div class="links">
			
                <!--<a href="Restro/admin/">Admin Log In</a>-->
                <button style="margin-right:100px;
                 font-size: 1em; font-family: Georgia;
                 padding: 15px 30px; border-radius:10px;"><a href="Restro/admin/" style="text-decoration: none; color:#000000">Admin Login</a></button>
               
                <button style="margin-right:100px;
                 font-size: 1em; font-family: Georgia;
                 padding: 15px 18px; border-radius:10px;"><a href="Restro/customer/" style="text-decoration: none; color:#000000">Customer Login</a></button>
            </div>
        </div>
    </div>
</body>

</html>