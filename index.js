const sideMenu = document.querySelector("aside");
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const themeToggler = document.querySelector(".theme-toggler");

const inputFields = document.querySelectorAll(".input");

inputFields.forEach(inputField => {
    inputField.addEventListener('blur', () => {
        if (inputField.value != "") {
            inputField.style.background = 'green';
            inputField.style.color = 'white';
        }
    });
});

// Show the sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});

// Close the sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});

// Event for delivery location focus
const type = document.getElementsByName("type_produit")[0];
const offElements = document.querySelectorAll(".off");

type.addEventListener('change', () => {
    if (type.value === "unique") {
        offElements.forEach(offElement => {
            offElement.style.display = 'none';
        });
    } else {
        offElements.forEach(offElement => {
            offElement.style.display = 'block';
        });
    }
});

// Change theme
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');
    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
});