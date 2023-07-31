<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="data.php" style="margin-top: 100px;margin-bottom: 80px; text-align: center;">
        <label>
            First name:
        </label>
            <input type="text" name="fname" required="">
      

        <br>
        <br>
        <label>
            last name:
        </label>
            <input type="text" name="lname" required="">
       

        <br>
        <br>
        <label>
            conatact :
        </label>
            <input type="number" name="num" required="">
       
        
        <br>
        <br>
        Gender : 
        <input type="radio" name="gender" value="famele" >Famale
        <input type="radio" name="gender" value="male" >Male
        <input type="radio" name="gender" value="other" >other
        <br>
        <br>
        E-mail:<input type="email" name="email" required="">
        <br><br>
        City:<select name="city" id="city" required="">
             <option value="">----select-----</option>
             <option value="surat">surat</option>
             <option value="delhi">delhi</option>
             <option value="jaipur">jaipur</option>
             <option value="bangluru">bangluru</option>

        </select>
        State:<select name="state" id="STATE" required="">
            <option value="">----select-----</option>
            <option value="gujarat">gujarat</option>
            <option value="rajasthan">rajsthan</option>
            <option value="uk">uk</option>
            <option value="mp">mp</option>

       </select>
       <br>
       <br>
       <input type="submit" name="sub" value="Submit">
    </form>
    
</body>

</html>