<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session
    $_SESSION['form_data'] = [
        'name' => $_POST['name'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'gender' => $_POST['gender'] ?? '',
        'course' => $_POST['course'] ?? '',
        'skills' => $_POST['skills'] ?? ''
    ];
    
    header("Location: response.php");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>
<head>
  <meta charset="UTF-8">
  <title>Submission Successful</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(120deg, #1c2541, #0b132b);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      padding-top: 40px;
      margin: 0;
    }
    .box {
      width: 450px;
      background: rgba(255,255,255,0.1);
      padding: 25px 30px;
      border-radius: 10px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.5);
    }
    h2 { color: #00e0ff; text-align: center; }
    .info { margin-top: 15px; font-size: 15px; line-height: 1.6; }
    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: #00e0ff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>Registration Successful!</h2>
    <div class="info">
      <strong>Name:</strong> <?php echo $name; ?><br>
      <strong>Email:</strong> <?php echo $email; ?><br>
      <strong>Phone:</strong> <?php echo $phone; ?><br>
      <strong>Gender:</strong> <?php echo $gender; ?><br>
      <strong>Course:</strong> <?php echo $course; ?><br>
      <strong>Skills:</strong> <?php echo nl2br($skills); ?><br>
    </div>
    <a href="./index.html">← Go Back</a>
  </div>
</body>
</html>
