<?php
session_start();
if (!isset($_SESSION['form_data'])) {
    header("Location: index.html");
    exit();
}
$data = $_SESSION['form_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Successful</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #f9f5f0;
      --card: #ffffff;
      --muted: #766c5e;
      --accent: #e07947;
      --accent-light: #f0a479;
      --text-dark: #2d2620;
      --border: #e8dfd5;
      --success: #7fb069;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", system-ui, Segoe UI, Roboto, 'Helvetica Neue', Arial;
      background: var(--bg);
      color: var(--text-dark);
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      padding: 40px 20px;
      margin: 0;
    }

    .box {
      width: 100%;
      max-width: 500px;
      background: var(--card);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 2px 12px rgba(45, 38, 32, 0.06);
      border: 1px solid var(--border);
      text-align: center;
    }

    .success-icon {
      width: 80px;
      height: 80px;
      background: rgba(127, 176, 105, 0.15);
      border: 2px solid var(--success);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 40px;
      margin: 0 auto 20px;
    }

    h2 {
      margin: 0 0 8px 0;
      color: var(--text-dark);
      font-size: 24px;
      font-weight: 700;
    }

    .subtitle {
      color: var(--muted);
      font-size: 14px;
      margin-bottom: 28px;
      font-weight: 400;
    }

    .info {
      margin: 28px 0;
      text-align: left;
      background: rgba(224, 121, 71, 0.04);
      padding: 20px;
      border-radius: 10px;
      border: 1px solid var(--border);
    }

    .info p {
      margin: 12px 0;
      font-size: 14px;
      line-height: 1.6;
    }

    .info p:first-child {
      margin-top: 0;
    }

    .info p:last-child {
      margin-bottom: 0;
    }

    .info strong {
      color: var(--accent);
      font-weight: 600;
      display: inline-block;
      min-width: 100px;
    }

    .actions {
      display: flex;
      gap: 12px;
      margin-top: 28px;
    }

    a,
    button {
      flex: 1;
      padding: 12px 18px;
      text-decoration: none;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      font-family: "Poppins", sans-serif;
      cursor: pointer;
      transition: all 0.2s ease;
      display: inline-block;
    }

    .btn-primary {
      background: var(--accent);
      color: white;
    }

    .btn-primary:hover {
      background: var(--accent-light);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(224, 121, 71, 0.3);
    }

    .btn-secondary {
      background: transparent;
      color: var(--accent);
      border: 1px solid var(--border);
    }

    .btn-secondary:hover {
      border-color: var(--accent);
      background: rgba(224, 121, 71, 0.04);
    }
  </style>
</head>
<body>
  <div class="box">
    <div class="success-icon">✓</div>
    <h2>Registration Successful!</h2>
    <p class="subtitle">Thank you for registering with us</p>

    <div class="info">
      <p><strong>Name:</strong> <?php echo htmlspecialchars($data['name']); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($data['email']); ?></p>
      <p><strong>Phone:</strong> <?php echo htmlspecialchars($data['phone']); ?></p>
      <p><strong>Gender:</strong> <?php echo htmlspecialchars($data['gender']); ?></p>
      <p><strong>Course:</strong> <?php echo htmlspecialchars($data['course']); ?></p>
      <p><strong>Skills:</strong> <?php echo nl2br(htmlspecialchars($data['skills'])); ?></p>
    </div>

    <div class="actions">
      <a href="./index.html" class="btn-secondary">← Register Another</a>
      <button onclick="window.print()" class="btn-primary">Print Details</button>
    </div>
  </div>
</body>
</html>
