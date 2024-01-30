<html>
  <head>
    <title>Generated pass</title>
    <link rel="stylesheet" type="text/css" href="pass.css">  
     <link href="https://fonts.googleapis.com/css2?family=Font+Name&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php 
      $word = htmlspecialchars($_POST['word']);
      $association = htmlspecialchars($_POST['association']);
      $onername = htmlspecialchars($_POST['onername']);
      $admission= htmlspecialchars($_POST['admission']);
      $slogan = htmlspecialchars($_POST['slogan']);
      $bgcolor = htmlspecialchars($_POST['bgcolor']);
      $bdcolor = htmlspecialchars($_POST['bdcolor']);
      $font = htmlspecialchars($_POST['font']);
      $fontcolor = htmlspecialchars($_POST['fontcolor']);
      $bdwidth = htmlspecialchars($_POST['bdwidth']);
  
      $file = $_FILES['pit'];
      $filename = $file['name'];
      $tempPath = $file['tmp_name'];
      move_uploaded_file($tempPath, 'uploads/' . $filename);

      $admter = explode(',',$admission);

      for ($i = 0; $i < count($admter); $i++) {
          ${'admter' . ($i+1)} = $admter[$i];
      }
  

      echo "
      <span style='color: $fontcolor; font-family: $font, sans-serif;'>
        <div style='background-color: $bgcolor; border-color: $bdcolor; border-width: $bdwidth;'>
          <h1>$word pass</h1>
          <img id='uplpho' src='uploads/$filename' alt='Uploaded Image'>
        </div>
        <div style='background-color: $bgcolor; border-color: $bdcolor; border-width: $bdwidth;'>
          <h1 id='slogan'>$slogan</h1>
          <p>Association:</p>
          <p>Sponsered by $association Association</p>
          <p id='appcia'>Approved by chairman:Approved</p><input type='checkbox' checked>
          <p>Name of owner:$onername</p>
        </div>
        <div style='background-color: $bgcolor; border-color: $bdcolor; border-width: $bdwidth;'>
          <table style='color: $fontcolor;'>
            <tr>
              <td>
                <h3>Admitted by:</h3>
              </td>
              <td id='bold' rowspan='2' style='text-shadow: 2px 3px 1px $bdcolor;'>
                A<br>C<br>C<br>E<br>P<br>T<br>E<br>D
              </td>
              <td id='tick' rowspan='2'>
                <img id='img2' src='files/tick.jpg'>
              </td>
            </tr>
            <tr>          
              <td class='aep'>
        ";

        for ($i = 0; $i < count($admter); $i++) {
          echo "<p>" . ${'admter' . ($i + 1)} . "</p>";
        }

        echo "
          </td>
          </tr>
          </table>
          </div>
          <div style='background-color: $bgcolor; border-color: $bdcolor; border-width: $bdwidth;'>
            <h1 id='reg'>Officially Registered</h1>
            <img id='fin' src='files/register.jpg'>
          </div>
        </span>
        ";
    ?>
    <script src="script.js"></script>
  </body>
</html>