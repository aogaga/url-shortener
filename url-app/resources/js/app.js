const axios = require('axios');
    var form = document.querySelector("form");
    var url = form.querySelector('input[name="url"]');
    var email = form.querySelector('input[name="email"]');
    var paragraph = document.getElementById("response-message");

    form.addEventListener('submit', ev => {
        ev.preventDefault();
        paragraph.innerText = "";
        axios.post('/api/', {
            url: url.value,
            email: email.value
        }).then(function (response){
            if(response.statusText === "OK"){
                var text = document.createTextNode(response.data);
                paragraph.appendChild(text);
            }
        }).catch(function(error){
                console.log(error);
            })
    });

