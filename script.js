// script.js

function submitForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    fetch('/submit-form', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name, email, message }),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        document.getElementById('customerForm').reset();
    })
    .catch(error => console.error('Error:', error));
}
