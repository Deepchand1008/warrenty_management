@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 id="animated-text"
                style="text-align:center; font-size:24px; font-weight:800;line-height:24px; letter-spacing:1px;">Electrovolt
                Service Support Desk </h2>
        </div>
    </div>

    <body>

        <div class="container" style="max-width: 1280px;">
            <h2 style="align-items: center"> Batteries Service and Warranty Support</h2>
            <div class="row mt-5">
                <div class="col border border-1" style="padding: 30px 20px 30px 20px; margin:0px 10px 20px 0px">
                    <div class="content">
                        <h2
                            style="color:rgb(0, 96, 0);font-size:18px; font-weight:600;line-height:24px; letter-spacing:1px;">
                            What is Desk Support System?</h2>
                        <p class="text-wrap" style="text-align:justify;">
                            he Electrovolt Batteries Service and Warranty Desk Support system is a cornerstone of our
                            commitment to providing exceptional customer care and ensuring the reliability of our products.
                            This system is meticulously designed to handle all aspects of service inquiries, technical
                            support,
                            and warranty claims efficiently and effectively
                        </p>
                    </div>
                </div>
                <div class="col border border-1" style="padding: 30px 20px 30px 20px; margin:0px 20px 20px 0px">
                    <div class="content">
                        <h2
                            style="color:rgb(0, 96, 0);font-size:18px; font-weight:600;line-height:24px; letter-spacing:1px;">
                            What you have to do here?</h2>
                        <p class="text-wrap" style="text-align:justify;">
                            he Electrovolt Batteries Service and Warranty Desk Support system is a cornerstone of our
                            commitment to providing exceptional customer care and ensuring the reliability of our products.
                            This system is meticulously designed to handle all aspects of service inquiries, technical
                            support,
                            and warranty claims efficiently and effectively
                        </p>
                    </div>
                </div>
                <div class="col border border-1" style="padding: 30px 20px 30px 20px; margin:0px 20px 20px 0px">
                    <div class="content">
                        <h2
                            style="color:rgb(83, 84, 0);font-size:18px; font-weight:600;line-height:24px; letter-spacing:1px;">
                            Step to follow here!</h2>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item">1. Cras justo odio</li>
                                <li class="list-group-item">2. Cras justo odio</li>
                                <li class="list-group-item">3. Cras justo odio</li>
                              </ol>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>



        

           
                <div class="content border border-1" style="width: 1280px; text-align:center;">
                    <h2 style="color:rgb(0, 96, 0);font-size:18px; font-weight:600;line-height:24px; letter-spacing:1px;">
                        Electrovolt Batteries Service and Warranty Support</h2>
                    <p>This is the home section of our single page UI design.</p>
                </div>
        
           
        </div>
        <script>
            // JavaScript to trigger the animation
            function startAnimation() {
                var text = ""; // Text to animate
                var delay = 100; // Delay between each character (in milliseconds)
                var i = 0;

                function typeWriter() {
                    if (i < text.length) {
                        document.getElementById("animated-text").innerHTML += text.charAt(i);
                        i++;
                        setTimeout(typeWriter, delay);
                    } else {
                        // Animation finished, restart after a delay
                        setTimeout(restartAnimation, 2000); // Wait 2 seconds before restarting
                    }
                }

                function restartAnimation() {
                    document.getElementById("animated-text").innerHTML = ""; // Clear the text
                    i = 0;
                    typeWriter(); // Restart animation
                }

                typeWriter();
            }

            // Start the animation when the page loads
            window.onload = function() {
                startAnimation();
                auto(animated - text);
            }; <
            /body> < /
            html >
            @endsection
