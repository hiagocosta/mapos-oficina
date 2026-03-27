<?php

$validation_rules = array(
    'clientes_id' => array(
        'required' => true,
        'type' => 'integer',
    ),
    'placa' => array(
        'required' => true,
        'type' => 'string',
        'max_length' => 8,
    ),
    'marca' => array(
        'required' => true,
        'type' => 'string',
        'max_length' => 50,
    ),
    'modelo' => array(
        'required' => true,
        'type' => 'string',
        'max_length' => 50,
    ),
    'ano' => array(
        'required' => true,
        'type' => 'integer',
        'min' => 1886, // considering the first modern car
    ),
    'cor' => array(
        'required' => true,
        'type' => 'string',
        'max_length' => 30,
    ),
    'observacoes' => array(
        'required' => false,
        'type' => 'string',
        'max_length' => 255,
    ),
);

return $validation_rules;
