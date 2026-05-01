function showSection(section) {
    let sections = document.querySelectorAll('.section');
    sections.forEach(sec => sec.style.display = 'none');

    document.getElementById(section).style.display = 'block';
}

// LOGO FUNCTION (toggle create form)
function toggleForm() {
    let form = document.getElementById('create');
    form.style.display = (form.style.display === 'none') ? 'block' : 'none';
}

// CREATE
function insertData() {
    let data = new FormData();
    data.append("surname", document.getElementById("surname").value);
    data.append("name", document.getElementById("name").value);
    data.append("middle", document.getElementById("middle").value);
    data.append("address", document.getElementById("address").value);
    data.append("mobile", document.getElementById("mobile").value);

    fetch("../includes/insert.php", {
        method: "POST",
        body: data
    })
    .then(res => res.text())
    .then(data => alert(data));
}

// READ
function loadData() {
    fetch("../includes/read.php")
    .then(res => res.text())
    .then(data => document.getElementById("data").innerHTML = data);
}

// UPDATE
function updateData() {
    let data = new FormData();
    data.append("id", document.getElementById("uid").value);
    data.append("name", document.getElementById("uname").value);

    fetch("../includes/update.php", {
        method: "POST",
        body: data
    })
    .then(res => res.text())
    .then(data => alert(data));
}

// DELETE
function deleteData() {
    let data = new FormData();
    data.append("id", document.getElementById("did").value);

    fetch("../includes/delete.php", {
        method: "POST",
        body: data
    })
    .then(res => res.text())
    .then(data => alert(data));
}
