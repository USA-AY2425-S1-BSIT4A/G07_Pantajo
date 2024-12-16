document.addEventListener("DOMContentLoaded", function () {
    // Menu button toggle functionality
    let menu = document.querySelector("#menu-btn");
    let navbar = document.querySelector(".header .navbar");
    let header = document.getElementById("header");

    menu.addEventListener("click", function () {
        menu.classList.toggle("fa-times");
        navbar.classList.toggle("active");
    });

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 10) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    // Project filtering functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove 'active' class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add 'active' class to the clicked button
            button.classList.add('active');

            const category = button.getAttribute('data-category');

            projectItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});



document.addEventListener('DOMContentLoaded', () => {
    fetch('read.php')
        .then(response => response.json())
        .then(data => {
            const carousel = document.getElementById('carousel');
            carousel.innerHTML = data.map(review => `
                <div class="testimonial">
                    <div class="menu-container">
                        <button class="menu-button" onclick="toggleMenu(this)">⋮</button>
                        <div class="menu-options">
                            <button type="button" onclick="showUpdateForm(${review.id}, '${review.comment}', ${review.rating})">Edit</button>
                            <form action="delete.php" method="POST">
                                <input type="hidden" name="id" value="${review.id}">
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="quote">${review.comment}</div>
                    <div class="rating">${'★'.repeat(review.rating)}</div>
                    <div class="author"><strong>${review.username}</strong></div>
                </div>
            `).join('');
        });
});

function toggleMenu(button) {
    const menu = button.nextElementSibling;
    menu.classList.toggle('show-menu');
}

function showUpdateForm(id, comment, rating) {
    document.getElementById('updateId').value = id;
    document.getElementById('updateComment').value = comment;
    document.getElementById('updateRating').value = rating;
    document.getElementById('updateForm').style.display = 'block';
    document.getElementById('createForm').style.display = 'none'; // Hide create form if open
}

function closeUpdateForm() {
    document.getElementById('updateForm').style.display = 'none';
}

function toggleCreateForm() {
    const createForm = document.getElementById('createForm');
    createForm.style.display = createForm.style.display === 'none' || createForm.style.display === '' ? 'block' : 'none';
    document.getElementById('updateForm').style.display = 'none'; // Hide update form if open
}