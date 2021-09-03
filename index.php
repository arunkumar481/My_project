<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <style>
        #b1{
            text-align: center;
        }

        #b2{
            text-align: center;
        }

        #b3{
            text-align: center;
        }
    </style>
</head>
<div id="b1">
<h3 style="color: blue;"> SORT STRING ALPHABETICAL DESCENDING ORDER(Z to A)</h3>

<?php

// PHP program to sort a string in descending
// order using library function
 
function descOrder($s)
{
    $s = str_split($s);
    rsort($s);
    echo implode('', $s);
}
 
// Driver Code
$s ="ashkmjhsdsiert";
descOrder($s); // function call

 
// This code is contributed by ita_c
?>
</div>




<body>

<!--using third question: -->
<script>
        function myfun() {
            var a = document.getElementById("mobilenumber").value;
            if (a == "") {
                document.getElementById("messages").innerHTML = "** Please fill Mobile Number";
                return false;
            }
            if (isNaN(a)) {
                document.getElementById("messages").innerHTML = "** onle Number are allowed";
                return false;
            }
            if ((a.length <10) && (a.length >13)) {
                document.getElementById("messages").innerHTML = "** Mobile Number must be 13  and 10 digits";
                return false;
            }
            if ((a.length >10) && (a.length >13)){
                document.getElementById("messages").innerHTML = "** Mobile Number must be 13 and 10 digits";
                return false;
            }
            if ((a.charAt(0) != "+") && (a.charAt(1) != 9) && (a.charAt(2) != 1)){
                document.getElementById("messages").innerHTML = "** Mobile Number must start with + or 9 or 1";
                return false;

            }
            
         
        }
    </script>

    <!--Write a dart program with a method to validate mobile number and print valid or invalid with below conditions:</h4>-->

    <h2 style="color: blue; text-align: center;">MOBILE NUMBER VALIDATION </h2>
    <form id="b2" onsubmit="return myfun()">
        MOBILE NUMBER : <input type="text" id="mobilenumber" value="">
        <span id="messages" style="color:red;"></span><br></br>
        <input type="submit" value="submit">
    </form></br>

    <div id="b3">
    <a href="index1.html">click </a>
    
    </div>

</body>
</html>
