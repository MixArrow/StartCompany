<?php
# Titulo "Mundo de la Ciberseguridad"
$texto = "Cybersecurity World"
?>
<!DOCTYPE html>
<html>
    <title>Engine Security</title>
    <link rel="stylesheet" href="Engine Security.css">
    <head><h1 style="text-align: center;">Mundo de la Ciberseguridad</h1></head>
    <img src = https://storage.googleapis.com/grow-with-goog-publish-prod-media/images/New_GWG_site__800_x_421_px_1.original.format-jpeg.jpg>

        <body>
        <button style="text-align: left">Ciberseguridad</button>
        <p>Es el conjunto de prácticas que protegen la información digital, los dispositivos y los activos de una organización.</p>
        </body>

         <body>
            <button style="text align: center;">Hackers</button>
            <p>Un hacker, en el sentido tradicional y ético, es alguien que utiliza sus habilidades para descubrir nuevas formas de usar los sistemas y resolver problemas.</p>
        </body>

                <body>
                    <button style="text align: right;">Malware</button>
                <p>Software malicioso que se utiliza para dañar o alterar el funcionamiento de un dispositivo, red o servicio programable</p>
            <ol>
                <li>Phishing</li>
                <li>Spyware</li>
                <li>Adware</li>
                <li>Virus</li>
                <li>Ransomware</li>
            </ol>
                <script>
                    const buttons = document.querySelectorAll('button');

                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        button.classList.toggle('active');
                    });
                });
                </script>
            </body>

    </body>
</html>
