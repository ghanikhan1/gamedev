// document.addEventListener("DOMContentLoaded", function () {
//     console.log("Main App Script Loaded!");
//
//     // Dynamically load Alpine.js
//     let alpineScript = document.createElement("script");
//     alpineScript.setAttribute("src", "https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js");
//     alpineScript.setAttribute("defer", "true");
//     document.head.appendChild(alpineScript);
//
//     alpineScript.onload = () => {
//         console.log("✅ Alpine.js Loaded Successfully!");
//     };
//
//     alpineScript.onerror = () => {
//         console.error("❌ Failed to load Alpine.js!");
//     };
// });


document.addEventListener("DOMContentLoaded", function () {
    console.log("✅ Main App Script Loaded!");

    if (window.Alpine) {
        console.log("✅ Alpine.js is running from alpine.min.js!");
    } else {
        console.error("❌ Alpine.js is missing! Check alpine.min.js in public/js/");
    }
});

