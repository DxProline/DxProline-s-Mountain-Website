
function validateLogin(event) {
    event.preventDefault();
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    let isValid = true;

    // Reset error styles
    document.querySelectorAll('.error').forEach(error => error.style.display = 'none');
    email.style.borderColor = '';
    password.style.borderColor = '';

/*odolnost proti "zlému uživateli" - výpis do stránky ano 1 XSS*/
    const sanitizedEmail = email.value.replace(/</g, "&lt;").replace(/>/g, "&gt;");

    
    if (!sanitizedEmail.includes('@')) {
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
    return isValid;
}
/*
function login(email) {
    const sanitizedEmail = email.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    localStorage.setItem('currentUser', sanitizedEmail);
}
function loadCurrentUser() {
    const currentUser = localStorage.getItem('currentUser');
    const loginLink = document.querySelector('#loginLink');

    if (loginLink === null || currentUser === null) {
        return;
    }
    loginLink.innerHTML = currentUser;
}


window.onload = loadCurrentUser;*/