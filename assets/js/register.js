
 jQuery(document).ready(function($) { 
            
            jQuery('input[type="submit"]','#register').click(function(e){
              if( jQuery("#email").val()=="")
                   {
                      jQuery("#email").css("border","solid 1px red");
                      e.preventDefault();	
                     e.stopImmediatePropagation();
                   }
                });
            });