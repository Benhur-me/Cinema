<?php
session_start();
?>
<html>
    
    <head>
        <style>
            .logout{
                font-size: 34px;
                border: px solid black;
                padding: 20px;
                text-decoration: none;
                background: #fb8a3e;
                color: #fff;
                border-radius: 20px;
            }
        </style>
    <link rel="stylesheet" href="style.css" />
        <body>
            <h2>Welcome <?php echo $_SESSION['Username'];?> to cinema booking</h2>
            
    <div class="movie-container">
      <h1>
        <label>Select a movie</label>
      </h1>
      <select id="movie">
        <option value="10">Shriek ($10)</option>
        <option value="12">King of Jungle ($12)</option>
        <option value="8">Boss Baby ($8)</option>
        <option value="9">Wonder Woman ($9)</option>
      </select>
    </div>
    <div><h3>Available movies</h3></div>

    <table>
      <tr>
        <td><img src="shriek.jpg" height="100em" width="80px" /></td>
        <td><img src="king.jpg" height="100em" width="80px" /></td>
        <td><img src="baby.jpg" height="100em" width="80px" /></td>
        <td><img src="Wonder.jpg" height="100em" width="80px" /></td>
      </tr>
      <tr>
        <td>shriek</td>
        <td>King jungle</td>
        <td>Boss Baby</td>
        <td>Wonder Woman</td>
      </tr>
    </table>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Free</small>
      </li>
      <li>
        <div class="seat selected1"></div>
        <small>Selected</small>
      </li>
      <!-- <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li> -->
    </ul>

    <h3 class="text">
      You have selected <span id="count">0</span> seats for a price of $<span
        id="price"
        >0</span
      >
    </h3>

    <div class="container">
      <div class="screen"><img class="welcome" src="wlcome.jpg" alt="" /></div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
    </div>

    <script src="script.js" type="text/javascript"></script>
            <a class="logout" href="logout.php">logout</a>
        </body>
    </head>
</html>