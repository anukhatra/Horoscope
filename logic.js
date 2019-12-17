
function update() {
    var dateEnter =  document.getElementById("type").value;

    let url = "./server/updateHoroscope.php"
    let method = "POST"
 
    let formData = new FormData()
    formData.set("date", dateEnter)
    
    makeRequest(url, method, formData, function(result) {
        console.log(result)
    })
}


function add() {    
    var dateEnter =  document.getElementById("type").value;

    let url = "./server/addHoroscope.php"
    let method = "POST"    
    let formData = new FormData()
    formData.set("date", dateEnter)
    
    makeRequest(url, method, formData, function(result) {
        console.log("###########")
        console.log(result)
    })
}

function get(){
    console.log("I am in get");   
    let url = "./server/viewHoroscope.php"
    let method = "GET"
    makeRequest("./server/viewHoroscope.php","GET",formData,callback);
   
}
function makeRequest(url, method, formData, callback){

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        console.log(response)
        return response.json()
    }).then((result) => {
        callback(result)
    }).catch((err) => {
        console.log("Error : ",err); 
    })
}


