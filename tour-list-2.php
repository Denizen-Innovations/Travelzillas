
<?php
require("session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travelzillas – Creating Mermories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon.ico">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="#000" name="msapplication-TileColor">
    <meta content="#000" name="theme-color">
    <link rel="stylesheet" href="../css/button.css">
   </head>

<body>
    <div class="container">
        <div class="header">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="header__top">
                        <!--<div class="tel">
                            <a href="tel:0000000000">+1 1235 6789 10</a>
                        </div>
                        <div class="email">
                            <a href="mailto:info@hellodigi.ru">info@hellodigi.ru</a>
                        </div>-->
                        <div class="socials">
                            <a href="https://www.facebook.com/travelzillas" target="_blank" class="a facebook"></a>
                            <a href="https://www.instagram.com/travelzillas" target="_blank" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="https://www.twitter.com/travelzillas" target="_blank" class="a twitter"></a>
                           <?php if(isset($_SESSION['uname']))
         {
             ?>
               <button  style="width:auto;"><a href="logout.php">LOGOUT</a></button>
               <?php }
              else{ ?>
              
           
           
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">

    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avtar.jfif" alt="Avatar" class="avatar">
     
    </div>
    
    <div class="container1">
      <label for="uname"><b>Username or Email</b></label>
      <input type="text" placeholder="Enter Username/email" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      
      <span class="psw"> <a href="#">Forgot Password?</a></span>
    </div>
    
  </form>
</div>




<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGNUP</button>

<?php }?>
  


<div id="id02" class="modal">
  
  <form class="modal-content" action="signup.php" method=post>
 
    <div class="container1">
      <h1><b><font size=20 color=blue>Sign Up</font size></b></h1><br>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

         <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="name" required>


      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


            




                        </div>
                        
                    </div>







                    <div class="header__bottom">
                        <a href="/" class="logo"><img src="img/logo_w.png" height="40px" width="200px"></a>
                        <div class="menu" id="js-menu">
                            <div class="close"></div>
                            <div class="scroll">
                                <a class="current">Home</a>
                                <div class="scroll_wrap">
                                    <ul>
                                        <li><a href="/" class="active">Home</a></li>
                                        <li class="dropdown_li">
                                            <a href="#">
                                                <span>Pages</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li class="dropdown_li">
                                                        <a href="#">
                                                            <span>Search</span>
                                                        </a>
                                                        <div class="submenu">
                                                            <ul>
                                                                <li><a href="search-results.php">Search results</a></li>
                                                                <li><a href="search-results-not-found.php">No results</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="contacts.php">Contact</a></li>
                                                    <li><a href="gallery.php">Gallery</a></li>
                                                    <li><a href="coming-soon.php">Coming soon</a></li>
                                                    <li><a href="404.php">404 Page</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown_li">
                                            <a href="tour-list.php">
                                                <span>Tour List</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="tour-list.php">Tour List</a></li>
                                                    <li><a href="tour-list-2.php">Tour List 2</a></li>
                                                    <li><a href="tour-list-3.php">Tour List 3</a></li>
                                                    <li><a href="tour-list-4.php">Tour List 4</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="destinations.php">Destinations</a></li>
                                        <li class="dropdown_li">
                                            <a href="single.php">
                                                <span>Tour Page</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="single.php">Tour Page</a></li>
                                                    <li><a href="single-dark.php">Tour Page Dark</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown_li">
                                            <a href="blog-list.php">
                                                <span>Blog</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <!--<li><a href="blog-list.php">Blog</a></li>-->
                                                    <li><a href="blog-list-2.php">Blog</a></li>
                                                    <!--<li><a href="blog-single.php">Blog Single</a></li>-->
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom">
                                    <!--<div class="tel">
                                        <a href="tel:+11235678910">+1 1235 6789 10</a>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:info@hellodigi.ru">info@hellodigi.ru</a>
                                    </div>-->
                                    <button type="button">Log In</button>
                                    <button type="button">Sign Up</button>
                                    <div class="socials">
                                        <div class="links">
                                            <a href="https://www.facebook.com/travelzillas" target="_blank" class="fb"></a>
                                            <a href="https://www.instagram.com/travelzillas" target="_blank" class="instagram"></a>
                                            <a href="#" class="pinterest"></a>
                                            <a href="https://www.twitter.com/travelzillas" target="_blank" class="twitter">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_link" id="search_link"></div>
                        <div class="mobile_btn" id="mobile_btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs">
            <div class="wrap">
                <div class="wrap_float">
                    <a href="#">Home</a>
                    <span class="separator">/</span>
                    <a href="#" class="current">Tour Full With Frame Left Sidebar</a>
                </div>
            </div>
        </div>
        <div class="page_head" style="background-image: url(img/header5.jpg)">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title">Search Tours</div>
                    <div class="search_tour">
                        <div class="search_tour_form">
                            <div class="fields__block">
                                <div class="fields">
                                    <div class="field">
                                        <div class="label">Keywords</div>
                                        <div class="field_wrap keywords">
                                            <input type="text" class="input">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="label">Activity</div>
                                        <div class="field_wrap select_field">
                                            <select name="tour-activity">
                                                <option value="">Any</option>
                                                <option value="city-tours">City Tours</option>
                                                <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                                <option value="family-friendly-tours">Family Friendly Tours</option>
                                                <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                                <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                                <option value="outdoor-activites">Outdoor Activites</option>
                                                <option value="relaxation-tours">Relaxation Tours</option>
                                                <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="label">Destination</div>
                                        <div class="field_wrap select_field">
                                            <select name="tour-activity">
                                                <option value="">Any</option>
                                                <option value="city-tours">City Tours</option>
                                                <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                                <option value="family-friendly-tours">Family Friendly Tours</option>
                                                <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                                <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                                <option value="outdoor-activites">Outdoor Activites</option>
                                                <option value="relaxation-tours">Relaxation Tours</option>
                                                <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="label">Duration</div>
                                        <div class="field_wrap select_field">
                                            <select name="tour-activity">
                                                <option value="">Any</option>
                                                <option value="city-tours">City Tours</option>
                                                <option value="cultural-thematic-tours">Cultural &amp; Thematic Tours</option>
                                                <option value="family-friendly-tours">Family Friendly Tours</option>
                                                <option value="holiday-seasonal-tours">Holiday &amp; Seasonal Tours</option>
                                                <option value="indulgence-luxury-tours">Indulgence &amp; Luxury Tours</option>
                                                <option value="outdoor-activites">Outdoor Activites</option>
                                                <option value="relaxation-tours">Relaxation Tours</option>
                                                <option value="wild-adventure-tours">Wild &amp; Adventure Tours</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="label">Date</div>
                                        <div class="field_wrap calendar_field">
                                            <input type="text" class="calendar js_calendar">
                                        </div>
                                    </div>
                                </div>
                                <button class="submit"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top_destination">
                <div class="section_content popular_destination__content">
                    <div class="wrap">
                        <div class="wrap_float">
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world10.jpg)"></div>
                                        <span>Greece</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world1.jpg)"></div>
                                        <span>Crimea</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world2.jpg)"></div>
                                        <span>Turkey</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world3.jpg)"></div>
                                        <span>Ireland</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world4.jpg)"></div>
                                        <span>Cyprus</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world5.jpg)"></div>
                                        <span>Thailand</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world6.jpg)"></div>
                                        <span>Brazil</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world7.jpg)"></div>
                                        <span>Maldives</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world8.jpg)"></div>
                                        <span>Egypt</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="item">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content image" style="background-image: url(img/world9.jpg)"></div>
                                        <span>Tunisia</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_content left-sidebar">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="main">
                        <div class="most_popular__section">
                            <a href="single.php" class="slider_item" style="background-image: url(img/prevput3.jpg)">
                                <div class="slider_item__content">
                                    <div class="rating">
                                        <div class="stars">
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="reviews_count">
                                            (2 Reviews)
                                        </div>
                                    </div>
                                    <h3 class="title">
                                        Seychelles | from $300
                                    </h3>
                                    <p class="description">
                                        6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                    </p>
                                    <div class="days">
                                        <span>7 days</span>
                                    </div>
                                </div>
                            </a>

                            <a href="single.php" class="slider_item" style="background-image: url(img/prevput4.jpg)">
                                <div class="slider_item__content">
                                    <div class="rating">
                                        <div class="stars">
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="reviews_count">
                                            (2 Reviews)
                                        </div>
                                    </div>
                                    <h3 class="title">
                                        Autumn in Japan | $3,500
                                    </h3>
                                    <p class="description">
                                        6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                    </p>
                                    <div class="days">
                                        <span>7 days</span>
                                    </div>
                                </div>
                            </a>

                            <a href="single.php" class="slider_item" style="background-image: url(img/prevput5.jpg)">
                                <div class="slider_item__content">
                                    <div class="rating">
                                        <div class="stars">
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="reviews_count">
                                            (2 Reviews)
                                        </div>
                                    </div>
                                    <h3 class="title">
                                        A tour of the Islands | $3,500
                                    </h3>
                                    <p class="description">
                                        6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                    </p>
                                    <div class="days">
                                        <span>7 days</span>
                                    </div>
                                </div>
                            </a>
                            <a href="single.php" class="slider_item" style="background-image: url(img/prevput6.jpg)">
                                <div class="slider_item__content">
                                    <div class="rating">
                                        <div class="stars">
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="reviews_count">
                                            (2 Reviews)
                                        </div>
                                    </div>
                                    <h3 class="title">
                                        Paris | $3,500
                                    </h3>
                                    <p class="description">
                                        6 excursions to the main cities of the country, admire the beautiful autumn gardens
                                    </p>
                                    <div class="days">
                                        <span>7 days</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="pagination">
                            <ul>
                                <li class="prev"><a href="#"></a></li>
                                <li class="current"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li class="next"><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="latest_tours">
                            <div class="block-title">
                                Latest Tours
                            </div>
                            <div class="list">
                                <a href="single.php" class="_item">
                                    <div class="left">
                                        <div class="img" style="background-image: url(img/sidebar7.jpg);"></div>
                                        <div class="tag discount">20% off</div>
                                    </div>
                                    <div class="right">
                                        <div class="_title">A tour of the Islands</div>
                                        <div class="cost">
                                            <b>$3,500</b>
                                            <span class="old_cost">$3,880</span>
                                        </div>
                                        <div class="time">7 days</div>
                                    </div>
                                </a>

                                <a href="single.php" class="_item">
                                    <div class="left">
                                        <div class="img" style="background-image: url(img/sidebar1.jpg);"></div>
                                        <div class="tag new">new</div>
                                    </div>
                                    <div class="right">
                                        <div class="_title">America</div>
                                        <div class="cost">
                                            <b>$3,500</b>
                                        </div>
                                        <div class="time">7 days</div>
                                    </div>
                                </a>

                                <a href="single.php" class="_item">
                                    <div class="left">
                                        <div class="img" style="background-image: url(img/sidebar2.jpg);"></div>
                                    </div>
                                    <div class="right">
                                        <div class="_title">Seychelles</div>
                                        <div class="cost">
                                            <b>$3,500</b>
                                            <span class="old_cost">$3,880</span>
                                        </div>
                                        <div class="time">7 days</div>
                                    </div>
                                </a>

                                <a href="single.php" class="_item">
                                    <div class="left">
                                        <div class="img" style="background-image: url(img/sidebar3.jpg);"></div>
                                        <div class="tag discount">20% off</div>
                                    </div>
                                    <div class="right">
                                        <div class="_title">Autumn in Japan</div>
                                        <div class="cost">
                                            <b>$3,500</b>
                                            <span class="old_cost">$3,880</span>
                                        </div>
                                        <div class="time">7 days</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tour_category">
                            <div class="block-title">
                                Tour Category
                            </div>
                            <ul>
                                <li><a href="#">Outdoor Activites</a></li>
                                <li><a href="#">City Tours</a></li>
                                <li><a href="#">Cultural & Thematic Tours</a></li>
                                <li><a href="#">Indulgence & Luxury Tours</a></li>
                                <li><a href="#">Family Friendly Tours</a></li>
                                <li><a href="#">Holiday & Seasonal Tours</a></li>
                            </ul>
                        </div>
                        <div class="recent_articles">
                            <div class="block-title">
                                Recent Articles
                            </div>
                            <div class="list">
                                <a href="blog-single.php" class="_item">
                                    <div class="img" style="background-image: url(img/sidebar4.jpg);"></div>
                                    <div class="info">
                                        <div class="_title">
                                            Pack wisely before traveling
                                        </div>
                                        <div class="date">JUNE 6/2019</div>
                                    </div>
                                </a>
                                <a href="blog-single.php" class="_item">
                                    <div class="img" style="background-image: url(img/sidebar5.jpg);"></div>
                                    <div class="info">
                                        <div class="_title">
                                            Pack wisely before traveling
                                        </div>
                                        <div class="date">JUNE 6/2019</div>
                                    </div>
                                </a>
                                <a href="blog-single.php" class="_item">
                                    <div class="img" style="background-image: url(img/sidebar6.jpg);"></div>
                                    <div class="info">
                                        <div class="_title">
                                            Pack wisely before traveling
                                        </div>
                                        <div class="date">JUNE 6/2019</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="question-block">
                            <div class="_title">Get a Question?</div>
                            <div class="_text">
                                Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.
                            </div>
                            <div class="tel">
                                <a href="#">+1 1235 6789 10</a>
                            </div>
                            <div class="email">
                                <a href="#">info@hellodigi.ru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer_top">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer_head_mobile">
                            <div class="logo"><img src="img/logo_w.png" height="40px" width="200px"></div>
                            <div class="text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </div>
                        </div>
                        <div class="footer_top_menu">
                            <ul>
                                <li><a href="/" class="active">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="tour-list.php">Tour List</a></li>
                                <li><a href="destinations.php">Destinations</a></li>
                                <li><a href="single.php">Date & Pricing</a></li>
                                <li><a href="blog-list-2.php">Blog</a></li>
                            </ul>
                        </div>
                        <div class="socials">
                            <a href="https://www.facebook.com/travelzillas" target="_blank" class="a facebook"></a>
                            <a href="https://www.instagram.com/travelzillas" target="_blank" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="https://www.twitter.com/travelzillas" target="_blank" class="a twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_center">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer_center_left">
                            <a href="/" class="logo"><img src="img/logo_w.png" height="40px" width="200px"></a>
                            <div class="text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </div>
                        </div>
                        <div class="footer_center_menu">
                            <ul>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Family Friendly Tours</a></li>
                                <li><a href="#">Outdoor Activites</a></li>
                                <li><a href="#">Relaxation Tours</a></li>
                                <li><a href="#">City Tours</a></li>
                                <li><a href="#">Holiday & Seasonal Tours</a></li>
                                <li><a href="#">Cultural & Thematic Tours</a></li>
                                <li><a href="#">Wild & Adventure Tours</a></li>
                            </ul>
                        </div>
                        <div class="footer_center_right">
                            <div class="_title">CONTACTS</div>
                            <div class="text">
                                <p>Head Office: <b>F - 213/D, Old MB Road, Maharaja BUilding, New Delhi.</b> </p>
                                <p>Branch Office: <b>4th Floor, Shop No.-50B, Roshpa Tower, Ranchi.</b> </p>
                                <p>Phone: <a href="tel:+919205576025">+91 92055 76025</a></p>
                                <p><a href="mailto:info@travelzillas.com">info@travelzillas.com</a></p>
                            </div>
                        </div>
                        <div class="mobile_socials">
                            <a href="https://www.facebook.com/travelzillas" target="_blank" class="a facebook"></a>
                            <a href="https://www.instagram.com/travelzillas" target="_blank" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="https://www.twitter.com/travelzillas" target="_blank" class="a twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                Copyright 2021 <a href="#">Travelzillas</a> | All Right Reserved | Designed By <a href="http://vocl4locl.com/" target="_blank">Denizen Innovations</a>
            </div>
        </div>
    </div>

    <div class="search_form" id="search_form">
        <div class="wrap">
            <div class="wrap_float">
                <input type="text" class="input" placeholder="Search...">
                <button type="submit" class="submit"></button>
                <div class="close"></div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <div style="display: none;">
        <div class="modal modal_book_now" id="book-now">
            <div class="modal_wrap">
                <div class="modal-head">
                    <img src="img/vput2.jpg" class="image-cover" alt="">
                </div>
                <div class="modal-body">
                    <div class="tags">
                        <div class="tag discount">20% off</div>
                        <div class="tag new">New</div>
                    </div>
                    <div class="modal-title">
                        America, San Francisco | $3,500
                    </div>
                    <div class="fields">
                        <div class="field half">
                            <label class="label" for="name-2">Full Name*</label>
                            <div class="input_wrap">
                                <input type="text" class="input" id="name-2">
                            </div>
                        </div>
                        <div class="field half">
                            <label class="label" for="email-2">Email Address*</label>
                            <div class="input_wrap">
                                <input type="email" class="input" id="email-2">
                            </div>
                        </div>
                        <div class="field half">
                            <label class="label" for="date-2a">Travel Date*</label>
                            <div class="input_wrap calendar-field">
                                <input type="text" class="input js_calendar" id="date-2a">
                            </div>
                        </div>
                        <div class="field half">
                            <p class="label">Person*</p>
                            <div class="input_wrap">
                                <input type="text" class="input" id="date-2">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="enquiry-2">Your Enquiry*</label>
                            <div class="textarea_wrap">
                                <textarea class="textarea" id="enquiry-2"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn submit">Sumbit</button>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <script defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_HERE&callback=initMap"></script>
    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/jquery-ui.min.js"></script>
    <script defer src="js/slick.min.js"></script>
    <script defer src="js/jquery.arcticmodal.min.js"></script>
    <script defer src="js/lightgallery.js"></script>
    <script defer src="js/spincrement.min.js"></script>
    <script defer src="js/scripts.min.js"></script>
</body>

</html>