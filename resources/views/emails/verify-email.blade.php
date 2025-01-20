<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="x-apple-disable-message-reformatting" content="" />
    <meta content="target-densitydpi=device-dpi" name="viewport" />
    <meta content="true" name="HandheldFriendly" />
    <meta content="width=device-width" name="viewport" />
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no" />
    <title>{{ __('Verify Email Address') }}</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #d8d8d1;
        }
        .logo{
            width: 100px;
            height: 100px;
            padding-bottom: 20px;
        }
        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 80px 40px;
        }
        .container .card{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 500px;
            height: 500px;
            padding: 0 20px;
            background-color: #ffffff70;
            border-radius: 30px;
            box-shadow: 25px 25px 75px rgba(0,0,0,0.75);
        }
        .container .card .box{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
           
        }
        .container .card .box .button{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .container .card .box .verifyButton{
            display: inline-block;
            background-color: #1d1d1b;
            color: #fff;
            padding: 10px 20px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 8px;
            text-decoration: none;
        }
        .container .card .box .content h2{
            margin-bottom: 6px;
        }
        .container .card .box .content .paragraph{
            font-size: 14px;
            margin-bottom: 25px;
        }
        .container .card .box .content p {
            letter-spacing: 1px;
        }
        .container .card .box .content .regards{
            display: flex;
            flex-direction: column;
            gap: 8px;
            font-style: italic;
        }
        hr {
            margin-top: 20px;
            margin-bottom: 15px;
        }
        .container .card .box .content .footer{
            font-size: 14px;
            overflow-wrap: break-word;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="box">
                <div class="logo"><img class="logo" src="{{ asset('logo/logo.png')}}"/></div>
                <div class="content">
                    <h2>{{ __('Hello!') }}</h2>
                    <p>{{ __('Please click the button below to verify your email address.') }}</p>
                    <div class="button">
                        <a href="{{ $url }}" class="verifyButton">
                            {{ __('Verify Email Address') }}
                        </a>
                    </div>
                    <div class="paragraph">
                        <p>{{ __('If you did not create an account, no further action is required.') }}</p>
                    </div>
                    <p class="regards">{{ __('Regards') }} <span>{{ __('BUY AUTOMOTIVE') }}</span></p>
                    <hr>
                    <p class="footer"> {{ __('If you are having trouble clicking the Verify Email Address button copy and paste the URL below into your web browser') }} {{ $url }} </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
