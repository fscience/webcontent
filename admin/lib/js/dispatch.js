$(function(){
	$(window).hashchange( function() {
		var hash = location.hash.replace( /^#/, '' ) || 'blank';

		$.ajax({
			url:	"../viewdispatcher.php",
			type:	"get",
			//dataType: 	"html",
			data:       {'hash' : hash},
			headers:    {'X-Eldarion-Ajax': true}, 
			statusCode: {
				200: function(responseData) {
					$(".viewcenter").html(responseData);
				},
				404: function() {
					alert("Error");
				}
			},
			complete: function(jqXHR, textStatus) {
				
			}
		});
	});
	
	var AjaxSubmit = function(e) {
		var $this = $(this),
        url = $this.attr('action'),
        method = $this.attr('method'),
        data = $this.serialize();
		
		alert(url + " " + method + " " + data);
		
		e.preventDefault();
	}
	
	$(function () {
		$(window).hashchange();
		
		$('body').on('submit', 'form.ajax', AjaxSubmit);
	});
});