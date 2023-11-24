
<!DOCTYPE html>
<html>
<head>
  <title>Customer Feedback</title>
  <link rel="stylesheet" href="./css/feedback.css">
</head>
<body>

  <header>
    <h1>Customer Feedback</h1>
  </header>

  <main>
    <h2>Submit Feedback</h2>

    <form action="../controller/submit_feedback.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="feedback">Feedback:</label>
      <textarea id="feedback" name="feedback" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </main>

</body>
</html>
