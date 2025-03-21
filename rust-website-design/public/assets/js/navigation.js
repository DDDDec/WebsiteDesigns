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

function homepage() {
    var homepage = document.getElementById('homepage');

    if (homepage.style.display == "block") {
        homepage.style.display = "none";
    } else {
        homepage.style.display = "block";
    }
}

function community() {
    var community = document.getElementById('community');

    if (community.style.display == "block") {
        community.style.display = "none";
    } else {
        community.style.display = "block";
    }
}

function support() {
    var support = document.getElementById('support');

    if (support.style.display == "block") {
        support.style.display = "none";
    } else {
        support.style.display = "block";
    }
}
