# Changelog

## 3.0.0 - 2018-02-14

### Added
- Craft 3 compatibility.

## 2.4.2 - 2018-01-20
 
### Changed
- Allows nested `markerOptions` settings.

## 2.4.1 - 2017-09-11

### Added
- Added support for KML files.
- Added `craft.smartMap.visitor.coords`.
- Added `entry.myAddressField.coords`.
- Added JavaScript function to easily style maps.
- Added JavaScript function to easily refresh maps.
- Added Canadian English translation.
 
### Changed
- Now compatible with Feed Me 2 plugin.
- Made `maptype` and `scale` configurable for static maps.

### Fixed
- Fixed a matrix compatibility bug.

## 2.4.0 - 2016-12-08

### Added
- Added region biasing.
- Added ability to set default position & zoom for "Drag Pin" modal.
- Added British English translation.
 
### Changed
- Improved compatibility with CP Field Links plugin.
- Improved logging.
- Improved error messaging for Google API.
 
### Fixed
- Fixed PHP 7 race condition.
- Fixed dual address bug.
- Prevent geolocation from being triggered within tasks.

## 2.3.6 - 2016-03-21

### Changed
- Improved `craft.smartMap.js` (now true by default)
- Improved error handling in info bubbles.

## 2.3.5 - 2016-03-16

### Added
- Added `craft.smartMap.serverKey` to get Google Server Key.
- Added `craft.smartMap.browserKey` to get Google Browser Key.
- Creating JS objects now returns them.
 
### Changed
- Better JS logging.
 
### Fixed
- Fixed bug which allowed modals to overlap.

## 2.3.4 - 2016-02-09

### Changed
- Improved cURL command for address lookups.

## 2.3.3 - 2016-02-05

### Fixed
- Fixed a bug which allowed extra commas in a formatted address.

## 2.3.2 - 2016-01-10

### Fixed
- Fixed bug which would attempt to draw a marker even if the coordinates were invalid

## 2.3.1 - 2015-12-10

### Fixed
- Supports `.ids()` syntax (with Craft 2.5.2754 and above)
- Fixed pagination bug (with Craft 2.5.2754 and above)
- Fixed missing rawurlencode in Google link
- Fixed url formatting of static map

## 2.3.0 - 2015-12-04

### Added
- REQUIRES CRAFT 2.5
- New Craft 2.5 flourishes (icon, description, link to docs, element index column)
- Maps no longer require "zoom" to be specified, they will use fitBounds to determine the appropriate zoom level
- You can now filter by subfields
- Now compatible with Feed Me plugin (v1.4.0+)
- Now compatible with Import plugin (v0.8.26+)
- Now compatible with Export plugin (v0.5.8+)
- Now compatible with Minimee plugin
- Added craft.smartMap.visitor property to get the visitor's current geolocation data in Twig (if geolocation is enabled)
- Added craft->smartMap->visitor property to get the visitor's current geolocation data in PHP (if geolocation is enabled)
- Added French translation
- Added Dutch translation
 
### Changed
- Better error handling for unsupported `.ids()` usage
 
### Fixed
- Fixed validation bug
- Fixed bug preventing zoom from being set by a dropdown menu

## 2.2.0 - 2015-07-07

### Added
- Full internationalization support!
- Arrangement of the Address subfields is now completely customizable!
- All text is now translatable!
- German language translation.
- Japanese language translation.
- Detects if street number should come before or after street name.
- Added __toString for Address model.
 
### Changed
- BREAKING CHANGE: Reordered parameters of "directionsUrl".
- Switched IP detection to Craft native.
 
### Fixed
- Fixed bug occurring in some address matches.
- Fixed static map marker bug.
- Fixed "Live Preview" bug.

## 2.1.3 - 2015-05-08

### Added
- New "googleMapUrl" method on Address model.
- New "directionsUrl" method on Address model.
 
### Fixed
- Fixed bug preventing multiple maps from being displayed.

## 2.1.2 - 2015-04-20

### Changed
- Compatible with awesome Super Table plugin.

## 2.1.1 - 2015-04-08

### Fixed
- Fixed minor migration bug.
- Fixed console.log error in fieldtype JS.

## 2.1.0 - 2015-04-07

### Added
- Added "format" to address model, to easily output formatted addresses.
- Added "isEmpty" and "hasCoords" to address model, to easily determine if data exists.
- Added ability to insert "smartMap.js" anywhere in the template.
- Added ability to perform an address lookup from the front-end.
 
### Changed
- Retina scaling for static maps.
- JavaScript console.log messages only appear when devMode is enabled.
- Greatly improved UI for Settings page (including clearer geolocation options).
- Split Google API key into "Server Key" & "Browser Key".

### Fixed
- Fixed a bug when rendering a map which includes empty address fields.
- Fixed a validation bug with coordinates data.
- Fixed a JavaScript bug on the debug page.

## 2.0.13 - 2014-12-14

### Changed
- Cleaned up UI in Matrix fields.
 
### Fixed
- Fixed "Undefined index: zipcode" bug.
- Fixed map page & directions links.

## 2.0.12 - 2014-11-12

### Fixed
- Bug fixes: Globals & blank addresses.

## 2.0.11 - 2014-11-10

### Fixed
- Fixed missing settings bug.

## 2.0.10 - 2014-11-08

### Changed
- Geolocation is now optional.

## 2.0.9 - 2014-10-21

### Fixed
- Tiny bug fix.

## 2.0.8 - 2014-10-04

### Fixed
- Partial bug fix for FreeGeoIp.net failure.

## 2.0.7 - 2014-10-04

### Changed
- Console log enhancements.
 
### Fixed
- Bug fix (per Mike Pepper).

## 2.0.6 - 2014-09-09

### Fixed
- Minor bug fix.

## 2.0.5 - 2014-08-26

### Fixed
- Fixed deg2rad bug.
- Fixed minor JS bug.
- Fixed so many bugs.

## 2.0.4 - 2014-08-25

### Changed
- Improved drag & drop pin auto-location.

## 2.0.3 - 2014-08-23

### Fixed
- Fixed distance bug.

## 2.0.2 - 2014-08-23

### Added
- Fully Matrix-compatible.
 
### Fixed
- Squashed bugs.

## 2.0.1 - 2014-08-13

### Changed
- Skip geocoding IP when running through yiic.
 
### Fixed
- Minor bug fixes.

## 2.0.0 - 2014-08-11

### Added
- Major upgrade from v1.2.7.
- Completely reworked UI of address field & related interface.
- Drag & drop map pins.
- Can be linked to a MaxMind account for the most precise location detection accuracy.
- Can be linked to a Google Maps for Business account for more allowed views and higher quality static maps.
 
### Changed
- Vastly expanded customization options.
- Expanded customization via Twig.
- Expanded customization via JavaScript.
- Completely refactored JavaScript.
- Greatly improved automatic location detection.