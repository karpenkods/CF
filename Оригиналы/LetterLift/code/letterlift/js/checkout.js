// Checkout Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    initCheckoutPage();
});

function initCheckoutPage() {
    loadSelectedPlan();
    populateStateDropdowns();
    populateCardDropdowns();
    initBillingToggle();
    initFormValidation();
    initCheckoutForm();
}

// Load selected plan from localStorage
function loadSelectedPlan() {
    const selectedPlan = localStorage.getItem('selectedPlan');
    
    if (selectedPlan) {
        const plan = JSON.parse(selectedPlan);
        updatePlanDisplay(plan.name, plan.price);
    } else {
        // Default plan if none selected
        updatePlanDisplay('Essential', '9.99');
    }
}

function updatePlanDisplay(planName, planPrice) {
    const price = parseFloat(planPrice);
    const formattedPrice = '$' + price.toFixed(2);
    
    // Update order summary
    document.getElementById('plan-name').textContent = planName;
    document.getElementById('plan-price').textContent = formattedPrice;
    document.getElementById('total-amount').textContent = formattedPrice;
    
    // Update agreement checkbox
    document.getElementById('charge-amount').textContent = formattedPrice;
    document.getElementById('charge-plan-name').textContent = planName;
    
    // Update payment button
    document.getElementById('pay-button').textContent = `Pay ${formattedPrice} Now`;
}

// Populate state/region dropdowns
function populateStateDropdowns() {
    const states = [
        'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 
        'Delaware', 'District of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 
        'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 
        'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 
        'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 
        'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 
        'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 
        'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 
        'Wisconsin', 'Wyoming', 'American Samoa', 'Guam', 'Northern Mariana Islands', 
        'Puerto Rico', 'U.S. Virgin Islands', 'Armed Forces Africa', 'Armed Forces Americas', 
        'Armed Forces Canada', 'Armed Forces Europe', 'Armed Forces Middle East', 
        'Armed Forces Pacific'
    ];
    
    const stateSelect = document.getElementById('state');
    const billingStateSelect = document.getElementById('billing-state');
    
    // Add default option
    const defaultOption = document.createElement('option');
    defaultOption.value = '';
    defaultOption.textContent = 'Select State/Region';
    stateSelect.appendChild(defaultOption);
    billingStateSelect.appendChild(defaultOption.cloneNode(true));
    
    // Add state options
    states.forEach(state => {
        const option = document.createElement('option');
        option.value = state;
        option.textContent = state;
        stateSelect.appendChild(option);
        billingStateSelect.appendChild(option.cloneNode(true));
    });
}

// Populate card month and year dropdowns
function populateCardDropdowns() {
    const monthSelect = document.getElementById('card-month');
    const yearSelect = document.getElementById('card-year');
    
    // Add default options
    const defaultMonthOption = document.createElement('option');
    defaultMonthOption.value = '';
    defaultMonthOption.textContent = 'Month';
    monthSelect.appendChild(defaultMonthOption);
    
    const defaultYearOption = document.createElement('option');
    defaultYearOption.value = '';
    defaultYearOption.textContent = 'Year';
    yearSelect.appendChild(defaultYearOption);
    
    // Add months (1-12)
    for (let i = 1; i <= 12; i++) {
        const option = document.createElement('option');
        option.value = i.toString().padStart(2, '0');
        option.textContent = i.toString().padStart(2, '0');
        monthSelect.appendChild(option);
    }
    
    // Add years (2025-2039)
    const currentYear = new Date().getFullYear();
    for (let i = currentYear; i <= currentYear + 15; i++) {
        const option = document.createElement('option');
        option.value = i.toString();
        option.textContent = i.toString();
        yearSelect.appendChild(option);
    }
}

// Initialize billing address toggle
function initBillingToggle() {
    const sameAsShippingCheckbox = document.getElementById('same-as-shipping');
    const billingSection = document.getElementById('billing-info-section');
    
    sameAsShippingCheckbox.addEventListener('change', function() {
        if (this.checked) {
            billingSection.classList.add('hidden');
            clearBillingFields();
        } else {
            billingSection.classList.remove('hidden');
            copyShippingToBilling();
        }
    });
}

function clearBillingFields() {
    const billingFields = [
        'billing-first-name', 'billing-last-name', 'billing-address1', 
        'billing-postal-code', 'billing-city', 'billing-state'
    ];
    
    billingFields.forEach(fieldId => {
        document.getElementById(fieldId).value = '';
    });
}

function copyShippingToBilling() {
    const fieldMappings = {
        'first-name': 'billing-first-name',
        'last-name': 'billing-last-name',
        'address1': 'billing-address1',
        'postal-code': 'billing-postal-code',
        'city': 'billing-city',
        'state': 'billing-state'
    };
    
    Object.entries(fieldMappings).forEach(([shippingId, billingId]) => {
        const shippingValue = document.getElementById(shippingId).value;
        document.getElementById(billingId).value = shippingValue;
    });
}

// Form validation
function initFormValidation() {
    const form = document.getElementById('checkout-form');
    const inputs = form.querySelectorAll('input, select');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            clearFieldError(this);
        });
    });
}

function validateField(field) {
    const value = field.value.trim();
    const fieldType = field.type;
    const fieldId = field.id;
    let isValid = true;
    let errorMessage = '';
    
    // Required field validation
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = 'This field is required.';
    }
    
    // Email validation
    else if (fieldType === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid email address.';
        }
    }
    
    // Phone validation
    else if (fieldType === 'tel' && value) {
        const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
        if (!phoneRegex.test(value.replace(/[\s\-\(\)]/g, ''))) {
            isValid = false;
            errorMessage = 'Please enter a valid phone number.';
        }
    }
    
    // Card number validation
    else if (fieldId === 'card-number' && value) {
        const cardRegex = /^[\d\s]{13,19}$/;
        if (!cardRegex.test(value.replace(/\s/g, ''))) {
            isValid = false;
            errorMessage = 'Please enter a valid card number.';
        }
    }
    
    // CVV validation
    else if (fieldId === 'cvv' && value) {
        const cvvRegex = /^\d{3,4}$/;
        if (!cvvRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid CVV code.';
        }
    }
    
    // Postal code validation
    else if ((fieldId === 'postal-code' || fieldId === 'billing-postal-code') && value) {
        const postalRegex = /^\d{5}(-\d{4})?$/;
        if (!postalRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid postal code.';
        }
    }
    
    if (!isValid) {
        showFieldError(field, errorMessage);
    } else {
        clearFieldError(field);
    }
    
    return isValid;
}

function showFieldError(field, message) {
    field.classList.add('error');
    
    // Remove existing error message
    const existingError = field.parentNode.querySelector('.error-message');
    if (existingError) {
        existingError.remove();
    }
    
    // Add new error message
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.textContent = message;
    field.parentNode.appendChild(errorDiv);
}

function clearFieldError(field) {
    field.classList.remove('error');
    const errorMessage = field.parentNode.querySelector('.error-message');
    if (errorMessage) {
        errorMessage.remove();
    }
}

// Initialize checkout form submission
function initCheckoutForm() {
    const form = document.getElementById('checkout-form');
    const payButton = document.getElementById('pay-button');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateForm()) {
            processPayment();
        }
    });
}

function validateForm() {
    const form = document.getElementById('checkout-form');
    const requiredFields = form.querySelectorAll('[required]');
    const checkboxes = form.querySelectorAll('input[type="checkbox"][required]');
    let isValid = true;
    
    // Validate required fields
    requiredFields.forEach(field => {
        if (!validateField(field)) {
            isValid = false;
        }
    });
    
    // Validate required checkboxes
    checkboxes.forEach(checkbox => {
        if (!checkbox.checked) {
            isValid = false;
            showFieldError(checkbox, 'This agreement is required.');
        }
    });
    
    // Special validation for billing fields if billing section is visible
    const billingSection = document.getElementById('billing-info-section');
    if (!billingSection.classList.contains('hidden')) {
        const billingRequiredFields = billingSection.querySelectorAll('[required]');
        billingRequiredFields.forEach(field => {
            if (!validateField(field)) {
                isValid = false;
            }
        });
    }
    
    return isValid;
}

function processPayment() {
    const payButton = document.getElementById('pay-button');
    
    // Show loading state
    payButton.classList.add('loading');
    payButton.disabled = true;
    
    // Simulate payment processing
    setTimeout(() => {
        // Hide loading state
        payButton.classList.remove('loading');
        payButton.disabled = false;
        
        // Show success modal
        if (window.LetterLift && window.LetterLift.showModal) {
            window.LetterLift.showModal('payment-success-modal');
        }
        
        // Clear form
        document.getElementById('checkout-form').reset();
        
        // Clear selected plan from localStorage
        localStorage.removeItem('selectedPlan');
        
    }, 2000);
}

// Card number formatting
document.getElementById('card-number').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\s/g, '');
    let formattedValue = value.replace(/(.{4})/g, '$1 ').trim();
    
    if (formattedValue.length > 19) {
        formattedValue = formattedValue.substring(0, 19);
    }
    
    e.target.value = formattedValue;
});

// CVV input restriction
document.getElementById('cvv').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length > 4) {
        value = value.substring(0, 4);
    }
    e.target.value = value;
});

// Phone number formatting
document.getElementById('phone').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length >= 10) {
        value = value.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
    }
    e.target.value = value;
});

// Postal code formatting
document.getElementById('postal-code').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length > 5) {
        value = value.substring(0, 5) + '-' + value.substring(5, 9);
    }
    e.target.value = value;
});

document.getElementById('billing-postal-code').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length > 5) {
        value = value.substring(0, 5) + '-' + value.substring(5, 9);
    }
    e.target.value = value;
});

