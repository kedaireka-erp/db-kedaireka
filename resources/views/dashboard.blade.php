<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="http://crm.alluresystem.site/login" method="post">
    <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
    <button type="submit"> CRM</button>
    </form>
    <form action="http://sales.alluresystem.site/login" method="post">
        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
        <button type="submit"> Sales</button>
        </form>
</body>
</html>