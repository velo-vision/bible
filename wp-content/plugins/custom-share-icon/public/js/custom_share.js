function custom_share(url, postid) {
	setMetaValue(postid);
    var winWidth = 600;
    var winHeight = 450;
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    
};

function setMetaValue(postid) {
    jQuery.ajax({
	    type: "GET",
	    url: ajax_object.ajaxurl,
	    data:{
	      action: 'my_action',
	      postid: postid
	    },
	    success: function(data){
	    	 console.log('contador incrementado');
	    },
	    fail: function() {
	    	console.log('error');
	    }
	});
};