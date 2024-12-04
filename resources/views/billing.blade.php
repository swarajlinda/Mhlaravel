<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
    /* Target all spans inside the row class */
    .row span {
      text-transform: uppercase; /* Make text uppercase */
      background-color: yellow; /* Highlight with yellow background */
      font-weight: bold; /* Make text bold for emphasis */
      padding: 2px; /* Add some padding for better readability */
    }
  </style>
</head>
<body>
    <!-- Invoice 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 col-xl-8 col-xxl-7">
        <div class="row gy-3 mb-3">
          <div class="col-6">
            <h2 class="text-uppercase text-endx m-0">Invoice</h2>
          </div>
          <div class="col-6">
            <a class="d-block text-end" href="#!">
              <img src="images/MHlogoNw.png" class="img-fluid" alt="BootstrapBrain Logo" width="135" height="44">
            </a>
          </div>
          <div class="col-12">
            <h4>From</h4>
            <address>
              <strong>MH CLUB & RESORTS</strong><br>
              Manokamna nagar <br>
              Tikra toli Piska nagri<br>
              Ranchi Jharkhand 835303<br>
              Phone: 8434608046<br>
              Email: mhclubandresorts@gmail.com
            </address>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12 col-sm-6 col-md-4">
            <h4>Bill To</h4>
            <address>
              <strong>Mason Carter</strong><br>
              7657 NW Prairie View Rd<br>
              Kansas City, Mississippi, 64151<br>
              United States<br>
              Phone: (816) 741-5790<br>
              Email: email@client.com
            </address>
          </div>
          <div class="col-12 col-sm-6 col-md-8">
            <h4 class="row">
              <span class="col-6">Invoice #</span>
              <span class="col-6 text-sm-end">INT-001</span>
            </h4>
            <h4 class="row">
              <span class="col-6" >VISITOR'S NAME : </span>
              <span class="col-6 text-sm-end " >INT-001</span>
            </h4>
            <h4 class="row">
              <span class="col-6">ADDRESS : </span>
              <span class="col-6 text-sm-end">INT-001</span>
            </h4>
            <div class="row">
              <span class="col-6 ">VISITOR'S NAME :</span>
              <span class="col-6 text-sm-end">786-54984</span>
              <span class="col-6">ADDRESS</span>
              <span class="col-6 text-sm-end">#9742</span>
              <span class="col-6">TIME OF ARRIVAL : </span>
              <span class="col-6 text-sm-end">12/10/2025</span>
              <span class="col-6">DATE OF DEPARTURE : </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
              <span class="col-6">TIME OF DEPARTUTE: </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
              <span class="col-6">ROOM NO. : </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
              <span class="col-6">DAY'S : </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
              <span class="col-6">RATE : </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
              <span class="col-6">ROOM RENT : </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
              <span class="col-6">FOOD CHARGE'S : </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
              <span class="col-6">OTHER CHARGE'S : </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
              <span class="col-6">TAX AMOUNT : </span>
              <span class="col-6 text-sm-end">18/12/2025</span>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="text-uppercase">Total Bill Amount</th>
                    <th scope="col" class="text-uppercase">PAYMENT TYPE </th>
                    <th scope="col" class="text-uppercase text-end">LESS:ADVANCE</th>
                    <th scope="col" class="text-uppercase text-end">ROUND OFF</th>
                    <th scope="col" class="text-uppercase text-end">NET PAYBLE AMT</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">2</th>
                    <td>Console - Bootstrap Admin Template</td>
                    <td class="text-end">75</td>
                    <td class="text-end">150</td>
                    <td class="text-end">150</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Planet - Bootstrap Blog Template</td>
                    <td class="text-end">29</td>
                    <td class="text-end">29</td>
                    <td class="text-end">29</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Hello - Bootstrap Business Template</td>
                    <td class="text-end">32</td>
                    <td class="text-end">128</td>
                    <td class="text-end">128</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Palette - Bootstrap Startup Template</td>
                    <td class="text-end">55</td>
                    <td class="text-end">55</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="text-end">Subtotal</td>
                    <td class="text-end">362</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="text-end">VAT (5%)</td>
                    <td class="text-end">18.1</td>
                  </tr>
                  <tr>
                    <td colspan="3" class="text-end">Shipping</td>
                    <td class="text-end">15</td>
                  </tr>
                  <tr>
                    <th scope="row" colspan="3" class="text-uppercase text-end">Total</th>
                    <td class="text-end">$495.1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-end">
            <button type="submit" class="btn btn-primary mb-3">Download Invoice</button>
            <button type="submit" class="btn btn-danger mb-3">Submit Payment</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>