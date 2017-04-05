jQuery.fn.rating6 = function(url, options) {
	
	if(url == null) return;
	
	var settings = {
        url       : url, // post changes to 
        maxvalue  : 5,   // max number of stars
        curvalue  : 0    // number of selected stars
    };
	
    if(options) {
       jQuery.extend(settings, options);
    };
   jQuery.extend(settings, {cancel: (settings.maxvalue > 1) ? true : false});
   
   
   var container = jQuery(this);
	
	jQuery.extend(container, {
            averageRating: settings.curvalue,
            url: settings.url
        });

	for(var i= 0; i <= settings.maxvalue ; i++){
		var size = i
        if (i == 0) {
			if(settings.cancel == true){
	             var div = '<div class="cancel"><a href="#0" title="Cancel Rating">Cancel Rating</a></div>';
				 container.append(div);
			}
        } 
		else {
             var div = '<div class="star"><a href="#'+i+'" title="Give it '+i+'/5">'+i+'</a></div>';
			 container.append(div);

        }
 
		

	}
	
	var stars = jQuery(container).children('.star');
    var cancel = jQuery(container).children('.cancel');
	
    stars
	        .mouseover(function(){
                event.drain();
                event.fill(this);
            })
            .mouseout(function(){
                event.drain();
                event.reset();
            })
            .focus(function(){
                event.drain();
                event.fill(this)
            })
            .blur(function(){
                event.drain();
                event.reset();
            });

    stars.click(function(){
	
		if(settings.cancel == true){
			
		    settings.curvalue = stars.index(this) + 1;
            /*jQuery.post(container.url, {
                "rating6": jQuery(this).children('a')[0].href.split('#')[1] 
            });*/
			
			var star_id=settings.curvalue;
			document.getElementById("get_text1").value=star_id;
			//alert(star_id);
			return false;
		}
		else if(settings.maxvalue == 1){
		
			settings.curvalue = (settings.curvalue == 0) ? 1 : 0;
			$(this).toggleClass('on');
			jQuery.post(container.url, {
                "rating6": jQuery(this).children('a')[0].href.split('#')[1] 
            });
			return false;
		}
		return true;
			
    });

        // cancel button events
	
        
	var event = {
		fill: function(el){ // fill to the current mouse position.
			var index = stars.index(el) + 1;
			stars
				.children('a').css('width', '100%').end()
				.lt(index).addClass('hover').end();
		},
		drain: function() { // drain all the stars.
			stars
				.filter('.on').removeClass('on').end()
				.filter('.hover').removeClass('hover').end();
		},
		reset: function(){ // Reset the stars to the default index.
			stars.lt(settings.curvalue).addClass('on').end();
		}
	}        
	event.reset();
	
	return(this);	

}
//----------------------------------------------First Rating End------------------------------------------------
jQuery.fn.rating1 = function(url, options) {
	
	if(url == null) return;
	
	var settings = {
        url       : url, // post changes to 
        maxvalue  : 5,   // max number of stars
        curvalue  : 0    // number of selected stars
    };
	
    if(options) {
       jQuery.extend(settings, options);
    };
   jQuery.extend(settings, {cancel: (settings.maxvalue > 1) ? true : false});
   
   
   var container = jQuery(this);
	
	jQuery.extend(container, {
            averageRating: settings.curvalue,
            url: settings.url
        });

	for(var i= 0; i <= settings.maxvalue ; i++){
		var size = i
        if (i == 0) {
			if(settings.cancel == true){
	             var div = '<div class="cancel"><a href="#0" title="Cancel Rating">Cancel Rating</a></div>';
				 container.append(div);
			}
        } 
		else {
             var div = '<div class="star"><a href="#'+i+'" title="Give it '+i+'/5">'+i+'</a></div>';
			 container.append(div);

        }
 
		

	}
	
	var stars = jQuery(container).children('.star');
    var cancel = jQuery(container).children('.cancel');
	
    stars
	        .mouseover(function(){
                event.drain();
                event.fill(this);
            })
            .mouseout(function(){
                event.drain();
                event.reset();
            })
            .focus(function(){
                event.drain();
                event.fill(this)
            })
            .blur(function(){
                event.drain();
                event.reset();
            });

    stars.click(function(){
	
		if(settings.cancel == true){
		    settings.curvalue = stars.index(this) + 1;
           /* jQuery.post(container.url, {
                "rating1": jQuery(this).children('a')[0].href.split('#')[1] 
            });*/
			
			var star_id1=settings.curvalue;
			document.getElementById("get_text2").value=star_id1;
			//alert(star_id1);
			return false;
		}
		else if(settings.maxvalue == 1){
		
			settings.curvalue = (settings.curvalue == 0) ? 1 : 0;
			$(this).toggleClass('on');
			jQuery.post(container.url, {
                "rating1": jQuery(this).children('a')[0].href.split('#')[1] 
            });
			return false;
		}
		return true;
			
    });

        // cancel button events
	
        
	var event = {
		fill: function(el){ // fill to the current mouse position.
			var index = stars.index(el) + 1;
			stars
				.children('a').css('width', '100%').end()
				.lt(index).addClass('hover').end();
		},
		drain: function() { // drain all the stars.
			stars
				.filter('.on').removeClass('on').end()
				.filter('.hover').removeClass('hover').end();
		},
		reset: function(){ // Reset the stars to the default index.
			stars.lt(settings.curvalue).addClass('on').end();
		}
	}        
	event.reset();
	
	return(this);	

}
//----------------------------------------------Second Rating End------------------------------------------------
jQuery.fn.rating2 = function(url, options) {
	
	if(url == null) return;
	
	var settings = {
        url       : url, // post changes to 
        maxvalue  : 5,   // max number of stars
        curvalue  : 0    // number of selected stars
    };
	
    if(options) {
       jQuery.extend(settings, options);
    };
   jQuery.extend(settings, {cancel: (settings.maxvalue > 1) ? true : false});
   
   
   var container = jQuery(this);
	
	jQuery.extend(container, {
            averageRating: settings.curvalue,
            url: settings.url
        });

	for(var i= 0; i <= settings.maxvalue ; i++){
		var size = i
        if (i == 0) {
			if(settings.cancel == true){
	             var div = '<div class="cancel"><a href="#0" title="Cancel Rating">Cancel Rating</a></div>';
				 container.append(div);
			}
        } 
		else {
             var div = '<div class="star"><a href="#'+i+'" title="Give it '+i+'/5">'+i+'</a></div>';
			 container.append(div);

        }
 
		

	}
	
	var stars = jQuery(container).children('.star');
    var cancel = jQuery(container).children('.cancel');
	
    stars
	        .mouseover(function(){
                event.drain();
                event.fill(this);
            })
            .mouseout(function(){
                event.drain();
                event.reset();
            })
            .focus(function(){
                event.drain();
                event.fill(this)
            })
            .blur(function(){
                event.drain();
                event.reset();
            });

    stars.click(function(){
	
		if(settings.cancel == true){
		    settings.curvalue = stars.index(this) + 1;
           /* jQuery.post(container.url, {
                "rating2": jQuery(this).children('a')[0].href.split('#')[1] 
            });*/
			
			var star_id=settings.curvalue;
			document.getElementById("get_text3").value=star_id;
			//alert('Third');
			return false;
		}
		else if(settings.maxvalue == 1){
		
			settings.curvalue = (settings.curvalue == 0) ? 1 : 0;
			$(this).toggleClass('on');
			jQuery.post(container.url, {
                "rating2": jQuery(this).children('a')[0].href.split('#')[1] 
            });
			return false;
		}
		return true;
			
    });

        // cancel button events
	
        
	var event = {
		fill: function(el){ // fill to the current mouse position.
			var index = stars.index(el) + 1;
			stars
				.children('a').css('width', '100%').end()
				.lt(index).addClass('hover').end();
		},
		drain: function() { // drain all the stars.
			stars
				.filter('.on').removeClass('on').end()
				.filter('.hover').removeClass('hover').end();
		},
		reset: function(){ // Reset the stars to the default index.
			stars.lt(settings.curvalue).addClass('on').end();
		}
	}        
	event.reset();
	
	return(this);	

}

//----------------------------------------------Third Rating End------------------------------------------------
jQuery.fn.rating3 = function(url, options) {
	
	if(url == null) return;
	
	var settings = {
        url       : url, // post changes to 
        maxvalue  : 5,   // max number of stars
        curvalue  : 0    // number of selected stars
    };
	
    if(options) {
       jQuery.extend(settings, options);
    };
   jQuery.extend(settings, {cancel: (settings.maxvalue > 1) ? true : false});
   
   
   var container = jQuery(this);
	
	jQuery.extend(container, {
            averageRating: settings.curvalue,
            url: settings.url
        });

	for(var i= 0; i <= settings.maxvalue ; i++){
		var size = i
        if (i == 0) {
			if(settings.cancel == true){
	             var div = '<div class="cancel"><a href="#0" title="Cancel Rating">Cancel Rating</a></div>';
				 container.append(div);
			}
        } 
		else {
             var div = '<div class="star"><a href="#'+i+'" title="Give it '+i+'/5">'+i+'</a></div>';
			 container.append(div);

        }
 
		

	}
	
	var stars = jQuery(container).children('.star');
    var cancel = jQuery(container).children('.cancel');
	
    stars
	        .mouseover(function(){
                event.drain();
                event.fill(this);
            })
            .mouseout(function(){
                event.drain();
                event.reset();
            })
            .focus(function(){
                event.drain();
                event.fill(this)
            })
            .blur(function(){
                event.drain();
                event.reset();
            });

    stars.click(function(){
	
		if(settings.cancel == true){
		    settings.curvalue = stars.index(this) + 1;
           /* jQuery.post(container.url, {
                "rating3": jQuery(this).children('a')[0].href.split('#')[1] 
            });*/
			
			var star_id=settings.curvalue;
			document.getElementById("get_text4").value=star_id;
			//alert('Four');
			return false;
		}
		else if(settings.maxvalue == 1){
		
			settings.curvalue = (settings.curvalue == 0) ? 1 : 0;
			$(this).toggleClass('on');
			jQuery.post(container.url, {
                "rating3": jQuery(this).children('a')[0].href.split('#')[1] 
            });
			return false;
		}
		return true;
			
    });

        // cancel button events
	
        
	var event = {
		fill: function(el){ // fill to the current mouse position.
			var index = stars.index(el) + 1;
			stars
				.children('a').css('width', '100%').end()
				.lt(index).addClass('hover').end();
		},
		drain: function() { // drain all the stars.
			stars
				.filter('.on').removeClass('on').end()
				.filter('.hover').removeClass('hover').end();
		},
		reset: function(){ // Reset the stars to the default index.
			stars.lt(settings.curvalue).addClass('on').end();
		}
	}        
	event.reset();
	
	return(this);	

}
//----------------------------------------------Fourth Rating End------------------------------------------------

jQuery.fn.rating4 = function(url, options) {
	
	if(url == null) return;
	
	var settings = {
        url       : url, // post changes to 
        maxvalue  : 5,   // max number of stars
        curvalue  : 0    // number of selected stars
    };
	
    if(options) {
       jQuery.extend(settings, options);
    };
   jQuery.extend(settings, {cancel: (settings.maxvalue > 1) ? true : false});
   
   
   var container = jQuery(this);
	
	jQuery.extend(container, {
            averageRating: settings.curvalue,
            url: settings.url
        });

	for(var i= 0; i <= settings.maxvalue ; i++){
		var size = i
        if (i == 0) {
			if(settings.cancel == true){
	             var div = '<div class="cancel"><a href="#0" title="Cancel Rating">Cancel Rating</a></div>';
				 container.append(div);
			}
        } 
		else {
             var div = '<div class="star"><a href="#'+i+'" title="Give it '+i+'/5">'+i+'</a></div>';
			 container.append(div);

        }
 
		

	}
	
	var stars = jQuery(container).children('.star');
    var cancel = jQuery(container).children('.cancel');
	
    stars
	        .mouseover(function(){
                event.drain();
                event.fill(this);
            })
            .mouseout(function(){
                event.drain();
                event.reset();
            })
            .focus(function(){
                event.drain();
                event.fill(this)
            })
            .blur(function(){
                event.drain();
                event.reset();
            });

    stars.click(function(){
	
		if(settings.cancel == true){
		    settings.curvalue = stars.index(this) + 1;
/*            jQuery.post(container.url, {
                "rating4": jQuery(this).children('a')[0].href.split('#')[1] 
            });
*/			
			var star_id=settings.curvalue;
			document.getElementById("get_text5").value=star_id;
			//alert('five');
			return false;
		}
		else if(settings.maxvalue == 1){
		
			settings.curvalue = (settings.curvalue == 0) ? 1 : 0;
			$(this).toggleClass('on');
			jQuery.post(container.url, {
                "rating4": jQuery(this).children('a')[0].href.split('#')[1] 
            });
			return false;
		}
		return true;
			
    });

        // cancel button events
	
        
	var event = {
		fill: function(el){ // fill to the current mouse position.
			var index = stars.index(el) + 1;
			stars
				.children('a').css('width', '100%').end()
				.lt(index).addClass('hover').end();
		},
		drain: function() { // drain all the stars.
			stars
				.filter('.on').removeClass('on').end()
				.filter('.hover').removeClass('hover').end();
		},
		reset: function(){ // Reset the stars to the default index.
			stars.lt(settings.curvalue).addClass('on').end();
		}
	}        
	event.reset();
	
	return(this);	

}
//----------------------------------------------Fifth Rating End------------------------------------------------

jQuery.fn.rating5 = function(url, options) {
	
	if(url == null) return;
	
	var settings = {
        url       : url, // post changes to 
        maxvalue  : 5,   // max number of stars
        curvalue  : 0    // number of selected stars
    };
	
    if(options) {
       jQuery.extend(settings, options);
    };
   jQuery.extend(settings, {cancel: (settings.maxvalue > 1) ? true : false});
   
   
   var container = jQuery(this);
	
	jQuery.extend(container, {
            averageRating: settings.curvalue,
            url: settings.url
        });

	for(var i= 0; i <= settings.maxvalue ; i++){
		var size = i
        if (i == 0) {
			if(settings.cancel == true){
	             var div = '<div class="cancel"><a href="#0" title="Cancel Rating">Cancel Rating</a></div>';
				 container.append(div);
			}
        } 
		else {
             var div = '<div class="star"><a href="#'+i+'" title="Give it '+i+'/5">'+i+'</a></div>';
			 container.append(div);

        }
 
		

	}
	
	var stars = jQuery(container).children('.star');
    var cancel = jQuery(container).children('.cancel');
	
    stars
	        .mouseover(function(){
                event.drain();
                event.fill(this);
            })
            .mouseout(function(){
                event.drain();
                event.reset();
            })
            .focus(function(){
                event.drain();
                event.fill(this)
            })
            .blur(function(){
                event.drain();
                event.reset();
            });

    stars.click(function(){
	
		if(settings.cancel == true){
		    settings.curvalue = stars.index(this) + 1;
/*            jQuery.post(container.url, {
                "rating5": jQuery(this).children('a')[0].href.split('#')[1] 
            });
*/			
			var star_id=settings.curvalue;
			document.getElementById("get_text6").value=star_id;
			//alert('Six');
			return false;
		}
		else if(settings.maxvalue == 1){
		
			settings.curvalue = (settings.curvalue == 0) ? 1 : 0;
			$(this).toggleClass('on');
			jQuery.post(container.url, {
                "rating5": jQuery(this).children('a')[0].href.split('#')[1] 
            });
			return false;
		}
		return true;
			
    });

        // cancel button events
	
        
	var event = {
		fill: function(el){ // fill to the current mouse position.
			var index = stars.index(el) + 1;
			stars
				.children('a').css('width', '100%').end()
				.lt(index).addClass('hover').end();
		},
		drain: function() { // drain all the stars.
			stars
				.filter('.on').removeClass('on').end()
				.filter('.hover').removeClass('hover').end();
		},
		reset: function(){ // Reset the stars to the default index.
			stars.lt(settings.curvalue).addClass('on').end();
		}
	}        
	event.reset();
	
	return(this);	

}
