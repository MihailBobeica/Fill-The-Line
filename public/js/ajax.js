function validateInput(formId, elementName) {
    let form = document.getElementById(formId);
    let formData = new FormData(form);
    let data = new FormData();
    data.append("_token", formData.get("_token"));
    data.append(elementName, formData.get(elementName));
    switch (elementName) {
        case "password":
            data.append("password_confirmation", formData.get("password"));
            break;
        case "password_confirmation":
            data.append("password", formData.get("password"));
            break;
    }
    $.ajax({
        url: form.action,
        type: form.method,
        processData: false,
        contentType: false,
        data: data,
        error: function(xhr, status, error){
            emptyErrorContainers();
            let validationErrors = JSON.parse(xhr.responseText).errors;
            let errorBag = elementName === "password_confirmation" ? "password" : elementName;
            if (validationErrors.hasOwnProperty(errorBag)) {
                let validationErrorMessage = validationErrors[errorBag][0];
                $(".error-" + elementName).append(validationErrorMessage);
            }
        }
    });
}

function validateAndSubmitForm(formId) {
    $("form#" + formId).submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: this.action,
            type: this.method,
            processData: false,
            contentType: false,
            data: new FormData(this),
            success: function(response) {
                window.location.href = response.redirect;
            },
            error: function(xhr, status, error) {
                let validationErrors = JSON.parse(xhr.responseText).errors;
                emptyErrorContainers();
                for (let elementName in validationErrors) {
                    let validationErrorMessage = validationErrors[elementName][0];
                    $(".error-" + elementName).append(validationErrorMessage);
                }
            }
        });
    });
}

function emptyErrorContainers() {
    /* seleziona gli elementi (in questo caso i div)
    che hanno una classe con prefisso `error-`
    e ne svuota il contenuto */
    $('[class^="error-"]').empty();
}
