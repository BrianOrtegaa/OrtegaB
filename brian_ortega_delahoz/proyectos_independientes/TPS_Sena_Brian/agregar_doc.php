<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Documento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .modal-dialog {
            background-color: #fff;
            max-width: 500px;
            width: 400px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .modal-header,
        .modal-footer {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-body label {
            display: block;
            margin-bottom: 5px;
        }

        .modal-body input[type="text"],
        .modal-body input[type="file"] {
            width: 92%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .modal-footer button {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            background-color: cornflowerblue;
            color: #fff;
            cursor: pointer;
        }

        .modal-footer button:hover {
            background-color: midnightblue;
        }

        .modal-footer button:active {
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Agregar registro</h3>
            </div>
            <div class="modal-body">
                <form action="upload_doc.php" method="POST" enctype="multipart/form-data">
                    <label for="nomv_doc"><strong>Nombre</strong></label>
                    <input type="text" id="nombre_doc" name="nombre_doc" required>
                    <label for="archivo"><strong>Archivo (WORD & PDF)</strong></label>
                    <input type="file" name="archivo" id="archivo" required>
            </div>
            <div class="modal-footer">
                <button type="submit" id="register" name="registrar"><Strong>Guardar</Strong></button>
                <button type="button"><strong>Cancelar</strong></button>
            </div></form>
        </div>
        
    </div>
</body>

</html>