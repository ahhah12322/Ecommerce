<!-- resources/views/emails/verify-email.blade.php -->
<p>Hi {{ $user->name }},</p>
<p>Thank you for registering. Please click the link below to verify your email address:</p>
<p><a href="{{ url('/email/verify', [$user->id, sha1($user->email)]) }}">Verify Email Address</a></p>
<p>If you did not create an account, no further action is needed.</p>
