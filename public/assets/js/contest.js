let wheel = document.querySelector(".wheel");
let spinBtn = document.querySelector(".spinBtn");

$(".spinBtn").on("click", function () {
    startSound.play();

    let value = Math.ceil(Math.random() * 3600);

    // Calculate the final rotation angle after the wheel stops
    let finalRotation = value % 360;

    // Find the prize that corresponds to the final rotation angle
    let winner = prizes.find(
        (prize) =>
            finalRotation >= prize.angle &&
            finalRotation < prize.angle + start_angle
    );

    // Check if a winner is found before accessing its properties
    if (winner) {
        // Log the winner and any additional actions you want to perform
        document.querySelector("#win_prize").value = winner.name;

        var form = document.getElementById("addUserToContest");

        // Check if the form is valid
        if (form.checkValidity()) {
            var formData = $("#addUserToContest").serialize();

            $.ajax({
                url: "/addUserToContest",
                type: "POST",
                data: formData,
                dataType: "json",
                success: function (response) {
                    console.log(response.message);

                    setTimeout(function () {
                        applause.play();
                        // swal({
                        //     title: "Congratulations",
                        //     text: "You Won The " + winner.name + ".",
                        //     icon: "success",
                        // });

                        Swal.fire({
                            title: "Congratulations",
                            text:
                                "You Won The " +
                                winner.name +
                                "." +
                                "Your Tracking ID is: " +
                                response.contest.id,
                            icon: "success",
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: "Okay!",
                        }).then((result) => {
                            $(".wheel").css("transition", "initial");
                            $(".wheel").css("transform", "rotate(0deg)");
                            window.location.href = "/";
                        });
                    }, 5500);

                    // Handle success, e.g., show a success message to the user
                },
                error: function (error) {
                    console.error("Error:", error);
                    // Handle error, e.g., display an error message to the user
                },
            });
        } else {
            Swal.fire({
                title: "Alert",
                text: "Please enter all required data.",
                icon: "warning",
                confirmButtonColor: "#3085d6",
                confirmButtonText: "Okay!",
            });
            // If not valid, the browser will display default error messages
        }

        console.log("Winner: ", winner.name);
    } else {
        console.log("No winner found");
    }

    // Update the wheel rotation
    $(".wheel").css("transition", "transform 5s ease-in-out");
    $(".wheel").css("transform", "rotate(" + -(finalRotation - 3622) + "deg)");

    console.log(value, finalRotation, $(".wheel").css("transform"));

    // Winner Alert
});

// // Starting Code
// let prizes = [
//     { name: "Prize 1", angle: 0 },
//     { name: "Prize 2", angle: 45 },
//     { name: "Prize 3", angle: 90 },
//     { name: "Prize 4", angle: 135 },
//     { name: "Prize 5", angle: 180 },
//     { name: "Prize 6", angle: 225 },
//     { name: "Prize 7", angle: 270 },
//     { name: "Prize 8", angle: 315 },
// ];
// console.log(prizes);

// spinBtn.onclick = function () {
//     startSound.play();
//     // Calculate the final rotation angle after the wheel stops
//     let finalRotation = value % 360;

//     // Find the prize that corresponds to the final rotation angle
//     let winner = prizes.find(
//         (prize) =>
//             finalRotation >= prize.angle && finalRotation < prize.angle + start_angle
//     );
//     console.log(start_angle);

//     // Check if a winner is found before accessing its properties
//     if (winner) {
//         // Log the winner and any additional actions you want to perform
//         console.log("Winner: ", winner.name);
//     } else {
//         console.log("No winner found");
//     }

//     // Update the wheel rotation

//     wheel.style.transform = "rotate(" + -(finalRotation - 3622) + "deg)";

//     console.log(value, finalRotation, wheel.style.transform);

//     // Winner Alert
//     setTimeout(function () {
//         applause.play();
//         swal({
//             title: "Congratulations",
//             text: "You Won The " + winner.name + ".",
//             icon: "success",
//         });
//     }, 5500);

//     // Delay and set to normal state
//     setTimeout(function () {
//         wheel.style.setProperty("transition", "initial");
//         wheel.style.transform = "rotate(0deg)";
//     }, 10000);
// };
