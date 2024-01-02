// Fill Picked Image in Div
function fillImage(input, fillId) {
    let img = document.getElementById(fillId);

    if (input.files && input.files[0]) {
        if (input.files[0].size > 5120000) {
            showAlert(false, "Image size must not be more than 5MB");
        } else if (input.files[0].type.split("/")[0] != "image") {
            showAlert(false, "The file is not an image");
        } else {
            var reader = new FileReader();

            reader.onload = (e) => {
                img.setAttribute(
                    "style",
                    'background: url("' + e.target.result + '")'
                );
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
}

// Pick Image
function pickImage(inputId) {
    $("#" + inputId).click();
}

// Show Alert
function showAlert(status, message) {
    if (!status) {
        $("#alert-error").html(message);
        $("#alert-error").removeClass("d-none");

        setTimeout(() => {
            $("#alert-error").addClass("d-none");
            $("#alert-error").html("");
        }, 5500);
    } else {
        $("#alert-success").html(message);
        $("#alert-success").removeClass("d-none");

        setTimeout(() => {
            $("#alert-success").addClass("d-none");
            $("#alert-success").html("");
        }, 5500);
    }
}

// Generic Ajax GET function
function goGet(url) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "GET",
            url,
        })
            .then((res) => {
                resolve(res);
            })
            .catch((err) => {
                reject(err);
            });
    });
}

// Generic Ajax POST function
function goPost(url, data) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url,
            data,
            processData: false,
            contentType: false,
        })
            .then((res) => {
                resolve(res);
            })
            .catch((err) => {
                reject(err);
            });
    });
}

// Handle form error
function handleFormError(err, errPre = "") {
    if (err.status === 400) {
        errors = err.responseJSON.message;

        if (typeof errors === "object") {
            for (const [key, value] of Object.entries(errors)) {
                e = document.getElementById(errPre + key);
                e.innerHTML = "";
                [...value].forEach((m) => {
                    e.innerHTML += `<p>${m}</p>`;
                });
            }
            showAlert(false, "An error occured. Please check the form!");
        } else {
            showAlert(false, errors);
        }
    } else {
        showAlert(false, "Oops! Something's not right. Try Again");
    }
}

// Toggle Spinner
let btnDis = false;
function spin(id) {
    btnDis = !btnDis;
    $(`#${id}-txt`).toggle();
    $(`#${id}-spinner`).toggle();
    
    btnDis
        ? $(`#${id}-txt`).parent().attr("disabled", true)
        : $(`#${id}-txt`).parent().removeAttr("disabled");
}

// Turn off Form Errors
function offError(in_form = false) {
    $(".error-message").html("");
    in_form ? $("#form-error").addClass("d-none") : null;
}

// Format Number
function number_format(
    number,
    decimals = 2,
    decPoint = ".",
    thousandsSep = ","
) {
    number = (number + "").replace(/[^0-9+\-Ee.]/g, "");
    const n = !isFinite(+number) ? 0 : +number;
    const prec = !isFinite(+decimals) ? 0 : Math.abs(decimals);
    const sep = typeof thousandsSep === "undefined" ? "," : thousandsSep;
    const dec = typeof decPoint === "undefined" ? "." : decPoint;
    let s = "";
    const toFixedFix = function (n, prec) {
        if (("" + n).indexOf("e") === -1) {
            return +(Math.round(n + "e+" + prec) + "e-" + prec);
        } else {
            const arr = ("" + n).split("e");
            let sig = "";
            if (+arr[1] + prec > 0) {
                sig = "+";
            }
            return (+(
                Math.round(+arr[0] + "e" + sig + (+arr[1] + prec)) +
                "e-" +
                prec
            )).toFixed(prec);
        }
    };
    // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec).toString() : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
        s[1] = s[1] || "";
        s[1] += new Array(prec - s[1].length + 1).join("0");
    }
    return s.join(dec);
}
