<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <h2>Admission and Discharge Register Report</h2>
        <form action="./generatePDF" method="get">
            <label for="start">Start date:</label>
            <input type="text" id="start" name="start"
                value="01/01/2020">
            <label for="end">Start date:</label>
            <input type="text" id="end" name="end"
                value="01/21/2020">
            <button type="submit">generate PDF</button>
        </form>
    </body>
</html>
