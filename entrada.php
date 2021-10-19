<?php
include_once 'includes/header.php';
?>
<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title>MAUMAU</title>

<style>
html, body {
	height: 100%;
}
body {
	margin: 0;
	background: linear-gradient(#f2f2f6, #d3d3e7);
}

.container {
	height: 100%;
	display: flex;
	align-items: center;
  justify-content: center;
}
.animated-word {
	font-family: Helvetica;
	letter-spacing: 0.4em;
	font-weight: 600;
	font-size: 100px;
	text-align: center;
	color: #202125;
  cursor: pointer;
  max-width: 600px; 
  width: 100%; 
  outline: 3px solid;
  outline-color: purple;
  outline-offset: 70px;
  transition: all 600ms cubic-bezier(0.2, 0, 0, 0.8);
}

.animated-word:hover {
	color: black;
  outline-color: black;
  outline-offset: 300px;
}

</style>
<div class="container">
<a href="index.php" class="animated-word">ENTRAR</a>
</div>