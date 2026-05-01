<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <img src="../images/logo.svg" class="logo" onclick="toggleForm()">

    <button onclick="showSection('create')">Create</button>
    <button onclick="showSection('read')">Read</button>
    <button onclick="showSection('update')">Update</button>
    <button onclick="showSection('delete')">Delete</button>
</div>

<h1>Welcome to Student Management System</h1>
<p>A Project in Integrative Programming Technologies</p>

<!-- CREATE -->
<div id="create" class="section">
    <h2>Insert New Student</h2>

    <input type="text" id="surname" placeholder="Surname"><br>
    <input type="text" id="name" placeholder="Name"><br>
    <input type="text" id="middle" placeholder="Middle Name"><br>
    <input type="text" id="address" placeholder="Address"><br>
    <input type="text" id="mobile" placeholder="Mobile Number"><br>

    <button onclick="insertData()">Save</button>
</div>

<!-- READ -->
<div id="read" class="section" style="display:none;">
    <h2>Student List</h2>
    <button onclick="loadData()">Load Data</button>
    <div id="data"></div>
</div>

<!-- UPDATE -->
<div id="update" class="section" style="display:none;">
    <h2>Update Student</h2>

    <input type="text" id="uid" placeholder="ID"><br>
    <input type="text" id="uname" placeholder="Name"><br>

    <button onclick="updateData()">Update</button>
</div>

<!-- DELETE -->
<div id="delete" class="section" style="display:none;">
    <h2>Delete Student</h2>

    <input type="text" id="did" placeholder="ID"><br>
    <button onclick="deleteData()">Delete</button>
</div>

<script src="script.js"></script>

</body>
</html>
