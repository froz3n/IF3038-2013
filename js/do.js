username = 'admin';
password = 'admin';

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

	
});