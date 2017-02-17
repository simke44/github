<!DOCTYPE html>

<html >
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

    <form action="racunaj.php" method="post">

        <label>prvi operand:</label>
        <input type="text" name="prvi"/>

         <select name="operacija">
             <option>+</option>
             <option>-</option>
             <option>*</option>
             <option>/</option>
         </select>

        <label>drugi operand:</label>
        <input type="text" name="drugi" />

        <input type="submit" name="izracunaj" />
    </form>

</body>
</html>