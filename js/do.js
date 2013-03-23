Rp(function() {
	genComment = function(author, body) {
		article = document.createElement('article');
		article.className = 'comment';
		header = document.createElement('header');
		h4 = document.createElement('h4');
		h4.appendChild(document.createTextNode(author));
		header.appendChild(h4);
		body = body.replace('\n', '<br>');
		p = document.createElement('p');
		p.appendChild(document.createTextNode(body));

		article.appendChild(header);
		article.appendChild(p);

		return article;
	};

	Rp('#commentForm').on('submit', function(e) {
		e.preventDefault();
		author = Rp('#userFullName').text();
		body = Rp('#commentBody').val();
		comment = genComment(author, body);
		Rp('#commentsList').append(comment);
	});

	Rp('#loginLink').on('click', function(e) {
		e.preventDefault();

		Rp('#loginBox').toggleClass('visible');

		Rp('#login_username').nodes[0].focus();
	})

	Rp('#loginForm').on('submit', function(e) {
		e.preventDefault();	
		$(document).ready(function(){
    			$("#error_messege").css('display', 'none');
    			$("#username").focus();
		});

		function showMessege(){
			$("#error_messege").css('display', 'block');
		}

		function validateDataLogin(){
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			if(username == '' || password == ''){
				alert("Username or Password Empty.");
			}else{
				showMessege();
				setTimeout(function(){
					doLogin(username, password);
				}, 1000);
			}
		}
	
		var xmlHttp = createXmlHttpRequestObject();
		// Create XMLHttpRequest
		function createXmlHttpRequestObject(){
			var xmlHttp;
			if(window.ActiveXObject){
				try{
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e)  {
					xmlHttp = false;
				}
			}
			// jika mozilla atau yang lain
			else {
				try{
					xmlHttp = new XMLHttpRequest();
				}catch (e){
					xmlHttp = false;
				}
			}
			if (!xmlHttp)
				alert("Error creating the XMLHttpRequest object.");
			else{
				return xmlHttp;
			}
  		}

		//Memanggil file *.php Secara Asingkron
		function doLogin(username, password){
			if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0){
				xmlHttp.open("GET", "process.user.php?u="+username+"&p="+password+"&action=login", true);
				xmlHttp.onreadystatechange = handleServerResponse;
				xmlHttp.send(null);
			}
		}
		//di eksekusi otomati jika pesan diterima
		function handleServerResponse() {
			///jika rewuest complete
			if (xmlHttp.readyState == 4){
				if (xmlHttp.status == 200) {
					var ajax_data = xmlHttp.responseText;
					if(ajax_data == 'OK'){
						window.location.href = 'dashboard.html';
					}else{
						document.getElementById("error_messege").innerHTML = ajax_data;
					}
				}
				else {
					alert("ERROR: " + xmlHttp.statusText);
				}
			}
		}
	});

	Rp('#editTaskLink').on('click', function(e) {
		e.preventDefault();

		if (Rp('#editTaskLink').hasClass('editing')) {
			Rp('#editTaskLink').nodes[0].innerHTML = 'Edit Task';
			Rp('#editTaskLink').removeClass('editing');
			Rp('#edit-task').hide();
			Rp('#current-task').show();
		}
		else {
			Rp('#editTaskLink').nodes[0].innerHTML = 'Save';
			Rp('#editTaskLink').addClass('editing');
			Rp('#current-task').hide();
			Rp('#edit-task').nodes[0].style.display = 'block';


		}
	});
});
