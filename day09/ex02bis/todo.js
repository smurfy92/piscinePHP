$(document).ready(function()
{
	$(".new").click(function()
	{
		var ok = 0;
		var todo = prompt("Todo a ajouter");
		if (todo)
			$("#ft_list").prepend("<div class='todo'>"+todo+"</div>");
		if (document.cookie)
		{
			tab = document.cookie.split(";");
			for (t in tab)
			{
				var toto = tab[t].split("=");
				if (toto[0].trim() === "todo")
				{
					var serial = JSON.parse(toto[1]);
					serial.push(todo);
					document.cookie = "todo="+JSON.stringify(serial);
					ok = 1;
				}
			}
		}
		if (!ok)
		{
			console.log("ici");
			tab = [];
			tab.push(todo);
			document.cookie = "todo="+JSON.stringify(tab);
		}
		console.log(document.cookie);
	});

	$(document).on("click", ".todo", function()
	{
		if (confirm("voulez vous supprimer ce todo?"))
		{
			if (document.cookie)
			{
				tab = document.cookie.split(";");
				for (t in tab)
				{
					var toto = tab[t].split("=");
					if (toto[0].trim() === "todo")
					{
						var serial = JSON.parse(toto[1]);
						serial.splice(serial.indexOf($(this).text()), 1);
						document.cookie = "todo="+JSON.stringify(serial);
					}
				}
			}
			$(this).remove();
		}
		console.log($(this).text());
	});
	function init()
	{
		if (document.cookie)
		{
			tab = document.cookie.split(";");
			for (t in tab)
			{
				var toto = tab[t].split("=");
				if (toto[0].trim() === "todo")
				{
					var serial = JSON.parse(toto[1]);
					for (s in serial)
						$("#ft_list").prepend("<div class='todo'>"+serial[s]+"</div>")
				}
			}
		}
	}

	init();
});