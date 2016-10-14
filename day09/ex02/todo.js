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
					createtodo(serial[s] , 1);
			}
		}
	}
}


function addtodo()
{
	var todo = prompt("Creez votre todo");

	if (todo)
		createtodo(todo);
}
function createtodo(todo, init)
{
	var div = document.getElementById("ft_list");
	var elem = document.createElement("div");
	var text = document.createTextNode(todo);
	var ok = 0;
	if (document.cookie && !init)
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
	if (!ok && !init)
	{
		tab = [];
		tab.push(todo);
		document.cookie = "todo="+JSON.stringify(tab)+";";
	}
	elem.setAttribute("class", "todo");
	elem.setAttribute("onclick", "deltodo(this);");
	elem.appendChild(text);
	if (div.hasChildNodes())
		div.insertBefore(elem, div.firstChild);
	else
		div.append(elem);
}
function deltodo(elem)
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
					serial.splice(serial.indexOf(elem.firstChild), 1);
					document.cookie = "todo="+JSON.stringify(serial);
				}
			}
		}
		elem.parentNode.removeChild(elem);
	}
}
init();