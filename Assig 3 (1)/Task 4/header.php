<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 60%;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        .flex-row {
            display: flex;
            gap: 20px;
        }

        .flex-row .input-group {
            flex: 1;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .submit-btn:hover {
            background: #0056b3;
        }

        p {
            margin: 5px 0 0;
            color: red;
            font-size: 12px;
        }
        .error-container {
    background-color: rgba(255, 0, 0, 0.1);
    color: #ff0000; 
    border: 1px solid #ff0000;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    font-size: 14px;
    line-height: 1.5;
}

.error-container p {
    margin: 0 0 10px;
    font-size: 16px; 
}

.error-container .whoops {
    font-weight: bold; 
    font-size: 18px; 
}

.error-container ul {
    margin: 0;
    padding-left: 20px;
}

.error-container li {
    list-style-type: disc;
}

    </style>
</head>