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


const state = document.querySelector('.state');
const city_select = document.querySelector('.city');

state.addEventListener('change', () => {
    if (state.value.length != 0) {
        $.ajax({
            url: '../php/registerLogic.php',
            type: 'POST',
            data: {
                action: 'getCities',
                state: state.value
            },
            success: response => {
                response = JSON.parse(response);
                city_select.innerHTML = "<option value=''>Select city</option>";

                response.forEach(city => {
                    let optionElement = document.createElement('option');
                    optionElement.textContent = city;
                    optionElement.value = city;
                    city_select.appendChild(optionElement);
                });
            },
            error: (xhr, status, error) => {
                console.log("AJAX Error: " + error);
            }
        });
    }
});

const address_state = document.querySelector('.address_state');
const address_city_select = document.querySelector('.address_city_select');

address_state.addEventListener('change', () => {
    if (address_state.value.length != 0) {
        $.ajax({
            url: '../php/registerLogic.php',
            type: 'POST',
            data: {
                action: 'getCities',
                state: address_state.value
            },
            success: response => {
                response = JSON.parse(response);
                address_city_select.innerHTML = "<option value=''>Select city</option>";

                response.forEach(city => {
                    let optionElement = document.createElement('option');
                    optionElement.textContent = city;
                    optionElement.value = city;
                    address_city_select.appendChild(optionElement);
                });
            },
            error: (xhr, status, error) => {
                console.log("AJAX Error: " + error);
            }
        });
    }
});

let tab2Active = false;
let locationActive = false;
let addressActive = false;

const currLoca_wrapper = document.querySelector('.currentLocation');
const mapWrapper = document.querySelector('.mapWrapper');
const writeLocation = document.querySelector('.writeLocation');
const mapFrame = document.querySelector('.mapFrame');
const adressInpWrapper = document.querySelector('.adressInpWrapper');


const actionBtns = document.querySelector('.buildingType-action');


const getLocation = () => {
    return new Promise((resolve, reject) => {
        tab2Active = true;
        locationActive = true;
        addressActive = false;

        actionBtns.style.width = '500px';
        actionBtns.style.justifyContent = 'space-between';
        actionBtns.style.marginTop = '50px';

        actionBtns.classList.add('responsive_location');

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
                    location: `${latitude},${longitude}`,
                    state: state.value,
                    city: city_select.value
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

        actionBtns.style.width = '300px';
        actionBtns.style.justifyContent = 'space-between';
        actionBtns.classList.remove('responsive_location');

        writeLocation.classList.add('hidden');
        currLoca_wrapper.classList.add('hidden');
        mapWrapper.classList.add('hidden');
        adressInpWrapper.classList.remove('hidden');
        nextStepBtn.classList.remove('hidden');


        const addressInput = document.querySelector('.adress-input');

        const adressData = {
            adress: addressInput.value,
            state: address_state.value,
            city: address_city_select.value
        }

        resolve(adressData);
    });
}

currLoca_wrapper.addEventListener('click', getLocation);
writeLocation.addEventListener('click', writeAddress);


let tabNumber = 0;



const showTab = n => {
    buildings[n].classList.remove('hidden');

    actionBtns.style.marginTop = '';
    actionBtns.classList.remove('responsive_location');
    if (n == 0) {
        actionBtns.style.width = '480px';
        actionBtns.style.justifyContent = 'end';
        backStepBtn.classList.add('hidden');
    } else {
        backStepBtn.classList.remove('hidden');
    }

    if(n == 1) {
        actionBtns.style.width = '400px';
        actionBtns.style.justifyContent = 'space-between';
    }

    if (n == 2) {
        nextStepBtn.classList.add('hidden');
        actionBtns.style.width = '400px';
        actionBtns.style.justifyContent = 'start';
    } else {
        nextStepBtn.classList.remove('hidden');
    }


    
    if(n == 3 ){
        actionBtns.style.width = '400px';
        actionBtns.style.justifyContent = 'space-between';
    }

    if(n == 4){
        actionBtns.style.width = '300px';
        actionBtns.style.justifyContent = 'space-between';
    }

    if(n == 5){
        actionBtns.style.width = '440px';
        actionBtns.style.justifyContent = 'space-between';
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

// Create an array to store image URLs
const imageUrls = [];

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
});







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


const buildingError = document.querySelector('.building-type-error');
const roomsError = document.querySelector('.rooms-error');
const bedsError = document.querySelector('.beds-error');
const loc_stateError = document.querySelector('.location-state-error');
const loc_cityError = document.querySelector('.location-city-error');
const addressError = document.querySelector('.address-error');
const add_stateError = document.querySelector('.address-state-error');
const add_cityError = document.querySelector('.address-city-error');
const iamgesError = document.querySelector('.images-error');
const titleError = document.querySelector('.title-error');
const descriptionError = document.querySelector('.description-error');
const priceError = document.querySelector('.price-error');
const avail_fromError = document.querySelector('.avail-from-error');
const avail_untilError = document.querySelector('.avail-until-error');

const validate = () => {
    if (tabNumber == 0) {
        return new Promise((resolve, reject) => {
            const activeBuildingType = getActiveBuildingType();
            if (activeBuildingType) {
                buildingError.classList.add('hidden');
                resolve(true);
            } else {
                buildingError.classList.remove('hidden');
                resolve(false);
            }
        });
    }

    if (tabNumber == 1) {
        return new Promise((resolve, reject) => {
            if (roomsInp.value == 0 || bedInp.value == 0) {
                if (roomsInp.value == 0 && bedInp.value == 0) {
                    roomsError.textContent = '*Number of rooms is required!';
                    roomsError.classList.remove('hidden');
                    bedsError.textContent = '*Number of beds is required!';
                    bedsError.classList.remove('hidden');
                    
                    resolve(false);
                } else if (roomsInp.value == 0) {
                    roomsError.textContent = '*Number of rooms is required!';
                    roomsError.classList.remove('hidden');
                    bedsError.textContent = '';
                    bedsError.classList.add('hidden');

                    resolve(false);
                } else if (bedInp.value == 0) {
                    roomsError.textContent = '';
                    roomsError.classList.add('hidden');
                    bedsError.textContent = '*Number of beds is required!';
                    bedsError.classList.remove('hidden');
                    resolve(false);
                }

            } else {
                roomsError.textContent = '';
                roomsError.classList.add('hidden');
                bedsError.textContent = '';
                bedsError.classList.add('hidden');

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
                    if (locationData.location && locationData.state && locationData.city) {
                        loc_stateError.textContent = '';
                        loc_stateError.classList.add('hidden');
                        loc_cityError.textContent = '';
                        loc_cityError.classList.add('hidden');

                        state.classList.remove('border-rose-500');
                        city_select.classList.remove('border-rose-500');

                        resolve(true);
                    } else if(!locationData.state || !locationData.city){
                        if (!locationData.state && !locationData.city){

                            loc_stateError.textContent = '*State is required!';
                            loc_stateError.classList.remove('hidden');
    
                            loc_cityError.textContent = '*City is required!';
                            loc_cityError.classList.remove('hidden');

                            state.classList.add('border-rose-500');
                            city_select.classList.add('border-rose-500');

                            resolve(false);
                        } else if (!locationData.state) {
                            loc_stateError.textContent = '*State is required!';
                            loc_stateError.classList.remove('hidden');
                            
                            loc_cityError.textContent = '';
                            loc_cityError.classList.add('hidden');

                            state.classList.add('border-rose-500');
                            city_select.classList.remove('border-rose-500');

                            resolve(false);
                        } else if (!locationData.city){
                            loc_stateError.textContent = '';
                            loc_stateError.classList.add('hidden');

                            loc_cityError.textContent = '*City is required!';
                            loc_cityError.classList.remove('hidden');

                            state.classList.remove('border-rose-500');
                            city_select.classList.add('border-rose-500');

                            resolve(false);
                        }

                    }
                }).catch(error => {
                    console.error('Error getting location:', error);
                    reject(error);
                });
            } else if (addressActive) {
                writeAddress().then(adressData => {
                    if (adressData.adress && adressData.state && adressData.city) {
                        addressError.textContent = '';
                        addressError.classList.add('hidden');

                        add_stateError.textContent = '';
                        add_stateError.classList.add('hidden');

                        add_cityError.textContent = '';
                        add_cityError.classList.add('hidden');

                        resolve(true);
                    } else {
                        if (!adressData.adress){
                            addressError.textContent = '*Address is required!';
                            addressError.classList.remove('hidden');

                        } else{
                            addressError.textContent = '';
                            addressError.classList.add('hidden');
                        }

                        if(!adressData.state){
                            add_stateError.textContent = '*State is required!';
                            add_stateError.classList.remove('hidden');
                        } else{
                            add_stateError.textContent = '';
                            add_stateError.classList.add('hidden');
                        }

                        if (!adressData.city){
                            add_cityError.textContent = '*City is required!';
                            add_cityError.classList.remove('hidden');
                        } else{
                            add_cityError.textContent = '';
                            add_cityError.classList.add('hidden');
                        }

                        resolve(false);
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
                iamgesError.textContent = '';
                iamgesError.classList.add('hidden');
                resolve(true);
            }  else {
                iamgesError.textContent = '*Upload at least one image!';
                iamgesError.classList.remove('hidden');
                resolve(false);
            }
        });
    }


    if (tabNumber == 4) {
        return new Promise((resolve, reject) => {
            let titleValid, descriptionValid, priceValid, fromValid, untilValid;


            if (postTitle.value.length == 0) {
                titleError.textContent = '*Required';
                titleError.classList.remove('hidden');
                titleValid = false;
            } else {
                titleError.textContent = '';
                titleError.classList.add('hidden');
                titleValid = true;
            }

            if (postDescription.value.length == 0) {
                descriptionError.textContent = '*Description required';
                descriptionError.classList.remove('hidden');
                descriptionValid = false;
            } else {
                descriptionError.textContent = '';
                descriptionError.classList.add('hidden');
                descriptionValid = true;
            }

            if (postPrice.value.length == 0) {
                priceError.textContent = '*Price is required';
                priceError.classList.remove('hidden');
                priceValid = false;
            } else {
                priceError.textContent = '';
                priceError.classList.add('hidden');
                priceValid = true;
            }

            if (availableFrom.value.length == 0) {
                avail_fromError.textContent = '*Required';
                avail_fromError.classList.remove('hidden');
                fromValid = false;
            } else {
                avail_fromError.textContent = '';
                avail_fromError.classList.add('hidden');
                fromValid = true;
            }

            if (availableUntil.value.length == 0) {
                avail_untilError.textContent = '*Required';
                avail_untilError.classList.remove('hidden');
                untilValid = false;
            } else {
                avail_untilError.textContent = '';
                avail_untilError.classList.add('hidden');
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

        // let location = '';
        // if(tabNumber == (buildings.length - 1)){
        //     if (locationActive) {
        //         getLocation().then(locationData => {
        //             if (locationData && locationData.location) {
        //                 location = locationData.location;
        //             } else {
        //                 location = '';
        //                 console.error('Location data is not set.');
        //                 reject('Location data is not set.');
        //             }
        //         }).catch(error => {
        //             console.error('Error getting location:', error);
        //             reject(error);
        //         });
        //     } else if (addressActive) {
        //         writeAddress().then(adressData => {
        //             if (adressData && adressData.adress) {
        //                 location = adressData.adress;
        //             } else {
        //                 location = '';
        //                 console.error('Location data is not set.');
        //                 reject('Location data is not set.');
        //             }
        //         }).catch(error => {
        //             console.error('Error getting location:', error);
        //             reject(error);
        //         });
        //     }

        //     // Create a new FormData object
        //     let formData = new FormData();

        //     // Append other form data to the FormData object
        //     formData.append('action', 'insertData');
        //     formData.append('buildingType', getActiveBuildingType());
        //     formData.append('roomsInp', roomsInp.value);
        //     formData.append('bedInp', bedInp.value);
        //     formData.append('location', location);
        //     formData.append('state', state.value);
        //     formData.append('city', city_select.value);
        //     formData.append('title', postTitle.value);
        //     formData.append('description', postDescription.value);
        //     formData.append('price', postPrice.value);
        //     formData.append('availableFrom', availableFrom.value);
        //     formData.append('availableUntil', availableUntil.value);
        //     formData.append('placeOffers', getCheckedCheckboxes());

        //     // Loop through selected files, convert them to Base64, and append to FormData
        //     for (let i = 0; i < imageUrls.length; i++) {
        //         const file = imageUrls[i];
        //         const reader = new FileReader();
        //         reader.onload = function (event) {
        //             const base64Image = event.target.result.split(',')[1]; // Get base64 data
        //             formData.append(`image_${i + 1}`, base64Image); // Append base64 image to FormData
        //         };
        //         reader.readAsDataURL(file);
        //     }

        //     // Make the AJAX request with FormData
        //     $.ajax({
        //         url: '../php/addHouseLogic.php',
        //         type: 'POST',
        //         data: formData,
        //         processData: false, // Prevent jQuery from processing data
        //         contentType: false, // Prevent jQuery from setting content type
        //         success: function (response) {
        //             console.log(response);
        //         }
        //     });



        // }

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