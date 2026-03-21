<?php

class Veiculos_model {
    protected $vehicles = [];

    public function create($vehicle) {
        // Add logic to create a new vehicle
        $this->vehicles[] = $vehicle;
    }

    public function read($id) {
        // Add logic to read a vehicle by ID
        return $this->vehicles[$id] ?? null;
    }

    public function update($id, $vehicle) {
        // Add logic to update a vehicle's data
        $this->vehicles[$id] = $vehicle;
    }

    public function delete($id) {
        // Add logic to delete a vehicle by ID
        unset($this->vehicles[$id]);
    }

    public function getVehiclesByClientId($clientId) {
        // Implement logic to get vehicles by client ID
        return array_filter($this->vehicles, function ($vehicle) use ($clientId) {
            return $vehicle['client_id'] === $clientId;
        });
    }

    public function checkPlateExists($plate) {
        // Implement logic to check if the plate exists
        foreach ($this->vehicles as $vehicle) {
            if ($vehicle['plate'] === $plate) {
                return true;
            }
        }
        return false;
    }

    public function countVehicles() {
        // Count the total number of vehicles
        return count($this->vehicles);
    }
}

?>