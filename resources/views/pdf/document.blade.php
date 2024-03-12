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
            <tr><td colspan="2">República Bolivariana de Venezuela</td></tr>
            <tr><td colspan="2">Universidad Alonso de Ojeda</td></tr>
            <tr><td colspan="2">Vicerrectorado Académico</td></tr>
            <tr><td colspan="2">Ciudad Ojeda - Estado Zulia</td></tr>
            <tr><td colspan="2">Venezuela</td> </tr>
            <tr class="title"><td style="height: 10%" colspan="2">Certificado de Participación</td></tr>
            <tr><td colspan="2">Que se le otorga al señor(a):</td></tr>
            <tr><td colspan="2">{{$personaCertificado->person->fname}} {{$personaCertificado->person->mname}} {{$personaCertificado->person->lname}} {{$personaCertificado->person->slname}}</td> </tr>
            @if (isset($personaCertificado->person->document))
            <tr><td colspan="2">Titular de la cédula de identidad</td></tr>
            <tr><td colspan="2">{{number_format($personaCertificado->person->document,0,".",".")}}</td></tr>
            @endif
            <tr><td colspan="2">Por haber completado en su totalidad el curso de:</td></tr>
            <tr class="title course"><td colspan="2">{{$personaCertificado->certificate->title}}</td></tr>
            <tr><td colspan="2">Por un total de {{$personaCertificado->certificate->hours}} horas</td></tr>
            <tr>
                <th>_____________________</th>
                <th>_____________________</th>
            </tr>
            <tr>
                <td>Marco Antonio Pérez</td>
                <td>Marco Antonio Pérez</td>
            </tr>
            <tr>
                <td>Vicerector</td>
                <td>Vicerector</td>
            </tr>
        </table>
        <div>
            <p>Certificado expedido a la fecha de {{"22/03/2023"}}</p>
            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate($personaCertificado->id)) !!}">
            <p class="small">{{$personaCertificado->id}}</p>
        </div>
    </div>
</body>
</html>
