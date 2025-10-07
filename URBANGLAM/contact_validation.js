function validateContact()
{
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();    
    const text = document.getElementById("text").value.trim();

    if(name === ""){
        alert("Enter a name!");
        return false;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!email.match(emailPattern)){
        alert("Enter a valid email address!");
        return false;
    }

    if(text === ""){
        alert("Enter reviews!");
        return false;
    }

    alert("Reviews Saved!");
    window.location.href = "index.html";
    return false;
}