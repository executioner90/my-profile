document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default form submission behavior

    // Get form fields and error elements
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message');
    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const subjectError = document.getElementById('subjectError');
    const messageError = document.getElementById('messageError');
    const responseMessage = document.getElementById('response');

    // Validate form fields
    const isValidName = validateFormField(name, nameError, 50);
    const isValidEmail = validateFormField(email, emailError, null, null, /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    const isValidSubject = validateFormField(subject, subjectError, 50);
    const isValidMessage = validateFormField(message, messageError, null, 10);

    // If any field is invalid, stop further processing
    if (!isValidName || !isValidEmail || !isValidSubject || !isValidMessage) {
        return;
    }

    // Reset form fields
    resetInputs([name, nameError], [email, emailError], [subject, subjectError], [message, messageError]);

    // Send form data via Axios
    axios.post('/api/contact', {
        name: name.value.trim(),
        email: email.value.trim(),
        subject: subject.value.trim(),
        message: message.value.trim()
    })
        .then(() => {
            if (navigator.language === 'en-US') {
                responseMessage.innerText = 'Your message/question has been sent. Thank you!';
            } else {
                responseMessage.innerText = 'لقد تم إرسال رسالتك/سؤالك. شكرًا لك!';
            }

            responseMessage.style.color = 'green';
        })
        .catch(() => {
            if (navigator.language === 'en-US') {
                responseMessage.innerText = 'Submission failed. Please retry or Contact me via options below';
            } else {
                responseMessage.innerText = 'فشل التقديم. يرجى إعادة المحاولة أو الاتصال بي عبر الخيارات أدناه';
            }

            responseMessage.style.color = 'red';
        });
});

function validateFormField(field, errorElement, maxLength = null, minLength = null, validationRegex = null) {
    const value = field.value.trim();

    // Reset styles and error messages
    field.style.border = "none";
    if (!errorElement.classList.contains('hidden')) {
        errorElement.classList.add('hidden');
    }

    // Check if the field is empty
    if (!value) {
        field.style.border = "solid red";
        errorElement.classList.remove('hidden');
        return false;
    }

    // Check maximum length
    if (maxLength && value.length > maxLength) {
        field.style.border = "solid red";
        errorElement.classList.remove('hidden');
        return false;
    }

    // Check minimum length
    if (minLength && value.length < minLength) {
        field.style.border = "solid red";
        errorElement.classList.remove('hidden');
        return false;
    }

    // Check custom validation regex
    if (validationRegex && !value.match(validationRegex)) {
        field.style.border = "solid red";
        errorElement.classList.remove('hidden');
        return false;
    }

    return true;
}

// Define a function to reset form fields and error messages
function resetInputs(...fieldsAndErrors) {
    fieldsAndErrors.forEach(([field, errorElement]) => {
        field.style.border = "none";
        if (!errorElement.classList.contains('hidden')) {
            errorElement.classList.add('hidden');
        }
    });
}

