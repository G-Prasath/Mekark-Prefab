<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once 'templates/head.php'?>

    <style>
        .nav > ul{
            display:flex;
            margin:0;
        }
        .nav > ul > li{
            list-style-type:none;
            margin-left:20px;
            cursor: pointer;
            color:#fff;
        }
        .top-header{
            height:80px;
        }
        .logo{
            height: 100%;
            display: grid;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .nav{
            height: 100%;  
            display: grid;
            align-items: center;
            justify-content: end;
        }
        .logo-btn{
            height: 100%;  
            display: grid;
            align-items: center;
            justify-content: space-around;
        }
        #zoom-placeholder {
    position: fixed;
    bottom: 25px;
    left: 10px;
    z-index: 100;
    width: 250px;
    height: 250px;
  }
    </style>
    <link rel="stylesheet" href="magiczoomplus/magiczoomplus.css">
    <script src="magiczoomplus/magiczoomplus.js"></script>
</head>
<body>

</body>
</html>