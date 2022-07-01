import Cookies from '/js.cookie.minm.js';
if (!Cookies.get('id'))
    getid();
else {
    displayid(Cookies.get('id'));
    register(Cookies.get('id'), step);
}

function getid() {
    $.ajax({
        url: 'https://urlookingforthispage.ru/logger.php',
        method: 'post',
        dataType: 'html',
        data: {action: 'getid'},
        success: function(data){
            setid(data);
            register(data, step);
        }
    });
}

function setid(id) {
    Cookies.set('id', id, {expires: 365, domain: "urlookingforthispage.ru"});
    displayid(id);
}

function displayid(id) {
    $('#userid').html(id);
}

function register(id, step) {
    $.ajax({
        url: 'https://urlookingforthispage.ru/logger.php',
        method: 'post',
        dataType: 'html',
        data: {action: 'register', id: id, step: step},
        success: function(data){
        }
    });
}