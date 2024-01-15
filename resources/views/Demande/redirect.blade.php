
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{asset('ronald/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('ronald/css/bootstap-icons.css')}} ">
</head>

<body>
    <main>
        <section>
            
            <div class="alert alert-success">
                <div class="pt-1 pb-2 fw-bolder"><span class="fs-4">
                        Demande de stage éffectué avec succès !
                    </span>
                </div>
                <div>
                    Nous vous contacterons par email si nous avons besoin d'une quelconque information complémentaire.
                    Nous vous informerons de ce que votre demande est acceptée ou rejettée par email. Pour l'instant votre demande est en cours de traitement.
                    <a href=" {{route('Demande.create')}} ">Retour</a>
                </div>
            </div>
            
        </section>
    </main>
    <script src=" {{asset('ronald/js/bootstrap.bundle.min.js')}} "></script>
</body>

</html>