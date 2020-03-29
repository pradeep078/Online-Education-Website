<!DOCTYPE html>
<html>
<head>
	<title></title>
  <title>Home2</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




	<style type="text/css">
		body{
			background-color: white;
		}




/*----------------------------------------------------------------------------------------------------------*/

.dropbtn1 {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown1 {
    position: relative;
    display: inline-block;
}

.dropdown1-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown1-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown1-content a:hover {background-color: #f1f1f1;}
.dropdown1:hover .dropdown1-content {display: block;}
.dropdown1:hover .dropbtn1 {background-color: #3e8e41;}



.dropbtn{
  background-color: transparent;
    color: skyblue;
   
    font-size: 10px;
    border: none;
    margin-top: 0px;
  }
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0.3,0.4,0.2,0.6);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 15px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}











.imgcover{
position: relative;
color: white;
}
.bottom-left {
    position: absolute;
    bottom: 600px;
}
.container {
    position: relative;
    width: 100%;
  
}

.boxheader{
      width: 100%;
      height: 80px;
      background: white;
      margin-top: -20px;
    }




.container .header{
  
    padding: 10px;
    text-align: center;
    height: 70px;
    width: 100%;
}

.container .header:hover{
  background-color: white;
}

.container img {
    width: 100%;
    height: auto;
}

.container .header .btn {
    position: absolute;
    top: 200px;
    left: 10%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: transparent;
    color: white;
    font-size: 10px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container .header .btn:hover {
    background-color: white;
}


.header1{
  width: 100%;
  height: 100px;
  color: black;
}


.box6{
width: 100%;
height: 600px;
border:2px solid black;
background-color: black;

}



.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
  border-radius: 4px;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
  border-radius: 4px;
}

.fa-google {
  background: #dd4b39;
  color: white;
  border-radius: 4px;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
  border-radius: 4px;
}

.fa-youtube {
  background: #bb0000;
  color: white;
  border-radius: 4px;
}

.fa-instagram {
  background: #125688;
  color: white;
border-radius: 4px;

}



.fa-rss {
  background: #ff6600;
  color: white;
  border-radius: 4px;

}
/*----------------------------------------------------------------------------------------------------------*/














.boxed5{
  font-size: 550x;
  border: 1px solid black;
  margin-left: 200px;
    
  padding-left: 100px;
}
.boxed5:hover img{
  transform: scale(1.2,1.2);
  transition: all 1.6 ease;
}


.boxed7{
  font-size: 550x;
  width: 550px;
  height: 450px;
  border: 1px solid black;
  margin-left: 200px;
  padding-left: 100px;
}
.boxed7:hover img{
  transform: scale(1.2,1.2);
  transition: all 1.6 ease;
}

.boxed8{
  font-size: 550x;
  width: 550px;
  height: 450px;
  margin-left: 200px;
  border: 1px solid black;
    margin-left: 200px;
  padding-left: 100px;
}
.boxed8:hover img{
  transform: scale(1.2,1.2);
  transition: all 1.6 ease;
}

.boxed9{
  font-size: 550x;
  width: 550px;
  height: 450px;
  border: 1px solid black;
   margin-left: 200px;
  padding-left: 100px;
}
.boxed9:hover img{
  transform: scale(1.2,1.2);
  transition: all 1.6 ease;
}

.boxed13{
  box-sizing: auto;
margin-top: 20px;
}


/* star rating _______*/

div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }
label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}
 
input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }
label.star:before {
  content: '\f006';

  font-family: FontAwesome;
}
/*-------------------------------------------------------------------------------------------------------------*/













	</style>
</head>
<body>

<!-- 1st header box -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

 <div class="nevigation">
  <div class="dropdown" style="margin-top: -10px" >
<button class="dropbtn"><i class="fa fa-list" style="margin-left: -10px;"></i></button>
  <div class="dropdown-content">
    <a href="pk.html">Notes</a>
    <a href="notes.html">Technical sort QA</a>
    <a href="video portal.html">Videos</a>
    <a href="entertainment.html">Entertainment</a>
  </div>

</div>

    </div>
<li class="active" style="margin-left: 100px;margin-top: -60px;"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;margin-top: -70px;margin-left: 200px">Contact:+91 969 480 7325 <span class="caret"></span></a>



          <ul class="dropdown-menu" style="margin-left: 200px;font-size: 17px">
            <li role="separator" class="divider"></li>
            <li><a href="#">Main:+91 969 480 7325 </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="contactus.html">All number & Location</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 



          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> &nbsp &nbsp &nbsp &nbsp &nbsp
           <ul class="nav navbar-nav navbar-center">
      <li><a href="logout.php"><button>Logout</button></a></li>
      </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<div class="boxheader">
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
           <a href="index.php"><img src="logo1.jpg" style="width: 200px;height: 60px;margin-left: 0px"></a>  
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

            <div class="dropdown1" style="margin-left: 0px;margin-top: 15px">
               <button class="dropbtn1">Resources</button>
                <div class="dropdown1-content" style="font-size: 18px;width: 200px">
                          <a href="pk.html">Notes</a>
                          <a href="notes.html">Technical sort QA</a>
                          <a href="video.html">Videos</a>
                  
                          <a href="entertainment.html">Entertainment</a>
  </div>
            </div>

           
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <div class="dropdown1" style="margin-top: 15px;font-size: 17px">
             <button class="dropbtn1">About</button>
                <div class="dropdown1-content">
                  <a href="aboutusnew.html">About Us</a>
                  <a href="contactus.html">Contact Us</a>
                </div>
          </div>
   </div>


<!--------------------------------------------------------------------------------------------------------------->
<hr>


































 





<div class="boxed5" style="width: 950px;height:450px">
<h4 style="color: blue;padding-left: 500px;font-size: 30px">Notes</h4>
<hr width="400px" style="margin-top: -20px;margin-left: -100px;background-color: blue">
<img src="notes.jpg" style="height: 350px;width: 380px;margin-left: -60px;margin-top: 10px;border-radius: 20px">
<a href="pk.html">
  <p style="margin-top: -100px;padding-left: 500px">Click here to see notes</p>  
</a>
</div><br><br><br><br>




<div class="boxed7" style="width: 950px;height:450px">
<h3 style="color: blue;padding-left: 500px;font-size: 40px">Technical Short Answer</h3>
  <hr width="398px" style="margin-left: -100px;margin-top: -30px;">
  <img src="q.jpg" style="height: 150px;width: 100px;margin-left: -80px;border-radius: 20px">
  <a href="notes.html"><p style="margin-top: -150px;padding-left: 500px;font-size: 30px">Click here to read technical short question answer</p></a>
    </div>
</div><br><br><br><br></div><br></div>



<div class="boxed8" style="width: 950px;height:450px">
<h3 style="color: blue;padding-left: 40px">Videos</h3>
  <hr width="398px" style="margin-left: -100px;margin-top: -20px">
  <img src="question.jpg" style="height: 150px;width: 100px;margin-left: -80px;border-radius: 20px">
  <a  href="video portal.html">click to see videos</a>
</div>
</div>
<br><br><br><br><br><br><br>




<div class="boxed9" style="width: 950px;height:450px">
<h6 style="color: blue;font-size: 30px;">Entertainment</h6>
<hr width="398px" style="margin-top: -40px;margin-left: -100px;">
<img src="game.jpg"style="margin-left: -80px;height: 150px;width: 100px;border-radius: 20px">
 <p style="margin-top: -150px;margin-left: 50px"><a href="entertainment.html">games</a></p>
</div>
</div>
 </div>
<br><br>







































<!--footer -->

<div class="box6" style="background-color: #00004d">

        <p style="margin-left: 650px;font-size: 25px;color: white;margin-top: 40px">SUPPORT</p>
        <p style="margin-left: 650px;font-size: 20px;color: gray"><a href="contact.html">Support Center</a> </p>


        <p style="margin-left: 150px;color: black;font-size: 30px;margin-top: -80px;color: white">ONLINE SYSTEM</p>
        <p style="margin-left: 150px;padding-right: 970px;font-size: 20px;color: gray">OS.Com is a leading learning-based development platform with multiple content. We make it easy for everyone to learn a knoweldgeble topic of subjects.<br><br>
         Increase your study, check your knoweldge, set up an online quize or just test out new ideas. The Online system  has everything you need to increase a fully personalized, high-quality knoweldge with efficient manner.</p>

           <p style="margin-left: 950px;font-size: 25px;color: white;margin-top: -380px">SOCIAL PROFILES</p>
<!-- Add font awesome icons -->
         <a href="https://www.facebook.com/profile.php" class="fa fa-facebook" style="margin-left: 940px"></a>
          <a href="https://twitter.com/#1/PRADEEP11014327" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
           <a href="#" class="fa fa-linkedin"></a>
             <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-youtube"></a>
           <a href="#" class="fa fa-rss"></a>


</div>




</body>
</html>