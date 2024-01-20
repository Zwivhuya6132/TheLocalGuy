<?php 

    $page = 'my account';
    require_once 'header.php';
    
?>

<body>
    <div class="track-orders-container">
      <h1 class="track-orders-title">Track My Orders</h1>
      <table class="track-orders-table">
        <thead>
          <tr>
            <th>Order Number</th>
            <th>Date</th>
            <th>Status</th>
            <th>Tracking Number</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="#">1001</a></td>
            <td>01/01/2022</td>
            <td class="status">Shipped</td>
            <td><a href="#">1234567890</a></td>
          </tr>
          <tr>
            <td><a href="#">1002</a></td>
            <td>02/01/2022</td>
            <td class="status">Delivered</td>
            <td><a href="#">9876543210</a></td>
          </tr>
          <tr>
            <td><a href="#">1003</a></td>
            <td>03/01/2022</td>
            <td class="status">In Transit</td>
            <td><a href="#">2468101214</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>

  <?php
    include_once 'footer.php';
  ?>