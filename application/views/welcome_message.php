


<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" type="text/css" href="/assets/css/homepage.css" /> 
 <link rel="stylesheet" type="text/css" href="/assets/css/loginPage.css" /> 
 <link rel="stylesheet" type="text/css" href="/assets/css/datepicker.css" /> 
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/activity.js"></script>
<!--<script type="text/javascript" src="/assets/js/jquery.js"></script>-->
</head>

            <body>
                <div><img src="/assets/images/city.jpg" class="front-image"></div>
                <div id="choose_activity">
					<div class="header"><h2>How do you spend your day?</h2></div>
					<div class="content">
						<div id="sidebar">
							<?php 
							$i=0;
							$activity=  explode(',', $activity); ?>
							
							<? foreach($activity as $a) { ?>
							<div>	
								<input type="checkbox" id="chkbox-<?echo $i;?>" name="<? echo $a ?>" onclick="checkbox_change(this)"><? echo $a ?> </>
								<input type="text" id="txtbox-<?echo $i;?>" style="display:none"/>
								</div>
								<? $i++;} ?>
						<input type="button" value ="proceed" id="submit"/>	
						</div>
						<div class="main"></div>
						
					</div>
					
					
				</div>
                    <div class="container" style="overflow:visible;">
                        <ul id="nav">
                            <li id="home"><a href="#">Home</a></li>
                            <li id="profile"><a href="#">Profile</a></li>
                            <li id="activity"><a href="#">Activity</a>
                                <ul id="subList">
                                    <li><a href="#login-box" class="login-window">Add activity</a></li>

                                    <li><a href="#">Show activities</a></li>

                                </ul>
                            </li>
                        </ul>
                        <div id="login-box" class="login-popup">
                            <a href="#" class="close"><img src="/assets/images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
                            <form method="post" class="signin" action="<?php $_PHP_SELF ?>" id="activity">
                                <fieldset class="textbox">
                                    <label class="activityName">
                                        <span>Activity Name</span>
                                        <input id="activityName" name="activityName" value="" type="text" autocomplete="on">
                                    </label>
                                    <label><span>Date</span></label>
                                    <span> <input id="datepicker" name="datepicker"/></span>
                                    <label>
                                        <span>Time spent</span> </label>

                                    <span><input id="hours" name="hours" value="" type="text" style="width:40px" placeholder="hours"/> 


                                        <input id="minutes" name="minutes" value="" type="text" style="width:40px" placeholder="minutes"/> </span>




                                    <input type="submit" id="activityAdd" name="activityAdd">Add</>
                                    <p>

                                    </p>        
                                </fieldset>
                            </form>
                        </div>
                        <!--     <div class="twilight-wrapper">
                              <div class="slide-wrapper">
                                      <div class="twilight-show">
                                              <div class="twilight-box">
                                      <div><img src="../images/city.jpg" alt="" /></div>
                                      <div><img src="../images/city-balcony@2x.jpg" alt="" /></div>
                                      
                              </div>
                              <div class="arrow-left"><img src="../images/arrow-left.png" alt="" /></div>
                              <div class="arrow-right"><img src="../images/arrow-right.png" alt="" /></div>
                      </div>
                              </div></div>-->
                    </div>
             
                <div class="search">
                    <form name="search" action="search.php" method="POST">
                        <input type="text" id="search_text" name="search_text"/>
                        <input type="submit" value="SEARCH" id="search" name="search"/><br>
                        <input type="radio" name="lastname" value="LastName">Last Name<br>
                        <input type="radio" name="email" value="Email">Email<br>
                        </div>
                        </body>
                        
</html>
