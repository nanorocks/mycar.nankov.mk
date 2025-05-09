<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Service History Report</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            /* Use a font that supports Unicode */
            font-size: 12px;
            line-height: 1.4;
            color: #333;
        }

        h2,
        h3 {
            margin-bottom: 5px;
        }

        .section {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #999;
            padding: 6px;
            text-align: left;
            word-wrap: break-word;
            /* Ensure long text wraps */
        }

        th {
            background: #eee;
        }

        .no-data {
            text-align: center;
            font-style: italic;
            color: #666;
        }
    </style>
</head>

<body>
    <h2>Service History Report</h2>
    <div class="section">
        <strong>Generated for:</strong> {{ $user->name ?? 'N/A' }}<br>
        <strong>Vehicle:</strong> {{ $vehicle->model ?? 'N/A' }}<br>
        <strong>Registration:</strong> {{ $vehicle->vehicle_register_number ?? 'N/A' }}<br>
        <strong>Generated at:</strong> {{ now()->format('Y-m-d H:i') }}
    </div>

    <div class="section">
        <h3>Service Records</h3>
        <table>
            <thead>
                <tr>
                    @foreach ($columns as $col)
                        <th>{{ \Illuminate\Support\Str::headline($col) }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse ($serviceHistory as $record)
                    <tr>
                        @foreach ($columns as $col)
                            <td>{{ is_string($record[$col] ?? '-') ? $record[$col] : '-' }}</td>
                        @endforeach
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($columns) }}" class="no-data">No service records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
