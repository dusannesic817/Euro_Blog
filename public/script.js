document.addEventListener("DOMContentLoaded", function () {
    var cardTextElements = document.querySelectorAll('.short-text');

    cardTextElements.forEach(function (cardTextElement) {
        var maxChars = 200;
        var trimmedText = cardTextElement.textContent.trim();

        if (trimmedText.length > maxChars) {
            trimmedText = trimmedText.substring(0, maxChars).trim() + '...';
        }

        cardTextElement.textContent = trimmedText;
    });

    var readMoreLinks = document.querySelectorAll('.read-more-link');

    readMoreLinks.forEach(function (readMoreLink) {
        readMoreLink.addEventListener('mouseenter', function () {
            this.classList.add('underline-animation');
        });

        readMoreLink.addEventListener('mouseleave', function () {
            this.classList.remove('underline-animation');
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
   
    var registerLink = document.getElementById('registerLink');
    var loginLink = document.getElementById('loginLink');

    function loadAndShowModal(url, modalSelector) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var modalWrapper = document.createElement('div');
                    modalWrapper.innerHTML = xhr.responseText;

                    var regModal = modalWrapper.querySelector(modalSelector);
                    var modal = new bootstrap.Modal(regModal);

                    document.body.appendChild(regModal);
                    modal.show();
                }
            }
        };
        xhr.send();
    }

    registerLink.addEventListener('click', function(event) {
            event.preventDefault();
            loadAndShowModal('register.php', '#regModal');
        });
    
    if (loginLink) {
        loginLink.addEventListener('click', function(event) {
            event.preventDefault();
            loadAndShowModal('login.php', '#logModal');
        });
    } 
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('postImages').addEventListener('change', handleFileSelect, false);

    function handleFileSelect(event) {
        const files = event.target.files;
        const slikePreview = document.getElementById('slike-preview');

        for (let i = 0; i < files.length; i++) {
            const slika = files[i];
            const slikaURL = URL.createObjectURL(slika);
            const slikaElement = document.createElement('img');
            slikaElement.src = slikaURL;
            slikaElement.className = 'img-thumbnail';
            slikaElement.alt = 'Slika';
            slikaElement.style.maxWidth = '100px';
            slikaElement.style.marginRight = '10px';
            slikePreview.appendChild(slikaElement);
        }
    }
});



document.addEventListener('DOMContentLoaded', function() {
    var likeButton = document.querySelector('.like-button');
    var dislikeButton = document.querySelector('.dislike-button');

    var likeCount = 32; 
    var dislikeCount = 2; 

    likeButton.addEventListener('click', function() {
        likeCount++;
        updateCounts();
        animateThumb(likeButton);
    });

    dislikeButton.addEventListener('click', function() {
        dislikeCount++;
        updateCounts();
        animateThumb(dislikeButton);
    });

    function updateCounts() {
        likeButton.innerHTML = `<i class="far fa-thumbs-up fa-lg"></i>(${likeCount})`;
        dislikeButton.innerHTML = `<i class="far fa-thumbs-down fa-lg"></i>(${dislikeCount})`;
    }

    function animateThumb(button) {
        button.classList.add('thumb-animation');
        setTimeout(function() {
            button.classList.remove('thumb-animation');
        }, 500); 
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var editLink = document.getElementById('editLink');

    editLink.addEventListener('click', function(event) {
        event.preventDefault();
        var url = 'edit_comment.php';
        fetch(url)
            .then(response => response.text())
            .then(data => {
                
                var modalWrapper = document.createElement('div');
                modalWrapper.innerHTML = data;
                
                modalWrapper.querySelector('.modal').setAttribute('id', 'comModal');
      
                document.body.appendChild(modalWrapper);        
                var comModal = new bootstrap.Modal(document.getElementById('comModal'));
                comModal.show();
                comModal._element.addEventListener('hidden.bs.modal', function() {
                    document.body.removeChild(modalWrapper);
                });
            })
            .catch(error => console.error('Error loading content:', error));
    });
});


