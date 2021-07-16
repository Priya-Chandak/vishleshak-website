<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Website User Details</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>{{ $name }}</th>
      </tr>
      <tr>
        <th>Email</th>
        <th>{{ $email }}</th>
      </tr>
      <tr>
        <th>Mobile Number</th>
        <th>{{ $mobile_number }}</th>
      </tr>
      <tr>
        <th>Subject</th>
        <th>{{ $subject }}</th>
      </tr>
      <tr>
        <th>Message</th>
        <th> {{ $message_text }}</th>
      </tr>
    </thead>
  </table>
</div>

</body>
</html>
