let origin = document.getElementById('origin').value;
let degree = parseInt(document.getElementById('degree').value);
let convertBtn = document.getElementById('convert');
let result = document.getElementById('result')
let kelvinBox = document.getElementById('kelvinBox');
let reamurBox = document.getElementById('reamurBox');
let celsiusBox = document.getElementById('celsiusBox');
let fahrenheitBox = document.getElementById('fahrenheitBox');
let toKelvin, toReamur, toCelsius, toFahrenheit;

convertBtn.addEventListener('click', function () {
    origin = document.getElementById('origin').value;
    degree = parseInt(document.getElementById('degree').value);
    convert(origin, degree)
})
const celsius = {
    kelvin: deg => deg + 273,
    fahrenheit: deg => (deg * 9 / 5) + 32,
    reamur: deg => deg * 4 / 5,
    celsius: deg => deg
}


const fahrenheit = {
    celsius: deg => (deg - 32) * 5 / 9,
    kelvin: deg => celsius.kelvin(fahrenheit.celsius(deg)),
    reamur: deg => celsius.reamur(fahrenheit.celsius(deg)),
    fahrenheit: deg => deg
}

const kelvin = {
    celsius: deg => deg - 273,
    fahrenheit: deg => celsius.fahrenheit(kelvin.celsius(deg)),
    reamur: deg => celsius.reamur(kelvin.celsius(deg)),
    kelvin: deg => deg
}

const reamur = {
    celsius: deg => deg * 5 / 4,
    fahrenheit: deg => celsius.fahrenheit(reamur.celsius(deg)),
    kelvin: deg => celsius.kelvin(reamur.celsius(deg)),
    reamur: deg => deg

}
// # Function
function answer(toKelvin, toFahrenheit, toReamur, toCelsius) {
    kelvinBox.innerHTML = `${toKelvin} Kelvin`;
    celsiusBox.innerHTML = `${toCelsius} Celsius`;
    fahrenheitBox.innerHTML = `${toFahrenheit} Fahrenheit`;
    reamurBox.innerHTML = `${toReamur} Reamur`;
}


function convert(origin, degree) {
    if (origin == 'celsius') {
        toKelvin = celsius.kelvin(degree)
        toFahrenheit = celsius.fahrenheit(degree)
        toReamur = celsius.reamur(degree)
        answer(toKelvin, toFahrenheit, toReamur, degree)
    } else if (origin == 'fahrenheit') {
        toKelvin = fahrenheit.kelvin(degree)
        toCelsius = fahrenheit.celsius(degree)
        toReamur = fahrenheit.reamur(degree)
        answer(toKelvin, degree, toReamur, toCelsius)
    } else if (origin == 'reamur') {
        toKelvin = reamur.kelvin(degree)
        toFahrenheit = reamur.fahrenheit(degree)
        toCelsius = reamur.celsius(degree)
        answer(toKelvin, toFahrenheit, degree, toCelsius)
    } else if (origin == 'kelvin') {
        toCelsius = kelvin.celsius(degree)
        toFahrenheit = kelvin.fahrenheit(degree)
        toReamur = kelvin.reamur(degree)
        answer(degree, toFahrenheit, toReamur, toCelsius)
    }

}