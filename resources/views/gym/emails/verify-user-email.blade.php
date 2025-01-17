<!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>Thank you for registering. Please click the button below to verify your email address:</p>
    <a href="{{ $verificationUrl }}" style="padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none;">Verify Email</a>
    <p>If you did not create an account, no further action is required.</p>
</body>
</html>
