<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta author="Lucas Vieira de Freitas, Davi Freire da Cunha Reggiani">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Começo</title>

    <link rel="icon" type="image/png" sizes="64x64" href="./img/logotipo.png">
    <link rel="stylesheet" href="./css/styleguia.css">

    <script src="./javascript/script.js" defer></script>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar is-fixed-top is-transparent">

        <div class="navbar-brand">

            <a class="navbar-item" href="index.php">

                <svg
                    width="120"
                    height="45"
                    viewBox="0 0 630 160"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-label="Logo">

                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M170 132.571V27.5908C170 25.5451 170.915 23.93 172.746 22.7456C174.576 21.5612 176.729 20.969 179.206 20.969H210.377C232.019 20.969 242.84 30.4441 242.84 49.3943C242.84 62.5303 238.264 71.0902 229.112 75.074C234.603 77.2275 238.748 80.2692 241.548 84.1992C244.347 88.1292 245.747 93.8627 245.747 101.4V104.791C245.747 116.743 242.84 125.437 237.026 130.875C231.211 136.312 223.351 139.031 213.445 139.031H179.206C176.514 139.031 174.307 138.385 172.584 137.093C170.861 135.801 170 134.293 170 132.571ZM190.834 120.619H209.085C219.529 120.619 224.751 114.751 224.751 103.015V100.431C224.751 94.401 223.432 90.0404 220.794 87.3486C218.156 84.6568 214.253 83.3109 209.085 83.3109H190.834V120.619ZM190.834 66.8371H208.923C213.122 66.8371 216.326 65.5989 218.533 63.1225C220.74 60.646 221.844 57.2544 221.844 52.9475C221.844 48.7483 220.686 45.4374 218.371 43.0148C216.057 40.5922 212.853 39.3809 208.762 39.3809H190.834V66.8371ZM260.283 103.015V27.4293C260.283 25.2759 261.306 23.6608 263.351 22.5841C265.397 21.5074 267.873 20.969 270.781 20.969C273.688 20.969 276.164 21.5074 278.21 22.5841C280.256 23.6608 281.279 25.2759 281.279 27.4293V103.015C281.279 115.397 287.2 121.588 299.044 121.588C310.888 121.588 316.81 115.397 316.81 103.015V27.4293C316.81 25.2759 317.833 23.6608 319.879 22.5841C321.925 21.5074 324.401 20.969 327.308 20.969C330.215 20.969 332.692 21.5074 334.738 22.5841C336.783 23.6608 337.806 25.2759 337.806 27.4293V103.015C337.806 115.72 334.28 125.061 327.227 131.036C320.175 137.012 310.781 140 299.044 140C287.308 140 277.914 137.039 270.861 131.117C263.809 125.195 260.283 115.828 260.283 103.015ZM356.703 132.409V27.4293C356.703 25.2759 357.725 23.6608 359.771 22.5841C361.817 21.5074 364.293 20.969 367.201 20.969C370.108 20.969 372.584 21.5074 374.63 22.5841C376.676 23.6604 377.699 25.2759 377.699 27.4293V120.619H417.106C419.044 120.619 420.579 121.534 421.709 123.365C422.84 125.195 423.405 127.349 423.405 129.825C423.405 132.301 422.84 134.455 421.709 136.285C420.579 138.116 419.044 139.031 417.106 139.031H365.908C363.432 139.031 361.279 138.439 359.448 137.254C357.618 136.07 356.703 134.455 356.703 132.409Z"
                        fill="black"/>

                    <path
                        d="M0 110L10 40L50 0L100 50L70 80L110 120L50 160L0 110Z"
                        fill="#00D1B2"/>

                </svg>

            </a>

        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">

            <div class="navbar-start">

                <a class="navbar-item" href="index.php">
                    Home
                </a>

                <a class="navbar-item" href="sobre.php">
                    Sobre nós
                </a>

                <a class="navbar-item" href="serviços.php">
                    Serviços
                </a>

                <a class="navbar-item" href="contato.php">
                    Contato
                </a>

            </div>

        </div>

    </nav>


    <!-- SLIDES -->
    <main>

        <section class="slide" id="slide1">
            <div class="slide-content">
                <h1 class="title is-1">Welcome</h1>
                <p class="subtitle">This is the first slide.</p>
            </div>
        </section>


        <section class="slide" id="slide2">
            <div class="slide-content">
                <h1 class="title is-1">About</h1>
                <p class="subtitle">This is the second slide.</p>
            </div>
        </section>


        <section class="slide" id="slide3">
            <div class="slide-content">
                <h1 class="title is-1">Features</h1>
                <p class="subtitle">This is the third slide.</p>
            </div>
        </section>


        <section class="slide" id="slide4">
            <div class="slide-content">
                <h1 class="title is-1">Finish</h1>
                <p class="subtitle">You reached the final slide!</p>
            </div>
        </section>

    </main>


    <!-- SIDE DOTS -->
    <div class="slide-dots">

        <button class="dot active" type="button" aria-label="Slide 1"></button>

        <button class="dot" type="button" aria-label="Slide 2"></button>

        <button class="dot" type="button" aria-label="Slide 3"></button>

        <button class="dot" type="button" aria-label="Slide 4"></button>

    </div>


    <!-- NEXT BUTTON -->
    <button
        id="nextButton"
        class="button is-primary next-button"
        type="button"
        aria-label="Próximo slide">

        →

    </button>


    <!-- FOOTER -->
    <footer class="footer has-background-black-bis">

        <div class="content has-text-centered has-text-grey">

            <p>
                2026 Todos os direitos reservados -
                Lucas Vieira de Freitas,
                Davi Freire da Cunha Reggiani,
                <br>

                cnpj: 11.111.111/0001-11
                <br>

                CEP: 30200-20
                <br>

                Escola estadual Presidente dutra - 2º ano informática
            </p>

        </div>

    </footer>

</body>
</html>
