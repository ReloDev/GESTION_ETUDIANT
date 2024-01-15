<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{asset('ronald/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('ronald/css/bootstap-icons.css')}} ">
    <style>
        .titre-form {
            font-weight: 800;
            color: #4d4643;
        }

        .form-container {
            height: 70vh;
            border: 2px solid brown;
        }

        .field-group {
            width: 300px;
            position: relative;
            padding-top: 15px;
        }

        .input-field {
            width: 100%;
            outline: 0;
            border: 0;
            border-radius: 0;
            border-bottom: 2px solid #5e5d5d;
            padding: 10px 0;
            background: transparent;
            font-size: 1em;
            color: #2c2c2cce;
            transition: 0.3s ease;
        }

        .input-label {
            display: block;
            position: absolute;
            top: 0;
            font-size: 1em;
            color: #999999;
            text-transform: capitalize;
            transition: 0.3s ease;
        }

        .input-field::placeholder {
            color: transparent;
        }

        .input-field:placeholder-shown~.input-label {
            font-size: 1em;
            top: 20px;
        }

        .input-field:focus {
            border-image: linear-gradient(to right, #03ef79, #7aece3);
            border-image-slice: 1;
        }

        .input-field:focus~.input-label {
            display: block;
            position: absolute;
            top: 0;
            font-size: 0.9em;
            color: #03ef79;
        }

        .submit-field {
            width: 300px;
            position: relative;
        }

        .submit-field .back-btn {
            border: 0;
            outline: none;
            transition: 0.3s ease-in-out;
        }

        .submit-field .back-btn:hover {
            background-color: #6afab2;
            color: #ffff;
        }

        .submit-field .back-btn:focus {
            background-color: linear-gradient(to right, #03ef79, #7aece3);
            color: white;
        }

        .submit-field .btn {
            width: 49%;

        }

        .group-notice {
            width: 300px;
        }

        .input-notice {
            font-size: 0.8rem;
        }
    </style>
    <title>Document</title>
</head>

<body>
    @yield('content')
    <script src=" {{asset('ronald/js/bootstrap.bundle.min.js')}} "></script>
  
    <script>
        // let monome = document.getElementById('monome')
        // let binome = document.getElementById('binome')
        // let form_block_1 = document.querySelector(".form-block-1")
        // let form_block_2 = document.querySelector(".form-block-2")
        // let form_block_3 = document.querySelector(".form-block-3")
        // let return_a1 = document.querySelector(".form-block-2 a")
        // let return_a2 = document.querySelector(".form-block-3 a")

        // monome.addEventListener('input', function() {

        //     form_block_1.classList.add("d-none")
        //     form_block_2.classList.remove("d-none")

        // })

        // binome.addEventListener('input', function() {
        //     form_block_1.classList.add("d-none")
        //     form_block_3.classList.remove("d-none")

        // })

        // return_a1.addEventListener("click", function() {
        //     form_block_1.classList.remove("d-none")
        //     form_block_2.classList.add('d-none')
        // })
        // return_a2.addEventListener("click", function() {
        //     form_block_1.classList.remove("d-none")
        //     form_block_3.classList.add('d-none')
        // })
        // let inputs = document.querySelectorAll(".input-field")
        // console.log(inputs)
        // let notices = document.querySelectorAll(".input-notice")
        // for (let i = 0, c = inputs.length; i < c; i++) {
        //     inputs[i].addEventListener('change', function() {

        //         notices[i].classList.remove('d-none')
        //     })
        // }
    </script>
</body>

</html>

