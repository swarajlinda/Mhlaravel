<!DOCTYPE html>

<html>

<head>

    <title>Booking Request</title>

</head>

<body>

<h1 style="color: #2c3e50;">Dear Mr. Diwakar,</h1>

<p style="font-size: 16px; color: #444;">
    You have received a new booking request with the following details:
</p>

<ul style="font-size: 16px; color: #333; list-style-type: none; padding: 0;">
    <li><strong>Visitor's Name:</strong> {{$name}}</li>
    <li><strong>Mobile No:</strong> {{$mobileNo}}</li>
    <li><strong>Room Type:</strong> {{$roomType}}</li>
</ul>

<p style="font-size: 16px; color: #444;">
    Please get in touch with the visitor at  
    <a href="tel:{{$mobileNo}}" style="color: #3498db; text-decoration: none; font-weight: bold;">
        {{$mobileNo}}
    </a>  
    for further communication.
</p>

</body>

</html>