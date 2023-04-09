<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>contact package</h2>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name please">
        <input type="email" name="email" placeholder="Your Email please">
        <textarea cols="30" rows="10"  placeholder="Your Query" name="message"></textarea>
        <input type="submit" value="submit">

    </form>    
    
</body>
</html>
