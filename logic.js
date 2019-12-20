
function update() {
    var dateEnter =  document.getElementById("type").value;

    let url = "./server/updateHoroscope.php"
    let method = "POST"
 
    let formData = new FormData()
    formData.set("date", dateEnter)
    
    makeRequest(url, method, formData, function(result) {
        
        console.log(result)
        if(result == true){       
           get();
            
           }else{
            console.log("FALSE");
           }
    })
}

function add() {    
    var dateEnter =  document.getElementById("type").value;

    let url = "./server/addHoroscope.php"
    let method = "POST"    
    let formData = new FormData()
    formData.set("date", dateEnter)
    
    makeRequest(url, method, formData, function(result) {
        console.log(result);
        if(result == true){           
            get();
        }else{
            console.log("FALSE");
           }
    })
}

function get(){
    let url = "./server/viewHoroscope.php";
    let method = "GET";

    makeRequest(url, method, undefined, function(result){
      
        document.getElementById("output").innerText = result;
    });
   
}

function del(){
    let url = "./server/deleteHoroscope.php"
    let method = "DELETE"  
    let formData = new FormData();
    formData.set("date", 0)
    makeRequest(url, method, formData, function(result){        
        if(result){
            document.getElementById("output").innerText = "Horoskopet togs bort";
        }else{
            document.getElementById("output").innerText = "Horoskopet togs inte bort";
        }
    });  
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


