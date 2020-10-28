<!--Nimbus Sans font-->
<link rel="stylesheet" href="https://use.typekit.net/fxm5isf.css" />

<!--Style -->
<style type="text/css">
  @font-face{
    font-family: "sawyers hand";
    src: url("./fonts/sawyershandwriting.ttf")format("truetype")
  }

  @font-face {
    font-family: "nimbus-sans";
  }

  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  body {
    background-color: #f7f3e3;
  }

  header {
    background: #57a2d2;
    color: #2b4e60;
    padding: 20px 15px;
    position: fixed;
    width: 100%;
    top: 0px;
    z-index:2;
    text-align: center;
    display: flex;
    font-family: "sawyers hand";
  }

  nav ul li {
    display: inline-block;
  }

  nav a {
    text-decoration: none;
    text-transform: uppercase;
    color: #2b4e60;
    background: #57a2d2;
    padding: 0 50px;
    transition: .5s;
    position: relative;
    top: 10px;
  }

  nav a:hover {
    color: #f6c36a;
    background: #57a2d2;
    padding: 0 50px;
    transition: .5s;
    position: relative;
    top: 10px;
  }

  .logo {
    max-height: 40px;
    padding: 0 50px;
  }

  main {
    padding: 100px 0;
    font-family: "nimbus-sans";
    color: #2b4e60;
    text-align: center;
  }

  h1, h2 {
    font-family: "sawyers hand";
    text-transform: uppercase;
    margin-bottom: 10px;
  }

  p {
    font-family: "nimbus-sans";
  }
</style>

<!--Page Content-->

<header>
  <a href="index.html">
    <img class="logo" src="images/logo.png" alt="logo" title="Sawyer Carlton"/>
  </a>

  <nav>
    <ul>
      <li><a href="index.html#about">About</a></li>
      <li><a href="index.html#education">Education</a></li>
      <li><a href="index.html#experiences">Experiences</a></li>
      <li><a href="index.html#work">Work</a></li>
      <li><a href="index.html#contact">Contact</a></li>
    </ul>
  </nav>
</header>

<main>
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</main>
