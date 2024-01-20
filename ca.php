<!DOCTYPE html>
<html>
  <head>
    <title>Track My Orders - My Online Store</title>
    <style>
      /* Track My Orders Page Styles */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      .track-orders-container {
        max-width: 800px;
        margin: auto;
        padding: 50px;
        border: 2px solid #317773;
        border-radius: 5px;
      }

      .track-orders-title {
        font-size: 36px;
        font-weight: bold;
        color: #317773;
        margin-bottom: 30px;
      }

      .track-orders-table {
        width: 100%;
        border-collapse: collapse;
      }

      .track-orders-table th,
      .track-orders-table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #E2D1F9;
      }

      .track-orders-table th {
        font-size: 20px;
        font-weight: bold;
        color: #317773;
      }

      .track-orders-table td {
        font-size: 18px;
        color: #333;
      }

      .track-orders-table td.status {
        font-weight: bold;
        color: #e74c3c;
      }

      .track-orders-table td a {
        color: #317773;
        text-decoration: none;
        font-weight: bold;
      }

      .track-orders-table td a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
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
</html>
