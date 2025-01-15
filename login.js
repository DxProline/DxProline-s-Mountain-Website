
function validateLogin(event) {
    event.preventDefault();
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    let isValid = true;
    // Reset error styles
    document.querySelectorAll('.error').forEach(error => error.style.display = 'none');
    email.style.borderColor = '';
    password.style.borderColor = '';
    // Validate email
    if (!email.value.includes('@')) {
        document.getElementById('email-error').style.display = 'block';
        email.style.borderColor = 'red';
        isValid = false;
    }
    // Validate password (optional: non-empty check)
    if (!password.value) {
        document.getElementById('password-error').style.display = 'block';
        password.style.borderColor = 'red';
        isValid = false;
    }
    if (isValid) {
        alert('Přihlášení bylo úspěšné!');
        // Další logika pro přihlášení zde
    }
}

function login() {
    const email = document.getElementById('email').value;
    localStorage.setItem('currentUser', email);
    window.location.href = 'index.html';
}
function loadCurrentUser() {
    const currentUser = localStorage.getItem('currentUser');
    const loginLink = document.querySelector('#loginLink');

    if (loginLink === null || currentUser === null) {
        return;
    }
    loginLink.innerHTML = currentUser;
}


window.onload = loadCurrentUser;