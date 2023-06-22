<!DOCTYPE html>
<html>
  <head>
    <title>My PHP Pages</title>
      <style>
          table {
              border-collapse: collapse;
              width: 100%;
          }
          th, td {
              text-align: left;
              padding: 8px;
              border: 1px solid black;
          }
          th {
              background-color: #ccc;
          }
      </style>
  </head>
  <body style="text-align: center;">
    <h1>Hussein Ahmed (20100830)</h1>
    <h1>echo  vs  print</h1>
    <br>
    <body>
    <h1>Comparison between Echo and Print Statements in PHP</h1>
    <table>
        <tr>
            <th></th>
            <th>echo Statement</th>
            <th>print Statement</th>
        </tr>
        <tr>
            <td>Output</td>
            <td>Can output multiple values separated by commas</td>
            <td>Can output only one value at a time</td>
        </tr>
        <tr>
            <td>Return Value</td>
            <td>Does not have a return value</td>
            <td>Returns 1</td>
        </tr>
        <tr>
            <td>Usage</td>
            <td>Used more frequently</td>
            <td>Used less frequently</td>
        </tr>
        <tr>
            <td>Speed</td>
            <td>Faster than print</td>
            <td>Slower than echo</td>
        </tr>
        <tr>
            <td>Example</td>
            <td>echo "Hello", " ", "World!";</td>
            <td>print "Hello World!";</td>
        </tr>
    </table>
    <br>
    <p>Click <a href="hussein_ahmed.php"> <strong>Here</strong> </a> to go to comparison (compiled Vs interpreted) page.</p>
  </body>
</html>