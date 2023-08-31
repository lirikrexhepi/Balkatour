const buildingType = document.querySelectorAll('.buildingType');
const nextStepBtn = document.querySelector('.nextStep');
const buildings = document.querySelectorAll('.buildingTab');
const backStepBtn = document.querySelector('.backStep');


buildingType.forEach(element => {
    element.addEventListener('click', () => {
        // Remove 'building-active' class from all building types
        buildingType.forEach(item => {
            item.classList.remove('building-active');
        });

        // Add 'building-active' class to the clicked building type
        element.classList.add('building-active');

    });
});

const getActiveBuildingType = () => {
    const activeElement = document.querySelector('.building-active');
    if (activeElement) {
        return activeElement.getAttribute('data-building-type');
    }
    return null;
};


const incrementNum = document.querySelector('.incrementNum');
const decrementNum = document.querySelector('.decrementNum');
const roomsInp = document.querySelector('.roomsInp');

incrementNum.addEventListener('click', () => {
    const currentValue = parseInt(roomsInp.value); // Convert value to an integer
    if (currentValue >= 0) {
        roomsInp.value = currentValue + 1;
    }
});

decrementNum.addEventListener('click', () => {
    const currentValue = parseInt(roomsInp.value);
    if (currentValue > 0) { // Prevent decrementing below 1
        roomsInp.value = currentValue - 1;
    }
});


const bedInp = document.querySelector('.bedInp');
const bedDec = document.querySelector('.bedDec');
const bedInc = document.querySelector('.bedInc');

bedInc.addEventListener('click', () => {
    const currentValue = parseInt(bedInp.value); // Convert value to an integer
    if (currentValue >= 0) {
        bedInp.value = currentValue + 1;
    }
});

bedDec.addEventListener('click', () => {
    const currentValue = parseInt(bedInp.value);
    if (currentValue > 0) { // Prevent decrementing below 1
        bedInp.value = currentValue - 1;
    }
});




let tabNumber = 0;

const showTab = n => {
    buildings[n].classList.remove('hidden');

    if(n == 0){
        backStepBtn.classList.add('hidden');
    } else{
        backStepBtn.classList.remove('hidden');
    }

    if(n == buildings.length - 1){
        window.location.reload();
    }
}

showTab(tabNumber);

const validate = () => {
    if (tabNumber == 0) {
        return new Promise((resolve, reject) => {
            const activeBuildingType = getActiveBuildingType();
            if (activeBuildingType) {
                resolve(true);
            } else {
                alert('Choose the building type');
                resolve(false);
            }
        });
    }

    if(tabNumber == 1){
        return new Promise((resolve, reject) => {
            if(roomsInp.value == 0 || bedInp.value == 0){
                if (roomsInp.value == 0 && bedInp.value == 0){
                    alert('Please fill the information');
                    resolve(false);
                } else if (roomsInp.value == 0){
                    alert('Please fill the rooms info..');
                    resolve(false);
                } else if (bedInp.value == 0){
                    alert('Please fill the beds info');
                    resolve(false);
                }

            } else {
                resolve(true);
            }
        });
    }
}

const nextStep = () => {
    validate().then(isValid => {
        if(!isValid){
            return false;
        }

        buildings[tabNumber].classList.add('hidden');

        tabNumber++;

        showTab(tabNumber);
    });
}

const backStep = () => {
    buildings[tabNumber].classList.add('hidden');

    tabNumber--;

    showTab(tabNumber);
}

nextStepBtn.addEventListener('click', nextStep);
backStepBtn.addEventListener('click', backStep);

