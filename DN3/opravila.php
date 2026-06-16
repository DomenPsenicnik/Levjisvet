<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<title>Domača Naloga 3</title>
<link rel="icon" href="lion.ico">
<link rel="stylesheet" href="opravila.css"> 

    

    
</head>
<body>

<!--PHP-->    
<?php include 'header.php'; ?>
    
    

<!--NAVBAR-->

<?php include 'menu-opravila.php'; ?>
  
   
    
    <!--TO DO LIST-->
    

    
    <div class="list">
        <div class="todo-app">
            <h2 >TO-DO SPISEK</h2>
                <div class="vrsta">
                <input type="text" id="input-box" placeholder="Dodaj opravilo">
                   <button class="button" onclick="AddTask()">DODAJ</button> 
                </div>
                <ul id="list-container">
                    
                <!--   <li class="klik">Task 1</li>
                    
                    <li class="task">Task 2</li>
                    
                    <li class="task">Task 3</li> -->
                </ul>
        </div>    
    </div>
    
    
    <!--BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    

    
<?php include 'footer.php'; ?>    
       
   <script src="opravila.js"></script>  
    
    </body>
</html>