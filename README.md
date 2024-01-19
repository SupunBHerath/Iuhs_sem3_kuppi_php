

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    # Iuhs_sem3_kuppi_php
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            border-style: solid;
            padding: 20px;

        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-style: none;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        } 
        li{
            font-size: large;
        }
        .box{
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="box">
  
    <form action="insert_details.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="mobileNumber">Mobile Number:</label>
        <input type="tel" id="mobileNumber" name="mobileNumber" pattern="[0-9]{10}" required>

        <label for="itemSelection">Select  item :</label>
        <select id="itemSelection" name="items">
            <option value="item1">Item 1</option>
            <option value="item2">Item 2</option>
            <option value="item3">Item 3</option>
        </select>
        <label for="">Quantity:</label>
        <input type="number" id="username" name="quantity" required>
        

        <input type="submit" name="submit">
    </form>
  <br>
  
</div>
</body>

</html>
