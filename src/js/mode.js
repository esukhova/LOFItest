"use strict";

const htmlElement = document.documentElement;

const pinkButton = document.getElementById("pink");
pinkButton.addEventListener("click", changetopink);

const greenButton = document.getElementById("green");
greenButton.addEventListener("click", changetogreen);

const yellowButton = document.getElementById("yellow");
yellowButton.addEventListener("click", changetoyellow);

function changetopink() {
  htmlElement.className = "pink";
  if (htmlElement.classList.contains("pink")) {
    localStorage.setItem("mode", "pink");
  }
}

function changetoyellow() {
  htmlElement.className = "yellow";
  if (htmlElement.classList.contains("yellow")) {
    localStorage.setItem("mode", "yellow");
  } else {
    localStorage.setItem("mode", "pink");
  }
}

function changetogreen() {
  htmlElement.className = "green";
  if (htmlElement.classList.contains("green")) {
    localStorage.setItem("mode", "green");
  } else {
    localStorage.setItem("mode", "pink");
  }
}

if (localStorage.getItem("mode") === "pink") {
  htmlElement.className = "pink";
} else {
  if (localStorage.getItem("mode") === "yellow") {
    htmlElement.className = "yellow";
  } else {
    htmlElement.className = "green";
  }
}
