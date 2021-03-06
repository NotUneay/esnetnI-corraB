<!DOCTYPE html>
<html>
<head>
    <title>How Send an Email in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
        .has-error
        {
            border-color:#cc0000;
            background-color:#ffff99;
        }
    </style>
</head>
<body>
<div class="container box">

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('succes'))
        <div class="alert alert-succes aler-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <form method="post" action="{{ url('sendemail/send') }}">
        @csrf
        <div class="form-group">
            <label>Enter your name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Enter your email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Enter your message</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="send" value="Send" class="btn btn-info">
        </div>
    </form>
</div>
</body>
</html>