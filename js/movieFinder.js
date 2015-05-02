


// NOTE: should be using http://api.jquery.com/jquery.getjson/ to get the JSON
	  $(document).ready(function(){
		$("#filmSearch").click(function(){
		  $('#progress').html('Searching for movies ...');
		  $.get(
		  "http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/movie-service.php",
		  {
			movie:$("#film").val(),
			//day:$("#day").val()
		  },
		  function(data,status){
			$('#progress').html('Film ' + $("#film").val() + ': ');
			$('#data').html(data);

			// https://api.jquery.com/jquery.parsejson/ - to read the json data
			var obj = $.parseJSON(data);
			console.log("Title of movie: " + obj["title"]);
		  });
		});
		
		$("#time-search").click(function(){
		  $('#progress').html('Searching for movies ...');
		  $.get(
		  "http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/movie-service.php",
		  {
			day:$("#day").val()
		  },
		  function(data,status){
			$('#progress').html('Times for ' + $("#day").val() + ': ');
			$('#data').html(data);
			
			var obj = $.parseJSON(data);
			$.each(obj, function(i, item) {
				console.log("Title of movie: " + item.title);
			});
			
		  });
		});
		
		$("#all-search").click(function(){
		  $('#progress').html('Searching for all movies ...');
		  $.get(
		  "http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/movie-service.php",
		  {
			
		  },
		  function(data,status){
			$('#progress').html('All Movies: ');
			$('#data').html(data);
			
			var obj = $.parseJSON(data);
			$.each(obj, function(i, item) {
				console.log("Title of movie: " + item.title);
			});
			
		  });
		});
	  });