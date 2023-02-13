<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       table {
			border-collapse: collapse;
			max-width: 95%;
			margin-bottom: 20px;
			font-size: 14px;
		}
		table th,
		table td {
			border: 1px solid #ddd;
			padding: 2px;
			text-align: left;
		}
		table th {
			background-color: #f2f2f2;
		}
		@media screen and (max-width: 600px) {
			table {
				font-size: 12px;
			}
			table th,
			table td {
				padding: 5px;
			}
		}
      </style>
</head>
<body>
    
      
      <table>
        
            
       
        <tr>
          <th>Apellido Paterno:</th>
          <td>{{ $estudiantes->first()->ApellidoPaterno}}</td>
          <th>Apellido Materno:</th>
          <td>{{$estudiantes->first()->ApellidoMaterno}}/td>
          <th>Nombre:</th>
          <td>{{$estudiantes->first()->Nombre}}</td>
          <th>CURP:</th>
          <td>{{$estudiantes->first()->CURP}}</td>
        </tr>
        <tr>
          <th>Ciudad:</th>
          <td>{{$estudiantes->first()->Ciudad}}</td>
          <th>Colonia:</th>
          <td>{{$estudiantes->first()->Colonia}}</td>
          <th>Código Postal:</th>
          <td>{{$estudiantes->first()->CodigoPostal}}</td>
          <th>Teléfono:</th>
          <td>{{$estudiantes->first()->Telefono}}</td>
        </tr>
        <tr>
          <th>Teléfono del Padre:</th>
          <td>{{$estudiantes->first()->TelefonoTutor}}</td>
          <th>Email:</th>
          <td>{{$estudiantes->first()->Email}}</td>
          <th>Primera Especialidad:</th>
          <td>{{$estudiantes->first()->fEspecialidad}}</td>
          <th>Segunda Especialidad:</th>
          <td>{{$estudiantes->first()->sEspecialidad}}</td>
        </tr>
        <tr>
          <th>Promedio:</th>
          <td>{{$estudiantes->first()->Promedio}}</td>
        </tr>
        
      </table>
</body>
</html>