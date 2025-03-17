<?php
header('Content-Type: application/json'); // JSON response for AJAX

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];
  $response = ["status" => "error", "errors" => []];

  // Validate & Sanitize Inputs
  $name = isset($_POST["name"]) ? htmlspecialchars(trim($_POST["name"])) : "";
  $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";

  if (empty($name)) {
    $errors[] = "Name is required.";
  }

  if (empty($email)) {
    $errors[] = "Email is required.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
  }

  // If errors exist, return JSON response
  if (!empty($errors)) {
    $response["errors"] = $errors;
    echo json_encode($response);
    exit();
  }

  // Email Headers
  $to = "jameslw2003@gmail.com";
  $subject = "LilWayneSource Sign Up: " . $name;
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  $headers .= "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Email Body
  $body = "Name: $name\n";
  $body .= "Email: $email\n";

  // Send Email
  if (mail($to, $subject, $body, $headers)) {
    $response["status"] = "success";
    $response["message"] = "Email sent successfully!";
  } else {
    $response["errors"][] = "Failed to send email.";
    error_log("Mail function failed for email: $email"); // Log error for debugging
  }

  echo json_encode($response);
} else {
  echo json_encode(["status" => "error", "errors" => ["Invalid request."]]);
}
