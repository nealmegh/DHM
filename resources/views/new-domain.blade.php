<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
 
    {{ Form::open(array('method' => 'post','url' => 'register_domain')) }}
        
        <p>User:</p>
 
        <p>{{ Form::text('user_id') }}</p>
 
        <p>Domain Name:</p>
 
        <p>{{ Form::text('domain_name') }}</p>
 
        <p>Purchased From:</p>
 
        <p>{{ Form::text('purchased_from') }}</p>
        
        <p>Date Purchased:</p>
 
        <p>{{ Form::date('date_purchased') }}</p>
        
        <p>Validity Till:</p>
 
        <p>{{ Form::text('valid_till') }}</p>
        
        <p>Client Validity Till:</p>
 
        <p>{{ Form::text('client_valid_till') }}</p>

        <p>Hosting Provider:</p>
 
        <p>{{ Form::text('hosting_provider') }}</p>
        
        <p>Client Hosting Provider:</p>
 
        <p>{{ Form::text('client_hosting_provider') }}</p>

        <p>DNS:</p>
 
        <p>{{ Form::text('dns') }}</p>

        <p>{{ Form::submit('Submit') }}</p>
 
    {{ Form::close() }}
 
</body>
</html>