const api = {
    key: "c97c24a201543b1ae896494ed99f045b",
    base_url: "https://api.openweathermap.org/data/2.5/"
}

const searchElement = document.querySelector('.search-box');
const searchbox = new google.maps.places.SearchBox(searchElement)

// Google search box for location
searchbox.addListener('places_changed', () => {
    const place = searchbox.getPlaces()[0]

    if (place == null) return

    const latitude = place.geometry.location.lat();
    const longitude = place.geometry.location.lng();

    getResponse(latitude, longitude);
});

// Could put in a switch for C to F
function getResponse(lat, lon) {
    fetch(`${api.base_url}weather?lat=${lat}&lon=${lon}&units=imperial&appid=${api.key}`)
        .then(weather => {
            return weather.json();
        }).then(displayResults);
}

function displayResults(weather) {
    let icon = document.getElementById("weather-icon");
    let site_icon = weather.weather[0].icon;
    gradientShift(site_icon);
    icon.src = `http://openweathermap.org/img/wn/${site_icon}@4x.png`

    let city = document.querySelector('.city');
    city.innerText = `${weather.name}, ${weather.sys.country}`;

    let temp = document.querySelector('.temp');
    temp.innerText = `${Math.round(weather.main.temp)}°F`

    let weather_el = document.querySelector('.weather');
    weather_el.innerText = weather.weather[0].main;

    let low = document.querySelector('.low');
    low.innerText = `${Math.round(weather.main.temp_min)}°F`

    let high = document.querySelector('.high');
    high.innerText =`${Math.round(weather.main.temp_max)}°F`

    let humidity = document.querySelector('.humidity');
    humidity.innerText = `${weather.main.humidity}%`

    let wind = document.querySelector('.wind-speed');
    wind.innerText = `${Math.round(weather.wind.speed)}`;

    let feels = document.querySelector('.feels-like');
    feels.innerText = `${Math.round(weather.main.feels_like)}°F`
}

function gradientShift(icon) {
    if (icon.includes("d")) {
        document.body.style.background = "linear-gradient(to top, #f3904f, #3b4371)";
    } else {
        document.body.style.background = "linear-gradient( #355c7d, #6c5b7b, #c06c84)";
    }
}