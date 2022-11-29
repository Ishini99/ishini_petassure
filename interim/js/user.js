function setAdminData(name, username, tel, email, address) {
    document.getElementById("fName").value = name;
    document.getElementById("username").value = username;
    document.getElementById("tel").value = tel;
    document.getElementById("email").value = email;
    document.getElementById("address").value = address;
}

function enableInput() {
    document.getElementById("fName").removeAttribute("disabled");
    document.getElementById("username").removeAttribute("disabled");
    document.getElementById("tel").removeAttribute("disabled");
    document.getElementById("email").removeAttribute("disabled");
    document.getElementById("address").removeAttribute("disabled");
    document.getElementById("btnSubmit").style.display = "block";
    document.getElementById("btnEnable").style.display = "none";
    document.getElementById("btnDelete").style.display = "none";
}