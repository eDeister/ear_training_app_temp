/*Name: Sajal
* JS for implementing comments*/


document.addEventListener('DOMContentLoaded', function() {
    // Submit comment form using AJAX
    document.getElementById('commentForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        fetch('submit_comment.php', {
            method: 'POST',
            body: formData
        })
            .then(function(response) {
                if (response.ok) {
                    // Clear form fields
                    document.getElementById('name').value = '';
                    document.getElementById('comment').value = '';

                    // Reload comments
                    loadComments();
                } else {
                    console.log('Error: ' + response.status);
                }
            })
            .catch(function(error) {
                console.log('Error: ' + error);
            });
    });

    // Load comments on page load
    loadComments();
});

function loadComments() {
    fetch('get_comments.php')
        .then(function(response) {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Error: ' + response.status);
            }
        })
        .then(function(comments) {
            // Clear comment list
            var commentList = document.getElementById('commentList');
            commentList.innerHTML = '';

            // Iterate through comments and append to the comment list
            comments.forEach(function(comment) {
                var listItem = document.createElement('li');
                listItem.classList.add('list-group-item');
                listItem.textContent = comment.name + ': ' + comment.comment;
                commentList.appendChild(listItem);
            });
        })
        .catch(function(error) {
            console.log(error);
        });
}
