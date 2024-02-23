

 <head>
  <link rel="stylesheet" href="style.css" type="text/css">
 </head>

 <body>

  <form action="" method="POST">
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
              max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 2px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .author {
                text-align: center;
            }
            h1 {
                text-align: center;
                color: #333;
            }
      .person {
          text-align: left;
          font-size:24px;
          color: #333;
      }
      .outerstuff {
          text-align: left;
          font-size:16px;
          color: #333;
      }
            label {
                display: block;
                margin: 10px 0;
            }
            input[type="text"],
            textarea {
                width: 100%;
                padding: 5px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            input[type="submit"] {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 3px;
            }
            input[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Welcome to my Neighborhood</h1>
            <p class="author">By Rick Mace</p>
            <p>Next, As Mr. Cracker passed by Mrs. Chink's house, he noticed her struggling to carry a bag of half eaten dogs. Without hesitation, he offered his assistance. "Good morning, Mrs. Chink! Lovely day, isn't it? Allow me to lend a hand with those half eaten dogs you have there!"</p>
            <p>Next, As Mr. Cracker passed by Mrs. Chink's house, he noticed her struggling to carry a bag of half eaten dogs. Without hesitation, he offered his assistance. "Good morning, Mrs. Chink! Lovely day, isn't it? Allow me to lend a hand with those half eaten dogs you have there!"</p>
            <p>Finally, As Mr. Cracker passed by Mrs. Chink's house, he noticed her struggling to carry a bag of half eaten dogs. Without hesitation, he offered his assistance. "Good morning, Mrs. Chink! Lovely day, isn't it? Allow me to lend a hand with those half eaten dogs you have there!"</p>
            <form action="#" method="POST">
              <label> Name: 
                <input type="text" name="Name" class="Input" style="width: 225px" required>
               </label>
              <label> Comment:
                <textarea id="message" name="Comment" rows="4" required></textarea>
              </label>
              <input type="submit" name="Submit" value="Submit Comment" class="Submit">
            </form>
        </div>
    <html>
   
   <br><br>
   

  </form>

 </body>

</html>


<?php

 if($_POST['Submit']){
  //print "<h1>Your comment has been submitted!</h1>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<div class='container'> <h1 class='person'>".$Name."</h1><p class='outerstuff'>".$Comment."<p></div>".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<h1><br>Reviews:<h1>".fread($read, 1024);
 fclose($read);

?>
<style>
  body{
   font: 20px Verdana;
  }


  .Input{
   font: 20px Verdana;
   border: 1px solid orange;
   width: 300px;
  }

  .Submit{
   font: 20px Verdana;
   border: 1px solid orange;
   width: 300px;
  }
</style>
