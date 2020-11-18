<?php

$data = array (
  array ("Afiq", 2000,),
  array ("Shafiq", 4000),
  array ("Ibad", 5000),
  array ("Alifah", 5933),
  array ("Muzafar", 6000)
);

if (isset ($_POST['btn1']))
{
  $user = $_POST['users'];
  $payment = $_POST['amtToPay'];
  $discountedPayment = 0;
  $date = $_POST['paymentDate'];
  $time = $_POST['paymentTime'];
  $remainingAmt = 0;
  $discount = 1;


  if ($time >= '00:00' && $time <= '12:00' || $time >= '14:00' && $time <= '17:00' || $time >= '19:00' && $time <= '23:59')
  {
    $discount = 0;
    $discountedPayment = $payment * 0.90;
  }

  if ($user == "Afiq")
  {

    if ($discount == 0)
    {
      $remainingAmt = $data[0][1] - $discountedPayment;

      $data[0][2] = $payment;
      $data[0][3] = $date;
      $data[0][4] = $remainingAmt;

      print "User: ".$data[0][0]."<br>";
      print "Balance: RM".$data[0][1]."<br>";
      print "Payment: RM".$data[0][2]."<br>";
      print "Date of Transaction: ".$data[0][3]."<br>";
      print "Discount 10%: RM".$payment * 0.1."<br>";
      print "Final Payment: RM".$discountedPayment."<br>";
      print "Remaining Amount: RM".$data[0][4]."<br>";
    }

    else
    {
      $remainingAmt = $data[0][1] - $payment;

      $data[0][2] = $payment;
      $data[0][3] = $date;
      $data[0][4] = $remainingAmt;

      print "User: ".$data[0][0]."<br>";
      print "Balance: RM".$data[0][1]."<br>";
      print "Payment: RM".$data[0][2]."<br>";
      print "Date of Transaction: ".$data[0][3]."<br>";
      print "Remaining Amount: RM".$data[0][4]."<br>";
    }
  }

  elseif ($user == "Shafiq")
  {
    if ($discount == 0)
    {
      $remainingAmt = $data[1][1] - $discountedPayment;

      $data[1][2] = $payment;
      $data[1][3] = $date;
      $data[1][4] = $remainingAmt;

      print "User: ".$data[1][0]."<br>";
      print "Balance: RM".$data[1][1]."<br>";
      print "Payment: RM".$data[1][2]."<br>";
      print "Date of Transaction: ".$data[1][3]."<br>";
      print "Discount 10%: RM".$payment * 0.1."<br>";
      print "Final Payment: RM".$discountedPayment."<br>";
      print "Remaining Amount: RM".$data[1][4]."<br>";
    }

    else
    {
      $remainingAmt = $data[1][1] - $payment;

      $data[1][2] = $payment;
      $data[1][3] = $date;
      $data[1][4] = $remainingAmt;

      print "User: ".$data[1][0]."<br>";
      print "Balance: RM".$data[1][1]."<br>";
      print "Payment: RM".$data[1][2]."<br>";
      print "Date of Transaction: ".$data[1][3]."<br>";
      print "Remaining Amount: RM".$data[1][4]."<br>";
    }
  }

  elseif ($user == "Ibad")
  {
    if ($discount == 0)
    {
      $remainingAmt = $data[2][1] - $discountedPayment;

      $data[2][2] = $payment;
      $data[2][3] = $date;
      $data[2][4] = $remainingAmt;

      print "User: ".$data[2][0]."<br>";
      print "Balance: RM".$data[2][1]."<br>";
      print "Payment: RM".$data[2][2]."<br>";
      print "Date of Transaction: ".$data[2][3]."<br>";
      print "Discount 10%: RM".$payment * 0.1."<br>";
      print "Final Payment: RM".$discountedPayment."<br>";
      print "Remaining Amount: RM".$data[2][4]."<br>";
    }

    else
    {
      $remainingAmt = $data[2][1] - $payment;

      $data[2][2] = $payment;
      $data[2][3] = $date;
      $data[2][4] = $remainingAmt;

      print "User: ".$data[2][0]."<br>";
      print "Balance: RM".$data[2][1]."<br>";
      print "Payment: RM".$data[2][2]."<br>";
      print "Date of Transaction: ".$data[2][3]."<br>";
      print "Remaining Amount: RM".$data[2][4]."<br>";
    }
  }

  elseif ($user == "Alifah")
  {
    if ($discount == 0)
    {
      $remainingAmt = $data[3][1] - $discountedPayment;

      $data[3][2] = $payment;
      $data[3][3] = $date;
      $data[3][4] = $remainingAmt;

      print "User: ".$data[3][0]."<br>";
      print "Balance: RM".$data[3][1]."<br>";
      print "Payment: RM".$data[3][2]."<br>";
      print "Date of Transaction: ".$data[3][3]."<br>";
      print "Discount 10%: RM".$payment * 0.1."<br>";
      print "Final Payment: RM".$discountedPayment."<br>";
      print "Remaining Amount: RM".$data[3][4]."<br>";
    }

    else
    {
      $remainingAmt = $data[3][1] - $payment;

      $data[3][2] = $payment;
      $data[3][3] = $date;
      $data[3][4] = $remainingAmt;

      print "User: ".$data[3][0]."<br>";
      print "Balance: RM".$data[3][1]."<br>";
      print "Payment: RM".$data[3][2]."<br>";
      print "Date of Transaction: ".$data[3][3]."<br>";
      print "Remaining Amount: RM".$data[3][4]."<br>";
    }
  }

  elseif ($user == "Muzafar")
  {
    if ($discount == 0)
    {
      $remainingAmt = $data[4][1] - $discountedPayment;

      $data[4][2] = $payment;
      $data[4][3] = $date;
      $data[4][4] = $remainingAmt;

      print "User: ".$data[4][0]."<br>";
      print "Balance: RM".$data[4][1]."<br>";
      print "Payment: RM".$data[4][2]."<br>";
      print "Date of Transaction: ".$data[4][3]."<br>";
      print "Discount 10%: RM".$payment * 0.1."<br>";
      print "Final Payment: RM".$discountedPayment."<br>";
      print "Remaining Amount: RM".$data[4][4]."<br>";
    }

    else
    {
      $remainingAmt = $data[4][1] - $payment;

      $data[4][2] = $payment;
      $data[4][3] = $date;
      $data[4][4] = $remainingAmt;

      print "User: ".$data[4][0]."<br>";
      print "Balance: RM".$data[4][1]."<br>";
      print "Payment: RM".$data[4][2]."<br>";
      print "Date of Transaction: ".$data[4][3]."<br>";
      print "Remaining Amount: RM".$data[4][4]."<br>";
    }
  }


  if ($date == '2020-01-31' || $date == '2020-02-28' || $date == '2020-03-31' || $date == '2020-04-30' || $date == '2020-05-31' || $date == '2020-06-30' || $date == '2020-07-31' || $date == '2020-08-31' || $date == '2020-09-30')
  {
    $time1 = strtotime($date);
    $month = date("F",$time1);

    if ($user == "Afiq")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[0][3]." ".$time." -RM".$data[0][2];
    }

    elseif ($user == "Shafiq")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[1][3]." ".$time." -RM".$data[1][2];
    }

    elseif ($user == "Ibad")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[2][3]." ".$time." -RM".$data[2][2];
    }

    elseif ($user == "Alifah")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[3][3]." ".$time." -RM".$data[3][2];
    }

    elseif ($user == "Muzafar")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[4][3]." ".$time." -RM".$data[4][2];
    }
  }

  elseif ($date == '2020-10-31' || $date == '2020-11-30' || $date == '2020-12-31')
  {
    $time1 = strtotime($date);
    $month = date("F",$time1);

    if ($user == "Afiq")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[0][3]." ".$time." -RM".$data[0][2];
    }

    elseif ($user == "Shafiq")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[1][3]." ".$time." -RM".$data[1][2];
    }

    elseif ($user == "Ibad")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[2][3]." ".$time." -RM".$data[2][2];
    }

    elseif ($user == "Alifah")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[3][3]." ".$time." -RM".$data[3][2];
    }

    elseif ($user == "Muzafar")
    {
      print "<br>"."Month: ".$month."<br>";
      print "Balance: RM".$remainingAmt."<br>";
      print "Payment Details: "."<br>";
      print $data[4][3]." ".$time." -RM".$data[4][2];
    }
  }
}


elseif (isset ($_POST['btn2']))
{
  $user = $_POST['users'];
  $date =  $_POST['paymentDate'];
  $payment = $_POST['topUpAmt'];
  $method = $_POST['paymentMethod'];

  if ($user == "Afiq")
  {
    $data[0][2] = $payment;
    $data[0][3] = $date;

    if ($method == "Credit Card")
    {
      $data[0][4] = $data[0][1] + $data[0][2] + 0.5;
      print "User: ".$data[0][0]."<br>";
      print "Balance Before: RM".$data[0][1]."<br>";
      print "Payment: RM".$data[0][2]."<br>";
      print "Method: ".$method."<br>";
      print "Cash Back: RM0.50"."<br>";
      print "Balance After: RM".$data[0][4]."<br>";
    }

    else
    {
      $data[0][4] = $data[0][1] + $data[0][2];
      print "User: ".$data[0][0]."<br>";
      print "Balance Before: RM".$data[0][1]."<br>";
      print "Payment: RM".$data[0][2]."<br>";
      print "Method: ".$method."<br>";
      print "Balance After: RM".$data[0][4]."<br>";
    }
  }

  elseif ($user == "Shafiq")
  {
    $data[1][2] = $payment;
    $data[1][3] = $date;

    if ($method == "Credit Card")
    {
      $data[1][4] = $data[1][1] + $data[1][2] + 0.5;
      print "User: ".$data[1][0]."<br>";
      print "Balance Before: RM".$data[1][1]."<br>";
      print "Payment: RM".$data[1][2]."<br>";
      print "Method: ".$method."<br>";
      print "Cash Back: RM0.50"."<br>";
      print "Balance After: RM".$data[1][4]."<br>";
    }

    else
    {
      $data[1][4] = $data[1][1] + $data[1][2];
      print "User: ".$data[1][0]."<br>";
      print "Balance Before: RM".$data[1][1]."<br>";
      print "Payment: RM".$data[1][2]."<br>";
      print "Method: ".$method."<br>";
      print "Balance After: RM".$data[1][4]."<br>";
    }
  }

  elseif ($user == "Ibad")
  {
    $data[2][2] = $payment;
    $data[2][3] = $date;

    if ($method == "Credit Card")
    {
      $data[2][4] = $data[2][1] + $data[2][2] + 0.5;
      print "User: ".$data[2][0]."<br>";
      print "Balance Before: RM".$data[2][1]."<br>";
      print "Payment: RM".$data[2][2]."<br>";
      print "Method: ".$method."<br>";
      print "Cash Back: RM0.50"."<br>";
      print "Balance After: RM".$data[2][4]."<br>";
    }

    else
    {
      $data[2][4] = $data[2][1] + $data[2][2];
      print "User: ".$data[2][0]."<br>";
      print "Balance Before: RM".$data[2][1]."<br>";
      print "Payment: RM".$data[2][2]."<br>";
      print "Method: ".$method."<br>";
      print "Balance After: RM".$data[2][4]."<br>";
    }
  }

  elseif ($user == "Alifah")
  {
    $data[3][2] = $payment;
    $data[3][3] = $date;

    if ($method == "Credit Card")
    {
      $data[3][4] = $data[3][1] + $data[3][2] + 0.5;
      print "User: ".$data[3][0]."<br>";
      print "Balance Before: RM".$data[3][1]."<br>";
      print "Payment: RM".$data[3][2]."<br>";
      print "Method: ".$method."<br>";
      print "Cash Back: RM0.50"."<br>";
      print "Balance After: RM".$data[3][4]."<br>";
    }

    else
    {
      $data[3][4] = $data[3][1] + $data[3][2];
      print "User: ".$data[3][0]."<br>";
      print "Balance Before: RM".$data[3][1]."<br>";
      print "Payment: RM".$data[3][2]."<br>";
      print "Method: ".$method."<br>";
      print "Balance After: RM".$data[3][4]."<br>";
    }
  }

  elseif ($user == "Muzafar")
  {
    $data[4][2] = $payment;
    $data[4][3] = $date;

    if ($method == "Credit Card")
    {
      $data[4][4] = $data[4][1] + $data[4][2] + 0.5;
      print "User: ".$data[4][0]."<br>";
      print "Balance Before: RM".$data[4][1]."<br>";
      print "Payment: RM".$data[4][2]."<br>";
      print "Method: ".$method."<br>";
      print "Cash Back: RM0.50"."<br>";
      print "Balance After: RM".$data[4][4]."<br>";
    }

    else
    {
      $data[4][4] = $data[4][1] + $data[4][2];
      print "User: ".$data[4][0]."<br>";
      print "Balance Before: RM".$data[4][1]."<br>";
      print "Payment: RM".$data[4][2]."<br>";
      print "Method: ".$method."<br>";
      print "Balance After: RM".$data[4][4]."<br>";
    }
  }
}

 ?>
