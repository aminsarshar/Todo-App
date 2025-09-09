import './bootstrap';
// Form submission example
document.getElementById('contact-form').addEventListener('submit', async function(e) {
e.preventDefault();

try {
const response = await submitForm(this);

if (response.success) {
    // Show success notification
    flasher.success('Your message has been sent!', 'Thank You');
} else {
    // Show error notification
    flasher.error('Please check your form inputs', 'Error');
}
} catch (error) {
// Show error notification with details
flasher.error('Server error, please try again later.', 'Error');
console.error(error);
}
});
