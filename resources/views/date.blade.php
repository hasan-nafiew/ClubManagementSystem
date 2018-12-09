<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/jquery.datetimepicker.min.css">
</head>
<body>
    

    <input id="datetimepicker" type="text" >


    <script src="{{asset('contents/admin')}}/js/jquery.js"></script>
    <script src="{{asset('contents/admin')}}/js/jquery.datetimepicker.full.js"></script>   
    <script>
         jQuery('#datetimepicker').datetimepicker();
    </script>
</body>
</html>