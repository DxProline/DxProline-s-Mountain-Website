document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault(); // Zabránění odeslání formuláře

    const email = document.getElementById('email').value;
    const emailError = document.getElementById('email-error');
    emailError.style.display = 'none';

    fetch('action/resetPassword.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ email: email })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message); // Zobrazení úspěšné hlášky
            } else {
                emailError.textContent = data.message;
                emailError.style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Chyba:', error);
            alert('Došlo k chybě při zpracování požadavku.');
        });
});