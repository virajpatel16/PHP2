<html>
    <head>
        <style type="text/css">


 .container{
    left: 25%;
    padding: 100px;
    text-align: center;
    border: 1px solid green;
    align-items: center;
    margin: 0;
      padding: 0;
      box-sizing: border-box;
    
 }
 input,select{
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
 border-radius: 4px;


    box-sizing: border-box;

}
input[type=submit]{
    width: 5%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    
  
    border-radius: 4px;
    cursor: pointer;
}
        </style>

   </head>
        <body>
            <?php

            $ans;
            if(isset($_POST['sub'])){
                $num1=$_POST['n1'];
                $num2=$_POST['n2'];

                $oprnd=$_POST['sub'];

                if($oprnd=="+"){
                    $ans=$num1+$num2;
                }
                elseif($oprnd=="-"){
                    $ans=$num1-$num2;
                }
                elseif($oprnd=="*"){
                    $ans=$num1*$num2;
                }
                elseif($oprnd=="/"){
                    $ans=$num1/$num2;
                }
                elseif($oprnd=="%"){
                    $ans=$num1%$num2;
                }

            } ?>

            <div class="container">
                <form method="POST">
                    <h1>simple calculator</h1>
                    <br>
                    Fisrt number: <input name="n1" value="">
                    <br>
                    secound number: <input name="n2" value="">
                
                    <br>
                    <input type="submit" name="sub" value="+">
                    
                    <input type="submit" name="sub" value="-">
                    
                    <input type="submit" name="sub" value="*">
                    <input type="submit" name="sub" value="/">
                    <input type="submit" name="sub" value="%">
                    <br>
                    Result:<input type="text"  value="<?php echo $ans; ?>"><br>
                </form>
            </div>

        </body>
    </head>
</html>