<?php

namespace Application\Controllers;

use Application\Models\VehicleModel;
use Application\Helpers\AuthorizationHelper;

class Veiculos {

    protected $vehicleModel;

    public function __construct() {
        $this->vehicleModel = new VehicleModel();
    }

    public function list() {
        // Check permission
        if (!AuthorizationHelper::check('view_vehicles')) {
            return [ 'error' => 'Unauthorized' ];
        }

        return $this->vehicleModel->getAllVehicles();
    }

    public function add($data) {
        // Check permission
        if (!AuthorizationHelper::check('add_vehicles')) {
            return [ 'error' => 'Unauthorized' ];
        }

        return $this->vehicleModel->addVehicle($data);
    }

    public function edit($id, $data) {
        // Check permission
        if (!AuthorizationHelper::check('edit_vehicles')) {
            return [ 'error' => 'Unauthorized' ];
        }

        return $this->vehicleModel->editVehicle($id, $data);
    }

    public function view($id) {
        // Check permission
        if (!AuthorizationHelper::check('view_vehicles')) {
            return [ 'error' => 'Unauthorized' ];
        }

        return $this->vehicleModel->getVehicleById($id);
    }

    public function delete($id) {
        // Check permission
        if (!AuthorizationHelper::check('delete_vehicles')) {
            return [ 'error' => 'Unauthorized' ];
        }

        return $this->vehicleModel->deleteVehicle($id);
    }
}
