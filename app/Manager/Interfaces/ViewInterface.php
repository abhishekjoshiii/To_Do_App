<?php
namespace App\Manager\Interfaces;

interface ViewInterface{
    public function render(string $view, array $data = []);
}