function loadDoc() {
    var xhttp;
    xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function() {
    //   if (this.readyState == 4 && this.status == 200) {
    //     cFunction(this);
    //   }
    // };
  
    xhttp.open("POST", sendMail(), true);
    xhttp.send();
  }

function sendMail() {
    let name = document.getElementById('name-field').value;
    let email = document.getElementById('email-field').value;
    let message = document.getElementById('message-field').value;

    let url = '/scripts/index-scripts/mail-carrier.php?';
    let contents = 'name='+name + '&email='+email + '&message='+message;

    return url + contents;
}