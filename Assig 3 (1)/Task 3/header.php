<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        .form-container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-container h2 {
            text-align: center;
        }
        .form-container .input-group {
            margin-bottom: 15px;
        }
        .form-container .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-container .input-group input, 
        .form-container .input-group select, 
        .form-container .input-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container .submit-btn:hover {
            background-color: #45a049;
        }
        .form-container .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }
    </style>
</head>
<body>