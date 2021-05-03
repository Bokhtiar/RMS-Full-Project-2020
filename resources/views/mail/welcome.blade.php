<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>New Registration {{$user['name']}}</title>
</head>

<body>
<h2>Welcome to the Dishmize site {{$user['name']}}</h2>
<br/>
  First name is {{$user['name']}}<br>
  Last name is {{$user['last_name']}}<br>
  Country name is {{$user['country']}}<br>
  Gender  {{$user['gender']}}<br>
  Phone  {{$user['phone']}}<br>
  email is {{$user['email']}}<br>
  Thanks for registration our Dishmizer Group...
</body>

</html>
