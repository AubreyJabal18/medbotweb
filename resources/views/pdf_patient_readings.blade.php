<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Readings</title>
    @vite('resources/css/app.css')

    <link href="{{asset('/css/mermaid.min.css')}}" rel="stylesheet"/>

    <style>
        /* Apply CSS rules to the table, th, and td elements */
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #5b86e5;
            color: white;
        }
    </style>
</head>
<body>
    
    <div class="flex flex-col min-h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] ">

        <div class="flex items-center justify-center mt-10">
            <div class="flex flex-col items-center justify-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit w-[95%] border border-gray-300">
                
                <h1>{{$user->id_number}}'s Patient Readings</h1>
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Blood Pressure</th>
                        <th>Oxygen Saturation</th>
                        <th>Temperature</th>
                        <th>Pulse Rate</th>
                    </tr>

                    @php
                        use Carbon\Carbon;
                    @endphp
                    @if(count($readings))
                        @foreach($readings as $reading)
                            <tr>
                                <td>{{Carbon::parse($reading->created_at)->format('M d, Y')}}</td>
                                <td>{{Carbon::parse($reading->created_at)->format('h:i A')}}</td>
                                <td>{{$reading->blood_pressure_systolic.'/'.$reading->blood_pressure_diastolic.' mmHg'}}</td>
                                <td>{{$reading->blood_saturation.'%'}}</td>
                                <td>{{$reading->temperature.'C'}}</td>
                                <td>{{$reading->pulse_rate.' bpm'}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan='6'>No Readings Found</td>
                        </tr>
                    @endif
                    
                </table>

            </div>
        </div>    

    </div>

    
</body>
</html>
