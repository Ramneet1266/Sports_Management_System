<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="add_schedule.php" method="post">
    <h1>Add Schedule</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Sport" name="sport">
      </div>
      <div class="input-field">
        <input type="date" placeholder="Date" name="date">
      </div>
      <div class="input-field">
        <input type="text" placeholder="League" name="league">
      </div>
      <div class="input-field">
        <input type="text" placeholder="Teams" name="team">
      </div>
      <div class="input-field">
        <input type="text" placeholder="Status" name="status">
      </div>
     
    <div class="action">
      <button type="submit">Add</button>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
