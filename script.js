function validateForm() {
    const fields = document.querySelectorAll('.form-field');

    for (let field of fields) {
        if (!field.value.trim()) {
            alert(`Please fill in the ${field.name} field.`);
            field.focus();
            return false;
        }

        if (field.name === "email") {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(field.value)) {
                alert("Please enter a valid email address.");
                field.focus();
                return false;
            }
        }

        if (field.name === "phone") {
            const phonePattern = /^\d{10}$/;
            if (!phonePattern.test(field.value)) {
                alert("Phone number must be exactly 10 digits.");
                field.focus();
                return false;
            }
        }
    }

    return true;
}
