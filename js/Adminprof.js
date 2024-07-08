const buttonCreate = document.querySelector(".buttonCreate");
const bt_close = document.querySelector(".bt_close");
const modal = document.querySelector(".modal");

const applications_all = document.getElementById("applications_all");
const applications_processed = document.getElementById("applications_processed");
const applic_list = document.querySelector(".applic_list");
const applic_list_true = document.querySelector(".applic_list_true");

const create_applications = document.querySelector(".create-applications");
const applications_date = document.querySelector(".selection-applications-date");
const to_send_bt = document.querySelector(".to_send_bt")


buttonCreate.addEventListener("click", ()=>{
    modal.hidden = false
})

bt_close.addEventListener("click", ()=>{
    modal.hidden = true;
})

to_send_bt.addEventListener("click", ()=>{
    modal.hidden = true;
})


applications_all.addEventListener("click", ()=>{
    applic_list.hidden = false;
    create_applications.hidden = false;
    applic_list_true.hidden = true;
    applications_date.hidden = true;

})
applications_processed.addEventListener("click", ()=>{
    applic_list.hidden = true;
    create_applications.hidden = true;
    applic_list_true.hidden = false;
    applications_date.hidden = false;
    
})



$(document).ready(function(){
    $("#phone").mask("+7 (999) 999-99-99");
    $("#date").mask('99.99.9999');
    $("#time").mask('99:99-99:99');

    // Применяем маску ко всем элементам с классом NameDate
    $(".NameDate").each(function() {
        $(this).mask('99.99.9999');
    });

    // Применяем маску ко всем элементам с классом NameTime
    $(".NameTime").each(function() {
        $(this).mask('99:99-99:99');
    });


    $("#date_true").mask('99.99.9999');

    var fio_name = $('#fio_name');
    var fio_texst =  $('#fio_texst');

    var phone =  $('#phone');
    var phone_texst =  $('#phone_texst');

    var type_visit = $('#type_visit');
    var visit_texst = $('#visit_texst');

    var people =  $('#people');
    var kol_people_texst =  $('#kol_people_texst');

    type_visit.blur(function(){
        if(type_visit.val() != null ){
            visit_texst.text("Тип выбран");
            type_visit.removeClass("false").addClass("true");
            visit_texst.removeClass("false_texst").addClass("true_texst");
        }else{
            visit_texst.text("Выберите тип посещения из списака!");
            type_visit.removeClass("true").addClass("false");
            visit_texst.removeClass("true_texst").addClass("false_texst");
        }
    })

    fio_name.blur(function(){
        var test_fio = /^[A-Z][a-z]*$|^[А-ЯЁ][а-яё]*$/; 
        var words = fio_name.val().split(/\s+/); 
        var allWordsValid = words.every(function(word) {
            return test_fio.test(word);
        });
        if(fio_name.val() != ''){
            if(allWordsValid){
                fio_texst.text("ФИО введено правильно");
                fio_name.removeClass("false").addClass("true");
                fio_texst.removeClass("false_texst").addClass("true_texst");
            } else {
                fio_texst.text("ФИО введено не верно!(должно начинатся с заглвной буквы)");
                fio_name.removeClass("true").addClass("false");
                fio_texst.removeClass("true_texst").addClass("false_texst");
            }
        } else {
            fio_texst.text("Поле не должно быть пустым!");
            fio_name.removeClass("true").addClass("false");
            fio_texst.removeClass("true_texst").addClass("false_texst");
        }
    });

    phone.blur(function(){
        if(phone.val() != ''){
            phone_texst.text("Телефон введен корректно");
            phone.removeClass("false").addClass("true");
            phone_texst.removeClass("false_texst").addClass("true_texst");
    
        }else{
            phone_texst.text("Поле не должно быть пустым!");
            phone.removeClass("true").addClass("false");
            phone_texst.removeClass("true_texst").addClass("false_texst");
        }
    })

    people.blur(function(){
        if(people.val() != ''){
            if(people.val() > 0){
                kol_people_texst.text("Количество человек введено корректно");
                people.removeClass("false").addClass("true");
                kol_people_texst.removeClass("false_texst").addClass("true_texst");
            }else{
                kol_people_texst.text("Количество человек должно быть больше 0!");
                people.removeClass("true").addClass("false");
                kol_people_texst.removeClass("true_texst").addClass("false_texst");
            }
    
        }else{
            kol_people_texst.text("Поле не должно быть пустым!");
            people.removeClass("true").addClass("false");
            kol_people_texst.removeClass("true_texst").addClass("false_texst");
        }
    })

    var date = $("#date");
    var date_text = $("#date_text");
    date.blur(function(){
        const input = date.val();
        const regex = /^(\d{2})\.(\d{2})\.(\d{4})$/;
    
        if (regex.test(input)) {
            const [day, month, year] = input.split('.').map(Number);
            const inputDate = new Date(year, month - 1, day);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
    
            if (inputDate >= today) {
                // // Создаем объект даты
                const dates = new Date(year, month, day);

                // Проверяем, что дата корректная и соответствует введенным значениям
                if (dates.getFullYear() === year && dates.getMonth() === month && dates.getDate() === day) {
                    date_text.text("Дата введена корректно");
                    date.removeClass("false").addClass("true");
                    date_text.removeClass("false_texst").addClass("true_texst"); 
                } else {
                    date_text.text("Такой даты не существует!");
                    date.removeClass("true").addClass("false");
                    date_text.removeClass("true_texst").addClass("false_texst");
                }


            }else{
                date_text.text("Дата должна быть не меньше сегодняшней");
                date.removeClass("true").addClass("false");
                date_text.removeClass("true_texst").addClass("false_texst");
            }
        }else{
            date_text.text("Поле не должно быть пустым!");
            date.removeClass("true").addClass("false");
            date_text.removeClass("true_texst").addClass("false_texst");
        }
    
    });


    var time = $("#time");
    var time_text = $("#time_text");

    time.blur(function(){
        var timePattern = /^([01]\d|2[0-3]):([0-5]\d)-([01]\d|2[0-3]):([0-5]\d)$/;

        if(time.val() !== ''){
            if(timePattern.test(time.val())){
                time_text.text("Время введено корректно");
                time.removeClass("false").addClass("true");
                time_text.removeClass("false_texst").addClass("true_texst");
            } else {
                time_text.text("Некорректное время!");
                time.removeClass("true").addClass("false");
                time_text.removeClass("true_texst").addClass("false_texst");
            }
        } else {
            time_text.text("Поле не должно быть пустым!");
            time.removeClass("true").addClass("false");
            time_text.removeClass("true_texst").addClass("false_texst");
        }
    })


    function getFormById(formId) {
        return document.getElementById(formId);
    }

    // Добавление обработчика события изменения значения поля
    function addChangeEventListener(elementId, form) {
        var element = document.getElementById(elementId);
        if (element) {
            element.addEventListener('change', function() {
                form.submit(); // Отправка формы при изменении значения поля
            });
        }
    }

    var form = getFormById('applicationForm');
    if (form) {
        addChangeEventListener('date_all', form);
        addChangeEventListener('time_all', form);
    }


});


let people = document.querySelector('#people');
people.oninput = function(e){
  this.value = this.value.substr(0, 2);
  this.value = this.value.replace(/[^0-9]/g, '');
  var value = parseInt(e.target.value);
  if(value > 20) {
      e.target.value = e.target.value.slice(0, -1);
  }
}

const dateInput = document.querySelector('.txtInputSelection-date');
const findButton = document.querySelector('.buttonFind');
const applications = document.querySelectorAll('.list_application_info_true');

findButton.addEventListener('click', function() {
    const inputDate = dateInput.value.trim();
    if (inputDate === "") {
        applications.forEach(application => {
            application.hidden = false;
        });
    } else {
        applications.forEach(application => {
            const applicationDate = application.querySelector('.NameDate_true').textContent.trim();
            if (inputDate === applicationDate) {
                application.hidden = false;
            } else {
                application.hidden = true;
            }
        });
    }
});

let managements = function() {
    const management = document.querySelectorAll(".management");

    management.forEach(function(management) {
        const icon_management = management.nextElementSibling;
        let imgElement = document.createElement("img");

        if (management.textContent.trim() == "Отказано") {
            imgElement.src = "/img/icon_app/Refused.png";
            imgElement.alt = "Refused Icon";
            imgElement.classList.add("Icon_app");
        } else if (management.textContent.trim() == "Принято") {
            imgElement.src = "/img/icon_app/Accepted.png";
            imgElement.alt = "Accepted Icon";
            imgElement.classList.add("Icon_app");
        }
        
        if (icon_management) {
            icon_management.appendChild(imgElement);
        }
    });
}

managements();




