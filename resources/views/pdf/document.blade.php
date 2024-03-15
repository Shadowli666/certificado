<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>
    <style>
        html{
            margin: 20px;
            font-size: 18px
        }
        body{
            border: solid 1px #aaa;
        }
        .container{
            display: flex;
        }
        .centered{
            align-items: center;
            justify-content: center;
        }
        .main-container{
            margin: 0 auto;
        }
        .title{
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            margin-top: 30px;
        }
        .course{
            font-weight: 500;
        }
        .header{
            text-align: center;
            font-size: 14px;
            text-transform: uppercase;
        }
        div.header * {
            margin-bottom: 0;
        }
        .text-center{
            text-align: center;
        }
        th, td{
            padding: 4;
        }
        .small{
            font-size: 12px;
            color:#aaa;
        }
    </style>
</head>
<body>
    <div class="container centered main text-center">
        <table style ="width:100% " class="text-center">
            <thead>
                <tr>
                    <th rowspan="5" style="width: 25%">
                        <img width="100px" src="{!! url("/img/logo.png"); !!}">
                    </th>
                    <th>República Bolivariana de Venezuela</th>
                    <th rowspan="5" style="width: 25%">
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('svg')->size(150)->errorCorrection('H')->generate(url()->full())) !!}">
                    </th>
                </tr>
                <tr>
                    <th colspan="0">Universidad Alonso de Ojeda</th>
                </tr>
                <tr>
                    <th colspan="0">Vicerrectorado Académico</th>
                </tr>
                <tr>
                    <th colspan="0">Ciudad Ojeda - Estado Zulia</th>
                </tr>
                <tr>
                    <th colspan="0">Venezuela</th>
                </tr>
            </thead>
            <tbody>
                <tr class="title"><td style="height: 8%" colspan="3">Certificado de Participación</td></tr>
                <tr><td colspan="3">Que se le otorga al señor(a):</td></tr>
                <tr><td colspan="3">{{$personaCertificado->person->fname}} {{$personaCertificado->person->mname}} {{$personaCertificado->person->lname}} {{$personaCertificado->person->slname}}</td> </tr>
                @if (isset($personaCertificado->person->document))
                <tr><td colspan="3">Titular de la cédula de identidad</td></tr>
                <tr><td colspan="3">{{number_format($personaCertificado->person->document,0,".",".")}}</td></tr>
                @endif
                <tr><td colspan="3">Por haber completado en su totalidad el curso de:</td></tr>
                <tr class="title course"><td colspan="3">{{$personaCertificado->certificate->title}}</td></tr>
                <tr><td colspan="3">Por un total de {{$personaCertificado->certificate->hours}} horas</td></tr>
                <tr>
                </tbody>
            </table>
            <table style ="width:100% " class="text-center">
                <tbody>
                    <tr>
                        <td>_____________________</td>
                        <td>_____________________</td>
                    </tr>
                    <tr>
                        <td>Marco Antonio Pérez</td>
                        <td>Marco Antonio Pérez</td>
                    </tr>
                    <tr>
                        <td>Vicerector</td>
                        <td>Vicerector</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <p>Certificado expedido a la fecha de {{"22/03/2023"}}</p>
                <p class="small">{{$personaCertificado->id}}</p>
            </div>
        </div>
    </body>
    </html>
