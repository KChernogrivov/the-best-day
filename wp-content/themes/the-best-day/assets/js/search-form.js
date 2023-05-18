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
