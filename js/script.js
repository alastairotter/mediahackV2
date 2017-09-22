jQuery("document").ready( function () { 


    // position masthead
//    var logoHeight = jQuery(".site-branding").height();
//    
//    jQuery(".site-branding").css("margin-top", window.innerHeight / 3 )
    

// search change
    jQuery('.search-field').attr("placeholder", "Search for ...");
    jQuery(".search-submit").attr("value", "Go")


    jQuery(".intro-more").click( function() { 
        
        jQuery(".intro-more").hide(); 
        jQuery(".p-row2").slideDown("slow")
        
    })
    
    
    







})