const form = document.getElementById('loginform');

form.addEventListener('submit', function (e) {
    e.preventDefault();

    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');

    const inputEmail = emailInput.value;
    const inputPass = passwordInput.value;

    const formData = new FormData();
    formData.append('email', inputEmail);
    formData.append('password', inputPass);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.includes('success')) {
            window.location.href = '../profile/pro.php'; 
        } else if (data.includes('succeed')) {
            window.location.href = '../admin/admin.php'; 
        } else {
            alert(data);
        }
    })
    .catch(error => console.error('Error:', error));
});
