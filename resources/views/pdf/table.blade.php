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
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $faker = Faker\Factory::create();
                for($i=0; $i<100; $i++) {
                    echo '<tr>';
                        echo '<td>' . $faker->name . '</td>';
                        echo '<td>' . $faker->address . '</td>';
                        echo '<td>' . $faker->phoneNumber . '</td>';
                        echo '<td>' . $faker->country . '</td>';
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
    </body>
</html>
