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




let tabNumber = 4;

const showTab = n => {
    buildings[n].classList.remove('hidden');

    if (n == 0) {
        backStepBtn.classList.add('hidden');
    } else {
        backStepBtn.classList.remove('hidden');
    }

    if (n == 2) {
        nextStepBtn.classList.add('hidden');
    } else {
        nextStepBtn.classList.remove('hidden');
    }

    if(n == (buildings.length - 1)){
        nextStepBtn.classList.add('hidden');
        backStepBtn.classList.add('hidden');
    }   

}

showTab(tabNumber);


const fileInput = document.getElementById("file");
const filePreview = document.getElementById("filePreview");
const MAX_IMAGES = 10;
let displayedImages = 0;
const imageUrls = []; // Array to store image URLs

fileInput.addEventListener("change", function () {
    const files = this.files;

    if (displayedImages + files.length > MAX_IMAGES) {
        alert(`You can only display a maximum of ${MAX_IMAGES} images.`);
        return;
    }

    for (let i = 0; i < files.length; i++) {
        const file = files[i];

        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.onload = function (event) {
                const imageUrl = event.target.result;
                const img = document.createElement("img");
                img.src = imageUrl;

                // Append the new image preview
                filePreview.appendChild(img);
                displayedImages++; // Increment the count of displayed images

                // Store the image URL in the array
                imageUrls.push(imageUrl);

            };

            reader.readAsDataURL(file);
        } else {
            alert(`File ${file.name} is not an image and will be skipped.`);
        }
    }

    // Clear the file input after processing
    this.value = "";
});



const currLoca_wrapper = document.querySelector('.currentLocation');
const mapWrapper = document.querySelector('.mapWrapper');
const writeLocation = document.querySelector('.writeLocation');
const mapFrame = document.querySelector('.mapFrame');
const adressInpWrapper = document.querySelector('.adressInpWrapper');


let tab2Active = false;
let locationActive = false;
let addressActive = false;


const getLocation = () => {
    return new Promise((resolve, reject) => {
        tab2Active = true;
        locationActive = true;
        addressActive = false;


        writeLocation.classList.add('hidden');
        currLoca_wrapper.classList.add('hidden');
        mapWrapper.classList.remove('hidden');
        adressInpWrapper.classList.add('hidden'); // Hide address input, if previously shown
        nextStepBtn.classList.remove('hidden');

        // Get the user's current location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                // Update the map iframe URL with the user's location
                const frameSrc = `https://www.google.com/maps/embed/v1/place?q=${latitude},${longitude}&key=AIzaSyCD9Aj8U-m1cBz-S9sofKC4K13twTyvSkU`;
                mapFrame.src = frameSrc;

                const locationData = {
                    location: `${latitude},${longitude}`
                }

                resolve(locationData);
            }, (error) => {
                // Handle any errors here
                console.error('Error getting current location:', error);
                reject(error);
            });
        } else {
            // Geolocation is not supported by the browser
            console.error('Geolocation is not supported.');
        }
    });
}

const writeAddress = () => {
    return new Promise((resolve, reject) => {
        locationActive = false;
        addressActive = true;
        tab2Active = true;
        writeLocation.classList.add('hidden');
        currLoca_wrapper.classList.add('hidden');
        mapWrapper.classList.add('hidden');
        adressInpWrapper.classList.remove('hidden');
        nextStepBtn.classList.remove('hidden');


        const addressInput = document.querySelector('.adress-input');

        const adressData = {
            adress: addressInput.value
        }

        resolve(adressData);
    });
}

currLoca_wrapper.addEventListener('click', getLocation);
writeLocation.addEventListener('click', writeAddress);



const postTitle = document.querySelector('.post-title');
const postDescription = document.querySelector('.post-description');
const postPrice = document.querySelector('.post-price');
const availableFrom = document.querySelector('.available-from');
const availableUntil = document.querySelector('.available-until');


const placeOffersInputs = document.querySelectorAll('.place-offers > div > input');
const placeOffersLabels = document.querySelectorAll('.place-offers > div > label');

placeOffersInputs.forEach((input, index) => {
    input.addEventListener('change', () => {
        if (input.checked) {
            placeOffersLabels[index].style.opacity = 0.5;
        } else {
            placeOffersLabels[index].style.opacity = 1;
        }
    });
});



const getCheckedCheckboxes = () => {
    const placeOffersInputs = document.querySelectorAll('.place-offers > div > input');
    const checkedCheckboxes = [];

    placeOffersInputs.forEach(input => {
        if (input.checked) {
            checkedCheckboxes.push(input.getAttribute('data-place-offers'));
        }
    });

    return checkedCheckboxes;
}




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

    if (tabNumber == 1) {
        return new Promise((resolve, reject) => {
            if (roomsInp.value == 0 || bedInp.value == 0) {
                if (roomsInp.value == 0 && bedInp.value == 0) {
                    alert('Please fill the information');
                    resolve(false);
                } else if (roomsInp.value == 0) {
                    alert('Please fill the rooms info..');
                    resolve(false);
                } else if (bedInp.value == 0) {
                    alert('Please fill the beds info');
                    resolve(false);
                }

            } else {
                resolve(true);
            }
        });
    }

    if (tabNumber == 2) {
        return new Promise((resolve, reject) => {
            tab2Active = false;
            adressInpWrapper.classList.add('hidden');
            mapWrapper.classList.add('hidden');
            writeLocation.classList.remove('hidden');
            currLoca_wrapper.classList.remove('hidden');

            if (locationActive) {
                getLocation().then(locationData => {
                    if (locationData && locationData.location) {
                        alert(locationData.location);
                        resolve(true);
                    } else {
                        resolve(false);

                        console.error('Location data is not set.');
                        reject('Location data is not set.');
                    }
                }).catch(error => {
                    console.error('Error getting location:', error);
                    reject(error);
                });
            } else if (addressActive) {
                writeAddress().then(adressData => {
                    if (adressData && adressData.adress) {
                        alert(adressData.adress);
                        resolve(true);
                    } else {
                        resolve(false);

                        console.error('Location data is not set.');
                        reject('Location data is not set.');
                    }
                }).catch(error => {
                    console.error('Error getting location:', error);
                    reject(error);
                });
            }
        });
    }

    if (tabNumber == 3) {
        return new Promise((resolve, reject) => {
            if (imageUrls.length > 0) {
                // Alert the user with the image URLs
                alert(imageUrls);
                resolve(true);
            } else {
                alert("Please upload at least one image.");
                resolve(false);
            }
        });
    }


    if (tabNumber == 4) {
        return new Promise((resolve, reject) => {
            let titleValid, descriptionValid, priceValid, fromValid, untilValid;


            if (postTitle.value.length == 0) {
                console.log('You need to write the post title');
                titleValid = false;
            } else {
                titleValid = true;
            }

            if (postDescription.value.length == 0) {
                console.log('You need to write the post description');
                descriptionValid = false;
            } else {
                descriptionValid = true;
            }

            if (postPrice.value.length == 0) {
                console.log('You need to write the price');
                priceValid = false;
            } else {
                priceValid = true;
            }

            if (availableFrom.value.length == 0) {
                console.log('You need to write the date that this building is available from');
                fromValid = false;
            } else {
                fromValid = true;
            }

            if (availableUntil.value.length == 0) {
                console.log('You need to write the date that this building is available until');
                untilValid = false;
            } else {
                untilValid = true;
            }


            if (titleValid && descriptionValid && priceValid && fromValid && untilValid) {
                resolve(true);
            } else {
                resolve(false);
            }

        });
    }

    if (tabNumber == 5) {
        return new Promise((resolve, reject) => {
            const checkedBoxes = getCheckedCheckboxes();
            if(checkedBoxes.length != 0){
                resolve(true);
            } else {
                alert('Please enter at least one thing that this place offers');
                resolve(false);
            }
        });
    }

}

const nextStep = () => {
    validate().then(isValid => {
        if (!isValid) {
            return false;
        }

        buildings[tabNumber].classList.add('hidden');

        tabNumber++;

        let location = '';
        if(tabNumber == (buildings.length - 1)){
            if (locationActive) {
                getLocation().then(locationData => {
                    if (locationData && locationData.location) {
                        location = locationData.location;
                    } else {
                        location = '';
                        console.error('Location data is not set.');
                        reject('Location data is not set.');
                    }
                }).catch(error => {
                    console.error('Error getting location:', error);
                    reject(error);
                });
            } else if (addressActive) {
                writeAddress().then(adressData => {
                    if (adressData && adressData.adress) {
                        location = adressData.adress;
                    } else {
                        location = '';
                        console.error('Location data is not set.');
                        reject('Location data is not set.');
                    }
                }).catch(error => {
                    console.error('Error getting location:', error);
                    reject(error);
                });
            }

            $.ajax({
                url: '../php/addHouseLogic.php',
                type: 'POST',
                data: {
                    action: 'insertData',
                    buildingType: getActiveBuildingType(),
                    roomsInp: roomsInp.value,
                    bedInp: bedInp.value,
                    location: location,
                    image: imageUrls,
                    title: postTitle.value,
                    description: postDescription.value,
                    price: postPrice.value,
                    availableFrom: availableFrom.value,
                    availableUntil: availableUntil.value,
                    placeOffers: getCheckedCheckboxes()
                },
                success: response => {
                    alert(response);
                    window.location.reload();
                }
            });
        }

        showTab(tabNumber);
    });
}

const backStep = () => {
    if (tab2Active) {
        // User is in the location selection step, show the relevant elements
        tab2Active = false; // Set tab2Active to false when going back
        adressInpWrapper.classList.add('hidden');
        mapWrapper.classList.add('hidden');
        writeLocation.classList.remove('hidden');
        currLoca_wrapper.classList.remove('hidden');
    } else {
        // User is not in the location selection step, proceed with going back
        buildings[tabNumber].classList.add('hidden');
        tabNumber--;
        showTab(tabNumber);
    }
}


nextStepBtn.addEventListener('click', nextStep);
backStepBtn.addEventListener('click', backStep);