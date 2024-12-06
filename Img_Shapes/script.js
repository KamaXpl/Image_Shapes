document.addEventListener('DOMContentLoaded', function() {
    const shapeSelect = document.getElementById('shape-select');
    const filterSelect = document.getElementById('filter-select');
    const colorSelect = document.getElementById('color-select');
    const borderSelect = document.getElementById('border-select');
    const sizeSelect = document.getElementById('size-select');
    const imageContainers = document.querySelectorAll('.image-container');

    function applyShape() {
        const selectedShape = shapeSelect.value;
        imageContainers.forEach(container => {
            // Remove previous shape classes
            container.classList.remove('square', 'circle', 'triangle', 'star');
            // Add the selected shape class
            container.classList.add(selectedShape);
        });
    }

    function applyFilter() {
        const selectedFilter = filterSelect.value;
        imageContainers.forEach(container => {
            // Remove previous filter classes
            container.classList.remove('black', 'inverted', 'brightness');
            // Add the selected filter class
            container.classList.add(selectedFilter);
        });
    }

    function changeColor() {
        const selectedColor = colorSelect.value;
        imageContainers.forEach(container => {
            // Remove previous filter classes
            container.classList.remove('blue', 'red', 'yellow', 'green');
            // Add the selected filter class
            container.classList.add(selectedColor);
        });
    }

    function changeBorder() {
        const selectedBorder = borderSelect.value;
        imageContainers.forEach(container => {
            // Remove previous filter classes
            container.classList.remove('solid', 'dotted', 'double', 'dashed');
            // Add the selected filter class
            container.classList.add(selectedBorder);
        });
    }

    function changeSize() {
        const selectedSize = sizeSelect.value;
        imageContainers.forEach(container => {
            // Remove previous filter classes
            container.classList.remove('one', 'five', 'ten', 'twenty');
            // Add the selected filter class
            container.classList.add(selectedSize);
        });
    }

    // Event listeners for the selects
    shapeSelect.addEventListener('change', applyShape);
    filterSelect.addEventListener('change', applyFilter);
    colorSelect.addEventListener('change', changeColor);
    borderSelect.addEventListener('change', changeBorder);
    sizeSelect.addEventListener('change', changeSize);
});