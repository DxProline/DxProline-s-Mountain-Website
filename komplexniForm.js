window.onload = function() {
    loadCurrentUser();
    loadCart();
    document.getElementById('email').value = localStorage.getItem('currentUser');
};
function validateForm(event) {

    event.preventDefault();
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    let isValid = true;

    
    // Reset warnings
    const warnings = document.querySelectorAll('.warning');
    warnings.forEach(warning => warning.style.display = 'none');

    /*neztrácí se uživatelem vyplněné hodnoty */
    if (!emailInput.value.includes('@')) {
        document.getElementById('email-warning').style.display = 'block';
        emailInput.style.borderColor = 'red';
        isValid = false;
    } else {
        emailInput.style.borderColor = '';
    }

    // Validate phone number
    if (!/^\d{9}$/.test(phoneInput.value)) {
        document.getElementById('phone-warning').style.display = 'block';
        phoneInput.style.borderColor = 'red';
        isValid = false;
    } else {
        phoneInput.style.borderColor = '';
    }

    if (isValid) {
        alert('Formulář byl úspěšně odeslán');
        document.getElementById('contact-form').reset();
    }
}