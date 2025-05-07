// Form Validation
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name === '' || email === '' || message === '') {
        alert('Please fill in all fields.');
    } else {
        alert('Thank you for contacting us, ' + name + '! We will get back to you shortly.');
    }
});
document.getElementById('instagram-button').addEventListener('click', function() {
    window.location.href = 'https://www.instagram.com/invites/contact/?igsh=nl05m54ytd19&utm_content=waogf50 '; // Replace 'yourusername' with the Instagram handle
});

// fency & white

// not negative value allowed
function checkNegative(input) {
    // Agar input negative value hai to usse positive bana dena
    if (input.value < 1) {
        input.value = Math.abs(input.value);
    }
}
document.querySelector("input").addEventListener("keypress", function (evt) {
if (evt.which < 48 || evt.which > 57)
{
evt.preventDefault();
}
});


