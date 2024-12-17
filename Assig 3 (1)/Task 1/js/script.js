document.getElementById('email').addEventListener('input', function() {
    var emailInput = document.getElementById('email');
    var emailLabel = emailInput.nextElementSibling;
    
    if (emailInput.validity.valid) {
        emailLabel.classList.add('valid');
    } else {
        emailLabel.classList.remove('valid');
    }
});
