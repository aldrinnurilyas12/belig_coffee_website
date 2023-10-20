<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section style="display:flex;align-items:center;justify-content:center;margin-top: 300px;place-items:center;">
        <div id="load" class="load-row">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <p style="width: 400px;font-size:18px;font-weight:bold;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                Memproses pesanan anda..</p>
        </div>
    </section>

    <style>
        .load-row {
            width: 400px;
            height: 50px;
            line-height: 50px;
            text-align: center;
        }

        .load-row span {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: #f76002;
            border-radius: 50px;
            animation: up-down6 0.5s ease-in infinite alternate;
        }

        .load-row span:nth-child(2) {
            background: #e85b04c4;
            animation-delay: 0.16s;
        }

        .load-row span:nth-child(3) {
            background: #e85b0491;
            animation-delay: 0.32s;
        }

        .load-row span:nth-child(4) {
            background: #e85b0456;
            animation-delay: 0.48s;
        }

        @keyframes up-down6 {
            0% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(10px);
            }
        }
    </style>

    <script>
        onload = function() {
            var loading = document.getElementById("load");

            let loaded = setInterval(() => {

            }, 2000);


            setTimeout(function() {
                clearInterval(loaded)
                window.location.assign('openinvoice');


            }, 6000);
        }
    </script>

</body>

</html>