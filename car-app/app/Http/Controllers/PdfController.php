<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function export($vehicleId)
    {
        $vehicle = Vehicle::with('user', 'vehicleServicesHistory')->findOrFail($vehicleId);

        $columns = ['date', 'service_type', 'description', 'cost']; // Default columns
        $serviceHistory = $vehicle->vehicleServicesHistory()
            ->orderBy('date', 'desc')
            ->get()
            ->map(function ($item) {
                return array_map(function ($value) {
                    return is_string($value) ? mb_convert_encoding($value, 'UTF-8', 'auto') : $value;
                }, $item->toArray());
            });

        $pdf = Pdf::loadView('reports.dynamic_service_history', [
            'user' => $vehicle->user,
            'vehicle' => $vehicle,
            'columns' => $columns,
            'serviceHistory' => $serviceHistory,
        ]);

        return $pdf->download("{$vehicle->model}_service_report.pdf");
    }
}