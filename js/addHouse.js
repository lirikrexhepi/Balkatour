const buildingType = document.querySelectorAll('.buildingType');
const nextStepBtn = document.querySelector('.nextStep');

buildingType.forEach(element => {
    element.addEventListener('click', () => {
        // Remove 'building-active' class from all building types
        buildingType.forEach(item => {
            item.classList.remove('building-active');
        });

        // Add 'building-active' class to the clicked building type
        element.classList.add('building-active');

        // Get and display the active building type
        const activeBuildingType = getActiveBuildingType();
        if (activeBuildingType) {
            console.log(activeBuildingType);
        } else {
            console.log('No active building type.');
        }
    });
});

const getActiveBuildingType = () => {
    const activeElement = document.querySelector('.building-active');
    if (activeElement) {
        return activeElement.getAttribute('data-building-type');
    }
    return null;
};

nextStepBtn.addEventListener('click', () => {
    const activeBuildingType = getActiveBuildingType();
    if (activeBuildingType) {
        alert(activeBuildingType);
    } else {
        alert('Choose a building type');
    }
});