# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## Next Release - TBD

### Added

- Nothing.

### Changed

- The minimum PHP version requirement has been raised to 8.1.

### Deprecated

- Nothing.

### Removed

- Nothing.

## Fixed

- Nothing.

## 1.1.0 - 2024-01-02

### Added

- Nothing.

### Changed

- The minimum PHP version requirement has been raised to 8.0.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Throw exception when preg_replace in XML serialization returns null in case of invalid utf-8 string passed

## 1.0.2 - 2022-11-25

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Ensure that the subfields element is added to the field array when a MARCXML or
  ISO 2709 field without subfields is unserialized.

## 1.0.1 - 2022-11-18

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Always reset warnings when MarcReader is initialized with new data.

## 1.0.0 - 2022-11-14

Initial extraction of library code from the [VuFind](https://github.com/vufind-org/vufind) project
