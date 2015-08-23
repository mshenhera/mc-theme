
function updateCities() {
//    alert("TEST");
    regionElementId = populate_sities_vars.input_region;
    cityElementId = populate_sities_vars.input_city; 

    var cityElement = document.getElementById( cityElementId );

    var selectedRegionIndex = document.getElementById( regionElementId ).selectedIndex;
//    alert(selectedRegionIndex);

    cityElement.length=0;	// Fixed by Julian Woods
    cityElement.options[0] = new Option('Select State','');
    cityElement.selectedIndex = 0;

    var cities = populate_sities_vars.cities;
    var cities_arr = cities[selectedRegionIndex].split("|");

//    alert(cities_arr);

    for (var i=0; i<cities_arr.length; i++) {
        cityElement.options[cityElement.length] = new Option(cities_arr[i],cities_arr[i]);
    }
}

