import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('alpine:init', () => {
    Alpine.data('example', () => ({
        selected: null,
    }))
});



const apiKey = 'pk.78ba5ba531fb8835bc2596ba917c6a1d'
// const response = await fetch(`https://api.locationiq.com/v1/autocomplete?key=pk.78ba5ba531fb8835bc2596ba917c6a1d&q=lagos&dedupe=1&`);
// const data = await response.json();
// console.log(data)

 const fetchLocationData = async  ()  =>{
    const locationInput = document.getElementById("location").value;
    const locationSuggestions = document.getElementById("location-suggestions");
    locationSuggestions.innerHTML = '';

    if (locationInput.length < 3) return;

    console.log(locationInput.value)

    //https://api.locationiq.com/v1/autocomplete?key=Your_API_Access_Token&q=lagos&limit=5&dedupe=1&
    //https://us1.locationiq.com/v1/autocomplete.php?key=${apiKey}&q="lag"&format=json

    try {
        const response = await fetch(`https://api.locationiq.com/v1/autocomplete?key=pk.78ba5ba531fb8835bc2596ba917c6a1d&q=lagos&dedupe=1&`);
        const data = await response.json();
        console.log(data)

        data.forEach(place => {
            const suggestion = document.createElement("div");
            suggestion.textContent = place.display_name;
            suggestion.onclick = () => {
                document.getElementById("location").value = place.display_name;
                locationSuggestions.innerHTML = '';
            };
            locationSuggestions.appendChild(suggestion);
        });
    } catch (error) {
        console.error("Error fetching location data:", error);
    }
};

fetchLocationData();


