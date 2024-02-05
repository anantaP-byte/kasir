<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #ecf0f1; /* Warna latar belakang */
    }
    #login-box {
      width: 300px;
      padding: 20px;
      background: linear-gradient(to bottom, #3498db, #2980b9); /* Gradien latar belakang */
      border-radius: 10px;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease-in-out;
    }
    #login-box:hover {
      transform: scale(1.05);
    }
    h2 {
      color: #fff; /* Warna teks judul */
      text-align: center;
    }
    input[type="text"],
    input[type="password"] {
      width: calc(100% - 20px);
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #3498db;
      border-radius: 5px;
      outline: none;
      transition: border-color 0.3s ease-in-out;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #2980b9;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background: #2ecc71; /* Warna tombol */
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      outline: none;
      transition: background-color 0.3s ease-in-out;
    }
    input[type="submit"]:hover {
      background-color: #3498db; /* Warna tombol saat dihover */
    }
  </style>

</head>
<body>

<div id="login-box">
  <h2>LOGIN</h2>
  <form action="login_process.php" method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" value="Login">
    
  </form>
</div>

</body>
</html>
