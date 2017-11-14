
	$('#menu li a').bind({
		'mouseover': function(){
			var body =$(this).attr('data-body');
			var color =$(this).attr('data-color');
			console.log(body);
			$('#title').text(body).css('color','red');
			
			
		},
		
		'mouseout': function(){
			var body =$(this).attr('data-body');
			var color =$(this).attr('data-color');
			console.log(body);
			$('#title').text("");
			
			
		},
		 'click': function(e){
			 e.preventDefault();
			 var data =$(this).attr('href');
			 if($('.window').length==0){
			var fon= $('<div>').addClass('fon').appendTo('body');
			var model= $('<div>').addClass('window').appendTo('body');
			
			
			 }
			 else{
				var model= $('.window');
			 }
			 $('<a>').attr('href','#').addClass('modal-close-btn').html('&times;').click(function(e){
				 e.preventDefault();
				 $('.window').remove();
				 $('.fon').remove();
			 }).appendTo(model);
			 
			 fon.click(function(){
				 $('.window').remove();
				 $('.fon').remove();
			
		 });
		 }
		 
		 
			
		
		
	});
		 
		 
		 
		 
		 
		 
		 
		 
		 
		
	
	
	
	
