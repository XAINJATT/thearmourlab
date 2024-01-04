let wheel = document.querySelector(".wheel");
let spinBtn = document.querySelector(".spinBtn");
let value = Math.ceil(Math.random() * 3600);

// Array of prizes and their corresponding angles
let prizes = [
    { name: "Prize 1", angle: 0 },
    { name: "Prize 2", angle: 45 },
    { name: "Prize 3", angle: 90 },
    { name: "Prize 4", angle: 135 },
    { name: "Prize 5", angle: 180 },
    { name: "Prize 6", angle: 225 },
    { name: "Prize 7", angle: 270 },
    { name: "Prize 8", angle: 315 },
];

spinBtn.onclick = function () {
    startSound.play();
    // Calculate the final rotation angle after the wheel stops
    let finalRotation = value % 360;

    // Find the prize that corresponds to the final rotation angle
    let winner = prizes.find(
        (prize) =>
            finalRotation >= prize.angle && finalRotation < prize.angle + 45
    );

    // Check if a winner is found before accessing its properties
    if (winner) {
        // Log the winner and any additional actions you want to perform
        console.log("Winner: ", winner.name);
    } else {
        console.log("No winner found");
    }

    // Update the wheel rotation

    wheel.style.transform = "rotate(" + -(finalRotation - 3622) + "deg)";

    console.log(value, finalRotation, wheel.style.transform);

    // Winner Alert
    setTimeout(function () {
        applause.play();
        swal({
            title: "Congratulations",
            text: "You Won The " + winner.name + ".",
            icon: "success",
        });
    }, 5500);

    // Delay and set to normal state
    setTimeout(function () {
        wheel.style.setProperty("transition", "initial");
        wheel.style.transform = "rotate(0deg)";
    }, 10000);
};
