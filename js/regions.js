
function populateCities() {
//    alert(populate_sities_vars.input_city);
    var regionElementId = populate_sities_vars.input_region;
    var regionElement = document.getElementById(regionElementId);
    
    regionElement.onchange = function() {
        updateCities();
    }
}
