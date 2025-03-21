function navigator() {
    var navigator = document.getElementById('phone-navigation-popup');
    var body = document.getElementById('body');

    if (navigator.style.display == "block") {
        navigator.style.display = "none";
        body.style.overflowY = 'scroll';
    } else {
        navigator.style.display = "block";
        body.style.overflowY = 'hidden';
    }
}

function navigate() {
    var homepage = document.getElementById('homepage');
    var community = document.getElementById('community');
    var support = document.getElementById('support');


}
