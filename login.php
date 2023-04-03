<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconne ct" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center ">
    <main class="w-[380px] h-[600px] bg-white/10 rounded-2xl">
        <header class="flex justify-center items-center border-b border-red-600/70 bg-red-500 rounded pt-2 pb-2">        
            <h1 class="text-3xl text-white ">LOGIN FORM</h1>
        </header>
        <section class="h-[500px] overflow-y-auto my-7 mx-4 ">
            <nav class=" flex ml-3 gap-6 mt-3 pb-4">
    <form action="formget.php" method="get"> 
    <div class="flex  display-flex gap-2 mt-5 md-20
     ">
    <h1  class="  text-white w-[150px] items-center rounded flex gap-2 "><img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" class="flex w-10 h-10" alt=""> User</h1>
        </div>   
     <input class="rounded mb-2 p-1 w-[330px] bg-white/40" type="text" name="usr"><br>
     <div class="flex  display-flex gap-2 

     ">
    <h1  class="  text-white w-[150px] items-center rounded flex gap-2 "><img src="https://cdn-icons-png.flaticon.com/512/1592/1592485.png" class="flex w-8  h-8" alt=""> Password</h1>
        </div> 
    <input class="rounded mt-1 p-1 w-[330px] bg-white/40"type="text" name="pss"><br>
    <a class="flex  mt-3 mb-2 text-white hover:text-white/50"  href="">Singup now</a>
    <input type="submit" name="submit" class="bg-red-500 px-4 py-2 text-white ml-2 w-[320px] justify-center  rounded flex gap-2 hover:bg-red-600/70 hover:scale-105" value="SUBMIT">
    <h1 class="flex justify-center mt-3 mb-2 text-white" >Or login with</h1>
    <div class="flex display-flex gap-2 mr-2 mt-5
     justify-center">
    <a  class="bg-blue-800 px-4 py-2 text-white w-[150px]   rounded flex gap-2 hover:bg-blue-900/70 hover:scale-105"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/768px-Facebook_f_logo_%282019%29.svg.png" class="flex w-6 h-6" alt=""> Facebook</a>
    <a  class="bg-pink-800 px-4 py-2 text-white w-[150px]   rounded flex gap-2 hover:bg-pink-900/70 hover:scale-105"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png" class="flex w-6 h-6" alt=""> Instagram</a>
        </div> 
        <div class="flex  display-flex gap-2 mr-2
     justify-center">
        <h1 class="flex justify-center mt-3 mb-2 text-white" >Don't have account?</h1>
        <a class="flex justify-center mt-3 mb-2 text-blue-800 hover:text-blue-900/50"  href="">Singup now</a>
        </div>
    </form>
</nav>    
        </section>  
    </main>
    <script src="js/tailwind-3.2.4.js"></script>

</body>

</html>