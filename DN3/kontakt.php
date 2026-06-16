<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<title>Domača Naloga 3</title>
<link rel="icon" href="lion.ico">
<link rel="stylesheet" href="kontakt.css">
<script src="kontakt.js"></script>  
    
    
<!--BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>    
    
    
</head>
<body>

    
<!--PHP-->    
<?php include 'header.php'; ?>
    
    

    
    
    
<!--NAVBAR-->

<?php include 'menu-kontakt.php'; ?>
  
    
<!--FORM-->


<br>
    
<form class="px-5" onsubmit="return validateForm()">
  <div class="form-group">
    <label for="ime">Ime</label>
    <input type="name" class="form-control" id="ime" placeholder="ime" required>
  </div>

  <div class="form-group">
    <label for="priimek">Priimek</label>
    <input type="surname" class="form-control" id="priimek" placeholder="priimek" required>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
  </div>

  <div class="form-group">
    <label for="telefon">Telefon</label>
    <input type="phone" class="form-control" id="telefon" placeholder="031 735 788" required>
  </div>

  <div class="form-group">
    <label for="sporocilo">Sporočilo</label>
    <textarea class="form-control" id="sporocilo" rows="3" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Pošlji prijavo</button>
</form>



    
    <br>

    <?php include 'footer.php'; ?>  
       
    
    </body>
</html>