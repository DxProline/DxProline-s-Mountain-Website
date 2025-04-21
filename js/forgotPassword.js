//zapomenuté heslo
document.addEventListener("DOMContentLoaded", function () {
    //AJAX pro reset hesla
    document.getElementById('reset-button').addEventListener('click', function (e) {
        e.preventDefault(); // Zabránění odeslání formuláře
        document.getElementById('reset-button').disabled = true;
        const email = document.getElementById('email').value;
        const emailError = document.getElementById('email-error');
        emailError.style.display = 'none';

        fetch('action/resetPassword.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: new URLSearchParams({email: email})
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message); // Zobrazení úspěšné hlášky
                    window.location.href = "login.php"
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
});
