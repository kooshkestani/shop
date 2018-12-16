<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shop') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/compiled-4.5.15.min.css')}}" rel="stylesheet">

    <!-- Custom style cart-v1-->



    <style>
        @media only screen and (max-width: 768px) {

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
                text-align: center;
            }
            table.table td {
                padding-top: 1.5rem;
                padding-bottom: .4rem;

            }
            img {}
            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            img {
                display: block;
                margin: 0 auto;
            }
            td {
                /* Behave  like a "row" */
                border: none;
                position: relative;
                padding-left: 50%;

            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                white-space: nowrap;
            }

            td:nth-of-type(1):before {
                content: "Product";
                font-weight: 400;
                left: 50%;
                transform: translate(-50%);
            }
            td:nth-of-type(2):before {
                content: "Color";
                font-weight: 400;
                left: 50%;
                transform: translate(-50%);
            }
            td:nth-of-type(3) {
                position: absolute;
                border: none !important;
            }
            td:nth-of-type(4):before {
                content: "Price";
                left: 50%;
                transform: translate(-50%);
                font-weight: 400;
            }
            td:nth-of-type(5):before {
                content: "QTY";
                left: 50%;
                transform: translate(-50%);
                font-weight: 400;
            }
            td:nth-of-type(5) {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding-top: 1.9rem !important;
            }
            td:nth-of-type(6):before {
                content: "Amount";
                left: 50%;
                transform: translate(-50%);
                font-weight: 400;
            }
            td:nth-of-type(7):before {
                content: "Remove item";
                left: 50%;
                transform: translate(-50%);
                font-weight: 400;
            }
            .btn-group {
                margin-left: 0 !important;
            }
            tr:nth-child(4) td:nth-of-type(4):before,
            tr:nth-child(4) td:nth-of-type(1):before,
            tr:nth-child(4) td:nth-of-type(2):before {
                content: '';
            }
            tr:nth-child(4) td:nth-of-type(1) {
                position: absolute;
                border: none !important;
            }
            tr:nth-child(4) td:nth-of-type(3) {
                position: relative;
                display: flex;
                justify-content: center;
            }
            tr:nth-child(4) td:nth-of-type(4) {
                border-top: none !important;
                display: flex;
                justify-content: center;
                border-bottom : 1px solid #dee2e6;
            }

        }
    </style>
</head>
<body class="cart-v1 hidden-sn white-skin animated">
