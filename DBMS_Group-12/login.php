<!-- login.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
 body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative; /* Add this line */
  
}

.card {
    width: 300px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(250, 247, 247, 0.1);
    position: relative; /* Add this line */
}

.input-group {
    margin-bottom: 10px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #000000;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

h2 {
    color: #000000;
}

label {
    color: #000000;
}

</style>
</head>

<body background = "10.jpg" >
  <div class="card">
    <h2>Login</h2>
    <select id="options">
      <option value="" disabled selected>Select an option</option>
      <option value="f_login">Farmer_login</option>
      <option value="A_lonin">Agricultural Experts_lonin</option>
      <option value="admin_login">Admin_login</option>
    </select>
  </div>
  
  <script>
    document.getElementById("options").addEventListener("change", function() {
      var selectedOption = this.value;
      if (selectedOption) {
        window.location.href = selectedOption + ".php";
      }
    });
  </script>
</body>
</html>