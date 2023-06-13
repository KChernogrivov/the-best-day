const time = document.getElementById("time-field");
const money = document.getElementById("money-field");
const emotion = document.getElementById("emotion-field");
const partner = document.getElementById("partner-field");

const timeDropdown = document.getElementById("time-field__dropdown");
const moneyDropdown = document.getElementById("money-field__dropdown");
const emotionDropdown = document.getElementById("emotion-field__dropdown");
const partnerDropdown = document.getElementById("partner-field__dropdown");

const fields = [time, money, emotion, partner];
const dropdowns = [timeDropdown, moneyDropdown, emotionDropdown, partnerDropdown];

time.addEventListener('click', openMenu.bind(event, timeDropdown));
money.addEventListener("click", openMenu.bind(event, moneyDropdown));
emotion.addEventListener("click", openMenu.bind(event, emotionDropdown));
partner.addEventListener("click", openMenu.bind(event, partnerDropdown));

function openMenu(event) {
    let otherFields = dropdowns.filter((item) => item !== event);
    otherFields.forEach((field) => field.classList.remove("open"));
    event.classList.toggle("open");
    return "";
}

let speed = 1;

let scroll = document.querySelector('.profile-menu__items');

let left = 0;
let drag = false;
let coorX = 0;

links = document.querySelectorAll(".profile-menu__link");
links.forEach((elem) => {
    elem.addEventListener('mousedown', function (e) {
        e.preventDefault();
    });
});

function removeDefaultPrevent(event) {
    event.preventDefault();
}

scroll.addEventListener('mousedown', function(e) {
    drag = true;
    coorX = e.pageX - this.offsetLeft;
    links.forEach((elem) => {
        elem.removeEventListener('click', removeDefaultPrevent);
    });
});
document.addEventListener('mouseup', function(e) {
    drag = false;
    left = scroll.scrollLeft;
});
scroll.addEventListener('mousemove', function(e) {
    if (drag) {
        this.scrollLeft = left - (e.pageX - this.offsetLeft - coorX)*speed;
        links.forEach((elem) => {
            elem.addEventListener('click', removeDefaultPrevent);
        });
    }
});

scroll.addEventListener('click', function(event) {
    if (drag === true) {
        event.preventDefault();
    }
});

function submitForm() {
    document.getElementById("searchformmobile").submit();
}

function settingsSearch() {
    let mobileSearchSettings = document.querySelector('.search-menu--mobile');
    let body = document.querySelector("body");
    mobileSearchSettings.classList.toggle("search-menu--mobile-open");
    body.classList.toggle('no_scroll');
}