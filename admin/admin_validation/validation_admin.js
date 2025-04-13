function validateTotalBookings() {
    var totalBookings = document.getElementById("total_bookings").value;
    var errorMessage = document.getElementById("totalBookingsError");
    if (totalBookings < 0) {
        errorMessage.innerHTML = "Total bookings cannot be negative.";
        return false;
    }
    errorMessage.innerHTML = "";
    return true;
}

function validatePayment(event) {
    var transactionID = document.getElementById("transaction_id").value;
    var errorMessage = document.getElementById("paymentError");
    if (transactionID.trim() === "") {
        errorMessage.innerHTML = "Transaction ID cannot be empty.";
        event.preventDefault(); // Prevent form submission
        return false;
    }
    errorMessage.innerHTML = "";
    return true;
}

function validateCustomer(event) {
    var customerName = document.getElementById("name").value;
    var errorMessage = document.getElementById("customerError");
    if (customerName.trim() === "") {
        errorMessage.innerHTML = "Customer name cannot be empty.";
        event.preventDefault(); // Prevent form submission
        return false;
    }
    errorMessage.innerHTML = "";
    return true;
}

function validateVehicle(event) {
    var ownerName = document.getElementById("owner").value;
    var errorMessage = document.getElementById("vehicleError");
    if (ownerName.trim() === "") {
        errorMessage.innerHTML = "Vehicle owner's name cannot be empty.";
        event.preventDefault(); // Prevent form submission
        return false;
    }
    errorMessage.innerHTML = "";
    return true;
}

function validateServiceRequest(event) {
    var serviceRequest = document.getElementById("customer").value; // Assuming this input is for a service request
    var errorMessage = document.getElementById("serviceError");
    if (serviceRequest.trim() === "") {
        errorMessage.innerHTML = "Service request cannot be empty.";
        event.preventDefault(); // Prevent form submission
        return false;
    }
    errorMessage.innerHTML = "";
    return true;
}

function validateForms(event) {
    var isValid = true;
    isValid &= validateTotalBookings();
    isValid &= validatePayment(event);
    isValid &= validateCustomer(event);
    isValid &= validateVehicle(event);
    isValid &= validateServiceRequest(event);
    return isValid;
}

// Attach the validateForms function to the form's onsubmit event
document.getElementById("yourFormId").onsubmit = function(event) {
    if (!validateForms(event)) {
        event.preventDefault(); // Prevent form submission if any validation fails
    }
};
