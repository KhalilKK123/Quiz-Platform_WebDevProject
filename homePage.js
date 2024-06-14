const boxes = document.querySelectorAll(".box");

boxes.forEach((box) => {
  box.addEventListener("mouseenter", () => {
    boxes.forEach((otherBox) => {
      if (otherBox !== box) {
        otherBox.classList.add("transition");
        otherBox.classList.add("blur");
      }
    });
  });

  box.addEventListener("mouseleave", () => {
    boxes.forEach((otherBox) => {
      otherBox.classList.remove("blur");
    });
  });
});

// const splash = document.querySelector('.splash');

// document.addEventListener('DOMContentLoaded', (e) => {
//     setTimeout(() => {
//         splash.classList.add('display-none');
//     }, 2000);
// });

const splash = document.querySelector(".splash");

document.addEventListener("DOMContentLoaded", (e) => {
  setTimeout(() => {
    splash.classList.add("slide-right"); // Apply the slide-right class
  }, 2000);
});



