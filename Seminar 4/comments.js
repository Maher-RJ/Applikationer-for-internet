function addComment(data) {

	var username = document.createTextNode(data.username);
	var msg = document.createTextNode(data.comment);
	var buttontxt = document.createTextNode("Delete");

	var author = document.createElement("p");
	var message = document.createElement("div");
	var button = document.createElement("button");
	var comment = document.createElement("div");
	
	comment.setAttribute("data-id", data.id);
	button.className = "delete";
	author.className = "name";
	message.className = "comment";
	
	button.appendChild(buttontxt);
	author.appendChild(username);
	message.appendChild(msg);
	comment.appendChild(author);
	comment.appendChild(message);
	comment.appendChild(button);
	document.getElementById("comments").appendChild(comment)

}

function postComment(){

	var formdata = $('#publish').serialize();

	var insert = $.post('makeComment.php', formdata);

	insert.done(function (data) {

		addComment(data);
	});
}

function fetchComments(dish){

	var fetch = $.get('getComments.php?dish=' + dish);
	fetch.done(function (data){

		for (var i = 0, le = data.length; i < le; i++) {
			addComment(data[i]);
		}
	})
}

$(document).on('click', '.delete', function() {

	var fd = new FormData();
	var comment = $(this).parent();
	fd.set('data-id', comment.attr('data-id'));

	$.ajax({
	  url: 'deleteComment.php',
	  data: fd,
	  processData: false,
	  contentType: false,
	  type: 'POST',
	  success: function(data){
	  	comment.remove();
	  }
	});

    
});