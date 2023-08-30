async function initMap() {
    // Request needed libraries.
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    // Replace these values with your actual latitude and longitude
    const latitude = 42.653819610044586;
    const longitude = 21.1773381797297;

    const map = new Map(document.getElementById("map"), {
        center: { lat: latitude, lng: longitude },
        zoom: 14,
        mapId: "4504f8b37365c3d0",
    });

    const marker = new AdvancedMarkerElement({
        map,
        position: { lat: latitude, lng: longitude },
    });
}

initMap();
