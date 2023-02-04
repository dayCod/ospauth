function setCookie(cookieName, cookieValue, expiryDays = undefined){
    const main = `${cookieName}=${cookieValue}`;
    const day = new Date();

    if(expiryDays != undefined){
        day.setTime(day.getTime() + (expiryDays*24*60*60*1000));
    }

    const expiry = expiryDays != undefined ? `;expires=${day.toUTCString}` : "";
    document.cookie = `${main+expiry}`
}

function getCookie(cookieName) {
    let name = cookieName + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
 
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

function checkCookie() {
    let username = getCookie("username");
 
    if (username != "") {
     alert("Welcome again " + username);
    } else {
      username = prompt("Please enter your name:", "");
 
      if (username != "" && username != null) {
        setCookie("username", username, 365);
      }
    }
}