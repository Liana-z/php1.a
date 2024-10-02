<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> tickets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <table>
    @foreach ($Tickets as $Ticket)
        <tr>
            <td>{{ $Ticket['theme'] }}</td>
            <td>{{ $Ticket['email'] }}</td>
            <td>{{ $Ticket['date'] }}</td>
        </tr>
        
    @endforeach


    
</body>
</html>