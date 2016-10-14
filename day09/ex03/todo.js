$(document).ready(function()
{
	$(".new").click(function()
	{
		var ok = 0;
		var todo = prompt("Todo a ajouter");
		if (todo)
		{
			$.ajax({
			    url : "insert.php",
			    type: "POST",
			    data : {
			    	data : todo
			    },
			    success: function(data, status)
			    {
			    	console.log("success");
			    	console.log(data);
			    	$("#ft_list").prepend("<div class='todo'><input type='hidden' value='"+data+"'>"+todo+"</div>");
			    },
			    error: function (data, status)
			    {
			    	console.log("error");
			    }
			});
		}

	});

	$(document).on("click", ".todo", function()
	{
		if (confirm("voulez vous supprimer ce todo?"))
		{
			console.log($(this).children().val());
			$.ajax({
			    url : "delete.php",
			    type: "POST",
			    data : {
			    	data : $(this).children().val()
			    },
			    success: function(data, status)
			    {
			    	console.log("success");
			    	console.log(data);
			    },
			    error: function (data, status)
			    {
			    	console.log("error");
			    }
			});
			$(this).remove();
		}
	});
	function init()
	{
		$.ajax({
		    url : "select.php",
		    type: "POST",
		    success: function(data, status)
		    {
		    	tab = JSON.parse(data);
		    	for (t in tab)
		    		$("#ft_list").prepend("<div class='todo'><input type='hidden' value='"+t+"'>"+tab[t]+"</div>");
		    	console.log(data);
		    },
		    error: function (data, status)
		    {
		    	console.log("error");
		    }
		});
	}

	init();
});