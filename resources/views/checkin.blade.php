<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Billing Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .header {
      display: none; /* Hide on screen */
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .billing-form {
      width: 600px;
      background-color: #fff;
      padding: 30px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      margin: 20px;
    }
    .billing-form h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }
    .billing-form .form-group {
      margin-bottom: 20px;
    }
    .billing-form label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      font-weight: bold;
    }
    .billing-form input[type="text"],
    .billing-form input[type="email"],
    .billing-form input[type="number"],
    .billing-form input[type="date"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      box-sizing: border-box;
    }
    .billing-form .form-group.half {
      width: 48%;
      display: inline-block;
    }
    .billing-form .form-group.half:first-child {
      margin-right: 4%;
    }
    .billing-form .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }
    .billing-form button {
      width: 48%;
      padding: 14px;
      background-color: #5A67D8;
      border: none;
      border-radius: 6px;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .billing-form button:hover {
      background-color: #4c51bf;
    }
    /* Print styling */
    @media print {
      .header {
        display: block; /* Show header in print */
      }
      body * {
        visibility: hidden;
      }
      .billing-form, .billing-form * {
        visibility: visible;
      }
      .billing-form {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        margin: 0;
        padding: 0;
      }
      button {
        display: none; /* Hide buttons in print preview */
      }
    }
  </style>
</head>
<body>
  <!-- Header with Company Name for Print Preview Only -->
  <div class="header">MH CLUB AND RESORTS </div>

  <div class="billing-form" id="billingForm">
    <h2>Billing Information</h2>
    <form id="form" action="#" method="post">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" required>
      </div>
      <div class="form-group half">
        <label for="state">State</label>
        <input type="text" id="state" name="state" required>
      </div>
      <div class="form-group half">
        <label for="zip">Zip Code</label>
        <input type="number" id="zip" name="zip" required>
      </div>
      <div class="form-group">
        <label for="card-number">Credit Card Number</label>
        <input type="text" id="card-number" name="card-number" required>
      </div>
      <div class="form-group half">
        <label for="expiry-date">Expiry Date</label>
        <input type="date" id="expiry-date" name="expiry-date" required>
      </div>
      <div class="form-group half">
        <label for="cvv">CVV</label>
        <input type="number" id="cvv" name="cvv" required>
      </div>
      <div class="button-container">
        <button type="button" onclick="printForm()">Print Preview</button>
        <button type="submit">Submit Payment</button>
      </div>
    </form>
  </div>

  <script>
    function printForm() {
      window.print();
    }
  </script>
</body>
</html>
