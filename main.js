
function addHoroscope() {
    var personNummer = document.getElementById("birthMf").value;
    data = new FormData();
    data.set("personNummer", personNummer);

    fetch("./addHoroscope.php", {
        method: "POST", 
        body: data
        /* headers: {
        "Content-Type": "application/json",
        }, */
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
        console.log("view", json);
    })
}

function deleteHoroscope() {
    data = new FormData();
    data.set("delete", true);

    fetch("./deleteHoroscope.php", {
        method: "DELETE",
        body: data
    }).then((response) => {
        return response.json()
    }).then((data) => {
        console.log(data)
    })
}
function updateHoroscope() {
    data = new FormData();
    data.set("updateNumber", true);

    fetch("./updateHoroscope.php", {
        method: "PUT"
    }).then((response) => {
        return response.json()
    }).then((data) => {
        console.log(data)
    })
}

