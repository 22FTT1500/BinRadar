<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Rubbish Bins</title>
    <style>
        body {
            font-family: sans-serif;

            display: flex;
            justify-content: center;
        }

        #bin-Button {
            padding: 20px;
            border-radius: 8px;
            height: 50px;
            width: 400px;
            margin: auto;
            
        }

        .container {
            position: absolute;
            top: 200px;

            background-color: #fff;
            border: 1px solid black;

            display: flex;
            padding: 30px;          
            width: 1000px;
            flex-flow: row wrap;
            gap: 40px;
            
        }

        h1 {
            position: absolute;
            top: 80px;
            left: 80px;
        }

        .bin-card {
            background-color: #9BE37C;
            padding: 20px;
            border-radius: 8px;
            height: 50px;
            width: 400px;
            margin: auto;
            
        }

        .bin-image {
            width: 60px;
        }

        .bin-info {
            display: flex;
            flex-direction: column;
        }

        .bin-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .bin-status {
            color: black;
        }

        .add-button {
            background-color: #EFEFEF;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            align-items: center; 
            color: black;
            margin: auto;
        }

        .add-button:hover {
            background-color: #E1E1E1;
        }
    </style>
</head>

<body>

    <h1>My Rubbish Bins</h1>

    <div class="container">

        <div class="bin-card">
            <div class="bin-info">
                <div class="bin-title">Living Room Bin</div>
                <div class="bin-status">Successfully Connected</div>
            </div>
            <!-- <span class="check-icon">✔</span> -->
        </div>

        <div class="bin-card">
            <div class="bin-info">
                <div class="bin-title">Kitchen Bin</div>
                <div class="bin-status">Successfully Connected</div>
            </div>
            <!-- <span class="check-icon">✔</span> -->
        </div>
        

        <div id="bin-Button">
            <button class="add-button">
                <span>Add New Bins</span><span>+</span>
            </button>
        </div>

    </div>

</body>



</html>