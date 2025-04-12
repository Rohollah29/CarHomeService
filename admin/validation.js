document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        // Clear previous error messages
        clearErrors();
        
        // Validate fields
        const isFirstNameValid = validateFirstName();
        const isLastNameValid = validateLastName();
        const isEmailValid = validateEmail();
        const isPhoneValid = validatePhone();
        const isCarBrandValid = validateCarBrand();
        
        // If any validation fails, prevent form submission
        if (!isFirstNameValid || !isLastNameValid || !isEmailValid || !isPhoneValid || !isCarBrandValid) {
            event.preventDefault();
        }
    });
    
    function clearErrors() {
        const errorElements = document.querySelectorAll('.error-message');
        errorElements.forEach(element => element.remove());
    }
    
    function showError(inputElement, message) {
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.style.color = 'red';
        errorElement.innerHTML = message;
        inputElement.parentNode.insertBefore(errorElement, inputElement.nextSibling);
    }
    
    function validateFirstName() {
        const firstName = document.getElementById('first_name');
        if (firstName.value.trim() === '') {
            showError(firstName, 'First name is required');
            return false;
        }
        return true;
    }
    
    function validateLastName() {
        const lastName = document.getElementById('last_name');
        if (lastName.value.trim() === '') {
            showError(lastName, 'Last name is required');
            return false;
        }
        return true;
    }
    
    function validateEmail() {
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (email.value.trim() === '') {
            showError(email, 'Email is required');
            return false;
        } else if (!emailRegex.test(email.value)) {
            showError(email, 'Please enter a valid email address');
            return false;
        }
        return true;
    }
    
    function validatePhone() {
        const phone = document.getElementById('phone');
        const phoneRegex = /^[0-9]{11}$/;
        
        if (phone.value.trim() === '') {
            showError(phone, 'Phone number is required');
            return false;
        } else if (!phoneRegex.test(phone.value)) {
            showError(phone, 'Phone number must be 11 digits');
            return false;
        }
        return true;
    }
    
    function validateCarBrand() {
        const carBrand = document.getElementById('car_brand');
        if (carBrand.value === 'Select Car Brand') {
            showError(carBrand, 'Please select a car brand');
            return false;
        }
        return true;
    }
});