(function(){


	var scoreArray = [],
		table = $('table.score tbody tr');
		$('.save').click(function(){
			table.each(function(){
				var data = {
					"task_id" : "2",
					"user_id" : $(this).find(".number").html(),
					'file_link': $(this).find(".file_link a").attr('href'),
					'score' :$(this).find(".score input").val()
				}

				scoreArray.push(data);
			});
		//console.log(scoreArray);
		$.ajax({
	             type: "POST",
	             url: "test.php",
	             data: {data:scoreArray},
	             // dataType: "json",
	             success: function(data){
	                         console.log(data);
	                        
	                      }
	         	});	
		});
		
})();