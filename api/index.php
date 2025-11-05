<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Registration Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../style.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="form-header">
      <h1>Student Registration</h1>
      <p>Join our community today</p>
    </div>
    
    <form id="regForm" method="POST" action="/api/submit.php">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your full name" required />
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="your@email.com" required />
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" placeholder="+91 XXXXX XXXXX" required />
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="gender">Gender</label>
          <select name="gender" id="gender" required>
            <option value="">--Select--</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="course">Course Interested</label>
          <select name="course" id="course" required>
            <option value="">--Select--</option>
            <option>B.Tech Computer Engineering</option>
            <option>B.Tech Information Technology</option>
            <option>B.Tech Electronics</option>
            <option>B.Tech Mechanical</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="skills">Skills</label>
        <textarea name="skills" id="skills" rows="4" placeholder="e.g. C++, Java, Web Design, Python..."></textarea>
      </div>

      <button type="submit" id="submitBtn" class="btn-primary">Submit Registration</button>
      <p class="form-note">We'll never share your information with anyone.</p>
    </form>
  </div>

  <script src="../script.js"></script>
</body>
</html>
