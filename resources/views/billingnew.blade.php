<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Order confirmation </title>
  <script>
    // Function to save content as a file (e.g., a .txt file)
    function saveContent() {
      // Create a Blob with the content
      const content = document.getElementById("contentToSave").innerText;
      const blob = new Blob([content], {
        type: "text/plain;charset=utf-8"
      });

      // Create a link element to trigger the download
      const link = document.createElement("a");
      link.href = URL.createObjectURL(blob);
      link.download = "content.txt"; // Default file name for the saved file
      link.click(); // Trigger the download
    }

    // Function to print a specific div element
    function printContent() {
      // Get the content of the div to print
      var printContents = document.getElementById("contentToPrint").innerHTML;

      // Create a new window to load the content for printing
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;

      // Print the content of the div
      window.print();

      // Restore the original content after printing
      document.body.innerHTML = originalContents;
    }


    // Function to generate a random invoice number
    function generateInvoiceNo() {
      const prefix = "INV"; // Prefix for the invoice
      const randomNum = Math.floor(100000 + Math.random() * 900000); // Generate a 6-digit random number
      return `${prefix}-${randomNum}`;
    }

    // Set the generated invoice number in the span
    document.getElementById("autoInvoiceNo").textContent = generateInvoiceNo();
  </script>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0;" />
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

    body {
      margin: 0;
      padding: 0;
      background: #e1e1e1;
    }

    div,
    p,
    a,
    li,
    td {
      -webkit-text-size-adjust: none;
    }

    .ReadMsgBody {
      width: 100%;
      background-color: #ffffff;
    }

    .ExternalClass {
      width: 100%;
      background-color: #ffffff;
    }

    body {
      width: 100%;
      height: 100%;
      background-color: #e1e1e1;
      margin: 0;
      padding: 0;
      -webkit-font-smoothing: antialiased;
    }

    html {
      width: 100%;
    }

    p {
      padding: 0 !important;
      margin-top: 0 !important;
      margin-right: 0 !important;
      margin-bottom: 0 !important;
      margin-left: 0 !important;
    }

    .visibleMobile {
      display: none;
    }

    .hiddenMobile {
      display: block;
    }

    @media only screen and (max-width: 600px) {
      body {
        width: auto !important;
      }

      table[class=fullTable] {
        width: 96% !important;
        clear: both;
      }

      table[class=fullPadding] {
        width: 85% !important;
        clear: both;
      }

      table[class=col] {
        width: 45% !important;
      }

      .erase {
        display: none;
      }
    }

    @media only screen and (max-width: 420px) {
      table[class=fullTable] {
        width: 100% !important;
        clear: both;
      }

      table[class=fullPadding] {
        width: 85% !important;
        clear: both;
      }

      table[class=col] {
        width: 100% !important;
        clear: both;
      }

      table[class=col] td {
        text-align: left !important;
      }

      .erase {
        display: none;
        font-size: 0;
        max-height: 0;
        line-height: 0;
        padding: 0;
      }

      .visibleMobile {
        display: block !important;
      }

      .hiddenMobile {
        display: none !important;
      }
    }
  </style>

</head>

<body>
  <!-- Header -->
  <div id="contentToPrint">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
      <tr>
        <td height="20"></td>
      </tr>
      <tr>
        <td>
          <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
            <tr class="hiddenMobile">
              <td height="40"></td>
            </tr>
            <tr class="visibleMobile">
              <td height="30"></td>
            </tr>

            <tr>
              <td>
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    <tr>
                      <td>
                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                          <tbody>
                            <tr>
                              <td align="left">
                                <img src="/images/MHlogoNw.png" alt="Logo" width="105" height="80" alt="logo" border="0" />
                              </td>
                            </tr>
                            <tr class="hiddenMobile">
                              <td height="40"></td>
                            </tr>
                            <tr class="visibleMobile">
                              <td height="20"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                Hello, MH CLUBS & RESORTS.
                                <br>Manokamna nagar, tirka piska nagri, Ranchi Jharkhand 835303 <br>
                                Mobile no : 8434608046, 7903476056
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                          <tbody>
                            <tr class="visibleMobile">
                              <td height="20"></td>
                            </tr>
                            <tr>
                              <td height="5"></td>
                            </tr>
                            <tr>
                            <tr>
                              <td style="font-size: 21px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right; padding-top: 20px;">
                                Invoice
                              </td>
                            </tr>



                            <tr>
                            <tr class="hiddenMobile">
                              <td height="50"></td>
                            </tr>
                            <tr class="visibleMobile">
                              <td height="20"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                Invoice No:
                                <?php
                                echo "MH" . str_pad($data->id, 6, 0, STR_PAD_LEFT);
                                ?>
                              </td>
                            </tr>
                            <tr>
                              <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                <small>
                                  <?php
                                  $now = \Carbon\Carbon::now();
                                  echo $now->format('d F Y');
                                  ?>
                                </small>
                              </td>
                            </tr>
                          </tbody>
                        </table>

                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <!-- /Header -->
    <!-- Order Details -->
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
      <tbody>
        <tr>
          <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
              <tbody>
                <tr>
                <tr class="hiddenMobile">
                  <td height="60"></td>
                </tr>
                <tr class="visibleMobile">
                  <td height="40"></td>
                </tr>
                <tr>
                  <td>
                    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                      <tbody>
                        <tr>
                          <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px 0;" align="left">
                            Total Bill Amount
                          </th> 
                          <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">
                            <small>PAYMENT TYPE<small>
                          </th>
                          <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="center">
                            <small>ADVANCE<small>
                          </th>
                          <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="right">
                            <small>ROOM TYPE <small>
                          </th>
                          <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="right">
                            <small>REMAINING AMT<small>
                          </th>
                        </tr>
                        <tr>
                          <td height="1" style="background: #bebebe;" colspan="5">

                          </td>
                        </tr>
                        <tr>
                          <td height="10" colspan="4"></td>
                        </tr>
                        <tr>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">
                            <small>{{$data->total_amt + $data->additional_amount}}<small>
                          </td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"><small>{{$data->payment_method}}</small></td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center"><small>{{$data->advance_paid}}</small></td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right"><small>{{$data->room_type}}<small></td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right"><small>{{$data->total_amt + $data->additional_amount - $data->advance_paid}}<small></td>
                        </tr>
                        <tr>
                          <td height="1" colspan="6" style="border-bottom:1px solid #e4e4e4"></td>
                        </tr>
                        <!-- <tr>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">Beats RemoteTalk Cable</td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"><small>MHDV2G/A</small></td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center">1</td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right">$29.95</td>
                        </tr>  -->
                        <tr>
                          <td height="1" colspan="5" style="border-bottom:1px solid #e4e4e4"></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td height="10"></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <!-- /Order Details -->
    <!-- Total -->
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
      <tbody>
        <tr>
          <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
              <tbody>
                <tr>
                  <td>

                    <!-- Table Total -->
                    <!-- <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                      <tbody>
                        <tr>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                            Subtotal
                          </td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;" width="80">
                            ₹ {{$data->payment_amt}}
                          </td>
                        </tr>
                        <tr>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                            Shipping &amp; Handling
                          </td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                            ₹ 0.00
                          </td>
                        </tr>
                        <tr>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                            <strong>Grand Total (Incl.Tax)</strong>
                          </td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                            <strong>₹ {{$data->room_total_amt}}</strong>
                          </td>
                        </tr>
                        <tr>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; "><small>TAX</small></td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; ">
                            <small>₹ 0.00</small>
                          </td>
                        </tr>
                      </tbody>
                    </table> -->
                    <!-- /Table Total -->

                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <!-- /Total -->
    <!-- Information -->
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
      <tbody>
        <tr>
          <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
              <tbody>
                <tr>
                <tr class="hiddenMobile">
                  <td height="60"></td>
                </tr>
                <tr class="visibleMobile">
                  <td height="40"></td>
                </tr>
                <tr>
                  <td>
                    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                      <tbody>
                        <tr>
                          <td>
                            <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col" style="margin-bottom: 20px;">
                              <tbody>
                                <tr>
                                  <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top;">
                                    <strong>BILLING INFORMATION</strong>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" height="10"></td>
                                </tr>
                                <tr>
                                  <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top;">
                                    <strong>COMPANY NAME :</strong> {{$data->company_name}} <br>
                                    <strong>GST NO. :</strong> {{$data->gst_no}} <br>
                                    <strong>VISITORS NAME :</strong> {{$data->name_of_visitor}} <br>
                                    <strong>CONTACT NO. :</strong> {{$data->contact1}} <br>
                                    <strong>ADDRESS : </strong> {{$data->address}} <br>
                                    <strong>ROOM TYPE : </strong> {{$data->room_type}} <br>
                                    <strong>ROOM NO : </strong> {{$data->room_no}} <br>

                                    <strong>CITY, STATE , POSTAL CODE : </strong>{{$data->city}}, {{$data->state}}, {{$data->postal_code}}<br>
                                    {{$data->country}}<br>
                                    <strong>EMAIL :</strong>{{$data->email}} <br>
                                  </td>
                                </tr>
                              </tbody>
                            </table>



                            <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                              <tbody>
                                <tr class="visibleMobile">
                                  <td height="20"></td>
                                </tr>
                                <tr>
                                  <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                    <strong>OTHER INFORMATION </strong>
                                </tr>
                                <tr>
                                  <td width="100%" height="10"></td>
                                </tr>
                                <tr>
                                  <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top;">
                                    <strong>PAYMENT TYPE : </strong> {{$data->payment_method}} <br>
                                    <!-- <strong>DATE OF ARRIVAL :</strong> {{$data->check_in_date}} <br> -->
                                    <!-- <strong>Date Of Departure : </strong> # <br> -->
                                    <!-- <strong>Room No. :</strong>{{$data->room_no}}<br> -->
                                    <strong>CHECKIN DATE: </strong> {{\Carbon\Carbon::parse($data->check_in_date)->format('d-m-Y')}} <br>
                                    <strong>CHECKIN TIME: </strong> {{\Carbon\Carbon::parse($data->check_in_time)->format('h:i:s a')}} <br>
                                    <strong>CHECKOUT DATE: </strong> {{\Carbon\Carbon::parse($data->check_out_date)->format('d-m-Y')}} <br>
                                    <strong>CHECKOUT TIME: </strong> {{\Carbon\Carbon::parse($data->check_out_time)->format('h:i:s a')}} <br>
                                    <strong>DAYS :</strong> {{$data->days}} <br>
                                    <strong>RATE :</strong> {{$data->rate}} <br>
                                    <strong>ADDITIONAL CHARGES :</strong> {{$data->additional_amount}} <br>
                                   <?php 
                                    $remainingAmt = $data->total_amt +$data->additional_amount - $data->advance_paid;
                                    if($data->payment_type == "FULL"){
                                      $label = "PAID AMOUNT";
                                    }
                                    else{
                                      $label = "ADVANCE PAID";
                                    }
                                    ?>
                                    <strong>{{$label}} :</strong> {{$data->advance_paid}} <br>
                                    <strong>REMAINING AMOUNT :</strong> {{$remainingAmt}} <br>
                                     <strong>{{$label}} IN WORDS: </strong>
                                    <p id="amtInWords"></p> <!-- here value is coming from javascript function just copy and paste it where u want to put -->
                                    <br>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <!-- <tr>
              <td>
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    <tr>
                      <td>
                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                          <tbody>
                            <tr class="hiddenMobile">
                              <td height="35"></td>
                            </tr>
                            <tr class="visibleMobile">
                              <td height="20"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                <strong>SHIPPING INFORMATION</strong>
                              </td>
                            </tr>
                            <tr>
                              <td width="100%" height="10"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                Sup Inc<br> Another Place, Somewhere<br> New York NY<br> 4468, United States<br> T: 202-555-0171
                              </td>
                            </tr>
                          </tbody>
                        </table>


                        <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                          <tbody>
                            <tr class="hiddenMobile">
                              <td height="35"></td>
                            </tr>
                            <tr class="visibleMobile">
                              <td height="20"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                <strong>SHIPPING METHOD</strong>
                              </td>
                            </tr>
                            <tr>
                              <td width="100%" height="10"></td>
                            </tr>
                            <tr>
                              <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                UPS: U.S. Shipping Services
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr> -->
                <tr class="hiddenMobile">
                  <td height="60"></td>
                </tr>
                <tr class="visibleMobile">
                  <td height="30"></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <!-- /Information -->
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
      <tr>
        <td>
          <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
            <tr>
              <td>
                <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                  <tbody>
                    <tr>
                      <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: center;">
                        Have a nice day.
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding-top: 20px; text-align: left; font-family: 'Open Sans', sans-serif;">
                        <span style="display: inline-block; width: 50%; height : 10px; text-align: left; font-size: 12px; color: #5b5b5b; margin-top: 10px;"> <strong> Manager Signature </strong> </span>
                        <span style="display: inline-block; width: 100%; text-align: right; font-size: 12px; color: #5b5b5b;"> <strong> Customer Signature </strong> </span>
                      </td>
                    </tr>

                    <tr>
                      <td style="text-align: right; padding-top: 20px;">
                        <!-- Save Button -->
                        <a href="javascript:void(0);" onclick="saveContent()" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; font-size: 14px; font-family: 'Open Sans', sans-serif; border-radius: 5px; margin-right: 10px;">
                          Save
                        </a>
                        <!-- Print Button -->
                        <a href="javascript:void(0);" onclick="printContent()" style="background-color: #2196F3; color: white; padding: 10px 20px; text-decoration: none; font-size: 14px; font-family: 'Open Sans', sans-serif; border-radius: 5px;">
                          Print
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr class="spacer">
              <td height="50"></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td height="20"></td>
      </tr>
    </table>
  </div>
  <!-- Hidden content to be saved or printed -->
  <div id="contentToSave" style="display: none;">
    Have a nice day.
  </div>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    let paidAmt = {{ $data->advance_paid }};

    let AmtInWords = numberToWords(paidAmt);
    console.log(AmtInWords)
    $('#amtInWords').val(AmtInWords)
    document.getElementById("amtInWords").innerHTML = AmtInWords;
  });

  // 

  function numberToWords(num) {
    if (num === 0) return "zero";

    const belowTwenty = [
      "", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine",
      "Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen",
      "Seventeen", "Eighteen", "Nineteen"
    ];

    const tens = [
      "", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"
    ];

    const scales = ["", "Thousand", "Million", "Billion"];

    function helper(n) {
      if (n === 0) return "";
      if (n < 20) return belowTwenty[n] + " ";
      if (n < 100) return tens[Math.floor(n / 10)] + " " + helper(n % 10);
      if (n < 1000) return belowTwenty[Math.floor(n / 100)] + " Hundred " + helper(n % 100);
      return "";
    }

    let result = "";
    let scaleIndex = 0;

    while (num > 0) {
      let chunk = num % 1000;
      if (chunk > 0) {
        result = helper(chunk) + scales[scaleIndex] + " " + result;
      }
      num = Math.floor(num / 1000);
      scaleIndex++;
    }

    return result.trim();
  }
</script>

</html>