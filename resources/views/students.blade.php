<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <style>
    html body {
        margin: 0%;
        padding: 0%;
        font-family: Arial, Helvetica, sans-serif;
    }
        .main {
             background-image: url(https://srisabaries.com/bg.jpg);
             background-repeat: no-repeat;
             /* background-attachment: fixed;
  background-size: cover;*/
  background-size: 100%;
  height: 100%;
  margin: 0px;
  padding: 0px;

  margin-top: 200px;
            text-align: center;

            font-size: 35px;
            color: #C8A53C;
        }

        .title {
            margin-top: 250px;
            text-align: center;

            font-size: 35px;
            color: #C8A53C;



         }

         .main h2 {
             margin-bottom: 5px;
         }

        .main h5 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;

            margin:0px;
        }

        .main h6 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            color: white;

            margin:0px;
        }

        .centered {
  position: absolute;
  top: 35%;
  left: 53%;
  line-height: 5%;
  transform: translate(-50%, -50%);
}

h2 {

            color: #C8A53C;
            font-size: 35px;

}

h5 {
    color: #C8A53C;
    font-size: 25px;
}

        </style>
</head>
<body>

    <div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -1000;   ">
        <img src="https://srisabaries.com/bg.jpg" style="width: 100%;  ">
        <div class="centered">
        <h2>  {{$student->name }}</h2>
        <h5>  {{$student->class }}</h5>

        <h5 style="color: white">  {{$student->school }}</h5>
        </div>
      </div>
      <div style="page-break-before: always;"></div>
      <div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -1000;   ">
        <img src="https://srisabaries.com/main_bg.jpg" style="width: 100%;  ">

      </div>

</body>
</html>
