// Event
const more_detailed_event_bt = document.querySelector(".more_detailed_event_bt");

function event_bt(){
    window.location.href = "price/price_page.php"
}

// Offer games
const video_bt_Arizona = document.getElementById("video_bt_Arizona");
const video_bt_Job = document.getElementById("video_bt_Job");
const video_bt_Pavlov = document.getElementById("video_bt_Pavlov");

video_bt_Arizona.addEventListener("click", () =>{
    window.open("https://youtu.be/l_gWDl_f6V8?si=u1a6M9WSsj39ddOD");  
});
video_bt_Job.addEventListener("click", () =>{
    window.open("https://youtu.be/8H9ieJk8AJ4?si=hUn40EIM-Jk4C5qY");  
});

video_bt_Pavlov.addEventListener("click", () =>{
    window.open("https://youtu.be/6P8Vi0DJ7sw?si=uHpl2Ukmm0UyX3SF");  
});

const catalog_games_bt = document.querySelector(".catalog_games_bt");

catalog_games_bt.addEventListener("click", () =>{
    window.location.href = "games/games_page.php"
});

/////// Sequence
const booking = document.querySelector(".booking");

booking.addEventListener("click", () =>{
    createApplicationBt.click();
});


function enter_main() {
    window.location.href = "entrance_form/entrance_form.php"
}


/////// Basement
const tg_soch = document.querySelector(".tg_soch");

tg_soch.addEventListener("click", () =>{
    window.open("https://t.me/vr_club_kaluga");
});

const vk_soch = document.querySelector(".vk_soch");

vk_soch.addEventListener("click", () =>{
    window.open("https://vk.com/o1dpet");
});


/////// Конопка UpTop

const btUp = document.querySelector(".btUp");

btUp.addEventListener("click", goTop);

window.addEventListener("scroll", trackScroll);

function trackScroll(){
    const offset = window.pageYOffset;
    const coords = document.documentElement.clientHeight;

    if(offset > coords){
        btUp.classList.add("bt-top--show");
    } else {
        btUp.classList.remove("bt-top--show"); 
    }
}

function goTop(){
    if(window.pageYOffset > 0){
        window.scrollBy(0, -45);
        
        setTimeout(goTop, 0);
    } 

}

$(document).ready( function() {
    var createApplicationBt = document.getElementById('createApplicationBt');
    var registerYes = document.getElementById('registerYes');
    var registerNo = document.getElementById('registerNo');
    var bt_close = document.querySelector(".bt_close");
    var modal = document.querySelector(".modal");
    var to_send_bt = document.querySelector(".to_send_bt")
    

    createApplicationBt.addEventListener('click', function() {
        if (isAuthorized) {
            modal.hidden = false;

            bt_close.addEventListener("click", ()=>{
                modal.hidden = true;
            })
            
            // to_send_bt.addEventListener("click", (event)=>{
            //     event.preventDefault();
            //     modal.hidden = true;
            // })
            
        } else if (!isAuthorized) {
            document.getElementById('modal_reg').style.cssText="visibility: inherit;";
            registerYes.addEventListener("click", function(){
                window.location.href = '../entrance_form/registration_form.php';
                document.getElementById('modal_reg').style.cssText="visibility: hidden;";
            });
            registerNo.addEventListener("click", function(){
               document.getElementById('modal_reg').style.cssText="visibility: hidden;";
            });
        }
    });

    $("#phone").mask("+7 (999) 999-99-99");
    $("#date").mask('99.99.9999');
    $("#time").mask('99:99-99:99');

    $("#date_all").mask('99.99.9999');
    $("#time_all").mask('99:99-99:99');

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
