<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Template</title>

  <link rel="stylesheet" href="../css/header-footer.css">
  <link rel="stylesheet" href="../css/indiv-funds.css">
</head>

<body>
  <!-- HEADER -->
  <?php $page='funds'; include '../header2.php';?>
  
  <div class="card-container wrapper">
    <div class="card">
      <h1 class="title">Canada Equity Fund</h1>
      <ul>
        <li>Morningstar RatingTM: 4 Stars</li>

        <li>Fund Managers: 
        Vijay Viswanathan, CFA, MBA 
        Jim Hall, CFA, MBA</li>

        <li>Fund Inception Date: June 3, 1991</li>
        <li>Fund Net Asset Value: $2,814.2 million</li>
        <li>Total Net Asset Value (Series A): $847.8 million</li>
        <li>Net Asset Value Per Unit: $65.02</li>
        <li>RRSP Eligibility: Yes</li>
        <li>Trading Expense Ratio1: 0.01%</li>
        </ul>
        <h3>What does this Fund Invest In?</h3>
        The Fund invests primarily in securities of larger capitalization Canadian companies. Treasury bills or short-term investments, not exceeding three years to maturity, may also be used from time to time.<br>

        <h3>Investor Suitability</h3>
        Investors seeking long-term, above average growth who can tolerate equity volatility. Medium to high risk.

        <h3>Investment Strategy</h3>
        In order to achieve its investment strategy objectives, the Manager systematically creates a broadly diversified portfolio of wealth-creating companies with excellent management teams bought at discounts to their intrinsic values. The Manager employs a highly disciplined, research-driven, bottom-up process and long-term holding period to allow for investor recognition or corporate growth, and to minimize transaction costs.
    </div>
    <div class="card">
      <img src="../Images/upGraph.png">
      <h2>This fund is increasing</h2>
    </div>
  </div>
  
 <!-- FOOTER -->
  <?php include "../footer2.php"?>

  <!-- LOAD JAVASCRIPT -->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/header-footer.js"></script>
</body>

</html>