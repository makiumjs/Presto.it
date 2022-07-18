<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('ui.titlee')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Transactional Email</title>
    <style>
        
        body{
            font-family: Segoe UI;
        }
        
        .btn-email{
            padding: 30px 25px 15px 25px;
            min-height: 32px;
            border: none;
            border-radius: 8px;
            box-shadow: 10px 24px 54px rgba(32, 30, 52, 0.16);
            background-color: rgb(249, 212, 1);
            transition: 0.3s;
            text-decoration: none;
            color: black;
        }
        .btn-email:hover{
            box-shadow: none;
        }
        
        .email-body{
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-top: 60px; 
            text-align: center;
        }
        .padding-email{
            padding-top: 15px;
        }
        .padding-bottom-email{
            padding-bottom: 10px;
        }
        
        
        @media screen and (min-width: 768px){
            .img-responsive{
                height: 600px;
                width: 800px;
            }
        }
        @media screen and (max-width: 768px){
            .img-responsive{
                height: 500px;
                width: 600px;
            }
        }
        @media screen and (max-width: 480px){
            .img-responsive{
                height: 200px;
                width: 270px;
            }
        }
        
        
    </style>
</head>
<body>
    <div class="email-body">
        <div>
            <h1>{{__('ui.congrats')}} {{$user->name}} {{__('ui.accettata')}}</h1>
            <h2 class="padding-email">{{__('ui.selodicitu')}}: {{$user->email}}</h2>
            <p class="padding-bottom-email">{{__('ui.ecco')}}:</p>
            <a class="btn-email" href="{{route('revisorDashboard', $user)}}"><img src="<?php echo $message->embed(public_path().'\media\logo.png'); ?>" width="120px" height="29px" alt=""></a>
        </div>
        <div>
            <img class="img-responsive" src="<?php echo $message->embed(public_path().'/media/email1.png'); ?>">
        </div>
    </div>
    
    
</body>