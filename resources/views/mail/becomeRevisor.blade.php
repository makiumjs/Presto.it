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
         padding: 10px 15px;
         border: none;
         border-radius: 8px;
         box-shadow: 10px 24px 54px rgba(32, 30, 52, 0.16);
         background-color: rgb(249, 212, 1);
         transition: 0.3s;
         text-decoration: none;
         color: black;
         padding-top: 8px;
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
         <h1>{{__('ui.noii')}}</h1>
         <h2 class="padding-email">{{__('ui.dati')}}</h2>
         <p>{{__('ui.reg-name')}}: {{$user->name}}</p>
         <p>{{__('ui.log-mail')}}: {{$user->email}}</p>
         <p>{{__('ui.desc')}}: {{$description}}</p>
         <h3 class="padding-email">{{__('ui.renrev')}}</h3>
         <a class="btn-email" href="{{route('createRevisor', $user)}}">{{__('ui.potere')}}</a>
      </div>
      <div>
         <img class="img-responsive" src="<?php echo $message->embed(public_path().'/media/email2.png'); ?>">
      </div>
   </div>
   
   
</body>