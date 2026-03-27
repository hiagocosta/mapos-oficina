<?php
// adicionaVeiculo.php

// Form to add a new vehicle
?>
<form action="/veiculos/adicionar" method="POST">
    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required>

    <label for="year">Year:</label>
    <input type="number" id="year" name="year" required>

    <label for="color">Color:</label>
    <input type="text" id="color" name="color" required>

    <input type="submit" value="Add Vehicle">
</form>