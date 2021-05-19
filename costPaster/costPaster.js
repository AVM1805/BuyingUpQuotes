function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

//usage:
readTextFile("./costData.json", function(text){
    var data = JSON.parse(text);
    document.getElementById('INTRR').innerHTML = data.INTRR
    document.getElementById('RCOM').innerHTML = data.RCOM
    document.getElementById('RG').innerHTML =  data.RG
    
});


