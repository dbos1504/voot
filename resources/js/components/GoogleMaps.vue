<template>
    <div>
        <GmapMap :center="center" :map-type-id="mapTypeId" :zoom="14" :options="mapStyle" >
            <gmap-info-window :options="infoOptions" :position="infoPosition" :opened="infoOpened" @closeclick="infoOpened=false">
                {{infoContent}}
            </gmap-info-window>
            <GmapMarker
                    v-for="(item, index) in markers"
                    :key="index"
                    :position="item.position"
                    @click="toggleInfo(item)"
                    :icon="{ url: ('/img/marker.svg')}"
            />
        </GmapMap>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                center: { lat: 64.155590, lng: -21.864437 },
                mapTypeId: "roadmap",
                markers: [
                    { position: { full_name: 'Skarfagarðar 4, 104, Reykjavík', lat: 64.155590, lng: -21.864437 } },
                ],
                infoPosition: null,
                infoContent: null,
                infoOpened: false,
                infoCurrentKey: null,
                infoOptions: {
                    pixelOffset: {
                        width: 0,
                        height: -35
                    }
                },
                mapStyle: {styles: [
                        {
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#eeeeee"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e5e5e5"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dadada"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.line",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e5e5e5"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#eeeeee"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#c9c9c9"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        }
                    ]},

            };
        },
        methods: {
            getPosition: function(marker) {
                return {
                    lat: parseFloat(marker.lat),
                    lng: parseFloat(marker.lng)
                }
            },
            toggleInfo: function(marker, key) {
                this.infoPosition = this.getPosition(marker);
                this.infoContent = marker.position.full_name;
                if (this.infoCurrentKey == key) {
                    this.infoOpened = !this.infoOpened;
                } else {
                    this.infoOpened = true;
                    this.infoCurrentKey = key;
                }
            }
        }
    };
</script>

<style lang="scss" scoped>
    .vue-map-container {
        height: 575px;
        width: 100%;
    }
</style>