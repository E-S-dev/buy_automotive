<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Verify Email Address') }}</title>
</head>
<body>
    <h1>{{ __('Verify Email Address') }}</h1>
    <p>{{ __('Please click the button below to verify your email address.') }}</p>
    <a href="{{ $url }}" style="display: inline-block; padding: 10px 20px; color: #fff; background-color: #598746; text-decoration: none; border-radius: 5px;">
        {{ __('Verify Email Address') }}
    </a>
    <p>{{ __('If you did not create an account, no further action is required.') }}</p>
    <p>{{ __('Thank you!') }}</p>
</body>
</html>
