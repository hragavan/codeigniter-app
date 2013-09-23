

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="/assets/css/homepage.css" /> 
<link rel="stylesheet" type="text/css" href="/assets/css/loginPage.css" /> 
<link rel="stylesheet" type="text/css" href="/assets/css/datepicker.css" /> 
<meta charset="utf-8">
<meta name="description" content="Self Analyzer - Codeigniter app">
<title>Welcome to CodeIgniter</title>
</head>

<body>
    
<div><img src="/assets/images/city.jpg" class="front-image"></div>
<div id="choose_activity">
<div class="header"><h2>How do you spend your day?</h2></div>
<?php echo form_open_multipart('upload/doupload');?>
<img src="http://www.madico.com/wp-content/uploads/2009/10/avatar-empty.gif" style="width:100px;">

<input type="file" name="file" size="2000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" size="26"><br/>
<br /><br />
<INPUT type="submit" class="button" name="Submit" value="  Submit  "> 
&nbsp;&nbsp;<INPUT type="reset" class="button" value="Cancel">
</form>
<div class="content">
<div class="sidebar">

<?php
$i = 0;
$activity = explode(',', $activity);
?>

<? foreach ($activity as $a) { ?>
    <div>	
        <input type="checkbox" id="chkbox-<? echo $i; ?>" name="<? echo $a ?>" onclick="checkbox_change(this)"><? echo $a ?> </>
        <input type="text" id="txtbox-<? echo $i; ?>" style="display:none;color:#000;"/>
        <input type="button" value="proceed" id="activity-submit" />
    </div>
    <?
    $i++;
}
?>

</div>
<div class="main"></div>

</div>


</div>
<div class="container" style="overflow:visible;">
<ul id="nav">
<li id="home"><a href="#">Home</a></li>
<li id="profile"><a href="profile">Profile</a></li>
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
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript">
            function checkbox_change(chkbox)
            {
                debugger;
                var idArr = chkbox.id.split('-');
                $('#txtbox-' + idArr[1]).toggle();

            }
            $(document).ready(function() {
                $('#subList').css("display", "none");
                $('#activity').hover(function() {
                    $('#subList').fadeIn('slow');
                    $('#subList').show();
                },
                        function() {
                            $('#subList').fadeOut('slow');
                            $('#subList').hide();
                        }
                );


                $('a.login-window').click(function() {
                    //Getting the variable's value from a link 
                    var loginBox = $(this).attr('href');
                    $('#datepicker').datepicker();
                    //Fade in the Popup
                    $(loginBox).fadeIn(300);

                    //Set the center alignment padding + border see css style
                    var popMargTop = ($(loginBox).height() + 24) / 2;
                    var popMargLeft = ($(loginBox).width() + 24) / 2;

                    $(loginBox).css({
                        'margin-top': -popMargTop,
                        'margin-left': -popMargLeft
                    });

                    // Add the mask to body
                    $('#mask').show();
                    $('#mask').fadeIn(300);

                    return false;
                });

                // When clicking on the button close or the mask layer the popup closed
                $('a.close, #mask').live('click', function() {
                    $('#mask , .login-popup').fadeOut(300, function() {
                        $('#mask').remove();
                    });
                    return false;
                });
                $('#activity-submit').click(function() {
                    debugger;
                    $('.sidebar input:checked').each(function() {
                        var idArr = chkbox.id.split('-');
                        var postData= {
                            'activity' : $(this).attr('name'),
                            'time' : $('#txtbox'+idArr[1]).val()
                        };
                    });
                           // alert($(this).attr('name'));
                });
                    var ajaxurl = document.location.hostname + "/ActivityController/save";
                    var postData = {
                        'invoice_id': ids,
                  
                    };
                    $.ajax({
                        type: "POST",
                        url: ajaxurl,
                        dataType: "json",
                        data: postData,
                        success: function() {
                            alert("you added payment of amount " + amt + " USD for this invoice.");
                            $('#pay_am-' + ids).value = "";
                            $('#add-' + ids).hide();
                            $('#pay_am-' + ids).hide();
                        }
                    });
                });


</script>
</body>

</html>
