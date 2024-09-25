<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="income.css">

  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  
</head>

<body onload="toggleFields()">


  <nav class="sidebar close">
    <header>
    
        <div class="text logo-text">
          <h1><i class='bx bxl-codepen' ></i><span class="name">AMS</h1>
        </div>
      

      <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
      <div class="menu">

        <li class="search-box">
          <i class='bx bx-search icon'></i>
          <input type="text" placeholder="Search ...">
        </li>

        <ul class="menu-links">
          <li class="nav-link">
            <a href="#">
              <i class='bx bx-home-alt icon'></i>
              <span class="text nav-text">Home</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
              <i class='bx bx-bar-chart-alt-2 icon'></i>
              <span class="text nav-text">Entries</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
              <i class='bx bx-bell icon'></i>
              <span class="text nav-text">Notifications</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
                <i class='bx bxs-report icon'></i>
              <span class="text nav-text">Report</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
                <i class='bx bxs-cog icon' ></i>
              <span class="text nav-text">Settings</span>
            </a>
          </li>

          
        </ul>
      </div>

      <div class="bottom-content">
        <li class="">
          <a href="#">
            <i class='bx bx-log-out icon'></i>
            <span class="text nav-text">Logout</span>
          </a>
        </li>

      </div>
    </div>

  </nav>

  <section class="home">
    <div class="container">
      <header>Income</header>
    </div>
    <div class="form">
      <form action="incomecon.php" method="post">
          <div class="form first">
            <div class="fields">
              <div class="input-field">
                  <label>Date : </label>
                  <input type="date" placeholder="Enter the date" required>
              </div>
  

              <div class="input-field">
                  <label for="paymentStatus">Payment Status :<br></label>
                  <select id="paymentStatus" onchange="toggleFields()">
                      <option value="FP">Full Received</option>
                      <option value="PL">Received from Previous Lenders</option>
                      <option value="OA">Receivable Amount</option>
                  </select>

                  <div id="amountField">
                        <label for="amount">Amount :<br></label>
                        <input type="number" id="amount" value="Enter the amount" min="1" required>
                        <span id="amountError" style="color:red; display:none;">*Choose a payment status first</span>
                  </div>
                      
                  <div id="otherFields" style="display:none;">
                        <label for="paidAmount">Received Amount :<br></label>
                        <input type="number" id="paidAmount" onblur="autofillWithZero(this)" value="0" min="0">
                  </div>

               </div>

          </div>
          <button type="submit">Submit</button>
          </div>
      </form>
    </div>

  </section>

  
  
  <script src="income.js"></script>
  
</script>

</body>

</html>