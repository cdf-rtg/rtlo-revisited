<head>
    <title>Google</title>
    <link href="google.css" rel="stylesheet">
  </head>
  
  <body>
    <header>
      <nav>
        <ul id="nav_bar">
          <li class="nav-links" id="gmail"><a href="#">Gmail</a></li>
          <li class="nav-links"><a href="#">Images</a></li>
          <li id="sign_in"><a href="signin.php">Sign in</a></li>
        </ul>  
      </nav>  
    </header>  
    
    <!-- GOOGLE IMG -->  
    <div class="google">
      <a id="google_logo"><img src="https://cdn.freebiesupply.com/images/large/2x/google-logo-transparent.png" width="300" 
        height="100"/></a>
    </div>
    
    <!-- FORM SEARCH -->  
    <div class="form">  
      <form action="" method=POST>
        <label for="form-search"></label>
        <input type="text" id="form-search" name="googleinput" placeholder="Search Google or type a URL">
     
    </div>  
    
    <!-- BUTTONS -->
    <div class= "buttons">  
      <input type="submit" name="searchBtn" value="Google Search" id="google_search">
      <input type="submit" value="I'm Feeling Lucky" id="im_feeling_lucky">
    </div>
    </form>  
    <!-- FOOTER -->
    <footer>
        <ul class="footer-left">
          <li><a href="#">Advertising</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">About</a></li> 
        </ul>
        <ul class="footer-right">    
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Settings</a></li>
        </ul>       
    </footer>      
  </body>

  <?php 
  require('dbconnect.php'); // connects to the database
  $search_URL="http://www.google.com/search?q=";
   // stores the front part of a google search result URL in a variable 
  if(isset($_POST['searchBtn'])){   // if search button is clicked   
    $user_input = $_POST['googleinput']; // stores user input in search bar in variable 
    $query = $con->prepare("INSERT INTO `searchbar`(`user_input`) VALUES (?)"); // inserts user input in table
    $query->bind_param('s', $user_input); // bind the parameters 
    $query->execute(); // execute sql query 
    header("location: ".$search_URL.$user_input); // redirect to google search results
  } 
  ?>

  