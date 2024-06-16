document.addEventListener("DOMContentLoaded", function () {
    var cardText = document.getElementById('card-text');
   
    var maxChars = 200;
    var trimmedText = cardText.textContent.substring(0, maxChars).trim();

 
    if (cardText.textContent.length > maxChars) {
        trimmedText += '...';
    }
    cardText.textContent = trimmedText;

    const readMoreLink = document.getElementById('read-more');

    readMoreLink.addEventListener('mouseenter', () => {
        readMoreLink.classList.add('underline-animation');
    });

    readMoreLink.addEventListener('mouseleave', () => {
        readMoreLink.classList.remove('underline-animation');
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
    } else {
        console.error('Element with ID "loginLink" not found.');
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


