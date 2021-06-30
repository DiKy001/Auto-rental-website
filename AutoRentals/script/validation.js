(function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    alert("Бронирование осуществлено успешно, ожидайте звонка менеджера!");
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

document.getElementById("startDate").onchange = function() {
    document.getElementById("finishDate").value = "";
    document.getElementById("finishDate").min = document.getElementById("startDate").value;
}

document.getElementById("phone").oninput = function() {
    this.value = this.value.replace(/[^0-9+. \-()]/g, '').replace(/(\..*)\./g, '$1');
}