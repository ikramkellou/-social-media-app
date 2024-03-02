( function( api ) {

	// Extends our custom "social-media-expert" section.
	api.sectionConstructor['social-media-expert'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );