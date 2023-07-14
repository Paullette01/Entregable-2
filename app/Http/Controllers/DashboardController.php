<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Colaborador;

class DashboardController extends Controller
{
    public function index()
    {
        $clientesCount = $this->getClientesCount();
        $colaboradoresCount = $this->getColaboradoresCount();

        return view('welcome', compact('clientesCount', 'colaboradoresCount'));
    }

    private function getClientesCount()
    {
        // Obtén la cantidad de clientes desde la base de datos
        $clientesCount = Cliente::count();

        return $clientesCount;
    }

    private function getColaboradoresCount()
    {
        // Obtén la cantidad de colaboradores desde la base de datos
        $colaboradoresCount = Colaborador::count();

        return $colaboradoresCount;
    }
}
