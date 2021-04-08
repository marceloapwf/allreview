//const xhr = new XMLHttpRequest();

//;;xhr.onload = function() {
    

    //foreach ()
    //tableSearch.innerHTML = 
//}

//xhr.open("POST", "searchDB.php", true);

//xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "../PHP/searchDB.php";
    var pesquisa = document.getElementById("pesquisa").value;
    var requisicao = "pesquisa="+pesquisa;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = JSON.parse(hr.responseText);
			console.log(return_data);
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(requisicao); // Actually execute the request

}

/*var xhr = new XMLHttpRequest();
xhr.open("POST", "PHP/searchDB.php", true);
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.send(

xhr.onload = function() {

    const tableSearch = document.getElementById("tableSearch");
    var data = JSON.parse(this.responseText);
    console.log(data);
};

document.getElementById("btn-pesquisa").addEventListener("submit", function(){
    xhr.send(JSON.stringify({
        pesquisa: document.getElementById("pesquisa").value 
     }));
});*/