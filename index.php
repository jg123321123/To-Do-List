<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" 
  <link rel="stylesheet" href="style.css">
  <title>Todo List</title>
</head>
<body>
  <div class="wrapper">
    <form class="form">
      <div class="inputBox">
        <input type="text" id="txt" placeholder="Enter your Task" required>
        <button id="btn"><i class="ADD"></i></button>
      </div>
    </form>
    <ul id="data">

    </ul>
    <div class="footer">
      <p id="total_task"></p>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
