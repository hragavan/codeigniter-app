/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

	function checkbox_change(chkbox)
	{
		
		var id=chkbox.id;
		var idarr = id.split("-");	
		
		if(chkbox.checked)
			$('#txtbox-'+idarr[1]).show();
		else
			$('#txtbox-'+idarr[1]).hide();
	}
    $(document).ready(function() {
     
        //$('.twilight-show').twilight();
        $('#subList').css("display", "none");
       
        $('#activity').hover(function () {
            $('#subList').fadeIn('slow');
            $('#subList').show();
        },
        function(){
            $('#subList').fadeOut('slow');
            $('#subList').hide();
        }
    );
		$('#sidebar #submit').click(function(){
			
			var selected = {};
			$('#sidebar input:checked').each(function() {	
				selected[$(this).attr('name')] = $(this).next().val();
				
			});
			//url: "/application/controllers/ActivityController.php/index",
		/*	$.each(selected, function (index, value) {
				alert( index + ' : ' + value );
			});*/
			debugger;
			$.ajax({ 
				url: "/index.php/ActivityController/index",
				method: "POST",
				data: selected,
				success: function(data){
					alert(data);                
				},
				error: function(data, status){
					alert("error has occurred");
				}
			});
		});
            
              
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
                'margin-top' : -popMargTop,
                'margin-left' : -popMargLeft
            });
		
            // Add the mask to body
            $('#mask').show();
            $('#mask').fadeIn(300);
		
            return false;
        });
	
        // When clicking on the button close or the mask layer the popup closed
        $('a.close, #mask').live('click', function() { 
            $('#mask , .login-popup').fadeOut(300 , function() {
                $('#mask').remove();  
            }); 
            return false;
        });
    });
    


	
/*
$(document).ready(function() {  
 
    //select all the a tag with name equal to modal
    $('a[name=modal]').click(function(e) {
        //Cancel the link behavior
        e.preventDefault();
        //Get the A tag
        var id = $(this).attr('href');
     
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
     
        //Set height and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':maskHeight});
         
        //transition effect     
        $('#mask').fadeIn(1000);    
        $('#mask').fadeTo("slow",0.8);  
     
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();
               
        //Set the popup window to center
        $(id).css('top',  winH/2-$(id).height()/2);
        $(id).css('left', winW/2-$(id).width()/2);
     
        //transition effect
        $(id).fadeIn(2000); 
     
    });
     
    //if close button is clicked
    $('.window .close').click(function (e) {
        //Cancel the link behavior
        e.preventDefault();
        $('#mask, .window').hide();
    });     
     
    //if mask is clicked
    $('#mask').click(function () {
        $(this).hide();
        $('.window').hide();
    });         
     
})
*/