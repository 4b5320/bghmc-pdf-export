<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF-export</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
                padding-top: 0.5in;
            }
            thead {
                display: table-header-group;
            }
            tfoot {
                display: table-row-group;
            }
            tr {
                page-break-inside: avoid;
            }
            table, th, td {
                border: 1px solid black;
                vertical-align: top;
            }
            table {
                border-collapse: collapse;
            }
            @media print {
                .export-table {
                    overflow: visible !important;
            }
}
        </style>
    </head>
    <body>
        <div class="export-table">
        <table>
            <thead>
                <tr>
                    <th>Hospital Number</th>
                    <th>Date and Time</th>
                    <th>Name of Patient</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Ward</th>
                    <th>Membership</th>
                    <th>Admitting Diagnosis</th>
                    <th>Admitting Physician</th>
                    <th>Date and Time of Discharge</th>
                    <th>Disposition</th>
                    <th>Condition Upon Discharge</th>
                    <th>Final Diagnosis</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>
                            {{$item->hpercode}}
                        </td>
                        <td>
                            {{$item->admdate}}
                        </td>
                        <td>
                            {{$item->patlast . ", " . $item->patfirst . " " . $item->patmiddle}}
                        </td>
                        <td>
                            {{$item->patbdate}}
                        </td>
                        <td>
                            {{$item->patage + 0}}
                        </td>
                        <td>
                            {{$item->patsex}}
                        </td>
                        <td>
                            {{$item->patstr . " " . $item->cc_brgy . " " . $item->cc_city . " " . $item->cc_prov}}
                        </td>
                        <td>
                            {{$item->cc_wardname}}
                        </td>
                        <td>
                            {{$item->cc_phmem}}
                        </td>
                        <td>
                            {{$item->cc_admitdiag}}
                        </td>
                        <td>
                            UNKNOWN
                        </td>
                        <td>
                            {{$item->disdate}}
                        </td>
                        <td>
                            {{$item->dispcode}}
                        </td>
                        <td>
                            {{$item->condcode}}
                        </td>
                        <td>
                            {{$item->cc_finaldiag}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
