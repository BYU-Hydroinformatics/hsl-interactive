var map, vectorSource, vectorLayer

const load = () => {
	vectorSource = new ol.source.Vector({})
	vectorLayer = new ol.layer.Vector({
		style: new ol.style.Style({
			image: new ol.style.Circle({
				radius: 5,
				fill: new ol.style.Fill({
					color: 'orange'
				})
			})
		}),
		source: vectorSource,
		zIndex: 100
	})
	map = new ol.Map({
		target: 'map',
		layers: [
			vectorLayer,
			new ol.layer.Tile({
				source: new ol.source.XYZ({
					url:
						'https://basemap.nationalmap.gov/arcgis/rest/services/USGSTopo/MapServer/tile/{z}/{y}/{x}'
				}),
				zIndex: 0
			})
		],
		view: new ol.View({
			center: ol.proj.fromLonLat([-111.649, 40.249]),
			zoom: 5
		})
	})

	loadMarkers()
	initListeners()
}

const loadMarkers = () => {
	let searchUrl = `${base_url}sites/displayAll`

	//TODO : Probably need to start a loading indicator.

	$.ajax({
		url: searchUrl,
		cache: false,
		dataType: 'json'
	})
		.done(markersJSON => {
			if (markersJSON.marker) {
				let markers = markersJSON.marker

				// 				@attributes:
				// lat: "44.815"
				// lng: "-110.7316667"
				// name: "Beaver Lake Inlake E"
				// sitecode: "BLIE"
				// siteid: "11"
				// sitepic: ""
				// sitetype: ""
				// sourcecode: "2"
				// sourcelink: "http://www.byu.edu"
				// sourcename: "Dr. Millers Research "

				markers = markers.map(marker => {
					let { lat, lng, name, siteid, sitetype } = marker[
						'@attributes'
					]

					let coords = ol.proj.transform(
						[parseFloat(lng), parseFloat(lat)],
						'EPSG:4326',
						'EPSG:3857'
					)
					let myLocation = new ol.geom.Point(coords)

					return new ol.Feature({
						name,
						geometry: myLocation,
						siteid,
						sitetype
					})
				})

				vectorSource.addFeatures(markers)

				map.getView().fit(vectorSource.getExtent(), map.getSize())
				map.updateSize()
			} else {
				console.log('No Markers found')
			}
		})
		.fail(err => {
			console.log(err)
		})
}

const initListeners = () => {
	let popupElem = document.getElementById('popup')

	let popup = new ol.Overlay({
		element: popupElem,
		positioning: 'bottom-center',
		stopEvent: false
	})
	map.addOverlay(popup)

	map.on('pointermove', function(evt) {
		if (evt.dragging) {
			return
		}

		let hit = this.forEachFeatureAtPixel(evt.pixel, function(
			feature,
			layer
		) {
			return true
		})

		this.getTargetElement().style.cursor = hit ? 'pointer' : ''
	})

	// display popup on click
	map.on('singleclick', function(evt) {
		$(popupElem).popover('destroy')
		if (map.getTargetElement().style.cursor == 'pointer') {
			let feature = map.forEachFeatureAtPixel(
				evt.pixel,
				(feature, layer) => feature
			)

			if (feature) {
				let geometry = feature.getGeometry(),
					coord = geometry.getCoordinates(),
					name = feature.get('name'),
					siteid = feature.get('siteid')

				let popupContent = `<div id='menu12' style='float:left;'>
				<b>${name}</b><br/>
				<a href='${base_url}sites/details/${siteid}'>Click here for site details and data</a>
				</div>`

				popup.setPosition(coord)
				$(popupElem).popover({
					placement: 'top',
					html: true,
					content: popupContent
				})
				$(popupElem).popover('show')
			} else {
				$(popupElem).popover('destroy')
				popup.setPosition(undefined)
			}
		}
	})
}
