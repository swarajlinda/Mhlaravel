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
                                <br> Thank you for choosing MH CLUBS & RESORTS for your stay.
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
                              <td style="font-size: 21px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
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
                          <td height="1" style="background: #bebebe;" colspan="5"></td>
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
                          <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                        </tr>
                        <!-- <tr>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;" class="article">Beats RemoteTalk Cable</td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"><small>MHDV2G/A</small></td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="center">1</td>
                          <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;" align="right">$29.95</td>
                        </tr> -->
                        <tr>
                          <td height="1" colspan="5" style="border-bottom:1px solid #e4e4e4"></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td height="20"></td>
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
                                  <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top;">
                                    <strong>BILLING INFORMATION</strong>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" height="10"></td>
                                </tr>
                                <tr>
                                  <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top;">
                                    <strong>Company Name :</strong> {{$data->company_name}} <br>
                                    <strong>GST No :</strong> <br>
                                    <strong>Visitors Name :</strong> {{$data->name_of_visitor}} <br>
                                    <strong>Contact No:</strong> {{$data->contact1}} <br>
                                    <strong>Address: </strong> {{$data->address}} <br>
                                    <strong>Room Type: </strong> {{$data->room_type}} <br>
                                    <strong>Room No: </strong> {{$data->room_no}} <br>
                                    <strong>CheckIn Date: </strong> {{\Carbon\Carbon::parse($data->check_in_date)->format('d-m-Y')}} <br>
                                    <strong>CheckIn Time: </strong> {{\Carbon\Carbon::parse($data->check_in_time)->format('h:i:s a')}} <br>
                                    <strong>CheckOut Date: </strong> {{\Carbon\Carbon::parse($data->check_out_date)->format('d-m-Y')}} <br>
                                    <strong>CheckOut Time: </strong> {{\Carbon\Carbon::parse($data->check_out_time)->format('h:i:s a')}} <br>
                                    <strong>City, State , Postal Code :</strong>{{$data->city}}, {{$data->state}}, {{$data->postal_code}}<br>
                                    {{$data->country}}<br>
                                    <strong>Email :</strong>{{$data->email}} <br>
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
                                  <td style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                    <strong>PAYMENT METHOD</strong> {{$data->payment_method}}
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" height="10"></td>
                                </tr>
                                <tr>
                                  <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top;">
                                    <strong>Date Of Arrival :</strong> {{$data->check_in_date}} <br>
                                    <!-- <strong>Date Of Departure : </strong> # <br> -->
                                    <strong>Room No. :</strong>{{$data->room_no}}<br>
                                    <strong>Days :</strong> {{$data->days}} <br>
                                    <strong>Rate :</strong> {{$data->rate}} <br>
                                    <strong>Additional Charges :</strong> {{$data->additional_amount}} <br>
                                    <strong>Advance Paid :</strong> {{$data->advance_paid}} <br>
                                    <strong>Remaining Amount :</strong> {{$data->total_amt +$data->additional_amount - $data->advance_paid}} <br>
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
                      <td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                        Have a nice day.
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

</html>