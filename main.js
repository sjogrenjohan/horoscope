
function getFormData() {
    var personNumber = document.getElementById("birthMf").value;
    data = new FormData();
    data.append("personNumber", personNumber);
    return data;
}

function addHoroscope() {
    fetch("./addHoroscope.php", {
        method: "POST", 
        body: getFormData()
    }).then((response) => {
        return response.json()
    }).then((data) => {   
        viewHoroscope();
        console.log(data)
    }).catch((err) => {
        console.log("err: ", err)
    })
}

 function viewHoroscope() {
    fetch("./viewHoroscope.php", {
        method: "GET"
    }).then((response) => response.json())
    .then((json) => {
        var printHoroscope = document.getElementById("horoscope");
        printHoroscope.innerText = json;
        console.log(json);
    }) 
}

function deleteHoroscope() {
    fetch("./deleteHoroscope.php", {
        method: "DELETE"
    }).then((response) => {
        return response.json()
    }).then((data) => {
        viewHoroscope();
        console.log(data);
    })
}
function updateHoroscope() {
    fetch("./updateHoroscope.php", {
        method: "POST",
        body: getFormData()
    }).then((response) => {
        return response.json()
    }).then((data) => {
        viewHoroscope();
        console.log(data)
    })
}

