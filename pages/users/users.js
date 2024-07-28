// Calendar
document.addEventListener('DOMContentLoaded', function () {
    const monthYearElement = document.getElementById('monthYear');
    const datesElement = document.getElementById('dates');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentDate = new Date();

    const updateCalendar = () => {
        const currentYear = currentDate.getFullYear();
        const currentMonth = currentDate.getMonth();

        const firstDay = new Date(currentYear, currentMonth, 1).getDay();
        const lastDay = new Date(currentYear, currentMonth + 1, 0).getDate();
        const lastDayIndex = new Date(currentYear, currentMonth + 1, 0).getDay();

        const monthYearString = currentDate.toLocaleDateString('default', { month: 'long', year: 'numeric' });
        monthYearElement.textContent = monthYearString;

        let datesHTML = '';

        // Previous month days
        const prevMonthLastDay = new Date(currentYear, currentMonth, 0).getDate();
        for (let i = firstDay - 1; i >= 0; i--) {
            const prevDate = new Date(currentYear, currentMonth, -i);
            datesHTML += `<div class="date inactive">${prevDate.getDate()}</div>`;
        }

        // Current month days
        for (let i = 1; i <= lastDay; i++) {
            const date = new Date(currentYear, currentMonth, i);
            const activeClass = date.toDateString() === new Date().toDateString() ? 'active' : '';
            datesHTML += `<div class="date ${activeClass}">${i}</div>`;
        }

        // Next month days
        for (let i = 1; i <= 6 - lastDayIndex; i++) {
            const nextDate = new Date(currentYear, currentMonth + 1, i);
            datesHTML += `<div class="date inactive">${i}</div>`;
        }

        datesElement.innerHTML = datesHTML;
    }

    prevBtn.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateCalendar();
    });

    nextBtn.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateCalendar();
    });

    updateCalendar();

    // Toggle selector
    const toggle = document.querySelector(".toggle");
    const navigation = document.querySelector(".dropdown-menu");
    const main = document.querySelector(".main");

    toggle.onclick = function () {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
    };

    // add hovered class in selected items
    const list = document.querySelectorAll(".dropdown-menu li");
    function activeLink() {
        list.forEach((item) => item.classList.remove("hovered"));
        this.classList.add("hovered");
    }
    list.forEach((item) => item.addEventListener("click", activeLink));
});

// Navigation Toggle
function showElement(elementId) {
    const elements = [
        "dashboard",
        "accountinfo",
        "billing",
        "bookings",
        "changeprofile",
        "changepassword",
    ];

    elements.forEach((id) => {
        const element = document.getElementById(id);
        if (id === elementId) {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    });
}

function showDashboard() {
    showElement("dashboard");
}

function showAccountInfo() {
    showElement("accountinfo");
}

function showBilling() {
    showElement("billing");
}

function showBookings() {
    showElement("bookings");
}

function showChangeProfile() {
    showElement("changeprofile");
}

function showChangePassword() {
    showElement("changepassword");
}

