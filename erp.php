<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>ERP DEPARTMENT</h1>
  <p></p>
  <p></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="elsa.jpg" alt="shahanaz" style="width:30%">
      <div class="container">
        <h2>Shahanaz parvin</h2>
        <p class="title">Business Analyst</p>
        <p>Cell:0170000000</p>
        <p>shahanaz.parvin@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="elsa.jpg" alt="prosen" style="width:30%">
      <div class="container">
        <h2>Prosenjit Kundu</h2>
        <p class="title">System Analyst</p>
        <p>Cell:01710000001</p>
        <p>prosen@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="elsa.jpg" alt="jakir" style="width:30%">
      <div class="container">
        <h2>Jakir Hossain</h2>
        <p class="title">Deputy Manager</p>
        <p>Cell:01612000000</p>
        <p>jakir@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="elsa.jpg" alt="prosen" style="width:30%">
      <div class="container">
        <h2>Md. Jubaire Hossain</h2>
        <p class="title">Asst. Manager</p>
        <p>Sr. Executive-Business Analysis</p>
        <p>jubaire.hossain@lizfashion.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="elsa.jpg" alt="prosen" style="width:30%">
      <div class="container">
        <h2>Mohammad Nizam Uddin</h2>
        <p class="title">jr. Executive PDM</p>
        <p>Cell:01715600000</p>
        <p>nijam.uddin@lizfashion.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="elsa.jpg" alt="prosen" style="width:30%">
      <div class="container">
        <h2>Abul Kashem</h2>
        <p class="title">Jr. Executive-Software Development</p>
        <p>cell:0131900000</p>
        <p>abul.kashem@lizfashion.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
