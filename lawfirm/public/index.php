<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegalBridge</title>
    <link rel="stylesheet" href="stylesheets/default.css">
    <link rel="stylesheet" href="front-page.css">

    <link rel="shortcut icon" href="#" type="image/x-icon">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <style>
        @keyframes dashmove {
            to {
                stroke-dashoffset: -16;
            }
        }
        .animated-dotted-line {
            stroke-dasharray: 4,4;
            animation: dashmove 1s linear infinite;
            color:green;
        }

        .second-one > div{
            width:200px !important;
            border-radius:30px !important;
            outline:1vw solid rgba(236, 235, 255, 0.53);
        }


        @media(max-width: 500px){
            .second-one > div{
                width:100px !important;
                border-radius:30px !important;
            }
        }
    </style>
</head>
<body>
    <?php
    include("../src/navigation/navbar.php");
    ?>
    <div class="section header" landing-page>
        <div class="no-zebra-striping">
            <h1 class="header change-text">Need<br><br>
                <span>Representation?</span>
                <span>Legal Advice?</span>
                <!-- <span>Representation?</span> -->
            </h1>
            <div>
                <p>
                    Our experienced lawyers are prepared to assist you and provide expert legal guidance. They are fluent in English, French, and Mandarin Chinese, ensuring effective communication across diverse client needs.
                </p>
            </div>
            <div style="margin-top:3vh;">
                <a class="button" href="consult.php" target="_blank">
                    Evaluation Form
                </a>
                <a href="contact-us.php" class="button">Contact Us</a>
            </div>
        </div>

        <div class="second-one">
<!---implementation goes here-->
            <svg id="line-svg" style="position:absolute; top:0; left:0; width:100%; height:100%; pointer-events:none; overflow:visible; z-index:0;"></svg>
            
            <div id="d1">
                <h2>Immigration</h2>
                <br>

                <p>Permits</p>
                <p>Temporary Resident Visas</p>
                <p>And more</p>

                <br>
                <a href="immigration.php" class="button" id="rainbow" style="--color:rgb(178, 233, 255);"><i class="material-symbols-outlined" icon-align>public</i> See more</a>
            </div>

            <div id="d2">
                <h2>Mediation</h2>
                <br>

                <p>Civil Mediation</p>
                <p>Commercial Mediation</p>
                <p>Family Mediation</p>

                <br>
                <a href="mediation.php" class="button" id="rainbow" style="--color:rgb(191, 178, 255);"><i class="material-symbols-outlined" icon-align>partner_exchange</i> See more</a>
            </div>

            <lb></lb>
            
            <div id="d3">
                <h2>Family Law</h2>
                <br>

                <p>Divorce</p>
                <p>Child Custody</p>

                <br>
                <a href="family.php" class="button" id="rainbow" style="--color:rgb(255, 178, 178);"><i class="material-symbols-outlined" icon-align>escalator_warning</i> See more</a>
            </div>
            <div id="d4">
                <h2>Business Law</h2>
                <br>

                <p>Incorporation</p>
                <p>Minute Book</p>
                <p>And more</p>

                <br>
                <a href="business.php" class="button" id="rainbow" style="--color:rgb(178, 255, 183);"><i class="material-symbols-outlined" icon-align>trip</i> See more</a>
            </div>
        </div>
    </div>

    <div class="section header no-gradient" id="services">
        <div>
            <h1 class="header">Services</h1>
        </div>
        <div class="no-zebra-striping second-one">
            <div style="align-content: center; width:fit-content !important;">
                <h1>Immigration</h1>

                <div class="grid" style="padding:1.5vw !important;">
                    <a href="immigration.php#permits">Permits</a>
                    <a href="immigration.php#temporary-resident-visas">Temporary resident visas</a>
                    <a href="immigration.php#sponsorship">Sponsorship</a>
                    <a href="immigration.php#skilled-workers">Skilled workers</a>
                    <a href="immigration.php#pilot-programs">Pilot programs</a>
                    <a href="immigration.php#business-class">Business class</a>
                    <a href="immigration.php#humanitarian-and-compassionate-considerations">Humanitarian and compassionate considerations</a>
                    <a href="immigration.php#reconsideration-request-appeal-judicial-review">Reconsideration request/Appeal/Judicial review</a>
                </div>

                <h1>Mediation</h1>

                <div class="grid" style="padding:1.5vw !important;">
                    <a href="mediation.php">Civil Mediation</a>
                    <a href="mediation.php">Commercial Mediation</a>
                    <a href="mediation.php">Family Mediation</a>
                </div>

                <h1>Family Law</h1>

                <div class="grid" style="padding:1.5vw !important;">
                    <a href="family.php">Divorce</a>
                    <a href="family.php">Child Custody</a>
                </div>

                <h1>Business Law</h1>

                <div class="grid" style="padding:1.5vw !important;">
                    <a href="business.php">Incorporation</a>
                    <a href="business.php">Minute Book</a>
                    <a href="business.php">Annual Filing</a>
                    <a href="business.php">Shareholder agreement</a>
                    <a href="business.php">Commercial contract</a>
                    <a href="business.php">Negotiation</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const connections = [
            ['d1', 'd2'],
            ['d2', 'd4'],
            ['d4', 'd3'],
            ['d3', 'd1'],
            ['m1', 'm2'],
            ['m1', 'm3'],
            ['m1', 'm4'],
            ['m1', 'm5'],
            ['m1', 'm6'],
        ];

        function drawLine(id1, id2) {
            const svg = document.getElementById('line-svg');
            const div1 = document.getElementById(id1);
            const div2 = document.getElementById(id2);
            if (!div1 || !div2) {
                console.error('One or both divs not found:', id1, id2);
                return;
            }

            // Get bounding rectangles relative to viewport
            const rect1 = div1.getBoundingClientRect();
            const rect2 = div2.getBoundingClientRect();

            // Calculate center points of each div relative to the document
            const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            const x1 = rect1.left + rect1.width / 2 + scrollLeft;
            const y1 = rect1.top + rect1.height / 2 + scrollTop;
            const x2 = rect2.left + rect2.width / 2 + scrollLeft;
            const y2 = rect2.top + rect2.height / 2 + scrollTop;

            // Create SVG line element
            const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            line.setAttribute('x1', x1);
            line.setAttribute('y1', y1);
            line.setAttribute('x2', x2);
            line.setAttribute('y2', y2);
            line.setAttribute('stroke', 'rgba(56, 108, 55, 0.47)');
            line.setAttribute('stroke-width', '2');
            line.setAttribute('class', 'animated-dotted-line'); // add animation class
            svg.appendChild(line);
        }

        function drawAllLines() {
            const svg = document.getElementById('line-svg');
            // Clear existing lines
            while (svg.firstChild) {
                svg.removeChild(svg.firstChild);
            }
            // Draw all connections
            connections.forEach(pair => {
                drawLine(pair[0], pair[1]);
            });
        }

        window.onload = function() {
            drawAllLines();
        };

        window.onresize = function() {
            drawAllLines();
        };
    </script>
</body>
</html>
