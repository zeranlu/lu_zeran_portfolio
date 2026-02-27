export function contactForm() {

    const form = document.querySelector("#contactForm");
    const feedBack = document.querySelector("#feedback-con");

    function regForm(event) {
        event.preventDefault();
        // console.log("form has been called");

        const thisForm = event.currentTarget;
        const url = "contact.php";

        // console.log(thisForm.elements.lname.value);

        // const formData = 
        // "fname=" + thisForm.elements.fname.value + 
        // "&lname=" + thisForm.elements.lname.value + 
        // "&email=" + thisForm.elements.email.value +
        // "&message=" + thisForm.elements.message.value;
        // console.log(formData);

        const formData = new URLSearchParams ({
            lname: thisForm.elements.lname.value,
            fname: thisForm.elements.fname.value,
            email: thisForm.elements.email.value,
            message: thisForm.elements.message.value
        })

        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: formData
        })
        .then(response => response.json())
        .then(responseText => {
            console.log(responseText);
            feedBack.innerHTML = '';

            if (responseText.errors) {
                responseText.errors.forEach(error => {
                    const errorElement = document.createElement("p");
                    errorElement.textContent = error;
                    feedBack.appendChild(errorElement);
                })
            } else {
                const messageElement = document.createElement("p");
                messageElement.textContent = responseText.message;
                feedBack.appendChild(messageElement);
            }
            feedBack.scrollIntoView({
                behavior: 'smooth',
                block: 'end'
            })
        })
        .catch(error => {
            console.error("Error during fetch:", error);
            feedBack.innerHTML = "";
            
            const errorMessageElement = document.createElement("p");
            errorMessageElement.textContent = "Sorry, something went wrong. Please try again later.";
            feedBack.appendChild(errorMessageElement);
        });
    }

    form.addEventListener("submit", regForm);
}