/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

// Mobile Overlayer Navigation Function
const openNavBtn = document.getElementById("mobile-opennav-button");
const closeNavBtn = document.getElementById("mobile-closenav-button");
const overlayerNav = document.getElementById("mobile-ovelayer-navigation");

openNavBtn.onclick = function(e) {
    e.preventDefault();
    overlayerNav.style.width = "100%";
};
closeNavBtn.onclick = function(e) {
    e.preventDefault();
    overlayerNav.style.width = "0%";
};
