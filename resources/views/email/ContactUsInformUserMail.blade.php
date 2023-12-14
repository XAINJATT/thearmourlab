<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4CAF50;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>The Armour Lab</h2>
        <p>Hi, {{ $data['name'] }}</p>
        <p>Your contact details have been received. We will get in touch with you as soon as possible.</p>
        <p>Thank you for reaching out to us!</p>
        <div class="footer">
            {{-- <!--<img src="{{ asset('images/logo.webp') }}" width="200" alt="The Armour Lab">--> --}}
            <p>&copy; 2023 The Armour Lab. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
