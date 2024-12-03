<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VerMax LOQ</title>
  <style>
    
    body {
      display: flex;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      height: 100vh;
    }
    .left-panel {
      flex: 1;
      background-color: #f4f4f4;
      padding: 20px;
    }
    .right-panel {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      background: url('your-dark-background.jpg') no-repeat center center;
      background-size: cover;
    }
    .left-panel h1 {
      text-align: center;
      color: #333;
    }
    .form-group {
      margin: 20px 0;
    }
    .form-group input {
      width: calc(100% - 20px);
      padding: 10px;
      margin: 5px 0;
      display: block;
    }
    .form-group a {
      color: #007BFF;
      text-decoration: none;
      margin-right: 10px;
    }
    .right-panel img {
      width: 150px;
    }
  </style>
</head>
<body>
  
  <div class="left-panel">
    <h1>Welcome to VerMax Company</h1>
    <div class="form-group">
      <label>Credencial</label>
      <input type="text" placeholder="ID">
      <input type="text" placeholder="Nombre">
    </div>
    <div>
      <a href="#">Forgot Password</a>
      <a href="#">Sign in</a>
    </div>
  </div>
  <div class="right-panel">
    <img src="your-logo.jpg" alt="Company Logo">
  </div>
</body>
</html>
