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
      text-transform: uppercase;
      /* Make text uppercase */
      background-color: yellow;
      /* Highlight with yellow background */
      font-weight: bold;
      /* Make text bold for emphasis */
      padding: 2px;
      /* Add some padding for better readability */
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
                <strong>{{$data->name_of_visitor}}</strong><br>
                {{$data->address}}<br>
                {{$data->city}}, {{$data->state}}, {{$data->postal_code}}<br>
                {{$data->country}}<br>
                Phone: {{$data->contact1}}<br>
                Email: {{$data->email}}
              </address>
            </div>
            <div class="col-12 col-sm-6 col-md-8">
              <h4 class="row">
                <span class="col-6">Invoice #</span>
                <span class="col-6 text-sm-end">INT-001</span>
              </h4>
              <h4 class="row">
                <span class="col-6">VISITOR'S NAME : </span>
                <span class="col-6 text-sm-end ">{{$data->name_of_visitor}}</span>
              </h4>
              <h4 class="row">
                <span class="col-6">ADDRESS : </span>
                <span class="col-6 text-sm-end">{{$data->address}}</span>
              </h4>
              <div class="row">
                <span class="col-6 ">VISITOR'S NAME :</span>
                <span class="col-6 text-sm-end">{{$data->name_of_visitor}}</span>
                <span class="col-6">ADDRESS</span>
                <span class="col-6 text-sm-end">{{$data->address}}</span>
                <span class="col-6">TIME OF ARRIVAL : </span>
                <span class="col-6 text-sm-end">{{$data->check_in_date}}</span>
                <span class="col-6">DATE OF DEPARTURE : </span>
                <span class="col-6 text-sm-end">#</span>
                <span class="col-6">TIME OF DEPARTUTE: </span>
                <span class="col-6 text-sm-end">#</span>
                <span class="col-6">ROOM NO. : </span>
                <span class="col-6 text-sm-end">{{$data->room_no}}</span>
                <span class="col-6">DAY'S : </span>
                <span class="col-6 text-sm-end">1</span>
                <span class="col-6">RATE : </span>
                <span class="col-6 text-sm-end">{{$data->rate}}</span>
                <span class="col-6">ROOM RENT : </span>
                <span class="col-6 text-sm-end">{{$data->rate}}</span>
                <span class="col-6">FOOD CHARGE'S : </span>
                <span class="col-6 text-sm-end">0</span>
                <span class="col-6">OTHER CHARGE'S : </span>
                <span class="col-6 text-sm-end">0</span>
                <span class="col-6">TAX AMOUNT : </span>
                <span class="col-6 text-sm-end">{{$data->rate}}</span>
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
                      <th scope="row">{{$data->rate}}</th>
                      <td>CASH</td>
                      <td class="text-end">0</td>
                      <td class="text-end">{{$data->rate}}</td>
                      <td class="text-end">{{$data->rate}}</td>
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